<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Chantier;
use App\Entity\Devis;
use App\Entity\Decompte;
use App\Entity\Groupe;
use App\Entity\Ligne;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class ApiLigneDecompteController
 * @package App\Controller
 */
#[Route(path: '/api/ligne/decompte')]
class ApiLigneDecompteController extends AbstractController
{


    #[Route(path: '/get/{id}', name: 'apilignedecompte', methods: ['POST'])]
    public function index(int $id , Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repodecompte = $doctrine->getRepository(Decompte::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $decompte = $repodecompte->findOneBy(['user' => $master, 'id' => $id]);
        $apligne = $repoLigne->getlignedecompte($decompte);

        return $this->json($apligne, 200, ['Content-Type' => 'application/json'], ['groups' => 'ligne']);

    }

}