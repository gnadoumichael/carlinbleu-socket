<?php

namespace App\Controller;

use App\Entity\Metier;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CatalogueController
 * @package App\Controller
 */
#[Route(path: '/catalogue')]
class CatalogueController extends AbstractController
{

    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory) {
        $this->formFactory = $formFactory;
    }

    #[Route(path: '/{metier}/{idpays}', name: 'catalogue')]
    public function index($metier, $idpays)
    {
        $repoMetier = $this->doctrine->getRepository(Metier::class);
        $repoUser = $this->doctrine->getRepository(User::class);

        $met = $repoMetier->findAll();
        $user = $repoUser->findAll();

        $metier = $repoMetier->findOneBy(['id'=>$metier]);

        return $this->render('content/catalogue.html.twig', [
            'controller_name' => 'CatalogueController',
            'title' => 'Catalogues d\'entreprise',
            'libre' => 'libre',
            'met' => $met,
            'users' => $user,
            'page' => 'catalogue',
            'metier' => $metier
        ]);
    }
}
