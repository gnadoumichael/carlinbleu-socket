<?php

namespace App\Controller;

use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Chantier;
use App\Entity\Devis;
use App\Entity\Decompte;
use App\Entity\Documents;
use App\Entity\Facture;
use App\Entity\Forme;
use App\Entity\Groupe;
use App\Entity\Ligne;
use App\Entity\Livraison;
use App\Entity\Monnaie;
use App\Entity\Relever;
use App\Entity\User;
use App\Form\DecompteType;
use App\Form\LigneType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;

#[Route(path: '/api/decompte')]
class ApiDecompteController extends AbstractController
{
    function delete_directory($dirname): bool
    {
        if (is_dir($dirname)) {
            $dir_handle = opendir($dirname);
        }
        if (!$dir_handle) {
            return false;
        }
        while ($file = readdir($dir_handle)) {
            if ($file !== "." && $file !== "..") {
                if (!is_dir($dirname . "/" . $file)) {
                    unlink($dirname . "/" . $file);
                } else {
                    $this->delete_directory($dirname . '/' . $file);
                }
            }
        }
        closedir($dir_handle);
        rmdir($dirname);
        return true;
    }

    #[Route(path: '/add/{id}/{fi}/{ga}/{pro}/{ded}/{trc}', name: 'api_ajouter_decompte',
        requirements: ['id' => '\d+'], methods: ['POST'])]
    public function aDecompte($id, $fi, $ga, $pro, $ded, $trc,Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {

        $repoUser = $doctrine->getRepository(User::class);
        $repoDecompte = $doctrine->getRepository(Decompte::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $manager = $doctrine->getManager();
        $repoLigne = $doctrine->getRepository(Ligne::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }


        $devis = $repoDevis->findOneBy(["user" => $master, "id" => $id]);
        $decompte = new Decompte();
        $decompte->setUser($master);
        $decompte->setDobyuser($apuser);
        $decompte->setDate(new \DateTime('NOW'));
        $decompte->setChantier($devis->getChantier());
        $decompte->setClient($devis->getClient());

        $der = $repoDecompte->findBy(['devis' => $id, 'user' => $master], ['id' => 'DESC'], 1);

        if($devis->getAcomptes()[0] == null){
            if ($der) {
                $rang = $der[0]->getRang() + 1;
                $decompte->setRang($rang);
                $decompte->setNumdecompte('DEC-' . $rang);

                $decompte->setFinition($fi);
                $decompte->setProrata($pro);
                $decompte->setTrc($trc);
                $decompte->setGarantie($ga);
                $decompte->setDeduction($ded);
            } else {

                $decompte->setRang(1);
                $devis->setFinition($fi);
                $devis->setProrata($pro);
                $devis->setTrc($trc);
                $devis->setGarantie($ga);

                $decompte->setFinition($fi);
                $decompte->setProrata($pro);
                $decompte->setTrc($trc);
                $decompte->setGarantie($ga);
                $decompte->setDeduction($ded);

                $decompte->setNumdecompte('DEC-1');
            }
        }else{
            if ($der) {
                $rang = $der[0]->getRang() + 1;
                $decompte->setRang($rang);
                $decompte->setNumdecompte('DEC-' . $rang);
                $manager->persist($decompte);
                $decompte->setFinition($fi);
                $decompte->setProrata($pro);
                $decompte->setTrc($trc);
                $decompte->setGarantie($ga);

                $decompte->setDeduction($ded);

            } else {
                $decompte->setRang(1);
                $devis->setFinition($fi);
                $devis->setProrata($pro);
                $devis->setTrc($trc);
                $devis->setGarantie($ga);
                $decompte->setFinition($fi);
                $decompte->setProrata($pro);
                $decompte->setTrc($trc);
                $decompte->setGarantie($ga);
                $decompte->setDeduction($ded);


                $decompte->setNumdecompte('DEC-1');
            }
        }
        $decompte->setEtat('save');
        $decompte->setValeur(0);
        $decompte->setDevis($devis);


        $manager->persist($devis);
        $manager->persist($decompte);
        $manager->flush();

        if ($der) {
            foreach ($der[0]->getLignes() as $ligne) {
                $lign = new Ligne();
                $lign->setDecompte($decompte);
                $lign->setReference($ligne->getReference());
                if ($ligne->getCode() !== null) {
                    $ligne->setCode($ligne->getCode());
                }
                $lign->setDesignation($ligne->getDesignation());
                $lign->setZone($ligne->getZone());
                $lign->setQuantite($ligne->getQuantite());
                $lign->setPu($ligne->getPu());
                $lign->setRemise($ligne->getRemise());
                $lign->setGroupe($ligne->getGroupe());
                $lign->setType($ligne->getType());
                $lign->setArticle($ligne->getArticle());
                $lign->setChantier($ligne->getChantier());
                $lign->setUnite($ligne->getUnite());
                $lign->setUser($master);
                $lign->setAvancement($ligne->getAvancement());
                $manager->persist($lign);
                $manager->flush();
            }
        } else {
            foreach ($decompte->getDevis()->getLignes() as $ligne) {
                $lign = new Ligne();
                $lign->setDecompte($decompte);
                $lign->setReference($ligne->getReference());
                if ($ligne->getCode() !== null) {
                    $ligne->setCode($ligne->getCode());
                }
                $lign->setDesignation($ligne->getDesignation());
                $lign->setZone($ligne->getZone());
                $lign->setQuantite($ligne->getQuantite());
                $lign->setPu($ligne->getPu());
                $lign->setGroupe($ligne->getGroupe());
                $lign->setRemise($ligne->getRemise());
                $lign->setType($ligne->getType());
                $lign->setArticle($ligne->getArticle());
                $lign->setChantier($ligne->getChantier());
                $lign->setUnite($ligne->getUnite());
                $lign->setUser($master);
                $lign->setAvancement(0);
                $manager->persist($lign);
                $manager->flush();
            }
        }

        $thavance = 0;
        $vava = 0;
        $lignes = $repoLigne->findBy(['decompte' => $decompte]);
        $chantier = $decompte->getChantier();

        if ($devis->getTotalht() > 0) {
            foreach ($lignes as $lig) {
                if ($devis->getAarem() === 'oui') {
                    $thavance += (($lig->getQuantite() * $lig->getPu() - (($lig->getQuantite() * $lig->getPu() * $lig->getRemise()) / 100)) * $lig->getAvancement()) / 100;
                } else {
                    $thavance += (((float)$lig->getQuantite() * (float)$lig->getPu() * (float)$lig->getAvancement()) / 100);
                }
            }

            if ($devis->getAarem() === 'tht') {
                $thavance -= (($thavance * $devis->getRemtht()) / 100);
            }

            $decompte->setTotalht($devis->getTotalht());
            $pour = (($thavance / $devis->getTotalht()) * 100);
            $decompte->setAvancement($pour);
            $decompte->setValeur($thavance);
            $manager->persist($decompte);
            $manager->flush();

            $ii = 1;
            foreach ($devis->getDecomptes() as $decom) {
                if ($ii < $decompte->getRang()) {
                    $vava += $decom->getApayer();
                    $ii++;
                }
            }

            $first = $repoDecompte->findOneBy(['devis' => $devis, 'rang' => "1"]);
            $acompter = 0;
            if ($first === $decompte) {
                if (count($devis->getAcomptes()) === 1 ) {
                    if($decompte->getDeduction() === "partielle"){
                        $acompter = ($decompte->getValeur() * $devis->getAcomrage()) / 100;
                    }
                    if($decompte->getDeduction() === "complete"){
                        $acompter = ($devis->getTotalht() * $devis->getAcomrage()) / 100;
                    }
                    if($decompte->getDeduction() === "aucune"){
                        $acompter = 0;
                    }
                } else {
                    $allacomptes = 0;
                    foreach ($chantier->getFactures() as $fac) {
                        if (($fac->getAcompte() !== null) && $fac->getAcompte()->getDevis() === $decompte->getDevis()) {
                            $allacomptes += $fac->getTotalttc();
                        }
                    }
                    $pourcentacompte = ($allacomptes / $devis->getTotalttc()) * 100;

                    if($decompte->getDeduction() === "partielle"){
                        $acompter = ($decompte->getValeur() * $pourcentacompte) / 100;
                    }
                    if($decompte->getDeduction() === "complete"){
                        $acompter = ($devis->getTotalht() * $pourcentacompte) / 100;
                    }
                    if($decompte->getDeduction() === "aucune"){
                        $acompter = 0;
                    }
                }

                $garantie = ((float)$decompte->getValeur() * (float)$devis->getGarantie()) / 100;
                $finition = ((float)$decompte->getValeur() * (float)$devis->getFinition()) / 100;
                $prorata = ((float)$decompte->getValeur() * (float)$devis->getProrata()) / 100;
                $trc = ((float)$decompte->getValeur() * (float)$devis->getTrc()) / 100;
                $apayer = (float)$decompte->getValeur() - ($acompter + $garantie + $prorata + $vava + $finition + $trc);

            } else {
                if($decompte->getDeduction() === "partielle"){
                    $acompter = ($decompte->getValeur() * $devis->getAcomrage()) / 100;
                }
                if($decompte->getDeduction() === "complete"){
                    $acompter = ($devis->getTotalht() * $devis->getAcomrage()) / 100;
                }
                if($decompte->getDeduction() === "aucune"){
                    $acompter = 0;
                }

                $garantie = ($decompte->getValeur() * $devis->getGarantie()) / 100;
                $finition = ((float)$decompte->getValeur() * (float)$devis->getFinition()) / 100;
                $prorata = ($decompte->getValeur() * $devis->getProrata()) / 100;
                $trc = ($decompte->getValeur() * $devis->getTrc()) / 100;
                $apayer = $decompte->getValeur() - ($acompter + $garantie + $prorata + $vava + $finition + $trc);

            }

            $pour = ($thavance / $devis->getTotalht()) * 100;
            $decompte->setAvancement($pour);
            $decompte->setCountdecompe($vava);

            if($devis->getPtva() === "oui" || $devis->getPtva() === 'susp'){
                $decompte->setTtc($apayer + (($apayer * $devis->getTva()/100)));
            }else{
                $decompte->setTtc($apayer);
            }

            $decompte->setApayer($apayer);
            $decompte->setValeur($thavance);
            $manager->persist($decompte);
            $manager->flush();

        } else {
            $devis->removeDecompte($decompte);
            $manager->flush();
            $facture = $decompte->getFacture();
            $manager->remove($facture);
            $manager->flush();
            $manager->remove($decompte);
            $manager->flush();
        }

        $manager->persist($decompte);
        $manager->flush();

        return $this->json($decompte, 200, ['Content-Type' => 'application/json'], ['groups' => 'decompte']);

    }

    #[Route(path: '/update/{id}/{fi}/{ga}/{pro}/{ded}/{trc}', name: 'api_update_decompte',
        requirements: ['id' => '\d+'], methods: ['POST'])]
    public function updDecompte($id, $fi, $ga, $pro, $ded, $trc, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {

        $repoUser = $doctrine->getRepository(User::class);
        $repoDecompte = $doctrine->getRepository(Decompte::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $decompte = $repoDecompte->findOneBy(['id' => $id, 'user' => $master]);
        $devis = $decompte->getDevis();

        $decompte->setDeduction($ded);
        $decompte->setFinition($fi);
        $decompte->setProrata($pro);
        $decompte->setGarantie($ga);
        $decompte->setTrc($trc);

        $devis->setFinition($fi);
        $devis->setProrata($pro);
        $devis->setTrc($trc);
        $devis->setGarantie($ga);
        $manager->persist($devis);
        $manager->flush();

        $manager->flush();
        $manager->persist($decompte);
        $manager->flush();

        $chantier = $devis->getChantier();
        $lignes = $repoLigne->findBy(['decompte' => $decompte]);

        if ($devis->getTotalht() > 0) {
            foreach ($lignes as $lig) {
                if ($devis->getAarem() === 'oui') {
                    $thavance += (($lig->getQuantite() * $lig->getPu() - (($lig->getQuantite() * $lig->getPu() * $lig->getRemise()) / 100)) * $lig->getAvancement()) / 100;
                } else {
                    $thavance += (((float)$lig->getQuantite() * (float)$lig->getPu() * (float)$lig->getAvancement()) / 100);
                }
            }

            if ($devis->getAarem() === 'tht') {
                $thavance -= (($thavance * $devis->getRemtht()) / 100);
            }

            $decompte->setTotalht($devis->getTotalht());
            $pour = (($thavance / $devis->getTotalht()) * 100);
            $decompte->setAvancement($pour);
            $decompte->setValeur($thavance);
            $manager->persist($decompte);
            $manager->flush();

            $ii = 1;
            foreach ($devis->getDecomptes() as $decom) {
                if ($ii < $decompte->getRang()) {
                    $vava += $decom->getApayer();
                    $ii++;
                }
            }

            $first = $repoDecompte->findOneBy(['devis' => $devis, 'rang' => "1"]);
            $acompter = 0;
            if ($first === $decompte) {
                if (count($devis->getAcomptes()) === 1 ) {
                    if($decompte->getDeduction() === "partielle"){
                        $acompter = ($decompte->getValeur() * $devis->getAcomrage()) / 100;
                    }
                    if($decompte->getDeduction() === "complete"){
                        $acompter = ($devis->getTotalht() * $devis->getAcomrage()) / 100;
                    }
                    if($decompte->getDeduction() === "aucune"){
                        $acompter = 0;
                    }
                } else {
                    $allacomptes = 0;
                    foreach ($chantier->getFactures() as $fac) {
                        if (($fac->getAcompte() !== null) && $fac->getAcompte()->getDevis() === $decompte->getDevis()) {
                            $allacomptes += $fac->getTotalttc();
                        }
                    }
                    $pourcentacompte = ($allacomptes / $devis->getTotalttc()) * 100;

                    if($decompte->getDeduction() === "partielle"){
                        $acompter = ($decompte->getValeur() * $pourcentacompte) / 100;
                    }
                    if($decompte->getDeduction() === "complete"){
                        $acompter = ($devis->getTotalht() * $pourcentacompte) / 100;
                    }
                    if($decompte->getDeduction() === "aucune"){
                        $acompter = 0;
                    }
                }

                $garantie = ((float)$decompte->getValeur() * (float)$devis->getGarantie()) / 100;
                $finition = ((float)$decompte->getValeur() * (float)$devis->getFinition()) / 100;
                $prorata = ((float)$decompte->getValeur() * (float)$devis->getProrata()) / 100;
                $trc = ((float)$decompte->getValeur() * (float)$devis->getTrc()) / 100;
                $apayer = (float)$decompte->getValeur() - ($acompter + $garantie + $prorata + $vava + $finition + $trc);

            } else {
                if($decompte->getDeduction() === "partielle"){
                    $acompter = ($decompte->getValeur() * $devis->getAcomrage()) / 100;
                }
                if($decompte->getDeduction() === "complete"){
                    $acompter = ($devis->getTotalht() * $devis->getAcomrage()) / 100;
                }
                if($decompte->getDeduction() === "aucune"){
                    $acompter = 0;
                }

                $garantie = ($decompte->getValeur() * $devis->getGarantie()) / 100;
                $finition = ((float)$decompte->getValeur() * (float)$devis->getFinition()) / 100;
                $prorata = ($decompte->getValeur() * $devis->getProrata()) / 100;
                $trc = ($decompte->getValeur() * $devis->getTrc()) / 100;
                $apayer = $decompte->getValeur() - ($acompter + $garantie + $prorata + $vava + $finition + $trc);

            }

            $pour = ($thavance / $devis->getTotalht()) * 100;
            $decompte->setAvancement($pour);
            $decompte->setCountdecompe($vava);

            if($devis->getPtva() === "oui" || $devis->getPtva() === 'susp'){
                $decompte->setTtc($apayer + (($apayer * $devis->getTva()/100)));
            }else{
                $decompte->setTtc($apayer);
            }

            $decompte->setApayer($apayer);
            $decompte->setValeur($thavance);
            $manager->persist($decompte);
            $manager->flush();

        } else {
            $devis->removeDecompte($decompte);
            $manager->flush();
            $facture = $decompte->getFacture();
            $manager->remove($facture);
            $manager->flush();
            $manager->remove($decompte);
            $manager->flush();
        }


        return $this->json($decompte, 200, ['Content-Type' => 'application/json'], ['groups' => 'decompte']);

    }

    #[Route(path: '/chantier/{id}', name: 'api_decompte', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function index($id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);
        $repoDecompte = $doctrine->getRepository(Decompte::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $master]);
        $decompte = $repoDecompte->findByChan($master, $chantier);

        return $this->json($decompte, 200, ['Content-Type' => 'application/json'], ['groups' => 'pydecompte']);
    }

    #[Route(path: '/get/{id}', name: 'api_decompte_get', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function getDecompte($id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDecompte = $doctrine->getRepository(Decompte::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $decompte = $repoDecompte->findOneBy(['user' => $master, 'id' => $id]);
        return $this->json($decompte, 200, ['Content-Type' => 'application/json'], ['groups' => 'decompte']);
    }

    #[Route(path: '/valide', name: 'api_decompte_valide', methods: ['POST'])]
    public function valider(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDecompte = $doctrine->getRepository(Decompte::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apdecompte = $serializer->deserialize($apjson, Decompte::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $decompte = $repoDecompte->findOneBy(['user' => $master, 'numdecompte' => $apdecompte->getNumdecompte()]);

        $decompte->setEtat('valide');
        $manager->persist($decompte);
        $manager->flush();


        return $this->json($decompte, 200, ['Content-Type' => 'application/json'], ['groups' => 'decompte']);

    }

    #[Route(path: '/valider/{id}', name: 'api_decompte_valider', methods: ['POST'])]
    public function apvalider(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDecompte = $doctrine->getRepository(Decompte::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $decompte = $repoDecompte->findOneBy(['user' => $master, 'id' => $id]);

        $decompte->setEtat('valide');
        $manager->persist($decompte);
        $manager->flush();


        return $this->json($decompte, 200, ['Content-Type' => 'application/json'], ['groups' => 'decompte']);

    }

    #[Route(path: '/devalide', name: 'api_decompte_devalide', methods: ['POST'])]
    public function devalide(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDecompte = $doctrine->getRepository(Decompte::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apdecompte = $serializer->deserialize($apjson, Decompte::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $decompte = $repoDecompte->findOneBy(['user' => $master, 'numdecompte' => $apdecompte->getNumdecompte()]);

        $decompte->setEtat('save');
        $manager->persist($decompte);
        $manager->flush();


        return $this->json($decompte, 200, ['Content-Type' => 'application/json'], ['groups' => 'decompte']);

    }

    #[Route(path: '/devalider/{id}', name: 'api_decompte_devalide', methods: ['POST'])]
    public function devalider(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDecompte = $doctrine->getRepository(Decompte::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $decompte = $repoDecompte->findOneBy(['user' => $master, 'id' => $id]);

        $decompte->setEtat('save');
        $manager->persist($decompte);
        $manager->flush();


        return $this->json($decompte, 200, ['Content-Type' => 'application/json'], ['groups' => 'decompte']);

    }

    #[Route(path: '/reloadligne/{id}', name: 'api_decompte_reload', methods: ['POST'])]
    public function reloadligne(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDecompte = $doctrine->getRepository(Decompte::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $decompte = $repoDecompte->findOneBy(['user' => $master, 'id' => $id]);

        foreach ($decompte->getLignes() as $lign) {
            $manager->remove($lign);
            $manager->flush();
        }

        foreach ($decompte->getGroupes() as $group) {
            $manager->remove($group);
            $manager->flush();
        }

        foreach ($decompte->getDevis()->getLignes() as $ligne) {
            $lign = new Ligne();
            $lign->setDecompte($decompte);
            $lign->setReference($ligne->getReference());
            if ($ligne->getCode() !== null) {
                $ligne->setCode($ligne->getCode());
            }
            $lign->setDesignation($ligne->getDesignation());
            $lign->setZone($ligne->getZone());
            $lign->setQuantite($ligne->getQuantite());
            $lign->setPu($ligne->getPu());
            $lign->setRemise($ligne->getRemise());
            $lign->setType($ligne->getType());
            $lign->setArticle($ligne->getArticle());
            $lign->setChantier($ligne->getChantier());
            $lign->setUnite($ligne->getUnite());
            $lign->setUser($master);
            $lign->setGroupe($ligne->getGroupe());
            $manager->persist($lign);
            $manager->flush();
        }

        return $this->json($decompte, 200, ['Content-Type' => 'application/json'], ['groups' => 'decompte']);

    }

    #[Route(path: '/ligne/{a}/{b}', name: 'api_update_ligne', methods: ['POST'])]
    public function update_Ligne($a, $b, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        // LES REPOSITORIES
        $manager = $doctrine->getManager();
        $repoLigne = $doctrine->getRepository(Ligne::class);
        $repoUser = $doctrine->getRepository(User::class);
        $repoDecompte = $doctrine->getRepository(Decompte::class);
  
        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $lig = $repoLigne->findOneBy(['id' => $a, 'user' => $master]);
        $lig->setAvancement($b);
        $manager->persist($lig);
        $manager->flush();

        $decompte = $lig->getDecompte();
        $devis = $decompte->getDevis();
        $chantier = $devis->getChantier();
        $lignes = $repoLigne->findBy(['decompte' => $decompte]);

        $thavance = 0;
        $vava = 0;

        if ($devis->getTotalht() > 0) {
            foreach ($lignes as $lig) {
                if ($devis->getAarem() === 'oui') {
                    $thavance += (($lig->getQuantite() * $lig->getPu() - (($lig->getQuantite() * $lig->getPu() * $lig->getRemise()) / 100)) * $lig->getAvancement()) / 100;
                } else {
                    $thavance += (((float)$lig->getQuantite() * (float)$lig->getPu() * (float)$lig->getAvancement()) / 100);
                }
            }

            if ($devis->getAarem() === 'tht') {
                $thavance -= (($thavance * $devis->getRemtht()) / 100);
            }

            $decompte->setTotalht($devis->getTotalht());
            $pour = (($thavance / $devis->getTotalht()) * 100);
            $decompte->setAvancement($pour);
            $decompte->setValeur($thavance);
            $manager->persist($decompte);
            $manager->flush();

            $ii = 1;
            foreach ($devis->getDecomptes() as $decom) {
                if ($ii < $decompte->getRang()) {
                    $vava += $decom->getApayer();
                    $ii++;
                }
            }

            $first = $repoDecompte->findOneBy(['devis' => $devis, 'rang' => "1"]);
            $acompter = 0;
            if ($first === $decompte) {
                if (count($devis->getAcomptes()) === 1 ) {
                    if($decompte->getDeduction() === "partielle"){
                        $acompter = ($decompte->getValeur() * $devis->getAcomrage()) / 100;
                    }
                    if($decompte->getDeduction() === "complete"){
                        $acompter = ($devis->getTotalht() * $devis->getAcomrage()) / 100;
                    }
                    if($decompte->getDeduction() === "aucune"){
                        $acompter = 0;
                    }
                } else {
                    $allacomptes = 0;
                    foreach ($chantier->getFactures() as $fac) {
                        if (($fac->getAcompte() !== null) && $fac->getAcompte()->getDevis() === $decompte->getDevis()) {
                            $allacomptes += $fac->getTotalttc();
                        }
                    }
                    $pourcentacompte = ($allacomptes / $devis->getTotalttc()) * 100;

                    if($decompte->getDeduction() === "partielle"){
                        $acompter = ($decompte->getValeur() * $pourcentacompte) / 100;
                    }
                    if($decompte->getDeduction() === "complete"){
                        $acompter = ($devis->getTotalht() * $pourcentacompte) / 100;
                    }
                    if($decompte->getDeduction() === "aucune"){
                        $acompter = 0;
                    }
                }

                $garantie = ((float)$decompte->getValeur() * (float)$devis->getGarantie()) / 100;
                $finition = ((float)$decompte->getValeur() * (float)$devis->getFinition()) / 100;
                $prorata = ((float)$decompte->getValeur() * (float)$devis->getProrata()) / 100;
                $trc = ((float)$decompte->getValeur() * (float)$devis->getTrc()) / 100;
                $apayer = (float)$decompte->getValeur() - ($acompter + $garantie + $prorata + $vava + $finition + $trc);

            } else {
                if($decompte->getDeduction() === "partielle"){
                    $acompter = ($decompte->getValeur() * $devis->getAcomrage()) / 100;
                }
                if($decompte->getDeduction() === "complete"){
                    $acompter = ($devis->getTotalht() * $devis->getAcomrage()) / 100;
                }
                if($decompte->getDeduction() === "aucune"){
                    $acompter = 0;
                }

                $garantie = ($decompte->getValeur() * $devis->getGarantie()) / 100;
                $finition = ((float)$decompte->getValeur() * (float)$devis->getFinition()) / 100;
                $prorata = ($decompte->getValeur() * $devis->getProrata()) / 100;
                $trc = ($decompte->getValeur() * $devis->getTrc()) / 100;
                $apayer = $decompte->getValeur() - ($acompter + $garantie + $prorata + $vava + $finition + $trc);

            }

            $pour = ($thavance / $devis->getTotalht()) * 100;
            $decompte->setAvancement($pour);
            $decompte->setCountdecompe($vava);

            if($devis->getPtva() === "oui" || $devis->getPtva() === 'susp'){
                $decompte->setTtc($apayer + (($apayer * $devis->getTva()/100)));
            }else{
                $decompte->setTtc($apayer);
            }

            $decompte->setApayer($apayer);
            $decompte->setValeur($thavance);
            $manager->persist($decompte);
            $manager->flush();

        } else {
            $devis->removeDecompte($decompte);
            $manager->flush();
            $facture = $decompte->getFacture();
            $manager->remove($facture);
            $manager->flush();
            $manager->remove($decompte);
            $manager->flush();
        }


        return $this->json($decompte, 200, ['Content-Type' => 'application/json'], ['groups' => 'decompte']);

    }

    #[Route(path: '/pdf/get/{id}', name: 'api_decompte_pdf', methods: ['POST'])]
    public function pdff(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): JsonResponse
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);
        $repoGroupe = $doctrine->getRepository(Groupe::class);
        $repoForme = $doctrine->getRepository(Forme::class);
        $repoDocuments = $doctrine->getRepository(Documents::class);
        $repoDecompte = $doctrine->getRepository(Decompte::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $decompte = $repoDecompte->findOneBy(['user' => $master, 'id' => $id]);
        $chantier = $decompte->getChantier();

        $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'decompte', 'numero' => $decompte->getId(), 'etat' => 'no']);

        if ($docu) {
            $this->delete_directory('pdf/' . $docu->getFolde());
            $manager->remove($docu);
            $manager->flush();
        }

        // ON RECUPERE LES LIGNES
        $devis = $decompte->getDevis();
        $lignes = $repoLigne->findBy(['decompte' => $decompte]);

        // ON RECUPERE LES GROUPES
        $listegroupe = $repoGroupe->findBy(
            ['devis' => $devis],
            ['reference' => 'ASC']);

        // RECUPERATION DES MISES EN FORME
        $formes = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);
        $subject = 'DÉCOMPTE ' . $decompte->getNumdecompte() . ' ' . $decompte->getClient()->getNomClient() . ' ' . $decompte->getChantier()->getNomChantier();

        $ii = 1;
        $vava = 0;
        foreach ($devis->getDecomptes() as $decom) {
            if ($ii < $decompte->getRang()) {
                $vava += $decom->getApayer();
                $ii++;
            }
        }

        $allacomptes = 0;
        foreach ($chantier->getFactures() as $fac) {
            if ($fac->getAcompte() !== null) {
                if ($fac->getAcompte()->getDevis() === $decompte->getDevis()) {
                    if ($fac->getEtat() === "valide") {
                        $allacomptes += $fac->getTotalttc();
                    }
                }
            }
        }

        $pourcentacompte = ($allacomptes / $devis->getTotalttc()) * 100;

        $document = new Documents();
        $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
        if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }

        $document->setUser($apuser);
        $document->setNumero($decompte->getId());
        $document->setDonner($subject);
        $document->setType('decompte');
        $document->setEtat('no');
        $document->setFolde($dire);
        $manager->persist($document);
        $manager->flush();

        $pdfOptions = new Options();
        $pdfOptions->setIsRemoteEnabled(true);
        $dompdf = new Dompdf($pdfOptions);
        $html = $this->renderView('content/attachedoc.html.twig', [
            'chantier' => $devis->getChantier(),
            'devis' => $devis,
            'decompte' => $decompte,
            'formes' => $formes,
            'pourcentacompte' => $pourcentacompte,
            'lignes' => $lignes,
            'listGroup' => $listegroupe,
            'type' => "adecompte",
            'vava' => $vava
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $output = $dompdf->output();
        $publicDirectory = 'pdf/' . $document->getFolde() . '/';
        $pdfFilepath = $publicDirectory . $subject . '.pdf';
        file_put_contents($pdfFilepath, $output);

        return $this->json(['result' => $document->getFolde() . '/' . $document->getDonner()], 200);
    }

    #[Route(path: '/apdf/get/{id}', name: 'api_decompte_apdf', methods: ['POST'])]
    public function apdff(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): JsonResponse
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoLigne = $doctrine->getRepository(Ligne::class);
        $repoGroupe = $doctrine->getRepository(Groupe::class);
        $repoForme = $doctrine->getRepository(Forme::class);
        $repoDocuments = $doctrine->getRepository(Documents::class);
        $repoDecompte = $doctrine->getRepository(Decompte::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $decompte = $repoDecompte->findOneBy(['user' => $master, 'id' => $id]);
        $chantier = $decompte->getChantier();

        $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'decompte', 'numero' => $decompte->getId(), 'etat' => 'no']);

        if ($docu) {
            $this->delete_directory('pdf/' . $docu->getFolde());
            $manager->remove($docu);
            $manager->flush();
        }

        // ON RECUPERE LES LIGNES
        $devis = $decompte->getDevis();
        $lignes = $repoLigne->findBy(['decompte' => $decompte]);

        // ON RECUPERE LES GROUPES
        $listegroupe = $repoGroupe->findBy(
            ['devis' => $devis],
            ['reference' => 'ASC']);

        // RECUPERATION DES MISES EN FORME
        $formes = $repoForme->findOneBy(['user' => $apuser, 'used' => 'used']);
        $subject = 'DÉCOMPTE ' . $decompte->getNumdecompte() . ' ' . $decompte->getClient()->getNomClient() . ' ' . $decompte->getChantier()->getNomChantier();

        $ii = 1;
        $vava = 0;
        foreach ($devis->getDecomptes() as $decom) {
            if ($ii < $decompte->getRang()) {
                $vava += $decom->getApayer();
                $ii++;
            }
        }

        $allacomptes = 0;
        foreach ($chantier->getFactures() as $fac) {
            if ($fac->getAcompte() !== null) {
                if ($fac->getAcompte()->getDevis() === $decompte->getDevis()) {
                    if ($fac->getEtat() === "valide") {
                        $allacomptes += $fac->getTotalttc();
                    }
                }
            }
        }

        $pourcentacompte = ($allacomptes / $devis->getTotalttc()) * 100;

        $document = new Documents();
        $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
        if (!mkdir($concurrentDirectory = 'pdf/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }

        $document->setUser($apuser);
        $document->setNumero($decompte->getId());
        $document->setDonner($subject);
        $document->setType('decompte');
        $document->setEtat('no');
        $document->setFolde($dire);
        $manager->persist($document);
        $manager->flush();

        $pdfOptions = new Options();
        $pdfOptions->setIsRemoteEnabled(true);
        $dompdf = new Dompdf($pdfOptions);
        $html = $this->renderView('content/attachedoc.html.twig', [
            'chantier' => $devis->getChantier(),
            'devis' => $devis,
            'decompte' => $decompte,
            'formes' => $formes,
            'pourcentacompte' => $pourcentacompte,
            'lignes' => $lignes,
            'listGroup' => $listegroupe,
            'type' => "decompte",
            'vava' => $vava
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $output = $dompdf->output();
        $publicDirectory = 'pdf/' . $document->getFolde() . '/';
        $pdfFilepath = $publicDirectory . $subject . '.pdf';
        file_put_contents($pdfFilepath, $output);

        return $this->json(['result' => $document->getFolde() . '/' . $document->getDonner()], 200);
    }

    #[Route(path: '/delete/{id}', name: 'delyDecompte', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delyDecompte(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $doctrine->getManager();

        $repoUser = $doctrine->getRepository(User::class);
        $repoDecompte = $doctrine->getRepository(Decompte::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $decompte = $repoDecompte->findOneBy(['id' => $id, 'user' => $master]);
        $devis = $decompte->getDevis();

        $der = $repoDecompte->findBy(['devis' => $devis, 'user' => $master], ['id' => 'DESC'], 1);
        if ($der && $der[0] === $decompte) {
            $manager->remove($decompte);
            $manager->flush();
            return $this->json(['result' => 'décompte suprimé'], 200);
        }

        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/decdec/get', name: 'api_get_dec_all', methods: ['POST'])]
    public function all(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDecompte = $doctrine->getRepository(Decompte::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $decomptes = $repoDecompte->findDecDec($master);
        return $this->json($decomptes, 200, ['Content-Type' => 'application/json'], ['groups' => 'pydecompte']);
    }

}