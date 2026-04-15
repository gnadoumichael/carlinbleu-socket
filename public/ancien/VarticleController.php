<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Chantier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VarticleController extends AbstractController
{
    #[Route(path: '/varticle/{id}', name: 'varticle')]
    public function index($id)
    {
        $repoArticle = $this->getDoctrine()->getRepository(Article::class);
        $article = $repoArticle->find($id);
        return $this->render('content/varticle.html.twig', [
            'controller_name' => 'VarticleController',
            'article' => $article,
        ]);
    }
}
