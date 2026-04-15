<?php

namespace App\Controller;


use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Client;
use App\Entity\Decompte;
use App\Entity\Devis;
use App\Entity\Facture;
use App\Entity\Historique;
use App\Entity\Todo;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;


#[Route(path: '/api/travaux')]
class ApiTravauxController extends AbstractController
{

    private ManagerRegistry $doctrine;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    #[Route(path: '/devis/get', name: 'api_devis_jour_get', methods: ['POST'])]
    public function getTravauxDevis(ManagerRegistry $doctrine, SerializerInterface $serializer, Request $request)
    {
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoUser = $doctrine->getRepository(User::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        // Compte maître
        $master = $apuser->getCompte() === null
            ? $apuser
            : $repoUser->find($apuser->getCompte());

        $date = date("Y-m-d");

        // Récupération
        $deviss     = $repoDevis->findByeDater($master, $date) ?? [];

        // Correction tableau : convertir [[ ]] → []
        if (count($deviss) === 1 && empty($deviss[0])) {
            $deviss = [];
        }

        return $this->json($deviss, 200, ['Content-Type' => 'application/json'], ['groups' => 'pydevis']);
    }

    #[Route(path: '/bons/get', name: 'api_bon_jour_get', methods: ['POST'])]
    public function getTravauxBon(ManagerRegistry $doctrine, SerializerInterface $serializer, Request $request)
    {
        $repoBon = $doctrine->getRepository(Bon::class);
        $repoUser = $doctrine->getRepository(User::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        // Compte maître
        $master = $apuser->getCompte() === null
            ? $apuser
            : $repoUser->find($apuser->getCompte());

        $date = date("Y-m-d");

        // Récupération

        $bons = $repoBon->findByeDate($master, $date)   ?? [];

        // Correction tableau : convertir [[ ]] → []
        if (count($bons) === 1 && empty($bons[0])) {
            $bons = [];
        }

        return $this->json($bons, 200, ['Content-Type' => 'application/json'], ['groups' => 'pyfournisseurs']);
    }

    #[Route(path: '/caisses/get', name: 'api_caisse_jour_get', methods: ['POST'])]
    public function getTravauxCaisse(ManagerRegistry $doctrine, SerializerInterface $serializer, Request $request)
    {
        $repoCaisse = $doctrine->getRepository(Caisse::class);
        $repoUser = $doctrine->getRepository(User::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        // Compte maître
        $master = $apuser->getCompte() === null
            ? $apuser
            : $repoUser->find($apuser->getCompte());

        $date = date("Y-m-d");

        // Récupération

        $caisses = $repoCaisse->findByeDate($master, $date)   ?? [];

        // Correction tableau : convertir [[ ]] → []
        if (count($caisses) === 1 && empty($caisses[0])) {
            $caisses = [];
        }

        return $this->json($caisses, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);
    }

    #[Route(path: '/decomptes/get', name: 'api_decompte_jour_get', methods: ['POST'])]
    public function getTravauxDecomptes(ManagerRegistry $doctrine, SerializerInterface $serializer, Request $request)
    {
        $repoDecompte = $doctrine->getRepository(Decompte::class);
        $repoUser = $doctrine->getRepository(User::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        // Compte maître
        $master = $apuser->getCompte() === null
            ? $apuser
            : $repoUser->find($apuser->getCompte());

        $date = date("Y-m-d");

        // Récupération

        $decomptes = $repoDecompte->findByeDate($master, $date)   ?? [];

        // Correction tableau : convertir [[ ]] → []
        if (count($decomptes) === 1 && empty($decomptes[0])) {
            $decomptes = [];
        }

        return $this->json($decomptes, 200, ['Content-Type' => 'application/json'], ['groups' => 'decompte']);
    }

    #[Route(path: '/factures/get', name: 'api_facture_jour_get', methods: ['POST'])]
    public function getTravauxFactures(ManagerRegistry $doctrine, SerializerInterface $serializer, Request $request)
    {
        $repoFacture = $doctrine->getRepository(Facture::class);
        $repoUser = $doctrine->getRepository(User::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        // Compte maître
        $master = $apuser->getCompte() === null
            ? $apuser
            : $repoUser->find($apuser->getCompte());

        $date = date("Y-m-d");

        // Récupération

        $factures = $repoFacture->findByeDate($master, $date)   ?? [];

        // Correction tableau : convertir [[ ]] → []
        if (count($factures) === 1 && empty($factures[0])) {
            $factures = [];
        }

        return $this->json($factures, 200, ['Content-Type' => 'application/json'], ['groups' => 'pyfacture']);
    }
}
