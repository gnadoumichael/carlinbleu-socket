<?php

namespace App\Controller;

use App\Entity\Corbeille;
use App\Entity\Famille;
use App\Entity\Sousfamille;
use App\Entity\User;
use App\Form\FamilleType;
use App\Form\SousfamilleType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class SousFamilleController
 * @package App\Controller
 */
#[Route(path: '/crm/sousfamille')]
class SousFamilleController extends AbstractController
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

    #[Route(path: '/add', name: 'addSousFamille', methods: ['POST'])]
    public function addSousFamille(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        // FAMILLE D'ARTICLES ET SON FORMULAIRE

        $sousfamille = new SousFamille();
        $sousfamille->setUser($this->getMaster());

        $json = $this->getJson($request);
        $formo  = $this->formFactory->createNamed('',SousfamilleType::class, $sousfamille,
            ['user' => $this->getMaster()]);


        $formo->submit($json);
        $formo->handleRequest($request);
        if ($formo->isSubmitted() && $formo->isValid()) {
            $manager->persist($sousfamille);
            $manager->flush();
        }
        return $this->json(['result' => 'success'], 201);

    }

    #[Route(path: '/update/{id}', name: 'updateSousFamille', methods: ['POST'])]
    public function updateSousFamille($id, Request $request): JsonResponse
    {

        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();
        $repoSousFamille = $this->doctrine->getRepository(Sousfamille::class);

        $sousfamille = $repoSousFamille->findOneBy(['id' => $id]);
        $json = $this->getJson($request);

        $formSous = $this->formFactory->createNamed('', SousfamilleType::class, $sousfamille,
            ['user' => $this->getMaster()]);

        $formSous->submit($json);
        $formSous->handleRequest($request);
        if ($formSous->isSubmitted() && $formSous->isValid()) {
            $manager->persist($sousfamille);
            $manager->flush();
            return $this->json(['result' => 'Sous Famille modifiée'], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/del/{id}', name: 'delSousFamille', methods: ['DELETE'])]
    public function delSous($id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoSous = $this->doctrine->getRepository(Sousfamille::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $sous = $repoSous->findOneBy(['id' => $id]);
        if (!$sous) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $cor = $repoCorbeille->findOneBy(['designation' => $sous->getId(), 'master' => $this->getMaster(), 'type' => 7]);
        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($sous->getId());
            $corbeille->setMaster($this->getMaster());
            $corbeille->setEtat('faible');
            $corbeille->setType('7');
            $manager->persist($corbeille);
            $manager->flush();
            $core = $repoCorbeille->findOneBy(['designation' => $sous->getId(), 'master' => $this->getMaster(), 'type' => 7]);
            $sous->setCorbeille($core);
            $manager->persist($sous);
            $manager->flush();
            return $this->json(['result' => 'Sous Famille suprimé'], 204);
        }
        return $this->json(['result' => 'erreur'], 400);
    }

}
