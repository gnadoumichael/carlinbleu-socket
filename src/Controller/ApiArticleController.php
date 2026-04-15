<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Corbeille;
use App\Entity\Famille;
use App\Entity\Fournisseur;
use App\Entity\Historique;
use App\Entity\Materiel;
use App\Entity\Monnaie;
use App\Entity\Sousfamille;
use App\Entity\Typear;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;


#[Route(path: '/api/article')]
class ApiArticleController extends AbstractController
{

    #[Route(path: '/get', name: 'api_article', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function gertArticles(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoArticle = $doctrine->getRepository(Article::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $article = $repoArticle->findBy(['user' => $master], ['designation' => 'ASC']);
        return $this->json($article, 200, ['Content-Type' => 'application/json'], ['groups' => 'articles']);
    }

    #[Route(path: '/add/{idfamille}/{idfour}/{type}/{idmonnaie}', name: 'api_add_article', methods: ['POST'])]
    public function add_Articles(int $idfamille, int $idfour, int $type, int $idmonnaie,  Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoFournisseur = $doctrine->getRepository(Fournisseur::class);
        $repoFamille = $doctrine->getRepository(Famille::class);
        $repoMonnaie = $doctrine->getRepository(Monnaie::class);
        $repoTypear = $doctrine->getRepository(Typear::class);

        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $aparticle = $serializer->deserialize($apjson, Article::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $article = new Article();
        $article->setUser($master);
        $article->setDesignation($aparticle->getDesignation());
        $article->setUnite($aparticle->getUnite());
        $article->setStock($aparticle->getStock());
        $article->setMarque($aparticle->getMarque());
        $article->setPu($aparticle->getPu());
        $article->setDobyuser($apuser);
        $article->setReference($aparticle->getReference());
        $article->setDisponibilite($aparticle->getDisponibilite());

        $fournisseur = $repoFournisseur->findOneBy(['id' => $idfour, 'user' => $master]);
        $famille = $repoFamille->findOneBy(['id' => $idfamille, 'user' => $master]);
        $typear = $repoTypear->findOneBy(['id' => $type]);
        $monnaie = $repoMonnaie->findOneBy(['id' => $idmonnaie]);

        $article->setFamille($famille);
        $article->setfamille($famille);
        $article->setTypear($typear);
        $article->setMonnaies($monnaie);
        if($fournisseur){
            $article->setFournisseur($fournisseur);
        }

        $manager->persist($article);
        $manager->flush();

        date_default_timezone_set('Africa/Abidjan');
        $action = 'Ajout d\'un nouvel article:'.$article->getDesignation();
        $history = new Historique();
        $history->setUser($master);
        $history->setDobyuser($this->getUser());
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();

        return $this->json($article, 200, ['Content-Type' => 'application/json'], ['groups' => 'articles']);

    }

    #[Route(path: '/update/{id}/{idfamille}/{idfour}/{type}/{monnaie}', name: 'api_upd_article', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function upd_Articles(int $idfamille, int $monnaie, int $id, int $idfour, int $type, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoArticle = $doctrine->getRepository(Article::class);
        $repoMonnaie = $doctrine->getRepository(Monnaie::class);
        $repoFournisseur = $doctrine->getRepository(Fournisseur::class);
        $repoTypear = $doctrine->getRepository(Typear::class);
        $repoFamille = $doctrine->getRepository(Famille::class);

        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $aparticle = $serializer->deserialize($apjson, Article::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $article = $repoArticle->findOneBy(['id' => $id, 'user' => $master]);

        $devise = $repoMonnaie->findOneBy(['id' => $monnaie]);
        $fournisseur = $repoFournisseur->findOneBy(['id' => $idfour, 'user' => $master]);
        $famille = $repoFamille->findOneBy(['id' => $idfamille, 'user' => $master]);
        $typear = $repoTypear->findOneBy(['id' => $type]);

        
        $article->setDesignation($aparticle->getDesignation());
        $article->setUnite($aparticle->getUnite());
        $article->setStock($aparticle->getStock());
        $article->setMarque($aparticle->getMarque());
        $article->setPu($aparticle->getPu());
        $article->setDobyuser($apuser);
        $article->setReference($aparticle->getReference());
        $article->setDisponibilite($aparticle->getDisponibilite());
        $article->setMonnaies($devise);
        $article->setFamille($famille);

        $article->setTypear($typear);
        if($fournisseur){$article->setFournisseur($fournisseur);}

        $manager->persist($article);
        $manager->flush();

        date_default_timezone_set('Africa/Abidjan');
        $action = 'Mise de l\'article:'.$article->getDesignation();
        $history = new Historique();
        $history->setUser($master);
        $history->setDobyuser($this->getUser());
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();

        return $this->json($article, 200, ['Content-Type' => 'application/json'], ['groups' => 'articles']);

    }

    #[Route(path: '/delete/{id}', name: 'api_del_article', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function del_Articles(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoArticle = $doctrine->getRepository(Article::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $article = $repoArticle->findOneBy(['id' => $id, 'user' => $master]);

        if ($article) {
            $manager->remove($article);
            $manager->flush();
        }

        date_default_timezone_set('Africa/Abidjan');
        $action = 'Suppression de l\'article:'.$article->getDesignation();
        $history = new Historique();
        $history->setUser($master);
        $history->setDobyuser($this->getUser());
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();


        $articles = $repoArticle->findBy(['user' => $master], ['designation' => 'ASC']);
        return $this->json($articles, 200, ['Content-Type' => 'application/json'], ['groups' => 'articles']);

    }

    #[Route('/famille/python/get', name: 'api_get_famille_article')]
    public function getFamillesArticle(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoFamille = $doctrine->getRepository(Famille::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $familles = $repoFamille->findFamilles($master);

        return $this->json($familles, 200, ['Content-Type' => 'application/json'], ['groups' => 'familles']);
    }

    #[Route('/famille/python/add/{fam}', name: 'api_add_famille_article')]
    public function addeFamilles(string $fam, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoFamille = $doctrine->getRepository(Famille::class);

        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $famille = new Famille();
        $famille->setUser($master);
        $famille->setType(1);
        $famille->setFamille($fam);
        $manager->persist($famille);
        $manager->flush();

        return $this->json($famille, 200, ['Content-Type' => 'application/json'], ['groups' => 'familles']);

    }

    #[Route('/famille/python/update/{id}/{fam}', name: 'api_upd_famille_article')]
    public function updFamilles(int $id, string $fam, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoFamille = $doctrine->getRepository(Famille::class);

        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $famille = $repoFamille->findOneBy(['id' => $id, 'user' => $master]);

        $famille->setType(1);
        $famille->setFamille($fam);
        $manager->persist($famille);
        $manager->flush();

        return $this->json($famille, 200, ['Content-Type' => 'application/json'], ['groups' => 'familles']);
    }

    #[Route('/famille/python/del/{id}', name: 'api_del_famille_article')]
    public function delFamille(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoFamille = $doctrine->getRepository(Famille::class);
        $repoCorbeille = $doctrine->getRepository(Corbeille::class);

        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $famille = $repoFamille->findOneBy(['id' => $id, 'user' => $master]);

        $cor = $repoCorbeille->findOneBy(['designation' => $famille->getId(), 'master' => $master, 'type' => 10]);
        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($famille->getId());
            $corbeille->setMaster($master);
            $corbeille->setEtat('faible');
            $corbeille->setType('10');
            $manager->persist($corbeille);
            $manager->flush();
            $core = $repoCorbeille->findOneBy(['designation' => $famille->getId(), 'master' => $master, 'type' => 10]);
            $famille->setCorbeille($core);
            $manager->persist($famille);
            $manager->flush();

            $familles = $repoFamille->findBy(['user' => $master, 'type' => 1], ['famille' => 'ASC']);
            return $this->json($familles, 200, ['Content-Type' => 'application/json'], ['groups' => 'familles']);
        }
        return $this->json(['result' => 'erreur'], 400);
    }

    #[Route('/sousfamille/python/get', name: 'api_get_sousfamille_article')]
    public function getSousFamillesArticle(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoSousFamille = $doctrine->getRepository(Sousfamille::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $sousfamilles = $repoSousFamille->findBy(['user' => $master], ['sousfamille' => 'ASC']);
        return $this->json($sousfamilles, 200, ['Content-Type' => 'application/json'], ['groups' => 'sousfamilles']);
    }

    #[Route('/sousfamille/python/add/{idfam}/{sousfam}', name: 'api_add_sousfamille_article')]
    public function addSousFamilles(int $idfam, string $sousfam, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoFamille = $doctrine->getRepository(Famille::class);
        $repoSousFamille = $doctrine->getRepository(Sousfamille::class);

        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $famille = $repoFamille->findOneBy(['id' => $idfam, 'user' => $master]);

        $sous = new Sousfamille();
        $sous->setUser($master);
        $sous->setFamille($famille);
        $sous->setSousfamille($sousfam);
        $manager->persist($sous);
        $manager->flush();

        $sousfamilles = $repoSousFamille->findBy(['user' => $master], ['sousfamille' => 'ASC']);
        return $this->json($sousfamilles, 200, ['Content-Type' => 'application/json'], ['groups' => 'sousfamilles']);
    }

    #[Route('/sousfamille/python/update/{idfamille}/{sousfam}/{idsous}', name: 'api_upd_sousfamille_article')]
    public function updSousFamilles(int $idfamille, string $sousfam, int $idsous,  Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoFamille = $doctrine->getRepository(Famille::class);
        $repoSousFamille = $doctrine->getRepository(Sousfamille::class);

        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $famille = $repoFamille->findOneBy(['id' => $idfamille, 'user' => $master]);
        $sousfamille = $repoSousFamille->findOneBy(['id' => $idsous, 'user' => $master]);

        $sousfamille->setFamille($famille);
        $sousfamille->setSousfamille($sousfam);
        $manager->persist($sousfamille);
        $manager->flush();

        $sousfamilles = $repoSousFamille->findBy(['user' => $master], ['sousfamille' => 'ASC']);
        return $this->json($sousfamilles, 200, ['Content-Type' => 'application/json'], ['groups' => 'sousfamilles']);
    }

    #[Route('/sousfamille/python/del/{id}', name: 'api_del_sousfamille_article')]
    public function delSousFamille(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoSousFamille = $doctrine->getRepository(Sousfamille::class);
        $repoCorbeille = $doctrine->getRepository(Corbeille::class);
        $repoArticle = $doctrine->getRepository(Article::class);

        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $sous = $repoSousFamille->findOneBy(['id' => $id, 'user' => $master]);

        $cor = $repoCorbeille->findOneBy(['designation' => $sous->getId(), 'master' => $master, 'type' => 7]);
        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($sous->getId());
            $corbeille->setMaster($master);
            $corbeille->setEtat('faible');
            $corbeille->setType('7');
            $manager->persist($corbeille);
            $manager->flush();
            $core = $repoCorbeille->findOneBy(['designation' => $sous->getId(), 'master' => $master, 'type' => 7]);
            $sous->setCorbeille($core);
            $manager->persist($sous);
            $manager->flush();

            $sousfamilles = $repoSousFamille->findBy(['user' => $master], ['sousfamille' => 'ASC']);
            return $this->json($sousfamilles, 200, ['Content-Type' => 'application/json'], ['groups' => 'sousfamilles']);
        }

        return $this->json(['result' => 'erreur'], 400);
    }

    #[Route('/fournisseur/get', name: 'api_get_fournisseur_article')]
    public function getFournisseurArticle(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoFournisseur = $doctrine->getRepository(Fournisseur::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $fournisseurs = $repoFournisseur->findBy(['user' => $master, 'type' => 1], ['fournisseur' => 'ASC']);
        return $this->json($fournisseurs, 200, ['Content-Type' => 'application/json'], ['groups' => 'fournisseurs']);
    }

    #[Route('/fournisseur/python/add/{fou}', name: 'api_add_fournisseur_article')]
    public function adderFournisseur(string $fou, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $fournisseur = $serializer->deserialize($apjson, Fournisseur::class, 'json');


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $fournisseur->setFournisseur($fou);
        $fournisseur->setUser($master);
        $fournisseur->setType(1);
        $manager->persist($fournisseur);
        $manager->flush();

        $repoArticle = $doctrine->getRepository(Article::class);
        $article = $repoArticle->findBy(['user' => $apuser], ['designation' => 'ASC']);
        return $this->json($article, 200, ['Content-Type' => 'application/json'], ['groups' => 'articles']);
    }

    #[Route('/fournisseur/update/{id}/{fou}', name: 'api_upd_fournisseur_article')]
    public function updFournisseur(int $id, string $fou, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoFournisseur = $doctrine->getRepository(Fournisseur::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $four = $serializer->deserialize($apjson, Fournisseur::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $fournisseur = $repoFournisseur->findOneBy(['id' => $id, 'user' => $master]);

        $fournisseur->setFournisseur($fou);
        $fournisseur->setUser($master);
        $fournisseur->setTelephone($four->getTelephone());
        $fournisseur->setMobile($four->getMobile());
        $fournisseur->setMail($four->getMail());
        $fournisseur->setAdresse($four->getAdresse());
        $fournisseur->setType(1);
        $manager->persist($fournisseur);
        $manager->flush();

        $repoArticle = $doctrine->getRepository(Article::class);
        $article = $repoArticle->findBy(['user' => $apuser], ['designation' => 'ASC']);
        return $this->json($article, 200, ['Content-Type' => 'application/json'], ['groups' => 'articles']);
    }

    #[Route('/fournisseur/delete/{id}', name: 'api_del_fournisseur_article')]
    public function delFournisseur(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoFournisseur = $doctrine->getRepository(Fournisseur::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $fournisseur = $repoFournisseur->findOneBy(['id' => $id, 'user' => $master]);

        $manager->remove($fournisseur);
        $manager->flush();

        $repoArticle = $doctrine->getRepository(Article::class);
        $article = $repoArticle->findBy(['user' => $apuser], ['designation' => 'ASC']);
        return $this->json($article, 200, ['Content-Type' => 'application/json'], ['groups' => 'articles']);
    }

}
