<?php
declare(strict_types=1);

namespace App\Controller;

use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Client;
use App\Entity\Contact;
use App\Entity\Corbeille;
use App\Entity\Decompte;
use App\Entity\Devis;
use App\Entity\Facture;
use App\Entity\Forme;
use App\Entity\Fournisseur;
use App\Entity\Historique;
use App\Entity\Intervenant;
use App\Entity\Ligne;
use App\Entity\Chantier;
use App\Entity\Personnel;
use App\Entity\Recap;
use App\Entity\Relever;
use App\Entity\Tache;
use App\Entity\User;
use App\Entity\Valider;
use App\Form\BonType;
use App\Form\CaisseType;
use App\Form\ContactType;
use App\Form\DecompteType;
use App\Form\DevisType;
use App\Form\FactureType;
use App\Form\FournisseurType;
use App\Form\IntervenantType;
use App\Form\ChantierType;
use App\Form\RecapType;
use App\Form\ReleverType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route(path: '/crm/chantier')]
class ChantierController extends AbstractController
{

    private $formFactory;

    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
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
    public function getCheckRoles(): string
    {
        if (!$this->isGranted('ROLE_COMPTA')) {
            return "non";
        }
        return "oui";
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

    #[Route(path: '/miseajour/{id}', name: 'miseajourchantier', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function ajourChantier(int $id): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoValider = $this->doctrine->getRepository(Valider::class);

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        $vdttc = 0;
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
                    if ($bon->getType() !== 'none' || $bon->getType() !== 'non') {
                        $operation = 'BON N°: ' . $bon->getNumbon() . ' | ' . $bon->getChantier()->getChantier();
                        $debit = $bon->getTotalttc();
                        $credit = 0;
                    }
                    if ($bon->getType() === 'non') {
                        $operation = 'BON DE RETOUR N°:' . $bon->getNumbon() . ' | ' . $bon->getChantier()->getChantier();
                        $credit = $bon->getTotalttc();
                        $debit = 0;
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
        }

        // PROJET REGLEMENT
        foreach ($chantier->getReleves() as $relev) {
            if ($relev->getType() === 3 and $relev->getDevis()->getEtat() === 'valide') {
                $regle += $relev->getMontant();
            }
        }

        // PROJET COUT
        foreach ($chantier->getDevis() as $devis) {
            if ($chantier->getType() !== "vte" or $chantier->getType !== "esti") {
                if ($chantier->getType() !== "budget") {
                    if ($chantier->getEtat() === "etude" or $chantier->getEtat() === "echouer") {
                        $vdttc += $devis->getTotalttc();
                    } else if ($devis->getEtat() === 'valide') {
                        $vdttc += $devis->getTotalttc();
                    }
                }
            }
        }


        $chantier->setCout($vdttc);
        $chantier->setReglement($regle);
        $manager->persist($chantier);
        $manager->flush();
        return $this->json(['result' => 'success'], 200);
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


    #[Route(path: '/deltache/{id}', name: 'deltache', requirements: ['id' => '\d+'])]
    public function deltache($id)
    {
        $manager = $this->doctrine->getManager();
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $repoTache = $this->doctrine->getRepository(Tache::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        // RECUPERE LA TACHE
        $tache = $repoTache->findOneBy(['id' => $id]);
        $chantier = $repoChantier->findOneBy(['id' => $tache->getSection()->getChantier()->getId(), 'user' => $this->getMaster()]);

        //  DECONNECTE SI LE PROJET N'EXISTE PAS
        if (!$chantier) {
            return $this->redirectToRoute('logout');
        }

        if ($tache->getEtat() === "save") {
            $manager->remove($tache);
            $manager->flush();
            return $this->json(['result' => 'success'], 200);
        }

        return $this->json(['result' => 'echec'], 500);
    }

    #[Route(path: '/get/{id}', name: 'getchantier', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function getchantiere($id)
    {
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        // RECUPERE LA TACHE
        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->redirectToRoute('logout');
        }

        return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'chantiers']);
    }

    #[Route(path: '/recap/add/{id}', name: 'addRecap', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function addRecap(int $id, Request $request): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $recap = new Recap();
        $recap->setUser($this->getMaster());
        $recap->setDobyuser($this->getUser());
        $recap->setChantier($chantier);
        $json = $this->getJson($request);
        $formRecap = $this->formFactory->createNamed('', RecapType::class, $recap, [
            'user' => $this->getMaster()
        ]);
        $formRecap->submit($json);
        $formRecap->handleRequest($request);
        if ($formRecap->isSubmitted() && $formRecap->isValid()) {
            $manager->persist($recap);
            $manager->flush();
            return $this->json(['result' => 'Recap crée'], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/recap/update/{id}', name: 'updateRecap', requirements: ['id' => '\d+'], methods: ['PUT'])]
    public function update(int $id, Request $request): JsonResponse
    {

        $repoRecap = $this->doctrine->getRepository(Recap::class);
        $manager = $this->doctrine->getManager();

        $recap = $repoRecap->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$recap) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $json = $this->getJson($request);
        $formRecap = $this->formFactory->createNamed('', RecapType::class, $recap, [
            'user' => $this->getMaster()
        ]);

        $formRecap->submit($json);

        $formRecap->handleRequest($request);
        if ($formRecap->isSubmitted() && $formRecap->isValid()) {
            $manager->persist($recap);
            $manager->flush();
            return $this->json(['result' => 'Recap modifié'], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);

    }

    #[Route(path: '/recap/del/{id}', name: 'delRecap', requirements: ['id' => '\d+'], methods: ['DELETE'])]
    public function delContact(int $id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoRecap = $this->doctrine->getRepository(Recap::class);

        $recap = $repoRecap->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$recap) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $manager->remove($recap);
        $manager->flush();

        return $this->json(['result' => 'Recap suprimé'], 204);
    }

    #[Route(path: '/search/{id}', name: 'searchez')]
    public function search(string $id): JsonResponse
    {
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $devis = $repoDevis->chDevis($id, $this->getMaster());

        $repoBon = $this->doctrine->getRepository(Bon::class);
        $bons = $repoBon->chBons($id, $this->getMaster());

        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $caisses = $repoCaisse->chCaisses($id, $this->getMaster());

        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $chantiers = $repoChantier->chChantiers($id, $this->getMaster());


        $i = 0;
        $data = [];

        foreach ($devis as $p) {
            $i = $i + 1;
        }

        foreach ($bons as $p) {
            $i = $i + 1;
        }

        foreach ($caisses as $p) {
            $i = $i + 1;
        }

        foreach ($chantiers as $p) {
            $i = $i + 1;
        }

        $data[] = ['count' => $i];


        foreach ($devis as $p) {
            $data[] = ['refe' => 'Devis N° ' . $p->getIddevis(), 'link' => '/crm/devis/' . $p->getId() . '/' . $p->getChantier()->getId()];
        }

        foreach ($bons as $p) {
            $data[] = ['refe' => 'Bon de Commande N° ' . $p->getNumbon(), 'link' => '/crm/bon/' . $p->getId() . '/' . $p->getChantier()->getId()];
        }

        foreach ($caisses as $p) {
            $data[] = ['refe' => 'Bon de Caisse N° ' . $p->getNumcaisse(), 'link' => '/crm/caisse/' . $p->getId() . '/' . $p->getChantier()->getId()];
        }

        foreach ($chantiers as $p) {
            $data[] = ['refe' => ' ' . $p->getClient()->getNomClient() . ' | ' . $p->getNomChantier(), 'link' => '/crm/chantier/' . $p->getId()];
        }

        $po = json_encode($data);
        return $this->json(['result' => $po], 200);
    }

    #[Route(path: '/{id}', name: 'chantier', requirements: ['id' => '\d+'])]
    #[Route(path: '/contact/{idcontact}/{id}', name: 'contact', requirements: ['id' => '\d+', 'idcontact' => '\d+'])]
    #[Route(path: '/recap/{idrecap}/{id}', name: 'derecap', requirements: ['id' => '\d+', 'idrecap' => '\d+'])]
    #[Route(path: '/intervenant/{idinterve}/{id}', name: 'editYnterve', requirements: ['id' => '\d+', 'idinterve' => '\d+'])]
    #[Route(path: '/fournisseur/{idfourn}', name: 'editfournisseur')]
    #[Route(path: '/prestataire/{idpresta}', name: 'editprestataire')]
    #[Route(path: '/upload/{id}', name: 'upload', requirements: ['id' => '\d+'])]
    public function index(int $id, int $idcontact = null, int $idrecap = null, int $idinterve = null, int $idfourn = null, int $idpresta = null)
    {

        // MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoContact = $this->doctrine->getRepository(Contact::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoIntervenant = $this->doctrine->getRepository(Intervenant::class);
        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoValide = $this->doctrine->getRepository(Valider::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoRecap = $this->doctrine->getRepository(Recap::class);
        $repoDecompte = $this->doctrine->getRepository(Decompte::class);
        $repoPersonnel = $this->doctrine->getRepository(Personnel::class);
        $repoFourn = $this->doctrine->getRepository(Fournisseur::class);

        // GESTION DE LA DATE ET DU COMPTE
        date_default_timezone_set('Africa/Abidjan');

        // RECUPERE LE CHANTIER COURANT / RECUPERE LE CONTACT / RECUPERE L'INTERVENANT / RECUPERE LA CORBEILLE
        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        //  DECONNECTE SI LE CHANTIER N'EXISTE PAS
        if (!$chantier) {
            return $this->redirectToRoute('logout');
        }

        $most = $chantier->getMost();
        $most = $most + 1;
        $chantier->setMost($most);
        $manager->persist($chantier);
        $manager->flush();

        $formChantier = $this->formFactory->createNamed('', ChantierType::class, $chantier, [
            'user' => $this->getMaster(),
            'type' => 'updchantier'
        ]);

        // RECUPERE LE CONTACT A MODIFIER OU CRÉE UN AUTRE
        $contact = $repoContact->findOneBy(['id' => $idcontact, 'user' => $this->getMaster()]);
        if (!$contact) {
            $contact = new Contact();
        }

        $formContact = $this->formFactory->createNamed('', ContactType::class, $contact);

        // TOUS LES CONTACT DU CARNET D'ADRESSE
        $allcontact = $repoContact->findBy(['client' => $chantier->getClient(), 'user' => $this->getMaster()]);


        // RECUPERE le RECAP OU CRÉE UN AUTRE
        if ($idrecap !== null) {
            $recap = $repoRecap->findOneBy(['id' => $idrecap, 'user' => $this->getMaster()]);
        } else {
            $recap = new Recap();
            $recap->setUser($this->getMaster());
            $recap->setDobyuser($this->getUser());
            $recap->setChantier($chantier);
        }

        $formRecap = $this->formFactory->createNamed('', RecapType::class, $recap, [
            'user' => $this->getMaster()
        ]);

        // FOR INTERVENANT
        $interve = $repoIntervenant->findOneBy(['id' => $idinterve, 'user' => $this->getMaster()]);
        if (!$interve) {
            $interve = new Intervenant();
        }

        $formInterve = $this->formFactory->createNamed('', IntervenantType::class, $interve, [
            'type' => 'chantier',
            'user' => $this->getMaster()
        ]);

        $formOperation = $this->formFactory->createNamed('', IntervenantType::class, $interve, [
            'type' => 'operation',
            'user' => $this->getMaster()
        ]);

        // RECUPERE LES TRAVAUX VALIDÉES DU CHANTIER ET VERIFICATION
        $valider = $repoValide->findBy(['user'=>$this->getMaster(), 'chantier'=>$chantier],['date'=>'DESC']);


        $releve = new Relever();
        $releve->setDate(new \DateTime('NOW'));
        $releve->setType(3);
        $formeRegle = $this->formFactory->createNamed('', ReleverType::class, $releve, [
            'chantier' => $chantier,
            'type' => 'chantier'
        ]);

        // INVENTAIRE
        $invente = $repoLigne->inventaire($chantier->getId());
        $disctintInvente = $repoLigne->findDisctinct($chantier->getId());
        $corbeilles = $repoCorbeille->findBy(['master' => $this->getMaster(), 'type' => '1']);

        ///
        $devis = new Devis();
        $devis->setDate(new \DateTime('NOW'));
        $devis->setTva('18');
        $devis->setDevReference($chantier->getNomChantier());

        // FORMULAIRE DEVIS
        $formDevis = $this->formFactory->createNamed('', DevisType::class, $devis, [
            'client' => $chantier->getClient(),
            'type' => 'devis'
        ]);

        ////////////////////////////////////////////////////////////////// DECOMPTE
        $decompte = new Decompte();
        $decompte->setUser($this->getMaster());
        $decompte->setDobyuser($this->getUser());
        $decompte->setDate(new \DateTime('NOW'));
        $decompte->setChantier($chantier);
        $decompte->setClient($chantier->getClient());
        $decompte->setEtat('save');
        $decompte->setProrata("0");
        $decompte->setGarantie("0");
        $decompte->setFinition('0');
        $decompte->setTrc('0');

        // FORMULAIRE DEVIS
        $formDecompte = $this->formFactory->createNamed('', DecompteType::class, $decompte, [
            'chantier' => $chantier,
            'type' => 'chantier'
        ]);


        ///////////////////////////////////////////////////////////////// BON COMMANDE //////////////////////

        $bon = new bon();
        $bon->setDate(new \DateTime('NOW'));
        $bon->setTva('18');
        $bon->setChantier($chantier);
        $bon->setUser($this->getMaster());
        $bon->setDobyuser($this->getUser());
        $bon->setClient($chantier->getClient());
        $bon->setEtat('save');
        $bon->setBonReference($chantier->getNomChantier());

        // FORMULAIRE BON DE COMMANDE
        $formBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'client' => $chantier->getClient(),
            'chantier' => $chantier,
            'type' => 'chantier',
            'user' => $this->getMaster()
        ]);

        // FORMULAIRE BON DE PRÉPARATION
        $formBonPrepa = $this->formFactory->createNamed('', BonType::class, $bon, [
            'client' => $chantier->getClient(),
            'chantier' => $chantier,
            'type' => 'preparation',
            'user' => $this->getMaster()
        ]);

        // FORMULAIRE BON LIVRAISON
        $formaBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'client' => $chantier->getClient(),
            'chantier' => $chantier,
            'type' => 'livraison',
            'user' => $this->getMaster()
        ]);

        // FORMULAIRE BON PRESTATAIRE
        $formeBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'chantier' => $chantier,
            'type' => 'prestchantier',
            'user' => $this->getMaster()
        ]);

        // FACTURE
        $facture = new Facture();
        $facture->setUser($this->getMaster());
        $facture->setDobyuser($this->getUser());
        $facture->setDate(new \DateTime('NOW'));
        $facture->setChantier($chantier);
        $facture->setClient($chantier->getClient());
        $facture->setEtat('save');
        $facture->setTva('18');
        $facture->setfactReference($chantier->getNomChantier());

        // FORMULAIRE FACTURE
        $formFacture = $this->formFactory->createNamed('', FactureType::class, $facture, [
            'chantier' => $chantier,
            'type' => 'chantier',
        ]);

        //////////////////////////////////////////////////////////// BON DE CAISSE
        $caisse = new Caisse();
        $caisse->setDate(new \DateTime('NOW'));
        $caisse->setChantier($chantier);
        $caisse->setUser($this->getMaster());
        $caisse->setDobyuser($this->getUser());
        $caisse->setClient($chantier->getClient());
        $caisse->setCaisseReference($chantier->getNomChantier() .' | '.$chantier->getNomChantier());
        $caisse->setEtat('save');
        $formCaisseInterne = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'client' => $chantier->getClient(),
            'chantier' => $chantier,
            'type' => 'chantier',
            'user' => $this->getMaster()
        ]);

        $formeCaisse = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'fournisseur',
            'user' => $this->getMaster()
        ]);

        $formeCaissePresta = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'prestataire',
            'user' => $this->getMaster()
        ]);

        $allcpage = $repoCaisse->findByAller($chantier);


        $ttavance = 0;
        $l = 0;
        foreach ($chantier->getDevis() as $dev) {
            if ($dev->getEtat() === 'valide') {
                $l++;
                $der = $repoDecompte->findBy(['devis' => $dev, 'etat' => 'valide', 'user' => $this->getMaster()], ['id' => 'DESC'], 1);
                if ($der) {
                    $ttavance = $ttavance + $der[0]->getAvancement();
                }
            }
        }

        if ($l == 0) {
            $l = 1;
        }

        $manager->persist($chantier);
        $manager->flush();

        $personnels = $repoPersonnel->findBy(["user" => $this->getMaster()]);

        if ($this->getCheckRoles() === "non") {
            return $this->redirectToRoute('welcome');
        }

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());


        if ($chantier->getDdebut() == null) {
            $chantier->setDdebut(new \DateTime('NOW'));
            $chantier->setDfin(new \DateTime('NOW'));
            $manager->persist($chantier);
            $manager->flush();
        }


        if ($idfourn === null) {
            $fournisseur = new Fournisseur();
            $fournisseur->setUser($this->getMaster());
        } else {
            $fournisseur = $repoFourn->findOneBy(['id' => $idfourn, 'user' => $this->getMaster()]);
        }

        $formfourn = $this->formFactory->createNamed('', FournisseurType::class, $fournisseur,
            ['type' => 'article']
        );

        if ($idpresta === null) {
            $prestataire = new Fournisseur();
            $prestataire->setUser($this->getMaster());
        } else {
            $prestataire = $repoFourn->findOneBy(['id' => $idpresta, 'user' => $this->getMaster()]);
        }

        $formpresta = $this->formFactory->createNamed('', FournisseurType::class, $prestataire,
            ['type' => 'presta']
        );


        $devnonvalide = 0;
        $ventedevis = 0;
        $depcaisse = 0;
        foreach ($chantier->getDevis() as $dde) {
            if ($dde->getEtat() === "save" && $dde->getCorbeille() === null) {
                if ($dde->getType() !== "esti") {
                    $devnonvalide = $devnonvalide + $dde->getTotalttc();
                }
            }
            if ($dde->getEtat() === "valide" && $dde->getCorbeille() === null) {
                if ($dde->getType() === "vte") {
                    $ventedevis = $ventedevis + $dde->getTotalttc();
                }
            }
        }
        foreach ($chantier->getCaisses() as $cce) {
            if ($cce->getEtat() === "valide" && $cce->getCorbeille() === null) {
                if ($cce->getIntervenant() === null) {
                    $depcaisse = $depcaisse + $cce->getMontant();
                }
            }
        }

        $chantier->setPaiements($depcaisse);
        $manager->persist($chantier);
        $manager->flush();


        $this->jourChantier($chantier);

        return $this->render('content/chantier.html.twig', [
            'controller_name' => 'ChantierController',
            'chantier' => $chantier,
            'client' => $chantier->getClient(),
            'title' => $chantier->getClient()->getNomClient() . ' | ' . $chantier->getNomChantier(),
            'formContact' => $formContact->createView(),
            'formInterve' => $formInterve->createView(),
            'formOperation' => $formOperation->createView(),
            'formeRegle' => $formeRegle->createView(),
            'formDevis' => $formDevis->createView(),
            'formDecompte' => $formDecompte->createView(),
            'formBon' => $formBon->createView(),
            'formBonPrepa' => $formBonPrepa->createView(),
            'formeBon' => $formeBon->createView(),
            'formaBon' => $formaBon->createView(),
            'formCaisse' => $formCaisseInterne->createView(),
            'formeCaisse' => $formeCaisse->createView(),
            'formeCaissePresta' => $formeCaissePresta->createView(),
            'formFacture' => $formFacture->createView(),
            'formRecap' => $formRecap->createView(),
            'editCont' => $contact->getId() !== null,
            'editRecap' => $recap->getId() !== null,
            'corbeilles' => $corbeilles,
            'editInterve' => $idinterve !== null,
            'interve' => $interve,
            'allinterve' => $repoIntervenant->findBy(['chantier' => $chantier, 'user' => $this->getMaster(), 'corbeille' => null], ['nom' => 'ASC']),
            'conta' => $contact,
            'recap' => $recap,
            'valider' => $valider,
            'contacts' => $allcontact,
            'clients' => $repoClient->findBy(['user' => $this->getMaster(), 'corbeille' => null], ['nomclient' => 'ASC']),
            'invente' => $invente,
            'distinct' => $disctintInvente,
            'master' => $this->getMaster(),
            'estmaster' => $this->getMaster() === $this->getUser(),
            'caissecount' => $allcpage,
            'ajour' => $chantier->getId(),
            'avancement' => $ttavance / $l,
            'personnels' => $personnels,
            'history' => $historiques,
            'formChantier' => $formChantier->createView(),
            'formfourn' => $formfourn->createView(),
            'editFourn' => $fournisseur->getId() !== null,
            'formpresta' => $formpresta->createView(),
            'editPresta' => $prestataire->getId() !== null,
            'devnonvalide' => $devnonvalide,
            'ventedevis' => $ventedevis,
            'depcaisse' => $depcaisse
        ]);
    }

}
