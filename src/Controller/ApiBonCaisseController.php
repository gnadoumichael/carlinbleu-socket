<?php

namespace App\Controller;

use App\Entity\Caisse;
use App\Entity\Chantier;
use App\Entity\Ligne;
use App\Entity\Projet;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
/**
 * Class ApiBonCaisseController
 * @package App\Controller
 */
#[Route(path: '/api/bon/caisse')]
class ApiBonCaisseController extends AbstractController
{


    #[Route(path: '/', name: 'api_bon_caisse', methods: ['POST'])]
    public function index(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $caisse = $serializer->deserialize($apjson, Caisse::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        $apcaisse = $repoCaisse->findOneBy(['user'=>$apuser, 'numcaisse'=>$caisse->getNumCaisse()]);
        $apligne  = $repoLigne->findBy(['user'=>$apuser, 'caisse'=>$apcaisse]);

        return $this->json($apligne, 200, ['Content-Type' => 'application/json'], ['groups'=>'ligne']);


    }
}
