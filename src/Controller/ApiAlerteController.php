<?php

namespace App\Controller;

use App\Entity\Alerte;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;


#[Route(path: '/api/alerte')]
class ApiAlerteController extends AbstractController
{
    #[Route(path: '/get/{id}', name: 'api_get_alerte', methods: ['POST'])]
    public function loadAlerte(int $id , ManagerRegistry $doctrine, SerializerInterface $serializer,
                             Request $request)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoAlerte = $doctrine->getRepository(Alerte::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $owner = $repoUser->findOneBy(['id' => $id]);
        $alertes = $repoAlerte->findBy(['user' => $master, 'owner'=>$owner]);

        return $this->json($alertes, 200, ['Content-Type' => 'application/json'], ['groups' => 'alertes']);
    }

    #[Route(path: '/delete/{id}', name: 'api_del_alerte', methods: ['POST'])]
    public function delAlerte(int $id , ManagerRegistry $doctrine, SerializerInterface $serializer,
                               Request $request)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoAlerte = $doctrine->getRepository(Alerte::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $alerte = $repoAlerte->findOneBy(['user' => $master, 'id'=>$id]);
        $manager->remove($alerte);
        $manager->flush();

        return $this->json(['result' => 'success'], 200);
    }


}
