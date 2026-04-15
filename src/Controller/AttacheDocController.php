<?php

namespace App\Controller;

use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Client;
use App\Entity\Decompte;
use App\Entity\Devis;
use App\Entity\Documents;
use App\Entity\Facture;
use App\Entity\Forme;
use App\Entity\Groupe;
use App\Entity\Historique;
use App\Entity\Ligne;
use App\Entity\Chantier;
use App\Entity\Livraison;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use DOMDocument;
use Exception;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Settings;
use PhpOffice\PhpWord\Shared\Html;
use PhpOffice\PhpWord\Style\Alignment;
use PhpOffice\PhpWord\Style\Cell;
use PhpOffice\PhpWord\Style\Font;
use PhpOffice\PhpWord\TemplateProcessor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;


#[Route(path: '/crm/doc')]
class AttacheDocController extends AbstractController
{

    function delete_directory($dirname): bool
    {

        $dir_handle = null;

        if (is_dir($dirname))
            $dir_handle = opendir($dirname);
        if (!$dir_handle)
            return false;
        while ($file = readdir($dir_handle)) {
            if ($file !== "." && $file !== "..") {
                if (!is_dir($dirname . "/" . $file))
                    unlink($dirname . "/" . $file);
                else
                    $this->delete_directory($dirname . '/' . $file);
            }
        }
        closedir($dir_handle);
        rmdir($dirname);
        return true;
    }

    public function getMaster(): ?object
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

    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    #[Route(path: '/deldoc/{id}/del/{type}', name: 'deldoc')]
    public function deldoc(int $id, string $type = null): RedirectResponse
    {

        $manager = $this->doctrine->getManager();
        $repoDoc = $this->doctrine->getRepository(Documents::class);

        $doc = $repoDoc->findOneBy(['id' => $id, 'user' => $this->getUser()]);
        if (!$doc) {
            return $this->redirectToRoute('logout');
        }
        $manager->remove($doc);
        $manager->flush();
        if ($type !== 'null') {
            return $this->redirectToRoute('editmessage', ['idmessage' => $type]);
        }
        return $this->redirectToRoute('message');

    }

    #[Route(path: '/attache/{id}/{type}/{charger}', name: 'attacher')]
    public function index(int $id, string $type, string $charger)
    {
        //MANAGER
        $manager = $this->doctrine->getManager();

        // REFUSE L"ACCESS SI NON CONNECTÉ
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        date_default_timezone_set('Africa/Abidjan');


        // LES REPOSITORIES
        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);
        $repoForme = $this->doctrine->getRepository(Forme::class);
        $repoDocuments = $this->doctrine->getRepository(Documents::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoFacture = $this->doctrine->getRepository(Facture::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoDecompte = $this->doctrine->getRepository(Decompte::class);

        $formes = $repoForme->findOneBy(['user' => $this->getUser(), 'used' => 'used']);

        if ($type === 'devis' and $charger === 'non') {

            $devis = $repoDevis->findOneBy(['user' => $this->getMaster(), 'id' => $id]);

            if (!$devis) {
                return $this->redirectToRoute('logout');
            }

            $docu = $repoDocuments->findOneBy(['user' => $this->getUser(), 'type' => 'devis',
                'numero' => $id, 'etat' => 'no']);

            if ($docu) {
                $this->delete_directory('pdf/' . $docu->getFolde());
                $manager->remove($docu);
                $manager->flush();
            }


            // ON RECUPERE LES LIGNES
            $lignes = $repoLigne->findBy(['devis' => $devis], ['reference' => 'asc']);

            // ON RECUPERE LES GROUPES
            $listegroupe = $repoGroupe->findBy(
                ['devis' => $devis],
                ['reference' => 'ASC']);

            // RECUPERATION DES MISES EN FORME

            $subject = 'DEVIS ' . $devis->getIddevis() . ' ' . $devis->getClient()->getNomClient() . ' ' . $devis->getChantier()->getNomChantier();

            $document = new Documents();
            $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
            if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
            }

            $document->setUser($this->getUser());
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
            $dompdf = new Dompdf($pdfOptions);
            $html = $this->renderView('content/attachedoc.html.twig', [
                'chantier' => $devis->getChantier(),
                'devis' => $devis,
                'formes' => $formes,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'type' => "devis",
                'usa' => $this->getMaster()
            ]);

            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            $output = $dompdf->output();
            $publicDirectory = 'pdf/' . $document->getFolde() . '/';
            $pdfFilepath = $publicDirectory . $subject . '.pdf';
            file_put_contents($pdfFilepath, $output);
            return $this->redirectToRoute('message');

        }
        if ($type === 'devis' and $charger === 'oui') {
            $devis = $repoDevis->findOneBy(['user' => $this->getMaster(), 'id' => $id]);

            if (!$devis) {
                return $this->redirectToRoute('logout');
            }

            $docu = $repoDocuments->findOneBy(['user' => $this->getUser(), 'type' => 'devis',
                'numero' => $id, 'etat' => 'no']);

            if ($docu) {
                $this->delete_directory('pdf/' . $docu->getFolde());
                $manager->remove($docu);
                $manager->flush();
            }


            // ON RECUPERE LES LIGNES
            $lignes = $repoLigne->findBy(['devis' => $devis], ['reference' => 'asc']);

            // ON RECUPERE LES GROUPES
            $listegroupe = $repoGroupe->findBy(
                ['devis' => $devis],
                ['reference' => 'ASC']);

            // RECUPERATION DES MISES EN FORME

            $subject = 'DEVIS ' . $devis->getIddevis() . ' ' . $devis->getClient()->getNomClient() . ' ' . $devis->getChantier()->getNomChantier();
            $pdfOptions = new Options();
            $pdfOptions->setIsRemoteEnabled(true);
            $dompdf = new Dompdf($pdfOptions);

            $repoHistorique = $this->doctrine->getRepository(Historique::class);
            $historiques = $repoHistorique->findBa($this->getMaster());

            $html = $this->renderView('content/attachedoc.html.twig', [
                'chantier' => $devis->getChantier(),
                'devis' => $devis,
                'formes' => $formes,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'type' => "devis",
                'clients' => $repoClient->GetAllUser($this->getMaster()),
                'history' => $historiques,
                'usa' => $this->getMaster()
            ]);

            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            $dompdf->stream($subject . '.pdf', [
                'Attachment' => true
            ]);

        }
        if ($type === 'imprimdevis') {
            //RECUPERE LE DEVIS COURANT
            $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            if (!$devis) {
                return $this->redirectToRoute('logout');
            }

            // ON RECUPERE LE PROJET
            $chantier = $devis->getChantier();

            // ON RECUPERE LES LIGNES
            $lignes = $repoLigne->findBy(['devis' => $devis], ['reference' => 'asc']);

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
            $devis->setTotalht($th);
            $devis->setTotalttc($ttc);
            $manager->persist($devis);
            $manager->flush();


            return $this->render('content/attachedoc.html.twig', [
                'title' => 'Devis - Mise en forme pour impression',
                'chantier' => $chantier,
                'devis' => $devis,
                'formes' => $formes,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'th' => $th,
                'ttc' => $ttc,
                'vtva' => $vtva,
                'rem' => $rem,
                'type' => 'devis',
                'usa' => $this->getMaster()
            ]);
        }
        if ($type === 'shushu') {

            $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);


            if (!$devis) {
                return $this->redirectToRoute('logout');
            }

            $invente = $repoLigne->inventaire($devis->getChantier()->getId());

            return $this->render('content/attachedoc.html.twig', [
                'title' => 'Devis - Mise en forme pour impression',
                'devis' => $devis,
                'type' => 'shushu',
                'formes' => $formes,
                'invente' => $invente,
                'usa' => $this->getMaster()
            ]);
        }

        if ($type === 'decompte' and $charger === 'non') {

            $decompte = $repoDecompte->findOneBy(['user' => $this->getMaster(), 'id' => $id]);
            if (!$decompte) {
                return $this->redirectToRoute('logout');
            }
            $docu = $repoDocuments->findOneBy(['user' => $this->getUser(),
                'type' => 'decompte', 'numero' => $id, 'etat' => 'no']);

            if ($docu) {
                $this->delete_directory('pdf/' . $docu->getFolde());
                $manager->remove($docu);
                $manager->flush();
            }

            // ON RECUPERE LES LIGNES
            $devis = $decompte->getDevis();
            $lignes = $repoLigne->findBy(['decompte' => $decompte]);

            // ON RECUPERE LES GROUPES
            $listegroupe = $repoGroupe->findBy(
                ['devis' => $devis],
                ['reference' => 'ASC']);

            // RECUPERATION DES MISES EN FORME
            $subject = 'DÉCOMPTE ' . $decompte->getNumdecompte() . ' ' . $decompte->getClient()->getNomClient() . ' ' . $decompte->getChantier()->getNomChantier();

            $ii = 1;
            $vava = 0;
            foreach ($devis->getDecomptes() as $decom) {
                if ($ii < $decompte->getRang()) {
                    $vava += $decom->getApayer();
                    $ii++;
                }
            }

            $document = new Documents();
            $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
            if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
            }


            $document->setUser($this->getUser());
            $document->setNumero($decompte->getId());
            $document->setDonner($subject);
            $document->setType('decompte');
            $document->setEtat('no');
            $document->setFolde($dire);
            $manager->persist($document);
            $manager->flush();


            $pdfOptions = new Options();
            $pdfOptions->setIsRemoteEnabled(true);
            $dompdf = new Dompdf($pdfOptions);
            $html = $this->renderView('content/attachedoc.html.twig', [
                'chantier' => $devis->getChantier(),
                'devis' => $devis,
                'decompte' => $decompte,
                'formes' => $formes,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'type' => $type,
                'vava' => $vava
            ]);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            $output = $dompdf->output();
            $publicDirectory = 'pdf/' . $document->getFolde() . '/';
            $pdfFilepath = $publicDirectory . $subject . '.pdf';
            file_put_contents($pdfFilepath, $output);
            return $this->redirectToRoute('message');

        }
        if ($type === 'decompte' and $charger === 'oui') {

            $decompte = $repoDecompte->findOneBy(['user' => $this->getMaster(), 'id' => $id]);
            if (!$decompte) {
                return $this->redirectToRoute('logout');
            }
            $docu = $repoDocuments->findOneBy(['user' => $this->getUser(),
                'type' => 'decompte', 'numero' => $id, 'etat' => 'no']);

            if ($docu) {
                $this->delete_directory('pdf/' . $docu->getFolde());
                $manager->remove($docu);
                $manager->flush();
            }

            // ON RECUPERE LES LIGNES
            $devis = $decompte->getDevis();
            $lignes = $repoLigne->findBy(['decompte' => $decompte]);

            // ON RECUPERE LES GROUPES
            $listegroupe = $repoGroupe->findBy(
                ['devis' => $devis],
                ['reference' => 'ASC']);

            // RECUPERATION DES MISES EN FORME
            $subject = 'DÉCOMPTE ' . $decompte->getNumdecompte() . ' ' . $decompte->getClient()->getNomClient() . ' ' . $decompte->getChantier()->getNomChantier();

            $ii = 1;
            $vava = 0;
            foreach ($devis->getDecomptes() as $decom) {
                if ($ii < $decompte->getRang()) {
                    $vava += $decom->getApayer();
                    $ii++;
                }
            }

            $pdfOptions = new Options();
            $pdfOptions->setIsRemoteEnabled(true);
            $dompdf = new Dompdf($pdfOptions);

            // Retrieve the HTML generated in our twig file
            $html = $this->renderView('content/attachedoc.html.twig', [
                'chantier' => $devis->getChantier(),
                'devis' => $devis,
                'decompte' => $decompte,
                'formes' => $formes,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'type' => $type,
                'vava' => $vava
            ]);

            $dompdf->loadHtml($html);
            // (Optional) Setup the paper size and orientation
            $dompdf->setPaper('A4', 'portrait');
            // Render the HTML as PDF
            $dompdf->render();
            // Output the generated PDF to Browser (force download)
            $dompdf->stream($subject . '.pdf', [
                'Attachment' => true
            ]);
            return new Response("The PDF file has been succesfully generated !");
        }
        if ($type === 'imprimdecompte') {
            //RECUPERE LE DEVIS COURANT
            $decompte = $repoDecompte->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            if (!$decompte) {
                return $this->redirectToRoute('logout');
            }

            // ON RECUPERE LE PROJET
            $chantier = $decompte->getChantier();

            // ON RECUPERE LES LIGNES
            $devis = $decompte->getDevis();
            $lignes = $repoLigne->findBy(['decompte' => $decompte]);

            // ON RECUPERE LES GROUPES
            $listegroupe = $repoGroupe->findBy(
                ['devis' => $devis],
                ['reference' => 'ASC']);

            $forme = $repoForme->findOneBy(['user' => $this->getMaster()]);

            $ii = 1;
            $vava = 0;

            foreach ($devis->getDecomptes() as $decom) {
                if ($decom->getCorbeille() === null) {
                    if ($ii < $decompte->getRang()) {
                        $vava += $decom->getApayer();
                        $ii++;
                    }
                }
            }

            return $this->render('content/attachedoc.html.twig', [
                'title' => 'Décompte - Mise en forme pour impression',
                'chantier' => $chantier,
                'devis' => $devis,
                'decompte' => $decompte,
                'formes' => $forme,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'type' => 'decompte',
                'vava' => $vava
            ]);
        }

        if ($type === 'facture' and $charger === 'non') {

            $facture = $repoFacture->findOneBy(['user' => $this->getMaster(), 'id' => $id]);

            if (!$facture) {
                return $this->redirectToRoute('logout');
            }
            $docu = $repoDocuments->findOneBy(['user' => $this->getUser(), 'type' => 'facture', 'numero' => $id, 'etat' => 'no']);
            $decompte = $facture->getDecompte();
            $subject = 'FACTURE ' . $facture->getNumfacture() . ' ' . $facture->getClient()->getNomClient() . ' ' . $facture->getChantier()->getNomChantier();

            if ($facture->getType() === 'devis') {
                $devis = $facture->getDevis();
                $lignes = $repoLigne->findBy(['factures' => $facture]);

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

                // ON RECUPERE LES GROUPES
                $listegroupe = $repoGroupe->findBy(
                    ['devis' => $devis],
                    ['reference' => 'ASC']);

                $document = new Documents();
                if (!$docu) {
                    $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
                    if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
                        throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
                    }
                    $document->setUser($this->getUser());
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
                    'addi' => $addi,
                    'totalretenue' => $totalretenue,
                    'totaldecomptes' => $totaldecomptes,
                    'totalacomptes' => $totalacomptes,
                    'totalhtsolde' => $totalhtsolde,
                    'totaltva' => $totaltva,
                    'totalttcsolde' => number_format($totalttcsolde, 2, '.', ''),
                    'listGroup' => $listegroupe,
                    'type' => $type,
                    'lignes' => $lignes,
                ]);

                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();
                $output = $dompdf->output();
                $publicDirectory = 'pdf/' . $document->getFolde() . '/';
                $pdfFilepath = $publicDirectory . $subject . '.pdf';
                file_put_contents($pdfFilepath, $output);
                return $this->redirectToRoute('message');

            }
            if ($facture->getType() === 'decompte') {
                $devis = $decompte->getDevis();
                $lignes = $repoLigne->findBy(['decompte' => $decompte]);

                // ON RECUPERE LES GROUPES
                $listegroupe = $repoGroupe->findBy(
                    ['decompte' => $decompte],
                    ['reference' => 'ASC']);

                $document = new Documents();
                if (!$docu) {
                    $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
                    if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
                        throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
                    }
                    $document->setUser($this->getMaster());
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
                return $this->redirectToRoute('message');
            }
            if ($facture->getType() === 'acompte') {
                $devis = $facture->getAcompte()->getDevis();
                $lignes = $repoLigne->findBy(['devis' => $devis]);

                // ON RECUPERE LES GROUPES
                $listegroupe = $repoGroupe->findBy(
                    ['devis' => $devis],
                    ['reference' => 'ASC']);

                $document = new Documents();
                if (!$docu) {
                    $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
                    if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
                        throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
                    }
                    $document->setUser($this->getMaster());
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

                $repoHistorique = $this->doctrine->getRepository(Historique::class);
                $historiques = $repoHistorique->findBa($this->getMaster());

                $html = $this->renderView('content/attachedoc.html.twig', [
                    'chantier' => $devis->getChantier(),
                    'devis' => $devis,
                    'facture' => $facture,
                    'formes' => $formes,
                    'lignes' => $lignes,
                    'listGroup' => $listegroupe,
                    'type' => 'factureacompte',
                    'clients' => $repoClient->GetAllUser($this->getMaster()),
                    'history' => $historiques
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
                return $this->redirectToRoute('message');

            }

        }
        if ($type === 'facture' and $charger === 'oui') {

            $facture = $repoFacture->findOneBy(['user' => $this->getMaster(), 'id' => $id]);

            if (!$facture) {
                return $this->redirectToRoute('logout');
            }

            $docu = $repoDocuments->findOneBy(['user' => $this->getUser(), 'type' => 'facture', 'numero' => $id, 'etat' => 'no']);
            $decompte = $facture->getDecompte();
            $subject = 'FACTURE ' . $facture->getNumfacture() . ' ' . $facture->getClient()->getNomClient() . ' ' . $facture->getChantier()->getNomChantier();

            if ($facture->getType() === 'devis') {
                $devis = $facture->getDevis();
                $lignes = $repoLigne->findBy(['devis' => $devis]);

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

                // ON RECUPERE LES GROUPES
                $listegroupe = $repoGroupe->findBy(
                    ['devis' => $devis],
                    ['reference' => 'ASC']);

                $pdfOptions = new Options();
                $pdfOptions->setIsRemoteEnabled(true);
                // Instantiate Dompdf with our options
                $dompdf = new Dompdf($pdfOptions);

                $html = $this->renderView('content/attachedoc.html.twig', [
                    'chantier' => $devis->getChantier(),
                    'devis' => $devis,
                    'facture' => $facture,
                    'formes' => $formes,
                    'lignes' => $lignes,
                    'addi' => $addi,
                    'totalretenue' => $totalretenue,
                    'totaldecomptes' => $totaldecomptes,
                    'totalacomptes' => $totalacomptes,
                    'totalhtsolde' => $totalhtsolde,
                    'totaltva' => $totaltva,
                    'totalttcsolde' => number_format($totalttcsolde, 2, '.', ''),
                    'listGroup' => $listegroupe,
                    'type' => $type
                ]);

                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();
                $dompdf->stream($subject . '.pdf', [
                    'Attachment' => true
                ]);
                return new Response("The PDF file has been succesfully generated !");
            }
            if ($facture->getType() === 'decompte') {

                $devis = $decompte->getDevis();

                if ($docu) {
                    $this->delete_directory('pdf/' . $docu->getFolde());
                    $manager->remove($docu);
                    $manager->flush();
                }

                $lignes = $repoLigne->findBy(['decompte' => $decompte]);

                // ON RECUPERE LES GROUPES
                $listegroupe = $repoGroupe->findBy(
                    ['decompte' => $decompte],
                    ['reference' => 'ASC']);


                $pdfOptions = new Options();
                $pdfOptions->setIsRemoteEnabled(true);
                $dompdf = new Dompdf($pdfOptions);

                $repoHistorique = $this->doctrine->getRepository(Historique::class);
                $historiques = $repoHistorique->findBa($this->getMaster());

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
                    'clients' => $repoClient->GetAllUser($this->getMaster()),
                    'history' => $historiques
                ]);

                $dompdf->loadHtml($html);
                // (Optional) Setup the paper size and orientation
                $dompdf->setPaper('A4', 'portrait');
                // Render the HTML as PDF
                $dompdf->render();
                // Output the generated PDF to Browser (force download)
                $dompdf->stream($subject . '.pdf', [
                    'Attachment' => true
                ]);
            }
            if ($facture->getType() === 'acompte') {
                $devis = $facture->getAcompte()->getDevis();
                $lignes = $repoLigne->findBy(['devis' => $devis]);

                // ON RECUPERE LES GROUPES
                $listegroupe = $repoGroupe->findBy(
                    ['devis' => $devis],
                    ['reference' => 'ASC']);

                $pdfOptions = new Options();
                $pdfOptions->setIsRemoteEnabled(true);
                // Instantiate Dompdf with our options
                $dompdf = new Dompdf($pdfOptions);

                $repoHistorique = $this->doctrine->getRepository(Historique::class);
                $historiques = $repoHistorique->findBa($this->getMaster());

                $html = $this->renderView('content/attachedoc.html.twig', [
                    'chantier' => $devis->getChantier(),
                    'devis' => $devis,
                    'facture' => $facture,
                    'formes' => $formes,
                    'lignes' => $lignes,
                    'listGroup' => $listegroupe,
                    'type' => 'factureacompte',
                    'clients' => $repoClient->GetAllUser($this->getMaster()),
                    'history' => $historiques
                ]);

                $dompdf->loadHtml($html);
                // (Optional) Setup the paper size and orientation
                $dompdf->setPaper('A4', 'portrait');
                // Render the HTML as PDF
                $dompdf->render();
                // Output the generated PDF to Browser (force download)
                $dompdf->stream($subject . '.pdf', [
                    'Attachment' => true
                ]);
                return new Response("The PDF file has been succesfully generated !");
            }

        }
        if ($type === 'imprimfacture') {

            $facture = $repoFacture->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            if (!$facture) {
                return $this->redirectToRoute('logout');
            }

            $chantier = $facture->getChantier();
            $decompte = $facture->getDecompte();

            if ($facture->getType() === 'devis') {
                $devis = $facture->getDevis();
                $lignes = $repoLigne->findBy(['devis' => $devis]);

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
                        $totalretenue = $totalretenue + ($decom->getValeur() * floatval($devis->getGarantie()) / 100) + ($decom->getValeur() * floatval($devis->getFinition()) / 100) + ($decom->getValeur() * floatval($devis->getProrata()) / 100 + ($decom->getValeur() * floatval($devis->getTrc()) / 100));
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

                // ON RECUPERE LES GROUPES
                $listegroupe = $repoGroupe->findBy(
                    ['devis' => $devis],
                    ['reference' => 'ASC']);

                return $this->render('content/attachedoc.html.twig', [
                    'controller_name' => 'ImprimFactureController',
                    'title' => 'Devis - Mise en forme pour impression',
                    'chantier' => $chantier,
                    'devis' => $devis,
                    'facture' => $facture,
                    'formes' => $formes,
                    'lignes' => $lignes,
                    'addi' => $addi,
                    'totalretenue' => $totalretenue,
                    'totaldecomptes' => $totaldecomptes,
                    'totalacomptes' => $totalacomptes,
                    'totalhtsolde' => $totalhtsolde,
                    'totaltva' => $totaltva,
                    'totalttcsolde' => $totalttcsolde,
                    'listGroup' => $listegroupe,
                    'type' => 'facture'
                ]);
            }
            if ($facture->getType() === 'acompte') {

                $devis = $facture->getAcompte()->getDevis();
                $lignes = $repoLigne->findBy(['devis' => $devis]);
                $chantier = $devis->getChantier();

                // ON RECUPERE LES GROUPES
                $listegroupe = $repoGroupe->findBy(
                    ['facture' => $facture],
                    ['reference' => 'ASC']);


                return $this->render('content/attachedoc.html.twig', [
                    'controller_name' => 'ImprimFactureController',
                    'title' => 'Devis - Mise en forme pour impression',
                    'chantier' => $chantier,
                    'devis' => $devis,
                    'facture' => $facture,
                    'formes' => $formes,
                    'lignes' => $lignes,
                    'listGroup' => $listegroupe,
                    'type' => 'factureacompte'

                ]);
            }
            if ($facture->getType() === 'decompte') {

                $devis = $decompte->getDevis();
                $lignes = $repoLigne->findBy(['decompte' => $decompte]);
                $listegroupe = $repoGroupe->findBy(
                    ['decompte' => $decompte],
                    ['reference' => 'ASC']);

                $first = $repoDecompte->findOneBy(['devis' => $devis, 'rang' => "1"]);

                if ($first === $decompte) {
                    $allacomptes = 0;
                    foreach ($chantier->getFactures() as $fac) {
                        if ($fac->getAcompte() != null) {
                            if ($fac->getAcompte()->getDevis() == $decompte->getDevis()) {
                                if ($fac->getEtat() === "valide") {
                                    $allacomptes += $fac->getTotalht();
                                }
                            }
                        }
                    }
                    $pourcentacompte = ($allacomptes / $devis->getTotalht()) * 100;
                } else {
                    $allacomptes = 0;
                    foreach ($chantier->getFactures() as $fac) {
                        if ($fac->getAcompte() != null) {
                            if ($fac->getAcompte()->getDevis() == $decompte->getDevis()) {
                                if ($fac->getEtat() === "valide") {
                                    $allacomptes += $fac->getTotalht();
                                }
                            }
                        }
                    }
                    $pourcentacompte = ($allacomptes / $devis->getTotalht()) * 100;

                }

                return $this->render('content/attachedoc.html.twig', [
                    'controller_name' => 'ImprimFactureController',
                    'title' => 'Devis - Mise en forme pour impression',
                    'chantier' => $chantier,
                    'devis' => $devis,
                    'decompte' => $decompte,
                    'facture' => $facture,
                    'formes' => $formes,
                    'lignes' => $lignes,
                    'listGroup' => $listegroupe,
                    'pourcentacompte' => $pourcentacompte,
                    'type' => 'facturedecompte'
                ]);

            }
        }

        if ($type === 'caisse' and $charger === 'non') {

            $caisse = $repoCaisse->findOneBy(['user' => $this->getMaster(), 'id' => $id]);
            $caisses = $repoCaisse->findInerve($caisse->getIntervenant());

            if (!$caisse) {
                return $this->redirectToRoute('logout');
            }
            $docu = $repoDocuments->findOneBy(['user' => $this->getUser(), 'type' => 'caisse', 'numero' => $id, 'etat' => 'no']);

            $subject = 'BON DE CAISSE ' . $caisse->getNumcaisse() . ' ' . $caisse->getClient()->getNomClient() . ' ' . $caisse->getChantier()->getNomChantier();

            $document = new Documents();
            if (!$docu) {
                $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
                if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
                    throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
                }
                $document->setUser($this->getUser());
                $document->setNumero($caisse->getId());
                $document->setDonner($subject);
                $document->setType('caisse');
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
                'formes' => $formes,
                'chantier' => $caisse->getChantier(),
                'title' => 'Créer un bon de caisse | carlinbleu',
                'caisse' => $caisse,
                'caisses' => $caisses,
                'type' => $type
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
            return $this->redirectToRoute('message');
        }
        if ($type === 'caisse' and $charger === 'oui') {
            $caisse = $repoCaisse->findOneBy(['user' => $this->getMaster(), 'id' => $id]);
            $caisses = $repoCaisse->findInerve($caisse->getIntervenant());

            if (!$caisse) {
                return $this->redirectToRoute('logout');
            }

            $subject = 'BON DE CAISSE ' . $caisse->getNumcaisse() . ' ' . $caisse->getClient()->getNomClient() . ' ' . $caisse->getChantier()->getNomChantier();

            $pdfOptions = new Options();
            $pdfOptions->setIsRemoteEnabled(true);
            // Instantiate Dompdf with our options
            $dompdf = new Dompdf($pdfOptions);

            // Retrieve the HTML generated in our twig file
            $html = $this->renderView('content/attachedoc.html.twig', [
                'formes' => $formes,
                'chantier' => $caisse->getChantier(),
                'title' => 'Créer un bon de caisse | carlinbleu',
                'caisse' => $caisse,
                'caisses' => $caisses,
                'type' => $type
            ]);

            $dompdf->loadHtml($html);
            // Render the HTML as PDF
            // (Optional) Setup the paper size and orientation
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            // Output the generated PDF to Browser (force download)
            $dompdf->stream($subject . '.pdf', [
                'Attachment' => true
            ]);
            return new Response("The PDF file has been succesfully generated !");

        }
        if ($type === 'imprimcaisse') {
            // REFUSE L'ACCESS SI NON CONNECTÉ
            $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

            // LES REPOSITORIES
            $repoCaisse = $this->doctrine->getRepository(Caisse::class);

            // RECUPERE LE BON DE CAISSE ET L'USER
            $caisse = $repoCaisse->findOneBy(['user' => $this->getMaster(), 'id' => $id]);
            $caisses = $repoCaisse->findInerve($caisse->getIntervenant());

            return $this->render('content/attachedoc.html.twig', [
                'formes' => $formes,
                'controller_name' => 'ImprimCaisseController',
                'chantier' => $caisse->getChantier(),
                'title' => 'Créer un bon de caisse | carlinbleu',
                'caisse' => $caisse,
                'caisses' => $caisses,
                'type' => 'caisse'
            ]);
        }

        if ($type === 'bon' and $charger === 'non') {

            $bon = $repoBon->findOneBy(['user' => $this->getMaster(), 'id' => $id]);
            if (!$bon) {
                return $this->redirectToRoute('logout');
            }

            $docu = $repoDocuments->findOneBy(['user' => $this->getUser(), 'type' => 'bon',
                'numero' => $id, 'etat' => 'no']);

            if ($docu) {
                $this->delete_directory('pdf/' . $docu->getFolde());
                $manager->remove($docu);
                $manager->flush();
            }

            $lignes = $repoLigne->findBy(['bon' => $bon]);

            $listegroupe = $repoGroupe->findBy(
                ['bon' => $bon],
                ['groupe' => 'ASC']);

            if ($bon->getType() === 'non') {
                $subject = 'BON DE RETOUR DE COMMANDE ' . $bon->getNumbon() . ' ' . $bon->getClient()->getNomClient() . ' ' . $bon->getChantier()->getNomChantier();
            } else {
                $subject = 'BON DE COMMANDE ' . $bon->getNumbon() . ' ' . $bon->getClient()->getNomClient() . ' ' . $bon->getChantier()->getNomChantier();
            }


            $document = new Documents();
            if (!$docu) {
                $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);

                if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
                    throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
                }
                $document->setUser($this->getUser());
                $document->setNumero($bon->getId());
                $document->setDonner($subject);
                $document->setType('bon');
                $document->setEtat('no');
                $document->setFolde($dire);
                $manager->persist($document);
                $manager->flush();
            }

            $pdfOptions = new Options();
            $pdfOptions->setIsRemoteEnabled(true);
            $dompdf = new Dompdf($pdfOptions);
            $html = $this->renderView('content/attachedoc.html.twig', [
                'chantier' => $bon->getChantier(),
                'bon' => $bon,
                'formes' => $formes,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'type' => $type
            ]);

            // Load HTML to Dompdf
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            $output = $dompdf->output();
            $publicDirectory = 'pdf/' . $document->getFolde() . '/';
            $pdfFilepath = $publicDirectory . $subject . '.pdf';
            file_put_contents($pdfFilepath, $output);
            return $this->redirectToRoute('message');
        }
        if ($type === 'bon' and $charger === 'oui') {
            $bon = $repoBon->findOneBy(['user' => $this->getMaster(), 'id' => $id]);
            if (!$bon) {
                return $this->redirectToRoute('logout');
            }

            $docu = $repoDocuments->findOneBy(['user' => $this->getUser(), 'type' => 'bon',
                'numero' => $id, 'etat' => 'no']);

            if ($docu) {
                $this->delete_directory('pdf/' . $docu->getFolde());
                $manager->remove($docu);
                $manager->flush();
            }

            $lignes = $repoLigne->findBy(['bon' => $bon]);

            $listegroupe = $repoGroupe->findBy(
                ['bon' => $bon],
                ['groupe' => 'ASC']);

            if ($bon->getType() === 'non') {
                $subject = 'BON DE RETOUR DE COMMANDE ' . $bon->getNumbon() . ' ' . $bon->getClient()->getNomClient() . ' ' . $bon->getChantier()->getNomChantier();
            } else {
                $subject = 'BON DE COMMANDE ' . $bon->getNumbon() . ' ' . $bon->getClient()->getNomClient() . ' ' . $bon->getChantier()->getNomChantier();
            }


            $pdfOptions = new Options();
            $pdfOptions->setIsRemoteEnabled(true);
            $dompdf = new Dompdf($pdfOptions);

            $repoHistorique = $this->doctrine->getRepository(Historique::class);
            $historiques = $repoHistorique->findBa($this->getMaster());

            $html = $this->renderView('content/attachedoc.html.twig', [
                'chantier' => $bon->getChantier(),
                'bon' => $bon,
                'formes' => $formes,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'type' => $type,
                'clients' => $repoClient->GetAllUser($this->getMaster()),
                'history' => $historiques
            ]);

            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            $dompdf->stream($subject . '.pdf', [
                'Attachment' => true
            ]);
            return new Response("The PDF file has been succesfully generated !");
        }
        if ($type === 'imprimbon') {
            $bon = $repoBon->findOneBy(['user' => $this->getMaster(), 'id' => $id]);
            if (!$bon) {
                return $this->redirectToRoute('logout');
            }

            $lignes = $repoLigne->findBy(['bon' => $bon]);
            $listegroupe = $repoGroupe->findBy(
                ['bon' => $bon],
                ['groupe' => 'ASC']);

            return $this->render('content/attachedoc.html.twig', [
                'controller_name' => 'ImprimBonController',
                'title' => 'Bon de commande - Mise en forme pour impression',
                'chantier' => $bon->getChantier(),
                'bon' => $bon,
                'lignes' => $lignes,
                'listGroup' => $listegroupe,
                'formes' => $formes,
                'type' => 'bon'
            ]);
        }


        return null;
    }


}
