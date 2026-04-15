<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Historique;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HistoriqueController
 * @package App\Controller
 */
#[Route(path: '/crm/historique')]
class HistoriqueController extends AbstractController
{


    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory) {
        $this->formFactory = $formFactory;
    }



    // RECUPERER LE MASTER USER
    /**
     * @return User|object|null
     */
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

    #[Route(path: '/', name: 'historique')]
    public function index(): Response
    {
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBy(['user'=>$this->getMaster()]);

        return $this->render('content/historique.html.twig', [
            'controller_name' => 'HistoriqueController',
            'page' => 'historique',
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'history' => $historiques
        ]);
    }
}
