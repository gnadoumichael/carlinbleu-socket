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
 * Class CorbeilleController
 * @package App\Controller
 */
#[Route(path: '/crm/corbeille')]
class CorbeilleController extends AbstractController
{

    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory) {
        $this->formFactory = $formFactory;
    }


    /**
     * @return object|null
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


    #[Route(path: '/', name: 'corbeille')]
    public function index(): Response
    {
        $repoClient = $this->doctrine->getRepository(Client::class);

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        return $this->render('content/corbeille.html.twig', [
            'controller_name' => 'CorbeilleController',
            'page' => 'corbeille',
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'estmaster' => $this->getMaster() === $this->getUser(),
            'master' => $this->getMaster(),
            'history' => $historiques
        ]);
    }
}
