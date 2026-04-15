<?php

namespace App\Controller;

use App\Entity\Bon;
use App\Entity\Devis;
use App\Entity\Facture;
use App\Entity\Groupe;
use App\Entity\Chantier;
use App\Entity\User;
use App\Form\DevisType;
use App\Form\GroupeType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class GroupeController
 * @package App\Controller
 */
#[Route(path: '/crm/groupe')]
class GroupeController extends AbstractController
{

    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory) {
        $this->formFactory = $formFactory;
    }


    /**
     * @return User|object|null
     */
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

    /**
     * @param Request $request
     * @return mixed
     * @throws HttpException
     */
    private function getJson(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpException(400, 'Invalid json');
        }
        return $data;
    }

    /**
     * @param $id
     * @param $type
     * @param Request $request
     * @return JsonResponse
     */
    #[Route(path: '/add/{id}/{type}', name: 'addGroupe', methods: ['POST'])]
    public function addGroupe($id, $type, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoFacture = $this->doctrine->getRepository(Facture::class);

        if ($type === 'devis') {
            $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            if (!$devis) {
                return $this->json(['result' => 'Erreur'], 404);
            }
            $groupe = new Groupe();
            $groupe->setDevis($devis);
            $json = $this->getJson($request);
            $formGroupe = $this->formFactory->createNamed('', GroupeType::class, $groupe);
            $formGroupe->submit($json);
            $formGroupe->handleRequest($request);
            if ($formGroupe->isSubmitted() && $formGroupe->isValid()) {
                $manager->persist($groupe);
                $manager->flush();
                return $this->json($devis, 201, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
            }
        }
        if ($type === 'bon') {
            $bon = $repoBon->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            if (!$bon) {
                return $this->json(['result' => 'Erreur'], 404);
            }
            $groupe = new Groupe();
            $groupe->setBon($bon);
            $json = $this->getJson($request);
            $formGroupe = $this->formFactory->createNamed('', GroupeType::class, $groupe);
            $formGroupe->submit($json);
            $formGroupe->handleRequest($request);
            if ($formGroupe->isSubmitted() && $formGroupe->isValid()) {
                $manager->persist($groupe);
                $manager->flush();
                return $this->json(['result' => 'success'], 201);
            }
        }
        if ($type === 'facture') {
            $facture = $repoFacture->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            if (!$facture) {
                return $this->json(['result' => 'Erreur'], 404);
            }
            $groupe = new Groupe();
            $groupe->setFacture($facture);
            $json = $this->getJson($request);
            $formGroupe = $this->formFactory->createNamed('', GroupeType::class, $groupe);
            $formGroupe->submit($json);
            $formGroupe->handleRequest($request);
            if ($formGroupe->isSubmitted() && $formGroupe->isValid()) {
                $manager->persist($groupe);
                $manager->flush();
                return $this->json(['result' => 'success'], 201);
            }
        }
        return $this->json(['result' => 'ERROR'], 404);
    }


    /**
     * @param $id
     * @param $ids
     * @param $type
     * @param Request $request
     * @return JsonResponse
     */
    #[Route(path: '/update/{id}/{ids}/{type}', name: 'updateGroupe', methods: ['PUT'])]
    public function updateGroupe($id, $ids, $type, Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $manager = $this->doctrine->getManager();
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoFacture = $this->doctrine->getRepository(Facture::class);

        if ($type === 'devis') {
            $devis = $repoDevis->findOneBy(['id' => $ids, 'user' => $this->getMaster()]);
            if (!$devis) {
                return $this->json(['result' => 'Erreur'], 404);
            }
            $groupe = $repoGroupe->findOneBy(['id' => $id, 'devis' => $devis]);
            if (!$groupe) {
                return $this->json(['result' => 'Erreur'], 404);
            }
            $json = $this->getJson($request);
            $formGroupe = $this->formFactory->createNamed('', GroupeType::class, $groupe);
            $formGroupe->submit($json);
            $formGroupe->handleRequest($request);
            if ($formGroupe->isSubmitted() && $formGroupe->isValid()) {
                $manager->persist($groupe);
                $manager->flush();
                return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
            }
            return $this->json(['result' => 'Erreur'], 404);

        }
        if ($type === 'bon') {
            $bon = $repoBon->findOneBy(['id' => $ids, 'user' => $this->getMaster()]);
            if (!$bon) {
                return $this->json(['result' => 'Erreur'], 404);
            }
            $groupe = $repoGroupe->findOneBy(['id' => $id, 'bon' => $bon]);
            if (!$groupe) {
                return $this->json(['result' => 'Erreur'], 404);
            }
            $json = $this->getJson($request);
            $formGroupe = $this->formFactory->createNamed('', GroupeType::class, $groupe);
            $formGroupe->submit($json);
            $formGroupe->handleRequest($request);
            if ($formGroupe->isSubmitted() && $formGroupe->isValid()) {
                $manager->persist($groupe);
                $manager->flush();
                return $this->json($bon, 200, ['Content-Type' => 'application/json'], ['groups' => 'commande']);
            }
        }
        if ($type === 'facture') {
            $facture = $repoFacture->findOneBy(['id' => $ids, 'user' => $this->getMaster()]);
            if (!$facture) {
                return $this->json(['result' => 'Erreur'], 404);
            }
            $groupe = $repoGroupe->findOneBy(['id' => $id, 'bon' => $facture]);
            if (!$groupe) {
                return $this->json(['result' => 'Erreur'], 404);
            }
            $json = $this->getJson($request);
            $formGroupe = $this->formFactory->createNamed('', GroupeType::class, $groupe);
            $formGroupe->submit($json);
            $formGroupe->handleRequest($request);
            if ($formGroupe->isSubmitted() && $formGroupe->isValid()) {
                $manager->persist($groupe);
                $manager->flush();
                return $this->json($facture, 200);
            }
        }

        return $this->json(['result' => 'Erreur'], 404);


    }

}
