<?php

namespace App\Controller;

use App\Entity\Chat;
use App\Entity\Client;
use App\Entity\Fichier;
use App\Entity\Historique;
use App\Entity\Message;
use App\Entity\Tache;
use App\Entity\User;
use App\Form\FichierType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/crm/chat')]
class ChatController extends AbstractController
{

    private $formFactory;

    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
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

    #[Route(path: '/tache/add/{id}/{message}', name: 'addChat', methods: ['POST'])]
    public function addChat(int $id, string $message): JsonResponse
    {
        $repoTache = $this->doctrine->getRepository(Tache::class);
        $repoChat = $this->doctrine->getRepository(Chat::class);

        $manager = $this->doctrine->getManager();
        $tache = $repoTache->findOneBy(['user' => $this->getMaster(), 'id' => $id]);

        $chat = new Chat();
        $chat->setMessage($message);
        $chat->setUser($this->getMaster());
        $chat->setOwner($this->getMaster());
        $chat->setReceiver($this->getMaster());
        $chat->setDate(new \DateTime('NOW'));
        $chat->setIsRead(false);
        $chat->setTache($tache);

        $manager->persist($chat);
        $manager->flush();

        $chats = $repoChat->findBy(['user' => $this->getMaster(), 'tache' => $tache]);

        return $this->json($chats, 200, ['Content-Type' => 'application/json'], ['groups' => 'chats']);
    }

    #[Route(path: '/tache/{id}', name: 'getChat', methods: ['GET'])]
    public function getChat(int $id, Request $request): JsonResponse
    {
        $repoTache = $this->doctrine->getRepository(Tache::class);
        $repoChat = $this->doctrine->getRepository(Chat::class);

        $tache = $repoTache->findOneBy(['user' => $this->getMaster(), 'id' => $id]);

        $chats = $repoChat->findBy(['user' => $this->getMaster(), 'tache' => $tache]);

        return $this->json($chats, 200, ['Content-Type' => 'application/json'], ['groups' => 'chats']);
    }

    #[Route(path: '/del/tache/{id}/{idtache}', name: 'api_del_chat', methods: ['DELETE'])]
    public function delMess(int $id, int $idtache, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoTache = $this->doctrine->getRepository(Tache::class);
        $repoChat = $doctrine->getRepository(Chat::class);
        $manager = $doctrine->getManager();

        $chat = $repoChat->findOneBy(["user" => $this->getMaster(), "id" => $id]);
        $manager->remove($chat);
        $manager->flush();

        $tache = $repoTache->findOneBy(['user' => $this->getMaster(), 'id' => $idtache]);

        $chats = $repoChat->findBy(['user' => $this->getMaster(), 'tache' => $tache]);

        return $this->json($chats, 200, ['Content-Type' => 'application/json'], ['groups' => 'chats']);
    }

    #[Route(path: '/tacher/get', name: 'gtache', methods: ['GET'])]
    public function tachezz()
    {
        $repoChat = $this->doctrine->getRepository(Chat::class);

        $chats = $repoChat->findChataches($this->getMaster());
        return $this->json($chats, 200, ['Content-Type' => 'application/json'], ['groups' => 'chats']);
    }

    #[Route(path: '/del/{idd}/{receiver}/{id}/{idtache}', name: 'del_chat', methods: ['GET'])]
    public function delMessage(int $idd, int $receiver, int $id, int $idtache, ManagerRegistry $doctrine)
    {
        $repoChat = $doctrine->getRepository(Chat::class);
        $manager = $doctrine->getManager();
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoTache = $doctrine->getRepository(Tache::class);

        $chat = $repoChat->findOneBy(["user" => $this->getMaster(), "id" => $idd]);
        $manager->remove($chat);
        $manager->flush();

        if ($idtache == "0") {
            $ownerchat = $repoUser->findOneBy(['id' => $id]);
            $receiverchat = $repoUser->findOneBy(['id' => $receiver]);

            $chata = $repoChat->findChates($this->getMaster(), $ownerchat, $receiverchat);
            $chatb = $repoChat->findChates($this->getMaster(), $receiverchat, $ownerchat);

            $chats = array_merge($chata, $chatb);

        } else {
            $tache = $repoTache->findOneBy(['user' => $this->getMaster(), 'id' => $receiver]);
            $chats = $repoChat->findBy(['user' => $this->getMaster(), 'tache'=>$tache]);
        }



        return $this->json($chats, 200, ['Content-Type' => 'application/json'], ['groups' => 'chats']);
    }

    #[Route(path: '/share/{idmess}/{receiver}', name: 'message_chat_share', methods: ['GET'])]
    public function shareChat(int $idmess, int $receiver, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChat = $doctrine->getRepository(Chat::class);

        $manager = $doctrine->getManager();

        $chatt = $repoChat->findOneBy(["user" => $this->getMaster(), "id" => $idmess]);
        $receiverchat = $repoUser->findOneBy(['id' => $receiver]);

        $chat = new Chat();
        $chat->setMessage($chatt->getMessage());
        $chat->setUser($this->getMaster());
        $chat->setOwner($this->getUser());
        $chat->setReceiver($receiverchat);
        $chat->setDate(new \DateTime('NOW'));
        $chat->setIsRead(false);

        if ($chatt->getFichier()) {
            $fich = $chatt->getFichier();

            $ficher = new Fichier();
            $ficher->setDate(new \DateTime('NOW'));
            $ficher->setUser($this->getMaster());
            $ficher->setTaille($fich->getTaille());
            $ficher->setType("chat");
            $ficher->setCategorie($fich->getCategorie());
            $ficher->setNomfichier($fich->getNomfichier());
            $ficher->setFolde($fich->getFolde());
            $manager->persist($ficher);
            $manager->flush();

            $chat->setFichier($ficher);
        }
        if ($chatt->getTache()) {
            $chat->setTache(null);
        }

        $manager->persist($chat);
        $manager->flush();

        return $this->json(['result' => 'succes'], 200);
    }

    #[Route(path: '/get/{receiver}/{id}', name: 'getChates', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function getChates(int $id, int $receiver): JsonResponse
    {
        // LES REPOSITORIES
        $repoChat = $this->doctrine->getRepository(Chat::class);
        $repoUser = $this->doctrine->getRepository(User::class);

        $ownerchat = $repoUser->findOneBy(['id' => $id]);
        $receiverchat = $repoUser->findOneBy(['id' => $receiver]);

        $chata = $repoChat->findChates($this->getMaster(), $ownerchat, $receiverchat);
        $chatb = $repoChat->findChates($this->getMaster(), $receiverchat, $ownerchat);

        $chats = array_merge($chata, $chatb);


        return $this->json($chats, 200, ['Content-Type' => 'application/json'], ['groups' => 'chats']);
    }

    #[Route(path: '/tache/get/{id}', name: 'getTacheChates', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function getTacheChates(int $id): JsonResponse
    {
        // LES REPOSITORIES
        $repoChat = $this->doctrine->getRepository(Chat::class);
        $repoTache = $this->doctrine->getRepository(Tache::class);

        $tache = $repoTache->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $chats = $repoChat->findBy(['user' => $this->getMaster(), 'tache' => $tache]);

        return $this->json($chats, 200, ['Content-Type' => 'application/json'], ['groups' => 'chats']);
    }


    #[Route('/', name: 'chatter')]
    public function index(): Response
    {
        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        $fich = new Fichier();
        $fich->setUser($this->getMaster());
        $fich->setDate(new \DateTime('NOW'));

        $formUploada = $this->formFactory->createNamed(
            '',
            FichierType::class,
            $fich, [
                'user' => $this->getMaster(),
                'type' => 'chat'
            ]
        );


        $repoClient = $this->doctrine->getRepository(Client::class);
        return $this->render('content/chat.html.twig', [
            'controller_name' => 'ChatController',
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'formUploada' => $formUploada->createView(),
            'history' => $historiques
        ]);
    }


}
