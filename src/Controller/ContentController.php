<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Domaine;
use App\Entity\Metier;
use App\Entity\Pays;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContentController extends AbstractController
{

    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory) {
        $this->formFactory = $formFactory;
    }
    

    #[Route(path: '/showroom', name: 'content')]
    #[Route(path: 'content/{id}', name: 'pub')]
    public function index($id = null)
    {
        // INITIALISATION DE LA 1ERE CATEGORIE
        if($id === null){
            $id = 1;
        }

        // LES REPOSITORIES
        $repoMetier = $this->doctrine->getRepository(Metier::class);
        $repoDomaine = $this->doctrine->getRepository(Domaine::class);
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoPays = $this->doctrine->getRepository(Pays::class);

        $pub = $repoUser->findAll();
        $metier = $repoMetier->findOrder();
        $domaines = $repoDomaine->findBy(['metier'=>$id]);
        $pays = $repoPays->findAll();



        return $this->render('content/content.html.twig', [
            'controller_name' => 'ContentController',
            'title' => 'Bienvenue sur carlinBleu',
            'metier' =>$metier,
            'pub' => $pub,
            'domaines' => $domaines,
            'id' => $id,
            'pays' =>$pays,
            'libre' => 'libre',
            'page' => 'showroom'
        ]);
    }


    #[Route(path: '/content/{rech}', name: 'search')]
    function search($rech): JsonResponse
    {

            $repoArticle = $this->doctrine->getRepository(Article::class);
            $articles = $repoArticle->chArticle($rech);
            $data = array();
            $size = count($articles);
            $data[] = array('count' =>$size);
        foreach($articles as $p)
        {
            $data[] = array('id'=>$p->getId(),'desi'=>$p->getDesignation());
        }

        $po = json_encode($data);
        return $this->json(['result'=>$po], 200);

    }
}
