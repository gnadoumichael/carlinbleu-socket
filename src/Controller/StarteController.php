<?php

namespace App\Controller;

use App\Entity\Alerte;
use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Chantier;
use App\Entity\Client;
use App\Entity\Compte;
use App\Entity\Contact;
use App\Entity\Decompte;
use App\Entity\Devis;
use App\Entity\Exercices;
use App\Entity\Facture;
use App\Entity\Forme;
use App\Entity\Fournisseur;
use App\Entity\Historique;
use App\Entity\Personnel;
use App\Entity\Relever;
use App\Entity\User;
use App\Form\BonType;
use App\Form\CaisseType;
use App\Form\ChantierType;
use App\Form\ClientType;
use App\Form\CompteType;

use App\Form\ContactType;
use App\Form\DecompteType;
use App\Form\DevisType;
use App\Form\ExercicesType;
use App\Form\FactureType;
use App\Form\FournisseurType;
use App\Form\PersonnelType;
use App\Form\ReleverType;
use Detection\MobileDetect;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/crm/welcomes')]
class StarteController extends AbstractController
{

    private FormFactoryInterface $formFactory;
    public function __construct(private readonly ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }
    private function getJson(Request $request)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $data = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpException(400, 'Invalid json');
        }
        return $data;
    }
    public function getMaster(): ?object
    {

        $repoUser = $this->doctrine->getRepository(User::class);
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);

        if ($use->getCompte() === null) {
            $master = $use;
        } else {
            $master = $repoUser->findOneBy(['id' => $use->getCompte()]);
        }
        return $master;
    }
    public function getCheckMaster(): string
    {

        $repoUser = $this->doctrine->getRepository(User::class);
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);

        if ($use->getCompte() === null) {
            $master = "oui";
        } else {
            $master = "non";
        }
        return $master;
    }
    public function getCheckRoles(): string
    {
        if (!$this->isGranted('ROLE_COMPTA')) {
            return "non";
        }
        return "oui";
    }


    #[Route('/', name: 'welcomes')]
    public function page(Request $request): Response
    {
        $manager = $this->doctrine->getManager();

        $repoCompte = $this->doctrine->getRepository(Compte::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoExercices = $this->doctrine->getRepository(Exercices::class);

        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        $repoForme = $this->doctrine->getRepository(Forme::class);
        $foot = $repoForme->findOneBy(['user' => $this->getUser(), 'rang' => 1]);
        $foote = $repoForme->findOneBy(['user' => $this->getUser(), 'rang' => 2]);
        if (!$foot) {
            $forrm = new Forme();
            $forrm->setRang(1);
            $forrm->setUsed('used');
            $forrm->setIntituler('ENTÊTE 1');
            $forrm->setDsize(11);
            $forrm->setPiedsize(10);
            $forrm->setTeteH(10);
            $forrm->setTeteY(5);
            $forrm->setTeteDH(1);
            $forrm->setTeteDB(0);
            $forrm->setTeteDG(1);
            $forrm->setTeteDD(1);
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
            $fm->setDsize(11);
            $fm->setPiedsize(10);
            $fm->setTeteH(10);
            $fm->setTeteY(5);
            $fm->setTeteDH(1);
            $fm->setTeteDB(0);
            $fm->setTeteDG(1);
            $fm->setTeteDD(1);
            $fm->setTypeFooter("aucun");
            $fm->setTypeEntete("aucun");
            $fm->setHeaderHeight(5);
            $fm->setFooterHeight(1.5);
            $fm->setHeaderWith(21);
            $fm->setUser($this->getUser());
            $manager->persist($fm);
            $manager->flush();
        }

        $compte = $repoCompte->findOneBy(['user' => $this->getMaster()]);
        if (!$compte) {
            $compte = new Compte();
            $compte->setUser($this->getMaster());
            $compte->setSigle('FCFA');
            $compte->setNbreChiffre(2);
            $compte->setSepaMille("espace");
            $compte->setSepaDecimal("virgule");
            $compte->setCoClient("CLT-");
            $compte->setCompteDevis("DDD-");
            $compte->setCompteFacture("FFF-");
            $compte->setCompteLivraison("LIV-");
            $compte->setCompteDecompte("DEC-");
            $compte->setCompteCaisse("CAIS-");
            $compte->setCompteBonFournisseur("ACH-");
            $compte->setCompteBonPrestataire("MDO-");
            $compte->setCompteFournisseur("FOUR-");
            $compte->setComptePrestataire("PRST-");
            $compte->setCompteReglement("REGL-");
            $compte->setCompteMateriel("MATL-");
            $compte->setCompteFichier("FICH-");
            $compte->setComptePlanning("PLANN-");
            $compte->setCompteTache("TACH-");
            $manager->persist($compte);
            $manager->flush();
        }
        $formCompte = $this->createForm(CompteType::class, $compte);
        $formCompte->handleRequest($request);
        if ($formCompte->isSubmitted() && $formCompte->isValid()) {
            $manager->persist($compte);
            $manager->flush();
            return $this->redirectToRoute('welcome');
        }

        date_default_timezone_set('Africa/Abidjan');
        $clients = $repoClient->findBy(['user' => $this->getMaster()], ['nomclient' => 'ASC']);


        //FORMULAIRE EXERCICES
        $exercices = new Exercices();
        $exercices->setUser($this->getMaster());
        $formExercices = $this->formFactory->createNamed('', ExercicesType::class, $exercices);


        //FORMULAIRE CLIENT
        $client = new Client();
        $client->setUser($this->getMaster());
        $client->setDobyuser($this->getUser());
        $formClient = $this->formFactory->createNamed('', ClientType::class, $client);

        //FORMULAIRE CHANTIER
        $chantier = new Chantier();
        $idproj = (string)random_int(0, 999999);
        $chantier->setIdchantier($idproj);
        $chantier->setUser($this->getMaster());
        $chans = $repoChantier->findMost($this->getMaster());
        $chantier->setDobyuser($this->getUser());
        $chantier->setDcrea(new \DateTime('NOW'));
        $chantier->setArchiver('non');
        $formChantier = $this->formFactory->createNamed('', ChantierType::class, $chantier, [
            'user' => $this->getMaster(),
            'type' => 'chantier'
        ]);

        //FORMULAIRE DEVIS
        $devis = new Devis();
        $devis->setTotalht(0);
        $devis->setTotalttc(0);
        $devis->setUser($this->getMaster());
        $devis->setDobyuser($this->getUser());
        $devis->setDate(new \DateTime('NOW'));
        $devis->setEtat('save');
        $devis->setTva('18');
        $devis->setDevReference('Référence');

        $formDevis = $this->formFactory->createNamed('', DevisType::class, $devis, [
            'client' => $chantier->getClient(),
            'type' => 'devischantier',
            'user' => $this->getMaster()
        ]);

        // CRÉE UN NOUVEAU DECOMPTE
        $decompte = new Decompte();
        $decompte->setUser($this->getMaster());
        $decompte->setDobyuser($this->getUser());
        $decompte->setDate(new \DateTime('NOW'));
        $decompte->setClient($chantier->getClient());
        $decompte->setEtat('save');
        $decompte->setProrata(0);
        $decompte->setAcompte(0);
        $decompte->setGarantie(0);
        $decompte->setFinition(0);
        $formDecompte = $this->formFactory->createNamed('', DecompteType::class, $decompte, [
            'type' => 'chantiers',
            'user' => $this->getMaster()
        ]);


        $fournisseur = new Fournisseur();
        $fournisseur->setUser($this->getMaster());
        $prestataire = new Fournisseur();
        $prestataire->setUser($this->getMaster());

        $formfourn = $this->formFactory->createNamed('', FournisseurType::class, $fournisseur,
            ['type' => 'article']);

        $formpresta = $this->formFactory->createNamed('', FournisseurType::class, $prestataire,
            ['type' => 'presta']);

        // FORMULAIRE FACTURE
        $facture = new Facture();
        $facture->setUser($this->getMaster());
        $facture->setDobyuser($this->getUser());
        $facture->setDate(new \DateTime('NOW'));
        $facture->setEtat('save');
        $facture->setFactReference('FACTURE');
        $formFacture = $this->formFactory->createNamed('', FactureType::class, $facture, [
            'type' => 'chantiers',
            'user' => $this->getMaster()
        ]);

        $contact = new Contact();
        $formContact = $this->formFactory->createNamed('', ContactType::class, $contact, [
            'user' => $this->getMaster()
        ]);

        $personnel = new Personnel();
        $personnel->setUser($this->getMaster());
        $formPersonnel = $this->formFactory->createNamed('', PersonnelType::class, $personnel, [
            'user' => $this->getMaster(),
            'type' => 'person'
        ]);

        $releve = new Relever();
        $releve->setDate(new \DateTime('NOW'));
        $releve->setType(3);

        $formeRegle = $this->formFactory->createNamed('', ReleverType::class, $releve, [
            'user' => $this->getMaster(),
            'type' => 'chantiers'
        ]);

        $caisse = new Caisse();
        $caisse->setDate(new \DateTime('NOW'));
        $caisse->setUser($this->getMaster());
        $caisse->setDobyuser($this->getUser());
        $caisse->setEtat('save');
        $formCaisseInterne = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'start',
            'user' => $this->getMaster()
        ]);

        $bon = new bon();
        $bon->setDate(new \DateTime('NOW'));
        $bon->setTva('18');
        $bon->setChantier($chantier);
        $bon->setUser($this->getMaster());
        $bon->setDobyuser($this->getUser());
        $bon->setEtat('save');

        // FORMULAIRE BON DE COMMANDE
        $formBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'type' => 'startfournisseur',
            'user' => $this->getMaster()
        ]);

        // FORMULAIRE BON PRESTATAIRE
        $formeBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'type' => 'startprestataire',
            'user' => $this->getMaster()
        ]);
        $formeCaisse = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'fournisseur',
            'user' => $this->getMaster()
        ]);
        $formerCaisse = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'prestataire',
            'user' => $this->getMaster()
        ]);

        $formCaissePerso = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'startfrais',
            'user' => $this->getMaster()
        ]);

        $formInterne = $this->formFactory->createNamed('', PersonnelType::class, $personnel, [
            'user' => $this->getMaster(),
            'type' => 'interne'
        ]);

        $formCaisseCharge = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'interne',
            'user' => $this->getMaster()
        ]);

        $detect = new MobileDetect();

        $exercices = $repoExercices->findBy(['user' => $this->getMaster()]);


        return $this->render('security/starte.html.twig', [
            'controller_name' => 'StarteController',
            'clients' => $clients,
            'history' => $historiques,
            'formCompte' => $formCompte->createView(),
            'checkMaster' => $this->getCheckMaster(),
            'arole' => $this->getCheckRoles(),
            'formClient' => $formClient->createView(),
            'formChantier' => $formChantier->createView(),
            'formExercices' => $formExercices->createView(),
            'formDevis' => $formDevis->createView(),
            'formDecompte' => $formDecompte->createView(),
            'formfourn' => $formfourn->createView(),
            'formpresta' => $formpresta->createView(),
            'formFacture' => $formFacture->createView(),
            'formContact' => $formContact->createView(),
            'formPersonnel' => $formPersonnel->createView(),
            'formeRegle' => $formeRegle->createView(),
            'formCaisse' => $formCaisseInterne->createView(),
            'formeCaisse' => $formeCaisse->createView(),
            'formerCaisse' => $formerCaisse->createView(),
            'formBon' => $formBon->createView(),
            'formeBon' => $formeBon->createView(),
            'formCaissePerso' => $formCaissePerso->createView(),
            'formInterne' => $formInterne->createView(),
            'formCaisseCharge' => $formCaisseCharge->createView(),
            'ismobile' => $detect->isMobile(),
            'chans' => $chans,
            'exercices' => $exercices
        ]);
    }



}
