<?php
declare(strict_types=1);

namespace App\Controller;

use App\Entity\Chat;
use App\Entity\Client;
use App\Entity\Contact;
use App\Entity\Corbeille;
use App\Entity\Devis;
use App\Entity\Equipe;
use App\Entity\Fichier;
use App\Entity\Historique;
use App\Entity\Ligne;
use App\Entity\Personnel;
use App\Entity\Planning;
use App\Entity\Prevision;
use App\Entity\Chantier;
use App\Entity\Recap;
use App\Entity\Section;
use App\Entity\Tache;
use App\Entity\User;
use App\Form\ContactType;
use App\Form\DevisType;
use App\Form\FichierType;
use App\Form\PlanningType;
use App\Form\RecapType;
use App\Form\SectionType;
use App\Form\TacheType;
use App\Form\PrevisionType;
use App\Service\FileUploaders;
use Doctrine\Persistence\ManagerRegistry;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


#[Route(path: '/crm/gestion')]
class GestionController extends AbstractController
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
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier(),
        ]);

        // VERIFIE SI COMPTE MASTER
        if ($use->getCompte() === null) {
            $master = $use;
        } else {
            $master = $repoUser->findOneBy(['id' => $use->getCompte()]);
        }

        return $master;
    }

    #[Route(path: '/delfichier/{id}', name: 'delfichier', requirements: ['id' => '\d+'], methods: ['DELETE'])]
    public function delFichier($id)
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repofichier = $this->doctrine->getRepository(Fichier::class);
        $fichier = $repofichier->findOneBy(['id' => $id, 'user' => $this->getMaster(),]);

        if (!$fichier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        unlink($fichier->getFolde() .'/'. $fichier->getNomfichier());

        $manager->remove($fichier);
        $manager->flush();
        return $this->json(['result' => 'success'], 204);
    }

    #[Route(path: '/fichier/{id}', name: 'addfile', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function addfile($id, Request $request, FileUploaders $uploaders): JsonResponse
    {
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $manager = $this->doctrine->getManager();

        $chantier = $repoChantier->findOneBy(['user' => $this->getMaster(), 'id' => $id]);

        $submittedToken = $request->request->get('token');

        // 'delete-item' is the same value used in the template to generate the token
        if ($this->isCsrfTokenValid('addFile', $submittedToken)) {
            $fich = new Fichier();
            $fich->setChantier($chantier);
            $fich->setUser($this->getMaster());
            $formUpload = $this->formFactory->createNamed(
                '',
                FichierType::class,
                $fich, ['type' => 'chantier']
            );

            $formUpload->handleRequest($request);
            if ($formUpload->isSubmitted()) {
                $files = $formUpload['nomfichier']->getData();
                foreach ($files as $file) {
                    if ($file) {
                        // FORM UPLOAD
                        $ficher = new Fichier();
                        $ficher->setChantier($chantier);
                        $ficher->setDate(new \DateTime('NOW'));
                        $ficher->setUser($this->getMaster());
                        $tail = $uploaders->getTaille($file);
                        $ficher->setTaille($tail);
                        if (
                            $uploaders->checkFileExist(
                                $file,
                                $chantier->getIdchantier()
                            ) === 'non'
                        ) {
                            $file_name = $uploaders->uploa($file);
                            $ficher->setNomfichier($file_name);
                            $manager->persist($ficher);
                            $manager->flush();
                        }
                    }
                }
                return $this->json(['result' => 'success'], 200);
            }
            return $this->json(['result' => 'error'], 404);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/fichier/chantiers/add', name: 'addfile_chantiers', methods: ['POST'])]
    public function addfileChantier(Request $request, FileUploaders $uploaders): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);

        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $manager = $this->doctrine->getManager();

        $chantier = $repoChantier->findOneBy(['user' => $this->getMaster(), 'id' => $request->request->get('chantier')]);

        $submittedToken = $request->request->get('token');

        // 'delete-item' is the same value used in the template to generate the token
        if ($this->isCsrfTokenValid('addFileChantier', $submittedToken)) {
            $fich = new Fichier();
            $fich->setChantier($chantier);
            $fich->setUser($this->getMaster());
            $formUpload = $this->formFactory->createNamed(
                '', FichierType::class, $fich, ['type' => 'chantier']
            );

            $formUpload->handleRequest($request);
            if ($formUpload->isSubmitted()) {
                $files = $formUpload['nomfichier']->getData();
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
                        $ficher->setChantier($chantier);
                        $ficher->setDate(new \DateTime('NOW'));
                        $ficher->setType("chantier");
                        $ficher->setUser($this->getMaster());
                        $ficher->setFolde($concurrentDirectory);
                        $tail = $uploaders->getTaille($file);
                        $ficher->setTaille($tail);
                        $file_name = $uploaders->uploave($file, $concurrentDirectory);
                        $ficher->setNomfichier($file_name);
                        $manager->persist($ficher);
                        $manager->flush();
                    }
                }
                return $this->json(['result' => 'success'], 200);
            }
            return $this->json(['result' => 'error'], 404);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/fichier/tache/add/{id}', name: 'addfileTache', methods: ['POST'])]
    public function addfileTache(Request $request, int $id, FileUploaders $uploaders): JsonResponse
    {

        $manager = $this->doctrine->getManager();
        $repoTache = $this->doctrine->getRepository(Tache::class);
        $tache = $repoTache->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $submittedToken = $request->request->get('token');

        $repoUser = $this->doctrine->getRepository(User::class);
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);

        // 'delete-item' is the same value used in the template to generate the token
        if ($this->isCsrfTokenValid('addFileTache', $submittedToken)) {
            $fich = new Fichier();
            $fich->setUser($this->getMaster());
            $fich->setDate(new \DateTime('NOW'));

            $formUpload = $this->formFactory->createNamed(
                '',
                FichierType::class,
                $fich, [
                    'user' => $this->getMaster(),
                    'type' => 'fichie'
                ]
            );

            $formUpload->handleRequest($request);
            if ($formUpload->isSubmitted()) {
                $files = $formUpload['nomfichier']->getData();
                foreach ($files as $file) {
                    if ($file) {
                        // FORM UPLOAD

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
                        $ficher->setTache($tache);
                        $ficher->setChantier($tache->getChantier());
                        $tail = $uploaders->getTaille($file);
                        $ficher->setTaille($tail);

                        $file_name = $uploaders->uploave($file, $concurrentDirectory);
                        $ficher->setNomfichier($file_name);
                        $ficher->setType('tache');
                        $ficher->setFolde($concurrentDirectory);
                        $ficher->setCategorie($request->request->get('categorie'));
                        $manager->persist($ficher);
                        $manager->flush();


                    }
                }
                $repoTache = $this->doctrine->getRepository(Tache::class);
                $tache = $repoTache->findOneBy(['user' => $this->getMaster(), 'id' => $id]);
                return $this->json($tache, 200, ['Content-Type' => 'application/json'], ['groups' => 'tacher']);
            }
            return $this->json(['result' => 'error'], 404);
        }
        return $this->json(['result' => $submittedToken], 404);
    }


    #[Route(path: '/fichier/technique/add', name: 'addfileTechnique', methods: ['POST'])]
    public function addfileTechnique(Request $request, FileUploaders $uploaders): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);

        $manager = $this->doctrine->getManager();

        $submittedToken = $request->request->get('token');

        // 'delete-item' is the same value used in the template to generate the token
        if ($this->isCsrfTokenValid('addFileTech', $submittedToken)) {
            $fich = new Fichier();
            $fich->setUser($this->getMaster());
            $fich->setDate(new \DateTime('NOW'));
            $formUploada = $this->formFactory->createNamed(
                '',
                FichierType::class,
                $fich, [
                    'user' => $this->getMaster(),
                    'type' => 'fiche'
                ]
            );

            $formUploada->handleRequest($request);
            if ($formUploada->isSubmitted()) {
                $files = $formUploada['nomfichier']->getData();
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
                        $ficher->setType('technique');
                        $ficher->setFolde($concurrentDirectory);
                        $ficher->setCategorie($request->request->get('categorie'));
                        $manager->persist($ficher);
                        $manager->flush();

                        return $this->json(['result' => 'success'], 200);
                    }
                }
                return $this->json(['result' => 'success'], 200);
            }
            return $this->json(['result' => 'error'], 404);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/fichier/loading/add', name: 'addfileLoad', methods: ['POST'])]
    public function addfileLoad(Request $request, FileUploaders $uploaders): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);

        $manager = $this->doctrine->getManager();

        $submittedToken = $request->request->get('token');

        // 'delete-item' is the same value used in the template to generate the token
        if ($this->isCsrfTokenValid('addFileLoad', $submittedToken)) {
            $fich = new Fichier();
            $fich->setUser($this->getMaster());
            $fich->setDate(new \DateTime('NOW'));
            $formUploada = $this->formFactory->createNamed(
                '',
                FichierType::class,
                $fich, [
                    'user' => $this->getMaster(),
                    'type' => 'enregistre'
                ]
            );

            $formUploada->handleRequest($request);
            if ($formUploada->isSubmitted()) {
                $files = $formUploada['nomfichier']->getData();
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
                        $ficher->setType('save');
                        $ficher->setFolde($concurrentDirectory);
                        $ficher->setCategorie($request->request->get('categorie'));


                        if($file_name == "clients.txt" && $ficher->getCategorie() == "client"){
                            if (($handle = fopen($concurrentDirectory.'/'.$file_name, 'rb')) !== FALSE) {
                                $i= 0;
                                while (($data = fgetcsv($handle, null, ";")) !== FALSE) {
                                    if($i > 0){
                                        for($c = 0; $c < 5; $c++){
                                            if($c == 0 ){

                                                $client = new Client();
                                                $client->setUser($this->getMaster());
                                                $client->setNomClient($data[$c]);
                                            }
                                            if($c == 1 ){$client->setContribuable($data[$c]);}
                                            if($c == 2 ){$client->setAdresse($data[$c]);}
                                            if($c == 3 ){$client->setContact($data[$c]);}
                                            if($c == 4 ){
                                                $client->setMail($data[$c]);
                                                $manager->persist($client);
                                                $manager->flush();
                                            }
                                        }
                                    }
                                    $i++;
                                }
                                fclose($handle);
                            }
                            $manager->persist($ficher);
                            $manager->flush();
                            return $this->json(['result' => 'success'], 200);
                        }
                        if($file_name == "chantiers.txt" && $ficher->getCategorie() == "chantier"){
                            if (($handle = fopen($concurrentDirectory.'/'.$file_name, 'rb')) !== FALSE) {
                                $i= 0;
                                while (($data = fgetcsv($handle, null, ";")) !== FALSE) {
                                    if($i > 0){
                                        for($c = 0; $c < 3; $c++){
                                            if($c == 0 ){
                                                $chantier = new Chantier();
                                                $client = $repoClient->findOneBy(['id' => $data[$c], 'user' => $this->getMaster()]);
                                                $chantier->setClient($client);
                                                $idchan = (string)random_int(0, 999999);
                                                $chantier->setIdchantier($idchan);
                                                $chantier->setArchiver('non');
                                                $chantier->setEtat('etude');
                                                $chantier->setUser($this->getMaster());
                                                $chantier->setDobyuser($this->getUser());
                                                $chantier->setDcrea(new \DateTime('NOW'));
                                                $chantier->setProrata('0');
                                                $chantier->setAcompte('0');
                                                $chantier->setGarantie('0');
                                                $chantier->setFinition('0');
                                            }
                                            if($c == 1 ){$chantier->setNomChantier($data[$c]);}
                                            if($c == 2 ){
                                                $chantier->setDescription($data[$c]);
                                                $manager->persist($chantier);
                                                $manager->flush();
                                            }
                                        }
                                    }
                                    $i++;
                                }
                                fclose($handle);
                            }
                            $manager->persist($ficher);
                            $manager->flush();
                            return $this->json(['result' => 'success'], 200);
                        }

                        return $this->json(['result' => 'error'], 404);
                    }
                }
                return $this->json(['result' => 'error'], 404);
            }
            return $this->json(['result' => 'error'], 404);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/fichier/chat/add/{receiver}/{idtache}', name: 'addfileChat', methods: ['POST'])]
    public function addfileChat(Request $request, int $receiver, int $idtache, FileUploaders $uploaders): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);

        $manager = $this->doctrine->getManager();

        $submittedToken = $request->request->get('token');

        // 'delete-item' is the same value used in the template to generate the token
        if ($this->isCsrfTokenValid('addFileChat', $submittedToken)) {
            $fich = new Fichier();
            $fich->setUser($this->getMaster());
            $fich->setDate(new \DateTime('NOW'));
            $formUploada = $this->formFactory->createNamed(
                '',
                FichierType::class,
                $fich, [
                    'user' => $this->getMaster(),
                    'type' => 'chat'
                ]
            );

            $formUploada->handleRequest($request);
            if ($formUploada->isSubmitted()) {
                $files = $formUploada['nomfichier']->getData();
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
                        $ficher->setType('chat');
                        $ficher->setFolde($concurrentDirectory);
                        $ficher->setCategorie($request->request->get('chat'));
                        $manager->persist($ficher);
                        $manager->flush();
                        if ($idtache == "0") {
                            $receiverchat = $repoUser->findOneBy(['id' => $receiver]);
                            $chat = new Chat();
                            $chat->setMessage($file_name);
                            $chat->setUser($this->getMaster());
                            $chat->setOwner($this->getUser());
                            $chat->setReceiver($receiverchat);
                            $chat->setDate(new \DateTime('NOW'));
                            $chat->setIsRead(false);
                            $chat->setFichier($ficher);
                        } else {
                            $repoTache = $this->doctrine->getRepository(Tache::class);
                            $chat = new Chat();
                            $chat->setMessage($file_name);
                            $chat->setUser($this->getMaster());
                            $chat->setOwner($this->getUser());
                            $chat->setReceiver($this->getUser());
                            $chat->setDate(new \DateTime('NOW'));
                            $chat->setIsRead(false);
                            $chat->setFichier($ficher);
                            $tache = $repoTache->findOneBy(['user' => $this->getMaster(), 'id' => $receiver]);
                            $chat->setTache($tache);
                        }

                        $manager->persist($chat);
                        $manager->flush();

                        $ficher->setChat($chat);
                        $manager->persist($ficher);
                        $manager->flush();

                    }
                }

                $repoChat = $this->doctrine->getRepository(Chat::class);
                $chats = $repoChat->findBy(['user' => $this->getMaster()]);
                return $this->json($chats, 200, ['Content-Type' => 'application/json'], ['groups' => 'chats']);

            }
            return $this->json(['result' => 'error'], 404);
        }
        return $this->json(['result' => 'error'], 404);
    }


    #[Route(path: '/fichier/descriptif/add', name: 'addfileDescriptif', methods: ['POST'])]
    public function addfileDescriptif(Request $request, FileUploaders $uploaders): JsonResponse
    {

        $repoUser = $this->doctrine->getRepository(User::class);
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);

        $manager = $this->doctrine->getManager();
        $submittedToken = $request->request->get('token');

        // 'delete-item' is the same value used in the template to generate the token
        if ($this->isCsrfTokenValid('addFileDesc', $submittedToken)) {
            $fich = new Fichier();
            $fich->setUser($this->getMaster());
            $fich->setDate(new \DateTime('NOW'));
            $formUploada = $this->formFactory->createNamed(
                '',
                FichierType::class,
                $fich, [
                    'user' => $this->getMaster(),
                    'type' => 'fiche'
                ]
            );

            $formUploada->handleRequest($request);
            if ($formUploada->isSubmitted()) {
                $files = $formUploada['nomfichier']->getData();
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
                        $ficher->setFolde($concurrentDirectory);
                        $ficher->setNomfichier($file_name);
                        $ficher->setType('descriptif');
                        $ficher->setCategorie($request->request->get('categorie'));
                        $manager->persist($ficher);
                        $manager->flush();

                    }
                }
                return $this->json(['result' => 'success'], 200);
            }
            return $this->json(['result' => 'error'], 404);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/{id}', name: 'gestion', requirements: ['id' => '\d+'])]
    #[Route(path: '/contact/{idcontact}/{id}', name: 'gestcontact', requirements: ['idcontact' => '\d+', 'id' => '\d+'])]
    #[Route(path: '/section/{idsection}/{id}', name: 'editSection', requirements: ['idsection' => '\d+', 'id' => '\d+'])]
    #[Route(path: '/tache/{idtache}/{id}', name: 'gesteditTache', requirements: ['idtache' => '\d+', 'id' => '\d+'])]
    #[Route(path: '/recap/{idrecap}/{id}', name: 'gestrecap', requirements: ['idrecap' => '\d+', 'id' => '\d+'])]
    #[Route(path: '/planning/{idplanning}/{id}', name: 'editPlanning', requirements: ['idplanning' => '\d+', 'id' => '\d+'])]
    #[Route(path: '/upload/{id}', name: 'gestupload')]
    #[Route(path: '/equipe/{idteam}/{id}', name: 'gesteam')]
    public function index(
        int     $id,
        int     $idplanning = null,
        int     $idtache = null,
        int     $idcontact = null,
        int     $idrecap = null,
        int     $idsection = null,
        int     $idteam = null,
        Request $request
    )
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ  ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoContact = $this->doctrine->getRepository(Contact::class);
        $repoTache = $this->doctrine->getRepository(Tache::class);
        $repoPlanning = $this->doctrine->getRepository(Planning::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoSection = $this->doctrine->getRepository(Section::class);
        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoRecap = $this->doctrine->getRepository(Recap::class);
        $repoFichiers = $this->doctrine->getRepository(Fichier::class);
        $repoPrevision = $this->doctrine->getRepository(Prevision::class);
        $repoPersonnel = $this->doctrine->getRepository(Personnel::class);
        $repoEquipe = $this->doctrine->getRepository(Equipe::class);


        // GESTION DE LA DATE ET DU COMPTE
        date_default_timezone_set('Africa/Abidjan');

        // RECUPERE LE PROJET COURANT / RECUPERE LE CONTACT / RECUPERE L'INTERVENAT / RECUPERE LA CORBEILLE
        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster(),]);

        //  DECONNECTE SI LE PROJET N'EXISTE PAS
        if (!$chantier) {return $this->redirectToRoute('logout');}

        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $allplanning = $repoPlanning->findBy(
            ['chantier' => $chantier, 'user' => $this->getMaster()],
            ['rang' => 'ASC']
        );

        // RECUPERE LE CONTACT A MODIFIER OU CRÉE UN AUTRE
        $contact = $repoContact->findOneBy([
            'id' => $idcontact,
            'user' => $this->getMaster(),
        ]);

        if (!$contact) {$contact = new Contact();}

        $formContact = $this->formFactory->createNamed('', ContactType::class, $contact);

        // TOUS LES CONTACT DU CARNET D'ADRESSE
        $allcontact = $repoContact->findBy([
            'client' => $chantier->getClient(),
            'user' => $this->getMaster(),
        ]);
        $vvcontact = null; // POUR VOIR LES CONTACTS

        // RECUPERE le RECAP OU CRÉE UN AUTRE
        if ($idrecap !== null) {
            $recap = $repoRecap->findOneBy([
                'id' => $idrecap,
                'user' => $this->getMaster(),
            ]);
        } else {
            $recap = new Recap();
            $recap->setUser($this->getMaster());
            $recap->setDobyuser($this->getUser());
            $recap->setChantier($chantier);
        }

        $formRecap = $this->createForm(RecapType::class, $recap, [
            'user' => $this->getMaster(),
        ]);

        $formRecap->handleRequest($request);
        if ($formRecap->isSubmitted() && $formRecap->isValid()) {
            $manager->persist($recap);
            $manager->flush();
            return $this->redirectToRoute('chantier', ['id' => $id]);
        }

        // FORM TACHE
        if ($idtache !== null) {
            $tache = $repoTache->findOneBy(['id' => $idtache]);
        } else {
            $tache = new Tache();
            $tache->setUser($this->getMaster());
            $tache->setChantier($chantier);
        }

        $taches = $repoTache->findBy(['chantier' => $chantier, 'user' => $this->getMaster(),], ['ordre' => 'ASC']);
        $formTache = $this->formFactory->createNamed('', TacheType::class, $tache, [
            'user' => $this->getMaster(),
            'chantier' => $chantier,
            'type' => "chantier"]
        );

        // FORM SECTION
        if ($idsection !== null) {
            $section = $repoSection->findOneBy(['id' => $idsection, "user"=>$this->getMaster()]);
        } else {
            $section = new Section();
            $section->setChantier($chantier);
            $section->setRang("1");
            $section->setUser($this->getMaster());
        }

        $formSection = $this->formFactory->createNamed(
            '',
            SectionType::class,
            $section,
            [
                'chantier' => $chantier,
                'type' => "chantier"
            ]
        );

        // FORM PLANNING
        if ($idplanning !== null) {
            $planning = $repoPlanning->findOneBy(['id' => $idplanning]);
        } else {
            $planning = new Planning();
            $planning->setUser($this->getMaster());
            $planning->setClient($chantier->getClient());
            $planning->setChantier($chantier);
            $planning->setChantier($chantier);
        }
        $formPlan = $this->formFactory->createNamed(
            '',
            PlanningType::class,
            $planning, [
                'user' => $this->getMaster(),
                'type' => 'chantier',
            ]
        );

        $invente = $repoLigne->inventaire($chantier->getId());
        $disctintInvente = $repoLigne->findDisctinct($chantier->getId());

        $corbeilles = $repoCorbeille->findBy([
            'master' => $this->getMaster(),
            'type' => '1',
        ]);

        $prevision = new Prevision();
        $prevision->setDate(new \DateTime('NOW'));
        $prevision->setTva('18');
        $prevision->setUser($this->getMaster());
        $prevision->setReference("Référence");

        // FORMULAIRE BON
        $formPrevision = $this->formFactory->createNamed('',
            PrevisionType::class,
            $prevision
        );
        // RECUPERE LE DERNIER BON DE PREVISION
        $dpreve = $repoPrevision->findOneLast($this->getMaster());
        if ($dpreve) {
            $lastprevision = $dpreve->getNumPrevision();
        } else {
            $lastprevision = 'Aucun';
        }

        // FORM UPLOAD
        $fich = new Fichier();
        $fich->setChantier($chantier);
        $fich->setDate(new \DateTime('NOW'));
        $fich->setUser($this->getMaster());
        $formUpload = $this->formFactory->createNamed(
            '',
            FichierType::class,
            $fich, [
                'type' => 'chantier'
            ]
        );

        $allprevision = $repoPrevision->findBy(['user' => $this->getMaster()]);
        $personnels = $repoPersonnel->findBy(["user" => $this->getMaster()]);
        $equipes = $repoEquipe->findBy(["user" => $this->getMaster()]);
        $equipe = $repoEquipe->findOneBy(["user" => $this->getMaster(), 'id' => $idteam]);

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        $devis = new Devis();
        $devis->setDate(new \DateTime('NOW'));
        $devis->setTva('18');
        $devis->setDevReference($chantier->getNomChantier());

        // FORMULAIRE DEVIS
        $formDevis = $this->formFactory->createNamed('', DevisType::class, $devis, [
            'client' => $chantier->getClient(),
            'type' => 'devis'
        ]);

        return $this->render('content/gestion.html.twig', [
            'controller_name' => 'ChantierController',
            'chantier' => $chantier,
            'client' => $chantier->getClient(),
            'title' => $chantier->getClient()->getNomClient() . ' | ' . $chantier->getNomChantier(),
            'formContact' => $formContact->createView(),
            'formSection' => $formSection->createView(),
            'formRecap' => $formRecap->createView(),
            'formTache' => $formTache->createView(),
            'formPlan' => $formPlan->createView(),
            'editCont' => $contact->getId() !== null,
            'corbeilles' => $corbeilles,
            'planning' => $planning,
            'section' => $section,
            'tache' => $tache,
            'taches' => $taches,
            'conta' => $contact,
            'editRecap' => $recap->getId() !== null,
            'editTeam' => $idteam !== null,
            'editTache' => $idtache !== null,
            'editPlanning' => $idplanning !== null,
            'editSection' => $idsection !== null,
            'contacts' => $allcontact,
            'contact' => $contact,
            'vvcontact' => $vvcontact,
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'invente' => $invente,
            'distinct' => $disctintInvente,
            'master' => $this->getMaster(),
            'estmaster' => $this->getMaster() === $this->getUser(),
            'page' => 'technique',
            'allplanning' => $allplanning,
            'formUpload' => $formUpload->createView(),
            'formPrevision' => $formPrevision->createView(),
            'allprevision' => $allprevision,
            'personnels' => $personnels,
            'equipes' => $equipes,
            'equipe' => $equipe,
            'history' => $historiques,
            'formDevis' => $formDevis->createView(),
        ]);
    }
}
