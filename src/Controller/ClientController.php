<?php

namespace App\Controller;

use App\Entity\Carlinbleu;
use App\Entity\Client;
use App\Entity\Compte;
use App\Entity\Contact;
use App\Entity\Corbeille;
use App\Entity\Devis;
use App\Entity\Chantier;
use App\Entity\Historique;
use App\Entity\Relever;
use App\Entity\User;
use App\Entity\Valider;
use App\Form\ClientType;
use App\Form\ContactType;
use App\Form\ChantierType;
use App\Form\ReleverType;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use JsonException;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;


#[Route(path: '/crm/client')]
class ClientController extends AbstractController
{

    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory) {
        $this->formFactory = $formFactory;
    }

    // RECUPERER LE MASTER USER
    public function getMaster()
    {
        // REPOSITORIES
        $repoUser = $this->doctrine->getRepository(User::class);
        //GESTION DE COMPTE
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);
        // VERIFIE SI COMPTE MASTER
        if ($use->getCompte() === null) {
            $master = $use;
        } else {
            $master = $repoUser->findOneBy(['id' => $use->getCompte()]);
        }
        return $master;
    }

    private function getJson(Request $request)
    {
        $data = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpException(400, 'Invalid json');
        }
        return $data;
    }

    #[Route(path: '/geet', name: 'geteee')]
    public function getClientee()
    {
        $repoClient = $this->doctrine->getRepository(Client::class);

        $clients = $repoClient->findBy(['user' => $this->getMaster(), 'type' => null]);
        $result = array('data'=> $clients);
        return $this->json($result, 200, ['Content-Type' => 'application/json'], ['groups' => 'ddcli']);
    }

    #[Route(path: '/get/{id}', name: 'getclientbyid', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function getClient(int $id)
    {
        $repoClient = $this->doctrine->getRepository(Client::class);

        $client = $repoClient->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$client) {return $this->redirectToRoute('logout');}
        return $this->json($client, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);
    }

    #[Route(path: '/add', name: 'addClient', methods: ['POST'])]
    public function addClient(Request $request): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();
        $repoClient = $this->doctrine->getRepository(Client::class);

        $repoCompte = $this->doctrine->getRepository(Compte::class);
        $compte = $repoCompte->findOneBy(['user' => $this->getMaster()]);

        $client = new Client();
        $client->setUser($this->getMaster());
        $client->setDobyuser($this->getUser());
        $json = $this->getJson($request);
        $formClient = $this->formFactory->createNamed('', ClientType::class, $client);
        $formClient->submit($json);
        $formClient->handleRequest($request);
        if ($formClient->isSubmitted() && $formClient->isValid()) {
            $der = $repoClient->findBy(['user' => $this->getMaster()], ['id' => 'DESC'], 1);
            if ($der) {
                $rang = $der[0]->getRang() + 1;
                $client->setRang($rang);
                $client->setCode($compte->getCoClient().$rang);
            } else {
                $client->setRang(1);
                $client->setCode(($compte->getCoClient().'1'));
            }
            $manager->persist($client);
            $manager->flush();
            $repoClient = $this->doctrine->getRepository(Client::class);
            $clients = $repoClient->findClients($this->getMaster());
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/update/{id}', name: 'updateClient', requirements: ['id' => '\d+'], methods: ['PUT'])]
    public function updateClient($id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoClient = $this->doctrine->getRepository(Client::class);

        $client = $repoClient->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$client) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $json = $this->getJson($request);
        $formClient = $this->formFactory->createNamed('', ClientType::class, $client);
        $formClient->submit($json);
        $formClient->handleRequest($request);
        if ($formClient->isSubmitted() && $formClient->isValid()) {
            $manager->persist($client);
            $manager->flush();
            $repoClient = $this->doctrine->getRepository(Client::class);
            $clients = $repoClient->findClients($this->getMaster());
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/delete/{id}', name: 'delClient', requirements: ['id' => '\d+'], methods: ['DELETE'])]
    public function delclient(int $id, Request $request): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $client = $repoClient->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$client) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $cor = $repoCorbeille->findOneBy(['designation' => $client->getId(), 'master' => $this->getMaster(), 'type' => 1]);
        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($client->getId());
            $corbeille->setMaster($this->getMaster());
            $corbeille->setDelby($this->getUser());
            $corbeille->setEtat('faible');
            $corbeille->setType('1');
            $manager->persist($corbeille);
            $manager->flush();
            $client->setCorbeille($corbeille);
            $manager->persist($client);
            $manager->flush();

            $repoClient = $this->doctrine->getRepository(Client::class);
            $clients = $repoClient->findClients($this->getMaster());
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);

        }
        return $this->json(['error' => 'Erreur'], 404);
    }

    #[Route(path: '/restaurer/{id}', name: 'restaureClient', methods: ['GET'])]
    public function restaureClient($id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $client = $repoClient->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$client) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $corbeille = $repoCorbeille->findOneBy(['designation' => $client->getId(), 'type' => '1']);
        if ($corbeille) {
            $client->setCorbeille(null);
            $manager->persist($client);
            $manager->flush();
            $manager->remove($corbeille);
            $manager->flush();
            return $this->json(['result' => 'Client restauré'], 200);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/deldefinitive/{id}', name: 'deldefClient', methods: ['DELETE'])]
    public function deldefclient($id, Request $request): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $client = $repoClient->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$client) { return $this->json(['result' => 'Erreur'], 404); }

        $cor = $repoCorbeille->findOneBy(['designation' => $client->getId(), 'master' => $this->getMaster(), 'type' => 1]);
        if ($cor && $this->getUser() === $this->getMaster()) {
            $manager->remove($cor);
            $manager->flush();
            return $this->json(['result' => 'Client suprimé'], 204);
        }
        return $this->json(['error' => 'Erreur'], 404);
    }

    #[Route(path: '/{id}', name: 'client', requirements: ['id' => '\d+'])]
    public function index(int $id = null, int $idcontact = null, int $idchantier = null, Request $request)
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // GESTION DE COMPTE
        date_default_timezone_set('Africa/Abidjan');
        $this->denyAccessUnlessGranted('ROLE_COMPTA');

        // LISTE DES REPOS ET LA DATE DU JOUR
        $repoContact = $this->doctrine->getRepository(Contact::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        // OBTIENT LE CLIENT ET TOUS LES CONTACTS
        $client = $repoClient->findOneby(['id' => $id, 'user' => $this->getMaster()]);
        if (!$client) {
            return $this->redirectToRoute('logout');
        }

        $allcontact = $repoContact->findBy(['client' => $client]);


        //FORM CLIENT
        $formClient = $this->formFactory->createNamed('', ClientType::class, $client);

        // OBTIENT LE CONTACT OU CREE UN AUTRE
        if ($idcontact == null) {
            $contact = new Contact();
            $contact->setClient($client);
            $contact->setUser($this->getMaster());
        } else {
            $contact = $repoContact->findOneBy(['id' => $idcontact, 'user' => $this->getMaster()]);
        }

        // FORMULAIRE CONTACT
        $forme = $this->createForm(ContactType::class, $contact);
        $forme->handleRequest($request);
        if (isset($request->request->get('contact')['savecontact'])) {
            if ($forme->isSubmitted() && $forme->isValid()) {
                $manager->persist($contact);
                $manager->flush();
                return $this->redirectToRoute('client', ['id' => $client->getId()]);
            }
        }

        //FORMULAIRE AJOUTER UN REGLEMENT
        $releve = new Relever();
        $releve->setDate(new \DateTime('NOW'));
        $releve->setType(3);
        $formeRegle = $this->formFactory->createNamed('', ReleverType::class, $releve, [
            'client' => $client,
            'type' => 'client'
        ]);


        // OBTIENT LE CONTACT OU CREE UN AUTRE
        $chantiert = $repoChantier->findOneBy(
            ['id' => $idchantier, 'user' => $this->getMaster()]
        );
        if ($chantiert) {
            $chantier = $chantiert;
        } else {
            $chantier = new chantier();
            $idchantier = (string)random_int(0, 999999);
            $chantier->setIdchantier($idchantier);
            $chantier->setUser($this->getMaster());
            $chantier->setDcrea(new \DateTime('NOW'));
            $chantier->setClient($client);

        }
        //FORMULAIRE AJOUTER UN CHANTIER

        $formp = $this->createForm(ChantierType::class, $chantier, [
            'type' => 'client'
        ]);
        $formp->handleRequest($request);
        if (isset($request->request->get('chantier')['savechantier'])) {
            if ($formp->isSubmitted() && $formp->isValid()) {
                if (!$chantier) {
                    $chantier->setDcrea(new \DateTime('NOW'));
                }
                $manager->persist($chantier);
                $manager->flush();
                return $this->redirectToRoute('client', ['id' => $client->getId()]);
            }
        }

        $this->denyAccessUnlessGranted('ROLE_COMPTA');

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        return $this->render('content/client.html.twig', [
            'controller_name' => 'ClientController',
            'title' => $client->getNomClient(),
            'client' => $client,
            'formClient' => $formClient->createView(),
            'formContact' => $forme->createView(),
            'formChantier' => $formp->createView(),
            'editCont' => $idcontact !== null,
            'contacts' => $allcontact,
            'editMode' => $chantier->getId() !== null,
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'formeRegle' => $formeRegle->createView(),
            'history' => $historiques
        ]);
    }
}
