<?php

namespace App\Controller;

use App\Entity\Caisse;
use App\Entity\Camion;
use App\Entity\Chauffeur;
use App\Entity\Client;
use App\Entity\Suivi;
use App\Entity\User;
use App\Form\CaisseType;
use App\Form\CamionType;
use App\Form\ChauffeurType;
use App\Form\ClientType;
use App\Form\SuiviType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/crm/suivi')]
class SuiviController extends AbstractController
{

    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }
    public function getMaster()
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $repoUser = $this->doctrine->getRepository(User::class);
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);
        if ($use->getCompte() === null) {
            $master = $use;
        } else {
            $master = $repoUser->findOneBy(['id' => $use->getCompte()]);
        }
        return $master;
    }
    private function getJson(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpException(400, 'Invalid json');
        }
        return $data;
    }


    #[Route('/chauffeur/add', name: 'addChauffeur', methods: ["POST"])]
    public function addChauffeur(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $chauffeur = new Chauffeur();
        $chauffeur->setUser($this->getMaster());
        $json = $this->getJson($request);
        $formChauffeur = $this->formFactory->createNamed('', ChauffeurType::class, $chauffeur);

        $formChauffeur->submit($json);
        $formChauffeur->handleRequest($request);
        if ($formChauffeur->isSubmitted() && $formChauffeur->isValid()) {
            $manager->persist($chauffeur);
            $manager->flush();
            return $this->json(['result' => "success"], 201);

        }
        return $this->json(['result' => 'echec'], 404);
    }

    #[Route('/camion/add', name: 'addCamion', methods: ["POST"])]
    public function addCamion(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $camion = new Camion();
        $camion->setUser($this->getMaster());

        $json = $this->getJson($request);
        $formCamion = $this->formFactory->createNamed('', CamionType::class, $camion);

        $formCamion->submit($json);
        $formCamion->handleRequest($request);
        if ($formCamion->isSubmitted() && $formCamion->isValid()) {
            $manager->persist($camion);
            $manager->flush();
            return $this->json(['result' => "success"], 201);
        }
        return $this->json(['result' => 'echec'], 404);
    }

    #[Route('/add', name: 'addSuivi', methods: ["POST"])]
    public function addSuivi(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $suivi= new Suivi();
        $suivi->setUser($this->getMaster());

        $json = $this->getJson($request);
        $formSuivi = $this->formFactory->createNamed('', SuiviType::class, $suivi, [
            'user' => $this->getMaster()
        ]);

        $formSuivi->submit($json);
        $formSuivi->handleRequest($request);
        if ($formSuivi->isSubmitted() && $formSuivi->isValid()) {
            $manager->persist($suivi);
            $manager->flush();
            return $this->json(['result' => "success"], 201);
        }
        return $this->json(['result' => 'echec'], 404);
    }

    #[Route('/', name: 'appsuivi')]
    #[Route(path: '/{idsuivi}', name: 'editsuivi', requirements: ['idsuivi' => '\d+'])]
    #[Route(path: '/camion/{idcamion}', name: 'editcamion', requirements: ['idcamion' => '\d+'])]
    #[Route(path: '/chauffeur/{idchauffeur}', name: 'editchauffeur', requirements: ['idchauffeur' => '\d+'])]
    public function index(int $idsuivi = null, int $idchauffeur= null, int $idcamion = null): Response
    {
        $repoSuivi = $this->doctrine->getRepository(Suivi::class);
        $repoCamion  = $this->doctrine->getRepository(Camion::class);
        $repoChauffeur = $this->doctrine->getRepository(Chauffeur::class);

        if($idsuivi === null){
            $suivi= new Suivi();
            $suivi->setDate(date("d.m.Y"));
            $suivi->setUser($this->getMaster());
            $suivi->setCarburant(0);
            $suivi->setMontant(0);
        }else{
            $suivi = $repoSuivi->findOneBy(['id' => $idsuivi, 'user'=>$this->getMaster()]);
        }
        $formSuivi = $this->formFactory->createNamed('', SuiviType::class, $suivi, [
            'user' => $this->getMaster()
        ]);

        if($idcamion === null){
            $camion = new Camion();
            $camion->setUser($this->getMaster());
        }else{
            $camion = $repoCamion->findOneBy(['id' => $idcamion, 'user'=>$this->getMaster()]);
        }
        $formCamion = $this->formFactory->createNamed('', CamionType::class, $camion);

        if($idchauffeur === null){
            $chauffeur = new Chauffeur();
            $chauffeur->setUser($this->getMaster());
        }else{
            $chauffeur = $repoChauffeur->findOneBy(['id' => $idchauffeur, 'user'=>$this->getMaster()]);
        }
        $formChauffeur = $this->formFactory->createNamed('', ChauffeurType::class, $chauffeur);
        $suivis = $repoSuivi->findBy(['user'=>$this->getMaster()]);

        return $this->render('content/suivi.html.twig', [
            'controller_name' => 'SuiviController',
            'formSuivi' => $formSuivi->createView(),
            'formCamion' => $formCamion->createView(),
            'formChauffeur' => $formChauffeur->createView(),
            'idsuivi' => $idsuivi,
            'idcamion'=> $idcamion,
            'idchauffeur' => $idchauffeur,
            'suivis' => $suivis,
        ]);
    }
}
