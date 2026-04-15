<?php

namespace App\Controller;

use App\Entity\Bon;
use App\Entity\Chantier;
use App\Entity\Client;
use App\Entity\Corbeille;
use App\Entity\Devis;
use App\Entity\Groupe;
use App\Entity\Historique;
use App\Entity\Ligne;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/crm/budget')]
class BudgetController extends AbstractController
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

    #[Route('/devis/{id}', name: 'budgetDevis', methods: ['GET'])]
    public function budgetDevis(int $id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);


        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $devis = $repoDevis->findBy(['chantier' => $chantier]);
        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
    }

    #[Route('/devis/lignes/{id}', name: 'budgetDevisLignes', methods: ['GET'])]
    public function budgetDevisLignes(int $id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();
        $repoDevis = $this->doctrine->getRepository(Devis::class);

        $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $lignes = $devis->getLignes();

        return $this->json($lignes, 200, ['Content-Type' => 'application/json'], ['groups' => 'ligne']);
    }


    #[Route('/bon/lignes/{id}', name: 'budgetBonLignes', methods: ['GET'])]
    public function budgetBonLignes(int $id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $repoBon= $this->doctrine->getRepository(Bon::class);

        $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $lignes = $bon->getDevis()->getLignes();

        return $this->json($lignes, 200, ['Content-Type' => 'application/json'], ['groups' => 'paligne']);
    }

    #[Route('/', name: 'budget')]
    #[Route('/chdevis/{iddev}', name: 'chbudget')]
    #[Route('/chchan/{idchan}', name: 'chchan')]
    public function index(int $iddev = null, int $idchan = null, ): Response
    {
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $manager = $this->doctrine->getManager();

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        $clients = $repoClient->findClientas($this->getMaster());
        $jsonclients = $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);

        $devis = null;
        $deviss = null;
        $chantier = null;
        $journals = null;

        if($iddev){
            $devis = $repoDevis->findOneBy(['id' => $iddev, 'user' => $this->getMaster()]);
            $chantier = $devis->getChantier();
            $deviss = $chantier->getDevis();
            $lignes = $devis->getLignes();
            $journals = $devis->getJournals();
            foreach($lignes as $ligne){
                $ste = 0;
                foreach($journals as $jour){
                  $lign = $jour->getLigne();
                  $caiss = $jour->getCaisse();
                    if($lign->getId() === $ligne->getId()){
                      $ste = $caiss->getMontant() + $ste;
                   }
                }
                $ligne->setRealiser($ste);
                $manager->persist($ligne);
                $manager->flush();
            }
        }
        if($idchan) {
            $chantier = $repoChantier->findOneBy(['id' => $idchan, 'user' => $this->getMaster()]);
            $deviss = $chantier->getDevis();
        }

        return $this->render('content/budget.html.twig', [
            'controller_name' => 'BudgetController',
            'jsonclients' => $jsonclients->getContent(),
            'devis' => $devis,
            'journals' => $journals,
            'deviss' => $deviss,
            'chantier' => $chantier,
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'history' => $historiques,
        ]);
    }
}
