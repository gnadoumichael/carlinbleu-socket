<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



/**
 * Class WebglController
 * @package App\Controller
 */
#[Route(path: '/crm/webgl')]
class WebglController extends AbstractController
{
    #[Route(path: '/', name: 'webgler')]
    public function index(): Response
    {
        return $this->render('content/webgl.html.twig', [
            'controller_name' => 'WebglController',
        ]);
    }
}
