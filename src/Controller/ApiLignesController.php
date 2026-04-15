<?php

namespace App\Controller;

use App\Entity\Chantier;
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
 * Class ApiLignesController
 * @package App\Controller
 */
#[Route(path: '/api/lignes')]
class ApiLignesController extends AbstractController
{
    private FormFactoryInterface $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    /**
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return void
     */
    #[Route(path: '/', name: 'apilignes', methods: ['POST'])]
    public function index(Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $chantier = $serializer->deserialize($apjson, Chantier::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

    }
}