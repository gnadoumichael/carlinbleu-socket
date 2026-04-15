<?php

namespace App\Controller;

use App\Entity\Acompte;
use App\Entity\Chantier;
use App\Entity\Compte;
use App\Entity\Decompte;
use App\Entity\Devis;
use App\Entity\Documents;
use App\Entity\Facture;
use App\Entity\Forme;
use App\Entity\Groupe;
use App\Entity\Ligne;
use App\Entity\User;
use App\Entity\Valider;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use PhpOffice\PhpSpreadsheet\Reader\Html;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: '/api/facture')]
class ApiFactureController extends AbstractController
{


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
                        $paieprestataires = $bo->getRecu() - $paieprestataires;
                    }
                    if ($bo->getCorbeille() === null && $bo->getType() === "oui") {
                        $bonfournisseurs = $bonfournisseurs + $bo->getTotalttc();
                        $paiefournisseurs = $paiefournisseurs - $bo->getRecu();
                    }
                    if ($bo->getCorbeille() === null && $bo->getType() === "non") {
                        $bonfournisseurs = $bonfournisseurs - $bo->getTotalttc();
                        $paiefournisseurs = $bo->getRecu() - $paiefournisseurs;
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

    #[Route(path: '/miseajour', name: 'miseajourchantier', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function ajourChantier(Chantier $chantier, User $master, User $apuser, ManagerRegistry $doctrine): JsonResponse
    {
        $manager = $doctrine->getManager();
        $repoValider = $doctrine->getRepository(Valider::class);

        $vdttc = 0;
        $depense = 0;
        $cred = 0;
        $regle = 0;

        // verifie
        foreach ($chantier->getBons() as $bon) {
            if ($bon->getEtat() === 'valide') {
                $valider = $repoValider->findOneBy(['idlink' => $bon->getId(), 'type' => 2]);
                if ($valider) {
                    if ($valider->getChantier() !== $bon->getChantier()) {
                        $valider->setChantier($bon->getChantier());
                        $manager->persist($valider);
                        $manager->flush();
                    }
                } else {
                    if ($bon->getType() === 'oui') {
                        $operation = 'BON N°: ' . $bon->getNumbon() . ' | ' . $bon->getChantier()->getChantier();
                        $debit = $bon->getTotalttc();
                        $credit = 0;
                        $depense = $depense + $debit;
                    }
                    if ($bon->getType() === 'non') {
                        $operation = 'BON DE RETOUR N°:' . $bon->getNumbon() . ' | ' . $bon->getChantier()->getChantier();
                        $credit = $bon->getTotalttc();
                        $debit = 0;
                        $depense = $depense - $credit;
                    }
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
                    $bon->setEtat('valide');
                    $manager->persist($bon);
                    $manager->persist($valider);
                    $manager->flush();
                }
            }
        }

        // PROJET REGLEMENT
        foreach ($chantier->getReleves() as $relev) {
            if ($relev->getType() === 3 and $relev->getDevis()->getEtat() === 'valide') {
                $regle += $relev->getMontant();
            }
        }

        // PROJET COUT
        foreach ($chantier->getDevis() as $devis) {
            if ($devis->getEtat() === 'valide') {
                $vdttc += $devis->getTotalttc();
            }
        }

        // PROJET DEPENSE
        foreach ($chantier->getValiders() as $vali) {
            if ($vali->getType() !== 3) {
                $depense += $vali->getDebit();
                $cred += $vali->getCredit();
            }
        }

        foreach ($chantier->getIntervenants() as $interu) {
            $somme = 0;
            foreach ($chantier->getCaisses() as $cassa) {
                if ($interu === $cassa->getIntervenant() && $cassa->getEtat() === 'valide') {
                    $somme += $cassa->getMontant();
                }
            }
            $interu->setRecu($somme);
            $interu->setReste($interu->getPayer() - $interu->getRecu());
            $manager->persist($interu);
            $manager->flush();
        }

        $chantier->setDepense($depense - $cred);
        $chantier->setCout($vdttc);
        $chantier->setReglement($regle);
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

    #[Route(path: '/chantier/{id}', name: 'api_facture', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function index(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);
        $repoFacture = $doctrine->getRepository(Facture::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $master]);
        $factures = $repoFacture->findByChan($master, $chantier);

        return $this->json($factures, 200, ['Content-Type' => 'application/json'], ['groups' => 'pyfacture']);
    }

    #[Route(path: '/get/{id}', name: 'api_get_facture_api', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function getOne(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {

        $repoUser = $doctrine->getRepository(User::class);
        $repoFacture = $doctrine->getRepository(Facture::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $facture = $repoFacture->findOneBy(['id' => $id, 'user' => $master]);


        return $this->json($facture, 200, ['Content-Type' => 'application/json'], ['groups' => 'facture']);
    }

    #[Route(path: '/update/{id}', name: 'api_update_facture_api', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function updateFacture(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {

        $repoUser = $doctrine->getRepository(User::class);
        $repoFacture = $doctrine->getRepository(Facture::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $apfacture = $serializer->deserialize($apjson, Facture::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $facture = $repoFacture->findOneBy(['id' => $id, 'user' => $master]);
        $manager = $doctrine->getManager();

        $facture->setInformation($apfacture->getInformation());
        $facture->setFactReference($apfacture->getFactReference());
        $facture->setDate($apfacture->getDate());
        $manager->persist($facture);
        $manager->flush();

        return $this->json($facture, 200, ['Content-Type' => 'application/json'], ['groups' => 'facture']);
    }

    #[Route(path: '/add/{iddec}/{iddev}/{typ}', name: 'api_add_facture', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function addfac(string $typ, int $iddec, int $iddev,  Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDecompte = $doctrine->getRepository(Decompte::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoCompte = $doctrine->getRepository(Compte::class);
        $repoFacture = $doctrine->getRepository(Facture::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $apfacture = $serializer->deserialize($apjson, Facture::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $facture = new Facture();
        $facture->setDate($apfacture->getDate());
        $facture->setFactReference($apfacture->getFactReference());
        $facture->setInformation($apfacture->getInformation());
        $facture->setUser($master);
        $facture->setDobyuser($apuser);
        $manager = $doctrine->getManager();
        $compte = $repoCompte->findOneBy(['user' => $master]);

        $der = $repoFacture->findBy(['user' => $master], ['id' => 'DESC'], 1);
        if ($der) {
            $rang = $der[0]->getRang() + 1;
            $facture->setRang($rang);
            $facture->setNumfacture($compte->getCompteFacture() . $rang);
        } else {
            $facture->setRang(1);
            $facture->setNumfacture(($compte->getCompteFacture() . '1'));
        }

        if($typ === "decompte"){
            $decompte = $repoDecompte->findOneBy(['id' => $iddec, 'user' => $master]);
            $devis = $decompte->getDevis();
            $facture->setDecompte($decompte);
            $facture->setTotalht($decompte->getApayer());
            if ($devis->getPtva() === 'oui' || $devis->getPtva() === 'susp') {
                $ttc = $decompte->getApayer() + (($decompte->getApayer() * $devis->getTva()) / 100);
                $facture->setTotalttc($ttc);
            } else {
                $facture->setTotalttc($decompte->getApayer());
            }
        }
        if($typ === "acompte"){
            $devis = $repoDevis->findOneBy(['id' => $iddev, 'user' => $master]);
            $acompte = new  Acompte();
            $acompte->setUser($master);
            $acompte->setDevis($devis);
            $manager->persist($acompte);
            $manager->flush();
            $facture->setAcompte($acompte);
            $facture->setDevis(null);
        }
        if($typ === "devis"){

            $devis = $repoDevis->findOneBy(['id' => $iddev, 'user' => $master]);
            $facture->setDevis($devis);

            $ddacomptes = $devis->getAcomptes();
            $dddecomptes = $devis->getDecomptes();

            $totalacomptes = 0;
            $totaldecomptes = 0;
            $totalretenue = 0;

            foreach ($ddacomptes as $aacom) {
                $fac = $repoFacture->findOneBy(["user" => $master, "acompte" => $aacom]);
                $totalacomptes = floatval($fac->getTotalht()) + $totalacomptes;
            }
            foreach ($dddecomptes as $decom) {
                if ($decom->getEtat() == "valide") {
                    $totaldecomptes += $decom->getApayer();
                    $totalretenue = $totalretenue + ($decom->getValeur() * floatval($devis->getGarantie()) / 100) + ($decom->getValeur() * floatval($devis->getFinition()) / 100) +
                        ($decom->getValeur() * floatval($devis->getProrata()) / 100) + ($decom->getValeur() * floatval($devis->getTrc()) / 100);
                }
            }

            $totalhtsolde = $devis->getTotalht() - $totalacomptes - $totaldecomptes + $totalretenue;
            $totaltva = ($totalhtsolde * $devis->getTva()) / 100;

            if ($devis->getPtva() == "oui" || $devis->getPtva() == "susp") {
                $totalttcsolde = $totalhtsolde + $totaltva;
            } else {
                $totalttcsolde = $totalhtsolde;
            }

            $facture->setTotaldecomptes($totaldecomptes);
            $facture->setTotalacomptes($totalacomptes);
            $facture->setTotalretenues($totalretenue);
            $facture->setTotalht($totalhtsolde);
            $facture->setVtva($totaltva);
            $facture->setTva($devis->getTva());
            $facture->setTotalttc($totalttcsolde);

            $manager->persist($facture);
            $manager->flush();
        }

        $facture->setType($typ);
        $facture->setChantier($devis->getChantier());
        $facture->setClient($devis->getClient());
        $facture->setEtat('save');
        $manager->persist($facture);
        $manager->flush();

        return $this->json($facture, 200, ['Content-Type' => 'application/json'], ['groups' => 'pyfacture']);

    }

    #[Route(path: '/pdf/get', name: 'api_facture_pdf_facture', methods: ['POST'])]
    public function pdff(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): JsonResponse
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);
        $repoForme = $doctrine->getRepository(Forme::class);
        $repoDocuments = $doctrine->getRepository(Documents::class);

        $repoFacture = $doctrine->getRepository(Facture::class);
        $manager = $doctrine->getManager();
        $repoGroupe = $doctrine->getRepository(Groupe::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $apfacture = $serializer->deserialize($apjson, Facture::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $facture = $repoFacture->findOneBy(['user' => $master, 'numfacture' => $apfacture->getNumfacture()]);


        if ($facture->getType() === 'decompte') {
            $decompte = $facture->getDecompte();
            $formes = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);

            $subject = 'FACTURE ' . $facture->getNumfacture() . ' ' . $facture->getClient()->getNomClient() . ' ' . $facture->getChantier()->getNomChantier();
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'facture', 'numero' => $facture->getId(), 'etat' => 'no']);
            $document = new Documents();
            if ($docu) {
                $this->delete_directory('pdf/' . $docu->getFolde());
                $manager->remove($docu);
                $manager->flush();
            }

            $devis = $decompte->getDevis();
            $listegroupe = $repoGroupe->findBy(
                ['facture' => $facture],
                ['reference' => 'ASC']);


            $lignes = $repoLigne->findBy(['facture' => $facture]);
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'facture', 'numero' => $facture->getId(), 'etat' => 'no']);
            if (!$docu) {
                $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
                if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
                    throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
                }
                $document->setUser($apuser);
                $document->setNumero($facture->getId());
                $document->setDonner($subject);
                $document->setType('facture');
                $document->setEtat('no');
                $document->setFolde($dire);
                $manager->persist($document);
                $manager->flush();
            }

            $pdfOptions = new Options();
            $pdfOptions->setIsRemoteEnabled(true);
            // Instantiate Dompdf with our options
            $dompdf = new Dompdf($pdfOptions);
            // Retrieve the HTML generated in our twig file
            $html = $this->renderView('content/attachedoc.html.twig', [
                'chantier' => $devis->getChantier(),
                'devis' => $devis,
                'decompte' => $decompte,
                'facture' => $facture,
                'formes' => $formes,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'type' => 'facturedecompte',
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
        if ($facture->getType() === 'acompte') {
            $acompte = $facture->getAcompte();
            $formes = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);

            $subject = 'FACTURE ' . $facture->getNumfacture() . ' ' . $facture->getClient()->getNomClient() . ' ' . $facture->getChantier()->getNomChantier();
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'facture', 'numero' => $facture->getId(), 'etat' => 'no']);
            $document = new Documents();
            if ($docu) {
                $this->delete_directory('pdf/' . $docu->getFolde());
                $manager->remove($docu);
                $manager->flush();
            }

            $devis = $acompte->getDevis();
            $listegroupe = $devis->getGroupe();


            $lignes = $devis->getLignes();
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'facture', 'numero' => $facture->getId(), 'etat' => 'no']);
            if (!$docu) {
                $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
                if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
                    throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
                }
                $document->setUser($apuser);
                $document->setNumero($facture->getId());
                $document->setDonner($subject);
                $document->setType('facture');
                $document->setEtat('no');
                $document->setFolde($dire);
                $manager->persist($document);
                $manager->flush();
            }

            $pdfOptions = new Options();
            $pdfOptions->setIsRemoteEnabled(true);
            // Instantiate Dompdf with our options
            $dompdf = new Dompdf($pdfOptions);
            // Retrieve the HTML generated in our twig file
            $html = $this->renderView('content/attachedoc.html.twig', [
                'chantier' => $devis->getChantier(),
                'devis' => $devis,
                'facture' => $facture,
                'formes' => $formes,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'type' => 'factureacompte',
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
        if ($facture->getType() === 'devis') {

            $formes = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);

            $subject = 'FACTURE ' . $facture->getNumfacture() . ' ' . $facture->getClient()->getNomClient() . ' ' . $facture->getChantier()->getNomChantier();
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'facture', 'numero' => $facture->getId(), 'etat' => 'no']);
            $document = new Documents();
            if ($docu) {
                $this->delete_directory('pdf/' . $docu->getFolde());
                $manager->remove($docu);
                $manager->flush();
            }

            $devis = $facture->getDevis();
            $listegroupe = $devis->getGroupe();

            $ddacomptes = $devis->getAcomptes();
            $dddecomptes = $devis->getDecomptes();
            $totalacomptes = 0;
            $totaldecomptes = 0;
            $totalretenue = 0;

            foreach ($ddacomptes as $aacom) {
                $totalacomptes = $totalacomptes + (($devis->getTotalht() * $aacom->getPourcentage()) / 100);
            }

            foreach ($dddecomptes as $decom) {
                if ($decom->getEtat() == "valide") {
                    $totaldecomptes = $totaldecomptes + $decom->getApayer();
                    $totalretenue = $totalretenue + ($decom->getValeur() * floatval($devis->getTrc()) / 100) + ($decom->getValeur() * floatval($devis->getGarantie()) / 100) + ($decom->getValeur() * floatval($devis->getFinition()) / 100) + ($decom->getValeur() * floatval($devis->getProrata()) / 100);
                }
            }

            $totalhtsolde = $devis->getTotalht() - $totalacomptes - $totaldecomptes + $totalretenue;
            if ($devis->getPtva() == "oui" || $devis->getPtva() === 'susp') {
                $totaltva = ($totalhtsolde * $devis->getTva()) / 100;
                $totalttcsolde = $totalhtsolde + $totaltva;
            } else {
                $totaltva = ($totalhtsolde * $devis->getTva()) / 100;
                $totalttcsolde = $totalhtsolde;
            }

            $addi = $devis->getProrata() + $devis->getFinition() + $devis->getGarantie() + $devis->getTrc();


            $lignes = $devis->getLignes();
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'facture', 'numero' => $facture->getId(), 'etat' => 'no']);
            if (!$docu) {
                $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
                if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
                    throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
                }
                $document->setUser($apuser);
                $document->setNumero($facture->getId());
                $document->setDonner($subject);
                $document->setType('facture');
                $document->setEtat('no');
                $document->setFolde($dire);
                $manager->persist($document);
                $manager->flush();
            }

            $pdfOptions = new Options();
            $pdfOptions->setIsRemoteEnabled(true);
            // Instantiate Dompdf with our options
            $dompdf = new Dompdf($pdfOptions);
            // Retrieve the HTML generated in our twig file
            $html = $this->renderView('content/attachedoc.html.twig', [
                'chantier' => $devis->getChantier(),
                'devis' => $devis,
                'facture' => $facture,
                'formes' => $formes,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'type' => 'factureacompte',
                'addi' => $addi,
                'totalretenue' => $totalretenue,
                'totaldecomptes' => $totaldecomptes,
                'totalacomptes' => $totalacomptes,
                'totalhtsolde' => $totalhtsolde,
                'totaltva' => $totaltva,
                'totalttcsolde' => number_format($totalttcsolde, 2, '.', ''),
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

        return $this->json(['result' => "error"], 400);

    }

    #[Route(path: '/excel/get/{id}', name: 'api_facture_excel_facture', methods: ['POST'])]
    public function excel(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): Response
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);
        $repoGroupe = $doctrine->getRepository(Groupe::class);
        $repoForme = $doctrine->getRepository(Forme::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoFacture = $doctrine->getRepository(Facture::class);

        // =====================
        // Récupération des données depuis le JSON envoyé par Flutter
        // =====================
        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        $master = $apuser->getCompte() === null
            ? $apuser
            : $repoUser->find($apuser->getCompte());

        $facture = $repoFacture->findOneBy(['id' => $id, 'user' => $master]);

        if ($facture->getType() === 'devis') {

            $formes = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);
            $devis = $facture->getDevis();
            $listegroupe = $devis->getGroupe();

            $ddacomptes = $devis->getAcomptes();
            $dddecomptes = $devis->getDecomptes();
            $totalacomptes = 0;
            $totaldecomptes = 0;
            $totalretenue = 0;

            foreach ($ddacomptes as $aacom) {
                $totalacomptes = $totalacomptes + (($devis->getTotalht() * $aacom->getPourcentage()) / 100);
            }
            foreach ($dddecomptes as $decom) {
                if ($decom->getEtat() == "valide") {
                    $totaldecomptes = $totaldecomptes + $decom->getApayer();
                    $totalretenue = $totalretenue + ($decom->getValeur() * floatval($devis->getTrc()) / 100) + ($decom->getValeur() * floatval($devis->getGarantie()) / 100) + ($decom->getValeur() * floatval($devis->getFinition()) / 100) + ($decom->getValeur() * floatval($devis->getProrata()) / 100);
                }
            }

            $totalhtsolde = $devis->getTotalht() - $totalacomptes - $totaldecomptes + $totalretenue;
            if ($devis->getPtva() == "oui" || $devis->getPtva() === 'susp') {
                $totaltva = ($totalhtsolde * $devis->getTva()) / 100;
                $totalttcsolde = $totalhtsolde + $totaltva;
            } else {
                $totaltva = ($totalhtsolde * $devis->getTva()) / 100;
                $totalttcsolde = $totalhtsolde;
            }
            $addi = $devis->getProrata() + $devis->getFinition() + $devis->getGarantie() + $devis->getTrc();
            $lignes = $devis->getLignes();

            $html = $this->renderView('content/attachedoc_excel.html.twig', [
                'chantier' => $devis->getChantier(),
                'devis' => $devis,
                'facture' => $facture,
                'formes' => $formes,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'type' => 'facture',
                'addi' => $addi,
                'totalretenue' => $totalretenue,
                'totaldecomptes' => $totaldecomptes,
                'totalacomptes' => $totalacomptes,
                'totalhtsolde' => $totalhtsolde,
                'totaltva' => $totaltva,
                'totalttcsolde' => number_format($totalttcsolde, 2, '.', ''),
            ]);

            // =====================
            // Conversion HTML → Excel
            // =====================
            $spreadsheet = new Spreadsheet();
            $reader = new Html();
            $reader->loadFromString($html, $spreadsheet);

            $writer = new Xlsx($spreadsheet);
            $filename = 'Facture-'.$facture->getNumfacture().'.xlsx';

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
        if ($facture->getType() === 'acompte') {
            $acompte = $facture->getAcompte();
            $formes = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);
            $devis = $acompte->getDevis();
            $listegroupe = $devis->getGroupe();

            $lignes = $devis->getLignes();

            $html = $this->renderView('content/attachedoc_excel.html.twig', [
                'chantier' => $devis->getChantier(),
                'devis' => $devis,
                'facture' => $facture,
                'formes' => $formes,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'type' => 'factureacompte',
            ]);

            // =====================
            // Conversion HTML → Excel
            // =====================
            $spreadsheet = new Spreadsheet();
            $reader = new Html();
            $reader->loadFromString($html, $spreadsheet);

            $writer = new Xlsx($spreadsheet);
            $filename = 'Facture-'.$facture->getNumfacture().'.xlsx';

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
        if ($facture->getType() === 'decompte') {

            $decompte = $facture->getDecompte();
            $formes = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);
            $devis = $facture->getDecompte()->getDevis();

            $listegroupe = $devis->getGroupe();
            $lignes = $devis->getLignes();

            $html = $this->renderView('content/attachedoc_excel.html.twig', [
                'chantier' => $devis->getChantier(),
                'devis' => $devis,
                'decompte' => $decompte,
                'facture' => $facture,
                'formes' => $formes,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'type' => 'facturedecompte'
            ]);

            // =====================
            // Conversion HTML → Excel
            // =====================
            $spreadsheet = new Spreadsheet();
            $reader = new Html();
            $reader->loadFromString($html, $spreadsheet);

            $writer = new Xlsx($spreadsheet);
            $filename = 'Facture-'.$facture->getNumfacture().'.xlsx';

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

        return $this->json(['result' => "error"], 400);

    }

    #[Route(path: '/apdf/get/{id}', name: 'api_facture_apdf_facture', methods: ['POST'])]
    public function apdff(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): JsonResponse
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);
        $repoForme = $doctrine->getRepository(Forme::class);
        $repoDocuments = $doctrine->getRepository(Documents::class);

        $repoFacture = $doctrine->getRepository(Facture::class);
        $manager = $doctrine->getManager();
        $repoGroupe = $doctrine->getRepository(Groupe::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $facture = $repoFacture->findOneBy(['id' => $id, 'user' => $master]);

        if ($facture->getType() === 'decompte') {
            $decompte = $facture->getDecompte();
            $formes = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);

            $subject = 'FACTURE ' . $facture->getNumfacture() . ' ' . $facture->getClient()->getNomClient() . ' ' . $facture->getChantier()->getNomChantier();
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'facture', 'numero' => $facture->getId(), 'etat' => 'no']);
            $document = new Documents();
            if ($docu) {
                $this->delete_directory('pdf/' . $docu->getFolde());
                $manager->remove($docu);
                $manager->flush();
            }

            $devis = $decompte->getDevis();
            $listegroupe = $repoGroupe->findBy(
                ['facture' => $facture],
                ['reference' => 'ASC']);


            $lignes = $repoLigne->findBy(['facture' => $facture]);
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'facture', 'numero' => $facture->getId(), 'etat' => 'no']);
            if (!$docu) {
                $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
                if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
                    throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
                }
                $document->setUser($apuser);
                $document->setNumero($facture->getId());
                $document->setDonner($subject);
                $document->setType('facture');
                $document->setEtat('no');
                $document->setFolde($dire);
                $manager->persist($document);
                $manager->flush();
            }

            $pdfOptions = new Options();
            $pdfOptions->setIsRemoteEnabled(true);
            // Instantiate Dompdf with our options
            $dompdf = new Dompdf($pdfOptions);
            // Retrieve the HTML generated in our twig file
            $html = $this->renderView('content/attachedoc.html.twig', [
                'chantier' => $devis->getChantier(),
                'devis' => $devis,
                'decompte' => $decompte,
                'facture' => $facture,
                'formes' => $formes,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'type' => 'decomptefacture',
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
        if ($facture->getType() === 'acompte') {
            $acompte = $facture->getAcompte();
            $formes = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);

            $subject = 'FACTURE ' . $facture->getNumfacture() . ' ' . $facture->getClient()->getNomClient() . ' ' . $facture->getChantier()->getNomChantier();
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'facture', 'numero' => $facture->getId(), 'etat' => 'no']);
            $document = new Documents();
            if ($docu) {
                $this->delete_directory('pdf/' . $docu->getFolde());
                $manager->remove($docu);
                $manager->flush();
            }

            $devis = $acompte->getDevis();
            $listegroupe = $devis->getGroupe();


            $lignes = $devis->getLignes();
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'facture', 'numero' => $facture->getId(), 'etat' => 'no']);
            if (!$docu) {
                $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
                if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
                    throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
                }
                $document->setUser($apuser);
                $document->setNumero($facture->getId());
                $document->setDonner($subject);
                $document->setType('facture');
                $document->setEtat('no');
                $document->setFolde($dire);
                $manager->persist($document);
                $manager->flush();
            }

            $pdfOptions = new Options();
            $pdfOptions->setIsRemoteEnabled(true);
            // Instantiate Dompdf with our options
            $dompdf = new Dompdf($pdfOptions);
            // Retrieve the HTML generated in our twig file
            $html = $this->renderView('content/attachedoc.html.twig', [
                'chantier' => $devis->getChantier(),
                'devis' => $devis,
                'facture' => $facture,
                'formes' => $formes,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'type' => 'acomptefacture',
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
        if ($facture->getType() === 'devis') {

            $formes = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);

            $subject = 'FACTURE ' . $facture->getNumfacture() . ' ' . $facture->getClient()->getNomClient() . ' ' . $facture->getChantier()->getNomChantier();
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'facture', 'numero' => $facture->getId(), 'etat' => 'no']);
            $document = new Documents();
            if ($docu) {
                $this->delete_directory('pdf/' . $docu->getFolde());
                $manager->remove($docu);
                $manager->flush();
            }

            $devis = $facture->getDevis();
            $listegroupe = $devis->getGroupe();

            $ddacomptes = $devis->getAcomptes();
            $dddecomptes = $devis->getDecomptes();
            $totalacomptes = 0;
            $totaldecomptes = 0;
            $totalretenue = 0;

            foreach ($ddacomptes as $aacom) {
                $totalacomptes = $totalacomptes + (($devis->getTotalht() * $aacom->getPourcentage()) / 100);
            }

            foreach ($dddecomptes as $decom) {
                if ($decom->getEtat() == "valide") {
                    $totaldecomptes = $totaldecomptes + $decom->getApayer();
                    $totalretenue = $totalretenue + ($decom->getValeur() * floatval($devis->getTrc()) / 100) + ($decom->getValeur() * floatval($devis->getGarantie()) / 100) + ($decom->getValeur() * floatval($devis->getFinition()) / 100) + ($decom->getValeur() * floatval($devis->getProrata()) / 100);
                }
            }

            $totalhtsolde = $devis->getTotalht() - $totalacomptes - $totaldecomptes + $totalretenue;
            if ($devis->getPtva() == "oui" || $devis->getPtva() === 'susp') {
                $totaltva = ($totalhtsolde * $devis->getTva()) / 100;
                $totalttcsolde = $totalhtsolde + $totaltva;
            } else {
                $totaltva = ($totalhtsolde * $devis->getTva()) / 100;
                $totalttcsolde = $totalhtsolde;
            }

            $addi = $devis->getProrata() + $devis->getFinition() + $devis->getGarantie() + $devis->getTrc();


            $lignes = $devis->getLignes();
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'facture', 'numero' => $facture->getId(), 'etat' => 'no']);
            if (!$docu) {
                $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
                if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
                    throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
                }
                $document->setUser($apuser);
                $document->setNumero($facture->getId());
                $document->setDonner($subject);
                $document->setType('facture');
                $document->setEtat('no');
                $document->setFolde($dire);
                $manager->persist($document);
                $manager->flush();
            }

            $pdfOptions = new Options();
            $pdfOptions->setIsRemoteEnabled(true);
            // Instantiate Dompdf with our options
            $dompdf = new Dompdf($pdfOptions);
            // Retrieve the HTML generated in our twig file
            $html = $this->renderView('content/attachedoc.html.twig', [
                'chantier' => $devis->getChantier(),
                'devis' => $devis,
                'facture' => $facture,
                'formes' => $formes,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'type' => 'soldefacture',
                'addi' => $addi,
                'totalretenue' => $totalretenue,
                'totaldecomptes' => $totaldecomptes,
                'totalacomptes' => $totalacomptes,
                'totalhtsolde' => $totalhtsolde,
                'totaltva' => $totaltva,
                'totalttcsolde' => number_format($totalttcsolde, 2, '.', ''),
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

        return $this->json(['result' => "error"], 400);

    }

    #[Route(path: '/ppdf/get/{id}', name: 'api_facture_ppdf_facture', methods: ['POST'])]
    public function ppdff(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): JsonResponse
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);
        $repoForme = $doctrine->getRepository(Forme::class);
        $repoDocuments = $doctrine->getRepository(Documents::class);

        $repoFacture = $doctrine->getRepository(Facture::class);
        $manager = $doctrine->getManager();
        $repoGroupe = $doctrine->getRepository(Groupe::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $facture = $repoFacture->findOneBy(['user' => $master, 'id' => $id]);

        if ($facture->getType() === 'decompte') {
            $decompte = $facture->getDecompte();
            $formes = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);

            $subject = 'FACTURE ' . $facture->getNumfacture() . ' ' . $facture->getClient()->getNomClient() . ' ' . $facture->getChantier()->getNomChantier();
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'facture', 'numero' => $facture->getId(), 'etat' => 'no']);
            $document = new Documents();
            if ($docu) {
                $this->delete_directory('pdf/' . $docu->getFolde());
                $manager->remove($docu);
                $manager->flush();
            }

            $devis = $decompte->getDevis();
            $listegroupe = $repoGroupe->findBy(
                ['facture' => $facture],
                ['reference' => 'ASC']);


            $lignes = $repoLigne->findBy(['facture' => $facture]);
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'facture', 'numero' => $facture->getId(), 'etat' => 'no']);
            if (!$docu) {
                $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
                if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
                    throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
                }
                $document->setUser($apuser);
                $document->setNumero($facture->getId());
                $document->setDonner($subject);
                $document->setType('facture');
                $document->setEtat('no');
                $document->setFolde($dire);
                $manager->persist($document);
                $manager->flush();
            }

            $pdfOptions = new Options();
            $pdfOptions->setIsRemoteEnabled(true);
            // Instantiate Dompdf with our options
            $dompdf = new Dompdf($pdfOptions);
            // Retrieve the HTML generated in our twig file
            $html = $this->renderView('content/attachedoc.html.twig', [
                'chantier' => $devis->getChantier(),
                'devis' => $devis,
                'decompte' => $decompte,
                'facture' => $facture,
                'formes' => $formes,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'type' => 'facturedecompte',
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
        if ($facture->getType() === 'acompte') {
            $acompte = $facture->getAcompte();
            $formes = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);

            $subject = 'FACTURE ' . $facture->getNumfacture() . ' ' . $facture->getClient()->getNomClient() . ' ' . $facture->getChantier()->getNomChantier();
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'facture', 'numero' => $facture->getId(), 'etat' => 'no']);
            $document = new Documents();
            if ($docu) {
                $this->delete_directory('pdf/' . $docu->getFolde());
                $manager->remove($docu);
                $manager->flush();
            }

            $devis = $acompte->getDevis();
            $listegroupe = $devis->getGroupe();


            $lignes = $devis->getLignes();
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'facture', 'numero' => $facture->getId(), 'etat' => 'no']);
            if (!$docu) {
                $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
                if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
                    throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
                }
                $document->setUser($apuser);
                $document->setNumero($facture->getId());
                $document->setDonner($subject);
                $document->setType('facture');
                $document->setEtat('no');
                $document->setFolde($dire);
                $manager->persist($document);
                $manager->flush();
            }

            $pdfOptions = new Options();
            $pdfOptions->setIsRemoteEnabled(true);
            // Instantiate Dompdf with our options
            $dompdf = new Dompdf($pdfOptions);
            // Retrieve the HTML generated in our twig file
            $html = $this->renderView('content/attachedoc.html.twig', [
                'chantier' => $devis->getChantier(),
                'devis' => $devis,
                'facture' => $facture,
                'formes' => $formes,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'type' => 'factureacompte',
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
        if ($facture->getType() === 'devis') {

            $formes = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);

            $subject = 'FACTURE ' . $facture->getNumfacture() . ' ' . $facture->getClient()->getNomClient() . ' ' . $facture->getChantier()->getNomChantier();
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'facture', 'numero' => $facture->getId(), 'etat' => 'no']);
            $document = new Documents();
            if ($docu) {
                $this->delete_directory('pdf/' . $docu->getFolde());
                $manager->remove($docu);
                $manager->flush();
            }

            $devis = $facture->getDevis();
            $listegroupe = $devis->getGroupe();

            $ddacomptes = $devis->getAcomptes();
            $dddecomptes = $devis->getDecomptes();
            $totalacomptes = 0;
            $totaldecomptes = 0;
            $totalretenue = 0;

            foreach ($ddacomptes as $aacom) {
                $totalacomptes = $totalacomptes + (($devis->getTotalht() * $aacom->getPourcentage()) / 100);
            }
            foreach ($dddecomptes as $decom) {
                if ($decom->getEtat() == "valide") {
                    $totaldecomptes = $totaldecomptes + $decom->getApayer();
                    $totalretenue = $totalretenue + ($decom->getValeur() * floatval($devis->getTrc()) / 100) + ($decom->getValeur() * floatval($devis->getGarantie()) / 100) + ($decom->getValeur() * floatval($devis->getFinition()) / 100) + ($decom->getValeur() * floatval($devis->getProrata()) / 100);
                }
            }

            $totalhtsolde = $devis->getTotalht() - $totalacomptes - $totaldecomptes + $totalretenue;
            if ($devis->getPtva() == "oui" || $devis->getPtva() === 'susp') {
                $totaltva = ($totalhtsolde * $devis->getTva()) / 100;
                $totalttcsolde = $totalhtsolde + $totaltva;
            } else {
                $totaltva = ($totalhtsolde * $devis->getTva()) / 100;
                $totalttcsolde = $totalhtsolde;
            }

            $addi = $devis->getProrata() + $devis->getFinition() + $devis->getGarantie() + $devis->getTrc();


            $lignes = $devis->getLignes();
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'facture', 'numero' => $facture->getId(), 'etat' => 'no']);
            if (!$docu) {
                $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
                if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
                    throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
                }
                $document->setUser($apuser);
                $document->setNumero($facture->getId());
                $document->setDonner($subject);
                $document->setType('facture');
                $document->setEtat('no');
                $document->setFolde($dire);
                $manager->persist($document);
                $manager->flush();
            }

            $pdfOptions = new Options();
            $pdfOptions->setIsRemoteEnabled(true);
            // Instantiate Dompdf with our options
            $dompdf = new Dompdf($pdfOptions);
            // Retrieve the HTML generated in our twig file
            $html = $this->renderView('content/attachedoc.html.twig', [
                'chantier' => $devis->getChantier(),
                'devis' => $devis,
                'facture' => $facture,
                'formes' => $formes,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'type' => 'facture',
                'addi' => $addi,
                'totalretenue' => $totalretenue,
                'totaldecomptes' => $totaldecomptes,
                'totalacomptes' => $totalacomptes,
                'totalhtsolde' => $totalhtsolde,
                'totaltva' => $totaltva,
                'totalttcsolde' => number_format($totalttcsolde, 2, '.', ''),
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

        return $this->json(['result' => "error"], 400);
    }

    #[Route(path: '/delete/{id}', name: 'api_delete_facture', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function deleteFacture(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoFacture = $doctrine->getRepository(Facture::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $manager = $this->doctrine->getManager();

        $facture = $repoFacture->findOneBy(['id' => $id, 'user' => $master]);
        $chantier = $facture->getChantier();
        $relever = $facture->getRelever();

        if (count($relever) === 0 && $facture->getEtat() === 'save') {

            if ($facture->getType() === "acompte") {
                $devis = $facture->getAcompte()->getDevis();
            }
            if ($facture->getType() === "decompte") {
                $devis = $facture->getDecompte()->getDevis();
            }
            if ($facture->getType() === "devis") {
                $devis = $facture->getDevis();
            }


            $pour = 0;
            foreach ($chantier->getFactures() as $fac) {
                if ($fac->getType() === "acompte") {
                    $pour = $fac->getAcompte()->getPourcentage() + $pour;
                }
            }
            $devis->setAcomrage($pour);
            $manager->persist($devis);
            $manager->flush();


            if ($facture->getDecompte()) {
                $decompte = $facture->getDecompte();
                $decompte->setFacture(null);
                $facture->setDecompte(null);
                $manager->persist($decompte);
                $manager->flush();
            }

            if ($facture->getDevis()) {
                $devis = $facture->getDevis();
                $devis->setFacture(null);
                $facture->setDevis(null);
                $manager->persist($devis);
                $manager->flush();
            }

            foreach ($facture->getGroupe() as $gr) {
                $manager->remove($gr);
                $manager->flush();
            }

            foreach ($facture->getLignes() as $lign) {
                $manager->remove($lign);
                $manager->flush();
            }



            $manager->remove($facture);
            $manager->flush();


        }

        return $this->json(['result' => 'success'], 200);
    }

    #[Route(path: '/dele/{id}', name: 'api_dele_facture', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function deleFacture(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoFacture = $doctrine->getRepository(Facture::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $manager = $this->doctrine->getManager();

        $facture = $repoFacture->findOneBy(['id' => $id, 'user' => $master]);
        $chantier = $facture->getChantier();
        $relever = $facture->getRelever();

        if (count($relever) === 0 && $facture->getEtat() === 'save') {

            if ($facture->getType() === "acompte") {
                $devis = $facture->getAcompte()->getDevis();
            }
            if ($facture->getType() === "decompte") {
                $devis = $facture->getDecompte()->getDevis();
            }
            if ($facture->getType() === "devis") {
                $devis = $facture->getDevis();
            }


            $pour = 0;
            foreach ($chantier->getFactures() as $fac) {
                if ($fac->getType() === "acompte") {
                    $pour = $fac->getAcompte()->getPourcentage() + $pour;
                }
            }
            $devis->setAcomrage($pour);
            $manager->persist($devis);
            $manager->flush();


            if ($facture->getDecompte()) {
                $decompte = $facture->getDecompte();
                $decompte->setFacture(null);
                $facture->setDecompte(null);
                $manager->persist($decompte);
                $manager->flush();
            }

            if ($facture->getDevis()) {
                $devis = $facture->getDevis();
                $devis->setFacture(null);
                $facture->setDevis(null);
                $manager->persist($devis);
                $manager->flush();
            }

            foreach ($facture->getGroupe() as $gr) {
                $manager->remove($gr);
                $manager->flush();
            }

            foreach ($facture->getLignes() as $lign) {
                $manager->remove($lign);
                $manager->flush();
            }

            $manager->remove($facture);
            $manager->flush();

            $this->jourChantier($chantier);
            return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'pychantier']);
        }

        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/del/{id}', name: 'api_del_facture', methods: ['POST'])]
    public function delFacture(string $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoFacture = $doctrine->getRepository(Facture::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $manager = $this->doctrine->getManager();

        $facture = $repoFacture->findOneBy(['numfacture' => $id, 'user' => $master]);
        $chantier = $facture->getChantier();
        $relever = $facture->getRelever();

        if (count($relever) === 0 && $facture->getEtat() === 'save') {

            if ($facture->getType() === "acompte") {
                $devis = $facture->getAcompte()->getDevis();
            }
            if ($facture->getType() === "decompte") {
                $devis = $facture->getDecompte()->getDevis();
            }
            if ($facture->getType() === "devis") {
                $devis = $facture->getDevis();
            }


            $pour = 0;
            foreach ($chantier->getFactures() as $fac) {
                if ($fac->getType() === "acompte") {
                    $pour = $fac->getAcompte()->getPourcentage() + $pour;
                }
            }
            $devis->setAcomrage($pour);
            $manager->persist($devis);
            $manager->flush();



            if ($facture->getDecompte()) {
                $decompte = $facture->getDecompte();
                $decompte->setFacture(null);
                $facture->setDecompte(null);
                $manager->persist($decompte);
                $manager->flush();
            }

            if ($facture->getDevis()) {
                $devis = $facture->getDevis();
                $devis->setFacture(null);
                $facture->setDevis(null);
                $manager->persist($devis);
                $manager->flush();
            }

            foreach ($facture->getGroupe() as $gr) {
                $manager->remove($gr);
                $manager->flush();
            }

            foreach ($facture->getLignes() as $lign) {
                $manager->remove($lign);
                $manager->flush();
            }

            $manager->remove($facture);
            $manager->flush();

        }

        return $this->json(['result' => 'success'], 200);
    }

    #[Route(path: '/pourcentage/{idfa}/{pourcent}', name: 'add_Pourcentage_api', methods: ['POST'])]
    public function addPourcentage(int $idfa, float $pourcent, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $manager = $this->doctrine->getManager();

        $repoFacture = $this->doctrine->getRepository(Facture::class);
        $repoUser = $this->doctrine->getRepository(User::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }


        $facture = $repoFacture->findOneBy(['id' => $idfa, 'user' => $master]);
        $acompte = $facture->getAcompte();

        if ($pourcent > 100) {
            return $this->json(['result' => 'erreur'], 404);
        }

        $acompte->setPourcentage($pourcent);
        $devis = $facture->getAcompte()->getDevis();

        $th = $devis->getTotalht() * ($pourcent / 100);

        if ($devis->getPtva() === "oui" || $devis->getPtva() === 'susp') {
            $ttc = $th * (1 + ($devis->getTva() / 100));
            $vtva = $ttc - $th;
        } else {
            $vtva = ($th * $devis->getTva()) / 100;
            $ttc = $th;
        }

        foreach ($facture->getLignes() as $lig) {
            $manager->remove($lig);
            $manager->flush();
        }

        foreach ($devis->getLignes() as $lign) {
            $ligne = new Ligne();
            $ligne->setDesignation($lign->getDesignation());
            $ligne->setFacture($facture);
            $ligne->setUnite($lign->getUnite());
            $ligne->setQuantite($lign->getQuantite());
            $ligne->setPu($lign->getPu());
            $ligne->setRemise($lign->getRemise());
            $ligne->setUser($master);
            $ligne->setChantier($lign->getChantier());
            $ligne->setType(4);
            $manager->persist($ligne);
            $manager->flush();
        }

        $facture->setVtva(round($vtva, 3));
        $facture->setTotalttc(round($ttc, 3));
        $facture->setTotalht(round($th, 3));

        $manager->persist($acompte);
        $manager->persist($facture);
        $manager->flush();
        return $this->json($facture, 200, ['Content-Type' => 'application/json'], ['groups' => 'pyfacture']);
    }

    #[Route(path: '/montant/{idfa}/{montant}', name: 'add_Montant_api', methods: ['POST'])]
    public function addMontant(int $idfa, float $montant, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $manager = $this->doctrine->getManager();

        $repoFacture = $this->doctrine->getRepository(Facture::class);
        $repoUser = $this->doctrine->getRepository(User::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $facture = $repoFacture->findOneBy(['id' => $idfa, 'user' => $master]);

        $devis = $facture->getAcompte()->getDevis();
        $acompte = $facture->getAcompte();

        if ($facture->getType() === "acompte") {
            if ($montant === 0 && $montant > $devis->getTotalttc()) {
                return $this->json(['result' => 'erreur'], 404);
            }

            if ($devis->getPtva() === "oui" || $devis->getPtva() === 'susp') {
                $th = $montant / (1 + ($devis->getTva() / 100));
                $vtva = ($th * $devis->getTva()) / 100;
                $facture->setTotalht(round($th, 3));
                $facture->setVtva(round($vtva, 3));
            } else {
                $vtva = ($montant * $devis->getTva()) / 100;
                $facture->setTotalht($montant);
                $facture->setVtva($vtva);
            }

            foreach ($facture->getLignes() as $lig) {
                $manager->remove($lig);
                $manager->flush();
            }

            foreach ($devis->getLignes() as $lign) {
                $ligne = new Ligne();
                $ligne->setDesignation($lign->getDesignation());
                $ligne->setFacture($facture);
                $ligne->setUnite($lign->getUnite());
                $ligne->setQuantite($lign->getQuantite());
                $ligne->setPu($lign->getPu());
                $ligne->setRemise($lign->getRemise());
                $ligne->setUser($master);
                $ligne->setChantier($lign->getChantier());
                $ligne->setType(4);
                $manager->persist($ligne);
                $manager->flush();
            }
            $facture->setTotalttc($montant);
            $manager->persist($facture);
            $manager->flush();

            $pour = ($facture->getTotalht() / $devis->getTotalht()) * 100;
            $acompte->setPourcentage(round($pour, 10));
            $manager->persist($acompte);
            $manager->flush();
        }
        if ($facture->getType() === "retenue") {
            if ($montant === 0 && $montant > $devis->getTotalttc()) {
                return $this->json(['result' => 'erreur'], 404);
            }

            $pour = ($montant / $devis->getTotalht()) * 100;
            $acompte->setPourcentage(round($pour, 10));
            $manager->persist($acompte);
            $manager->flush();

            if ($devis->getPtva() === "oui" || $devis->getPtva() === 'susp') {
                $th = $montant / (1 + ($devis->getTva() / 100));
                $vtva = ($th * $devis->getTva()) / 100;
                $facture->setTotalht(round($th, 3));
                $facture->setVtva(round($vtva, 3));
            } else {
                $vtva = ($montant * $devis->getTva()) / 100;
                $facture->setTotalht($montant);
                $facture->setVtva($vtva);
            }

            foreach ($facture->getLignes() as $lig) {
                $manager->remove($lig);
                $manager->flush();
            }

            $facture->setTotalttc($montant);
            $manager->persist($facture);
            $manager->flush();

            $ligne = new Ligne();
            $ligne->setDesignation("Situation d'avancement");
            $ligne->setFacture($facture);
            $ligne->setUnite("U");
            $ligne->setQuantite("1");
            $ligne->setPu(0);
            $ligne->setRemise(0);
            $ligne->setUser($master);
            $ligne->setChantier($facture->getChantier());
            $ligne->setType(4);
            $manager->persist($ligne);
            $manager->flush();
        }
        return $this->json($facture, 200, ['Content-Type' => 'application/json'], ['groups' => 'pyfacture']);
    }

    #[Route(path: '/facfac/get', name: 'api_get_fac_all', methods: ['POST'])]
    public function all(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoFacture = $doctrine->getRepository(Facture::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $factures = $repoFacture->findFacFac($master);
        return $this->json($factures, 200, ['Content-Type' => 'application/json'], ['groups' => 'pyfacture']);
    }

}
