<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Fichier;
use App\Entity\Historique;
use App\Entity\Planning;
use App\Entity\Section;
use App\Entity\Tache;
use App\Entity\User;
use App\Form\FichierType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: '/crm/tache')]
class TacheController extends AbstractController
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


    #[Route(path: '/get/{id}', name: 'tache', methods: ['GET'])]
    public function tache(int $id): Response
    {
        // REPOSITORIES
        $repoTache = $this->doctrine->getRepository(Tache::class);
        $tache = $repoTache->findOneBy(['user'=>$this->getMaster(), 'id'=>$id]);
        return $this->json($tache, 200, ['Content-Type' => 'application/json'], ['groups' => 'tacher']);
    }

    #[Route(path: '/{id}', name: 'patache')]
    public function index(int $id = null): Response
    {
        $repoTache = $this->doctrine->getRepository(Tache::class);
        $repoClient = $this->doctrine->getRepository(Client::class);

        $tache = $repoTache->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        $fich = new Fichier();
        $fich->setUser($this->getMaster());
        $fich->setDate(new \DateTime('NOW'));
        $formUpload = $this->formFactory->createNamed(
            '',
            FichierType::class,
            $fich, [
                'user' => $this->getMaster(),
                'type' => 'fichie'
            ]
        );

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        return $this->render('content/tache.html.twig', [
            'controller_name' => 'TacheController',
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'tache' => $tache,
            'formUpload' => $formUpload->createView(),
            'history' => $historiques
        ]);
    }
}
