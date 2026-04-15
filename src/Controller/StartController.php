<?php

namespace App\Controller;

use App\Entity\Alerte;
use App\Entity\Besoins;
use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Chantier;
use App\Entity\ChatBesoin;
use App\Entity\Client;
use App\Entity\Compte;
use App\Entity\Contact;
use App\Entity\Corbeille;
use App\Entity\Decompte;
use App\Entity\Devis;
use App\Entity\Droit;
use App\Entity\Exercices;
use App\Entity\Facture;
use App\Entity\Fichier;
use App\Entity\Forme;
use App\Entity\Fournisseur;
use App\Entity\Historique;
use App\Entity\Personnel;
use App\Entity\Relever;
use App\Entity\User;
use App\Entity\Vue;
use App\Form\BesoinsType;
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
use App\Service\FileUploaders;
use Detection\MobileDetect;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Part\DataPart;
use Symfony\Component\Mime\Part\File;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/crm/welcome')]
class StartController extends AbstractController
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

    #[Route('/alertes/get', name: 'getAlertes', methods: ["POST"])]
    public function getAlertes(Request $request): JsonResponse
    {
        $repoAlerte = $this->doctrine->getRepository(Alerte::class);

        $date = date("Y-m-d");
        $alertes = $repoAlerte->findByeDate($this->getUser(), $date);

        return $this->json($alertes, 200, ['Content-Type' => 'application/json'], ['groups' => 'alertes']);
    }

    #[Route('/alerte/delete/{id}', name: 'delAlerto', methods: ["POST"])]
    public function delAlerte(int $id, Request $request): JsonResponse
    {
        $repoAlerte = $this->doctrine->getRepository(Alerte::class);
        $alerte = $repoAlerte->findOneBy(["owner"=>$this->getUser(), 'id'=>$id]);
        $manager = $this->doctrine->getManager();
        $manager->remove($alerte);
        $manager->flush();
        return $this->json(['result' => 'success'], 200);
    }

    #[Route('/chantiers/{a}', name: 'getChana', methods: ["POST"])]
    public function getChana($a): JsonResponse
    {
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $chans = $repoChantier->findStart($this->getMaster(), $a);

        $jsonchantiers = $this->json($chans, 200, ['Content-Type' => 'application/json'], ['groups' => 'ppstart']);
        return $this->json(['result' => $jsonchantiers->getContent()], 200);
    }

    /**
     * @throws \DateMalformedStringException
     * @throws \JsonException
     */
    #[Route('/exercices/add', name: 'addExercices', methods: ["POST"])]
    public function addExercices(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $json = $this->getJson($request);
        $exercice = new Exercices();
        $exercice->setUser($this->getMaster());
        $formExercices = $this->formFactory->createNamed('', ExercicesType::class, $exercice);
        $formExercices->submit($json);
        $formExercices->handleRequest($request);
        if ($formExercices->isSubmitted()) {
            $dd = str_replace("/", "-", $json["debut"]);
            $ff = str_replace("/", "-", $json["fin"]);
            $exercice->setDebut(new \DateTimeImmutable($dd));
            $exercice->setFin(new \DateTimeImmutable($ff));
            $manager->persist($exercice);
            $manager->flush();
            return $this->json(['result' => "succes"], 201);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route('/exercices/delete/{id}', name: 'delExercices', methods: ["DELETE"])]
    public function delExercices(int $id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoExercices = $this->doctrine->getRepository(Exercices::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $exercice = $repoExercices->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$exercice) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $cor = $repoCorbeille->findOneBy(['designation' => $exercice->getId(), 'master' => $this->getMaster(), 'type' => 121]);
        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($exercice->getId());
            $corbeille->setMaster($this->getMaster());
            $corbeille->setDelby($this->getUser());
            $corbeille->setEtat('faible');
            $corbeille->setType('1');
            $manager->persist($corbeille);
            $manager->flush();
            $exercice->setCorbeille($corbeille);
            $manager->persist($exercice);
            $manager->flush();

            return $this->json(['error' => 'success'], 200);

        }
        return $this->json(['error' => 'Erreur'], 404);
    }

    #[Route('/exercices/upd/{id}', name: 'updExercices', methods: ["POST"], requirements: ['id' => '\d+'])]
    public function updExercices(int $id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoExercices = $this->doctrine->getRepository(Exercices::class);
        $json = $this->getJson($request);
        $exercice = $repoExercices->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $exercice->setUser($this->getMaster());
        $formExercices = $this->formFactory->createNamed('', ExercicesType::class, $exercice);
        $formExercices->submit($json);
        $formExercices->handleRequest($request);
        if ($formExercices->isSubmitted()) {
            $dd = str_replace("/", "-", $json["debut"]);
            $ff = str_replace("/", "-", $json["fin"]);
            $exercice->setDebut(new \DateTimeImmutable($dd));
            $exercice->setFin(new \DateTimeImmutable($ff));
            $manager->persist($exercice);
            $manager->flush();
            return $this->json(['result' => "succes"], 201);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route('/besoins/add', name: 'addBesoins', methods: ["POST"])]
    public function addBesoins(Request $request, FileUploaders $uploaders, MailerInterface $mailer): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoUser = $this->doctrine->getRepository(User::class);
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);


        $besoin = new Besoins();
        $besoin->setDate(new \DateTime('NOW'));
        $besoin->setUser($this->getMaster());
        $besoin->setDobyuser($this->getUser());
        $formBesoins = $this->formFactory->createNamed('', BesoinsType::class, $besoin, [
            'user' => $this->getMaster()
        ]);
        $formBesoins->handleRequest($request);
        if ($formBesoins->isSubmitted()) {
            $manager->persist($besoin);
            $manager->flush();
            $files = $formBesoins['fichiers']->getData();
            foreach ($files as $file) {
                if ($file) {
                    $dir = $use->getId() . $use->getNom();
                    $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
                    $concurrentDirectory = 'coffre/' . $dir;
                    if (!is_dir($concurrentDirectory)) {
                        mkdir($concurrentDirectory, 0777, true);
                    }
                    if (!mkdir($concurrentDirectory = 'coffre/' . $dir . '/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
                        throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
                    }
                    $ficher = new Fichier();
                    $ficher->setDate(new \DateTime('NOW'));
                    $ficher->setUser($this->getMaster());
                    $tail = $uploaders->getTaille($file);
                    $ficher->setTaille($tail);

                    $file_name = $uploaders->uploave($file, $concurrentDirectory);
                    $ficher->setNomfichier($file_name);
                    $ficher->setType('besoins');
                    $ficher->setBesoins($besoin);
                    $ficher->setFolde($concurrentDirectory);
                    $ficher->setCategorie($request->request->get('besoins'));
                    $manager->persist($ficher);
                    $manager->flush();
                }
            }

            $comptes = $repoUser->findBy(['compte' => $this->getUser()]);
            foreach ($comptes as $all) {
                $from = $this->getUser()->getUserIdentifier();
                $to = $all->getUserIdentifier();
                $subject = "AJOUT D'UN BESOIN " . $besoin->getChantier()->getClient()->getNomClient() . " | " . $besoin->getChantier()->getNomChantier();
                $contenu = $besoin->getBesoin();
                $email = (new Email())
                    ->from(new Address($from, $this->getUser()->getNom() . ' ' . $this->getUser()->getPrenoms() . ' ' . '<' . $from . '>'))
                    ->to($to)
                    ->replyTo($from)
                    //->priority(Email::PRIORITY_HIGH)
                    ->subject($subject)
                    ->html($contenu);
                if ($files) {
                    foreach ($file as $doc) {
                        $file = $doc->getFolde() ."/".$doc->Nomfichier();
                        $email->addPart(new DataPart(new File($file)));
                    }
                }
                $mailer->send($email);
            }

            return $this->json(['result' => "succes"], 201);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route('/besoins/upd/{idbesoin}', name: 'updBesoins', methods: ["POST"], requirements: ['idbesoin' => '\d+'])]
    public function updBesoins(int $idbesoin, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoBesoin = $this->doctrine->getRepository(Besoins::class);

        $json = $this->getJson($request);
        $besoin = $repoBesoin->findOneBy(['id' => $idbesoin, 'user' => $this->getMaster()]);
        $formBesoins = $this->formFactory->createNamed('', BesoinsType::class, $besoin, [
            'user' => $this->getMaster()
        ]);
        $formBesoins->submit($json);
        $formBesoins->handleRequest($request);
        if ($formBesoins->isSubmitted()) {
            $manager->persist($besoin);
            $manager->flush();
            return $this->json(['result' => "succes"], 201);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route('/besoins/chat/{idbesoin}/{message}', name: 'chatBesoins', methods: ["POST"], requirements: ['idbesoin' => '\d+'])]
    public function chatBesoins(int $idbesoin, string $message, Request $request): JsonResponse
    {

        $manager = $this->doctrine->getManager();
        $repoBesoin = $this->doctrine->getRepository(Besoins::class);
        $repoChatBesoin = $this->doctrine->getRepository(ChatBesoin::class);

        $besoin = $repoBesoin->findOneBy(['id' => $idbesoin, 'user' => $this->getMaster()]);

        $chat = new ChatBesoin();
        $chat->setUser($this->getMaster());
        $chat->setBesoin($besoin);
        $chat->setSender($this->getUser());
        $chat->setMessage($message);
        $chat->setDate(new \DateTime('NOW'));
        $manager->persist($chat);
        $manager->flush();

        $chatbesoins = $repoChatBesoin->findBy(['besoin' => $besoin, 'user' => $this->getMaster()]);
        return $this->json($chatbesoins, 200, ['Content-Type' => 'application/json'], ['groups' => 'chatbesoin']);

    }

    #[Route('/chatbesoins/get/{idbesoin}', name: 'getchatBesoins', methods: ["POST"], requirements: ['idbesoin' => '\d+'])]
    public function chatterBesoins(int $idbesoin, Request $request): JsonResponse
    {

        $repoBesoin = $this->doctrine->getRepository(Besoins::class);
        $repoChatBesoin = $this->doctrine->getRepository(ChatBesoin::class);

        $besoin = $repoBesoin->findOneBy(['id' => $idbesoin, 'user' => $this->getMaster()]);

        $chatbesoins = $repoChatBesoin->findBy(['besoin' => $besoin, 'user' => $this->getMaster()]);
        return $this->json($chatbesoins, 200, ['Content-Type' => 'application/json'], ['groups' => 'chatbesoin']);

    }

    #[Route('/besoins/del/{idbesoin}', name: 'delBesoins', methods: ["DELETE"], requirements: ['idbesoin' => '\d+'])]
    public function delBesoins(int $idbesoin, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoBesoin = $this->doctrine->getRepository(Besoins::class);
        $besoin = $repoBesoin->findOneBy(['id' => $idbesoin, 'user' => $this->getMaster()]);
        if ($besoin) {
            $chatbesoin = $besoin->getChatBesoins();
            foreach ($chatbesoin as $chat) {
                $manager->remove($chat);
                $manager->flush();
            }
            $files = $besoin->getFichiers();
            foreach ($files as $file) {
                $besoin->removeFichier($file);
                $manager->persist($besoin);
                $manager->flush();
            }
            $manager->remove($besoin);
            $manager->flush();
            return $this->json(['result' => "succes"], 201);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route('/besoins/cloturer/{idbesoin}', name: 'cloturerBesoins', methods: ["POST"], requirements: ['idbesoin' => '\d+'])]
    public function cloturerBesoins(int $idbesoin, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoBesoin = $this->doctrine->getRepository(Besoins::class);
        $besoin = $repoBesoin->findOneBy(['id' => $idbesoin, 'user' => $this->getMaster()]);
        if ($besoin) {
            $besoin->setEtat("cloturer");
            $manager->persist($besoin);
            $manager->flush();
            return $this->json(['result' => "succes"], 201);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route('/besoins/archiver/{idbesoin}', name: 'archiverBesoins', methods: ["POST"], requirements: ['idbesoin' => '\d+'])]
    public function archiverBesoins(int $idbesoin, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoBesoin = $this->doctrine->getRepository(Besoins::class);
        $besoin = $repoBesoin->findOneBy(['id' => $idbesoin, 'user' => $this->getMaster()]);
        if ($besoin) {
            $besoin->setEtat("archiver");
            $manager->persist($besoin);
            $manager->flush();
            return $this->json(['result' => "succes"], 201);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route('/besoins/relancer/{idbesoin}', name: 'relancerBesoins', methods: ["POST"], requirements: ['idbesoin' => '\d+'])]
    public function relancerBesoins(int $idbesoin, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoBesoin = $this->doctrine->getRepository(Besoins::class);
        $besoin = $repoBesoin->findOneBy(['id' => $idbesoin, 'user' => $this->getMaster()]);
        if ($besoin) {
            $besoin->setEtat("valider");
            $manager->persist($besoin);
            $manager->flush();
            return $this->json(['result' => "succes"], 201);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route('/', name: 'welcome')]
    #[Route(path: '/besoin/{idbeso}', name: 'editbesoin', requirements: ['idbeso' => '\d+'])]
    #[Route(path: '/exercices/{idexer}', name: 'editexercices', requirements: ['id' => '\d+'])]
    #[Route(path: '/exercices/{idexer}/{tab}', name: 'editexercicestab')]
    #[Route(path: '/tableau/{tab}', name: 'tableaudebord')]
    #[Route(path: '/listebesoins/{beso}/{tab}', name: 'listerbesoin')]
    public function page(int $idbeso = null, int $idexer = null, string $tab = null, string $beso = null, Request $request): Response
    {
        $manager = $this->doctrine->getManager();

        $repoCompte = $this->doctrine->getRepository(Compte::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoExercices = $this->doctrine->getRepository(Exercices::class);
        $repoBesoin = $this->doctrine->getRepository(Besoins::class);
        $repoVue = $this->doctrine->getRepository(Vue::class);
        $repoDroit = $this->doctrine->getRepository(Droit::class);
        $repoAlerte = $this->doctrine->getRepository(Alerte::class);

        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        $alertes = $repoAlerte->findBy(["user" => $this->getMaster()]);
        foreach ($alertes as $alerte){

            $startDate = $alerte->getDate()->format("Ymd");
            $currentDate = date("Ymd");

            if($startDate < $currentDate) {
                $manager->remove($alerte);
                $manager->flush();
            }
        }
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
            $forrm->setTeteH(21);
            $forrm->setTeteY(5);
            $forrm->setTeteDH(1);
            $forrm->setTeteDB(0);
            $forrm->setTeteDG(1);
            $forrm->setTeteDD(1);
            $forrm->setTypeFooter("aucun");
            $forrm->setDecolor("#4e73df");
            $forrm->setDecolortex("#FFF");
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
            $fm->setTeteH(21);
            $fm->setTeteY(5);
            $fm->setTeteDH(1);
            $fm->setTeteDB(0);
            $fm->setTeteDG(1);
            $fm->setTeteDD(1);
            $fm->setTypeFooter("aucun");
            $fm->setTypeEntete("aucun");
            $fm->setDecolor("#4e73df");
            $fm->setDecolortex("#FFF");
            $fm->setHeaderHeight(5);
            $fm->setFooterHeight(1.5);
            $fm->setHeaderWith(21);
            $fm->setUser($this->getUser());
            $manager->persist($fm);
            $manager->flush();
        }

        $foot = $repoForme->findOneBy(['user' => $this->getUser(), 'rang' => 1]);
        $foote = $repoForme->findOneBy(['user' => $this->getUser(), 'rang' => 2]);

        if ($foote->getDecolor() == null) {
            $foote->setDecolor("#4e73df");
            $manager->persist($foote);
            $manager->flush();
        }

        if ($foot->getDecolor() == null) {
            $foot->setDecolor("#4e73df");
            $manager->persist($foot);
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

        //FORMULAIRE BESOIN
        if ($idbeso) {
            $besoin = $repoBesoin->findOneBy(['id' => $idbeso, 'user' => $this->getMaster()]);
        } else {
            $besoin = new Besoins();
            $besoin->setUser($this->getMaster());
        }
        $formBesoins = $this->formFactory->createNamed('', BesoinsType::class, $besoin, [
            'user' => $this->getMaster()
        ]);

        //FORMULAIRE EXERCICES


        if ($idexer) {
            $exercices = $repoExercices->findOneBy(['id' => $idexer, 'user' => $this->getMaster()]);
        } else {
            $exercices = new Exercices();
            $exercices->setUser($this->getMaster());
        }
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
        $decompte->setTrc(0);
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
        $bon->setBonReference("BON DE COMMANDE");
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
        $besoins = $repoBesoin->findBy(['user' => $this->getMaster()], ['date' => 'DESC']);

        $vue = $repoVue->findOneBy(['user' => $this->getMaster()]);
        if (!$vue) {
            $vue = new Vue();
            $vue->setVue("vuea");
            $vue->setUser($this->getMaster());
            $manager->persist($vue);
            $manager->flush();
        }

        $droits = $repoDroit->findBy(['pour' => $this->getUser()]);
        if (count($droits) == 0 && $this->getUser()->getCompte() === null) {
            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("ADMINISTRATEUR DES COMPTES");
            $droit->setActions("oui");
            $droit->setLier("admin");
            $droit->setGgroup("admin");
            $manager->persist($droit);
            $manager->flush();
        }
        if (count($droits) == 0 && $this->getUser()->getCompte() !== null) {

            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("CONSULTER LES CHANTIERS OPTION COMPTABLILTÉ");
            $droit->setActions("oui");
            $droit->setLier("voir_page_chantier");
            $droit->setGgroup("chantier");
            $manager->persist($droit);
            $manager->flush();


            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("ADMINISTRATEUR DES COMPTES");
            $droit->setActions("oui");
            $droit->setLier("admin");
            $droit->setGgroup("admin");
            $manager->persist($droit);
            $manager->flush();

            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("COMPTE COMPTABLE");
            $droit->setActions("oui");
            $droit->setLier("comptable");
            $droit->setGgroup("comptable");
            $manager->persist($droit);
            $manager->flush();

            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("AJOUTER UN CLIENT");
            $droit->setActions("oui");
            $droit->setLier("add_client");
            $droit->setGgroup("client");
            $manager->persist($droit);
            $manager->flush();

            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("MODIFIER UN CLIENT");
            $droit->setActions("oui");
            $droit->setLier("upd_client");
            $droit->setGgroup("client");
            $manager->persist($droit);
            $manager->flush();

            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("SUPPRIMER UN CLIENT");
            $droit->setActions("oui");
            $droit->setLier("del_client");
            $droit->setGgroup("client");
            $manager->persist($droit);
            $manager->flush();

            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("AJOUTER UN CHANTIER");
            $droit->setActions("oui");
            $droit->setLier("add_chantier");
            $droit->setGgroup("chantier");
            $manager->persist($droit);
            $manager->flush();

            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("MODIFIER UN CHANTIER");
            $droit->setActions("oui");
            $droit->setLier("upd_chantier");
            $droit->setGgroup("chantier");
            $manager->persist($droit);
            $manager->flush();

            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("SUPPRIMER UN CHANTIER");
            $droit->setActions("oui");
            $droit->setLier("del_chantier");
            $droit->setGgroup("chantier");
            $manager->persist($droit);
            $manager->flush();

            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("CRÉER UN DEVIS");
            $droit->setActions("oui");
            $droit->setLier("add_devis");
            $droit->setGgroup("devis");
            $manager->persist($droit);
            $manager->flush();

            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("MODIFIER UN DEVIS");
            $droit->setActions("oui");
            $droit->setLier("upd_devis");
            $droit->setGgroup("devis");
            $manager->persist($droit);
            $manager->flush();

            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("SUPPRIMER UN DEVIS");
            $droit->setActions("oui");
            $droit->setLier("del_devis");
            $droit->setGgroup("devis");
            $manager->persist($droit);
            $manager->flush();

            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("CONSULTER UN DEVIS");
            $droit->setActions("oui");
            $droit->setLier("voir_devis");
            $droit->setGgroup("devis");
            $manager->persist($droit);
            $manager->flush();

            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("VALIDER UN DEVIS");
            $droit->setActions("oui");
            $droit->setLier("valide_devis");
            $droit->setGgroup("devis");
            $manager->persist($droit);
            $manager->flush();

            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("DÉVALIDER UN DEVIS");
            $droit->setActions("oui");
            $droit->setLier("devalide_devis");
            $droit->setGgroup("devis");
            $manager->persist($droit);
            $manager->flush();

            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("AJOUTER UN BESOIN");
            $droit->setActions("oui");
            $droit->setLier("add_besoin");
            $droit->setGgroup("besoin");
            $manager->persist($droit);
            $manager->flush();

            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("MODIFIER UN BESOIN");
            $droit->setActions("oui");
            $droit->setLier("upd_besoin");
            $droit->setGgroup("besoin");
            $manager->persist($droit);
            $manager->flush();

            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("SUPPRIMER UN BESOIN");
            $droit->setActions("oui");
            $droit->setLier("del_besoin");
            $droit->setGgroup("besoin");
            $manager->persist($droit);
            $manager->flush();

            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("CLOTÛRER UN BESOIN");
            $droit->setActions("oui");
            $droit->setLier("cloturer_besoin");
            $droit->setGgroup("besoin");
            $manager->persist($droit);
            $manager->flush();

            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("COMMENTER UN BESOIN");
            $droit->setActions("oui");
            $droit->setLier("commenter_besoin");
            $droit->setGgroup("besoin");
            $manager->persist($droit);
            $manager->flush();

        }


        $droitComptable = $repoDroit->findOneBy(["pour" => $this->getUser(), 'lier' => "comptable"]);
        $droitAdmin = $repoDroit->findOneBy(["pour" => $this->getUser(), 'lier' => "admin"]);
        $droitAddDevis = $repoDroit->findOneBy(["pour" => $this->getUser(), 'lier' => "add_devis"]);
        $droitAddClient = $repoDroit->findOneBy(["pour" => $this->getUser(), 'lier' => "add_client"]);
        $droitAddChantier = $repoDroit->findOneBy(["pour" => $this->getUser(), 'lier' => "add_chantier"]);
        $droitAddBesoin = $repoDroit->findOneBy(["pour" => $this->getUser(), 'lier' => "add_besoin"]);
        $droitCommenterBesoin = $repoDroit->findOneBy(["pour" => $this->getUser(), 'lier' => "commenter_besoin"]);
        $droitCloturerBesoin = $repoDroit->findOneBy(["pour" => $this->getUser(), 'lier' => "cloturer_besoin"]);
        $droitModifierBesoin = $repoDroit->findOneBy(["pour" => $this->getUser(), 'lier' => "modifier_besoin"]);
        $droitSupprimerBesoin = $repoDroit->findOneBy(["pour" => $this->getUser(), 'lier' => "supprimer_besoin"]);

        $chans = $repoChantier->findChanStart($this->getMaster());
        $jsonchantiers = $this->json($chans, 200, ['Content-Type' => 'application/json'], ['groups' => 'ppstart']);

        if($tab == null){
            $tab = "A";
        }

        return $this->render('security/start.html.twig', [
            'controller_name' => 'StartController',
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
            'chantiers' => $chans,
            'exercices' => $exercices,
            'besoins' => $besoins,
            'vue' => $vue,
            'pychantiers' => $jsonchantiers->getContent(),
            'formBesoins' => $formBesoins->createView(),
            'droitComptable' => $droitComptable,
            'droitAdmin' => $droitAdmin,
            'droitAddDevis' => $droitAddDevis,
            'droitAddClient' => $droitAddClient,
            'droitAddBesoin' => $droitAddBesoin,
            'droitCommenterBesoin' => $droitCommenterBesoin,
            'droitCloturerBesoin' => $droitCloturerBesoin,
            'droitModifierBesoin' => $droitModifierBesoin,
            'droitSupprimerBesoin' => $droitSupprimerBesoin,
            'droitAddChantier' => $droitAddChantier,
            'idbeso' => $idbeso,
            'idexer' => $idexer,
            'usere' => $this->getUser()->getId(),
            'estmaster' => $this->getMaster() === $this->getUser(),
            'tableau' => $tab,
            'besa' => $beso,
        ]);
    }


}
