<?php

namespace App\Controller;

use App\Entity\Historique;
use App\Entity\User;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/crm/main')]
class MainController extends AbstractController
{

    private FormFactoryInterface $formFactory;

    public function __construct(private readonly ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }
    private function getJson(Request $request)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $data = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpException(400, 'Invalid json');
        }
        return $data;
    }
    public function getMaster(): ?object
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
    public function getCheckMaster(): string
    {

        $repoUser = $this->doctrine->getRepository(User::class);
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);

        if ($use->getCompte() === null) {
            $master = "oui";
        } else {
            $master = "non";
        }
        return $master;
    }
    public function getCheckRoles(): string
    {
        if (!$this->isGranted('ROLE_COMPTA')) {
            return "non";
        }
        return "oui";
    }

    #[Route('/', name: 'main')]
    public function main(): Response
    {

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());
        if ($this->getUser()) {
            return $this->redirectToRoute('welcome');
        }

        return $this->render('security/main.html.twig', [
            'controller_name' => 'MainController',
            'history' => $historiques,
            'checkMaster' => $this->getCheckMaster(),
            'arole' => $this->getCheckRoles(),
        ]);
    }
}
