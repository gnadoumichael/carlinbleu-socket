<?php

namespace App\Controller;

use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Client;
use App\Entity\Contact;
use App\Entity\Corbeille;
use App\Entity\Decompte;
use App\Entity\Devis;
use App\Entity\Facture;
use App\Entity\Forme;
use App\Entity\Historique;
use App\Entity\Intervenant;
use App\Entity\Livraison;
use App\Entity\Paie;
use App\Entity\Personnel;
use App\Entity\Chantier;
use App\Entity\Relever;
use App\Entity\User;
use App\Entity\Valider;
use App\Form\BonType;
use App\Form\CaisseType;
use App\Form\ClientType;
use App\Form\ContactType;
use App\Form\DecompteType;
use App\Form\DevisType;
use App\Form\FactureType;
use App\Form\FormeType;
use App\Form\IntervenantType;
use App\Form\LivraisonType;
use App\Form\PaieType;
use App\Form\PersonnelType;
use App\Form\ChantierType;
use App\Form\ReleverType;
use App\Service\EnteteUploader;
use Random\RandomException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Doctrine\Persistence\ManagerRegistry;


#[Route(path: '/crm/chantiers')]
class ChantiersController extends AbstractController
{
    private FormFactoryInterface $formFactory;

    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    #[Route(path: '/forme', name: 'miseforme', methods: ['POST'])]
    public function miseforme(Request $request): JsonResponse
    {

        $repoForme = $this->doctrine->getRepository(Forme::class);
        $manager = $this->doctrine->getManager();

        // MISE EN FORME DU DEVIS
        $forte = $repoForme->findOneBy(['user' => $this->getUser(), 'used' => 'used']);
        $formes = $this->formFactory->createNamed('', FormeType::class, $forte);
        $formes->handleRequest($request);
        if ($formes->isSubmitted()) {
            $file = $request->files->get('enteteImage');
            $fille = $request->files->get('footImage');
            if ($file) {
                if ($forte->getRang() === 1) {
                    $filename = $this->getUser()->getId() . 'tt';
                } else {
                    $filename = $this->getUser()->getId() . 'tte';
                }
                $fich = new EnteteUploader('gallery/');
                $link = $fich->upload($file, $filename);
                $forte->setLink($link);
            }
            if ($fille) {
                if ($forte->getRang() === 1) {
                    $filename = $this->getUser()->getId() . 'ff';
                } else {
                    $filename = $this->getUser()->getId() . 'ffe';
                }

                $fich = new EnteteUploader('gallery/');
                $link = $fich->upload($fille, $filename);
                $forte->setfooterImage($link);
            }
            $manager->persist($forte);
            $manager->flush();
            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'error'], 404);
    }

    #[Route(path: '/forte/{id}', name: 'sertforme', methods: ['GET'])]
    public function sertforme(int $id): JsonResponse
    {

        $repoForme = $this->doctrine->getRepository(Forme::class);
        $manager = $this->doctrine->getManager();

        // MISE EN FORME DU DEVIS
        $forte = $repoForme->findOneBy(['user' => $this->getUser(), 'id' => $id]);
        $fort = $repoForme->findOneBy(['user' => $this->getUser(), 'used' => 'used']);
        if (!$forte) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $fort->setUsed('');
        $forte->setUsed('used');
        $manager->persist($fort);
        $manager->persist($forte);
        $manager->flush();
        return $this->json(['result' => 'success'], 200);
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

    public function getMaster()
    {

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        // REPOSITORIES
        $repoUser = $this->doctrine->getRepository(User::class);
        //GESTION DE COMPTE
        $use = $repoUser->findOneBy(['username' => $this->getUser()->getUserIdentifier()]);
        // VERIFIE SI COMPTE MASTER
        if ($use->getCompte() === null) {
            $master = $use;
        } else {
            $master = $repoUser->findOneBy(['id' => $use->getCompte()]);
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

    #[Route(path: '/getdatas/{type}', name: 'getdatas', methods: ['GET'])]
    public function getdatas(string $type): JsonResponse
    {

        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoContact = $this->doctrine->getRepository(Contact::class);

        $clients = $repoClient->findClients($this->getMaster());
        $chantiers = $repoChantier->findChantiers($this->getMaster());
        $caisses = $repoCaisse->findCaisses($this->getMaster());
        $contacts = $repoContact->findContacts($this->getMaster());

        $data = [];

        if ($type === 'clients') {
            foreach ($clients as $client) {
                $data[] = [
                    "<input type='checkbox' data-toggle='toggle' class='CLYE' value='" . $client->getid() . "'></input>",
                    "<a href='/crm/client/" . $client->getId() . "' class='col-blue font-bold supper'>" . $client->getNomClient() . "</a>",
                    $client->getCode(),
                    $client->getAdresse(),
                    $client->getContact(),
                    $client->getContribuable()
                ];
            }
            return $this->json(['data' => $data], 200);
        }
        if ($type === 'chantiers') {
            foreach ($chantiers as $chantier) {
                if ($chantier->getTerminer() === 'oui' and $chantier->getClient() !== null) {
                    $marge = $chantier->getCout() - $chantier->getDepense();
                    $balance = -($chantier->getCout() - $chantier->getDepense());
                } else {
                    $marge = 0;
                    $balance = $chantier->getReglement() - $chantier->getDepense();
                }
                if ($chantier->getArchiver() !== 'oui' and $chantier->getClient() !== null) {
                    if ($chantier->getSous() !== null and $chantier->getTerminer() == 'oui') {
                        $data[] = [
                            "<input type='checkbox' data-toggle='toggle' class='PROJY' value=" . $chantier->getId() . "></input>",
                            "<a href='/crm/chantier/" . $chantier->getId() . "' class='chchantier'><span class='badge bg-orange'>SP</span><i class='fas fa-flag-checkered col-orange'></i>" . $chantier->getNomChantier() . "</a>",
                            "<a href='/crm/client/" . $chantier->getClient()->getId() . "' class='chclient supper'>" . $chantier->getClient()->getNomClient() . "</a>",
                            number_format($chantier->getCout(), 2, ',', ' '),
                            number_format($chantier->getReglement(), 2, ',', ' '),
                            number_format(($chantier->getCout() - $chantier->getReglement()), 2, ',', ' '),
                            number_format($chantier->getDepense(), 2, ',', ' '),
                            number_format($marge, 2, ',', ' '),
                            number_format($balance, 2, ',', ' ')
                        ];
                    }
                    if ($chantier->getSous() !== null and $chantier->getTerminer() !== 'oui') {
                        $data[] = [
                            "<input type='checkbox' data-toggle='toggle' class='PROJY' value=" . $chantier->getId() . "></input>",
                            "<a href='/crm/chantier/" . $chantier->getId() . "' class='chchantier'><span class='badge bg-orange'>SP</span>" . $chantier->getNomChantier() . "</a>",
                            "<a href='/crm/client/" . $chantier->getClient()->getId() . "' class='chclient supper'>" . $chantier->getClient()->getNomClient() . "</a>",
                            number_format($chantier->getCout(), 2, ',', ' '),
                            number_format($chantier->getReglement(), 2, ',', ' '),
                            number_format(($chantier->getCout() - $chantier->getReglement()), 2, ',', ' '),
                            number_format($chantier->getDepense(), 2, ',', ' '),
                            number_format($marge, 2, ',', ' '),
                            number_format($balance, 2, ',', ' '),
                        ];
                    }
                    if ($chantier->getSous() === null and $chantier->getTerminer() === 'oui') {
                        $data[] = [
                            "<input type='checkbox' data-toggle='toggle' class='PROJY' value=" . $chantier->getId() . "></input>",
                            "<a href='/crm/chantier/" . $chantier->getId() . "' class='chchantier'><i class='fas fa-flag-checkered col-orange'></i>" . $chantier->getNomChantier() . "</a>",
                            "<a href='/crm/client/" . $chantier->getClient()->getId() . "' class='chclient supper'>" . $chantier->getClient()->getNomClient() . "</a>",
                            number_format($chantier->getCout(), 2, ',', ' '),
                            number_format($chantier->getReglement(), 2, ',', ' '),
                            number_format(($chantier->getCout() - $chantier->getReglement()), 2, ',', ' '),
                            number_format($chantier->getDepense(), 2, ',', ' '),
                            number_format($marge, 2, ',', ' '),
                            number_format($balance, 2, ',', ' ')
                        ];
                    }
                    if ($chantier->getSous() === null and $chantier->getTerminer() !== 'oui') {
                        $data[] = [
                            "<input type='checkbox' data-toggle='toggle' class='PROJY' value=" . $chantier->getId() . "></input>",
                            "<a href='/crm/chantier/" . $chantier->getId() . "' class='chchantier'>" . $chantier->getNomChantier() . "</a>",
                            "<a href='/crm/client/" . $chantier->getClient()->getId() . "' class='chclient supper'>" . $chantier->getClient()->getNomClient() . "</a>",
                            number_format($chantier->getCout(), 2, ',', ' '),
                            number_format($chantier->getReglement(), 2, ',', ' '),
                            number_format(($chantier->getCout() - $chantier->getReglement()), 2, ',', ' '),
                            number_format($chantier->getDepense(), 2, ',', ' '),
                            number_format($marge, 2, ',', ' '),
                            number_format($balance, 2, ',', ' ')
                        ];
                    }
                }
            }
            return $this->json(['data' => $data], 200);
        }
        if ($type === 'chantieres') {
            foreach ($chantiers as $chantier) {
                $sup = ' ';
                if ($chantier->getTerminer() === 'oui' and $chantier->getClient() !== null) {
                    $marge = $chantier->getCout() - $chantier->getDepense();
                    $balance = -($chantier->getCout() - $chantier->getDepense());
                } else {
                    $marge = 0;
                    $balance = $chantier->getReglement() - $chantier->getDepense();
                }
                if ($chantier->getDdebut() !== null) {
                    $ddebut = $chantier->getDdebut()->format('d-m-Y');
                }
                if ($chantier->getDfin() !== null) {
                    $dfin = $chantier->getDfin()->format('d-m-Y');
                }
                foreach ($chantier->getSuperviseurs() as $super) {
                    $sup .= "<span class='pri m-l-5'><a class='delsup' id='" . $super->getId() . "'><i class='material-icons col-pink' style='font-size: 18px;float: left'>highlight_off</i></a>" . $super->getNoms() . "</span><br>";
                }

                if ($chantier->getArchiver() !== 'oui' and $chantier->getClient() !== null) {
                    if ($chantier->getSous() !== null and $chantier->getTerminer() == 'oui') {
                        $data[] = [
                            "<input type='checkbox' data-toggle='toggle' class='PROJY' value=" . $chantier->getId() . "></input>",
                            "<a href='/crm/chantier/" . $chantier->getId() . "' class='chchantier'><span class='badge bg-orange'>SP</span><i class='fas fa-flag-checkered col-orange'></i>" . $chantier->getNomChantier() . "</a>",
                            "<a href='/crm/client/" . $chantier->getClient()->getId() . "' class='supper'>" . $chantier->getClient()->getNomClient() . "</a>",
                            $ddebut,
                            $dfin,
                            $sup,
                            '0',
                            '0',
                            '0'
                        ];
                    }
                    if ($chantier->getSous() !== null and $chantier->getTerminer() !== 'oui') {
                        $data[] = [
                            "<input type='checkbox' data-toggle='toggle' class='PROJY' value=" . $chantier->getId() . "></input>",
                            "<a href='/crm/chantier/" . $chantier->getId() . "' class='chchantier'><span class='badge bg-orange'>SP</span>" . $chantier->getNomChantier() . "</a>",
                            "<a href='/crm/client/" . $chantier->getClient()->getId() . "' class='supper'>" . $chantier->getClient()->getNomClient() . "</a>",
                            $ddebut,
                            $dfin,
                            $sup,
                            '0',
                            '0',
                            '0'
                        ];
                    }
                    if ($chantier->getSous() === null and $chantier->getTerminer() === 'oui') {
                        $data[] = [
                            "<input type='checkbox' data-toggle='toggle' class='PROJY' value=" . $chantier->getId() . "></input>",
                            "<a href='/crm/chantier/" . $chantier->getId() . "' class='chchantier'><i class='fas fa-flag-checkered col-orange'></i>" . $chantier->getNomChantier() . "</a>",
                            "<a href='/crm/client/" . $chantier->getClient()->getId() . "' class='supper'>" . $chantier->getClient()->getNomClient() . "</a>",
                            $ddebut,
                            $dfin,
                            $sup,
                            '0',
                            '0',
                            '0'
                        ];
                    }
                    if ($chantier->getSous() === null and $chantier->getTerminer() !== 'oui') {
                        $data[] = [
                            "<input type='checkbox' data-toggle='toggle' class='PROJY' value=" . $chantier->getId() . "></input>",
                            "<a href='/crm/chantier/" . $chantier->getId() . "' class='chchantier'>" . $chantier->getNomChantier() . "</a>",
                            "<a href='/crm/client/" . $chantier->getClient()->getId() . "' class='supper'>" . $chantier->getClient()->getNomClient() . "</a>",
                            $ddebut,
                            $dfin,
                            $sup,
                            '0',
                            '0',
                            '0'
                        ];
                    }
                }
            }
            return $this->json(['data' => $data], 200);
        }
        if ($type === 'sous') {
            foreach ($chantiers as $chantier) {
                if ($chantier->getSous() !== null) {
                    if ($chantier->getTerminer() === 'oui') {
                        $marge = $chantier->getCout() - $chantier->getDepense();
                        $balance = -($chantier->getCout() - $chantier->getDepense());
                    } else {
                        $marge = 0;
                        $balance = $chantier->getReglement() - $chantier->getDepense();
                    }
                    if ($chantier->getArchiver() !== 'oui') {
                        if ($chantier->getTerminer() == 'oui') {
                            $data[] = [
                                "<input type='checkbox' data-toggle='toggle' class='PROJYS' value=" . $chantier->getId() . "></input>",
                                "<a href='/crm/chantier/" . $chantier->getId() . "' class='chchantier'><i class='fas fa-flag-checkered col-orange'></i>" . $chantier->getNomChantier() . "</a>",
                                number_format($chantier->getCout(), 2, ',', ' '),
                                "<a href='/crm/chantier/" . $chantier->getSous()->getNomChantier() . "'  class='col-white'>" . $chantier->getSous()->getNomChantier() . "</a>",
                                number_format($chantier->getReglement(), 2, ',', ' '),
                                number_format(($chantier->getCout() - $chantier->getReglement()), 2, ',', ' '),
                                number_format($chantier->getDepense(), 2, ',', ' '),
                                number_format($marge, 2, ',', ' '),
                                number_format($balance, 2, ',', ' '),
                            ];
                        } else {
                            $data[] = [
                                "<input type='checkbox' data-toggle='toggle' class='PROJYS' value=" . $chantier->getId() . "></input>",
                                "<a href='/crm/chantier/" . $chantier->getId() . "' class='chchantier'>" . $chantier->getNomChantier() . "</a>",
                                number_format($chantier->getCout(), 2, ',', ' '),
                                "<a href='/crm/chantier/" . $chantier->getSous()->getNomChantier() . "'  class='col-white'>" . $chantier->getSous()->getNomChantier() . "</a>",
                                number_format($chantier->getReglement(), 2, ',', ' '),
                                number_format(($chantier->getCout() - $chantier->getReglement()), 2, ',', ' '),
                                number_format($chantier->getDepense(), 2, ',', ' '),
                                number_format($marge, 2, ',', ' '),
                                number_format($balance, 2, ',', ' '),
                            ];
                        }
                    }
                }
            }
            return $this->json(['data' => $data], 200);
        }
        if ($type === 'archiver') {
            foreach ($chantiers as $chantier) {
                if ($chantier->getTerminer() === 'oui') {
                    $marge = $chantier->getCout() - $chantier->getDepense();
                    $balance = -($chantier->getCout() - $chantier->getDepense());
                } else {
                    $marge = 0;
                    $balance = $chantier->getReglement() - $chantier->getDepense();
                }
                if ($chantier->getArchiver() === 'oui') {
                    if ($chantier->getSous() !== null and $chantier->getTerminer() == 'oui') {
                        $data[] = [
                            "<input type='checkbox' data-toggle='toggle' class='PROJY2' value=" . $chantier->getId() . "></input>",
                            "<a href='/crm/chantier/" . $chantier->getId() . "' class='chchantier'><span class='badge bg-orange'>SP</span><i class='fas fa-flag-checkered col-orange'></i>" . $chantier->getNomChantier() . "</a>",
                            number_format($chantier->getCout(), 2, ',', ' '),
                            "<a href='/crm/client/" . $chantier->getClient()->getId() . "' class='col-white supper'>" . $chantier->getClient()->getNomClient() . "</a>",
                            number_format($chantier->getReglement(), 2, ',', ' '),
                            number_format(($chantier->getCout() - $chantier->getReglement()), 2, ',', ' '),
                            number_format($chantier->getDepense(), 2, ',', ' '),
                            number_format($marge, 2, ',', ' '),
                            number_format($balance, 2, ',', ' '),
                        ];
                    }
                    if ($chantier->getSous() !== null and $chantier->getTerminer() !== 'oui') {
                        $data[] = [
                            "<input type='checkbox' data-toggle='toggle' class='PROJY2' value=" . $chantier->getId() . "></input>",
                            "<a href='/crm/chantier/" . $chantier->getId() . "' class='chchantier'><span class='badge bg-orange'>SP</span>" . $chantier->getNomChantier() . "</a>",
                            number_format($chantier->getCout(), 2, ',', ' '),
                            "<a href='/crm/client/" . $chantier->getClient()->getId() . "' class='col-white supper'>" . $chantier->getClient()->getNomClient() . "</a>",
                            number_format($chantier->getReglement(), 2, ',', ' '),
                            number_format(($chantier->getCout() - $chantier->getReglement()), 2, ',', ' '),
                            number_format($chantier->getDepense(), 2, ',', ' '),
                            number_format($marge, 2, ',', ' '),
                            number_format($balance, 2, ',', ' '),
                        ];
                    }
                    if ($chantier->getSous() === null and $chantier->getTerminer() === 'oui') {
                        $data[] = [
                            "<input type='checkbox' data-toggle='toggle' class='PROJY2' value=" . $chantier->getId() . "></input>",
                            "<a href='/crm/chantier/" . $chantier->getId() . "' class='chchantier'><i class='fas fa-flag-checkered col-orange'></i>" . $chantier->getNomChantier() . "</a>",
                            number_format($chantier->getCout(), 2, ',', ' '),
                            "<a href='/crm/client/" . $chantier->getClient()->getId() . "' class='col-white supper'>" . $chantier->getClient()->getNomClient() . "</a>",
                            number_format($chantier->getReglement(), 2, ',', ' '),
                            number_format(($chantier->getCout() - $chantier->getReglement()), 2, ',', ' '),
                            number_format($chantier->getDepense(), 2, ',', ' '),
                            number_format($marge, 2, ',', ' '),
                            number_format($balance, 2, ',', ' '),
                        ];
                    }
                    if ($chantier->getSous() === null and $chantier->getTerminer() !== 'oui') {
                        $data[] = [
                            "<input type='checkbox' data-toggle='toggle' class='PROJY2' value=" . $chantier->getId() . "></input>",
                            "<a href='/crm/chantier/" . $chantier->getId() . "' class='chchantier'>" . $chantier->getNomChantier() . "</a>",
                            number_format($chantier->getCout(), 2, ',', ' '),
                            "<a href='/crm/client/" . $chantier->getClient()->getId() . "' class='col-white supper'>" . $chantier->getClient()->getNomClient() . "</a>",
                            number_format($chantier->getReglement(), 2, ',', ' '),
                            number_format(($chantier->getCout() - $chantier->getReglement()), 2, ',', ' '),
                            number_format($chantier->getDepense(), 2, ',', ' '),
                            number_format($marge, 2, ',', ' '),
                            number_format($balance, 2, ',', ' '),
                        ];
                    }
                }
            }
            return $this->json(['data' => $data], 200);
        }
        if ($type === 'terminer') {
            foreach ($chantiers as $chantier) {
                if ($chantier->getTerminer() === 'oui' and $chantier->getClient() !== null) {
                    $marge = $chantier->getCout() - $chantier->getDepense();
                    $balance = -($chantier->getCout() - $chantier->getDepense());
                } else {
                    $marge = 0;
                    $balance = $chantier->getReglement() - $chantier->getDepense();
                }
                if ($chantier->getClient() !== null) {
                    if ($chantier->getSous() !== null and $chantier->getTerminer() == 'oui') {
                        $data[] = [
                            "<input type='checkbox' data-toggle='toggle' class='PROJY' value=" . $chantier->getId() . "></input>",
                            "<a href='/crm/chantier/" . $chantier->getId() . "' class='chchantier'><span class='badge bg-orange'>SP</span><i class='fas fa-flag-checkered col-orange'></i>" . $chantier->getNomChantier() . "</a>",
                            number_format($chantier->getCout(), 2, ',', ' '),
                            "<a href='/crm/client/" . $chantier->getClient()->getId() . "' class='chclient supper'>" . $chantier->getClient()->getNomClient() . "</a>",
                            number_format($chantier->getReglement(), 2, ',', ' '),
                            number_format(($chantier->getCout() - $chantier->getReglement()), 2, ',', ' '),
                            number_format($chantier->getDepense(), 2, ',', ' '),
                            number_format($marge, 2, ',', ' '),
                            number_format($balance, 2, ',', ' '),
                        ];
                    }
                    if ($chantier->getSous() !== null and $chantier->getTerminer() !== 'oui') {
                        $data[] = [
                            "<input type='checkbox' data-toggle='toggle' class='PROJY' value=" . $chantier->getId() . "></input>",
                            "<a href='/crm/chantier/" . $chantier->getId() . "' class='chchantier'><span class='badge bg-orange'>SP</span>" . $chantier->getNomChantier() . "</a>",
                            number_format($chantier->getCout(), 2, ',', ' '),
                            "<a href='/crm/client/" . $chantier->getClient()->getId() . "' class='chclient supper'>" . $chantier->getClient()->getNomClient() . "</a>",
                            number_format($chantier->getReglement(), 2, ',', ' '),
                            number_format(($chantier->getCout() - $chantier->getReglement()), 2, ',', ' '),
                            number_format($chantier->getDepense(), 2, ',', ' '),
                            number_format($marge, 2, ',', ' '),
                            number_format($balance, 2, ',', ' '),
                        ];
                    }
                    if ($chantier->getSous() === null and $chantier->getTerminer() === 'oui') {
                        $data[] = [
                            "<input type='checkbox' data-toggle='toggle' class='PROJY' value=" . $chantier->getId() . "></input>",
                            "<a href='/crm/chantier/" . $chantier->getId() . "' class='chchantier'><i class='fas fa-flag-checkered col-orange'></i>" . $chantier->getNomChantier() . "</a>",
                            number_format($chantier->getCout(), 2, ',', ' '),
                            "<a href='/crm/client/" . $chantier->getClient()->getId() . "' class='chclient supper'>" . $chantier->getClient()->getNomClient() . "</a>",
                            number_format($chantier->getReglement(), 2, ',', ' '),
                            number_format(($chantier->getCout() - $chantier->getReglement()), 2, ',', ' '),
                            number_format($chantier->getDepense(), 2, ',', ' '),
                            number_format($marge, 2, ',', ' '),
                            number_format($balance, 2, ',', ' '),
                        ];
                    }
                    if ($chantier->getSous() === null and $chantier->getTerminer() !== 'oui') {
                        $data[] = [
                            "<input type='checkbox' data-toggle='toggle' class='PROJY' value=" . $chantier->getId() . "></input>",
                            "<a href='/crm/chantier/" . $chantier->getId() . "' class='chchantier'>" . $chantier->getNomChantier() . "</a>",
                            number_format($chantier->getCout(), 2, ',', ' '),
                            "<a href='/crm/client/" . $chantier->getClient()->getId() . "' class='chclient supper'>" . $chantier->getClient()->getNomClient() . "</a>",
                            number_format($chantier->getReglement(), 2, ',', ' '),
                            number_format(($chantier->getCout() - $chantier->getReglement()), 2, ',', ' '),
                            number_format($chantier->getDepense(), 2, ',', ' '),
                            number_format($marge, 2, ',', ' '),
                            number_format($balance, 2, ',', ' '),
                        ];
                    }
                }
            }
            return $this->json(['data' => $data], 200);
        }
        if ($type === 'contacts') {
            foreach ($contacts as $contact) {
                if ($contact->getDobyuser() !== null) {
                    $user = $contact->getDobyuser()->getNom() . ' ' . $contact->getDobyuser()->getPrenoms();
                }
                $data[] = [
                    "<input type='checkbox' data-toggle='toggle' class='CONTAK' value='" . $contact->getId() . "'></input>",
                    "<span class='supper bolo600'>" . $contact->getContact() . "</span>",
                    "<span>" . $contact->getFonction() . "</span>",
                    "<span>" . $contact->getMail() . "</span>",
                    "<span>" . $contact->getPhone() . "</span>",
                    "<span>" . $contact->getBureau() . "</span>",
                    "<span class='col-blue bolo600 supper'>" . $user . "</span>",
                    "<a href='/crm/client/" . $contact->getClient()->getId() . "' class='col-blue font-bold supper'>" . $contact->getClient()->getNomClient() . "</a>",
                ];
            }
            return $this->json(['data' => $data], 200);
        }
        if ($type === 'devis') {
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clientdevis']);
        }
        if ($type === 'bons') {
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clientbons']);
        }
        if ($type === 'caisses') {
            return $this->json($caisses, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);
        }
        if ($type === 'personnels') {
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clientpersonnels']);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/getdatass/{type}', name: 'getdatass', methods: ['GET'])]
    public function getdatass(string $type): JsonResponse
    {

        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);

        $repoClient = $this->doctrine->getRepository(Client::class);
        $clients = $repoClient->findClients($this->getMaster());

        $chantiers = $repoChantier->findChantiers($this->getMaster());
        $caisses = $repoCaisse->findCaisses($this->getMaster());

        if ($type === 'clients') {
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);
        }
        if ($type === 'chantiers') {
            return $this->json($chantiers, 200, ['Content-Type' => 'application/json'], ['groups' => 'chantiers']);
        }
        if ($type === 'devis') {
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clientdevis']);
        }
        if ($type === 'bons') {
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clientbons']);
        }
        if ($type === 'caisses') {
            return $this->json($caisses, 200, ['Content-Type' => 'application/json'], ['groups' => 'caisse']);
        }
        if ($type === 'personnels') {
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clientpersonnels']);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/getdevis/{id}', name: 'getChantierDevis', methods: ['POST'])]
    public function getDevisChantier(int $id): JsonResponse
    {
        // LES REPOSITORIES
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $devis = $repoDevis->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$devis) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $chantier = $devis->getChantier();
        return $this->json($chantier, 200, ['Content-Type' => 'application/json'], ['groups' => 'chantiers']);
    }

    #[Route(path: '/getcontact/{id}', name: 'getcontactchantier', methods: ['GET'])]
    public function getContactChantier(int $id): JsonResponse
    {

        // LES REPOSITORIES
        $repoContact = $this->doctrine->getRepository(Contact::class);
        $repoChantier = $this->doctrine->getRepository(Chantier::class);

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $contact = $repoContact->findBy(['client' => $chantier->getclient(), 'user' => $this->getMaster()], ['contact' => 'ASC']);
        return $this->json($contact, 200, ['Content-Type' => 'application/json'], ['groups' => 'contact']);
    }

    #[Route(path: '/getinterve/{id}', name: 'getIntervechantier', methods: ['POST'])]
    public function getInterveChantier(int $id): JsonResponse
    {
        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoInterve = $this->doctrine->getRepository(Intervenant::class);

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $interves = $repoInterve->findBy(['chantier' => $chantier, 'user' => $this->getMaster()], ['nom' => 'ASC']);
        return $this->json($interves, 200, ['Content-Type' => 'application/json'], ['groups' => 'interve']);
    }

    #[Route(path: '/add', name: 'addChantier', methods: ['POST'])]
    public function addChantier(Request $request): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();
        $repoClient = $this->doctrine->getRepository(Client::class);

        $chantier = new chantier();
        $idchan = (string)random_int(0, 999999);
        $chantier->setIdchantier($idchan);
        $chantier->setArchiver('non');
        $chantier->setEtat('etude');
        $chantier->setUser($this->getMaster());
        $chantier->setDobyuser($this->getUser());
        $chantier->setDcrea(new \DateTime('NOW'));
        $json = $this->getJson($request);
        $formChantier = $this->formFactory->createNamed('', ChantierType::class, $chantier, [
            'user' => $this->getMaster(),
            'type' => 'chantier'
        ]);
        $formChantier->submit($json);
        $formChantier->handleRequest($request);
        if ($this->isCsrfTokenValid('addChantierToken', $json['token'])) {
            $client = $repoClient->findOneBy(['id' => $json['client']]);

            $chantier->setProrata(0);
            $chantier->setAcompte(0);
            $chantier->setGarantie(0);
            $chantier->setFinition(0);

            $dd = str_replace("/", "-", $json["ddebut"]);
            $df = str_replace("/", "-", $json["dfin"]);
            $chantier->setDdebut(new \DateTimeImmutable($dd));
            $chantier->setDfin(new \DateTimeImmutable($df));

            $chantier->setClient($client);
            $manager->persist($chantier);
            $manager->flush();
            $clients = $repoClient->findBy(['user' => $this->getMaster()]);
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/addetatchantier', name: 'addChantierEtat', methods: ['POST'])]
    public function addChantierEtat(Request $request): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();
        $repoClient = $this->doctrine->getRepository(Client::class);

        $chantier = new chantier();
        $idchan = (string)random_int(0, 999999);
        $chantier->setIdchantier($idchan);
        $chantier->setArchiver('non');
        $chantier->setEtat('etude');
        $chantier->setUser($this->getMaster());
        $chantier->setDobyuser($this->getUser());
        $chantier->setDcrea(new \DateTime('NOW'));
        $json = $this->getJson($request);
        $formChantier = $this->formFactory->createNamed('', ChantierType::class, $chantier, [
            'user' => $this->getMaster(),
            'type' => 'etat'
        ]);
        $formChantier->submit($json);
        $formChantier->handleRequest($request);
        if ($this->isCsrfTokenValid('addChantierToken', $json['token'])) {
            $chantier->setProrata(0);
            $chantier->setAcompte(0);
            $chantier->setGarantie(0);
            $chantier->setFinition(0);

            $manager->persist($chantier);
            $manager->flush();
            $clients = $repoClient->findBy(['user' => $this->getMaster()]);
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/update/{id}', name: 'updateChantier', requirements: ['id' => '\d+'], methods: ['PUT'])]
    public function updateChantier($id, Request $request): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoClient = $this->doctrine->getRepository(Client::class);

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $ddebut = $chantier->getDdebut();
        $dfin = $chantier->getDfin();

        $json = $this->getJson($request);
        $formChantier = $this->formFactory->createNamed('', ChantierType::class, $chantier, [
            'user' => $this->getMaster(),
            'type' => 'chantier'
        ]);
        $formChantier->submit($json);
        $formChantier->handleRequest($request);
        if ($this->isCsrfTokenValid('addChantierToken', $json['token'])) {
            $client = $repoClient->findOneBy(['id' => $json['client']]);
            $chantier->setClient($client);
            $dd = str_replace("/", "-", $json["ddebut"]);
            $df = str_replace("/", "-", $json["dfin"]);
            $chantier->setDdebut(new \DateTimeImmutable($dd));
            $chantier->setDfin(new \DateTimeImmutable($df));
            $manager->persist($chantier);
            $manager->flush();

            foreach ($chantier->getDevis() as $devis) {
                $devis->setClient($chantier->getClient());
                $manager->persist($devis);
                $manager->flush();
            }

            foreach ($chantier->getDecomptes() as $dec) {
                $dec->setClient($chantier->getClient());
                $manager->persist($dec);
                $manager->flush();
            }

            foreach ($chantier->getFactures() as $fac) {
                $fac->setClient($chantier->getClient());
                $manager->persist($fac);
                $manager->flush();
            }

            foreach ($chantier->getCaisses() as $cais) {
                $cais->setClient($chantier->getClient());
                $manager->persist($cais);
                $manager->flush();
            }

            foreach ($chantier->getbons() as $bon) {
                $bon->setClient($chantier->getClient());
                $manager->persist($bon);
                $manager->flush();
            }


            foreach ($chantier->getReleves() as $rele) {
                $rele->setClient($chantier->getClient());
                $manager->persist($rele);
                $manager->flush();
            }

            $clients = $repoClient->findBy(['user' => $this->getMaster()]);
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/upda/{id}', name: 'updaChantier', requirements: ['id' => '\d+'], methods: ['PUT'])]
    public function updaChantier($id, Request $request): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoPersonnel = $this->doctrine->getRepository(Personnel::class);

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $ddebut = $chantier->getDdebut();
        $dfin = $chantier->getDfin();
        $json = $this->getJson($request);
        $formChantier = $this->formFactory->createNamed('', ChantierType::class, $chantier, [
            'user' => $this->getMaster(),
            'type' => 'updchantier'
        ]);
        $formChantier->submit($json);
        $formChantier->handleRequest($request);
        if ($this->isCsrfTokenValid('updChantierToken', $json['token'])) {
            if (isset($json['superviseurs'])) {
                $personnel = $json['superviseurs'];
                if (is_countable($personnel)) {
                    for ($i = 0, $iMax = count($personnel); $i < $iMax; $i++) {
                        $perso = $repoPersonnel->findOneBy(['id' => $personnel[$i], 'user' => $this->getMaster()]);
                        $chantier->addSuperviseur($perso);
                        $manager->persist($chantier);
                        $manager->flush();
                    }
                } else {
                    $perso = $repoPersonnel->findOneBy(['id' => $personnel, 'user' => $this->getMaster()]);
                    $chantier->addSuperviseur($perso);
                    $manager->persist($chantier);
                    $manager->flush();
                }
            }
            $dd = str_replace("/", "-", $json["ddebut"]);
            $df = str_replace("/", "-", $json["dfin"]);
            $chantier->setDdebut(new \DateTimeImmutable($dd));
            $chantier->setDfin(new \DateTimeImmutable($df));
            $manager->persist($chantier);
            $manager->flush();
            return $this->json(['result' => 'success'], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/updatechantier/{id}', name: 'updateChan', methods: ['PUT'])]
    public function updateChan(int $id, Request $request): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoPersonnel = $this->doctrine->getRepository(Personnel::class);

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);

        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $ddebut = $chantier->getDdebut();
        $dfin = $chantier->getDfin();

        $json = $this->getJson($request);

        if ($this->isCsrfTokenValid('updChanToken', $json['token'])) {
            $client = $repoClient->findOneBy(['id' => $json['chantier[client]'], 'user' => $this->getMaster()]);
            $chantier->setNomChantier($json['chantier[nomchantier]']);
            $chantier->setClient($client);
            $chantier->setDescription($json['chantier[description]']);
            $chantier->setDdebut(new \DateTime(str_replace('/', '-', $json['chantier[ddebut]'])));
            $chantier->setDfin(new \DateTime(str_replace('/', '-', $json['chantier[dfin]'])));

            if (isset($json['superviseurs'])) {
                $personnel = $json['superviseurs'];
                if (is_countable($personnel)) {
                    for ($i = 0, $iMax = count($personnel); $i < $iMax; $i++) {
                        $perso = $repoPersonnel->findOneBy(['id' => $personnel[$i], 'user' => $this->getMaster()]);
                        $chantier->addSuperviseur($perso);
                        $manager->persist($chantier);
                        $manager->flush();
                    }
                } else {
                    $perso = $repoPersonnel->findOneBy(['id' => $personnel, 'user' => $this->getMaster()]);
                    $chantier->addSuperviseur($perso);
                    $manager->persist($chantier);
                    $manager->flush();
                }
            }
            $dd = str_replace("/", "-", $json["ddebut"]);
            $df = str_replace("/", "-", $json["dfin"]);
            $chantier->setDdebut(new \DateTimeImmutable($dd));
            $chantier->setDfin(new \DateTimeImmutable($df));
            $manager->persist($chantier);
            $manager->flush();

            return $this->json(['result' => 'salut'], 200);
        }
        return $this->json(['result' => 'Erreur'], 404);
    }

    #[Route(path: '/del/{id}', name: 'delChantier', methods: ['DELETE'])]
    public function delChantier(int $id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }
        $cor = $repoCorbeille->findOneBy(['designation' => $chantier->getId(), 'master' => $this->getMaster(), 'type' => 2]);
        if (!$cor) {
            date_default_timezone_set('Africa/Abidjan');
            $corbeille = new Corbeille();
            $corbeille->setDate(new \DateTime('NOW'));
            $corbeille->setDesignation($chantier->getId());
            $corbeille->setMaster($this->getMaster());
            $corbeille->setDelby($this->getUser());
            $corbeille->setEtat('faible');
            $corbeille->setType('2');
            $manager->persist($corbeille);
            $manager->flush();
            $core = $repoCorbeille->findOneBy(['designation' => $chantier->getId(), 'master' => $this->getMaster(), 'type' => 2]);
            $chantier->setCorbeille($core);
            $manager->persist($chantier);
            $manager->flush();
        }
        $repoClient = $this->doctrine->getRepository(Client::class);
        $clients = $repoClient->findBy(['user' => $this->getMaster()]);
        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);
    }

    #[Route(path: '/restaurer/{id}', name: 'restaureChantier', methods: ['GET'])]
    public function restaureChantier(int $id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $corbeille = $repoCorbeille->findOneBy(['designation' => $chantier->getId(), 'type' => '2']);
        if ($corbeille) {
            $chantier->setCorbeille(null);
            $manager->persist($chantier);
            $manager->flush();
            $manager->remove($corbeille);
            $manager->flush();
            return $this->json(['result' => 'Chantier restauré'], 200);
        }
        return $this->json(['result' => 'erreur'], 404);
    }

    #[Route(path: '/deldefinitive/{id}', name: 'deldefChantier', methods: ['DELETE'])]
    public function deldefChantier(int $id): JsonResponse
    {
        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoCorbeille = $this->doctrine->getRepository(Corbeille::class);

        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $cor = $repoCorbeille->findOneBy(['designation' => $chantier->getId(), 'master' => $this->getMaster(), 'type' => 2]);
        if ($cor) {
            if ($chantier->getUser()->getCompte() === null) {
                $cor->setEtat('ultra');
                $manager->persist($cor);
                $manager->flush();
                return $this->json(['result' => 'Chantier suprimé'], 204);
            } else {
                $cor->setEtat('fort');
                $manager->persist($cor);
                $manager->flush();
                return $this->json(['result' => 'Chantier suprimé'], 204);
            }
        }
        return $this->json(['error' => 'Erreur'], 404);
    }

    #[Route(path: '/archiver/{id}', name: 'archiver', methods: ['GET'])]
    public function archiver(int $id): JsonResponse
    {

        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $chantier->setArchiver('oui');
        $chantier->setTerminer('oui');
        $chantier->setEtat('archiver');
        $manager->persist($chantier);
        $manager->flush();
        $repoClient = $this->doctrine->getRepository(Client::class);
        $clients = $repoClient->findBy(['user' => $this->getMaster()]);
        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);

    }

    #[Route(path: '/echoue/{id}', name: 'echoue', methods: ['GET'])]
    public function echoue(int $id): JsonResponse
    {

        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }


        $chantier->setEtat('echouer');
        $manager->persist($chantier);
        $manager->flush();
        $repoClient = $this->doctrine->getRepository(Client::class);
        $clients = $repoClient->findBy(['user' => $this->getMaster()]);
        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);

    }

    #[Route(path: '/encours/{id}', name: 'encours', methods: ['GET'])]
    public function encours(int $id): JsonResponse
    {

        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }


        $chantier->setEtat('encours');
        $manager->persist($chantier);
        $manager->flush();
        $repoClient = $this->doctrine->getRepository(Client::class);
        $clients = $repoClient->findBy(['user' => $this->getMaster()]);
        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);

    }

    #[Route(path: '/accepter/{id}', name: 'accepter', methods: ['GET'])]
    public function acceprer(int $id): JsonResponse
    {

        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }


        $chantier->setEtat("etude");
        $manager->persist($chantier);
        $manager->flush();
        $repoClient = $this->doctrine->getRepository(Client::class);
        $clients = $repoClient->findBy(['user' => $this->getMaster()]);
        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);

    }

    #[Route(path: '/terminer/{id}', name: 'terminer', methods: ['GET'])]
    public function terminer(int $id): JsonResponse
    {

        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        if ($chantier->getTerminer() === 'oui') {
            $chantier->setTerminer('non');
            $manager->persist($chantier);
            $manager->flush();
            $repoClient = $this->doctrine->getRepository(Client::class);
            $clients = $repoClient->findBy(['user' => $this->getMaster()]);
            return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);
        }

        $chantier->setTerminer('oui');
        $manager->persist($chantier);
        $manager->flush();
        $repoClient = $this->doctrine->getRepository(Client::class);
        $clients = $repoClient->findBy(['user' => $this->getMaster()]);
        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);

    }

    #[Route(path: '/cloturer/{id}', name: 'cloturer', methods: ['GET'])]
    public function cloturer(int $id): JsonResponse
    {

        // REFUSE L'ACCESS SI NON CONNECTÉ ET MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        if (!$chantier) {
            return $this->json(['result' => 'Erreur'], 404);
        }

        $chantier->setEtat('cloturer');
        $manager->persist($chantier);
        $manager->flush();
        $repoClient = $this->doctrine->getRepository(Client::class);
        $clients = $repoClient->findBy(['user' => $this->getMaster()]);
        return $this->json($clients, 200, ['Content-Type' => 'application/json'], ['groups' => 'clients']);

    }

    #[Route(path: '/reglement/chantiers/add', name: 'reglement', methods: ['POST'])]
    public function reglementChantiers(Request $request): JsonResponse
    {
        // MANAGER
        $manager = $this->doctrine->getManager();
        $repoFacture = $this->doctrine->getRepository(Facture::class);

        try {
            $commun = random_int(0, 9999999);
        } catch (\Exception $e) {
        }

        $releve = new Relever();
        $releve->setDate(new \DateTime('NOW'));
        $releve->setType(3);
        $json = $this->getJson($request);

        $formeRegle = $this->formFactory->createNamed('', ReleverType::class, $releve, [
            'user' => $this->getMaster(),
            'type' => 'chantiers'
        ]);

        $formeRegle->submit($json);
        $formeRegle->handleRequest($request);

        if ($this->isCsrfTokenValid('addReglementToken', $json['token'])) {
            $facture = $repoFacture->findOneBy(['id' => $json['facfac'], 'user' => $this->getMaster()]);
            $chantier = $facture->getChantier();

            if ($facture->getType() == "acompte") {
                $devis = $facture->getAcompte()->getDevis();
            }

            if ($facture->getType() == "decompte") {
                $devis = $facture->getDecompte()->getDevis();
            }
            if ($facture->getType() == "devis") {
                $devis = $facture->getDevis();
            }
            if ($facture->getType() == "retenue") {
                $devis = $facture->getAcompte()->getDevis();
            }

            $mon = str_replace(",", ".", $json['montant']);


            if ($devis->getReglementnumber() === null) {
                $numb = 1;
            } else {
                $numb = 1 + $devis->getReglementnumber();
            }

            $devis->setReglementnumber($numb);
            $verse = 'R_' . $devis->getIddevis() . '-' . $numb . '  ';

            $releve->setVersement($verse);
            $releve->setChantier($devis->getChantier());
            $releve->setClient($devis->getClient());
            $releve->setFacture($facture);
            $releve->setDevis($devis);
            $releve->setMontant($mon);
            $releve->setCommun($commun);
            $releve->setMoyen($json['moyen']);

            $operation = $verse . ' | Règlement du client sur Facture N°:' . $facture->getNumfacture();
            $debit = 0;
            $credit = $mon;

            $idlink = $devis->getId();
            $type = 3;

            $valider = new Valider();
            $valider->setOperation($operation);
            $valider->setDate(new \DateTime('NOW'));
            $valider->setType($type);
            $valider->setChantier($devis->getChantier());
            $valider->setIdlink($idlink);
            $valider->setDebit($debit);
            $valider->setCredit($credit);
            $valider->setMoyen($json['moyen']);
            $valider->setUser($this->getMaster());
            $valider->setDobyuser($this->getUser());
            $valider->setCommun($commun);

            $reglement = $chantier->getReglement();
            $reglement = $reglement + $mon;
            $chantier->setReglement($reglement);

            $manager->persist($chantier);
            $manager->persist($releve);
            $manager->persist($valider);
            $manager->persist($devis);
            $manager->flush();


            $restearegler = 0;
            foreach ($facture->getRelever() as $relevalide) {
                if ($relevalide->getType() === 3) {
                    $restearegler = $relevalide->getMontant() + $restearegler;
                }
            }
            $facture->setRegler($restearegler);
            $manager->persist($facture);
            $manager->flush();

            if (intval($restearegler) === intval($facture->getTotalttc())) {
                $facture->setEtat("valide");
                $manager->persist($facture);
                $manager->flush();
            }

            return $this->json(['result' => $chantier->getClient()->getId()], 201);
        }
        return $this->json(['result' => 'Règlement echoué'], 404);

    }

    #[Route(path: '/delreglement/{id}', name: 'delReglement', methods: ['GET'])]
    public function deleReglememt(int $id)
    {
        $manager = $this->doctrine->getManager();
        // LES REPOSITORIES
        $repoValider = $this->doctrine->getRepository(Valider::class);
        $repoRelever = $this->doctrine->getRepository(Relever::class);

        // ON RECUPERE LE REGLEMENT DANS RELEVER COURANT, ON DECONNECTE USER DIFFERENTS
        $relever = $repoRelever->findOneBy(['id' => $id]);

        if ($relever->getChantier()->getUser() !== $this->getMaster()) {
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

        return $this->json(['result' => 'Règlement supprimé'], 201);
    }


    #[Route(path: '/', name: 'chantiers')]
    #[Route(path: '/{id}', name: 'editechantier', requirements: ['idchantier' => '\d+'])]
    #[Route(path: '/client/{idclient}', name: 'editclient', requirements: ['idclient' => '\d+'])]
    #[Route(path: '/devis/{iddevis}', name: 'editdevisPR', requirements: ['iddevis' => '\d+'])]
    #[Route(path: '/livraison/{idlivre}', name: 'editlivrePR', requirements: ['idlivre' => '\d+'])]
    #[Route(path: '/caisse/{idcaisse}', name: 'editcaissePR', requirements: ['idcaisse' => '\d+'])]
    #[Route(path: '/decompte/{iddecompte}', name: 'editdecomptePR', requirements: ['iddecompte' => '\d+'])]
    #[Route(path: '/facture/{idfacture}', name: 'editfacturePR', requirements: ['idfacture' => '\d+'])]
    #[Route(path: '/personnel/{idperson}', name: 'editpersondepense', requirements: ['idperson' => '\d+'])]
    #[Route(path: '/contact/{idcontact}', name: 'editerContacte', requirements: ['idcontact' => '\d+'])]
    #[Route(path: '/intervenant/{idinterve}', name: 'getIntervenant', requirements: ['idinterve' => '\d+'])]
    public function chantier(int $idfacture = null, int $iddecompte = null, int $idcaisse = null, int $idcontact = null,
                             int $iddevis = null, int $id = null, int $idclient = null, int $idperson = null, int $idinterve = null)
    {

        // GESTION DU TEMPS ET DE L'ABONNEMENT
        date_default_timezone_set('Africa/Abidjan');

        // MANAGER
        $manager = $this->doctrine->getManager();

        // LES REPOSITORIES
        $repoChantier = $this->doctrine->getRepository(Chantier::class);
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoPersonel = $this->doctrine->getRepository(Personnel::class);
        $repoDevis = $this->doctrine->getRepository(Devis::class);
        $repoDecompte = $this->doctrine->getRepository(Decompte::class);
        $repoFacture = $this->doctrine->getRepository(Facture::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoLivraison = $this->doctrine->getRepository(Livraison::class);
        $repoValide = $this->doctrine->getRepository(Valider::class);
        $repoIntervenant = $this->doctrine->getRepository(Intervenant::class);
        $repoContact = $this->doctrine->getRepository(Contact::class);

        $repoForme = $this->doctrine->getRepository(Forme::class);
        $foot = $repoForme->findOneBy(['user' => $this->getUser(), 'rang' => 1]);
        $foote = $repoForme->findOneBy(['user' => $this->getUser(), 'rang' => 2]);
        if (!$foot) {
            $forrm = new Forme();
            $forrm->setRang(1);
            $forrm->setUsed('used');
            $forrm->setIntituler('ENTÊTE 1');
            $forrm->setDsize(11);
            $forrm->setPiedsize(10);
            $forrm->setTeteH(10);
            $forrm->setTeteY(5);
            $forrm->setTeteDH(1);
            $forrm->setTeteDB(0);
            $forrm->setTeteDG(1);
            $forrm->setTeteDD(1);
            $forrm->setTypeFooter("aucun");
            $forrm->setTypeEntete("aucun");
            $forrm->setHeaderHeight(5);
            $forrm->setFooterHeight(1.5);
            $forrm->setHeaderWith(21);
            $forrm->setUser($this->getUser());
            $manager->persist($forrm);
            $manager->flush();
        }
        if (!$foote) {
            $fm = new Forme();
            $fm->setRang(2);
            $fm->setIntituler('ENTÊTE 2');
            $fm->setUsed('');
            $fm->setDsize(11);
            $fm->setPiedsize(10);
            $fm->setTeteH(10);
            $fm->setTeteY(5);
            $fm->setTeteDH(1);
            $fm->setTeteDB(0);
            $fm->setTeteDG(1);
            $fm->setTeteDD(1);
            $fm->setTypeFooter("aucun");
            $fm->setTypeEntete("aucun");
            $fm->setHeaderHeight(5);
            $fm->setFooterHeight(1.5);
            $fm->setHeaderWith(21);
            $fm->setUser($this->getUser());
            $manager->persist($fm);
            $manager->flush();
        }

        // RECUPERE LE CONTACT A MODIFIER OU CRÉE UN AUTRE
        $contact = $repoContact->findOneBy(['id' => $idcontact, 'user' => $this->getMaster()]);
        if (!$contact) {
            $contact = new Contact();
        }

        $formContact = $this->formFactory->createNamed('', ContactType::class, $contact);


        // ON RECUPERE LE PROJET COURANT
        $chantier = $repoChantier->findOneBy(['id' => $id, 'user' => $this->getMaster()]);
        $chantierFrais = $repoChantier->findOneBy(['type' => 'frais', 'user' => $this->getMaster()]);
        $chantierPersonnel = $repoChantier->findOneBy(['type' => 'personnel', 'user' => $this->getMaster()]);

        // ON CRÉE UN NOUVEAU PROJET SI LE PROJET N'EXISTE PAS
        if (!$chantier) {
            $chantier = new Chantier();
            $idproj = (string)random_int(0, 999999);
            $chantier->setIdchantier($idproj);
            $chantier->setUser($this->getMaster());
            $chantier->setDobyuser($this->getUser());
            $chantier->setDcrea(new \DateTime('NOW'));
            $chantier->setArchiver('non');
        }

        //FORMULAIRE AJOUTER ET MODIFIER UN CHANTIER
        $formChantier = $this->formFactory->createNamed('', ChantierType::class, $chantier, [
            'user' => $this->getMaster(),
            'type' => 'chantier'
        ]);

        // ON CRÉE UN NOUVEAU CLIENT SI LE PROJET N'EXISTE PAS
        $client = $repoClient->findOneBy(['id' => $idclient, 'user' => $this->getUser()]);

        if (!$client) {
            $client = new Client();
            $client->setUser($this->getMaster());
            $client->setDobyuser($this->getUser());
        }

        //FORM CLIENT
        $formClient = $this->formFactory->createNamed('', ClientType::class, $client);

        // RECUPERE TOUS LES CLIENTS/CHANTIERS
        $clients = $repoClient->findBy(['user' => $this->getMaster()], ['nomclient' => 'ASC']);
        $chantiers = $repoChantier->findBy(['user' => $this->getMaster()], ['nomchantier' => 'ASC']);

        // ON RECUPERE LE SUPERVISEUR
        $personnel = $repoPersonel->findOneBy(['id' => $idperson, 'user' => $this->getMaster()]);
        $personnels = $repoPersonel->findBy(['user' => $this->getMaster()], ['noms' => 'ASC']);

        // ON CRÉE UN NOUVEAU SUPERVISEUR S IL N'EXISTE PAS
        if (!$personnel) {
            $personnel = new Personnel();
            $personnel->setUser($this->getMaster());
        }

        //FORMULAIRE AJOUTER ET MODIFIER UN PERSONNEL
        $formPersonnel = $this->formFactory->createNamed('', PersonnelType::class, $personnel, [
            'user' => $this->getMaster(),
            'type' => 'person'
        ]);

        $formInterne = $this->formFactory->createNamed('', PersonnelType::class, $personnel, [
            'user' => $this->getMaster(),
            'type' => 'interne'
        ]);


        // TRAVAUX DU JOUR
        $date = date("Y-m-d");
        $deviss = $repoDevis->findByeDater($this->getMaster(), $date);
        $decomptes = $repoDecompte->findByeDate($this->getMaster(), $date);
        $bons = $repoBon->findByeDate($this->getMaster(), $date);
        $caisses = $repoCaisse->findByeDate($this->getMaster(), $date);
        $livraisons = $repoLivraison->findByeDate($this->getMaster(), $date);
        $factures = $repoFacture->findByeDate($this->getMaster(), $date);
        $caissefrais = $repoCaisse->findBy(['chantier' => $chantierFrais, 'user' => $this->getMaster()]);
        $caissepersonnel = $repoCaisse->findBy(['chantier' => $chantierPersonnel, 'user' => $this->getMaster()]);

        // CRÉE UN NOUVEAU DEVIS
        $devis = $repoDevis->findOneBy(['id' => $iddevis, 'user' => $this->getMaster()]);

        if (!$devis) {
            date_default_timezone_set('Africa/Abidjan');
            $devis = new Devis();
            $devis->setTotalht(0);
            $devis->setTotalttc(0);
            $devis->setUser($this->getMaster());
            $devis->setDobyuser($this->getUser());
            $devis->setDate(new \DateTime('NOW'));
            $devis->setEtat('save');
            $devis->setTva('18');
            $devis->setDevReference('Référence');
        }
        $formDevis = $this->formFactory->createNamed('', DevisType::class, $devis, [
            'client' => $chantier->getClient(),
            'type' => 'devischantier',
            'user' => $this->getMaster()
        ]);


        // CRÉE UN NOUVEAU DECOMPTE
        $decompte = $repoDecompte->findOneBy(['id' => $iddecompte, 'user' => $this->getMaster()]);
        if (!$decompte) {
            $decompte = new Decompte();
            $decompte->setUser($this->getMaster());
            $decompte->setDobyuser($this->getUser());
            $decompte->setDate(new \DateTime('NOW'));
            $decompte->setClient($chantier->getClient());
            $decompte->setEtat('save');
            $decompte->setProrata(0);
            $decompte->setAcompte(0);
            $decompte->setGarantie(0);
            $decompte->setFinition(0);
        }


        // FORMULAIRE DEVIS
        $formDecompte = $this->formFactory->createNamed('', DecompteType::class, $decompte, [
            'type' => 'chantiers',
            'user' => $this->getMaster()
        ]);


        // CRÉE UN NOUVEAU BON
        date_default_timezone_set('Africa/Abidjan');
        $bon = new Bon();
        $bon->setDate(new \DateTime('NOW'));
        $bon->setTva('18');
        $bon->setUser($this->getMaster());
        $bon->setDobyuser($this->getUser());
        $bon->setClient($chantier->getClient());
        $bon->setEtat('save');
        $bon->setBonReference('Référence');

        // FORMULAIRE BON
        $formBon = $this->formFactory->createNamed('', BonType::class, $bon, [
            'client' => $chantier->getClient(),
            'chantier' => $chantiers,
            'type' => 'chantiers',
            'user' => $this->getMaster()
        ]);


        // CRÉE UN NOUVEAU BON LIVRAISON
        $livraison = new Livraison();
        $livraison->setDate(new \DateTime('NOW'));
        $livraison->setUser($this->getMaster());
        $livraison->setDobyuser($this->getUser());
        $livraison->setEtat('save');
        $livraison->setLivreReference('Référence');

        // FORMULAIRE BON
        $formLivraison = $this->formFactory->createNamed('', LivraisonType::class, $livraison, [
            'type' => 'chantiers',
            'user' => $this->getMaster()
        ]);

        // RECUPERE LES TRAVAUX VALIDÉES ET VERIFICATION
        $prt = $repoChantier->findOneBy(['user' => $this->getMaster(), 'type' => 'frais']);
        $prte = $repoChantier->findOneBy(['user' => $this->getMaster(), 'type' => 'personnel']);
        $cps = $repoChantier->findOneBy(['user' => $this->getMaster(), 'type' => 'article composé']);

        if (!$prt) {
            $cli = new Client();
            $cli->setUser($this->getMaster());
            $cli->setDobyuser($this->getMaster());
            $cli->setNomClient($this->getMaster()->getSociete());
            $cli->setCode($this->getMaster()->getSociete());
            $cli->setType('caisse');
            $manager->persist($cli);
            $manager->flush();

            $prt = new Chantier();
            $prt->setClient($cli);
            $prt->setUser($this->getMaster());
            $prt->setDobyuser($this->getMaster());
            $prt->setNomChantier('Frais interne');
            $prt->setType('frais');
            $idpro = (string)random_int(0, 999999);
            $prt->setIdchantier($idpro);

            $prte = new Chantier();
            $prte->setClient($cli);
            $prte->setUser($this->getMaster());
            $prte->setDobyuser($this->getMaster());
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
                $cli->setUser($this->getMaster());
                $cli->setDobyuser($this->getMaster());
                $cli->setNomClient($this->getMaster()->getSociete());
                $cli->setCode($this->getMaster()->getSociete());
                $cli->setType('compose');
                $manager->persist($cli);
                $manager->flush();
            }


            $cps = new Chantier();
            $cps->setClient($cli);
            $cps->setUser($this->getMaster());
            $cps->setDobyuser($this->getMaster());
            $cps->setNomChantier('Article composé');
            $cps->setType('article composé');
            $idpro = (string)random_int(0, 999999);
            $cps->setIdchantier($idpro);
            $manager->persist($cps);
            $manager->persist($cps);
            $manager->flush();

        }

        $valider = $repoValide->findByChantier($prt);
        $validere = $repoValide->findByChantier($prte);

        // CRÉE UN NOUVEAU BON CAISSE
        $caisse = $repoCaisse->findOneBy(['id' => $idcaisse, 'user' => $this->getMaster()]);

        // CRÉE UN NOUVEAU BON DE CAISSE
        if (!$caisse) {
            $caisse = new Caisse();
            $caisse->setDate(new \DateTime('NOW'));
            $caisse->setCaisseReference($chantier->getNomChantier());
            $caisse->setUser($this->getMaster());
            $caisse->setDobyuser($this->getUser());
            $caisse->setEtat('save');
        }


        $formCaisse = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'chantiers',
            'user' => $this->getMaster()
        ]);

        $formCaisseFrais = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'frais',
            'user' => $this->getMaster()
        ]);

        $formCaisseOper = $this->formFactory->createNamed('', CaisseType::class, $caisse, [
            'type' => 'interne',
            'user' => $this->getMaster()
        ]);

        //INTERVENANT
        $interve = $repoIntervenant->findOneBy(['id' => $idinterve, 'user' => $this->getMaster()]);
        if (!$interve) {
            $interve = new Intervenant();
        }

        $formInterve = $this->formFactory->createNamed('', IntervenantType::class, $interve, [
            'type' => 'chantiers',
            'user' => $this->getMaster()
        ]);

        $formOperation = $this->formFactory->createNamed('', IntervenantType::class, $interve, [
            'type' => 'operation',
            'user' => $this->getMaster()
        ]);

        $facture = $repoFacture->findOneBy(['id' => $idfacture, 'user' => $this->getMaster()]);
        if (!$facture) {
            $facture = new Facture();
            $facture->setUser($this->getMaster());
            $facture->setDobyuser($this->getUser());
            $facture->setDate(new \DateTime('NOW'));
            $facture->setEtat('save');
            $facture->setFactReference('FACTURE');
        }

        // FORMULAIRE FACTURE
        $formFacture = $this->formFactory->createNamed('', FactureType::class, $facture, [
            'type' => 'chantiers',
            'user' => $this->getMaster()
        ]);

        $paie = new Paie();
        $paie->setUser($this->getMaster());
        $formPaie = $this->formFactory->createNamed('', PaieType::class, $paie);

        $releve = new Relever();
        $releve->setDate(new \DateTime('NOW'));
        $releve->setType(3);

        $formeRegle = $this->formFactory->createNamed('', ReleverType::class, $releve, [
            'user' => $this->getMaster(),
            'type' => 'chantiers'
        ]);

        if ($this->getCheckRoles() === "non") {
            return $this->redirectToRoute('welcome');
        }

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());

        return $this->render('content/chantiers.html.twig', [
            'title' => 'Chantiers | Carlinbleu',
            'formClient' => $formClient->createView(),
            'formDecompte' => $formDecompte->createView(),
            'clients' => $clients,
            'client' => $client,
            'chantiers' => $chantiers,
            'chantier' => $chantier,
            'prtfrais' => $prt,
            'prtepersonnel' => $prte,
            'bons' => $bons,
            'decomptes' => $decomptes,
            'deviss' => $deviss,
            'caisse' => $caisse,
            'caisses' => $caisses,
            'caissefrais' => $caissefrais,
            'caissepersonnel' => $caissepersonnel,
            'livraisons' => $livraisons,
            'factures' => $factures,
            'master' => $this->getMaster(),
            'editPersonnel' => $idperson !== null,
            'interve' => $interve,
            'person' => $personnel,
            'formChantier' => $formChantier->createView(),
            'estmaster' => $this->getMaster() === $this->getUser(),
            'formPersonnel' => $formPersonnel->createView(),
            'formInterve' => $formInterve->createView(),
            'formInterne' => $formInterne->createView(),
            'formOperation' => $formOperation->createView(),
            'formFacture' => $formFacture->createView(),
            'formContact' => $formContact->createView(),
            'formCaisse' => $formCaisse->createView(),
            'formPaie' => $formPaie->createView(),
            'formCaisseFrais' => $formCaisseFrais->createView(),
            'formCaisseOper' => $formCaisseOper->createView(),
            'date' => $date,
            'formDevis' => $formDevis->createView(),
            'formBon' => $formBon->createView(),
            'formLivraison' => $formLivraison->createView(),
            'page' => 'comptable',
            'idchantier' => $id,
            'prt' => $prt->getId(),
            'prte' => $prte->getId(),
            'valider' => $valider,
            'validere' => $validere,
            'devis' => $devis,
            'decompte' => $decompte,
            'facture' => $facture,
            'contact' => $contact,
            'personnels' => $personnels,
            'editCont' => $contact->getId() !== null,
            'formeRegle' => $formeRegle->createView(),
            'jsonclients' => true,
            'history' => $historiques,
            'arole' => $this->getCheckRoles()
        ]);
    }
}
