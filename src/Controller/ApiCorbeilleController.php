<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Corbeille;
use App\Entity\Chantier;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class ApiCorbeilleController
 * @package App\Controller
 */
#[Route(path: '/api/corbeille')]
class ApiCorbeilleController extends AbstractController
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
    #[Route(path: '/get', name: 'api_corbeille', methods: ['POST'])]
    public function index(Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $corbeille = $repoCorbeille->findBy(['master' => $apuser]);
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
            $corbeille = $repoCorbeille->findBy(['master' => $master]);
        }

        return $this->json($corbeille, 200, ['Content-Type' => 'application/json'], ['groups' => 'corbeille']);
    }

    /**
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    #[Route(path: '/client/get', name: 'api_client_corbeille', methods: ['POST'])]
    public function getClientes(Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoClient = $this->doctrine->getRepository(Client::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $clients = $repoClient->findClientes($master);

        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);
    }


    /**
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    #[Route(path: '/chantier/get', name: 'api_chantier_corbeille', methods: ['POST'])]
    public function getChans(Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoChantiers = $this->doctrine->getRepository(Chantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantiers = $repoChantiers->findChantieres($master);

        return $this->json($chantiers, 200, ['Content-Type' => 'application/json'], ['groups' => 'chantiers']);
    }


}
