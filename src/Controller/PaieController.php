<?php

namespace App\Controller;


use App\Entity\Alerte;
use App\Entity\Caisse;
use App\Entity\Client;
use App\Entity\Fiche;
use App\Entity\Historique;
use App\Entity\Journalier;
use App\Entity\Ligne;
use App\Entity\Monnaie;
use App\Entity\Paie;
use App\Entity\User;
use App\Form\FicheType;
use App\Form\JournalierType;
use App\Form\PaieType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;


#[Route(path: '/crm/paie')]
class PaieController extends AbstractController
{

    private $formFactory;
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->doctrine = $doctrine;
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
    private function getJson(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpException(400, 'Invalid json');
        }
        return $data;
    }

    #[Route(path: '/fiche/add', name: 'addFichePaie', methods: ['POST'])]
    public function addFichePaie(Request $request): JsonResponse
    {

        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoMonnaie = $this->doctrine->getRepository(Monnaie::class);
        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();

        $fiche = new Fiche();
        $fiche->setDate(new \DateTime('NOW'));
        $fiche->setUser($this->getMaster());
        $json = $this->getJson($request);
        $formFiche = $this->formFactory->createNamed('', FicheType::class, $fiche, [
            'user' => $this->getMaster()
        ]);

        $formFiche->submit($json);
        $formFiche->handleRequest($request);

        if ($formFiche->isSubmitted() && $formFiche->isValid()) {
            $manager->persist($fiche);
            $manager->flush();
            $monnaie = $repoMonnaie->findOneBy(['libelle' => "FCFA"]);
            $caisse = new Caisse();
            $caisse->setChantier($fiche->getChantier());
            $caisse->setClient($fiche->getChantier()->getClient());
            $caisse->setUser($this->getMaster());
            $caisse->setMonnaie($monnaie);
            $caisse->setDobyuser($this->getUser());
            $caisse->setEtat('save');
            $der = $repoCaisse->findBy(['user' => $this->getMaster()], ['id' => 'DESC'], 1);
            if ($der) {
                $rang = $der[0]->getRang() + 1;
                $caisse->setRang($rang);
                $caisse->setNumcaisse('CAIS-' . $rang);
            } else {
                $caisse->setRang(1);
                $caisse->setNumcaisse('CAIS-1');
            }
            $dd = str_replace("/", "-", $json["date"]);
            $caisse->setdate(new \DateTimeImmutable($dd));
            $caisse->setType(3);
            $caisse->setOperation("debit");
            $caisse->setCaisseReference("Ordre de paiement pour ".$fiche->getJournalier()->getNoms());
            $montant = ($fiche->getPrix() * $fiche->getHeure()) - $fiche->getAvance();
            $caisse->setMontant($montant);
            $caisse->setTotal($montant);
            $caisse->setFiche($fiche);
            $fiche->setCaisse($caisse);

            $manager->persist($fiche);
            $manager->persist($caisse);
            $manager->flush();

            $ligne = new Ligne();
            $ligne->setUser($this->getMaster());
            $ligne->setDesignation($caisse->getCaisseReference());
            $ligne->setCaisse($caisse);
            $ligne->setChantier($caisse->getChantier());
            $ligne->setUnite("rien");
            $ligne->setQuantite(0);
            $ligne->setPu($caisse->getMontant());
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


            date_default_timezone_set('Africa/Abidjan');
            $action = '<p>Création du bon de caisse N° : ' . $caisse->getNumcaisse() . '</p>' . $caisse->getCaisseReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json(['result' => 'Fiche crée crée'], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }


    #[Route(path: '/journalier/add', name: 'addJournalier', methods: ['POST'])]
    public function addJournaliers(Request $request): JsonResponse
    {

        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();

        $journalier = new Journalier();
        $journalier->setUser($this->getMaster());
        $json = $this->getJson($request);
        $formJournalier = $this->formFactory->createNamed('', JournalierType::class, $journalier, [
            'user' => $this->getMaster()
        ]);

        $formJournalier->submit($json);
        $formJournalier->handleRequest($request);

        if ($formJournalier->isSubmitted() && $formJournalier->isValid()) {
            $manager->persist($journalier);
            $manager->flush();
            return $this->json(['result' => 'Journalier crée'], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/journalier/update/{id}', name: 'updJournalier', methods: ['PUT'])]
    public function updJournaliers(int $id, Request $request): JsonResponse
    {

        $repoJournalier = $this->doctrine->getRepository(Journalier::class);
        $manager = $this->doctrine->getManager();

        $journalier = $repoJournalier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $json = $this->getJson($request);
        $formJournalier = $this->formFactory->createNamed('', JournalierType::class, $journalier, [
            'user' => $this->getMaster()
        ]);
        $formJournalier->submit($json);
        $formJournalier->handleRequest($request);
        if ($formJournalier->isSubmitted() && $formJournalier->isValid()) {
            $manager->persist($journalier);
            $manager->flush();
            return $this->json(['result' => 'Journalier mise a jour'], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/fiche/update/{id}', name: 'updFichePaie', methods: ['PUT'])]
    public function updFichePaie(int $id, Request $request): JsonResponse
    {

        $repoFiche = $this->doctrine->getRepository(Fiche::class);
        $manager = $this->doctrine->getManager();

        $fiche = $repoFiche->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $json = $this->getJson($request);
        $formFiche = $this->formFactory->createNamed('', FicheType::class, $fiche, [
            'user' => $this->getMaster()
        ]);
        $formFiche->submit($json);
        $formFiche->handleRequest($request);
        if ($formFiche->isSubmitted() && $formFiche->isValid()) {
            $manager->persist($fiche);
            $manager->flush();
            return $this->json(['result' => 'Journalier mise a jour'], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/journalier/del/{id}', name: 'delJournalier', methods: ['DELETE'])]
    public function delJournaliers(int $id, Request $request): JsonResponse
    {

        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();
        $repoJournalier = $this->doctrine->getRepository(Journalier::class);

        $journalier = $repoJournalier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        $manager->remove($journalier);
        $manager->flush();
        return $this->json(['result' => 'Journalier crée'], 204);

    }

    #[Route(path: '/fiche/del/{id}', name: 'delFiche', methods: ['DELETE'])]
    public function delFiche(int $id, Request $request): JsonResponse
    {

        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();
        $repoFiche= $this->doctrine->getRepository(Fiche::class);

        $fiche = $repoFiche->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        $manager->remove($fiche);
        $manager->flush();
        return $this->json(['result' => 'Journalier crée'], 204);

    }


    #[Route(path: '/', name: 'paie')]
    #[Route(path: '/journalier/{idjournas}', name: 'editjournalier')]
    #[Route(path: '/fiche/{idfiche}', name: 'editfiche')]
    public function index(int $idjournas = null, int $idfiche = null)
    {

        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoJournalier = $this->doctrine->getRepository(Journalier::class);
        $repoFiche = $this->doctrine->getRepository(Fiche::class);

        $cassa = $repoCaisse->caissePaie($this->getMaster());

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = [];

        if(!$idjournas){
            $journalier = new Journalier();
            $journalier->setUser($this->getMaster());
        }else{
            $journalier = $repoJournalier->findOneBy(['user' => $this->getMaster(), 'id'=>$idjournas]);
        }

        $formJournalier = $this->formFactory->createNamed('', JournalierType::class, $journalier, [
            'user' => $this->getMaster()
        ]);

        $journaliers = $repoJournalier->findBy(['user' => $this->getMaster()]);

        $paie = new Paie();
        $paie->setDate(new \DateTime('NOW'));
        $paie->setUser($this->getMaster());

        $formPaie = $this->formFactory->createNamed('',PaieType::class, $paie);

        if(!$idfiche) {
            $fiche = new Fiche();
            $fiche->setDate(new \DateTime('NOW'));
            $fiche->setUser($this->getMaster());
            $fiche->setAvance(0);
        }else{
            $fiche = $repoFiche->findOneBy(['id'=>$idfiche, 'user' => $this->getMaster()]);
        }
        $formFiche = $this->formFactory->createNamed('', FicheType::class, $fiche, [
            'user' => $this->getMaster()
        ]);

        $fiches = $repoFiche->findBy(['user' => $this->getMaster()]);

        return $this->render('content/paie.html.twig', [
            'controller_name' => 'PaieController',
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'cassa' => $cassa,
            'editJournalier' => $idjournas,
            'history' => $historiques,
            'formJournalier' => $formJournalier->createView(),
            'formPaie' => $formPaie->createView(),
            'formFiche' => $formFiche->createView(),
            'journaliers' => $journaliers,
            'idjournalier' => $idjournas,
            'idfiche' => $idfiche,
            'fiches' => $fiches,
        ]);
    }
}
