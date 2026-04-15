<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Contact;
use App\Entity\Corbeille;
use App\Entity\Historique;
use App\Entity\Intervenant;
use App\Entity\Chantier;
use App\Entity\User;
use App\Form\ChantierType;
use App\Form\ContactType;
use App\Form\IntervenantType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ContactController
 * @package App\Controller
 */
#[Route(path: '/crm/contact')]
class ContactController extends AbstractController
{

    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory) {
        $this->formFactory = $formFactory;
    }
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
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpException(400, 'Invalid json');
        }
        return $data;
    }

    #[Route(path: '/get/{id}', name: 'getcontact', methods: ['GET'])]
    public function getContact(int $id): JsonResponse
    {

        // LES REPOSITORIES
        $repoContact = $this->doctrine->getRepository(Contact::class);
        $contact = $repoContact->findBy(['id' => $id, 'user' => $this->getMaster()]);
        return $this->json($contact, 200, ['Content-Type' => 'application/json'], ['groups' => 'contact']);
    }

    #[Route(path: '/add/{id}', name: 'addContact', methods: ['POST'])]
    public function add($id, Request $request): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $manager = $this->doctrine->getManager();

        $chantier = $repoChantier->findOneBy(['id'=>$id, 'user'=>$this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $contact = new contact();
        $contact->setDobyuser($this->getUser());
        $contact->setUser($this->getMaster());
        $contact->setClient($chantier->getClient());
        $json = $this->getJson($request);
        $formContact = $this->formFactory->createNamed('', ContactType::class, $contact);

        $formContact->submit($json);

        $formContact->handleRequest($request);
        if ($formContact->isSubmitted() && $formContact->isValid()) {
            $manager->persist($contact);
            $manager->flush();
            return $this->json(['result' => 'Contact crée'], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);

    }


    #[Route(path: '/adde', name: 'addeContact', methods: ['POST'])]
    public function adde(Request $request): JsonResponse
    {

        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();
        $repoClient = $this->doctrine->getRepository(Client::class);

        $contact = new contact();
        $contact->setDobyuser($this->getUser());
        $contact->setUser($this->getMaster());
        $json = $this->getJson($request);
        $formContact = $this->formFactory->createNamed('',ContactType::class, $contact);
        $formContact->submit($json);
        $formContact->handleRequest($request);
        if ($this->isCsrfTokenValid('addContactToken', $json['token'])) {
            $client = $repoClient->findOneBy(['id' => $json['client'], 'user' => $this->getMaster()]);
            $contact->setClient($client);
            $manager->persist($contact);
            $manager->flush();
            $clients = $repoClient->findBy(['user' => $this->getMaster()]);
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }


    #[Route(path: '/update/{id}/{lieu}', name: 'updateContact', methods: ['PUT'])]
    public function update($id, $lieu, Request $request): JsonResponse
    {

        $repoContact = $this->doctrine->getRepository(Contact::class);
        $manager = $this->doctrine->getManager();
        $repoClient = $this->doctrine->getRepository(Client::class);

        $contact = $repoContact->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$contact) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $json = $this->getJson($request);
        if ($lieu === "chantiers") {
            $formContact = $this->formFactory->createNamed('', ContactType::class, $contact);
        } else {
            $formContact = $this->formFactory->createNamed('', ContactType::class, $contact);
        }

        $formContact->submit($json);

        $formContact->handleRequest($request);
        if ($this->isCsrfTokenValid('addContactToken', $json['token'])) {
            $client = $repoClient->findOneBy(['id' => $json['client']]);
            $contact->setClient($client);
            $manager->persist($contact);
            $manager->flush();
            $clients = $repoClient->findClients($this->getMaster());
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);
        }
        return $this->json(['result' => 'Erreur'], 404);

    }


    // SUPPRIMER UN CONTACT
    /**
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    #[Route(path: '/del/{id}', name: 'delContact', methods: ['DELETE'])]
    public function delContact($id, Request $request): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoContact = $this->doctrine->getRepository(Contact::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $contact = $repoContact->findOneBy(['id'=>$id, 'user'=>$this->getMaster()]);
        if (!$contact) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $cor = $repoCorbeille->findOneBy(['designation' =>$id, 'master' => $this->getMaster(), 'type'=>'6']);

        if(!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($contact->getId());
            $corbeille->setMaster($this->getMaster());
            $corbeille->setDelby($this->getUser());
            $corbeille->setEtat('faible');
            $corbeille->setType('3');
            $manager->persist($corbeille);
            $manager->flush();
            $contact->setCorbeille($corbeille);
            $manager->persist($contact);
            $manager->flush();
        }
        $repoClient = $this->doctrine->getRepository(Client::class);
        $clients = $repoClient->findClients($this->getMaster());
        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);
    }


    #[Route(path: '/', name: 'contactclient')]
    #[Route(path: '/{id}', name: 'editcontactor', requirements: ['id' => '\d+'])]
    public function editcontact(int $id = null)
    {
        date_default_timezone_set('Africa/Abidjan');
        $repoContact = $this->doctrine->getRepository(Contact::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoClient = $this->doctrine->getRepository(Client::class);

        // RECUPERE LE CONTACT A MODIFIER OU CRÉE UN AUTRE
        $contact = $repoContact->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$contact) {
            $contact = new Contact();
        }
        $formContact = $this->formFactory->createNamed('', ContactType::class, $contact);

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        $clients = $repoClient->findBy(['user' => $this->getMaster()], ['nomclient' => 'ASC']);

        return $this->render('content/contact.html.twig', [
            'title' => 'Chantiers | Carlinbleu',
            'master' => $this->getMaster(),
            'estmaster' => $this->getMaster() === $this->getUser(),
            'page' => 'comptable',
            'idchantier' => $id,
            'jsonclients' => true,
            'history' => $historiques,
            'clients' => $clients,
            'formContact' => $formContact->createView(),
        ]);
    }
}
