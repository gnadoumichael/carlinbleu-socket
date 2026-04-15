<?php

namespace App\Controller;

use App\Entity\Chantier;
use App\Entity\Corbeille;
use App\Entity\Personnel;
use App\Entity\Service;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class ApiPersonnelController
 * @package App\Controller
 */
#[Route(path: '/api/personnel')]
class ApiPersonnelController extends AbstractController
{

    #[Route(path: '/add/{idservice}', name: 'api_personnel_add', methods: ['POST'])]
    public function addPers($idservice, ManagerRegistry $doctrine, SerializerInterface $serializer,
                             Request $request)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoPers = $doctrine->getRepository(Personnel::class);
        $repoServ = $doctrine->getRepository(Service::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $appers = $serializer->deserialize($apjson, Personnel::class, 'json');


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }


        $personnel = new Personnel();
        $personnel->setDobyuser($this->getUser());
        $personnel->setUser($master);
        $personnel->setType('personnelle');
        if($appers->getService() != "0"){
            $service = $repoServ->findOneBy(["user"=>$master, "id"=>$idservice]);
            $personnel->setService($service);
        }
        $personnel->setNoms($appers->getNoms());
        $personnel->setFonction($appers->getFonction());
        $personnel->setContrat($appers->getContrat());
        $personnel->setMail($appers->getMail());
        $personnel->setContact($appers->getContact());
        $personnel->setSalaire($appers->getSalaire());

        $manager = $doctrine->getManager();
        $manager->persist($personnel);
        $manager->flush();

        $personnels = $repoPers->findBy(['user' => $master], ['noms' => 'ASC']);
        return $this->json($personnels, 200, ['Content-Type' => 'application/json'], ['groups' => 'pers']);
    }

    #[Route(path: '/update/{idservice}/{idperso}', name: 'api_personnel_update', methods: ['POST'])]
    public function updatePers($idservice,$idperso, ManagerRegistry $doctrine, SerializerInterface $serializer,
                            Request $request)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoPers = $doctrine->getRepository(Personnel::class);
        $repoServ = $doctrine->getRepository(Service::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $appers = $serializer->deserialize($apjson, Personnel::class, 'json');


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }


        $personnel = $repoPers->findOneBy(['user' => $master, "id"=>$idperso]);
        $personnel->setType('personnelle');
        if($appers->getService() != "0"){
            $service = $repoServ->findOneBy(["user"=>$master, "id"=>$idservice]);
            $personnel->setService($service);
        }
        $personnel->setNoms($appers->getNoms());
        $personnel->setFonction($appers->getFonction());
        $personnel->setContrat($appers->getContrat());
        $personnel->setMail($appers->getMail());
        $personnel->setContact($appers->getContact());
        $personnel->setSalaire($appers->getSalaire());

        $manager = $doctrine->getManager();
        $manager->persist($personnel);
        $manager->flush();

        $personnels = $repoPers->findBy(['user' => $master], ['noms' => 'ASC']);
        return $this->json($personnels, 200, ['Content-Type' => 'application/json'], ['groups' => 'pers']);
    }

    #[Route(path: '/del/{idservice}', name: 'api_personnel_del', methods: ['DELETE'])]
    public function delPers($idservice, ManagerRegistry $doctrine, SerializerInterface $serializer,
                            Request $request)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoPers = $doctrine->getRepository(Personnel::class);
        $repoCorbeille = $doctrine->getRepository(Corbeille::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $manager = $doctrine->getManager();
        $person = $repoPers->findOneBy(["user"=>$master, "id"=>$idservice]);
        $cor = $repoCorbeille->findOneBy(['designation' => $person->getId(), 'master' => $master, 'type' => 41]);
        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($person->getId());
            $corbeille->setMaster($master);
            $corbeille->setDelby($apuser);
            $corbeille->setEtat('faible');
            $corbeille->setType('41');
            $manager->persist($corbeille);
            $manager->flush();
            $person->setCorbeille($corbeille);
            $manager->persist($person);
            $manager->flush();

            $personnels = $repoPers->findBy(['user' => $master], ['noms' => 'ASC']);
            return $this->json($personnels, 200, ['Content-Type' => 'application/json'], ['groups' => 'pers']);
        }


        return $this->json(['result' => 'Erreur'], 404);


    }

    #[Route(path: '/charge/add/{charge}', name: 'api_personnel_add_charge', methods: ['POST'])]
    public function addCharge($charge, ManagerRegistry $doctrine, SerializerInterface $serializer,
                            Request $request)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoPers = $doctrine->getRepository(Personnel::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }


        $personnel = new Personnel();
        $personnel->setDobyuser($this->getUser());
        $personnel->setUser($master);
        $personnel->setType('interne');
        $personnel->setNoms($charge);

        $manager = $doctrine->getManager();
        $manager->persist($personnel);
        $manager->flush();

        $personnels = $repoPers->findBy(['user' => $master], ['noms' => 'ASC']);
        return $this->json($personnels, 200, ['Content-Type' => 'application/json'], ['groups' => 'pers']);
    }

    #[Route(path: '/charge/update/{idcharge}/{charge}', name: 'api_personnel_update_charge', methods: ['POST'])]
    public function updCharge($idcharge,$charge, ManagerRegistry $doctrine, SerializerInterface $serializer,
                              Request $request)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoPers = $doctrine->getRepository(Personnel::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $manager = $doctrine->getManager();
        $personnel = $repoPers->findOneBy(['user' => $master, 'id'=>$idcharge]);
        $personnel->setNoms($charge);
        $manager->persist($personnel);
        $manager->flush();;

        $personnels = $repoPers->findBy(['user' => $master], ['noms' => 'ASC']);
        return $this->json($personnels, 200, ['Content-Type' => 'application/json'], ['groups' => 'pers']);
    }

    #[Route(path: '/get', name: 'api_personnel', methods: ['POST'])]
    public function loadPers(ManagerRegistry $doctrine, SerializerInterface $serializer,
                             Request $request)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoPers = $doctrine->getRepository(Personnel::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $personnels = $repoPers->findBy(['user' => $master], ['noms' => 'ASC']);

        return $this->json($personnels, 200, ['Content-Type' => 'application/json'], ['groups' => 'pers']);
    }

    #[Route(path: '/get/chantier', name: 'api_personnel_chantier', methods: ['POST'])]
    public function chantierpersonnel(ManagerRegistry $doctrine, SerializerInterface $serializer,
                             Request $request)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['type' => 'personnel', 'user' => $master]);

        return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'pychantier']);
    }

    #[Route(path: '/service/get', name: 'api_service', methods: ['POST'])]
    public function loadService(ManagerRegistry $doctrine, SerializerInterface $serializer,
                             Request $request)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoService = $doctrine->getRepository(Service::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $services = $repoService->findBy(['user' => $master], ['service' => 'ASC']);

        return $this->json($services, 200, ['Content-Type' => 'application/json'], ['groups' => 'services']);
    }

    #[Route(path: '/service/add/{rang}/{serve}', name: 'api_service_add', methods: ['POST'])]
    public function addService(int $rang, string $serve, ManagerRegistry $doctrine, SerializerInterface $serializer, Request $request)
    {
        $repoUser = $doctrine->getRepository(User::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }


        $service = new Service();
        $service->setUser($master);
        $service->setRang($rang);
        $service->setService($serve);


        $manager = $doctrine->getManager();
        $manager->persist($service);
        $manager->flush();

        return $this->json(['result' => "success"], 200);
    }

    #[Route(path: '/service/update/{rang}/{serve}/{idserve}', name: 'api_service_update', methods: ['POST'])]
    public function updateService(int $rang, string $serve, int $idserve,  ManagerRegistry $doctrine, SerializerInterface $serializer, Request $request)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoService = $doctrine->getRepository(Service::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $service = $repoService->findOneBy(["user"=>$master, "id"=>$idserve]);
        $service->setUser($master);
        $service->setRang($rang);
        $service->setService($serve);


        $manager = $doctrine->getManager();
        $manager->persist($service);
        $manager->flush();

        return $this->json(['result' => "success"], 200);
    }

    #[Route(path: '/del/service/{idservice}', name: 'api_personnel_del_service', methods: ['DELETE'])]
    public function delServe($idservice, ManagerRegistry $doctrine, SerializerInterface $serializer,
                             Request $request)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoService = $doctrine->getRepository(Service::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $manager = $doctrine->getManager();
        $service = $repoService->findOneBy(["user"=>$master, "id"=>$idservice]);

        $manager->remove($service);
        $manager->flush();


        return $this->json(['result' => 'Erreur'], 200);


    }


}
