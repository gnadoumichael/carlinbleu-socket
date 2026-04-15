<?php

namespace App\Controller;

use App\Entity\Droit;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;



#[Route(path: '/api/droits')]
class ApiDroitsController extends AbstractController
{

    #[Route(path: '/comptable/get', name: 'apidroitcomptable', methods: ['POST'])]
    public function droitcomptable(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDroit = $doctrine->getRepository(Droit::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        $droitComptable = $repoDroit->findBy(["pour"=>$apuser]);
        return $this->json($droitComptable, 200, ['Content-Type' => 'application/json'], ['groups' => 'droitios']);

    }


}
