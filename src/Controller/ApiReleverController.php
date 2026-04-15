<?php

namespace App\Controller;

use App\Entity\Relever;
use App\Entity\User;
use App\Entity\Client;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;


/**
 * Class ApiReleverController
 * @package App\Controller
 */
#[Route(path: '/api/relever')]
class ApiReleverController extends AbstractController
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

    #[Route(path: '/get', name: 'api_all_relever', methods: ['POST'])]
    public function aprelever(Request $request, SerializerInterface $serializer)
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoRelever = $this->doctrine->getRepository(Relever::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUsername()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $relevers = $repoRelever->findAlle($master);
        return $this->json($relevers, 200, ['Content-Type' => 'application/json'], ['groups'=>'relevers']);

    }


}
