<?php

namespace App\Controller;

use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Client;
use App\Entity\Devis;
use App\Entity\Facture;
use App\Entity\Fichier;
use App\Entity\Historique;
use App\Entity\Livraison;
use App\Entity\Personnel;
use App\Entity\Chantier;
use App\Entity\User;
use App\Form\ClientType;
use App\Form\FichierType;
use App\Form\PersonnelType;
use App\Form\ChantierType;
use App\Form\ContactType;
use Doctrine\Persistence\ManagerRegistry;
use JsonException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\Contact;


/**
 * Class TechniqueController
 * @package App\Controller
 */
#[Route(path: '/crm/technique')]
class TechniqueController extends AbstractController
{

    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory) {
        $this->formFactory = $formFactory;
    }


    /**
     * @param Request $request
     * @return mixed
     * @throws HttpException|JsonException
     */
    private function getJson(Request $request)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $data = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpException(400, 'Invalid json');
        }
        return $data;
    }


    /**
     * @return object|null
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
     * @param int|null $idcontact
     * @param int|null $idsection
     * @param int|null $idtache
     * @param int|null $idplanning
     * @param int|null $idchantier
     * @param int|null $idclient
     * @param int|null $idperson
     * @return Response
     * @throws Exception
     */
    #[Route(path: '/', name: 'technique')]
    #[Route(path: '/{idchantier}', name: 'techchantier')]
    #[Route(path: '/client/{idclient}', name: 'techclient')]
    #[Route(path: '/personnel/{idperson}', name: 'techperson')]
    #[Route(path: '/contact/{idcontact}', name: 'techcontact')]
    #[Route(path: '/section/{idsection}', name: 'peditSection')]
    #[Route(path: '/tache/{idtache}', name: 'pgesteditTache')]
    #[Route(path: '/planning/{idplanning}', name: 'peditPlanning')]
    public function chantier(int $idcontact = null, int $idsection = null, int $idtache = null, int $idplanning = null,
                             int $idchantier = null, int $idclient = null, int $idperson = null)
    {

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoPersonel = $this->doctrine->getRepository(Personnel::class);
        $repoContact = $this->doctrine->getRepository(Contact::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoLivraison = $this->doctrine->getRepository(Livraison::class);
        $repoFacture = $this->doctrine->getRepository(Facture::class);

        $repoFichier = $this->doctrine->getRepository(Fichier::class);


        // RECUPERE LE CONTACT A MODIFIER OU CRÉE UN AUTRE
        $contact = $repoContact->findOneBy(['id' => $idcontact, 'user' => $this->getMaster()]);
        if (!$contact) {
            $contact = new Contact();
        }

        $formContact = $this->formFactory->createNamed('', ContactType::class, $contact);


        // GESTION DU TEMPS ET DE L'ABONNEMENT
        date_default_timezone_set('Africa/Abidjan');

        // ON RECUPERE LE PROJET COURANT
        $chantier = $repoChantier->findOneBy(['id' => $idchantier, 'user' => $this->getMaster()]);

        // ON CRÉE UN NOUVEAU PROJET SI LE PROJET N'EXISTE PAS
        if (!$chantier) {
            $chantier = new Chantier();
            $idproj = (string)random_int(0, 999999);
            $chantier->setIdchantier($idproj);
            $chantier->setUser($this->getMaster());
            $chantier->setDobyuser($this->getUser());
            $chantier->setDcrea(new \DateTime('NOW'));
        }
        //FORMULAIRE AJOUTER ET MODIFIER UN CHANTIER
        $formChantier = $this->formFactory->createNamed('', ChantierType::class, $chantier, [
            'user' => $this->getMaster(),
            'type' => 'chantier'
        ]);

        // ON CRÉE UN NOUVEAU CLIENT SI LE PROJET N'EXISTE PAS
        $client = $repoClient->findOneBy(
            ['id' => $idclient, 'user' => $this->getUser()]
        );
        if (!$client) {
            $client = new Client();
            $client->setUser($this->getMaster());
            $client->setDobyuser($this->getUser());
        }

        //FORM CLIENT
        $formClient = $this->formFactory->createNamed('', ClientType::class, $client);

        // RECUPERE TOUS LES CLIENTS
        $clients = $repoClient->findBy(['user' => $this->getMaster()], ['nomclient' => 'ASC']);

        // ON RECUPERE LE SUPERVISEUR
        $personnel = $repoPersonel->findOneBy(
            ['id' => $idperson, 'user' => $this->getMaster()]
        );
        $personnels = $repoPersonel->findBy(['user'=>$this->getMaster()], ['noms' => 'ASC']);

        // ON CRÉE UN NOUVEAU SUPERVISEUR S IL N'EXISTE PAS
        if (!$personnel) {
            $personnel = new Personnel();
            $personnel->setUser($this->getMaster());
        }

        //FORMULAIRE AJOUTER ET MODIFIER UN PERSONNEL

        $formPersonnel = $this->formFactory->createNamed('', PersonnelType::class, $personnel, [
            'user' => $this->getMaster(),
            'type' => 'person'
        ]);

        // TRAVAUX DU JOUR
        $date = date("Y-m-d");
        $devis = $repoDevis->findByeDate($this->getUser(), $date);
        $bons = $repoBon->findByeDate($this->getUser(), $date);
        $caisses = $repoCaisse->findByeDate($this->getUser(), $date);
        $livraisons = $repoLivraison->findByeDate($this->getUser(), $date);
        $factures = $repoFacture->findByeDate($this->getUser(), $date);


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

        $fichies = $repoFichier->findBy(['user' => $this->getMaster(), 'type' => 'technique']);
        $fichidesc = $repoFichier->findBy(['user' => $this->getMaster(), 'type' => 'descriptif']);

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());


        return $this->render('content/technique.html.twig', [
            'title' => 'Chantiers | Carlinbleu',
            'formClient' => $formClient->createView(),
            'clients' => $clients,
            'master' => $this->getMaster(),
            'editP' => $idchantier !== null,
            'editPersonnel' => $idperson !== null,
            'editClient' => $idclient !== null,
            'formChantier' => $formChantier->createView(),
            'estmaster' => $this->getMaster() === $this->getUser(),
            'formPersonnel' => $formPersonnel->createView(),
            'personnels' => $personnels,
            'editPer' => $idperson !== null,
            'pro' => $chantier,
            'client' => $client,
            'chantier' => $chantier,
            'deviss' => $devis,
            'bons' => $bons,
            'caisses' => $caisses,
            'livraisons' => $livraisons,
            'factures' => $factures,
            'date' => $date,
            'page' => 'technique',
            'formUpload' => $formUpload->createView(),
            'formUploada' => $formUploada->createView(),
            'formUploado' => $formUploado->createView(),
            'fichies' => $fichies,
            'fichidesc' => $fichidesc,
            'editTache' => $idtache !== null,
            'editPlanning' => $idplanning !== null,
            'editSection' => $idsection !== null,
            'editCont' => $contact->getId() !== null,
            'formContact' => $formContact->createView(),
            'contact' => $contact,
            'history' => $historiques

        ]);
    }
}
