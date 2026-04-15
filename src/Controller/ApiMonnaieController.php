<?php

namespace App\Controller;

use App\Entity\Forme;
use App\Entity\Monnaie;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route(path: '/api/monnaie')]
class ApiMonnaieController extends AbstractController
{
    #[Route(path: '/get', name: 'api_get_monnaies', methods: ['POST'])]
    public function index(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoMonnaie = $doctrine->getRepository(Monnaie::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        if($master == null){
            return $this->json(['result' => 'Erreur'], 404);
        }

        $monnaies = $repoMonnaie->findAll();
        return $this->json($monnaies, 200, ['Content-Type' => 'application/json'], ['groups' => 'monnaie']);

    }
}