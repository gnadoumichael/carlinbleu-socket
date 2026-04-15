<?php

namespace App\Controller;

use App\Entity\Chantier;
use App\Entity\Contact;
use App\Entity\Intervenant;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class ApiIntervenantController
 * @package App\Controller
 */
#[Route(path: '/api/intervenant')]
class ApiIntervenantController extends AbstractController
{

    private FormFactoryInterface $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    /**
     * @param int $id
     * @param string $type
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    #[Route(path: '/chantier/{id}/{type}', name: 'api_intervenant', methods: ['POST'])]
    public function index(int $id, string $type,  Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoIntervenant = $this->doctrine->getRepository(Intervenant::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $master]);

        if($type == "oper"){
            $apintervenant = $repoIntervenant->findOper($master, $chantier);
        }
        if($type != "oper"){
            $apintervenant = $repoIntervenant->findInterves($master, $chantier);
        }
        if($type == "all"){
            $apintervenant = $repoIntervenant->findAllInterves($master, $chantier);
        }

        return $this->json($apintervenant, 200, ['Content-Type' => 'application/json'], ['groups'=>'interve']);
    }


    /**
     * @param int $id
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    #[Route(path: '/add/{id}', name: 'api_intervenant_add', methods: ['POST'])]
    public function add(int $id, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $interve = $serializer->deserialize($apjson, Intervenant::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['user'=>$master,'id'=>$id]);

        $interve->setUser($master);
        $interve->setClient($chantier->getClient());
        $interve->setDobyuser($apuser);
        $interve->setChantier($chantier);
        $interve->setRecu(0);
        $interve->setReste($interve->getPayer());

        $manager = $this->doctrine->getManager();
        $manager->persist($interve);
        $manager->flush();

        return $this->json(['result' => 'success'], 200);

    }


    /**
     * @param int $id
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    #[Route(path: '/operation/add/{id}', name: 'api_oper_intervenant_add', methods: ['POST'])]
    public function addOper(int $id, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $interve = $serializer->deserialize($apjson, Intervenant::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['user'=>$master,'id'=>$id]);

        $interve->setUser($master);
        $interve->setClient($chantier->getClient());
        $interve->setDobyuser($apuser);
        $interve->setChantier($chantier);
        $interve->setRecu(0);
        $interve->setType('oper');

        $manager = $this->doctrine->getManager();
        $manager->persist($interve);
        $manager->flush();

        return $this->json(['result' => 'success'], 200);

    }


    /**
     * @param $id
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    #[Route(path: '/update/{id}', name: 'api_intervenant_update', methods: ['POST'])]
    public function update($id, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoIntervenant = $this->doctrine->getRepository(Intervenant::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $chantier = $serializer->deserialize($apjson, Chantier::class, 'json');
        $interve = $serializer->deserialize($apjson, Intervenant::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }
        $apchantier = $repoChantier->findOneBy(['user'=>$master,'idprojet'=>$chantier->getIdChantier()]);
        $intervenant = $repoIntervenant->findOneBy(['user'=>$master, 'id'=>$id]);



        $intervenant->setUser($master);
        $intervenant->setClient($apchantier->getClient());
        $intervenant->setDobyuser($apuser);
        $intervenant->setProjet($apchantier);
        $intervenant->setNom($interve->getNom());
        $intervenant->setProfession($interve->getProfession());
        $intervenant->setPayer($interve->getPayer());


        $manager = $this->doctrine->getManager();
        $manager->persist($intervenant);
        $manager->flush();

        return $this->json(['result' => 'success'], 200);

    }

    /**
     * @param $id
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    #[Route(path: '/delete/{id}', name: 'api_intervenant_update', methods: ['POST'])]
    public function delete($id, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoChnatier = $this->doctrine->getRepository(Chantier::class);
        $repoIntervenant = $this->doctrine->getRepository(Intervenant::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }
        $manager = $this->doctrine->getManager();
        $interve = $repoIntervenant->findOneBy(['user'=>$master, 'id'=>$id]);

        if (!$interve->getCaisses()->first()) {
            $manager->remove($interve);
            $manager->flush();
        }

        $interv = $repoIntervenant->findOneBy(['id' => $id, 'user' => $master]);

        if($interv){
            return $this->json(['result' => 'echec'], 500);
        }
        return $this->json(['result' => 'success'], 200);

    }


    /**
     * @param $id
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    #[Route(path: '/caisses/{id}', name: 'api_intervenant_caisses', methods: ['POST'])]
    public function boninterve($id, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoIntervenant = $this->doctrine->getRepository(Intervenant::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }
        $interve = $repoIntervenant->findOneBy(['user'=>$master, 'id'=>$id]);
        $caisses = $interve->getCaisses();

        return $this->json($caisses, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);

    }

}
