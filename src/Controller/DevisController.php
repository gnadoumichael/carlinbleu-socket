<?php

namespace App\Controller;

use App\Entity\Alerte;
use App\Entity\Chantier;
use App\Entity\Client;
use App\Entity\Compte;
use App\Entity\Corbeille;
use App\Entity\Decompte;
use App\Entity\Devis;
use App\Entity\Facture;
use App\Entity\Forme;
use App\Entity\Groupe;
use App\Entity\Historique;
use App\Entity\Ligne;
use App\Entity\Planning;
use App\Entity\Recap;
use App\Entity\Relever;
use App\Entity\Section;
use App\Entity\Tache;
use App\Entity\User;
use App\Form\DecompteType;
use App\Form\DevisType;
use App\Form\FactureType;
use App\Form\FormeType;
use App\Form\GroupeType;
use App\Form\LigneType;
use App\Form\LignType;
use App\Service\EnteteUploader;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/crm/devis')]
class DevisController extends AbstractController
{
    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }
    public function ajourDevis(Devis $devis)
    {
        $manager = $this->doctrine->getManager();
        $th = 0;
        $rem = 0;

        if ($devis->getAbasetva() === 'non') {
            foreach ($devis->getLignes() as $lig) {
                if ($devis->getAarem() === 'oui') {
                    $th = (($lig->getQuantite() * $lig->getPu()) * (((100) - $lig->getRemise()) / 100)) + $th;
                    $rem = (($lig->getQuantite() * $lig->getPu()) * (($lig->getRemise()) / 100)) + $rem;
                }
                if ($devis->getAarem() === 'non') {
                    $th = ($lig->getQuantite() * $lig->getPu()) + $th;
                }
                if ($devis->getAarem() === 'tht') {
                    $th = ($lig->getQuantite() * $lig->getPu()) + $th;
                }
            }

        }

        if ($devis->getAbasetva() === 'oui') {
            foreach ($devis->getLignes() as $lig) {
                if ($devis->getAarem() === 'oui') {
                    $rem = $rem + ((($lig->getQuantite() * $lig->getPu()) * $lig->getRemise()) / 100);
                    $th = (($lig->getQuantite() * $lig->getPu()) * (((100) - $lig->getRemise()) / 100)) + $th;
                } else {
                    $th = ($lig->getQuantite() * $lig->getPu()) + $th;
                }
            }
        }


        if ($devis->getAarem() === 'tht') {
            $rem = ($th * $devis->getRemtht()) / 100;
            $th = $th - $rem;
        }

        if ($devis->getAbasetva() === 'non') {
            $vtva = ($th * $devis->getTva()) / 100;
        } else {
            $vtva = ($devis->getBasetva() * $devis->getTva()) / 100;
        }

        if ($devis->getPtva() === "oui" || $devis->getPtva() === "susp") {
            $ttc = $th + $vtva;
        } else {
            $ttc = $th;
        }


        $devis->setTotalttc($ttc);
        $devis->setTotalht($th);
        $devis->setVtva($vtva);
        $devis->setVremise($rem);

        $manager->persist($devis);
        $manager->flush();

    }
    public function getMaster()
    {

        $repoUser = $this->doctrine->getRepository(User::class);

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

    #[Route(path: '/forme', name: 'miseformeDevis', methods: ['POST'])]
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

    #[Route('/add/{id}', name: 'addDevis', methods: ['POST'])]
    public function addDevis(int $id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        date_default_timezone_set('Africa/Abidjan');
        $th = 0;
        $ttc = 0;
        $rem = 0;
        $vtva = 0;

        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $repoCompte = $this->doctrine->getRepository(Compte::class);
        $compte = $repoCompte->findOneBy(['user' => $this->getMaster()]);

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $devis = new Devis();
        $devis->setDate(new \DateTime('NOW'));
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $devis->setTotalht($th);
        $devis->setTotalttc($ttc);
        $devis->setVtva($vtva);
        $devis->setVremise($rem);
        $devis->setUser($this->getMaster());
        $devis->setDobyuser($this->getUser());

        $devis->setChantier($chantier);
        $devis->setClient($chantier->getClient());
        $devis->setEtat('save');
        $devis->setTva('18');
        $json = $this->getJson($request);
        $formDevis = $this->formFactory->createNamed('', DevisType::class, $devis, [
            'client' => $chantier->getClient(),
            'type' => 'devis'
        ]);
        $formDevis->submit($json);
        $formDevis->handleRequest($request);
        if ($formDevis->isSubmitted() && $formDevis->isValid()) {
            $der = $repoDevis->findBy(['user' => $this->getMaster()], ['id' => 'DESC'], 1);
            if ($der) {
                $rang = $der[0]->getRang() + 1;
                $devis->setRang($rang);
                $devis->setIddevis($compte->getCompteDevis() . $rang);
            } else {
                $devis->setRang(1);
                $devis->setIddevis(($compte->getCompteDevis() . '1'));
            }

            $devis->setAcomrage(0);
            $devis->setFinition(0);
            $devis->setTrc(0);
            $devis->setProrata(0);
            $devis->setGarantie(0);
            $manager->persist($devis);
            $manager->flush();


            $action = '<p>Création du devis N° : ' . $devis->getIddevis() . '</p> ' . $devis->getDevReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();


            return $this->json(['result' => $devis->getId()], 201);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route('/evaluer/{id}', name: 'evaluerDevis', methods: ['POST'])]
    public function evaluerDevis(int $id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        date_default_timezone_set('Africa/Abidjan');

        $repoDevis = $this->doctrine->getRepository(Devis::class);

        $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        foreach ($devis->getGroupe() as $gr){
            $manager->remove($gr);
            $manager->flush();
        }

        foreach ($devis->getLignes() as $li){
            $manager->remove($li);
            $manager->flush();
        }

        $group = new Groupe();
        $group->setReference("I");
        $group->setGroupe("TRAVAUX PRELIMINAIRES");
        $group->setDevis($devis);
        $manager->persist($group);
        $manager->flush();

        $ligna = new Ligne();
        $ligna->setDesignation("<p>PROPOSITION 1</p>");
        $ligna->setDevis($devis);
        $ligna->setUnite("F");
        $ligna->setQuantite(1);
        $ligna->setPu(0);
        $ligna->setUser($this->getMaster());
        $ligna->setReference("1.1");
        $ligna->setChantier($devis->getChantier());
        $ligna->setType(1);
        $ligna->setRemise(0);
        $ligna->setGroupe($group);
        $manager->persist($ligna);
        $manager->flush();

        $ligna2 = new Ligne();
        $ligna2->setDesignation("<p>PROPOSITION 2</p>");
        $ligna2->setDevis($devis);
        $ligna2->setUnite("F");
        $ligna2->setQuantite(1);
        $ligna2->setPu(0);
        $ligna2->setUser($this->getMaster());
        $ligna2->setReference("1.2");
        $ligna2->setChantier($devis->getChantier());
        $ligna2->setType(1);
        $ligna2->setRemise(0);
        $ligna2->setGroupe($group);
        $manager->persist($ligna2);
        $manager->flush();


        $groupa = new Groupe();
        $groupa->setReference("II");
        $groupa->setGroupe("FONDATION");
        $groupa->setDevis($devis);
        $manager->persist($groupa);
        $manager->flush();

        $lignb = new Ligne();
        $lignb->setDesignation("<p>PROPOSITION 1</p>");
        $lignb->setDevis($devis);
        $lignb->setUnite("F");
        $lignb->setQuantite(1);
        $lignb->setPu(0);
        $lignb->setUser($this->getMaster());
        $lignb->setReference("2.1");
        $lignb->setChantier($devis->getChantier());
        $lignb->setType(1);
        $lignb->setRemise(0);
        $lignb->setGroupe($groupa);
        $manager->persist($lignb);
        $manager->flush();

        $lignb1 = new Ligne();
        $lignb1->setDesignation("<p>PROPOSITION 2</p>");
        $lignb1->setDevis($devis);
        $lignb1->setUnite("F");
        $lignb1->setQuantite(1);
        $lignb1->setPu(0);
        $lignb1->setUser($this->getMaster());
        $lignb1->setReference("2.2");
        $lignb1->setChantier($devis->getChantier());
        $lignb1->setType(1);
        $lignb1->setRemise(0);
        $lignb1->setGroupe($groupa);
        $manager->persist($lignb1);
        $manager->flush();

        $groupb = new Groupe();
        $groupb->setReference("III");
        $groupb->setGroupe("ELEVATION");
        $groupb->setDevis($devis);
        $manager->persist($groupb);
        $manager->flush();

        $lignc = new Ligne();
        $lignc->setDesignation("<p>PROPOSITION 1</p>");
        $lignc->setDevis($devis);
        $lignc->setUnite("F");
        $lignc->setQuantite(1);
        $lignc->setPu(0);
        $lignc->setUser($this->getMaster());
        $lignc->setReference("3.1");
        $lignc->setChantier($devis->getChantier());
        $lignc->setType(1);
        $lignc->setRemise(0);
        $lignc->setGroupe($groupb);
        $manager->persist($lignc);
        $manager->flush();

        $lignc1 = new Ligne();
        $lignc1->setDesignation("<p>PROPOSITION 2</p>");
        $lignc1->setDevis($devis);
        $lignc1->setUnite("F");
        $lignc1->setQuantite(1);
        $lignc1->setPu(0);
        $lignc1->setUser($this->getMaster());
        $lignc1->setReference("3.2");
        $lignc1->setChantier($devis->getChantier());
        $lignc1->setType(1);
        $lignc1->setRemise(0);
        $lignc1->setGroupe($groupb);
        $manager->persist($lignc1);
        $manager->flush();

        $groupc = new Groupe();
        $groupc->setReference("IV");
        $groupc->setGroupe("TOITURE");
        $groupc->setDevis($devis);
        $manager->persist($groupc);
        $manager->flush();

        $lignd = new Ligne();
        $lignd->setDesignation("<p>PROPOSITION 1</p>");
        $lignd->setDevis($devis);
        $lignd->setUnite("F");
        $lignd->setQuantite(1);
        $lignd->setPu(0);
        $lignd->setUser($this->getMaster());
        $lignd->setReference("4.1");
        $lignd->setChantier($devis->getChantier());
        $lignd->setType(1);
        $lignd->setRemise(0);
        $lignd->setGroupe($groupc);
        $manager->persist($lignd);
        $manager->flush();

        $lignd1 = new Ligne();
        $lignd1->setDesignation("<p>PROPOSITION 2</p>");
        $lignd1->setDevis($devis);
        $lignd1->setUnite("F");
        $lignd1->setQuantite(1);
        $lignd1->setPu(0);
        $lignd1->setUser($this->getMaster());
        $lignd1->setReference("4.2");
        $lignd1->setChantier($devis->getChantier());
        $lignd1->setType(1);
        $lignd1->setRemise(0);
        $lignd1->setGroupe($groupc);
        $manager->persist($lignd1);
        $manager->flush();

        $groupd = new Groupe();
        $groupd->setReference("V");
        $groupd->setGroupe("REVETEMENT DES MURS");
        $groupd->setDevis($devis);
        $manager->persist($groupd);
        $manager->flush();

        $lignf = new Ligne();
        $lignf->setDesignation("<p>PROPOSITION 1</p>");
        $lignf->setDevis($devis);
        $lignf->setUnite("F");
        $lignf->setQuantite(1);
        $lignf->setPu(0);
        $lignf->setUser($this->getMaster());
        $lignf->setReference("5.1");
        $lignf->setChantier($devis->getChantier());
        $lignf->setType(1);
        $lignf->setRemise(0);
        $lignf->setGroupe($groupd);
        $manager->persist($lignf);
        $manager->flush();

        $lignf1 = new Ligne();
        $lignf1->setDesignation("<p>PROPOSITION 2</p>");
        $lignf1->setDevis($devis);
        $lignf1->setUnite("F");
        $lignf1->setQuantite(1);
        $lignf1->setPu(0);
        $lignf1->setUser($this->getMaster());
        $lignf1->setReference("5.2");
        $lignf1->setChantier($devis->getChantier());
        $lignf1->setType(1);
        $lignf1->setRemise(0);
        $lignf1->setGroupe($groupd);
        $manager->persist($lignf1);
        $manager->flush();
        
        $groupf = new Groupe();
        $groupf->setReference("VI");
        $groupf->setGroupe("REVETEMENT DES SOLS");
        $groupf->setDevis($devis);
        $manager->persist($groupf);
        $manager->flush();

        $ligng = new Ligne();
        $ligng->setDesignation("<p>PROPOSITION 1</p>");
        $ligng->setDevis($devis);
        $ligng->setUnite("F");
        $ligng->setQuantite(1);
        $ligng->setPu(0);
        $ligng->setUser($this->getMaster());
        $ligng->setReference("6.1");
        $ligng->setChantier($devis->getChantier());
        $ligng->setType(1);
        $ligng->setRemise(0);
        $ligng->setGroupe($groupf);
        $manager->persist($ligng);
        $manager->flush();

        $ligng1 = new Ligne();
        $ligng1->setDesignation("<p>PROPOSITION 1</p>");
        $ligng1->setDevis($devis);
        $ligng1->setUnite("F");
        $ligng1->setQuantite(1);
        $ligng1->setPu(0);
        $ligng1->setUser($this->getMaster());
        $ligng1->setReference("6.2");
        $ligng1->setChantier($devis->getChantier());
        $ligng1->setType(1);
        $ligng1->setRemise(0);
        $ligng1->setGroupe($groupf);
        $manager->persist($ligng1);
        $manager->flush();

        $groupg = new Groupe();
        $groupg->setReference("VII");
        $groupg->setGroupe("PLAFOND");
        $groupg->setDevis($devis);
        $manager->persist($groupg);
        $manager->flush();

        $lignh1 = new Ligne();
        $lignh1->setDesignation("<p>PROPOSITION 1</p>");
        $lignh1->setDevis($devis);
        $lignh1->setUnite("F");
        $lignh1->setQuantite(1);
        $lignh1->setPu(0);
        $lignh1->setUser($this->getMaster());
        $lignh1->setReference("7.1");
        $lignh1->setChantier($devis->getChantier());
        $lignh1->setType(1);
        $lignh1->setRemise(0);
        $lignh1->setGroupe($groupg);
        $manager->persist($lignh1);
        $manager->flush();

        $lignh2 = new Ligne();
        $lignh2->setDesignation("<p>PROPOSITION 2</p>");
        $lignh2->setDevis($devis);
        $lignh2->setUnite("F");
        $lignh2->setQuantite(1);
        $lignh2->setPu(0);
        $lignh2->setUser($this->getMaster());
        $lignh2->setReference("7.2");
        $lignh2->setChantier($devis->getChantier());
        $lignh2->setType(1);
        $lignh2->setRemise(0);
        $lignh2->setGroupe($groupg);
        $manager->persist($lignh2);
        $manager->flush();

        $grouph = new Groupe();
        $grouph->setReference("VIII");
        $grouph->setGroupe("HUISSERIE");
        $groupg->setDevis($devis);
        $manager->persist($grouph);
        $manager->flush();

        $lig = new Ligne();
        $lig->setDesignation("<p>PROPOSITION 1</p>");
        $lig->setDevis($devis);
        $lig->setUnite("F");
        $lig->setQuantite(1);
        $lig->setPu(0);
        $lig->setUser($this->getMaster());
        $lig->setReference("7.1");
        $lig->setChantier($devis->getChantier());
        $lig->setType(1);
        $lig->setRemise(0);
        $lig->setGroupe($grouph);
        $manager->persist($lig);
        $manager->flush();

        $lig2 = new Ligne();
        $lig2->setDesignation("<p>PROPOSITION 2</p>");
        $lig2->setDevis($devis);
        $lig2->setUnite("F");
        $lig2->setQuantite(1);
        $lig2->setPu(0);
        $lig2->setUser($this->getMaster());
        $lig2->setReference("7.2");
        $lig2->setChantier($devis->getChantier());
        $lig2->setType(1);
        $lig2->setRemise(0);
        $lig2->setGroupe($grouph);
        $manager->persist($lig2);
        $manager->flush();

        $groupi = new Groupe();
        $groupi->setReference("IX");
        $groupi->setGroupe("ELECTRICITE");
        $groupi->setDevis($devis);
        $manager->persist($groupi);
        $manager->flush();

        $li1 = new Ligne();
        $li1->setDesignation("<p>PROPOSITION 1</p>");
        $li1->setDevis($devis);
        $li1->setUnite("F");
        $li1->setQuantite(1);
        $li1->setPu(0);
        $li1->setUser($this->getMaster());
        $li1->setReference("7.1");
        $li1->setChantier($devis->getChantier());
        $li1->setType(1);
        $li1->setRemise(0);
        $li1->setGroupe($groupi);
        $manager->persist($li1);
        $manager->flush();

        $li2 = new Ligne();
        $li2->setDesignation("<p>PROPOSITION 2</p>");
        $li2->setDevis($devis);
        $li2->setUnite("F");
        $li2->setQuantite(1);
        $li2->setPu(0);
        $li2->setUser($this->getMaster());
        $li2->setReference("7.2");
        $li2->setChantier($devis->getChantier());
        $li2->setType(1);
        $li2->setRemise(0);
        $li2->setGroupe($groupi);
        $manager->persist($li2);
        $manager->flush();

        $groupj = new Groupe();
        $groupj->setReference("X");
        $groupj->setGroupe("SANITAIRE");
        $groupj->setDevis($devis);
        $manager->persist($groupj);
        $manager->flush();

        $lia1 = new Ligne();
        $lia1->setDesignation("<p>PROPOSITION 1</p>");
        $lia1->setDevis($devis);
        $lia1->setUnite("F");
        $lia1->setQuantite(1);
        $lia1->setPu(0);
        $lia1->setUser($this->getMaster());
        $lia1->setReference("7.1");
        $lia1->setChantier($devis->getChantier());
        $lia1->setType(1);
        $lia1->setRemise(0);
        $lia1->setGroupe($groupj);
        $manager->persist($lia1);
        $manager->flush();

        $lib2 = new Ligne();
        $lib2->setDesignation("<p>PROPOSITION 2</p>");
        $lib2->setDevis($devis);
        $lib2->setUnite("F");
        $lib2->setQuantite(1);
        $lib2->setPu(0);
        $lib2->setUser($this->getMaster());
        $lib2->setReference("7.2");
        $lib2->setChantier($devis->getChantier());
        $lib2->setType(1);
        $lib2->setRemise(0);
        $lib2->setGroupe($groupj);
        $manager->persist($lib2);
        $manager->flush();

        $groupk = new Groupe();
        $groupk->setReference("XI");
        $groupk->setGroupe("PEINTURE");
        $groupk->setDevis($devis);
        $manager->persist($groupk);
        $manager->flush();

        $liak1 = new Ligne();
        $liak1->setDesignation("<p>PROPOSITION 1</p>");
        $liak1->setDevis($devis);
        $liak1->setUnite("F");
        $liak1->setQuantite(1);
        $liak1->setPu(0);
        $liak1->setUser($this->getMaster());
        $liak1->setReference("7.1");
        $liak1->setChantier($devis->getChantier());
        $liak1->setType(1);
        $liak1->setRemise(0);
        $liak1->setGroupe($groupk);
        $manager->persist($liak1);
        $manager->flush();

        $libk2 = new Ligne();
        $libk2->setDesignation("<p>PROPOSITION 2</p>");
        $libk2->setDevis($devis);
        $libk2->setUnite("F");
        $libk2->setQuantite(1);
        $libk2->setPu(0);
        $libk2->setUser($this->getMaster());
        $libk2->setReference("7.2");
        $libk2->setChantier($devis->getChantier());
        $libk2->setType(1);
        $libk2->setRemise(0);
        $libk2->setGroupe($groupk);
        $manager->persist($libk2);
        $manager->flush();

        $groupek = new Groupe();
        $groupek->setReference("XII");
        $groupek->setGroupe("AMENAGEMENT EXTERIEUR");
        $groupek->setDevis($devis);
        $manager->persist($groupek);
        $manager->flush();

        $liake1 = new Ligne();
        $liake1->setDesignation("<p>PROPOSITION 1</p>");
        $liake1->setDevis($devis);
        $liake1->setUnite("F");
        $liake1->setQuantite(1);
        $liake1->setPu(0);
        $liake1->setUser($this->getMaster());
        $liake1->setReference("7.1");
        $liake1->setChantier($devis->getChantier());
        $liake1->setType(1);
        $liake1->setRemise(0);
        $liake1->setGroupe($groupek);
        $manager->persist($liake1);
        $manager->flush();

        $libke2 = new Ligne();
        $libke2->setDesignation("<p>PROPOSITION 2</p>");
        $libke2->setDevis($devis);
        $libke2->setUnite("F");
        $libke2->setQuantite(1);
        $libke2->setPu(0);
        $libke2->setUser($this->getMaster());
        $libke2->setReference("7.2");
        $libke2->setChantier($devis->getChantier());
        $libke2->setType(1);
        $libke2->setRemise(0);
        $libke2->setGroupe($groupek);
        $manager->persist($libke2);
        $manager->flush();


        $action = '<p>Création d\'une estimation sur le N°: ' . $devis->getIddevis() . '</p> ' . $devis->getDevReference();
        $history = new Historique();
        $history->setUser($this->getMaster());
        $history->setDobyuser($this->getUser());
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();

        $this->ajourDevis($devis);

        return $this->json(['result' => $devis->getId()], 201);

    }

    #[Route('/get/{id}', name: 'getDevies', methods: ['POST'])]
    public function getDevis($id): JsonResponse
    {
        $repoDevis = $this->doctrine->getRepository(Devis::class);

        $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$devis) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
    }

    #[Route('/gets/{idchan}', name: 'getDevis', methods: ['POST'])]
    public function getsDevis($idchan): JsonResponse
    {
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $chantier = $repoChantier->findOneBy(['id' => $idchan, 'user' => $this->getMaster()]);
        $devis = $repoDevis->findByyChan($this->getMaster(), $chantier);

        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
    }

    #[Route('/devischantier/{id}', name: 'getDevisChantier', methods: ['POST'])]
    public function getDevisChantier(int $id): JsonResponse
    {
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $devis = $chantier->getDevis();

        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
    }

    #[Route('/convertir/{id}', name: 'convertirDevis')]
    public function convertir(int $id)
    {
        $manager = $this->doctrine->getManager();
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        $planning = new Planning();
        $planning->setClient($devis->getClient());
        $planning->setChantier($devis->getChantier());
        $planning->setUser($this->getMaster());
        $planning->setPlanning($devis->getChantier()->getClient()->getNomClient()." | ".$devis->getChantier()->getNomChantier());
        $planning->setProgression(0);
        $planning->setRang(1);
        $manager->persist($planning);
        $manager->flush();

        $i = 1;
        foreach ($devis->getGroupe() as $gr) {
            $section = new Section();
            $section->setChantier($devis->getChantier());
            $section->setPlanning($planning);
            $section->setEtat('faire');
            if ($devis->getAaref() === "oui") {
                $section->setRang($gr->getReference());
            }else{
                $section->setRang($i);
            }
            $section->setLibelle($gr->getGroupe());
            $section->setUser($this->getMaster());
            $manager->persist($section);
            $manager->flush();

            foreach ($devis->getLignes() as $ligne) {
                if ($ligne->getGroupe()->getId() == $gr->getId()) {
                    $tache = new Tache();
                    $tache->setUser($this->getMaster());
                    $tache->setEtat("À FAIRE");
                    $tache->setChantier($devis->getChantier());
                    $tache->setFin(new \DateTime('NOW'));
                    $tache->setDebut(new \DateTime('NOW'));
                    $tache->setLibelle(strip_tags($ligne->getDesignation()));
                    $tache->setSection($section);
                    $tache->setOrdre($ligne->getCode());
                    $manager->persist($tache);
                    $manager->flush();
                    $i++;
                }

            }
        }

        return $this->redirectToRoute('gestion', ['id' => $devis->getChantier()->getId()]);
    }

    #[Route('/adde', name: 'addeDevis', methods: ['POST'])]
    public function addeDevis(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        date_default_timezone_set('Africa/Abidjan');

        $th = 0;
        $ttc = 0;
        $rem = 0;
        $vtva = 0;

        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $repoCompte = $this->doctrine->getRepository(Compte::class);
        $compte = $repoCompte->findOneBy(['user' => $this->getMaster()]);

        $devisform = new Devis();
        $devisform->setDate(new \DateTime('NOW'));

        $devisform->setTotalht($th);
        $devisform->setTotalttc($ttc);
        $devisform->setVtva($vtva);
        $devisform->setVremise($rem);
        $devisform->setUser($this->getMaster());
        $devisform->setDobyuser($this->getUser());
        $devisform->setEtat('save');
        $json = $this->getJson($request);

        $formDevis = $this->formFactory->createNamed('', DevisType::class, $devisform, [
            'client' => $devisform->getClient(),
            'type' => 'devischantier',
            'user' => $this->getMaster()
        ]);

        $formDevis->submit($json);
        $formDevis->handleRequest($request);
        if ($this->isCsrfTokenValid('addDevisToken', $json['token'])) {
            $chantier = $repoChantier->findOneBy(['id' => $json['chantier']]);
            $devisform->setChantier($chantier);
            $devisform->setClient($chantier->getClient());
            $der = $repoDevis->findBy(['user' => $this->getMaster()], ['id' => 'DESC'], 1);
            if ($der) {
                $rang = $der[0]->getRang() + 1;
                $devisform->setRang($rang);
                $devisform->setIddevis(($compte->getCompteDevis() . $rang));
            } else {
                $devisform->setRang(1);
                $devisform->setIddevis(($compte->getCompteDevis() . '1'));
            }
            $devisform->setAcomrage(0);
            $devisform->setFinition(0);
            $devisform->setTrc(0);
            $devisform->setProrata(0);
            $devisform->setGarantie(0);
            $manager->persist($devisform);
            $manager->flush();

            $return[] = ["iddevis" => $devisform->getId(), "idchantier" => $chantier->getId()];

            $action = '<p>Création du devis N° : ' . $devisform->getIddevis() . '</p> ' . $devisform->getDevReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();
            return $this->json(['result' => $return], 201);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route('/update/{id}', name: 'updateDevis', methods: ['PUT'])]
    public function updateDevis(int $id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        $repoDevis = $this->doctrine->getRepository(Devis::class);

        $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$devis) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $json = $this->getJson($request);
        $formDevis = $this->formFactory->createNamed('', DevisType::class, $devis, [
            'client' => $devis->getClient(),
            'type' => 'devis'
        ]);
        $formDevis->submit($json);
        $formDevis->handleRequest($request);
        if ($formDevis->isSubmitted() && $formDevis->isValid()) {
            $manager->persist($devis);
            $manager->flush();
        }

        date_default_timezone_set('Africa/Abidjan');
        $action = '<p>Mise à jour du Devis N° : ' . $devis->getIddevis() . '</p> ' . $devis->getDevReference();
        $history = new Historique();
        $history->setUser($this->getMaster());
        $history->setDobyuser($this->getUser());
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();

        $this->ajourDevis($devis);
        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
    }

    #[Route('/basetva/{id}', name: 'basetvaDevis', methods: ['PUT'])]
    public function addBase(int $id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoDevis = $this->doctrine->getRepository(Devis::class);

        $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$devis) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $json = $this->getJson($request);
        $formba = $this->formFactory->createNamed('', DevisType::class, $devis, [
            'type' => 'base'
        ]);

        $formba->submit($json);
        $formba->handleRequest($request);
        if ($formba->isSubmitted() && $formba->isValid()) {
            $manager->persist($devis);
            $manager->flush();
            $this->ajourDevis($devis, $this->doctrine);
            return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route('/remise/{id}', name: 'addRemise', methods: ['POST'])]
    public function addRemise(int $id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoDevis = $this->doctrine->getRepository(Devis::class);

        $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$devis) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $json = $this->getJson($request);
        $formrem = $this->formFactory->createNamed('', DevisType::class, $devis, [
            'type' => 'remise'
        ]);
        $formrem->submit($json);
        $formrem->handleRequest($request);
        if ($formrem->isSubmitted() && $formrem->isValid()) {
            $manager->persist($devis);
            $manager->flush();
            $this->ajourDevis($devis, $this->doctrine);
            return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route('/valider/{id}', name: 'validedevis', methods: ['GET'])]
    public function validedevis(int $id)
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoRelever = $this->doctrine->getRepository(Relever::class);
        $repoRecap = $this->doctrine->getRepository(Recap::class);
        $repoUser = $this->doctrine->getRepository(User::class);

        // RECUPERE LE DEVIS
        $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$devis) {
            return $this->redirectToRoute('logout');
        }

        $devis->setVabyuser($this->getUser());
        $chantier = $devis->getChantier();
        $relev = $repoRelever->findOneBy(['devis' => $devis, 'chantier' => $chantier, 'type' => 1]);
        if ($devis->getEtat() === 'save') {

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p><u>Le devis N° : <a href=/crm/devis/'.$devis->getId() .'/'.$devis->getChantier()->getId().'>' . $devis->getIddevis() . '</a> a été validé:</u><br># '. $devis->getClient()->getNomClient().'<br># '. $devis->getChantier()->getNomChantier().
                '<br> par:<span class=col-blue bolo600>'.$this->getUser()->getNom().' '.$this->getUser()->getPrenoms().'</span></p>';
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);
            foreach ($comptes as $compte){
                $alerte = new Alerte();
                $alerte->setAlerte($action);
                $alerte->setUser($this->getMaster());
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setOwner($compte);
                $alerte->setTitre("DEVIS VALIDÉ");
                $alerte->setRef($devis->getId());
                $alerte->setStatut("false");
                $alerte->setType("devis");
                $manager->persist($alerte);
                $manager->flush();
            }

            $alerte = new Alerte();
            $alerte->setAlerte($action);
            $alerte->setUser($this->getMaster());
            $alerte->setDate(new \DateTime('NOW'));
            $alerte->setOwner($this->getMaster());
            $alerte->setTitre("DEVIS VALIDÉ");
            $alerte->setRef($devis->getId());
            $alerte->setStatut("false");
            $alerte->setType("devis");
            $manager->persist($alerte);
            $manager->flush();



            if (!$relev) {
                $releve = new Relever();
                $releve->setDevis($devis);
                $releve->setChantier($devis->getChantier());
                $releve->setMontant($devis->getTotalttc());
                $releve->setDate(new \DateTime('NOW'));
                $releve->setType(1);
                $releve->setClient($devis->getClient());
                $devis->setEtat('valide');
                $cout = $chantier->getCout() + $devis->getTotalttc();
                $chantier->setCout($cout);
                $manager->persist($chantier);
                $manager->persist($devis);
                $manager->persist($releve);
                $manager->flush();
                $u = 0;

                $deviss = $chantier->getDevis();
                foreach ($deviss as $dev) {
                    if ($dev->getEtat() == "valide") {
                        $u = $u + 1;
                    }
                }
                if ($u > 0 && $chantier->getEtat() == "etude") {
                    $chantier->setEtat("encours");
                }
                $manager->persist($chantier);
                $manager->flush();

            } else {
                $relev->setMontant($devis->getTotalttc());
                $devis->setEtat('valide');
                $manager->persist($chantier);
                $manager->persist($devis);
                $manager->persist($relev);
                $manager->flush();

                $u = 0;
                $cout = 0;
                $deviss = $chantier->getDevis();
                foreach ($deviss as $dev) {
                    if ($dev->getEtat() == "valide") {
                        $u = $u + 1;
                        $cout = $devis->getTotalttc() + $cout;
                    }
                }
                if ($u > 0 && $chantier->getEtat() == "etude") {
                    $chantier->setEtat("encours");
                    $chantier->setCout($cout);
                }

                $manager->persist($chantier);
                $manager->flush();
            }

            $tt = [];
            foreach ($devis->getLignes() as $ligne) {
                if ($ligne->getArticle()) {
                    $article = $ligne->getArticle();
                    if ($article->getComposer()) {
                        $bonn = $article->getComposer();
                        foreach ($bonn->getLignes() as $lign) {
                            $tt[] = $lign->getArticle()->getId();
                        }
                    }
                }
            }
            $result = array_unique($tt);
            foreach ($result as $x) {
                $i = 0;
                foreach ($devis->getLignes() as $ligne) {
                    if ($ligne->getArticle()) {
                        $article = $ligne->getArticle();
                        if ($article->getComposer()) {
                            $bonn = $article->getComposer();
                            foreach ($bonn->getLignes() as $lign) {
                                if ((int)$x === (int)$lign->getArticle()->getId()) {
                                    $rep = $repoRecap->findOneBy(['chantier' => $chantier, 'article' => $lign->getArticle()]);
                                    if (!$rep) {
                                        $recap = new Recap();
                                        $recap->setUser($this->getMaster());
                                        $recap->setDobyuser($this->getUser());
                                        $recap->setChantier($chantier);
                                        $recap->setQuantite($ligne->getQuantite() * $lign->getQuantite());
                                        $recap->setArticle($lign->getArticle());
                                        $manager->persist($recap);
                                    } else {
                                        $pp = ($ligne->getQuantite() * $lign->getQuantite()) + $rep->getQuantite();
                                        $rep->setQuantite($pp);
                                        $manager->persist($rep);
                                    }
                                    $manager->flush();
                                }
                            }
                        }
                    }
                }
            }

            return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);

        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route('/devalider/{id}', name: 'devalidedevis', methods: ['GET'])]
    public function devaldevis(int $id)
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoRelever = $this->doctrine->getRepository(Relever::class);

        // ON RECUPERE LE DEVIS COURANT, ON DECONNECTE SI USER DIFFERENT
        $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$devis) {
            return $this->redirectToRoute('logout');
        }
        $devis->setVabyuser($this->getUser());
        $chantier = $devis->getChantier();

        if ($devis->getEtat() === 'valide') {
            $relever = $repoRelever->findOneBy(['devis' => $devis, 'type' => 3]);
            if (!$relever) {
                $cout = $chantier->getCout() - $devis->getTotalttc();
                $chantier->setCout($cout);
                $devis->setEtat('save');
                $manager->persist($chantier);
                $manager->persist($devis);
                $manager->flush();

                date_default_timezone_set('Africa/Abidjan');
                $action = '<p>Dévalidation du devis N° : ' . $devis->getIddevis() . '</p> ' . $devis->getDevReference();
                $history = new Historique();
                $history->setUser($this->getMaster());
                $history->setDobyuser($this->getUser());
                $history->setDate(new \DateTime('NOW'));
                $history->setAction($action);
                $manager->persist($history);
                $manager->flush();


                $repoUser = $this->doctrine->getRepository(User::class);

                $actio = '<p><u>Le devis N° : <a href=/crm/devis/'.$devis->getId() .'/'.$devis->getChantier()->getId().'>' . $devis->getIddevis() . '</a> a été dévalidé:</u><br># '. $devis->getClient()->getNomClient().'<br># '. $devis->getChantier()->getNomChantier().
                    '<br> par:<span class=col-blue bolo600>'.$this->getUser()->getNom().' '.$this->getUser()->getPrenoms().'</span></p>';

                $comptes = $repoUser->findBy(['compte' => $this->getMaster()]);
                foreach ($comptes as $compte){
                    $alerte = new Alerte();
                    $alerte->setAlerte($actio);
                    $alerte->setUser($this->getMaster());
                    $alerte->setDate(new \DateTime('NOW'));
                    $alerte->setOwner($compte);
                    $alerte->setTitre("DEVIS DÉVALIDÉ");
                    $alerte->setRef($devis->getId());
                    $alerte->setStatut("false");
                    $alerte->setType("devis");
                    $manager->persist($alerte);
                    $manager->flush();
                }

                $alerte = new Alerte();
                $alerte->setAlerte($actio);
                $alerte->setUser($this->getMaster());
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setOwner($this->getMaster());
                $alerte->setTitre("DEVIS DÉVALIDÉ");
                $alerte->setRef($devis->getId());
                $alerte->setStatut("false");
                $alerte->setType("devis");
                $manager->persist($alerte);
                $manager->flush();

                $u = 0;
                $deviss = $chantier->getDevis();
                foreach ($deviss as $dev) {
                    if ($dev->getEtat() == "valide") {
                        $u = $u + 1;
                    }
                }
                if ($u == 0 && $chantier->getEtat() == "encours") {
                    $chantier->setEtat("etude");
                }
                $manager->persist($chantier);
                $manager->flush();

                return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
            }


            $deja = 0;
            foreach ($devis->getRelevers() as $relevalide) {
                if ($relevalide->getType() === 3) {
                    $deja = $relevalide->getMontant() + $deja;
                }
            }

            $cout = $chantier->getCout() - $devis->getTotalttc();
            $reglement = $chantier->getReglement() - $deja;
            $chantier->setCout($cout);
            $chantier->setReglement($reglement);
            $devis->setEtat('save');
            $manager->persist($devis);
            $manager->persist($chantier);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p>Dévalidation du devis N° : ' . $devis->getIddevis() . '</p> ' . $devis->getDevReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            $u = 0;
            $deviss = $chantier->getDevis();
            foreach ($deviss as $dev) {
                if ($dev->getEtat() == "valide") {
                    $u = $u + 1;
                }
            }
            if ($u == 0 && $chantier->getEtat() == "encours") {
                $chantier->setEtat("etude");
            }
            $manager->persist($chantier);
            $manager->flush();
            return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route('/del/{id}', name: 'delDevis', methods: ['DELETE'])]
    public function delDevis(int $id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$devis) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        if ($devis->getEtat() === 'save') {
            $cor = $repoCorbeille->findOneBy(['designation' => $devis->getId(), 'master' => $this->getMaster(), 'type' => 3]);
            if (!$cor) {
                date_default_timezone_set('Africa/Abidjan');
                $corbeille = new Corbeille();
                $corbeille->setDate(new \DateTime('NOW'));
                $corbeille->setDesignation($devis->getId());
                $corbeille->setMaster($this->getMaster());
                $corbeille->setDelby($this->getUser());
                $corbeille->setEtat('faible');
                $corbeille->setType('3');
                $manager->persist($corbeille);
                $manager->flush();
                $core = $repoCorbeille->findOneBy(['designation' => $devis->getId(), 'master' => $this->getMaster(), 'type' => 3]);
                $devis->setCorbeille($core);
                $manager->persist($devis);
                $manager->flush();

                date_default_timezone_set('Africa/Abidjan');
                $action = '<p>Suppression du Devis N° : ' . $devis->getIddevis() . '</p> ' . $devis->getDevReference();
                $history = new Historique();
                $history->setUser($this->getMaster());
                $history->setDobyuser($this->getUser());
                $history->setDate(new \DateTime('NOW'));
                $history->setAction($action);
                $manager->persist($history);
                $manager->flush();

                return $this->json(['result' => 'devis suprimé'], 200);
            }
        }
        return $this->json(['result' => 'erreur'], 400);
    }

    #[Route('/restaurer/{id}', name: 'restaureDevis', methods: ['GET'])]
    public function restaureDevis(int $id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$devis) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $corbeille = $repoCorbeille->findOneBy(['designation' => $devis->getId(), 'type' => '3']);
        if ($corbeille) {
            $devis->setCorbeille(null);
            $manager->persist($devis);
            $manager->flush();
            $manager->remove($corbeille);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p>Restauration du Devis N° : ' . $devis->getIddevis() . '</p> ' . $devis->getDevReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route('/deldefinitive/{id}', name: 'deldefDevis', methods: ['DELETE'])]
    public function deldefdevis(int $id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$devis) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $cor = $repoCorbeille->findOneBy(['designation' => $devis->getId(), 'master' => $this->getMaster(), 'type' => 3]);
        if ($cor) {

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p>Suppression du Devis N° : ' . $devis->getIddevis() . '</p> ' . $devis->getDevReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();


            if ($devis->getUser()->getCompte() === null) {
                $cor->setEtat('ultra');
                $manager->persist($cor);
                $manager->flush();
                return $this->json(['result' => 'Devis suprimé'], 204);
            } else {
                $cor->setEtat('fort');
                $manager->persist($cor);
                $manager->flush();
                return $this->json(['result' => 'Devis suprimé'], 204);
            }
        }
        return $this->json(['error' => 'Erreur'], 404);
    }

    #[Route('/deplacer/{id}/{idchantier}', name: 'depdevis', methods: ['GET'])]
    public function deplacerDevis(int $id, int $idchantier)
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $devis = $manager->getRepository(Devis::class)->findOneby(['id' => $id, 'user' => $this->getMaster()]);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoRelever = $this->doctrine->getRepository(Relever::class);

        if (!$devis) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $cchantier = $devis->getChantier();
        $check = $repoRelever->findOneBy(['devis' => $devis, 'chantier' => $cchantier]);

        // RECUPERE LE DEVIS
        if ($devis) {
            foreach ($devis->getRelevers() as $releve) {
                $releve->setChantier($devis->getChantier());
                $manager->persist($releve);
                $manager->flush();
            }
            $chantier = $repoChantier->findOneBy(['id' => $idchantier, 'user' => $this->getMaster()]);
            $devis->setChantier($chantier);
            $devis->setClient($chantier->getClient());

            if ($check) {
                $ccout = $cchantier->getCout() - $devis->getTotalttc();
                $cchantier->setCout($ccout);
                $cout = $chantier->getCout() + $devis->getTotalttc();
                $chantier->setCout($cout);
                $cchantier->setCout($ccout);
            }
            $manager->persist($chantier);
            $manager->persist($cchantier);
            $manager->persist($devis);
            $manager->flush();

            date_default_timezone_set('Africa/Abidjan');
            $action = '<p>Déplacement du devis N° : ' . $devis->getIddevis() . '<p> ' . $devis->getDevReference();
            $history = new Historique();
            $history->setUser($this->getMaster());
            $history->setDobyuser($this->getUser());
            $history->setDate(new \DateTime('NOW'));
            $history->setAction($action);
            $manager->persist($history);
            $manager->flush();

            return $this->json(['result' => 'devis deplacé'], 200);
        } else {
            return $this->json(['result' => 'echec'], 404);
        }
    }

    #[Route('/dupliquer/{id}', name: 'dupdevis', methods: ['GET'])]
    public function dupDevis($id)
    {
        date_default_timezone_set('Africa/Abidjan');

        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);

        // RECUPERE LE DEVIS
        $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$devis) {
            return $this->json(['result' => 'erreur'], 404);
        }

        $dudevis = new Devis();

        $der = $repoDevis->findBy(['user' => $this->getMaster()], ['id' => 'DESC'], 1);
        if ($der) {
            $rang = $der[0]->getRang() + 1;
            $dudevis->setRang($rang);
            $dudevis->setIddevis('DDD-' . $rang);
        } else {
            return $this->json(['result' => 'erreur'], 404);
        }


        $groupes = $repoGroupe->findBy(['devis' => $devis]);
        $dudevis->setZone($devis->getZone());
        $dudevis->setAarem($devis->getAarem());
        $dudevis->setPtva($devis->getPtva());
        $dudevis->setTva($devis->getTva());
        $dudevis->setEtat('save');
        $dudevis->setTotalht($devis->getTotalht());
        $dudevis->setVtva($devis->getVtva());
        $dudevis->setVremise($devis->getVremise());
        $dudevis->setTotalttc($devis->getTotalttc());
        $dudevis->setdevReference($devis->getDevReference());
        $dudevis->setDate(new \DateTime('NOW'));
        $dudevis->setChantier($devis->getChantier());
        $dudevis->setMonnaie($devis->getMonnaie());
        $dudevis->setClient($devis->getClient());
        $dudevis->setContact($devis->getContact());
        $dudevis->setConditions($devis->getConditions());
        $dudevis->setAbasetva($devis->getAbasetva());
        $dudevis->setModele($devis->getModele());
        $dudevis->setAaref($devis->getAaref());
        $dudevis->setUser($this->getMaster());
        $dudevis->setDobyuser($devis->getUser());
        $dudevis->setModel($devis->getModel());
        $dudevis->setMonnaie($devis->getMonnaie());
        if ($devis->getAbasetva() === 'oui') {
            $dudevis->setBasetva($devis->getBasetva());
        }

        $dudevis->setProrata($devis->getProrata());
        $dudevis->setFinition($devis->getFinition());
        $dudevis->setTrc($devis->getTrc());
        $dudevis->setGarantie($devis->getGarantie());


        $dudevis->setCode($devis->getCode());
        $manager->persist($dudevis);
        $manager->flush();

        foreach ($devis->getLignes() as $ligne) {
            if ($ligne->getGroupe() === null) {
                $lign = new Ligne();
                $lign->setDevis($dudevis);
                $lign->setReference($ligne->getReference());
                if ($ligne->getCode() !== null) {
                    $lign->setCode($ligne->getCode());
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
                $lign->setUser($ligne->getUser());
                $dudevis->setModele($devis->getModele());
                $manager->persist($lign);
                $manager->flush();
            }
        }


        foreach ($groupes as $groupe) {
            $group = new Groupe();
            $group->setGroupe($groupe->getGroupe());
            $group->setReference($groupe->getReference());
            $group->setDevis($dudevis);
            $manager->persist($group);
            $manager->flush();
            $negroupe = $repoGroupe->find($group);


            foreach ($groupe->getLignes() as $ligne) {
                $lign = new Ligne();
                $lign->setDevis($dudevis);
                $lign->setReference($ligne->getReference());
                if ($ligne->getCode() !== null) {
                    $lign->setCode($ligne->getCode());
                }
                $lign->setDesignation($ligne->getDesignation());
                $lign->setZone($ligne->getZone());
                $lign->setQuantite($ligne->getQuantite());
                $lign->setPu($ligne->getPu());
                $lign->setRemise($ligne->getRemise());
                $lign->setType($ligne->getType());
                $lign->setArticle($ligne->getArticle());
                $lign->setChantier($ligne->getChantier());
                $lign->setUser($ligne->getUser());
                $lign->setGroupe($negroupe);
                $lign->setUnite($ligne->getUnite());
                $manager->persist($lign);
                $manager->flush();
            }
        }

        date_default_timezone_set('Africa/Abidjan');
        $action = 'Duplication du Devis N° : ' . $devis->getIddevis() . ' ' . $devis->getDevReference();
        $history = new Historique();
        $history->setUser($this->getMaster());
        $history->setDobyuser($this->getUser());
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();

        return $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
    }

    #[Route('/vente/{id}', name: 'ventedevis', methods: ['POST'])]
    public function venteDevis(int $id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        date_default_timezone_set('Africa/Abidjan');

        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);

        $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if($devis->getRentabilite()){
            return $this->json(['result' => $devis->getRentabilite()->getId()], 201);
        }

        $dudevis = new Devis();
        $dudevis->setDate(new \DateTime('NOW'));
        $dudevis->setUser($this->getMaster());
        $dudevis->setDobyuser($this->getUser());
        $dudevis->setDevReference("Devis de vente N° ".$devis->getIddevis());

        $der = $repoDevis->findBy(['user' => $this->getMaster()], ['id' => 'DESC'], 1);
        if ($der) {
            $rang = $der[0]->getRang() + 1;
            $dudevis->setRang($rang);
            $dudevis->setIddevis("VTE-" . $rang);
        } else {
            $dudevis->setRang(1);
            $dudevis->setIddevis(("VTE-" . '1'));
        }

        $dudevis->setAcomrage(0);
        $dudevis->setFinition(0);
        $dudevis->setTrc(0);
        $dudevis->setProrata(0);
        $dudevis->setGarantie(0);

        $dudevis->setRentabilite($devis);
        $devis->setRentabilite($dudevis);


        $groupes = $repoGroupe->findBy(['devis' => $devis]);
        $dudevis->setZone($devis->getZone());
        $dudevis->setAarem($devis->getAarem());
        $dudevis->setType("vte");
        $dudevis->setPtva($devis->getPtva());
        $dudevis->setTva($devis->getTva());
        $dudevis->setEtat('save');
        $dudevis->setTotalht($devis->getTotalht());
        $dudevis->setVtva($devis->getVtva());
        $dudevis->setVremise($devis->getVremise());
        $dudevis->setTotalttc($devis->getTotalttc());
        $dudevis->setdevReference($devis->getDevReference());
        $dudevis->setDate(new \DateTime('NOW'));
        $dudevis->setChantier($devis->getChantier());
        $dudevis->setMonnaie($devis->getMonnaie());
        $dudevis->setClient($devis->getClient());
        $dudevis->setContact($devis->getContact());
        $dudevis->setConditions($devis->getConditions());
        $dudevis->setAbasetva($devis->getAbasetva());
        $dudevis->setModele($devis->getModele());
        $dudevis->setAaref($devis->getAaref());
        $dudevis->setUser($this->getMaster());
        $dudevis->setDobyuser($devis->getUser());
        $dudevis->setModel($devis->getModel());
        $dudevis->setMonnaie($devis->getMonnaie());
        if ($devis->getAbasetva() === 'oui') {
            $dudevis->setBasetva($devis->getBasetva());
        }

        $dudevis->setProrata($devis->getProrata());
        $dudevis->setFinition($devis->getFinition());
        $dudevis->setTrc($devis->getTrc());
        $dudevis->setGarantie($devis->getGarantie());

        $dudevis->setCode($devis->getCode());
        $manager->persist($dudevis);
        $manager->flush();

        foreach ($devis->getLignes() as $ligne) {
            if ($ligne->getGroupe() === null) {
                $lign = new Ligne();
                $lign->setDevis($dudevis);
                $lign->setReference($ligne->getReference());
                if ($ligne->getCode() !== null) {
                    $lign->setCode($ligne->getCode());
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
                $lign->setUser($ligne->getUser());
                $dudevis->setModele($devis->getModele());
                $manager->persist($lign);
                $manager->flush();
            }
        }
        foreach ($groupes as $groupe) {
            $group = new Groupe();
            $group->setGroupe($groupe->getGroupe());
            $group->setReference($groupe->getReference());
            $group->setDevis($dudevis);
            $manager->persist($group);
            $manager->flush();
            $negroupe = $repoGroupe->find($group);


            foreach ($groupe->getLignes() as $ligne) {
                $lign = new Ligne();
                $lign->setDevis($dudevis);
                $lign->setReference($ligne->getReference());
                if ($ligne->getCode() !== null) {
                    $lign->setCode($ligne->getCode());
                }
                $lign->setDesignation($ligne->getDesignation());
                $lign->setZone($ligne->getZone());
                $lign->setQuantite($ligne->getQuantite());
                $lign->setPu($ligne->getPu());
                $lign->setRemise($ligne->getRemise());
                $lign->setType($ligne->getType());
                $lign->setArticle($ligne->getArticle());
                $lign->setChantier($ligne->getChantier());
                $lign->setUser($ligne->getUser());
                $lign->setGroupe($negroupe);
                $lign->setUnite($ligne->getUnite());
                $manager->persist($lign);
                $manager->flush();
            }
        }

        $action = '<p>Création d\'un devis de vente sur le N°: ' . $devis->getIddevis() . '</p> ' . $devis->getDevReference();
        $history = new Historique();
        $history->setUser($this->getMaster());
        $history->setDobyuser($this->getUser());
        $history->setDate(new \DateTime('NOW'));
        $history->setAction($action);
        $manager->persist($history);
        $manager->flush();
        $this->ajourDevis($devis);

        return $this->json(['result' => $devis->getId()], 201);

    }

    #[Route('/{id}/{idchantier}', name: 'editdevis', requirements: ['id' => '\d+', 'idchantier' => '\d+'], methods: ['GET'])]
    #[Route('/groupe/{id}/{idgroupe}/{idchantier}', name: 'editgroupe')]
    #[Route('/ligne/{id}/{idligne}/{idchantier}', name: 'editlignedevis')]
    public function devis(int $idgroupe = null, int $idligne = null, int $id, int $idchantier)
    {

        // REPOSITORIES
        $repoLigne = $this->doctrine->getRepository(Ligne::class);
        $repoGroupe = $this->doctrine->getRepository(Groupe::class);
        $repoForme = $this->doctrine->getRepository(Forme::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $manager = $this->doctrine->getManager();

        // GESTION DE COMPTE
        date_default_timezone_set('Africa/Abidjan');
        $now = new \DateTime('NOW');
        $today = $now->format('Y-m-d H:i:s');


        // ON RECUPERE LE DEVIS
        $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        $chantier = $repoChantier->findOneBy(['id' => $idchantier, 'user' => $this->getMaster()]);
        if (!$devis || !$chantier) {
            return $this->redirectToRoute('logout');
        }


        // FORMULAIRE POUR LA MODIFICATION DU DEVIS
        $form = $this->formFactory->createNamed('', DevisType::class, $devis, [
            'client' => $chantier->getClient(),
            'type' => 'devis'
        ]);

        // VERIFIE SI UN GROUPE EST SELECTIONNÉ. ON CRÉE LE GROUPE OU ON RECUPERE LE GROUPE SELECTIONNÉ
        if ($idgroupe == null) {
            $groupe = new Groupe();
            $groupe->setDevis($devis);
        } else {
            $groupe = $repoGroupe->findOneBy(['id' => $idgroupe]);
        }

        // FORMULAIRE POUR CRÉER GROUPE
        $formGroupe = $this->formFactory->createNamed('', GroupeType::class, $groupe);


        // FORMULAIRE POUR CHOISIR UN ARTICLE
        $liggn = $repoLigne->findOneBy(['id' => $idligne, 'user' => $this->getUser()]);
        if (!$liggn) {
            $liggn = new Ligne();
            $liggn->setChantier($chantier);
            $liggn->setUser($this->getMaster());
            $liggn->setDevis($devis);
            $liggn->setRemise(0);
        }
        $formez = $this->formFactory->createNamed('', LignType::class, $liggn, [
            'devis' => $devis,
            'master' => $this->getMaster(),
        ]);


        // FORMULAIRE POUR AJOUTER UN ARTICLE DANS LE DEVIS -- AJOUTER UN ARTICLE
        // VERIFIE SI UNE LIGNE EST SELECTIONNÉE. ON CRÉE LA LIGNE OU ON RECUPERE LA LIGNE SELECTIONNÉE
        if ($idligne == null) {
            $ligne = new Ligne();
            $ligne->setRemise(0);
        } else {
            $ligne = $repoLigne->findOneBy(['id' => $idligne, 'devis' => $devis]);
        }
        $ligne->setChantier($chantier);
        $ligne->setDevis($devis);
        $ligne->setUser($this->getMaster());

        $forme = $this->formFactory->createNamed('', LigneType::class, $ligne, [
            'devis' => $devis,
        ]);


        // FORMULAIRE POUR LA BASE TVA
        $formba = $this->formFactory->createNamed('', DevisType::class, $devis, [
            'type' => 'base'
        ]);

        // FORMULAIRE POUR REMISE THT
        $formrem = $this->formFactory->createNamed('', DevisType::class, $devis, [
            'type' => 'remise'
        ]);

        // FORMULAIRE POUR DUPLIQUER
        $dudevis = new Devis();
        $dudevis->setDate(new \DateTime('NOW'));
        $dudevis->setTva('18');
        $dudevis->setDevReference($devis->getDevReference());
        // FORMULAIRE POUR DUPLIQUER UN DEVIS
        
        $formdup = $this->formFactory->createNamed('', DevisType::class, $dudevis, [
            'type' => 'dupliquer'
        ]);

        // ON RECUPERE LES GROUPES
        $listegroupe = $repoGroupe->findBy(
            ['devis' => $devis],
            ['reference' => 'ASC']);

        // ON RECUPERE TOUTES LIGNES DU DEVIS POURLE CALCUL DU MONTANT HT ET TTC
        $lignes = $repoLigne->findBy(['devis' => $devis], ['reference' => 'ASC']);

        // MISE EN FORME DU DEVIS
        $forte = $repoForme->findOneBy(['user' => $this->getUser(), 'used' => 'used']);
        $fortes = $repoForme->findBy(['user' => $this->getUser()]);
        $formes = $this->formFactory->createNamed('', FormeType::class, $forte);

        if ($forte->getDecolor() == null) {
            $forte->setDecolor("#4e73df");
            $manager->persist($forte);
            $manager->flush();
        }

        // CRÉE UN NOUVEAU DEVIS
        $nedevis = new Devis();
        $nedevis->setDate(new \DateTime('NOW'));
        $nedevis->setTva('18');
        $nedevis->setDevReference($chantier->getNomChantier());

        // FORMULAIRE DEVIS
        $formneDevis = $this->formFactory->createNamed('', DevisType::class, $nedevis, [
            'client' => $chantier->getClient(),
            'type' => 'devis'
        ]);

        $this->ajourDevis($devis);

        // DEVIS POUR REACT
        $dede = $devis->getRentabilite();
        $jsondevis = $this->json($devis, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
        $jsondede = $this->json($dede, 200, ['Content-Type' => 'application/json'], ['groups' => 'devis']);
        $jsonforme = $this->json($forte, 200, ['Content-Type' => 'application/json'], ['groups' => 'forme']);
        $jsonformes = $this->json($fortes, 200, ['Content-Type' => 'application/json'], ['groups' => 'forme']);
        $jsonusers = $this->json($this->getMaster(), 200, ['Content-Type' => 'application/json'], ['groups' => 'usa']);


        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        $nedecompte = new Decompte();
        $nedecompte->setUser($this->getMaster());
        $nedecompte->setDobyuser($this->getUser());
        $nedecompte->setDate(new \DateTime('NOW'));
        $nedecompte->setChantier($chantier);
        $nedecompte->setClient($chantier->getClient());
        $nedecompte->setEtat('save');
        $nedecompte->setProrata($devis->getProrata());
        $nedecompte->setFinition($devis->getFinition());
        $nedecompte->setTrc($devis->getTrc());
        $nedecompte->setAcompte($devis->getAcomrage());
        $nedecompte->setGarantie($devis->getGarantie());

        $formDecompte = $this->formFactory->createNamed('', DecompteType::class, $nedecompte, [
            'chantier' => $chantier,
            'type' => 'chantier'
        ]);

        $facture = new Facture();
        $facture->setUser($this->getMaster());
        $facture->setDobyuser($this->getUser());
        $facture->setDate(new \DateTime('NOW'));
        $facture->setChantier($chantier);
        $facture->setClient($chantier->getClient());
        $facture->setTva(18);
        $facture->setEtat('save');

        $formFacture = $this->formFactory->createNamed('', FactureType::class, $facture, [
            'chantier' => $chantier,
            'type' => 'devis',
        ]);

        return $this->render('content/devis.html.twig', [
            'formDevis' => $form->createView(),
            'forme' => $forme->createView(),
            'formez' => $formez->createView(),
            'formba' => $formba->createView(),
            'formrem' => $formrem->createView(),
            'formDup' => $formdup->createView(),
            'formGroup' => $formGroupe->createView(),
            'title' => 'CRÉER UN DEVIS | ' . $chantier->getNomChantier(),
            'editMode' => $id !== null,
            'groupe' => $groupe,
            'idgligne' => $idligne,
            'devis' => $devis,
            'chantier' => $chantier,
            'lignes' => $lignes,
            'listGroup' => $listegroupe,
            'ligne' => $ligne,
            'estmaster' => $this->getMaster() === $this->getUser(),
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'formes' => $formes->createView(),
            'formneDevis' => $formneDevis->createView(),
            'forte' => $forte,
            'jsondevis' => $jsondevis->getContent(),
            'jsondede' => $jsondede->getContent(),
            'jsonforme' => $jsonforme->getContent(),
            'jsonformes' => $jsonformes->getContent(),
            'jsonusers' => $jsonusers->getContent(),
            'history' => $historiques,
            'formDecompte' => $formDecompte->createView(),
            'formFacture' => $formFacture->createView(),
        ]);
    }
}
