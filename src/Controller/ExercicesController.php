<?php

namespace App\Controller;

use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Client;
use App\Entity\Contact;
use App\Entity\Corbeille;
use App\Entity\Decompte;
use App\Entity\Devis;
use App\Entity\Exercices;
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
use App\Form\ExercicesType;
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


#[Route(path: '/crm/exercices')]
class ExercicesController extends AbstractController
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


    #[Route('/joindre/{idchan}/{idexe}', name: 'joindreExcercices', methods: ["POST"])]
    public function addExercices(int $idchan, int $idexe): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoExercice = $this->doctrine->getRepository(Exercices::class);

        $chantier = $repoChantier->findOneBy(['id' => $idchan, 'user' => $this->getMaster()]);
        $exercice = $repoExercice->findOneBy(['id' => $idexe, 'user' => $this->getMaster()]);

        $exercice->addChantier($chantier);
        $exercice->addClient($chantier->getClient());
        $manager->persist($exercice);
        $manager->flush();


        return $this->json(['result' => "succes"], 201);
    }

    #[Route('/remove/{idchan}/{idexe}', name: 'removeExcercices', methods: ["DELETE"])]
    public function removeExercices(int $idchan, int $idexe): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoExercice = $this->doctrine->getRepository(Exercices::class);

        $chantier = $repoChantier->findOneBy(['id' => $idchan, 'user' => $this->getMaster()]);
        $exercice = $repoExercice->findOneBy(['id' => $idexe, 'user' => $this->getMaster()]);

        $exercice->removeChantier($chantier);
        $manager->persist($exercice);
        $manager->flush();

        return $this->json(['result' => "succes"], 201);
    }



    #[Route(path: '/', name: 'exercices')]
    #[Route(path: '/{id}', name: 'edit_exercices', requirements: ['id' => '\d+'])]
    public function exercicespages(int $id = null)
    {
        date_default_timezone_set('Africa/Abidjan');

        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoExercices = $this->doctrine->getRepository(Exercices::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);

        $exercice = $repoExercices->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$exercice) {
            $exercice = new Exercices();
            $exercice->setUser($this->getMaster());
        }

        $formExercices = $this->formFactory->createNamed('', ExercicesType::class, $exercice);

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        $clients = $repoClient->findBy(['user' => $this->getMaster()], ['nomclient' => 'ASC']);

        $chantierFrais = $repoChantier->findOneBy(['type' => 'frais', 'user' => $this->getMaster()]);
        $chantierperso = $repoChantier->findOneBy(['type' => 'personnel', 'user' => $this->getMaster()]);


        $caisseperso = $repoCaisse->findBy(['chantier' => $chantierperso, 'user' => $this->getMaster()], ['date' => 'desc']);
        $caisseinterne = $repoCaisse->findBy(['chantier' => $chantierFrais, 'user' => $this->getMaster()], ['date' => 'desc']);

        return $this->render('content/exercices.html.twig', [
            'title' => 'Exercices comptables | Carlinbleu',
            'master' => $this->getMaster(),
            'formExercices' => $formExercices->createView(),
            'estmaster' => $this->getMaster() === $this->getUser(),
            'page' => 'exercices',
            'idexercice' => $id,
            'jsonclients' => true,
            'history' => $historiques,
            'arole' => $this->getCheckRoles(),
            'clients' => $clients,
            'exercice' => $exercice,
            'caisseperso' => $caisseperso,
            'caisseinterne' => $caisseinterne,
        ]);
    }
}
