<?php

namespace App\Controller;

use App\Entity\Alerte;
use App\Entity\Bon;
use App\Entity\Client;
use App\Entity\Corbeille;
use App\Entity\Documents;
use App\Entity\Forme;
use App\Entity\Fournisseur;

use App\Entity\Groupe;
use App\Entity\Historique;
use App\Entity\Ligne;
use App\Entity\User;
use App\Entity\Valider;
use Doctrine\Persistence\ManagerRegistry;
use Dompdf\Dompdf;
use Dompdf\Options;
use phpDocumentor\Reflection\Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class ApiFournisseurController
 * @package App\Controller
 */
#[Route(path: '/api/fournisseur')]
class ApiFournisseurController extends AbstractController
{

    private ManagerRegistry $doctrine;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }


    #[Route(path: '/get', name: 'api_fournisseurs', methods: ['POST'])]
    public function getFournisseurs(SerializerInterface $serializer,  Request $request): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $fournisseurs = $repoFournisseur->findBy(["user"=>$master],['fournisseur'=>"ASC"]);

        return $this->json($fournisseurs, 200, ['Content-Type' => 'application/json'], ['groups' => 'pyfournisseurs']);

    }

    #[Route(path: '/fournes/get', name: 'api_fournes_get', methods: ['POST'])]
    public function fournes(SerializerInterface $serializer,  Request $request): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $fournisseurs = $repoFournisseur->findFournes($master);

        return $this->json($fournisseurs, 200, ['Content-Type' => 'application/json'], ['groups' => 'pyfournisseurs']);

    }

    #[Route(path: '/prestataires/get', name: 'api_prestataires_get', methods: ['POST'])]
    public function getPresta(SerializerInterface $serializer,  Request $request): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $fournisseurs = $repoFournisseur->findPrestas($master);

        return $this->json($fournisseurs, 200, ['Content-Type' => 'application/json'], ['groups' => 'pyfournisseurs']);

    }

    #[Route(path: '/presta/get', name: 'api_presta_get', methods: ['POST'])]
    public function getPrestataire(SerializerInterface $serializer,  Request $request): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $fournisseurs = $repoFournisseur->findPrestas($master);

        return $this->json($fournisseurs, 200, ['Content-Type' => 'application/json'], ['groups' => 'fours']);

    }

    #[Route(path: '/fourni/get', name: 'api_fourniget', methods: ['POST'])]
    public function getFournis(SerializerInterface $serializer,  Request $request): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $fournisseurs = $repoFournisseur->findFournise($master);

        return $this->json($fournisseurs, 200, ['Content-Type' => 'application/json'], ['groups' => 'fours']);

    }

    #[Route(path: '/fournisseur/get', name: 'api_fournisseurs_get', methods: ['POST'])]
    public function getFourni(SerializerInterface $serializer,  Request $request): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $fournisseurs = $repoFournisseur->findFournis($master);

        return $this->json($fournisseurs, 200, ['Content-Type' => 'application/json'], ['groups' => 'pyfournisseurs']);

    }

    #[Route(path: '/add/{type}/{fourne}', name: 'api_fournisseur_add', methods: ['POST'])]
    public function addFournisseures(SerializerInterface $serializer, int $type = null, string $fourne = null,
                                    Request $request): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);
        $manager = $this->doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $apfournisseur = $serializer->deserialize($apjson, Fournisseur::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $fournisseur = new Fournisseur();
        $fournisseur->setFournisseur($fourne);
        $fournisseur->setUser($master);
        $fournisseur->setType($type);
        $fournisseur->setMail($apfournisseur->getMail());
        $fournisseur->setAdresse($apfournisseur->getAdresse());
        $fournisseur->setMobile($apfournisseur->getMobile());
        $fournisseur->setFonction($apfournisseur->getFonction());

        $manager->persist($fournisseur);
        $manager->flush();

        return $this->json($fournisseur, 200, ['Content-Type' => 'application/json'], ['groups' => 'pyfournisseurs']);

    }

    #[Route(path: '/upd/{type}/{fourne}/{id}', name: 'upd_fournisseur_add', methods: ['POST'])]
    public function updFournisseures(SerializerInterface $serializer,int $id = null,  int $type = null, string $fourne = null,
                                     Request $request): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);
        $manager = $this->doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);
        $apfournisseur = $serializer->deserialize($apjson, Fournisseur::class, 'json');

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }
        $fournisseur = $repoFournisseur->findOneBy(['id'=>$id , 'user'=>$master]);

        $fournisseur->setFournisseur($fourne);
        $fournisseur->setUser($master);
        $fournisseur->setType($type);
        $fournisseur->setMail($apfournisseur->getMail());
        $fournisseur->setAdresse($apfournisseur->getAdresse());
        $fournisseur->setMobile($apfournisseur->getMobile());
        $fournisseur->setFonction($apfournisseur->getFonction());

        $manager->persist($fournisseur);
        $manager->flush();

        return $this->json($fournisseur, 200, ['Content-Type' => 'application/json'], ['groups' => 'pyfournisseurs']);

    }

    #[Route(path: '/del/{id}', name: 'del_fournisseur_api', methods: ['POST'])]
    public function delFournisseures(SerializerInterface $serializer,int $id = null, Request $request): JsonResponse
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoFournisseur = $this->doctrine->getRepository(Fournisseur::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);
        $repoValide = $this->doctrine->getRepository(Valider::class);
        $manager = $this->doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $fournisseur = $repoFournisseur->findOneBy(['id'=>$id , 'user'=>$master]);

        $cor = $repoCorbeille->findOneBy(['designation' => $fournisseur->getId(), 'master' => $master, 'type' => 44]);
        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($fournisseur->getId());
            $corbeille->setMaster($master);
            $corbeille->setDelby($apuser);
            $corbeille->setEtat('faible');
            $corbeille->setType('44');
            $manager->persist($corbeille);
            $manager->flush();
            $fournisseur->setCorbeille($corbeille);
            $manager->persist($fournisseur);
            $manager->flush();

            $fournisseurs = $repoFournisseur->findBy(["user"=>$master],['fournisseur'=>"ASC"]);
            return $this->json($fournisseurs, 200, ['Content-Type' => 'application/json'], ['groups' => 'pyfournisseurs']);
        }

        return $this->json(['result' => 'erreur'], 404);

    }


    #[Route(path: '/pdf/{typ}/get', name: 'api_fournisseur_pdf', methods: ['POST'])]
    public function pdff(string $typ, Request $request, SerializerInterface $serializer,
                         ManagerRegistry $doctrine): JsonResponse
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoForme = $doctrine->getRepository(Forme::class);
        $repoDocuments = $doctrine->getRepository(Documents::class);
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

        $document = new Documents();

        $forme = $repoForme->findOneBy(['user' => $apuser]);
        $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);

        if($typ === "fourne"){
            $fournes = $repoFournisseur->findBy(['user' => $master, 'type' => 1], ['fournisseur' => 'ASC']);
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'fourne', 'numero' => "fourne", 'etat' => 'no']);
            if ($docu) {
                unlink( "pythons/". $apuser->getId().'/'.$docu->getFolde()."/pdffournisseurs.pdf");
                rmdir( "pythons/". $apuser->getId().'/'.$docu->getFolde());
                rmdir( "pythons/". $apuser->getId());
                $manager->remove($docu);
                $manager->flush();
            }
            $subject = 'pdffournisseurs';
            $document->setUser($apuser);
            $document->setNumero("fourne");
            $document->setDonner($subject);
            $document->setType('fourne');
            $document->setEtat('no');
            $document->setFolde($dire);
            $manager->persist($document);
            $manager->flush();
        }
        if($typ === "presta"){
            $fournes = $repoFournisseur->findBy(['user' => $master, 'type' => 3], ['fournisseur' => 'ASC']);
            $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'presta', 'numero' => "presta", 'etat' => 'no']);
            if ($docu) {
                unlink( "pythons/". $apuser->getId().'/'.$docu->getFolde()."/pdfprestataires.pdf");
                rmdir( "pythons/". $apuser->getId().'/'.$docu->getFolde());
                rmdir( "pythons/". $apuser->getId());
                $manager->remove($docu);
                $manager->flush();
            }
            $subject = 'pdfprestataires';
            $document->setUser($apuser);
            $document->setNumero("presta");
            $document->setDonner($subject);
            $document->setType('presta');
            $document->setEtat('no');
            $document->setFolde($dire);
            $manager->persist($document);
            $manager->flush();
        }


        if (!mkdir($concurrentDirectory = 'pythons/'.$apuser->getId(), 0777) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }

        if (!mkdir($concurrentDirectory = 'pythons/'.$apuser->getId().'/'.$dire, 0777) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }


        $pdfOptions = new Options();
        $pdfOptions->setIsRemoteEnabled(true);
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file

        if($typ === "fourne") {
            $html = $this->renderView('content/attachepyth.html.twig', [
                'type' => "fourne",
                'fournes' => $fournes,
                'formes' => $forme,
            ]);
        }
        if($typ === "presta") {
            $html = $this->renderView('content/attachepyth.html.twig', [
                'type' => "presta",
                'prestas' => $fournes,
                'formes' => $forme,
            ]);
        }


        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'LANDSCAPE');
        // Render the HTML as PDF
        $dompdf->render();
        // Store PDF Binary Data
        $output = $dompdf->output();
        // In this case, we want to write the file in the public directory
        $publicDirectory = 'pythons/'.$apuser->getId().'/'.$document->getFolde() . '/';
        $pdfFilepath = $publicDirectory . $subject . '.pdf';
        // Write file to the desired path
        file_put_contents($pdfFilepath, $output);
        // Send some text response

        return $this->json(['result' => $document->getFolde()], 200);
    }

}