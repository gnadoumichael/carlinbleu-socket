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
use App\Service\EnteteUploader;
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

#[Route(path: '/api/forme')]
class ApiFormeController extends AbstractController
{
    #[Route(path: '/get', name: 'api_get_forme', methods: ['POST'])]
    public function index(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoForme = $doctrine->getRepository(Forme::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $forme = $repoForme->findBy(['user'=>$apuser]);

        return $this->json($forme, 200, ['Content-Type' => 'application/json'], ['groups' => 'forme']);
    }

    #[Route(path: '/choix/{id}', name: 'api_choix_forme', methods: ['POST'])]
    public function choixforme(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoForme = $doctrine->getRepository(Forme::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        $formes = $repoForme->findBy(['user'=>$apuser]);
        $forme = $repoForme->findOneBy(['user'=>$apuser, 'id'=>$id]);
        foreach ($formes as $forms){
            if ($forms->getId() == $forme->getId()){
                $forms->setUsed("used");
                $manager->persist($forms);
                $manager->flush();
            }else{
                $forms->setUsed("null");
                $manager->persist($forms);
                $manager->flush();
            }
        }

        return $this->json($formes, 200, ['Content-Type' => 'application/json'], ['groups' => 'forme']);
    }


    #[Route(path: '/update/{id}', name: 'api_updates_forme', methods: ['POST'])]
    public function updateformeSS(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine) {

        $manager = $doctrine->getManager();

        $repoUser  = $doctrine->getRepository(User::class);
        $repoForme = $doctrine->getRepository(Forme::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $apforme = $serializer->deserialize($apjson, Forme::class, 'json');

        $forme = $repoForme->findOneBy(['id'   => $id, 'user' => $apuser]);

        $json = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);

        if (isset($json['link'])) {
            $bs4Entete = $json["link"];
            $bin = base64_decode($bs4Entete, true);
            $finfo = new \finfo(FILEINFO_MIME_TYPE);
            $mime = $finfo->buffer($bin);
            if ($mime === 'image/jpeg') {
                $extension = '.jpg';
            } elseif ($mime === 'image/gif') {
                $extension = '.gif';
            } elseif ($mime === 'image/png') {
                $extension = '.png';
            } elseif ($mime === 'image/webp') {
                $extension = '.webp';
            } else {
                throw new \Exception('Format image non supporté : ' . $mime);
            }


            if ($forme->getRang() === 1) {
                $filename = $apuser->getId() . 'tt' . $extension;
            } else {
                $filename = $apuser->getId() . 'tte' . $extension;
            }

            file_put_contents('gallery/' . $filename, $bin);
            $forme->setLink($filename);

        }
        if (isset($json['footerImage'])) {
            $bs4Foot = $json["footerImage"];
            $binFoot = base64_decode($bs4Foot, true);
            $fin = new \finfo(FILEINFO_MIME_TYPE);
            $mimeFoot = $fin->buffer($binFoot);
            if ($mimeFoot === 'image/jpeg') {
                $exten = '.jpg';
            } elseif ($mimeFoot === 'image/gif') {
                $exten = '.gif';
            } elseif ($mimeFoot === 'image/png') {
                $exten = '.webp';
            } else {
                throw new\Exception('Format image non supporté : ' . $mimeFoot);
            }


            if ($forme->getRang() === 1) {
                $filenam = $apuser->getId() . 'ff' . $exten;
            } else {
                $filenam = $apuser->getId() . 'ffe' . $exten;
            }

            file_put_contents('gallery/' . $filenam, $binFoot);
            $forme->setFooterImage($filenam);

        }

        $forme->setIntituler($apforme->getIntituler());
        $forme->setTypeEntete($apforme->getTypeEntete());
        $forme->setTypeFooter($apforme->getTypeFooter());
        $forme->setDsize($apforme->getDsize());

        $forme->setHeaderWith($apforme->getHeaderWith());
        $forme->setHeaderHeight($apforme->getHeaderHeight());

        $forme->setTeteH($apforme->getTeteH());
        $forme->setTeteY($apforme->getTeteY());

        $forme->setTeteDB($apforme->getTeteDB());
        $forme->setTeteDD($apforme->getTeteDD());
        $forme->setTeteDG($apforme->getTeteDG());
        $forme->setTeteDH($apforme->getTeteDH());

        $forme->setPiedsize($apforme->getPiedsize());
        $forme->setFooterHeight($apforme->getFooterHeight());
        $forme->setHeaderText($apforme->getHeaderText());
        $forme->setPied($apforme->getPied());

        $manager->persist($forme);
        $manager->flush();

        return $this->json($forme, 200, ['Content-Type' => 'application/json'], ['groups' => 'forme']);
    }


    #[Route(path: '/updatesss/{id}', name: 'api_update_forme', methods: ['POST'])]
    public function updateFormeWithImages(
        int $id,
        Request $request,
        SerializerInterface $serializer,
        ManagerRegistry $doctrine
    ): Response {

        $manager = $doctrine->getManager();
        $repoUser  = $doctrine->getRepository(User::class);
        $repoForme = $doctrine->getRepository(Forme::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        // 2️⃣ Récupérer l'entité Forme
        $forme = $repoForme->findOneBy(['id' => $id, 'user' => $apuser]);


        // 3️⃣ Récupérer les données Forme (JSON part)
        $formeJson = $request->request->get('forme');
        if ($formeJson) {
            $apforme = $serializer->deserialize($formeJson, Forme::class, 'json');

            $forme
                ->setIntituler($apforme->getIntituler())
                ->setTypeEntete($apforme->getTypeEntete())
                ->setDsize($apforme->getDsize())
                ->setHeaderWith($apforme->getHeaderWith())
                ->setHeaderHeight($apforme->getHeaderHeight())
                ->setTeteH($apforme->getTeteH())
                ->setTeteY($apforme->getTeteY())
                ->setTeteDB($apforme->getTeteDB())
                ->setTeteDD($apforme->getTeteDD())
                ->setTeteDG($apforme->getTeteDG())
                ->setTeteDH($apforme->getTeteDH())
                ->setPiedsize($apforme->getPiedsize())
                ->setFooterHeight($apforme->getFooterHeight())
                ->setHeaderText($apforme->getHeaderText());
        }


        $file = $request->files->get('enteteImage');
        $fille = $request->files->get('footImage');
        if ($file) {
            if ($forme->getRang() === 1) {
                $filename = $apuser->getId() . 'tt';
            } else {
                $filename = $apuser->getId() . 'tte';
            }
            $fich = new EnteteUploader('gallery/');
            $link = $fich->upload($file, $filename);
            $forme->setLink($link);
        }
        if ($fille) {
            if ($forme->getRang() === 1) {
                $filename = $apuser->getId() . 'ff';
            } else {
                $filename = $apuser->getId() . 'ffe';
            }

            $fich = new EnteteUploader('gallery/');
            $link = $fich->upload($fille, $filename);
            $forme->setfooterImage($link);
        }

        $manager->persist($forme);
        $manager->flush();

        return $this->json($forme, 200, ['Content-Type' => 'application/json'], ['groups' => 'forme']);
    }



}
