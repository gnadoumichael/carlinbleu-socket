<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Client;
use App\Entity\Decompte;
use App\Entity\Devis;
use App\Entity\Facture;
use App\Entity\Forme;
use App\Entity\Groupe;
use App\Entity\Ligne;
use App\Entity\Chantier;
use App\Entity\Livraison;
use App\Entity\User;
use App\Form\LigneType;
use App\Form\LignType;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;


#[Route(path: '/crm/ligne')]
class LigneController extends AbstractController
{


    private FormFactoryInterface $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory) {
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
    public function ajourDevis(Devis $devis)
    {
        $manager = $this->doctrine->getManager();
        $th = 0;
        $rem = 0;
        $vtva = 0;

        // CALCUL DES RESULTATS
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
        } else {
            foreach ($devis->getLignes() as $lig) {
                if ($devis->getAarem() === 'oui') {
                    $rem = $rem + ((($lig->getQuantite() * $lig->getPu()) * $lig->getRemise()) / 100);
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

        $devis->setTotalttc($ttc);
        $devis->setTotalht($th);
        $devis->setVtva($vtva);
        $devis->setVremise($rem);

        $manager->persist($devis);
        $manager->flush();

    }
    public function ajourBon(Bon $bon)
    {
        $manager = $this->doctrine->getManager();
        $th = 0;
        $rem = 0;
        $ttc = 0;
        $vtva = 0;

        foreach ($bon->getLignes() as $lig) {
            if ($bon->getAarem() === 'oui') {
                $th = (($lig->getQuantite() * $lig->getPu()) * (((100) - $lig->getRemise()) / 100)) + $th;
                $vtva = ($th * $bon->getTva()) / 100;
                $rem = (($lig->getQuantite() * $lig->getPu()) * (($lig->getRemise()) / 100)) + $rem;
                $ttc = $th + $vtva;
            } else {
                $th = ($lig->getQuantite() * $lig->getPu()) + $th;
                if($bon->getPtva() === "non"){
                    $vtva = 0;
                }else{
                    $vtva = ($th * $bon->getTva()) / 100;
                }
                $ttc = $th + $vtva;
            }
        }

        $ttccaisse = 0;
        foreach ($bon->getCaisses() as $ca) {
            if ($ca->getEtat() === 'valide') {
                $ttccaisse = $ttccaisse + $ca->getMontant();
            }
        }



        $bon->setTotalht($th);
        $bon->setTotalttc($ttc);
        $bon->setVremise($rem);
        $bon->setVtva($vtva);
        $manager->persist($bon);
        $manager->flush();
        $bon->setRecu($ttccaisse);
        $bon->setReste($bon->getTotalttc() - $ttccaisse);
        $manager->persist($bon);
        $manager->flush();
    }
    public function ajourFacture(Facture $facture)
    {
        $manager = $this->doctrine->getManager();
        $th = 0;
        $ttc = 0;
        $vtva = 0;

        foreach ($facture->getLignes() as $lig) {
            $th = ($lig->getQuantite() * $lig->getPu()) + $th;
        }
        $facture->setTotalht($th);

        if ($facture->getPtva() === 'oui') {
            $vtva = ($th * $facture->getTva()) / 100;
            $ttc = $th + $vtva;
        }else{
            $ttc = $th;
        }


        $facture->setTotalttc($ttc);
        $facture->setVtva($vtva);

        $manager->persist($facture);
        $manager->flush();
    }
    public function ajourDecompte(Decompte $decompte)
    {
        $repoDecompte = $this->doctrine->getRepository(Decompte::class);
        $manager = $this->doctrine->getManager();

        $devis = $decompte->getDevis();
        $lignes = $decompte->getLignes();
        $chantier = $decompte->getChantier();
        $thavance = 0;
        $vava = 0;


        if ($devis->getTotalht() > 0) {

            foreach ($lignes as $lig) {
                if ($devis->getAarem() === 'oui') {
                    $thavance += (($lig->getQuantite() * $lig->getPu() - (($lig->getQuantite() * $lig->getPu() * $lig->getRemise()) / 100)) * $lig->getAvancement()) / 100;
                } else {
                    $thavance += (((float)$lig->getQuantite() * (float)$lig->getPu() * (float)$lig->getAvancement()) / 100);
                }
            }

            if ($devis->getAarem() === 'tht') {
                $thavance -= (($thavance * $devis->getRemtht()) / 100);
            }

            $decompte->setTotalht($devis->getTotalht());
            $pour = (($thavance / $devis->getTotalht()) * 100);
            $decompte->setAvancement($pour);
            $decompte->setValeur($thavance);
            $manager->persist($decompte);
            $manager->flush();

            $ii = 1;

            foreach ($devis->getDecomptes() as $decom) {
                if ($ii < $decompte->getRang()) {
                    $vava += $decom->getApayer();
                    $ii++;
                }
            }

            $first = $repoDecompte->findOneBy(['devis' => $devis, 'rang' => "1"]);
            $acompter = 0;
            if ($first === $decompte) {
                $isfirst = 1;
                if (count($devis->getAcomptes()) === 1 ) {
                    if($decompte->getDeduction() === "partielle"){
                        $acompter = ($decompte->getValeur() * $devis->getAcomrage()) / 100;
                    }
                    if($decompte->getDeduction() === "complete"){
                        $acompter = ($devis->getTotalht() * $devis->getAcomrage()) / 100;
                    }
                    if($decompte->getDeduction() === "aucune"){
                        $acompter = 0;
                    }
                } else {
                    $allacomptes = 0;
                    foreach ($chantier->getFactures() as $fac) {
                        if (($fac->getAcompte() !== null) && $fac->getAcompte()->getDevis() === $decompte->getDevis()) {
                            $allacomptes += $fac->getTotalttc();
                        }
                    }
                    $pourcentacompte = ($allacomptes / $devis->getTotalttc()) * 100;

                    if($decompte->getDeduction() === "partielle"){
                        $acompter = ($decompte->getValeur() * $pourcentacompte) / 100;
                    }
                    if($decompte->getDeduction() === "complete"){
                        $acompter = ($devis->getTotalht() * $pourcentacompte) / 100;
                    }
                    if($decompte->getDeduction() === "aucune"){
                        $acompter = 0;
                    }
                }

                $garantie = ((float)$decompte->getValeur() * (float)$devis->getGarantie()) / 100;
                $trc = ((float)$decompte->getValeur() * (float)$devis->getTrc()) / 100;
                $finition = ((float)$decompte->getValeur() * (float)$devis->getFinition()) / 100;
                $prorata = ((float)$decompte->getValeur() * (float)$devis->getProrata()) / 100;
                $apayer = (float)$decompte->getValeur() - ($acompter + $garantie + $prorata + $vava + $finition);

            } else {
                $isfirst = 2;
                if($decompte->getDeduction() === "partielle"){
                    $acompter = ($decompte->getValeur() * $devis->getAcomrage()) / 100;
                }
                if($decompte->getDeduction() === "complete"){
                    $acompter = ($devis->getTotalht() * $devis->getAcomrage()) / 100;
                }
                if($decompte->getDeduction() === "aucune"){
                    $acompter = 0;
                }

                $garantie = ($decompte->getValeur() * $devis->getGarantie()) / 100;
                $finition = ((float)$decompte->getValeur() * (float)$devis->getFinition()) / 100;
                $trc = ((float)$decompte->getValeur() * (float)$devis->getTrc()) / 100;
                $prorata = ($decompte->getValeur() * $devis->getProrata()) / 100;
                $apayer = $decompte->getValeur() - ($acompter + $garantie + $prorata + $vava + $finition);

            }

            $pour = ($thavance / $devis->getTotalht()) * 100;
            $decompte->setAvancement($pour);
            $decompte->setCountdecompe($vava);

            if($devis->getPtva() === "oui" || $devis->getPtva() === 'susp'){
                $decompte->setTtc($apayer + (($apayer * $devis->getTva()/100)));
            }else{
                $decompte->setTtc($apayer);
            }

            $decompte->setApayer($apayer);
            $decompte->setValeur($thavance);
            $manager->persist($decompte);
            $manager->flush();

        } else {
            $devis->removeDecompte($decompte);
            $manager->flush();
            $facture = $decompte->getFacture();
            $manager->remove($facture);
            $manager->flush();
            $manager->remove($decompte);
            $manager->flush();
        }
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
                                $livrer = $lign->getQuantite() + $livrer;
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

    #[Route(path: '/add/{type}/{id}', name: 'addligne')]
    public function addLigne(int $id, string $type, Request $request)
    {
        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();

        if ($type === 'devis') {
            $repoDevis = $this->doctrine->getRepository(Devis::class);

            $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

            if (!$devis || $devis->getEtat() === "valide") {
                return $this->json(['result' => 'Erreur'], 404);
            }

            $ligne = new Ligne();
            $ligne->setDevis($devis);
            $ligne->setChantier($devis->getChantier());
            $ligne->setUser($this->getMaster());
            $json = $this->getJson($request);
            $forme = $this->formFactory->createNamed('', LigneType::class, $ligne, [
                'devis' => $devis
            ]);
            $forme->submit($json);
            $forme->handleRequest($request);
            if ($forme->isSubmitted() && $forme->isValid()) {
                $ligne->setType(1);
                $ligne->setAvancement(0);
                if ($devis->getAarem() === 'oui') {
                    $ligne->setRemise($json['remise']);
                } else {
                    $ligne->setRemise(0);
                }
                $manager->persist($ligne);
                $manager->flush();
                $manager->persist($devis);
                $manager->flush();
                $this->ajourDevis($devis);
                return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
            }
            return $this->json(['result' => 'echec'], 404);
        }
        if ($type === 'bon') {
            $repoBon = $this->doctrine->getRepository(Bon::class);
            $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

            if (!$bon) {
                return $this->json(['result' => 'Erreur'], 404);
            }

            $ligne = new Ligne();
            $ligne->setBon($bon);
            $ligne->setChantier($bon->getChantier());
            $ligne->setUser($this->getMaster());
            $ligne->setRemise(0);
            $json = $this->getJson($request);
            $forme = $this->formFactory->createNamed('', LigneType::class, $ligne, [
                'bon' => $bon
            ]);
            $forme->submit($json);
            $forme->handleRequest($request);
            if ($forme->isSubmitted() && $forme->isValid()) {
                if ($bon->getAarem() === 'oui') {
                    $ligne->setRemise($json['remise']);
                }
                $ligne->setType(2);
                if($bon->getType() == "prepa"){
                    $ligne->setReste($ligne->getQuantite());
                    $ligne->setLivrer(0);
                }
                $manager->persist($ligne);
                $manager->flush();
                $this->ajourBon($bon);
                return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
            }
        }
        if ($type === 'livraison') {
            $repoLivraison = $this->doctrine->getRepository(Livraison::class);
            $livre = $repoLivraison->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            if (!$livre) {
                return $this->json(['result' => 'Erreur'], 404);
            }
            $ligne = new Ligne();
            $ligne->setLivraison($bon);
            $ligne->setChantier($bon->getChantier());
            $ligne->setUser($this->getMaster());
            $json = $this->getJson($request);
            $forme = $this->formFactory->createNamed('', LigneType::class, $ligne, [
                'livraison' => $livre
            ]);
            $forme->submit($json);
            $forme->handleRequest($request);
            if ($forme->isSubmitted() && $forme->isValid()) {
                $ligne->setRemise(0);
                $ligne->setType(5);
                $manager->persist($ligne);
                $manager->flush();
                return $this->json(['result' => 'success'], 201);
            }
        }
        if ($type === 'caisse') {
            $repoCaisse = $this->doctrine->getRepository(Caisse::class);
            $caisse = $repoCaisse->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            if (!$caisse) {
                return $this->json(['result' => 'Erreur'], 404);
            }

            $ligne = new Ligne();
            $ligne->setChantier($caisse->getChantier());
            $ligne->setCaisse($caisse);
            $ligne->setUnite('rien');
            $ligne->setQuantite(0);
            $ligne->setRemise(0);
            $ligne->setUser($this->getMaster());
            $json = $this->getJson($request);
            $forme = $this->formFactory->createNamed('', LigneType::class, $ligne, [
                'caisse' => $caisse
            ]);
            $forme->submit($json);
            $forme->handleRequest($request);
            if ($forme->isSubmitted() && $forme->isValid()) {
                $ligne->setType(3);
                $manager->persist($ligne);
                $manager->flush();
                return $this->json(['result' => 'success'], 201);
            }
        }
        if ($type === 'facture') {
            $repoFacture = $this->doctrine->getRepository(Facture::class);
            $facture = $repoFacture->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            if (!$facture) {
                return $this->json(['result' => 'Erreur'], 404);
            }

            $ligne = new Ligne();
            $ligne->setFacture($facture);
            $ligne->setRemise(0);
            $ligne->setChantier($facture->getChantier());
            $ligne->setUser($this->getMaster());
            $json = $this->getJson($request);
            $forme = $this->formFactory->createNamed('', LigneType::class, $ligne, [
                'facture' => $facture
            ]);
            $forme->submit($json);
            $forme->handleRequest($request);
            if ($forme->isSubmitted() && $forme->isValid()) {
                $ligne->setType(4);
                $manager->persist($ligne);
                $manager->flush();
                $this->ajourFacture($facture);
                return $this->json(['result' => 'success'], 201);
            }
            return $this->json(['result' => 'echec'], 404);
        }
        return $this->json(['result' => 'Error'], 404);

    }

    #[Route(path: '/updater/{a}/{b}', name: 'updaterligne')]
    public function updaterLigne($a, $b, Request $request)
    {
        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();

        $repoLigne = $this->doctrine->getRepository(Ligne::class);

        $lig = $repoLigne->findOneBy(['id' => $a, 'user' => $this->getMaster()]);
        $lig->setAvancement($b);
        $manager->persist($lig);
        $manager->flush();

        $decompte = $lig->getDecompte();
        $data[] = ['count' => 1];

        $thavance = 0;

        if ($lig->getDecompte()->getDevis()->getAbasetva() === 'non') {
            if ($lig->getDecompte()->getDevis()->getAarem() === 'oui') {
                $th = $lig->getQuantite() * $lig->getPu() * ((100 - $lig->getRemise()) / 100);
                $thavance += (($th * $lig->getAvancement()) / 100);
            } else {
                $th = $lig->getQuantite() * $lig->getPu();
                $thavance = (($th * $lig->getAvancement()) / 100);
            }

        } else {

            if ($lig->getDecompte()->getDevis()->getAarem() === 'oui') {
                $th = $lig->getQuantite() * $lig->getPu() * ((100 - $lig->getRemise()) / 100);
                $thavance = (($th * $lig->getAvancement()) / 100);
            } else {
                $th = $lig->getQuantite() * $lig->getPu();
                $thavance = (($th * $lig->getAvancement()) / 100);
            }

        }

        $data[] = [
            'id' => $lig->getId(),
            'thavance' => $thavance,
            'decompte' => $lig->getDecompte()->getId(),
        ];


        $decompte->setTotalht($th);
        $pour = ($thavance / $th) * 100;
        $decompte->setAvancement($pour);
        $decompte->setValeur($thavance);
        $manager->persist($decompte);
        $manager->flush();

        $po = json_encode($data);
        return $this->json(['result' => $po], 200);

    }

    #[Route(path: '/updatere/{a}/{b}', name: 'updaterlignee')]
    public function updatereLigne($a, $b, Request $request)
    {
        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();

        $repoLigne = $this->doctrine->getRepository(Ligne::class);

        $lig = $repoLigne->findOneBy(['id' => $a, 'user' => $this->getMaster()]);
        $devis = $lig->getDevis();
        $decompte = $lig->getDecompte();
        $lig->setAvancement($b);
        $manager->persist($lig);
        $manager->flush();

        $lignes = $lig->getDevis->getLignes();

        $i = 0;
        $data = [];

        foreach ($lignes as $ligne) {
            $i = $i + 1;
        }

        $data[] = ['count' => $i];

        foreach ($lignes as $lig) {
            $th = 0;
            $thavance = 0;

            if ($lig->getDecompte()->getDevis()->getAbasetva() === 'non') {
                if ($lig->getDecompte()->getDevis()->getAarem() === 'oui') {
                    $th += $lig->getQuantite() * $lig->getPu() * ((100 - $lig->getRemise()) / 100);
                    $thavance += (($th * $lig->getAvancement()) / 100);
                } else {
                    $th = $lig->getQuantite() * $lig->getPu();
                    $thavance = (($th * $lig->getAvancement()) / 100);
                }

            } else {

                if ($lig->getDecompte()->getDevis()->getAarem() === 'oui') {
                    $th = $lig->getQuantite() * $lig->getPu() * ((100 - $lig->getRemise()) / 100);
                    $thavance = (($th * $lig->getAvancement()) / 100);
                } else {
                    $th += $lig->getQuantite() * $lig->getPu();
                    $thavance += (($th * $lig->getAvancement()) / 100);
                }

            }

            $data[] = [
                'id' => $lig->getId(),
                'aazone' => $devis->getZone(),
                'zone' => $lig->getZone(),
                'aaremise' => $devis->getAarem(),
                'remise' => $lig->getRemise(),
                'ref' => $lig->getReference(),
                'designation' => $lig->getDesignation(),
                'th' => $th,
                'thavance' => $thavance,
                'avance' => $lig->getAvancement(),
                'decompte' => $lig->getDecompte()->getId(),
            ];
        }

        $decompte->setTotalht($th);
        $pour = ($thavance / $th) * 100;
        $decompte->setAvancement($pour);
        $decompte->setValeur($thavance);
        $manager->persist($decompte);
        $manager->flush();
        $po = json_encode($data);


        return $this->json(['result' => $po], 200);

    }

    #[Route(path: '/updateres/{id}', name: 'updaterlignees')]
    public function updatereLignes($id, Request $request)
    {
        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();

        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoDecompte = $this->doctrine->getRepository(Decompte::class);

        $decompte = $repoDecompte->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $devis = $decompte->getDevis();
        $json = $this->getJson($request);
        foreach ($decompte->getLignes() as $lligne) {
            $idd = 'avancisse' . $lligne->getId();
            $lig = $repoLigne->findOneBy(['id' => $lligne->getId(), 'user' => $this->getMaster()]);
            $lig->setAvancement($json[$idd]);
            $manager->persist($lig);
            $manager->flush();


            $lignes = $decompte->getLignes();

            $i = 0;
            $data = [];

            foreach ($lignes as $ligne) {
                $i = $i + 1;
            }

            $data[] = ['count' => $i];

            foreach ($lignes as $lig) {
                $th = 0;
                $thavance = 0;

                if ($devis->getAbasetva() === 'non') {
                    if ($devis->getAarem() === 'oui') {
                        $th += $lig->getQuantite() * $lig->getPu() - ($lig->getQuantite() * $lig->getPu() * ($lig->getRemise()) / 100);
                        $thavance += (($th * $lig->getAvancement()) / 100);
                    } else {
                        $th = $lig->getQuantite() * $lig->getPu();
                        $thavance = (($th * $lig->getAvancement()) / 100);
                    }

                } else {

                    if ($devis->getAarem() === 'oui') {
                        $th += $lig->getQuantite() * $lig->getPu() - (($lig->getQuantite() * $lig->getPu()) * ($lig->getRemise() / 100));
                        $thavance = (($th * $lig->getAvancement()) / 100);
                    } else {
                        $th += $lig->getQuantite() * $lig->getPu();
                        $thavance += (($th * $lig->getAvancement()) / 100);
                    }

                }
            }

            $decompte->setTotalht($th);
            $pour = ($thavance / $th) * 100;
            $decompte->setAvancement($pour);
            $decompte->setValeur($thavance);
            $manager->persist($decompte);
            $manager->flush();

        }
        return $this->json(['result' => 'success'], 200);
    }

    #[Route(path: '/getter/{id}', name: 'searchLigne', requirements: ['id' => '\d+'])]
    public function search($id)
    {
        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();

        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $lig = $repoLigne->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $decompte = $lig->getDecompte();
        $devis = $decompte->getDevis();

        $th = 0;
        $rem = 0;
        $thavance = 0;

        if ($devis->getAbasetva() === 'non') {
            if ($devis->getAarem() === 'oui') {
                $vtva = ($th * $devis->getTva()) / 100;
                $th += $lig->getQuantite() * $lig->getPu() * ((100 - $lig->getRemise()) / 100);
                $rem += $lig->getQuantite() * $lig->getPu() * ($lig->getRemise() / 100);
                $ttc = $th + $vtva;
                $thavance += (($th * $lig->getAvancement()) / 100);
            } else {
                $th += $lig->getQuantite() * $lig->getPu();
                $vtva = ($th * $devis->getTva()) / 100;
                $thavance += (($th * $lig->getAvancement()) / 100);
                $ttc = $th + $vtva;
            }

        } else {

            if ($devis->getAarem() === 'oui') {
                $rem = ($lig->getQuantite() * $lig->getPu() * $lig->getRemise()) / 100;
                $th += $lig->getQuantite() * $lig->getPu() * ((100 - $lig->getRemise()) / 100);
                $thavance += (($th * $lig->getAvancement()) / 100);
            } else {
                $th += $lig->getQuantite() * $lig->getPu();
                $thavance += (($th * $lig->getAvancement()) / 100);
            }

        }
        $data = [];
        $data[] = ['count' => 1];
        $data[] = [
            'refe' => $lig->getReference(),
            'designation' => $lig->getDesignation(),
            'zone' => $lig->getZone(),
            'remise' => $lig->getRemise(),
            'th' => $th,
            'avance' => $lig->getAvancement(),
            'valeur' => $thavance,
            'id' => $lig->getId(),
        ];

        $po = json_encode($data);
        $decompte->setTotalht($th);
        $pour = ($thavance / $th) * 100;
        $decompte->setAvancement($pour);
        $decompte->setValeur($thavance);
        $manager->persist($decompte);
        $manager->flush();

        return $this->json(['result' => $po], 200);
    }

    #[Route(path: '/choisir/{type}/{id}', name: 'choiligne', methods: ['POST'])]
    public function choisir($id, $type, Request $request)
    {
        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();
        if ($type === 'devis') {
            $repoDevis = $this->doctrine->getRepository(Devis::class);
            $repoGroupe = $this->doctrine->getRepository(Groupe::class);
            $repoArticle = $this->doctrine->getRepository(Article::class);

            $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            if (!$devis || $devis->getEtat() === "valide") {
                return $this->json(['result' => 'Erreur'], 404);
            }

            $ligne = new Ligne();
            $ligne->setDevis($devis);
            $ligne->setChantier($devis->getChantier());

            $ligne->setUser($this->getMaster());
            $json = $this->getJson($request);
            $formez = $this->formFactory->createNamed('', LignType::class, $ligne, [
                'devis' => $devis,
                'master' => $this->getMaster()
            ]);
            $formez->submit($json);
            $formez->handleRequest($request);
            if ($formez->isSubmitted()) {
                $artik = $repoArticle->findOneBy(['id' => $json['article'], 'user' => $this->getMaster()]);
                $grou = $repoGroupe->findOneBy(['id' => $json['groupe'], 'devis' => $devis]);
                $lignez = new Ligne();
                $lignez->setDesignation($artik->getDesignation());
                $lignez->setDevis($devis);
                $lignez->setUnite($artik->getUnite());
                $lignez->setQuantite($json['quantite']);
                $lignez->setPu($artik->getPu());
                $lignez->setUser($this->getMaster());
                $lignez->setReference($artik->getReference());
                $lignez->setAvancement(0);
                $lignez->setChantier($devis->getChantier());
                $lignez->setType(1);
                if ($devis->getAarem() === 'oui') {
                    $lignez->setRemise($json['remise']);
                } else {
                    $lignez->setRemise(0);
                }
                $lignez->setArticle($artik);
                if ($devis->getZone() === 'oui') {
                    $lignez->setZone($json['zone']);
                }
                $lignez->setGroupe($grou);
                $manager->persist($lignez);
                $manager->flush();
                $this->ajourDevis($devis);
            }
            return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);

        }
        if ($type === 'bon') {
            $repoBon = $this->doctrine->getRepository(Bon::class);
            $repoGroupe = $this->doctrine->getRepository(Groupe::class);
            $repoArticle = $this->doctrine->getRepository(Article::class);

            $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            if (!$bon) {
                return $this->json(['result' => 'Erreur'], 404);
            }

            $ligne = new Ligne();
            $ligne->setBon($bon);
            $ligne->setChantier($bon->getChantier());

            $ligne->setUser($this->getMaster());
            $json = $this->getJson($request);
            $formez = $this->formFactory->createNamed('', LignType::class, $ligne, [
                'bon' => $bon,
                'master' => $this->getMaster()
            ]);
            $formez->submit($json);
            $formez->handleRequest($request);
            if ($formez->isSubmitted()) {
                $artik = $repoArticle->findOneBy(['id' => $json['article'], 'user' => $this->getMaster()]);
                $grou = $repoGroupe->findOneBy(['id' => $json['groupe'], 'bon' => $bon]);
                $lignez = new Ligne();
                $lignez->setDesignation($artik->getDesignation());
                $lignez->setBon($bon);
                $lignez->setUnite($artik->getUnite());
                $lignez->setQuantite($json['quantite']);
                $lignez->setPu($artik->getPu());
                $lignez->setUser($this->getMaster());
                $lignez->setReference($artik->getReference());
                $lignez->setChantier($bon->getChantier());
                $lignez->setType(2);
                if ($bon->getAarem() === 'oui') {
                    $lignez->setRemise($json['remise']);
                } else {
                    $lignez->setRemise(0);
                }
                $lignez->setArticle($artik);
                $lignez->setGroupe($grou);
                if($bon->getType() == "prepa"){
                    $lignez->setReste($json['quantite']);
                    $lignez->setLivrer(0);
                }
                $manager->persist($lignez);
                $manager->flush();
            }
            $this->ajourBon($bon);
            $this->ajourBonLigne($bon);
            return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
        }
        if ($type === 'livraison') {
            $repoLivraison = $this->doctrine->getRepository(Livraison::class);
            $repoArticle = $this->doctrine->getRepository(Article::class);

            $livraison = $repoLivraison->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            if (!$livraison) {
                return $this->json(['result' => 'Erreur'], 404);
            }

            $ligne = new Ligne();
            $ligne->setLivraison($livraison);
            $ligne->setChantier($livraison->getChantier());

            $ligne->setUser($this->getMaster());
            $json = $this->getJson($request);
            $formez = $this->formFactory->createNamed('', LignType::class, $ligne, [
                'livraison' => $livraison,
                'master' => $this->getMaster()
            ]);
            $formez->submit($json);
            $formez->handleRequest($request);
            if ($formez->isSubmitted()) {
                $artik = $repoArticle->findOneBy(['id' => $json['article'], 'user' => $this->getMaster()]);
                $lignez = new Ligne();
                $lignez->setDesignation($artik->getDesignation());
                $lignez->setLivraison($livraison);
                $lignez->setUnite($artik->getUnite());
                $lignez->setQuantite($json['quantite']);
                $lignez->setPu($artik->getPu());
                $lignez->setUser($this->getMaster());
                $lignez->setReference($artik->getReference());
                $lignez->setChantier($livraison->getChantier());
                $lignez->setType(5);
                $lignez->setRemise(0);
                $lignez->setArticle($artik);
                $manager->persist($lignez);
                $manager->flush();
            }
            return $this->json(['result' => 'Erreur'], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/update/{type}/{idligne}/{id}', name: 'updateligne')]
    public function updateLigne($id, $idligne, $type, Request $request)
    {
        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();

        if ($type === 'devis') {
            $repoDevis = $this->doctrine->getRepository(Devis::class);
            $repoLigne = $this->doctrine->getRepository(Ligne::class);

            $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            if (!$devis || $devis->getEtat() === "valide") {
                return $this->json(['result' => 'Erreur'], 404);
            }

            $ligne = $repoLigne->findOneBy(['id' => $idligne, 'user' => $this->getMaster()]);
            if (!$ligne) {
                if (!$ligne) {
                    return $this->json(['result' => 'Erreur'], 404);
                }
            }

            $json = $this->getJson($request);
            $forme = $this->formFactory->createNamed('', LigneType::class, $ligne, [
                'devis' => $devis
            ]);
            $forme->submit($json);
            $forme->handleRequest($request);
            if ($forme->isSubmitted() && $forme->isValid()) {
                $manager->persist($ligne);
                $manager->flush();
                $this->ajourDevis($devis);
                return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
            }
        }
        if ($type === 'bon') {
            $repoBon = $this->doctrine->getRepository(Bon::class);
            $repoLigne = $this->doctrine->getRepository(Ligne::class);

            $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            if (!$bon) {
                return $this->json(['result' => 'Erreur'], 404);
            }

            $lign = $repoLigne->findOneBy(['id' => $idligne, 'user' => $this->getMaster()]);
                if (!$lign) {
                    return $this->json(['result' => 'Erreur'], 404);
                }

            $json = $this->getJson($request);
            $forme = $this->formFactory->createNamed('', LigneType::class, $lign, [
                'bon' => $bon
            ]);
            $forme->submit($json);
            $forme->handleRequest($request);
            if ($forme->isSubmitted() && $forme->isValid()) {
                $manager->persist($lign);
                $manager->flush();
                $this->ajourBon($bon);
                return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
            }
        }
        if ($type === 'livraison') {
            $repoLivraison = $this->doctrine->getRepository(Livraison::class);
            $repoLigne = $this->doctrine->getRepository(Ligne::class);

            $livre = $repoLivraison->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            if (!$livre) {
                return $this->json(['result' => 'Erreur'], 404);
            }

            $lign = $repoLigne->findOneBy(['id' => $idligne, 'user' => $this->getMaster()]);
            if (!$lign) {
                return $this->json(['result' => 'Erreur'], 404);
            }

            $json = $this->getJson($request);
            $forme = $this->formFactory->createNamed('', LigneType::class, $lign, [
                'livraison' => $livre
            ]);
            $forme->submit($json);
            $forme->handleRequest($request);
            if ($forme->isSubmitted() && $forme->isValid()) {
                $manager->persist($lign);
                $manager->flush();
                return $this->json(['result' => 'success'], 200);
            }
        }
        if ($type === 'caisse') {
            $repoCaisse = $this->doctrine->getRepository(Caisse::class);
            $repoLigne = $this->doctrine->getRepository(Ligne::class);

            $caisse = $repoCaisse->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            if (!$caisse) {
                if (!$caisse) {
                    return $this->json(['result' => 'Erreur1'], 404);
                }
            }

            $lign = $repoLigne->findOneBy(['id' => $idligne, 'user' => $this->getMaster()]);
            {
                if (!$lign) {
                    return $this->json(['result' => 'Erreur2'], 404);
                }
            }

            $json = $this->getJson($request);
            $forme = $this->formFactory->createNamed('', LigneType::class, $lign, [
                'caisse' => $caisse
            ]);
            $forme->submit($json);
            $forme->handleRequest($request);
            if ($forme->isSubmitted() && $forme->isValid()) {
                $manager->persist($lign);
                $manager->flush();
                return $this->json(['result' => 'success'], 200);
            }
        }
        if ($type === 'facture') {

            $repoFacture = $this->doctrine->getRepository(Facture::class);
            $repoLigne = $this->doctrine->getRepository(Ligne::class);

            $facture = $repoFacture->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            if (!$facture) {
                return $this->json(['result' => 'Erreur'], 404);
            }

            $ligne = $repoLigne->findOneBy(['id' => $idligne, 'user' => $this->getMaster()]);
            if (!$ligne) {
                if (!$ligne) {
                    return $this->json(['result' => 'Erreur'], 404);
                }
            }

            $json = $this->getJson($request);
            $forme = $this->formFactory->createNamed('', LigneType::class, $ligne, [
                'facture' => $facture
            ]);
            $forme->submit($json);
            $forme->handleRequest($request);
            if ($forme->isSubmitted() && $forme->isValid()) {
                $manager->persist($ligne);
                $manager->flush();
                $this->ajourFacture($facture);
                return $this->json(['result' => 'success'], 200);
            }
        }


        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/upd/{doc}/{type}/{idligne}/{id}/{val}', name: 'updateligneRemise', methods: ['POST'])]
    public function updateLigner(int $id, string $doc, int $idligne, string $type, $val)
    {
        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();

        if ($doc === 'devis') {
            $repoDevis = $this->doctrine->getRepository(Devis::class);
            $repoLigne = $this->doctrine->getRepository(Ligne::class);

            $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

            if (!$devis || $devis->getEtat() === "valide") {
                return $this->json(['result' => 'Erreur'], 404);
            }

            $ligne = $repoLigne->findOneBy(['id' => $idligne, 'user' => $this->getMaster()]);

            if (!$ligne) {
                return $this->json(['result' => 'Erreur'], 404);
            }

            if ($type === 'remise') {
                $val = str_replace(',', '.', $val);
                $ligne->setRemise($val);
                $manager->persist($ligne);
                $manager->flush();
                $this->ajourDevis($devis);
            }
            if ($type === 'qte') {
                $val = str_replace(',', '.', $val);
                $ligne->setQuantite($val);
                $manager->persist($ligne);
                $manager->flush();
                $this->ajourDevis($devis);
            }
            if ($type === 'ref') {
                $val = str_replace(',', '.', $val);
                $ligne->setReference($val);
                $manager->persist($ligne);
                $manager->flush();
                $this->ajourDevis($devis);
            }
            if ($type === 'pu') {
                $val = str_replace(',', '.', $val);
                $ligne->setPu($val);
                $manager->persist($ligne);
                $manager->flush();
                $this->ajourDevis($devis);
            }
            if ($type === 'unite') {
                $ligne->setUnite($val);
                $manager->persist($ligne);
                $manager->flush();
                $this->ajourDevis($devis);
            }
            if ($type === 'zone') {
                $ligne->setZone($val);
                $manager->persist($ligne);
                $manager->flush();
                $this->ajourDevis($devis);
            }

            return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
        }
        if ($doc === 'bon') {
            $repoBon = $this->doctrine->getRepository(Bon::class);
            $repoLigne = $this->doctrine->getRepository(Ligne::class);

            $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

            if (!$bon) {
                return $this->json(['result' => 'Erreur'], 404);
            }

            $ligne = $repoLigne->findOneBy(['id' => $idligne, 'user' => $this->getMaster()]);

            if (!$ligne) {
                return $this->json(['result' => 'Erreur'], 404);
            }

            if ($type === 'remise') {
                $val = str_replace(',', '.', $val);
                $ligne->setRemise($val);
                $manager->persist($ligne);
                $manager->flush();
                $this->ajourBon($bon);
            }
            if ($type === 'qte') {
                $val = str_replace(',', '.', $val);
                $ligne->setQuantite($val);
                if($bon->getType() == "prepa"){
                    $ligne->setReste($val - $ligne->getLivrer());
                }
                $manager->persist($ligne);
                $manager->flush();
                $this->ajourBon($bon);
            }
            if ($type === 'pu') {
                $val = str_replace(',', '.', $val);
                $ligne->setPu($val);
                $manager->persist($ligne);
                $manager->flush();
                $this->ajourBon($bon);
            }
            if ($type === 'unite') {
                $ligne->setUnite($val);
                $manager->persist($ligne);
                $manager->flush();
                $this->ajourBon($bon);
            }
            if ($type === 'zone') {
                $ligne->setZone($val);
                $manager->persist($ligne);
                $manager->flush();
                $this->ajourBon($bon);
            }

            return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
        }
        if ($doc === 'decompte') {
            $repoDecompte = $this->doctrine->getRepository(Decompte::class);
            $repoLigne = $this->doctrine->getRepository(Ligne::class);

            $decompte = $repoDecompte->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            if (!$decompte) {return $this->json(['result' => 'Erreur'], 404);}
            $ligne = $repoLigne->findOneBy(['id' => $idligne, 'user' => $this->getMaster()]);
            if (!$ligne) {return $this->json(['result' => 'Erreur'], 404);}

            if ($type === 'avan') {
                $val = str_replace(',', '.', $val);
                $ligne->setAvancement($val);
                $manager->persist($ligne);
                $manager->flush();
                $this->ajourDecompte($decompte);
            }

            return $this->json($decompte, 200, ['Content-Type' => 'application/json'], ['groups' => 'decompte']);
        }

        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/delete/{id}/{idchantier}/{idligne}/{type}', name: 'supligne')]
    public function deleteLigne(int $id, int $idchantier, int $idligne, string $type)
    {

        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();

        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoFacture = $this->doctrine->getRepository(Facture::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);

        $chantier = $repoChantier->findOneBy(['id' => $idchantier, 'user' => $this->getMaster()]);


        $ligne = $repoLigne->findOneBy(['id' => $idligne, 'user' => $this->getMaster()]);
        if (!$chantier) {
            if ($type === 'devis') {
                $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
                if ($devis->getEtat() === "valide") {
                    return $this->json(['result' => 'erreur'], 404);
                }
            }
        }
        $journals = $ligne->getJournals();
        foreach ($journals as $journal){
            $manager->remove($journal);
            $manager->flush();
        }
        $manager->remove($ligne);
        $manager->flush();


        if ($type === 'devis') {
            $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            $this->ajourDevis($devis);
            return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
        }
        if ($type === 'bon') {
            $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            $this->ajourBon($bon);
            return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
        }
        if ($type === 'caisse') {
            $caisse = $repoCaisse->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            return $this->redirectToRoute('editcaisse', ['idcaisse' => $id,'idchantier'=> $chantier->getId()]);
        }
        if ($type === 'livraison') {
            return $this->redirectToRoute('editlivraison', ['id' => $id]);
        }
        if ($type === 'facture') {
            $facture = $repoFacture->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            $this->ajourFacture($facture);
            return $this->redirectToRoute('editfacture', ['id' => $id, 'idchantier'=>$chantier->getId()]);
        }

        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/dupliquer/{id}/{idchantier}/{idligne}/{type}', name: 'dupligne')]
    public function dupliquerLigne($id, $idchantier, $idligne, $type)
    {

        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();

        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);

        $chantier = $repoChantier->findOneBy(['id' => $idchantier, 'user' => $this->getMaster()]);
        $ligne = $repoLigne->findOneBy(['id' => $idligne, 'user' => $this->getMaster()]);
        if (!$chantier||!$ligne) {return $this->json(['result' => 'erreur'], 404);}


        if ($type === 'devis') {
            $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            if ($devis->getEtat() === "valide") {
                return $this->json(['result' => 'erreur'], 404);
            }
            $lign = new Ligne();
            $lign->setDevis($devis);
            $lign->setReference($ligne->getReference());
            if ($ligne->getCode() !== null) {$lign->setCode($ligne->getCode());}
            $lign->setDesignation($ligne->getDesignation());
            $lign->setZone($ligne->getZone());
            $lign->setQuantite($ligne->getQuantite());
            $lign->setPu($ligne->getPu());
            $lign->setRemise($ligne->getRemise());
            $lign->setType($ligne->getType());
            $lign->setArticle($ligne->getArticle());
            $lign->setChantier($ligne->getChantier());
            $lign->setUnite($ligne->getUnite());
            $lign->setUser($ligne->getUser());
            $lign->setGroupe($ligne->getGroupe());
            $manager->persist($lign);
            $manager->flush();
            $this->ajourDevis($devis);
            return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
        }
        if ($type === 'bon') {
            $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            $this->ajourBon($bon);
            return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
        }
        if ($type === 'caisse') {
            return $this->redirectToRoute('editcaisse', ['idcaisse' => $id]);
        }
        if ($type === 'livraison') {
            return $this->redirectToRoute('editlivraison', ['id' => $id]);
        }

        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/groupe/{id}/{idchantier}/{idgroupe}/{type}', name: 'supgroupe', methods: ['DELETE'])]
    public function deleteGroupe($id, $idchantier, $idgroupe, $type)
    {
        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();

        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);
        $repoLigne = $this->doctrine->getRepository(Ligne::class);

        $chantier = $repoChantier->findOneBy(['id' => $idchantier, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->redirectToRoute('logout');
        }

        $groupe = $repoGroupe->findOneBy(['id' => $idgroupe]);

        $lignes = $repoLigne->findBy(['groupe' => $groupe, 'user' => $this->getMaster()]);

        foreach ($lignes as $lig) {
            $manager->remove($lig);
            $manager->flush();
        }

        $manager->remove($groupe);
        $manager->flush();

        if ($type === 'devis') {
            $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
        }
        if ($type === 'bon') {
            return $this->json(['result' => 'succes'], 200);
        }
        if ($type === 'facture') {
            return $this->redirectToRoute('editfacture', ['id' => $id, 'idchantier' => $idchantier]);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/ligne/{iddevis}/{idarticle}/add', name: 'addlign')]
    public function addLigne2($iddevis, $idarticle, Request $request)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $repoUser = $this->doctrine->getRepository(User::class);
        $now = new \DateTime('NOW');
        $today = $now->format('Y-m-d H:i:s');
        $user = $repoUser->findOneBy(['username' => $this->getUser()->getUsername()]);

        if ($today > $user->getEnddate()->format('Y-m-d H:i:s')) {
            return $this->redirectToRoute('compte', ['type' => 'abonnement']);
        }
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $manager = $this->doctrine->getManager();
        $devis = $repoDevis->findOneBy(['id' => $iddevis, 'user' => $this->getUser()]);
        if (!$devis) {
            return $this->redirectToRoute('deconnecte');
        }
        $lign = new Ligne();
        $lign->setDevis($devis);
        $lign->setChantier($devis->getChantier());
        $formAR = $this->createForm(LigneType::class, $lign);
        $formAR->handleRequest($request);
        if ($formAR->isSubmitted() && $formAR->isValid()) {
            $manager->persist($lign);
            $manager->flush();
            return $this->redirectToRoute('editdevis', ['id' => $devis->getId(), 'idchantier' => $devis->getChantier()->getId()]);
        }


    }

}
