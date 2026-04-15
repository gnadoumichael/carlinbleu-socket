<?php

namespace App\Controller;

use App\Entity\Chantier;
use App\Entity\Client;
use App\Entity\Fournisseur;
use App\Entity\Historique;
use App\Entity\Ligne;
use App\Entity\User;
use App\Entity\Valider;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/crm/rapportchantier')]
class RapportchantierController extends AbstractController
{

    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }
    public function getMaster(): ?object
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




    #[Route('/', name: 'app_rapportchantier')]
    #[Route('/chchan/{id}', name: 'chchansuivi')]
    public function index(int $id = null): Response
    {

        $manager = $this->doctrine->getManager();

        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoValide = $this->doctrine->getRepository(Valider::class);
        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);

        $chantier = null;
        $client = null;
        $valider = null;
        $invente = null;


        $devnonvalide = 0;
        $ventedevis = 0;
        $depcaisse = 0;

        if($id) {
            $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            $client = $chantier->getClient();
            foreach ($chantier->getDevis() as $dde) {
                if ($dde->getEtat() === "save" && $dde->getCorbeille() === null) {
                    if ($dde->getType() !== "esti") {
                        $devnonvalide = $devnonvalide + $dde->getTotalttc();
                    }
                }
                if ($dde->getEtat() === "valide" && $dde->getCorbeille() === null) {
                    if ($dde->getType() === "vte") {
                        $ventedevis = $ventedevis + $dde->getTotalttc();
                    }
                }
            }
            foreach ($chantier->getCaisses() as $cce) {
                if ($cce->getEtat() === "valide" && $cce->getCorbeille() === null) {
                    if ($cce->getIntervenant() === null) {
                        $depcaisse = $depcaisse + $cce->getMontant();
                    }
                }
            }

            $chantier->setPaiements($depcaisse);
            $manager->persist($chantier);
            $manager->flush();

            $valider = $repoValide->findByChantier($chantier);
            $invente = $repoLigne->inventaire($chantier->getId());

        }

        $clientes = $repoClient->findClients($this->getMaster());
        $historiques = $repoHistorique->findBa($this->getMaster());


        $fournisseurs = $repoFournisseur->findBy(['user'=>$this->getMaster()], ["fournisseur"=>"ASC"]);


        return $this->render('content/rapportchantier.html.twig', [
            'controller_name' => 'RapportchantierController',
            'history' => $historiques,
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'chantier' => $chantier,
            'clientes' => $clientes,
            'client' => $client,
            'devnonvalide' => $devnonvalide,
            'ventedevis' => $ventedevis,
            'depcaisse' => $depcaisse,
            'valider' => $valider,
            'invente' => $invente,
            'master' => $this->getMaster(),
            'fournisseurs' => $fournisseurs,
        ]);
    }
}
