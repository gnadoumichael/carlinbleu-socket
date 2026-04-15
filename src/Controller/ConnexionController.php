<?php

namespace App\Controller;
use DateTime;
use App\Entity\Droit;
use App\Entity\User;
use App\Form\UserType;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Attribute\CurrentUser;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ConnexionController extends AbstractController
{



    #[Route('/connexion', name:'login')]
    public function formlogin(AuthenticationUtils $authenticationUtils): RedirectResponse|Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/connexion.html.twig', [
            'controller_name' => 'SecurityController',
            'last_username' => $lastUsername,
            'error' => $error
        ]);

    }


    #[Route('/authentications', name:'apilogin')]
    public function apilogin(#[CurrentUser] ?User $user){
        if (null === $user) {
            return $this->json([
            'message' => 'missing credentials',
             ], Response::HTTP_UNAUTHORIZED);
        }

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ApiLoginController.php',
            'user'  => $user->getUserIdentifier(),
        ]);
    }


    #[Route('/passe', name:'passe')]
    public function passelogin(AuthenticationUtils $authenticationUtils): RedirectResponse|Response
    {

        if ($this->getUser()) {
            return $this->redirectToRoute('welcome');
        }

        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/passe.html.twig', [
            'controller_name' => 'SecurityController',
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }



    #[Route('/logout', name:'logout')]
    public function logout()
    {
        // controller can be blank: it will never be executed!
        throw new \RuntimeException('Don\'t forget to activate logout in security.yaml');
    }

}