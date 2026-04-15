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
use App\Entity\Forme;
use App\Entity\Fournisseur;
use App\Entity\Historique;
use App\Entity\Intervenant;
use App\Entity\Journal;
use App\Entity\Ligne;
use App\Entity\Monnaie;
use App\Entity\Paie;
use App\Entity\Personnel;
use App\Entity\User;
use App\Entity\Valider;
use App\Form\CaisseType;
use Doctrine\Persistence\ManagerRegistry;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route(path: '/api/caisse')]
class ApiCaisseController extends AbstractController
{

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

    private ManagerRegistry $doctrine;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }
    public function jourChantier(Chantier $chantier): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $cout = 0;
        $depense = 0;
        $bonfournisseurs = 0;
        $bonprestataires = 0;

        $paiefournisseurs = 0;
        $paieprestataires = 0;

        $chargechantiers = 0;
        $chargepaiechantiers = 0;

        foreach ($chantier->getCaisses() as $caiss) {
            if ($caiss->getEtat() === "valide" && $caiss->getType() === 3) {
                if ($caiss->getCorbeille() === null) {
                    $chargepaiechantiers = $chargepaiechantiers + $caiss->getMontant();
                }
            }
            if ($caiss->getType() === 3 &&  $caiss->getCorbeille() === null) {
                $chargechantiers = $chargechantiers + $caiss->getMontant();
            }
        }

        $deviss = $chantier->getDevis();
        if (count($deviss) > 0) {
            if ($chantier->getEtat() === "echouer" || $chantier->getEtat() === "etude") {
                foreach ($deviss as $dev) {
                    if (($dev->getCorbeille() === null) && $dev->getType() === null) {
                        $cout += $dev->getTotalttc();
                    }
                }
            } else {
                foreach ($deviss as $dev) {
                    if (($dev->getCorbeille() === null) && $dev->getType() === null) {
                        if ($dev->getEtat() === "valide") {
                            $cout += $dev->getTotalttc();
                        }
                    }
                }
            }
        }

        $u = 0;
        $uu = 0;
        $somu = 0;

        foreach ($deviss as $dev) {
            if ($dev->getEtat() === "valide" && $dev->getCorbeille() === null && $dev->getType() === null) {
                ++$u;
                $somu = $dev->getTotalttc() + $somu;
                $decss = $dev->getDecomptes();
                foreach ($decss as $dec) {
                    if ($dec->getEtat() === "valide" and $dec->getCorbeille() === null) {
                        $uu = $dec->getTtc() + $uu;
                    }
                }

            }
            $acomptes = $dev->getAcomptes();
            $pourcent  = 0;
            foreach ($acomptes as $acc){
                $pourcent = (float)$acc->getPourcentage() + $pourcent;
            }
            $dev->setAcomrage($pourcent);
            $manager->persist($dev);
            $manager->flush();
        }
        foreach ($chantier->getFactures() as $facc) {
            if ($facc->getType() === "acompte") {
                $uu = $facc->getTotalTtc() + $uu;
            }

            $ragler = 0;
            foreach ($facc->getRelever() as $rele) {
                $ragler = $ragler + $rele->getMontant();
            }
            $facc->setRegler($ragler);
            $manager->persist($facc);
            $manager->flush();
        }

        if ($u === 0) {
            $chantier->setEtat("etude");
        } else if ((float)$somu > 0) {
            $chantier->setProgression((string)(($uu / $somu) * 100));
        }


        foreach ($chantier->getBons() as $bo) {
            if ($bo->getFournisseur() !== null && $bo->getFournisseur()->getCorbeille() === null) {
                if ($bo->getEtat() === 'valide' && $bo->getCorbeille() === null && $bo->getType() !== "none") {
                    if ($bo->getType() !== "non") {
                        $depense += $bo->getTotalttc();
                    } else {
                        $depense -= $bo->getTotalttc();
                    }
                }
            }
            if ($bo->getFournisseur() !== null) {
                if ($bo->getFournisseur()->getCorbeille() === null && $bo->getEtat() === "valide") {
                    if ($bo->getCorbeille() === null && $bo->getType() === "pst") {
                        $bonprestataires = $bonprestataires + $bo->getTotalttc();
                        $paieprestataires = $paieprestataires + $bo->getRecu();
                    }
                    if ($bo->getCorbeille() === null && $bo->getType() === "oui") {
                        $bonfournisseurs = $bonfournisseurs + $bo->getTotalttc();
                        $paiefournisseurs = $paiefournisseurs + $bo->getRecu();
                    }
                    if ($bo->getCorbeille() === null && $bo->getType() === "non") {
                        $bonfournisseurs = $bonfournisseurs - $bo->getTotalttc();
                        $paiefournisseurs = $paiefournisseurs - $bo->getRecu();
                    }
                }
            }

        }

        $regle = 0;
        foreach ($chantier->getReleves() as $relev) {
            if ($relev->getType() === 3 and $relev->getDevis()->getEtat() === 'valide') {
                $regle += $relev->getMontant();
            }
        }

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

    #[Route(path: '/mois/{mois}', name: 'api_caisse_get_depenses', methods: ['POST'])]
    public function caisseget(string $mois, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $caisses = $repoCaisse->findByMonth($master, $mois);

        return $this->json($caisses, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);
    }

    #[Route(path: '/chantier/{id}', name: 'api_caisse', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function index(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $master]);
        $caisses = $repoCaisse->findByChan($master, $chantier);

        return $this->json($caisses, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);

    }

    #[Route(path: '/get/{id}', name: 'api_caisse_one', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function indexer(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $caisse = $repoCaisse->findOneBy(["user" => $master, "id" => $id]);

        return $this->json($caisse, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);

    }

    #[Route(path: '/charges/get', name: 'api_caisse_charge', methods: ['POST'])]
    public function chargeInternes(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $caisses = $repoCaisse->findCharges($master);
        return $this->json($caisses, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);

    }

    #[Route(path: '/history/{id}', name: 'api_caisse_history', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function historycaisse(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $caisse = $repoCaisse->findOneBy(['user' => $master, 'id' => $id]);
        if($caisse->getFournisseur() != null){
            $bon = $caisse->getBon();
            $caisses = $bon->getCaisses();
            return $this->json($caisses, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);
        }
        return $this->json(['result' => 'echec'], 404);
    }

    #[Route(path: '/valider', name: 'api_caisse_valide_caisse', methods: ['POST'])]
    public function valider(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): ?JsonResponse
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $apcaisse = $serializer->deserialize($apjson, Caisse::class, 'json');

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $caisse = $repoCaisse->findOneBy(['user' => $master, 'numcaisse' => $apcaisse->getNumcaisse()]);

        if($caisse->getEtat() === "save"){

            $caisse->setVabyuser($apuser);

            if ($caisse->getType() === 3) {
                $idlink = $caisse->getId();
                $chantier = $caisse->getChantier();
                $depense = $chantier->getDepense();

                if ($caisse->getOperation() === 'debit') {
                    $credit = 0.0;
                    $debit = $caisse->getMontant();
                    $depense = $depense + $debit;
                } else {
                    $debit = 0.0;
                    $credit = $caisse->getMontant();
                    $depense = $depense - $credit;
                }

                $operation = $caisse->getNumcaisse() . ' | charge interne chantier';
                $valider = new Valider();
                $valider->setOperation($operation);
                $valider->setDate(new \DateTime('NOW'));
                $valider->setType(1);
                $valider->setChantier($caisse->getChantier());
                $valider->setIdlink($idlink);
                $valider->setDebit($debit);
                $valider->setCaisse($caisse);
                $valider->setCredit($credit);
                $valider->setMoyen($caisse->getMoyen());
                $valider->setUser($master);
                $valider->setDobyuser($apuser);
                $caisse->setEtat('valide');
                $chantier->setDepense($depense);


                $manager->persist($chantier);
                $manager->persist($caisse);
                $manager->persist($valider);

                $manager->flush();

                date_default_timezone_set('Africa/Abidjan');
                $action = '<p>Validation du Bon de caisse N° : ' . $caisse->getNumcaisse() . '</p> ' . $caisse->getCaisseReference();
                $history = new Historique();
                $history->setUser($master);
                $history->setDobyuser($apuser);
                $history->setDate(new \DateTime('NOW'));
                $history->setAction($action);
                $manager->persist($history);
                $manager->flush();

                $this->jourChantier($chantier);

                return $this->json(['result' => 'success'], 200);
            }
            if ($caisse->getFournisseur() != null) {

                $idlink = $caisse->getId();

                if ($caisse->getOperation() === 'debit') {
                    $credit = 0.0;
                    $debit = $caisse->getMontant();
                } else {
                    $debit = 0.0;
                    $credit = $caisse->getMontant();
                }
                $operation = " ";
                if ($caisse->getFournisseur()->getType() === 3) {
                    $operation = $caisse->getNumcaisse() . ' | Paiement Prestataire:'.$caisse->getFournisseur()->getFournisseur() ;
                }
                if ($caisse->getFournisseur()->getType() === 1) {
                    $operation = $caisse->getNumcaisse() . ' | Paiement Fournisseur:'.$caisse->getFournisseur()->getFournisseur() ;
                }
                $valider = new Valider();
                $valider->setOperation($operation);
                $valider->setDate(new \DateTime('NOW'));
                $valider->setType(1);
                $valider->setChantier($caisse->getChantier());
                $valider->setIdlink($idlink);
                $valider->setDebit($debit);
                $valider->setCaisse($caisse);
                $valider->setCredit($credit);
                $valider->setMoyen($caisse->getMoyen());
                $valider->setUser($master);
                $valider->setDobyuser($apuser);
                $caisse->setEtat('valide');

                $manager->persist($caisse);
                $manager->persist($valider);


                $bon = $caisse->getBon();
                $recu = $bon->getRecu();
                $totalrecu = $recu + $caisse->getMontant();
                if ($bon->getTotalttc() < $totalrecu) {
                    return $this->json(['result' => 'error'], 404);
                }
                $bon->setRecu($totalrecu);
                $bon->setReste((float)$bon->getTotalttc() - (float)$totalrecu);
                $caisse->setEtat('valide');
                $manager->persist($caisse);
                $manager->flush();

                $this->jourChantier($caisse->getChantier());
                return $this->json(['result' => 'success'], 200);
            }
            if ($caisse->getPersonnel() != null) {
                $caisse->setEtat('valide');
                $manager->persist($caisse);
                $manager->flush();
                $this->jourChantier($caisse->getChantier());
                return $this->json(['result' => 'success'], 200);
            }

        }


        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/valid/{id}', name: 'api_caisse_valider_caisser', methods: ['POST'])]
    public function validers(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): ?JsonResponse
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $caisse = $repoCaisse->findOneBy(['user' => $master, 'id' => $id]);

        if($caisse->getEtat() === "save"){

            $caisse->setVabyuser($apuser);

            if ($caisse->getType() === 3) {
                $idlink = $caisse->getId();
                $chantier = $caisse->getChantier();
                $depense = $chantier->getDepense();

                if ($caisse->getOperation() === 'debit') {
                    $credit = 0.0;
                    $debit = $caisse->getMontant();
                    $depense = $depense + $debit;
                } else {
                    $debit = 0.0;
                    $credit = $caisse->getMontant();
                    $depense = $depense - $credit;
                }

                $operation = $caisse->getNumcaisse() . ' | charge interne chantier';
                $valider = new Valider();
                $valider->setOperation($operation);
                $valider->setDate(new \DateTime('NOW'));
                $valider->setType(1);
                $valider->setChantier($caisse->getChantier());
                $valider->setIdlink($idlink);
                $valider->setDebit($debit);
                $valider->setCaisse($caisse);
                $valider->setCredit($credit);
                $valider->setMoyen($caisse->getMoyen());
                $valider->setUser($master);
                $valider->setDobyuser($apuser);
                $caisse->setEtat('valide');
                $chantier->setDepense($depense);


                $manager->persist($chantier);
                $manager->persist($caisse);
                $manager->persist($valider);

                $manager->flush();

                date_default_timezone_set('Africa/Abidjan');
                $action = '<p>Validation du Bon de caisse N° : ' . $caisse->getNumcaisse() . '</p> ' . $caisse->getCaisseReference();
                $history = new Historique();
                $history->setUser($master);
                $history->setDobyuser($apuser);
                $history->setDate(new \DateTime('NOW'));
                $history->setAction($action);
                $manager->persist($history);
                $manager->flush();

                $this->jourChantier($chantier);

                return $this->json(['result' => 'success'], 200);
            }
            if ($caisse->getFournisseur() != null) {

                $idlink = $caisse->getId();

                if ($caisse->getOperation() === 'debit') {
                    $credit = 0.0;
                    $debit = $caisse->getMontant();
                } else {
                    $debit = 0.0;
                    $credit = $caisse->getMontant();
                }
                $operation = " ";
                if ($caisse->getFournisseur()->getType() === 3) {
                    $operation = $caisse->getNumcaisse() . ' | Paiement Prestataire:'.$caisse->getFournisseur()->getFournisseur() ;
                }
                if ($caisse->getFournisseur()->getType() === 1) {
                    $operation = $caisse->getNumcaisse() . ' | Paiement Fournisseur:'.$caisse->getFournisseur()->getFournisseur() ;
                }
                $valider = new Valider();
                $valider->setOperation($operation);
                $valider->setDate(new \DateTime('NOW'));
                $valider->setType(1);
                $valider->setChantier($caisse->getChantier());
                $valider->setIdlink($idlink);
                $valider->setDebit($debit);
                $valider->setCaisse($caisse);
                $valider->setCredit($credit);
                $valider->setMoyen($caisse->getMoyen());
                $valider->setUser($master);
                $valider->setDobyuser($apuser);
                $caisse->setEtat('valide');

                $manager->persist($caisse);
                $manager->persist($valider);


                $bon = $caisse->getBon();
                $recu = $bon->getRecu();
                $totalrecu = $recu + $caisse->getMontant();
                if ($bon->getTotalttc() < $totalrecu) {
                    return $this->json(['result' => 'error'], 404);
                }
                $bon->setRecu($totalrecu);
                $bon->setReste((float)$bon->getTotalttc() - (float)$totalrecu);
                $caisse->setEtat('valide');
                $manager->persist($caisse);
                $manager->flush();

                $this->jourChantier($caisse->getChantier());
                return $this->json(['result' => 'success'], 200);
            }
            if ($caisse->getPersonnel() != null) {
                $caisse->setEtat('valide');
                $manager->persist($caisse);
                $manager->flush();
                $this->jourChantier($caisse->getChantier());
                return $this->json(['result' => 'success'], 200);
            }

        }


        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/devalider', name: 'api_caisse_devalide_caisse', methods: ['POST'])]
    public function devalider(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): ?JsonResponse
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);
        $repoValide = $doctrine->getRepository(Valider::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $apcaisse = $serializer->deserialize($apjson, Caisse::class, 'json');

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $caisse = $repoCaisse->findOneBy(['user' => $master, 'numcaisse' => $apcaisse->getNumcaisse()]);
        $valide = $repoValide->findOneBy(['idlink' => $caisse->getId(), 'type' => 1]);
        $caisse->setVabyuser($apuser);

        if($caisse->getEtat() === "save"){

            if ($caisse->getType() === 3) {

                $chantier = $caisse->getChantier();
                $depense = $chantier->getDepense();
                if ($caisse->getOperation() === 'debit') {
                    $debit = $caisse->getMontant();
                    $depense = $depense - $debit;
                } else {
                    $credit = $caisse->getMontant();
                    $depense = $depense + $credit;
                }
                $chantier->setDepense($depense);
                $manager->persist($chantier);


                $caisse->setEtat('save');
                $manager->persist($caisse);
                if ($valide) {
                    $manager->remove($valide);
                }

                $manager->flush();

                date_default_timezone_set('Africa/Abidjan');
                $action = '<p>Dévalidation du Bon de caisse N° : ' . $caisse->getNumcaisse() . '</p>' . $caisse->getCaisseReference();
                $history = new Historique();
                $history->setUser($master);
                $history->setDobyuser($apuser);
                $history->setDate(new \DateTime('NOW'));
                $history->setAction($action);
                $manager->persist($history);
                $manager->flush();
                $this->jourChantier($caisse->getChantier());
                return $this->json(['result' => 'success'], 200);
            }
            if ($caisse->getFournisseur() != null) {
                $caisse->setEtat('save');
                $manager->persist($caisse);
                if ($valide) {
                    $manager->remove($valide);
                }
                $manager->flush();

                $bon = $caisse->getBon();
                $ttc = $bon->getRecu();
                $recu = $ttc - $caisse->getMontant();
                $bon->setRecu($recu);
                $bon->setReste($bon->getTotalttc() - $recu);
                $caisse->setEtat('save');
                $manager->persist($caisse);
                $manager->flush();
                $this->jourChantier($caisse->getChantier());
                return $this->json(['result' => 'success'], 200);
            }
            if ($caisse->getPersonnel() != null) {
                $caisse->setEtat('save');
                $manager->persist($caisse);
                $manager->flush();
                return $this->json(['result' => 'success'], 200);
                $this->jourChantier($caisse->getChantier());
            }

        }

        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/devalid/{id}', name: 'api_caisse_devalider_caisse', methods: ['POST'])]
    public function devaliders(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): ?JsonResponse
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);
        $repoValide = $doctrine->getRepository(Valider::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $caisse = $repoCaisse->findOneBy(['user' => $master, 'id' => $id]);

        if($caisse->getEtat() === "valide"){

            $valide = $repoValide->findOneBy(['idlink' => $caisse->getId(), 'type' => 1]);
            $caisse->setVabyuser($apuser);

            if ($caisse->getType() === 3) {

                $chantier = $caisse->getChantier();
                $depense = $chantier->getDepense();
                if ($caisse->getOperation() === 'debit') {
                    $debit = $caisse->getMontant();
                    $depense = $depense - $debit;
                } else {
                    $credit = $caisse->getMontant();
                    $depense = $depense + $credit;
                }
                $chantier->setDepense($depense);
                $manager->persist($chantier);


                $caisse->setEtat('save');
                $manager->persist($caisse);
                if ($valide) {
                    $manager->remove($valide);
                }

                $manager->flush();

                date_default_timezone_set('Africa/Abidjan');
                $action = '<p>Dévalidation du Bon de caisse N° : ' . $caisse->getNumcaisse() . '</p>' . $caisse->getCaisseReference();
                $history = new Historique();
                $history->setUser($master);
                $history->setDobyuser($apuser);
                $history->setDate(new \DateTime('NOW'));
                $history->setAction($action);
                $manager->persist($history);
                $manager->flush();
                $this->jourChantier($caisse->getChantier());
                return $this->json(['result' => 'success'], 200);
            }
            if ($caisse->getFournisseur() != null) {
                $caisse->setEtat('save');
                $manager->persist($caisse);
                if ($valide) {
                    $manager->remove($valide);
                }
                $manager->flush();

                $bon = $caisse->getBon();
                $ttc = $bon->getRecu();
                $recu = $ttc - $caisse->getMontant();
                $bon->setRecu($recu);
                $bon->setReste($bon->getTotalttc() - $recu);
                $caisse->setEtat('save');
                $manager->persist($caisse);
                $manager->flush();
                $this->jourChantier($caisse->getChantier());
                return $this->json(['result' => 'success'], 200);
            }
            if ($caisse->getPersonnel() != null) {
                $caisse->setEtat('save');
                $manager->persist($caisse);
                $manager->flush();
                return $this->json(['result' => 'success'], 200);
                $this->jourChantier($caisse->getChantier());
            }

        }

        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/delete', name: 'api_caisse_delete_caisse', methods: ['POST'])]
    public function delete(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): ?JsonResponse
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);
        $repoValider = $doctrine->getRepository(Valider::class);
        $repoCorbeille = $doctrine->getRepository(Corbeille::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apcaisse = $serializer->deserialize($apjson, Caisse::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $caisse = $repoCaisse->findOneBy(['user' => $master, 'numcaisse' => $apcaisse->getNumcaisse()]);

        if (!$caisse) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $valider = $repoValider->findOneBy(['idlink' => $caisse->getId(), 'type' => 1]);
        if ($valider) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $cor = $repoCorbeille->findOneBy(['designation' => $caisse->getId(), 'master' => $master, 'type' => 5]);
        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($caisse->getId());
            $corbeille->setMaster($master);
            $corbeille->setEtat('faible');
            $corbeille->setType('5');
            $manager->persist($corbeille);
            $manager->flush();
            $core = $repoCorbeille->findOneBy(['designation' => $caisse->getId(), 'master' => $master, 'type' => 5]);
            $caisse->setCorbeille($core);
            $manager->persist($caisse);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = 'Suppression du Bon de caisse N° : ' . $caisse->getNumcaisse() . ' ' . $caisse->getCaisseReference();
            $history = new Historique();
            $history->setUser($master);
            $history->setDobyuser($apuser);
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json(['result' => 'Bon de caisse suprimé'], 200);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/dele/{id}', name: 'api_caisse_del_caisse', methods: ['POST'])]
    public function dele(int $id,Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): ?JsonResponse
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);
        $repoValider = $doctrine->getRepository(Valider::class);
        $repoCorbeille = $doctrine->getRepository(Corbeille::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $caisse = $repoCaisse->findOneBy(['user' => $master, 'id' => $id]);

        if (!$caisse) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $valider = $repoValider->findOneBy(['idlink' => $caisse->getId(), 'type' => 1]);
        if ($valider) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $cor = $repoCorbeille->findOneBy(['designation' => $caisse->getId(), 'master' => $master, 'type' => 5]);
        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($caisse->getId());
            $corbeille->setMaster($master);
            $corbeille->setEtat('faible');
            $corbeille->setType('5');
            $manager->persist($corbeille);
            $manager->flush();
            $core = $repoCorbeille->findOneBy(['designation' => $caisse->getId(), 'master' => $master, 'type' => 5]);
            $caisse->setCorbeille($core);
            $manager->persist($caisse);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = 'Suppression du Bon de caisse N° : ' . $caisse->getNumcaisse() . ' ' . $caisse->getCaisseReference();
            $history = new Historique();
            $history->setUser($master);
            $history->setDobyuser($apuser);
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json(['result' => 'Bon de caisse suprimé'], 200);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/pdf/get', name: 'api_caisse_pdf_caisse', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function pdff(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): ?JsonResponse
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);
        $repoDocuments = $doctrine->getRepository(Documents::class);
        $repoForme = $doctrine->getRepository(Forme::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $apcaisse = $serializer->deserialize($apjson, Caisse::class, 'json');


        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $caisse = $repoCaisse->findOneBy(['user' => $master, 'numcaisse' => $apcaisse->getNumcaisse()]);
        $caisses = $repoCaisse->findInerve($caisse->getIntervenant());
        $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'caisse', 'numero' => $caisse->getId(), 'etat' => 'no']);

        if ($docu) {
            $this->delete_directory('pdf/' . $docu->getFolde());
            $manager->remove($docu);
            $manager->flush();
        }

        // RECUPERATION DES MISES EN FORME
        $forme = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);
        $subject = 'BON DE CAISSE ' . $caisse->getNumcaisse() . ' ' . $caisse->getClient()->getNomClient() . ' ' . $caisse->getChantier()->getNomChantier();

        $document = new Documents();
        $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
        if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }
        $document->setUser($apuser);
        $document->setNumero($caisse->getId());
        $document->setDonner($subject);
        $document->setType('caisse');
        $document->setEtat('no');
        $document->setFolde($dire);
        $manager->persist($document);
        $manager->flush();

        $pdfOptions = new Options();
        $pdfOptions->setIsRemoteEnabled(true);

        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('content/attachedoc.html.twig', [
            'formes' => $forme,
            'chantier' => $caisse->getChantier(),
            'title' => 'Créer un bon de caisse | carlinbleu',
            'caisse' => $caisse,
            'caisses' => $caisses,
            'type' => 'caisse'
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

    #[Route(path: '/paie/get', name: 'api_caisse_paie_caisse', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function paie(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): ?JsonResponse
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoPaie = $doctrine->getRepository(Paie::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $paie = $repoPaie->findBy(['user' => $master]);

        return $this->json($paie, 200, ['Content-Type' => 'application/json'], ['groups' => 'paie']);

    }

    #[Route(path: '/add/perso/{id}/{apmonnaie}', name: 'api_caisse_add_perso', methods: ['POST'])]
    public function adde(int $id, string $apmonnaie, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoPerso = $doctrine->getRepository(Personnel::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);
        $repoMonnaie = $doctrine->getRepository(Monnaie::class);

        $manager = $doctrine->getManager();
        date_default_timezone_set('Africa/Abidjan');

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apcaisse = $serializer->deserialize($apjson, Caisse::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $monnaie = $repoMonnaie->findOneBy(['libelle' => $apmonnaie]);
        $perso = $repoPerso->findOneBy(['id' => $id, 'user' => $master]);

        $chantier = $repoChantier->findOneBy(['type' => 'personnel', 'user' => $master]);

        $caisse = new Caisse();
        $caisse->setCaisseReference($chantier->getNomChantier());
        $caisse->setChantier($chantier);
        $caisse->setUser($master);
        $caisse->setDobyuser($this->getUser());
        $caisse->setClient($chantier->getClient());
        $caisse->setType(5);
        $caisse->setEtat('save');
        $caisse->setPersonnel($perso);
        $caisse->setMonnaie($monnaie);
        $caisse->setMoyen($apcaisse->getMoyen());
        $caisse->setDate($apcaisse->getDate());
        $caisse->setOperation($apcaisse->getOperation());
        $caisse->setGenre($apcaisse->getGenre());
        $caisse->setCaisseReference($apcaisse->getCaisseReference());

        $repoCompte = $doctrine->getRepository(Compte::class);
        $compte = $repoCompte->findOneBy(['user' => $master]);
        $der = $repoCaisse->findBy(['user' => $master], ['id' => 'DESC'], 1);
        if ($der) {
            $rang = $der[0]->getRang() + 1;
            $caisse->setRang($rang);
            $caisse->setNumcaisse($compte->getCompteCaisse() . $rang);
        } else {
            $caisse->setRang(1);
            $caisse->setNumcaisse(($compte->getCompteCaisse() . '1'));
        }

        $manager->persist($caisse);
        $manager->flush();

        date_default_timezone_set('Africa/Abidjan');
        $action = 'Charge personnelle - Bon de caisse N° : ' . $caisse->getNumcaisse() . ' ' . $caisse->getCaisseReference();
        $history = new Historique();
        $history->setUser($master);
        $history->setDobyuser($apuser);
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();

        return $this->json($caisse, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);
    }

    #[Route(path: '/add/charge/{charge}', name: 'api_caisse_add_charge', methods: ['POST'])]
    public function addBonCharge(int $charge, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoPersonnel = $doctrine->getRepository(Personnel::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);
        $repoMonnaie = $doctrine->getRepository(Monnaie::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);

        $manager = $doctrine->getManager();

        date_default_timezone_set('Africa/Abidjan');

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $caisse = $serializer->deserialize($apjson, Caisse::class, 'json');
        $apmonnaie = $serializer->deserialize($apjson, Monnaie::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $monnaie = $repoMonnaie->findOneBy(['libelle' => $apmonnaie->getLibelle()]);
        $perso = $repoPersonnel->findOneBy(['id' => $charge, 'user' => $master]);
        $chantier = $repoChantier->findOneBy(['type' => 'frais', 'user' => $master]);

        $caisse->setChantier($chantier);
        $caisse->setUser($master);
        $caisse->setPersonnel($perso);
        $caisse->setDobyuser($apuser);
        $caisse->setMonnaie($monnaie);
        $caisse->setGenre($caisse->getGenre());
        $caisse->setClient($chantier->getClient());
        $caisse->setEtat('save');

        $repoCompte = $doctrine->getRepository(Compte::class);
        $compte = $repoCompte->findOneBy(['user' => $master]);
        $der = $repoCaisse->findBy(['user' => $master], ['id' => 'DESC'], 1);
        if ($der) {
            $rang = $der[0]->getRang() + 1;
            $caisse->setRang($rang);
            $caisse->setNumcaisse($compte->getCompteCaisse . $rang);
        } else {
            $caisse->setRang(1);
            $caisse->setNumcaisse(($compte->getCompteCaisse() . '1'));
        }

        $manager->persist($caisse);
        $manager->flush();

        date_default_timezone_set('Africa/Abidjan');
        $action = 'Création du Bon de caisse N° : ' . $caisse->getNumcaisse() . ' ' . $caisse->getCaisseReference();
        $history = new Historique();
        $history->setUser($master);
        $history->setDobyuser($apuser);
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();

        return $this->json($caisse, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);

    }

    #[Route(path: '/montant/{id}/{montant}', name: 'api_caisse_montant_add', methods: ['POST'])]
    public function addmontant(int $id, string $montant, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);
        $manager = $doctrine->getManager();


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $caisse = $repoCaisse->findOneBy(['user' => $apuser, 'id' => $id]);
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
            $caisse = $repoCaisse->findOneBy(['user' => $master, 'id' => $id]);
        }

        $caisse->setMontant($montant);
        $manager->persist($caisse);
        $manager->flush();

        return $this->json($caisse, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);

    }

    #[Route(path: '/travaux', name: 'api_caisse_travaux', methods: ['POST'])]
    public function last(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $date = date("Y-m-d");
        $caisses = $repoCaisse->findByeDate($master, $date);
        return $this->json($caisses, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);
    }

    #[Route(path: '/fournisseur/add/{idfour}/{idbon}/{desi}/{montant}', name: 'add_Caisse_Fourn_api', methods: ['POST'])]
    public function addCaisseFournApi(string $desi, int $montant, int $idfour, int $idbon, Request $request, ManagerRegistry $doctrine, SerializerInterface $serializer): JsonResponse
    {
        $manager = $doctrine->getManager();

        $repoCaisse = $doctrine->getRepository(Caisse::class);
        $repoFournisseur = $doctrine->getRepository(Fournisseur::class);
        $repoBon = $doctrine->getRepository(Bon::class);
        $repoUser = $doctrine->getRepository(User::class);
        $repoMonnaie = $doctrine->getRepository(Monnaie::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $caisse = $serializer->deserialize($apjson, Caisse::class, 'json');
        $apmonnaie = $serializer->deserialize($apjson, Monnaie::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $monnaie = $repoMonnaie->findOneBy(['libelle' => $apmonnaie->getLibelle()]);
        $fournisseur = $repoFournisseur->findOneBy(['id' => $idfour, 'user' => $master]);
        $bon = $repoBon->findOneBy(['id' => $idbon, 'user' => $master]);

        $caisse->setUser($master);
        $caisse->setDobyuser($this->getUser());
        $caisse->setEtat('save');
        $caisse->setMonnaie($monnaie);

        $caisse->setChantier($bon->getChantier());
        $caisse->setBon($bon);
        $caisse->setType(1);
        $caisse->setClient($bon->getClient());
        $caisse->setFournisseur($fournisseur);

        $der = $repoCaisse->findBy(['user' => $master], ['id' => 'DESC'], 1);

        $repoCompte = $doctrine->getRepository(Compte::class);
        $compte = $repoCompte->findOneBy(['user' => $master]);
        if ($der) {
            $rang = $der[0]->getRang() + 1;
            $caisse->setRang($rang);
            $caisse->setNumcaisse($compte->getCompteCaisse() . $rang);
        } else {
            $caisse->setRang(1);
            $caisse->setNumcaisse($compte->getCompteCaisse() . '1');
        }

        $manager->persist($caisse);
        $manager->flush();

        $repoUser = $doctrine->getRepository(User::class);
        $comptes = $repoUser->findBy(['compte' => $apuser]);
        foreach ($comptes as $compte) {
            $alerte = new Alerte();
            $alerte->setAlerte("Création du bon de caisse N°" . $caisse->getNumcaisse() . " | " . $caisse->getClient()->getNomclient() . " | " . $caisse->getChantier()->getNomchantier());
            $alerte->setTitre("Nouveau bon de caisse N° " . $caisse->getNumcaisse());
            $alerte->setUser($master);
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setStatut("false");
            $alerte->setOwner($compte);
            $manager->persist($alerte);
            $manager->flush();
        }


        $ligne = new Ligne();
        $ligne->setUser($master);
        $ligne->setDesignation($desi);
        $ligne->setCaisse($caisse);
        $ligne->setChantier($caisse->getChantier());
        $ligne->setUnite("rien");
        $ligne->setQuantite(0);
        $ligne->setPu((float)$montant);
        $ligne->setRemise("0");
        $ligne->setCaisse($caisse);
        $ligne->setType(3);
        $ligne->setUnite("rien");
        $manager->persist($ligne);
        $manager->flush();

        $journal = new Journal();
        $journal->setLigne($ligne);
        $journal->setDevis($caisse->getBon()->getDevis());
        $journal->setCaisse($caisse);
        $manager->persist($journal);
        $manager->flush();

        date_default_timezone_set('Africa/Abidjan');
        $action = '<p>Création du bon de caisse N° : ' . $caisse->getNumcaisse() . '</p> ' . $caisse->getCaisseReference();
        $history = new Historique();
        $history->setUser($master);
        $history->setDobyuser($apuser);
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();

        return $this->json($caisse, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);

    }

    #[Route(path: '/caiscais/get', name: 'api_get_cais_all', methods: ['POST'])]
    public function all(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $caisses = $repoCaisse->findCaisCais($master);
        return $this->json($caisses, 200, ['Content-Type' => 'application/json'], ['groups' => 'pycaisse']);
    }

}
