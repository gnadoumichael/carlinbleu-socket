<?php

namespace App\Controller;

use App\Entity\Chantier;
use App\Entity\Client;
use App\Entity\Corbeille;
use App\Entity\Devis;
use App\Entity\Documents;
use App\Entity\Forme;
use App\Entity\Caisse;
use App\Entity\Bon;
use App\Entity\Ligne;
use App\Entity\Relever;
use App\Entity\User;
use App\Entity\Valider;
use App\Repository\ClientRepository;
use Doctrine\Persistence\ManagerRegistry;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\ORM\Mapping as ORM;


#[Route('/api/client')]
class ApiClientController extends AbstractController
{

    #[Route('/get', name: 'api_client',methods: ['POST'])]
    public function allclients(SerializerInterface $serializer, Request $request , ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoClient = $doctrine->getRepository(Client::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $clients = $repoClient->findClients($master);

        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);
    }


    #[Route('/ios/get', name: 'apiclientios',methods: ['POST'])]
    public function allclientsios(SerializerInterface $serializer, Request $request , ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoClient = $doctrine->getRepository(Client::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $clients = $repoClient->findClientas($master);
        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clientios']);
    }

    #[Route('/python/{type}/get', name: 'api_client_Python',methods: ['POST'])]
    public function allclients_logi(string $type,
        SerializerInterface $serializer,
        Request $request , ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoClient = $doctrine->getRepository(Client::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        if($type === "chantier"){
            $clients = $repoClient->findClientsPython($master);
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'pychantiers']);

        }

        if($type === "clients"){
            $clients = $repoClient->findClients($master);
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'pychantiers']);
        }

        return null;
    }

    #[Route('/searche/{val}', name: 'api_searche',methods: ['POST'])]
    public function allsearche($val,SerializerInterface $serializer, Request $request , ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoBon = $doctrine->getRepository(Bon::class);
        $repoCaisse = $doctrine->getRepository(Caisse::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $devis = $repoDevis->chDevis($val, $master);
        $bons = $repoBon->chBons($val, $master);
        $caisses = $repoCaisse->chCaisses($val, $master);

        $data = [];

        foreach ($devis as $p) {
            $data[] = [
                'refe' => "Devis N° ".$p->getIddevis(),
                'id' => $p->getId() ,
                'idchantier' => $p->getChantier()->getId(),
                'type' => 'devis',
                'ttc' => $p->getTotalttc(),
                'nom' => $p->getClient()->getNomclient()." | ".$p->getChantier()->getNomchantier()
                ];
        }

        foreach ($bons as $p) {
            $data[] = [
                'refe' => "Bon N° ".$p->getNumbon(),
                'id' => $p->getId() ,
                'idchantier' => $p->getChantier()->getId(),
                'type' => 'bons',
                'ttc' => $p->getTotalttc(),
                'nom' => $p->getClient()->getNomclient()." | ".$p->getChantier()->getNomchantier()
            ];
        }

        foreach ($caisses as $p) {
            $data[] = [
                'refe' => "Caisse N° ".$p->getNumcaisse(),
                'id' => $p->getId() ,
                'idchantier' => $p->getChantier()->getId(),
                'type' => 'caisses',
                'ttc' => $p->getMontant(),
                'nom' => $p->getClient()->getNomclient()." | ".$p->getChantier()->getNomchantier()
            ];
        }

        $po = json_encode($data);
        return $this->json(['result' => $po], 200);
    }

    #[Route('/relever/get/{id}', name: 'api_client_relever',methods: ['POST'])]
    public function clientRelever(int $id, SerializerInterface $serializer, Request $request , ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantiers = $repoChantier->findChantiersReleves($master, $id);
        return $this->json($chantiers, 200, ['Content-Type' => 'application/json'], ['groups' => 'clireleve']);
    }

    #[Route('/windows/add', name: 'api_add_client_windows',methods: ['POST'])]
    public function addClientwindows(SerializerInterface $serializer,  Request $request, ManagerRegistry $doctrine)
    {

        $manager = $doctrine->getManager();
        $repoUser = $doctrine->getRepository(User::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apclient = $serializer->deserialize($apjson, Client::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $client = new Client();
        $client->setAdresse($apclient->getAdresse());
        $client->setMail($apclient->getMail());
        $client->setContact($apclient->getContact());
        $client->setNomClient($apclient->getNomClient());
        $client->setDobyuser($apuser);
        $client->setUser($master);
        $client->setEtat("bon");
        $client->setContribuable($apclient->getContribuable());
        $manager->persist($client);
        $manager->flush();


        return $this->json($client, 200, ['Content-Type' => 'application/json'], ['groups' => 'clientios']);
    }

    #[Route('/python/add', name: 'api_add_client',methods: ['POST'])]
    public function addClient(SerializerInterface $serializer,  Request $request, ManagerRegistry $doctrine)
    {

        $manager = $doctrine->getManager();
        $repoUser = $doctrine->getRepository(User::class);
        $repoClient = $doctrine->getRepository(Client::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apclient = $serializer->deserialize($apjson, Client::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $client = new Client();
        $client->setAdresse($apclient->getAdresse());
        $client->setMail($apclient->getMail());
        $client->setContact($apclient->getContact());
        $client->setNomClient($apclient->getNomClient());
        $client->setDobyuser($apuser);
        $client->setUser($master);
        $client->setEtat("bon");
        $client->setContribuable($apclient->getContribuable());
        $manager->persist($client);
        $manager->flush();

        $clients = $repoClient->findClients($master);
        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'pychantiers']);
    }

    #[Route('/python/update/{id}', name: 'api_upd_client',methods: ['POST'])]
    public function updClient(SerializerInterface $serializer,int $id, Request $request, ManagerRegistry $doctrine)
    {

        $manager = $doctrine->getManager();
        $repoUser = $doctrine->getRepository(User::class);
        $repoClient = $doctrine->getRepository(Client::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apclient = $serializer->deserialize($apjson, Client::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $client = $repoClient->findOneBy(["id"=>$id, "user"=>$master]);
        $client->setAdresse($apclient->getAdresse());
        $client->setMail($apclient->getMail());
        $client->setContact($apclient->getContact());
        $client->setNomClient($apclient->getNomClient());
        $client->setContribuable($apclient->getContribuable());
        $manager->persist($client);
        $manager->flush();

        $manager->flush();

        /* 🔥 SOCKET NOTIFICATION */
        $data = [
            'id' => $client->getId(),
            'nom' => $client->getNomClient(),
            'adresse' => $client->getAdresse(),
            'contact' => $client->getContact(),
            'mail' => $client->getMail(),
        ];

        $ch = curl_init('https://carlinbleu.com:3001/emit/client_updated');

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data, JSON_THROW_ON_ERROR));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_exec($ch);
        curl_close($ch);

        return $this->json($client, 200, ['Content-Type' => 'application/json'], ['groups' => 'clientios']);

    }

    #[Route('/python/delete/{id}', name: 'api_del_client',methods: ['POST'])]
    public function delClient(SerializerInterface $serializer, int $id, Request $request, ManagerRegistry $doctrine)
    {

        $manager = $doctrine->getManager();
        $repoUser = $doctrine->getRepository(User::class);
        $repoClient = $doctrine->getRepository(Client::class);
        $repoCorbeille = $doctrine->getRepository(Corbeille::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }
        $client = $repoClient->findOneBy(['id' => $id, 'user' => $master]);
        $cor = $repoCorbeille->findOneBy(['designation' => $client->getId(), 'master' => $master, 'type' => 1]);
        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($client->getId());
            $corbeille->setMaster($master);
            $corbeille->setDelby($apuser);
            $corbeille->setEtat('faible');
            $corbeille->setType('1');
            $manager->persist($corbeille);
            $manager->flush();
            $client->setCorbeille($corbeille);
            $manager->persist($client);
            $manager->flush();

            $clients = $repoClient->findClientas($master);
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clientios']);
        }

        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route('/delreglement/{id}/{idclient}', name: 'api_del_reglement',methods: ['POST'])]
    public function delReglement(SerializerInterface $serializer, int $id, int $idclient, Request $request, ManagerRegistry $doctrine)
    {

        $manager = $doctrine->getManager();
        $repoUser = $doctrine->getRepository(User::class);
        $repoValider = $doctrine->getRepository(Valider::class);
        $repoRelever = $doctrine->getRepository(Relever::class);
        $repoClient = $doctrine->getRepository(Client::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $client = $repoClient->findOneBy(['id' => $idclient, 'user'=>$master]);
        $relever = $repoRelever->findOneBy(['id' => $id, 'client'=>$client]);

        if ($relever->getChantier()->getUser() !== $master) {
            return $this->json(['result' => 'erreur'], 404);
        }

        $chantier = $relever->getChantier();
        if ($relever->getFacture()) {
            $facture = $relever->getFacture();
            $facture->setEtat("save");
            $manager->persist($facture);
            $manager->flush();
        }

        // ON RECUPERE LE REGLEMENT DANS VALIDER
        $valider = $repoValider->findOneBy(['commun' => $relever->getCommun()]);

        $reglement = $chantier->getReglement();
        $reglement = $reglement - $relever->getMontant();
        $chantier->setReglement($reglement);

        $manager->persist($chantier);
        $manager->remove($relever);
        $manager->remove($valider);
        $manager->flush();
        return $this->json(['result' => 'success'], 200);

    }

    #[Route(path: '/pdf/get', name: 'api_clients', methods: ['POST'])]
    public function pdff(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): JsonResponse
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoForme = $doctrine->getRepository(Forme::class);
        $repoDocuments = $doctrine->getRepository(Documents::class);
        $repoClient = $doctrine->getRepository(Client::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $clients = $repoClient->findClients($master);
        $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'clients', 'numero' => "clients", 'etat' => 'no']);

        if ($docu) {
            unlink( "pythons/". $apuser->getId().'/'.$docu->getFolde()."/pdfclients.pdf");
            rmdir( "pythons/". $apuser->getId().'/'.$docu->getFolde());
            rmdir( "pythons/". $apuser->getId());
            $manager->remove($docu);
            $manager->flush();
        }

        // RECUPERATION DES MISES EN FORME
        $forme = $repoForme->findOneBy(['user' => $apuser]);
        $subject = 'pdfclients';

        $document = new Documents();
        $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);

        if (!mkdir($concurrentDirectory = 'pythons/'.$apuser->getId(), 0777) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }

        if (!mkdir($concurrentDirectory = 'pythons/'.$apuser->getId().'/'.$dire, 0777) && !is_dir($concurrentDirectory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }

        $document->setUser($apuser);
        $document->setNumero("clients");
        $document->setDonner($subject);
        $document->setType('clients');
        $document->setEtat('no');
        $document->setFolde($dire);
        $manager->persist($document);
        $manager->flush();

        $pdfOptions = new Options();
        $pdfOptions->setIsRemoteEnabled(true);
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('content/attachepyth.html.twig', [
            'type' => "clients",
            'clients' => $clients,
            'formes' => $forme,
        ]);

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

    #[Route('/relevers/{id}', name: 'api_client_relevers',methods: ['POST'])]
    public function clientRelevers(int $id, SerializerInterface $serializer, Request $request , ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier= $doctrine->getRepository(Chantier::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantiers = $repoChantier->findChantiersReleves($master,$id);

        return $this->json($chantiers, 200, ['Content-Type' => 'application/json'], ['groups' => 'pychantiers']);
    }

}
