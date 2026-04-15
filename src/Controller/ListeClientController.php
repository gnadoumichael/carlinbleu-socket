<?php

namespace App\Controller;

use App\Entity\Carlinbleu;
use App\Entity\Client;
use App\Entity\Compte;
use App\Entity\Contact;
use App\Entity\Corbeille;
use App\Entity\Devis;
use App\Entity\Chantier;
use App\Entity\Historique;
use App\Entity\Relever;
use App\Entity\User;
use App\Entity\Valider;
use App\Form\ClientType;
use App\Form\ContactType;
use App\Form\ChantierType;
use App\Form\ReleverType;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use JsonException;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;


#[Route(path: '/crm/listeclient')]
class ListeClientController extends AbstractController
{

    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory) {
        $this->formFactory = $formFactory;
    }

    // RECUPERER LE MASTER USER
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
        $data = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpException(400, 'Invalid json');
        }
        return $data;
    }


    #[Route(path: '/', name: 'listeclient')]
    #[Route(path: '/{idclient}', name: 'edclient', requirements: ['idclient' => '\d+'])]
    public function index(Request $request, int $idclient = null)
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // GESTION DE COMPTE
        date_default_timezone_set('Africa/Abidjan');

        $repoClient = $this->doctrine->getRepository(Client::class);

        $clients = $repoClient->findBy(['user' => $this->getMaster()], ['nomclient' => 'ASC']);
        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        $client = $repoClient->findOneBy(['id' => $idclient, 'user' => $this->getMaster()]);
        $formClient = $this->formFactory->createNamed('', ClientType::class, $client);

        return $this->render('content/listeclient.html.twig', [
            'controller_name' => 'ClientController',
            'title' => "LISTE DES CLIENTS",
            'clients' => $clients,
            'history' => $historiques,
            'formClient' => $formClient->createView(),
            'ddclient' => $idclient,
            'page' => 'listeclient',
        ]);
    }
}
