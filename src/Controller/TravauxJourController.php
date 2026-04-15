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


#[Route(path: '/crm/travauxjour')]
class TravauxJourController extends AbstractController
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

    #[Route(path: '/', name: 'travauxjour')]
    public function index()
    {

        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoDecompte = $this->doctrine->getRepository(Decompte::class);
        $repoFacture = $this->doctrine->getRepository(Facture::class);

        $historiques = $repoHistorique->findBa($this->getMaster());

        // TRAVAUX DU JOUR
        $date = date("Y-m-d");
        $deviss = $repoDevis->findByeDater($this->getMaster(), $date);
        $bons = $repoBon->findByeDate($this->getMaster(), $date);
        $caisses = $repoCaisse->findByeDate($this->getMaster(), $date);
        $decomptes = $repoDecompte->findByeDate($this->getMaster(), $date);

        $factures = $repoFacture->findByeDate($this->getMaster(), $date);
        $jsondev = $this->json($deviss, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
        $jsonbon = $this->json($bons, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
        $jsoncaisse = $this->json($caisses, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);
        $jsondec = $this->json($decomptes, 200, ['Content-Type' => 'application/json'], ['groups' => 'decompte']);
        $jsonfac = $this->json($factures, 200, ['Content-Type' => 'application/json'], ['groups' => 'facture']);


        return $this->render('content/travauxjour.html.twig', [
            'controller_name' => 'TravauxJourController',
            'history' => $historiques,
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'jsondev' => $jsondev->getContent(),
            'jsonbon' => $jsonbon->getContent(),
            'jsoncaisse' => $jsoncaisse->getContent(),
            'jsondec' => $jsondec->getContent(),
            'jsonfac' => $jsonfac->getContent(),

        ]);
    }
}
