<?php

namespace App\Controller;

use App\Entity\Corbeille;
use App\Entity\Client;
use App\Entity\Equipe;
use App\Entity\Historique;
use App\Entity\Personnel;
use App\Entity\Planning;
use App\Entity\Chantier;
use App\Entity\Section;
use App\Entity\Tache;
use App\Entity\User;
use App\Form\EquipeType;
use App\Form\PlanningType;
use App\Form\SectionType;
use App\Form\TacheType;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use JsonException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

#[Route(path: '/crm/planning')]
class PlanningController extends AbstractController
{

    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
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
    private function getJson(Request $request)
    {
        $data = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpException(400, 'Invalid json');
        }
        return $data;
    }
    public function ajourSection(Section $section)
    {

        $repoTache = $this->doctrine->getRepository(Tache::class);

        $manager = $this->doctrine->getManager();
        $taches = $repoTache->findBy(['section' => $section, 'user' => $this->getMaster()]);

        $validetaches = 0;
        $totaltaches = 0;
        $pourcentage = 0;

        foreach ($taches as $tach) {
            if ($tach->getEtat() === 'Achevée' and $tach->getCorbeille() === null) {
                ++$validetaches;
            }
            if ($tach->getCorbeille() === null) {
                ++$totaltaches;
            }
        }

        if ($totaltaches > 0) {
            $pourcentage = ($validetaches / $totaltaches) * 100;
        }

        $section->setEtat($pourcentage);
        $manager->persist($section);
        $manager->flush();
    }
    public function ajourPlanning(Planning $planning)
    {

        $repoSection = $this->doctrine->getRepository(Section::class);

        $manager = $this->doctrine->getManager();
        $section = $repoSection->findBy(['planning' => $planning]);

        $validesection = 0;
        $totalsection = 0;
        $pourcentage = 0;

        foreach ($section as $sec) {
            if ($sec->getCorbeille() == null) {
                $validesection = $validesection + $sec->getEtat();
                ++$totalsection;
            }
        }

        if ($totalsection > 0) {
            $pourcentage = $validesection / $totalsection;
        }

        $planning->setProgression($pourcentage);
        $manager->persist($planning);
        $manager->flush();
    }
    public function ajourChantier(Chantier $chantier)
    {

        $manager = $this->doctrine->getManager();
        $plannings = $chantier->getPlannings();

        $valideplanning = 0;
        $totalplanning = 0;
        $pourcentage = 0;

        foreach ($plannings as $plan) {
            if ($plan->getCorbeille() == null) {
                $valideplanning = $valideplanning + $plan->getProgression();
                ++$totalplanning;
            }
        }

        if ($totalplanning > 0) {
            $pourcentage = $valideplanning / $totalplanning;
        }

        $manager->persist($chantier);
        $manager->flush();
    }

    #[Route(path: '/gets', name: 'getallPlannings', methods: ['GET'])]
    public function getallPlannings(Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoClient = $this->doctrine->getRepository(Client::class);
        $clients = $repoClient->findPlannings($this->getMaster());
        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'plans']);
    }

    #[Route(path: '/equipes/get', name: 'getEquipesPlann', methods: ['GET'])]
    public function getEquipesPlann(Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoEquipe = $this->doctrine->getRepository(Equipe::class);
        $equipes = $repoEquipe->findBy(['user'=>$this->getMaster()]);
        return $this->json($equipes, 200, ['Content-Type' => 'application/json'], ['groups' => 'equipes']);
    }

    #[Route(path: '/equipe/get/{id}', name: 'getEquipePlann', methods: ['GET'])]
    public function getEquipePlann(int $id, Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoEquipe = $this->doctrine->getRepository(Equipe::class);
        $equipe = $repoEquipe->findOneBy(['user'=>$this->getMaster(), 'id'=>$id]);
        return $this->json($equipe, 200, ['Content-Type' => 'application/json'], ['groups' => 'equipes']);
    }

    #[Route(path: '/equipe/update/{id}', name: 'updEquipePlann', methods: ['POST'])]
    public function updEquipePlann(int $id, Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoEquipe = $this->doctrine->getRepository(Equipe::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoPersonnel = $this->doctrine->getRepository(Personnel::class);

        $manager = $this->doctrine->getManager();
        $json = $this->getJson($request);

        if ($this->isCsrfTokenValid('addEquipeToken', $json['token'])) {
            $equipe = $repoEquipe->findOneBy(['user'=>$this->getMaster(), 'id'=>$id]);
            $chantier  = $repoChantier->findOneBy(['user'=>$this->getMaster(), 'id'=>$json["chantier"]]);
            $equipe->setUser($this->getMaster());
            $equipe->addChantier($chantier);
            $equipe->setDesignation($json["designation"]);

            $manager->persist($equipe);
            $manager->flush();

            if (isset($json['chef'])) {
                $chef = $repoPersonnel->findOneBy(['id' => $json['chef'], 'user' => $this->getMaster()]);
                $equipe->setChef($chef);
                $manager->persist($equipe);
                $manager->flush();
            }

            if (isset($json['membre[]'])) {
                $membre = $json['membre[]'];
                if (is_countable($membre)) {
                    for ($i = 0, $iMax = count($membre); $i < $iMax; $i++) {
                        $perso = $repoPersonnel->findOneBy(['id' => $membre[$i], 'user' => $this->getMaster()]);
                        $equipe->addPersonnel($perso);
                        $manager->persist($equipe);
                        $manager->flush();
                    }
                }

                if (!is_countable($membre)) {
                    $perso = $repoPersonnel->findOneBy(['id' => $membre, 'user' => $this->getMaster()]);
                    $equipe->addPersonnel($perso);
                    $manager->persist($equipe);
                    $manager->flush();
                }
            }

            $repoClient = $this->doctrine->getRepository(Client::class);
            $clients = $repoClient->findPlannings($this->getMaster());
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'plans']);

        } else {
            return $this->json(['result' => 'erreur'], 405);
        }
    }

    #[Route(path: '/search/{val}', name: 'searchPlannings', methods: ['GET'])]
    public function searchPlannings(string $val, Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoClient = $this->doctrine->getRepository(Client::class);
        $clients = $repoClient->findPlanninges($this->getMaster(), $val);
        if (count($clients) === 0) {
            $clients = $repoClient->findPlannings($this->getMaster());
        }
        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'plans']);
    }

    #[Route(path: '/get/{id}', name: 'getPlannings', methods: ['GET'])]
    public function getPlannings(int $id, Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoPlanning = $this->doctrine->getRepository(Planning::class);
        $planning = $repoPlanning->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        return $this->json($planning, 200, ['Content-Type' => 'application/json'], ['groups' => 'plann']);
    }

    #[Route(path: '/section/get/{idsec}', name: 'geteSection', methods: ['GET'])]
    public function getSection(int $idsec, Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoSection = $this->doctrine->getRepository(Section::class);
        $section = $repoSection->findOneBy(['id' => $idsec]);
        $user = $section->getPlanning()->getUser();
        if ($user == $this->getMaster()) {
            return $this->json($section, 200, ['Content-Type' => 'application/json'], ['groups' => 'section']);
        }
        return $this->json(['result' => 'Erreur'], 404);

    }

    #[Route(path: '/tache/get/{id}', name: 'geteTache', methods: ['GET'])]
    public function getTache(int $id, Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoTache = $this->doctrine->getRepository(Tache::class);
        $tache = $repoTache->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        return $this->json($tache, 200, ['Content-Type' => 'application/json'], ['groups' => 'tacher']);
    }

    #[Route(path: '/adde', name: 'addePlanning', methods: ['POST'])]
    public function addePlanning(Request $request): JsonResponse
    {
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoPlanning= $this->doctrine->getRepository(Planning::class);
        $manager = $this->doctrine->getManager();


        $planning = new Planning();
        $planning->setUser($this->getMaster());
        $planning->setProgression(0);
        $json = $this->getJson($request);
        $formPlan = $this->formFactory->createNamed('', PlanningType::class, $planning);
        $formPlan->submit($json);

        $formPlan->handleRequest($request);

        if ($this->isCsrfTokenValid('addPlanToken', $json['token'])) {
            $chantier = $repoChantier->findOneBy(['id' => $json['chantier'], 'user' => $this->getMaster()]);
            $planning->setChantier($chantier);
            $planning->setClient($chantier->getClient());
            $der = $repoPlanning->findBy(['chantier' => $chantier], ['id' => 'DESC'], 1);

            if ($der) {
                $rang = $der[0]->getRang() + 1;
                $planning->setRang($rang);
            } else {
                $planning->setRang(1);
            }

            $manager->persist($planning);
            $manager->flush();

            $repoClient = $this->doctrine->getRepository(Client::class);
            $clients = $repoClient->findPlannings($this->getMaster());
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'plans']);
        }
        return $this->json(['result' => 'Erreur'], 404);

    }

    #[Route(path: '/section/adde', name: 'addeSection', methods: ['POST'])]
    public function addeSection(Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoSection = $this->doctrine->getRepository(Section::class);
        $repoPlanning = $this->doctrine->getRepository(Planning::class);
        $manager = $this->doctrine->getManager();

        $section = new Section();
        $section->setEtat(0);
        $section->setUser($this->getMaster());
        $json = $this->getJson($request);

        if ($this->isCsrfTokenValid('addSectionToken', $json['token'])) {
            $planning = $repoPlanning->findOneBy(['id' => $json['planning'], 'user' => $this->getMaster()]);
            $section->setChantier($planning->getChantier());
            $section->setPlanning($planning);
            $section->setLibelle($json['libelle']);

            $der = $repoSection->findBy(['chantier' => $planning->getChantier()], ['id' => 'DESC'], 1);
            if ($der) {
                $rang = $der[0]->getRang() + 1;
                $section->setRang($rang);
            } else {
                $section->setRang(1);
            }

            $manager->persist($section);
            $manager->flush();

            $repoClient = $this->doctrine->getRepository(Client::class);
            $clients = $repoClient->findPlannings($this->getMaster());
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'plans']);
        }
        return $this->json(['result' => 'Erreur'], 404);

    }

    #[Route(path: '/chantier/get/{id}', name: 'getChantierSection', methods: ['GET'])]
    public function getChantierBySection(int $id, Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoSection = $this->doctrine->getRepository(Section::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $manager = $this->doctrine->getManager();

        $section = $repoSection->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $chantier = $section->getChantier();
        $equipes = $chantier->getChantierequipes();

        return $this->json($equipes, 200, ['Content-Type' => 'application/json'], ['groups' => 'plans']);

    }

    #[Route(path: '/section/updater/{id}', name: 'updaSection', methods: ['PUT'])]
    public function updaSection(int $id, Request $request)
    {

        $repoPlanning = $this->doctrine->getRepository(Planning::class);
        $repoSection = $this->doctrine->getRepository(Section::class);
        $manager = $this->doctrine->getManager();

        $section = $repoSection->findOneBy(['id' => $id]);
        $json = $this->getJson($request);

        if ($this->isCsrfTokenValid('addSectionToken', $json['token'])) {
            $planning = $repoPlanning->findOneBy(['id' => $json['planning'], 'user' => $this->getMaster()]);
            if ($section->getPlanning()->getUser() !== $this->getMaster()) {
                return $this->json(['result' => 'Erreur'], 404);
            }
            $section->setChantier($planning->getChantier());
            $section->setPlanning($planning);
            $section->setLibelle($json['libelle']);
            $section->setUser($this->getMaster());
            $manager->persist($section);
            $manager->flush();

            $repoClient = $this->doctrine->getRepository(Client::class);
            $clients = $repoClient->findPlannings($this->getMaster());
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'plans']);
        }
        return $this->json(['result' => 'Erreur'], 404);

    }

    #[Route(path: '/section/update/{id}', name: 'updSection', methods: ['PUT'])]
    public function updSection(int $id, Request $request)
    {

        $repoPlanning = $this->doctrine->getRepository(Planning::class);
        $repoSection = $this->doctrine->getRepository(Section::class);
        $manager = $this->doctrine->getManager();

        $section = $repoSection->findOneBy(['id' => $id]);
        $json = $this->getJson($request);

        if ($this->isCsrfTokenValid('addSectionToken', $json['token'])) {
            $planning = $repoPlanning->findOneBy(['id' => $json['planning'], 'user' => $this->getMaster()]);
            if ($section->getPlanning()->getUser() !== $this->getMaster()) {
                return $this->json(['result' => 'Erreur'], 404);
            }
            $section->setChantier($planning->getChantier());
            $section->setPlanning($planning);
            $section->setLibelle($json['libelle']);
            $section->setUser($this->getMaster());
            $manager->persist($section);
            $manager->flush();

            return $this->json(['result' => 'Planning crée'], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);

    }

    #[Route(path: '/add/{id}', name: 'addPlanning', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function addPlanning(int $id, Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $manager = $this->doctrine->getManager();

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $planning = new Planning();
        $planning->setUser($this->getMaster());
        $planning->setClient($chantier->getClient());
        $planning->setChantier($chantier);
        $planning->setProgression(0);
        $json = $this->getJson($request);
        $formPlan = $this->formFactory->createNamed(
            '',
            PlanningType::class,
            $planning, [
                'user' => $this->getMaster(),
                'type' => 'chantier',
            ]
        );
        $formPlan->submit($json);

        $formPlan->handleRequest($request);
        if ($formPlan->isSubmitted() && $formPlan->isValid()) {
            $manager->persist($planning);
            $manager->flush();
            return $this->json(['result' => 'Planning crée'], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);

    }

    #[Route(path: '/update/{id}', name: 'updatePlanning', requirements: ['id' => '\d+'], methods: ['PUT'])]
    public function updatePlanning(int $id, Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoPlanning = $this->doctrine->getRepository(Planning::class);
        $manager = $this->doctrine->getManager();

        $planning = $repoPlanning->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$planning) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $json = $this->getJson($request);
        $formPlan = $this->formFactory->createNamed('', PlanningType::class, $planning);
        $formPlan->submit($json);

        $formPlan->handleRequest($request);
        if ($formPlan->isSubmitted() && $formPlan->isValid()) {
            $manager->persist($planning);
            $manager->flush();
            return $this->json(['result' => 'Planning crée'], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);

    }

    #[Route(path: '/ordre/{id}/{val}', name: 'ordreplanning', methods: ['POST'])]
    public function ordreplaning(int $id, int $val): JsonResponse
    {
        // LES REPOSITORIES
        $repoPlanning = $this->doctrine->getRepository(Planning::class);
        $manager = $this->doctrine->getManager();

        $planning = $repoPlanning->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        $planning->setRang($val);

        $manager->persist($planning);
        $manager->flush();

        $repoClient = $this->doctrine->getRepository(Client::class);
        $clients = $repoClient->findPlannings($this->getMaster());
        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'plans']);

    }

    #[Route(path: '/section/ordre/{id}/{val}', name: 'ordresection', methods: ['POST'])]
    public function ordresection(int $id, int $val): JsonResponse
    {
        // LES REPOSITORIES
        $repoSection = $this->doctrine->getRepository(Section::class);
        $manager = $this->doctrine->getManager();

        $section = $repoSection->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        $section->setRang($val);

        $manager->persist($section);
        $manager->flush();

        $repoClient = $this->doctrine->getRepository(Client::class);
        $clients = $repoClient->findPlannings($this->getMaster());
        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'plans']);

    }

    #[Route(path: '/updater/{id}', name: 'updaterPlanning', requirements: ['id' => '\d+'], methods: ['PUT'])]
    public function updaterPlanning(int $id, Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoPlanning = $this->doctrine->getRepository(Planning::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $manager = $this->doctrine->getManager();

        $planning = $repoPlanning->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$planning) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $json = $this->getJson($request);
        $formPlan = $this->formFactory->createNamed('', PlanningType::class, $planning);
        $formPlan->submit($json);

        $formPlan->handleRequest($request);
        if ($this->isCsrfTokenValid('addPlanToken', $json['token'])) {
            $chantier = $repoChantier->findOneBy(['id' => $json['chantier'], 'user' => $this->getMaster()]);
            $planning->setChantier($chantier);
            $planning->setPlanning($json['planning']);
            $planning->setClient($chantier->getClient());

            $manager->persist($planning);
            $manager->flush();

            $repoClient = $this->doctrine->getRepository(Client::class);
            $clients = $repoClient->findPlannings($this->getMaster());
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'plans']);

        }
        return $this->json(['result' => 'Erreur'], 404);

    }

    #[Route(path: '/delplanning/{id}', name: 'delePlanning', methods: ['DELETE'])]
    public function delPlanning(int $id)
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoPlanning = $this->doctrine->getRepository(Planning::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);
        $planning = $repoPlanning->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        $cor = $repoCorbeille->findOneBy(['designation' => $planning->getId(), 'master' => $this->getMaster(), 'type' => 8]);
        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($planning->getId());
            $corbeille->setMaster($this->getMaster());
            $corbeille->setDelby($this->getUser());
            $corbeille->setEtat('faible');
            $corbeille->setType('7');
            $manager->persist($corbeille);
            $manager->flush();
            $planning->setCorbeille($corbeille);
            $manager->persist($planning);
            $manager->flush();

            $repoClient = $this->doctrine->getRepository(Client::class);
            $clients = $repoClient->findPlannings($this->getMaster());
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'plans']);
        }
        return $this->redirectToRoute('logout');
    }

    #[Route(path: '/section/add/{id}', name: 'addSection', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function addSection($id, Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoPlanning = $this->doctrine->getRepository(Planning::class);
        $repoSection = $this->doctrine->getRepository(Section::class);

        $manager = $this->doctrine->getManager();

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $section = new Section();
        $section->setChantier($chantier);
        $section->setEtat(0);
        $json = $this->getJson($request);
        $section->setUser($this->getMaster());

        if ($this->isCsrfTokenValid('addSectionToken', $json['token'])) {
            $planning = $repoPlanning->findOneBy(['id' => $json['planning'], 'user' => $this->getMaster()]);
            $section->setPlanning($planning);
            $section->setLibelle($json['libelle']);
            $der = $repoSection->findBy(['chantier' => $planning->getChantier()], ['id' => 'DESC'], 1);
            if ($der) {
                $rang = $der[0]->getRang() + 1;
                $section->setRang($rang);
            } else {
                $section->setRang(1);
            }
            $manager->persist($section);
            $manager->flush();
            return $this->json(['result' => 'Succes'], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);

    }

    #[Route(path: '/section/del/{id}', name: 'delSection', requirements: ['id' => '\d+'])]
    public function delSection($id, Request $request)
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoSection = $this->doctrine->getRepository(Section::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);
        $section = $repoSection->findOneBy(['id' => $id]);
        if ($section->getPlanning()->getUser() !== $this->getMaster()) {
            return $this->redirectToRoute('logout');
        }
        $cor = $repoCorbeille->findOneBy(['designation' => $section->getId(), 'master' => $this->getMaster(), 'type' => 8]);
        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($section->getId());
            $corbeille->setMaster($this->getMaster());
            $corbeille->setDelby($this->getUser());
            $corbeille->setEtat('faible');
            $corbeille->setType('7');
            $manager->persist($corbeille);
            $manager->flush();
            $section->setCorbeille($corbeille);
            $manager->persist($section);
            $manager->flush();

            $repoClient = $this->doctrine->getRepository(Client::class);
            $clients = $repoClient->findPlannings($this->getMaster());
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'plans']);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/tache/add/{id}', name: 'addTacher', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function addTache($id, Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoSection = $this->doctrine->getRepository(Section::class);
        $repoPersonnel = $this->doctrine->getRepository(Personnel::class);

        $manager = $this->doctrine->getManager();

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $tache = new Tache();
        $tache->setUser($this->getMaster());
        $tache->setChantier($chantier);
        $tache->setUser($this->getMaster());
        $json = $this->getJson($request);
        if ($this->isCsrfTokenValid('addTacheToken', $json['token'])) {
            $section = $repoSection->findOneBy(['id' => $json['section']]);
            $tache->setLibelle($json['libelle']);
            $tache->setDebut(new \DateTime(str_replace('/', '-', $json['ddebut'])));
            $tache->setFin(new \DateTime(str_replace('/', '-', $json['dfin'])));
            $tache->setSection($section);
            $tache->setEtat($json['etat']);
            $tache->setOrdre($json['ordre']);
            $manager->persist($tache);
            $manager->flush();

            if (isset($json['personnel[]'])) {

                $personnel = $json['personnel[]'];
                if (is_countable($personnel)) {
                    for ($i = 0, $iMax = count($personnel); $i < $iMax; $i++) {
                        $perso = $repoPersonnel->findOneBy(['id' => $personnel[$i], 'user' => $this->getMaster()]);
                        $tache->addPersonnel($perso);
                        $manager->persist($tache);
                        $manager->flush();
                    }
                }

                if (!is_countable($personnel)) {
                    $perso = $repoPersonnel->findOneBy(['id' => $personnel, 'user' => $this->getMaster()]);
                    $tache->addPersonnel($perso);
                    $manager->persist($tache);
                    $manager->flush();
                }
            }

            return $this->json(['result' => 'Tache créee'], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);

    }

    #[Route(path: '/tache/adde', name: 'addeTache', methods: ['POST'])]
    public function addeTache(Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoSection = $this->doctrine->getRepository(Section::class);
        $repoPersonnel = $this->doctrine->getRepository(Personnel::class);
        $repoEquipe = $this->doctrine->getRepository(Equipe::class);
        $repoTache = $this->doctrine->getRepository(Tache::class);


        $manager = $this->doctrine->getManager();
        $json = $this->getJson($request);

        if ($this->isCsrfTokenValid('addTacheToken', $json['token'])) {

            $section = $repoSection->findOneBy(['id' => $json['section']]);
            $planning = $section->getPlanning();

            $tache = new Tache();
            $tache->setUser($this->getMaster());
            $tache->setChantier($planning->getChantier());
            $tache->setEtat($json['etat']);
            $tache->setSection($section);
            $tache->setLibelle($json['libelle']);
            $tache->setDebut(new \DateTime(str_replace('/', '-', $json['ddebut'])));
            $tache->setFin(new \DateTime(str_replace('/', '-', $json['dfin'])));
            $manager->persist($tache);
            $manager->flush();

            if (isset($json['personnel[]'])) {
                $personnel = $json['personnel[]'];

                if (is_countable($personnel)) {
                    for ($i = 0, $iMax = count($personnel); $i < $iMax; $i++) {
                        $perso = $repoPersonnel->findOneBy(['id' => $personnel[$i], 'user' => $this->getMaster()]);
                        $tache->addPersonnel($perso);
                        $manager->persist($tache);
                        $manager->flush();
                    }
                }

                if (!is_countable($personnel)) {
                    $perso = $repoPersonnel->findOneBy(['id' => $personnel, 'user' => $this->getMaster()]);
                    $tache->addPersonnel($perso);
                    $manager->persist($tache);
                    $manager->flush();
                }
            }

            if (isset($json['equipe[]'])) {
                $equipe = $json['equipe[]'];

                if (is_countable($equipe)) {
                    for ($i = 0, $iMax = count($equipe); $i < $iMax; $i++) {
                        $equi = $repoEquipe->findOneBy(['id' => $equipe[$i], 'user' => $this->getMaster()]);
                        $tache->addEquipe($equi);
                        $manager->persist($tache);
                        $manager->flush();
                    }
                }

                if (!is_countable($equipe)) {
                    $equi = $repoEquipe->findOneBy(['id' => $equipe, 'user' => $this->getMaster()]);
                    $tache->addEquipe($equi);
                    $manager->persist($tache);
                    $manager->flush();
                }
            }

            $der = $repoTache->findBy(['section' => $section], ['id' => 'DESC'], 1);
            if ($der) {
                $rang = $der[0]->getOrdre() + 1;
                $tache->setOrdre($rang);
            } else {
                $tache->setOrdre(1);
            }

            $manager->persist($tache);
            $manager->flush();

            $this->ajourSection($tache->getSection());
            $this->ajourPlanning($planning);
            $this->ajourChantier($planning->getChantier());

            $repoClient = $this->doctrine->getRepository(Client::class);
            $clients = $repoClient->findPlannings($this->getMaster());
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'plans']);

        } else {
            return $this->json(['result' => 'erreur'], 404);
        }

    }

    #[Route(path: '/equipe/adde', name: 'addeEquipe', methods: ['POST'])]
    public function addeEquipe(Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoPersonnel = $this->doctrine->getRepository(Personnel::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);



        $manager = $this->doctrine->getManager();
        $json = $this->getJson($request);

        if ($this->isCsrfTokenValid('addEquipeToken', $json['token'])) {

            $equipe = new Equipe();
            $equipe->setUser($this->getMaster());
            $equipe->setDesignation($json["designation"]);
            $manager->persist($equipe);
            $manager->flush();

            if(isset($json["chantier"])){
                $chantier  = $repoChantier->findOneBy(['user'=>$this->getMaster(), 'id'=>$json["chantier"]]);
                $equipe->addChantier($chantier);
                $manager->persist($equipe);
                $manager->flush();
            }



            if (isset($json['chef'])) {
                $chef = $repoPersonnel->findOneBy(['id' => $json['chef'], 'user' => $this->getMaster()]);
                $equipe->setChef($chef);
                $manager->persist($equipe);
                $manager->flush();
            }

            if (isset($json['membre[]'])) {
                $membre = $json['membre[]'];
                if (is_countable($membre)) {
                    for ($i = 0, $iMax = count($membre); $i < $iMax; $i++) {
                        $perso = $repoPersonnel->findOneBy(['id' => $membre[$i], 'user' => $this->getMaster()]);
                        $equipe->addPersonnel($perso);
                        $manager->persist($equipe);
                        $manager->flush();
                    }
                }

                if (!is_countable($membre)) {
                    $perso = $repoPersonnel->findOneBy(['id' => $membre, 'user' => $this->getMaster()]);
                    $equipe->addPersonnel($perso);
                    $manager->persist($equipe);
                    $manager->flush();
                }
            }

            $repoClient = $this->doctrine->getRepository(Client::class);
            $clients = $repoClient->findPlannings($this->getMaster());
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'plans']);

        } else {
            return $this->json(['result' => 'erreur'], 404);
        }

    }

    #[Route(path: '/tache/ordre/{id}/{val}', name: 'ordreache', methods: ['POST'])]
    public function ordreTache(int $id, int $val, Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoTache = $this->doctrine->getRepository(Tache::class);
        $manager = $this->doctrine->getManager();

        $tache = $repoTache->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        $tache->setOrdre($val);

        $manager->persist($tache);
        $manager->flush();

        $repoClient = $this->doctrine->getRepository(Client::class);
        $clients = $repoClient->findPlannings($this->getMaster());
        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'plans']);


    }

    #[Route(path: '/tache/delete/{id}', name: 'deltacher', requirements: ['id' => '\d+'], methods: ['DELETE'])]
    public function delTacher(int $id)
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoTache = $this->doctrine->getRepository(Tache::class);
        $tache = $repoTache->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if ($tache) {
            $cor = $repoCorbeille->findOneBy(['designation' => $tache->getId(), 'master' => $this->getMaster(), 'type' => 88]);
            if (!$cor) {
                date_default_timezone_set('Africa/Abidjan');
                $corbeille = new Corbeille();
                $corbeille->setDate(new \DateTime('NOW'));
                $corbeille->setDesignation($tache->getId());
                $corbeille->setMaster($this->getMaster());
                $corbeille->setDelby($this->getUser());
                $corbeille->setEtat('faible');
                $corbeille->setType('88');
                $manager->persist($corbeille);
                $manager->flush();
                $tache->setCorbeille($corbeille);
                $manager->persist($tache);
                $manager->flush();

                $repoClient = $this->doctrine->getRepository(Client::class);
                $clients = $repoClient->findPlannings($this->getMaster());
                return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'plans']);
            }



            $manager->remove($tache);
            $manager->flush();

            $this->ajourSection($tache->getSection());
            $this->ajourPlanning($tache->getSection()->getPlanning());
            $this->ajourChantier($tache->getSection()->getPlanning()->getChantier());


            $repoClient = $this->doctrine->getRepository(Client::class);
            $clients = $repoClient->findPlannings($this->getMaster());
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'plans']);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/tache/del/{id}', name: 'delta', requirements: ['id' => '\d+'])]
    public function delTa(int $id)
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoTache = $this->doctrine->getRepository(Tache::class);
        $tache = $repoTache->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $chantier = $tache->getChantier();
        if ($tache) {
            $cor = $repoCorbeille->findOneBy(['designation' => $tache->getId(), 'master' => $this->getMaster(), 'type' => 88]);
            if (!$cor) {
                date_default_timezone_set('Africa/Abidjan');
                $corbeille = new Corbeille();
                $corbeille->setDate(new \DateTime('NOW'));
                $corbeille->setDesignation($tache->getId());
                $corbeille->setMaster($this->getMaster());
                $corbeille->setDelby($this->getUser());
                $corbeille->setEtat('faible');
                $corbeille->setType('88');
                $manager->persist($corbeille);
                $manager->flush();
                $tache->setCorbeille($corbeille);
                $manager->persist($tache);
                $manager->flush();

                return $this->redirectToRoute('gestion', ['id' => $chantier->getId()]);
            }



            $manager->remove($tache);
            $manager->flush();

            $this->ajourSection($tache->getSection());
            $this->ajourPlanning($tache->getSection()->getPlanning());
            $this->ajourChantier($tache->getSection()->getPlanning()->getChantier());
            return $this->redirectToRoute('gestion', ['id' => $chantier->getId()]);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/equipe/delete/{id}', name: 'delEquipe', requirements: ['id' => '\d+'], methods: ['DELETE'])]
    public function delEquipe(int $id)
    {

        $repoEquipe = $this->doctrine->getRepository(Equipe::class);
        $manager = $this->doctrine->getManager();
        $equipe = $repoEquipe->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $manager->remove($equipe);
        $manager->flush();

        $repoClient = $this->doctrine->getRepository(Client::class);
        $clients = $repoClient->findPlannings($this->getMaster());
        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'plans']);

    }

    #[Route(path: '/tache/update/{id}', name: 'updateTacher', methods: ['POST'])]
    public function updTache(int $id, Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoSection = $this->doctrine->getRepository(Section::class);
        $repoTache = $this->doctrine->getRepository(Tache::class);
        $repoPersonnel = $this->doctrine->getRepository(Personnel::class);

        $manager = $this->doctrine->getManager();
        $json = $this->getJson($request);

        $tache = $repoTache->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if ($this->isCsrfTokenValid('addTacheToken', $json['token'])) {

            $section = $repoSection->findOneBy(['id' => $json['section']]);
            $planning = $section->getPlanning();

            $tache->setChantier($planning->getChantier());
            $tache->setEtat($json['etat']);
            $tache->setOrdre($json['ordre']);
            $tache->setSection($section);
            $tache->setLibelle($json['libelle']);
            $tache->setDebut(new \DateTime(str_replace('/', '-', $json['ddebut'])));
            $tache->setFin(new \DateTime(str_replace('/', '-', $json['dfin'])));
            $manager->persist($tache);
            $manager->flush();

            if (isset($json['personnel[]'])) {
                $personnel = $json['personnel[]'];

                if (is_countable($personnel)) {
                    for ($i = 0, $iMax = count($personnel); $i < $iMax; $i++) {
                        $perso = $repoPersonnel->findOneBy(['id' => $personnel[$i], 'user' => $this->getMaster()]);
                        $tache->addPersonnel($perso);
                        $manager->persist($tache);
                        $manager->flush();
                    }
                }

                if (!is_countable($personnel)) {
                    $perso = $repoPersonnel->findOneBy(['id' => $personnel, 'user' => $this->getMaster()]);
                    $tache->addPersonnel($perso);
                    $manager->persist($tache);
                    $manager->flush();
                }
            } else {
                $manager->persist($tache);
                $manager->flush();
            }


            $this->ajourSection($tache->getSection());
            $this->ajourPlanning($planning);
            $this->ajourChantier($planning->getChantier());

            $repoClient = $this->doctrine->getRepository(Client::class);
            $clients = $repoClient->findPlannings($this->getMaster());
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'plans']);

        } else {
            return $this->json(['result' => 'erreur'], 404);
        }

    }

    #[Route(path: '/', name: 'planing')]
    public function planing()
    {
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoPersonnel = $this->doctrine->getRepository(Personnel::class);


        $planning = new Planning();
        $planning->setUser($this->getMaster());
        $formPlan = $this->formFactory->createNamed(
            '',
            PlanningType::class,
            $planning, [
                'user' => $this->getMaster(),
                'type' => 'plan',
            ]
        );

        $section = new Section();
        $formSection = $this->formFactory->createNamed(
            '',
            SectionType::class,
            $section,
            [
                'type' => 'planning'
            ]
        );

        $tache = new Tache();
        $tache->setUser($this->getMaster());
        $formTache = $this->formFactory->createNamed('', TacheType::class, $tache, ['user' => $this->getMaster(), 'type' => $planning]);

        $equipe = new Equipe();
        $equipe->setUser($this->getMaster());
        $formEquipe = $this->formFactory->createNamed('', EquipeType::class, $equipe, ['user' => $this->getMaster()]);

        $personnels = $repoPersonnel->findBy(["user" => $this->getMaster(), 'type' => 'personnelle'], ['noms' => 'ASC']);

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());


        return $this->render('content/planning.html.twig', [
            'controller_name' => 'PlanningController',
            'page' => 'page',
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'formPlan' => $formPlan->createView(),
            'formSection' => $formSection->createView(),
            'formTache' => $formTache->createView(),
            'formEquipe' => $formEquipe->createView(),
            'personnels' => $personnels,
            'history' => $historiques
        ]);
    }


}
