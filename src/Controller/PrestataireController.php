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


#[Route(path: '/crm/prestataire')]
class PrestataireController extends AbstractController
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

    #[Route(path: '/', name: 'prestataires')]
    #[Route(path: '/edit/{idpresta}', name: 'epresta', requirements: ['idpresta' => '\d+'])]
    public function index(int $idpresta = null,)
    {

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $repoFourn = $this->doctrine->getRepository(Fournisseur::class);
        $repoClient = $this->doctrine->getRepository(Client::class);


        $prestas = $repoFourn->findPrestas($this->getMaster());
        $clients = $repoClient->finddClients($this->getMaster());

        $jsonprestas = $this->json($prestas, 200, ['Content-Type' => 'application/json'], ['groups' => 'fours']);
        $jsonclients = $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);

        $historiques = $repoHistorique->findBa($this->getMaster());
        $bb = $idpresta ?? 'a';

        if ($idpresta === null) {
            $prestataire = new Fournisseur();
            $prestataire->setUser($this->getMaster());
        } else {
            $prestataire = $repoFourn->findOneBy(['id' => $idpresta, 'user' => $this->getMaster()]);
        }
        $formpresta = $this->formFactory->createNamed('', FournisseurType::class, $prestataire,
            ['type' => 'presta']);

        $bon = new bon();
        $bon->setDate(new \DateTime('NOW'));
        $bon->setTva('18');
        $bon->setUser($this->getMaster());
        $bon->setBonReference("BON DE COMMANDE");
        $bon->setDobyuser($this->getUser());
        $bon->setEtat('save');

        // FORMULAIRE BON DE COMMANDE
        $formBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'type' => 'startprestataire',
            'user' => $this->getMaster()
        ]);

        return $this->render('content/listeprestataires.html.twig', [
            'controller_name' => 'EtatController',
            'history' => $historiques,
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'jsonprestas' => $jsonprestas->getContent(),
            'jsonclients' => $jsonclients->getContent(),
            'bb' => $bb,
            'editPresta' => $prestataire->getId() !== null,
            'formpresta' => $formpresta->createView(),
            'formeBon' => $formBon->createView(),
        ]);
    }
}
