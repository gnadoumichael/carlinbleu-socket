<?php

namespace App\Controller;

use App\Entity\Beneficiaire;
use App\Entity\Chantier;
use App\Entity\Corbeille;
use App\Entity\Famille;
use App\Entity\Fournisseur;
use App\Entity\Materiel;
use App\Entity\MaterielBeneficiaire;
use App\Entity\MaterielChantier;
use App\Entity\MatHistorique;
use App\Entity\Personnel;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;


#[Route(path: '/api/materiel')]
class ApiMaterielController extends AbstractController
{

    #[Route('/get', name: 'api_materiel')]
    public function getMateriels(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }
        $repoMateriel = $doctrine->getRepository(Materiel::class);
        $materiels = $repoMateriel->findBy(['user' => $master], ['materiel' => 'ASC']);
        return $this->json($materiels, 200, ['Content-Type' => 'application/json'], ['groups' => 'materiels']);
    }

    #[Route('/add/{mat}/{idfam}/{idfourn}/{stock}', name: 'api_add_materiel', methods: ['POST'])]
    public function addMateriels(string $mat, int $idfam = null, int $idfourn = null, int $stock,
                                 Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoFamille = $doctrine->getRepository(Famille::class);
        $repoFournisseur = $doctrine->getRepository(Fournisseur::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $apmateriel = $serializer->deserialize($apjson, Materiel::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $materiel = new Materiel();

        if ($idfam != 0) {
            $famille = $repoFamille->findOneBy(['id' => $idfam, 'user' => $master]);
            $materiel->setFamille($famille);
        }

        if ($idfourn != 0) {
            $fournisseur = $repoFournisseur->findOneBy(['id' => $idfourn, 'user' => $master]);
            $materiel->setFournisseur($fournisseur);
        }

        $materiel->setUser($master);
        $materiel->setCode($apmateriel->getCode());
        $materiel->setEtat('libre');
        $materiel->setMateriel($mat);
        $materiel->setDate($apmateriel->getDate());
        $materiel->setReste($stock);
        $materiel->setStock($stock);
        $manager->persist($materiel);
        $manager->flush();

        return $this->json($materiel, 200, ['Content-Type' => 'application/json'], ['groups' => 'materiels']);

    }

    #[Route('/update/{id}/{mat}/{idfam}/{idfourn}/{stock}', name: 'api_upd_materiel')]
    public function updMateriels(int $id, string $mat, int $idfam, int $idfourn, int $stock, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoMateriel = $doctrine->getRepository(Materiel::class);
        $repoFamille = $doctrine->getRepository(Famille::class);
        $repoFournisseur = $doctrine->getRepository(Fournisseur::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $apmateriel = $serializer->deserialize($apjson, Materiel::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $famille = $repoFamille->findOneBy(['id' => $idfam, 'user' => $master]);
        $fournisseur = $repoFournisseur->findOneBy(['id' => $idfourn, 'user' => $master]);
        $materiel = $repoMateriel->findOneBy(['id' => $id, 'user' => $master]);

        $materiel->setUser($master);
        $materiel->setMateriel($mat);
        $materiel->setCode($apmateriel->getCode());
        $materiel->setFamille($famille);
        $materiel->setFournisseur($fournisseur);
        $reste = $materiel->getStock() - $materiel->getReste();

        if($stock >= $reste ){
            $materiel->setStock($stock);
            $materiel->setReste($stock - $reste);
        }
        if($materiel->getReste() == 0){
            $materiel->setEtat('occupe');
        }else{
            $materiel->setEtat('libre');
        }

        $manager->persist($materiel);
        $manager->flush();

        return $this->json($materiel, 200, ['Content-Type' => 'application/json'], ['groups' => 'materiels']);
    }


    #[Route('/delete/{id}', name: 'api_del_materiel')]
    public function delMateriels(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoMateriel = $doctrine->getRepository(Materiel::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $materiel = $repoMateriel->findOneBy(['id' => $id, 'user' => $master]);

        if($materiel->getStock() == $materiel->getReste()){
            $manager->remove($materiel);
            $manager->flush();
            $materiels = $repoMateriel->findBy(['user' => $master], ['materiel' => 'ASC']);
            return $this->json($materiels, 204, ['Content-Type' => 'application/json'], ['groups' => 'materiels']);
        }
        return $this->json(['error' => 'Erreur'], 404);
    }

    #[Route('/fournisseur/add/{fou}', name: 'api_add_fournisseur_materiel')]
    public function adderFournisseur(string $fou, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoMateriel = $doctrine->getRepository(Materiel::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $fournisseur = $serializer->deserialize($apjson, Fournisseur::class, 'json');


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $fournisseur->setFournisseur($fou);
        $fournisseur->setUser($master);
        $fournisseur->setType(2);
        $manager->persist($fournisseur);
        $manager->flush();

        $materiels = $repoMateriel->findBy(['user' => $master], ['materiel' => 'ASC']);

        return $this->json($materiels, 200, ['Content-Type' => 'application/json'], ['groups' => 'materiels']);
    }

    #[Route('/fournisseur/update/{id}/{fou}', name: 'api_upd_fournisseur_materiel')]
    public function updFournisseur(int $id, string $fou, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoMateriel = $doctrine->getRepository(Materiel::class);
        $repoFournisseur = $doctrine->getRepository(Fournisseur::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $four = $serializer->deserialize($apjson, Fournisseur::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $fournisseur = $repoFournisseur->findOneBy(['id' => $id, 'user' => $master]);

        $fournisseur->setFournisseur($fou);
        $fournisseur->setUser($master);
        $fournisseur->setTelephone($four->getTelephone());
        $fournisseur->setMobile($four->getMobile());
        $fournisseur->setMail($four->getMail());
        $fournisseur->setAdresse($four->getAdresse());
        $fournisseur->setType(2);
        $manager->persist($fournisseur);
        $manager->flush();

        $materiels = $repoMateriel->findBy(['user' => $master], ['materiel' => 'ASC']);

        return $this->json($materiels, 200, ['Content-Type' => 'application/json'], ['groups' => 'materiels']);
    }

    #[Route('/fournisseur/delete/{id}', name: 'api_del_fournisseur_materiel')]
    public function delFournisseur(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoMateriel = $doctrine->getRepository(Materiel::class);
        $repoFournisseur = $doctrine->getRepository(Fournisseur::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $fournisseur = $repoFournisseur->findOneBy(['id' => $id, 'user' => $master]);

        $manager->remove($fournisseur);
        $manager->flush();

        $materiels = $repoMateriel->findBy(['user' => $master], ['materiel' => 'ASC']);

        return $this->json($materiels, 200, ['Content-Type' => 'application/json'], ['groups' => 'materiels']);
    }

    #[Route('/famille/add/{fam}', name: 'api_add_famille_materiel')]
    public function adderFamilles(string $fam, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoMateriel = $doctrine->getRepository(Materiel::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $famille = new Famille();
        $famille->setUser($master);
        $famille->setType(2);
        $famille->setFamille($fam);
        $manager->persist($famille);
        $manager->flush();

        $materiels = $repoMateriel->findBy(['user' => $master], ['materiel' => 'ASC']);

        return $this->json($materiels, 200, ['Content-Type' => 'application/json'], ['groups' => 'materiels']);
    }

    #[Route('/famille/update/{id}/{fam}', name: 'api_upd_famille_materiel')]
    public function updFamilles(int $id, string $fam, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoMateriel = $doctrine->getRepository(Materiel::class);
        $repoFamille = $doctrine->getRepository(Famille::class);

        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $famille = $repoFamille->findOneBy(['id' => $id, 'user' => $master]);

        $famille->setUser($master);
        $famille->setType(2);
        $famille->setFamille($fam);
        $manager->persist($famille);
        $manager->flush();

        $materiels = $repoMateriel->findBy(['user' => $master], ['materiel' => 'ASC']);

        return $this->json($materiels, 200, ['Content-Type' => 'application/json'], ['groups' => 'materiels']);
    }

    #[Route('/famille/del/{id}', name: 'api_del_famille_materiel')]
    public function delFamille(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoMateriel = $doctrine->getRepository(Materiel::class);
        $repoFamille = $doctrine->getRepository(Famille::class);
        $repoCorbeille = $doctrine->getRepository(Corbeille::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $famille = $repoFamille->findOneBy(['id' => $id, 'user' => $master]);

        $cor = $repoCorbeille->findOneBy(['designation' => $famille->getId(), 'master' => $master, 'type' => 10]);
        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($famille->getId());
            $corbeille->setMaster($master);
            $corbeille->setEtat('faible');
            $corbeille->setType('10');
            $manager->persist($corbeille);
            $manager->flush();
            $core = $repoCorbeille->findOneBy(['designation' => $famille->getId(), 'master' => $master, 'type' => 10]);
            $famille->setCorbeille($core);
            $manager->persist($famille);
            $manager->flush();

            $materiels = $repoMateriel->findBy(['user' => $master], ['materiel' => 'ASC']);
            return $this->json($materiels, 204, ['Content-Type' => 'application/json'], ['groups' => 'materiels']);
        }
        return $this->json(['result' => 'erreur'], 400);
    }

    #[Route('/famille/get', name: 'api_get_famille_materiel')]
    public function getFamillesMat(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoFamille = $doctrine->getRepository(Famille::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $familles = $repoFamille->findBy(['user' => $master, 'type' => 2], ['famille' => 'ASC']);

        return $this->json($familles, 200, ['Content-Type' => 'application/json'], ['groups' => 'familles']);
    }

    #[Route('/fournisseur/get', name: 'api_get_fournisseur_materiel')]
    public function getFournisseurMat(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoFournisseur = $doctrine->getRepository(Fournisseur::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $fournisseurs = $repoFournisseur->findBy(['user' => $master, 'type' => 2], ['fournisseur' => 'ASC']);

        return $this->json($fournisseurs, 200, ['Content-Type' => 'application/json'], ['groups' => 'fournisseurs']);

    }

    #[Route('/benef/get', name: 'api_get_benef')]
    public function getBenef(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoBeneficiaire = $doctrine->getRepository(Beneficiaire::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $benefs = $repoBeneficiaire->findBy(['user' => $master], ['noms' => 'ASC']);

        return $this->json($benefs, 200, ['Content-Type' => 'application/json'], ['groups' => 'benef']);
    }

    #[Route('/benef/add/{idbenef}/{typebenef}', name: 'api_add_benef', methods: ['POST'])]
    public function addBenef(
        int $idbenef,
        string $typebenef,
        Request $request,
        SerializerInterface $serializer,
        ManagerRegistry $doctrine
    ) {
        $repoUser = $doctrine->getRepository(User::class);
        $repoPersonnel = $doctrine->getRepository(Personnel::class);
        $repoFournisseur = $doctrine->getRepository(Fournisseur::class);
        $repoBenef = $doctrine->getRepository(Beneficiaire::class);
        $manager = $doctrine->getManager();

        // 🔹 Utilisateur
        $user = $serializer->deserialize($request->getContent(), User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if (!$apuser) {
            return $this->json(['result' => 'user_invalide'], 401);
        }

        $master = $apuser->getCompte()
            ? $repoUser->find($apuser->getCompte())
            : $apuser;

        if (!$master) {
            return $this->json(['result' => 'compte_introuvable'], 404);
        }

        if (!in_array($typebenef, ['personnel', 'prestataire'])) {
            return $this->json(['result' => 'type_invalide'], 400);
        }

        $benef = new Beneficiaire();
        $benef->setUser($master);
        $benef->setTypeBenef($typebenef);

        // ================= PERSONNEL =================
        if ($typebenef === 'personnel') {

            $personnel = $repoPersonnel->findOneBy([
                'user' => $master,
                'id'   => $idbenef
            ]);

            if (!$personnel) {
                return $this->json(['result' => 'personnel_inexistant'], 404);
            }

            $exist = $repoBenef->findOneBy([
                'user' => $master,
                'personnel' => $personnel
            ]);

            if ($exist) {
                return $this->json(['result' => 'beneficiaire_existant'], 409);
            }

            $benef->setPersonnel($personnel);
            $benef->setNoms($personnel->getNoms());
            $benef->setFonction($personnel->getFonction());
            $benef->setContacts($personnel->getContact());
        }

        // ================= PRESTATAIRE =================
        if ($typebenef === 'prestataire') {

            $prestataire = $repoFournisseur->findOneBy([
                'user' => $master,
                'id'   => $idbenef
            ]);

            if (!$prestataire) {
                return $this->json(['result' => 'prestataire_inexistant'], 404);
            }

            $exist = $repoBenef->findOneBy([
                'user' => $master,
                'fournisseur' => $prestataire
            ]);

            if ($exist) {
                return $this->json(['result' => 'beneficiaire_existant'], 409);
            }

            $benef->setFournisseur($prestataire);
            $benef->setNoms($prestataire->getFournisseur());
            $benef->setFonction($prestataire->getFonction());
            $benef->setContacts($prestataire->getMobile());
        }

        $manager->persist($benef);
        $manager->flush();

        return $this->json(
            $benef,
            201,
            ['Content-Type' => 'application/json'],
            ['groups' => 'benef']
        );
    }


    #[Route('/benef/update/{id}/{contacts}', name: 'api_upd_benef')]
    public function updBenef(int $id, string $contacts, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoBeneficiaire = $doctrine->getRepository(Beneficiaire::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $benef = $serializer->deserialize($apjson, Beneficiaire::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $benefe = $repoBeneficiaire->findOneBy(['id' => $id, 'user' => $master]);
        $benefe->setContacts($contacts);
        $benefe->setFonction($benef->getFonction());
        $benefe->setUser($master);
        $manager->persist($benefe);
        $manager->flush();

        return $this->json(['result' => 'success'], 200);
    }

    #[Route('/benef/delete/{id}', name: 'api_del_benef')]
    public function delBenef(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoBeneficiaire = $doctrine->getRepository(Beneficiaire::class);
        $repoMateriel = $doctrine->getRepository(Materiel::class);
        $repoMatBeneficiaire = $doctrine->getRepository(MaterielBeneficiaire::class);


        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $benefe = $repoBeneficiaire->findOneBy(['id' => $id, 'user' => $master]);
        $matbenef = $repoMatBeneficiaire->findOneBy(['beneficiaire' => $benefe, 'user' => $master]);
        if(!$matbenef) {
            $manager->remove($benefe);
            $manager->flush();
            $materiels = $repoMateriel->findBy(['user' => $master], ['materiel' => 'ASC']);
            return $this->json($materiels, 200, ['Content-Type' => 'application/json'], ['groups' => 'materiels']);
        }
        return $this->json(['error' => 'Erreur'], 404);
    }

    #[Route('/matchan/get', name: 'api_get_matchan')]
    public function getMatChan(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoMatChan = $doctrine->getRepository(MaterielChantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $matchan = $repoMatChan->findBu(['user' => $master]);

        return $this->json($matchan, 200, ['Content-Type' => 'application/json'], ['groups' => 'matchan']);
    }

    #[Route('/matchan/add/{idchan}/{idmat}/{qte}', name: 'api_add_matchan')]
    public function addMatChan(int $idchan, int $idmat, int $qte, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        // MANAGER
        $manager = $doctrine->getManager();

        // REPOSITORIES
        $repoMateriel = $doctrine->getRepository(Materiel::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);
        $repoUser = $doctrine->getRepository(User::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['id' => $idchan, 'user' => $master]);
        $materiel = $repoMateriel->findOneBy(['id' => $idmat, 'user' => $master]);

        if ($materiel->getReste() > 0) {
            if ($materiel->getReste() >= $qte) {
                if (($materiel->getReste() - $qte) == 0) {
                    $materiel->setEtat('occupe');
                }
                $matpro = new MaterielChantier();
                $matpro->setChantier($chantier);
                $matpro->setUser($master);
                $matpro->setDate(new \DateTime('NOW'));
                $matpro->setMateriel($materiel);
                $matpro->setMouvement('attribution');
                $matpro->setQuantite($qte);
                $materiel->setReste($materiel->getReste() - $qte);
                $manager->persist($materiel);
                $manager->persist($matpro);
                $manager->flush();

                $math = new MatHistorique();
                $math->setReceveur($chantier->getNomChantier() . ' | ' . $chantier->getClient()->getNomClient());
                $math->setUser($master);
                $math->setDate(new \DateTime('NOW'));
                $math->setMateriel($materiel->getMateriel());
                $math->setMouvement('attribution');
                $math->setQuantite($qte);
                $manager->persist($math);
                $manager->flush();
                return $this->json(['result' => 'success'], 200);
            }
            return $this->json(['result' => 'erreur'], 404);
        }
        return $this->json(['result' => 'erreur'], 404);

    }

    #[Route('/matbenef/add/{idbenef}/{idmat}/{qte}', name: 'api_add_matbenef')]
    public function addMatBenef(int $idbenef, int $idmat, int $qte, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        // MANAGER
        $manager = $doctrine->getManager();

        // REPOSITORIES
        $repoMateriel = $doctrine->getRepository(Materiel::class);
        $repoBeneficiaire = $doctrine->getRepository(Beneficiaire::class);
        $repoUser = $doctrine->getRepository(User::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $beneficiaire = $repoBeneficiaire->findOneBy(['id' => $idbenef, 'user' => $master]);
        $materiel = $repoMateriel->findOneBy(['id' => $idmat, 'user' => $master]);
            if ($materiel->getReste() > 0) {
                if ($materiel->getReste() >= $qte) {
                    if (($materiel->getReste() - $qte) == 0) {
                        $materiel->setEtat('occupe');
                    }
                    $matbenef = new MaterielBeneficiaire();
                    $matbenef->setBeneficiaire($beneficiaire);
                    $matbenef->setUser($master);
                    $matbenef->setDate(new \DateTime('NOW'));
                    $matbenef->setMateriel($materiel);
                    $matbenef->setMouvement('attribution');
                    $matbenef->setQuantite($qte);
                    $materiel->setReste($materiel->getReste() - $qte);
                    $manager->persist($materiel);
                    $manager->persist($matbenef);
                    $manager->flush();

                    $math = new MatHistorique();
                    $math->setReceveur($beneficiaire->getNoms());
                    $math->setUser($master);
                    $math->setDate(new \DateTime('NOW'));
                    $math->setMateriel($materiel->getMateriel());
                    $math->setMouvement('attribution');
                    $math->setQuantite($qte);
                    $manager->persist($math);
                    $manager->flush();

                    return $this->json(['result' => 'success'], 200);
                }
            }
        return $this->json(['result' => 'erreur'], 404);

    }

    #[Route('/matbenef/get', name: 'api_get_matbeneef')]
    public function getMatBenef(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoMatBenef = $doctrine->getRepository(MaterielBeneficiaire::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $matbenef = $repoMatBenef->findBu(['user' => $master]);

        return $this->json($matbenef, 200, ['Content-Type' => 'application/json'], ['groups' => 'matbenef']);
    }

    #[Route('/mathisto/get', name: 'api_get_mathisto')]
    public function getMatHisto(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoMatHisto = $doctrine->getRepository(MatHistorique::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $mathisto = $repoMatHisto->findBy(['user' => $master]);

        return $this->json($mathisto, 200, ['Content-Type' => 'application/json'], ['groups' => 'mathisto']);
    }

}
