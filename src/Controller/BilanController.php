<?php

namespace App\Controller;

use App\Entity\Chantier;
use App\Entity\Client;
use App\Entity\Historique;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: '/crm/bilan')]
class BilanController extends AbstractController
{
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

    #[Route('/', name: 'bilan')]
    public function index(): Response
    {
        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $debut = mktime(0, 0, 0, 1, 1, date("Y"));
        $debut = date("Y-m-d", $debut);

        $chantiers = $repoChantier->findChanBilan($this->getMaster(), $debut);
        $jsonchantiers = $this->json($chantiers, 200, ['Content-Type' => 'application/json'], ['groups' => 'chantiers']);

        $historiques = $repoHistorique->findBa($this->getMaster());
        return $this->render('content/bilan.html.twig', [
            'controller_name' => 'BilanController',
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'history' => $historiques,
            'jsonchantiers' => $jsonchantiers->getContent(),
        ]);
    }
}
