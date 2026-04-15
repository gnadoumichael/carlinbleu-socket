<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Chantier;
use App\Entity\Devis;
use App\Entity\Facture;
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


#[Route(path: '/api/ligne/facture')]
class ApiLigneFactureController extends AbstractController
{

    #[Route(path: '/get/{id}', name: 'apilignefacture', methods: ['POST'])]
    public function index(int $id , Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repofacture = $doctrine->getRepository(Facture::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $facture = $repofacture->findOneBy(['user' => $master, 'id' => $id]);
        $apligne = $repoLigne->getlignefacture($facture); 

        return $this->json($apligne, 200, ['Content-Type' => 'application/json'], ['groups' => 'ligne']);

    }

}
