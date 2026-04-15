<?php

namespace App\Controller;

use App\Entity\Corbeille;
use App\Entity\Famille;
use App\Entity\User;
use App\Form\FamilleType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


#[Route(path: '/crm/famille')]
class FamilleController extends AbstractController
{


    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory) {
        $this->formFactory = $formFactory;
    }

    public function getMaster()
    {
        // REPOSITORIES
        $repoUser = $this->doctrine->getRepository(User::class);
        //GESTION DE COMPTE
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);
        // VERIFIE SI COMPTE MASTER
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


    #[Route('/add/{type}', name:'addFamille', methods:["POST"])]
    public function addFamille(int $type, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        // FAMILLE D'ARTICLES ET SON FORMULAIRE

        $famille = new Famille();
        $famille->setUser($this->getMaster());

        $json = $this->getJson($request);
        $forme = $this->formFactory->createNamed('', FamilleType::class, $famille);

        $forme->submit($json);
        $forme->handleRequest($request);
        if ($forme->isSubmitted() && $forme->isValid()) {
            $famille->setType($type);
            $manager->persist($famille);
            $manager->flush();
            return $this->json(['result' => 'success'], 201);
        }
        return $this->json(['result' => 'echec'], 404);
    }

    #[Route(path: '/update/{id}', name: 'updateFamille', methods: ['POST'])]
    public function updateFamille($id, Request $request): JsonResponse
    {

        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();
        $repoFamille = $this->doctrine->getRepository(Famille::class);

        $famille = $repoFamille->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if(!$famille){
            return $this->json(['result' => 'Erreur'], 404);
        }

        $json = $this->getJson($request);
        $formFamille = $this->formFactory->createNamed('', FamilleType::class, $famille);

        $formFamille->submit($json);
        $formFamille->handleRequest($request);
        if ($formFamille->isSubmitted() && $formFamille->isValid()) {
            $manager->persist($famille);
            $manager->flush();
            return $this->json(['result' => $famille->getType()], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/del/{id}', name: 'delFamille', methods: ['DELETE'])]
    public function delFamille($id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoFamille = $this->doctrine->getRepository(Famille::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $famille = $repoFamille->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$famille) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $cor = $repoCorbeille->findOneBy(['designation' => $famille->getId(), 'master' => $this->getMaster(), 'type' => 10]);
        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($famille->getId());
            $corbeille->setMaster($this->getMaster());
            $corbeille->setEtat('faible');
            $corbeille->setType('10');
            $manager->persist($corbeille);
            $manager->flush();
            $core = $repoCorbeille->findOneBy(['designation' => $famille->getId(), 'master' => $this->getMaster(), 'type' => 10]);
            $famille->setCorbeille($core);
            $manager->persist($famille);
            $manager->flush();
            return $this->json(['result' => $famille->getType()], 204);
        }
        return $this->json(['result' => 'erreur'], 400);
    }

}
