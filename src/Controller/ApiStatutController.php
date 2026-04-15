<?php

namespace App\Controller;

use App\Entity\Caisse;
use App\Entity\Chantier;
use App\Entity\Client;
use App\Entity\Projet;
use App\Entity\Relever;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;



#[Route(path: '/api/statut')]
class ApiStatutController extends AbstractController
{

    #[Route(path: '/get', name: 'apistatut', methods: ['POST'])]
    public function index(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        if($apuser){
            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'echec'], 500);
    }


    #[Route(path: '/solde/get', name: 'api_solde_et', methods: ['POST'])]
    public function solde(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);
        $repoClient = $doctrine->getRepository(Client::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $sumRegle = 0;
        $sumDepense = 0;

        $incredit =  0;
        $indebit =  0;

        $persocredit =  0;
        $persodebit =  0;

        $clients = $repoClient->finddClients($master);
        foreach ($clients as $client) {
            foreach ($client->getChantiers() as $chantier) {
                    if ($chantier->getCorbeille() === null) {
                        $sumRegle = $sumRegle + $chantier->getReglement();
                        foreach ($chantier->getCaisses() as $cais) {
                            if ($cais->getCorbeille() === null) {
                                $sumDepense = $sumDepense + $cais->getMontant();
                            }
                        }
                    }
                }
        }

        $chantierFrais = $repoChantier->findOneBy(['type' => 'frais', 'user' => $master]);
        $caisseperso = $repoCaisse->findByPerso($master);
        $caisseinterne = $repoCaisse->findBy(['chantier' => $chantierFrais, 'user' => $master], ['date' => 'desc']);

        foreach ($caisseinterne as $cais) {
            if ($cais->getCorbeille() === null && $cais->getEtat() === "valide") {
                if ($cais->getOperation() === "debit" ) {
                    $indebit = $indebit + $cais->getMontant();
                }
                if ($cais->getOperation() === "credit" ) {
                    $incredit = $incredit + $cais->getMontant();
                }
            }
        }

        foreach ($caisseperso as $cais) {
            if ($cais->getCorbeille() === null && $cais->getEtat() === "valide") {
                if ($cais->getOperation() === "debit" ) {
                    $persodebit = $persodebit + $cais->getMontant();
                }
                if ($cais->getOperation() === "credit" ) {
                    $persocredit = $persocredit + $cais->getMontant();
                }
            }
        }

        $solde = ((float)$sumRegle + (float)$incredit + (float)$persocredit) - ((float)$sumDepense + (float)$indebit + $persocredit);

        return $this->json([
            'sumRegle'      => $sumRegle,
            'sumDepense'    => $sumDepense,
            'caisseinterne'   => $indebit - $incredit,
            'caisseperso'   => $persodebit - $persocredit,
            'solde' => $solde
        ]);
    }

    /**
     * @throws \DateMalformedStringException
     */
    #[Route(path: '/chargeinterne/{mois}', name: 'api_charge_interne_depenses', methods: ['POST'])]
    public function caisseget(string $mois, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);

        // 🔹 Récup data JSON
        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        // 🔹 Compte principal
        $master = $apuser->getCompte() === null
            ? $apuser
            : $repoUser->find($apuser->getCompte());

        // 🔹 Chantier frais
        $chantierFrais = $repoChantier->findOneBy([
            'type' => 'frais',
            'user' => $master
        ]);

        // ---------------------------------------------------------
        // 🔥 Convertir "MM-YYYY" en vrai intervalle de dates
        // ---------------------------------------------------------
        [$month, $year] = explode('-', $mois);

        // 1er jour du mois
        $dateMin = new \DateTime("$year-$month-01 00:00:00");

        // Dernier jour du mois
        $dateMax = (clone $dateMin)->modify('last day of this month')->setTime(23, 59, 59);

        // ---------------------------------------------------------
        // 🔥 QueryBuilder avec filtre entre deux dates
        // ---------------------------------------------------------
        $qb = $repoCaisse->createQueryBuilder('c');
        $qb->where('c.chantier = :chantier')
            ->andWhere('c.user = :user')
            ->andWhere('c.date BETWEEN :dateMin AND :dateMax')
            ->andWhere('c.etat = :et')
            ->setParameters([
                'chantier' => $chantierFrais,
                'user' => $master,
                'dateMin' => $dateMin,
                'dateMax' => $dateMax,
                'et' => 'valide',
            ])
            ->orderBy('c.date', 'DESC');

        $caisses = $qb->getQuery()->getResult();

        return $this->json($caisses, 200, ['Content-Type' => 'application/json'], ['groups' => 'pycaisse']);
    }


    /**
     * @throws \DateMalformedStringException
     */
    #[Route(path: '/chargeperso/{mois}', name: 'api_charge_perso_depenses', methods: ['POST'])]
    public function caissepers(string $mois, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);

        // 🔹 Récup data JSON
        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        // 🔹 Compte principal
        $master = $apuser->getCompte() === null
            ? $apuser
            : $repoUser->find($apuser->getCompte());


        // ---------------------------------------------------------
        // 🔥 Convertir "MM-YYYY" en vrai intervalle de dates
        // ---------------------------------------------------------
        [$month, $year] = explode('-', $mois);

        // 1er jour du mois
        $dateMin = new \DateTime("$year-$month-01 00:00:00");

        // Dernier jour du mois
        $dateMax = (clone $dateMin)->modify('last day of this month')->setTime(23, 59, 59);

        // ---------------------------------------------------------
        // 🔥 QueryBuilder avec filtre entre deux dates
        // ---------------------------------------------------------
        $qb = $repoCaisse->createQueryBuilder('c');
        $qb->where('c.user = :user')
            ->andWhere('c.date BETWEEN :dateMin AND :dateMax')
            ->andWhere('c.corbeille IS NULL')
            ->andWhere('c.etat = :et')
            ->andWhere('c.type = :aa')
            ->setParameters([
                'user' => $master,
                'dateMin' => $dateMin,
                'dateMax' => $dateMax,
                'et' => 'valide',
                'aa'=> '5'
            ])
            ->orderBy('c.date', 'DESC');

        $caisses = $qb->getQuery()->getResult();

        return $this->json($caisses, 200, ['Content-Type' => 'application/json'], ['groups' => 'pycaisse']);
    }

    /**
     * @throws \DateMalformedStringException
     */
    #[Route(path: '/chargepresta/{mois}', name: 'api_charge_presta_depenses', methods: ['POST'])]
    public function caissepresta(string $mois, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);

        // 🔹 Récup data JSON
        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        // 🔹 Compte principal
        $master = $apuser->getCompte() === null
            ? $apuser
            : $repoUser->find($apuser->getCompte());


        // ---------------------------------------------------------
        // 🔥 Convertir "MM-YYYY" en vrai intervalle de dates
        // ---------------------------------------------------------
        [$month, $year] = explode('-', $mois);

        // 1er jour du mois
        $dateMin = new \DateTime("$year-$month-01 00:00:00");

        // Dernier jour du mois
        $dateMax = (clone $dateMin)->modify('last day of this month')->setTime(23, 59, 59);

        // ---------------------------------------------------------
        // 🔥 QueryBuilder avec filtre entre deux dates
        // ---------------------------------------------------------
        $qb = $repoCaisse->createQueryBuilder('c');
        $qb->leftJoin('c.fournisseur', 'fou');
        $qb->where('c.user = :user')
            ->andWhere('c.date BETWEEN :dateMin AND :dateMax')
            ->andWhere('c.corbeille IS NULL')
            ->andWhere('c.etat = :et')
            ->andWhere('c.type = :aa')
            ->andWhere('fou.type = :bb')
            ->setParameters([
                'user' => $master,
                'dateMin' => $dateMin,
                'dateMax' => $dateMax,
                'et' => 'valide',
                'aa'=> '1',
                'bb'=> '3'
            ])
            ->orderBy('c.date', 'DESC');

        $caisses = $qb->getQuery()->getResult();

        return $this->json($caisses, 200, ['Content-Type' => 'application/json'], ['groups' => 'pycaisse']);
    }


    /**
     * @throws \DateMalformedStringException
     */
    #[Route(path: '/chargefourni/{mois}', name: 'api_charge_fourni_depenses', methods: ['POST'])]
    public function caissefourni(string $mois, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);

        // 🔹 Récup data JSON
        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        // 🔹 Compte principal
        $master = $apuser->getCompte() === null
            ? $apuser
            : $repoUser->find($apuser->getCompte());


        // ---------------------------------------------------------
        // 🔥 Convertir "MM-YYYY" en vrai intervalle de dates
        // ---------------------------------------------------------
        [$month, $year] = explode('-', $mois);

        // 1er jour du mois
        $dateMin = new \DateTime("$year-$month-01 00:00:00");

        // Dernier jour du mois
        $dateMax = (clone $dateMin)->modify('last day of this month')->setTime(23, 59, 59);

        // ---------------------------------------------------------
        // 🔥 QueryBuilder avec filtre entre deux dates
        // ---------------------------------------------------------
        $qb = $repoCaisse->createQueryBuilder('c');
        $qb->leftJoin('c.fournisseur', 'fou');
        $qb->where('c.user = :user')
            ->andWhere('c.date BETWEEN :dateMin AND :dateMax')
            ->andWhere('c.corbeille IS NULL')
            ->andWhere('c.etat = :et')
            ->andWhere('c.type = :aa')
            ->andWhere('fou.type = :bb')
            ->setParameters([
                'user' => $master,
                'dateMin' => $dateMin,
                'dateMax' => $dateMax,
                'et' => 'valide',
                'aa'=> '1',
                'bb'=> '1'
            ])
            ->orderBy('c.date', 'DESC');

        $caisses = $qb->getQuery()->getResult();

        return $this->json($caisses, 200, ['Content-Type' => 'application/json'], ['groups' => 'pycaisse']);
    }

    /**
     * @throws \DateMalformedStringException
     */
    #[Route(path: '/reglements/{mois}', name: 'api_reglements_depenses', methods: ['POST'])]
    public function caissereglements(string $mois, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoRelever = $doctrine->getRepository(Relever::class);

        // 🔹 Récup data JSON
        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        // 🔹 Compte principal
        $master = $apuser->getCompte() === null
            ? $apuser
            : $repoUser->find($apuser->getCompte());


        // ---------------------------------------------------------
        // 🔥 Convertir "MM-YYYY" en vrai intervalle de dates
        // ---------------------------------------------------------
        [$month, $year] = explode('-', $mois);

        // 1er jour du mois
        $dateMin = new \DateTime("$year-$month-01 00:00:00");

        // Dernier jour du mois
        $dateMax = (clone $dateMin)->modify('last day of this month')->setTime(23, 59, 59);

        // ---------------------------------------------------------
        // 🔥 QueryBuilder avec filtre entre deux dates
        // ---------------------------------------------------------
        $qb = $repoRelever->createQueryBuilder('c');
        $qb->leftJoin('c.devis', 'dev');
        $qb->where('dev.user = :user')
            ->andWhere('c.date BETWEEN :dateMin AND :dateMax')
            ->andWhere('c.type = :aa')
            ->setParameters([
                'user' => $master,
                'dateMin' => $dateMin,
                'dateMax' => $dateMax,
                'aa'=> '3',
            ])
            ->orderBy('c.date', 'DESC');

        $relevers = $qb->getQuery()->getResult();

        return $this->json($relevers, 200, ['Content-Type' => 'application/json'], ['groups' => 'relevers']);
    }


}
