<?php

namespace App\Controller;

use App\Entity\User;
use Detection\MobileDetect;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function accueil(): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('welcome');
        }
        $detect = new MobileDetect();

        return $this->render('security/accueil.html.twig', [
            'controller_name' => 'AccueilController',
            'ismobile' => $detect->isMobile(),
        ]);
    }
}
