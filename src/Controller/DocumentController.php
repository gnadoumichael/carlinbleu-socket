<?php

namespace App\Controller;

use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Chantier;
use App\Entity\Client;
use App\Entity\Contact;
use App\Entity\Devis;
use App\Entity\Facture;
use App\Entity\Fichier;
use App\Entity\Historique;
use App\Entity\Livraison;
use App\Entity\Personnel;
use App\Entity\User;
use App\Form\FichierType;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use JsonException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;


#[Route(path: '/crm/documents')]
class DocumentController extends AbstractController
{

    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory) {
        $this->formFactory = $formFactory;
    }

    private function getJson(Request $request)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $data = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpException(400, 'Invalid json');
        }
        return $data;
    }

    public function getMaster(): ?object
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

    #[Route(path: '/', name: 'lesdocs')]
    public function lesdocs()
    {

        // LES REPOSITORIES

        $repoFichier = $this->doctrine->getRepository(Fichier::class);
        $repoClient = $this->doctrine->getRepository(Client::class);


        // FORM UPLOAD
        $fich = new Fichier();
        $fich->setUser($this->getMaster());
        $fich->setDate(new \DateTime('NOW'));
        $formUpload = $this->formFactory->createNamed(
            '',
            FichierType::class,
            $fich, [
                'user' => $this->getMaster(),
                'type' => 'chantiers'
            ]
        );

        $formUploada = $this->formFactory->createNamed(
            '',
            FichierType::class,
            $fich, [
                'user' => $this->getMaster(),
                'type' => 'fiche'
            ]
        );

        $formUploado = $this->formFactory->createNamed(
            '',
            FichierType::class,
            $fich, [
                'user' => $this->getMaster(),
                'type' => 'fiche'
            ]
        );

        $formSave = $this->formFactory->createNamed(
            '',
            FichierType::class,
            $fich, [
                'user' => $this->getMaster(),
                'type' => 'enregistre'
            ]
        );

        $fichies = $repoFichier->findBy(['user' => $this->getMaster(), 'type' => 'technique']);
        $fichos = $repoFichier->findBy(['user' => $this->getMaster(), 'type' => 'save']);
        $fichidesc = $repoFichier->findBy(['user' => $this->getMaster(), 'type' => 'descriptif']);

        // RECUPERE TOUS LES CLIENTS
        $clients = $repoClient->findBy(['user' => $this->getMaster()], ['nomclient' => 'ASC']);

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        return $this->render('content/document.html.twig', [
            'title' => 'Chantiers | Carlinbleu',
            'master' => $this->getMaster(),
            'estmaster' => $this->getMaster() === $this->getUser(),
            'clients' => $clients,
            'page' => 'technique',
            'formUpload' => $formUpload->createView(),
            'formUploada' => $formUploada->createView(),
            'formUploado' => $formUploado->createView(),
            'formSave' => $formSave->createView(),
            'fichies' => $fichies,
            'fichos' => $fichos,
            'fichidesc' => $fichidesc,
            'history' => $historiques
        ]);

    }
}
