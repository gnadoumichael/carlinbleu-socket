<?php

namespace App\Controller;

use App\Entity\Caisse;
use App\Entity\Chantier;
use App\Entity\Projet;
use App\Entity\User;
use App\Entity\Valider;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;


/**
 * Class ApiValiderController
 * @package App\Controller
 */
#[Route(path: '/api/valider')]
class ApiValiderController extends AbstractController
{

    private FormFactoryInterface $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    function delete_directory($dirname)
    {
        if (is_dir($dirname)) {
            $dir_handle = opendir($dirname);
        }
        if (!$dir_handle) {
            return false;
        }
        while ($file = readdir($dir_handle)) {
            if ($file != "." && $file != "..") {
                if (!is_dir($dirname . "/" . $file))
                    unlink($dirname . "/" . $file);
                else
                    delete_directory($dirname . '/' . $file);
            }
        }
        closedir($dir_handle);
        rmdir($dirname);
        return true;
    }

    #[Route(path: '/chantier/{id}', name: 'apivalider', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function index($id, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoValider = $this->doctrine->getRepository(Valider::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUsername()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['id'=>$id,'user'=>$master]);
        $valider = $repoValider->findByChantiers($master, $chantier);

        return $this->json($valider, 200, ['Content-Type' => 'application/json'], ['groups'=>'valides']);

    }

    #[Route(path: '/get', name: 'apiallvalider', methods: ['POST'])]
    public function validers(Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoValider = $this->doctrine->getRepository(Valider::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUsername()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $valider = $repoValider->findAlle($master);
        return $this->json($valider, 200, ['Content-Type' => 'application/json'], ['groups'=>'valides']);

    }

    #[Route(path: '/mois/{date}', name: 'apigetvalider', methods: ['POST'])]
    public function validerDate($date, Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoValider = $this->doctrine->getRepository(Valider::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUsername()]);
        $manager = $this->doctrine->getManager();



        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $valider = $repoValider->findByDate($master,$date);
        foreach ($valider as $valid){
            if($valid->getType() == 1){
                $caisse = $repoCaisse->findOneBy(["user" => $master, "id"=>$valid->getIdlink()]);
                $valid->setCaisse($caisse);
                $manager->persist($valid);
                $manager->flush();
            }
        }

        return $this->json($valider, 200, ['Content-Type' => 'application/json'], ['groups'=>'valides']);

    }

}
