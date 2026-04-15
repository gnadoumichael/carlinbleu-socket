<?php
declare(strict_types=1);

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Biblio;
use App\Entity\Domaine;
use App\Entity\Fournisseur;
use App\Entity\Metier;
use App\Entity\Partager;
use App\Entity\TypeArticle;
use App\Entity\User;
use App\Form\ArticleType;
use App\Form\BiblioType;
use App\Form\FournisseurType;
use App\Form\TypeArticleType;
use App\Service\FileUploader;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class ArticleController
 * @package App\Controller
 */
class ArticleController extends AbstractController
{


    /**
     * @return User|object|null
     */
    public function getMaster()
    {
        // REPOSITORIES
        $repoUser = $this->getDoctrine()->getRepository(User::class);

        //GESTION DE COMPTE
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUsername()]);

        // VERIFIE SI COMPTE MASTER
        if ($use->getCompte() === null) {
            $master = $use;
        } else {
            $master = $repoUser->findOneBy(['id' => $use->getCompte()]);
        }

        return $master;

    }

    /**
     * @return JsonResponse
     */
    #[Route(path: '/article/partage/{id}/p/y', name: 'rempartage')]
    public function delpartage($id = null)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $manager = $this->getDoctrine()->getManager();
        // REPOSITORIES
        $repoArticle = $this->getDoctrine()->getRepository(Article::class);
        $repoPartage = $this->getDoctrine()->getRepository(Partager::class);
        // RETROUVE L'ARTICLES
        $article = $repoArticle->findOneBy(['id' => $id, 'user' => $this->getUser()]);
        $partage = $repoPartage->findOneBy(['article' => $article, 'user' => $this->getUser()]);
        if (!$article) {
            $this->redirectToRoute('deconnecte');
        }
        $article->setPartage('non');
        $manager->persist($article);
        $manager->remove($partage);
        $manager->flush();
        return $this->json(['result' => 'success'], 200);

    }

    /**
     * @return JsonResponse
     */
    #[Route(path: '/article/delete/{idarticle}/{type}', name: 'delarticle')]
    public function delarticle($idarticle, $type)
    {
        $manager = $this->getDoctrine()->getManager();
        // REPOSITORIES
        $repoArticle = $this->getDoctrine()->getRepository(Article::class);

        // RETROUVE L'ARTICLES
        $artik = $repoArticle->findOneBy(['id' => $idarticle, 'user' => $this->getUser()]);
        if (!$artik) {
            $this->redirectToRoute('deconnecte');
        }
        if ($artik) {
            $manager->remove($artik);
            $manager->flush();
        }

        if ($type === 'json') {
            return $this->json(['result' => 'success'], 200);
        }

        return $this->json(['result' => 'success'], 200);

    }

    /**
     * @return JsonResponse
     */
    #[Route(path: '/article/delete/{id}', name: 'delcate')]
    public function delcate($id = null)
    {
        $manager = $this->getDoctrine()->getManager();
        // REPOSITORIES
        $repoTypea = $this->getDoctrine()->getRepository(TypeArticle::class);

        // RETROUVE LA CATEGORIE
        $cate = $repoTypea->findOneBy(['id' => $id, 'user' => $this->getUser()]);
        if (!$cate) {
            $this->redirectToRoute('deconnecte');
        }
        if ($cate) {
            $manager->remove($cate);
            $manager->flush();
        }
        return $this->json(['result' => 'success'], 200);

    }

    /**
     * @return JsonResponse
     */
    #[Route(path: '/article/delete/p/{id}/p', name: 'delsec')]
    public function delsec($id = null)
    {
        $manager = $this->getDoctrine()->getManager();
        // REPOSITORIES
        $repoBiblio = $this->getDoctrine()->getRepository(Biblio::class);

        // RETROUVE LA CATEGORIE
        $biblio = $repoBiblio->findOneBy(['id' => $id]);
        if (!$biblio) {
            $this->redirectToRoute('deconnecte');
        }
        $cate = $biblio->getCategorie();

        if (!$cate->getUser() !== $this->getUser()) {
            $this->redirectToRoute('deconnecte');
        }
        if ($biblio) {
            $manager->remove($biblio);
            $manager->flush();
        }

        return $this->json(['result' => 'success'], 200);
    }


    #[Route(path: '/article/migrate/{id}', name: 'artmigrate')]
    public function artmigrate($id): JsonResponse
    {
        // LES REPOSITORIES
        $repoArticle = $this->getDoctrine()->getRepository(Article::class);
        $repoTypear = $this->getDoctrine()->getRepository(TypeArticle::class);
        $manager = $this->getDoctrine()->getManager();

        // ON RECUPERE L'ARTICLE
        $article = $repoArticle->find($id);

        // ON VERIFIE L'ARTICLE N'A PAS DEJA ETE AJOUTE
        $artik = $repoArticle->findOneBy(
            ['user' => $this->getUser(), 'article' => $article]
        );

        // ON CREE UN NOUVEL ARTICLE
        $arti = new Article();

        // ON INITIALISE L'INFO
        $info = null;

        // OON AJOUTE L'ARTICLE S'IL EXISTE PAS
        if (!$artik) {
            $typear = $repoTypear->findOneBy(['type' => $article->getTypeArticle()->getType(), 'user' => $this->getUser()]);

            if (!$typear) {
                $typear = new TypeArticle();
                $typear->setType($article->getTypeArticle()->getType());
                $typear->setUser($this->getUser());
                $manager->persist($typear);
                $manager->flush();
            }
            $ttyp = $repoTypear->findOneBy(['type' => $article->getTypeArticle()->getType(), 'user' => $this->getUser()]);
            $arti->setUser($this->getUser());
            $arti->setDesignation($article->getDesignation());
            $arti->setUnite($article->getUnite());
            $arti->setStock('1');
            $arti->setPu($article->getPu());
            $arti->setReference($article->getReference());
            $arti->setVente('non');
            $arti->setTypeArticle($article->getTypeArticle());
            $arti->setCode($article->getCode());
            $arti->setMonnaies($article->getMonnaies());
            $arti->setArticle($article);
            $arti->setTypeArticle($ttyp);

            $manager->persist($arti);
            $manager->flush();
            $info = 'new';
        } else {
            $manager->remove($artik);
            $manager->flush();
            $info = 'old';
        }

        return $this->json(['id' => $id, 'info' => $info], 200);
    }


    #[Route(path: '/article/vente/{idarticle}', name: 'vente')]
    public function vente($idarticle): JsonResponse
    {
        // MANAGER
        $manager = $this->getDoctrine()->getManager();

        // REPOSITORIES
        $repoArticle = $this->getDoctrine()->getRepository(Article::class);

        $article = $repoArticle->findOneBy(['id' => $idarticle, 'user' => $this->getMaster()]);
        $info = null;
        if ($article->getVente() == 'oui') {
            $article->setVente('non');
            $info = 'non';
        } else {
            $article->setVente('oui');
            $info = 'oui';
        }

        $manager->persist($article);
        $manager->flush();

        return $this->json(['id' => $idarticle, 'info' => $info], 200);
    }


    /**
     * @throws \Exception
     */
    #[Route(path: '/article', name: 'article')]
    #[Route(path: '/article/{id}', name: 'editArticle')]
    #[Route(path: '/article/modifier/{idcate}', name: 'editcategorie')]
    #[Route(path: '/article/modifier/p/{idsec}', name: 'editsection')]
    #[Route(path: '/article/modifier/p/p/{idfourn}', name: 'editfourn')]
    public function index($id = null, $idcate = null, $idsec = null, $idfourn = null,  Request $request)
    {
        // MANAGER
        $manager = $this->getDoctrine()->getManager();

        // REFUSE L'ACCES NON CONNECTÉ
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // REPOSITORIES
        $repoUser = $this->getDoctrine()->getRepository(User::class);
        $repoArticle = $this->getDoctrine()->getRepository(Article::class);
        $repoTypea = $this->getDoctrine()->getRepository(TypeArticle::class);
        $repoBiblio = $this->getDoctrine()->getRepository(Biblio::class);
        $repoFourn= $this->getDoctrine()->getRepository(Fournisseur::class);


        // FOURNISSEUR EXISTE
         $verfourn = $repoFourn->findOneBy(['user'=>$this->getMaster(),'fournisseur'=>'Aucun']);
         if(!$verfourn){
             $fo = new Fournisseur();
             $fo->setUser($this->getMaster());
             $fo->setFournisseur('Aucun');
             $manager->persist($fo);
             $manager->flush();
         }


        // ABONNEMENT
        $now = new \DateTime('NOW');
        $today = $now->format('Y-m-d H:i:s');
        if ($today > $this->getMaster()->getEnddate()->format('Y-m-d H:i:s')) {
            return $this->redirectToRoute('compte', ['type' => 'abonnement']);
        }

        // RECUPERATION DES CATEGORIES
        $categories = $repoTypea->findBy(['user' => $this->getMaster()]);

        // ON RECUPERE L'ARTICLE A MODIFIER ET ON VERIIFE S'IL EXISTE
        if ($id !== null) {
            $article = $repoArticle->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            if (!$article) {
                $article = new Article();
                $article->setUser($this->getMaster());
            }
        } else {
            $article = new Article();
            $article->setUser($this->getMaster());
        }


        // FORMULAIRE ARTICLE
        $form = $this->createForm(ArticleType::class, $article, ['user' => $this->getMaster()]);
        if ($request->request->get('article')['savearticle'] === "") {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {

                $file = $form['images']->getData();
                $idsect = $request->request->get('article')['biblio'];
                $sec = $repoBiblio->findOneBy(['id' => $idsect]);
                $article->setTypeArticle($sec->getCategorie());
                if ($file) {
                    $random = random_int(1, 100);
                    $filename = $this->getMaster()->getId() . '_' . $random;
                    if (!mkdir("articles") && !is_dir("articles")) {
                        throw new \RuntimeException(sprintf('Directory "%s" was not created', "articles"));
                    }
                    $fich = new FileUploader('articles/');
                    $link = $fich->upload($file, $filename);
                    $article->setLink1($link);
                    $article->setInfo1('oui');
                }
                $manager->persist($article);
                $manager->flush();
                return $this->redirectToRoute('article');
            }
        }

        // CATEGORIE D'ARTICLES ET SON FORMULAIRE
        if ($idcate === null) {
            $typea = new TypeArticle();
            $typea->setUser($this->getMaster());
        } else {
            $typea = $repoTypea->findOneBy(['id' => $idcate, 'user' => $this->getMaster()]);
        }


        $forme = $this->createForm(TypeArticleType::class, $typea);
        if ($request->request->get('type_article')['savetype'] === "") {
        $forme->handleRequest($request);
            if ($forme->isSubmitted() && $forme->isValid()) {
                $manager->persist($typea);
                $manager->flush();
                return $this->redirectToRoute('article');
            }
        }

        // FOURNISSEUR D'ARTICLES ET SON FORMULAIRE
        if ($idfourn === null) {
            $fournisseur = new Fournisseur();
            $fournisseur->setUser($this->getMaster());
        } else {
            $fournisseur = $repoFourn->findOneBy(['id' => $idfourn]);
        }

        $formfourn = $this->createForm(FournisseurType::class, $fournisseur);
        if ($request->request->get('type_article')['savetype'] === "") {
            $formfourn->handleRequest($request);
            if ($formfourn->isSubmitted() && $formfourn->isValid()) {
                $manager->persist($fournisseur);
                $manager->flush();
                return $this->redirectToRoute('article');
            }
        }



        // SECTION D'ARTICLES ET SON FORMULAIRE
        if ($idsec === null) {
            $biblio = new Biblio();
        } else {
            $biblio = $repoBiblio->findOneBy(['id' => $idsec]);
        }

        $formo = $this->createForm(BiblioType::class, $biblio, ['user' => $this->getMaster()]);
        $formo->handleRequest($request);
            if ($formo->isSubmitted() && $formo->isValid()) {
                $manager->persist($biblio);
                $manager->flush();
                return $this->redirectToRoute('article');
            }


        $articles = $repoArticle->findBy(
            ['user' => $this->getMaster()]);
        // FORMULAIRE PARTAGE ARTICLE
        $partage = new  Partager();
        $partage->setDate(new \DateTime('NOW'));
        $partage->setUser($this->getMaster());
        $partage->setPays($this->getMaster()->getPays());
        $formpart = $this->createFormBuilder($partage)
            ->add('metier', EntityType::class, [
                'class' => Metier::class,
                'choice_label' => 'nom',
            ])
            ->add('article', EntityType::class, [
                'class' => Article::class,
                'choice_label' => 'designation',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('articles')
                        ->where('articles.user = :user')
                        ->orderBy('articles.designation', 'ASC')
                        ->setParameter('user', $this->getMaster());
                }])
            ->add('savePartage', SubmitType::class)
            ->getForm();
        if ($request->request->get('form')['savePartage'] === "") {
            $formpart->handleRequest($request);
            if ($formpart->isSubmitted() && $formpart->isValid()) {
                $donnee = $request->request->get('form');
                $ar = $repoArticle->findOneBy(['id' => $donnee['article'], 'user' => $this->getMaster()]);
                if ($ar->getPartage() === null) {
                    $ar->setPartage('oui');
                    $manager->persist($ar);
                    $manager->persist($partage);
                    $manager->flush();
                    return $this->redirectToRoute('article');
                }

                $ar->setPartage(null);
                $manager->persist($ar);
                $manager->flush();
                return $this->redirectToRoute('article');
            }
        }

        // REPOSITORIES
        $repoUser = $this->getDoctrine()->getRepository(User::class);

        //GESTION DE COMPTE
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUsername()]);

        $droitcreerarticle = 0;

        $fournisseurs = $repoFourn->findBy(['user'=>$this->getMaster()]);

        foreach($use->getDroits() as $droit) {
             if($droit->getId() === 2){
                 $droitcreerarticle = 1;
             }
            if($droit->getId() === 3){
                $articles = null;
                $categories = null;
            }
        }
        return $this->render('content/article.html.twig', [
            'controller_name' => 'ArticleController',
            'forme' => $forme->createView(),
            'form' => $form->createView(),
            'formfourn' => $formfourn->createView(),
            'formo' => $formo->createView(),
            'formpart' => $formpart->createView(),
            'title' => 'Gestion des articles | carlinBlzu',
            'articles' => $articles,
            'editMode' => $article->getId() !== null,
            'editCate' => $typea->getId() !== null,
            'editSect' => $biblio->getId() !== null,
            'categories' => $categories,
            'fournisseurs' => $fournisseurs,
            'droitcreerarticle' => $droitcreerarticle,
        ]);
    }
}
