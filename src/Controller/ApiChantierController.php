<?php

namespace App\Controller;

use App\Entity\Alerte;
use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Chantier;
use App\Entity\Client;
use App\Entity\Corbeille;
use App\Entity\Fournisseur;
use App\Entity\Documents;
use App\Entity\Facture;
use App\Entity\Forme;
use App\Entity\Historique;
use App\Entity\Relever;
use App\Entity\User;
use App\Entity\Valider;
use Dompdf\Dompdf;
use Dompdf\Options;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route(path: '/api/chantier')]
class ApiChantierController extends AbstractController
{

    private ManagerRegistry $doctrine;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function jourChantier(Chantier $chantier): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        // Initialisation des variables
        $cout = $depense = $bonfournisseurs = $bonprestataires = 0;
        $paiefournisseurs = $paieprestataires = 0;
        $chargechantiers = $chargepaiechantiers = 0;

        /** =======================
         *  GESTION DES CAISSES
         * ======================= */
        foreach ($chantier->getCaisses() as $caiss) {
            if ($caiss->getEtat() === "valide" && $caiss->getType() === 3 && $caiss->getCorbeille() === null) {
                $chargepaiechantiers += $caiss->getMontant();
            }

            if ($caiss->getType() === 3 && $caiss->getCorbeille() === null) {
                $chargechantiers += $caiss->getMontant();
            }
        }

        /** =======================
         *  GESTION DES DEVIS
         * ======================= */
        $deviss = $chantier->getDevis();

        if (count($deviss) > 0) {
            foreach ($deviss as $dev) {
                if ($dev->getCorbeille() === null && $dev->getType() === null) {
                    if (in_array($chantier->getEtat(), ["echouer", "etude"])) {
                        $cout += $dev->getTotalttc();
                    } elseif ($dev->getEtat() === "valide") {
                        $cout += $dev->getTotalttc();
                    }
                }
            }
        }

        $u = $uu = $somu = 0;

        foreach ($deviss as $dev) {
            if ($dev->getEtat() === "valide" && $dev->getCorbeille() === null && $dev->getType() === null) {
                ++$u;
                $somu += $dev->getTotalttc();

                foreach ($dev->getDecomptes() as $dec) {
                    if ($dec->getEtat() === "valide" && $dec->getCorbeille() === null) {
                        $uu += $dec->getTtc();
                    }
                }
            }

            // Acomptes
            $pourcent = 0;
            foreach ($dev->getAcomptes() as $acc) {
                $pourcent += (float)$acc->getPourcentage();
            }
            $dev->setAcomrage($pourcent);
            $manager->persist($dev);
        }

        /** =======================
         *  GESTION DES FACTURES
         * ======================= */
        foreach ($chantier->getFactures() as $facc) {
            if ($facc->getType() === "acompte") {
                $uu += $facc->getTotalTtc();
            }

            $ragler = 0;
            foreach ($facc->getRelever() as $rele) {
                $ragler += $rele->getMontant();
            }

            $facc->setRegler($ragler);
            $manager->persist($facc);
        }

        // État / progression du chantier
        if ($u === 0) {
            $chantier->setEtat("etude");
        } elseif ((float)$somu > 0) {
            $chantier->setProgression((string)(($uu / $somu) * 100));
        }

        /** =======================
         *  GESTION DES BONS
         * ======================= */
        foreach ($chantier->getBons() as $bo) {
            $fournisseur = $bo->getFournisseur();
            $devis = $bo->getDevis();

            // ✅ On ne prend en compte le bon que si le devis existe ET que sa corbeille est null
            if (!$devis || $devis->getCorbeille() !== null) {
                continue;
            }

            // Fournisseur valide
            if ($fournisseur !== null && $fournisseur->getCorbeille() === null) {
                // Dépenses
                if ($bo->getEtat() === 'valide' && $bo->getCorbeille() === null && $bo->getType() !== "none") {
                    if ($bo->getType() !== "non") {
                        $depense += $bo->getTotalttc();
                    } else {
                        $depense -= $bo->getTotalttc();
                    }
                }

                // Catégorisation des bons
                if ($bo->getEtat() === "valide" && $bo->getCorbeille() === null) {
                    switch ($bo->getType()) {
                        case "pst":
                            $bonprestataires += $bo->getTotalttc();
                            $paieprestataires += $bo->getRecu();
                            break;

                        case "oui":
                            $bonfournisseurs += $bo->getTotalttc();
                            $paiefournisseurs -= $bo->getRecu();
                            break;

                        case "non":
                            $bonfournisseurs -= $bo->getTotalttc();
                            $paiefournisseurs = $bo->getRecu() - $paiefournisseurs;
                            break;
                    }
                }
            }
        }

        /** =======================
         *  RÉGLEMENTS
         * ======================= */
        $regle = 0;
        foreach ($chantier->getReleves() as $relev) {
            if ($relev->getType() === 3 && $relev->getDevis()->getEtat() === 'valide') {
                $regle += $relev->getMontant();
            }
        }

        /** =======================
         *  SAUVEGARDE FINALE
         * ======================= */
        $chantier->setCout($cout);
        $chantier->setReglement($regle);
        $chantier->setDepense($depense);
        $chantier->setBonPrestataires($bonprestataires);
        $chantier->setBonFournisseurs($bonfournisseurs);
        $chantier->setPaieFournisseurs($paiefournisseurs);
        $chantier->setPaiePrestataires($paieprestataires);
        $chantier->setChargeChantiers($chargechantiers);
        $chantier->setChargePaieChantiers($chargepaiechantiers);

        $manager->persist($chantier);
        $manager->flush();

        return $this->json(['result' => 'success'], 200);
    }

    public function ajourBonLigne(Bon $bon)
    {
        $manager = $this->doctrine->getManager();
        if ($bon->getPreparation() !== null) {
            foreach ($bon->getPreparation()->getLignes() as $ligne) {
                $livrer = 0;
                foreach ($bon->getPreparation()->getBonprepration() as $bonn) {
                    if ($bonn->getEtat() === "valide") {
                        foreach ($bonn->getLignes() as $lign) {
                            if ($ligne->getArticle() === $lign->getArticle()) {
                                if ($bonn->getType() === "oui") {
                                    $livrer = $lign->getQuantite() + $livrer;
                                } else {
                                    $livrer =  $livrer - $lign->getQuantite();
                                }
                            }
                        }
                    }
                }
                $ligne->setLivrer($livrer);
                $ligne->setReste((float)$ligne->getQuantite() - (float)$livrer);
                $manager->persist($ligne);
                $manager->flush();
                foreach ($bon->getPreparation()->getBonprepration() as $bonn) {
                    foreach ($bonn->getLignes() as $lign) {
                        if ($ligne->getArticle() === $lign->getArticle()) {
                            $lign->setLivrer($livrer);
                            $lign->setReste((float)$ligne->getQuantite() - (float)$livrer);
                            $manager->persist($lign);
                            $manager->flush();
                        }
                    }
                }
            }
        }
    }

    #[Route(path: '/ios/get', name: 'apichantierios', methods: ['POST'])]
    public function ioschantier(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantiers = $repoChantier->findChantiers($master);

        $bonfournisseurs = 0;
        $bonprestataires = 0;

        $paiefournisseurs = 0;
        $paieprestataires = 0;

        $chargechantiers = 0;
        $chargepaiechantiers = 0;

        foreach ($chantiers as $chan){
            foreach ($chan->getBons() as $bo) {
                if ($bo->getFournisseur() !== null) {
                    if ($bo->getFournisseur()->getCorbeille() === null && $bo->getEtat() === "valide") {
                        if ($bo->getCorbeille() === null && $bo->getType() === "pst") {
                            $bonprestataires = $bonprestataires + $bo->getTotalttc();
                            $paieprestataires = $paieprestataires + $bo->getRecu();
                        }
                        if ($bo->getCorbeille() === null && $bo->getType() === "oui") {
                            $bonfournisseurs = $bonfournisseurs + $bo->getTotalttc();
                            $paiefournisseurs = $paiefournisseurs + $bo->getRecu();
                        }
                        if ($bo->getCorbeille() === null && $bo->getType() === "non") {
                            $bonfournisseurs = $bonfournisseurs - $bo->getTotalttc();
                            $paiefournisseurs = $paiefournisseurs - $bo->getRecu();
                        }
                    }
                }

            }
            foreach ($chan->getCaisses() as $caiss) {
                if ($caiss->getEtat() === "valide" && $caiss->getType() === 3) {
                    if ($caiss->getCorbeille() === null) {
                        $chargepaiechantiers = $chargepaiechantiers + $caiss->getMontant();
                    }
                }
                if ($caiss->getType() === 3 &&  $caiss->getCorbeille() === null) {
                    $chargechantiers = $chargechantiers + $caiss->getMontant();
                }
            }
            $chan->setBonPrestataires($bonprestataires);
            $chan->setBonFournisseurs($bonfournisseurs);
            $chan->setPaieFournisseurs($paiefournisseurs);
            $chan->setPaiePrestataires($paieprestataires);
            $chan->setChargeChantiers($chargechantiers);
            $chan->setChargePaieChantiers($chargepaiechantiers);
        }

        return $this->json($chantiers, 200, ['Content-Type' => 'application/json'], ['groups' => 'chantierios']);

    }

    #[Route(path: '/windows/get', name: 'apichantierwindows', methods: ['POST'])]
    public function windowsChantier(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantiers = $repoChantier->findChantiers($master);

        return $this->json($chantiers, 200, ['Content-Type' => 'application/json'], ['groups' => 'chantierwin']);

    }

    #[Route(path: '/python/get', name: 'apigetchantiers', methods: ['POST'])]
    public function index(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoClient = $doctrine->getRepository(Client::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }
        $chantiers = $repoClient->findClientsChantiersCoursPython($master);

        return $this->json($chantiers, 200, ['Content-Type' => 'application/json'], ['groups' => 'pychantiers']);
    }

    #[Route(path: '/python/add/{id}/{sous}', name: 'apiaddprojet', methods: ['POST'])]
    public function addChantier(SerializerInterface $serializer, int $id , int $sous, Request $request, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoClient = $doctrine->getRepository(Client::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $approjet = $serializer->deserialize($apjson, Chantier::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $doctrine->getManager();


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $client = $repoClient->findOneBy(['user' => $master, 'id' => $id]);

        $chantier = new Chantier();
        $idChantier = (string)random_int(0, 999999);
        $chantier->setIdChantier($idChantier);
        $chantier->setUser($master);
        $chantier->setDobyuser($apuser);
        $chantier->setDcrea(new \DateTime('NOW'));
        $chantier->setClient($client);
        $chantier->setLocalisation($approjet->getLocalisation());
        $chantier->setDescription($approjet->getDescription());
        $chantier->setNomChantier($approjet->getNomChantier());
        $chantier->setDdebut($approjet->getDdebut());
        $chantier->setDfin($approjet->getDfin());
        $chantier->setArchiver('non');
        $chantier->setEtat('etude');
        if($sous !== 0){
            $souschantier = $repoChantier->findOneBy(['user' => $master, 'id' => $sous]);
            $chantier->setSous($souschantier);
        }

        $chantier->setReglement(0);
        $chantier->setCout(0);
        $chantier->setDepense(0);
        $chantier->setPaiements(0);
        $chantier->setReglement(0);


        $manager->persist($chantier);
        $manager->flush();

        return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'chantierwin']);
    }

    #[Route(path: '/upd/{idclient}/{sous}/{idchantier}', name: 'apiupdchantier', methods: ['POST'])]
    public function updateChantier(SerializerInterface $serializer, int $idclient = null, int $sous = null,
                                   int $idchantier = null, Request $request, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);
        $repoClient = $doctrine->getRepository(Client::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $approjet = $serializer->deserialize($apjson, Chantier::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUsername()]);
        $manager = $doctrine->getManager();


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $client = $repoClient->findOneBy(['user' => $master, 'id' => $idclient]);
        $chantier = $repoChantier->findOneBy(['user' => $master, 'id' => $idchantier]);
        if($sous != 0){
            $sous = $repoChantier->findOneBy(['user' => $master, 'id' => $sous]);
            $chantier->setSous($sous);
        }


        $chantier->setClient($client);
        $chantier->setDescription($approjet->getDescription());
        $chantier->setNomChantier($approjet->getNomChantier());
        $chantier->setDdebut($approjet->getDdebut());
        $chantier->setDfin($approjet->getDfin());
        $manager->persist($chantier);
        $manager->flush();

        return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'chantierwin']);
    }

    #[Route(path: '/archi/{id}', name: 'apiArchiverChantier', methods: ['POST'])]
    public function archiverChantier(SerializerInterface $serializer, int $id = null, Request $request, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $doctrine->getManager();


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['user' => $master, 'id' => $id]);

        if ($chantier) {
            $chantier->setArchiver('oui');
            $chantier->setTerminer('oui');
            $chantier->setEtat('archiver');
            $manager->persist($chantier);
            $manager->flush();
        }

        return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'chantierwin']);
    }

    #[Route(path: '/echouer/{id}', name: 'apiEchouerChantier', methods: ['POST'])]
    public function echouerChantier(SerializerInterface $serializer, int $id = null, Request $request, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $doctrine->getManager();


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['user' => $master, 'id' => $id]);
        if ($chantier) {
            $chantier->setEtat('echouer');
            $manager->persist($chantier);
            $manager->flush();
        }

        return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'chantierwin']);

    }

    #[Route(path: '/encours/{id}', name: 'apiEncoursChantier', methods: ['POST'])]
    public function coursChantier(SerializerInterface $serializer, int $id = null, Request $request, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);
        $repoClient = $doctrine->getRepository(Client::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $doctrine->getManager();


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['user' => $master, 'id' => $id]);
        if ($chantier) {
            $chantier->setEtat('encours');
            $manager->persist($chantier);
            $manager->flush();
        }

        return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'chantierwin']);
    }

    #[Route(path: '/accepter/{id}', name: 'apiAccepterChantier', methods: ['POST'])]
    public function accepterChantier(SerializerInterface $serializer, int $id, Request $request, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['user' => $master, 'id' => $id]);
        if ($chantier) {
            $chantier->setEtat('etude');
            $manager->persist($chantier);
            $manager->flush();
        }

        return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'chantierwin']);
    }

    #[Route(path: '/cloturer/{id}', name: 'apiCloturerChantier', methods: ['POST'])]
    public function cloturerChantier(SerializerInterface $serializer, int $id = null, Request $request, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);
        $repoClient = $doctrine->getRepository(Client::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $doctrine->getManager();


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['user' => $master, 'id' => $id]);

        if ($chantier) {
            $chantier->setEtat('cloturer');
            $manager->persist($chantier);
            $manager->flush();
        }

        return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'chantierwin']);
    }

    #[Route(path: '/del/{id}', name: 'apiDletecChantier', methods: ['POST'])]
    public function deleteProjet(SerializerInterface $serializer, int $id, Request $request, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);
        $repoCorbeille = $doctrine->getRepository(Corbeille::class);
        $repoClient = $doctrine->getRepository(Client::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $doctrine->getManager();


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['user' => $master, 'id' => $id]);

        if ($chantier) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($chantier->getIdChantier());
            $corbeille->setMaster($master);
            $corbeille->setDelby($apuser);
            $corbeille->setEtat('faible');
            $corbeille->setType('1');
            $manager->persist($corbeille);
            $manager->flush();
            $last = $repoCorbeille->findOneBy(['master' => $master], ['id' => 'DESC']);
            $chantier->setCorbeille($last);
            $manager->persist($chantier);
            $manager->flush();
        }

        $chantiers = $repoClient->findClientsChantiersCoursPython($master);

        return $this->json($chantiers, 200, ['Content-Type' => 'application/json'], ['groups' => 'pychantiers']);
    }

    #[Route(path: '/{id}', name: 'apigetchantier', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function getChantier(SerializerInterface $serializer, int $id , Request $request, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $chantier = $repoChantier->findOneBy(['user' => $apuser, 'id' => $id]);
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
            $chantier = $repoChantier->findOneBy(['user' => $master, 'id' => $id]);
        }

        $this->jourChantier($chantier);

        return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'pychantier']);
    }

    #[Route(path: '/reglement/{montant}/{moyen}/{idfac}', name: 'apichantierreglement', methods: ['POST'])]
    public function reglement(string $montant, string $moyen, int $idfac, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {

        $repoUser = $doctrine->getRepository(User::class);
        $repoFacture = $doctrine->getRepository(Facture::class);
        date_default_timezone_set('Africa/Abidjan');
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $facture = $repoFacture->findOneBy(['id' => $idfac, 'user' => $master]);

        try {$commun = random_int(0, 9999999);} catch (Exception $e) {}

        // NOUVELLE ENTREE DE LE RELEVE
        $releve = new Relever();
        $releve->setDate(new \DateTime('NOW'));
        $releve->setType(3);

        $chantier = $facture->getChantier();

        if ($facture->getType() == "acompte") {
            $devis = $facture->getAcompte()->getDevis();
        }

        if ($facture->getType() == "decompte") {
            $devis = $facture->getDecompte()->getDevis();
        }
        if ($facture->getType() == "devis") {
            $devis = $facture->getDevis();
        }
        if ($facture->getType() == "retenue") {
            $devis = $facture->getAcompte()->getDevis();
        }

        $mon = str_replace(",", ".", $montant);
        if ($devis->getReglementnumber() === null) {
            $numb = 1;
        } else {
            $numb = 1 + $devis->getReglementnumber();
        }

        $devis->setReglementnumber($numb);
        $verse = 'R_' . $devis->getIddevis() . '-' . $numb . '  ';

        $releve->setVersement($verse);
        $releve->setChantier($devis->getChantier());
        $releve->setClient($devis->getClient());
        $releve->setFacture($facture);
        $releve->setDevis($devis);
        $releve->setMontant($mon);
        $releve->setCommun($commun);
        $releve->setMoyen($moyen);

        $operation = $verse . ' | Règlement du client sur Facture N°:' . $facture->getNumfacture();
        $debit = 0;
        $credit = $mon;

        $idlink = $devis->getId();
        $type = 3;

        $valider = new Valider();
        $valider->setOperation($operation);
        $valider->setDate(new \DateTime('NOW'));
        $valider->setType($type);
        $valider->setChantier($devis->getChantier());
        $valider->setIdlink($idlink);
        $valider->setDebit($debit);
        $valider->setCredit($credit);
        $valider->setMoyen($moyen);
        $valider->setUser($master);
        $valider->setDobyuser($apuser);
        $valider->setCommun($commun);

        $reglement = $chantier->getReglement();
        $reglement = $reglement + $mon;
        $chantier->setReglement($reglement);

        $manager->persist($chantier);
        $manager->persist($releve);
        $manager->persist($valider);
        $manager->persist($devis);
        $manager->flush();

        $restearegler = 0;
        foreach ($facture->getRelever() as $relevalide) {
            if ($relevalide->getType() === 3) {
                $restearegler = $relevalide->getMontant() + $restearegler;
            }
        }
        $facture->setRegler($restearegler);
        $manager->persist($facture);
        $manager->flush();

        if ((int)$restearegler === (int)$facture->getTotalttc()) {
            $facture->setEtat("valide");
            $manager->persist($facture);
            $manager->flush();
        }

        $this->jourChantier($chantier);

        return $this->json($facture, 200, ['Content-Type' => 'application/json'], ['groups' => 'pyfacture']);

    }

    #[Route(path: '/regle/delete/{id}', name: 'apidelreglement', methods: ['POST'])]
    public function delreglement(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {

        $repoUser = $doctrine->getRepository(User::class);
        $repoValider = $doctrine->getRepository(Valider::class);
        $repoRelever = $doctrine->getRepository(Relever::class);

        date_default_timezone_set('Africa/Abidjan');
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        // ON RECUPERE LE REGLEMENT DANS RELEVER COURANT, ON DECONNECTE USER DIFFERENTS
        $valider = $repoValider->findOneBy(['id' => $id, 'user'=>$master]);
        $relever = $repoRelever->findOneBy(['commun' => $valider->getCommun()]);

        if ($relever->getChantier()->getUser() !== $master) {
            return $this->json(['result' => 'erreur'], 404);
        }

        $chantier = $relever->getChantier();
        if ($relever->getFacture()) {
            $facture = $relever->getFacture();
            $facture->setEtat("save");
            $manager->persist($facture);
            $manager->flush();
        }

        $valider = $repoValider->findOneBy(['commun' => $relever->getCommun()]);

        $reglement = $chantier->getReglement();
        $reglement = $reglement - $relever->getMontant();
        $chantier->setReglement($reglement);

        $manager->persist($chantier);
        $manager->remove($relever);
        $manager->remove($valider);
        $manager->flush();

        $this->jourChantier($chantier);

        return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'pychantier']);

    }


    #[Route(path: '/pdf/{typ}/get', name: 'api_chantier_pdf', methods: ['POST'])]
    public function pdff(string $typ, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): JsonResponse
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoForme = $doctrine->getRepository(Forme::class);
        $repoDocuments = $doctrine->getRepository(Documents::class);
        $repoClient = $doctrine->getRepository(Client::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $clients = $repoClient->findBy(['user' => $master], ['nomclient' => 'ASC']);
        $document = new Documents();

        $forme = $repoForme->findOneBy(['user' => $apuser]);
        $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);

        if($typ === "encours"){
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'encours', 'numero' => "encours", 'etat' => 'no']);
            if ($docu) {
                unlink( "pythons/". $apuser->getId().'/'.$docu->getFolde()."/pdfchantiersencours.pdf");
                rmdir( "pythons/". $apuser->getId().'/'.$docu->getFolde());
                rmdir( "pythons/". $apuser->getId());
                $manager->remove($docu);
                $manager->flush();
            }
            $subject = 'pdfchantiersencours';
            $document->setUser($apuser);
            $document->setNumero("encours");
            $document->setDonner($subject);
            $document->setType('encours');
            $document->setEtat('no');
            $document->setFolde($dire);
            $manager->persist($document);
            $manager->flush();
        }
        if($typ === "etude"){
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'etude', 'numero' => "etude", 'etat' => 'no']);
            if ($docu) {
                unlink( "pythons/". $apuser->getId().'/'.$docu->getFolde()."/pdfchantiersetude.pdf");
                rmdir( "pythons/". $apuser->getId().'/'.$docu->getFolde());
                rmdir( "pythons/". $apuser->getId());
                $manager->remove($docu);
                $manager->flush();
            }
            $subject = 'pdfchantiersetude';
            $document->setUser($apuser);
            $document->setNumero("etude");
            $document->setDonner($subject);
            $document->setType('etude');
            $document->setEtat('no');
            $document->setFolde($dire);
            $manager->persist($document);
            $manager->flush();
        }
        if($typ === "echouer"){
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'echouer', 'numero' => "echouer", 'etat' => 'no']);
            if ($docu) {
                unlink( "pythons/". $apuser->getId().'/'.$docu->getFolde()."/pdfchantiersechoues.pdf");
                rmdir( "pythons/". $apuser->getId().'/'.$docu->getFolde());
                rmdir( "pythons/". $apuser->getId());
                $manager->remove($docu);
                $manager->flush();
            }
            $subject = 'pdfchantiersechoues';
            $document->setUser($apuser);
            $document->setNumero("echouer");
            $document->setDonner($subject);
            $document->setType('echouer');
            $document->setEtat('no');
            $document->setFolde($dire);
            $manager->persist($document);
            $manager->flush();
        }
        if($typ === "terminer"){
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'terminer', 'numero' => "terminer", 'etat' => 'no']);
            if ($docu) {
                unlink( "pythons/". $apuser->getId().'/'.$docu->getFolde()."/pdfchantierstermines.pdf");
                rmdir( "pythons/". $apuser->getId().'/'.$docu->getFolde());
                rmdir( "pythons/". $apuser->getId());
                $manager->remove($docu);
                $manager->flush();
            }
            $subject = 'pdfchantierstermines';
            $document->setUser($apuser);
            $document->setNumero("terminer");
            $document->setDonner($subject);
            $document->setType('terminer');
            $document->setEtat('no');
            $document->setFolde($dire);
            $manager->persist($document);
            $manager->flush();
        }
        if($typ === "cloturer"){
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'cloturer', 'numero' => "cloturer", 'etat' => 'no']);
            if ($docu) {
                unlink( "pythons/". $apuser->getId().'/'.$docu->getFolde()."/pdfchantiersclotures.pdf");
                rmdir( "pythons/". $apuser->getId().'/'.$docu->getFolde());
                rmdir( "pythons/". $apuser->getId());
                $manager->remove($docu);
                $manager->flush();
            }
            $subject = 'pdfchantiersclotures';
            $document->setUser($apuser);
            $document->setNumero("cloturer");
            $document->setDonner($subject);
            $document->setType('cloturer');
            $document->setEtat('no');
            $document->setFolde($dire);
            $manager->persist($document);
            $manager->flush();
        }

        if (!mkdir($concurrentDirectory = 'pythons/'.$apuser->getId(), 0777) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }

        if (!mkdir($concurrentDirectory = 'pythons/'.$apuser->getId().'/'.$dire, 0777) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }


        $pdfOptions = new Options();
        $pdfOptions->setIsRemoteEnabled(true);
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file

        if($typ === "encours") {
            $html = $this->renderView('content/attachepyth.html.twig', [
                'type' => "encours",
                'clients' => $clients,
                'formes' => $forme,
            ]);
        }
        if($typ === "etude") {
            $html = $this->renderView('content/attachepyth.html.twig', [
                'type' => "etude",
                'clients' => $clients,
                'formes' => $forme,
            ]);
        }
        if($typ === "echouer") {
            $html = $this->renderView('content/attachepyth.html.twig', [
                'type' => "echouer",
                'clients' => $clients,
                'formes' => $forme,
            ]);
        }
        if($typ === "terminer") {
            $html = $this->renderView('content/attachepyth.html.twig', [
                'type' => "terminer",
                'clients' => $clients,
                'formes' => $forme,
            ]);
        }
        if($typ === "cloturer") {
            $html = $this->renderView('content/attachepyth.html.twig', [
                'type' => "cloturer",
                'clients' => $clients,
                'formes' => $forme,
            ]);
        }

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'LANDSCAPE');
        // Render the HTML as PDF
        $dompdf->render();
        // Store PDF Binary Data
        $output = $dompdf->output();
        // In this case, we want to write the file in the public directory
        $publicDirectory = 'pythons/'.$apuser->getId().'/'.$document->getFolde() . '/';
        $pdfFilepath = $publicDirectory . $subject . '.pdf';
        // Write file to the desired path
        file_put_contents($pdfFilepath, $output);
        // Send some text response

        return $this->json(['result' => $document->getFolde()], 200);
    }


    #[Route(path: '/get/window/{type}', name: 'apiChantierWindows', methods: ['POST'])]
    public function etudeWindow(String $type,Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantiers = $repoChantier->findChantiers($master);

        $bonfournisseurs = 0;
        $bonprestataires = 0;

        $paiefournisseurs = 0;
        $paieprestataires = 0;

        $chargechantiers = 0;
        $chargepaiechantiers = 0;

        foreach ($chantiers as $chan){
            foreach ($chan->getBons() as $bo) {
                if ($bo->getFournisseur() !== null) {
                    if ($bo->getFournisseur()->getCorbeille() === null && $bo->getEtat() === "valide") {
                        if ($bo->getCorbeille() === null && $bo->getType() === "pst") {
                            $bonprestataires = $bonprestataires + $bo->getTotalttc();
                            $paieprestataires = $paieprestataires + $bo->getRecu();
                        }
                        if ($bo->getCorbeille() === null && $bo->getType() === "oui") {
                            $bonfournisseurs = $bonfournisseurs + $bo->getTotalttc();
                            $paiefournisseurs = $paiefournisseurs + $bo->getRecu();
                        }
                        if ($bo->getCorbeille() === null && $bo->getType() === "non") {
                            $bonfournisseurs = $bonfournisseurs - $bo->getTotalttc();
                            $paiefournisseurs = $paiefournisseurs - $bo->getRecu();
                        }
                    }
                }

            }
            foreach ($chan->getCaisses() as $caiss) {
                if ($caiss->getEtat() === "valide" && $caiss->getType() === 3) {
                    if ($caiss->getCorbeille() === null) {
                        $chargepaiechantiers = $chargepaiechantiers + $caiss->getMontant();
                    }
                }
                if ($caiss->getType() === 3 &&  $caiss->getCorbeille() === null) {
                    $chargechantiers = $chargechantiers + $caiss->getMontant();
                }
            }
            $chan->setBonPrestataires($bonprestataires);
            $chan->setBonFournisseurs($bonfournisseurs);
            $chan->setPaieFournisseurs($paiefournisseurs);
            $chan->setPaiePrestataires($paieprestataires);
            $chan->setChargeChantiers($chargechantiers);
            $chan->setChargePaieChantiers($chargepaiechantiers);
        }
        $listChantiers = $repoChantier->findChantiersWindows($master, $type);
        return $this->json($listChantiers, 200, ['Content-Type' => 'application/json'], ['groups' => 'chantierios']);

    }


    #[Route(path: '/relever/client/{id}', name: 'api_all_relever_client', methods: ['POST'])]
    public function apreleverclient(int $id, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoClient = $this->doctrine->getRepository(Client::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUsername()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $client = $repoClient->findOneBy(['id' => $id, 'user' => $master]);

        $chantiers = $repoChantier->createQueryBuilder('c')
            ->join('c.devis', 'd')
            ->where('c.client = :client')
            ->andWhere('c.user = :user')
            ->andWhere('d.corbeille IS NULL')
            ->andWhere('c.corbeille IS NULL')
            ->setParameter('client', $client)
            ->setParameter('user', $master)
            ->orderBy('c.nomchantier', 'ASC')
            ->getQuery()
            ->getResult();

        return $this->json($chantiers, 200, ['Content-Type' => 'application/json'], ['groups'=>'aprele']);

    }

   // RENVOIES LES BONS DES PRESTATAIRES ET FOURNISSEURS
    #[Route(path: '/prestachan/{idchan}/{idpresta}', name: 'api_presta_bon_chan_client', methods: ['POST'])]
    public function apiprestachan(int $idchan, int $idpresta, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoPrestataire = $this->doctrine->getRepository(Fournisseur::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUsername()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $presta = $repoPrestataire->findOneBy(['user' => $master, "id" => $idpresta]);

        $bons = $repoBon->createQueryBuilder('b')
            ->leftJoin('b.chantier', 'c')
            ->where('b.fournisseur = :four')
            ->andWhere('b.corbeille IS NULL')
            ->andWhere('c.corbeille IS NULL')
            ->andWhere('c.user = :user')
            ->andWhere('c.id = :id')
            ->setParameter('id', $idchan)
            ->setParameter('user', $master)
            ->setParameter('four', $presta)
            ->getQuery()
            ->getResult();

        return $this->json($bons, 200, ['Content-Type' => 'application/json'], ['groups'=>'apprestachan']);

    }
}
