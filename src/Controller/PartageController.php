<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Biblio;
use App\Entity\Client;
use App\Entity\Domaine;
use App\Entity\Famille;
use App\Entity\Historique;
use App\Entity\Metier;
use App\Entity\Partager;
use App\Entity\Pays;
use App\Entity\Sousfamille;
use App\Entity\Typear;
use App\Entity\TypeArticle;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PartageController
 * @package App\Controller
 */
#[Route(path: '/partage')]
class PartageController extends AbstractController
{

    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory) {
        $this->formFactory = $formFactory;
    }


    public function getMaster()
    {
        // REPOSITORIES
        $repoUser = $this->doctrine->getRepository(User::class);
        if($this->getUser()) {
            $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);
            if ($use->getCompte() === null) {
                $master = $use;
            } else {
                $master = $repoUser->findOneBy(['id' => $use->getCompte()]);
            }
            return $master;
        }else{
            return null;
        }

    }

    #[Route(path: '/article/{id}', name: 'addarticle', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function addarticle($id = null)
    {
        $manager = $this->doctrine->getManager();
        $repoPartager = $this->doctrine->getRepository(Partager::class);
        $partage = $repoPartager->find($id);
        $article = new Article();
        $article->setUser($this->getMaster());
        $article->setPartage('oui');
        $article->setCode($partage->getArticle()->getCode());
        $article->setReference($partage->getArticle()->getReference());
        $article->setTypeArticle($partage->getArticle()->getTypeArticle());
        $article->setSousfamille($partage->getArticle()->getSousfamille());
        $article->setMonnaies($partage->getArticle()->getMonnaies());
        $article->setUnite($partage->getArticle()->getUnite());
        $article->setDesignation($partage->getArticle()->getDesignation());
        $article->setPu($partage->getArticle()->getPu());
        $article->setArticle($partage->getArticle());
        $article->setTypear($partage->getArticle()->getTypear());
        $article->setDescription($partage->getArticle()->getDescription());
        $manager->persist($article);
        $manager->flush();
        return $this->json(['result' => 'success'], 200);
    }


    #[Route(path: '/{metier}/{idpays}', name: 'partage', requirements: ['metier' => '\d+', 'idpays' => '\d+'], methods: ['GET'])]
    public function partager($metier, $idpays)
    {
        $repoMetier = $this->doctrine->getRepository(Metier::class);
        $repoDomaine = $this->doctrine->getRepository(Domaine::class);
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoPays = $this->doctrine->getRepository(Pays::class);
        $repoPartager = $this->doctrine->getRepository(Partager::class);
        $repoArticle = $this->doctrine->getRepository(Article::class);
        $repoFamille = $this->doctrine->getRepository(Famille::class);
        $repoSousfamille = $this->doctrine->getRepository(Sousfamille::class);
        $repoClient = $this->doctrine->getRepository(Client::class);

        $metier = $repoMetier->findoneBy(['id'=>$metier]);

        if($metier->getId() === 5){
            $type = $repoFamille->findOneBy(['id' => 1]);
        }
        if($metier->getId() === 1){
            $type = $repoFamille->findOneBy(['id' => 2]);
        }
        if($metier->getId() === 9){
            $type = $repoFamille->findOneBy(['id' => 4]);
        }
        if($metier->getId() === 15){
            $type = $repoFamille->findOneBy(['id' => 100]);
        }
        if($metier->getId() === 2){
            $type = $repoFamille->findOneBy(['id' => 3]);
        }
        if($metier->getId() === 13){
            $type = $repoFamille->findOneBy(['id' => 102]);
        }
        if($metier->getId() === 4){
            $type = $repoFamille->findOneBy(['id' => 5]);
        }
        if($metier->getId() === 8){
            $type = $repoFamille->findOneBy(['id' => 6]);
        }

        if($metier->getId() === 14){
            $type = $repoFamille->findOneBy(['id' => 103]);
        }
        if($metier->getId() === 6){
            $type = $repoFamille->findOneBy(['id' => 8]);
        }
        if($metier->getId() === 11){
            $type = $repoFamille->findOneBy(['id' => 106]);
        }
        if($metier->getId() === 3){
            $type = $repoFamille->findOneBy(['id' => 108]);
        }

        if($metier->getId() === 10){
            $type = $repoFamille->findOneBy(['id' => 107]);
        }
        if($metier->getId() === 12){
            $type = $repoFamille->findOneBy(['id' => 109]);
        }
        if($metier->getId() === 7){
            $type = $repoFamille->findOneBy(['id' => 110]);
        }


        $domaines = $repoDomaine->findBy(['metier'=>$metier]);
        $pays = $repoPays->findOneBy(['id'=>$idpays]);
        $partage = $repoPartager->findBy(['pays'=>$pays]);
        $pub = $repoUser->findBy(['pub'=>'oui', 'pays'=>$pays]);

        $user = $repoUser->findOneBy(['id' => 2]);

        $articles = $repoArticle->findBy(['user' => $this->getMaster(), 'famille'=>$type]);
        $sousfamille = $repoSousfamille->findBy(['famille' => $type], ['sousfamille'=>'ASC']);

        $met = $repoMetier->findAll();

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        return $this->render('content/partage.html.twig', [
            'controller_name' => 'PartageController',
            'title' => $metier->getNom(),
            'metier' => $metier,
            'met' => $met,
            'domaines' => $domaines,
            'pub' => $pub,
            'partage' => $partage,
            'articles'=>$articles,
            'articless' => $articles,
            'user'=> $user,
            'sousfamille' => $sousfamille,
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'page' => 'partage',
            'history' => $historiques
        ]);
    }

}
