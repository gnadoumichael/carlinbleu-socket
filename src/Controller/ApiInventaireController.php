<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Bon;
use App\Entity\Chantier;
use App\Entity\Ligne;
use App\Entity\Projet;
use App\Entity\Recap;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;


#[Route(path: '/api/inventaire')]
class ApiInventaireController extends AbstractController
{

    #[Route(path: '/chantier/{id}', name: 'apiinventaires', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function getArticle(Request $request, int $id, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoArticle = $doctrine->getRepository(Article::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);
        $repoRecap = $doctrine->getRepository(Recap::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['user' => $master, 'id' => $id]);
        $data = [];

        $articles = $repoArticle->chArticlesligne($master);
        foreach ($articles as $article) {
            $tt = false;
            $stock = 0;
            $bon = [];
            $recap = $repoRecap->findOneBy(['chantier'=>$chantier, 'article'=>$article]);

            if($recap){
                $stock = $recap->getQuantite();
            }

            $lignes = $repoLigne->findBy(['article' => $article,'chantier'=>$chantier,]);

            foreach ($lignes as $ligne) {
                if($ligne->getBon()){
                    $bonn = $ligne->getBon();
                    if($bonn->getEtat() === "valide" and $bonn->getType() !== "prepa"){
                    $tt = true;
                    $qte = $ligne->getQuantite();
                    $bon[] = [
                        'numbon' => $ligne->getBon()->getNumbon(),
                        'pu' => $article->getPu(),
                        'quantite' => $qte
                    ];
                    }
                }
            }

            if($tt){
                $data[] = [
                    'article' => $article->getDesignation(),
                    'bon' => $bon,
                    'stock' => $stock
                ];
            }
        }
        return new JsonResponse($data);

    }

    #[Route(path: '/chantier/python/{id}', name: 'api_inventaire', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function getPythonArticle(Request $request, int $id, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['user' => $master, 'id' => $id]);
        $invente = $repoLigne->inventaire($chantier->getId());

        return $this->json($invente, 200, ['Content-Type' => 'application/json'], ['groups' => 'pyligne']);


    }

    #[Route(path: '/recap/add/{idchan}/{idar}/{qte}', name: 'api_recap_add', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function addrecap(Request $request, int $idchan, int $idar, int $qte, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoArticle = $doctrine->getRepository(Article::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $manager = $doctrine->getManager();

        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['user' => $master, 'id' => $idchan]);
        $article = $repoArticle->findOneBy(['user' => $master, 'id' => $idar]);

        $recap = new Recap();
        $recap->setUser($master);
        $recap->setDobyuser($apuser);
        $recap->setChantier($chantier);
        $recap->setQuantite($qte);
        $recap->setArticle($article);

        $manager->persist($recap);
        $manager->flush();

        return $this->json(['result' => 'success'], 200);

    }


}
