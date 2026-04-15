<?php

namespace App\Controller;

use App\Entity\Alerte;
use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Chantier;
use App\Entity\Compte;
use App\Entity\Contact;
use App\Entity\Corbeille;
use App\Entity\Devis;
use App\Entity\Documents;
use App\Entity\Facture;
use App\Entity\Forme;
use App\Entity\Fournisseur;
use App\Entity\Groupe;
use App\Entity\Historique;
use App\Entity\Ligne;
use App\Entity\Monnaie;
use App\Entity\Projet;
use App\Entity\User;
use App\Entity\Valider;
use Doctrine\Persistence\ManagerRegistry;
use PhpOffice\PhpSpreadsheet\Reader\Html;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;

/**
 * Class ApiCommandeController
 * @package App\Controller
 */
#[Route(path: '/api/commande')]
class ApiCommandeController extends AbstractController
{

    private ManagerRegistry $doctrine;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    function delete_directory($dirname): bool
    {
        if (is_dir($dirname))
            $dir_handle = opendir($dirname);
        if (!$dir_handle) {
            return false;
        }
        while ($file = readdir($dir_handle)) {
            if ($file !== "." && $file !== "..") {
                if (!is_dir($dirname . "/" . $file)) {
                    unlink($dirname . "/" . $file);
                } else {
                    $this->delete_directory($dirname . '/' . $file);
                }
            }
        }
        closedir($dir_handle);
        rmdir($dirname);
        return true;
    }

   public function jourChantier(Chantier $chantier): JsonResponse
   {
       $manager = $this->doctrine->getManager();

       // Initialisation des variables
       $cout = $depense = $bonfournisseurs = $bonprestataires = 0;
       $paiefournisseurs = $paieprestataires = 0;
       $chargechantiers = $chargepaiechantiers = 0;

       /** =======================
        *  GESTION DES CAISSES
        * ======================= */
       foreach ($chantier->getCaisses() as $caiss) {
           if ($caiss->getEtat() === "valide" && $caiss->getType() === 3 && $caiss->getCorbeille() === null) {
               $chargepaiechantiers += $caiss->getMontant();
           }

           if ($caiss->getType() === 3 && $caiss->getCorbeille() === null) {
               $chargechantiers += $caiss->getMontant();
           }
       }

       /** =======================
        *  GESTION DES DEVIS
        * ======================= */
       $deviss = $chantier->getDevis();

       if (count($deviss) > 0) {
           foreach ($deviss as $dev) {
               if ($dev->getCorbeille() === null && $dev->getType() === null) {
                   if (in_array($chantier->getEtat(), ["echouer", "etude"])) {
                       $cout += $dev->getTotalttc();
                   } elseif ($dev->getEtat() === "valide") {
                       $cout += $dev->getTotalttc();
                   }
               }
           }
       }

       $u = $uu = $somu = 0;

       foreach ($deviss as $dev) {
           if ($dev->getEtat() === "valide" && $dev->getCorbeille() === null && $dev->getType() === null) {
               ++$u;
               $somu += $dev->getTotalttc();

               foreach ($dev->getDecomptes() as $dec) {
                   if ($dec->getEtat() === "valide" && $dec->getCorbeille() === null) {
                       $uu += $dec->getTtc();
                   }
               }
           }

           // Acomptes
           $pourcent = 0;
           foreach ($dev->getAcomptes() as $acc) {
               $pourcent += (float)$acc->getPourcentage();
           }
           $dev->setAcomrage($pourcent);
           $manager->persist($dev);
       }

       /** =======================
        *  GESTION DES FACTURES
        * ======================= */
       foreach ($chantier->getFactures() as $facc) {
           if ($facc->getType() === "acompte") {
               $uu += $facc->getTotalTtc();
           }

           $ragler = 0;
           foreach ($facc->getRelever() as $rele) {
               $ragler += $rele->getMontant();
           }

           $facc->setRegler($ragler);
           $manager->persist($facc);
       }

       // État / progression du chantier
       if ($u === 0) {
           $chantier->setEtat("etude");
       } elseif ((float)$somu > 0) {
           $chantier->setProgression((string)(($uu / $somu) * 100));
       }

       /** =======================
        *  GESTION DES BONS
        * ======================= */
       foreach ($chantier->getBons() as $bo) {
           $fournisseur = $bo->getFournisseur();
           $devis = $bo->getDevis();

           // ✅ On ne prend en compte le bon que si le devis existe ET que sa corbeille est null
           if (!$devis || $devis->getCorbeille() !== null) {
               continue;
           }

           // Fournisseur valide
           if ($fournisseur !== null && $fournisseur->getCorbeille() === null) {
               // Dépenses
               if ($bo->getEtat() === 'valide' && $bo->getCorbeille() === null && $bo->getType() !== "none") {
                   if ($bo->getType() !== "non") {
                       $depense += $bo->getTotalttc();
                   } else {
                       $depense -= $bo->getTotalttc();
                   }
               }

               // Catégorisation des bons
               if ($bo->getEtat() === "valide" && $bo->getCorbeille() === null) {
                   switch ($bo->getType()) {
                       case "pst":
                           $bonprestataires += $bo->getTotalttc();
                           $paieprestataires += $bo->getRecu();
                           break;

                       case "oui":
                           $bonfournisseurs += $bo->getTotalttc();
                           $paiefournisseurs -= $bo->getRecu();
                           break;

                       case "non":
                           $bonfournisseurs -= $bo->getTotalttc();
                           $paiefournisseurs = $bo->getRecu() - $paiefournisseurs;
                           break;
                   }
               }
           }
       }

       /** =======================
        *  RÉGLEMENTS
        * ======================= */
       $regle = 0;
       foreach ($chantier->getReleves() as $relev) {
           if ($relev->getType() === 3 && $relev->getDevis()->getEtat() === 'valide') {
               $regle += $relev->getMontant();
           }
       }

       /** =======================
        *  SAUVEGARDE FINALE
        * ======================= */
       $chantier->setCout($cout);
       $chantier->setReglement($regle);
       $chantier->setDepense($depense);
       $chantier->setBonPrestataires($bonprestataires);
       $chantier->setBonFournisseurs($bonfournisseurs);
       $chantier->setPaieFournisseurs($paiefournisseurs);
       $chantier->setPaiePrestataires($paieprestataires);
       $chantier->setChargeChantiers($chargechantiers);
       $chantier->setChargePaieChantiers($chargepaiechantiers);

       $manager->persist($chantier);
       $manager->flush();

       return $this->json(['result' => 'success'], 200);
   }

    public function ajourBonLigne(Bon $bon)
    {
        $manager = $this->doctrine->getManager();
        if ($bon->getPreparation() !== null) {
            foreach ($bon->getPreparation()->getLignes() as $ligne) {
                $livrer = 0;
                foreach ($bon->getPreparation()->getBonprepration() as $bonn) {
                    if ($bonn->getEtat() === "valide") {
                        foreach ($bonn->getLignes() as $lign) {
                            if ($ligne->getArticle() === $lign->getArticle()) {
                                if ($bonn->getType() === "oui") {
                                    $livrer = $lign->getQuantite() + $livrer;
                                } else {
                                    $livrer =  $livrer - $lign->getQuantite();
                                }
                            }
                        }
                    }
                }
                $ligne->setLivrer($livrer);
                $ligne->setReste((float)$ligne->getQuantite() - (float)$livrer);
                $manager->persist($ligne);
                $manager->flush();
                foreach ($bon->getPreparation()->getBonprepration() as $bonn) {
                    foreach ($bonn->getLignes() as $lign) {
                        if ($ligne->getArticle() === $lign->getArticle()) {
                            $lign->setLivrer($livrer);
                            $lign->setReste((float)$ligne->getQuantite() - (float)$livrer);
                            $manager->persist($lign);
                            $manager->flush();
                        }
                    }
                }
            }
        }
    }

    #[Route(path: '/get/{id}', name: 'api_get_one_bon', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function index(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoBon = $doctrine->getRepository(Bon::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $bon = $repoBon->findOneBy(['id' => $id, 'user' => $master]);
        return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
    }

    #[Route(path: '/bonfournisseur/get', name: 'api_get_bons_fou', methods: ['POST'])]
    public function allbonsfournisseurs(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoBon = $doctrine->getRepository(Bon::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $bons = $repoBon->findBonFournisseurs($master);
        return $this->json($bons, 200, ['Content-Type' => 'application/json'], ['groups' => 'pyfournisseurs']);
    }

    #[Route(path: '/bonsuivi/get', name: 'api_get_bons_suivi', methods: ['POST'])]
    public function allbonssuivi(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoBon = $doctrine->getRepository(Bon::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $bons = $repoBon->findBonSuivi($master);
        return $this->json($bons, 200, ['Content-Type' => 'application/json'], ['groups' => 'pyfournisseurs']);
    }

     #[Route(path: '/suivi/{id}', name: 'bons_suivi', methods: ['POST'])]
    public function suivis(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoBon = $doctrine->getRepository(Bon::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }
        $bon = $repoBon->findOneBy(['id' => $id, 'user' => $master]);
        $bons = $repoBon->findByChan($master, $bon->getChantier(), "prepa");
        return $this->json($bons, 200, ['Content-Type' => 'application/json'], ['groups' => 'pyfournisseurs']);
    }

    #[Route(path: '/bonprestataire/get', name: 'api_get_bons_prestas', methods: ['POST'])]
    public function allbonsprestataire(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoBon = $doctrine->getRepository(Bon::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $bons = $repoBon->findBonPrestataires($master);
        return $this->json($bons, 200, ['Content-Type' => 'application/json'], ['groups' => 'pyfournisseurs']);
    }

    #[Route(path: '/chantier/{id}/{type}', name: 'api_commande', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function avoir(SerializerInterface $serializer, int $id, string $type, Request $request): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoCommande = $this->doctrine->getRepository(Bon::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $apuser]);
            $commandes = $repoCommande->findByChan($apuser, $chantier, $type);
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
            $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $master]);
            $commandes = $repoCommande->findByChan($master, $chantier, $type);
        }
        return $this->json($commandes, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
    }

    #[Route(path: '/valide/{num}', name: 'api_commande_valide_bon', methods: ['POST'])]
    public function valider(string $num, SerializerInterface $serializer, Request $request)
    {
        /** @var \App\Repository\UserRepository $repoUser */
        $repoUser = $this->doctrine->getRepository(User::class);

        /** @var \App\Repository\BonRepository $repoBon */
        $repoBon = $this->doctrine->getRepository(Bon::class);

        /** @var \App\Repository\ValiderRepository $repoValide */
        $repoValide = $this->doctrine->getRepository(Valider::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $this->doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $bon = $repoBon->findOneBy(['user' => $master, 'numbon' => $num]);

        if ($bon->getType() !== 'none') {
            $bon->setVabyuser($apuser);
            $check = $repoValide->findBy(['idlink' => $bon->getId(), 'type' => 2]);
            if (!$check) {
                $chantier = $bon->getChantier();
                $depense = $chantier->getDepense();

                if ($bon->getType() === 'oui') {
                    $operation = 'BON N°: ' . $bon->getNumbon() . ' | ' . $bon->getChantier()->getNomChantier();
                    $debit = $bon->getTotalttc();
                    $credit = 0;
                    $depense = $depense + $debit;
                    foreach ($bon->getLignes() as $ligne) {
                        if ($ligne->getArticle() !== null) {
                            $article = $ligne->getArticle();
                            $stock = floatval($ligne->getQuantite()) + floatval($article->getStock());
                            $article->setStock($stock);
                            $manager->persist($article);
                            $manager->flush();
                        }
                    }
                }
                if ($bon->getType() === 'non') {
                    $operation = 'BON DE RETOUR N°:' . $bon->getNumbon() . ' | ' . $bon->getChantier()->getNomChantier();
                    $credit = $bon->getTotalttc();
                    $debit = 0;
                    $depense = $depense - $credit;
                    foreach ($bon->getLignes() as $ligne) {
                        if ($ligne->getArticle() !== null) {
                            $article = $ligne->getArticle();
                            $stock = floatval($article->getStock()) - floatval($ligne->getQuantite());
                            $article->setStock($stock);
                            $manager->persist($article);
                            $manager->flush();
                        }
                    }
                }
                if ($bon->getType() === 'pst') {
                    $operation = 'BON N°: ' . $bon->getNumbon() . ' | ' . $bon->getChantier()->getNomChantier() . ' | ' . $bon->getFournisseur()->getFournisseur();
                    $debit = $bon->getTotalttc();
                    $credit = 0;
                    $depense = $depense + $debit;
                }
                if ($bon->getType() === 'none') {
                    $operation = 'BON DE LIVRAISON N°:' . $bon->getNumbon() . ' | ' . $bon->getChantier()->getNomChantier();
                    foreach ($bon->getLignes() as $ligne) {
                        if ($ligne->getArticle() !== null) {
                            $article = $ligne->getArticle();
                            $stock = $article->getStock() - $ligne->getQuantite();
                            $article->setStock($stock);
                            $manager->persist($article);
                            $manager->flush();
                        }
                    }
                }

                $chantier->setDepense($depense);
                $manager->persist($chantier);

                if ($bon->getType() !== 'none' && $bon->getType() !== 'prepa') {
                    $idlink = $bon->getId();
                    $valider = new Valider();
                    $valider->setOperation($operation);
                    $valider->setDate(new \DateTime('NOW'));
                    $valider->setType(2);
                    $valider->setChantier($bon->getChantier());
                    $valider->setIdlink($idlink);
                    $valider->setDebit($debit);
                    $valider->setCredit($credit);
                    $valider->setUser($master);
                    $valider->setDobyuser($apuser);
                    $manager->persist($valider);
                    $manager->flush();
                    $this->jourChantier($bon->getChantier());
                }

                $bon->setEtat('valide');
                $manager->persist($bon);
                $manager->flush();
                if ($bon->getType() === 'oui' || $bon->getType() === 'non') {
                    $this->ajourBonLigne($bon);
                }

                $repoUser = $this->doctrine->getRepository(User::class);
                $actio = '<p><u>Le bon N° : <a href=/crm/bon/' . $bon->getId() . '/' . $bon->getChantier()->getId() . '>' . $bon->getNumbon() . '</a> a été validé:</u><br># ' . $bon->getClient()->getNomClient() . '<br># ' . $bon->getChantier()->getNomChantier() .
                    '<br> par:<span class=col-blue bolo600>' . $apuser->getNom() . ' ' . $apuser->getPrenoms() . '</span></p>';

                $comptes = $repoUser->findBy(['compte' => $master]);

                foreach ($comptes as $compte) {
                    $alerte = new Alerte();
                    $alerte->setAlerte($actio);
                    $alerte->setUser($master);
                    $alerte->setDate(new \DateTime('NOW'));
                    $alerte->setOwner($compte);
                    $alerte->setTitre("BON FOURNISSEUR VALIDÉ");
                    $alerte->setRef($bon->getId());
                    $alerte->setStatut("false");
                    $alerte->setType("bon");
                    $manager->persist($alerte);
                    $manager->flush();
                }

                $alerte = new Alerte();
                $alerte->setAlerte($actio);
                $alerte->setUser($master);
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setOwner($master);
                $alerte->setTitre("BON FOURNISSEUR VALIDÉ");
                $alerte->setRef($bon->getId());
                $alerte->setStatut("false");
                $alerte->setType("bon");
                $manager->persist($alerte);
                $manager->flush();

                date_default_timezone_set('Africa/Abidjan');
                $action = " Validation du Bon N° : " . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
                $history = new Historique();
                $history->setUser($master);
                $history->setDobyuser($apuser);
                $history->setDate(new \DateTime('NOW'));
                $history->setAction($action);
                $manager->persist($history);
                $manager->flush();

                return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
            }
        }

        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/validone/{id}', name: 'api_commande_validone_bon', methods: ['POST'])]
    public function validone(int $id, SerializerInterface $serializer, Request $request)
    {
        $manager = $this->doctrine->getManager();

        $repoUser = $this->doctrine->getRepository(User::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoValide = $this->doctrine->getRepository(Valider::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if (!$apuser) {
            return $this->json(['result' => 'user_not_found'], 404);
        }
        $master = $apuser->getCompte() ? $repoUser->find($apuser->getCompte()) : $apuser;

        $bon = $repoBon->findOneBy(['user' => $master, 'id' => $id]);
        $chantier = $bon->getChantier();

        if ($bon->getType() !== 'none') {
            $bon->setVabyuser($apuser);
            $check = $repoValide->findBy(['idlink' => $bon->getId(), 'type' => 2]);
            if (!$check) {
                $depense = $chantier->getDepense();
                if ($bon->getType() === 'oui') {
                    $operation = 'BON N°: ' . $bon->getNumbon() . ' | ' . $bon->getChantier()->getNomChantier();
                    $debit = $bon->getTotalttc();
                    $credit = 0;
                    $depense = $depense + $debit;
                    foreach ($bon->getLignes() as $ligne) {
                        if ($ligne->getArticle() !== null) {
                            $article = $ligne->getArticle();
                            $stock = floatval($ligne->getQuantite()) + floatval($article->getStock());
                            $article->setStock($stock);
                            $manager->persist($article);
                            $manager->flush();
                        }
                    }
                }
                if ($bon->getType() === 'non') {
                    $operation = 'BON DE RETOUR N°:' . $bon->getNumbon() . ' | ' . $bon->getChantier()->getNomChantier();
                    $credit = $bon->getTotalttc();
                    $debit = 0;
                    $depense = $depense - $credit;
                    foreach ($bon->getLignes() as $ligne) {
                        if ($ligne->getArticle() !== null) {
                            $article = $ligne->getArticle();
                            $stock = floatval($article->getStock()) - floatval($ligne->getQuantite());
                            $article->setStock($stock);
                            $manager->persist($article);
                            $manager->flush();
                        }
                    }
                }
                if ($bon->getType() === 'pst') {
                    $operation = 'BON N°: ' . $bon->getNumbon() . ' | ' . $bon->getChantier()->getNomChantier() . ' | ' . $bon->getFournisseur()->getFournisseur();
                    $debit = $bon->getTotalttc();
                    $credit = 0;
                    $depense = $depense + $debit;
                }
                if ($bon->getType() === 'none') {
                    $operation = 'BON DE LIVRAISON N°:' . $bon->getNumbon() . ' | ' . $bon->getChantier()->getNomChantier();
                    foreach ($bon->getLignes() as $ligne) {
                        if ($ligne->getArticle() !== null) {
                            $article = $ligne->getArticle();
                            $stock = $article->getStock() - $ligne->getQuantite();
                            $article->setStock($stock);
                            $manager->persist($article);
                            $manager->flush();
                        }
                    }
                }

                $chantier->setDepense($depense);
                $manager->persist($chantier);

                if ($bon->getType() !== 'none' && $bon->getType() !== 'prepa') {
                    $idlink = $bon->getId();
                    $valider = new Valider();
                    $valider->setOperation($operation);
                    $valider->setDate(new \DateTime('NOW'));
                    $valider->setType(2);
                    $valider->setChantier($bon->getChantier());
                    $valider->setIdlink($idlink);
                    $valider->setDebit($debit);
                    $valider->setCredit($credit);
                    $valider->setUser($master);
                    $valider->setDobyuser($apuser);
                    $manager->persist($valider);
                    $manager->flush();
                    $this->jourChantier($bon->getChantier());
                }

                $bon->setEtat('valide');
                $manager->persist($bon);
                $manager->flush();
                if ($bon->getType() === 'oui' || $bon->getType() === 'non') {
                    $this->ajourBonLigne($bon);
                }

                $repoUser = $this->doctrine->getRepository(User::class);
                $actio = '<p><u>Le bon N° : <a href=/crm/bon/' . $bon->getId() . '/' . $bon->getChantier()->getId() . '>' . $bon->getNumbon() . '</a> a été validé:</u><br># ' . $bon->getClient()->getNomClient() . '<br># ' . $bon->getChantier()->getNomChantier() .
                    '<br> par:<span class=col-blue bolo600>' . $apuser->getNom() . ' ' . $apuser->getPrenoms() . '</span></p>';

                $comptes = $repoUser->findBy(['compte' => $master]);

                foreach ($comptes as $compte) {
                    $alerte = new Alerte();
                    $alerte->setAlerte($actio);
                    $alerte->setUser($master);
                    $alerte->setDate(new \DateTime('NOW'));
                    $alerte->setOwner($compte);
                    $alerte->setTitre("BON FOURNISSEUR VALIDÉ");
                    $alerte->setRef($bon->getId());
                    $alerte->setStatut("false");
                    $alerte->setType("bon");
                    $manager->persist($alerte);
                    $manager->flush();
                }

                $alerte = new Alerte();
                $alerte->setAlerte($actio);
                $alerte->setUser($master);
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setOwner($master);
                $alerte->setTitre("BON FOURNISSEUR VALIDÉ");
                $alerte->setRef($bon->getId());
                $alerte->setStatut("false");
                $alerte->setType("bon");
                $manager->persist($alerte);
                $manager->flush();

                date_default_timezone_set('Africa/Abidjan');
                $action = " Validation du Bon N° : " . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
                $history = new Historique();
                $history->setUser($master);
                $history->setDobyuser($apuser);
                $history->setDate(new \DateTime('NOW'));
                $history->setAction($action);
                $manager->persist($history);
                $manager->flush();

                $this->jourChantier($chantier);
                return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
            }
        }

        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/valid/{id}', name: 'api_commande_vali_bon', methods: ['POST'])]
    public function vali(int $id, SerializerInterface $serializer, Request $request)
    {
        $manager = $this->doctrine->getManager();

        $repoUser = $this->doctrine->getRepository(User::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoValide = $this->doctrine->getRepository(Valider::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if (!$apuser) {
            return $this->json(['result' => 'user_not_found'], 404);
        }
        $master = $apuser->getCompte() ? $repoUser->find($apuser->getCompte()) : $apuser;

        $bon = $repoBon->findOneBy(['user' => $master, 'id' => $id]);
        $chantier = $bon->getChantier();
        if ($bon->getType() !== 'none') {
            $bon->setVabyuser($apuser);
            $check = $repoValide->findBy(['idlink' => $bon->getId(), 'type' => 2]);
            if (!$check) {
                $depense = $chantier->getDepense();
                if ($bon->getType() === 'oui') {
                    $operation = 'BON N°: ' . $bon->getNumbon() . ' | ' . $bon->getChantier()->getNomChantier();
                    $debit = $bon->getTotalttc();
                    $credit = 0;
                    $depense = $depense + $debit;
                    foreach ($bon->getLignes() as $ligne) {
                        if ($ligne->getArticle() !== null) {
                            $article = $ligne->getArticle();
                            $stock = floatval($ligne->getQuantite()) + floatval($article->getStock());
                            $article->setStock($stock);
                            $manager->persist($article);
                            $manager->flush();
                        }
                    }
                }
                if ($bon->getType() === 'non') {
                    $operation = 'BON DE RETOUR N°:' . $bon->getNumbon() . ' | ' . $bon->getChantier()->getNomChantier();
                    $credit = $bon->getTotalttc();
                    $debit = 0;
                    $depense = $depense - $credit;
                    foreach ($bon->getLignes() as $ligne) {
                        if ($ligne->getArticle() !== null) {
                            $article = $ligne->getArticle();
                            $stock = floatval($article->getStock()) - floatval($ligne->getQuantite());
                            $article->setStock($stock);
                            $manager->persist($article);
                            $manager->flush();
                        }
                    }
                }
                if ($bon->getType() === 'pst') {
                    $operation = 'BON N°: ' . $bon->getNumbon() . ' | ' . $bon->getChantier()->getNomChantier() . ' | ' . $bon->getFournisseur()->getFournisseur();
                    $debit = $bon->getTotalttc();
                    $credit = 0;
                    $depense = $depense + $debit;
                }
                if ($bon->getType() === 'none') {
                    $operation = 'BON DE LIVRAISON N°:' . $bon->getNumbon() . ' | ' . $bon->getChantier()->getNomChantier();
                    foreach ($bon->getLignes() as $ligne) {
                        if ($ligne->getArticle() !== null) {
                            $article = $ligne->getArticle();
                            $stock = $article->getStock() - $ligne->getQuantite();
                            $article->setStock($stock);
                            $manager->persist($article);
                            $manager->flush();
                        }
                    }
                }

                $chantier->setDepense($depense);
                $manager->persist($chantier);

                if ($bon->getType() !== 'none' && $bon->getType() !== 'prepa') {
                    $idlink = $bon->getId();
                    $valider = new Valider();
                    $valider->setOperation($operation);
                    $valider->setDate(new \DateTime('NOW'));
                    $valider->setType(2);
                    $valider->setChantier($bon->getChantier());
                    $valider->setIdlink($idlink);
                    $valider->setDebit($debit);
                    $valider->setCredit($credit);
                    $valider->setUser($master);
                    $valider->setDobyuser($apuser);
                    $manager->persist($valider);
                    $manager->flush();
                    $this->jourChantier($bon->getChantier());
                }

                $bon->setEtat('valide');
                $manager->persist($bon);
                $manager->flush();
                if ($bon->getType() === 'oui' || $bon->getType() === 'non') {
                    $this->ajourBonLigne($bon);
                }

                $repoUser = $this->doctrine->getRepository(User::class);
                $actio = '<p><u>Le bon N° : <a href=/crm/bon/' . $bon->getId() . '/' . $bon->getChantier()->getId() . '>' . $bon->getNumbon() . '</a> a été validé:</u><br># ' . $bon->getClient()->getNomClient() . '<br># ' . $bon->getChantier()->getNomChantier() .
                    '<br> par:<span class=col-blue bolo600>' . $apuser->getNom() . ' ' . $apuser->getPrenoms() . '</span></p>';

                $comptes = $repoUser->findBy(['compte' => $master]);

                foreach ($comptes as $compte) {
                    $alerte = new Alerte();
                    $alerte->setAlerte($actio);
                    $alerte->setUser($master);
                    $alerte->setDate(new \DateTime('NOW'));
                    $alerte->setOwner($compte);
                    $alerte->setTitre("BON FOURNISSEUR VALIDÉ");
                    $alerte->setRef($bon->getId());
                    $alerte->setStatut("false");
                    $alerte->setType("bon");
                    $manager->persist($alerte);
                    $manager->flush();
                }

                $alerte = new Alerte();
                $alerte->setAlerte($actio);
                $alerte->setUser($master);
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setOwner($master);
                $alerte->setTitre("BON FOURNISSEUR VALIDÉ");
                $alerte->setRef($bon->getId());
                $alerte->setStatut("false");
                $alerte->setType("bon");
                $manager->persist($alerte);
                $manager->flush();

                date_default_timezone_set('Africa/Abidjan');
                $action = " Validation du Bon N° : " . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
                $history = new Historique();
                $history->setUser($master);
                $history->setDobyuser($apuser);
                $history->setDate(new \DateTime('NOW'));
                $history->setAction($action);
                $manager->persist($history);
                $manager->flush();

                $this->jourChantier($chantier);
                return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'chantierwin']);
            }
        }

        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/devalider/{num}', name: 'api_commande_devalider_bon', methods: ['POST'])]
    public function devalider(string $num, SerializerInterface $serializer, Request $request)
    {

        $repoUser = $this->doctrine->getRepository(User::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoValide = $this->doctrine->getRepository(Valider::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $this->doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $bon = $repoBon->findOneBy(['user' => $master, 'numbon' => $num]);
        $valide = $repoValide->findOneBy(['idlink' => $bon->getId(), 'type' => 2]);

        if ($valide) {
            if ($valide->getType() === 2) {
                if (!$bon) {
                    return $this->json(['result' => 'echec'], 404);
                }

                $chantier = $bon->getChantier();
                $depense = $chantier->getDepense();

                if ($bon->getType() === 'oui') {
                    $debit = $bon->getTotalttc();
                    $depense = $depense - $debit;
                }

                if ($bon->getType() === 'non') {
                    $credit = $bon->getTotalttc();
                    $depense = $depense + $credit;
                }

                $chantier->setDepense($depense);
                $manager->persist($chantier);

                $bon->setEtat('save');
                $bon->setVabyuser($this->getUser());
                $manager->persist($bon);
                $manager->remove($valide);
                $manager->flush();

                $repoUser = $this->doctrine->getRepository(User::class);
                $actio = '<p><u>Le bon N° : <a href=/crm/bon/' . $bon->getId() . '/' . $bon->getChantier()->getId() . '>' . $bon->getNumbon() . '</a> a été dévalidé:</u><br># ' . $bon->getClient()->getNomClient() . '<br># ' . $bon->getChantier()->getNomChantier() .
                    '<br> par:<span class=col-blue bolo600>' . $apuser->getNom() . ' ' . $apuser->getPrenoms() . '</span></p>';

                $comptes = $repoUser->findBy(['compte' => $master]);
                foreach ($comptes as $compte) {
                    $alerte = new Alerte();
                    $alerte->setAlerte($actio);
                    $alerte->setUser($master);
                    $alerte->setDate(new \DateTime('NOW'));
                    $alerte->setOwner($compte);
                    $alerte->setTitre("BON FOURNISSEUR DÉVALIDÉ");
                    $alerte->setRef($bon->getId());
                    $alerte->setStatut("false");
                    $alerte->setType("bon");
                    $manager->persist($alerte);
                    $manager->flush();
                }

                $alerte = new Alerte();
                $alerte->setAlerte($actio);
                $alerte->setUser($master);
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setOwner($master);
                $alerte->setTitre("BON FOURNISSEUR DÉVALIDÉ");
                $alerte->setRef($bon->getId());
                $alerte->setStatut("false");
                $alerte->setType("bon");
                $manager->persist($alerte);
                $manager->flush();

                date_default_timezone_set('Africa/Abidjan');
                $action = " Dévalidation du Bon N° : " . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
                $history = new Historique();
                $history->setUser($master);
                $history->setDobyuser($apuser);
                $history->setDate(new \DateTime('NOW'));
                $history->setAction($action);
                $manager->persist($history);
                $manager->flush();

                $this->ajourBonLigne($bon);

                return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
            }
        }
        if ($bon->getType() === "none") {
            $bon->setEtat('save');
            $manager->persist($bon);
            $manager->flush();
            foreach ($bon->getLignes() as $ligne) {
                if ($ligne->getArticle() !== null) {
                    $article = $ligne->getArticle();
                    $stock = $article->getStock() + $ligne->getQuantite();
                    $article->setStock($stock);
                    $manager->persist($article);
                    $manager->flush();
                }
            }
            return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
        }
        if ($bon->getType() === "prepa") {
            $bon->setEtat('save');
            $manager->persist($bon);
            $manager->flush();
            foreach ($bon->getLignes() as $ligne) {
                if ($ligne->getArticle() !== null) {
                    $article = $ligne->getArticle();
                    $stock = $article->getStock() + $ligne->getQuantite();
                    $article->setStock($stock);
                    $manager->persist($article);
                    $manager->flush();
                }
            }
            $this->ajourBonLigne($bon);
            return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
        }

        return $this->json(['result' => 'echec'], 404);
    }

    #[Route(path: '/deva/{id}', name: 'api_commande_deva_bon', methods: ['POST'])]
    public function deva(int $id, SerializerInterface $serializer, Request $request)
    {
        $manager = $this->doctrine->getManager();

        $repoUser = $this->doctrine->getRepository(User::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoValide = $this->doctrine->getRepository(Valider::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        if (!$apuser) {
            return $this->json(['result' => 'user_not_found'], 404);
        }

        $master = $apuser->getCompte() ? $repoUser->find($apuser->getCompte()) : $apuser;
        $bon = $repoBon->findOneBy(['user' => $master, 'id' => $id]);

        if (!$bon) {
            return $this->json(['result' => 'bon_not_found'], 404);
        }
        $valide = $repoValide->findOneBy(['idlink' => $bon->getId(), 'type' => 2]);
        $chantier = $bon->getChantier();

        if ($valide) {
            if ($valide->getType() === 2) {
                if (!$bon) {
                    return $this->json(['result' => 'echec'], 404);
                }
                $depense = $chantier->getDepense();

                if ($bon->getType() === 'oui') {
                    $debit = $bon->getTotalttc();
                    $depense = $depense - $debit;
                }

                if ($bon->getType() === 'non') {
                    $credit = $bon->getTotalttc();
                    $depense = $depense + $credit;
                }

                $chantier->setDepense($depense);
                $manager->persist($chantier);

                $bon->setEtat('save');
                $bon->setVabyuser($this->getUser());
                $manager->persist($bon);
                $manager->remove($valide);
                $manager->flush();

                $repoUser = $this->doctrine->getRepository(User::class);
                $actio = '<p><u>Le bon N° : <a href=/crm/bon/' . $bon->getId() . '/' . $bon->getChantier()->getId() . '>' . $bon->getNumbon() . '</a> a été dévalidé:</u><br># ' . $bon->getClient()->getNomClient() . '<br># ' . $bon->getChantier()->getNomChantier() .
                    '<br> par:<span class=col-blue bolo600>' . $apuser->getNom() . ' ' . $apuser->getPrenoms() . '</span></p>';

                $comptes = $repoUser->findBy(['compte' => $master]);
                foreach ($comptes as $compte) {
                    $alerte = new Alerte();
                    $alerte->setAlerte($actio);
                    $alerte->setUser($master);
                    $alerte->setDate(new \DateTime('NOW'));
                    $alerte->setOwner($compte);
                    $alerte->setTitre("BON FOURNISSEUR DÉVALIDÉ");
                    $alerte->setRef($bon->getId());
                    $alerte->setStatut("false");
                    $alerte->setType("bon");
                    $manager->persist($alerte);
                    $manager->flush();
                }

                $alerte = new Alerte();
                $alerte->setAlerte($actio);
                $alerte->setUser($master);
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setOwner($master);
                $alerte->setTitre("BON FOURNISSEUR DÉVALIDÉ");
                $alerte->setRef($bon->getId());
                $alerte->setStatut("false");
                $alerte->setType("bon");
                $manager->persist($alerte);
                $manager->flush();

                date_default_timezone_set('Africa/Abidjan');
                $action = " Dévalidation du Bon N° : " . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
                $history = new Historique();
                $history->setUser($master);
                $history->setDobyuser($apuser);
                $history->setDate(new \DateTime('NOW'));
                $history->setAction($action);
                $manager->persist($history);
                $manager->flush();

                $this->ajourBonLigne($bon);
                $this->jourChantier($chantier);

                return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'chantierwin']);
            }
        }
        if ($bon->getType() === "none") {
            $bon->setEtat('save');
            $manager->persist($bon);
            $manager->flush();
            foreach ($bon->getLignes() as $ligne) {
                if ($ligne->getArticle() !== null) {
                    $article = $ligne->getArticle();
                    $stock = $article->getStock() + $ligne->getQuantite();
                    $article->setStock($stock);
                    $manager->persist($article);
                    $manager->flush();
                }
            }
            $this->jourChantier($chantier);
            return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'chantierwin']);
        }
        if ($bon->getType() === "prepa") {
            $bon->setEtat('save');
            $manager->persist($bon);
            $manager->flush();
            foreach ($bon->getLignes() as $ligne) {
                if ($ligne->getArticle() !== null) {
                    $article = $ligne->getArticle();
                    $stock = $article->getStock() + $ligne->getQuantite();
                    $article->setStock($stock);
                    $manager->persist($article);
                    $manager->flush();
                }
            }
            $this->ajourBonLigne($bon);
            $this->jourChantier($chantier);
            return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'chantierwin']);
        }

        return $this->json(['result' => 'echec'], 404);
    }

    #[Route(path: '/devalidone/{id}', name: 'api_commande_devalidone_bon', methods: ['POST'])]
    public function devalidone(int $id, SerializerInterface $serializer, Request $request)
    {
        $manager = $this->doctrine->getManager();

        $repoUser = $this->doctrine->getRepository(User::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoValide = $this->doctrine->getRepository(Valider::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        if (!$apuser) {
            return $this->json(['result' => 'user_not_found'], 404);
        }

        $master = $apuser->getCompte() ? $repoUser->find($apuser->getCompte()) : $apuser;
        $bon = $repoBon->findOneBy(['user' => $master, 'id' => $id]);

        if (!$bon) {
            return $this->json(['result' => 'bon_not_found'], 404);
        }
        $valide = $repoValide->findOneBy(['idlink' => $bon->getId(), 'type' => 2]);
        $chantier = $bon->getChantier();

        if ($valide) {
            if ($valide->getType() === 2) {
                if (!$bon) {
                    return $this->json(['result' => 'echec'], 404);
                }
                $depense = $chantier->getDepense();

                if ($bon->getType() === 'oui') {
                    $debit = $bon->getTotalttc();
                    $depense = $depense - $debit;
                }

                if ($bon->getType() === 'non') {
                    $credit = $bon->getTotalttc();
                    $depense = $depense + $credit;
                }

                $chantier->setDepense($depense);
                $manager->persist($chantier);

                $bon->setEtat('save');
                $bon->setVabyuser($this->getUser());
                $manager->persist($bon);
                $manager->remove($valide);
                $manager->flush();

                $repoUser = $this->doctrine->getRepository(User::class);
                $actio = '<p><u>Le bon N° : <a href=/crm/bon/' . $bon->getId() . '/' . $bon->getChantier()->getId() . '>' . $bon->getNumbon() . '</a> a été dévalidé:</u><br># ' . $bon->getClient()->getNomClient() . '<br># ' . $bon->getChantier()->getNomChantier() .
                    '<br> par:<span class=col-blue bolo600>' . $apuser->getNom() . ' ' . $apuser->getPrenoms() . '</span></p>';

                $comptes = $repoUser->findBy(['compte' => $master]);
                foreach ($comptes as $compte) {
                    $alerte = new Alerte();
                    $alerte->setAlerte($actio);
                    $alerte->setUser($master);
                    $alerte->setDate(new \DateTime('NOW'));
                    $alerte->setOwner($compte);
                    $alerte->setTitre("BON FOURNISSEUR DÉVALIDÉ");
                    $alerte->setRef($bon->getId());
                    $alerte->setStatut("false");
                    $alerte->setType("bon");
                    $manager->persist($alerte);
                    $manager->flush();
                }

                $alerte = new Alerte();
                $alerte->setAlerte($actio);
                $alerte->setUser($master);
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setOwner($master);
                $alerte->setTitre("BON FOURNISSEUR DÉVALIDÉ");
                $alerte->setRef($bon->getId());
                $alerte->setStatut("false");
                $alerte->setType("bon");
                $manager->persist($alerte);
                $manager->flush();

                date_default_timezone_set('Africa/Abidjan');
                $action = " Dévalidation du Bon N° : " . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
                $history = new Historique();
                $history->setUser($master);
                $history->setDobyuser($apuser);
                $history->setDate(new \DateTime('NOW'));
                $history->setAction($action);
                $manager->persist($history);
                $manager->flush();

                $this->ajourBonLigne($bon);
                $this->jourChantier($chantier);

                return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
            }
        }
        if ($bon->getType() === "none") {
            $bon->setEtat('save');
            $manager->persist($bon);
            $manager->flush();
            foreach ($bon->getLignes() as $ligne) {
                if ($ligne->getArticle() !== null) {
                    $article = $ligne->getArticle();
                    $stock = $article->getStock() + $ligne->getQuantite();
                    $article->setStock($stock);
                    $manager->persist($article);
                    $manager->flush();
                }
            }
            $this->jourChantier($chantier);
            return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
        }
        if ($bon->getType() === "prepa") {
            $bon->setEtat('save');
            $manager->persist($bon);
            $manager->flush();
            foreach ($bon->getLignes() as $ligne) {
                if ($ligne->getArticle() !== null) {
                    $article = $ligne->getArticle();
                    $stock = $article->getStock() + $ligne->getQuantite();
                    $article->setStock($stock);
                    $manager->persist($article);
                    $manager->flush();
                }
            }
            $this->ajourBonLigne($bon);
            $this->jourChantier($chantier);
            return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
        }

        return $this->json(['result' => 'echec'], 404);
    }

    #[Route(path: '/dele/{id}', name: 'api_commande_dele_bon', methods: ['POST'])]
    public function dele(string $id, SerializerInterface $serializer, Request $request): JsonResponse
    {

        $manager = $this->doctrine->getManager();

        $repoUser = $this->doctrine->getRepository(User::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);
        $repoValider = $this->doctrine->getRepository(Valider::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if (!$apuser) {
            return $this->json(['result' => 'user_not_found'], 404);
        }

        $master = $apuser->getCompte() ? $repoUser->find($apuser->getCompte()) : $apuser;

        $bon = $repoBon->findOneBy(['user' => $master, 'id' => $id]);
        $cor = $repoCorbeille->findOneBy(['designation' => $bon->getId(), 'master' => $master, 'type' => 4]);

        $valider = $repoValider->findOneBy(['idlink' => $bon->getId(), 'type' => 2]);
        if ($valider) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($bon->getId());
            $corbeille->setMaster($master);
            $corbeille->setDelby($apuser);
            $corbeille->setEtat('faible');
            $corbeille->setType('4');
            $manager->persist($corbeille);
            $manager->flush();
            $bon->setCorbeille($corbeille);
            $manager->persist($bon);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = 'Suppression du Bon de commande N° : ' . $bon->getNumbon() . ' ' . $bon->getBonReference();
            $history = new Historique();
            $history->setUser($master);
            $history->setDobyuser($apuser);
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            $chantier = $bon->getChantier();
            $this->jourChantier($chantier);
            return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'pychantier']);
        }

        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/delone/{id}', name: 'api_commande_delone_bon', methods: ['POST'])]
    public function delone(string $id, SerializerInterface $serializer, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoUser = $this->doctrine->getRepository(User::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);
        $repoValider = $this->doctrine->getRepository(Valider::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if (!$apuser) {
            return $this->json(['result' => 'user_not_found'], 404);
        }

        $master = $apuser->getCompte() ? $repoUser->find($apuser->getCompte()) : $apuser;

        $bon = $repoBon->findOneBy(['user' => $master, 'id' => $id]);
        $cor = $repoCorbeille->findOneBy(['designation' => $bon->getId(), 'master' => $master, 'type' => 4]);

        $valider = $repoValider->findOneBy(['idlink' => $bon->getId(), 'type' => 2]);
        if ($valider) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($bon->getId());
            $corbeille->setMaster($master);
            $corbeille->setDelby($apuser);
            $corbeille->setEtat('faible');
            $corbeille->setType('4');
            $manager->persist($corbeille);
            $manager->flush();
            $bon->setCorbeille($corbeille);
            $manager->persist($bon);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = 'Suppression du Bon de commande N° : ' . $bon->getNumbon() . ' ' . $bon->getBonReference();
            $history = new Historique();
            $history->setUser($master);
            $history->setDobyuser($apuser);
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            $chantier = $bon->getChantier();
            $this->jourChantier($chantier);
            return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
        }

        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/delete/{num}', name: 'api_commande_delete_bon', methods: ['POST'])]
    public function delete(string $num, SerializerInterface $serializer, Request $request): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);
        $repoValider = $this->doctrine->getRepository(Valider::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $this->doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
            $bon = $repoBon->findOneBy(['user' => $apuser, 'numbon' => $num]);
            $cor = $repoCorbeille->findOneBy(['designation' => $bon->getId(), 'master' => $apuser, 'type' => 4]);
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
            $bon = $repoBon->findOneBy(['user' => $master, 'numbon' => $num]);
            $cor = $repoCorbeille->findOneBy(['designation' => $bon->getId(), 'master' => $master, 'type' => 4]);
        }

        $valider = $repoValider->findOneBy(['idlink' => $bon->getId(), 'type' => 2]);
        if ($valider) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($bon->getId());
            $corbeille->setMaster($master);
            $corbeille->setDelby($apuser);
            $corbeille->setEtat('faible');
            $corbeille->setType('4');
            $manager->persist($corbeille);
            $manager->flush();
            $bon->setCorbeille($corbeille);
            $manager->persist($bon);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = 'Suppression du Bon de commande N° : ' . $bon->getNumbon() . ' ' . $bon->getBonReference();
            $history = new Historique();
            $history->setUser($master);
            $history->setDobyuser($apuser);
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json(['result' => 'bon suprimé'], 200);
        }

        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/restaurer/{id}', name: 'api_commande_restauree_bon', methods: ['POST'])]
    public function restaurer(string $id, SerializerInterface $serializer, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoUser = $this->doctrine->getRepository(User::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if (!$apuser) {
            return $this->json(['result' => 'user_not_found'], 404);
        }

        $master = $apuser->getCompte() ? $repoUser->find($apuser->getCompte()) : $apuser;
        $bon = $repoBon->findOneBy(['user' => $master, 'id' => $id]);

        if (!$bon) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $corbeille = $repoCorbeille->findOneBy(['designation' => $bon->getId(), 'type' => '4']);

        if ($corbeille) {
            $bon->setCorbeille(null);
            $manager->persist($bon);
            $manager->flush();
            $manager->remove($corbeille);
            $manager->flush();

            $repoUser = $this->doctrine->getRepository(User::class);
            $comptes = $repoUser->findBy(['compte' => $master]);

            foreach ($comptes as $compte) {
                $alerte = new Alerte();
                $alerte->setTitre($bon->getNumbon() . " restauré");
                $alerte->setAlerte($bon->getChantier()->getClient()->getNomclient() . " | " . $bon->getChantier()->getNomchantier());
                $alerte->setUser($master);
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setStatut("false");
                $alerte->setOwner($compte);
                $manager->persist($alerte);
                $manager->flush();
            }

            $alerte = new Alerte();
            $alerte->setTitre($bon->getNumbon() . " restauré");
            $alerte->setAlerte($bon->getChantier()->getClient()->getNomclient() . " | " . $bon->getChantier()->getNomchantier());
            $alerte->setUser($master);
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setStatut("false");
            $alerte->setOwner($master);
            $manager->persist($alerte);
            $manager->flush();

            $action = " Restauration du Bon N° : " . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
            $history = new Historique();
            $history->setUser($master);
            $history->setDobyuser($apuser);
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);


        }

        return $this->json(['result' => 'erreur'], 404);


    }

    #[Route(path: '/pdf/get', name: 'api_commande_pdf_bon', methods: ['POST'])]
    public function pdff(SerializerInterface $serializer, Request $request): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);
        $repoForme = $this->doctrine->getRepository(Forme::class);
        $repoDocuments = $this->doctrine->getRepository(Documents::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $manager = $this->doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $apbon = $serializer->deserialize($apjson, Bon::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $bon = $repoBon->findOneBy(['user' => $master, 'numbon' => $apbon->getNumbon()]);

        $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'bon', 'numero' => $bon->getId(), 'etat' => 'no']);

        if ($docu) {
            $this->delete_directory('pdf/' . $docu->getFolde());
            $manager->remove($docu);
            $manager->flush();
        }


        $lignes = $repoLigne->findBy(['bon' => $bon]);
        $listegroupe = $repoGroupe->findBy(
            ['bon' => $bon],
            ['groupe' => 'ASC']
        );

        $th = 0;
        $rem = 0;
        $ttc = 0;
        $vtva = 0;

        foreach ($lignes as $lig) {
            if ($bon->getAarem() === 'oui') {
                $th = (($lig->getQuantite() * $lig->getPu()) * (((100) - $lig->getRemise()) / 100)) + $th;
                $vtva = ($th * $bon->getTva()) / 100;
                $rem = (($lig->getQuantite() * $lig->getPu()) * (($lig->getRemise()) / 100)) + $rem;
                $ttc = $th + $vtva;
            } else {
                $th = ($lig->getQuantite() * $lig->getPu()) + $th;
                $vtva = ($th * $bon->getTva()) / 100;
                $ttc = $th + $vtva;
            }
        }

        $bon->setTotalht($th);
        $bon->setTotalttc($ttc);
        $manager->persist($bon);
        $manager->flush();


        // RECUPERATION DES MISES EN FORME
        $forme = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);

        $subject = 'BON DE COMMANDE ' . $bon->getNumbon() . ' ' . $bon->getClient()->getNomClient() . ' ' . $bon->getChantier()->getNomChantier();


        $document = new Documents();

        $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
        if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }

        $document->setUser($apuser);
        $document->setNumero($bon->getId());
        $document->setDonner($subject);
        $document->setType('bon');
        $document->setEtat('no');
        $document->setFolde($dire);
        $manager->persist($document);
        $manager->flush();

        $pdfOptions = new Options();
        $pdfOptions->setIsRemoteEnabled(true);
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('content/attachedoc.html.twig', [
            'chantier' => $bon->getChantier(),
            'bon' => $bon,
            'formes' => $forme,
            'lignes' => $lignes,
            'listGroup' => $listegroupe,
            'th' => $th,
            'ttc' => $ttc,
            'vtva' => $vtva,
            'rem' => $rem,
            'type' => 'bon'
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');
        // Render the HTML as PDF
        $dompdf->render();
        // Store PDF Binary Data
        $output = $dompdf->output();
        // In this case, we want to write the file in the public directory
        $publicDirectory = 'pdf/' . $document->getFolde() . '/';
        $pdfFilepath = $publicDirectory . $subject . '.pdf';
        // Write file to the desired path
        file_put_contents($pdfFilepath, $output);

        return $this->json(['result' => $document->getFolde() . '/' . $document->getDonner()], 200);
    }

    #[Route(path: '/apdf/get', name: 'api_commande_apdf_bon', methods: ['POST'])]
    public function apdff(SerializerInterface $serializer, Request $request): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);
        $repoForme = $this->doctrine->getRepository(Forme::class);
        $repoDocuments = $this->doctrine->getRepository(Documents::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $manager = $this->doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $apbon = $serializer->deserialize($apjson, Bon::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $bon = $repoBon->findOneBy(['user' => $master, 'numbon' => $apbon->getNumbon()]);

        $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'bon', 'numero' => $bon->getId(), 'etat' => 'no']);

        if ($docu) {
            $this->delete_directory('pdf/' . $docu->getFolde());
            $manager->remove($docu);
            $manager->flush();
        }


        $lignes = $repoLigne->findBy(['bon' => $bon]);
        $listegroupe = $repoGroupe->findBy(
            ['bon' => $bon],
            ['groupe' => 'ASC']
        );

        $th = 0;
        $rem = 0;
        $ttc = 0;
        $vtva = 0;

        foreach ($lignes as $lig) {
            if ($bon->getAarem() === 'oui') {
                $th = (($lig->getQuantite() * $lig->getPu()) * (((100) - $lig->getRemise()) / 100)) + $th;
                $vtva = ($th * $bon->getTva()) / 100;
                $rem = (($lig->getQuantite() * $lig->getPu()) * (($lig->getRemise()) / 100)) + $rem;
                $ttc = $th + $vtva;
            } else {
                $th = ($lig->getQuantite() * $lig->getPu()) + $th;
                $vtva = ($th * $bon->getTva()) / 100;
                $ttc = $th + $vtva;
            }
        }

        $bon->setTotalht($th);
        $bon->setTotalttc($ttc);
        $manager->persist($bon);
        $manager->flush();


        // RECUPERATION DES MISES EN FORME
        $forme = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);

        $subject = 'BON DE COMMANDE ' . $bon->getNumbon() . ' ' . $bon->getClient()->getNomClient() . ' ' . $bon->getChantier()->getNomChantier();


        $document = new Documents();

        $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
        if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }

        $document->setUser($apuser);
        $document->setNumero($bon->getId());
        $document->setDonner($subject);
        $document->setType('bon');
        $document->setEtat('no');
        $document->setFolde($dire);
        $manager->persist($document);
        $manager->flush();

        $pdfOptions = new Options();
        $pdfOptions->setIsRemoteEnabled(true);
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('content/attachedoc.html.twig', [
            'chantier' => $bon->getChantier(),
            'bon' => $bon,
            'formes' => $forme,
            'lignes' => $lignes,
            'listGroup' => $listegroupe,
            'th' => $th,
            'ttc' => $ttc,
            'vtva' => $vtva,
            'rem' => $rem,
            'type' => 'abon'
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');
        // Render the HTML as PDF
        $dompdf->render();
        // Store PDF Binary Data
        $output = $dompdf->output();
        // In this case, we want to write the file in the public directory
        $publicDirectory = 'pdf/' . $document->getFolde() . '/';
        $pdfFilepath = $publicDirectory . $subject . '.pdf';
        // Write file to the desired path
        file_put_contents($pdfFilepath, $output);

        return $this->json(['result' => $document->getFolde() . '/' . $document->getDonner()], 200);
    }

    #[Route(path: '/add/{id}/{idfourne}/{idsuive}/{type}', name: 'api_commande_ajouter_bon', methods: ['POST'])]
    public function adde(int $id, string $type, int $idfourne, int $idsuive,  Request $request, SerializerInterface $serializer): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        date_default_timezone_set('Africa/Abidjan');

         /** @var \App\Repository\UserRepository $repoUser */
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);
        $repoMonnaie = $this->doctrine->getRepository(Monnaie::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);

        /** @var \App\Repository\BonRepository $repoBon */
        $repoBon = $this->doctrine->getRepository(Bon::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $bon = $serializer->deserialize($apjson, Bon::class, 'json');

        $apmonnaie = $serializer->deserialize($apjson, Monnaie::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $repoCompte = $this->doctrine->getRepository(Compte::class);

        $monnaie = $repoMonnaie->findOneBy(['libelle' => $apmonnaie->getLibelle()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $compte = $repoCompte->findOneBy(['user' => $master]);
        $derCommande = $repoBon->findOneLaste($master);

        if ($type == "fournisseur") {
            if ($derCommande) {
                $rang = $derCommande->getRang() + 1;
                $bon->setRang($rang);
                $bon->setNumbon($compte->getCompteBonFournisseur() . $rang);
            } else {
                $bon->setRang(1);
                $bon->setNumbon($compte->getCompteBonFournisseur() . '1');
            }
        }
        if ($type == "prestataire") {
            if ($derCommande) {
                $rang = $derCommande->getRang() + 1;
                $bon->setRang($rang);
                $bon->setNumbon($compte->getCompteBonPrestataire() . $rang);
            } else {
                $bon->setRang(1);
                $bon->setNumbon($compte->getCompteBonPrestataire() . '1');
            }
        }

        $bon->setDobyuser($apuser);
        $bon->setUser($master);

        $devis = $repoDevis->findOneBy(['user' => $master, 'id' => $id]);
        $fourne = $repoFournisseur->findOneBy(['user' => $master, 'id' => $idfourne]);
        $chantier = $devis->getChantier();

        if ($idsuive != 0) {
            $suivi = $repoBon->findOneBy(['user' => $master, 'id' => $idsuive]);
            $bon->setPreparation($suivi);
        }

        $bon->setFournisseur($fourne);
        $bon->setTotalttc(0);
        $bon->setTotalht(0);
        $bon->setRecu(0);
        $bon->setReste(0);
        $bon->setVtva(0);
        $bon->setVremise(0);

        $bon->setChantier($chantier);
        $bon->setClient($chantier->getClient());
        $bon->setMonnaie($monnaie);
        $bon->setDevis($devis);

        $manager->persist($bon);
        $manager->flush();

        $comptes = $repoUser->findBy(['compte' => $master]);
        foreach ($comptes as $compte) {
            $alerte = new Alerte();
            $alerte->setAlerte("Bon " . $type . "crée");
            $alerte->setUser($master);
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setOwner($compte);
            $alerte->setTitre("BON CRÉÉ");
            $alerte->setRef($bon->getId());
            $alerte->setStatut("false");
            $alerte->setType("bon");
            $manager->persist($alerte);
            $manager->flush();
        }

        $alerte = new Alerte();
        $alerte->setAlerte("Bon " . $type . "crée");
        $alerte->setUser($master);
        $alerte->setDate(new \DateTime('NOW'));
        $alerte->setOwner($master);
        $alerte->setTitre("BON CRÉÉ");
        $alerte->setRef($bon->getId());
        $alerte->setStatut("false");
        $alerte->setType("bon");
        $manager->persist($alerte);
        $manager->flush();


        $history = new Historique();
        $history->setUser($master);
        $history->setDobyuser($apuser);
        $history->setDate(new \DateTime('NOW'));
        $history->setAction("Bon " . $type . "crée");
        $manager->persist($history);
        $manager->flush();

        return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
    }

    #[Route(path: '/add/prepa/{id}', name: 'api_add_prepa', methods: ['POST'])]
    public function addprepa(int $id, Request $request, SerializerInterface $serializer): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        date_default_timezone_set('Africa/Abidjan');

        $repoUser = $this->doctrine->getRepository(User::class);
        $repoMonnaie = $this->doctrine->getRepository(Monnaie::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apmonnaie = $serializer->deserialize($apjson, Monnaie::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $monnaie = $repoMonnaie->findOneBy(['libelle' => $apmonnaie->getLibelle()]);
        $bon = $serializer->deserialize($apjson, Bon::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $devis = $repoDevis->findOneBy(['user' => $master, 'id' => $id]);

        $bon->setChantier($devis->getChantier());
        $bon->setUser($master);
        $bon->setDobyuser($this->getUser());
        $bon->setClient($devis->getClient());
        $bon->setEtat('save');
        $bon->setMonnaie($monnaie);
        $bon->setDevis($devis);
        $bon->setVtva(0);
        $bon->setVremise(0);
        $bon->setType("prepa");

        $derCommande = $repoBon->findOneLasta($master);

        if ($derCommande) {
            $rang = $derCommande->getRang() + 1;
            $bon->setRang($rang);
            $bon->setNumbon("SVI-" . $rang);
        } else {
            $bon->setRang(1);
            $bon->setNumbon('SVI-1');
        }

        $bon->setType("prepa");
        $manager->persist($bon);
        $manager->flush();

        $manager->persist($bon);
        $manager->flush();

        $comptes = $repoUser->findBy(['compte' => $master]);
        foreach ($comptes as $compte) {
            $alerte = new Alerte();
            $alerte->setAlerte("Bon de suivi de commande crée");
            $alerte->setUser($master);
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setOwner($compte);
            $alerte->setTitre("BON CRÉÉ");
            $alerte->setRef($bon->getId());
            $alerte->setStatut("false");
            $alerte->setType("bon");
            $manager->persist($alerte);
            $manager->flush();
        }

        $alerte = new Alerte();
        $alerte->setAlerte("Bon de suivi de commande crée");
        $alerte->setUser($master);
        $alerte->setDate(new \DateTime('NOW'));
        $alerte->setOwner($master);
        $alerte->setTitre("BON CRÉÉ");
        $alerte->setRef($bon->getId());
        $alerte->setStatut("false");
        $alerte->setType("bon");
        $manager->persist($alerte);
        $manager->flush();


        $history = new Historique();
        $history->setUser($master);
        $history->setDobyuser($apuser);
        $history->setDate(new \DateTime('NOW'));
        $history->setAction("Bon de suivi de commande crée");
        $manager->persist($history);
        $manager->flush();

        return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
    }

    #[Route(path: '/update/{id}/{idfourne}/{idsuive}', name: 'api_commande_update_bon', methods: ['PUT', 'POST'])]
    public function update(SerializerInterface $serializer, int $id, int $idfourne, int $idsuive, Request $request): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoMonnaie = $this->doctrine->getRepository(Monnaie::class);
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apbon = $serializer->deserialize($apjson, Bon::class, 'json');
        $apmonnaie = $serializer->deserialize($apjson, Monnaie::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $this->doctrine->getManager();
        $monnaie = $repoMonnaie->findOneBy(['libelle' => $apmonnaie->getLibelle()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $bbon = $repoBon->findOneBy(['id' => $id, 'user' => $master]);

        if ($idfourne !== 0) {
            $fourne = $repoFournisseur->findOneBy(['user' => $master, 'id' => $idfourne]);
            if(count($bbon->getCaisses()) === 0){
                $bbon->setFournisseur($fourne);
            }
        }
        if ($idsuive !== 0) {
            $suivi = $repoBon->findOneBy(['user' => $master, 'id' => $idsuive]);
            $bbon->setPreparation($suivi);
        }

        $bbon->setDobyuser($apuser);
        $bbon->setUser($master);
        $bbon->setBonReference($apbon->getBonReference());
        $bbon->setDate($apbon->getDate());
        $bbon->setType($apbon->getType());
        $bbon->setMonnaie($monnaie);
        $bbon->setPtva($apbon->getPtva());
        $bbon->setTva($apbon->getTva());
        $bbon->setAaref($apbon->getAaref());

        if($bbon->getType() === "oui" || $bbon->getType() === "non"){
            $bbon->setAarem($apbon->getAarem());
        }

        if ($apbon->getPtva() === 'oui') {
            $vtva = ($bbon->getTotalht() * $bbon->getTva()) / 100;
            $bbon->setTotalttc($bbon->getTotalht() + $vtva);
        }
        if ($apbon->getPtva() === 'non') {
            $bbon->setTotalttc($bbon->getTotalht());
        }

        $manager->persist($bbon);
        $manager->flush();

        $this->jourChantier($bbon->getChantier());
        return $this->json($bbon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
    }

    #[Route(path: '/deplacer/{idbon}/{iddevis}', name: 'api_commande_deplacer_bon', methods: ['PUT', 'POST'])]
    public function deplacerBon(SerializerInterface $serializer, int $idbon, int $iddevis, Request $request): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $this->doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $bon = $repoBon->findOneBy(['id' => $idbon, 'user' => $master]);
        $devis = $repoDevis->findOneBy(['id' => $iddevis, 'user' => $master]);

        $chan1 = $bon->getChantier();
        $chan2 = $devis->getChantier();

        foreach ($bon->getCaisses() as $caiss){
            $caiss->setChantier($devis->getChantier());
            $caiss->setClient($devis->getClient());

            $manager->persist($caiss);
            $manager->flush();
        }

        $bon->setChantier($devis->getChantier());
        $bon->setClient($devis->getClient());
        $bon->setDevis($devis);

        $manager->persist($bon);
        $manager->flush();

        $this->jourChantier($chan1);
        $this->jourChantier($chan2);

        return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
    }

    #[Route(path: '/dupliquer/{idbon}', name: 'api_commande_dupliquer_bon', methods: ['PUT', 'POST'])]
    public function dupliquerBon(SerializerInterface $serializer, int $idbon, Request $request): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);

        $repoCompte = $this->doctrine->getRepository(Compte::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $this->doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $bon = $repoBon->findOneBy(['id' => $idbon, 'user' => $master]);
        $compte = $repoCompte->findOneBy(['user' => $master]);

        $dubon = new Bon();
        $dubon->setDevis($bon->getDevis());
        $dubon->setDate(new \DateTime('NOW'));
        $dubon->setTva($bon->getTva());
        $dubon->setType($bon->getType());
        $dubon->setStatus($bon->getStatus());
        $dubon->setBonReference($bon->getBonReference());
        $der = $repoBon->findBy(['user' => $master], ['id' => 'DESC'], 1);
        $rang = $der[0]->getRang() + 1;
        $dubon->setRang($rang);

        if ($bon->getType() === "oui" || $bon->getType() === "non") {
            $dubon->setNumbon($compte->getCompteBonFournisseur() . $rang);
            $dubon->setFournisseur($bon->getFournisseur());
            $dubon->setPreparation($bon->getPreparation());
        }

        if ($bon->getType() === "none") {
            $dubon->setNumbon($compte->getCompteLivraison() . $rang);
        }

        if ($bon->getType() === "pst") {
            $dubon->setNumbon($compte->getCompteBonPrestataire() . $rang);
            $dubon->setFournisseur($bon->getFournisseur());
        }

        if ($bon->getType() === "prepa") {
            $dubon->setNumbon($compte->getCompteBonSuivi() . $rang);
        }

        $dubon->setAarem($bon->getAarem());
        $dubon->setPtva($bon->getPtva());
        $dubon->setTva($bon->getTva());
        $dubon->setVtva($bon->getVtva());
        $dubon->setVremise($bon->getVremise());
        $dubon->setEtat('save');
        $dubon->setTotalht($bon->getTotalht());
        $dubon->setTotalttc($bon->getTotalttc());

        $dubon->setChantier($bon->getChantier());
        $dubon->setMonnaie($bon->getMonnaie());
        $dubon->setClient($bon->getClient());
        $dubon->setConditions($bon->getConditions());
        $dubon->setModele($bon->getModele());
        $dubon->setUser($master);
        $dubon->setDobyuser($apuser);
        $dubon->setMonnaie($bon->getMonnaie());
        $manager->persist($dubon);
        $manager->flush();

        $groupes = $repoGroupe->findBy(['bon' => $bon]);
        foreach ($bon->getLignes() as $ligne) {
            $lign = new Ligne();
            $lign->setbon($dubon);
            $lign->setReference($ligne->getReference());
            if ($ligne->getCode() !== null) {
                $lign->setCode($ligne->getCode());
            }
            $lign->setDesignation($ligne->getDesignation());
            $lign->setZone($ligne->getZone());
            $lign->setQuantite($ligne->getQuantite());
            $lign->setPu($ligne->getPu());
            $lign->setRemise($ligne->getRemise());
            $lign->setType($ligne->getType());
            $lign->setArticle($ligne->getArticle());
            $lign->setChantier($ligne->getChantier());
            $lign->setUnite($ligne->getUnite());
            $lign->setUser($master);
            $manager->persist($lign);
            $manager->flush();
        }
        foreach ($groupes as $groupe) {
            $group = new Groupe();
            $group->setGroupe($groupe->getGroupe());
            $group->setReference($groupe->getReference());
            $group->setbon($dubon);
            $manager->persist($group);
            $manager->flush();
            $negroupe = $repoGroupe->find($group);

            foreach ($groupe->getLignes() as $ligne) {
                $lign = new Ligne();
                $lign->setbon($dubon);
                $lign->setReference($ligne->getReference());
                if ($ligne->getCode() !== null) {
                    $lign->setCode($ligne->getCode());
                }
                $lign->setDesignation($ligne->getDesignation());
                $lign->setZone($ligne->getZone());
                $lign->setQuantite($ligne->getQuantite());
                $lign->setPu($ligne->getPu());
                $lign->setRemise($ligne->getRemise());
                $lign->setType($ligne->getType());
                $lign->setArticle($ligne->getArticle());
                $lign->setChantier($ligne->getChantier());
                $lign->setGroupe($negroupe);
                $lign->setUnite($ligne->getUnite());
                $lign->setUser($master);
                $manager->persist($lign);
                $manager->flush();
            }
        }

        $this->jourChantier($bon->getChantier());

        return $this->json($dubon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
    }

    #[Route(path: '/groupe', name: 'api_commande_groupe_bon', methods: ['POST'])]
    public function adgroupe(Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apbon = $serializer->deserialize($apjson, Bon::class, 'json');
        $apgroupe = $serializer->deserialize($apjson, Groupe::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $this->doctrine->getManager();
        if ($apuser->getCompte() === null) {
            $bon = $repoBon->findOneBy(['user' => $apuser, 'numbon' => $apbon->getNumBon()]);
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
            $bon = $repoBon->findOneBy(['user' => $master, 'numbon' => $apbon->getNumBon()]);
        }

        $groupe = new Groupe();
        $groupe->setBon($bon);
        $groupe->setGroupe($apgroupe->getApGroupe());
        $groupe->setReference($apgroupe->getReference());
        $manager->persist($groupe);
        $manager->flush();

        return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
    }

    #[Route(path: '/apgroupe/{idbon}', name: 'api_commande_apgroupe_bon', methods: ['POST'])]
    public function adagroupe(int $idbon, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apgroupe = $serializer->deserialize($apjson, Groupe::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
                    $master = $apuser;
         } else {
                    $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $bon = $repoBon->findOneBy(['user' => $master, 'id' => $idbon]);
        $manager = $this->doctrine->getManager();
        $groupe = new Groupe();
        $groupe->setBon($bon);
        $groupe->setGroupe($apgroupe->getApGroupe());
        $groupe->setReference($apgroupe->getReference());
        $manager->persist($groupe);
        $manager->flush();

        return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
    }

    #[Route(path: '/getgroupe', name: 'api_commande_getgroupe_bon', methods: ['POST'])]
    public function getgroupe(Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apbon = $serializer->deserialize($apjson, Bon::class, 'json');
        $apgroupe = $serializer->deserialize($apjson, Groupe::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $this->doctrine->getManager();
        if ($apuser->getCompte() === null) {
            $bon = $repoBon->findOneBy(['user' => $apuser, 'numbon' => $apbon->getNumBon()]);
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
            $bon = $repoBon->findOneBy(['user' => $master, 'numbon' => $apbon->getNumBon()]);
        }

        $groupe = $repoGroupe->findBy(['bon' => $bon]);

        return $this->json($groupe, 200, ['Content-Type' => 'application/json'], ['groups' => 'groupes']);
    }

    #[Route(path: '/upgroupe/{idbon}/{idgr}', name: 'api_commande_upgroupe_bon', requirements: ['idbon' => '\d+', 'idgr' => '\d+'], methods: ['POST'])]
    public function upgroupe(SerializerInterface $serializer, int $idbon = null, int $idgr = null, Request $request)
    {

        $manager = $this->doctrine->getManager();

        $repoUser = $this->doctrine->getRepository(User::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apgroupe = $serializer->deserialize($apjson, Groupe::class, 'json');

        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        if ($apuser->getCompte() === null) {
            $bon = $repoBon->findOneBy(['user' => $apuser, 'id' => $idbon]);
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
            $bon = $repoBon->findOneBy(['user' => $master, 'id' => $idbon]);
        }

        $groupe = $repoGroupe->findOneBy(['bon' => $bon, 'id' => $idgr]);
        $groupe->setReference($apgroupe->getReference());
        $groupe->setGroupe($apgroupe->getApgroupe());

        $manager->persist($groupe);
        $manager->flush();

        return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
    }

    #[Route(path: '/delgroupe/{idbon}/{idgr}', name: 'api_commande_delgroupe_bon', requirements: ['idbon' => '\d+', 'idgr' => '\d+'], methods: ['POST'])]
    public function delgroupe(SerializerInterface $serializer, int $idbon = null, int $idgr = null, Request $request)
    {

        $manager = $this->doctrine->getManager();

        $repoUser = $this->doctrine->getRepository(User::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);
        $repoLigne = $this->doctrine->getRepository(Ligne::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
            $bon = $repoBon->findOneBy(['user' => $apuser, 'id' => $idbon]);
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
            $bon = $repoBon->findOneBy(['user' => $master, 'id' => $idbon]);
        }

        $groupe = $repoGroupe->findOneBy(['bon' => $bon, 'id' => $idgr]);

        $lignes = $repoLigne->findBy(['groupe' => $groupe, 'user' => $master]);

        foreach ($lignes as $lig) {
            $manager->remove($lig);
            $manager->flush();
        }

        $manager->remove($groupe);
        $manager->flush();

        return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
    }

    #[Route(path: '/travaux', name: 'api_commande_travaux', methods: ['POST'])]
    public function last(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoBon = $doctrine->getRepository(Bon::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $date = date("Y-m-d");
        $bons = $repoBon->findByeDate($master, $date);
        return $this->json($bons, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
    }

    #[Route(path: '/excel/get', name: 'api_bon_excel_bon', methods: ['POST'])]
    public function excel(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): Response
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);
        $repoGroupe = $doctrine->getRepository(Groupe::class);
        $repoForme = $doctrine->getRepository(Forme::class);
        $repoBon = $doctrine->getRepository(Bon::class);

        // =====================
        // Récupération des données depuis le JSON envoyé par Flutter
        // =====================
        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $apbon = $serializer->deserialize($apjson, Bon::class, 'json');

        $master = $apuser->getCompte() === null
            ? $apuser
            : $repoUser->find($apuser->getCompte());

        $bon = $repoBon->findOneBy([
            'user' => $master,
            'numbon' => $apbon->getNumbon()
        ]);

        // =====================
        // Récupération des lignes et groupes
        // =====================
        $lignes = $repoLigne->findBy(['bon' => $bon]);
        $listegroupe = $repoGroupe->findBy(
            ['bon' => $bon],
            ['groupe' => 'ASC']
        );

        // =====================
        // Calculs HT / TVA / TTC
        // =====================
        $th = 0;
        $rem = 0;
        $ttc = 0;
        $vtva = 0;

        foreach ($lignes as $lig) {
            if ($bon->getAarem() === 'oui') {
                $th = (($lig->getQuantite() * $lig->getPu()) * (((100) - $lig->getRemise()) / 100)) + $th;
                $vtva = ($th * $bon->getTva()) / 100;
                $rem = (($lig->getQuantite() * $lig->getPu()) * (($lig->getRemise()) / 100)) + $rem;
                $ttc = $th + $vtva;
            } else {
                $th = ($lig->getQuantite() * $lig->getPu()) + $th;
                $vtva = ($th * $bon->getTva()) / 100;
                $ttc = $th + $vtva;
            }
        }

        $formes = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);
        // =====================
        // HTML Twig pour Excel
        // =====================
        $html = $this->renderView('content/attachedoc_excel.html.twig', [
            'chantier' => $bon->getChantier(),
            'bon' => $bon,
            'formes' => $formes,
            'lignes' => $lignes,
            'listGroup' => $listegroupe,
            'th' => $th,
            'ttc' => $ttc,
            'vtva' => $vtva,
            'rem' => $rem,
            'type' => 'bon'
        ]);

        // =====================
        // Conversion HTML → Excel
        // =====================
        $spreadsheet = new Spreadsheet();
        $reader = new Html();
        $reader->loadFromString($html, $spreadsheet);

        $writer = new Xlsx($spreadsheet);
        $filename = 'Bon-'.$bon->getNumbon().'.xlsx';

        // =====================
        // Réponse HTTP pour téléchargement direct
        // =====================
        $response = new Response();
        $response->headers->set(
            'Content-Type',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        );
        $response->headers->set(
            'Content-Disposition',
            'attachment; filename="'.$filename.'"'
        );
        $response->headers->set('Cache-Control', 'max-age=0');

        ob_start();
        $writer->save('php://output');
        $response->setContent(ob_get_clean());

        return $response;
    }

}
