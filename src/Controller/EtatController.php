<?php

namespace App\Controller;

use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Chantier;
use App\Entity\Client;
use App\Entity\Decompte;
use App\Entity\Devis;
use App\Entity\Facture;
use App\Entity\Forme;
use App\Entity\Fournisseur;
use App\Entity\Historique;
use App\Entity\Intervenant;
use App\Entity\Personnel;
use App\Entity\Relever;
use App\Entity\User;
use App\Form\BonType;
use App\Form\CaisseType;
use App\Form\ChantierType;
use App\Form\ClientType;
use App\Form\FournisseurType;
use App\Form\PersonnelType;
use App\Form\ReleverType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Routing\Annotation\Route;


#[Route(path: '/crm/etat')]
class EtatController extends AbstractController
{

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

    #[Route(path: '/search/client/{aa}', name: 'geckli', methods: ['GET'])]
    public function getCliek(string $aa)
    {
        $repoClient = $this->doctrine->getRepository(Client::class);
        $clients = $repoClient->findEtats($this->getMaster(), $aa);
        if ($aa === "wzwz") {
            $clients = $repoClient->findClients($this->getMaster());
        }
        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);
    }
    #[Route(path: '/depense/mois/{aa}', name: 'getDepenseMois', methods: ['GET'])]
    public function getDepenseMois(string $aa)
    {
        $repoClient = $this->doctrine->getRepository(Client::class);
        $clients = $repoClient->findEtats($this->getMaster(), $aa);
        if ($aa === "wzwz") {
            $clients = $repoClient->findClients($this->getMaster());
        }
        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);
    }


    #[Route(path: '/', name: 'etat')]
    #[Route(path: '/client/{idclient}', name: 'edclient', requirements: ['idclient' => '\d+'])]
    #[Route(path: '/{idchantier}', name: 'edchantier', requirements: ['idchantier' => '\d+'])]
    #[Route(path: '/fournisseur/{idfourn}', name: 'editfourne')]
    #[Route(path: '/prestataire/{idpresta}', name: 'editpresta')]
    #[Route(path: '/intervenant/{idinterve}', name: 'getIntervenant', requirements: ['idinterve' => '\d+'])]
    #[Route(path: '/personnel/{idperson}', name: 'editpersondepense', requirements: ['idperson' => '\d+'])]
    public function index(int $idclient = null, int $idchantier = null, int $idfourn = null, int $idpresta = null, int $idinterve = null, int $idperson = null)
    {

        $manager = $this->doctrine->getManager();

        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $repoFourn = $this->doctrine->getRepository(Fournisseur::class);
        $repoIntervenant = $this->doctrine->getRepository(Intervenant::class);
        $repoPersonel = $this->doctrine->getRepository(Personnel::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoDecompte = $this->doctrine->getRepository(Decompte::class);
        $repoFacture = $this->doctrine->getRepository(Facture::class);

        $repoForme = $this->doctrine->getRepository(Forme::class);
        $foot = $repoForme->findOneBy(['user' => $this->getUser(), 'rang' => 1]);
        $foote = $repoForme->findOneBy(['user' => $this->getUser(), 'rang' => 2]);

        if (!$foot) {
            $forrm = new Forme();
            $forrm->setRang(1);
            $forrm->setIntituler('ENTÊTE 1');
            $forrm->setUsed('used');
            $forrm->setDsize(12);
            $forrm->setPiedsize(10);
            $forrm->setTeteH(21);
            $forrm->setTeteY(5);
            $forrm->setTeteDH(0);
            $forrm->setTeteDB(0);
            $forrm->setTeteDG(0);
            $forrm->setTeteDD(0);
            $forrm->setTypeFooter("aucun");
            $forrm->setTypeEntete("aucun");
            $forrm->setHeaderHeight(5);
            $forrm->setFooterHeight(1.5);
            $forrm->setHeaderWith(21);
            $forrm->setUser($this->getUser());
            $manager->persist($forrm);
            $manager->flush();
        }
        if (!$foote) {
            $fm = new Forme();
            $fm->setRang(2);
            $fm->setIntituler('ENTÊTE 2');
            $fm->setUsed('');
            $fm->setDsize(12);
            $fm->setPiedsize(10);
            $fm->setTeteH(21);
            $fm->setTeteY(5);
            $fm->setTeteDH(0);
            $fm->setTeteDB(0);
            $fm->setTeteDG(0);
            $fm->setTeteDD(0);
            $fm->setTypeFooter("aucun");
            $fm->setTypeEntete("aucun");
            $fm->setHeaderHeight(5);
            $fm->setFooterHeight(1.5);
            $fm->setHeaderWith(21);
            $fm->setUser($this->getUser());
            $manager->persist($fm);
            $manager->flush();
        }

        // ON CRÉE UN NOUVEAU CLIENT SI LE PROJET N'EXISTE PAS
        $client = $repoClient->findOneBy(['id' => $idclient, 'user' => $this->getUser()]);
        if (!$client) {
            $client = new Client();
            $client->setUser($this->getMaster());
            $client->setDobyuser($this->getUser());
        }

        //FORM CLIENT
        $formClient = $this->formFactory->createNamed('', ClientType::class, $client);

        // CRÉE UN NOUVEAU BON
        date_default_timezone_set('Africa/Abidjan');
        $bon = new Bon();
        $bon->setDate(new \DateTime('NOW'));
        $bon->setTva('18');
        $bon->setUser($this->getMaster());
        $bon->setDobyuser($this->getUser());
        $bon->setEtat('save');
        $bon->setBonReference('Référence');

        // FORMULAIRE BON
        $formBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'type' => 'prestataire',
            'user' => $this->getMaster()
        ]);

        $formeBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'type' => 'fournisseur',
            'user' => $this->getMaster()
        ]);


        if ($idfourn === null) {
            $fournisseur = new Fournisseur();
            $fournisseur->setUser($this->getMaster());
        } else {
            $fournisseur = $repoFourn->findOneBy(['id' => $idfourn, 'user' => $this->getMaster()]);
        }

        if ($idpresta === null) {
            $prestataire = new Fournisseur();
            $prestataire->setUser($this->getMaster());
        } else {
            $prestataire = $repoFourn->findOneBy(['id' => $idpresta, 'user' => $this->getMaster()]);
        }

        $formfourn = $this->formFactory->createNamed('', FournisseurType::class, $fournisseur,
            ['type' => 'article']);

        $formpresta = $this->formFactory->createNamed('', FournisseurType::class, $prestataire,
            ['type' => 'presta']);

        $historiques = $repoHistorique->findBa($this->getMaster());
        $clients = $repoClient->findClients($this->getMaster());
        $inventes = $repoClient->findClientInventaire($this->getMaster());

        $prestas = $repoFourn->findPrestas($this->getMaster());
        $fournes = $repoFourn->findFournes($this->getMaster());

        $caisse = new Caisse();
        $caisse->setDate(new \DateTime('NOW'));
        $caisse->setCaisseReference(' ');
        $caisse->setUser($this->getMaster());
        $caisse->setDobyuser($this->getUser());
        $caisse->setEtat('save');

        $formRegleBon = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'reglement',
            'user' => $this->getMaster()
        ]);

        $formCaisse = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'etats',
            'user' => $this->getMaster()
        ]);

        $personnels = $repoPersonel->findBy(['user' => $this->getMaster()], ['noms' => 'asc']);

        $jsonclients = $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);
        $jsoninventes = $this->json($inventes, 200, ['Content-Type' => 'application/json'], ['groups' => 'clive']);
        $jsonprestas = $this->json($prestas, 200, ['Content-Type' => 'application/json'], ['groups' => 'fours']);
        $jsonfournes = $this->json($fournes, 200, ['Content-Type' => 'application/json'], ['groups' => 'fours']);
        $jsonpersos = $this->json($personnels, 200, ['Content-Type' => 'application/json'], ['groups' => 'pers']);

        $aa = $idfourn ?? 'a';
        $bb = $idpresta ?? 'a';
        $pp = $idperson ?? 'a';

        $releve = new Relever();
        $releve->setDate(new \DateTime('NOW'));
        $releve->setType(3);

        $formeRegle = $this->formFactory->createNamed('', ReleverType::class, $releve, [
            'user' => $this->getMaster(),
            'type' => 'chantiers'
        ]);

        $charge = $repoIntervenant->findOneBy(['id' => $idinterve, 'user' => $this->getMaster()]);

        if (!$charge) {
            $charge = new Intervenant();
        }

        $personnel = $repoPersonel->findOneBy(['id' => $idperson, 'user' => $this->getMaster()]);
        if (!$personnel) {
            $personnel = new Personnel();
            $personnel->setUser($this->getMaster());
        }

        //FORMULAIRE AJOUTER ET MODIFIER UN PERSONNEL
        $formInterne = $this->formFactory->createNamed('', PersonnelType::class, $personnel, [
            'user' => $this->getMaster(),
            'type' => 'interne'
        ]);
        $formPersonnel = $this->formFactory->createNamed('', PersonnelType::class, $personnel, [
            'user' => $this->getMaster(),
            'type' => 'person'
        ]);
        $formCaisseCharge = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'interne',
            'user' => $this->getMaster()
        ]);

        $formCaissePerso = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'frais',
            'user' => $this->getMaster()
        ]);

        $chantierFrais = $repoChantier->findOneBy(['type' => 'frais', 'user' => $this->getMaster()]);
        $chantierperso = $repoChantier->findOneBy(['type' => 'personnel', 'user' => $this->getMaster()]);

        $caisseinterne = $repoCaisse->findBy(['chantier' => $chantierFrais, 'user' => $this->getMaster()], ['date' => 'desc']);
        $caisseperso = $repoCaisse->findBy(['chantier' => $chantierperso, 'user' => $this->getMaster()], ['date' => 'desc']);

        $jsoncaissin = $this->json($caisseinterne, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);
        $jsoncaissperso = $this->json($caisseperso, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);

        $moshow = null;
        if ($personnel !== null && $personnel->getType() == 'interne') {
            $moshow = 'interne';
        }
        if ($personnel !== null && $personnel->getType() == 'personnelle') {
            $moshow = 'perso';
        }

        $chantier = $repoChantier->findOneBy(['id' => $idchantier, 'user' => $this->getMaster()]);
        if (!$chantier) {
            $chantier = new Chantier();
            $idproj = (string)random_int(0, 999999);
            $chantier->setIdchantier($idproj);
            $chantier->setUser($this->getMaster());
            $chantier->setDobyuser($this->getUser());
            $chantier->setDcrea(new \DateTime('NOW'));
            $chantier->setArchiver('non');
        }

        //FORMULAIRE AJOUTER ET MODIFIER UN CHANTIER
        $formChantier = $this->formFactory->createNamed('', ChantierType::class, $chantier, [
            'user' => $this->getMaster(),
            'type' => 'etat'
        ]);


        // TRAVAUX DU JOUR
        $date = date("Y-m-d");
        $deviss = $repoDevis->findByeDater($this->getMaster(), $date);
        $bons = $repoBon->findByeDate($this->getMaster(), $date);
        $caisses = $repoCaisse->findByeDate($this->getMaster(), $date);
        $decomptes = $repoDecompte->findByeDate($this->getMaster(), $date);
        $factures = $repoFacture->findByeDate($this->getMaster(), $date);
        $jsondev = $this->json($deviss, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
        $jsonbon = $this->json($bons, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
        $jsoncaisse = $this->json($caisses, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);
        $jsondec = $this->json($decomptes, 200, ['Content-Type' => 'application/json'], ['groups' => 'decompte']);
        $jsonfac = $this->json($factures, 200, ['Content-Type' => 'application/json'], ['groups' => 'facture']);

        $sumRegle = 0;
        $sumDepense = 0;
        foreach ($this->getMaster()->getClients() as $client) {
            if ($client->getType() === null && $client->getCorbeille() === null) {
                foreach ($client->getChantiers() as $chantier) {
                    if ($chantier->getCorbeille() === null) {
                        $sumRegle = $sumRegle + $chantier->getReglement();
                        foreach ($chantier->getCaisses() as $cais) {
                            if ($cais->getCorbeille() === null) {
                                $sumDepense = $sumDepense + $cais->getMontant();
                            }
                        }
                    }
                }
            }
        }


        return $this->render('content/etat.html.twig', ['controller_name' => 'EtatController',
            'formClient' => $formClient->createView(),
            'formChantier' => $formChantier->createView(),
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'history' => $historiques,
            'jsonclients' => $jsonclients->getContent(),
            'jsonprestas' => $jsonprestas->getContent(),
            'jsonfournes' => $jsonfournes->getContent(),
            'jsonpersos' => $jsonpersos->getContent(),
            'jsondev' => $jsondev->getContent(),
            'jsonbon' => $jsonbon->getContent(),
            'jsoncaisse' => $jsoncaisse->getContent(),
            'jsondec' => $jsondec->getContent(),
            'jsonfac' => $jsonfac->getContent(),
            'jsoninventes' => $jsoninventes->getContent(),
            'formRegleBon' => $formRegleBon->createView(),
            'aa' => $aa,
            'bb' => $bb,
            'pp' => $pp,
            'sumRegle' => $sumRegle,
            'sumDepense' => $sumDepense,
            'formfourn' => $formfourn->createView(),
            'formpresta' => $formpresta->createView(),
            'editPresta' => $prestataire->getId() !== null,
            'editeFour' => $fournisseur->getId() !== null,
            'editFourn' => $fournisseur->getId() !== null,
            'formBon' => $formBon->createView(),
            'formeBon' => $formeBon->createView(),
            'formCaisse' => $formCaisse->createView(),
            'formeRegle' => $formeRegle->createView(),
            'formInterne' => $formInterne->createView(),
            'charge' => $charge,
            'person' => $personnel,
            'formPersonnel' => $formPersonnel->createView(),
            'formCaisseCharge' => $formCaisseCharge->createView(),
            'formCaissePerso' => $formCaissePerso->createView(),
            'caisseinterne' => $jsoncaissin->getContent(),
            'caisseperso' => $jsoncaissperso->getContent(),
            'moshow' => $moshow,]);
    }


}