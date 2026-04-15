<?php

namespace App\Controller;

use App\Entity\Chantier;
use App\Entity\Devis;
use App\Entity\Documents;
use App\Entity\Facture;
use App\Entity\Fichier;
use App\Entity\Forme;
use App\Entity\Groupe;
use App\Entity\Ligne;
use App\Entity\User;
use App\Entity\Valider;
use App\Form\FichierType;
use App\Service\FileUploaders;
use Doctrine\Persistence\ManagerRegistry;
use JsonException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: '/api/fichier')]
class ApiFichierController extends AbstractController
{
    #[Route(path: '/get', name: 'api_get_fichier', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function index(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoFichier = $doctrine->getRepository(Fichier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $fichiers = $repoFichier->findFichiers($master);

        return $this->json($fichiers, 200, ['Content-Type' => 'application/json'], ['groups' => 'fichiers']);
    }

    #[Route(path: '/delete/{id}', name: 'api_delete_fichier', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delfichier(string $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoFichier = $doctrine->getRepository(Fichier::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $fichier = $repoFichier->findOneBy(["id" => $id, "user" => $master]);

        unlink('upload/' . $fichier->getNomfichier());

        $manager->remove($fichier);
        $manager->flush();

        return $this->json(['result' => 'success'], 200);
    }

    #[Route(path: '/add/chantier/{id}', name: 'api_chantier_fichier', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function addfichierchantier(string $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);

        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(["id" => $id, "user" => $master]);

        $json = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
        $bs4 = $json["file"];
        $filename = $json["filename"];
        $taille = $json["size"];
        $bin = base64_decode($bs4, true);

        $dir = $master->getId().$master->getNom();
        $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
        if (!mkdir($concurrentDirectory = 'coffre/'.$dir.'/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }


        file_put_contents($concurrentDirectory.'/'. $filename, $bin);

        if(file_exists ($concurrentDirectory.'/'. $filename)){
            $ficher = new Fichier();
            $ficher->setChantier($chantier);
            $ficher->setDate(new \DateTime('NOW'));
            $ficher->setUser($master);
            $ficher->setTaille($taille);
            $ficher->setType("chantier");
            $ficher->setNomfichier($filename);
            $ficher->setFolde($concurrentDirectory);
            $manager->persist($ficher);
            $manager->flush();
            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/technique/add', name: 'api_technique_fichier', methods: ['POST'])]
    public function addfichiertechnique(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);

        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $json = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
        $bs4 = $json["file"];
        $filename = $json["filename"];
        $categorie = $json["categorie"];
        $taille = $json["size"];
        $bin = base64_decode($bs4, true);

        $dir = $master->getId().$master->getNom();
        $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
        if (!mkdir($concurrentDirectory = 'coffre/'.$dir.'/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }

        file_put_contents($concurrentDirectory.'/'. $filename, $bin);

        if(file_exists ($concurrentDirectory.'/'. $filename)){
            $ficher = new Fichier();
            $ficher->setDate(new \DateTime('NOW'));
            $ficher->setUser($master);
            $ficher->setTaille($taille);
            $ficher->setType("technique");
            $ficher->setCategorie($categorie);
            $ficher->setNomfichier($filename);
            $ficher->setFolde($concurrentDirectory);
            $manager->persist($ficher);
            $manager->flush();
            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/descriptif/add', name: 'api_descriptif_fichier', methods: ['POST'])]
    public function addfichierdescriptif(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);

        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $json = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
        $bs4 = $json["file"];
        $filename = $json["filename"];
        $taille = $json["size"];
        $bin = base64_decode($bs4, true);
        $categorie = $json["categorie"];

        $dir = $master->getId().$master->getNom();
        $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);
        if (!mkdir($concurrentDirectory = 'coffre/'.$dir.'/' . $dire, 0777) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }


        file_put_contents($concurrentDirectory.'/'. $filename, $bin);

        if(file_exists ($concurrentDirectory.'/'. $filename)){
            $ficher = new Fichier();
            $ficher->setDate(new \DateTime('NOW'));
            $ficher->setUser($master);
            $ficher->setTaille($taille);
            $ficher->setType("descriptif");
            $ficher->setCategorie($categorie);
            $ficher->setNomfichier($filename);
            $ficher->setFolde($concurrentDirectory);
            $manager->persist($ficher);
            $manager->flush();
            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'error'], 404);
    }

}
