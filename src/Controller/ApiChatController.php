<?php

namespace App\Controller;

use App\Entity\Chat;
use App\Entity\Fichier;
use App\Entity\Tache;
use App\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route(path: '/api/chat')]
class ApiChatController extends AbstractController
{
    #[Route(path: '/get/{id}', name: 'api_get_chat', methods: ['POST'])]
    public function index( int $id,  Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChat = $doctrine->getRepository(Chat::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $owner = $repoUser->findOneBy(['id'=>$id]);
        $chats = $repoChat->findChato($owner, $master);
        return $this->json($chats, 200, ['Content-Type' => 'application/json'], ['groups' => 'chats']);
    }

    #[Route(path: '/del/{id}', name: 'api_del_chat', methods: ['POST'])]
    public function delMess(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChat = $doctrine->getRepository(Chat::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chat = $repoChat->findOneBy(["user"=>$master, "id"=>$id]);
        $manager->remove($chat);
        $manager->flush();

        return $this->json(['result' => 'succes'], 200);
    }

    #[Route(path: '/message/{id}/{receiver}', name: 'api_message_chat', methods: ['POST'])]
    public function indexez(int $id, int $receiver,  Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChat = $doctrine->getRepository(Chat::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $ownerchat = $repoUser->findOneBy(['id'=>$id]);
        $receiverchat = $repoUser->findOneBy(['id'=>$receiver]);

        $chata = $repoChat->findChates($master, $ownerchat, $receiverchat);
        $chatb = $repoChat->findChates($master, $receiverchat, $ownerchat);

        $chats = array_merge($chata, $chatb);


        return $this->json($chats, 200, ['Content-Type' => 'application/json'], ['groups' => 'chats']);
    }

    #[Route(path: '/share/{idmess}/{receiver}', name: 'api_message_chat_share', methods: ['POST'])]
    public function shareChat(int $idmess, int $receiver,  Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChat = $doctrine->getRepository(Chat::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chatt = $repoChat->findOneBy(["user"=>$master, "id"=>$idmess]);
        $receiverchat = $repoUser->findOneBy(['id'=>$receiver]);

        $chat = new Chat();
        $chat->setMessage($chatt->getMessage());
        $chat->setUser($master);
        $chat->setOwner($apuser);
        $chat->setReceiver($receiverchat);
        $chat->setDate(new \DateTime('NOW'));
        $chat->setIsRead(false);

        if($chatt->getFichier()){
            $fich = $chatt->getFichier();

            $ficher = new Fichier();
            $ficher->setDate(new \DateTime('NOW'));
            $ficher->setUser($master);
            $ficher->setTaille($fich->getTaille());
            $ficher->setType("chat");
            $ficher->setCategorie($fich->getCategorie());
            $ficher->setNomfichier($fich->getNomfichier());
            $ficher->setFolde($fich->getFolde());
            $manager->persist($ficher);

            $manager->flush();
            $chat->setFichier($ficher);
        }
        if($chatt->getTache()){
            $chat->setTache($chatt->getTache());
        }

        $manager->persist($chat);
        $manager->flush();

        return $this->json(['result' => 'succes'], 200);
    }

    #[Route(path: '/read/{id}/{receiver}', name: 'api_read_chat', methods: ['POST'])]
    public function chatReader(int $id, int $receiver,  Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChat = $doctrine->getRepository(Chat::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $ownerchat = $repoUser->findOneBy(['id'=>$id]);
        $receiverchat = $repoUser->findOneBy(['id'=>$receiver]);

        $chata = $repoChat->findChates($master, $ownerchat, $receiverchat);
        $chatb = $repoChat->findChates($master, $receiverchat, $ownerchat);

        foreach ($chata as $chat){
            $chat->setIsRead(true);
            $manager->persist($chat);
            $manager->flush();
         }

        foreach ($chatb as $chat){
            $chat->setIsRead(true);
            $manager->persist($chat);
            $manager->flush();
        }
        return $this->json(['result' => 'success'], 200);
    }

    #[Route(path: '/tache/message/{id}', name: 'api_message_chat_tache', methods: ['POST'])]
    public function indtache(int $id,  Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChat = $doctrine->getRepository(Chat::class);
        $repoTache = $doctrine->getRepository(Tache::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $tache = $repoTache->findOneBy(['user'=>$master,'id'=>$id]);
        $chats = $repoChat->findBy(['user'=>$master, 'tache'=>$tache]);

        return $this->json($chats, 200, ['Content-Type' => 'application/json'], ['groups' => 'chats']);
    }

    #[Route(path: '/tache/get', name: 'api_get_chat_tache', methods: ['POST'])]
    public function tachez(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChat = $doctrine->getRepository(Chat::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chats = $repoChat->findChataches($master);
        return $this->json($chats, 200, ['Content-Type' => 'application/json'], ['groups' => 'chats']);
    }

    #[Route(path: '/add/{id}/{receiver}/{message}', name: 'api_add_chat', methods: ['POST'])]
    public function addChat(int $id, int $receiver, $message, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChat = $doctrine->getRepository(Chat::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $ownerchat = $repoUser->findOneBy(['id'=>$id]);
        $receiverchat = $repoUser->findOneBy(['id'=>$receiver]);

        $chat = new Chat();
        $chat->setMessage($message);
        $chat->setUser($master);
        $chat->setOwner($ownerchat);
        $chat->setReceiver($receiverchat);
        $chat->setDate(new \DateTime('NOW'));
        $chat->setIsRead(false);

        $manager->persist($chat);
        $manager->flush();

        $chata = $repoChat->findChates($master, $ownerchat, $receiverchat);
        $chatb = $repoChat->findChates($master, $receiverchat, $ownerchat);

        $chats = array_merge($chata, $chatb);


        return $this->json($chats, 200, ['Content-Type' => 'application/json'], ['groups' => 'chats']);

    }

    #[Route(path: '/add/tache/{id}/{idtache}/{message}', name: 'api_add_tache_chat', methods: ['POST'])]
    public function addTacheChat(int $id, int $idtache, $message, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChat = $doctrine->getRepository(Chat::class);
        $repoTache = $doctrine->getRepository(Tache::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $ownerchat = $repoUser->findOneBy(['id'=>$id]);
        $tache = $repoTache->findOneBy(['user'=>$master,'id'=>$idtache]);

        $chat = new Chat();
        $chat->setMessage($message);
        $chat->setUser($master);
        $chat->setOwner($ownerchat);
        $chat->setReceiver($ownerchat);
        $chat->setDate(new \DateTime('NOW'));
        $chat->setIsRead(false);
        $chat->setTache($tache);

        $manager->persist($chat);
        $manager->flush();

        return $this->json('succes', 200);

    }

    #[Route(path: '/technique/add/{id}/{receiver}/{idtache}', name: 'api_chat_fichier', methods: ['POST'])]
    public function addchatechnique(int $id, int $receiver, string $idtache,  Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoTache = $doctrine->getRepository(Tache::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $json = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
        $bs4 = $json["file"];
        $filename = $json["filename"];
        $categorie = $json["categorie"];
        $taille = $json["size"];
        $bin = base64_decode($bs4, true);

        $dir = $master->getId().$master->getNom();
        $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
        if (!mkdir($concurrentDirectory = 'coffre/'.$dir.'/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }

        file_put_contents($concurrentDirectory.'/'. $filename, $bin);

        if(file_exists ($concurrentDirectory.'/'. $filename)){

            $ficher = new Fichier();
            $ficher->setDate(new \DateTime('NOW'));
            $ficher->setUser($master);
            $ficher->setTaille($taille);
            $ficher->setType("chat");
            $ficher->setCategorie($categorie);
            $ficher->setNomfichier($filename);
            $ficher->setFolde($concurrentDirectory);

            $manager->persist($ficher);
            $manager->flush();

            $ownerchat = $repoUser->findOneBy(['id'=>$id]);
            $receiverchat = $repoUser->findOneBy(['id'=>$receiver]);

            $chat = new Chat();
            $chat->setMessage($filename);
            $chat->setUser($master);
            $chat->setOwner($ownerchat);
            $chat->setReceiver($receiverchat);
            $chat->setDate(new \DateTime('NOW'));
            $chat->setIsRead(false);
            $chat->setFichier($ficher);
            if($idtache != "0"){
                $tache = $repoTache->findOneBy(['user'=>$master,'id'=>$idtache]);
                $chat->setTache($tache);
            }

            $manager->persist($chat);
            $manager->flush();

            $ficher->setChat($chat);
            $manager->persist($ficher);
            $manager->flush();

            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'error'], 404);
    }

}