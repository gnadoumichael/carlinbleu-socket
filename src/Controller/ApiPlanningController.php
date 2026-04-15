<?php

namespace App\Controller;

use App\Entity\Chantier;
use App\Entity\Devis;
use App\Entity\Historique;
use App\Entity\Personnel;
use App\Entity\Planning;
use App\Entity\Section;
use App\Entity\Relever;
use App\Entity\Tache;
use App\Entity\User;
use App\Entity\Valider;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;


#[Route(path: '/api/planning')]
class ApiPlanningController extends AbstractController
{

    public function ajourSection(Section $section, User $master, ManagerRegistry $doctrine,): void
    {

        $repoTache = $doctrine->getRepository(Tache::class);

        $manager = $doctrine->getManager();
        $taches = $repoTache->findBy(['section' => $section, 'user' => $master]);

        $validetaches = 0;
        $totaltaches = 0;
        $pourcentage = 0;
        foreach ($taches as $tach) {
            if ($tach->getEtat() === 'Achevée') {
                ++$validetaches;
            }
            ++$totaltaches;
        }

        if ($totaltaches > 0) {
            $pourcentage = ($validetaches / $totaltaches) * 100;
        }

        $section->setEtat($pourcentage);
        $manager->persist($section);
        $manager->flush();
    }
    public function ajourPlanning(Planning $planning, ManagerRegistry $doctrine): void
    {

        $repoSection = $doctrine->getRepository(Section::class);

        $manager = $doctrine->getManager();
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
    public function ajourChantier(Chantier $chantier, ManagerRegistry $doctrine): void
    {

        $manager = $doctrine->getManager();
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

        $chantier->setProgression($pourcentage);
        $manager->persist($chantier);
        $manager->flush();
    }


    #[Route(path: '/add/{idchan}/{plan}', name: 'api_add_planning', methods: ['POST'])]
    public function addPlann(int $idchan, string $plan, ManagerRegistry $doctrine, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);
        $repoPlanning = $doctrine->getRepository(Planning::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['user' => $master, 'id' => $idchan]);

        $planning = new Planning();
        $planning->setPlanning($plan);
        $planning->setUser($master);
        $planning->setProgression(0);
        $planning->setChantier($chantier);
        $planning->setClient($chantier->getClient());

        $der = $repoPlanning->findBy(['chantier' => $chantier], ['id' => 'DESC'], 1);

        if ($der) {
            $rang = $der[0]->getRang() + 1;
            $planning->setRang($rang);
        } else {
            $planning->setRang(1);
        }

        $manager = $doctrine->getManager();
        $manager->persist($planning);
        $manager->flush();

        $this->ajourPlanning($planning, $doctrine);
        return $this->json(['result' => 'Planning crée'], 200);


    }

    #[Route(path: '/section/add/{idplan}/{sec}', name: 'api_add_section', methods: ['POST'])]
    public function addSection(int $idplan, string $sec, ManagerRegistry $doctrine, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoSection = $doctrine->getRepository(Section::class);
        $repoPlanning = $doctrine->getRepository(Planning::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $planning = $repoPlanning->findOneBy(['id' => $idplan, 'user' => $master]);

        $section = new Section();
        $section->setEtat(0);
        $section->setUser($master);
        $section->setChantier($planning->getChantier());
        $section->setPlanning($planning);
        $section->setLibelle($sec);

        $der = $repoSection->findBy(['chantier' => $planning->getChantier()], ['id' => 'DESC'], 1);

        if ($der) {
            $rang = $der[0]->getRang() + 1;
            $section->setRang($rang);
        } else {
            $section->setRang(1);
        }

        $manager = $doctrine->getManager();
        $manager->persist($section);
        $manager->flush();

        $this->ajourSection($section, $master, $doctrine);

        return $this->json(['result' => 'Section créee'], 200);
    }

    #[Route(path: '/tache/add/{idsec}', name: 'api_add_tache', methods: ['POST'])]
    public function addTache(int $idsec, ManagerRegistry $doctrine, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoSection = $doctrine->getRepository(Section::class);
        $repoTache = $doctrine->getRepository(Tache::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);
        $tache = $serializer->deserialize($apjson, Tache::class, 'json');

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $section = $repoSection->findOneBy(['id' => $idsec]);
        $planning = $section->getPlanning();

        $tache->setUser($master);
        $tache->setChantier($planning->getchantier());
        $tache->setUser($apuser);
        $tache->setSection($section);

        $der = $repoTache->findBy(['section' => $section], ['id' => 'DESC'], 1);
        if ($der) {
            $rang = $der[0]->getOrdre() + 1;
            $tache->setOrdre($rang);
        } else {
            $tache->setOrdre(1);
        }

        $manager->persist($tache);
        $manager->flush();

        $this->ajourSection($section, $master, $doctrine);
        $this->ajourPlanning($planning, $doctrine);
        $this->ajourChantier($planning->getchantier(), $doctrine);

        return $this->json(['result' => $tache->getId()], 200);
    }

    #[Route(path: '/superviseur/add/{idtache}/{idsup}', name: 'api_sup_planning', methods: ['POST'])]
    public function addSupTache(int $idtache, int $idsup, ManagerRegistry $doctrine, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoTache = $doctrine->getRepository(Tache::class);
        $repoPersonnel = $doctrine->getRepository(Personnel::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $tache = $repoTache->findOneBy(['id' => $idtache, "user"=>$master]);
        $perso = $repoPersonnel->findOneBy(['id' => $idsup, 'user' => $master]);

        $tache->addPersonnel($perso);
        $manager->persist($tache);
        $manager->flush();

        return $this->json(['result' => "success"], 200);
    }

    #[Route(path: '/tache/get', name: 'api_planning_tache', methods: ['POST'])]
    public function getTaches(ManagerRegistry $doctrine, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoTache = $doctrine->getRepository(Tache::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $taches = $repoTache->findTaches(['user' => $master]);

        return $this->json($taches, 200, ['Content-Type' => 'application/json'], ['groups' => 'tacher']);

    }

    #[Route(path: '/historique/get', name: 'api_historique', methods: ['POST'])]
    public function getHistorique(ManagerRegistry $doctrine, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoHistorique = $doctrine->getRepository(Historique::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $histoires = $repoHistorique->findBas(['user' => $master]);

        return $this->json($histoires, 200, ['Content-Type' => 'application/json'], ['groups' => 'histoires']);

    }

    #[Route(path: '/section/get', name: 'api_section_tache', methods: ['POST'])]
    public function getSections(ManagerRegistry $doctrine, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoSection = $doctrine->getRepository(Section::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $sections = $repoSection->findSection(['user' => $master]);

        return $this->json($sections, 200, ['Content-Type' => 'application/json'], ['groups' => 'section']);

    }

    #[Route(path: '/get', name: 'api_planning', methods: ['POST'])]
    public function getPlanning(ManagerRegistry $doctrine, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoPlanning = $doctrine->getRepository(Planning::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $plannings = $repoPlanning->findPlannings(['user' => $master]);

        return $this->json($plannings, 200, ['Content-Type' => 'application/json'], ['groups' => 'plann']);

    }



}
