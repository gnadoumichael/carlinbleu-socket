<?php

namespace App\Controller;

use App\Entity\Acompte;
use App\Entity\Chantier;
use App\Entity\Client;
use App\Entity\Compte;
use App\Entity\Decompte;
use App\Entity\Devis;
use App\Entity\Facture;
use App\Entity\Forme;
use App\Entity\Groupe;
use App\Entity\Historique;
use App\Entity\Ligne;
use App\Entity\Relever;
use App\Entity\User;
use App\Form\FactureType;
use App\Form\FormeType;
use App\Form\GroupeType;
use App\Form\LigneType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: '/crm/facture')]
class FactureController extends AbstractController
{

    function ceil_dec($number, $precision, $separator)
    {
        $numberpart = explode($separator, $number);
        $numberpart[1] = substr_replace($numberpart[1], $separator, $precision, 0);
        if ($numberpart[0] >= 0) {
            $numberpart[1] = ceil($numberpart[1]);
        } else {
            $numberpart[1] = floor($numberpart[1]);
        }

        $ceil_number = array($numberpart[0], $numberpart[1]);
        return implode($separator, $ceil_number);
    }

    public function ajourFacture(Facture $facture)
    {
        $manager = $this->doctrine->getManager();
        $repoFacture = $this->doctrine->getRepository(Facture::class);

        $devis = null;

        if ($facture->getType() === "acompte" || $facture->getType() === "retenue") {
            $devis = $facture->getAcompte()->getDevis();
        }
        if ($facture->getType() === "decompte") {
            $devis = $facture->getDecompte()->getDevis();
        }
        if ($facture->getType() === "devis") {
            $devis = $facture->getDevis();
        }
        if ($facture->getType() === "retenue") {
            $chantier = $devis->getChantier();
            $to = 0;
            foreach ($chantier->getFactures() as $fac) {
                if ($fac->getType() === 'acompte') {
                    $to = $fac->getTotalttc();
                }
            }

            $po = ($to / $devis->getTotalttc()) * 100;
            $devis->setAcomrage($po);
            $manager->persist($devis);
            $manager->flush();

        }
        if ($facture->getType() === "acompte") {
            $chantier = $devis->getChantier();
            $to = 0;
            foreach ($chantier->getFactures() as $fac) {
                if ($fac->getType() === 'acompte') {
                    $to = $fac->getTotalttc();
                }
            }

            $po = ($to / $devis->getTotalttc()) * 100;
            $devis->setAcomrage($po);
            $manager->persist($devis);
            $manager->flush();

        }
        if ($facture->getType() === "decompte") {
            $decompte = $facture->getDecompte();
            $facture->setTotalht($decompte->getApayer());
            if ($devis->getPtva() === 'oui' || $devis->getPtva() === 'susp') {
                $ttc = $decompte->getApayer() + (($decompte->getApayer() * $devis->getTva()) / 100);
                $facture->setTotalttc($ttc);
            } else {
                $facture->setTotalttc($decompte->getApayer());
            }
            $facture->setDevis(null);
            $manager->persist($facture);
            $manager->flush();
        }
        if ($facture->getType() === "devis") {
            $ddacomptes = $devis->getAcomptes();
            $dddecomptes = $devis->getDecomptes();

            $totalacomptes = 0;
            $totaldecomptes = 0;
            $totalretenue = 0;

            foreach ($ddacomptes as $aacom) {
                $fac = $repoFacture->findOneBy(["user" => $this->getMaster(), "acompte" => $aacom]);
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
    }

    private $formFactory;

    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
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

    private function getJson(Request $request)
    {
        $data = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
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

    #[Route(path: '/add/{id}', name: 'addFacture', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function addFacture(int $id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoFacture = $this->doctrine->getRepository(Facture::class);
        $repoDecompte = $this->doctrine->getRepository(Decompte::class);
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'erreur'], 404);
        }

        $repoCompte = $this->doctrine->getRepository(Compte::class);
        $compte = $repoCompte->findOneBy(['user' => $this->getMaster()]);

        $facture = new Facture();
        $facture->setUser($this->getMaster());
        $facture->setDobyuser($this->getUser());
        $facture->setChantier($chantier);
        $facture->setClient($chantier->getClient());
        $facture->setEtat('save');
        $json = $this->getJson($request);

        // FORMULAIRE FACTURE
        $formFacture = $this->formFactory->createNamed('', FactureType::class, $facture, [
            'chantier' => $chantier,
            'type' => 'chantier',
        ]);

        $formFacture->submit($json);
        $formFacture->handleRequest($request);
        if ($formFacture->isSubmitted() && $formFacture->isValid()) {
            $iddevis = $json['devis'];
            $numdecompte = $json['decompte'];
            if ($json['decompte']) {
                $decompte = $repoDecompte->findOneBy(['user' => $this->getMaster(), 'id' => $numdecompte]);
                $ddevis = $decompte->getDevis();
            } else {
                $ddevis = $repoDevis->findOneBy(['user' => $this->getMaster(), 'id' => $iddevis]);
            }

            $der = $repoFacture->findBy(['user' => $this->getMaster()], ['id' => 'DESC'], 1);
            if ($der) {
                $rang = $der[0]->getRang() + 1;
                $facture->setRang($rang);
                $facture->setNumfacture($compte->getCompteFacture() . $rang);
            } else {
                $facture->setRang(1);
                $facture->setNumfacture(($compte->getCompteFacture() . '1'));
            }


            if ($json['type'] === 'simple' and $iddevis == null) {
                return $this->json(['result' => 'erreur'], 404);
            }

            if ($json['type'] === 'devis' and $iddevis == null) {
                return $this->json(['result' => 'erreur'], 404);
            }
            if ($json['type'] === 'decompte' and $numdecompte == null) {
                return $this->json(['result' => 'erreur'], 404);
            }
            if ($json['type'] === 'acompte' and $iddevis == null) {
                return $this->json(['result' => 'erreur'], 404);
            }

            if ($json['type'] === 'simple') {
                $facture->setChantier($ddevis->getChantier());
                $facture->setClient($ddevis->getClient());
            }

            if ($json['type'] === 'devis') {
                $facture->setChantier($ddevis->getChantier());
                $facture->setClient($ddevis->getClient());

                $ddacomptes = $ddevis->getAcomptes();
                $dddecomptes = $ddevis->getDecomptes();

                $totalacomptes = 0;
                $totaldecomptes = 0;

                foreach ($ddacomptes as $aacom) {
                    $fac = $repoFacture->findOneBy(["user" => $this->getMaster(), "acompte" => $aacom]);
                    $totalacomptes = floatval($fac->getTotalht()) + $totalacomptes;
                }
                foreach ($dddecomptes as $decom) {
                    $totaldecomptes += $decom->getApayer();
                }
                $totalhtsolde = $ddevis->getTotalht() - $totalacomptes - $totaldecomptes;
                if ($ddevis->getPtva() == "oui" || $ddevis->getPtva() === 'susp') {
                    $totaltva = ($totalhtsolde * $ddevis->getTva()) / 100;
                } else {
                    $totaltva = 0;
                }

                $totalttcsolde = $totalhtsolde + $totaltva;

                $facture->setTotalht($totalhtsolde);
                $facture->setVtva($totaltva);
                $facture->setTva($ddevis->getTva());
                $facture->setPtva($ddevis->getPtva());
                $facture->setTotalttc($totalttcsolde);

                $manager->persist($facture);
                $manager->flush();

                $groupes = $repoGroupe->findBy(['devis' => $ddevis]);
                $facture->setEtat('save');
                foreach ($ddevis->getLignes() as $ligne) {
                    if ($ligne->getGroupe() === null) {
                        $lign = new Ligne();
                        $lign->setFacture($facture);
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
                        $lign->setUser($ligne->getUser());
                        $manager->persist($lign);
                        $manager->flush();
                    }
                }
                if (count($groupes) > 0) {
                    foreach ($groupes as $groupe) {
                        $group = new Groupe();
                        $group->setGroupe($groupe->getGroupe());
                        $group->setReference($groupe->getReference());
                        $group->setFacture($facture);
                        $manager->persist($group);
                        $manager->flush();

                        foreach ($groupe->getLignes() as $ligne) {
                            if ($ligne->getDevis() != null) {
                                $lign = new Ligne();
                                $lign->setFacture($facture);
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
                                $lign->setUser($ligne->getUser());
                                $lign->setGroupe($group);
                                $lign->setUnite($ligne->getUnite());
                                $manager->persist($lign);
                                $manager->flush();
                            }

                        }
                    }

                }

                $manager->persist($facture);
                $manager->flush();
            }

            if ($json['type'] === 'decompte') {
                $facture->setChantier($decompte->getChantier());
                $facture->setClient($decompte->getClient());
                $facture->setTotalht($decompte->getApayer());
                if ($ddevis->getPtva() === 'oui' || $ddevis->getPtva() === 'susp') {
                    $ttc = $decompte->getApayer() + (($decompte->getApayer() * $ddevis->getTva()) / 100);
                    $facture->setTotalttc($ttc);
                } else {
                    $facture->setTotalttc($decompte->getApayer());
                }

            }
            if ($json['type'] === 'acompte' || $json['type'] === 'retenue') {
                $acompte = new  Acompte();
                $acompte->setUser($this->getMaster());
                $acompte->setDevis($ddevis);
                $manager->persist($acompte);
                $manager->flush();
                $facture->setAcompte($acompte);
                $facture->setDevis(null);
            }

            $manager->persist($facture);
            $manager->flush();
            return $this->json(['result' => $facture->getId()], 201);
        }

        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/pourcentage/{idchan}/{idfa}', name: 'addPourcentage', requirements: ['idfa' => '\d+', 'idchan' => '\d+'], methods: ['POST'])]
    public function addPourcentage(int $idchan, int $idfa, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoFacture = $this->doctrine->getRepository(Facture::class);
        $chantier = $repoChantier->findOneBy(['id' => $idchan, 'user' => $this->getMaster()]);
        $facture = $repoFacture->findOneBy(['id' => $idfa, 'user' => $this->getMaster()]);

        if (!$chantier || !$facture) {
            return $this->json(['result' => 'erreur'], 404);
        }

        $json = $this->getJson($request);
        if ($this->isCsrfTokenValid('addPour', $json['token'])) {
            $acompte = $facture->getAcompte();

            if ($json['pour'] > 100) {
                return $this->json(['result' => 'erreur'], 404);
            }

            $acompte->setPourcentage($json['pour']);
            $devis = $facture->getAcompte()->getDevis();


            $th = $devis->getTotalht() * ($json['pour'] / 100);

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
                $ligne->setUser($this->getMaster());
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
            return $this->json(['result' => 'Succes'], 200);

        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/montant/{idchan}/{idfa}', name: 'addMontant', requirements: ['idfa' => '\d+', 'idchan' => '\d+'], methods: ['POST'])]
    public function addMontant(int $idchan, int $idfa, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoFacture = $this->doctrine->getRepository(Facture::class);
        $chantier = $repoChantier->findOneBy(['id' => $idchan, 'user' => $this->getMaster()]);

        $facture = $repoFacture->findOneBy(['id' => $idfa, 'user' => $this->getMaster()]);

        if (!$chantier || !$facture) {
            return $this->json(['result' => 'erreur'], 404);
        }

        $json = $this->getJson($request);
        if ($this->isCsrfTokenValid('addMontant', $json['token'])) {
            $devis = $facture->getAcompte()->getDevis();
            $acompte = $facture->getAcompte();
            if ($facture->getType() === "acompte") {
                if ($json['montant'] === 0 && $json['montant'] > $devis->getTotalttc()) {
                    return $this->json(['result' => 'erreur'], 404);
                }

                if ($devis->getPtva() === "oui" || $devis->getPtva() === 'susp') {
                    $th = $json['montant'] / (1 + ($devis->getTva() / 100));
                    $vtva = ($th * $devis->getTva()) / 100;
                    $facture->setTotalht(round($th, 3));
                    $facture->setVtva(round($vtva, 3));
                } else {
                    $vtva = ($json['montant'] * $devis->getTva()) / 100;
                    $facture->setTotalht($json['montant']);
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
                    $ligne->setUser($this->getMaster());
                    $ligne->setChantier($lign->getChantier());
                    $ligne->setType(4);
                    $manager->persist($ligne);
                    $manager->flush();
                }
                $facture->setTotalttc($json['montant']);
                $manager->persist($facture);
                $manager->flush();

                $pour = ($facture->getTotalht() / $devis->getTotalht()) * 100;
                $acompte->setPourcentage(round($pour, 10));
                $manager->persist($acompte);
                $manager->flush();
            }
            if ($facture->getType() === "retenue") {
                if ($json['montant'] === 0 && $json['montant'] > $devis->getTotalttc()) {
                    return $this->json(['result' => 'erreur'], 404);
                }

                $pour = ($json['montant'] / $devis->getTotalht()) * 100;
                $acompte->setPourcentage(round($pour, 10));
                $manager->persist($acompte);
                $manager->flush();

                if ($devis->getPtva() === "oui" || $devis->getPtva() === 'susp') {
                    $th = $json['montant'] / (1 + ($devis->getTva() / 100));
                    $vtva = ($th * $devis->getTva()) / 100;
                    $facture->setTotalht(round($th, 3));
                    $facture->setVtva(round($vtva, 3));
                } else {
                    $vtva = ($json['montant'] * $devis->getTva()) / 100;
                    $facture->setTotalht($json['montant']);
                    $facture->setVtva($vtva);
                }

                foreach ($facture->getLignes() as $lig) {
                    $manager->remove($lig);
                    $manager->flush();
                }

                $facture->setTotalttc($json['montant']);
                $manager->persist($facture);
                $manager->flush();

                $ligne = new Ligne();
                $ligne->setDesignation("Situation d'avancement");
                $ligne->setFacture($facture);
                $ligne->setUnite("U");
                $ligne->setQuantite("1");
                $ligne->setPu(0);
                $ligne->setRemise(0);
                $ligne->setUser($this->getMaster());
                $ligne->setChantier($facture->getChantier());
                $ligne->setType(4);
                $manager->persist($ligne);
                $manager->flush();
            }

            return $this->json(['result' => 'Succes'], 200);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/adde', name: 'addeFacture', methods: ['POST'])]
    public function addeFacture(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoDecompte = $this->doctrine->getRepository(Decompte::class);
        $repoFacture = $this->doctrine->getRepository(Facture::class);

        $facture = new Facture();
        $facture->setUser($this->getMaster());
        $facture->setDobyuser($this->getUser());
        $facture->setDate(new \DateTime('NOW'));
        $facture->setEtat('save');
        $json = $this->getJson($request);

        $formFacture = $this->formFactory->createNamed('', FactureType::class, $facture, [
            'user' => $this->getMaster(),
            'type' => 'chantiers',
        ]);

        $formFacture->submit($json);
        $formFacture->handleRequest($request);
        if ($formFacture->isSubmitted() && $formFacture->isValid()) {
            $iddevis = $json['devis'];
            $numdecompte = $json['decompte'];

            $devis = $repoDevis->findOneBy(['user' => $this->getMaster(), 'id' => $iddevis]);
            $decompte = $repoDecompte->findOneBy(['user' => $this->getMaster(), 'id' => $numdecompte]);

            $der = $repoFacture->findBy(['user' => $this->getMaster()], ['id' => 'DESC'], 1);

            if ($der) {
                $rang = $der[0]->getRang() + 1;
                $facture->setRang($rang);
                $facture->setNumfacture('FFF-' . $rang);
            } else {
                $facture->setRang(1);
                $facture->setNumfacture('FFF-1');
            }

            if ($json['type'] === 'retenue' and $iddevis == null) {
                return $this->json(['result' => 'erreur'], 404);
            }
            if ($json['type'] === 'devis' and $iddevis == null) {
                return $this->json(['result' => 'erreur'], 404);
            }
            if ($json['type'] === 'decompte' and $numdecompte == null) {
                return $this->json(['result' => 'erreur'], 404);
            }
            if ($json['type'] === 'acompte' and $iddevis == null) {
                return $this->json(['result' => 'erreur'], 404);
            }
            if ($json['type'] === 'simple') {
                $facture->setChantier($devis->getChantier());
                $facture->setClient($devis->getClient());
            }

            if ($json['type'] === 'retenue' or $json['type'] === 'acompte') {
                $facture->setDevis(null);
                $acc = new Acompte();
                $acc->setDevis($devis);
                $acc->setUser($this->getMaster());
                $manager->persist($acc);
                $manager->flush();
                $facture->setAcompte($acc);
                $facture->setChantier($devis->getChantier());
                $facture->setClient($devis->getClient());
            }
            if ($json['type'] === 'devis') {
                $facture->setChantier($devis->getChantier());
                $facture->setClient($devis->getClient());
                $facture->setTotalht($devis->getTotalht());

                $ddacomptes = $devis->getAcomptes();
                $dddecomptes = $devis->getDecomptes();

                $totalacomptes = 0;
                $totaldecomptes = 0;

                foreach ($ddacomptes as $aacom) {
                    $totalacomptes = $totalacomptes + (($devis->getTotalht() * $aacom->getPourcentage()) / 100);
                }

                foreach ($dddecomptes as $decom) {
                    $totaldecomptes = $totaldecomptes + $decom->getApayer();
                }

                $totalhtsolde = $devis->getTotalht() - $totalacomptes - $totaldecomptes;

                if ($devis->getPtva() == "oui" || $devis->getPtva() === 'susp') {
                    $totaltva = ($totalhtsolde * $devis->getTva()) / 100;
                } else {
                    $totaltva = 0;
                }

                $totalttcsolde = $totalhtsolde + $totaltva;

                $facture->setTotalht($totalhtsolde);
                $facture->setVtva($totaltva);
                $facture->setTva($devis->getTva());
                $facture->setTotalttc($totalttcsolde);

                $ligne = new Ligne();
                $ligne->setFacture($facture);
                $ligne->setChantier($facture->getChantier());
                $ligne->setUser($this->getMaster());
                $ligne->setDesignation("FACTURE DE SOLDE SELON DEVIS N° " . $devis->getIddevis());
                $ligne->setUnite("U");
                $ligne->setQuantite("1");
                $ligne->setPu($totalttcsolde);
                $ligne->setReference("");
                $manager->persist($ligne);
                $manager->flush();

            }
            if ($json['type'] === 'decompte') {
                $facture->setChantier($decompte->getChantier());
                $facture->setClient($decompte->getClient());
                $facture->setTotalht($decompte->getApayer());
                if ($devis->getPtva() === 'oui' || $devis->getPtva() === 'susp') {
                    $ttc = $decompte->getApayer() + (($decompte->getApayer() * $devis->getTva()) / 100);
                    $facture->setTotalttc($ttc);
                } else {
                    $facture->setTotalttc($decompte->getApayer());
                }
            }

            $manager->persist($facture);
            $manager->flush();
            $return[] = ["idfacture" => $facture->getId(), "idchantier" => $facture->getChantier()->getId()];
            return $this->json(['result' => $return], 201);

        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/update/{id}', name: 'updateFacture', requirements: ['id' => '\d+'], methods: ['PUT'])]
    public function updateFacture(int $id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoFacture = $this->doctrine->getRepository(Facture::class);

        $facture = $repoFacture->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$facture) {
            return $this->json(['result' => 'error'], 404);
        }
        if ($facture->getType() === 'decompte') {
            $decompte = $facture->getDecompte();
        } else {
            $devis = $facture->getDevis();
        }

        $json = $this->getJson($request);
        // FORMULAIRE FACTURE
        $formFacture = $this->formFactory->createNamed('', FactureType::class, $facture, [
            'chantier' => $facture->getChantier(),
            'type' => 'chantier',
        ]);
        $formFacture->submit($json);
        $formFacture->handleRequest($request);
        if ($formFacture->isSubmitted() && $formFacture->isValid()) {

            if ($facture->getType() === 'decompte') {
                $facture->setDecompte($decompte);
            }

            if ($facture->getType() === 'acompte' || $facture->getType() === 'devis') {
                $facture->setDevis($devis);
            }

            if ($json['type'] == 'devis') {
                $this->ajourDevis($devis);
                $facture->setTotalht($devis->getTotalht());
                $vtva = $devis->getTotalht() * ($json['tva'] / 100);
                $facture->setVtva($vtva);
                if ($json['ptva'] == "oui") {
                    $facture->setTotalttc($devis->getTotalht() + $vtva);
                } else {
                    $facture->setTotalttc($devis->getTotalht());
                }
            }

            $manager->persist($facture);
            $manager->flush();
            return $this->json(['result' => 'Succes'], 200);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/upda/{id}', name: 'updaFacture', requirements: ['id' => '\d+'], methods: ['PUT'])]
    public function updaFacture(int $id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoFacture = $this->doctrine->getRepository(Facture::class);

        $facture = $repoFacture->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$facture) {
            return $this->json(['result' => 'error'], 404);
        }

        $json = $this->getJson($request);
        // FORMULAIRE FACTURE
        $formFacture = $this->formFactory->createNamed('', FactureType::class, $facture, [
            'chantier' => $facture->getChantier(),
            'type' => 'upd',
        ]);
        $formFacture->submit($json);
        $formFacture->handleRequest($request);
        if ($formFacture->isSubmitted() && $formFacture->isValid()) {
            $manager->persist($facture);
            $manager->flush();
            return $this->json(['result' => 'Succes'], 200);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/acompte/{id}', name: 'acompteFacture', requirements: ['id' => '\d+'], methods: ['PUT'])]
    public function acompteFacture(int $id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoFacture = $this->doctrine->getRepository(Facture::class);

        $facture = $repoFacture->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$facture) {
            return $this->json(['result' => 'error'], 404);
        }
        $json = $this->getJson($request);
        $formAcompte = $this->formFactory->createNamed('', FactureType::class, $facture, [
            'chantier' => $facture->getChantier(),
            'type' => 'acompte',
        ]);
        $formAcompte->submit($json);
        $formAcompte->handleRequest($request);
        if ($formAcompte->isSubmitted() && $formAcompte->isValid()) {
            $manager->persist($facture);
            $manager->flush();
            $pu = ($facture->getDevis()->getTotalht() * $facture->getAcompte()) / 100;

            $ligne = new Ligne();
            $ligne->setDesignation('FACTURE D\'ACOMPTE ' . $facture->getAcompte() . '% sur Devis N°: ' . $facture->getDevis()->getIddevis());
            $ligne->setFacture($facture);
            $ligne->setUnite('U');
            $ligne->setQuantite(1);
            $ligne->setPu($pu);
            $ligne->setUser($this->getMaster());
            $ligne->setChantier($facture->getChantier());
            $ligne->setType(4);
            $ligne->setRemise(0);
            $manager->persist($ligne);
            $manager->flush();

            return $this->json(['result' => 'Succes'], 200);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/valider/{id}', name: 'validefacture', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function valideFacture(int $id)
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORRIES
        $repoFacture = $this->doctrine->getRepository(Facture::class);

        // ON RECUPERE LA FACTURE
        $facture = $repoFacture->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$facture) {
            return $this->json(['result' => 'error'], 404);
        }
        $facture->setEtat('valide');
        $releve = new Relever();
        $releve->setDevis($facture->getDevis());
        $releve->setFacture($facture);
        $releve->setChantier($facture->getChantier());
        if ($facture->getType() === 'non') {
            $releve->setMontant($facture->getDevis()->getTotalttc());
        } else {
            $releve->setMontant($facture->getTotalttc());
        }
        $releve->setDate(new \DateTime('NOW'));
        $releve->setType(4);
        $releve->setClient($facture->getClient());
        $manager->persist($releve);
        $manager->persist($facture);
        $manager->flush();
        return $this->json(['result' => 'success'], 200);
    }

    #[Route(path: '/getreste/{id}', name: 'getreste', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function resteFacture(int $id)
    {

        // REPOSITORRIES
        $repoFacture = $this->doctrine->getRepository(Facture::class);

        // ON RECUPERE LA FACTURE
        $facture = $repoFacture->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$facture) {
            return $this->json(['result' => 'error'], 404);
        }

        $relever = $facture->getRelever();
        $ttc = $facture->getTotalttc();
        $regler = 0;
        if ($relever) {
            foreach ($relever as $rele) {
                $regler = $rele->getMontant() + $regler;
            }
            $reste = $facture->getTotalttc() - $regler;
        } else {
            $regler = 0;
            $reste = $ttc;
        }

        return $this->json([
            'ttc' => number_format($ttc, 2, ',', ' '),
            'regler' => number_format($regler, 2, ',', ' '),
            'reste' => number_format($reste, 2, ',', ' ')],
            200);
    }

    #[Route(path: '/devalider/{id}', name: 'devalidefacture', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function devalideFacture(int $id)
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORRIES
        $repoFacture = $this->doctrine->getRepository(Facture::class);
        $repoRelever = $this->doctrine->getRepository(Relever::class);

        // ON RECUPERE LA FACTURE
        $facture = $repoFacture->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$facture) {
            return $this->json(['result' => 'error'], 404);
        }

        if ($facture->getEtat() === "valide") {
            $facture->setEtat('save');
            $releve = $repoRelever->findOneBy(['facture' => $facture]);
            $manager->remove($releve);
            $manager->persist($facture);
            $manager->flush();
            return $this->json(['result' => 'success'], 200);
        }
    }

    #[Route(path: '/del/{id}', name: 'delofacture', requirements: ['id' => '\d+'], methods: ['DELETE'])]
    public function delFacture(int $id = null)
    {
        // ACCESS A LA BASE DE DONNÉES
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoFacture = $this->doctrine->getRepository(Facture::class);


        // ON RECUPERE LE BON
        $facture = $repoFacture->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
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


            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/{id}/{idchantier}', name: 'editfacture', requirements: ['idchantier' => '\d+', 'id' => '\d+'])]
    #[Route(path: '/groupe/{id}/{idgroupe}/{idchantier}', name: 'facturegroupe', requirements: ['idgroupe' => '\d+', 'id' => '\d+'])]
    #[Route(path: '/ligne/{id}/{idligne}/{idchantier}', name: 'editlignefacture', requirements: ['idligne' => '\d+', 'id' => '\d+'])]
    public function facture(int $idchantier, int $idgroupe = null, int $idligne = null, int $id)
    {

        date_default_timezone_set('Africa/Abidjan');

        // LES REPOSITORIES
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);
        $repoFacture = $this->doctrine->getRepository(Facture::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoForme = $this->doctrine->getRepository(Forme::class);

        //INITIALISATION
        $th = null;
        $ttc = null;
        $vtva = null;
        $rem = null;
        $acompte = null;
        $decompte = null;
        $reste = null;
        $devis = null;
        $ddacomptes = null;
        $dddecomptes = null;
        $totalacomptes = 0;

        // RECUPERE LE CHANTIER ET SE DECONNECTE SI LE PROJET N'EXISTE PAS AINSI QUE LE DEVIS
        $facture = $repoFacture->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $chantier = $repoChantier->findOneBy(['id' => $idchantier, 'user' => $this->getMaster()]);

        if (!$facture || !$chantier) {
            return $this->redirectToRoute('logout');
        }
        if ($facture->getType() === "acompte" || $facture->getType() === "retenue") {
            $devis = $facture->getAcompte()->getDevis();
        }
        if ($facture->getType() === "decompte") {
            $devis = $facture->getDecompte()->getDevis();
        }
        if ($facture->getType() === "devis") {
            $devis = $facture->getDevis();
            $ddacomptes = $devis->getAcomptes();
            $dddecomptes = $devis->getDecomptes();
            foreach ($ddacomptes as $aacom) {
                $fac = $repoFacture->findOneBy(["user" => $this->getMaster(), "acompte" => $aacom]);
                $totalacomptes = floatval($fac->getTotalht()) + $totalacomptes;
            }
        }
        if ($facture->getType() === "simple") {
            $devis = $facture->getDevis();
        }

        $fac = new Facture();
        $fac->setUser($this->getMaster());
        $fac->setDobyuser($this->getUser());
        $fac->setDate(new \DateTime('NOW'));
        $fac->setChantier($chantier);
        $fac->setClient($chantier->getClient());
        $fac->setTva(18);
        $fac->setEtat('save');

        // VERIFIE SI UN GROUPE EST SELECTIONNÉ. ON CRÉE LE GROUPE OU ON RECUPERE LE GROUPE SELECTIONNÉ
        if ($idgroupe == null) {
            $groupe = new Groupe();
            $groupe->setFacture($facture);
            $editGrou = null;
        } else {
            $groupe = $repoGroupe->findOneBy(['id' => $idgroupe]);
        }

        // FORMULAIRE POUR CRÉER GROUPE
        $formGroupe = $this->formFactory->createNamed('', GroupeType::class, $groupe);

        // FORMULAIRE POUR AJOUTER UN ARTICLE DANS LE DEVIS -- AJOUTER UN ARTICLE
        // VERIFIE SI UNE LIGNE EST SELECTIONNÉE. ON CRÉE LA LIGNE OU ON RECUPERE LA LIGNE SELECTIONNÉE
        if ($idligne == null) {
            $ligne = new Ligne();
            $ligne->setRemise(0.00);
        } else {
            $ligne = $repoLigne->findOneBy(['id' => $idligne, 'facture' => $facture]);
        }

        $ligne->setChantier($chantier);
        $ligne->setFacture($facture);
        $ligne->setUser($this->getMaster());

        $formLigne = $this->formFactory->createNamed('', LigneType::class, $ligne, [
            'facture' => $facture,
        ]);

        $formeLigne = $this->formFactory->createNamed('', LigneType::class, $ligne, [
            'type' => "retenue",
        ]);

        // FORMULAIRE FACTURE
        $form = $this->formFactory->createNamed('', FactureType::class, $facture, [
            'chantier' => $chantier,
            'type' => 'upd',
        ]);

        $formFac = $this->formFactory->createNamed('', FactureType::class, $fac, [
            'chantier' => $chantier,
            'type' => 'chantier',
        ]);

        $listegroupe = $repoGroupe->findBy(
            ['facture' => $facture],
            ['groupe' => 'ASC']);

        $lignes = $repoLigne->findBy(['facture' => $facture]);
        $forte = $repoForme->findOneBy(['user' => $this->getUser(), 'used' => 'used']);
        $formes = $this->formFactory->createNamed('', FormeType::class, $forte);

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        // FACTURE POUR REACT
        $jsonfacture = $this->json($facture, 200, ['Content-Type' => 'application/json'], ['groups' => 'facture']);
        $jsonforme = $this->json($forte, 200, ['Content-Type' => 'application/json'], ['groups' => 'forme']);
        $jsondecomptes = $this->json($dddecomptes, 200, ['Content-Type' => 'application/json'], ['groups' => 'decompte']);

        $this->ajourFacture($facture);


        return $this->render('content/facture.html.twig', [
            'controller_name' => 'FactureController',
            'title' => 'CRÉER UNE FACTURE | ' . $chantier->getNomChantier(),
            'formFacture' => $form->createView(),
            'formFac' => $formFac->createView(),
            'chantier' => $chantier,
            'facture' => $facture,
            'lignes' => $lignes,
            'listGroup' => $listegroupe,
            'editMode' => $facture->getId() !== null,
            'th' => $th,
            'ttc' => $ttc,
            'vtva' => $vtva,
            'rem' => $rem,
            'acompte' => $acompte,
            'reste' => $reste,
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'idgroupe' => $idgroupe,
            'idgligne' => $idligne,
            'editligne' => $idligne !== null,
            'forme' => $formLigne->createView(),
            'formeLigne' => $formeLigne->createView(),
            'formGroup' => $formGroupe->createView(),
            'editGrou' => $editGrou,
            'devis' => $devis,
            'decompte' => $decompte,
            'formes' => $formes->createView(),
            'history' => $historiques,
            'forte' => $forte,
            'jsonfacture' => $jsonfacture->getContent(),
            'jsonforme' => $jsonforme->getContent(),
            'totalacomptes' => $totalacomptes,
            'jsondecomptes' => $jsondecomptes->getContent(),
            'ligne' => $ligne,
        ]);

    }
}
