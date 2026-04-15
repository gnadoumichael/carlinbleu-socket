<?php

namespace App\Controller;

use App\Entity\Bon;
use App\Entity\Client;
use App\Entity\Corbeille;
use App\Entity\Forme;
use App\Entity\Historique;
use App\Entity\Ligne;
use App\Entity\Livraison;
use App\Entity\Planning;
use App\Entity\Chantier;
use App\Entity\User;
use App\Entity\Valider;
use App\Form\BonType;
use App\Form\FormeType;
use App\Form\LigneType;
use App\Form\LignType;
use App\Form\LivraisonType;
use App\Form\PlanningType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class LivraisonController
 * @package App\Controller
 */
#[Route(path: '/crm/livraison')]
class LivraisonController extends AbstractController
{

    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory) {
        $this->formFactory = $formFactory;
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

    /**
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    #[Route(path: '/add/{id}', name: 'addLivraison', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function addLivraison($id, Request $request): JsonResponse
    {

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoLivraison = $this->doctrine->getRepository(Livraison::class);
        $manager = $this->doctrine->getManager();

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {return $this->json(['result' => 'Erreur'], 404);}

        $livraison = new Livraison();
        $livraison->setDate(new \DateTime('NOW'));
        $livraison->setUser($this->getMaster());
        $livraison->setDobyuser($this->getUser());
        $livraison->setEtat('save');
        $livraison->setNumlivre('');
        $livraison->setChantier($chantier);
        $livraison->setClient($chantier->getClient());

        $json = $this->getJson($request);

        $formLivraison = $this->formFactory->createNamed('', LivraisonType::class, $livraison, [
            'chantier' => $chantier,
            'type' => 'chantier'
        ]);
        $formLivraison->submit($json);
        $formLivraison->handleRequest($request);

        if ($formLivraison->isSubmitted() && $formLivraison->isValid()) {
            $livraison->setClient($chantier->getClient());
            $der = $repoLivraison->findBy(['user' => $this->getMaster()], ['id' => 'DESC'], 1);
            if ($der) {
                $rang = $der[0]->getRang() + 1;
                $livraison->setRang($rang);
                $livraison->setNumlivre('LVR-' . $rang);
            } else {
                $livraison->setRang(1);
                $livraison->setNumlivre('LVR-1');
            }
            $manager->persist($livraison);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = 'Création d\'un nouveau bon de livraison N° : ' . $livraison->getNumlivre() . ' ' . $livraison->getLivreReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json(['result' => $livraison->getId()], 201);
        }

        return $this->json(['result' => 'Erreur'], 404);

    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    #[Route(path: '/adde', name: 'addeLivraison', methods: ['POST'])]
    public function addeLivraison(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoLivraison = $this->doctrine->getRepository(Livraison::class);

        $livraison = new Livraison();
        $livraison->setDate(new \DateTime('NOW'));
        $livraison->setUser($this->getMaster());
        $livraison->setDobyuser($this->getUser());
        $livraison->setEtat('save');
        $livraison->setNumlivre('');

        $json = $this->getJson($request);

        // FORMULAIRE LIVRAISON
        $formLivraison = $this->formFactory->createNamed('', LivraisonType::class, $livraison, [
            'type' => 'chantiers',
            'user' => $this->getMaster()
        ]);

        $formLivraison->submit($json);
        $formLivraison->handleRequest($request);
        if ($formLivraison->isSubmitted() && $formLivraison->isValid()) {
            $chantier = $repoChantier->findOneBy(['id' => $json['chantier']]);
            $livraison->setClient($chantier->getClient());
            $der = $repoLivraison->findBy(['user' => $this->getMaster()], ['id' => 'DESC'], 1);
            if ($der) {
                $rang = $der[0]->getRang() + 1;
                $livraison->setRang($rang);
                $livraison->setNumlivre('LVR-' . $rang);
            } else {
                $livraison->setRang(1);
                $livraison->setNumlivre('LVR-1');
            }
            $manager->persist($livraison);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = 'Création d\'un nouveau bon de livraison N° : ' . $livraison->getNumlivre() . ' ' . $livraison->getLivreReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json(['result' => $livraison->getId()], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);

    }

    /**
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    #[Route(path: '/update/{id}', name: 'updateLivraison', methods: ['PUT'])]
    public function updateLivraison($id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoLivraison = $this->doctrine->getRepository(Livraison::class);

        $livraison = $repoLivraison->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$livraison) { return $this->json(['result' => 'Erreur'], 404); }
        $json = $this->getJson($request);

        $chantier = $livraison->getChantier();

        $form = $this->formFactory->createNamed('', LivraisonType::class, $livraison, [
            'chantier' => $chantier,
            'type' => 'chantier'
        ]);

        $form->submit($json);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($livraison);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = 'Mise à jour à jour du Bon de livraison N° : ' . $livraison->getNumlivre() . ' ' . $livraison->getLivreReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'error'], 404);
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    #[Route(path: '/valider/{id}', name: 'validerlivraison', methods: ['GET'])]
    public function validelivraison($id)
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repolivraison= $this->doctrine->getRepository(Livraison::class);

        // RECUPERE LE BON
        $livraison = $repolivraison->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$livraison) { return $this->json(['result' => 'erreur'], 404); }

        $livraison->setEtat('valide');
        $manager->persist($livraison);
        $manager->flush();

        date_default_timezone_set('Africa/Abidjan');
        $action = 'Validation du Bon de livraison N° : ' . $livraison->getNumlivre() . ' ' . $livraison->getLivreReference();
        $history = new Historique();
        $history->setUser($this->getMaster());
        $history->setDobyuser($this->getUser());
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();

        return $this->json(['result' => 'success'], 200);

    }

    /**
     * @param $id
     * @return JsonResponse
     */
    #[Route(path: '/devalider/{id}', name: 'devaliderlivraison', methods: ['GET'])]
    public function devalidelivraison($id)
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repolivraison= $this->doctrine->getRepository(Livraison::class);

        // RECUPERE LE BON
        $livraison = $repolivraison->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$livraison) { return $this->json(['result' => 'erreur'], 404); }

        $livraison->setEtat('save');
        $manager->persist($livraison);
        $manager->flush();

        date_default_timezone_set('Africa/Abidjan');
        $action = 'Dévalidation du Bon de livraison N° : ' . $livraison->getNumlivre() . ' ' . $livraison->getLivreReference();
        $history = new Historique();
        $history->setUser($this->getMaster());
        $history->setDobyuser($this->getUser());
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();

        return $this->json(['result' => 'success'], 200);

    }

    /**
     * @param $id
     * @param $status
     * @param Request $request
     * @return JsonResponse
     */
    #[Route(path: '/status/{id}/{status}', name: 'statusLivre', methods: ['GET'])]
    public function statusLivre($id, $status, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoLivre = $this->doctrine->getRepository(Livraison::class);

        $livre= $repoLivre->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$livre) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $livre->setStatus($status);
        $manager->persist($livre);
        $manager->flush();
        return $this->json(['result' => 'error'], 200);
    }

    /**
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    #[Route(path: '/dupliquer/{id}', name: 'duplivraison', methods: ['POST'])]
    public function duplivraison($id, Request $request)
    {
        // MANAGER
        $manager = $this->doctrine->getManager();
        date_default_timezone_set('Africa/Abidjan');

        // REPOSITORIES
        $repoLivraison = $this->doctrine->getRepository(Livraison::class);

        // RECUPERE LE BON
        $livraison = $repoLivraison->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$livraison) { return $this->json(['result' => 'erreur'], 404); }

        $dubon = new Livraison();
        $dubon->setDevis($livraison->getDevis());
        $der = $repoLivraison->findBy(['user' => $this->getMaster()], ['id' => 'DESC'], 1);
        $rang = $der[0]->getRang() + 1;

        $dubon->setRang($rang);
        $dubon->setNumlivre('LVR-' . $rang);
        $dubon->setEtat('save');
        $dubon->setDate(new \DateTime('NOW'));
        $dubon->setLivreReference($livraison->getLivreReference());

        $dubon->setChantier($livraison->getChantier());
        $dubon->setClient($livraison->getClient());
        $dubon->setUser($this->getMaster());
        $dubon->setDobyuser($livraison->getUser());
        $manager->persist($dubon);
        $manager->flush();

        foreach ($livraison->getLignes() as $ligne) {
            $lign = new Ligne();
            $lign->setLivraison($dubon);
            $lign->setReference($ligne->getReference());
            $lign->setDesignation($ligne->getDesignation());
            $lign->setQuantite($ligne->getQuantite());
            $lign->setPu($ligne->getPu());
            $lign->setRemise($ligne->getRemise());
            $lign->setType($ligne->getType());
            $lign->setArticle($ligne->getArticle());
            $lign->setChantier($ligne->getChantier());
            $lign->setUnite($ligne->getUnite());
            $lign->setUser($this->getMaster());
            $manager->persist($lign);
            $manager->flush();
        }


        date_default_timezone_set('Africa/Abidjan');
        $action = 'Duplication du bon de livraison : ' . $livraison->getNumlivre() . ' ' . $livraison->getLivreReference();
        $history = new Historique();
        $history->setUser($this->getMaster());
        $history->setDobyuser($this->getUser());
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();

        return $this->json(['result' => $dubon->getId()], 200);

    }


    /**
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    #[Route(path: '/del/{id}', name: 'delLivre', methods: ['DELETE'])]
    public function delLivraison($id, Request $request): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoLivraison = $this->doctrine->getRepository(Livraison::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $livre = $repoLivraison->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$livre) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $cor = $repoCorbeille->findOneBy(['designation' => $livre->getId(), 'master' => $this->getMaster(), 'type' => 12]);
        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($livre->getId());
            $corbeille->setMaster($this->getMaster());
            $corbeille->setDelby($this->getUser());
            $corbeille->setEtat('faible');
            $corbeille->setType('12');
            $manager->persist($corbeille);
            $manager->flush();
            $livre->setCorbeille($corbeille);
            $manager->persist($livre);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = 'Suppression du Bon de livraison N° : ' . $livre->getNumlivre() . ' ' . $livre->getLivreReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json(['result' => 'Bon de livraison suprimé'], 200);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    /**
     * @param $id
     * @return JsonResponse|RedirectResponse
     */
    #[Route(path: '/restaurer/{id}', name: 'restaureLivre', methods: ['GET'])]
    public function restaureLivre($id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoLivre = $this->doctrine->getRepository(Livraison::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $livre = $repoLivre->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$livre) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $corbeille = $repoCorbeille->findOneBy(['designation' => $livre->getId(), 'type' => '12']);

        if ($corbeille) {
            $livre->setCorbeille(null);
            $manager->persist($livre);
            $manager->flush();
            $manager->remove($corbeille);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = 'Restauration du Bon de livraison N° : ' . $livre->getNumlivre() . ' ' . $livre->getLivreReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json(['result' => 'Bon restauré'], 200);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    /**
     * @param $id
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     */
    #[Route(path: '/deldefinitive/{id}', name: 'deldeflivre', methods: ['DELETE'])]
    public function deldefLivre($id, Request $request): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repolivre = $this->doctrine->getRepository(Livraison::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $livre = $repolivre->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$livre) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $cor = $repoCorbeille->findOneBy(['designation' => $livre->getId(), 'master' => $this->getMaster(), 'type' => 12]);
        if ($cor) {
            date_default_timezone_set('Africa/Abidjan');
            $action = 'Suppression définitive du Bon de livraison N° : ' . $livre->getNumlivre() . ' ' . $livre->getLivreReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            if ($livre->getUser()->getCompte() === null) {
                $cor->setEtat('ultra');
                $manager->persist($cor);
                $manager->flush();
                return $this->json(['result' => 'Bon suprimé'], 204);
            } else {
                $cor->setEtat('fort');
                $manager->persist($cor);
                $manager->flush();
                return $this->json(['result' => 'Bon suprimé'], 204);
            }
        }
        return $this->json(['error' => 'Erreur'], 404);
    }


    /**
     * @param null $idligne
     * @param null $id
     * @param Request $request
     * @return RedirectResponse|Response
     */
    #[Route(path: '/{id}', name: 'editlivraison', requirements: ['id' => '\d+'], methods: ['GET'])]
    #[Route(path: '/ligne/{id}/{idligne}', name: 'editlignelivre')]
    public function livraison(int $idligne = null, int $id , Request $request)
    {

        // ACCESS A LA BASE DE DONNEES
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoForme = $this->doctrine->getRepository(Forme::class);
        $repoLivraison = $this->doctrine->getRepository(Livraison::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);
        $repoClient = $this->doctrine->getRepository(Client::class);

        // ON RECUPERE LE DEVIS
        $livraison = $repoLivraison->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$livraison) {
            return $this->redirectToRoute('logout');
        }

        $chantier = $livraison->getChantier();
        // FORMULAIRE POUR LA MODIFICATION DU DEVIS
        $form = $this->formFactory->createNamed('', LivraisonType::class, $livraison, [
            'chantier' => $chantier,
            'type' => 'chantier'
        ]);

        // CRÉE UN NOUVEAU BON
        $nebon = new Livraison();
        $nebon->setDate(new \DateTime('NOW'));
        $nebon->setChantier($chantier);
        $nebon->setUser($this->getMaster());
        $nebon->setDobyuser($this->getUser());
        $nebon->setClient($chantier->getClient());
        $nebon->setEtat('save');
        $nebon->setLivreReference($chantier->getNomChantier());

        // FORMULAIRE BON
        $formeBon = $this->formFactory->createNamed('', LivraisonType::class, $nebon, [
            'chantier' => $chantier,
            'type' => 'chantier'
        ]);

        // FORMULAIRE POUR CHOISIR
        $lign = $repoLigne->findOneBy(['id' => $idligne, 'user' => $this->getMaster()]);
        if (!$lign) {
            $lign = new Ligne();
            $lign->setChantier($chantier);
            $lign->setUser($this->getMaster());
            $lign->setLivraison($livraison);
        }
        $formez = $this->formFactory->createNamed('', LignType::class, $lign, [
            'livraison' => $livraison,
            'master' => $this->getMaster()
        ]);

        // FORMULAIRE POUR AJOUT D'UN NOUVEL ARTICLE
        $ligne = $repoLigne->findOneBy(['id' => $idligne, 'user' => $this->getMaster()]);
        if (!$ligne) {
            $ligne = new Ligne();
            $ligne->setChantier($chantier);
            $ligne->setUser($this->getMaster());
            $ligne->setLivraison($livraison);
        }

        $forme = $this->formFactory->createNamed('', LigneType::class, $ligne, [
            'livraison' => $livraison
        ]);


        // MISE EN FORME DU BON
        $forte = $repoForme->findOneBy(['user' => $this->getMaster()]);
        $formes = $this->formFactory->createNamed('', FormeType::class, $forte);

        // ON RECUPERE TOUTE LES LIGNES
        $lignes = $repoLigne->findBy(['livraison' => $livraison]);

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        return $this->render('content/livraison.html.twig', [
            'formLivre' => $form->createView(),
            'livre' => $livraison,
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'chantier' => $chantier,
            'editMode' => $id !== null,
            'editMod' => $idligne !== null,
            'formeLivraison' => $formeBon->createView(),
            'formez' => $formez->createView(),
            'livraison' => $livraison,
            'idligne' => $idligne,
            'forme' => $forme->createView(),
            'formes' => $formes->createView(),
            'lignes' => $lignes,
            'history' => $historiques
        ]);
    }

}
