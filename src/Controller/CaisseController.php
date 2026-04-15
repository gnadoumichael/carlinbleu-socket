<?php
declare(strict_types=1);

namespace App\Controller;

use App\Entity\Alerte;
use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Client;
use App\Entity\Compte;
use App\Entity\Corbeille;
use App\Entity\Devis;
use App\Entity\Forme;
use App\Entity\Fournisseur;
use App\Entity\Historique;
use App\Entity\Journal;
use App\Entity\Ligne;
use App\Entity\Paie;
use App\Entity\Chantier;
use App\Entity\Personnel;
use App\Entity\User;
use App\Entity\Valider;
use App\Form\CaisseType;
use App\Form\FormeType;
use App\Form\LigneType;
use App\Form\PaieType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: '/crm/caisse')]
class CaisseController extends AbstractController
{

    private $formFactory;
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->doctrine = $doctrine;
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

    /**
     * @throws \DateMalformedStringException
     */
    #[Route(path: '/add/{id}', name: 'addCaisse', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function addCaisse($id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoLigne = $this->doctrine->getRepository(Ligne::class);

        $json = $this->getJson($request);

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        if ($this->isCsrfTokenValid('addCaisseToken', $json['token'])) {
            $caisse = new Caisse();
            $caisse->setChantier($chantier);
            $caisse->setUser($this->getMaster());
            $caisse->setDobyuser($this->getUser());
            $caisse->setClient($chantier->getClient());
            $caisse->setEtat('save');
            $json = $this->getJson($request);
            $formCaisse = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
                'client' => $chantier->getClient(),
                'chantier' => $chantier,
                'type' => 'chantier',
                'user' => $this->getMaster()
            ]);

            $formCaisse->submit($json);
            $formCaisse->handleRequest($request);

            $der = $repoCaisse->findBy(['user' => $this->getMaster()], ['id' => 'DESC'], 1);
            $devis = $repoDevis->findOneBy(['user' => $this->getMaster(), 'id' => $json["devis"]]);

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
            $dd = str_replace("/", "-", $json["date"]);
            $caisse->setdate(new \DateTimeImmutable($dd));
            $caisse->setType(3);
            $caisse->setCaisseReference("CHARGE DIVERSE CHANTIER");
            $caisse->setDevis($devis);
            $manager->persist($caisse);
            $manager->flush();

            $ligne = new Ligne();
            $ligne->setUser($this->getMaster());
            $ligne->setDesignation($json["caissereference"]);
            $ligne->setCaisse($caisse);
            $ligne->setChantier($caisse->getChantier());
            $ligne->setUnite("rien");
            $ligne->setQuantite(0);
            $ligne->setPu((float)$json["montant"]);
            $ligne->setRemise("0");
            $ligne->setType(3);
            $ligne->setUnite("rien");
            $manager->persist($ligne);
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

            $llign = $repoLigne->findOneBy(['user' => $this->getMaster(), 'id' => $json["prevcaiss"]]);

            $journal = new Journal();
            $journal->setLigne($llign);
            $journal->setDevis($devis);
            $journal->setCaisse($caisse);
            $manager->persist($journal);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p>Création du bon de caisse N° : ' . $caisse->getNumcaisse() . '</p>' . $caisse->getCaisseReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();


            return $this->json(['result' => $caisse->getId()], 201);
        }

        return $this->json(['result' => 'echec'], 400);
    }

    #[Route(path: '/adda', name: 'addaCaisse', methods: ['POST'])]
    public function addaCaisse(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoLigne = $this->doctrine->getRepository(Ligne::class);

        $json = $this->getJson($request);

        if ($this->isCsrfTokenValid('addCaisseToken', $json['token'])) {
            $caisse = new Caisse();
            $caisse->setUser($this->getMaster());
            $caisse->setDobyuser($this->getUser());
            $caisse->setEtat('save');
            $json = $this->getJson($request);
            $formCaisse = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
                'type' => 'start',
                'user' => $this->getMaster()
            ]);

            $formCaisse->submit($json);
            $formCaisse->handleRequest($request);
            $der = $repoCaisse->findBy(['user' => $this->getMaster()], ['id' => 'DESC'], 1);
            $devis = $repoDevis->findOneBy(['user' => $this->getMaster(), 'id' => $json["devis"]]);
            $caisse->setClient($devis->getClient());
            $caisse->setChantier($devis->getChantier());
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
            $dd = str_replace("/", "-", $json["date"]);
            $caisse->setdate(new \DateTimeImmutable($dd));
            $caisse->setType(3);
            $caisse->setCaisseReference("CHARGE INTERNE CHANTIER");
            $caisse->setDevis($devis);
            $manager->persist($caisse);
            $manager->flush();

            $ligne = new Ligne();
            $ligne->setUser($this->getMaster());
            $ligne->setDesignation($json["caissereference"]);
            $ligne->setCaisse($caisse);
            $ligne->setChantier($caisse->getChantier());
            $ligne->setUnite("rien");
            $ligne->setQuantite(0);
            $ligne->setPu((float)$json["montant"]);
            $ligne->setRemise("0");
            $ligne->setType(3);
            $ligne->setUnite("rien");
            $manager->persist($ligne);
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

            $llign = $repoLigne->findOneBy(['user' => $this->getMaster(), 'id' => $json["prevcaiss"]]);

            $journal = new Journal();
            $journal->setLigne($llign);
            $journal->setDevis($devis);
            $journal->setCaisse($caisse);
            $manager->persist($journal);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p>Création du bon de caisse N° : ' . $caisse->getNumcaisse() . '</p>' . $caisse->getCaisseReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            $return[] = ["numcaisse" => $caisse->getId(), "idchantier" => $devis->getChantier()->getId()];
            return $this->json(['result' => $return], 201);

        }

        return $this->json(['result' => 'echec'], 400);
    }

    #[Route(path: '/addfournisseur', name: 'addCaisseFourn', methods: ['POST'])]
    public function addCaisseFourn(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);

        $caisse = new Caisse();
        $caisse->setUser($this->getMaster());
        $caisse->setDobyuser($this->getUser());
        $caisse->setEtat('save');
        $json = $this->getJson($request);

        $formCaisse = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'fournisseur',
            'user' => $this->getMaster()
        ]);

        $formCaisse->submit($json);
        $formCaisse->handleRequest($request);
        if ($this->isCsrfTokenValid('addCaisseFournToken', $json['token'])) {
            $fournisseur = $repoFournisseur->findOneBy(['id' => $json['fournisseur'], 'user' => $this->getMaster()]);
            $bon = $repoBon->findOneBy(['id' => $json['bon'], 'user' => $this->getMaster()]);
            $devis = $bon->getDevis();

            if ($bon->getCorbeille() != null || $devis->getCorbeille() != null) {
                return $this->json(['result' => 'Erreur'], 404);
            }

            $caisse->setChantier($bon->getChantier());
            $caisse->setBon($bon);
            $caisse->setType(1);
            $caisse->setClient($bon->getClient());
            $caisse->setFournisseur($fournisseur);

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

            $dd = str_replace("/", "-", $json["date"]);
            $caisse->setdate(new \DateTimeImmutable($dd));
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

            $repoLigne = $this->doctrine->getRepository(Ligne::class);
            $llign = $repoLigne->findOneBy(['user' => $this->getMaster(), 'id' => $json["prevfourni"]]);

            $journal = new Journal();
            $journal->setLigne($llign);
            $journal->setDevis($caisse->getBon()->getDevis());
            $journal->setCaisse($caisse);
            $manager->persist($journal);
            $manager->flush();

            $ligne = new Ligne();
            $ligne->setUser($this->getMaster());
            $ligne->setDesignation($json["desi"]);
            $ligne->setCaisse($caisse);
            $ligne->setChantier($caisse->getChantier());
            $ligne->setUnite("rien");
            $ligne->setQuantite(0);
            $ligne->setPu((float)$json["montant"]);
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
            return $this->json(['result' => $return], 201);

        }

        return $this->json(['result' => 'echec'], 404);
    }

    #[Route(path: '/addprestataire', name: 'addCaissePresta', methods: ['POST'])]
    public function addCaissePresta(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);

        $caisse = new Caisse();
        $caisse->setUser($this->getMaster());
        $caisse->setDobyuser($this->getUser());
        $caisse->setEtat('save');
        $json = $this->getJson($request);

        $formCaisse = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'prestataire',
            'user' => $this->getMaster()
        ]);

        $formCaisse->submit($json);
        $formCaisse->handleRequest($request);
        if ($this->isCsrfTokenValid('addCaissePrestaToken', $json['token'])) {
            $fournisseur = $repoFournisseur->findOneBy(['id' => $json['fournisseur'], 'user' => $this->getMaster()]);
            $bon = $repoBon->findOneBy(['id' => $json['bon'], 'user' => $this->getMaster()]);

            $devis = $bon->getDevis();
            if ($bon->getCorbeille() != null || $devis->getCorbeille() != null) {
                return $this->json(['result' => 'Erreur'], 404);
            }

            $caisse->setChantier($bon->getChantier());
            $caisse->setBon($bon);
            $caisse->setType(1);
            $caisse->setClient($bon->getClient());
            $caisse->setFournisseur($fournisseur);

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

            $dd = str_replace("/", "-", $json["date"]);
            $caisse->setdate(new \DateTimeImmutable($dd));
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

            $repoLigne = $this->doctrine->getRepository(Ligne::class);
            $llign = $repoLigne->findOneBy(['user' => $this->getMaster(), 'id' => $json["prevpresta"]]);

            $journal = new Journal();
            $journal->setLigne($llign);
            $journal->setDevis($caisse->getBon()->getDevis());
            $journal->setCaisse($caisse);
            $manager->persist($journal);
            $manager->flush();

            $ligne = new Ligne();
            $ligne->setUser($this->getMaster());
            $ligne->setDesignation($json["desi"]);
            $ligne->setCaisse($caisse);
            $ligne->setChantier($caisse->getChantier());
            $ligne->setUnite("rien");
            $ligne->setQuantite(0);
            $ligne->setPu((float)$json["montant"]);
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
            return $this->json(['result' => $return], 201);
        }
        return $this->json(['result' => 'echec'], 404);
    }

    #[Route(path: '/adde', name: 'addeCaisse', methods: ['POST'])]
    public function addeCaisse(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);

        $caisse = new Caisse();
        $caisse->setUser($this->getMaster());
        $caisse->setDobyuser($this->getUser());
        $caisse->setEtat('save');
        $json = $this->getJson($request);

        $formCaisse = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'etats',
            'user' => $this->getMaster()
        ]);

        $formCaisse->submit($json);
        $formCaisse->handleRequest($request);
        if ($this->isCsrfTokenValid('addCaisseToken', $json['token'])) {
            $fournisseur = $repoFournisseur->findOneBy(['id' => $json['fournisseur'], 'user' => $this->getMaster()]);
            $bon = $repoBon->findOneBy(['id' => $json['bon'], 'user' => $this->getMaster()]);
            $devis = $bon->getDevis();
            if ($bon->getCorbeille() != null || $devis->getCorbeille() != null) {
                return $this->json(['result' => 'Erreur'], 404);
            }

            $caisse->setChantier($bon->getChantier());
            $caisse->setBon($bon);
            $caisse->setType(1);
            $caisse->setClient($bon->getClient());
            $caisse->setFournisseur($fournisseur);

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

            $dd = str_replace("/", "-", $json["date"]);
            $caisse->setdate(new \DateTimeImmutable($dd));
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
            return $this->json(['result' => $return], 201);
        }
        return $this->json(['result' => 'echec'], 400);
    }

    #[Route(path: '/frais/add', name: 'addCaissefrais', methods: ['POST'])]
    public function addFraisCaisse(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoPersonnel = $this->doctrine->getRepository(Personnel::class);


        $caisse = new Caisse();
        $caisse->setUser($this->getMaster());
        $caisse->setDobyuser($this->getUser());
        $caisse->setEtat('save');
        $json = $this->getJson($request);

        $formCaisseFrais = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'interne',
            'user' => $this->getMaster()
        ]);

        $formCaisseFrais->submit($json);
        $formCaisseFrais->handleRequest($request);
        if ($formCaisseFrais->isSubmitted() && $formCaisseFrais->isValid()) {
            $personnel = $repoPersonnel->findOneBy(['id' => $json['personnel'], 'user' => $this->getMaster()]);
            if ($personnel->getType() == 'interne') {
                $chantier = $repoChantier->findOneBy(['type' => 'frais', 'user' => $this->getMaster()]);
            } else {
                $chantier = $repoChantier->findOneBy(['type' => 'personnel', 'user' => $this->getMaster()]);
            }
            $caisse->setChantier($chantier);
            $caisse->setClient($chantier->getClient());
            $caisse->setType(2);

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
            $dd = str_replace("/", "-", $json["date"]);
            $caisse->setdate(new \DateTimeImmutable($dd));
            $manager->persist($caisse);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p>Création du bon de caisse pour frais interne N° : ' . $caisse->getNumcaisse() . '</p> ' . $caisse->getCaisseReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            $return[] = ["numcaisse" => $caisse->getId(), "idchantier" => $caisse->getChantier()->getId()];
            return $this->json(['result' => $return], 201);
        }
        return $this->json(['result' => 'echec'], 400);
    }

    #[Route(path: '/frais/update/{id}', name: 'updCaissefrais', methods: ['PUT'])]
    public function updFraisCaisse(int $id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoPersonnel = $this->doctrine->getRepository(Personnel::class);

        $caisse = $repoCaisse->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$caisse) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $json = $this->getJson($request);
        $formCaisseUpdFrais = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'interne',
            'user' => $this->getMaster()
        ]);

        $formCaisseUpdFrais->submit($json);
        $formCaisseUpdFrais->handleRequest($request);
        if ($formCaisseUpdFrais->isSubmitted() && $formCaisseUpdFrais->isValid()) {

            $personnel = $repoPersonnel->findOneBy(['id' => $json['personnel'], 'user' => $this->getMaster()]);
            $caisse->setPersonnel($personnel);
            $caisse->setType(2);
            $caisse->setIntervenant(null);

            $dd = str_replace("/", "-", $json["date"]);
            $caisse->setdate(new \DateTimeImmutable($dd));
            $manager->persist($caisse);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p>Modification du bon de caisse pour frais interne N° : ' . $caisse->getNumcaisse() . '</p> ' . $caisse->getCaisseReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            $return[] = ["numcaisse" => $caisse->getId(), "idchantier" => $caisse->getChantier()->getId()];
            return $this->json(['result' => $return], 201);
        }
        return $this->json(['result' => 'echec'], 400);
    }

    #[Route(path: '/fraischantier/update/{id}', name: 'updCaissefraisChantier', methods: ['PUT'])]
    public function updFraisCaisseChantier(int $id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $caisse = $repoCaisse->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$caisse) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $json = $this->getJson($request);
        $chantier = $caisse->getChantier();
        $formCaisse = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'client' => $chantier->getClient(),
            'chantier' => $chantier,
            'type' => 'chantier',
            'user' => $this->getMaster()
        ]);

        $formCaisse->submit($json);
        $formCaisse->handleRequest($request);
        if ($formCaisse->isSubmitted() && $formCaisse->isValid()) {

            $dd = str_replace("/", "-", $json["date"]);
            $caisse->setdate(new \DateTimeImmutable($dd));

            $manager->persist($caisse);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p>Modification du bon de caisse pour frais interne N° : ' . $caisse->getNumcaisse() . '</p> ' . $caisse->getCaisseReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            $return[] = ["numcaisse" => $caisse->getId(), "idchantier" => $caisse->getChantier()->getId()];
            return $this->json(['result' => $return], 201);
        }
        return $this->json(['result' => 'echec'], 400);
    }

    #[Route(path: '/personnel/add', name: 'addCaissepersonnel', methods: ['POST'])]
    public function addPersonnelCaisse(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $chantier = $repoChantier->findOneBy(['type' => 'personnel', 'user' => $this->getMaster()]);

        $caisse = new Caisse();
        $caisse->setCaisseReference($chantier->getNomChantier());
        $caisse->setChantier($chantier);
        $caisse->setUser($this->getMaster());
        $caisse->setDobyuser($this->getUser());
        $caisse->setClient($chantier->getClient());
        $caisse->setType(5);
        $caisse->setEtat('save');
        $json = $this->getJson($request);
        $formCaissePersonnel = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'startfrais',
            'user' => $this->getMaster()
        ]);

        $formCaissePersonnel->submit($json);
        $formCaissePersonnel->handleRequest($request);
        if ($formCaissePersonnel->isSubmitted() && $formCaissePersonnel->isValid()) {
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


            $dd = str_replace("/", "-", $json["date"]);
            $caisse->setdate(new \DateTimeImmutable($dd));
            $manager->persist($caisse);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p>Création du bon de caisse pour frais personnel N° : ' . $caisse->getNumcaisse() . '<p> ' . $caisse->getCaisseReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            $ligne = new Ligne();
            $ligne->setUser($this->getMaster());
            $ligne->setDesignation($json["caissereference"]);
            $ligne->setCaisse($caisse);
            $ligne->setChantier($caisse->getChantier());
            $ligne->setUnite("rien");
            $ligne->setQuantite(0);
            $ligne->setPu((float)$json["montant"]);
            $ligne->setRemise("0");
            $ligne->setType(3);
            $ligne->setUnite("rien");
            $manager->persist($ligne);
            $manager->flush();

            $return[] = ["numcaisse" => $caisse->getId(), "idchantier" => $caisse->getChantier()->getId()];
            return $this->json(['result' => $return], 201);
        }
        return $this->json(['result' => 'echec'], 400);
    }

    #[Route(path: '/personnel/upd/{id}', name: 'updCaissepersonnel', methods: ['PUT'])]
    public function updPersonnelCaisse(int $id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $chantier = $repoChantier->findOneBy(['type' => 'personnel', 'user' => $this->getMaster()]);

        $caisse = $repoCaisse->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$caisse) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $json = $this->getJson($request);
        $formCaissePersonnel = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'frais',
            'user' => $this->getMaster()
        ]);

        $formCaissePersonnel->submit($json);
        $formCaissePersonnel->handleRequest($request);
        if ($formCaissePersonnel->isSubmitted() && $formCaissePersonnel->isValid()) {
            $dd = str_replace("/", "-", $json["date"]);
            $caisse->setdate(new \DateTimeImmutable($dd));
            $manager->persist($caisse);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p>Création du bon de caisse pour frais personnel N° : ' . $caisse->getNumcaisse() . '<p> ' . $caisse->getCaisseReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            $return[] = ["numcaisse" => $caisse->getId(), "idchantier" => $caisse->getChantier()->getId()];
            return $this->json(['result' => $return], 201);
        }
        return $this->json(['result' => 'echec'], 400);
    }

    #[Route(path: '/paie/add', name: 'addPaie', methods: ['POST'])]
    public function addPaie(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $paie = new Paie();
        $paie->setUser($this->getMaster());
        $paie->setDate(new \DateTime('NOW'));
        $json = $this->getJson($request);
        $formPaie = $this->formFactory->createNamed('', PaieType::class, $paie);

        $formPaie->submit($json);
        $formPaie->handleRequest($request);
        if ($formPaie->isSubmitted() && $formPaie->isValid()) {
            $manager->persist($paie);
            $manager->flush();
            return $this->json(['result' => 'sucess'], 201);
        }
        return $this->json(['result' => 'echec'], 400);
    }

    #[Route(path: '/update/{id}', name: 'updateCaisse', requirements: ['id' => '\d+'], methods: ['PUT'])]
    public function updateCaisse($id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoCaisse = $this->doctrine->getRepository(Caisse::class);

        $caisse = $repoCaisse->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$caisse) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $date = $caisse->getDate();
        $json = $this->getJson($request);
        $formCaisse = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'client' => $caisse->getClient(),
            'chantier' => $caisse->getChantier(),
            'type' => 'chantier',
            'user' => $this->getMaster()
        ]);
        $formCaisse->submit($json);
        $formCaisse->handleRequest($request);
        if ($formCaisse->isSubmitted() && $formCaisse->isValid()) {
            $caisse->setType(3);
            $dd = str_replace("/", "-", $json["date"]);
            $caisse->setdate(new \DateTimeImmutable($dd));
            $manager->persist($caisse);
            $manager->flush();
        }

        date_default_timezone_set('Africa/Abidjan');
        $action = '<p>Mise à jour du bon de caisse N° : ' . $caisse->getNumcaisse() . '</p> ' . $caisse->getCaisseReference();
        $history = new Historique();
        $history->setUser($this->getMaster());
        $history->setDobyuser($this->getUser());
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();

        return $this->json(['result' => 'success'], 200);
    }

    #[Route(path: '/etats/update/{id}', name: 'updCaisse', requirements: ['id' => '\d+'], methods: ['PUT'])]
    public function updCaisse($id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);

        $caisse = $repoCaisse->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$caisse) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $json = $this->getJson($request);
        $formCaisse = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'etats',
            'user' => $this->getMaster()
        ]);
        $formCaisse->submit($json);
        $formCaisse->handleRequest($request);
        if ($this->isCsrfTokenValid('updCaisseToken', $json['token'])) {
            $fournisseur = $repoFournisseur->findOneBy(['id' => $json['fournisseur'], 'user' => $this->getMaster()]);
            $bon = $repoBon->findOneBy(['id' => $json['bon'], 'user' => $this->getMaster()]);
            if ($caisse->getIntervenant() !== null) {
                $interve = $caisse->getIntervenant();
                $interve->removeCaiss($caisse);
            }
            $caisse->setChantier($bon->getChantier());
            $caisse->setBon($bon);
            $caisse->setType(1);
            $dd = str_replace("/", "-", $json["date"]);
            $caisse->setdate(new \DateTimeImmutable($dd));
            $caisse->setClient($bon->getClient());
            $caisse->setFournisseur($fournisseur);
            $manager->persist($caisse);
            $manager->flush();
        }

        date_default_timezone_set('Africa/Abidjan');
        $action = '<p>Mise à jour du bon de caisse N° : ' . $caisse->getNumcaisse() . '</p> ' . $caisse->getCaisseReference();
        $history = new Historique();
        $history->setUser($this->getMaster());
        $history->setDobyuser($this->getUser());
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();

        return $this->json(['result' => 'success'], 200);
    }

    #[Route(path: '/montant/{id}', name: 'montantCaisse', requirements: ['id' => '\d+'], methods: ['PUT'])]
    public function montantCaisse($id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $caisse = $repoCaisse->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$caisse) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $json = $this->getJson($request);
        $former = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'client' => $caisse->getClient(),
            'chantier' => $caisse->getChantier(),
            'type' => 'montant'
        ]);
        $former->submit($json);
        $former->handleRequest($request);
        if ($former->isSubmitted() && $former->isValid()) {
            $manager->persist($caisse);
            $manager->flush();
            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/valider/{id}', name: 'validecaisse', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function valideCaisse($id): JsonResponse
    {
        // MANAGER ET HEURE
        $manager = $this->doctrine->getManager();
        date_default_timezone_set('Africa/Abidjan');

        // REPOSITORIES
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);

        // RECUPERE LE BON DE CAISSE ET DECONNECTE S'IL N'EXISTE PAS
        $caisse = $repoCaisse->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$caisse) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $caisse->setVabyuser($this->getUser());

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
            $valider->setUser($this->getMaster());
            $valider->setDobyuser($this->getUser());
            $caisse->setEtat('valide');
            $chantier->setDepense($depense);


            $manager->persist($chantier);
            $manager->persist($caisse);
            $manager->persist($valider);

            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p>Validation du Bon de caisse N° : ' . $caisse->getNumcaisse() . '</p> ' . $caisse->getCaisseReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

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
            $valider->setUser($this->getMaster());
            $valider->setDobyuser($this->getUser());
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
            return $this->json(['result' => 'success'], 200);
        }
        if ($caisse->getPersonnel() != null) {
            $caisse->setEtat('valide');
            $manager->persist($caisse);
            $manager->flush();
            return $this->json(['result' => 'success'], 200);
        }

        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/devalider/{id}', name: 'devalidecaisse', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function devalidecaisse($id)
    {
        // MANAGER ET HEURE
        $manager = $this->doctrine->getManager();
        date_default_timezone_set('Africa/Abidjan');

        // REPOSITORIES
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoValide = $this->doctrine->getRepository(Valider::class);

        // RECUPERE LE BON DE CAISSE ET DECONNECTE S'IL N'EXISTE PAS
        $caisse = $repoCaisse->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$caisse) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        // ON RECUPERE LE VALIDER
        $valide = $repoValide->findOneBy(['idlink' => $id, 'type' => 1]);
        $caisse->setVabyuser($this->getUser());

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
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();
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
            return $this->json(['result' => 'success'], 200);
        }
        if ($caisse->getPersonnel() != null) {
            $caisse->setEtat('save');
            $manager->persist($caisse);
            $manager->flush();
            return $this->json(['result' => 'success'], 200);
        }

        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/del/{id}', name: 'delCaisse', requirements: ['id' => '\d+'], methods: ['DELETE'])]
    public function delCaisse(int $id, Request $request): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);
        $repoValider = $this->doctrine->getRepository(Valider::class);

        $caisse = $repoCaisse->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$caisse) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $valider = $repoValider->findOneBy(['idlink' => $caisse->getId(), 'type' => 1]);
        if ($valider) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $cor = $repoCorbeille->findOneBy(['designation' => $caisse->getId(), 'master' => $this->getMaster(), 'type' => 5]);
        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($caisse->getId());
            $corbeille->setMaster($this->getMaster());
            $corbeille->setEtat('faible');
            $corbeille->setType('5');
            $manager->persist($corbeille);
            $manager->flush();
            $core = $repoCorbeille->findOneBy(['designation' => $caisse->getId(), 'master' => $this->getMaster(), 'type' => 5]);
            $caisse->setCorbeille($core);
            $manager->persist($caisse);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p>Suppression du Bon de caisse N° : ' . $caisse->getNumcaisse() . '</p> ' . $caisse->getCaisseReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json(['result' => 'Bon de caisse suprimé'], 200);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/restaurer/{id}', name: 'restaureCaisse', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function restaureCaisse($id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $caisse = $repoCaisse->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$caisse) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $corbeille = $repoCorbeille->findOneBy(['designation' => $caisse->getId(), 'type' => '4']);
        if ($corbeille) {
            $caisse->setCorbeille(null);
            $manager->persist($caisse);
            $manager->flush();
            $manager->remove($corbeille);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p>Restauration du Bon de caisse N° : ' . $caisse->getNumcaisse() . '<p> ' . $caisse->getCaisseReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json(['result' => 'Bon restauré'], 200);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/deldefinitive/{id}', name: 'deldefCaisse', requirements: ['id' => '\d+'], methods: ['DELETE'])]
    public function deldefon($id, Request $request): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $caisse = $repoCaisse->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$caisse) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $cor = $repoCorbeille->findOneBy(['designation' => $caisse->getId(), 'master' => $this->getMaster(), 'type' => 4]);
        if ($cor) {

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p>Suppression définitive du Bon de caisse N° : ' . $caisse->getNumcaisse() . '</p> ' . $caisse->getCaisseReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();


            if ($caisse->getUser()->getCompte() === null) {
                $cor->setEtat('ultra');
                $manager->persist($cor);
                $manager->flush();
                return $this->json(['result' => 'Bon suprimé'], 204);
            } else {
                $cor->setEtat('fort');
                $manager->persist($cor);
                $manager->flush();
                return $this->json(['result' => 'Bon suprimé'], 204);
            }

        }
        return $this->json(['error' => 'Erreur'], 404);
    }

    #[Route(path: '/deplacer/{id}/{idchan}', name: 'depcaisse', requirements: ['id' => '\d+', 'idchantier' => '\d+'], methods: ['GET'])]
    public function deplacerCaisse($id, $idchan): JsonResponse
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $caisser = $manager->getRepository(Caisse::class)->findOneby(['id' => $id, 'user' => $this->getMaster()]);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoValider = $this->doctrine->getRepository(Valider::class);

        if (!$caisser) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        // RECUPERE LE BON
        if ($caisser) {
            $interve = $caisser->getIntervenant();
            $caisses = $interve->getCaisses();
            $chan = $repoChantier->findOneBy(['id' => $idchan, 'user' => $this->getMaster()]);
            foreach ($caisses as $caiss) {
                $valide = $repoValider->findOneBy(['idlink' => $caiss->getId(), 'type' => 1]);
                if ($valide and $valide->getType() == 1) {
                    $recue = $interve->getPayer() - $interve->getReste();
                    $recu = $recue - $caiss->getMontant();
                    $interve->setRecu($recu);
                    $interve->setReste($interve->getPayer() - $recu);
                    $chantier = $caiss->getChantier();
                    $depense = $chantier->getDepense();
                    if ($caiss->getOperation() === 'debit') {
                        $debit = $caiss->getMontant();
                        $depense = $depense - $debit;
                    } else {
                        $credit = $caiss->getMontant();
                        $depense = $depense + $credit;
                    }
                    $caiss->setEtat('save');
                    $chantier->setDepense($depense);
                    $manager->persist($chantier);
                    $manager->persist($interve);
                    $manager->remove($valide);
                    $manager->remove($caiss);
                    $manager->flush();
                }

                foreach ($caiss->getLignes() as $ligne) {
                    $ligne->setChantier($chantier);
                    $manager->persist($ligne);
                    $manager->flush();
                }

                $caiss->setChantier($chan);
                $caiss->setClient($chan->getClient());
                $interve->setChantier($chan);
                $manager->persist($caiss);

                date_default_timezone_set('Africa/Abidjan');
                $action = '<p>Déplacement du Bon de caisse N° : ' . $caiss->getNumcaisse() . '</p> ' . $caiss->getCaisseReference();
                $history = new Historique();
                $history->setUser($this->getMaster());
                $history->setDobyuser($this->getUser());
                $history->setDate(new \DateTime('NOW'));
                $history->setAction($action);
                $manager->persist($history);
                $manager->flush();

            }
            return $this->json(['result' => 'caisse deplacé'], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/{idcaisse}/{idchantier}', name: 'editcaisse', requirements: ['idcaisse' => '\d+', 'idchantier' => '\d+'])]
    #[Route(path: '/{idcaisse}/{idligne}/{idchantier}', name: 'editlignecaisse', requirements: ['idcaisse' => '\d+', 'idligne' => '\d+', 'idchantier' => '\d+'])]
    public function caisse(int $idligne = null, int $idcaisse = null, int $idchantier)
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // GESTION DE COMPTE
        date_default_timezone_set('Africa/Abidjan');

        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoForme = $this->doctrine->getRepository(Forme::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        // RECUPERE LE BON DE CAISSE ET L'USER
        $caisse = $repoCaisse->findOneBy(['user' => $this->getMaster(), 'id' => $idcaisse]);
        $chantier = $repoChantier->findOneBy(['user' => $this->getMaster(), 'id' => $idchantier]);
        $bon = $caisse->getBon();

        if (!$caisse || !$chantier) {
            return $this->json(['result' => 'erreur'], 404);
        }
        if ($caisse->getType() == 3) {
            $formCaisse = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
                'client' => $chantier->getClient(),
                'chantier' => $chantier,
                'type' => 'chantier',
                'user' => $this->getMaster()
            ]);
        } else {
            $formCaisse = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
                'type' => 'etats',
                'user' => $this->getMaster()
            ]);
        }

        $chantierFrais = $repoChantier->findOneBy(['type' => 'frais', 'user' => $this->getMaster()]);
        $formCaisseFrais = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'frais',
            'user' => $this->getMaster()
        ]);

        $zcaisse = new Caisse();
        $zcaisse->setDate(new \DateTime('NOW'));
        $zcaisse->setCaisseReference(' ');
        $zcaisse->setChantier($chantierFrais);
        $zcaisse->setUser($this->getMaster());
        $zcaisse->setDobyuser($this->getUser());
        $zcaisse->setClient($chantier->getClient());
        $zcaisse->setEtat('save');
        $formneCaisseFrais = $this->formFactory->createNamed('', CaisseType::class, $zcaisse, [
            'type' => 'frais',
            'user' => $this->getMaster()
        ]);

        //RECUPERE TOUTES LES LIGNES POUR AVOIR LE MONTANT TOTAL ET SAUVAGERDER
        $montant = 0;
        foreach ($caisse->getLignes() as $lig) {
            $montant += $lig->getPu();
        }
        $caisse->setTotal($montant);
        $caisse->setMontant($montant);
        $manager->persist($caisse);
        $manager->flush();


        if ($idligne == null) {
            $ligne = new Ligne();
        } else {
            $ligne = $repoLigne->find($idligne);
        }

        $ligne->setChantier($chantier);
        $ligne->setCaisse($caisse);
        $ligne->setUnite('rien');
        $ligne->setQuantite(0);
        $ligne->setType(3);
        $forme = $this->formFactory->createNamed('', LigneType::class, $ligne, [
            'caisse' => $caisse
        ]);

        $caisses = $repoCaisse->findInerve($caisse->getIntervenant());
        $former = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'client' => $caisse->getClient(),
            'chantier' => $caisse->getChantier(),
            'type' => 'montant'
        ]);

        $formCaisseUpdCharge = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'interne',
            'user' => $this->getMaster()
        ]);

        // CRÉE UN NOUVEAU BON DE CAISSE
        $necaisse = new Caisse();
        $necaisse->setDate(new \DateTime('NOW'));
        $necaisse->setCaisseReference(' ');
        $necaisse->setUser($this->getMaster());
        $necaisse->setDobyuser($this->getUser());
        $necaisse->setEtat('save');

        $formneCaisse = $this->formFactory->createNamed('', CaisseType::class, $necaisse, [
            'type' => 'etats',
            'user' => $this->getMaster()
        ]);

        $dcaisse = $repoCaisse->findLast($this->getMaster());
        if ($dcaisse) {
            $lastCaisse = $dcaisse[0]->getNumCaisse();
        } else {
            $lastCaisse = 'Aucun';
        }

        $forte = $repoForme->findOneBy(['user' => $this->getUser(), 'used' => 'used']);
        $fortes = $repoForme->findBy(['user' => $this->getUser()]);
        $formes = $this->formFactory->createNamed('', FormeType::class, $forte);

        $jsoncaisse = $this->json($caisse, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);
        $jsonforme = $this->json($forte, 200, ['Content-Type' => 'application/json'], ['groups' => 'forme']);
        $jsonformes = $this->json($fortes, 200, ['Content-Type' => 'application/json'], ['groups' => 'forme']);

        $this->denyAccessUnlessGranted('ROLE_COMPTA');

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        $ttccaisse = 0;
        if ($bon) {
            foreach ($bon->getCaisses() as $ca) {
                if ($ca->getEtat() === 'valide') {
                    $ttccaisse = $ttccaisse + $ca->getMontant();
                }
            }
            $bon->setRecu($ttccaisse);
            $bon->setReste($bon->getTotalttc() - $ttccaisse);
            $manager->persist($bon);
            $manager->flush();
        }

        $jsonbon = $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);

        return $this->render('content/caisse.html.twig', [
            'controller_name' => 'CaisseController',
            'chantier' => $chantier,
            'title' => 'Créer un bon de caisse | carlinbleu',
            'editMode' => $idcaisse !== null,
            'formCaisse' => $formCaisse->createView(),
            'forme' => $forme->createView(),
            'forte' => $forte,
            'former' => $former->createView(),
            'editMod' => $idligne !== null,
            'idligne' => $idligne,
            'caisse' => $caisse,
            'caisses' => $caisses,
            'estmaster' => $this->getMaster() === $this->getUser(),
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'formes' => $formes->createView(),
            'formneCaisse' => $formneCaisse->createView(),
            'lastcaisse' => $lastCaisse,
            'formCaissePerso' => $formCaisseFrais->createView(),
            'formneCaisseFrais' => $formneCaisseFrais->createView(),
            'history' => $historiques,
            'jsoncaisse' => $jsoncaisse->getContent(),
            'jsonforme' => $jsonforme->getContent(),
            'jsonformes' => $jsonformes->getContent(),
            'formCaisseUpdCharge' => $formCaisseUpdCharge->createView(),
            'jsonbon' => $jsonbon->getContent(),
        ]);
    }


}
