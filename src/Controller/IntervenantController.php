<?php

namespace App\Controller;

use App\Entity\Alerte;
use App\Entity\Caisse;
use App\Entity\Corbeille;
use App\Entity\Intervenant;
use App\Entity\Chantier;
use App\Entity\User;
use App\Entity\Valider;
use App\Form\IntervenantType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;


#[Route(path: '/crm/intervenant')]
class IntervenantController extends AbstractController
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

    #[Route(path: '/add/{id}', name: 'addIntervenant', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function add($id, Request $request): JsonResponse
    {

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $manager = $this->doctrine->getManager();

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $interve = new Intervenant();
        $interve->setUser($this->getMaster());
        $interve->setDobyuser($this->getUser());
        $interve->setClient($chantier->getClient());
        $interve->setChantier($chantier);
        $json = $this->getJson($request);
        $formInterve = $this->formFactory->createNamed('', IntervenantType::class, $interve, [
            'type' => 'chantier',
            'user' => $this->getMaster()
        ]);

        $formInterve->submit($json);
        $formInterve->handleRequest($request);
        if ($this->isCsrfTokenValid('addInterveToken', $json['token'])) {
            $interve->setReste($json['payer']);
            $interve->setRecu(0);
            $manager->persist($interve);
            $manager->flush();

            $repoUser = $this->doctrine->getRepository(User::class);
            $comptes = $repoUser->findBy(['compte' => $this->getUser()]);

            foreach ($comptes as $compte){

                $alerte = new Alerte();
                $alerte->setAlerte("Ajout d'un nouveau intervenant".$json['nom']." | " .$chantier->getClient()->getNomclient()." | " .$chantier->getNomchantier());
                $alerte->setUser($this->getMaster());
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setStatut("false");
                $alerte->setOwner($compte);
                $manager->persist($alerte);
                $manager->flush();

            }


            return $this->json(['result' => 'Intervenant crée'], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);

    }

    #[Route(path: '/operation/add/{id}', name: 'addOper', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function addoper($id, Request $request): JsonResponse
    {

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $manager = $this->doctrine->getManager();

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $interve = new Intervenant();
        $interve->setUser($this->getMaster());
        $interve->setDobyuser($this->getUser());
        $interve->setClient($chantier->getClient());
        $interve->setType('oper');
        $interve->setChantier($chantier);
        $json = $this->getJson($request);
        $formOperation = $this->formFactory->createNamed('', IntervenantType::class, $interve, [
            'type' => 'operation',
            'user' => $this->getMaster()
        ]);

        $formOperation->submit($json);
        $formOperation->handleRequest($request);
        if ($this->isCsrfTokenValid('addOperationToken', $json['token'])) {
            $interve->setReste($json['payer']);
            $interve->setRecu(0);
            $manager->persist($interve);
            $manager->flush();

            $repoUser = $this->doctrine->getRepository(User::class);
            $comptes = $repoUser->findBy(['compte' => $this->getUser()]);

            foreach ($comptes as $compte){

                $alerte = new Alerte();
                $alerte->setAlerte("Ajout d'un nouveau intervenant".$json['nom']." | " .$chantier->getClient()->getNomclient()." | " .$chantier->getNomchantier());
                $alerte->setUser($this->getMaster());
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setStatut("false");
                $alerte->setOwner($compte);
                $manager->persist($alerte);
                $manager->flush();

            }

            return $this->json(['result' => 'Intervenant crée'], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);

    }

    #[Route(path: '/adde', name: 'addeIntervenant', methods: ['POST'])]
    public function adde(Request $request): JsonResponse
    {

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $manager = $this->doctrine->getManager();

        $interve = new Intervenant();
        $interve->setUser($this->getMaster());
        $interve->setDobyuser($this->getUser());
        $json = $this->getJson($request);
        $formInterve = $this->formFactory->createNamed('', IntervenantType::class, $interve, [
            'type' => 'chantiers',
            'user' => $this->getMaster()
        ]);

        $formInterve->submit($json);

        $formInterve->handleRequest($request);
        if ($this->isCsrfTokenValid('addInterveToken', $json['token'])) {
            $chantier = $repoChantier->findOneBy(['id' => $json['chantier']]);
            $interve->setClient($chantier->getClient());
            $interve->setChantier($chantier);
            $interve->setReste($json['payer']);
            $interve->setRecu(0);
            $manager->persist($interve);
            $manager->flush();

            $repoUser = $this->doctrine->getRepository(User::class);
            $comptes = $repoUser->findBy(['compte' => $this->getUser()]);

            foreach ($comptes as $compte){

                $alerte = new Alerte();
                $alerte->setAlerte("Ajout d'un nouveau intervenant ".$json['nom']." | " .$chantier->getClient()->getNomclient()." | " .$chantier->getNomchantier());
                $alerte->setUser($this->getMaster());
                $alerte->setDate(new \DateTime('NOW'));
                $alerte->setStatut("false");
                $alerte->setOwner($compte);
                $manager->persist($alerte);
                $manager->flush();

            }

            return $this->json(['result' => 'Intervenant crée'], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);

    }

    #[Route(path: '/operation/add', name: 'addOperationIntervenant', methods: ['POST'])]
    public function addOperation(Request $request): JsonResponse
    {

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $manager = $this->doctrine->getManager();

        $interve = new Intervenant();
        $interve->setUser($this->getMaster());
        $interve->setType('oper');
        $interve->setDobyuser($this->getUser());
        $json = $this->getJson($request);
        $formInterve = $this->formFactory->createNamed('', IntervenantType::class, $interve, [
            'type' => 'operation',
            'user' => $this->getMaster()
        ]);

        $formInterve->submit($json);

        $formInterve->handleRequest($request);
        if ($this->isCsrfTokenValid('addOperationToken', $json['token'])) {
            $chantier = $repoChantier->findOneBy(['id' => $json['chantier']]);
            $interve->setClient($chantier->getClient());
            $interve->setChantier($chantier);
            $interve->setReste($json['payer']);
            $interve->setRecu(0);
            $manager->persist($interve);
            $manager->flush();
            return $this->json(['result' => 'Intervenant crée'], 201);
        }
        return $this->json(['result' => 'Erreur'], 404);

    }

    #[Route(path: '/update/{id}', name: 'updateIntervenant', requirements: ['id' => '\d+'], methods: ['PUT'])]
    public function update($id, Request $request): JsonResponse
    {

        // LES REPOSITORIES
        $repoInterve = $this->doctrine->getRepository(Intervenant::class);
        $manager = $this->doctrine->getManager();

        $interve = $repoInterve->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$interve) {return $this->json(['result' => 'Erreur'], 404);}

        $chantier = $interve->getChantier();
        $json = $this->getJson($request);
        $formInterve = $this->formFactory->createNamed('', IntervenantType::class, $interve, [
            'type' => 'chantiers',
            'user' => $this->getMaster()
        ]);

        $formInterve->submit($json);
        $formInterve->handleRequest($request);
        if ($this->isCsrfTokenValid('addInterveToken', $json['token'])) {
            if($json['payer'] < $interve->getRecu()){
                return $this->json(['result' => 'Erreur'], 404);
            }
            $interve->setReste($json['payer'] - $interve->getRecu());
            $interve->setChantier($chantier);
            $manager->persist($interve);
            $manager->flush();
            return $this->json(['result' => 'Intervenant Modifié'], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/operation/update/{id}', name: 'updateOperIntervenant', requirements: ['id' => '\d+'], methods: ['PUT'])]
    public function updateOper($id, Request $request): JsonResponse
    {

        // LES REPOSITORIES
        $repoInterve = $this->doctrine->getRepository(Intervenant::class);
        $manager = $this->doctrine->getManager();

        $interve = $repoInterve->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$interve) {return $this->json(['result' => 'Erreur'], 404);}

        $chantier = $interve->getChantier();
        $json = $this->getJson($request);
        $formInterve = $this->formFactory->createNamed('', IntervenantType::class, $interve, [
            'type' => 'operation',
            'user' => $this->getMaster()
        ]);

        $formInterve->submit($json);
        $formInterve->handleRequest($request);
        if ($this->isCsrfTokenValid('addOperationToken', $json['token'])) {

            if($json['payer'] < $interve->getRecu()){
                return $this->json(['result' => 'Erreur'], 404);
            }
            $interve->setReste($json['payer'] - $interve->getRecu());
            $interve->setChantier($chantier);
            $manager->persist($interve);
            $manager->flush();
            return $this->json(['result' => 'Intervenant Modifié'], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/del/{id}', name: 'delIntervenant', requirements: ['id' => '\d+'], methods: ['DELETE'])]
    public function delInterve($id, Request $request): JsonResponse
    {
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoInterve = $this->doctrine->getRepository(Intervenant::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $interve = $repoInterve->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        $caisses = $interve->getCaisses();
        $count = 0;

        foreach ($caisses as $ca){
            if($ca->getCorbeille() === null){
                $count = $count + 1;
            }
        }

        if ($count === 0) {
            if (!$interve) {
                return $this->json(['result' => 'Erreur'], 404);
            }
            $cor = $repoCorbeille->findOneBy(['designation' => $id, 'master' => $this->getMaster(), 'type' => '9']);
            if (!$cor) {
                date_default_timezone_set('Africa/Abidjan');
                $corbeille = new Corbeille();
                $corbeille->setDate(new \DateTime('NOW'));
                $corbeille->setDesignation($interve->getId());
                $corbeille->setMaster($this->getMaster());
                $corbeille->setEtat('faible');
                $corbeille->setType('9');
                $manager->persist($corbeille);
                $manager->flush();
                $core = $repoCorbeille->findOneBy(['designation' => $interve->getId(), 'master' => $this->getMaster(), 'type' => 9]);
                $interve->setCorbeille($core);
                $manager->persist($interve);
                $manager->flush();
                return $this->json(['result' => 'Intervenant suprimé'], 204);
            }
        }
        return $this->json(['result' => 'error'], 404);

    }

    #[Route(path: '/restaurer/{id}', name: 'restaureInterve', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function restaureInterve($id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoInterve = $this->doctrine->getRepository(Intervenant::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $interve = $repoInterve->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$interve) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $corbeille = $repoCorbeille->findOneBy(['designation' => $interve->getId(), 'type' => '5']);
        if ($corbeille) {
            $interve->setCorbeille(null);
            $manager->persist($interve);
            $manager->flush();
            $manager->remove($corbeille);
            $manager->flush();
            return $this->json(['result' => 'Intervenant restauré'], 200);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/deldefinitive/{id}', name: 'deldefInterve', requirements: ['id' => '\d+'], methods: ['DELETE'])]
    public function deldefon($id, Request $request): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoInterve = $this->doctrine->getRepository(Intervenant::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $interve = $repoInterve->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$interve) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $cor = $repoCorbeille->findOneBy(['designation' => $interve->getId(), 'master' => $this->getMaster(), 'type' => 5]);
        if ($cor) {
            if ($interve->getUser()->getCompte() === null) {
                $cor->setEtat('ultra');
                $manager->persist($cor);
                $manager->flush();
                return $this->json(['result' => 'Bon suprimé'], 204);
            } else {
                $cor->setEtat('fort');
                $manager->persist($cor);
                $manager->flush();
                return $this->json(['result' => 'Bon suprimé'], 204);
            }
        }
        return $this->json(['error' => 'Erreur'], 404);
    }

    #[Route(path: '/deplacer', name: 'depIntervenant', methods: ['POST'])]
    public function deplacerIntervenant(Request $request): JsonResponse
    {
        // MANAGER
        $manager = $this->doctrine->getManager();

        // REPOSITORIES
        $repoIntervenant = $this->doctrine->getRepository(Intervenant::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoValider = $this->doctrine->getRepository(Valider::class);

        $json = $this->getJson($request);

        if ($this->isCsrfTokenValid('depinterve', $json['token'])) {
            $interve = $json['intervenants'];
            if(is_countable($interve)){
                for ($i = 0, $iMax = count($interve); $i < $iMax; $i++) {
                    $nouchantier = $repoChantier->findOneBy(['id' => $json['nouveauchantier'], 'user' => $this->getMaster()]);
                    if (!$nouchantier) { return $this->json(['result' => 'Erreur'], 404);   }
                    $intervenant = $repoIntervenant->findOneBy(['id' => $interve[$i], 'user' => $this->getMaster()]);
                    if (!$intervenant) {  return $this->json(['result' => 'Erreur'], 404);   }
                    $anchantier = $intervenant->getChantier();
                    $andepense = $anchantier->getDepense();
                    foreach ($intervenant->getCaisses() as $caisse) {
                        if ($caisse) {
                            $valider = $repoValider->findOneBy(['idlink' => $caisse->getId(), 'type' => 1]);
                            $noudepense = $nouchantier->getDepense();

                            if ($valider) {
                                if ($caisse->getOperation() === 'debit') {
                                    $debit = $caisse->getMontant();
                                    $noudepense = $noudepense + $debit;
                                    $andepense = $andepense - $debit;
                                } else {
                                    $credit = $caisse->getMontant();
                                    $noudepense = $noudepense - $credit;
                                    $andepense = $andepense + $credit;
                                }

                                $nouchantier->setDepense($noudepense);
                                $manager->persist($nouchantier);
                                $anchantier->setDepense($andepense);
                                $manager->persist($anchantier);
                                $valider->setChantier($nouchantier);
                                $manager->persist($valider);
                            }

                            $caisse->setChantier($nouchantier);
                            $caisse->setClient($nouchantier->getClient());
                            $manager->persist($caisse);
                            $manager->flush();
                        }else{
                            return $this->json(['result' => 'erreur'], 404);
                        }
                    }
                    $intervenant->setChantier($nouchantier);
                    $intervenant->setClient($nouchantier->getClient());
                    $manager->persist($intervenant);
                    $manager->flush();
                }
            }else{
                $nouchantier = $repoChantier->findOneBy(['id' => $json['nouveauchantier'], 'user' => $this->getMaster()]);
                if (!$nouchantier) { return $this->json(['result' => 'Erreur'], 404);   }
                $intervenant = $repoIntervenant->findOneBy(['id' => $interve, 'user' => $this->getMaster()]);
                if (!$intervenant) {  return $this->json(['result' => 'Erreur'], 404);   }
                $anchantier = $intervenant->getChantier();
                $andepense = $anchantier->getDepense();
                foreach ($intervenant->getCaisses() as $caisse) {
                    if ($caisse) {
                        $valider = $repoValider->findOneBy(['idlink' => $caisse->getId(), 'type' => 1]);
                        $noudepense = $nouchantier->getDepense();


                        if ($valider) {
                            if ($caisse->getOperation() === 'debit') {
                                $debit = $caisse->getMontant();
                                $noudepense = $noudepense + $debit;
                                $andepense = $andepense - $debit;
                            } else {
                                $credit = $caisse->getMontant();
                                $noudepense = $noudepense - $credit;
                                $andepense = $andepense + $credit;
                            }

                            $nouchantier->setDepense($noudepense);
                            $manager->persist($nouchantier);
                            $anchantier->setDepense($andepense);
                            $manager->persist($anchantier);
                            $valider->setChantier($nouchantier);
                            $manager->persist($valider);
                        }

                        $caisse->setChantier($nouchantier);
                        $caisse->setClient($nouchantier->getClient());
                        $manager->persist($caisse);
                        $manager->flush();
                    }else{
                        return $this->json(['result' => 'erreur'], 404);
                    }
                }
                $intervenant->setChantier($nouchantier);
                $intervenant->setClient($nouchantier->getClient());
                $manager->persist($intervenant);
                $manager->flush();
            }

            return $this->json(['result' => $json['intervenants']], 200);
        }
        return $this->json(['result' => 'erreur'], 404);
    }


}
