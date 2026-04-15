<?php

namespace App\Controller;

use App\Entity\Caisse;
use App\Entity\Chantier;
use App\Entity\Client;
use App\Entity\Historique;
use App\Entity\Personnel;
use App\Entity\Relever;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: '/crm/soldecompte')]
class SoldeCompteController extends AbstractController
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

    #[Route(path: '/', name: 'soldecompte')]
    public function index()
    {

        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoPersonel = $this->doctrine->getRepository(Personnel::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoRelever = $this->doctrine->getRepository(Relever::class);

        $chantierFrais = $repoChantier->findOneBy(['type' => 'frais', 'user' => $this->getMaster()]);

        $personnels = $repoPersonel->findBy(['user' => $this->getMaster()], ['noms' => 'asc']);
        $caisseperso = $repoCaisse->findByPerso($this->getMaster());
        $caissechantiers = $repoCaisse->findByMois($this->getMaster());
        $reglements = $repoRelever->findByMois($this->getMaster());

        $jsonpersos = $this->json($personnels, 200, ['Content-Type' => 'application/json'], ['groups' => 'pers']);
        $jsoncaissperso = $this->json($caisseperso, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);
        $caisseinterne = $repoCaisse->findBy(['chantier' => $chantierFrais, 'user' => $this->getMaster()], ['date' => 'desc']);
        $jsoncaissin = $this->json($caisseinterne, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);
        $jsoncaisschantiers = $this->json($caissechantiers, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);
        $jsonreglements = $this->json($reglements, 200, ['Content-Type' => 'application/json'], ['groups' => 'relevers']);


        $historiques = $repoHistorique->findBa($this->getMaster());

        $sumRegle = 0;
        $sumDepense = 0;
        foreach ($this->getMaster()->getClients() as $client) {
            if ($client->getType() === null && $client->getCorbeille() === null) {
                foreach ($client->getChantiers() as $chantier) {
                    if ($chantier->getCorbeille() === null) {
                        $sumRegle = $sumRegle + $chantier->getReglement();
                        foreach ($chantier->getCaisses() as $cais) {
                            if ($cais->getCorbeille() === null) {
                                $sumDepense = $sumDepense + $cais->getMontant();
                            }
                        }
                    }
                }
            }
        }

        return $this->render('content/soldecompte.html.twig', [
            'controller_name' => 'EtatController',
            'history' => $historiques,
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'jsonpersos' => $jsonpersos->getContent(),
            'caisseperso' => $jsoncaissperso->getContent(),
            'caisseinterne' => $jsoncaissin->getContent(),
            'caissechantiers' => $jsoncaisschantiers->getContent(),
            'reglements' => $jsonreglements->getContent(),
            'sumRegle' => $sumRegle,
            'sumDepense' => $sumDepense,
        ]);
    }

}