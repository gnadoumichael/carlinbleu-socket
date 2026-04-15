<?php

namespace App\Controller;

use App\Entity\Chantier;
use App\Entity\Client;
use App\Entity\Compte;
use App\Entity\Devis;
use App\Entity\Famille;
use App\Entity\Fournisseur;
use App\Entity\Monnaie;
use App\Entity\Pays;
use App\Entity\Sousfamille;
use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Form\ResetPasswordFormType;
use App\Form\ResetPasswordRequestFormType;
use App\Repository\UserRepository;
use App\Security\EmailVerifier;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use Symfony\Component\Mime\Email;

class RegistrationController extends AbstractController
{
    private EmailVerifier $emailVerifier;
    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    #[Route('/register', name: 'app_register')]
    public function register(ValidatorInterface          $validator, Request $request,
                             UserPasswordHasherInterface $passwordHasher,
                             EntityManagerInterface      $manager,
                             ManagerRegistry             $doctrine): Response
    {

        $repoChantier = $doctrine->getRepository(Chantier::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoMonnaie = $doctrine->getRepository(Monnaie::class);

        $user = new User();

        $user->setBegdate(new \DateTime('NOW'));
        $end_date = new \DateTime('NOW');
        date_add($end_date, date_interval_create_from_date_string('90days'));
        $date = new DateTime(date_format($end_date, 'Y-m-d H:i:s'));
        $user->setEnddate($date);

        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
        $rr = '';

        if ($form->isSubmitted()) {
            $errors = $validator->validate($user);
            $password = $user->getPassword();
            $number = preg_match('@[0-9]@', $password);
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            if (strlen($password) < 8 || !$number || !$uppercase || !$lowercase) {
                $rr = "Le mot de passe doit comporter au moins 8 caractères et doit contenir au moins un chiffre, une lettre majuscule et une lettre minuscule";
            }


            if (count($errors) > 0 || $rr != '') {
                return $this->render('registration/register.html.twig', [
                    'registrationForm' => $form->createView(),
                    'errors' => $errors,
                    'rr' => $rr
                ]);
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {

            $hash = $passwordHasher->hashPassword($user, $user->getPassword());
            $user->setPassword($hash);
            $user->setRoles(["ROLE_ADMIN", "ROLE_COMPTA"]);
            $user->setPhoto("usere.png");

            $manager->persist($user);
            $manager->flush();

            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('carlinbleu.service@gmail.com', 'Carlinbleu'))
                    ->to(new Address($user->getUserIdentifier(), $user->getNom() . ' ' . $user->getPrenoms()))
                    ->subject('Confirmation de votre compte carlinbleu')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );


            $fist = new Fournisseur();
            $fist->setFournisseur("Aucun");
            $fist->setType(1);
            $fist->setUser($user);
            $manager->persist($fist);
            $manager->flush();


            $famille = new Famille();
            $famille->setFamille("Aucun");
            $famille->setUser($user);
            $manager->persist($famille);
            $manager->flush();

            $sous = new Sousfamille();
            $sous->setFamille($famille);
            $sous->setSousfamille("Aucun");
            $sous->setUser($user);
            $manager->persist($sous);
            $manager->flush();

            $prt = $repoChantier->findOneBy(['user' => $user, 'type' => 'frais']);
            $prte = $repoChantier->findOneBy(['user' => $user, 'type' => 'personnel']);
            $cps = $repoChantier->findOneBy(['user' => $user, 'type' => 'compose']);

            if (!$prt) {
                $cli = new Client();
                $cli->setUser($user);
                $cli->setDobyuser($user);
                $cli->setNomClient($user->getSociete());
                $cli->setCode($user->getSociete());
                $cli->setType('caisse');
                $manager->persist($cli);
                $manager->flush();

                $prt = new Chantier();
                $prt->setClient($cli);
                $prt->setUser($user);
                $prt->setDobyuser($user);
                $prt->setNomChantier('Frais interne');
                $prt->setType('frais');
                $idpro = (string)random_int(0, 999999);
                $prt->setIdchantier($idpro);

                $prte = new Chantier();
                $prte->setClient($cli);
                $prte->setUser($user);
                $prte->setDobyuser($user);
                $prte->setNomChantier('Personnel');
                $prte->setType('personnel');
                $idpro = (string)random_int(0, 999999);
                $prte->setIdchantier($idpro);
                $manager->persist($prte);
                $manager->persist($prt);
                $manager->flush();
            }
            if (!$cps) {
                if ($prte) {
                    $cli = $prte->getClient();
                } else {
                    $cli = new Client();
                    $cli->setUser($user);
                    $cli->setDobyuser($user);
                    $cli->setNomClient($user->getSociete());
                    $cli->setCode($user->getSociete());
                    $cli->setType('compose');
                    $manager->persist($cli);
                    $manager->flush();
                }


                $cps = new Chantier();
                $cps->setClient($cli);
                $cps->setUser($user);
                $cps->setDobyuser($user);
                $cps->setNomChantier('compose');
                $cps->setType('article composé');
                $idpro = (string)random_int(0, 999999);
                $cps->setIdchantier($idpro);
                $manager->persist($cps);
                $manager->persist($cps);
                $manager->flush();

            }

            $chantier = $repoChantier->findOneBy(['type' => 'article composé', 'user' => $user]);
            $devis = $repoDevis->findOneBy(['chantier' => $chantier, 'user' => $user]);

            $monnaie = $repoMonnaie->findOneBy(['id' => 1]);

            if (!$devis) {
                $devis = new Devis();
                $devis->setZone('non');
                $devis->setAarem('non');
                $devis->setPtva('oui');
                $devis->setTva('18');
                $devis->setEtat('save');
                $devis->setTotalht('0');
                $devis->setVtva(0);
                $devis->setVremise('0');
                $devis->setTotalttc(0);
                $devis->setdevReference('Articles composés');
                $devis->setDate(new \DateTime('NOW'));
                $devis->setChantier($chantier);
                $devis->setMonnaie($monnaie);
                $devis->setClient($chantier->getClient());
                $devis->setAbasetva('non');
                $devis->setModele(1);
                $devis->setAaref('non');
                $devis->setUser($user);
                $devis->setDobyuser($this->getUser());
                $devis->setModel(1);
                $devis->setAcomrage(0);
                $devis->setFinition('0');
                $devis->setProrata('0');
                $devis->setGarantie('0');
                $devis->setType("cps");

                $devis->setRang(0);
                $devis->setIddevis('DDD-0');


                $manager->persist($devis);
                $manager->flush();
            }


            $this->addFlash('success', 'Félicitations ! un mail de confirmation vous a été envoyé pour valider votre compte.');
            return $this->redirectToRoute('felicitations');

        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }


    #[Route('/user/add/{nom}/{prenoms}/{password}/{username}/{idpays}/{societe}/{contact}', name: 'app_user_add')]
    public function registerapi($nom,$prenoms,$password,$username,$idpays,$societe, $contact, ValidatorInterface          $validator, Request $request,
                             UserPasswordHasherInterface $passwordHasher,
                             EntityManagerInterface      $manager,
                             ManagerRegistry             $doctrine): Response
    {

        $repoChantier = $doctrine->getRepository(Chantier::class);
        $repoDevis = $doctrine->getRepository(Devis::class);
        $repoPays = $doctrine->getRepository(Pays::class);
        $repoMonnaie = $doctrine->getRepository(Monnaie::class);
        $pays = $repoPays->findOneBy(["id"=>$idpays]);

        $user = new User();
        $user->setNom($nom);
        $user->setPays($pays);
        $user->setSociete($societe);
        $user->setContact($contact);
        $user->setPrenoms($prenoms);
        $user->setUsername($username);
        $user->setBegdate(new \DateTime('NOW'));
        $end_date = new \DateTime('NOW');
        date_add($end_date, date_interval_create_from_date_string('90days'));
        $date = new DateTime(date_format($end_date, 'Y-m-d H:i:s'));
        $user->setEnddate($date);
        $hash = $passwordHasher->hashPassword($user, $password);
        $user->setPassword($hash);
        $user->setRoles(["ROLE_ADMIN", "ROLE_COMPTA"]);
        $user->setPhoto("usere.png");

        $manager->persist($user);
        $manager->flush();


        // generate a signed url and email it to the user
        $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
            (new TemplatedEmail())
                ->from(new Address('carlinbleu.service@gmail.com', 'Carlinbleu'))
                ->to(new Address($user->getUserIdentifier(), $user->getNom() . ' ' . $user->getPrenoms()))
                ->subject('Confirmation de votre compte carlinbleu')
                ->htmlTemplate('registration/confirmation_email.html.twig')
        );


        $fist = new Fournisseur();
        $fist->setFournisseur("Aucun");
        $fist->setType(1);
        $fist->setUser($user);
        $manager->persist($fist);
        $manager->flush();


        $famille = new Famille();
        $famille->setFamille("Aucun");
        $famille->setUser($user);
        $manager->persist($famille);
        $manager->flush();

        $sous = new Sousfamille();
        $sous->setFamille($famille);
        $sous->setSousfamille("Aucun");
        $sous->setUser($user);
        $manager->persist($sous);
        $manager->flush();

        $prt = $repoChantier->findOneBy(['user' => $user, 'type' => 'frais']);
        $prte = $repoChantier->findOneBy(['user' => $user, 'type' => 'personnel']);
        $cps = $repoChantier->findOneBy(['user' => $user, 'type' => 'compose']);

        if (!$prt) {
            $cli = new Client();
            $cli->setUser($user);
            $cli->setDobyuser($user);
            $cli->setNomClient($user->getSociete());
            $cli->setCode($user->getSociete());
            $cli->setType('caisse');
            $manager->persist($cli);
            $manager->flush();

            $prt = new Chantier();
            $prt->setClient($cli);
            $prt->setUser($user);
            $prt->setDobyuser($user);
            $prt->setNomChantier('Frais interne');
            $prt->setType('frais');
            $idpro = (string)random_int(0, 999999);
            $prt->setIdchantier($idpro);

            $prte = new Chantier();
            $prte->setClient($cli);
            $prte->setUser($user);
            $prte->setDobyuser($user);
            $prte->setNomChantier('Personnel');
            $prte->setType('personnel');
            $idpro = (string)random_int(0, 999999);
            $prte->setIdchantier($idpro);
            $manager->persist($prte);
            $manager->persist($prt);
            $manager->flush();
        }
        if (!$cps) {
            if ($prte) {
                $cli = $prte->getClient();
            } else {
                $cli = new Client();
                $cli->setUser($user);
                $cli->setDobyuser($user);
                $cli->setNomClient($user->getSociete());
                $cli->setCode($user->getSociete());
                $cli->setType('compose');
                $manager->persist($cli);
                $manager->flush();
            }


            $cps = new Chantier();
            $cps->setClient($cli);
            $cps->setUser($user);
            $cps->setDobyuser($user);
            $cps->setNomChantier('compose');
            $cps->setType('article composé');
            $idpro = (string)random_int(0, 999999);
            $cps->setIdchantier($idpro);
            $manager->persist($cps);
            $manager->persist($cps);
            $manager->flush();

        }

        $chantier = $repoChantier->findOneBy(['type' => 'article composé', 'user' => $user]);
        $devis = $repoDevis->findOneBy(['chantier' => $chantier, 'user' => $user]);

        $monnaie = $repoMonnaie->findOneBy(['id' => 1]);

        if (!$devis) {
            $devis = new Devis();
            $devis->setZone('non');
            $devis->setAarem('non');
            $devis->setPtva('oui');
            $devis->setTva('18');
            $devis->setEtat('save');
            $devis->setTotalht('0');
            $devis->setVtva(0);
            $devis->setVremise('0');
            $devis->setTotalttc(0);
            $devis->setdevReference('Articles composés');
            $devis->setDate(new \DateTime('NOW'));
            $devis->setChantier($chantier);
            $devis->setMonnaie($monnaie);
            $devis->setClient($chantier->getClient());
            $devis->setAbasetva('non');
            $devis->setModele(1);
            $devis->setAaref('non');
            $devis->setUser($user);
            $devis->setDobyuser($this->getUser());
            $devis->setModel(1);
            $devis->setAcomrage(0);
            $devis->setFinition('0');
            $devis->setProrata('0');
            $devis->setGarantie('0');
            $devis->setType("cps");

            $devis->setRang(0);
            $devis->setIddevis('DDD-0');


            $manager->persist($devis);
            $manager->flush();
        }
        return $this->json(['result' => "success"], 200);
    }

    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $exception->getReason());

            return $this->redirectToRoute('app_register');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('Félicitations !', 'Votre compte est validé .');

        return $this->redirectToRoute('app_register');
    }

    #[Route('privacy/policy', name: 'privacy')]
    public function politie()
    {
        return $this->render('registration/privacy.html.twig');
    }


    #[Route('/resetpass', name: 'resetpassword')]
    public function forgottenPassword(Request $request, UserRepository $usersRepository, TokenGeneratorInterface $tokenGenerator, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ResetPasswordRequestFormType::class);
        $form->handleRequest($request);
        $message = null;
        if ($form->isSubmitted() && $form->isValid()) {

            $user = $usersRepository->findOneBy(["username" => $form->get('username')->getData()]);


            if ($user) {
                $token = $tokenGenerator->generateToken();
                $user->setResetToken($token);
                $entityManager->persist($user);
                $entityManager->flush();

                $url = $this->generateUrl('reset_pass', ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);
                $email = (new Email())
                    ->from(new Address('carlinbleu.service@gmail.com', 'Carlinbleu'))
                    ->to($form->get('username')->getData())
                    ->subject('Réinitialiser votre mot de passe.')
                    ->html($url);
                $message =  $url;
            } else {
                $message = 'Désolé, Un problème est survenu.';
            }

        }

        return $this->render('security/passe.html.twig', [
            'requestForm' => $form->createView(),
            'message' => $message
        ]);
    }

    #[Route('/resetpasse/{token}', name: 'reset_pass')]
    public function resetPass(string                 $token, Request $request, UserRepository $userRepository,
                              EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        // On vérifie si on a ce token dans la base
        $user = $userRepository->findOneBy(['resetToken' => $token]);

        if ($user) {
            $form = $this->createForm(ResetPasswordFormType::class);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                // On efface le token
                $user->setResetToken('');
                $user->setPassword(
                    $passwordHasher->hashPassword(
                        $user,
                        $form->get('password')->getData()
                    )
                );
                $entityManager->persist($user);
                $entityManager->flush();

                $this->addFlash('success', 'Mot de passe changé avec succès');
                return $this->redirectToRoute('login');
            }

            return $this->render('security/resetpassword.html.twig', [
                'passForm' => $form->createView()
            ]);
        }
        $this->addFlash('danger', 'Jeton invalide');
        return $this->redirectToRoute('login');
    }


}
