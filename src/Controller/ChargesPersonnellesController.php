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
use App\Entity\Droit;
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


#[Route(path: '/crm/chargespersonnelles')]
class ChargesPersonnellesController extends AbstractController
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

    #[Route(path: '/', name: 'chargespersonnelles')]
    public function index()
    {

        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoPersonel = $this->doctrine->getRepository(Personnel::class);

        $personnels = $repoPersonel->findByPerso($this->getMaster());
        $caisseperso = $repoCaisse->findByPerso($this->getMaster());
        $jsonpersos = $this->json($personnels, 200, ['Content-Type' => 'application/json'], ['groups' => 'pers']);
        $jsoncaissperso = $this->json($caisseperso, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);

        $historiques = $repoHistorique->findBa($this->getMaster());

        $caisse = new Caisse();
        $caisse->setDate(new \DateTime('NOW'));
        $caisse->setUser($this->getMaster());
        $caisse->setDobyuser($this->getUser());
        $caisse->setEtat('save');
        $formCaissePerso = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'startfrais',
            'user' => $this->getMaster()
        ]);

        $repoDroit = $this->doctrine->getRepository(Droit::class);
        $droitComptable = $repoDroit->findOneBy(["pour"=>$this->getUser(), 'lier' => "comptable"]);
        $droitAdmin = $repoDroit->findOneBy(["pour"=>$this->getUser(), 'lier' => "admin"]);

        if($droitAdmin->getActions() =="non" and $droitComptable->getActions() =="non"){
            return $this->redirectToRoute('welcome');
        }
        return $this->render('content/chargespersonnelles.html.twig', [
            'controller_name' => 'EtatController',
            'history' => $historiques,
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'jsonpersos' => $jsonpersos->getContent(),
            'caisseperso' => $jsoncaissperso->getContent(),
            'formCaissePerso' => $formCaissePerso->createView(),

        ]);
    }
}
