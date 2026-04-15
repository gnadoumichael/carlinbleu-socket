<?php

namespace App\Controller;

use App\Entity\Beneficiaire;
use App\Entity\Client;
use App\Entity\Famille;
use App\Entity\Fournisseur;
use App\Entity\Historique;
use App\Entity\Materiel;
use App\Entity\MaterielBeneficiaire;
use App\Entity\MaterielChantier;
use App\Entity\Chantier;
use App\Entity\MatHistorique;
use App\Entity\User;
use App\Form\FamilleType;
use App\Form\FournisseurType;
use App\Form\MaterielType;
use App\Form\BeneficiaireType;
use Doctrine\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;


#[Route(path: '/crm/materiel')]
class MaterielController extends AbstractController
{

    private $formFactory;

    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    private function getJson(Request $request)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpException(400, 'Invalid json');
        }
        return $data;
    }

    public function getMaster()
    {
        //SECURITY
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        // REPOSITORIES
        $repoUser = $this->doctrine->getRepository(User::class);
        //GESTION DE COMPTE
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUsername()]);
        // VERIFIE SI COMPTE MASTER
        if ($use->getCompte() === null) {
            $master = $use;
        } else {
            $master = $repoUser->findOneBy(['id' => $use->getCompte()]);
        }
        return $master;
    }

    #[Route(path: '/add', name: 'addMateriel', methods: ['POST'])]
    public function addMateriel(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoMateriel = $this->doctrine->getRepository(Materiel::class);
        $materiel = new Materiel();
        $materiel->setUser($this->getMaster());
        $materiel->setDate(new \DateTime('NOW'));
        $materiel->setEtat('libre');
        $json = $this->getJson($request);
        $formMateriel = $this->formFactory->createNamed('', MaterielType::class, $materiel,
            ['user' => $this->getMaster()]);
        $formMateriel->submit($json);
        $formMateriel->handleRequest($request);
        if ($formMateriel->isSubmitted() && $formMateriel->isValid()) {
            $materiel->setReste($json['stock']);
            $manager->persist($materiel);
            $manager->flush();
            return $this->json(['result' => 'success'], 201);
        }
        return $this->json(['result' => 'echec'], 404);
    }

    #[Route(path: '/update/{id}', name: 'updateMateriel', methods: ['PUT'])]
    public function updateMateriel($id, Request $request): JsonResponse
    {

        $manager = $this->doctrine->getManager();
        $repoMateriel = $this->doctrine->getRepository(Materiel::class);

        $materiel = $repoMateriel->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        $json = $this->getJson($request);
        $formMateriel = $this->formFactory->createNamed('', MaterielType::class, $materiel,
            ['user' => $this->getMaster()]);

        $formMateriel->submit($json);
        $formMateriel->handleRequest($request);
        if ($formMateriel->isSubmitted() && $formMateriel->isValid()) {
            $reste = $materiel->getStock() - $materiel->getReste();
            $stock = $json["stock"];
            if ($stock >= $reste) {
                $materiel->setStock($stock);
                $materiel->setReste($stock - $reste);
            }
            if ($materiel->getReste() == 0) {
                $materiel->setEtat('occupe');
            } else {
                $materiel->setEtat('libre');
            }
            $manager->persist($materiel);
            $manager->flush();
            return $this->json(['result' => 'success'], 201);
        }
        return $this->json(['result' => 'echec'], 404);
    }

    #[Route(path: '/benef/update/{id}', name: 'updateBenef', methods: ['PUT'])]
    public function updateBenef(int $id, Request $request): JsonResponse
    {

        $manager = $this->doctrine->getManager();
        $repoMateriel = $this->doctrine->getRepository(Materiel::class);
        $repoMatChantier = $this->doctrine->getRepository(MaterielChantier::class);
        $repoBeneficiaire = $this->doctrine->getRepository(Beneficiaire::class);

        $benef = $repoBeneficiaire->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        $json = $this->getJson($request);
        $formBeneficiaire = $this->formFactory->createNamed('', BeneficiaireType::class, $benef, [
            'user' => $this->getMaster(),
        ]);

        $formBeneficiaire->submit($json);
        $formBeneficiaire->handleRequest($request);
        if ($formBeneficiaire->isSubmitted() && $formBeneficiaire->isValid()) {
            $manager->persist($benef);
            $manager->flush();
            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'echec'], 404);
    }

    #[Route(path: '/affmat/chantier', name: 'affecterMaterielChantier', methods: ['POST'])]
    public function affMatChantier(Request $request): JsonResponse
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repoMateriel = $this->doctrine->getRepository(Materiel::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $json = $this->getJson($request);

        if ($this->isCsrfTokenValid('affmatchantier', $json['token'])) {
            $materiels = $json['mate'];
            $chantier = $repoChantier->findOneBy(['id' => $json['chantier'], 'user' => $this->getMaster()]);
            if (!$chantier) {
                return $this->json(['result' => 'Erreur'], 404);
            }

            $materiel = $repoMateriel->findOneBy(['id' => $materiels, 'user' => $this->getMaster()]);
            if (!$materiel) {
                return $this->json(['result' => 'Erreur'], 404);
            }

            if ($materiel->getReste() > 0) {
                if ($materiel->getReste() >= $json['qte']) {
                    if (($materiel->getReste() - $json['qte']) == 0) {
                        $materiel->setEtat('occupe');
                    }
                    $matpro = new MaterielChantier();
                    $matpro->setChantier($chantier);
                    $matpro->setUser($this->getMaster());
                    $matpro->setDate(new \DateTime('NOW'));
                    $matpro->setMateriel($materiel);
                    $matpro->setMouvement('attribution');
                    $matpro->setQuantite($json['qte']);
                    $materiel->setReste($materiel->getReste() - $json['qte']);
                    $manager->persist($materiel);
                    $manager->persist($matpro);
                    $manager->flush();

                    $math = new MatHistorique();
                    $math->setReceveur($chantier->getNomChantier() . ' | ' . $chantier->getClient()->getNomClient());
                    $math->setUser($this->getMaster());
                    $math->setDate(new \DateTime('NOW'));
                    $math->setMateriel($materiel->getMateriel());
                    $math->setMouvement('attribution');
                    $math->setQuantite($json['qte']);
                    $manager->persist($math);
                    $manager->flush();

                }
            }

            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/attrmat/benef', name: 'attribuerMaterielBeneficiaire', methods: ['POST'])]
    public function attrMatBenef(Request $request): JsonResponse
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repoMateriel = $this->doctrine->getRepository(Materiel::class);
        $repoBeneficiaire = $this->doctrine->getRepository(Beneficiaire::class);

        $json = $this->getJson($request);

        if ($this->isCsrfTokenValid('attribuerMatBenef', $json['token'])) {
            $mate = $json['mate'];
            $beneficiaire = $repoBeneficiaire->findOneBy(['id' => $json['benef'], 'user' => $this->getMaster()]);
            if (!$beneficiaire) {
                return $this->json(['result' => 'Erreur'], 404);
            }

            $materiel = $repoMateriel->findOneBy(['id' => $mate, 'user' => $this->getMaster()]);
            if (!$materiel) {
                return $this->json(['result' => 'Erreur'], 404);
            }

            if ($materiel->getReste() > 0) {
                if ($materiel->getReste() >= $json['qte']) {
                    if (($materiel->getReste() - $json['qte']) == 0) {
                        $materiel->setEtat('occupe');
                    }
                    $matbenef = new MaterielBeneficiaire();
                    $matbenef->setBeneficiaire($beneficiaire);
                    $matbenef->setUser($this->getMaster());
                    $matbenef->setDate(new \DateTime('NOW'));
                    $matbenef->setMateriel($materiel);
                    $matbenef->setMouvement('attribution');
                    $matbenef->setQuantite($json['qte']);
                    $materiel->setReste($materiel->getReste() - $json['qte']);
                    $manager->persist($materiel);
                    $manager->persist($matbenef);
                    $manager->flush();

                    $math = new MatHistorique();
                    $math->setReceveur($beneficiaire->getNoms());
                    $math->setUser($this->getMaster());
                    $math->setDate(new \DateTime('NOW'));
                    $math->setMateriel($materiel->getMateriel());
                    $math->setMouvement('attribution');
                    $math->setQuantite($json['qte']);
                    $manager->persist($math);
                    $manager->flush();


                    return $this->json(['result' => 'success'], 200);
                }
            }
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/restituer/benef', name: 'restituerBenef', methods: ['POST'])]
    public function restbeneficiaire(Request $request): JsonResponse
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repoMatBeneficiaire = $this->doctrine->getRepository(MaterielBeneficiaire::class);
        $json = $this->getJson($request);

        if ($this->isCsrfTokenValid('restBenef', $json['token'])) {
            if ($json['qte'] <= 0) {
                return $this->json(['result' => 'erreur'], 404);
            }

            $matBeneficiaire = $repoMatBeneficiaire->findOneBy(['user' => $this->getMaster(), 'id' => $json['mate']]);

            $materiel = $matBeneficiaire->getMateriel();
            $beneficiaire = $matBeneficiaire->getBeneficiaire();

            if ($json['qte'] > $matBeneficiaire->getQuantite()) {
                return $this->json(['result' => 'erreur'], 404);
            }

            $materiel->setReste($materiel->getReste() + $json['qte']);
            $matBeneficiaire->setQuantite($matBeneficiaire->getQuantite() - $json['qte']);
            $manager->persist($matBeneficiaire);
            $manager->persist($materiel);

            $matbenef = new MaterielBeneficiaire();
            $matbenef->setBeneficiaire($beneficiaire);
            $matbenef->setUser($this->getMaster());
            $matbenef->setDate(new \DateTime('NOW'));
            $matbenef->setMateriel($materiel);
            $matbenef->setMouvement('restitution');
            $matbenef->setQuantite($json['qte']);

            $manager->persist($matbenef);
            $manager->flush();

            $math = new MatHistorique();
            $math->setReceveur($beneficiaire->getNoms());
            $math->setUser($this->getMaster());
            $math->setDate(new \DateTime('NOW'));
            $math->setMateriel($materiel->getMateriel());
            $math->setMouvement('restitution');
            $math->setQuantite($json['qte']);
            $manager->persist($math);
            $manager->flush();
            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/restitue/chantier', name: 'restituerchantier', methods: ['POST'])]
    public function restchantier(Request $request): JsonResponse
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repoMatChantier = $this->doctrine->getRepository(MaterielChantier::class);
        $json = $this->getJson($request);

        if ($this->isCsrfTokenValid('restChantier', $json['token'])) {
            if ($json['qte'] <= 0) {
                return $this->json(['result' => 'erreur'], 404);
            }

            $matChantier = $repoMatChantier->findOneBy(['user' => $this->getMaster(), 'id' => $json['mat']]);

            $materiel = $matChantier->getMateriel();
            $chantier = $matChantier->getChantier();

            if ($json['qte'] > $matChantier->getQuantite()) {
                return $this->json(['result' => 'erreur'], 404);
            }

            $materiel->setReste($materiel->getReste() + $json['qte']);
            $matChantier->setQuantite($matChantier->getQuantite() - $json['qte']);
            $manager->persist($matChantier);
            $manager->persist($materiel);

            $matbenef = new MaterielChantier();
            $matbenef->setChantier($chantier);
            $matbenef->setUser($this->getMaster());
            $matbenef->setDate(new \DateTime('NOW'));
            $matbenef->setMateriel($materiel);
            $matbenef->setMouvement('restitution');
            $matbenef->setQuantite($json['qte']);

            $manager->persist($matbenef);
            $manager->flush();

            $math = new MatHistorique();
            $math->setReceveur($chantier->getNomChantier() . ' | ' . $chantier->getClient()->getNomClient());
            $math->setUser($this->getMaster());
            $math->setDate(new \DateTime('NOW'));
            $math->setMateriel($materiel->getMateriel());
            $math->setMouvement('restitution');
            $math->setQuantite($json['qte']);
            $manager->persist($math);
            $manager->flush();
            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/del/{id}', name: 'delMateriel', requirements: ['id' => '\d+'], methods: ['DELETE'])]
    public function delMateriel($id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();
        $repoMateriel = $this->doctrine->getRepository(Materiel::class);
        $repoMatChantier = $this->doctrine->getRepository(MaterielChantier::class);

        $materiel = $repoMateriel->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$materiel) {
            return $this->json(['error' => 'Erreur'], 404);
        }

        $matchan = $materiel->getMaterielChantiers();
        if ($materiel->getStock() == $materiel->getReste()) {
            foreach ($matchan as $mm){
                $manager->remove($mm);
                $manager->flush();
            }
            $manager->remove($materiel);
            $manager->flush();
            return $this->json(['result' => 'success'], 204);
        }
        return $this->json(['error' => 'Erreur'], 404);
    }

    #[Route(path: '/benef/add', name: 'addBeneficiaire', methods: ['POST'])]
    public function addBeneficiaire(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $beneficiaire = new Beneficiaire();
        $beneficiaire->setUser($this->getMaster());
        $json = $this->getJson($request);

        $formBeneficiaire = $this->formFactory->createNamed('', BeneficiaireType::class, $beneficiaire, [
            'user' => $this->getMaster(),
        ]);

        $formBeneficiaire->submit($json);
        $formBeneficiaire->handleRequest($request);
        if ($formBeneficiaire->isSubmitted() && $formBeneficiaire->isValid()) {
            $manager->persist($beneficiaire);
            $manager->flush();
            return $this->json(['result' => $request->getContent()], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }
    
    #[Route(path: '/benef/del/{id}', name: 'delBenef', requirements: ['id' => '\d+'], methods: ['DELETE'])]
    public function delBenef($id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();
        $repoBeneficiaire = $this->doctrine->getRepository(Beneficiaire::class);
        $repoMatBeneficiaire = $this->doctrine->getRepository(MaterielBeneficiaire::class);

        $benef = $repoBeneficiaire->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $matbenef = $repoMatBeneficiaire->findOneBy(['beneficiaire' => $benef, 'user' => $this->getMaster()]);

        if (!$benef) {
            return $this->json(['error' => 'Erreur'], 404);
        }

        if (!$matbenef) {
            $manager->remove($benef);
            $manager->flush();
            return $this->json(['result' => 'success'], 204);
        }

        return $this->json(['error' => 'Erreur'], 404);
    }

    #[Route(path: '/fournisseur/del/{id}', name: 'delfournisseur', requirements: ['id' => '\d+'], methods: ['DELETE'])]
    public function delFour($id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();
        $repoFour = $this->doctrine->getRepository(Fournisseur::class);

        $four = $repoFour->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$four && count($four->getMateriels()) >= 1) {
            return $this->json(['error' => 'Erreur'], 404);
        }

        $manager->remove($four);
        $manager->flush();

        return $this->json(['result' => 'success'], 200);

    }

    #[Route(path: '/', name: 'materiel')]
    #[Route(path: '/{id}', name: 'editmateriel')]
    #[Route(path: '/beneficiaire/{idbenef}', name: 'editBenef', requirements: ['idbene' => '\d+'])]
    #[Route(path: '/famille/{idfamille}', name: 'editerfamille')]
    #[Route(path: '/fournisseur/{idfourn}', name: 'editerfourn')]
    public function index($id = null, $idbenef = null, $idfamille = null, $idfourn = null): Response
    {

        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoFamille = $this->doctrine->getRepository(Famille::class);
        $repoMateriel = $this->doctrine->getRepository(Materiel::class);
        $repoMatChantier = $this->doctrine->getRepository(MaterielChantier::class);
        $repoMatBeneficiaire = $this->doctrine->getRepository(MaterielBeneficiaire::class);
        $repoBeneficiaire = $this->doctrine->getRepository(Beneficiaire::class);
        $repoFourn = $this->doctrine->getRepository(Fournisseur::class);
        $repoMatHistorique = $this->doctrine->getRepository(MatHistorique::class);

        $manager = $this->doctrine->getManager();

        // RECUPERE TOUS LES CLIENTS
        date_default_timezone_set('Africa/Abidjan');

        // AJOUTER UN MATÉRIEL
        $materiel = $repoMateriel->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$materiel) {
            $materiel = new Materiel();
            $materiel->setUser($this->getMaster());
            $materiel->setDate(new \DateTime('NOW'));
            $materiel->setStock(1);
        }

        $formMateriel = $this->formFactory->createNamed('', MaterielType::class, $materiel,
            ['user' => $this->getMaster()]);

        $materiels = $repoMateriel->findBy(['user' => $this->getMaster()]);
        $matChantier = $repoMatChantier->findBy(['user' => $this->getMaster(), 'mouvement' => 'attribution']);
        $matBeneficiaire = $repoMatBeneficiaire->findBy(['user' => $this->getMaster(), 'mouvement' => 'attribution']);
        $matHistorique = $repoMatHistorique->findBy(['user' => $this->getMaster()]);

        foreach ($matBeneficiaire as $mat) {
            if ($mat->getQuantite() == 0) {
                $manager->remove($mat);
                $manager->flush();
            }
        }

        foreach ($matChantier as $mat) {
            if ($mat->getQuantite() < 0) {
                $manager->remove($mat);
                $manager->flush();
            }
        }

        $beneficiaire = $repoBeneficiaire->findOneBy(['id' => $idbenef, 'user' => $this->getMaster()]);
        $beneficiaires = $repoBeneficiaire->findBy(['user' => $this->getMaster()]);

        // ON CRÉE UN NOUVEAU SUPERVISEUR S IL N'EXISTE PAS
        if (!$beneficiaire) {
            $beneficiaire = new Beneficiaire();
            $beneficiaire->setUser($this->getMaster());
        }

        //FORMULAIRE AJOUTER ET MODIFIER UN PERSONNEL
        $formBeneficiaire = $this->formFactory->createNamed('', BeneficiaireType::class, $beneficiaire, [
            'user' => $this->getMaster(),
        ]);

        // FAMILLE D'ARTICLES ET SON FORMULAIRE
        if ($idfamille === null) {
            $famille = new Famille();
            $famille->setUser($this->getMaster());
        } else {
            $famille = $repoFamille->findOneBy(['id' => $idfamille, 'user' => $this->getMaster()]);
        }
        $forme = $this->formFactory->createNamed('', FamilleType::class, $famille);

        // FOURNISSEUR D'ARTICLES ET SON FORMULAIRE
        if ($idfourn === null) {
            $fournisseur = new Fournisseur();
            $fournisseur->setUser($this->getMaster());
        } else {
            $fournisseur = $repoFourn->findOneBy(['id' => $idfourn]);
        }
        $formfourn = $this->formFactory->createNamed('', FournisseurType::class, $fournisseur, [
            'type' => 'materiel',
        ]);

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        return $this->render('content/materiel.html.twig', [
            'controller_name' => 'MaterielController',
            'page' => 'materiel',
            'forme' => $forme->createView(),
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'beneficiaires' => $beneficiaires,
            'formMateriel' => $formMateriel->createView(),
            'materiels' => $materiels,
            'beneficiaire' => $beneficiaire,
            'materiel' => $materiel,
            'matChantier' => $matChantier,
            'matBeneficiaire' => $matBeneficiaire,
            'matHistorique' => $matHistorique,
            'formBeneficiaire' => $formBeneficiaire->createView(),
            'editBenef' => $idbenef !== null,
            'editFamille' => $famille->getId() !== null,
            'formfourn' => $formfourn->createView(),
            'editFourn' => $fournisseur->getId() !== null,
            'famille' => $famille,
            'fournisseur' => $fournisseur,
            'history' => $historiques
        ]);
    }
}
