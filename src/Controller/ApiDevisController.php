<?php
namespace App\Controller;
use App\Entity\Alerte;
use App\Entity\Chantier;
use App\Entity\Compte;
use App\Entity\Corbeille;
use App\Entity\Devis;
use App\Entity\Documents;
use App\Entity\Forme;
use App\Entity\Groupe;
use App\Entity\Historique;
use App\Entity\Ligne;
use App\Entity\Monnaie;
use App\Entity\Recap;
use App\Entity\Relever;
use App\Entity\User;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Routing\Annotation\Route;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Html;
use Symfony\Component\HttpFoundation\Response;

#[Route(path: '/api/devis')]
class ApiDevisController extends AbstractController
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
    public function jourDevis(Devis $devis, ManagerRegistry $doctrine)
    {
        $manager = $doctrine->getManager();

        $devis->setTotalttc(0);
        $devis->setTotalht(0);
        $devis->setVtva(0);
        $devis->setVremise(0);

        $manager->persist($devis);
        $manager->flush();

    }

    #[Route(path: '/miseajour', name: 'miseajourchantier', requirements: ['id' => '\d+'], methods: ['POST'])]

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

    function delete_directory($dirname): bool
    {
        if (is_dir($dirname)) {
            $dir_handle = opendir($dirname);
        }
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

    #[Route(path: '/get/{id}', name: 'api_get_devis', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function index(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $master]);
        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'pydevis']);
    }

    #[Route(path: '/devdev/get', name: 'api_get_devis_nom_valider', methods: ['POST'])]
    public function nonvalider(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $devis = $repoDevis->findDevDev($master);
        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'pydevis']);
    }

    #[Route(path: '/python/get/{id}', name: 'api_get_pydevis', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function pyindex(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $master]);
        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'pydevis']);
    }

    #[Route(path: '/chantier/{id}', name: 'api_devis', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function getByChantier(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);
        $repoDevis = $doctrine->getRepository(Devis::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $master]);
        $devis = $repoDevis->findByChan($master, $chantier);


        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'pydevis']);
    }

    #[Route(path: '/python/valider/{type}/{id}', name: 'api_devis_valide_devis', methods: ['POST'])]
    public function valider(int $id, string $type, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoRelever = $doctrine->getRepository(Relever::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $devis = $repoDevis->findOneBy(['user' => $master, 'id' => $id]);

        $devis->setVabyuser($this->getUser());
        $chantier = $devis->getChantier();
        $relev = $repoRelever->findOneBy(['devis' => $devis, 'chantier' => $chantier, 'type' => 1]);
        if ($devis->getEtat() === 'save') {
            date_default_timezone_set('Africa/Abidjan');
            $action = 'Validation du Devis N° : ' . $devis->getIddevis() . ' ' . $devis->getDevReference();
            $history = new Historique();
            $history->setUser($master);
            $history->setDobyuser($apuser);
            $history->setDate(new DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            if (!$relev) {
                $releve = new Relever();
                $releve->setDevis($devis);
                $releve->setChantier($devis->getChantier());
                $releve->setMontant($devis->getTotalttc());
                $releve->setDate(new DateTime('NOW'));
                $releve->setType(1);
                $releve->setClient($devis->getClient());
                $devis->setEtat('valide');
                $cout = $chantier->getCout() + $devis->getTotalttc();
                $chantier->setCout($cout);
                $manager->persist($chantier);
                $manager->persist($devis);
                $manager->persist($releve);
                $manager->flush();

                $this->jourChantier($chantier, $doctrine);

                if ($type === "one") {
                    return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'pydevis']);
                }
                return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'pychantier']);
            }

            $relev->setMontant($devis->getTotalttc());
            $devis->setEtat('valide');
            $cout = $chantier->getCout() + $devis->getTotalttc();
            $chantier->setCout($cout);
            $manager->persist($chantier);

            $manager->persist($devis);
            $manager->persist($relev);
            $manager->flush();

            $this->jourChantier($chantier);

            if ($type === "one") {
                return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'pydevis']);
            }
            return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'pychantier']);
        }
        return null;
    }

    #[Route(path: '/python/devalider/{type}/{id}', name: 'api_devalidedevis', methods: ['POST'])]
    public function devalider(int $id, string $type, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoRelever = $doctrine->getRepository(Relever::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $doctrine->getManager();

        $master = $apuser->getCompte() === null ? $apuser : $repoUser->findOneBy(['id' => $apuser->getCompte()]);

        $devis = $repoDevis->findOneBy(['user' => $master, 'id' => $id]);
        $devis->setVabyuser($apuser);
        $chantier = $devis->getChantier();

        if ($devis->getEtat() === 'valide') {
            $relever = $repoRelever->findOneBy(['devis' => $devis, 'type' => 1]);
            if ($relever) {
                $manager->remove($relever);
                $manager->flush();
            }

            $devis->setEtat('save');
            $manager->persist($chantier);
            $manager->persist($devis);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = 'Dévalidation du Devis N° : ' . $devis->getIddevis() . ' ' . $devis->getDevReference();
            $history = new Historique();
            $history->setUser($master);
            $history->setDobyuser($apuser);
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();
        }

        $this->jourChantier($chantier, $doctrine);
        if ($type === "one") {
            return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'pydevis']);
        }
        return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'pychantier']);
    }

    #[Route(path: '/valid/{id}', name: 'api_devis_val_devis', methods: ['POST'])]
    public function valid(int $id,  Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoRelever = $doctrine->getRepository(Relever::class);
        $repoRecap = $doctrine->getRepository(Recap::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        $master = $apuser->getCompte() === null ? $apuser : $repoUser->findOneBy(['id' => $apuser->getCompte()]);

        $devis = $repoDevis->findOneBy(['user' => $master, 'id' => $id]);

        if (!$devis) {
            return $this->json(['result' => 'error'], 404);
        }

        $devis->setVabyuser($apuser);
        $chantier = $devis->getChantier();
        $relev = $repoRelever->findOneBy(['devis' => $devis, 'chantier' => $chantier, 'type' => 1]);

        if ($devis->getEtat() === 'save') {

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p><u>Le devis N° : <a href=/crm/devis/'.$devis->getId() .'/'.$devis->getChantier()->getId().'>' . $devis->getIddevis() . '</a> a été validé:</u><br># '. $devis->getClient()->getNomClient().'<br># '. $devis->getChantier()->getNomChantier().
                '<br> par:<span class=col-blue bolo600>'.$apuser->getNom().' '.$apuser->getPrenoms().'</span></p>';
            $history = new Historique();
            $history->setUser($master);
            $history->setDobyuser($apuser);
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            $comptes = $repoUser->findBy(['compte' => $apuser]);
            foreach ($comptes as $compte){
                $alerte = new Alerte();
                $alerte->setAlerte($action);
                $alerte->setUser($apuser);
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setOwner($compte);
                $alerte->setTitre("DEVIS VALIDÉ");
                $alerte->setRef($devis->getId());
                $alerte->setStatut("false");
                $alerte->setType("devis");
                $manager->persist($alerte);
                $manager->flush();
            }

            $alerte = new Alerte();
            $alerte->setAlerte($action);
            $alerte->setUser($master);
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setOwner($master);
            $alerte->setTitre("DEVIS VALIDÉ");
            $alerte->setRef($devis->getId());
            $alerte->setStatut("false");
            $alerte->setType("devis");
            $manager->persist($alerte);
            $manager->flush();


            if (!$relev) {
                $releve = new Relever();
                $releve->setDevis($devis);
                $releve->setChantier($devis->getChantier());
                $releve->setMontant($devis->getTotalttc());
                $releve->setDate(new \DateTime('NOW'));
                $releve->setType(1);
                $releve->setClient($devis->getClient());
                $devis->setEtat('valide');
                $manager->persist($chantier);
                $manager->persist($devis);
                $manager->persist($releve);
                $manager->flush();

                $u = 0;
                $cout = 0;

                $deviss = $chantier->getDevis();
                foreach ($deviss as $dev) {
                    if ($dev->getEtat() === "valide") {
                        $u = $u + 1;
                       $cout += $dev->getTotalttc();
                    }
                }
                if ($u > 0 && $chantier->getEtat() === "etude") {
                    $chantier->setEtat("encours");
                }
                 $chantier->setCout($cout);
                $manager->persist($chantier);
                $manager->flush();

            } else {

                $relev->setMontant($devis->getTotalttc());
                $devis->setEtat('valide');
                $manager->persist($chantier);
                $manager->persist($devis);
                $manager->persist($relev);
                $manager->flush();

                $u = 0;
                $cout = 0;
                $deviss = $chantier->getDevis();

                foreach ($deviss as $dev) {
                    if ($dev->getEtat() === "valide") {
                        $u = $u + 1;
                        $cout += $dev->getTotalttc();
                    }
                }

                if ($u > 0 && $chantier->getEtat() === "etude") {
                    $chantier->setEtat("encours");
                }

                $chantier->setCout($cout);
                $manager->persist($chantier);
                $manager->flush();
            }

            $tt = [];
            foreach ($devis->getLignes() as $ligne) {
                if ($ligne->getArticle()) {
                    $article = $ligne->getArticle();
                    if ($article->getComposer()) {
                        $bonn = $article->getComposer();
                        foreach ($bonn->getLignes() as $lign) {
                            $tt[] = $lign->getArticle()->getId();
                        }
                    }
                }
            }
            $result = array_unique($tt);
            foreach ($result as $x) {
                foreach ($devis->getLignes() as $ligne) {
                    if ($ligne->getArticle()) {
                        $article = $ligne->getArticle();
                        if ($article->getComposer()) {
                            $bonn = $article->getComposer();
                            foreach ($bonn->getLignes() as $lign) {
                                if ((int)$x === (int)$lign->getArticle()->getId()) {
                                    $rep = $repoRecap->findOneBy(['chantier' => $chantier, 'article' => $lign->getArticle()]);
                                    if (!$rep) {
                                        $recap = new Recap();
                                        $recap->setUser($master);
                                        $recap->setDobyuser($this->getUser());
                                        $recap->setChantier($chantier);
                                        $recap->setQuantite($ligne->getQuantite() * $lign->getQuantite());
                                        $recap->setArticle($lign->getArticle());
                                        $manager->persist($recap);
                                    } else {
                                        $pp = ($ligne->getQuantite() * $lign->getQuantite()) + $rep->getQuantite();
                                        $rep->setQuantite($pp);
                                        $manager->persist($rep);
                                    }
                                    $manager->flush();
                                }
                            }
                        }
                    }
                }
            }

            return $this->json($devis->getChantier(), 200, ['Content-Type' => 'application/json'], ['groups' => 'chantierwin']);

        }

        return $this->json(['result' => 'error'], 404);

    }

    #[Route(path: '/deva/{id}', name: 'api_devadevis', methods: ['POST'])]
    public function deva(int $id , Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoRelever = $doctrine->getRepository(Relever::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $doctrine->getManager();

        $master = $apuser->getCompte() === null ? $apuser : $repoUser->findOneBy(['id' => $apuser->getCompte()]);

        $devis = $repoDevis->findOneBy(['user' => $master, 'id' => $id]);
        if (!$devis) {
            return $this->json(['result' => 'erreur'], 404);
        }
        $devis->setVabyuser($apuser);
        $chantier = $devis->getChantier();

        if ($devis->getEtat() === 'valide') {
            $relever = $repoRelever->findOneBy(['devis' => $devis, 'type' => 3]);

            if (!$relever) {
                $cout = $chantier->getCout() - $devis->getTotalttc();
                $chantier->setCout($cout);
                $devis->setEtat('save');
                $manager->persist($chantier);
                $manager->persist($devis);
                $manager->flush();

                date_default_timezone_set('Africa/Abidjan');
                $action = '<p>Dévalidation du devis N° : ' . $devis->getIddevis() . '</p> ' . $devis->getDevReference();
                $history = new Historique();
                $history->setUser($master);
                $history->setDobyuser($apuser);
                $history->setDate(new \DateTime('NOW'));
                $history->setAction($action);
                $manager->persist($history);
                $manager->flush();

                $actio = '<p><u>Le devis N° : <a href=/crm/devis/'.$devis->getId() .'/'.$devis->getChantier()->getId().'>' . $devis->getIddevis() . '</a> a été dévalidé:</u><br># '. $devis->getClient()->getNomClient().'<br># '. $devis->getChantier()->getNomChantier().
                    '<br> par:<span class=col-blue bolo600>'.$apuser->getNom().' '.$apuser->getPrenoms().'</span></p>';

                $comptes = $repoUser->findBy(['compte' => $master]);
                foreach ($comptes as $compte){
                    $alerte = new Alerte();
                    $alerte->setAlerte($actio);
                    $alerte->setUser($master);
                    $alerte->setDate(new \DateTime('NOW'));
                    $alerte->setOwner($compte);
                    $alerte->setTitre("DEVIS DÉVALIDÉ");
                    $alerte->setRef($devis->getId());
                    $alerte->setStatut("false");
                    $alerte->setType("devis");
                    $manager->persist($alerte);
                    $manager->flush();
                }

                $alerte = new Alerte();
                $alerte->setAlerte($actio);
                $alerte->setUser($master);
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setOwner($master);
                $alerte->setTitre("DEVIS DÉVALIDÉ");
                $alerte->setRef($devis->getId());
                $alerte->setStatut("false");
                $alerte->setType("devis");
                $manager->persist($alerte);
                $manager->flush();

                $u = 0;
                $cout = 0;
                $deviss = $chantier->getDevis();
                foreach ($deviss as $dev) {
                    if ($dev->getEtat() === "valide") {
                        $u = $u + 1;
                        $cout += $dev->getTotalttc();
                    }
                }

                if ($u > 0 && $chantier->getEtat() === "etude") {
                    $chantier->setEtat("encours");
                    $chantier->setCout($cout);
                }

                if ($u === 0) {
                    foreach ($deviss as $dev) {
                        $cout += $dev->getTotalttc();
                    }
                    $chantier->setEtat("etude");
                    $chantier->setCout($cout);
                }

                $manager->persist($chantier);
                $manager->flush();

                $manager->flush();
                return $this->json($devis->getChantier(), 200, ['Content-Type' => 'application/json'], ['groups' => 'chantierwin']);
            }


            $deja = 0;
            foreach ($devis->getRelevers() as $relevalide) {
                if ($relevalide->getType() === 3) {
                    $deja = $relevalide->getMontant() + $deja;
                }
            }

            $cout = $chantier->getCout() - $devis->getTotalttc();
            $reglement = $chantier->getReglement() - $deja;
            $chantier->setCout($cout);
            $chantier->setReglement($reglement);
            $devis->setEtat('save');
            $manager->persist($devis);
            $manager->persist($chantier);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p>Dévalidation du devis N° : ' . $devis->getIddevis() . '</p> ' . $devis->getDevReference();
            $history = new Historique();
            $history->setUser($master);
            $history->setDobyuser($apuser);
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            $u = 0;
            $cout = 0;
            $deviss = $chantier->getDevis();
            foreach ($deviss as $dev) {
                if ($dev->getEtat() === "valide") {
                    $u = $u + 1;
                    $cout += $dev->getTotalttc();
                }
            }

            if ($u > 0 && $chantier->getEtat() === "etude") {
                $chantier->setEtat("encours");
                $chantier->setCout($cout);
            }

            if ($u === 0) {
                foreach ($deviss as $dev) {
                    $cout += $dev->getTotalttc();
                }
                $chantier->setEtat("etude");
                $chantier->setCout($cout);
            }

            $manager->persist($chantier);
            $manager->remove($relever);
            $manager->flush();
            return $this->json($devis->getChantier(), 200, ['Content-Type' => 'application/json'], ['groups' => 'chantierwin']);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/dele/{id}', name: 'api_devis_dele_devis', methods: ['POST'])]
    public function dele(int $id , Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCorbeille = $doctrine->getRepository(Corbeille::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $master = $apuser->getCompte() === null ? $apuser : $repoUser->findOneBy(['id' => $apuser->getCompte()]);

        $devis = $repoDevis->findOneBy(['user' => $master, 'id' => $id]);
        $chantier = $devis->getChantier();

        if ($devis->getEtat() === 'save') {
            $cor = $repoCorbeille->findOneBy(['designation' => $devis->getId(), 'master' => $master, 'type' => 3]);
            if (!$cor) {
                date_default_timezone_set('Africa/Abidjan');
                $corbeille = new Corbeille();
                $corbeille->setDate(new \DateTime('NOW'));
                $corbeille->setDesignation($devis->getId());
                $corbeille->setMaster($master);
                $corbeille->setDelby($apuser);
                $corbeille->setEtat('faible');
                $corbeille->setType('3');
                $manager->persist($corbeille);
                $manager->flush();
                $core = $repoCorbeille->findOneBy(['designation' => $devis->getId(), 'master' => $master, 'type' => 3]);
                $devis->setCorbeille($core);
                $manager->persist($devis);
                $manager->flush();

                date_default_timezone_set('Africa/Abidjan');
                $action = 'Suppression du Devis N° : ' . $devis->getIddevis() . ' ' . $devis->getDevReference();
                $history = new Historique();
                $history->setUser($master);
                $history->setDobyuser($apuser);
                $history->setDate(new \DateTime('NOW'));
                $history->setAction($action);
                $manager->persist($history);
                $manager->flush();

                $this->jourChantier($chantier, $doctrine);
                return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'pychantier']);
            }
        }

        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/restaure/{id}', name: 'api_devis_restaure_devis', methods: ['POST'])]
    public function derestaure(int $id , Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCorbeille = $doctrine->getRepository(Corbeille::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $master = $apuser->getCompte() === null ? $apuser : $repoUser->findOneBy(['id' => $apuser->getCompte()]);

        $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $master]);
        if (!$devis) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $corbeille = $repoCorbeille->findOneBy(['designation' => $devis->getId(), 'type' => '3']);
        if ($corbeille) {
            $devis->setCorbeille(null);
            $manager->persist($devis);
            $manager->flush();
            $manager->remove($corbeille);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p>Restauration du Devis N° : ' . $devis->getIddevis() . '</p> ' . $devis->getDevReference();
            $history = new Historique();
            $history->setUser($master);
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'pydevis']);
        }

        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/delete', name: 'api_devis_delete_devis', methods: ['POST'])]
    public function delete(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCorbeille = $doctrine->getRepository(Corbeille::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoGroupe = $doctrine->getRepository(Groupe::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apdevis = $serializer->deserialize($apjson, Devis::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $devis = $repoDevis->findOneBy(['user' => $master, 'iddevis' => $apdevis->getIddevis()]);
        $lignes = $repoLigne->findBy(['devis' => $devis]);
        $groupes = $repoGroupe->findBy(['devis' => $devis]);

        foreach ($lignes as $ligne) {
            $manager->remove($ligne);
            $manager->flush();
        }
        foreach ($lignes as $ligne) {
            $manager->remove($ligne);
            $manager->flush();
        }
        foreach ($groupes as $groupe) {
            $manager->remove($groupe);
            $manager->flush();
        }

        if ($devis->getEtat() === 'save') {
            $cor = $repoCorbeille->findOneBy(['designation' => $devis->getId(), 'master' => $master, 'type' => 3]);
            if (!$cor) {
                date_default_timezone_set('Africa/Abidjan');
                $corbeille = new Corbeille();
                $corbeille->setDate(new \DateTime('NOW'));
                $corbeille->setDesignation($devis->getId());
                $corbeille->setMaster($master);
                $corbeille->setDelby($apuser);
                $corbeille->setEtat('faible');
                $corbeille->setType('3');
                $manager->persist($corbeille);
                $manager->flush();
                $core = $repoCorbeille->findOneBy(['designation' => $devis->getId(), 'master' => $master, 'type' => 3]);
                $devis->setCorbeille($core);
                $manager->persist($devis);
                $manager->flush();

                date_default_timezone_set('Africa/Abidjan');
                $action = 'Suppression du Devis N° : ' . $devis->getIddevis() . ' ' . $devis->getDevReference();
                $history = new Historique();
                $history->setUser($master);
                $history->setDobyuser($apuser);
                $history->setDate(new \DateTime('NOW'));
                $history->setAction($action);
                $manager->persist($history);
                $manager->flush();

                return $this->json(['result' => 'devis suprimé'], 200);
            }
        }

        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/pdf/get', name: 'api_devis_pdf_devis', methods: ['POST'])]
    public function pdff(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): JsonResponse
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);
        $repoGroupe = $doctrine->getRepository(Groupe::class);
        $repoForme = $doctrine->getRepository(Forme::class);
        $repoDocuments = $doctrine->getRepository(Documents::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $apdevis = $serializer->deserialize($apjson, Devis::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $devis = $repoDevis->findOneBy(['user' => $master, 'iddevis' => $apdevis->getIddevis()]);
        $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'devis', 'numero' => $devis->getId(), 'etat' => 'no']);

        if ($docu) {
            $this->delete_directory('pdf/' . $docu->getFolde());
            $manager->remove($docu);
            $manager->flush();
        }

        // ON RECUPERE LES LIGNES
        $lignes = $repoLigne->findBy(['devis' => $devis]);

        // ON RECUPERE LES GROUPES
        $listegroupe = $repoGroupe->findBy(
            ['devis' => $devis],
            ['reference' => 'ASC']);


        // INITIALISATION DES RESULTATS
        $th = 0;
        $rem = 0;
        $vtva = 0;

        // CALCUL DES RESULTATS
        if ($devis->getAbasetva() === 'non') {
            foreach ($lignes as $lig) {
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
        } else {
            foreach ($lignes as $lig) {
                if ($devis->getAarem() === 'oui') {
                    $rem = ((($lig->getQuantite() * $lig->getPu()) * $lig->getRemise()) / 100);
                    $th = (($lig->getQuantite() * $lig->getPu()) * (((100) - $lig->getRemise()) / 100)) + $th;
                } else {
                    $th = ($lig->getQuantite() * $lig->getPu()) + $th;
                }
            }
        }

        if ($devis->getPtva() === 'oui' || $devis->getPtva() === 'susp') {
            if ($devis->getAarem() === 'tht') {
                $rem = ($th * $devis->getRemtht()) / 100;
                $th = $th - $rem;
            }
            if ($devis->getAbasetva() === 'non') {
                $vtva = ($th * $devis->getTva()) / 100;
            } else {
                $vtva = ($devis->getBasetva() * $devis->getTva()) / 100;
            }

            $ttc = $th + $vtva;
        } else {
            if ($devis->getAarem() === 'tht') {
                $rem = ($th * $devis->getRemtht()) / 100;
                $th = $th - $rem;
            }
            $ttc = $th;
        }


        // RECUPERATION DES MISES EN FORME
        $formes = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);
        $subject = $devis->getClient()->getNomClient().'-'.$devis->getChantier()->getNomChantier().'-Devis-' . $devis->getIddevis();

        $document = new Documents();
        $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
        if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }

        $document->setUser($apuser);
        $document->setNumero($devis->getId());
        $document->setDonner($subject);
        $document->setType('devis');
        $document->setEtat('no');
        $document->setFolde($dire);
        $devis->setMarquer('oui');
        $manager->persist($document);
        $manager->persist($devis);
        $manager->flush();

        $pdfOptions = new Options();
        $pdfOptions->setIsRemoteEnabled(true);
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('content/attachedoc.html.twig', [
            'chantier' => $devis->getChantier(),
            'devis' => $devis,
            'formes' => $formes,
            'lignes' => $lignes,
            'listGroup' => $listegroupe,
            'th' => $th,
            'ttc' => $ttc,
            'vtva' => $vtva,
            'rem' => $rem,
            'type' => 'devis'
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
        // Send some text response

        return $this->json(['result' => $document->getFolde() . '/' . $document->getDonner()], 200);
    }

      #[Route(path: '/apdf/get', name: 'api_devis_pdf_adevis', methods: ['POST'])]
    public function apdff(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): JsonResponse
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);
        $repoGroupe = $doctrine->getRepository(Groupe::class);
        $repoForme = $doctrine->getRepository(Forme::class);
        $repoDocuments = $doctrine->getRepository(Documents::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $apdevis = $serializer->deserialize($apjson, Devis::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $devis = $repoDevis->findOneBy(['user' => $master, 'iddevis' => $apdevis->getIddevis()]);
        $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'devis', 'numero' => $devis->getId(), 'etat' => 'no']);

        if ($docu) {
            $this->delete_directory('pdf/' . $docu->getFolde());
            $manager->remove($docu);
            $manager->flush();
        }

        // ON RECUPERE LES LIGNES
        $lignes = $repoLigne->findBy(['devis' => $devis]);

        // ON RECUPERE LES GROUPES
        $listegroupe = $repoGroupe->findBy(
            ['devis' => $devis],
            ['reference' => 'ASC']);


        // INITIALISATION DES RESULTATS
        $th = 0;
        $rem = 0;
        $vtva = 0;

        // CALCUL DES RESULTATS
        if ($devis->getAbasetva() === 'non') {
            foreach ($lignes as $lig) {
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
        } else {
            foreach ($lignes as $lig) {
                if ($devis->getAarem() === 'oui') {
                    $rem = ((($lig->getQuantite() * $lig->getPu()) * $lig->getRemise()) / 100);
                    $th = (($lig->getQuantite() * $lig->getPu()) * (((100) - $lig->getRemise()) / 100)) + $th;
                } else {
                    $th = ($lig->getQuantite() * $lig->getPu()) + $th;
                }
            }
        }

        if ($devis->getPtva() === 'oui' || $devis->getPtva() === 'susp') {
            if ($devis->getAarem() === 'tht') {
                $rem = ($th * $devis->getRemtht()) / 100;
                $th = $th - $rem;
            }
            if ($devis->getAbasetva() === 'non') {
                $vtva = ($th * $devis->getTva()) / 100;
            } else {
                $vtva = ($devis->getBasetva() * $devis->getTva()) / 100;
            }

            $ttc = $th + $vtva;
        } else {
            if ($devis->getAarem() === 'tht') {
                $rem = ($th * $devis->getRemtht()) / 100;
                $th = $th - $rem;
            }
            $ttc = $th;
        }


        // RECUPERATION DES MISES EN FORME
        $formes = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);
        $subject = $devis->getClient()->getNomClient().'-'.$devis->getChantier()->getNomChantier().'-Devis-' . $devis->getIddevis();

        $document = new Documents();
        $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
        if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }

        $document->setUser($apuser);
        $document->setNumero($devis->getId());
        $document->setDonner($subject);
        $document->setType('devis');
        $document->setEtat('no');
        $document->setFolde($dire);
        $devis->setMarquer('oui');
        $manager->persist($document);
        $manager->persist($devis);
        $manager->flush();

        $pdfOptions = new Options();
        $pdfOptions->setIsRemoteEnabled(true);
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('content/attachedoc.html.twig', [
            'chantier' => $devis->getChantier(),
            'devis' => $devis,
            'formes' => $formes,
            'lignes' => $lignes,
            'listGroup' => $listegroupe,
            'th' => $th,
            'ttc' => $ttc,
            'vtva' => $vtva,
            'rem' => $rem,
            'type' => 'adevis'
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
        // Send some text response

        return $this->json(['result' => $document->getFolde() . '/' . $document->getDonner()], 200);
    }

    #[Route(path: '/excel/get', name: 'api_devis_excel_devis', methods: ['POST'])]
    public function excel(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): Response
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);
        $repoGroupe = $doctrine->getRepository(Groupe::class);
        $repoForme = $doctrine->getRepository(Forme::class);
        $repoDevis = $doctrine->getRepository(Devis::class);

        // =====================
        // Récupération des données depuis le JSON envoyé par Flutter
        // =====================
        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $apdevis = $serializer->deserialize($apjson, Devis::class, 'json');

        $master = $apuser->getCompte() === null
            ? $apuser
            : $repoUser->find($apuser->getCompte());

        $devis = $repoDevis->findOneBy([
            'user' => $master,
            'iddevis' => $apdevis->getIddevis()
        ]);

        // =====================
        // Récupération des lignes et groupes
        // =====================
        $lignes = $repoLigne->findBy(['devis' => $devis]);
        $listegroupe = $repoGroupe->findBy(
            ['devis' => $devis],
            ['reference' => 'ASC']
        );

        // =====================
        // Calculs HT / TVA / TTC
        // =====================
        $th = 0;
        $rem = 0;
        $vtva = 0;

        if ($devis->getAbasetva() === 'non') {
            foreach ($lignes as $lig) {
                if ($devis->getAarem() === 'oui') {
                    $th += ($lig->getQuantite() * $lig->getPu()) * ((100 - $lig->getRemise()) / 100);
                    $rem += ($lig->getQuantite() * $lig->getPu()) * ($lig->getRemise() / 100);
                } else {
                    $th += $lig->getQuantite() * $lig->getPu();
                }
            }
        } else {
            foreach ($lignes as $lig) {
                if ($devis->getAarem() === 'oui') {
                    $rem += ($lig->getQuantite() * $lig->getPu()) * ($lig->getRemise() / 100);
                    $th += ($lig->getQuantite() * $lig->getPu()) * ((100 - $lig->getRemise()) / 100);
                } else {
                    $th += $lig->getQuantite() * $lig->getPu();
                }
            }
        }

        if ($devis->getPtva() === 'oui' || $devis->getPtva() === 'susp') {
            if ($devis->getAarem() === 'tht') {
                $rem = ($th * $devis->getRemtht()) / 100;
                $th -= $rem;
            }
            $vtva = $devis->getAbasetva() === 'non'
                ? ($th * $devis->getTva()) / 100
                : ($devis->getBasetva() * $devis->getTva()) / 100;

            $ttc = $th + $vtva;
        } else {
            if ($devis->getAarem() === 'tht') {
                $rem = ($th * $devis->getRemtht()) / 100;
                $th -= $rem;
            }
            $ttc = $th;
        }

        $formes = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);
        // =====================
        // HTML Twig pour Excel
        // =====================
        $html = $this->renderView('content/attachedoc_excel.html.twig', [
            'chantier' => $devis->getChantier(),
            'devis' => $devis,
            'formes' => $formes,
            'lignes' => $lignes,
            'listGroup' => $listegroupe,
            'th' => $th,
            'ttc' => $ttc,
            'vtva' => $vtva,
            'rem' => $rem,
            'type' => 'devis'
        ]);

        // =====================
        // Conversion HTML → Excel
        // =====================
        $spreadsheet = new Spreadsheet();
        $reader = new Html();
        $reader->loadFromString($html, $spreadsheet);

        $writer = new Xlsx($spreadsheet);
        $filename = 'Devis-'.$devis->getIddevis().'.xlsx';

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

    #[Route(path: '/travaux', name: 'api_devis_travaux_devis', methods: ['POST'])]
    public function last(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $date = date("Y-m-d");
        $ddevis = $repoDevis->findByeDater($master, $date);
        return $this->json($ddevis, 200, ['Content-Type' => 'application/json'], ['groups' => 'pydevis']);
    }

    #[Route(path: '/add/{idchantier}', name: 'api_devis_ajouter_devis', methods: ['POST'])]
    public function adde(int $idchantier, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoMonnaie = $doctrine->getRepository(Monnaie::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apdevis = $serializer->deserialize($apjson, Devis::class, 'json');
        $apmonnaie = $serializer->deserialize($apjson, Monnaie::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $monnaie = $repoMonnaie->findOneBy(['libelle' => $apmonnaie->getLibelle()]);
        $repoCompte = $doctrine->getRepository(Compte::class);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $apdevis->setDobyuser($apuser);
        $apdevis->setUser($master);
        $apchantier = $repoChantier->findOneBy(['user' => $master, 'id' => $idchantier]);
        $der = $repoDevis->findBy(['user' => $master], ['id' => 'DESC'], 1);
        $compte = $repoCompte->findOneBy(['user' => $master]);

        $apdevis->setChantier($apchantier);
        $apdevis->setClient($apchantier->getClient());
        $apdevis->setMonnaie($monnaie);
        $apdevis->setModele(1);
        $apdevis->setModel(1);

        $apdevis->setTotalht(0);
        $apdevis->setTotalttc(0);
        $apdevis->setVtva(0);
        $apdevis->setVremise(0);
        $apdevis->setEtat('save');

        if ($der) {
            $rang = $der[0]->getRang() + 1;
            $apdevis->setRang($rang);
            $apdevis->setIddevis($compte->getCompteDevis() . $rang);
        } else {
            $apdevis->setRang(1);
            $apdevis->setIddevis(($compte->getCompteDevis() . '1'));
        }

        $apdevis->setAcomrage(0);
        $apdevis->setFinition(0);
        $apdevis->setProrata(0);
        $apdevis->setGarantie(0);

        $manager = $doctrine->getManager();
        $manager->persist($apdevis);
        $manager->flush();
        if ($apuser->getCompte() === null) {
            $ddevis = $repoDevis->findOneBy(['user' => $apuser], ['id' => 'DESC']);
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
            $ddevis = $repoDevis->findOneBy(['user' => $master], ['id' => 'DESC']);
        }
        $action = '<p>Création du devis N° : ' . $apdevis->getIddevis() . '</p> ' . $apdevis->getDevReference();
        $history = new Historique();
        $history->setUser($master);
        $history->setDobyuser($this->getUser());
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();
        return $this->json($ddevis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);

    }

    #[Route(path: '/win/add/{idchantier}', name: 'api_devis_ajouter_win', methods: ['POST'])]
    public function addwin(int $idchantier, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoMonnaie = $doctrine->getRepository(Monnaie::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apdevis = $serializer->deserialize($apjson, Devis::class, 'json');
        $apmonnaie = $serializer->deserialize($apjson, Monnaie::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $monnaie = $repoMonnaie->findOneBy(['libelle' => $apmonnaie->getLibelle()]);
        $repoCompte = $doctrine->getRepository(Compte::class);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $apdevis->setDobyuser($apuser);
        $apdevis->setUser($master);
        $apchantier = $repoChantier->findOneBy(['user' => $master, 'id' => $idchantier]);
        $der = $repoDevis->findBy(['user' => $master], ['id' => 'DESC'], 1);
        $compte = $repoCompte->findOneBy(['user' => $master]);

        $apdevis->setChantier($apchantier);
        $apdevis->setClient($apchantier->getClient());
        $apdevis->setMonnaie($monnaie);
        $apdevis->setModele(1);
        $apdevis->setModel(1);

        $apdevis->setTotalht(0);
        $apdevis->setTotalttc(0);
        $apdevis->setVtva(0);
        $apdevis->setVremise(0);
        $apdevis->setEtat('save');

        if ($der) {
            $rang = $der[0]->getRang() + 1;
            $apdevis->setRang($rang);
            $apdevis->setIddevis($compte->getCompteDevis() . $rang);
        } else {
            $apdevis->setRang(1);
            $apdevis->setIddevis(($compte->getCompteDevis() . '1'));
        }

        $apdevis->setAcomrage(0);
        $apdevis->setFinition(0);
        $apdevis->setProrata(0);
        $apdevis->setGarantie(0);

        $manager = $doctrine->getManager();
        $manager->persist($apdevis);
        $manager->flush();

        if ($apuser->getCompte() === null) {
            $ddevis = $repoDevis->findOneBy(['user' => $apuser], ['id' => 'DESC']);
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
            $ddevis = $repoDevis->findOneBy(['user' => $master], ['id' => 'DESC']);
        }

        $action = '<p>Création du devis N° : ' . $apdevis->getIddevis() . '</p> ' . $apdevis->getDevReference();
        $history = new Historique();
        $history->setUser($master);
        $history->setDobyuser($this->getUser());
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();
        return $this->json($apchantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'pychantier']);

    }

    #[Route(path: '/update/{id}', name: 'api_devs_update_devis', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function update(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoMonnaie = $doctrine->getRepository(Monnaie::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apdevis = $serializer->deserialize($apjson, Devis::class, 'json');
        $apmonnaie = $serializer->deserialize($apjson, Monnaie::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $monnaie = $repoMonnaie->findOneBy(['libelle' => $apmonnaie->getLibelle()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $ddevis = $repoDevis->findOneBy(['id' => $id, 'user' => $master]);
        $ddevis->setZone($apdevis->getZone());
        $ddevis->setDevReference($apdevis->getDevReference());
        $ddevis->setDate($apdevis->getDate());
        $ddevis->setMonnaie($monnaie);
        $ddevis->setPtva($apdevis->getPtva());
        $ddevis->setTva($apdevis->getTva());
        $ddevis->setAaref($apdevis->getAaref());
        $ddevis->setAarem($apdevis->getAarem());
        $ddevis->setValidit($apdevis->getValidit());
        $ddevis->setConditions($apdevis->getConditions());


        $manager = $doctrine->getManager();
        $manager->persist($ddevis);
        $manager->flush();

        $this->ajourDevis($ddevis, $doctrine);
        return $this->json($ddevis, 200, ['Content-Type' => 'application/json'], ['groups' => 'pydevis']);

    }

    #[Route(path: '/groupe/{iddev}', name: 'api_devis_groupe_devis', methods: ['POST'])]
    public function adgroupe(int $iddev, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apgroupe = $serializer->deserialize($apjson, Groupe::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();


        if ($apuser->getCompte() === null) {
            $devis = $repoDevis->findOneBy(['user' => $apuser, 'id' => $iddev]);
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
            $devis = $repoDevis->findOneBy(['user' => $master, 'id' => $iddev]);
        }

        $groupe = new Groupe();
        $groupe->setDevis($devis);
        $groupe->setGroupe($apgroupe->getApGroupe());
        $groupe->setReference($apgroupe->getReference());

        $manager->persist($groupe);
        $manager->flush();

        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);

    }

    #[Route(path: '/getgroupe/{id}', name: 'api_devis_getgroupe_devis', methods: ['POST'])]
    public function getgroupe(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repodevis = $doctrine->getRepository(Devis::class);
        $repoGroupe = $doctrine->getRepository(Groupe::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $devis = $repodevis->findOneBy(['user' => $apuser, 'id' => $id]);
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
            $devis = $repodevis->findOneBy(['user' => $master, 'id' => $id]);
        }

        $groupe = $repoGroupe->findBy(['devis' => $devis], ['reference' => 'ASC']);
        return $this->json($groupe, 200, ['Content-Type' => 'application/json'], ['groups' => 'groupes']);

    }

    #[Route(path: '/upgroupe/{iddev}/{idgr}', name: 'api_devis_upgroupe_devis', methods: ['POST'])]
    public function upgroupe(int $iddev, int $idgr, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {

        $manager = $doctrine->getManager();

        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoGroupe = $doctrine->getRepository(Groupe::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apgroupe = $serializer->deserialize($apjson, Groupe::class, 'json');

        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $devis = $repoDevis->findOneBy(['user' => $apuser, 'id' => $iddev]);
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
            $devis = $repoDevis->findOneBy(['user' => $master, 'id' => $iddev]);
        }

        $groupe = $repoGroupe->findOneBy(['devis' => $devis, 'id' => $idgr]);
        $groupe->setReference($apgroupe->getReference());
        $groupe->setGroupe($apgroupe->getApgroupe());

        $manager->persist($groupe);
        $manager->flush();


        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);

    }

    #[Route(path: '/delgroupe/{iddev}/{idgr}', name: 'api_devis_delgroupe_devis', methods: ['POST'])]
    public function delgroupe(int $iddev, int $idgr, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {

        $manager = $doctrine->getManager();

        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoGroupe = $doctrine->getRepository(Groupe::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $devis = $repoDevis->findOneBy(['user' => $master, 'id' => $iddev]);
        $groupe = $repoGroupe->findOneBy(['id' => $idgr]);

        $lignes = $repoLigne->findBy(['groupe' => $groupe, 'user' => $master]);

        foreach ($lignes as $lig) {
            $manager->remove($lig);
            $manager->flush();
        }

        $manager->remove($groupe);
        $manager->flush();


        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);

    }

    #[Route(path: '/basetva/{iddev}', name: 'api_devis_basetva_devis', methods: ['POST'])]
    public function adbase(int $iddev, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apdevis = $serializer->deserialize($apjson, Devis::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $devis = $repoDevis->findOneBy(['user' => $apuser, 'id' => $iddev]);
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
            $devis = $repoDevis->findOneBy(['user' => $master, 'id' => $iddev]);
        }

        $devis->setBasetva($apdevis->getBasetva());
        $manager->persist($devis);
        $manager->flush();

        $this->ajourDevis($devis, $doctrine);
        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
    }
    
    #[Route(path: '/remise/{iddev}', name: 'api_remise_devis', methods: ['POST'])]
    public function addRemise(int $iddev, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apdevis = $serializer->deserialize($apjson, Devis::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $devis = $repoDevis->findOneBy(['user' => $apuser, 'id' => $iddev]);
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
            $devis = $repoDevis->findOneBy(['user' => $master, 'id' => $iddev]);
        }

        $devis->setRemtht($apdevis->getRemtht());
        $manager->persist($devis);
        $manager->flush();

        $this->ajourDevis($devis, $doctrine);
        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
    }

    #[Route(path: '/dupliquer/{iddev}', name: 'api_dupliquer_devis', methods: ['POST'])]
    public function dupliqueDev(int $iddev, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoCompte = $doctrine->getRepository(Compte::class);
        $repoGroupe = $doctrine->getRepository(Groupe::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        // RECUPERE LE DEVIS
        $devis = $repoDevis->findOneBy(['id' => $iddev, 'user' => $master]);
        if (!$devis) {
            return $this->json(['result' => 'erreur'], 404);
        }

        $dudevis = new Devis();

        $der = $repoDevis->findBy(['user' => $master], ['id' => 'DESC'], 1);
        $compte = $repoCompte->findOneBy(['user' => $master]);

        if ($der) {
            $rang = $der[0]->getRang() + 1;
            $dudevis->setRang($rang);
            $dudevis->setIddevis($compte->getCompteDevis() . $rang);
        }

        $groupes = $repoGroupe->findBy(['devis' => $devis]);

        $dudevis->setZone($devis->getZone());
        $dudevis->setAarem($devis->getAarem());
        $dudevis->setPtva($devis->getPtva());
        $dudevis->setTva($devis->getTva());
        $dudevis->setEtat('save');
        $dudevis->setTotalht($devis->getTotalht());
        $dudevis->setVtva($devis->getVtva());
        $dudevis->setVremise($devis->getVremise());
        $dudevis->setTotalttc($devis->getTotalttc());
        $dudevis->setdevReference($devis->getDevReference());
        $dudevis->setDate(new \DateTime('NOW'));
        $dudevis->setChantier($devis->getChantier());
        $dudevis->setMonnaie($devis->getMonnaie());
        $dudevis->setClient($devis->getClient());
        $dudevis->setContact($devis->getContact());
        $dudevis->setConditions($devis->getConditions());
        $dudevis->setAbasetva($devis->getAbasetva());
        $dudevis->setModele($devis->getModele());
        $dudevis->setAaref($devis->getAaref());
        $dudevis->setUser($master);
        $dudevis->setDobyuser($devis->getUser());
        $dudevis->setModel($devis->getModel());
        $dudevis->setMonnaie($devis->getMonnaie());
        if ($devis->getAbasetva() === 'oui') {
            $dudevis->setBasetva($devis->getBasetva());
        }

        $dudevis->setProrata($devis->getProrata());
        $dudevis->setFinition($devis->getFinition());
        $dudevis->setTrc($devis->getTrc());
        $dudevis->setGarantie($devis->getGarantie());


        $dudevis->setCode($devis->getCode());
        $manager->persist($dudevis);
        $manager->flush();

        foreach ($devis->getLignes() as $ligne) {
            if ($ligne->getGroupe() === null) {
                $lign = new Ligne();
                $lign->setDevis($dudevis);
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
                $dudevis->setModele($devis->getModele());
                $manager->persist($lign);
                $manager->flush();
            }
        }


        foreach ($groupes as $groupe) {
            $group = new Groupe();
            $group->setGroupe($groupe->getGroupe());
            $group->setReference($groupe->getReference());
            $group->setDevis($dudevis);
            $manager->persist($group);
            $manager->flush();


            foreach ($groupe->getLignes() as $ligne) {
                    $lign = new Ligne();
                    $lign->setDevis($dudevis);
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
                    $lign->setUser($master);
                    $lign->setGroupe($group);
                    $lign->setUnite($ligne->getUnite());
                    $manager->persist($lign);
                    $manager->flush();
            }
        }

        date_default_timezone_set('Africa/Abidjan');
        $action = 'Duplication du Devis N° : ' . $devis->getIddevis() . ' ' . $devis->getDevReference();
        $history = new Historique();
        $history->setUser($master);
        $history->setDobyuser($apuser);
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();

        return $this->json($dudevis, 200, ['Content-Type' => 'application/json'], ['groups' => 'pydevis']);
    }

    #[Route(path: '/deplacer/{iddev}/{idchantier}', name: 'api_deplacer_devis', methods: ['POST'])]
    public function deplacerDev(int $iddev, int $idchantier, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoRelever = $doctrine->getRepository(Relever::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $devis = $repoDevis->findOneBy(['id' => $iddev, 'user' => $master]);

        if (!$devis) {
            return $this->json(['result' => 'erreur'], 404);
        }

        $cchantier = $devis->getChantier();
        $check = $repoRelever->findOneBy(['devis' => $devis, 'chantier' => $cchantier]);

        // RECUPERE LE DEVIS
        if ($devis) {
            foreach ($devis->getRelevers() as $releve) {
                $releve->setChantier($devis->getChantier());
                $manager->persist($releve);
                $manager->flush();
            }

            $chantier = $repoChantier->findOneBy(['id' => $idchantier, 'user' => $master]);
            $devis->setChantier($chantier);
            $devis->setClient($chantier->getClient());

            if ($check) {
                $ccout = $cchantier->getCout() - $devis->getTotalttc();
                $cchantier->setCout($ccout);
                $cout = $chantier->getCout() + $devis->getTotalttc();
                $chantier->setCout($cout);
                $cchantier->setCout($ccout);
            }

            $manager->persist($chantier);
            $manager->persist($cchantier);
            $manager->persist($devis);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p>Déplacement du devis N° : ' . $devis->getIddevis() . '<p> ' . $devis->getDevReference();
            $history = new Historique();
            $history->setUser($master);
            $history->setDobyuser($apuser);
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'pydevis']);

        }

        return $this->json(['result' => 'echec'], 404);

    }

    #[Route(path: '/lot/{id}', name: 'api_devis_lot_devis', methods: ['POST'])]
    public function lotDevis(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $master]);

        foreach ($devis->getGroupe() as $gr){
            $manager->remove($gr);
            $manager->flush();
        }
        foreach ($devis->getLignes() as $li){
            $manager->remove($li);
            $manager->flush();
        }

        $group = new Groupe();
        $group->setReference("I");
        $group->setGroupe("TRAVAUX PRELIMINAIRES");
        $group->setDevis($devis);
        $manager->persist($group);
        $manager->flush();

        $ligna = new Ligne();
        $ligna->setDesignation("<p>PROPOSITION 1</p>");
        $ligna->setDevis($devis);
        $ligna->setUnite("F");
        $ligna->setQuantite(1);
        $ligna->setPu(0);
        $ligna->setUser($master);
        $ligna->setReference("1.1");
        $ligna->setChantier($devis->getChantier());
        $ligna->setType(1);
        $ligna->setRemise(0);
        $ligna->setGroupe($group);
        $manager->persist($ligna);
        $manager->flush();

        $ligna2 = new Ligne();
        $ligna2->setDesignation("<p>PROPOSITION 2</p>");
        $ligna2->setDevis($devis);
        $ligna2->setUnite("F");
        $ligna2->setQuantite(1);
        $ligna2->setPu(0);
        $ligna2->setUser($master);
        $ligna2->setReference("1.2");
        $ligna2->setChantier($devis->getChantier());
        $ligna2->setType(1);
        $ligna2->setRemise(0);
        $ligna2->setGroupe($group);
        $manager->persist($ligna2);
        $manager->flush();


        $groupa = new Groupe();
        $groupa->setReference("II");
        $groupa->setGroupe("FONDATION");
        $groupa->setDevis($devis);
        $manager->persist($groupa);
        $manager->flush();

        $lignb = new Ligne();
        $lignb->setDesignation("<p>PROPOSITION 1</p>");
        $lignb->setDevis($devis);
        $lignb->setUnite("F");
        $lignb->setQuantite(1);
        $lignb->setPu(0);
        $lignb->setUser($master);
        $lignb->setReference("2.1");
        $lignb->setChantier($devis->getChantier());
        $lignb->setType(1);
        $lignb->setRemise(0);
        $lignb->setGroupe($groupa);
        $manager->persist($lignb);
        $manager->flush();

        $lignb1 = new Ligne();
        $lignb1->setDesignation("<p>PROPOSITION 2</p>");
        $lignb1->setDevis($devis);
        $lignb1->setUnite("F");
        $lignb1->setQuantite(1);
        $lignb1->setPu(0);
        $lignb1->setUser($master);
        $lignb1->setReference("2.2");
        $lignb1->setChantier($devis->getChantier());
        $lignb1->setType(1);
        $lignb1->setRemise(0);
        $lignb1->setGroupe($groupa);
        $manager->persist($lignb1);
        $manager->flush();

        $groupb = new Groupe();
        $groupb->setReference("III");
        $groupb->setGroupe("ELEVATION");
        $groupb->setDevis($devis);
        $manager->persist($groupb);
        $manager->flush();

        $lignc = new Ligne();
        $lignc->setDesignation("<p>PROPOSITION 1</p>");
        $lignc->setDevis($devis);
        $lignc->setUnite("F");
        $lignc->setQuantite(1);
        $lignc->setPu(0);
        $lignc->setUser($master);
        $lignc->setReference("3.1");
        $lignc->setChantier($devis->getChantier());
        $lignc->setType(1);
        $lignc->setRemise(0);
        $lignc->setGroupe($groupb);
        $manager->persist($lignc);
        $manager->flush();

        $lignc1 = new Ligne();
        $lignc1->setDesignation("<p>PROPOSITION 2</p>");
        $lignc1->setDevis($devis);
        $lignc1->setUnite("F");
        $lignc1->setQuantite(1);
        $lignc1->setPu(0);
        $lignc1->setUser($master);
        $lignc1->setReference("3.2");
        $lignc1->setChantier($devis->getChantier());
        $lignc1->setType(1);
        $lignc1->setRemise(0);
        $lignc1->setGroupe($groupb);
        $manager->persist($lignc1);
        $manager->flush();

        $groupc = new Groupe();
        $groupc->setReference("IV");
        $groupc->setGroupe("TOITURE");
        $groupc->setDevis($devis);
        $manager->persist($groupc);
        $manager->flush();

        $lignd = new Ligne();
        $lignd->setDesignation("<p>PROPOSITION 1</p>");
        $lignd->setDevis($devis);
        $lignd->setUnite("F");
        $lignd->setQuantite(1);
        $lignd->setPu(0);
        $lignd->setUser($master);
        $lignd->setReference("4.1");
        $lignd->setChantier($devis->getChantier());
        $lignd->setType(1);
        $lignd->setRemise(0);
        $lignd->setGroupe($groupc);
        $manager->persist($lignd);
        $manager->flush();

        $lignd1 = new Ligne();
        $lignd1->setDesignation("<p>PROPOSITION 2</p>");
        $lignd1->setDevis($devis);
        $lignd1->setUnite("F");
        $lignd1->setQuantite(1);
        $lignd1->setPu(0);
        $lignd1->setUser($master);
        $lignd1->setReference("4.2");
        $lignd1->setChantier($devis->getChantier());
        $lignd1->setType(1);
        $lignd1->setRemise(0);
        $lignd1->setGroupe($groupc);
        $manager->persist($lignd1);
        $manager->flush();

        $groupd = new Groupe();
        $groupd->setReference("V");
        $groupd->setGroupe("REVETEMENT DES MURS");
        $groupd->setDevis($devis);
        $manager->persist($groupd);
        $manager->flush();

        $lignf = new Ligne();
        $lignf->setDesignation("<p>PROPOSITION 1</p>");
        $lignf->setDevis($devis);
        $lignf->setUnite("F");
        $lignf->setQuantite(1);
        $lignf->setPu(0);
        $lignf->setUser($master);
        $lignf->setReference("5.1");
        $lignf->setChantier($devis->getChantier());
        $lignf->setType(1);
        $lignf->setRemise(0);
        $lignf->setGroupe($groupd);
        $manager->persist($lignf);
        $manager->flush();

        $lignf1 = new Ligne();
        $lignf1->setDesignation("<p>PROPOSITION 2</p>");
        $lignf1->setDevis($devis);
        $lignf1->setUnite("F");
        $lignf1->setQuantite(1);
        $lignf1->setPu(0);
        $lignf1->setUser($master);
        $lignf1->setReference("5.2");
        $lignf1->setChantier($devis->getChantier());
        $lignf1->setType(1);
        $lignf1->setRemise(0);
        $lignf1->setGroupe($groupd);
        $manager->persist($lignf1);
        $manager->flush();

        $groupf = new Groupe();
        $groupf->setReference("VI");
        $groupf->setGroupe("REVETEMENT DES SOLS");
        $groupf->setDevis($devis);
        $manager->persist($groupf);
        $manager->flush();

        $ligng = new Ligne();
        $ligng->setDesignation("<p>PROPOSITION 1</p>");
        $ligng->setDevis($devis);
        $ligng->setUnite("F");
        $ligng->setQuantite(1);
        $ligng->setPu(0);
        $ligng->setUser($master);
        $ligng->setReference("6.1");
        $ligng->setChantier($devis->getChantier());
        $ligng->setType(1);
        $ligng->setRemise(0);
        $ligng->setGroupe($groupf);
        $manager->persist($ligng);
        $manager->flush();

        $ligng1 = new Ligne();
        $ligng1->setDesignation("<p>PROPOSITION 1</p>");
        $ligng1->setDevis($devis);
        $ligng1->setUnite("F");
        $ligng1->setQuantite(1);
        $ligng1->setPu(0);
        $ligng1->setUser($master);
        $ligng1->setReference("6.2");
        $ligng1->setChantier($devis->getChantier());
        $ligng1->setType(1);
        $ligng1->setRemise(0);
        $ligng1->setGroupe($groupf);
        $manager->persist($ligng1);
        $manager->flush();

        $groupg = new Groupe();
        $groupg->setReference("VII");
        $groupg->setGroupe("PLAFOND");
        $groupg->setDevis($devis);
        $manager->persist($groupg);
        $manager->flush();

        $lignh1 = new Ligne();
        $lignh1->setDesignation("<p>PROPOSITION 1</p>");
        $lignh1->setDevis($devis);
        $lignh1->setUnite("F");
        $lignh1->setQuantite(1);
        $lignh1->setPu(0);
        $lignh1->setUser($master);
        $lignh1->setReference("7.1");
        $lignh1->setChantier($devis->getChantier());
        $lignh1->setType(1);
        $lignh1->setRemise(0);
        $lignh1->setGroupe($groupg);
        $manager->persist($lignh1);
        $manager->flush();

        $lignh2 = new Ligne();
        $lignh2->setDesignation("<p>PROPOSITION 2</p>");
        $lignh2->setDevis($devis);
        $lignh2->setUnite("F");
        $lignh2->setQuantite(1);
        $lignh2->setPu(0);
        $lignh2->setUser($master);
        $lignh2->setReference("7.2");
        $lignh2->setChantier($devis->getChantier());
        $lignh2->setType(1);
        $lignh2->setRemise(0);
        $lignh2->setGroupe($groupg);
        $manager->persist($lignh2);
        $manager->flush();

        $grouph = new Groupe();
        $grouph->setReference("VIII");
        $grouph->setGroupe("HUISSERIE");
        $groupg->setDevis($devis);
        $manager->persist($grouph);
        $manager->flush();

        $lig = new Ligne();
        $lig->setDesignation("<p>PROPOSITION 1</p>");
        $lig->setDevis($devis);
        $lig->setUnite("F");
        $lig->setQuantite(1);
        $lig->setPu(0);
        $lig->setUser($master);
        $lig->setReference("7.1");
        $lig->setChantier($devis->getChantier());
        $lig->setType(1);
        $lig->setRemise(0);
        $lig->setGroupe($grouph);
        $manager->persist($lig);
        $manager->flush();

        $lig2 = new Ligne();
        $lig2->setDesignation("<p>PROPOSITION 2</p>");
        $lig2->setDevis($devis);
        $lig2->setUnite("F");
        $lig2->setQuantite(1);
        $lig2->setPu(0);
        $lig2->setUser($master);
        $lig2->setReference("7.2");
        $lig2->setChantier($devis->getChantier());
        $lig2->setType(1);
        $lig2->setRemise(0);
        $lig2->setGroupe($grouph);
        $manager->persist($lig2);
        $manager->flush();

        $groupi = new Groupe();
        $groupi->setReference("IX");
        $groupi->setGroupe("ELECTRICITE");
        $groupi->setDevis($devis);
        $manager->persist($groupi);
        $manager->flush();

        $li1 = new Ligne();
        $li1->setDesignation("<p>PROPOSITION 1</p>");
        $li1->setDevis($devis);
        $li1->setUnite("F");
        $li1->setQuantite(1);
        $li1->setPu(0);
        $li1->setUser($master);
        $li1->setReference("7.1");
        $li1->setChantier($devis->getChantier());
        $li1->setType(1);
        $li1->setRemise(0);
        $li1->setGroupe($groupi);
        $manager->persist($li1);
        $manager->flush();

        $li2 = new Ligne();
        $li2->setDesignation("<p>PROPOSITION 2</p>");
        $li2->setDevis($devis);
        $li2->setUnite("F");
        $li2->setQuantite(1);
        $li2->setPu(0);
        $li2->setUser($master);
        $li2->setReference("7.2");
        $li2->setChantier($devis->getChantier());
        $li2->setType(1);
        $li2->setRemise(0);
        $li2->setGroupe($groupi);
        $manager->persist($li2);
        $manager->flush();

        $groupj = new Groupe();
        $groupj->setReference("X");
        $groupj->setGroupe("SANITAIRE");
        $groupj->setDevis($devis);
        $manager->persist($groupj);
        $manager->flush();

        $lia1 = new Ligne();
        $lia1->setDesignation("<p>PROPOSITION 1</p>");
        $lia1->setDevis($devis);
        $lia1->setUnite("F");
        $lia1->setQuantite(1);
        $lia1->setPu(0);
        $lia1->setUser($master);
        $lia1->setReference("7.1");
        $lia1->setChantier($devis->getChantier());
        $lia1->setType(1);
        $lia1->setRemise(0);
        $lia1->setGroupe($groupj);
        $manager->persist($lia1);
        $manager->flush();

        $lib2 = new Ligne();
        $lib2->setDesignation("<p>PROPOSITION 2</p>");
        $lib2->setDevis($devis);
        $lib2->setUnite("F");
        $lib2->setQuantite(1);
        $lib2->setPu(0);
        $lib2->setUser($master);
        $lib2->setReference("7.2");
        $lib2->setChantier($devis->getChantier());
        $lib2->setType(1);
        $lib2->setRemise(0);
        $lib2->setGroupe($groupj);
        $manager->persist($lib2);
        $manager->flush();

        $groupk = new Groupe();
        $groupk->setReference("XI");
        $groupk->setGroupe("PEINTURE");
        $groupk->setDevis($devis);
        $manager->persist($groupk);
        $manager->flush();

        $liak1 = new Ligne();
        $liak1->setDesignation("<p>PROPOSITION 1</p>");
        $liak1->setDevis($devis);
        $liak1->setUnite("F");
        $liak1->setQuantite(1);
        $liak1->setPu(0);
        $liak1->setUser($master);
        $liak1->setReference("7.1");
        $liak1->setChantier($devis->getChantier());
        $liak1->setType(1);
        $liak1->setRemise(0);
        $liak1->setGroupe($groupk);
        $manager->persist($liak1);
        $manager->flush();

        $libk2 = new Ligne();
        $libk2->setDesignation("<p>PROPOSITION 2</p>");
        $libk2->setDevis($devis);
        $libk2->setUnite("F");
        $libk2->setQuantite(1);
        $libk2->setPu(0);
        $libk2->setUser($master);
        $libk2->setReference("7.2");
        $libk2->setChantier($devis->getChantier());
        $libk2->setType(1);
        $libk2->setRemise(0);
        $libk2->setGroupe($groupk);
        $manager->persist($libk2);
        $manager->flush();

        $groupek = new Groupe();
        $groupek->setReference("XII");
        $groupek->setGroupe("AMENAGEMENT EXTERIEUR");
        $groupek->setDevis($devis);
        $manager->persist($groupek);
        $manager->flush();

        $liake1 = new Ligne();
        $liake1->setDesignation("<p>PROPOSITION 1</p>");
        $liake1->setDevis($devis);
        $liake1->setUnite("F");
        $liake1->setQuantite(1);
        $liake1->setPu(0);
        $liake1->setUser($master);
        $liake1->setReference("7.1");
        $liake1->setChantier($devis->getChantier());
        $liake1->setType(1);
        $liake1->setRemise(0);
        $liake1->setGroupe($groupek);
        $manager->persist($liake1);
        $manager->flush();

        $libke2 = new Ligne();
        $libke2->setDesignation("<p>PROPOSITION 2</p>");
        $libke2->setDevis($devis);
        $libke2->setUnite("F");
        $libke2->setQuantite(1);
        $libke2->setPu(0);
        $libke2->setUser($master);
        $libke2->setReference("7.2");
        $libke2->setChantier($devis->getChantier());
        $libke2->setType(1);
        $libke2->setRemise(0);
        $libke2->setGroupe($groupek);
        $manager->persist($libke2);
        $manager->flush();

        $devis->setVtva(0);
        $devis->setVremise(0);
        $devis->setTotalht(0);
        $devis->setTotalttc(0);


        $manager->persist($devis);
        $manager->flush();

        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'pydevis']);
    }

}
