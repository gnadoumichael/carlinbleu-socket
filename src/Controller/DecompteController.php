<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Decompte;
use App\Entity\Devis;
use App\Entity\Facture;
use App\Entity\Forme;
use App\Entity\Groupe;
use App\Entity\Historique;
use App\Entity\Ligne;
use App\Entity\Chantier;
use App\Entity\User;
use App\Form\DecompteType;
use App\Form\FormeType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;


#[Route(path: '/crm/decompte')]
class DecompteController extends AbstractController
{

    private $formFactory;

    public function __construct(private readonly ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }
    public function getMaster(): ?object
    {

        $repoUser = $this->doctrine->getRepository(User::class);
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);
        if ($use->getCompte() === null) {
            $master = $use;
        } else {
            $master = $repoUser->findOneBy(['id' => $use->getCompte()]);
        }

        return $master;
    }
    private function getJson(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpException(400, 'Invalid json');
        }
        return $data;
    }

    #[Route(path: '/add/{id}', name: 'addDecompte', methods: ['POST'])]
    public function addDecompte($id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoDecompte = $this->doctrine->getRepository(Decompte::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $decompte = new Decompte();
        $decompte->setUser($this->getMaster());
        $decompte->setDobyuser($this->getUser());
        $decompte->setDate(new \DateTime('NOW'));
        $decompte->setChantier($chantier);
        $decompte->setClient($chantier->getClient());
        $decompte->setEtat('save');

        $json = $this->getJson($request);
        $formDecompte = $this->formFactory->createNamed('', DecompteType::class, $decompte, [
            'chantier' => $chantier,
            'type' => 'chantier'
        ]);

        $devis = $repoDevis->findOneBy(['id' => $json['devdec'], 'user' => $this->getMaster()]);
        if ($devis->getTotalht() <= 0) {
            return $this->json(['result' => 'erreur'], 404);
        }
        $formDecompte->submit($json);
        $formDecompte->handleRequest($request);
        if ($this->isCsrfTokenValid('dectoken', $json['token'])) {

            $devis = $repoDevis->findOneBy(["user" => $this->getMaster(), "id" => $json['devdec']]);
            $decompte->setDevis($devis);
            $der = $repoDecompte->findBy(['devis' => $json['devdec'], 'user' => $this->getMaster()], ['id' => 'DESC'], 1);

            if($devis->getAcomptes()[0] == null){
                if ($der) {
                    $rang = $der[0]->getRang() + 1;
                    $decompte->setRang($rang);
                    $decompte->setNumdecompte('DEC-' . $rang);
                    $manager->persist($decompte);
                    $manager->flush();
                } else {
                    $decompte->setRang(1);
                    $devis->setAcomrage($json['acompte']);
                    $devis->setFinition($json['finition']);
                    $devis->setProrata($json['prorata']);
                    $devis->setTrc($json['trc']);
                    $devis->setGarantie($json['garantie']);
                    $decompte->setNumdecompte('DEC-1');
                    $manager->persist($chantier);
                    $manager->flush();
                }
            }else{
                if ($der) {
                    $rang = $der[0]->getRang() + 1;
                    $decompte->setRang($rang);
                    $decompte->setNumdecompte('DEC-' . $rang);
                    $manager->persist($decompte);
                    $manager->flush();
                } else {
                    $decompte->setRang(1);
                    $devis->setAcomrage($json['acompte']);
                    $devis->setFinition($json['finition']);
                    $devis->setProrata($json['prorata']);
                    $devis->setTrc($json['trc']);
                    $devis->setTrc($json['trc']);
                    $devis->setGarantie($json['garantie']);
                    $decompte->setNumdecompte('DEC-1');
                    $manager->persist($chantier);
                    $manager->flush();
                }
            }

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
                    $lign->setUser($this->getMaster());
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
                    $lign->setUser($this->getMaster());
                    $lign->setAvancement(0);
                    $manager->persist($lign);
                    $manager->flush();
                }
            }

            return $this->json(['result' => $decompte->getId()], 201);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/adde', name: 'addeDecompte', methods: ['POST'])]
    public function addeDecompte(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoDecompte = $this->doctrine->getRepository(Decompte::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);

        $decompte = new Decompte();
        $decompte->setUser($this->getMaster());
        $decompte->setDobyuser($this->getUser());
        $decompte->setEtat('save');

        $json = $this->getJson($request);

        $formDecompte = $this->formFactory->createNamed('', DecompteType::class, $decompte, [
            'type' => 'chantiers',
            'user' => $this->getMaster()
        ]);
        $formDecompte->submit($json);
        $formDecompte->handleRequest($request);
        if ($this->isCsrfTokenValid('dectoken', $json['token'])) {

            $devis = $repoDevis->findOneBy(["user" => $this->getMaster(), "id" => $json['devdec']]);
            $chantier = $devis->getChantier();
            $decompte->setDevis($devis);
            $der = $repoDecompte->findBy(['devis' => $json['devdec'], 'user' => $this->getMaster()], ['id' => 'DESC'], 1);

            if($devis->getAcomptes()[0] == null){
                if ($der) {
                    $rang = $der[0]->getRang() + 1;
                    $decompte->setRang($rang);
                    $decompte->setNumdecompte('DEC-' . $rang);
                    $manager->persist($decompte);
                    $manager->flush();
                } else {
                    $decompte->setRang(1);

                    $devis->setAcomrage($json['acompte']);
                    $devis->setFinition($json['finition']);
                    $devis->setProrata($json['prorata']);
                    $devis->setGarantie($json['garantie']);
                    $devis->setTrc($json['trc']);
                    $decompte->setNumdecompte('DEC-1');
                    $manager->persist($chantier);
                    $manager->flush();
                }
            }else{
                if ($der) {
                    $rang = $der[0]->getRang() + 1;
                    $decompte->setRang($rang);
                    $decompte->setNumdecompte('DEC-' . $rang);
                    $manager->persist($decompte);
                    $manager->flush();
                } else {
                    $decompte->setRang(1);
                    $devis->setAcomrage($json['acompte']);
                    $devis->setFinition($json['finition']);
                    $devis->setProrata($json['prorata']);
                    $devis->setTrc($json['trc']);
                    $devis->setGarantie($json['garantie']);
                    $decompte->setNumdecompte('DEC-1');
                    $manager->persist($chantier);
                    $manager->flush();
                }
            }

            $decompte->setchantier($chantier);
            $decompte->setClient($chantier->getClient());

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
                    $lign->setType($ligne->getType());
                    $lign->setArticle($ligne->getArticle());
                    $lign->setChantier($ligne->getChantier());
                    $lign->setUnite($ligne->getUnite());
                    $lign->setUser($this->getMaster());
                    $lign->setAvancement($ligne->getAvancement());
                    $lign->setGroupe($ligne->getGroupe());
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
                    $lign->setRemise($ligne->getRemise());
                    $lign->setType($ligne->getType());
                    $lign->setArticle($ligne->getArticle());
                    $lign->setChantier($ligne->getChantier());
                    $lign->setUnite($ligne->getUnite());
                    $lign->setUser($this->getMaster());
                    $lign->setAvancement(0);
                    $lign->setGroupe($ligne->getGroupe());
                    $manager->persist($lign);
                    $manager->flush();
                }
            }
            $return[] = ["iddecompte" => $decompte->getId(), "idchantier" => $decompte->getChantier()->getId()];
            return $this->json(['result' => $return], 201);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/addo/{id}', name: 'addoDecompte', methods: ['POST'])]
    public function addoDecompte(int $id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoDecompte = $this->doctrine->getRepository(Decompte::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);

        $decompte = new Decompte();
        $decompte->setUser($this->getMaster());
        $decompte->setDobyuser($this->getUser());
        $decompte->setEtat('save');

        $json = $this->getJson($request);

        $formDecompte = $this->formFactory->createNamed('', DecompteType::class, $decompte, [
            'type' => 'devis',
            'user' => $this->getMaster()
        ]);

        $formDecompte->submit($json);
        $formDecompte->handleRequest($request);
        if ($formDecompte->isSubmitted() && $formDecompte->isValid()) {

            $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
            $chantier = $devis->getChantier();
            $decompte->setDevis($devis);

            $der = $repoDecompte->findBy(['devis' => $devis, 'user' => $this->getMaster()], ['id' => 'DESC'], 1);
            if ($der) {
                $rang = $der[0]->getRang() + 1;
                $decompte->setRang($rang);
                $decompte->setNumdecompte('DEC-' . $rang);
                $manager->persist($decompte);
                $manager->flush();
            } else {
                $decompte->setRang(1);
                $decompte->setNumdecompte('DEC-1');
                $manager->persist($chantier);
                $manager->flush();
            }

            $decompte->setchantier($chantier);
            $decompte->setClient($chantier->getClient());

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
                    $lign->setType($ligne->getType());
                    $lign->setArticle($ligne->getArticle());
                    $lign->setChantier($ligne->getChantier());
                    $lign->setUnite($ligne->getUnite());
                    $lign->setUser($this->getMaster());
                    $lign->setAvancement($ligne->getAvancement());
                    $lign->setGroupe($ligne->getGroupe());
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
                    $lign->setRemise($ligne->getRemise());
                    $lign->setType($ligne->getType());
                    $lign->setArticle($ligne->getArticle());
                    $lign->setChantier($ligne->getChantier());
                    $lign->setUnite($ligne->getUnite());
                    $lign->setUser($this->getMaster());
                    $lign->setAvancement(0);
                    $lign->setGroupe($ligne->getGroupe());
                    $manager->persist($lign);
                    $manager->flush();
                }
            }
            return $this->json(['result' => $decompte->getId()], 201);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/update/{id}', name: 'updateDECOMPTE', methods: ['PUT'])]
    public function updateDecompte($id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoDecompte = $this->doctrine->getRepository(Decompte::class);

        $decompte = $repoDecompte->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$decompte) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $json = $this->getJson($request);
        $formDecompte = $this->formFactory->createNamed('', DecompteType::class, $decompte, [
            'chantier' => $decompte->getChantier(),
            'type' => 'decompte'
        ]);

        $formDecompte->submit($json);
        $formDecompte->handleRequest($request);
        if ($formDecompte->isSubmitted() && $formDecompte->isValid()) {
            $devis = $decompte->getDevis();
            $devis->setAcomrage($json['acompte']);
            $devis->setFinition($json['finition']);
            $devis->setProrata($json['prorata']);
            $devis->setTrc($json['trc']);
            $devis->setGarantie($json['garantie']);
            $manager->persist($devis);
            $manager->persist($decompte);
            $manager->flush();

            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/reloaddevis/{id}', name: 'reloadDECOMPTE', methods: ['GET'])]
    public function reloadDecompte($id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoDecompte = $this->doctrine->getRepository(Decompte::class);

        $decompte = $repoDecompte->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$decompte) {
            return $this->json(['result' => 'Erreur'], 404);
        }

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
            $lign->setUser($this->getMaster());
            $lign->setGroupe($ligne->getGroupe());
            $manager->persist($lign);
            $manager->flush();
        }

        return $this->json(['result' => 'success'], 200);
    }

    #[Route(path: '/devalider/{id}', name: 'devaliderdecompte', methods: ['GET'])]
    public function devalidedecompte($id)
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repoDecompte = $this->doctrine->getRepository(Decompte::class);

        // RECUPERE LE DECOMPTE
        $decompte = $repoDecompte->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$decompte) {
            return $this->redirectToRoute('logout');
        }
        $decompte->setEtat('save');
        $manager->persist($decompte);
        $manager->flush();
        return $this->json(['result' => 'success'], 200);
    }

    #[Route(path: '/valider/{id}', name: 'validerdecompte', methods: ['GET'])]
    public function validedecompte($id)
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repoDecompte = $this->doctrine->getRepository(Decompte::class);

        // RECUPERE LE DECOMPTE
        $decompte = $repoDecompte->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$decompte) {
            return $this->redirectToRoute('logout');
        }
        $decompte->setEtat('valide');
        $manager->persist($decompte);
        $manager->flush();
        return $this->json(['result' => 'success'], 200);
    }

    #[Route(path: '/convertirfacture/{id}', name: 'convertirfacture', methods: ['GET'])]
    public function convertirfacture($id)
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repoDecompte = $this->doctrine->getRepository(Decompte::class);
        $repoFacture = $this->doctrine->getRepository(Facture::class);

        // RECUPERE LE DECOMPTE
        $decompte = $repoDecompte->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$decompte) {
            return $this->redirectToRoute('logout');
        }

        $chantier = $decompte->getChantier();
        $devis = $decompte->getDevis();

        $facture = new Facture();
        $facture->setDate(new \DateTime('NOW'));
        $facture->setUser($this->getMaster());
        $facture->setDobyuser($this->getUser());
        $facture->setChantier($chantier);
        $facture->setFactReference("Facture selon Décompte N°: ".$decompte->getNumdecompte()." sur Devis N°: ".$devis->getIddevis());
        $facture->setClient($chantier->getClient());
        $facture->setEtat('save');


        $der = $repoFacture->findBy(['user' => $this->getMaster()], ['id' => 'DESC'], 1);

        if ($der) {
            $rang = $der[0]->getRang() + 1;
            $facture->setRang($rang);
            $facture->setNumfacture('FFF-' . $rang);
        } else {
            $facture->setRang(1);
            $facture->setNumfacture('FFF-1');
        }

        $facture->setTotalht($decompte->getApayer());
        if ($devis->getPtva() === 'oui' || $devis->getPtva() === 'susp') {
            $ttc = $decompte->getApayer() + (($decompte->getApayer() * $devis->getTva()) / 100);
            $facture->setTotalttc($ttc);
        } else {
            $facture->setTotalttc($decompte->getApayer());
        }

        $facture->setDecompte($decompte);
        $facture->setType("decompte");

        $manager->persist($decompte);
        $manager->persist($facture);
        $manager->flush();
        return $this->json(['result' => $facture->getId()], 200);

    }

    #[Route(path: '/valideconvertirfacture/{id}', name: 'valideconvertirfacture', methods: ['GET'])]
    public function valideconvertirfacture($id)
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repoDecompte = $this->doctrine->getRepository(Decompte::class);
        $repoFacture = $this->doctrine->getRepository(Facture::class);

        // RECUPERE LE DECOMPTE
        $decompte = $repoDecompte->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$decompte) {return $this->redirectToRoute('logout');}

        $decompte->setEtat('valide');
        $manager->persist($decompte);
        $manager->flush();

        $chantier = $decompte->getChantier();
        $devis = $decompte->getDevis();

        $facture = new Facture();
        $facture->setDate(new \DateTime('NOW'));
        $facture->setUser($this->getMaster());
        $facture->setDobyuser($this->getUser());
        $facture->setChantier($chantier);
        $facture->setClient($chantier->getClient());
        $facture->setFactReference("Facture selon Décompte N°: ".$decompte->getNumdecompte()." sur Devis N°: ".$devis->getIddevis());
        $facture->setEtat('save');


        $der = $repoFacture->findBy(['user' => $this->getMaster()], ['id' => 'DESC'], 1);

        if ($der) {
            $rang = $der[0]->getRang() + 1;
            $facture->setRang($rang);
            $facture->setNumfacture('FFF-' . $rang);
        } else {
            $facture->setRang(1);
            $facture->setNumfacture('FFF-1');
        }

        $facture->setTotalht($decompte->getApayer());
        if ($devis->getPtva() === 'oui' || $devis->getPtva() === 'susp') {
            $ttc = $decompte->getApayer() + (($decompte->getApayer() * $devis->getTva()) / 100);
            $facture->setTotalttc($ttc);
        } else {
            $facture->setTotalttc($decompte->getApayer());
        }

        $facture->setDecompte($decompte);
        $facture->setType("decompte");

        $manager->persist($decompte);
        $manager->persist($facture);
        $manager->flush();
        return $this->json(['result' => $facture->getId()], 200);

    }

    #[Route(path: '/del/{id}', name: 'delDecompte', methods: ['DELETE'])]
    public function delDecompte($id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoDecompte = $this->doctrine->getRepository(Decompte::class);

        $decompte = $repoDecompte->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $devis = $decompte->getDevis();

        if (!$decompte) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $der = $repoDecompte->findBy(['devis' => $devis, 'user' => $this->getMaster()], ['id' => 'DESC'], 1);
        if ($der) {
            $manager->remove($decompte);
            $manager->flush();
            return $this->json(['result' => 'décompte suprimé'], 200);
        }

        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/{id}/{idchantier}', name: 'editdecompte', requirements: ['id' => '\d+', 'idchantier' => '\d+'], methods: ['GET'])]
    #[Route(path: '/ligne/{id}/{idligne}', name: 'editlignedecompte')]
    public function decompte(int $id = null, int $idligne = null, int $idchantier)
    {
        // LES REPOSITORIES
        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoDecompte = $this->doctrine->getRepository(Decompte::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoForme = $this->doctrine->getRepository(Forme::class);
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        // ACCESS A LA BASE DE DONNEES
        $manager = $this->doctrine->getManager();

        // ON RECUPERE LE DEVIS
        $decompte = $repoDecompte->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $devis = $decompte->getDevis();
        $groupes = $devis->getGroupe();

        // CHANTIER
        $chantier = $repoChantier->findOneBy(['id' => $idchantier, 'user' => $this->getMaster()]);
        if (!$decompte || !$chantier) { return $this->redirectToRoute('logout'); }

        if (!$decompte) {
            $decompte = new Decompte();
            $decompte->setUser($this->getMaster());
            $decompte->setDobyuser($this->getUser());
            $decompte->setDate(new \DateTime('NOW'));
            $decompte->setChantier($chantier);
            $decompte->setClient($chantier->getClient());
            $decompte->setEtat('save');

            $decompte->setProrata($devis->getProrata());
            $decompte->setTrc($devis->getTrc());
            $decompte->setAcompte($devis->getAcomrage());
            $decompte->setGarantie($devis->getGarantie());
            if($devis->getFinition() == null){$decompte->setFinition(0);}else{$decompte->setFinition($devis->getFinition());}

        }else{
            $decompte->setProrata($devis->getProrata());
            $decompte->setTrc($devis->getTrc());
            $decompte->setAcompte($devis->getAcomrage());
            $decompte->setGarantie($devis->getGarantie());
            if($devis->getFinition() == null){$decompte->setFinition(0);}else{$decompte->setFinition($devis->getFinition());}

            $manager->persist($decompte);
            $manager->flush();
        }



        $thavance = 0;
        $vava = 0;
        $isfirst = 0;


        $form = $this->formFactory->createNamed('', DecompteType::class, $decompte, [
            'chantier' => $chantier,
            'type' => 'decompte'
        ]);

        if ($decompte->getDevis()) {
            $devis = $decompte->getDevis();
            $lignes = $repoLigne->findBy(['decompte' => $decompte]);
            $ligne = $repoLigne->findOneBy(['id' => $idligne, 'user' => $this->getMaster()]);
        } else {
            $facture = $decompte->getFacture();
            if ($facture) {
                $facture->setDecompte(null);
                $manager->persist($facture);
                $manager->flush();
                $manager->remove($facture);
                $manager->flush();
            }
            $manager->remove($decompte);
            $manager->flush();
        }

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
                $isfirst = 1;
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
                $isfirst = 2;
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

        $forte = $repoForme->findOneBy(['user' => $this->getUser(), 'used' => 'used']);
        $fortes = $repoForme->findBy(['user' => $this->getUser()]);
        $formes = $this->formFactory->createNamed('', FormeType::class, $forte);


        $listegroupe = $repoGroupe->findBy(
            ['decompte' => $decompte],
            ['reference' => 'ASC']);

        // CRÉE UN NOUVEAU DEVIS
        $nedecompte = new Decompte();
        $nedecompte->setUser($this->getMaster());
        $nedecompte->setDobyuser($this->getUser());
        $nedecompte->setDate(new \DateTime('NOW'));
        $nedecompte->setChantier($chantier);
        $nedecompte->setClient($chantier->getClient());
        $nedecompte->setEtat('save');
        $nedecompte->setProrata(0);
        $nedecompte->setAcompte(0);
        $nedecompte->setGarantie(0);
        $nedecompte->setTrc(0);
        $nedecompte->setFinition(0);
        $nedecompte->setDevis($devis);

        // FORMULAIRE DECOMPTE
        $formneDecompte = $this->formFactory->createNamed('', DecompteType::class, $nedecompte, [
            'chantier' => $chantier,
            'type' => 'chantier'
        ]);

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        $jsondecompte= $this->json($decompte, 200, ['Content-Type' => 'application/json'], ['groups' => 'decompte']);
        $jsonforme = $this->json($forte, 200, ['Content-Type' => 'application/json'], ['groups' => 'forme']);
        $jsonformes = $this->json($fortes, 200, ['Content-Type' => 'application/json'], ['groups' => 'forme']);
        $jsongroupes = $this->json($groupes, 200, ['Content-Type' => 'application/json'], ['groups' => 'groupes']);


        return $this->render('content/decompte.html.twig', [
            'controller_name' => 'DecompteController',
            'formDecompte' => $form->createView(),
            'formeDecompte' => $formneDecompte->createView(),
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'decompte' => $decompte,
            'devis' => $decompte->getDevis(),
            'chantier' => $chantier,
            'thavance' => $thavance,
            'forte' => $forte,
            'formes' => $formes->createView(),
            'listGroup' => $listegroupe,
            'lignes' => $lignes,
            'ligne' => $ligne,
            'editligne' => $idligne !== null,
            'vava' => $vava,
            'history' => $historiques,
            'jsondecompte' => $jsondecompte->getContent(),
            'jsonforme' => $jsonforme->getContent(),
            'jsonformes' => $jsonformes->getContent(),
            'jsongroupes' => $jsongroupes->getContent(),
            'isfirst' => $isfirst,
        ]);


    }
}
