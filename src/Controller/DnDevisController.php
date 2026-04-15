<?php

namespace App\Controller;

use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Client;
use App\Entity\Contact;
use App\Entity\Corbeille;
use App\Entity\Decompte;
use App\Entity\Devis;
use App\Entity\Facture;
use App\Entity\Forme;
use App\Entity\Historique;
use App\Entity\Intervenant;
use App\Entity\Livraison;
use App\Entity\Paie;
use App\Entity\Personnel;
use App\Entity\Chantier;
use App\Entity\Relever;
use App\Entity\User;
use App\Entity\Valider;
use App\Form\BonType;
use App\Form\CaisseType;
use App\Form\ClientType;
use App\Form\ContactType;
use App\Form\DecompteType;
use App\Form\DevisType;
use App\Form\FactureType;
use App\Form\FormeType;
use App\Form\IntervenantType;
use App\Form\LivraisonType;
use App\Form\PaieType;
use App\Form\PersonnelType;
use App\Form\ChantierType;
use App\Form\ReleverType;
use App\Service\EnteteUploader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Doctrine\Persistence\ManagerRegistry;


#[Route(path: '/crm/dndevis')]
class DnDevisController extends AbstractController
{
    private FormFactoryInterface $formFactory;

    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    #[Route(path: '/forme', name: 'miseforme', methods: ['POST'])]
    public function miseforme(Request $request): JsonResponse
    {

        $repoForme = $this->doctrine->getRepository(Forme::class);
        $manager = $this->doctrine->getManager();

        // MISE EN FORME DU DEVIS
        $forte = $repoForme->findOneBy(['user' => $this->getUser(), 'used' => 'used']);
        $formes = $this->formFactory->createNamed('', FormeType::class, $forte);
        $formes->handleRequest($request);
        if ($formes->isSubmitted()) {
            $file = $request->files->get('enteteImage');
            $fille = $request->files->get('footImage');
            if ($file) {
                if ($forte->getRang() === 1) {
                    $filename = $this->getUser()->getId() . 'tt';
                } else {
                    $filename = $this->getUser()->getId() . 'tte';
                }
                $fich = new EnteteUploader('gallery/');
                $link = $fich->upload($file, $filename);
                $forte->setLink($link);
            }
            if ($fille) {
                if ($forte->getRang() === 1) {
                    $filename = $this->getUser()->getId() . 'ff';
                } else {
                    $filename = $this->getUser()->getId() . 'ffe';
                }

                $fich = new EnteteUploader('gallery/');
                $link = $fich->upload($fille, $filename);
                $forte->setfooterImage($link);
            }
            $manager->persist($forte);
            $manager->flush();
            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'error'], 404);
    }
    public function getMaster()
    {

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
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
    public function getCheckRoles(): string
    {
        if (!$this->isGranted('ROLE_COMPTA')) {
            return "non";
        }
        return "oui";
    }


    #[Route(path: '/', name: 'dndevis')]
    public function dndevispage(int $id = null)
    {
        date_default_timezone_set('Africa/Abidjan');
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$chantier) {
            $chantier = new Chantier();
            $idproj = (string)random_int(0, 999999);
            $chantier->setIdchantier($idproj);
            $chantier->setUser($this->getMaster());
            $chantier->setDobyuser($this->getUser());
            $chantier->setDcrea(new \DateTime('NOW'));
            $chantier->setArchiver('non');
        }

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        $clients = $repoClient->findBy(['user' => $this->getMaster()], ['nomclient' => 'ASC']);

        return $this->render('content/dndevis.html.twig', [
            'title' => 'Chantiers | Carlinbleu',
            'master' => $this->getMaster(),
            'estmaster' => $this->getMaster() === $this->getUser(),
            'page' => 'dndevis',
            'idchantier' => $id,
            'jsonclients' => true,
            'history' => $historiques,
            'arole' => $this->getCheckRoles(),
            'clients' => $clients,
            'chantier' => $chantier,
        ]);
    }
}
