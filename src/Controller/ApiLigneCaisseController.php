<?php

namespace App\Controller;

use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Chantier;
use App\Entity\Ligne;
use App\Entity\Projet;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class ApiLigneCaisseController
 * @package App\Controller
 */
#[Route(path: '/api/ligne/caisse')]
class ApiLigneCaisseController extends AbstractController
{

    private ManagerRegistry $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    /**
     * @param int $id
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    #[Route(path: '/get/{id}', name: 'api_ligne_caisse', methods: ['POST'])]
    public function index(int $id, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoLigne = $this->doctrine->getRepository(Ligne::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $caisse = $repoCaisse->findOneBy(['user'=>$master, 'id'=>$id]);
        $ligne = $repoLigne->getlignecaisse($caisse);

        return $this->json($ligne, 200, ['Content-Type' => 'application/json'],['groups'=>'ligne']);

    }

    /**
     * @param int $id
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    #[Route(path: '/designation/{id}', name: 'api_ligne_caisse_designation_add', methods: ['POST'])]
    public function addDesi(int $id, Request $request, SerializerInterface $serializer)
    {

        $repoUser = $this->doctrine->getRepository(User::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $ligne = $serializer->deserialize($apjson, Ligne::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $manager = $this->doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $caisse = $repoCaisse->findOneBy(['user' => $master, 'id' => $id]);


        $ligne->setChantier($caisse->getChantier());
        $ligne->setCaisse($caisse);
        $ligne->setUnite('rien');
        $ligne->setQuantite(0);
        $ligne->setRemise(0);
        $ligne->setUser($master);
        $ligne->setType(3);
        $ligne->setCode($caisse->getNumcaisse());

        $manager->persist($ligne);
        $manager->flush();

        $montant = 0;
        foreach ($caisse->getLignes() as $lig) {
            $montant += $lig->getPu();
        }
        $caisse->setMontant($montant);
        $caisse->setTotal($montant);
        $manager->persist($caisse);
        $manager->flush();
        return $this->json($caisse, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);

    }


    /**
     * @param int $idligne
     * @param int $idcaisse
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    #[Route(path: '/delete/{idligne}/{idcaisse}', name: 'api_ligne_caisse_delete_ligne', methods: ['POST'])]
    public function delligne(int $idligne, int $idcaisse, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoLigne = $this->doctrine->getRepository(Ligne::class);


        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $manager = $this->doctrine->getManager();

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $caisse = $repoCaisse->findOneBy(['user' => $master, 'id' => $idcaisse]);
        $ligne = $repoLigne->findOneBy(['id'=>$idligne, 'caisse'=>$caisse]);

        $manager->remove($ligne);
        $manager->flush();

        $montant = 0;
        foreach ($caisse->getLignes() as $lig) {
            $montant += $lig->getPu();
        }
        $caisse->setMontant($montant);
        $caisse->setTotal($montant);
        $manager->persist($caisse);
        $manager->flush();

        return $this->json($caisse, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);

    }


    /**
     * @param null $id
     * @param null $iddev
     * @param null $idgr
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    #[Route(path: '/update/{idligne}/{idcaisse}', name: 'api_ligne_devis_update_ligne', methods: ['POST'])]
    public function update(int $idligne , int $idcaisse , Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoLigne = $this->doctrine->getRepository(Ligne::class);


        $manager = $this->doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $ligne = $serializer->deserialize($apjson, Ligne::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $caisse= $repoCaisse->findOneBy(['user' => $master, 'id' => $idcaisse]);
        $lignez = $repoLigne->findOneBy(['id'=>$idligne, 'caisse'=>$caisse]);


        $lignez->setDesignation($ligne->getDesignation());
        $lignez->setPu($ligne->getPu());

        $manager->persist($lignez);
        $manager->flush();

        $montant = 0;
        foreach ($caisse->getLignes() as $lig) {
            $montant += $lig->getPu();
        }
        $caisse->setMontant($montant);
        $caisse->setTotal($montant);
        $manager->persist($caisse);
        $manager->flush();

        return $this->json($caisse, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);

    }

}
