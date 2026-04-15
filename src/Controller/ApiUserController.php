<?php

namespace App\Controller;

use App\Entity\Forme;
use App\Entity\Pays;
use App\Entity\User;
use App\Security\EmailVerifier;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route(path: '/api/user')]
class ApiUserController extends AbstractController
{
    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    #[Route(path: '/first/{themes}/{langue}', name: 'apifirst', methods: ['POST'])]
    public function updateLangueTheme(
        string $themes,
        string $langue,
        ManagerRegistry $doctrine,
        SerializerInterface $serializer,
        Request $request
    ) {
        $repoUser = $doctrine->getRepository(User::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        $apuser->setLangue($langue);
        $apuser->setThemes($themes);

        $manager->persist($apuser);
        $manager->flush();

        return $this->json(['result' => 'success'], 200);
    }


    #[Route(path: '/firste/get', name: 'apifirstget', methods: ['POST'])]
    public function updateLangueThemeget(
        ManagerRegistry $doctrine,
        SerializerInterface $serializer,
        Request $request
    ) {
        $repoUser = $doctrine->getRepository(User::class);

        // Récup JSON
        $json = $request->getContent();
        $userReq = $serializer->deserialize($json, User::class, 'json');

        // Trouver l'utilisateur
        $apuser = $repoUser->findOneBy([
            'username' => $userReq->getUserIdentifier()
        ]);

        if (!$apuser) {
            return $this->json(['error' => 'User not found'], 404);
        }

        return $this->json([
            'result' => 'success',
            'langue' => $apuser->getLangue(),
            'themes' => $apuser->getThemes()
        ], 200);
    }



    #[Route(path: '/login', name: 'apilogin', methods: ['POST'])]
    public function login(ManagerRegistry $doctrine)
    {
        $user = $this->getUser();
        if ($user) {
            $repoUser = $doctrine->getRepository(User::class);
            $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
            return $this->json($apuser, 200, ['Content-Type' => 'application/json'], ['groups' => 'user']);
        }
        return $this->json(['result' => 'echec'], 404);
    }

    #[Route(path: '/formes', name: 'apiformes', methods: ['POST'])]
    public function apiformes(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoForme = $doctrine->getRepository(Forme::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $formes = $repoForme->findBy(['user' => $apuser]);
        return $this->json($formes, 200, ['Content-Type' => 'application/json'], ['groups' => 'forme']);
    }


    #[Route(path: '/getusers', name: 'apiUser', methods: ['POST'])]
    public function getUsers(
        ManagerRegistry $doctrine,
        SerializerInterface $serializer,
        Request $request
    ) {
        $repoUser = $doctrine->getRepository(User::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $comptes = $repoUser->chUseres($master);

        return $this->json($comptes, 200, ['Content-Type' => 'application/json'], ['groups' => 'usa']);
    }

    #[Route(path: '/status', name: 'apiUserStatus', methods: ['POST'])]
    public function setUsersStatus(
        ManagerRegistry $doctrine,
        SerializerInterface $serializer,
        Request $request
    ) {
        $repoUser = $doctrine->getRepository(User::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $master->setStatus("sup");
        $manager->persist($master);
        $manager->flush();

        return $this->json(['result' => 'success'], 200);
    }

    #[Route(path: '/adduser/{idpays}/{nom}/{prenoms}/{societe}/{contact}/{username}/{password}', name: 'apiUserCompte', methods: ['POST'])]
    public function addComptes(
        int $idpays,
        string $nom,
        string $prenoms,
        string $societe,
        string $contact,
        string $username,
        string $password,
        ManagerRegistry $doctrine,
        SerializerInterface $serializer,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $manager
    ) {

        $repoPays = $doctrine->getRepository(Pays::class);
        $pays = $repoPays->findOneBy(["id" => $idpays]);

        $user = new User();
        $user->setNom($nom);
        $user->setPrenoms($prenoms);
        $user->setUsername($username);
        $user->setSociete($societe);
        $user->setPays($pays);
        $user->setContact($contact);

        $user->setBegdate(new \DateTime('NOW'));
        $end_date = new \DateTime('NOW');
        date_add($end_date, date_interval_create_from_date_string('30days'));
        $date = new DateTime(date_format($end_date, 'Y-m-d H:i:s'));
        $user->setEnddate($date);

        $hash = $passwordHasher->hashPassword($user, $password);
        $user->setPassword($hash);
        $user->setRoles(["ROLE_ADMIN", "ROLE_COMPTA"]);
        $user->setPhoto("usere.png");

        $manager->persist($user);
        $manager->flush();
        if ($user) {
            return $this->json(['result' => "success"], 200);
        }
        return $this->json(['result' => 'echec'], 404);
    }
}
