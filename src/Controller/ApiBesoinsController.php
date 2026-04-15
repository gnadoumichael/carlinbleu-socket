<?php

namespace App\Controller;

use App\Entity\Besoins;
use App\Entity\Caisse;
use App\Entity\Chantier;
use App\Entity\ChatBesoin;
use App\Entity\Droit;
use App\Entity\Fichier;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;



#[Route(path: '/api/besoins')]
class ApiBesoinsController extends AbstractController
{

    #[Route(path: '/ios/get', name: 'apibesoins', methods: ['POST'])]
    public function getAllBesoins(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoBesoins = $doctrine->getRepository(Besoins::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $besoins = $repoBesoins->findBy(["user"=>$master],["date"=>"ASC"]);
        return $this->json($besoins, 200, ['Content-Type' => 'application/json'], ['groups' => 'besoin']);

    }

    #[Route(path: '/delete/{id}', name: 'apidellllbesoins', methods: ['DELETE'])]
    public function delllBesoins(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoBesoins = $doctrine->getRepository(Besoins::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $besoin = $repoBesoins->findOneBy(["user"=>$master, "id"=>$id]);

        $manager = $doctrine->getManager();
        if($besoin) {
            $manager->remove($besoin);
            $manager->flush();
        }

        $besoins = $repoBesoins->findBy(["user"=>$master]);
        return $this->json($besoins, 200, ['Content-Type' => 'application/json'], ['groups' => 'besoin']);

    }

    #[Route(path: '/ios/chatbesoin/get/{id}', name: 'apichatbesoins', methods: ['POST'])]
    public function chatBesoinsGet(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoBesoin = $doctrine->getRepository(Besoins::class);
        $repoChatBesoin = $doctrine->getRepository(ChatBesoin::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $besoin = $repoBesoin->findOneBy(['id' => $id, 'user' => $master]);

        $chatbesoins = $besoin->getChatBesoins();
        return $this->json($chatbesoins, 200, ['Content-Type' => 'application/json'], ['groups' => 'chatbesoin']);

    }

    #[Route(path: '/ios/chatbesoins/add/{mess}/{idbesoin}', name: 'apiaddChatbesoins', methods: ['POST'])]
    public function chatBesoinsAddChat(string $mess, int $idbesoin,  Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoBesoin = $doctrine->getRepository(Besoins::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $besoin = $repoBesoin->findOneBy(['id' => $idbesoin, 'user' => $master]);
        $chat = new ChatBesoin();
        $chat->setUser($master);
        $chat->setBesoin($besoin);
        $chat->setSender($apuser);
        $chat->setMessage($mess);
        $chat->setDate(new \DateTime('NOW'));
        $manager = $doctrine->getManager();
        $manager->persist($chat);
        $manager->flush();

        $chatbesoins = $besoin->getChatBesoins();
        return $this->json($chatbesoins, 200, ['Content-Type' => 'application/json'], ['groups' => 'chatbesoin']);

    }

    #[Route(path: '/ios/chatbesoin/delete/{id}', name: 'apidelbesoinsdel', methods: ['DELETE'])]
    public function chatBesoinsDelete(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChatBesoin = $doctrine->getRepository(ChatBesoin::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $besoin = $repoChatBesoin->findOneBy(['id' => $id, 'user' => $master]);
        $manager = $doctrine->getManager();
        $manager->remove($besoin);
        $manager->flush();

        $chatbesoins = $besoin->getChatBesoins();
        return $this->json($chatbesoins, 200, ['Content-Type' => 'application/json'], ['groups' => 'chatbesoin']);

    }

    #[Route(path: '/ios/add/{id}', name: 'apiaddbesoins', methods: ['POST'])]
    public function addIosBesoins(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);
        $apbesoin = $serializer->deserialize($apjson, Besoins::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(["user"=>$master, "id"=>$id]);

        $besoin = new Besoins();
        $besoin->setUser($master);
        $besoin->setDobyuser($apuser);
        $besoin->setBesoin($apbesoin->getBesoin());
        $besoin->setChantier($chantier);
        $besoin->setEtat($apbesoin->getEtat());
        $besoin->setDate(new \DateTime('NOW'));

        $manager = $doctrine->getManager();
        $manager->persist($besoin);
        $manager->flush();

        $json = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
        if (isset($json["file"]) || $json["file"] !== null) {
            $bs4 = $json["file"];
            $filename = $json["filename"];
            $taille = $json["size"];
            $bin = base64_decode($bs4, true);

            $dir = $master->getId() . $master->getNom();
            $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
            if (!mkdir($concurrentDirectory = 'coffre/' . $dir . '/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
            }

            file_put_contents($concurrentDirectory . '/' . $filename, $bin);

            if (file_exists($concurrentDirectory . '/' . $filename)) {
                $ficher = new Fichier();
                $ficher->setChantier($chantier);
                $ficher->setBesoins($besoin);
                $ficher->setDate(new \DateTime('NOW'));
                $ficher->setUser($master);
                $ficher->setTaille($taille);
                $ficher->setType('besoins');
                $ficher->setNomfichier($filename);
                $ficher->setCategorie($apbesoin->getBesoin());
                $ficher->setFolde($concurrentDirectory);
                $manager->persist($ficher);
                $manager->flush();
                return $this->json(['result' => 'success'], 200);
            }
        }
        return $this->json(['result' => 'Besoin ajouté'], 200);

    }

    #[Route(path: '/cloturer/{id}', name: 'apicloturerbesoins', methods: ['POST'])]
    public function cloturerBesoins(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoBesoin = $doctrine->getRepository(Besoins::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $besoin = $repoBesoin->findOneBy(["user"=>$master, "id"=>$id]);
        $besoin->setEtat("cloturer");

        $manager = $doctrine->getManager();
        $manager->persist($besoin);
        $manager->flush();

        return $this->json(['result' => 'Besoin ajouté'], 200);
    }

    #[Route(path: '/archiver/{id}', name: 'apiarchiverbesoins', methods: ['POST'])]
    public function archiverBesoins(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoBesoin = $doctrine->getRepository(Besoins::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $besoin = $repoBesoin->findOneBy(["user"=>$master, "id"=>$id]);
        $besoin->setEtat("archiver");

        $manager = $doctrine->getManager();
        $manager->persist($besoin);
        $manager->flush();

        return $this->json(['result' => 'Besoin ajouté'], 200);
    }

    #[Route(path: '/relancer/{id}', name: 'apirelancerrbesoins', methods: ['POST'])]
    public function relancerBesoins(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoBesoin = $doctrine->getRepository(Besoins::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $besoin = $repoBesoin->findOneBy(["user"=>$master, "id"=>$id]);
        $besoin->setEtat("valider");

        $manager = $doctrine->getManager();
        $manager->persist($besoin);
        $manager->flush();

        return $this->json(['result' => 'Besoin ajouté'], 200);
    }

    #[Route(path: '/update/{idchan}/{idbeso}', name: 'apiupdbesoins', methods: ['POST'])]
    public function updIosBesoins(int $idchan, int $idbeso, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);
        $repoBesoin = $doctrine->getRepository(Besoins::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);
        $apbesoin = $serializer->deserialize($apjson, Besoins::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(["user"=>$master, "id"=>$idchan]);
        $besoin = $repoBesoin->findOneBy(["user"=>$master, "id"=>$idbeso]);

        $besoin->setBesoin($apbesoin->getBesoin());
        $besoin->setChantier($chantier);
        $besoin->setEtat($apbesoin->getEtat());

        $manager = $doctrine->getManager();
        $manager->persist($besoin);
        $manager->flush();

        return $this->json(['result' => 'Besoin ajouté'], 200);

    }

}