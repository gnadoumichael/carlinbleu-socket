<?php

namespace App\Controller;

use App\Entity\Alerte;
use App\Entity\Caisse;
use App\Entity\Client;
use App\Entity\Corbeille;
use App\Entity\Droit;
use App\Entity\Equipe;
use App\Entity\Historique;
use App\Entity\Intervenant;
use App\Entity\Personnel;
use App\Entity\Chantier;
use App\Entity\Section;
use App\Entity\Service;
use App\Entity\Tache;
use App\Entity\User;
use App\Form\EquipeType;
use App\Form\PersonnelType;
use App\Form\BeneficiaireType;
use App\Form\ChantierType;
use App\Form\ServiceType;
use App\Service\EnteteUploader;
use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use JsonException;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Beneficiaire;

#[Route(path: '/crm/personnel')]
class PersonnelController extends AbstractController
{
    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory) {
        $this->formFactory = $formFactory;
    }
    public function getMaster()
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
    private function getJson(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpException(400, 'Invalid json');
        }
        return $data;
    }


    #[Route(path: '/image/user', name: 'addImageUser', methods: ['POST'])]
    public function addImageUser(Request $request): JsonResponse
    {

        $manager = $this->doctrine->getManager();
        $file = $request->files->get('image');

        if ($this->isCsrfTokenValid('addImageToken', $request->get('token'))) {
            if ($file) {
                $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
                $filename = $this->getUser()->getId() . $dire;
                $fich = new EnteteUploader('gallery/');
                $pp = $fich->uploado($file, $filename);
                $user = $this->getUser();
                $user->setPhoto($filename.'.'.$pp);

                $manager->persist($user);
                $manager->flush();

                return $this->json(['result' => 'success'], 200);
            }
            return $this->json(['result' => 'error'], 404);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/imager/pers/{id}', name: 'addPersoUser', methods: ['POST'])]
    public function addPersoUser(int $id, Request $request): JsonResponse
    {
        $repoPersonel = $this->doctrine->getRepository(Personnel::class);
        $manager = $this->doctrine->getManager();

        $file = $request->files->get('image');

        $personnel = $repoPersonel->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if ($this->isCsrfTokenValid('addImagerToken', $request->get('token'))) {
            if ($file) {
                $filename = $id . 'pers';
                $fich = new EnteteUploader('images/personnel/');
                $pp = $fich->uploado($file, $filename);
                $personnel->setPhoto($filename.'.'.$pp);

                $manager->persist($personnel);
                $manager->flush();

                return $this->json(['result' => 'success'], 200);
            }
            return $this->json(['result' => 'error'], 404);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/add', name: 'addPersonnel', methods: ['POST'])]
    public function addPersonnel(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $personnel = new Personnel();
        $personnel->setDobyuser($this->getUser());
        $personnel->setUser($this->getMaster());
        $personnel->setType('personnelle');
        $json = $this->getJson($request);

        $formPersonnel = $this->formFactory->createNamed('', PersonnelType::class, $personnel,[
            'user' => $this->getMaster(),
            'type'=> 'person'
        ]);

        $formPersonnel->submit($json);
        $formPersonnel->handleRequest($request);
        if ($formPersonnel->isSubmitted() && $formPersonnel->isValid()) {
            $manager->persist($personnel);
            $manager->flush();
            return $this->json(['result' => $request->getContent()], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/operation/add', name: 'addInternePersonnel', methods: ['POST'])]
    public function addOperInterne(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $personnel = new Personnel();
        $personnel->setDobyuser($this->getUser());
        $personnel->setUser($this->getMaster());
        $personnel->setType('interne');
        $json = $this->getJson($request);

        $formPersonnel = $this->formFactory->createNamed('', PersonnelType::class, $personnel,[
            'user' => $this->getMaster(),
            'type' => 'interne'
        ]);

        $formPersonnel->submit($json);
        $formPersonnel->handleRequest($request);
        if ($formPersonnel->isSubmitted() && $formPersonnel->isValid()) {
            $manager->persist($personnel);
            $manager->flush();
            return $this->json(['result' => $request->getContent()], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/team/add/{id}', name: 'addTeam', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function addTeam($id, Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoPersonnel = $this->doctrine->getRepository(Personnel::class);
        $repoTache = $this->doctrine->getRepository(Tache::class);

        $manager = $this->doctrine->getManager();

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $equipe = new Equipe();
        $equipe->setUser($this->getMaster());
        $equipe->addChantier($chantier);
        $json = $this->getJson($request);
        if ($this->isCsrfTokenValid('addTeamToken', $json['token'])) {
            $sup = $repoPersonnel->findOneBy(['id' => $json['superviseur'], 'user' => $this->getMaster()]);
            $chef = $repoPersonnel->findOneBy(['id' => $json['chef'], 'user' => $this->getMaster()]);
            $equipe->setDesignation($json['equipe']);
            $equipe->setChef($chef);
            $equipe->setSuperviseur($sup);
            $manager->persist($equipe);
            $manager->flush();

            if (isset($json['membres[]'])) {

                $membre = $json['membres[]'];
                if (is_countable($membre)) {
                    for ($i = 0, $iMax = count($membre); $i < $iMax; $i++) {
                        $pers = $repoPersonnel->findOneBy(['id' => $membre[$i], 'user' => $this->getMaster()]);
                        $equipe->addPersonnel($pers);
                        $manager->persist($equipe);
                        $manager->flush();
                    }
                }

                if (!is_countable($membre)) {
                    $perso = $repoPersonnel->findOneBy(['id' => $membre, 'user' => $this->getMaster()]);
                    $equipe->addPersonnel($perso);
                    $manager->persist($equipe);
                    $manager->flush();
                }
            }
            if (isset($json['taches[]'])) {

                $tache = $json['taches[]'];
                if (is_countable($tache)) {
                    for ($i = 0, $iMax = count($tache); $i < $iMax; $i++) {
                        $tach = $repoTache->findOneBy(['id' => $tache[$i], 'user' => $this->getMaster()]);
                        $equipe->addTach($tach);
                        $manager->persist($equipe);
                        $manager->flush();
                    }
                }

                if (!is_countable($tache)) {
                    $tach = $repoTache->findOneBy(['id' => $tache, 'user' => $this->getMaster()]);
                    $equipe->addTach($tach);
                    $manager->persist($equipe);
                    $manager->flush();
                }
            }

            return $this->json(['result' => 'succes'], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);

    }

    #[Route(path: '/service/add', name: 'addService', methods: ['POST'])]
    public function addService(Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $service = new Service();
        $service->setUser($this->getMaster());
        $json = $this->getJson($request);

        $formService = $this->formFactory->createNamed('', ServiceType::class);

        $formService->submit($json);
        $formService->handleRequest($request);
        if ($formService->isSubmitted() && $formService->isValid()) {
            $service->setService($json['service']);
            $service->setRang($json['rang']);
            $service->setUser($this->getMaster());
            $manager->persist($service);
            $manager->flush();
            return $this->json(['result' => $request->getContent()], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/update/{idperson}', name: 'updatePersonnel', requirements: ['idperson' => '\d+'], methods: ['POST'])]
    public function updatePersonnel($idperson, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoPersonel = $this->doctrine->getRepository(Personnel::class);

        $personnel = $repoPersonel->findOneBy(['id' => $idperson, 'user' => $this->getMaster()]);
        $json = $this->getJson($request);

        $formPersonnel = $this->formFactory->createNamed('', PersonnelType::class, $personnel,[
            'user' => $this->getMaster(),
            'type'=> 'person'
        ]);

        $formPersonnel->submit($json);
        $formPersonnel->handleRequest($request);
        if ($formPersonnel->isSubmitted() && $formPersonnel->isValid()) {
            $manager->persist($personnel);
            $manager->flush();
            return $this->json(['result' => $request->getContent()], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/service/update/{id}', name: 'updateService', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function updateService($id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoService = $this->doctrine->getRepository(Service::class);

        $service = $repoService->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $json = $this->getJson($request);

        $formService = $this->formFactory->createNamed('', ServiceType::class, $service);

        $formService->submit($json);
        $formService->handleRequest($request);
        if ($formService->isSubmitted() && $formService->isValid()) {
            $manager->persist($service);
            $manager->flush();
            return $this->json(['result' => $request->getContent()], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/operation/update/{idperson}', name: 'updatePersonnelOperation', requirements: ['idperson' => '\d+'], methods: ['POST'])]
    public function updateOperationPersonnel($idperson, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();
        $repoPersonel = $this->doctrine->getRepository(Personnel::class);

        $personnel = $repoPersonel->findOneBy(['id' => $idperson, 'user' => $this->getMaster()]);
        $json = $this->getJson($request);

        $formPersonnel = $this->formFactory->createNamed('', PersonnelType::class, $personnel,[
            'user' => $this->getMaster(),
            'type' => 'interne'
        ]);

        $formPersonnel->submit($json);
        $formPersonnel->handleRequest($request);
        if ($formPersonnel->isSubmitted() && $formPersonnel->isValid()) {
            $manager->persist($personnel);
            $manager->flush();
            return $this->json(['result' => $request->getContent()], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/lier', name: 'lierSuperviseur', methods: ['POST'])]
    public function lierSuperviseur(Request $request): JsonResponse
    {
        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoPersonnel = $this->doctrine->getRepository(Personnel::class);

        $manager = $this->doctrine->getManager();
        $json = $this->getJson($request);

        if ($this->isCsrfTokenValid('addSuperviseurToken', $json['token'])) {
            $chantier = $json['chantiers[]'];
            $superviseur = $json['superviseurs[]'];

            if(is_countable($chantier) && is_countable($superviseur)){
                for($i=0, $iMax = count($chantier); $i< $iMax; $i++){
                    $pro = $repoChantier->findOneBy(['id'=>$chantier[$i], 'user'=>$this->getMaster()]);
                    for($j=0, $jMax = count($superviseur); $j< $jMax; $j++){
                        $super = $repoPersonnel->findOneBy(['id'=>$superviseur[$j], 'user'=>$this->getMaster()]);
                        $pro->addSuperviseur($super);
                        $manager->persist($pro);
                        $manager->flush();
                    }
                }
            }

            if(!is_countable($chantier) && !is_countable($superviseur)){
                        $pro = $repoChantier->findOneBy(['id'=>$chantier, 'user'=>$this->getMaster()]);
                        $super = $repoPersonnel->findOneBy(['id'=>$superviseur, 'user'=>$this->getMaster()]);
                        $pro->addSuperviseur($super);
                        $manager->persist($pro);
                        $manager->flush();

            }

            if(is_countable($chantier) && !is_countable($superviseur)){
                for($i=0, $iMax = count((array)$chantier); $i< $iMax; $i++){
                    $pro = $repoChantier->findOneBy(['id'=>$chantier[$i], 'user'=>$this->getMaster()]);
                        $super = $repoPersonnel->findOneBy(['id'=>$superviseur, 'user'=>$this->getMaster()]);
                        $pro->addSuperviseur($super);
                        $manager->persist($pro);
                        $manager->flush();
                }
            }

            if(!is_countable($chantier) && is_countable($superviseur)){
                    $pro = $repoChantier->findOneBy(['id'=>$chantier, 'user'=>$this->getMaster()]);
                    for($j=0, $jMax = count((array)$superviseur); $j< $jMax; $j++){
                        $super = $repoPersonnel->findOneBy(['id'=>$superviseur[$j], 'user'=>$this->getMaster()]);
                        $pro->addSuperviseur($super);
                        $manager->persist($pro);
                        $manager->flush();
                    }
            }

            return $this->json(['result' => 'success'], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/lier/{idchantier}/{idsup}', name: 'upSuperviseur')]
    public function updateSuperviseur($idchantier,$idsup)
    {
        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoPersonnel = $this->doctrine->getRepository(Personnel::class);
        $manager = $this->doctrine->getManager();

        // ON RECUPERE LE PROJET COURANT
        $chantier = $repoChantier->findOneBy(['id' => $idchantier, 'user' => $this->getMaster()]);
        if(!$chantier){
            return $this->redirectToRoute('logout');
        }

        // ON RECUPERE LE PROJET COURANT
        $personnel = $repoPersonnel->findOneBy(['id' => $idsup, 'user' => $this->getMaster()]);
        if(!$personnel){
            return $this->redirectToRoute('logout');
        }

        $chantier->removeSuperviseur($personnel);
        $manager->persist($chantier);
        $manager->flush();
        return $this->redirectToRoute('technique', ['id' => $chantier->getId()]);

    }

    #[Route(path: '/del/{id}', name: 'delPerson', requirements: ['id' => '\d+'], methods: ['DELETE'])]
    public function delPersonn($id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoPerson = $this->doctrine->getRepository(Personnel::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $person = $repoPerson->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        $cor = $repoCorbeille->findOneBy(['designation' => $person->getId(), 'master' => $this->getMaster(), 'type' => 41]);
        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($person->getId());
            $corbeille->setMaster($this->getMaster());
            $corbeille->setDelby($this->getUser());
            $corbeille->setEtat('faible');
            $corbeille->setType('41');
            $manager->persist($corbeille);
            $manager->flush();
            $person->setCorbeille($corbeille);
            $manager->persist($person);
            $manager->flush();

            return $this->json(['result' => 'bon suprimé'], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/service/del/{id}', name: 'delService', requirements: ['id' => '\d+'], methods: ['DELETE'])]
    public function delService($id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoService = $this->doctrine->getRepository(Service::class);
        $service = $repoService->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if ($service) {
            $manager->remove($service);
            $manager->flush();
            return $this->json(['result' => 'Objet suprimé'], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/', name: 'personnel')]
    #[Route(path: '/edit/person/{idperson}', name: 'editper', requirements: ['idperson' => '\d+'])]
    #[Route(path: '/edit/service/{idservice}', name: 'editser', requirements: ['idsern' => '\d+'])]
    public function index(int $idperson = null, int $idservice = null)
    {
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoPersonel = $this->doctrine->getRepository(Personnel::class);
        $repoService = $this->doctrine->getRepository(Service::class);
        $repoEquipe = $this->doctrine->getRepository(Equipe::class);


        if ($idperson) {
            $personnel = $repoPersonel->findOneBy(['id' => $idperson, 'user' => $this->getMaster()]);
        }else{
            $personnel = new Personnel();
            $personnel->setUser($this->getMaster());
        }

        $formPersonnel = $this->formFactory->createNamed('', PersonnelType::class, $personnel, [
            'user' => $this->getMaster(),
            'type' => 'person'
        ]);
        if ($idservice) {
            $service = $repoService->findOneBy(['id' => $idservice, 'user' => $this->getMaster()]);
        }else{
            $service = new Service();
            $service->setUser($this->getMaster());
        }
        $formService = $this->formFactory->createNamed('', ServiceType::class, $service);
        $personnels = $repoPersonel->findBy(['user' => $this->getMaster()], ['noms' => 'ASC']);
        $services = $repoService->findBy(['user' => $this->getMaster()], ['rang' => 'ASC']);

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        $repoDroit = $this->doctrine->getRepository(Droit::class);
        $droitComptable = $repoDroit->findOneBy(["pour"=>$this->getUser(), 'lier' => "comptable"]);
        $droitAdmin = $repoDroit->findOneBy(["pour"=>$this->getUser(), 'lier' => "admin"]);

        $equipe = new Equipe();
        $equipe->setUser($this->getMaster());
        $formEquipe = $this->formFactory->createNamed('', EquipeType::class, $equipe, ['user' => $this->getMaster()]);
        $equipes = $repoEquipe->findBy(['user' => $this->getMaster()]);

        return $this->render('content/personnel.html.twig', [
            'controller_name' => 'PersonnelController',
            'page' => 'personnel',
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'formPersonnel' => $formPersonnel->createView(),
            'formService' => $formService->createView(),
            'editPer' => $idperson !== null,
            'editSer' => $idservice !== null,
            'personnels' => $personnels,
            'person' => $personnel,
            'service' => $service,
            'services' => $services,
            'equipes' => $equipes,
            'history' => $historiques,
            'droitComptable' => $droitComptable,
            'droitAdmin' => $droitAdmin,
            'formEquipe' => $formEquipe->createView()
        ]);
    }
}
