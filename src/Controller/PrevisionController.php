<?php

namespace App\Controller;

use App\Entity\Forme;
use App\Entity\Historique;
use App\Entity\Ligne;
use App\Entity\Prevision;
use App\Entity\Chantier;
use App\Entity\User;
use App\Form\PrevisionType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * Class PrevisionController
 * @package App\Controller
 */
#[Route(path: '/crm/prevision')]
class PrevisionController extends AbstractController
{

    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory) {
        $this->formFactory = $formFactory;
    }


    // RECUPERER LE MASTER USER
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



    // CONVERTIR EN JSON
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

     // AJOUTER UNE PREVISION
    /**
     * @param Request $request
     * @return JsonResponse
     */
    #[Route(path: '/add', name: 'addPrevision', methods: ['POST'])]
    public function addPrevision(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoPrevision = $this->doctrine->getRepository(Prevision::class);

        $prevision = new Prevision();
        $prevision->setDate(new \DateTime('NOW'));
        $prevision->setTva('18');
        $prevision->setReference('Prévision');
        $prevision->setUser($this->getMaster());

        $json = $this->getJson($request);
        $formPrevision = $this->formFactory->createNamed('', PrevisionType::class,
            $prevision);
        $formPrevision->submit($json);
        $formPrevision->handleRequest($request);
        if ($formPrevision->isSubmitted() && $formPrevision->isValid()) {

            $ccheck = $repoPrevision->findOneBy(['user' => $this->getMaster(),
                'numprevision' => $json['numprevision']]);
            if (!$ccheck) {
                $manager->persist($prevision);
                $manager->flush();
                return $this->json(['result' => $prevision->getId()], 201);
            }
            return $this->json(['result' => 'echec'], 404);
        }
        return $this->json(['result' => 'echec'], 404);
    }

    /**
     * @param null $id
     * @param null $idligne
     * @param null $idprevision
     * @return Response
     */
    #[Route(path: '/{id}/{idchantier}', name: 'editprevision', requirements: ['id' => '\d+', 'idchantier' => '\d+'], methods: ['GET'])]
    #[Route(path: '/ligne/{id}/{idchantier}/{idligne}', name: 'editligneprevision')]
    public function index( $id = null, $idligne = null, $idchantier = null): Response
    {

        // REFUSE L'ACCESS SI NON CONNECTÉ
        $manager = $this->doctrine->getManager();
        date_default_timezone_set('Africa/Abidjan');


        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoForme = $this->doctrine->getRepository(Forme::class);
        $repoPre = $this->doctrine->getRepository(Prevision::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        // RECUPERE LE PROJET COURANT ET LE BON
        $chantier = $repoChantier->findOneBy(['id' => $idchantier, 'user' => $this->getMaster()]);
        $prevision = $repoPre->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        // ON RECUPERE TOUTE LES LIGNES
        $lignes = $repoLigne->findBy(['prevision' => $prevision]);

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        return $this->render('content/prevision.html.twig', [
            'controller_name' => 'PrevisionController',
            'title' => 'BON DE PRÉVISION',
            'idligne' => $idligne,
            'prevision' => $prevision,
            'chantier' => $chantier,
            'history' => $historiques
        ]);
    }
}
