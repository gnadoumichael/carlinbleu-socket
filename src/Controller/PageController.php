<?php

namespace App\Controller;

use App\Entity\Chantier;
use App\Entity\Chat;
use App\Entity\Client;
use App\Entity\Contact;
use App\Entity\Fichier;
use App\Entity\Historique;
use App\Entity\Tache;
use App\Entity\Todo;
use App\Entity\User;
use App\Form\ClientType;
use App\Form\TodoType;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\FileUploaders;


#[Route('/crm/start')]
class PageController extends AbstractController
{

    private $formFactory;

    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }
    private function getJson(Request $request)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $data = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpException(400, 'Invalid json');
        }
        return $data;
    }
    public function getMaster(): ?object
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);

        if ($use->getCompte() === null) {
            $master = $use;
        } else {
            $master = $repoUser->findOneBy(['id' => $use->getCompte()]);
        }
        return $master;
    }

    #[Route(path: '/todo/get/{id}', name: 'getTodo', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function getTodo($id, Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoTodo = $this->doctrine->getRepository(Todo::class);
        $todo = $repoTodo->findOneBy(['user' => $this->getMaster(), 'id' => $id]);
        if (!$todo) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        return $this->json($todo, 200, ['Content-Type' => 'application/json'], ['groups' => 'todo']);
    }

    #[Route(path: '/chats/delete/{id}/{idto}', name: 'deleteChats', requirements: ['id' => '\d+', 'idto' => '\d+'], methods: ['DELETE'])]
    public function delChats(int $id, int $idto): JsonResponse
    {
        // LES REPOSITORIES
        $repoChat = $this->doctrine->getRepository(Chat::class);
        $repoTodo = $this->doctrine->getRepository(Todo::class);

        $chat = $repoChat->findOneBy(['user' => $this->getMaster(), 'id' => $id]);
        if (!$chat) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $todo = $repoTodo->findOneBy(['user' => $this->getMaster(), 'id' => $idto]);
        $manager = $this->doctrine->getManager();
        $manager->remove($chat);
        $manager->flush();

        $chats = $repoChat->findBy(['user' => $this->getMaster(), 'todo' => $todo]);
        return $this->json($chats, 200, ['Content-Type' => 'application/json'], ['groups' => 'chats'], ['date' => 'ASC']);
    }

    #[Route(path: '/chats/get/{id}', name: 'getChats', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function getChats($id): JsonResponse
    {
        // LES REPOSITORIES
        $repoChat = $this->doctrine->getRepository(Chat::class);
        $repoTodo = $this->doctrine->getRepository(Todo::class);
        $todo = $repoTodo->findOneBy(['user' => $this->getMaster(), 'id' => $id]);
        if (!$todo) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $chats = $repoChat->findBy(['user' => $this->getMaster(), 'todo' => $todo]);
        return $this->json($chats, 200, ['Content-Type' => 'application/json'], ['groups' => 'chats'], ['date' => 'ASC']);
    }

    #[Route(path: '/users/get', name: 'getUserss', methods: ['GET'])]
    public function getUserss(Request $request): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $comptes = $repoUser->chUsers($this->getMaster());
        return $this->json($comptes, 200, ['Content-Type' => 'application/json'], ['groups' => 'users']);
    }

    #[Route(path: '/gets', name: 'getTodos', methods: ['GET'])]
    public function getTodos(): JsonResponse
    {
        // LES REPOSITORIES
        $repoTodo = $this->doctrine->getRepository(Todo::class);
        $todos = $repoTodo->chTodos(['user' => $this->getUser()]);
        return $this->json($todos, 200, ['Content-Type' => 'application/json'], ['groups' => 'todo']);
    }

    #[Route(path: '/todo/add', name: 'addTodo', methods: ['POST'])]
    public function addTodo(Request $request, FileUploaders $uploaders): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();
        $repoUser = $this->doctrine->getRepository(User::class);
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);

        $submittedToken = $request->request->get('token');

        if ($this->isCsrfTokenValid('addTodoToken', $submittedToken)) {
            $todo = new todo();
            $todo->setUser($this->getMaster());

            $formTodo = $this->formFactory->createNamed('',
                TodoType::class, $todo);

            $formTodo->handleRequest($request);
            if ($formTodo->isSubmitted()) {
                $dd = new DateTime(str_replace('/','-', $request->request->get('ddtodo')));
                $dd = $dd->format('Y-m-d H:i');
                $todo->setDate($dd);

                if ($request->request->get("usetodo") !== null) {
                    $userr = $request->request->get("usetodo");
                    if ($userr == "tout") {
                        $comptes = $repoUser->chUsers($this->getMaster());
                        foreach ($comptes as $compte) {
                            $todo->setOwner($compte);
                            $todo->setSender($this->getUser());
                            $manager->persist($todo);
                            $manager->flush();
                        }
                    } else {
                        if (is_countable($userr)) {
                            for ($i = 0, $iMax = count($userr); $i < $iMax; $i++) {
                                $useer = $repoUser->findOneBy(['id' => $userr[$i]]);
                                $todo->setOwner($useer);
                                $todo->setSender($this->getUser());
                                $manager->persist($todo);
                                $manager->flush();
                            }
                        } else {
                            $useer = $repoUser->findOneBy(['id' => $request->request->get("usetodo")]);
                            $todo->setOwner($useer);
                            $todo->setSender($this->getUser());
                            $manager->persist($todo);
                            $manager->flush();
                        }
                    }

                } else {
                    $todo->setOwner($this->getUser());
                    $manager->persist($todo);
                    $manager->flush();
                }

                $files = $formTodo['fichiers']->getData();
                foreach ($files as $file) {
                    if ($file) {
                        $dir = $use->getId() . $use->getNom();
                        $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
                        if (!mkdir($concurrentDirectory = 'coffre/' . $dir . '/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
                            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
                        }

                        $ficher = new Fichier();
                        $ficher->setDate(new \DateTime('NOW'));
                        $ficher->setType("todo");
                        $ficher->setUser($this->getMaster());
                        $ficher->setFolde($concurrentDirectory);
                        $tail = $uploaders->getTaille($file);
                        $ficher->setTaille($tail);
                        $file_name = $uploaders->uploave($file, $concurrentDirectory);
                        $ficher->setNomfichier($file_name);
                        $ficher->setCategorie("agenda");
                        $todo->addFichier($ficher);
                        $manager->persist($ficher);
                        $manager->persist($todo);
                        $manager->flush();
                    }
                }

                $repoTodo = $this->doctrine->getRepository(Todo::class);
                $todos = $repoTodo->chTodos($this->getUser());
                return $this->json($todos, 200, ['Content-Type' => 'application/json'], ['groups' => 'todo']);
            }
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/todo/update/{id}', name: 'updateTodo', requirements: ['id' => '\d+'], methods: ['PUT'])]
    public function update(int $id, Request $request , FileUploaders $uploaders): JsonResponse
    {

        // LES REPOSITORIES
        $repoTodo = $this->doctrine->getRepository(Todo::class);
        $repoUser = $this->doctrine->getRepository(User::class);
        $manager = $this->doctrine->getManager();
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);


        $todo = $repoTodo->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$todo) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $submittedToken = $request->request->get('token');

        if ($this->isCsrfTokenValid('addTodoToken', $submittedToken)) {


            $formTodo = $this->formFactory->createNamed('', TodoType::class, $todo);
            $formTodo->handleRequest($request);
            if ($formTodo->isSubmitted()) {

                $dd = new DateTime(str_replace('/', '-', $request->request->get('date')));
                $dd = $dd->format('Y-m-d H:i');
                $todo->setDate($dd);

                if ($request->request->get("usetodo") !== null) {
                    $userr = $request->request->get("usetodo");
                    if ($userr == "tout") {
                        $comptes = $repoUser->chUsers($this->getMaster());
                        foreach ($comptes as $compte) {
                            $todo->setOwner($compte);
                            $todo->setSender($this->getUser());
                            $manager->persist($todo);
                            $manager->flush();
                        }
                    } else {
                        if (is_countable($userr)) {
                            for ($i = 0, $iMax = count($userr); $i < $iMax; $i++) {
                                $useer = $repoUser->findOneBy(['id' => $userr[$i]]);
                                $todo->setOwner($useer);
                                $todo->setSender($this->getUser());
                                $manager->persist($todo);
                                $manager->flush();
                            }
                        } else {
                            $useer = $repoUser->findOneBy(['id' => $request->request->get("usetodo")]);
                            $todo->setOwner($useer);
                            $todo->setSender($this->getUser());
                            $manager->persist($todo);
                            $manager->flush();
                        }
                    }

                } else {
                    $todo->setOwner($this->getUser());
                    $manager->persist($todo);
                    $manager->flush();
                }


                $files = $formTodo['fichiers']->getData();
                foreach ($files as $file) {
                    if ($file) {
                        $dir = $use->getId() . $use->getNom();
                        $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
                        if (!mkdir($concurrentDirectory = 'coffre/' . $dir . '/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
                            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
                        }

                        $ficher = new Fichier();
                        $ficher->setDate(new \DateTime('NOW'));
                        $ficher->setType("todo");
                        $ficher->setUser($this->getMaster());
                        $ficher->setFolde($concurrentDirectory);
                        $tail = $uploaders->getTaille($file);
                        $ficher->setTaille($tail);
                        $file_name = $uploaders->uploave($file, $concurrentDirectory);
                        $ficher->setNomfichier($file_name);
                        $ficher->setCategorie("agenda");
                        $todo->addFichier($ficher);
                        $manager->persist($ficher);
                        $manager->persist($todo);
                        $manager->flush();
                    }
                }

                $repoTodo = $this->doctrine->getRepository(Todo::class);
                $todos = $repoTodo->chTodos($this->getUser());
                return $this->json($todos, 200, ['Content-Type' => 'application/json'], ['groups' => 'todo']);
            }
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/todo/delete/{id}', name: 'delTodo', requirements: ['id' => '\d+'], methods: ['DELETE'])]
    public function delTodo($id): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoTodo = $this->doctrine->getRepository(Todo::class);

        $todo = $repoTodo->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if ($todo) {
            $fichiers = $todo->getFichiers();
            $chats = $todo->getTodoChats();

            if ($chats) {
                foreach ($chats as $chat) {
                    $manager->remove($chat);
                    $manager->flush();
                }
            }

            if ($fichiers) {
                foreach ($fichiers as $fichier) {
                    $folde = $fichier->getfolde();
                    $file = $fichier->getfolde() . '/' . $fichier->getNomfichier();
                    unlink($file);
                    rmdir($folde);
                    $manager->remove($fichier);
                    $manager->flush();
                }
            }

            $manager->remove($todo);
            $manager->flush();

            $repoTodo = $this->doctrine->getRepository(Todo::class);
            $todos = $repoTodo->chTodos($this->getUser());

            return $this->json($todos, 200, ['Content-Type' => 'application/json'], ['groups' => 'todo']);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/chat/add/{mess}/{todoid}/{recid}', name: 'addchat', requirements: ['todoid' => '\d+', 'recid' => '\d+'], methods: ['POST'])]
    public function addChatAgenda(string $mess, int $todoid, int $recid, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoTodo = $this->doctrine->getRepository(Todo::class);
        $repoChat = $this->doctrine->getRepository(Chat::class);
        $repoUser = $this->doctrine->getRepository(User::class);

        $todo = $repoTodo->findOneBy(['id' => $todoid, 'user' => $this->getMaster()]);
        $receiver = $repoUser->findOneBy(['id' => $recid]);

        $chat = new Chat();
        $chat->setMessage($mess);
        $chat->setUser($this->getMaster());
        $chat->setOwner($this->getUser());
        $chat->setReceiver($receiver);
        $chat->setDate(new \DateTime('NOW'));
        $chat->setTodo($todo);
        $chat->setIsRead(false);

        $manager->persist($chat);
        $manager->flush();

        $chats = $repoChat->findBy(['user' => $this->getMaster(), 'todo' => $todo]);
        return $this->json($chats, 200, ['Content-Type' => 'application/json'], ['groups' => 'chats'], ['date' => 'ASC']);

    }

    #[Route(path: '/chat/adder/{recid}/{idtache}/{idreply}', name: 'addchatpasagenda', requirements: ['recid' => '\d+'], methods: ['POST'])]
    public function addChat(Request $request, int $recid, int $idtache, int $idreply): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoChat = $this->doctrine->getRepository(Chat::class);
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoTache = $this->doctrine->getRepository(Tache::class);

        if ($idtache == "0") {
            $receiver = $repoUser->findOneBy(['id' => $recid]);
            $json = $this->getJson($request);
            $chat = new Chat();
            $chat->setMessage($json["x"]);
            $chat->setUser($this->getMaster());
            $chat->setOwner($this->getUser());
            $chat->setReceiver($receiver);
            $chat->setDate(new \DateTime('NOW'));
            $chat->setIsRead(false);
            if ($idreply != "0") {
                $cha = $repoChat->findOneBy(["id" => $idreply, "user" => $this->getMaster()]);
                $chat->setReplyeChat($cha);
            }
            $manager->persist($chat);
            $manager->flush();
            $chats = $repoChat->findBy(['user' => $this->getMaster()]);

        } else {
            $json = $this->getJson($request);
            $chat = new Chat();
            $chat->setMessage($json["x"]);
            $chat->setUser($this->getMaster());
            $chat->setOwner($this->getUser());
            $chat->setReceiver($this->getUser());
            $chat->setDate(new \DateTime('NOW'));
            $chat->setIsRead(false);
            $tache = $repoTache->findOneBy(['user' => $this->getMaster(), 'id' => $recid]);
            $chat->setTache($tache);
            if ($idreply != "0") {
                $cha = $repoChat->findOneBy(["id" => $idreply, "user" => $this->getMaster()]);
                $chat->setReplyeChat($cha);
            }
            $manager->persist($chat);
            $manager->flush();
            $chats = $repoChat->findBy(['user' => $this->getMaster(), 'tache' => $tache]);

        }

        return $this->json($chats, 200, ['Content-Type' => 'application/json'], ['groups' => 'chats']);

    }

    #[Route(path: '/', name: 'page')]
    #[Route(path: '/client/{idclient}', name: 'editclientST', requirements: ['idclient' => '\d+'])]
    #[Route(path: '/chantier/{idchantier}', name: 'editechantierST', requirements: ['idchantier' => '\d+'])]
    #[Route(path: '/contact/{idcontact}', name: 'editerContactST', requirements: ['idcontact' => '\d+'])]
    #[Route(path: '/todo/{idtodo}', name: 'editTodo', requirements: ['idtodo' => '\d+'])]
    public function page(int $idclient = null, int $idchantier = null, int $idcontact = null, int $idtodo = null): Response
    {
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoContact = $this->doctrine->getRepository(Contact::class);
        $repoTodo = $this->doctrine->getRepository(Todo::class);
        $repoUser = $this->doctrine->getRepository(User::class);

        $client = $repoClient->findOneBy(['id' => $idclient, 'user' => $this->getMaster()]);
        $chantier = $repoChantier->findOneBy(['id' => $idchantier, 'user' => $this->getMaster()]);
        $contact = $repoContact->findOneBy(['id' => $idcontact, 'user' => $this->getMaster()]);


        if (!$client) {
            $client = new Client();
            $client->setUser($this->getMaster());
            $client->setDobyuser($this->getUser());
        }
        $formClient = $this->formFactory->createNamed('', ClientType::class, $client);

        $monday = strtotime("last monday");
        $monday = date('w', $monday) == date('w') ? $monday + 7 * 86400 : $monday;
        $sunday = strtotime(date("Y-m-d", $monday) . " +6 days");

        $mon = date("Y-m-d", $monday);
        $tue = date('Y-m-d', strtotime("+1 day", strtotime($mon)));
        $wes = date('Y-m-d', strtotime("+1 day", strtotime($tue)));
        $thu = date('Y-m-d', strtotime("+1 day", strtotime($wes)));
        $fri = date('Y-m-d', strtotime("+1 day", strtotime($thu)));
        $sat = date('Y-m-d', strtotime("+1 day", strtotime($fri)));
        $sun = date('Y-m-d', strtotime("+1 day", strtotime($sat)));

        $mon2 = date('Y-m-d', strtotime("+1 day", strtotime($sun)));
        $tue2 = date('Y-m-d', strtotime("+1 day", strtotime($mon2)));
        $wes2 = date('Y-m-d', strtotime("+1 day", strtotime($tue2)));
        $thu2 = date('Y-m-d', strtotime("+1 day", strtotime($wes2)));
        $fri2 = date('Y-m-d', strtotime("+1 day", strtotime($thu2)));
        $sat2 = date('Y-m-d', strtotime("+1 day", strtotime($fri2)));
        $sun2 = date('Y-m-d', strtotime("+1 day", strtotime($sat2)));


        $taday = '';
        if (strtotime(date("Y/m/d")) === strtotime($mon)) {
            $taday = $mon;
        }
        if (strtotime(date("Y/m/d")) === strtotime($tue)) {
            $taday = $tue;
        }
        if (strtotime(date("Y/m/d")) === strtotime($wes)) {
            $taday = $wes;
        }
        if (strtotime(date("Y/m/d")) === strtotime($thu)) {
            $taday = $thu;
        }
        if (strtotime(date("Y/m/d")) === strtotime($fri)) {
            $taday = $fri;
        }
        if (strtotime(date("Y/m/d")) === strtotime($sat)) {
            $taday = $sat;
        }
        if (strtotime(date("Y/m/d")) === strtotime($sun)) {
            $taday = $sun;
        }

        $todo = $repoTodo->findOneBy(['id' => $idtodo, 'user' => $this->getMaster()]);

        if (!$todo) {
            $todo = new Todo();
            $todo->setUser($this->getMaster());
            $todo->setOwner($this->getUser());
        }

        $formTodo = $this->formFactory->createNamed('', todoType::class, $todo);
        $comptes = $repoUser->chUsers($this->getMaster());

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        return $this->render('content/page.html.twig', [
            'controller_name' => 'PageController',
            'page' => 'page',
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'formClient' => $formClient->createView(),
            'formTodo' => $formTodo->createView(),
            'client' => $client,
            'comptes' => $comptes,
            'mon' => $mon,
            'tue' => $tue,
            'wes' => $wes,
            'thu' => $thu,
            'fri' => $fri,
            'sat' => $sat,
            'sun' => $sun,
            'mon2' => $mon2,
            'tue2' => $tue2,
            'wes2' => $wes2,
            'thu2' => $thu2,
            'fri2' => $fri2,
            'sat2' => $sat2,
            'sun2' => $sun2,
            'taday' => $taday,
            'dateTodo' => $todo->getDate(),
            'idtodo' => $idtodo,
            'todei' => date('Y-m-d'),
            'history' => $historiques
        ]);
    }
}
