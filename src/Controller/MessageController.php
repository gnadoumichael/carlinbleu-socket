<?php

namespace App\Controller;

use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Chat;
use App\Entity\Client;
use App\Entity\Devis;
use App\Entity\Documents;
use App\Entity\Historique;
use App\Entity\Message;
use App\Entity\Tache;
use App\Entity\User;
use App\Form\MessageType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Part\DataPart;
use Symfony\Component\Mime\Part\File;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;

#[Route(path: '/crm/message')]
class MessageController extends AbstractController
{
    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    public function getMaster()
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);

        if ($use->getCompte() === null) {
            $master = $use;
        } else {
            $master = $repoUser->findOneBy(['id' => $use->getCompte()]);
        }
        return $master;
    }

    public function getTimeZoner()
    {
        $repoUser = $this->doctrine->getRepository(User::class);
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);

        if ($use->getCompte() === null) {
            $master = $use;
        } else {
            $master = $repoUser->findOneBy(['id' => $use->getCompte()]);
        }

        $pays = $master->getPays();

        if($pays->getId() === 1){
         return  date_default_timezone_set('Africa/Abidjan');
        }

        return null;

    }

    function delete_directory($dirname): bool
    {
        if (is_dir($dirname))
            $dir_handle = opendir($dirname);
        if (!$dir_handle)
            return false;
        while ($file = readdir($dir_handle)) {
            if ($file != "." && $file != "..") {
                if (!is_dir($dirname . "/" . $file))
                    unlink($dirname . "/" . $file);
                else
                    $this->delete_directory($dirname . '/' . $file);
            }
        }
        closedir($dir_handle);
        rmdir($dirname);
        return true;
    }
    private function getJson(Request $request)
    {
        $data = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpException(400, 'Invalid json');
        }
        return $data;
    }

    #[Route(path: '/add/{id}/{contenu}', name: 'addMessage', methods: ['POST'])]
    public function getMessagee(int $id, string $contenu, Request $request): JsonResponse
    {
        $repoTache = $this->doctrine->getRepository(Tache::class);
        $repoMessage = $this->doctrine->getRepository(Message::class);

        $manager = $this->doctrine->getManager();

        $tache = $repoTache->findOneBy(['user' => $this->getMaster(), 'id' => $id]);

        $message = new Message();
        $message->setContenu($contenu);
        $message->setTache($tache);
        $message->setDate(new \DateTime('NOW'));
        $message->setUser($this->getMaster());
        $message->setObjet('TACHE');
        $message->setSender($this->getUser());
        $message->setSecret($this->getUser()->getId());
        $manager->persist($message);
        $manager->flush();


        $chat = new Chat();
        $chat->setMessage($contenu);
        $chat->setUser($this->getMaster());
        $chat->setOwner($this->getUser());
        $chat->setReceiver($this->getUser());
        $chat->setDate(new \DateTime('NOW'));
        $chat->setTache($tache);
        $chat->setIsRead(false);
        $manager->persist($chat);
        $manager->flush();



        $messages = $repoMessage->findBy(['tache' => $tache, 'user' => $this->getMaster()], ['date' => 'ASC']);
        return $this->json($messages, 200, ['Content-Type' => 'application/json'], ['groups' => 'messages']);
    }

    #[Route(path: '/send', name: 'sendMessage', methods: ['POST'])]
    public function sendMessage(Request $request, MailerInterface $mailer): JsonResponse
    {
        $repoDocuments = $this->doctrine->getRepository(Documents::class);
        $manager = $this->doctrine->getManager();

        $docus = $repoDocuments->findBy(['user' => $this->getUser(), 'etat' => 'no']);
        $json = $this->getJson($request);
        if ($this->isCsrfTokenValid('sendMessage', $json['token'])) {

            $from = $this->getUser()->getUserIdentifier();
            $to = $json["receiver"];
            $subject = $json["objet"];
            $contenu = $json["contenu"];


            $email = (new Email())
                ->from(new Address($from, $this->getUser()->getNom().' '.$this->getUser()->getPrenoms().' '.'<'.$from.'>'))
                ->to($to)
                ->replyTo($from)
                //->priority(Email::PRIORITY_HIGH)
                ->subject($subject)
                ->html($contenu);
            if ($docus) {
                foreach ($docus as $doc) {
                    $file = "pdf/" . $doc->getFolde() . "/" . $doc->getDonner() . ".pdf";
                    $email ->addPart(new DataPart(new File($file)));
                }
            }
            $mailer->send($email);
            $this->getTimeZoner();
            $message = new Message();
            $message->setUser($this->getUser());
            $message->setSender($this->getUser());
            $message->setReceiver($to);
            $message->setObjet($subject );
            $message->setDate(new \DateTime('NOW'));
            $message->setContenu($json["contenu"]);
            $message->setCopies($json["copies"]);

            $manager->persist($message);
            $manager->flush();

            foreach ($docus as $doc) {
                $doc->setEtat('yes');
                $doc->setMessage($message);

                $manager->persist($doc);
                $manager->persist($message);
                $manager->flush();
            }
        }

        return $this->json(['result' => 'success'], 200);

    }

    #[Route(path: '/gettache/{id}', name: 'getMessageTache', methods: ['GET'])]
    public function getMessageTache(int $id): JsonResponse
    {
        $repoTache = $this->doctrine->getRepository(Tache::class);
        $repoMessage = $this->doctrine->getRepository(Message::class);

        $tache = $repoTache->findOneBy(['id'=>$id, 'user' => $this->getMaster()]);

        $messages = $repoMessage->findBy(['tache' => $tache, 'user' => $this->getMaster()], ['date' => 'ASC']);
        return $this->json($messages, 200, ['Content-Type' => 'application/json'], ['groups' => 'messages']);

    }

    #[Route(path: '/delete/{idmess}/{idtache}', name: 'delMessage', methods: ['DELETE'])]
    public function delMessage(int $idmess, int $idtache): JsonResponse
    {
        $repoTache = $this->doctrine->getRepository(Tache::class);
        $repoMessage = $this->doctrine->getRepository(Message::class);

        $message = $repoMessage->findOneBy(['id'=>$idmess, 'user' => $this->getMaster()]);
        $tache = $repoTache->findOneBy(['id'=>$idtache, 'user' => $this->getMaster()]);

        $manager = $this->doctrine->getManager();

        $manager->remove($message);
        $manager->flush();


        $messages = $repoMessage->findBy(['tache' => $tache, 'user' => $this->getMaster()], ['date' => 'ASC']);
        return $this->json($messages, 200, ['Content-Type' => 'application/json'], ['groups' => 'messages']);

    }

    #[Route(path: '/del/{idmess}', name: 'delMessage', methods: ['DELETE'])]
    public function delMes(int $idmess): JsonResponse
    {
        $repoTache = $this->doctrine->getRepository(Tache::class);
        $repoMessage = $this->doctrine->getRepository(Message::class);

        $message = $repoMessage->findOneBy(['id'=>$idmess, 'user' => $this->getMaster()]);
        $manager = $this->doctrine->getManager();

        $manager->remove($message);
        $manager->flush();

        return $this->json(['result' => 'success'], 200);

    }

    #[Route(path: '/', name: 'message')]
    #[Route(path: '/apercu/{id}/{type}/{idmessage}', name: 'apercu')]
    #[Route(path: '/edit/{idmessage}', name: 'editmessage')]
    public function index($id = null, $type = null, $idmessage = null)
    {

        // REPOSITORIES ET INITIALISATION
        $repoDocuments = $this->doctrine->getRepository(Documents::class);
        $repoMessage = $this->doctrine->getRepository(Message::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoClient = $this->doctrine->getRepository(Client::class);


        $devis = null;
        $caisse = null;
        $bon = null;
        $alone = null;

        // RECUPERATION DE TOUS LES DOCUMENTS
        $mess = $repoMessage->findOneBy(['id' => $idmessage, 'user' => $this->getUser()]);

        // APERCU POUR LES DEVIS
        if ($type === 'devis') {
            $devis = $repoDevis->findOneBy(['user' => $this->getUser(), 'id' => $id]);
            if (!$devis) {
                return $this->redirectToRoute('deconnecte');
            }
            $alone = $repoDocuments->findOneBy(['numero' => $devis->getId(), 'user' => $this->getUser()]);
        }

        // APERCU POUR LES BONS
        if ($type === 'bon') {
            $bon = $repoBon->findOneBy(['user' => $this->getUser(), 'id' => $id]);
            if (!$bon) {
                return $this->redirectToRoute('deconnecte');
            }
            $alone = $repoDocuments->findOneBy(['numero' => $bon->getId(), 'user' => $this->getUser()]);
        }

        // APERCU POUR LES BONS DE CAISSE
        if ($type === 'caisse') {
            $caisse = $repoCaisse->findOneBy(['user' => $this->getUser(), 'id' => $id]);
            if (!$caisse) {
                return $this->redirectToRoute('deconnecte');
            }
            $alone = $repoDocuments->findOneBy(['numero' => $caisse->getId(), 'user' => $this->getUser()]);
        }

        // FORMAULAIRE MESSAGE
        $secret = (string)random_int(10, 9999999);

        if (!$mess) {
            $mess = new Message();
            $mess->setSecret($secret);
            $mess->setSender($this->getUser());
            $mess->setUser($this->getUser());
            $mess->setDate(new \DateTime('NOW'));
            $docus = $repoDocuments->findBy(['user' => $this->getUser(), 'etat' => 'no']);
        } else {
            $docus = $repoDocuments->findBy(['user' => $this->getUser(), 'message' => $mess]);
        }

        $docou = $repoDocuments->findBy(['user' => $this->getUser()]);

        $form = $this->formFactory->createNamed('', MessageType::class, $mess);

        $messages = $repoMessage->findBy(['user' => $this->getUser()]);

        $today = new \DateTime('NOW');

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        return $this->render('content/message.html.twig', [
            'controller_name' => 'MessageController',
            'title' => 'Nouveau message | carlinBleu',
            'form' => $form->createView(),
            'docs' => $docus,
            'docos' => $docou,
            'type' => $type,
            'devis' => $devis,
            'bon' => $bon,
            'idmessage' => $idmessage,
            'caisse' => $caisse,
            'messages' => $messages,
            'editMode' => $mess->getId() !== null,
            'mess' => $mess,
            'today' => $today,
            'apercu' => $alone,
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'history' => $historiques
        ]);
    }

}
