<?php

namespace App\Controller;

use App\Entity\Chantier;
use App\Entity\Contact;
use App\Entity\Client;
use App\Entity\Corbeille;
use App\Entity\Documents;
use App\Entity\Forme;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;


#[Route(path: '/api/contacts')]
class ApiContactController extends AbstractController
{

    #[Route(path: '/python/add/{id}/{con}', name: 'api_add_contact', methods: ['POST'])]
    public function index(int $id, string $con,  Request $request, SerializerInterface $serializer,
                          ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoClient = $doctrine->getRepository(Client::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);
        $apcontact = $serializer->deserialize($apjson, Contact::class, 'json');


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $client = $repoClient->findOneBy(['id'=> $id, 'user'=>$master]);

        $contact = new contact();
        $contact->setDobyuser($apuser);
        $contact->setUser($master);
        $contact->setClient($client);
        $contact->setContact($con);
        $contact->setBureau($apcontact->getBureau());
        $contact->setMail($apcontact->getMail());
        $contact->setPhone($apcontact->getPhone());
        $contact->setFonction($apcontact->getFonction());

        $manager->persist($contact);
        $manager->flush();

        $clients = $repoClient->findClients($master);
        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'pychantiers']);

    }

    #[Route(path: '/client/{id}', name: 'api_get_contact', methods: ['POST'])]
    public function getClientContact(int $id, Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoChantier = $doctrine->getRepository(Chantier::class);
        $repoContact = $doctrine->getRepository(Contact::class);

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $chantier = $repoChantier->findOneBy(['id'=> $id, 'user'=>$master]);
        $client = $chantier->getClient();
        $contacts = $repoContact->findContactes($master,$client);
        return $this->json($contacts, 200, ['Content-Type' => 'application/json'], ['groups' => 'contact']);
    }

    #[Route(path: '/python/delete/{id}', name: 'api_del_contact', methods: ['POST'])]
    public function getDelClient(int $id, Request $request, SerializerInterface $serializer,
                                     ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoContact = $doctrine->getRepository(Contact::class);
        $repoClient = $doctrine->getRepository(Client::class);
        $repoCorbeille = $doctrine->getRepository(Corbeille::class);

        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);


        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $contact = $repoContact->findOneBy(['id'=> $id, 'user'=>$master]);
        $cor = $repoCorbeille->findOneBy(['designation' =>$id, 'master' => $master, 'type'=>'6']);

        if(!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($contact->getId());
            $corbeille->setMaster($master);
            $corbeille->setDelby($apuser);
            $corbeille->setEtat('faible');
            $corbeille->setType('3');
            $manager->persist($corbeille);
            $manager->flush();
            $contact->setCorbeille($corbeille);
            $manager->persist($contact);
            $manager->flush();

            $clients = $repoClient->findClients($master);
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'pychantiers']);
        }

        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/python/upd/{idcli}/{idcon}/{con}', name: 'api_upd_contact', methods: ['POST'])]
    public function getUpdContact(int $idcli, int $idcon, string $con,  Request $request, SerializerInterface $serializer,
                          ManagerRegistry $doctrine)
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoContact = $doctrine->getRepository(Contact::class);
        $repoClient = $doctrine->getRepository(Client::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username'=>$user->getUserIdentifier()]);
        $apcontact = $serializer->deserialize($apjson, Contact::class, 'json');
        
        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $contact = $repoContact->findOneBy(['id'=> $idcon, 'user'=>$master]);
        $client = $repoClient->findOneBy(['id'=> $idcli, 'user'=>$master]);

        $contact->setClient($client);
        $contact->setUser($master);
        $contact->setContact($con);
        $contact->setBureau($apcontact->getBureau());
        $contact->setMail($apcontact->getMail());
        $contact->setPhone($apcontact->getPhone());
        $contact->setFonction($apcontact->getFonction());

        $manager->persist($contact);
        $manager->flush();

        $clients = $repoClient->findClients($master);
        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'pychantiers']);
    }


    #[Route(path: '/pdf/get', name: 'api_chantier_pdf', methods: ['POST'])]
    public function pdff(Request $request, SerializerInterface $serializer, ManagerRegistry $doctrine): JsonResponse
    {
        $repoUser = $doctrine->getRepository(User::class);
        $repoForme = $doctrine->getRepository(Forme::class);
        $repoDocuments = $doctrine->getRepository(Documents::class);
        $repoContact = $doctrine->getRepository(Contact::class);
        $manager = $doctrine->getManager();

        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $contacts = $repoContact->findContacts($master);
        $document = new Documents();

        $forme = $repoForme->findOneBy(['user' => $apuser]);
        $dire = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, 10);


        $docu = $repoDocuments->findOneBy(['user' => $apuser, 'type' => 'contacts', 'numero' => "contacts", 'etat' => 'no']);
        if ($docu) {
            unlink( "pythons/". $apuser->getId().'/'.$docu->getFolde()."/pdfcontacts.pdf");
            rmdir( "pythons/". $apuser->getId().'/'.$docu->getFolde());
            rmdir( "pythons/". $apuser->getId());
            $manager->remove($docu);
            $manager->flush();
        }
        $subject = 'pdfcontacts';
        $document->setUser($apuser);
        $document->setNumero("contacts");
        $document->setDonner($subject);
        $document->setType('contacts');
        $document->setEtat('no');
        $document->setFolde($dire);
        $manager->persist($document);
        $manager->flush();


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


        $html = $this->renderView('content/attachepyth.html.twig', [
            'type' => "contacts",
            'contacts' => $contacts,
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

}
