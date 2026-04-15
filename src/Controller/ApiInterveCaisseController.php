<?php

namespace App\Controller;

use App\Entity\Caisse;
use App\Entity\Intervenant;
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
 * Class ApiInterveCaisseController
 * @package App\Controller
 */
#[Route(path: '/api/intervecaisse')]
class ApiInterveCaisseController extends AbstractController
{

    private FormFactoryInterface $formFactory;

    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }
    
    /**
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    #[Route(path: '/', name: 'api_interve_caisse', methods: ['POST'])]
    public function index(Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoInterve = $this->doctrine->getRepository(Intervenant::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $caisse = $serializer->deserialize($apjson, Caisse::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        $apcaisse = $repoCaisse->findOneBy(['user'=>$apuser, 'numcaisse'=>$caisse->getNumCaisse()]);
        $apcaisses = $repoCaisse->findBy(['user'=>$apuser, 'intervenant'=>$apcaisse->getIntervenant(), 'etat'=>'valide']);

        return $this->json($apcaisses, 200, ['Content-Type' => 'application/json'], ['groups'=>'caisse']);

    }
}
