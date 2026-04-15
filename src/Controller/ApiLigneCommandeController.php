<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Bon;
use App\Entity\Groupe;
use App\Entity\Ligne;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route(path: '/api/ligne/commande')]
class ApiLigneCommandeController extends AbstractController
{

    private ManagerRegistry $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function ajourBon (Bon $bon, ManagerRegistry $doctrine): void
    {
        $manager = $doctrine->getManager();
        $th = 0;
        $rem = 0;
        $ttc = 0;
        $vtva = 0;

        foreach ($bon->getLignes() as $lig) {
            if ($bon->getAarem() === 'oui') {
                $th = (($lig->getQuantite() * $lig->getPu()) * (((100) - $lig->getRemise()) / 100)) + $th;
                $rem = (($lig->getQuantite() * $lig->getPu()) * (($lig->getRemise()) / 100)) + $rem;
            }
            if ($bon->getAarem() === 'non') {
                $th = ($lig->getQuantite() * $lig->getPu()) + $th;
            }
        }

        $vtva = ($th * $bon->getTva()) / 100;

        if ($bon->getPtva() === "oui") {
            $ttc = $th + $vtva;
        } else {
            $ttc = $th;
        }


        $bon->setTotalttc($ttc);
        $bon->setTotalht($th);
        $bon->setVtva($vtva);
        $bon->setVremise($rem);

        $manager->persist($bon);
        $manager->flush();

    }

    #[Route(path: '/get/{id}', name: 'apilignecommande', methods: ['POST'])]
    public function index($id, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoCommande = $this->doctrine->getRepository(Bon::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $bon = $repoCommande->findOneBy(['user' => $master, 'id' => $id]);
        $apligne = $bon->getLignes();

        return $this->json($apligne, 200, ['Content-Type' => 'application/json'], ['groups' => 'ligne']);

    }
    
    #[Route(path: '/choix/{idar}/{idgr}/{idbon}', name: 'api_ligne_commande_choix_add', methods: ['POST'])]
    public function addLiigne(int $idar, int $idgr, int $idbon, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoCommande = $this->doctrine->getRepository(Bon::class);
        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoArticle = $this->doctrine->getRepository(Article::class);
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $ligne = $serializer->deserialize($apjson, Ligne::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $this->doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $article = $repoArticle->findOneBy(['id' => $idar, 'user' => $master]);
        $apbon = $repoCommande->findOneBy(['user' => $master, 'id' => $idbon]);


        $lignez = new Ligne();
        if($apbon->getType() === "prepa"){
            $lignez->setReste($ligne->getQuantite());
        }
        $lignez->setDesignation($article->getDesignation());
        $lignez->setBon($apbon);
        $lignez->setUnite($article->getUnite());
        $lignez->setQuantite($ligne->getQuantite());
        $lignez->setPu($article->getPu());
        $lignez->setUser($master);
        $lignez->setReference($ligne->getReference());
            $lignez->setChantier($apbon->getChantier());
        $lignez->setType(2);
        if($idgr != 0){
            $apgroupe = $repoGroupe->findOneBy(['bon' => $apbon, 'id' => $idgr]);
            $lignez->setGroupe($apgroupe);
        }
        if ($apbon->getAarem() === 'oui') {
            $lignez->setRemise($ligne->getRemise());
        }
        $lignez->setArticle($article);
        $manager->persist($lignez);
        $manager->flush();

        $th = 0;
        $rem = 0;

        $lignes = $repoLigne->findBy(['bon' => $apbon]);
        foreach ($lignes as $lig) {
            if ($apbon->getAarem() === 'oui') {
                $th += $lig->getQuantite() * $lig->getPu() * ((100 - $lig->getRemise()) / 100);
                $vtva = ($th * $apbon->getTva()) / 100;
                $rem += $lig->getQuantite() * $lig->getPu() * ($lig->getRemise() / 100);
                if ($apbon->getPtva() === 'oui') {
                    $ttc = $th + $vtva;
                } else {
                    $ttc = $th;
                }

            } else {
                $th += $lig->getQuantite() * $lig->getPu();
                $vtva = ($th * $apbon->getTva()) / 100;
                if ($apbon->getPtva() === 'oui') {
                    $ttc = $th + $vtva;
                } else {
                    $ttc = $th;
                }
            }
        }


        $apbon->setTotalht($th);
        $apbon->setTotalttc($ttc);
        $manager->persist($apbon);
        $manager->flush();

        return $this->json($apbon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);

    }

    #[Route(path: '/designation/{idbon}/{idgr}', name: 'api_ligne_commande_designation_add', methods: ['POST'])]
    public function addDesi(int $idbon, int $idgr, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoCommande = $this->doctrine->getRepository(Bon::class);
        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $ligne = $serializer->deserialize($apjson, Ligne::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $this->doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $bon = $repoCommande->findOneBy(['user' => $master, 'id' => $idbon]);

        $lignez = new Ligne();
        $lignez->setDesignation($ligne->getDesignation());
        $lignez->setBon($bon);
        $lignez->setUnite($ligne->getUnite());
        $lignez->setQuantite($ligne->getQuantite());
        $lignez->setPu($ligne->getPu());
        $lignez->setUser($master);
        $lignez->setReference($ligne->getReference());
        $lignez->setChantier($bon->getChantier());
        $lignez->setType(2);
        if ($bon->getAarem() === 'oui') {
            $lignez->setRemise($ligne->getRemise());
        }
        if($idgr != null){
            $apgroupe = $repoGroupe->findOneBy(['bon' => $bon, 'id' => $idgr]);
            $lignez->setGroupe($apgroupe);
        }
        $manager->persist($lignez);
        $manager->flush();

        $th = 0;
        $rem = 0;

        $lignes = $repoLigne->findBy(['bon' => $bon]);
        foreach ($lignes as $lig) {
            if ($bon->getAarem() === 'oui') {
                $th += $lig->getQuantite() * $lig->getPu() * ((100 - $lig->getRemise()) / 100);
                $vtva = ($th * $bon->getTva()) / 100;
                $rem += $lig->getQuantite() * $lig->getPu() * ($lig->getRemise() / 100);
                if ($bon->getPtva() === 'oui') {
                    $ttc = $th + $vtva;
                } else {
                    $ttc = $th;
                }

            } else {
                $th += $lig->getQuantite() * $lig->getPu();
                $vtva = ($th * $bon->getTva()) / 100;
                if ($bon->getPtva() === 'oui') {
                    $ttc = $th + $vtva;
                } else {
                    $ttc = $th;
                }
            }
        }


        $bon->setTotalht($th);
        $bon->setTotalttc($ttc);
        $manager->persist($bon);
        $manager->flush();

        return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);

    }

    #[Route(path: '/delete/{id}/{idbon}', name: 'api_ligne_commande_delete_ligne', methods: ['POST'])]
    public function delligne(int $id ,int $idbon ,Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoCommande = $this->doctrine->getRepository(Bon::class);
        $repoLigne = $this->doctrine->getRepository(Ligne::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $this->doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $bon = $repoCommande->findOneBy(['user' => $master, 'id' => $idbon]);
        $apligne = $repoLigne->findOneBy(['id'=>$id, 'bon'=>$bon]);
        $manager->remove($apligne);
        $manager->flush();

        $th = 0;
        $rem = 0;

        $lignes = $repoLigne->findBy(['bon' => $bon]);
        foreach ($lignes as $lig) {
            if ($bon->getAarem() === 'oui') {
                $th += $lig->getQuantite() * $lig->getPu() * ((100 - $lig->getRemise()) / 100);
                $vtva = ($th * $bon->getTva()) / 100;
                $rem += $lig->getQuantite() * $lig->getPu() * ($lig->getRemise() / 100);
                if ($bon->getPtva() === 'oui') {
                    $ttc = $th + $vtva;
                } else {
                    $ttc = $th;
                }

            } else {
                $th += $lig->getQuantite() * $lig->getPu();
                $vtva = ($th * $bon->getTva()) / 100;
                if ($bon->getPtva() === 'oui') {
                    $ttc = $th + $vtva;
                } else {
                    $ttc = $th;
                }
            }
        }

        $bon->setVremise($rem);
        $bon->setTotalht($th);
        $bon->setTotalttc($ttc);
        $manager->persist($bon);
        $manager->flush();

        return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);

    }

    #[Route(path: '/update/{id}/{idbon}/{idgr}', name: 'api_ligne_commande_update_ligne', methods: ['POST'])]
    public function update(int $idgr = null, int $id, int $idbon , Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoCommande = $this->doctrine->getRepository(Bon::class);
        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $ligne = $serializer->deserialize($apjson, Ligne::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $this->doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $bon = $repoCommande->findOneBy(['user' => $master, 'id' => $idbon]);
        $lignez = $repoLigne->findOneBy(['id'=>$id, 'bon'=>$bon]);
        if($idgr !== 0){
            $apgroupe = $repoGroupe->findOneBy(['bon' => $bon, 'id' => $idgr]);
            $lignez->setGroupe($apgroupe);
        }else{
            $lignez->setGroupe(null);
        }

        $lignez->setDesignation($ligne->getDesignation());
        $lignez->setBon($bon);
        $lignez->setUnite($ligne->getUnite());
        $lignez->setQuantite($ligne->getQuantite());
        $lignez->setPu($ligne->getPu());
        $lignez->setUser($master);
        $lignez->setReference($ligne->getReference());
        $lignez->setChantier($bon->getChantier());
        $lignez->setType(2);
        if ($bon->getAarem() === 'oui') {
            $lignez->setRemise($ligne->getRemise());
        }
        $manager->persist($lignez);
        $manager->flush();

        $th = 0;
        $rem = 0;

        $lignes = $repoLigne->findBy(['bon' => $bon]);
        foreach ($lignes as $lig) {
            if ($bon->getAarem() === 'oui') {
                $th += $lig->getQuantite() * $lig->getPu() * ((100 - $lig->getRemise()) / 100);
                $vtva = ($th * $bon->getTva()) / 100;
                $rem += $lig->getQuantite() * $lig->getPu() * ($lig->getRemise() / 100);

            } else {
                $th += $lig->getQuantite() * $lig->getPu();
                $vtva = ($th * $bon->getTva()) / 100;
            }
            if ($bon->getPtva() === 'oui') {
                $ttc = $th + $vtva;
            } else {
                $ttc = $th;
            }
        }


        $bon->setTotalht($th);
        $bon->setTotalttc($ttc);
        $manager->persist($bon);
        $manager->flush();

        return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
    }

    #[Route(path: '/valeur/upd/{id}/{val}/{idbon}/{type}', name: 'api_lignebon_ref_upd', methods: ['POST'])]
    public function upddevref(int $id, $val, int $idbon, string $type, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);
        $repoBon = $doctrine->getRepository(Bon::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        $master = $apuser->getCompte() === null ? $apuser : $repoUser->find($apuser->getCompte());

        $ligne = $repoLigne->findOneBy(['id' => $id, 'user' => $master]);
        $bon = $repoBon->findOneBy(['id' => $idbon, 'user' => $master]);

        if (!$ligne) return $this->json(['error' => 'Ligne not found'], 404);
        if (!$bon) return $this->json(['error' => 'bon not found'], 404);

        // Convertir $val selon le type attendu
        switch ($type) {
            case 'reference':
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
        if($type === "qte") $ligne->setQuantite($val);
        if($type === "remise") $ligne->setRemise($val);
        if($type === "pu") $ligne->setPu($val);
        if($type === "unite") $ligne->setUnite($val);

        $manager->persist($ligne);
        $manager->flush();

        $this->ajourBon($bon, $doctrine);

        return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
    }

}
