<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Chantier;
use App\Entity\Devis;
use App\Entity\Groupe;
use App\Entity\Ligne;
use App\Entity\Projet;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;


#[Route(path: '/api/ligne/devis')]
class ApiLigneDevisController extends AbstractController
{

    public function ajourDevis(Devis $devis, ManagerRegistry $doctrine)
    {
        $manager = $doctrine->getManager();
        $th = 0;
        $rem = 0;

        if ($devis->getAbasetva() === 'non') {
            foreach ($devis->getLignes() as $lig) {
                if ($devis->getAarem() === 'oui') {
                    $th = (($lig->getQuantite() * $lig->getPu()) * (((100) - $lig->getRemise()) / 100)) + $th;
                    $rem = (($lig->getQuantite() * $lig->getPu()) * (($lig->getRemise()) / 100)) + $rem;
                }
                if ($devis->getAarem() === 'non') {
                    $th = ($lig->getQuantite() * $lig->getPu()) + $th;
                }
                if ($devis->getAarem() === 'tht') {
                    $th = ($lig->getQuantite() * $lig->getPu()) + $th;
                }
            }

        }

        if ($devis->getAbasetva() === 'oui') {
            foreach ($devis->getLignes() as $lig) {
                if ($devis->getAarem() === 'oui') {
                    $rem = $rem + ((($lig->getQuantite() * $lig->getPu()) * $lig->getRemise()) / 100);
                    $th = (($lig->getQuantite() * $lig->getPu()) * (((100) - $lig->getRemise()) / 100)) + $th;
                } else {
                    $th = ($lig->getQuantite() * $lig->getPu()) + $th;
                }
            }
        }


        if ($devis->getAarem() === 'tht') {
            $rem = ($th * $devis->getRemtht()) / 100;
            $th = $th - $rem;
        }

        if ($devis->getAbasetva() === 'non') {
            $vtva = ($th * $devis->getTva()) / 100;
        } else {
            $vtva = ($devis->getBasetva() * $devis->getTva()) / 100;
        }

        if ($devis->getPtva() === "oui" || $devis->getPtva() === 'susp') {
            $ttc = $th + $vtva;
        } else {
            $ttc = $th;
        }


        $devis->setTotalttc($ttc);
        $devis->setTotalht($th);
        $devis->setVtva($vtva);
        $devis->setVremise($rem);

        $manager->persist($devis);
        $manager->flush();

    }

    #[Route(path: '/get/{id}', name: 'apilignedevis', methods: ['POST'])]
    public function index(int $id , Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repodevis = $doctrine->getRepository(Devis::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $devis = $repodevis->findOneBy(['user' => $master, 'id' => $id]);
        $apligne = $repoLigne->getlignedevis($devis);

        return $this->json($apligne, 200, ['Content-Type' => 'application/json'], ['groups' => 'ligne']);

    }

    #[Route(path: '/choix/{idar}/{idgr}/{iddev}', name: 'api_ligne_devis_choix_add', methods: ['POST'])]
    public function addLiigne(int $idar , int $idgr = null, int $iddev , Request $request,
                              SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoArticle = $doctrine->getRepository(Article::class);
        $repoGroupe = $doctrine->getRepository(Groupe::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $ligne = $serializer->deserialize($apjson, Ligne::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $article = $repoArticle->findOneBy(['id' => $idar, 'user' => $master]);
        $devis = $repoDevis->findOneBy(['user' => $master, 'id' => $iddev]);

        $lignez = new Ligne();
        $lignez->setDesignation($article->getDesignation());
        $lignez->setDevis($devis);
        $lignez->setUnite($article->getUnite());
        $lignez->setQuantite($ligne->getQuantite());
        $lignez->setPu($article->getPu());
        $lignez->setUser($master);
        $lignez->setZone($ligne->getZone());
        $lignez->setReference($ligne->getReference());
        $lignez->setChantier($devis->getChantier());
        $lignez->setType(1);
        if($idgr !== 0){
            $apgroupe = $repoGroupe->findOneBy(['devis' => $devis, 'id' => $idgr]);
            $lignez->setGroupe($apgroupe);
        }
        if ($devis->getAarem() === 'oui') {
            $lignez->setRemise($ligne->getRemise());
        }else{
            $lignez->setRemise("0");
        }
        $lignez->setArticle($article);
        $manager->persist($lignez);
        $manager->flush();

        $this->ajourDevis($devis, $doctrine);
        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'pydevis']);

    }

    #[Route(path: '/designation/{id}/{idgr}', name: 'api_ligne_devis_designation_add', methods: ['POST'])]
    public function addDesi(int $id, int $idgr = null, Request $request,
                            SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoGroupe = $doctrine->getRepository(Groupe::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $ligne = $serializer->deserialize($apjson, Ligne::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $devis = $repoDevis->findOneBy(['user' => $master, 'id' => $id]);

        $lignez = new Ligne();
        $lignez->setType(1);
        $lignez->setAvancement(0);
        $lignez->setDesignation($ligne->getDesignation());
        $lignez->setDevis($devis);
        $lignez->setUnite($ligne->getUnite());
        $lignez->setQuantite($ligne->getQuantite());
        $lignez->setPu($ligne->getPu());
        $lignez->setUser($master);
        $lignez->setZone($ligne->getZone());
        $lignez->setReference($ligne->getReference());
        $lignez->setChantier($devis->getChantier());
        if($idgr !== 0){
            $groupe = $repoGroupe->findOneBy(['id' => $idgr]);
            $lignez->setGroupe($groupe);
        }

        if ($devis->getAarem() === 'oui') {
            $lignez->setRemise($ligne->getRemise());
        } else {
            $lignez->setRemise(0);
        }
        $manager->persist($lignez);
        $manager->flush();

        $this->ajourDevis($devis, $doctrine);
        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'pydevis']);
    }

    #[Route(path: '/delete/{id}/{iddev}', name: 'api_ligne_devis_delete_ligne', methods: ['POST'])]
    public function delligne(int $id ,int $iddev, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $devis = $repoDevis->findOneBy(['user' => $master, 'id' => $iddev]);
        $apligne = $repoLigne->findOneBy(['id'=>$id, 'devis'=>$devis]);

        $manager->remove($apligne);
        $manager->flush();


        $this->ajourDevis($devis, $doctrine);
        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);

    }

    #[Route(path: '/update/{id}/{iddev}/{idgr}', name: 'api_ligne_devis_update_ligne', methods: ['POST'])]
    public function update(int $idgr = null, int $id , int $iddev , Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);
        $repoGroupe = $doctrine->getRepository(Groupe::class);

        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $ligne = $serializer->deserialize($apjson, Ligne::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $devis = $repoDevis->findOneBy(['user' => $master, 'id' => $iddev]);
        $lignez = $repoLigne->findOneBy(['id'=>$id, 'devis'=>$devis]);
        if($idgr !== 0){
            $apgroupe = $repoGroupe->findOneBy(['devis' => $devis, 'id' => $idgr]);
            $lignez->setGroupe($apgroupe);
        }else{
            $lignez->setGroupe(null);
        }

        
        $lignez->setDesignation($ligne->getDesignation());
        $lignez->setDevis($devis);
        $lignez->setUnite($ligne->getUnite());
        $lignez->setQuantite($ligne->getQuantite());
        $lignez->setZone($ligne->getZone());
        $lignez->setPu($ligne->getPu());
        $lignez->setUser($master);
        $lignez->setReference($ligne->getReference());
        $lignez->setChantier($devis->getChantier());
        $lignez->setType(1);

        if ($devis->getAarem() === 'oui') {
            $lignez->setRemise($ligne->getRemise());
        }

        $manager->persist($lignez);
        $manager->flush();

        $this->ajourDevis($devis, $doctrine);
        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);

    }


    #[Route(path: '/valeur/upd/{id}/{val}/{iddev}/{type}', name: 'api_ligne_ref_upd', methods: ['POST'])]
    public function upddevref(int $id, $val, int $iddev, string $type, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);
        $repoDevis = $doctrine->getRepository(Devis::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        $master = $apuser->getCompte() === null ? $apuser : $repoUser->find($apuser->getCompte());

        $ligne = $repoLigne->findOneBy(['id' => $id, 'user' => $master]);
        $devis = $repoDevis->findOneBy(['id' => $iddev, 'user' => $master]);

        if (!$ligne) return $this->json(['error' => 'Ligne not found'], 404);
        if (!$devis) return $this->json(['error' => 'Devis not found'], 404);

        // Convertir $val selon le type attendu
        switch ($type) {
            case 'reference':
            case 'zone':
            case 'unite':
                $val = (string)$val;
                break;
            case 'qte':
                // Remplacer la virgule par un point pour les float
                $val = str_replace(',', '.', $val);

                if (is_numeric($val)) {
                    $val = strpos($val, '.') !== false ? (float)$val : (int)$val;
                } else {
                    // Par défaut, mettre 0 si ce n'est pas numérique (ou renvoyer une erreur)
                    $val = 0;
                }
                break;
            case 'pu':
                // Remplacer la virgule par un point pour les float
                $val = str_replace(',', '.', $val);

                if (is_numeric($val)) {
                    $val = strpos($val, '.') !== false ? (float)$val : (int)$val;
                } else {
                    // Par défaut, mettre 0 si ce n'est pas numérique (ou renvoyer une erreur)
                    $val = 0;
                }
                break;
            case 'remise':
                // Remplacer la virgule par un point pour les float
                $val = str_replace(',', '.', $val);

                if (is_numeric($val)) {
                    $val = strpos($val, '.') !== false ? (float)$val : (int)$val;
                } else {
                    // Par défaut, mettre 0 si ce n'est pas numérique (ou renvoyer une erreur)
                    $val = 0;
                }
                break;
            default:
                return $this->json(['error' => 'Type inconnu'], 400);
        }

        // Appliquer la valeur
        if($type === "reference") $ligne->setReference($val);
        if($type === "zone") $ligne->setZone($val);
        if($type === "qte") $ligne->setQuantite($val);
        if($type === "remise") $ligne->setRemise($val);
        if($type === "pu") $ligne->setPu($val);
        if($type === "unite") $ligne->setUnite($val);

        $manager->persist($ligne);
        $manager->flush();

        $this->ajourDevis($devis, $doctrine);

        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
    }


}
