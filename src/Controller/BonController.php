<?php

namespace App\Controller;

use App\Entity\Alerte;
use App\Entity\Article;
use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Chantier;
use App\Entity\Client;
use App\Entity\Compte;
use App\Entity\Corbeille;
use App\Entity\Devis;
use App\Entity\Forme;
use App\Entity\Fournisseur;
use App\Entity\Groupe;
use App\Entity\Historique;
use App\Entity\Journal;
use App\Entity\Ligne;
use App\Entity\Monnaie;
use App\Entity\User;
use App\Entity\Valider;
use App\Form\BonType;
use App\Form\FormeType;
use App\Form\GroupeType;
use App\Form\LigneType;
use App\Form\LignType;
use App\Service\EnteteUploader;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;


#[Route(path: '/crm/bon')]
class BonController extends AbstractController
{

    private FormFactoryInterface $formFactory;
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
                if ($bon->getPtva() === "non") {
                    $vtva = 0;
                } else {
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
                                }else{
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
    private function getJson(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpException(400, 'Invalid json');
        }
        return $data;
    }

    #[Route(path: '/forme', name: 'miseformeBon', methods: ['POST'])]
    public function miseforme(Request $request): JsonResponse
    {

        $repoForme = $this->doctrine->getRepository(Forme::class);
        $manager = $this->doctrine->getManager();

        // MISE EN FORME DU DEVIS
        $forte = $repoForme->findOneBy(['user' => $this->getUser(), 'used' => 'used']);
        $formes = $this->formFactory->createNamed('', FormeType::class, $forte);
        $formes->handleRequest($request);
        if ($formes->isSubmitted()) {
            $file = $request->files->get('enteteImage');
            $fille = $request->files->get('footImage');
            if ($file) {
                if ($forte->getRang() === 1) {
                    $filename = $this->getUser()->getId() . 'tt';
                } else {
                    $filename = $this->getUser()->getId() . 'tte';
                }
                $fich = new EnteteUploader('gallery/');
                $link = $fich->upload($file, $filename);
                $forte->setLink($link);
            }
            if ($fille) {
                if ($forte->getRang() === 1) {
                    $filename = $this->getUser()->getId() . 'ff';
                } else {
                    $filename = $this->getUser()->getId() . 'ffe';
                }

                $fich = new EnteteUploader('gallery/');
                $link = $fich->upload($fille, $filename);
                $forte->setfooterImage($link);
            }
            $manager->persist($forte);
            $manager->flush();
            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route('/add/{id}', name: 'addBon', methods: ["POST"])]
    public function addBon($id, Request $request): JsonResponse{
        $manager = $this->doctrine->getManager();

        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $repoCompte = $this->doctrine->getRepository(Compte::class);
        $compte = $repoCompte->findOneBy(['user' => $this->getMaster()]);

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $bon = new Bon();
        $bon->setChantier($chantier);
        $bon->setUser($this->getMaster());
        $bon->setDobyuser($this->getUser());
        $bon->setClient($chantier->getClient());
        $bon->setEtat('save');
        $json = $this->getJson($request);
        $formBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'client' => $chantier->getClient(),
            'chantier' => $chantier,
            'type' => 'chantier',
            'user' => $this->getMaster()
        ]);
        $formBon->submit($json);
        $formBon->handleRequest($request);
        if ($formBon->isSubmitted() && $formBon->isValid()) {

            $derLivre = $repoBon->findOneLast($this->getMaster());
            $derCommande = $repoBon->findOneLaste($this->getMaster());
            $derSuivie = $repoBon->findOneLasta($this->getMaster());

            if ($json['type'] === 'oui' or $json['type'] === 'non' or $json['type'] === 'pst') {
                if ($derCommande) {
                    $rang = $derCommande->getRang() + 1;
                    $bon->setRang($rang);
                    $bon->setNumbon($compte->getCompteBonFournisseur() . $rang);
                } else {
                    $bon->setRang(1);
                    $bon->setNumbon($compte->getCompteBonFournisseur() . '1');
                }
            }

            if ($json['type'] === 'none') {
                if ($derLivre) {
                    $rang = $derLivre->getRang() + 1;
                    $bon->setRang($rang);
                    $bon->setNumbon('LIV-' . $rang);
                } else {
                    $bon->setRang(1);
                    $bon->setNumbon('LIV-1');
                }
            }

            if ($json['type'] === 'prepa') {
                if ($derSuivie) {
                    $rang = $derSuivie->getRang() + 1;
                    $bon->setRang($rang);
                    $bon->setNumbon('SVI-' . $rang);
                } else {
                    $bon->setRang(1);
                    $bon->setNumbon('SVI-1');
                }
            }

            $manager->persist($bon);
            $manager->flush();

            $repoUser = $this->doctrine->getRepository(User::class);
            $actio = '<p><u>Le bon N° : <a href=/crm/bon/'.$bon->getId() .'/'.$bon->getChantier()->getId().'>' . $bon->getNumbon() . '</a> a été créé:</u><br># '. $bon->getClient()->getNomClient().'<br># '. $bon->getChantier()->getNomChantier().
                '<br> par:<span class=col-blue bolo600>'.$this->getUser()->getNom().' '.$this->getUser()->getPrenoms().'</span></p>';

            $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);
            foreach ($comptes as $compte){
                $alerte = new Alerte();
                $alerte->setAlerte($actio);
                $alerte->setUser($this->getMaster());
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
            $alerte->setAlerte($actio);
            $alerte->setUser($this->getMaster());
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setOwner($this->getMaster());
            $alerte->setTitre("BON CRÉÉ");
            $alerte->setRef($bon->getId());
            $alerte->setStatut("false");
            $alerte->setType("bon");
            $manager->persist($alerte);
            $manager->flush();


            date_default_timezone_set('Africa/Abidjan');
            if ($json['type'] !== 'none') {
                $action = ' Création du Bon de commande N° : ' . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
            } else {
                $action = ' Création du de livraison N° : ' . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
            }

            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();


            return $this->json(['result' => $bon->getId()], 201);
        }
        return $this->json(['result' => 'echec'], 404);
    }

    #[Route('/add/prepa/{id}', name: 'addBonPrepa', methods: ["POST"])]
    public function addBonPrepa($id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $bon = new Bon();
        $bon->setChantier($chantier);
        $bon->setUser($this->getMaster());
        $bon->setDobyuser($this->getUser());
        $bon->setClient($chantier->getClient());
        $bon->setEtat('save');
        $json = $this->getJson($request);
        $formBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'client' => $chantier->getClient(),
            'chantier' => $chantier,
            'type' => 'preparation',
            'user' => $this->getMaster()
        ]);
        $formBon->submit($json);
        $formBon->handleRequest($request);
        if ($formBon->isSubmitted() && $formBon->isValid()) {
            $derCommande = $repoBon->findOneLasta($this->getMaster());

            if ($derCommande) {
                $rang = $derCommande->getRang() + 1;
                $bon->setRang($rang);
                $bon->setNumbon("SVI-". $rang);
            } else {
                $bon->setRang(1);
                $bon->setNumbon('SVI-1');
            }

            $bon->setType("prepa");
            $manager->persist($bon);
            $manager->flush();

            $repoUser = $this->doctrine->getRepository(User::class);
            $actio = '<p><u>Le bon N° : <a href=/crm/bon/'.$bon->getId() .'/'.$bon->getChantier()->getId().'>' . $bon->getNumbon() . '</a> a été créé:</u><br># '. $bon->getClient()->getNomClient().'<br># '. $bon->getChantier()->getNomChantier().
                '<br> par:<span class=col-blue bolo600>'.$this->getUser()->getNom().' '.$this->getUser()->getPrenoms().'</span></p>';

            $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);
            foreach ($comptes as $compte){
                $alerte = new Alerte();
                $alerte->setAlerte($actio);
                $alerte->setUser($this->getMaster());
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
            $alerte->setAlerte($actio);
            $alerte->setUser($this->getMaster());
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setOwner($this->getMaster());
            $alerte->setTitre("BON CRÉÉ");
            $alerte->setRef($bon->getId());
            $alerte->setStatut("false");
            $alerte->setType("bon");
            $manager->persist($alerte);
            $manager->flush();


            date_default_timezone_set('Africa/Abidjan');

            $action = ' Création du Bon de préparation de commande N° : ' . $bon->getNumbon() . "\n\n" . $bon->getBonReference();

            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();


            return $this->json(['result' => $bon->getId()], 201);
        }
        return $this->json(['result' => 'echec'], 404);
    }

    #[Route('/article/{id}', name: 'addBonArticle')]
    public function addBonArticle($id): RedirectResponse
    {
        $manager = $this->doctrine->getManager();

        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoArticle = $this->doctrine->getRepository(Article::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoMonnaie = $this->doctrine->getRepository(Monnaie::class);

        $repoCompte = $this->doctrine->getRepository(Compte::class);
        $compte = $repoCompte->findOneBy(['user' => $this->getMaster()]);

        $chantier = $repoChantier->findOneBy(['type' => 'article composé', 'user' => $this->getMaster()]);
        $devis = $repoDevis->findOneBy(['chantier' => $chantier, 'user' => $this->getMaster()]);
        $article = $repoArticle->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $monnaie = $repoMonnaie->findOneBy(['id' => 1]);

        if (!$article->getComposer()) {

            $bon = new Bon();
            $bon->setDevis($devis);
            $bon->setType('cps');
            $bon->setStatus('2');
            $bon->setBonReference('Article composé');
            $derCommande = $repoBon->findOneLaste($this->getMaster());

            if ($derCommande) {
                $rang = $derCommande->getRang() + 1;
                $bon->setRang($rang);
                $bon->setNumbon($compte->getCompteBonFournisseur() . $rang);
            } else {
                $bon->setRang(1);
                $bon->setNumbon($compte->getCompteBonFournisseur() . '1');
            }

            $bon->setAarem('non');
            $bon->setAaref('oui');
            $bon->setPtva('oui');
            $bon->setTva('18');
            $bon->setChantier($chantier);
            $bon->setEtat('save');
            $bon->setTotalht(0);
            $bon->setTotalttc(0);
            $bon->setBonReference($article->getDesignation());
            $bon->setDate(new \DateTime('NOW'));
            $bon->setChantier($bon->getChantier());
            $bon->setMonnaie($monnaie);
            $bon->setClient($chantier->getClient());
            $bon->setModele(1);
            $bon->setUser($this->getMaster());
            $bon->setDobyuser($bon->getUser());
            $bon->setArticlecomposer($article);
            $manager->persist($bon);
            $manager->flush();
            return $this->redirectToRoute('editbon', ['id' => $article->getComposer()->getId(), 'idchantier' => $chantier->getId()]);

        }
        return $this->redirectToRoute('editbon', ['id' => $article->getComposer()->getId(), 'idchantier' => $article->getComposer()->getChantier()->getId()]);
    }

    #[Route('/livre/add/{id}', name: 'addBonLivre', methods: ["POST"])]
    public function addBonLivre($id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $repoCompte = $this->doctrine->getRepository(Compte::class);
        $compte = $repoCompte->findOneBy(['user' => $this->getMaster()]);

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $bon = new Bon();
        $bon->setChantier($chantier);
        $bon->setUser($this->getMaster());
        $bon->setAarem('non');
        $bon->setDobyuser($this->getUser());
        $bon->setClient($chantier->getClient());
        $bon->setEtat('save');
        $json = $this->getJson($request);
        $formaBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'client' => $chantier->getClient(),
            'chantier' => $chantier,
            'type' => 'livraison',
            'user' => $this->getMaster()
        ]);
        $formaBon->submit($json);
        $formaBon->handleRequest($request);
        if ($formaBon->isSubmitted() && $formaBon->isValid()) {

            $derLivre = $repoBon->findOneLast($this->getMaster());
            $bon->setType('none');

            if ($derLivre) {
                $rang = $derLivre->getRang() + 1;
                $bon->setRang($rang);
                $bon->setNumbon($compte->getCompteLivraison() . $rang);
            } else {
                $bon->setRang(1);
                $bon->setNumbon($compte->getCompteLivraison() . '1');
            }

            $manager->persist($bon);
            $manager->flush();

            $repoUser = $this->doctrine->getRepository(User::class);
            $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);
            foreach ($comptes as $compte) {

                $alerte = new Alerte();
                $alerte->setTitre("Bon Livraison N°" . $bon->getNumbon() . ' crée');
                $alerte->setAlerte($chantier->getClient()->getNomclient() . " | " . $chantier->getNomchantier());
                $alerte->setUser($this->getMaster());
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setStatut("false");
                $alerte->setOwner($compte);
                $manager->persist($alerte);
                $manager->flush();
            }

            $alerte = new Alerte();
            $alerte->setTitre("Bon Livraison N°" . $bon->getNumbon() . ' crée');
            $alerte->setAlerte($chantier->getClient()->getNomclient() . " | " . $chantier->getNomchantier());
            $alerte->setUser($this->getMaster());
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setStatut("false");
            $alerte->setOwner($this->getMaster());
            $manager->persist($alerte);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = ' Création du de livraison N° : ' . $bon->getNumbon() . "\n\n" . $bon->getBonReference();

            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json(['result' => $bon->getId()], 201);
        }
        return $this->json(['result' => 'echec'], 404);
    }

    #[Route('/fournisseur/{id}', name: 'getBonFour', methods: ["POST"])]
    public function getBonFour($id): JsonResponse
    {
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);

        $fournisseur = $repoFournisseur->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$fournisseur) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $bons = $repoBon->findeBons($this->getMaster(), $fournisseur);
        return $this->json($bons, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
    }

    #[Route('/fournisseur/{id}/{idchantier}', name: 'getBonFourChantier', methods: ["POST"])]
    public function getBonFourChan(int $id, int $idchantier): JsonResponse
    {
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $fournisseur = $repoFournisseur->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $chantier = $repoChantier->findOneBy(['id' => $idchantier, 'user' => $this->getMaster()]);

        if (!$fournisseur) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $bons = $repoBon->findeBonsChantiers($this->getMaster(), $fournisseur, $chantier);
        return $this->json($bons, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
    }

    #[Route('/adde', name: 'addeBon', methods: ["POST"])]
    public function addeBon(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $repoCompte = $this->doctrine->getRepository(Compte::class);
        $compte = $repoCompte->findOneBy(['user' => $this->getMaster()]);

        $bon = new Bon();
        $bon->setUser($this->getMaster());
        $bon->setDobyuser($this->getUser());
        $bon->setEtat('save');
        $json = $this->getJson($request);

        $formBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'client' => $bon->getClient(),
            'chantier' => $bon->getChantier(),
            'type' => 'chantiers',
            'user' => $this->getMaster()
        ]);

        $formBon->submit($json);
        $formBon->handleRequest($request);
        if ($this->isCsrfTokenValid('addBonToken', $json['token'])) {
            $chantier = $repoChantier->findOneBy(['id' => $json['chantier']]);
            $bon->setChantier($chantier);
            $bon->setClient($chantier->getClient());

            $derLivre = $repoBon->findOneLast($this->getMaster());
            $derCommande = $repoBon->findOneLaste($this->getMaster());
            $derSuivie = $repoBon->findOneLasta($this->getMaster());

            if ($json['type'] === 'oui' or $json['type'] === 'non' or $json['type'] === 'pst') {
                if ($derCommande) {
                    $rang = $derCommande->getRang() + 1;
                    $bon->setRang($rang);
                    $bon->setNumbon($compte->getCompteBonFournisseur() . $rang);
                } else {
                    $bon->setRang(1);
                    $bon->setNumbon($compte->getCompteBonFournisseur() . '1');
                }
            }

            if ($json['type'] === 'none') {
                if ($derLivre) {
                    $rang = $derLivre->getRang() + 1;
                    $bon->setRang($rang);
                    $bon->setNumbon($compte->getCompteLivraison() . $rang);
                } else {
                    $bon->setRang(1);
                    $bon->setNumbon($compte->getCompteLivraison() . '1');
                }
            }

            if ($json['type'] === 'prepa') {
                if ($derSuivie) {
                    $rang = $derSuivie->getRang() + 1;
                    $bon->setRang($rang);
                    $bon->setNumbon('SVI-' . $rang);
                } else {
                    $bon->setRang(1);
                    $bon->setNumbon('SVI-1');
                }
            }


            if ($json['type'] != 'none') {
                $action = ' Création du Bon de commande N° : ' . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
            } else {
                $action = ' Création du de livraison N° : ' . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
            }


            $manager->persist($bon);
            $manager->flush();
            $return[] = ["numbon" => $bon->getId(), "idchantier" => $chantier->getId()];

            date_default_timezone_set('Africa/Abidjan');

            $repoUser = $this->doctrine->getRepository(User::class);
            $actio = '<p><u>Le bon N° : <a href=/crm/bon/'.$bon->getId() .'/'.$bon->getChantier()->getId().'>' . $bon->getNumbon() . '</a> a été créé:</u><br># '. $bon->getClient()->getNomClient().'<br># '. $bon->getChantier()->getNomChantier().
                '<br> par:<span class=col-blue bolo600>'.$this->getUser()->getNom().' '.$this->getUser()->getPrenoms().'</span></p>';

            $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);
            foreach ($comptes as $compte){
                $alerte = new Alerte();
                $alerte->setAlerte($actio);
                $alerte->setUser($this->getMaster());
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
            $alerte->setAlerte($actio);
            $alerte->setUser($this->getMaster());
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setOwner($this->getMaster());
            $alerte->setTitre("BON CRÉÉ");
            $alerte->setRef($bon->getId());
            $alerte->setStatut("false");
            $alerte->setType("bon");
            $manager->persist($alerte);
            $manager->flush();

            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json(['result' => $return], 201);
        }

        return $this->json(['result' => 'echec'], 404);
    }

    #[Route('/addi', name: 'addiiBon', methods: ["POST"])]
    public function addiBon(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);

        $repoCompte = $this->doctrine->getRepository(Compte::class);
        $compte = $repoCompte->findOneBy(['user' => $this->getMaster()]);

        $bon = new Bon();
        $bon->setUser($this->getMaster());
        $bon->setDobyuser($this->getUser());
        $bon->setEtat('save');
        $json = $this->getJson($request);
        $formBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'type' => 'startfournisseur',
            'user' => $this->getMaster()
        ]);
        $formBon->submit($json);
        $formBon->handleRequest($request);
        if ($formBon->isSubmitted() && $formBon->isValid()) {
            $devis = $repoDevis->findOneBy(['id' => $json['devis']]);

            $derLivre = $repoBon->findOneLast($this->getMaster());
            $derCommande = $repoBon->findOneLaste($this->getMaster());
            $derSuivie = $repoBon->findOneLasta($this->getMaster());

            $chantier = $devis->getChantier();

            if ($json['type'] === 'oui' or $json['type'] === 'non' or $json['type'] === 'pst') {
                if ($derCommande) {
                    $rang = $derCommande->getRang() + 1;
                    $bon->setRang($rang);
                    $bon->setNumbon($compte->getCompteBonFournisseur() . $rang);
                } else {
                    $bon->setRang(1);
                    $bon->setNumbon($compte->getCompteBonFournisseur() . '1');
                }
            }

            if ($json['type'] === 'none') {
                if ($derLivre) {
                    $rang = $derLivre->getRang() + 1;
                    $bon->setRang($rang);
                    $bon->setNumbon('LIV-' . $rang);
                } else {
                    $bon->setRang(1);
                    $bon->setNumbon('LIV-1');
                }
            }

            if ($json['type'] === 'prepa') {
                if ($derSuivie) {
                    $rang = $derSuivie->getRang() + 1;
                    $bon->setRang($rang);
                    $bon->setNumbon('SVI-' . $rang);
                } else {
                    $bon->setRang(1);
                    $bon->setNumbon('SVI-1');
                }
            }



            $bon->setChantier($chantier);
            $bon->setClient($chantier->getClient());
            $manager->persist($bon);
            $manager->flush();

            $repoUser = $this->doctrine->getRepository(User::class);
            $actio = '<p><u>Le bon N° : <a href=/crm/bon/'.$bon->getId() .'/'.$bon->getChantier()->getId().'>' . $bon->getNumbon() . '</a> a été créé:</u><br># '. $bon->getClient()->getNomClient().'<br># '. $bon->getChantier()->getNomChantier().
                '<br> par:<span class=col-blue bolo600>'.$this->getUser()->getNom().' '.$this->getUser()->getPrenoms().'</span></p>';

            $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);
            foreach ($comptes as $compte){
                $alerte = new Alerte();
                $alerte->setAlerte($actio);
                $alerte->setUser($this->getMaster());
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
            $alerte->setAlerte($actio);
            $alerte->setUser($this->getMaster());
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setOwner($this->getMaster());
            $alerte->setTitre("BON CRÉÉ");
            $alerte->setRef($bon->getId());
            $alerte->setStatut("false");
            $alerte->setType("bon");
            $manager->persist($alerte);
            $manager->flush();


            date_default_timezone_set('Africa/Abidjan');
            if ($json['type'] !== 'none') {
                $action = ' Création du Bon de commande N° : ' . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
            } else {
                $action = ' Création du de livraison N° : ' . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
            }

            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            $return[] = ["numbon" => $bon->getId(), "idchantier" => $chantier->getId()];
            return $this->json(['result' => $return], 201);
        }
        return $this->json(['result' => 'echec'], 404);
    }

    #[Route('/presta/add', name: 'addPrestaBon', methods: ["POST"])]
    public function addPrestaBon(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);

        $repoCompte = $this->doctrine->getRepository(Compte::class);
        $compte = $repoCompte->findOneBy(['user' => $this->getMaster()]);

        $bon = new Bon();
        $bon->setDate(new \DateTime('NOW'));
        $bon->setTva('18');
        $bon->setUser($this->getMaster());
        $bon->setDobyuser($this->getUser());
        $bon->setEtat('save');
        $json = $this->getJson($request);

        $formBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'type' => 'prestataire',
            'user' => $this->getMaster()
        ]);

        $formBon->submit($json);
        $formBon->handleRequest($request);
        if ($this->isCsrfTokenValid('addBonPrestaToken', $json['token'])) {
            $chantier = $repoChantier->findOneBy(['id' => $json['chantier']]);
            $devis = $repoDevis->findOneBy(['id' => $json['devis']]);
            $bon->setChantier($chantier);
            $bon->setDevis($devis);
            $bon->setType("pst");
            $bon->setClient($chantier->getClient());

            $derCommande = $repoBon->findOneLaste($this->getMaster());

            if ($derCommande) {
                $rang = $derCommande->getRang() + 1;
                $bon->setRang($rang);
                $bon->setNumbon($compte->getCompteBonPrestataire() . $rang);
            } else {
                $bon->setRang(1);
                $bon->setNumbon($compte->getCompteBonPrestataire() . '1');
            }

            $action = ' Création du bon de commande  N° : ' . $bon->getNumbon() . "\n\n" . $bon->getBonReference();

            $manager->persist($bon);
            $manager->flush();
            $return[] = ["numbon" => $bon->getId(), "idchantier" => $chantier->getId()];

            date_default_timezone_set('Africa/Abidjan');

            $repoUser = $this->doctrine->getRepository(User::class);
            $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);

            foreach ($comptes as $compte) {
                $alerte = new Alerte();
                $alerte->setTitre("Bon N°" . $bon->getNumbon() . ' crée');
                $alerte->setAlerte($chantier->getClient()->getNomclient() . " | " . $chantier->getNomchantier());
                $alerte->setUser($this->getMaster());
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setStatut("false");
                $alerte->setOwner($compte);
                $manager->persist($alerte);
                $manager->flush();
            }

            $alerte = new Alerte();
            $alerte->setTitre("Bon N°" . $bon->getNumbon() . ' crée');
            $alerte->setAlerte($chantier->getClient()->getNomclient() . " | " . $chantier->getNomchantier());
            $alerte->setUser($this->getMaster());
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setStatut("false");
            $alerte->setOwner($this->getMaster());
            $manager->persist($alerte);
            $manager->flush();

            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();
            return $this->json(['result' => $return], 201);
        }
        return $this->json(['result' => 'echec'], 404);
    }

    #[Route('/chanpresta/add/{id}', name: 'addPrestaBonchan', methods: ["POST"])]
    public function addPrestaBonChan(int $id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);

        $repoCompte = $this->doctrine->getRepository(Compte::class);
        $compte = $repoCompte->findOneBy(['user' => $this->getMaster()]);

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        $bon = new Bon();
        $bon->setUser($this->getMaster());
        $bon->setDobyuser($this->getUser());
        $bon->setEtat('save');
        $json = $this->getJson($request);

        $formBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'chantier' => $chantier,
            'type' => 'prestchantier',
            'user' => $this->getMaster()
        ]);

        $formBon->submit($json);
        $formBon->handleRequest($request);
        if ($this->isCsrfTokenValid('adduBonToken', $json['token'])) {
            $devis = $repoDevis->findOneBy(['id' => $json['devis']]);
            $bon->setChantier($chantier);
            $bon->setDevis($devis);
            $bon->setType("pst");
            $bon->setClient($chantier->getClient());

            $derCommande = $repoBon->findOneLaste($this->getMaster());

            if ($derCommande) {
                $rang = $derCommande->getRang() + 1;
                $bon->setRang($rang);
                $bon->setNumbon($compte->getCompteBonPrestataire() . $rang);
            } else {
                $bon->setRang(1);
                $bon->setNumbon($compte->getCompteBonPrestataire() . '1');
            }

            $action = ' Création du bon de commande  N° : ' . $bon->getNumbon() . "\n\n" . $bon->getBonReference();

            $manager->persist($bon);
            $manager->flush();
            $return[] = ["numbon" => $bon->getId(), "idchantier" => $chantier->getId()];

            date_default_timezone_set('Africa/Abidjan');

            $repoUser = $this->doctrine->getRepository(User::class);
            $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);

            foreach ($comptes as $compte) {
                $alerte = new Alerte();
                $alerte->setTitre("Bon N°" . $bon->getNumbon() . ' crée');
                $alerte->setAlerte($chantier->getClient()->getNomclient() . " | " . $chantier->getNomchantier());
                $alerte->setUser($this->getMaster());
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setStatut("false");
                $alerte->setOwner($compte);
                $manager->persist($alerte);
                $manager->flush();
            }

            $alerte = new Alerte();
            $alerte->setTitre("Bon N°" . $bon->getNumbon() . ' crée');
            $alerte->setAlerte($chantier->getClient()->getNomclient() . " | " . $chantier->getNomchantier());
            $alerte->setUser($this->getMaster());
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setStatut("false");
            $alerte->setOwner($this->getMaster());
            $manager->persist($alerte);
            $manager->flush();

            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();
            return $this->json(['result' => $bon->getId()], 201);
        }
        return $this->json(['result' => 'echec'], 404);
    }

    #[Route('/chanpresta/adda', name: 'addPrestaBonStart', methods: ["POST"])]
    public function addPrestaBonStart(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);

        $repoCompte = $this->doctrine->getRepository(Compte::class);
        $compte = $repoCompte->findOneBy(['user' => $this->getMaster()]);

        $bon = new Bon();
        $bon->setUser($this->getMaster());
        $bon->setDobyuser($this->getUser());
        $bon->setEtat('save');
        $json = $this->getJson($request);

        $formBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'type' => 'startprestataire',
            'user' => $this->getMaster()
        ]);

        $formBon->submit($json);
        $formBon->handleRequest($request);
        if ($this->isCsrfTokenValid('adduBonToken', $json['token'])) {
            $devis = $repoDevis->findOneBy(['id' => $json['devis']]);
            $chantier = $devis->getchantier();
            $bon->setChantier($devis->getChantier());
            $bon->setDevis($devis);
            $bon->setType("pst");
            $bon->setClient($devis->getClient());

            $derCommande = $repoBon->findOneLaste($this->getMaster());
            if ($derCommande) {
                $rang = $derCommande->getRang() + 1;
                $bon->setRang($rang);
                $bon->setNumbon($compte->getCompteBonPrestataire() . $rang);
            } else {
                $bon->setRang(1);
                $bon->setNumbon($compte->getCompteBonPrestataire() . '1');
            }
            $action = ' Création du bon de commande  N° : ' . $bon->getNumbon() . "\n\n" . $bon->getBonReference();

            $manager->persist($bon);
            $manager->flush();
            $return[] = ["numbon" => $bon->getId(), "idchantier" => $devis->getChantier()->getId()];

            date_default_timezone_set('Africa/Abidjan');

            $repoUser = $this->doctrine->getRepository(User::class);
            $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);

            foreach ($comptes as $compte) {
                $alerte = new Alerte();
                $alerte->setTitre("Bon N°" . $bon->getNumbon() . ' crée');
                $alerte->setAlerte($devis->getChantier()->getClient()->getNomclient() . " | " . $chantier->getNomchantier());
                $alerte->setUser($this->getMaster());
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setStatut("false");
                $alerte->setOwner($compte);
                $manager->persist($alerte);
                $manager->flush();
            }

            $alerte = new Alerte();
            $alerte->setTitre("Bon N°" . $bon->getNumbon() . ' crée');
            $alerte->setAlerte($chantier->getClient()->getNomclient() . " | " . $chantier->getNomchantier());
            $alerte->setUser($this->getMaster());
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setStatut("false");
            $alerte->setOwner($this->getMaster());
            $manager->persist($alerte);
            $manager->flush();

            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();
            return $this->json(['result' => $return], 201);
        }
        return $this->json(['result' => 'echec'], 404);
    }

    #[Route('/fourn/add', name: 'addFournBon', methods: ["POST"])]
    public function addFourniBon(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);

        $repoCompte = $this->doctrine->getRepository(Compte::class);
        $compte = $repoCompte->findOneBy(['user' => $this->getMaster()]);

        // CRÉE UN NOUVEAU BON
        date_default_timezone_set('Africa/Abidjan');
        $bon = new Bon();
        $bon->setUser($this->getMaster());
        $bon->setDobyuser($this->getUser());
        $bon->setEtat('save');
        $json = $this->getJson($request);

        $formeBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'type' => 'fournisseur',
            'user' => $this->getMaster()
        ]);

        $formeBon->submit($json);
        $formeBon->handleRequest($request);
        if ($this->isCsrfTokenValid('addBonFournToken', $json['token'])) {
            $chantier = $repoChantier->findOneBy(['id' => $json['chantier']]);
            $devis = $repoDevis->findOneBy(['id' => $json['devis']]);
            $bon->setChantier($chantier);
            $bon->setDevis($devis);
            $bon->setClient($chantier->getClient());

            $derCommande = $repoBon->findOneLaste($this->getMaster());

            if ($derCommande) {
                $rang = $derCommande->getRang() + 1;
                $bon->setRang($rang);
                $bon->setNumbon($compte->getCompteBonFournisseur() . $rang);
            } else {
                $bon->setRang(1);
                $bon->setNumbon($compte->getCompteBonFournisseur() . '1');
            }

            $action = ' Création du bon de commande  N° : ' . $bon->getNumbon() . "\n\n" . $bon->getBonReference();


            $invente = $repoLigne->inventaire($chantier->getId());

            foreach ($chantier->getRecaps() as $recap) {
                $mm = 0;
                foreach ($invente as $ligu) {
                    if ($ligu->getBon()->getEtat() === 'valide' && $ligu->getArticle() === $recap->getArticle()) {
                        $mm = $ligu->getQuantite() + $mm;
                    }
                }
                $article = $recap->getArticle();
                $ll = new Ligne();
                $ll->setDesignation($article->getDesignation());
                $ll->setUnite($article->getUnite());
                $ll->setQuantite($recap->getQuantite() - $mm);
                $ll->setPu($article->getPu());
                $ll->setReference($article->getReference());
                $ll->setArticle($article);
                $ll->setChantier($chantier);
                $ll->setUser($this->getMaster());
                $ll->setType(2);
                $manager->persist($ll);
                $manager->flush();

                $bon->addLigne($ll);
                $manager->persist($bon);
                $manager->flush();
            }

            $manager->persist($bon);
            $manager->flush();


            date_default_timezone_set('Africa/Abidjan');

            $repoUser = $this->doctrine->getRepository(User::class);
            $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);
            foreach ($comptes as $compte) {
                $alerte = new Alerte();
                $alerte->setTitre("Bon N°" . $bon->getNumbon() . ' crée');
                $alerte->setAlerte($chantier->getClient()->getNomclient() . " | " . $chantier->getNomchantier());
                $alerte->setUser($this->getMaster());
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setStatut("false");
                $alerte->setOwner($compte);
                $manager->persist($alerte);
                $manager->flush();
            }

            $alerte = new Alerte();
            $alerte->setTitre("Bon N°" . $bon->getNumbon() . ' crée');
            $alerte->setAlerte($chantier->getClient()->getNomclient() . " | " . $chantier->getNomchantier());
            $alerte->setUser($this->getMaster());
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setStatut("false");
            $alerte->setOwner($this->getMaster());
            $manager->persist($alerte);
            $manager->flush();

            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();
            $return[] = ["numbon" => $bon->getId(), "idchantier" => $chantier->getId()];


            $this->ajourBon($bon);
            return $this->json(['result' => $return], 201);

        }

        return $this->json(['result' => 'echec'], 404);
    }

    #[Route('/update/{id}', name: 'updateBon', methods: ["PUT"])]
    public function updateBon($id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoBon = $this->doctrine->getRepository(Bon::class);

        $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$bon) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $json = $this->getJson($request);
        $formBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'client' => $bon->getClient(),
            'chantier' => $bon->getChantier(),
            'type' => 'chantier',
            'user' => $this->getMaster()
        ]);
        $formBon->submit($json);
        $formBon->handleRequest($request);
        if ($formBon->isSubmitted() && $formBon->isValid()) {
            $manager->persist($bon);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = ' Mise à jour du Bon N° : ' . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            $repoUser = $this->doctrine->getRepository(User::class);
            $actio = '<p><u>Le bon N° : <a href=/crm/bon/'.$bon->getId() .'/'.$bon->getChantier()->getId().'>' . $bon->getNumbon() . '</a> a été modifié:</u><br># '. $bon->getClient()->getNomClient().'<br># '. $bon->getChantier()->getNomChantier().
                '<br> par:<span class=col-blue bolo600>'.$this->getUser()->getNom().' '.$this->getUser()->getPrenoms().'</span></p>';

            $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);
            foreach ($comptes as $compte){
                $alerte = new Alerte();
                $alerte->setAlerte($actio);
                $alerte->setUser($this->getMaster());
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setOwner($compte);
                $alerte->setTitre("BON MODIFIÉ");
                $alerte->setRef($bon->getId());
                $alerte->setStatut("false");
                $alerte->setType("bon");
                $manager->persist($alerte);
                $manager->flush();
            }

            $alerte = new Alerte();
            $alerte->setAlerte($actio);
            $alerte->setUser($this->getMaster());
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setOwner($this->getMaster());
            $alerte->setTitre("BON MODIFIÉ");
            $alerte->setRef($bon->getId());
            $alerte->setStatut("false");
            $alerte->setType("bon");
            $manager->persist($alerte);
            $manager->flush();

            $this->ajourBon($bon);

            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route('/presta/update/{id}', name: 'updateBonPresta', methods: ["PUT"])]
    public function prestaUpdateBon($id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);

        $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$bon) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $json = $this->getJson($request);
        $formBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'type' => 'prestataire',
            'user' => $this->getMaster()
        ]);

        $formBon->submit($json);
        $formBon->handleRequest($request);
        if ($this->isCsrfTokenValid('updBonPrestaToken', $json['token'])) {
            $chantier = $repoChantier->findOneBy(['id' => $json['chantier']]);
            $devis = $repoDevis->findOneBy(['id' => $json['devis']]);
            $bon->setChantier($chantier);
            $bon->setDevis($devis);
            $bon->setType("pst");
            $bon->setClient($chantier->getClient());
            $manager->persist($bon);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = ' Mise à jour du Bon N° : ' . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            $repoUser = $this->doctrine->getRepository(User::class);
            $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);
            foreach ($comptes as $compte) {

                $alerte = new Alerte();
                $alerte->setTitre("Bon N°" . $bon->getNumbon() . ' modifié');
                $alerte->setAlerte($bon->getChantier()->getClient()->getNomclient() . " | " . $bon->getChantier()->getNomchantier());
                $alerte->setUser($this->getMaster());
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setStatut("false");
                $alerte->setOwner($compte);
                $manager->persist($alerte);
                $manager->flush();

            }

            $alerte = new Alerte();
            $alerte->setTitre("Bon N°" . $bon->getNumbon() . ' modifié');
            $alerte->setAlerte($bon->getChantier()->getClient()->getNomclient() . " | " . $bon->getChantier()->getNomchantier());
            $alerte->setUser($this->getMaster());
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setStatut("false");
            $alerte->setOwner($this->getMaster());
            $manager->persist($alerte);
            $manager->flush();

            $this->ajourBon($bon);

            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route('/fourn/update/{id}', name: 'updateBonFourn', methods: ["PUT"])]
    public function fourneUpdateBon($id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);

        $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$bon) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $json = $this->getJson($request);
        $formBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'type' => 'fournisseur',
            'user' => $this->getMaster(),
            'chantier' => $bon->getChantier(),
        ]);

        $formBon->submit($json);
        $formBon->handleRequest($request);
        if ($this->isCsrfTokenValid('updBonFournToken', $json['token'])) {
            $chantier = $repoChantier->findOneBy(['id' => $json['chantier']]);
            $devis = $repoDevis->findOneBy(['id' => $json['devis']]);
            $bon->setChantier($chantier);
            $bon->setDevis($devis);
            $bon->setClient($chantier->getClient());
            $manager->persist($bon);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = ' Mise à jour du Bon N° : ' . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            $repoUser = $this->doctrine->getRepository(User::class);
            $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);
            foreach ($comptes as $compte) {

                $alerte = new Alerte();
                $alerte->setTitre("Bon N°" . $bon->getNumbon() . ' modifié');
                $alerte->setAlerte($bon->getChantier()->getClient()->getNomclient() . " | " . $bon->getChantier()->getNomchantier());
                $alerte->setUser($this->getMaster());
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setStatut("false");
                $alerte->setOwner($compte);
                $manager->persist($alerte);
                $manager->flush();

            }

            $alerte = new Alerte();
            $alerte->setTitre("Bon N°" . $bon->getNumbon() . ' modifié');
            $alerte->setAlerte($bon->getChantier()->getClient()->getNomclient() . " | " . $bon->getChantier()->getNomchantier());
            $alerte->setUser($this->getMaster());
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setStatut("false");
            $alerte->setOwner($this->getMaster());
            $manager->persist($alerte);
            $manager->flush();

            $this->ajourBon($bon);

            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route('/status/{id}/{status}', name: 'statusBon', methods: ["GET"])]
    public function statusBon($id, $status, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoBon = $this->doctrine->getRepository(Bon::class);

        $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$bon) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $bon->setStatus($status);
        $manager->persist($bon);
        $manager->flush();
        return $this->json(['result' => 'error'], 200);
    }

    #[Route('/valider/{id}', name: 'validerBon', methods: ["GET"])]
    public function validebon(int $id)
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoValide = $this->doctrine->getRepository(Valider::class);

        // RECUPERE LE BON
        $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$bon) {
            return $this->json(['result' => 'erreur'], 404);
        }
        $this->ajourBonLigne($bon);
        $bon->setVabyuser($this->getUser());
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
                $valider->setUser($this->getMaster());
                $valider->setDobyuser($this->getUser());
                $manager->persist($valider);
                $manager->flush();
            }


            $bon->setEtat('valide');
            $manager->persist($bon);
            $manager->flush();
            if ($bon->getType() === 'oui' || $bon->getType() === 'non') {
                $this->ajourBonLigne($bon);
            }

            $repoUser = $this->doctrine->getRepository(User::class);
            $actio = '<p><u>Le bon N° : <a href=/crm/bon/'.$bon->getId() .'/'.$bon->getChantier()->getId().'>' . $bon->getNumbon() . '</a> a été validé:</u><br># '. $bon->getClient()->getNomClient().'<br># '. $bon->getChantier()->getNomChantier().
                '<br> par:<span class=col-blue bolo600>'.$this->getUser()->getNom().' '.$this->getUser()->getPrenoms().'</span></p>';

            $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);
            foreach ($comptes as $compte){
                $alerte = new Alerte();
                $alerte->setAlerte($actio);
                $alerte->setUser($this->getMaster());
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
            $alerte->setUser($this->getMaster());
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setOwner($this->getMaster());
            $alerte->setTitre("BON FOURNISSEUR VALIDÉ");
            $alerte->setRef($bon->getId());
            $alerte->setStatut("false");
            $alerte->setType("bon");
            $manager->persist($alerte);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = " Validation du Bon N° : " . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);

        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route('/solder/{id}/{ll}', name: 'solderBon', methods: ["GET"])]
    public function solderBon(int $id, int $ll)
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoValide = $this->doctrine->getRepository(Valider::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoMonnaie = $this->doctrine->getRepository(Monnaie::class);

        // RECUPERE LE BON
        $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$bon) {
            return $this->json(['result' => 'erreur'], 404);
        }
        $this->ajourBonLigne($bon);

        $bon->setVabyuser($this->getUser());
        $chantier = $bon->getChantier();
        $client = $bon->getClient();
        $devis = $bon->getDevis();

        $check = $repoValide->findBy(['idlink' => $bon->getId(), 'type' => 2]);
        if ($check) {
            $caisse = new Caisse();
            $caisse->setChantier($chantier);
            $caisse->setUser($this->getMaster());
            $caisse->setDobyuser($this->getUser());
            $caisse->setClient($chantier->getClient());
            $caisse->setOperation("debit");
            $monnaie = $repoMonnaie->findOneBy(["id" => 1]);
            $caisse->setBon($bon);
            $caisse->setMonnaie($monnaie);
            $caisse->setMontant($bon->getReste());
            $caisse->setEtat('save');

            $der = $repoCaisse->findBy(['user' => $this->getMaster()], ['id' => 'DESC'], 1);
            $repoCompte = $this->doctrine->getRepository(Compte::class);
            $compte = $repoCompte->findOneBy(['user' => $this->getMaster()]);
            if ($der) {
                $rang = $der[0]->getRang() + 1;
                $caisse->setRang($rang);
                $caisse->setNumcaisse($compte->getCompteCaisse() . $rang);
            } else {
                $caisse->setRang(1);
                $caisse->setNumcaisse($compte->getCompteCaisse() . '1');
            }

            $caisse->setDate(new \DateTime('NOW'));
            $caisse->setType(1);
            $caisse->setCaisseReference($client->getNomClient() ." | ".$chantier->getNomChantier());
            $caisse->setDevis($devis);
            $caisse->setMoyen("Autre");
            $caisse->setFournisseur($bon->getFournisseur());
            $manager->persist($caisse);
            $manager->flush();

            $repoUser = $this->doctrine->getRepository(User::class);
            $comptes = $repoUser->findBy(['compte' => $this->getUser()]);

            foreach ($comptes as $compte) {
                $alerte = new Alerte();
                $alerte->setAlerte("Création du bon de caisse N°" . $caisse->getNumcaisse() . " | " . $caisse->getClient()->getNomclient() . " | " . $caisse->getChantier()->getNomchantier());
                $alerte->setTitre("Nouveau bon de caisse N° " . $caisse->getNumcaisse());
                $alerte->setUser($this->getMaster());
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setStatut("false");
                $alerte->setOwner($compte);
                $manager->persist($alerte);
                $manager->flush();
            }

            $lligne = $repoLigne->findOneBy(["id"=>$ll, "user"=> $this->getMaster()]);
            $journal = new Journal();
            $journal->setLigne($lligne);
            $journal->setDevis($devis);
            $journal->setCaisse($caisse);
            $manager->persist($journal);
            $manager->flush();

            $ligne = new Ligne();
            $ligne->setUser($this->getMaster());
            $ligne->setDesignation("SOLDE FOURNISSEUR " . $bon->getFournisseur()->getFournisseur());
            $ligne->setCaisse($caisse);
            $ligne->setChantier($caisse->getChantier());
            $ligne->setUnite("rien");
            $ligne->setQuantite(0);
            $ligne->setPu($bon->getReste());
            $ligne->setRemise("0");
            $ligne->setType(3);
            $ligne->setUnite("rien");
            $manager->persist($ligne);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p>Création du bon de caisse N° : ' . $caisse->getNumcaisse() . '</p> ' . $caisse->getCaisseReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            $return[] = ["numcaisse" => $caisse->getId(), "idchantier" => $bon->getChantier()->getId()];
            return $this->json(['result' => $return], 200);


        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route('/devalider/{id}', name: 'devaliderBon', methods: ["GET"])]
    public function delvalbon($id)
    {
        $manager = $this->doctrine->getManager();
        $repoValide = $this->doctrine->getRepository(Valider::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);

        $valide = $repoValide->findOneBy(['idlink' => $id, 'type' => 2]);
        $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);


        if ($valide) {
            if ($valide->getType() === 2) {
                if (!$bon) {
                    return $this->redirectToRoute('logout');
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
                $actio = '<p><u>Le bon N° : <a href=/crm/bon/'.$bon->getId() .'/'.$bon->getChantier()->getId().'>' . $bon->getNumbon() . '</a> a été dévalidé:</u><br># '. $bon->getClient()->getNomClient().'<br># '. $bon->getChantier()->getNomChantier().
                    '<br> par:<span class=col-blue bolo600>'.$this->getUser()->getNom().' '.$this->getUser()->getPrenoms().'</span></p>';

                $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);
                foreach ($comptes as $compte){
                    $alerte = new Alerte();
                    $alerte->setAlerte($actio);
                    $alerte->setUser($this->getMaster());
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
                $alerte->setUser($this->getMaster());
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setOwner($this->getMaster());
                $alerte->setTitre("BON FOURNISSEUR DÉVALIDÉ");
                $alerte->setRef($bon->getId());
                $alerte->setStatut("false");
                $alerte->setType("bon");
                $manager->persist($alerte);
                $manager->flush();

                date_default_timezone_set('Africa/Abidjan');
                $action = " Dévalidation du Bon N° : " . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
                $history = new Historique();
                $history->setUser($this->getMaster());
                $history->setDobyuser($this->getUser());
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

    #[Route('/del/{id}', name: 'delBon', methods: ["DELETE"])]
    public function delBon($id, Request $request): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);
        $repoValider = $this->doctrine->getRepository(Valider::class);

        $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$bon) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $valider = $repoValider->findOneBy(['idlink' => $bon->getId(), 'type' => 2]);
        if ($valider) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $cor = $repoCorbeille->findOneBy(['designation' => $bon->getId(), 'master' => $this->getMaster(), 'type' => 4]);
        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($bon->getId());
            $corbeille->setMaster($this->getMaster());
            $corbeille->setDelby($this->getUser());
            $corbeille->setEtat('faible');
            $corbeille->setType('4');
            $manager->persist($corbeille);
            $manager->flush();
            $bon->setCorbeille($corbeille);
            $manager->persist($bon);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');

            $repoUser = $this->doctrine->getRepository(User::class);
            $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);
            foreach ($comptes as $compte) {
                $alerte = new Alerte();
                $alerte->setTitre($bon->getNumbon() . " supprimé");
                $alerte->setAlerte($bon->getChantier()->getClient()->getNomclient() . " | " . $bon->getChantier()->getNomchantier());
                $alerte->setUser($this->getMaster());
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setStatut("false");
                $alerte->setOwner($compte);
                $manager->persist($alerte);
                $manager->flush();
            }

            $alerte = new Alerte();
            $alerte->setTitre($bon->getNumbon() . " supprimé");
            $alerte->setAlerte($bon->getChantier()->getClient()->getNomclient() . " | " . $bon->getChantier()->getNomchantier());
            $alerte->setUser($this->getMaster());
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setStatut("false");
            $alerte->setOwner($this->getMaster());
            $manager->persist($alerte);
            $manager->flush();

            $action = " Suppression du Bon N° : " . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json(['result' => 'bon suprimé'], 200);
        }

        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route('/restaurer/{id}', name: 'restaureBon', methods: ["GET"])]
    public function restaureBon($id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
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

            date_default_timezone_set('Africa/Abidjan');

            $repoUser = $this->doctrine->getRepository(User::class);
            $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);
            foreach ($comptes as $compte) {
                $alerte = new Alerte();
                $alerte->setTitre($bon->getNumbon() . " restauré");
                $alerte->setAlerte($bon->getChantier()->getClient()->getNomclient() . " | " . $bon->getChantier()->getNomchantier());
                $alerte->setUser($this->getMaster());
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setStatut("false");
                $alerte->setOwner($compte);
                $manager->persist($alerte);
                $manager->flush();
            }

            $alerte = new Alerte();
            $alerte->setTitre($bon->getNumbon() . " restauré");
            $alerte->setAlerte($bon->getChantier()->getClient()->getNomclient() . " | " . $bon->getChantier()->getNomchantier());
            $alerte->setUser($this->getMaster());
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setStatut("false");
            $alerte->setOwner($this->getMaster());
            $manager->persist($alerte);
            $manager->flush();

            $action = " Restauration du Bon N° : " . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route('/deldefinitive/{id}', name: 'deldefBon', methods: ["DELETE"])]
    public function deldefbon($id, Request $request): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$bon) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $cor = $repoCorbeille->findOneBy(['designation' => $bon->getId(), 'master' => $this->getMaster(), 'type' => 4]);
        if ($cor) {
            date_default_timezone_set('Africa/Abidjan');

            $repoUser = $this->doctrine->getRepository(User::class);
            $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);
            foreach ($comptes as $compte) {

                $alerte = new Alerte();
                $alerte->setAlerte("Suppresson définitive du Bon de commande N°" . $bon->getNumbon() . " | " . $bon->getChantier()->getClient()->getNomclient() . " | " . $bon->getChantier()->getNomchantier());
                $alerte->setUser($this->getMaster());
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setStatut("false");
                $alerte->setOwner($compte);
                $manager->persist($alerte);
                $manager->flush();

            }

            $action = " Suppression définitive du Bon de commande N° : " . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            if ($bon->getUser()->getCompte() === null) {
                $cor->setEtat('ultra');
                $manager->persist($cor);
                $manager->flush();
                $this->ajourBon($bon->getChantier());
                $this->ajourDevis($bon->getChantier());
                $this->ajourChantier($bon->getChantier());
            } else {
                $cor->setEtat('fort');
                $manager->persist($cor);
                $manager->flush();
            }


            return $this->json(['result' => 'Bon suprimé'], 204);
        }
        return $this->json(['error' => 'Erreur'], 404);
    }

    #[Route('/dupliquer/{id}', name: 'dupBon', methods: ["POST"])]
    public function dupBon($id, Request $request)
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);

        $repoCompte = $this->doctrine->getRepository(Compte::class);
        $compte = $repoCompte->findOneBy(['user' => $this->getMaster()]);

        // RECUPERE LE BON
        $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$bon) {
            return $this->json(['result' => 'erreur'], 404);
        }

        $dubon = new Bon();
        $dubon->setDevis($bon->getDevis());
        $dubon->setDate(new \DateTime('NOW'));
        $dubon->setTva('18');
        $dubon->setType($bon->getType());
        $dubon->setStatus($bon->getStatus());
        $der = $repoBon->findBy(['user' => $this->getMaster()], ['id' => 'DESC'], 1);
        $rang = $der[0]->getRang() + 1;
        date_default_timezone_set('Africa/Abidjan');
        $groupes = $repoGroupe->findBy(['bon' => $bon]);
        $dubon->setRang($rang);

        if ($bon->getType() === "oui" || $bon->getType() === "non") {
            $dubon->setNumbon($compte->getCompteBonFournisseur() . $rang);
        }

        if ($bon->getType() === "none") {
            $dubon->setNumbon($compte->getCompteLivraison() . $rang);
        }

        if ($bon->getType() === "pst") {
            $dubon->setNumbon($compte->getCompteBonPrestataire() . $rang);
        }

        $dubon->setAarem($bon->getAarem());
        $dubon->setPtva($bon->getPtva());
        $dubon->setTva($bon->getTva());
        $dubon->setEtat('save');
        $dubon->setTotalht($bon->getTotalht());
        $dubon->setTotalttc($bon->getTotalttc());
        $dubon->setBonReference($bon->getBonReference());

        $dubon->setChantier($bon->getChantier());
        $dubon->setMonnaie($bon->getMonnaie());
        $dubon->setClient($bon->getClient());
        $dubon->setContact($bon->getContact());
        $dubon->setConditions($bon->getConditions());
        $dubon->setModele($bon->getModele());
        $dubon->setUser($this->getMaster());
        $dubon->setDobyuser($bon->getUser());
        $dubon->setMonnaie($bon->getMonnaie());
        $manager->persist($dubon);
        $manager->flush();

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
            $lign->setUser($this->getMaster());
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
                $lign->setUser($this->getMaster());
                $manager->persist($lign);
                $manager->flush();
            }
        }


        date_default_timezone_set('Africa/Abidjan');


        $repoUser = $this->doctrine->getRepository(User::class);
        $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);
        foreach ($comptes as $compte) {
            $alerte = new Alerte();
            $alerte->setTitre($bon->getNumbon() . " dupliqué");
            $alerte->setAlerte($bon->getChantier()->getClient()->getNomclient() . " | " . $bon->getChantier()->getNomchantier());
            $alerte->setUser($this->getMaster());
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setStatut("false");
            $alerte->setOwner($compte);
            $manager->persist($alerte);
            $manager->flush();
        }

        $alerte = new Alerte();
        $alerte->setTitre($bon->getNumbon() . " dupliqué");
        $alerte->setAlerte($bon->getChantier()->getClient()->getNomclient() . " | " . $bon->getChantier()->getNomchantier());
        $alerte->setUser($this->getMaster());
        $alerte->setDate(new \DateTime('NOW'));
        $alerte->setStatut("false");
        $alerte->setOwner($this->getMaster());
        $manager->persist($alerte);
        $manager->flush();

        $action = 'Duplication du bon de commande : ' . $bon->getNumbon() . "\n\n" . $bon->getBonReference();
        $history = new Historique();
        $history->setUser($this->getMaster());
        $history->setDobyuser($this->getUser());
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();

        return $this->json(['result' => $dubon->getId()], 200);

    }

    #[Route('/deplacer/{id}/{idchan}', name: 'deplaceBon', methods: ["GET"])]
    public function depBon(int $id, int $idchan, Request $request)
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);

        // RECUPERE LE BON
        $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $chantier = $repoChantier->findOneBy(['id' => $idchan, 'user' => $this->getMaster()]);

        if (!$bon && !$chantier) {
            return $this->json(['result' => 'erreur'], 404);
        }

        foreach ($bon->getLignes() as $ligne) {
            $ligne->setChantier($chantier);
            $manager->persist($ligne);
            $manager->flush();
        }

        $bon->setChantier($chantier);
        $bon->setClient($chantier->getClient());

        $manager->persist($bon);
        $manager->flush();

        date_default_timezone_set('Africa/Abidjan');


        $repoUser = $this->doctrine->getRepository(User::class);
        $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);
        foreach ($comptes as $compte) {
            $alerte = new Alerte();
            $alerte->setTitre($bon->getNumbon() . " déplacé");
            $alerte->setAlerte($bon->getChantier()->getClient()->getNomclient() . " | " . $bon->getChantier()->getNomchantier());
            $alerte->setUser($this->getMaster());
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setStatut("false");
            $alerte->setOwner($compte);
            $manager->persist($alerte);
            $manager->flush();
        }
        $alerte = new Alerte();
        $alerte->setTitre($bon->getNumbon() . " déplacé");
        $alerte->setAlerte($bon->getChantier()->getClient()->getNomclient() . " | " . $bon->getChantier()->getNomchantier());
        $alerte->setUser($this->getMaster());
        $alerte->setDate(new \DateTime('NOW'));
        $alerte->setStatut("false");
        $alerte->setOwner($this->getMaster());
        $manager->persist($alerte);
        $manager->flush();

        $action = '<p>Déplacement du Bon de commande N° : ' . $bon->getNumbon() . '</p> ' . $bon->getBonReference();
        $history = new Historique();
        $history->setUser($this->getMaster());
        $history->setDobyuser($this->getUser());
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();

        return $this->json(['result' => $bon->getId()], 200);
    }


    #[Route('/{id}/{idchantier}', name: 'editbon', requirements: ['id' => '\d+', 'idchantier' => '\d+'], methods: ["GET"])]
    #[Route('/groupe/{id}/{idgroupe}/{idchantier}', name: 'bongroupe')]
    #[Route('/ligne/{id}/{idligne}/{idchantier}', name: 'editlignebon')]
    public function bon(int $idgroupe = null, int $idligne = null, int $id = null, int $idchantier, Request $request)
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ
        $manager = $this->doctrine->getManager();
        date_default_timezone_set('Africa/Abidjan');

        // LES REPOSITORIES
        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoForme = $this->doctrine->getRepository(Forme::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoValider = $this->doctrine->getRepository(Valider::class);


        // RECUPERE LE PROJET COURANT ET LE BON
        $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $chantier = $repoChantier->findOneBy(['id' => $idchantier, 'user' => $this->getMaster()]);

        //  DECONNECTE SI LE PROJET N'EXISTE PAS
        if (!$bon || !$chantier) {
            return $this->redirectToRoute('logout');
        }

        // CRÉE UN NOUVEAU BON

        date_default_timezone_set('Africa/Abidjan');
        $bone = new Bon();
        $bone->setDate(new \DateTime('NOW'));
        $bone->setTva('18');
        $bone->setUser($this->getMaster());
        $bone->setDobyuser($this->getUser());
        $bone->setEtat('save');
        $bone->setBonReference('Référence');
        $formBonPresta = $this->formFactory->createNamed('', BonType::class, $bone, [
            'type' => 'prestataire',
            'user' => $this->getMaster()
        ]);

        $formBonFourne = $this->formFactory->createNamed('', BonType::class, $bone, [
            'type' => 'fournisseur',
            'user' => $this->getMaster(),
            'chantier' => $chantier
        ]);

        if ($bon->getType() === "pst") {
            $formBon = $this->formFactory->createNamed('', BonType::class, $bon, [
                'type' => 'prestataire',
                'user' => $this->getMaster()
            ]);
        } else {
            $formBon = $this->formFactory->createNamed('', BonType::class, $bon, [
                'type' => 'fournisseur',
                'user' => $this->getMaster(),
                'chantier' => $chantier
            ]);
        }

        // ON RECUPERE TOUTE LES LIGNES
        $lignes = $repoLigne->findBy(['bon' => $bon]);

        // ON VALIDE LE BON
        $bon->setClient($chantier->getClient());
        $formBon->handleRequest($request);
        if ($formBon->isSubmitted() && $formBon->isValid()) {
            $manager->persist($bon);
            $manager->flush();
            return $this->redirectToRoute('editbon', ['id' => $bon->getId(), 'idchantier' => $chantier->getId()]);
        }

        // FORMULAIRE POUR AJOUT D'UN NOUVEL ARTICLE
        $lign = $repoLigne->findOneBy(['id' => $idligne, 'user' => $this->getMaster()]);
        if (!$lign) {
            $lign = new Ligne();
            $lign->setChantier($chantier);
            $lign->setUser($this->getMaster());
            $lign->setBon($bon);
            $lign->setRemise(0);
        }
        $forme = $this->formFactory->createNamed('', LigneType::class, $lign, [
            'bon' => $bon
        ]);


        // FORMULAIRE POUR CHOISIR
        $liggn = $repoLigne->findOneBy(['id' => $idligne, 'user' => $this->getMaster()]);
        if (!$liggn) {
            $liggn = new Ligne();
            $liggn->setChantier($chantier);
            $liggn->setRemise(0);
            $liggn->setUser($this->getMaster());
            $liggn->setBon($bon);
        }
        $formez = $this->formFactory->createNamed('', LignType::class, $liggn, [
            'bon' => $bon,
            'master' => $this->getMaster()
        ]);


        // FORM GROUPE
        if ($idgroupe == null) {
            $groupe = new Groupe();
            $groupe->setBon($bon);
            $editGrou = null;
        } else {
            $groupe = $repoGroupe->find($idgroupe);
            $editGrou = 'salut';
        }
        $formGroupe = $this->formFactory->createNamed('', GroupeType::class, $groupe);

        $listegroupe = $repoGroupe->findBy(
            ['bon' => $bon],
            ['groupe' => 'ASC']);


        // FORMULAIRE POUR DUPLIQUER
        $dubon = new Bon();
        $dubon->setDate(new \DateTime('NOW'));
        $dubon->setTva('18');
        $dubon->setBonReference($bon->getBonReference());
        // FORMULAIRE POUR DUPLIQUER UN BON


        // CRÉE UN NOUVEAU BON
        $nebon = new Bon();
        $nebon->setDate(new \DateTime('NOW'));
        $nebon->setTva('18');
        $nebon->setChantier($chantier);
        $nebon->setUser($this->getMaster());
        $nebon->setDobyuser($this->getUser());
        $nebon->setClient($chantier->getClient());
        $nebon->setEtat('save');
        $nebon->setBonReference($chantier->getNomChantier());


        // MISE EN FORME DU BON
        $forte = $repoForme->findOneBy(['user' => $this->getUser(), 'used' => 'used']);
        $fortes = $repoForme->findBy(['user' => $this->getUser()]);
        $formes = $this->formFactory->createNamed('', FormeType::class, $forte);

        // BON POUR REACT
        $jsonbon = $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
        $jsonforme = $this->json($forte, 200, ['Content-Type' => 'application/json'], ['groups' => 'forme']);
        $jsonformes = $this->json($fortes, 200, ['Content-Type' => 'application/json'], ['groups' => 'forme']);


        $th = 0;
        $rem = 0;
        $ttc = 0;
        $vtva = 0;
        $depense = 0;


        foreach ($bon->getLignes() as $lig) {
            if ($bon->getAarem() === 'oui') {
                $th = (($lig->getQuantite() * $lig->getPu()) * (((100) - $lig->getRemise()) / 100)) + $th;
                $vtva = ($th * $bon->getTva()) / 100;
                $rem = (($lig->getQuantite() * $lig->getPu()) * (($lig->getRemise()) / 100)) + $rem;
                $ttc = $th + $vtva;
            } else {
                $th = ($lig->getQuantite() * $lig->getPu()) + $th;
                if ($bon->getPtva() === "non") {
                    $vtva = 0;
                } else {
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

        $bon->setRecu($ttccaisse);
        $bon->setReste($bon->getTotalttc() - $ttccaisse);
        $bon->setTotalht($th);
        $bon->setTotalttc($ttc);
        $bon->setVremise($rem);
        $bon->setVtva($vtva);

        $manager->persist($bon);
        $manager->flush();

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        if ($bon->getEtat() === 'valide') {
            $valider = $repoValider->findOneBy(['idlink' => $bon->getId(), 'type' => 2]);
            if ($valider) {
                if ($valider->getChantier() !== $bon->getChantier()) {
                    $valider->setChantier($bon->getChantier());
                    $manager->persist($valider);
                    $manager->flush();
                }
            } else {
                if ($bon->getType() !== 'none' || $bon->getType() !== 'non') {
                    $operation = 'BON N°: ' . $bon->getNumbon() . ' | ' . $bon->getChantier()->getNomChantier();
                    $debit = $bon->getTotalttc();
                    $credit = 0;
                    $depense = $depense + $debit;
                }
                if ($bon->getType() === 'non') {
                    $operation = 'BON DE RETOUR N°:' . $bon->getNumbon() . ' | ' . $bon->getChantier()->getNomChantier();
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
                $valider->setUser($this->getMaster());
                $valider->setDobyuser($this->getUser());
                $bon->setEtat('valide');
                $manager->persist($bon);
                $manager->persist($valider);
                $manager->flush();
            }
        }

        $this->ajourBonLigne($bon);

        return $this->render('content/bon.html.twig', [
            'controller_name' => 'BonController',
            'formGroup' => $formGroupe->createView(),
            'formez' => $formez->createView(),
            'forme' => $forme->createView(),
            'title' => 'BON DE COMMANDE | ' . $chantier->getNomChantier(),
            'chantier' => $chantier,
            'formBon' => $formBon->createView(),
            'formBonPresta' => $formBonPresta->createView(),
            'formBonFourne' => $formBonFourne->createView(),
            'editMode' => $bon->getId() !== null,
            'editMod' => $idligne !== null,
            'idgroupe' => $idgroupe,
            'idligne' => $idligne,
            'editGrou' => $editGrou,
            'bon' => $bon,
            'lignes' => $lignes,
            'listGroup' => $listegroupe,
            'estmaster' => $this->getMaster() === $this->getUser(),
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'formes' => $formes->createView(),
            'forte' => $forte,
            'jsonbon' => $jsonbon->getContent(),
            'jsonforme' => $jsonforme->getContent(),
            'jsonformes' => $jsonformes->getContent(),
            'history' => $historiques,
        ]);
    }

}
