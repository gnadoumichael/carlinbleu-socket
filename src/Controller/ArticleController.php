<?php
declare(strict_types=1);

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Chantier;
use App\Entity\Client;
use App\Entity\Compte;
use App\Entity\Devis;
use App\Entity\Domaine;
use App\Entity\Famille;
use App\Entity\Fournisseur;
use App\Entity\Historique;
use App\Entity\Materiel;
use App\Entity\Metier;
use App\Entity\Monnaie;
use App\Entity\Partager;
use App\Entity\Sousfamille;
use App\Entity\User;
use App\Form\ArticleType;
use App\Form\SousfamilleType;
use App\Form\FournisseurType;
use App\Form\FamilleType;
use App\Service\FileUploader;
use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;
use Exception;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;


#[Route(path: '/crm/article')]
class ArticleController extends AbstractController
{
    private $formFactory;

    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }

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

    private function getJson(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpException(400, 'Invalid json');
        }
        return $data;
    }

    #[Route(path: '/add', name: 'addArticle', methods: ['POST'])]
    public function add(Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();

        $repofamille = $this->doctrine->getRepository(Famille::class);

        $article = new Article();
        $article->setUser($this->getMaster());
        $json = $this->getJson($request);

        $form = $this->formFactory->createNamed('', ArticleType::class, $article, ['user' => $this->getMaster()]);

        $form->submit($json);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $idfamille = $json['famille'];
            $famille = $repofamille->findOneBy(['id' => $idfamille, 'user' => $this->getMaster()]);
            $article->setFamille($famille);
            $manager->persist($article);
            $manager->flush();

            if($article->getTypear()->getId() === 3){
                $mat = new Materiel();
                $mat->setUser($this->getMaster());
                $mat->setFamille($article->getFamille());
                $mat->setFournisseur($article->getFournisseur());
                $mat->setMateriel($article->getDesignation());
                $mat->setEtat("libre");
                $mat->setDate(new \DateTime('NOW'));
                $mat->setStock(0);
                $manager->persist($mat);
                $manager->flush();
            }

            date_default_timezone_set('Africa/Abidjan');
            $action = 'Ajout d\'un nouvel article:' . $article->getDesignation();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json(['result' => 'Article crée'], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/update/{id}', name: 'updateArticle', methods: ['POST'])]
    public function update($id, Request $request): JsonResponse
    {

        $manager = $this->doctrine->getManager();
        $repoArticle = $this->doctrine->getRepository(Article::class);

        $article = $repoArticle->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $repofamille = $this->doctrine->getRepository(Famille::class);

        $json = $this->getJson($request);

        $form = $this->formFactory->createNamed('', ArticleType::class, $article,
            ['user' => $this->getMaster()]);

        $form->submit($json);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $famille = $repofamille->findOneBy(['id' => $json['famille'], 'user' => $this->getMaster()]);
            $article->setFamille($famille);
            $manager->persist($article);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = 'Mise à jour de l\'article:' . $article->getDesignation();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();


            return $this->json(['result' => 'Article modifié'], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/ajouter/{id}', name: 'ajouterArticle', methods: ['POST'])]
    public function ajouterArticle($id, Request $request): JsonResponse
    {

        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();
        $repoArticle = $this->doctrine->getRepository(Article::class);

        $article = $repoArticle->findOneBy(['id' => $id]);
        $newarticle = new article();
        $newarticle->setArticle($article);
        $newarticle->setDobyuser($this->getUser());
        $newarticle->setUser($this->getMaster());
        $newarticle->setDesignation($article->getDesignation());
        $newarticle->setFamille($article->getFamille());
        $newarticle->setSousfamille($article->getSousfamille());
        $newarticle->setReference($article->getReference());
        $newarticle->setCode($article->getCode());
        $newarticle->setUnite($article->getUnite());
        $newarticle->setTypear($article->getTypear());
        $newarticle->setPu($article->getArticle());
        $newarticle->setMonnaies($article->getMonnaies());
        $newarticle->setMarque($article->getMarque());
        $newarticle->setDescription($article->getDescription());

        $manager->persist($newarticle);
        $manager->flush();

        return $this->json(['result' => 'Article modifié'], 200);
    }

    #[Route(path: '/partage/{id}', name: 'rempartage')]
    public function delpartage($id = null)
    {
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repoArticle = $this->doctrine->getRepository(Article::class);
        $repoPartage = $this->doctrine->getRepository(Partager::class);

        // RETROUVE L'ARTICLES
        $article = $repoArticle->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $partage = $repoPartage->findOneBy(['article' => $article, 'user' => $this->getMaster()]);
        if (!$article) {
            $this->redirectToRoute('logout');
        }

        $article->setPartage('non');
        $manager->persist($article);
        $manager->remove($partage);
        $manager->flush();
        return $this->json(['result' => 'success'], 200);

    }

    #[Route(path: '/delete/{id}', name: 'delarticle')]
    public function delarticle($id)
    {
        $manager = $this->doctrine->getManager();
        // REPOSITORIES
        $repoArticle = $this->doctrine->getRepository(Article::class);

        // RETROUVE L'ARTICLES
        $article = $repoArticle->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$article) {
            $this->redirectToRoute('logout');
        }

        if ($article) {
            $manager->remove($article);
            $manager->flush();
        }

        date_default_timezone_set('Africa/Abidjan');
        $action = 'Suppression de l\'article:' . $article->getDesignation();
        $history = new Historique();
        $history->setUser($this->getMaster());
        $history->setDobyuser($this->getUser());
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();

        return $this->json(['result' => 'success'], 200);
    }

    #[Route(path: '/deletecate/{id}', name: 'delcate')]
    public function delcate($id = null)
    {
        $manager = $this->doctrine->getManager();
        // REPOSITORIES
        $repoFamille = $this->doctrine->getRepository(Famille::class);

        // RETROUVE LA CATEGORIE
        $cate = $repoFamille->findOneBy(['id' => $id, 'user' => $this->getUser()]);
        if (!$cate) {
            $this->redirectToRoute('logout');
        }
        if ($cate) {
            $manager->remove($cate);
            $manager->flush();
        }
        return $this->json(['result' => 'success'], 200);

    }

    #[Route(path: '/deletesec/{id}', name: 'delsec')]
    public function delsec($id = null)
    {
        $manager = $this->doctrine->getManager();
        // REPOSITORIES
        $repoSousfamille = $this->doctrine->getRepository(Sousfamille::class);

        // RETROUVE LA CATEGORIE
        $biblio = $repoSousfamille->findOneBy(['id' => $id]);
        if (!$biblio) {
            $this->redirectToRoute('logout');
        }
        $cate = $biblio->getCategorie();

        if (!$cate->getUser() !== $this->getUser()) {
            $this->redirectToRoute('logout');
        }
        if ($biblio) {
            $manager->remove($biblio);
            $manager->flush();
        }

        return $this->json(['result' => 'success'], 200);
    }

    #[Route(path: '/migrate/{id}', name: 'artmigrate')]
    public function artmigrate($id): JsonResponse
    {
        // LES REPOSITORIES
        $repoArticle = $this->doctrine->getRepository(Article::class);
        $repoFamille = $this->doctrine->getRepository(Famille::class);
        $manager = $this->doctrine->getManager();

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

        // ON AJOUTE L'ARTICLE S'IL EXISTE PAS
        if (!$artik) {
            $famille = $repoFamille->findOneBy(['famille' => $article->getFamille()->getFamille(), 'user' => $this->getUser()]);
            $arti->setUser($this->getUser());
            $arti->setDesignation($article->getDesignation());
            $arti->setUnite($article->getUnite());
            $arti->setStock('1');
            $arti->setPu($article->getPu());
            $arti->setReference($article->getReference());
            $arti->setVente('non');
            $arti->setCode($article->getCode());
            $arti->setMonnaies($article->getMonnaies());
            $arti->setArticle($article);
            $arti->setFamille($famille);

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

    #[Route(path: '/vente/{idarticle}', name: 'vente')]
    public function vente($idarticle): JsonResponse
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repoArticle = $this->doctrine->getRepository(Article::class);

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

    #[Route(path: '/search/{rech}', name: 'searchRef', methods: ['POST'])]
    function searchRef($rech = null): JsonResponse
    {
        $repoArticle = $this->doctrine->getRepository(Article::class);
        $articles = $repoArticle->chArticles($rech, $this->getMaster());
        $i = 0;
        $data = [];
        foreach ($articles as $p) {
            $i = $i + 1;
        }


        $data[] = ['count' => $i];
        foreach ($articles as $p) {
            $data[] = ['refe' => $p->getDesignation(), 'id' => $p->getId()];
        }

        $po = json_encode($data);
        return $this->json(['result' => $po], 200);
    }

    #[Route(path: '/', name: 'article')]
    #[Route(path: '/{id}', name: 'editArticle', requirements: ['id' => '\d+'])]
    #[Route(path: '/famille/{idfamille}', name: 'editfamille')]
    #[Route(path: '/sousfamille/{idsousfamille}', name: 'editSousfamille')]
    #[Route(path: '/fournisseur/{idfourn}', name: 'editfourn')]
    public function index(int $id = null, int $idfamille = null, int $idsousfamille = null, int $idfourn = null, Request $request)
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repoArticle = $this->doctrine->getRepository(Article::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoFamille = $this->doctrine->getRepository(Famille::class);
        $repoSousfamille = $this->doctrine->getRepository(Sousfamille::class);
        $repoFourn = $this->doctrine->getRepository(Fournisseur::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoMonnaie = $this->doctrine->getRepository(Monnaie::class);

        // ABONNEMENT
        $now = new \DateTime('NOW');
        $today = $now->format('Y-m-d H:i:s');
        if ($today > $this->getMaster()->getEnddate()->format('Y-m-d H:i:s')) {
            return $this->redirectToRoute('compte', ['type' => 'abonnement']);
        }

        // RECUPERE LES TRAVAUX VALIDÉES ET VERIFICATION
        $prt = $repoChantier->findOneBy(['user' => $this->getMaster(), 'type' => 'frais']);
        $prte = $repoChantier->findOneBy(['user' => $this->getMaster(), 'type' => 'personnel']);
        $cps = $repoChantier->findOneBy(['user' => $this->getMaster(), 'type' => 'compose']);

        if (!$prt) {
            $cli = new Client();
            $cli->setUser($this->getMaster());
            $cli->setDobyuser($this->getMaster());
            $cli->setNomClient($this->getMaster()->getSociete());
            $cli->setCode($this->getMaster()->getSociete());
            $cli->setType('caisse');
            $manager->persist($cli);
            $manager->flush();

            $prt = new Chantier();
            $prt->setClient($cli);
            $prt->setUser($this->getMaster());
            $prt->setDobyuser($this->getMaster());
            $prt->setNomChantier('Frais interne');
            $prt->setType('frais');
            $idpro = (string)random_int(0, 999999);
            $prt->setIdchantier($idpro);

            $prte = new Chantier();
            $prte->setClient($cli);
            $prte->setUser($this->getMaster());
            $prte->setDobyuser($this->getMaster());
            $prte->setNomChantier('Personnel');
            $prte->setType('personnel');
            $idpro = (string)random_int(0, 999999);
            $prte->setIdchantier($idpro);
            $manager->persist($prte);
            $manager->persist($prt);
            $manager->flush();
        }
        if (!$cps) {
            if ($prte) {
                $cli = $prte->getClient();
            } else {
                $cli = new Client();
                $cli->setUser($this->getMaster());
                $cli->setDobyuser($this->getMaster());
                $cli->setNomClient($this->getMaster()->getSociete());
                $cli->setCode($this->getMaster()->getSociete());
                $cli->setType('compose');
                $manager->persist($cli);
                $manager->flush();
            }


            $cps = new Chantier();
            $cps->setClient($cli);
            $cps->setUser($this->getMaster());
            $cps->setDobyuser($this->getMaster());
            $cps->setNomChantier('compose');
            $cps->setType('article composé');
            $idpro = (string)random_int(0, 999999);
            $cps->setIdchantier($idpro);
            $manager->persist($cps);
            $manager->persist($cps);
            $manager->flush();

        }

        $chantier = $repoChantier->findOneBy(['type' => 'article composé', 'user' => $this->getMaster()]);
        $devis = $repoDevis->findOneBy(['chantier' => $chantier, 'user' => $this->getMaster()]);

        $repoCompte = $this->doctrine->getRepository(Compte::class);
        $compte = $repoCompte->findOneBy(['user' => $this->getMaster()]);
        $monnaie = $repoMonnaie->findOneBy(['id' => 1]);

        if (!$devis) {
            $devis = new Devis();
            $devis->setZone('non');
            $devis->setAarem('non');
            $devis->setPtva('oui');
            $devis->setTva('18');
            $devis->setEtat('save');
            $devis->setTotalht('0');
            $devis->setVtva(0);
            $devis->setVremise('0');
            $devis->setTotalttc(0);
            $devis->setdevReference('Articles composés');
            $devis->setDate(new \DateTime('NOW'));
            $devis->setChantier($chantier);
            $devis->setMonnaie($monnaie);
            $devis->setClient($chantier->getClient());
            $devis->setAbasetva('non');
            $devis->setModele(1);
            $devis->setAaref('non');
            $devis->setUser($this->getMaster());
            $devis->setDobyuser($this->getUser());
            $devis->setModel(1);
            $devis->setAcomrage(0);
            $devis->setFinition('0');
            $devis->setProrata('0');
            $devis->setGarantie('0');
            $devis->setType("cps");

            $der = $repoDevis->findBy(['user' => $this->getMaster()], ['id' => 'DESC'], 1);
            if ($der) {
                $rang = $der[0]->getRang() + 1;
                $devis->setRang($rang);
                $devis->setIddevis(($compte->getCompteDevis() . $rang));
            } else {
                $devis->setRang(1);
                $devis->setIddevis(($compte->getCompteDevis() . '1'));
            }

            $manager->persist($devis);
            $manager->flush();
        }


        // RECUPERATION DES FAMILLES
        $familles = $repoFamille->findBy(['user' => $this->getMaster()]);

        // ON RECUPERE L'ARTICLE A MODIFIER ET ON VERIIFE S'IL EXISTE
        if ($id !== null) {
            $article = $repoArticle->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        } else {
            $article = new Article();
            $article->setStock('0');
            $article->setUser($this->getMaster());
        }

        // FORMULAIRE ARTICLE
        $form = $this->formFactory->createNamed('', ArticleType::class, $article, ['user' => $this->getMaster()]);


        // FAMILLE D'ARTICLES ET SON FORMULAIRE
        if ($idfamille === null) {
            $famille = new Famille();
            $famille->setUser($this->getMaster());
        } else {
            $famille = $repoFamille->findOneBy(['id' => $idfamille, 'user' => $this->getMaster()]);
        }
        $forme = $this->formFactory->createNamed('', FamilleType::class, $famille);

        if ($idfourn === null) {
            $fournisseur = new Fournisseur();
            $fournisseur->setUser($this->getMaster());
        } else {
            $fournisseur = $repoFourn->findOneBy(['id' => $idfourn]);
        }
        $formfourn = $this->formFactory->createNamed('', FournisseurType::class, $fournisseur,
            [
                'type' => 'article'
            ]
        );

        // SOUSFAMILLE D'ARTICLES ET SON FORMULAIRE
        if ($idsousfamille === null) {
            $sousfamille = new Sousfamille();
            $sousfamille->setUser($this->getMaster());
        } else {
            $sousfamille = $repoSousfamille->findOneBy(['id' => $idsousfamille]);
        }
        $formo = $this->formFactory->createNamed('', SousfamilleType::class, $sousfamille,
            ['user' => $this->getMaster()]);

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

        $repoUser = $this->doctrine->getRepository(User::class);

        //GESTION DE COMPTE
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUsername()]);

        $droitcreerarticle = 0;

        $fournisseurs = $repoFourn->findBy(['user' => $this->getMaster()]);
        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        $fist = $repoFourn->findBy(['user' => $this->getMaster(), 'fournisseur' => 'aucun']);
        if (!$fist) {
            $fist = new Fournisseur();
            $fist->setFournisseur("Aucun");
            $fist->setType(1);
            $fist->setUser($this->getMaster());
            $manager->persist($fist);
            $manager->flush();
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
            'editArticle' => $article->getId() !== null,
            'idarticle' => $id,
            'idfamille' => $idfamille,
            'idsfamille' => $idsousfamille,
            'editFamille' => $famille->getId() !== null,
            'editFourn' => $fournisseur->getId() !== null,
            'idfourn' => $idfourn,
            'editSousfamille' => $sousfamille->getId() !== null,
            'familles' => $familles,
            'fournisseurs' => $fournisseurs,
            'droitcreerarticle' => $droitcreerarticle,
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'page' => 'article',
            'history' => $historiques
        ]);
    }
}
