<?php

namespace App\Controller;

use App\Entity\Corbeille;
use App\Entity\Domaine;
use App\Entity\Droit;
use App\Entity\Galerie;
use App\Entity\Client;
use App\Entity\Historique;
use App\Entity\Typear;
use App\Entity\User;
use App\Form\UserType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;


#[Route(path: '/crm/parametre')]
class ParametreController extends AbstractController
{

    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }
    private function getJson(Request $request)
    {
        $data = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpException(400, 'Invalid json');
        }
        return $data;
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
    public function jourDroits(User $user): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoDroit = $this->doctrine->getRepository(Droit::class);

        if($this->getUser()->getCompte() === null){
            $droit = new Droit();
            $droit->setPour($this->getUser());
            $droit->setUser($this->getMaster());
            $droit->setAfaire("ADMINISTRATEUR DES COMPTES");
            $droit->setActions("oui");
            $droit->setLier("admin");
            $droit->setGgroup("admin");
            $manager->persist($droit);
            $manager->flush();
        }

        if(!$repoDroit->findOneBy(["pour"=>$user, 'lier' => "admin"])){
            $droit = new Droit();
            $droit->setPour($user);
            $droit->setUser($this->getMaster());
            $droit->setAfaire("ADMINISTRATEUR DES COMPTES");
            $droit->setActions("non");
            $droit->setLier("admin");
            $droit->setGgroup("admin");
            $manager->persist($droit);
            $manager->flush();
        }
        if(!$repoDroit->findOneBy(["pour"=>$user, 'lier' => "comptable"])){
            $droit = new Droit();
            $droit->setPour($user);
            $droit->setUser($this->getMaster());
            $droit->setAfaire("COMPTE COMPTABLE");
            $droit->setActions("non");
            $droit->setLier("comptable");
            $droit->setGgroup("comptable");
            $manager->persist($droit);
            $manager->flush();
        }

        if(!$repoDroit->findOneBy(["pour"=>$user, 'lier' => "voir_page_chantier"])){
            $droit = new Droit();
            $droit->setPour($user);
            $droit->setUser($this->getMaster());
            $droit->setAfaire("CONSULTER LES CHANTIERS OPTION COMPTABLILTÉ");
            $droit->setActions("oui");
            $droit->setLier("voir_page_chantier");
            $droit->setGgroup("chantier");
            $manager->persist($droit);
            $manager->flush();
        }
        if(!$repoDroit->findOneBy(["pour"=>$user, 'lier' => "add_chantier"])){
            $droit = new Droit();
            $droit->setPour($user);
            $droit->setUser($this->getMaster());
            $droit->setAfaire("AJOUTER UN CHANTIER");
            $droit->setActions("oui");
            $droit->setLier("add_chantier");
            $droit->setGgroup("chantier");
            $manager->persist($droit);
            $manager->flush();
        }
        if(!$repoDroit->findOneBy(["pour"=>$user, 'lier' => "upd_chantier"])){
            $droit = new Droit();
            $droit->setPour($user);
            $droit->setUser($this->getMaster());
            $droit->setAfaire("MODIFIER UN CHANTIER");
            $droit->setActions("oui");
            $droit->setLier("upd_chantier");
            $droit->setGgroup("chantier");
            $manager->persist($droit);
            $manager->flush();
        }
        if(!$repoDroit->findOneBy(["pour"=>$user, 'lier' => "del_chantier"])){
            $droit = new Droit();
            $droit->setPour($user);
            $droit->setUser($this->getMaster());
            $droit->setAfaire("SUPPRIMER UN CHANTIER");
            $droit->setActions("oui");
            $droit->setLier("del_chantier");
            $droit->setGgroup("chantier");
            $manager->persist($droit);
            $manager->flush();
        }


        if(!$repoDroit->findOneBy(["pour"=>$user, 'lier' => "add_client"])){
            $droit = new Droit();
            $droit->setPour($user);
            $droit->setUser($this->getMaster());
            $droit->setAfaire("AJOUTER UN CLIENT");
            $droit->setActions("oui");
            $droit->setLier("add_client");
            $droit->setGgroup("client");
            $manager->persist($droit);
            $manager->flush();
        }
        if(!$repoDroit->findOneBy(["pour"=>$user, 'lier' => "upd_client"])){
            $droit = new Droit();
            $droit->setPour($user);
            $droit->setUser($this->getMaster());
            $droit->setAfaire("MODIFIER UN CLIENT");
            $droit->setActions("oui");
            $droit->setLier("upd_client");
            $droit->setGgroup("client");
            $manager->persist($droit);
            $manager->flush();
        }
        if(!$repoDroit->findOneBy(["pour"=>$user, 'lier' => "del_client"])){
            $droit = new Droit();
            $droit->setPour($user);
            $droit->setUser($this->getMaster());
            $droit->setAfaire("SUPPRIMER UN CLIENT");
            $droit->setActions("oui");
            $droit->setLier("del_client");
            $droit->setGgroup("client");
            $manager->persist($droit);
            $manager->flush();
        }


        if(!$repoDroit->findOneBy(["pour"=>$user, 'lier' => "add_devis"])){
            $droit = new Droit();
            $droit->setPour($user);
            $droit->setUser($this->getMaster());
            $droit->setAfaire("CRÉER UN DEVIS");
            $droit->setActions("oui");
            $droit->setLier("add_devis");
            $droit->setGgroup("devis");
            $manager->persist($droit);
            $manager->flush();
        }
        if(!$repoDroit->findOneBy(["pour"=>$user, 'lier' => "upd_devis"])){
            $droit = new Droit();
            $droit->setPour($user);
            $droit->setUser($this->getMaster());
            $droit->setAfaire("MODIFIER UN DEVIS");
            $droit->setActions("oui");
            $droit->setLier("upd_devis");
            $droit->setGgroup("devis");
            $manager->persist($droit);
            $manager->flush();
        }
        if(!$repoDroit->findOneBy(["pour"=>$user, 'lier' => "del_devis"])){
            $droit = new Droit();
            $droit->setPour($user);
            $droit->setUser($this->getMaster());
            $droit->setAfaire("SUPPRIMER UN DEVIS");
            $droit->setActions("oui");
            $droit->setLier("del_devis");
            $droit->setGgroup("devis");
            $manager->persist($droit);
            $manager->flush();
        }



        if(!$repoDroit->findOneBy(["pour"=>$user, 'lier' => "add_besoin"])){
            $droit = new Droit();
            $droit->setPour($user);
            $droit->setUser($this->getMaster());
            $droit->setAfaire("AJOUTER UN BESOIN");
            $droit->setActions("oui");
            $droit->setLier("add_besoin");
            $droit->setGgroup("besoin");
            $manager->persist($droit);
            $manager->flush();
        }
        if(!$repoDroit->findOneBy(["pour"=>$user, 'lier' => "upd_besoin"])){
            $droit = new Droit();
            $droit->setPour($user);
            $droit->setUser($this->getMaster());
            $droit->setAfaire("MODIFIER UN BESOIN");
            $droit->setActions("oui");
            $droit->setLier("upd_besoin");
            $droit->setGgroup("besoin");
            $manager->persist($droit);
            $manager->flush();
        }
        if(!$repoDroit->findOneBy(["pour"=>$user, 'lier' => "del_besoin"])){
            $droit = new Droit();
            $droit->setPour($user);
            $droit->setUser($this->getMaster());
            $droit->setAfaire("SUPPRIMER UN BESOIN");
            $droit->setActions("oui");
            $droit->setLier("del_besoin");
            $droit->setGgroup("besoin");
            $manager->persist($droit);
            $manager->flush();
        }
        if(!$repoDroit->findOneBy(["pour"=>$user, 'lier' => "cloturer_besoin"])){
            $droit = new Droit();
            $droit->setPour($user);
            $droit->setUser($this->getMaster());
            $droit->setAfaire("CLOTÛRER UN BESOIN");
            $droit->setActions("oui");
            $droit->setLier("cloturer_besoin");
            $droit->setGgroup("besoin");
            $manager->persist($droit);
            $manager->flush();
        }
        if(!$repoDroit->findOneBy(["pour"=>$user, 'lier' => "commenter_besoin"])){
            $droit = new Droit();
            $droit->setPour($user);
            $droit->setUser($this->getMaster());
            $droit->setAfaire("COMMENTER UN BESOIN");
            $droit->setActions("oui");
            $droit->setLier("commenter_besoin");
            $droit->setGgroup("besoin");
            $manager->persist($droit);
            $manager->flush();
        }

        return $this->json(['result' => 'success'], 200);
    }


    #[Route(path: '/sousupd/upd/{id}', name: 'updSouscompte', methods: ['PUT'])]
    public function updsouscompte(int $id, UserPasswordHasherInterface $passwordHasher, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoUser = $this->doctrine->getRepository(User::class);

        $compte = $repoUser->findOneBy(['id'=>$id]);

        $json = $this->getJson($request);
        $formcompte = $this->formFactory->createNamed('', UserType::class, $compte,
            ['type' => 'sous']);

        $formcompte->submit($json);
        $formcompte->handleRequest($request);
        if ($this->isCsrfTokenValid('addSousToken', $json['token'])) {

            $hash = $passwordHasher->hashPassword(
                $compte,
                $json['password']
            );
            $compte->setPassword($hash);


            if ($json['droit'] == 1) {
                $compte->setRoles(["ROLE_COMPTA"]);
            }
            if ($json['droit'] == 2) {
                $compte->setRoles(["ROLE_TECHNI"]);
            }
            if ($json['droit'] == 3) {
                $compte->setRoles(["ROLE_TECHNI","ROLE_COMPTA"]);
            }
            if ($json['droit'] == 4) {
                $compte->setRoles(["ROLE_ADMIN","ROLE_COMPTA"]);
            }

            $manager->persist($compte);
            $manager->flush();
            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/sous/add', name: 'addSouscompte', methods: ['POST'])]
    public function addsouscompte(UserPasswordHasherInterface $passwordHasher, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoDroit = $this->doctrine->getRepository(Droit::class);

        $compte = new User();
        $compte->setCompte($this->getUser());
        $compte->setBegdate($this->getMaster()->getBegdate());
        $compte->setEnddate($this->getMaster()->getEnddate());
        $compte->setSociete($this->getMaster()->getSociete());
        $compte->setPays($this->getMaster()->getPays());
        $compte->setRoles(["ROLE_ADMIN","ROLE_COMPTA"]);

        $json = $this->getJson($request);
        $formcompte = $this->formFactory->createNamed('', UserType::class, $compte,
            ['type' => 'sous']);

        $formcompte->submit($json);
        $formcompte->handleRequest($request);
        if ($this->isCsrfTokenValid('addSousToken', $json['token'])) {
            $hash = $passwordHasher->hashPassword(
                $compte,
                $json['password']
            );
            $compte->setPassword($hash);
            $manager->persist($compte);
            $manager->flush();

            $droits = $repoDroit->findBy(['pour' => $this->getUser()]);
            if(count($droits) == 0 && $this->getUser()->getCompte() === null){
                $droit = new Droit();
                $droit->setPour($this->getUser());
                $droit->setUser($this->getMaster());
                $droit->setAfaire("ADMINISTRATEUR DES COMPTES");
                $droit->setActions("oui");
                $droit->setLier("admin");
                $droit->setGgroup("admin");
                $manager->persist($droit);
                $manager->flush();
            }
            if(count($droits) == 0 && $this->getUser()->getCompte() !== null){

                $droit = new Droit();
                $droit->setPour($this->getUser());
                $droit->setUser($this->getMaster());
                $droit->setAfaire("CONSULTER LES CHANTIERS OPTION COMPTABLILTÉ");
                $droit->setActions("oui");
                $droit->setLier("voir_page_chantier");
                $droit->setGgroup("chantier");
                $manager->persist($droit);
                $manager->flush();


                $droit = new Droit();
                $droit->setPour($this->getUser());
                $droit->setUser($this->getMaster());
                $droit->setAfaire("ADMINISTRATEUR DES COMPTES");
                $droit->setActions("oui");
                $droit->setLier("admin");
                $droit->setGgroup("admin");
                $manager->persist($droit);
                $manager->flush();

                $droit = new Droit();
                $droit->setPour($this->getUser());
                $droit->setUser($this->getMaster());
                $droit->setAfaire("COMPTE COMPTABLE");
                $droit->setActions("oui");
                $droit->setLier("comptable");
                $droit->setGgroup("comptable");
                $manager->persist($droit);
                $manager->flush();

                $droit = new Droit();
                $droit->setPour($this->getUser());
                $droit->setUser($this->getMaster());
                $droit->setAfaire("AJOUTER UN CLIENT");
                $droit->setActions("oui");
                $droit->setLier("add_client");
                $droit->setGgroup("client");
                $manager->persist($droit);
                $manager->flush();

                $droit = new Droit();
                $droit->setPour($this->getUser());
                $droit->setUser($this->getMaster());
                $droit->setAfaire("MODIFIER UN CLIENT");
                $droit->setActions("oui");
                $droit->setLier("upd_client");
                $droit->setGgroup("client");
                $manager->persist($droit);
                $manager->flush();

                $droit = new Droit();
                $droit->setPour($this->getUser());
                $droit->setUser($this->getMaster());
                $droit->setAfaire("SUPPRIMER UN CLIENT");
                $droit->setActions("oui");
                $droit->setLier("del_client");
                $droit->setGgroup("client");
                $manager->persist($droit);
                $manager->flush();

                $droit = new Droit();
                $droit->setPour($this->getUser());
                $droit->setUser($this->getMaster());
                $droit->setAfaire("AJOUTER UN CHANTIER");
                $droit->setActions("oui");
                $droit->setLier("add_chantier");
                $droit->setGgroup("chantier");
                $manager->persist($droit);
                $manager->flush();

                $droit = new Droit();
                $droit->setPour($this->getUser());
                $droit->setUser($this->getMaster());
                $droit->setAfaire("MODIFIER UN CHANTIER");
                $droit->setActions("oui");
                $droit->setLier("upd_chantier");
                $droit->setGgroup("chantier");
                $manager->persist($droit);
                $manager->flush();

                $droit = new Droit();
                $droit->setPour($this->getUser());
                $droit->setUser($this->getMaster());
                $droit->setAfaire("SUPPRIMER UN CHANTIER");
                $droit->setActions("oui");
                $droit->setLier("del_chantier");
                $droit->setGgroup("chantier");
                $manager->persist($droit);
                $manager->flush();

                $droit = new Droit();
                $droit->setPour($this->getUser());
                $droit->setUser($this->getMaster());
                $droit->setAfaire("CRÉER UN DEVIS");
                $droit->setActions("oui");
                $droit->setLier("add_devis");
                $droit->setGgroup("devis");
                $manager->persist($droit);
                $manager->flush();

                $droit = new Droit();
                $droit->setPour($this->getUser());
                $droit->setUser($this->getMaster());
                $droit->setAfaire("MODIFIER UN DEVIS");
                $droit->setActions("oui");
                $droit->setLier("upd_devis");
                $droit->setGgroup("devis");
                $manager->persist($droit);
                $manager->flush();

                $droit = new Droit();
                $droit->setPour($this->getUser());
                $droit->setUser($this->getMaster());
                $droit->setAfaire("SUPPRIMER UN DEVIS");
                $droit->setActions("oui");
                $droit->setLier("del_devis");
                $droit->setGgroup("devis");
                $manager->persist($droit);
                $manager->flush();

                $droit = new Droit();
                $droit->setPour($this->getUser());
                $droit->setUser($this->getMaster());
                $droit->setAfaire("CONSULTER UN DEVIS");
                $droit->setActions("oui");
                $droit->setLier("voir_devis");
                $droit->setGgroup("devis");
                $manager->persist($droit);
                $manager->flush();

                $droit = new Droit();
                $droit->setPour($this->getUser());
                $droit->setUser($this->getMaster());
                $droit->setAfaire("VALIDER UN DEVIS");
                $droit->setActions("oui");
                $droit->setLier("valide_devis");
                $droit->setGgroup("devis");
                $manager->persist($droit);
                $manager->flush();

                $droit = new Droit();
                $droit->setPour($this->getUser());
                $droit->setUser($this->getMaster());
                $droit->setAfaire("DÈVALIDER UN DEVIS");
                $droit->setActions("oui");
                $droit->setLier("devalide_devis");
                $droit->setGgroup("devis");
                $manager->persist($droit);
                $manager->flush();

            }

            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/droit/add/{id}', name: 'addDroitUser', methods: ['POST'])]
    public function addDroitcompte($id, UserPasswordHasherInterface $passwordHasher, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoDroit = $this->doctrine->getRepository(Droit::class);
        $repoUser = $this->doctrine->getRepository(User::class);

        $use = $repoUser->findOneBy(['id'=>$id]);
        $json = $this->getJson($request);

        $droits = $repoDroit->findBy(['pour'=>$use]);
        foreach ($droits as $dre){
                $ddadmin = $repoDroit->findOneBy(['pour'=>$use, 'lier'=>$dre->getLier()]);
                if($ddadmin->getPour() !== $this->getMaster()){
                    $ddadmin->setActions($json[$dre->getLier()]);
                    $manager->persist($ddadmin);
                    $manager->flush();
                }
        }

        return $this->json(['result' => $json], 200);
    }

    #[Route(path: '/user/update', name: 'updateUser', methods: ['PUT'])]
    public function updateUsere(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $user = $this->getUser();
        $user->setConfirmPasse($this->getUser()->getPassword());

        $json = $this->getJson($request);
        $formUser = $this->formFactory->createNamed('', UserType::class, $user,
            ['type' => 'update']);

        $formUser->submit($json);
        $formUser->handleRequest($request);
        if ($formUser->isSubmitted() && $formUser->isValid()) {
            $manager->persist($user);
            $manager->flush();

            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/passe/update', name: 'updatePasse', methods: ['PUT'])]
    public function updatePasse(Request $request, UserPasswordHasherInterface $passwordHasher, UserInterface $user): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $json = $this->getJson($request);
        if ($this->isCsrfTokenValid('updPassToken', $json['token'])) {
            $plaintextPassword = $json['nouveau'];
            if ($passwordHasher->isPasswordValid($user, $json['ancien'])) {
                $hashedPassword = $passwordHasher->hashPassword(
                    $user,
                    $plaintextPassword
                );
                $user->setPassword($hashedPassword);
                $manager->persist($user);
                $manager->flush();
                return $this->json(['result' => 'success'], 200);
            }
            return $this->json(['result' => 'error'], 404);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/delpicture/{id}/{iduser}/{position}', name: 'delpicture', requirements: ['id' => '\d+', 'iduser' => '\d+', 'position' => '\d+'])]
    public function delpicture($id, $iduser, $position)
    {
        $manager = $this->doctrine->getManager();
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoGalerie = $this->doctrine->getRepository(Galerie::class);
        $use = $repoUser->findOneBy(['id' => $iduser]);
        $gale = $repoGalerie->findOneBy(['position' => $position, 'user' => $use]);
        if ($use === $this->getUser()) {
            unlink('gallery/' . $id);
            $gale->setInfo('non');
            $manager->persist($gale);
            $manager->flush();
            return $this->redirectToRoute('parametre');
        }

        return $this->redirectToRoute('logout');
    }

    #[Route(path: '/delusers/{id}', name: 'deluseus', requirements: ['id' => '\d+'])]
    public function deluser($id = null)
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $user = $repoUser->findOneBy(['id' => $id]);
        if (!$user) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $cor = $repoCorbeille->findOneBy(['designation' => $user->getId(), 'master' => $this->getMaster(), 'type' => 55]);
        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($user->getId());
            $corbeille->setMaster($this->getMaster());
            $corbeille->setDelby($this->getUser());
            $corbeille->setEtat('faible');
            $corbeille->setType('55');
            $manager->persist($corbeille);
            $manager->flush();
            $user->setCorbeille($corbeille);
            $manager->persist($user);
            $manager->flush();
            return $this->json(['result' => 'Bon de caisse suprimé'], 200);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/{choi}', name: 'choimetier', requirements: ['choi' => '\d+'])]
    public function choisirMetier($choi): \Symfony\Component\HttpFoundation\JsonResponse
    {
        $manager = $this->doctrine->getManager();
        // LES REPOSITORIES
        $repoDomaine = $this->doctrine->getRepository(Domaine::class);
        $repoTypear = $this->doctrine->getRepository(Typear::class);

        // ON RECUPERE LE DOMAINE
        $domaine = $repoDomaine->find($choi);

        $typear = $repoTypear->findOneBy(['type' => $domaine->getMetier()->getNom(), 'user' => $this->getUser()]);
        if (!$typear) {
            $typear = new Typear();
            $typear->setType($domaine->getMetier()->getNom());
            $typear->setUser($this->getMaster());
            $manager->persist($typear);
            $manager->flush();
        }


        if ($domaine->getInfo() === 'non') {
            $domaine->setInfo('oui');
            $result = 'oui';
        } else {
            $domaine->setInfo('non');
            $result = 'non';
        }
        $manager->persist($domaine);
        $manager->flush();
        return $this->json(['result' => $result], 200);
    }

    #[Route(path: '/', name: 'parametre')]
    #[Route(path: '/souscompte/{id}', name: 'editsouscompte', requirements: ['id' => '\d+'])]
    #[Route(path: '/droit/{idcompte}', name: 'droitcompte', requirements: ['idcompte' => '\d+'])]
    public function parametre(int $id = null, int $idcompte = null)
    {
        // ACCESS A LA BASE DE DONNEES
        $manager = $this->doctrine->getManager();

        $repoUser = $this->doctrine->getRepository(User::class);
        $repoDroit = $this->doctrine->getRepository(Droit::class);
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);

        $repoClient = $this->doctrine->getRepository(Client::class);


        // MODIFIER L' UTILISATEUR
        $user = $this->getUser();
        $user->setConfirmPasse($this->getUser()->getPassword());
        $formUser = $this->formFactory->createNamed('', UserType::class, $user,
            ['type' => 'update']);


        if($id){
            $compte = $repoUser->findOneBy(['id'=>$id]);
        }else{
            $compte = new User();
            $compte->setBegdate($use->getBegdate());
            $compte->setEnddate($use->getEnddate());
        }

        $formcompte = $this->formFactory->createNamed('', UserType::class, $compte,
            ['type' => 'sous']);

        $comptes = $repoUser->findBy(['compte' => $this->getUser()]);

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        $userdroit = null;
        $droits = null;

        if($idcompte){
            $userdroit = $repoUser->findOneBy(['id'=>$idcompte]);
            $this->jourDroits($userdroit);
            $droits = $repoDroit->findBy(['pour'=>$idcompte]);
        }


        return $this->render('content/parametre.html.twig', [
            'controller_name' => 'ParametreController',
            'user' => $this->getUser(),
            'comptes' => $comptes,
            'compte' => $compte,
            'form' => $formUser->createView(),
            'formcompte' => $formcompte->createView(),
            'title' => 'Gestion de votre compte | carlinBleu',
            'page' => 'parametre',
            'userdroit' => $userdroit,
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'history' => $historiques,
            'droits' => $droits,
            'idcompte' =>  $idcompte,
        ]);
    }
}


