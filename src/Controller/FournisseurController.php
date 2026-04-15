<?php

namespace App\Controller;

use App\Entity\Alerte;
use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Client;
use App\Entity\Compte;
use App\Entity\Corbeille;
use App\Entity\Decompte;
use App\Entity\Devis;
use App\Entity\Facture;
use App\Entity\Forme;
use App\Entity\Fournisseur;
use App\Entity\Historique;
use App\Entity\Intervenant;
use App\Entity\Chantier;
use App\Entity\Personnel;
use App\Entity\Relever;
use App\Entity\User;
use App\Form\BonType;
use App\Form\CaisseType;
use App\Form\ChantierType;
use App\Form\ClientType;
use App\Form\CompteType;
use App\Form\DecompteType;
use App\Form\DevisType;
use App\Form\FactureType;
use App\Form\FournisseurType;
use App\Form\IntervenantType;
use App\Form\PersonnelType;
use App\Form\ReleverType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;


#[Route(path: '/crm/fournisseur')]
class FournisseurController extends AbstractController
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

    #[Route(path: '/add/{type}', name: 'addFournisseur', methods: ['POST'])]
    public function add(int $type , Request $request): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();

        $fournisseur = new Fournisseur();
        $fournisseur->setUser($this->getMaster());
        $json = $this->getJson($request);

        $formfourn  = $this->formFactory->createNamed('',FournisseurType::class,$fournisseur,
            [
                'type' => 'article'
            ]);

        $formfourn->submit($json);
        $formfourn->handleRequest($request);
        if ($formfourn->isSubmitted() && $formfourn->isValid()) {
            $fournisseur->setType($type);
            $manager->persist($fournisseur);
            $manager->flush();
            return $this->json(['result' => 'Fournisseur crée'], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/presta/add/{type}', name: 'addPresta', methods: ['POST'])]
    public function addPresta(int $type , Request $request): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();

        $fournisseur = new Fournisseur();
        $fournisseur->setUser($this->getMaster());
        $json = $this->getJson($request);

        $formfourn  = $this->formFactory->createNamed('',FournisseurType::class,$fournisseur,
            [
                'type' => 'presta'
            ]);

        $formfourn->submit($json);
        $formfourn->handleRequest($request);
        if ($formfourn->isSubmitted() && $formfourn->isValid()) {
            $fournisseur->setType($type);
            $manager->persist($fournisseur);
            $manager->flush();
            return $this->json(['result' => 'Fournisseur crée'], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/adde', name: 'addeFournisseur', methods: ['POST'])]
    public function adde(Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();

        $fournisseur = new Fournisseur();
        $fournisseur->setUser($this->getMaster());
        $json = $this->getJson($request);

        $formfourn  = $this->formFactory->createNamed('',FournisseurType::class,$fournisseur,
            [
                'type' => 'etat'
            ]);

        $formfourn->submit($json);
        $formfourn->handleRequest($request);
        if ($formfourn->isSubmitted() && $formfourn->isValid()) {
            $manager->persist($fournisseur);
            $manager->flush();
            return $this->json(['result' => 'Fournisseur crée'], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/update/{id}', name: 'updateFournisseur', methods: ['POST'])]
    public function update($id , Request $request): JsonResponse
    {
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);

        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();

        $fournisseur = $repoFournisseur->findOneBy(['id'=>$id , 'user'=>$this->getMaster()]);
        if(!$fournisseur){
            return $this->json(['result' => 'Erreur'], 404);
        }
        $json = $this->getJson($request);

        $formfourn  = $this->formFactory->createNamed('',FournisseurType::class,$fournisseur,
            [
                'type' => 'article'
            ]);

        $formfourn->submit($json);
        $formfourn->handleRequest($request);
        if ($formfourn->isSubmitted() && $formfourn->isValid()) {
            $manager->persist($fournisseur);
            $manager->flush();
            return $this->json(['result' => 'Fournisseur crée'], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/presta/update/{id}', name: 'updatePrestataire', methods: ['POST'])]
    public function updatePresta($id , Request $request): JsonResponse
    {
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);

        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();

        $fournisseur = $repoFournisseur->findOneBy(['id'=>$id , 'user'=>$this->getMaster()]);
        if(!$fournisseur){
            return $this->json(['result' => 'Erreur'], 404);
        }
        $json = $this->getJson($request);

        $formfourn  = $this->formFactory->createNamed('',FournisseurType::class,$fournisseur,
            [
                'type' => 'presta'
            ]);

        $formfourn->submit($json);
        $formfourn->handleRequest($request);
        if ($formfourn->isSubmitted() && $formfourn->isValid()) {
            $manager->persist($fournisseur);
            $manager->flush();
            return $this->json(['result' => 'Fournisseur crée'], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/del/{id}', name: 'delFourn', methods: ['DELETE'])]
    public function delFour($id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);
        $fournisseur = $repoFournisseur->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        if(count($fournisseur->getBons())  == 0){
            $cor = $repoCorbeille->findOneBy(['designation' => $fournisseur->getId(), 'master' => $this->getMaster(), 'type' => 44]);
            if (!$cor) {
                date_default_timezone_set('Africa/Abidjan');
                $corbeille = new Corbeille();
                $corbeille->setDate(new \DateTime('NOW'));
                $corbeille->setDesignation($fournisseur->getId());
                $corbeille->setMaster($this->getMaster());
                $corbeille->setDelby($this->getUser());
                $corbeille->setEtat('faible');
                $corbeille->setType('44');
                $manager->persist($corbeille);
                $manager->flush();
                $fournisseur->setCorbeille($corbeille);
                $manager->persist($fournisseur);
                $manager->flush();

                return $this->json(['result' => 'Fournisseur suprimé'], 200);
            }
        }

        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/', name: 'fournisseurs')]
    #[Route(path: '/edit/{idfourn}', name: 'efournisseur', requirements: ['idfourn' => '\d+'])]
    public function index(int $idfourn = null,)
    {

        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $repoFourn = $this->doctrine->getRepository(Fournisseur::class);

        $aa = $idfourn ?? 'a';
        $fournes = $repoFourn->findFournes($this->getMaster());
        $jsonfournes = $this->json($fournes, 200, ['Content-Type' => 'application/json'], ['groups' => 'fours']);

        $historiques = $repoHistorique->findBa($this->getMaster());

        if ($idfourn === null) {
            $fournisseur = new Fournisseur();
            $fournisseur->setUser($this->getMaster());
        } else {
            $fournisseur = $repoFourn->findOneBy(['id' => $idfourn, 'user' => $this->getMaster()]);
        }

        $formfourn = $this->formFactory->createNamed('', FournisseurType::class, $fournisseur,
            ['type' => 'article']);

        $bon = new bon();
        $bon->setDate(new \DateTime('NOW'));
        $bon->setTva('18');
        $bon->setUser($this->getMaster());
        $bon->setBonReference("BON DE COMMANDE");
        $bon->setDobyuser($this->getUser());
        $bon->setEtat('save');

        // FORMULAIRE BON DE COMMANDE
        $formBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'type' => 'startfournisseur',
            'user' => $this->getMaster()
        ]);

        return $this->render('content/listefournisseurs.html.twig', [
            'controller_name' => 'EtatController',
            'history' => $historiques,
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'jsonfournes' => $jsonfournes->getContent(),
            'aa' => $aa,
            'editFourn' => $fournisseur->getId() !== null,
            'formfourn' => $formfourn->createView(),
            'formBon' => $formBon->createView(),
     ]);
    }
}
