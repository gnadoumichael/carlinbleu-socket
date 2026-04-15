<?php

namespace App\Controller;

use App\Entity\Bon;
use App\Entity\Caisse;
use App\Entity\Chantier;
use App\Entity\Client;
use App\Entity\Historique;
use App\Entity\User;
use App\Entity\Valider;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/crm/tresorerie')]
class TresorerieController extends AbstractController
{


    private $formFactory;
    public function __construct(private ManagerRegistry $doctrine, FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }
    public function getMaster(): ?object
    {
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
        if(!$this->isGranted('ROLE_COMPTA')){
            return "non";
        }
        return "oui";
    }

    #[Route('/', name: 'app_tresorerie')]
    #[Route('/bilan/{an}', name: 'bilantresor')]
    public function index(int $an = null): Response
    {

        $repoHistorique = $this->doctrine->getRepository(Historique::class);
        $historiques = $repoHistorique->findBa($this->getMaster());
        $repoClient = $this->doctrine->getRepository(Client::class);
        $repoCaisse = $this->doctrine->getRepository(Caisse::class);
        $repoValider = $this->doctrine->getRepository(Valider::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);

        if($this->getCheckRoles() === "non"){
            return $this->redirectToRoute('welcome');
        }

        $caisses = $repoCaisse->findByTresor($this->getMaster());
        $clients = $repoClient->findBy(['user' => $this->getMaster()], ['nomclient' => 'ASC']);
        $ane = 0;
        if($an === null){
            $an = date("Y");
        }

        $passerdeps = 0;
        $passerrec = 0;

        $jandate = date("Y")."-01";
        $jandeps = 0;
        $janrec = 0;
        $chfourjan = 0;
        $chchanjan = 0;
        $chintjan = 0;
        $chpersjan = 0;
        $bonsjan = 0;
        $bonfjan = 0;

        $fevdate = date("Y")."-02";
        $fevdeps = 0;
        $fevrec = 0;
        $chfourfev = 0;
        $chchanfev = 0;
        $chintfev = 0;
        $chpersfev = 0;
        $bonsfev = 0;
        $bonffev = 0;

        $marsdate = date("Y")."-03";
        $marsdeps = 0;
        $marsrec = 0;
        $chfourmars = 0;
        $chchanmars = 0;
        $chintmars = 0;
        $chpersmars = 0;
        $bonsmars = 0;
        $bonfmars = 0;

        $avrdate = date("Y")."-04";
        $avrdeps = 0;
        $avrrec = 0;
        $chfouravr = 0;
        $chchanavr = 0;
        $chintavr = 0;
        $chpersavr = 0;
        $bonsavr = 0;
        $bonfavr = 0;

        $maidate = date("Y")."-05";
        $maideps = 0;
        $mairec = 0;
        $chfourmai = 0;
        $chchanmai = 0;
        $chintmai = 0;
        $chpersmai= 0;
        $bonsmai = 0;
        $bonfmai = 0;

        $juindate = date("Y")."-06";
        $juindeps = 0;
        $juinrec = 0;
        $chfourjuin = 0;
        $chchanjuin = 0;
        $chintjuin = 0;
        $chpersjuin = 0;
        $bonsjuin = 0;
        $bonfjuin = 0;

        $juildate = date("Y")."-07";
        $juildeps = 0;
        $juilrec = 0;
        $chfourjuil = 0;
        $chchanjuil = 0;
        $chintjuil = 0;
        $chpersjuil = 0;
        $bonsjuil = 0;
        $bonfjuil = 0;


        $aoutdate = date("Y")."-07";
        $aoutdeps = 0;
        $aoutrec = 0;
        $chfouraout = 0;
        $bonsaout = 0;
        $bonfaout = 0;

        $sepdate = date("Y")."-08";
        $sepdeps = 0;
        $seprec = 0;
        $chfoursept = 0;
        $bonssept = 0;

        $octdate = date("Y")."-09";
        $octdeps = 0;
        $octrec = 0;
        $chfouroct = 0;
        $bonsoct= 0;

        $novdate = date("Y")."-09";
        $novdeps = 0;
        $novrec = 0;
        $chfournov = 0;
        $bonsnov = 0;

        $decdate = date("Y")."-09";
        $decdeps = 0;
        $decrec = 0;
        $chfourdec = 0;
        $bonsdec = 0;



        $validers = $repoValider->findBy(['user'=>$this->getMaster()]);
        $bons = $repoBon->findBy(['user'=>$this->getMaster()]);

        foreach ($validers as $valide){
            if($valide->getChantier() !== null ){
                if($valide->getChantier()->getCorbeille() === null && $valide->getChantier()->getClient()->getCorbeille() === null) {
                    $dd = $valide->getDate()->format('Y-m');
                    $ddo = $valide->getDate()->format('Y');
                    if (strcmp($dd, $jandate) === 0) {
                        if ($valide->getType() === 1 || $valide->getType() === 3) {
                            $janrec = $valide->getCredit() + $janrec;
                        }
                    }
                    if (strcmp($dd, $fevdate) === 0) {
                        if ($valide->getType() === 1 || $valide->getType() === 3) {
                            $fevrec = $valide->getCredit() + $fevrec;
                        }
                    }
                    if (strcmp($dd, $marsdate) === 0) {
                        if ($valide->getType() === 1 || $valide->getType() === 3) {
                            $marsrec = $valide->getCredit() + $marsrec;
                        }
                    }
                    if (strcmp($dd, $avrdate) === 0) {
                        if ($valide->getType() === 1 || $valide->getType() === 3) {
                            $avrrec = $valide->getCredit() + $avrrec;
                        }
                    }
                    if (strcmp($dd, $maidate) === 0) {
                        if ($valide->getType() === 1 || $valide->getType() === 3) {
                            $mairec = $valide->getCredit() + $mairec;
                        }
                    }
                    if (strcmp($dd, $juindate) === 0) {
                        if ($valide->getType() === 1 || $valide->getType() === 3) {
                            $juinrec = $valide->getCredit() + $juinrec;
                        }
                    }
                    if (strcmp($dd, $juildate) === 0) {
                        if ($valide->getType() === 1 || $valide->getType() === 3) {
                            $juilrec = $valide->getCredit() + $juilrec;
                        }
                    }
                    if (strcmp($dd, $aoutdate) === 0) {
                        if ($valide->getType() === 1 || $valide->getType() === 3) {
                            $aoutrec = $valide->getCredit() + $aoutrec;
                        }
                    }
                    if (strcmp($dd, $sepdate) === 0) {
                        if ($valide->getType() === 1 || $valide->getType() === 3) {
                            $seprec = $valide->getCredit() + $seprec;
                        }
                    }
                    if (strcmp($dd, $octdate) === 0) {
                        if ($valide->getType() === 1 || $valide->getType() === 3) {
                            $octrec = $valide->getCredit() + $octrec;
                        }
                    }
                    if (strcmp($dd, $novdate) === 0) {
                        if ($valide->getType() === 1 || $valide->getType() === 3) {
                            $novrec = $valide->getCredit() + $novrec;
                        }
                    }
                    if (strcmp($dd, $decdate) === 0) {
                        if ($valide->getType() === 1 || $valide->getType() === 3) {
                            $decrec = $valide->getCredit() + $decrec;
                        }
                    }
                    if (strcmp($ddo, $an) < 0) {
                        if ($valide->getType() === 1 || $valide->getType() === 3) {
                            $passerrec = $valide->getCredit() + $passerrec;
                        }
                    }
                }
            }
        }
        foreach ($caisses as $caiss){
            $de = $caiss->getDate()->format('Y-m');
            $ddo = $caiss->getDate()->format('Y');
            if( strcmp($de,$jandate) === 0){
                    if($caiss->getOperation() === "debit") {
                        $jandeps = $caiss->getMontant() + $jandeps;
                        if($caiss->getType() === 1){
                            $chfourjan = $caiss->getMontant() + $chfourjan;
                        }
                        if($caiss->getType() === 3){
                            $chchanjan = $caiss->getMontant() + $chchanjan;
                        }
                        if($caiss->getType() === 2){
                            $chintjan = $caiss->getMontant() + $chintjan;
                        }
                        if($caiss->getType() === 5){
                            $chpersjan = $caiss->getMontant() + $chpersjan;
                        }
                    }
                    if($caiss->getOperation() === "credit") {
                        $janrec = $caiss->getMontant() + $janrec;
                    }
            }
            if( strcmp($de,$fevdate) === 0){
                if($caiss->getOperation() === "debit") {
                    $fevdeps = $caiss->getMontant() + $fevdeps;
                    if($caiss->getType() === 1){
                        $chfourfev = $caiss->getMontant() + $chfourfev;
                    }
                    if($caiss->getType() === 3){
                        $chchanfev = $caiss->getMontant() + $chchanfev;
                    }
                    if($caiss->getType() === 2){
                        $chintfev = $caiss->getMontant() + $chintfev;
                    }
                    if($caiss->getType() === 5){
                        $chpersfev = $caiss->getMontant() + $chpersfev;
                    }
                }
                if($caiss->getOperation() === "credit") {
                    $fevrec = $caiss->getMontant() + $fevrec;
                }
            }
            if( strcmp($de,$marsdate) === 0){
                if($caiss->getOperation() === "debit") {
                    $marsdeps = $caiss->getMontant() + $marsdeps;
                    if($caiss->getType() === 1){
                        $chfourmars = $caiss->getMontant() + $chfourmars;
                    }
                    if($caiss->getType() === 3){
                        $chchanmars= $caiss->getMontant() + $chchanmars;
                    }
                    if($caiss->getType() === 2){
                        $chintmars = $caiss->getMontant() + $chintmars;
                    }
                    if($caiss->getType() === 5){
                        $chpersmars = $caiss->getMontant() + $chpersmars;
                    }
                }
                if($caiss->getOperation() === "credit") {
                    $marsrec = $caiss->getMontant() + $marsrec;
                }
            }
            if( strcmp($de,$avrdate) === 0){
                if($caiss->getOperation() === "debit") {
                    $avrdeps = $caiss->getMontant() + $avrdeps;
                    if($caiss->getType() === 1){
                        $chfouravr = $caiss->getMontant() + $chfouravr;
                    }
                    if($caiss->getType() === 3){
                        $chchanavr = $caiss->getMontant() + $chchanavr;
                    }
                    if($caiss->getType() === 2){
                        $chintavr = $caiss->getMontant() + $chintavr;
                    }
                    if($caiss->getType() === 5){
                        $chpersavr = $caiss->getMontant() + $chpersavr;
                    }
                }
                if($caiss->getOperation() === "credit") {
                    $avrrec = $caiss->getMontant() + $avrrec;
                }
            }
            if( strcmp($de,$maidate) === 0){
                if($caiss->getOperation() === "debit") {
                    $maideps = $caiss->getMontant() + $maideps;
                    if($caiss->getType() === 1){
                        $chfourmai = $caiss->getMontant() + $chfourmai;
                    }
                    if($caiss->getType() === 3){
                        $chchanmai = $caiss->getMontant() + $chchanmai;
                    }
                    if($caiss->getType() === 2){
                        $chintmai = $caiss->getMontant() + $chintmai;
                    }
                    if($caiss->getType() === 5){
                        $chpersmai= $caiss->getMontant() + $chpersmai;
                    }
                }
                if($caiss->getOperation() === "credit") {
                    $mairec = $caiss->getMontant() + $mairec;
                }
            }
            if( strcmp($de,$juindate) === 0){
                    if($caiss->getOperation() === "debit") {
                        $juindeps = $caiss->getMontant() + $juindeps;
                        if($caiss->getType() === 1){
                            $chfourjuin = $caiss->getMontant() + $chfourjuin;
                        }
                        if($caiss->getType() === 3){
                            $chchanjuin = $caiss->getMontant() + $chchanjuin;
                        }
                        if($caiss->getType() === 2){
                            $chintjuin = $caiss->getMontant() + $chintjuin ;
                        }
                        if($caiss->getType() === 5){
                            $chpersjuin = $caiss->getMontant() + $chpersjuin;
                        }
                    }
                    if($caiss->getOperation() === "credit") {
                        $juinrec = $caiss->getMontant() + $juinrec;
                }
            }
            if( strcmp($de,$juildate) === 0){
                if($caiss->getOperation() === "debit") {
                    $juildeps = $caiss->getMontant() + $juildeps;
                    if($caiss->getType() === 1){
                        $chfourjuil = $caiss->getMontant() + $chfourjuil;
                    }
                    if($caiss->getType() === 3){
                        $chchanjuil = $caiss->getMontant() + $chchanjuil;
                    }
                    if($caiss->getType() === 2){
                        $chintjuil = $caiss->getMontant() + $chintjuil;
                    }
                    if($caiss->getType() === 5){
                        $chpersjuil = $caiss->getMontant() + $chpersjuil;
                    }
                }
                if($caiss->getOperation() === "credit") {
                    $juilrec = $caiss->getMontant() + $juilrec;
                }
            }
            if( strcmp($de,$aoutdate) === 0){
                if($caiss->getOperation() === "debit") {
                    $aoutdeps = $caiss->getMontant() + $aoutdeps;
                }
                if($caiss->getOperation() === "credit") {
                    $aoutrec = $caiss->getMontant() + $aoutrec;
                }
            }
            if( strcmp($de,$sepdate) === 0){
                if($caiss->getOperation() === "debit") {
                    $sepdeps = $caiss->getMontant() + $sepdeps;
                }
                if($caiss->getOperation() === "credit") {
                    $seprec = $caiss->getMontant() + $seprec;
                }
            }
            if( strcmp($de,$octdate) === 0){
                if($caiss->getOperation() === "debit") {
                    $octdeps = $caiss->getMontant() + $octdeps;
                }
                if($caiss->getOperation() === "credit") {
                    $octrec = $caiss->getMontant() + $octrec;
                }
            }
            if( strcmp($de,$novdate) === 0){
                if($caiss->getOperation() === "debit") {
                    $novdeps = $caiss->getMontant() + $novdeps;
                }
                if($caiss->getOperation() === "credit") {
                    $novrec = $caiss->getMontant() + $novrec;
                }
            }
            if( strcmp($de,$decdate) === 0){
                if($caiss->getOperation() === "debit") {
                    $decdeps = $caiss->getMontant() + $decdeps;
                }
                if($caiss->getOperation() === "credit") {
                    $decrec = $caiss->getMontant() + $decrec;
                }
            }
            if( strcmp($ddo,$an) < 0){
                if($caiss->getOperation() === "debit") {
                    $passerdeps = $caiss->getMontant() + $passerdeps;
                }
                if($caiss->getOperation() === "credit") {
                    $passerrec = $caiss->getMontant() + $passerrec ;
                }
            }
        }
        foreach ($bons as $bon){
           if($bon->getFournisseur() === null){
               $de = $bon->getDate()->format('Y-m');
               if((strcmp($de, $jandate) === 0) && $bon->getType() === "pst") {
                   $bonsjan = $bon->getTotalttc() + $bonsjan;
               }
               if((strcmp($de, $fevdate) === 0) && $bon->getType() === "pst") {
                   $bonsfev = $bon->getTotalttc() + $bonsfev;
               }
               if((strcmp($de, $marsdate) === 0) && $bon->getType() === "pst") {
                   $bonsmars = $bon->getTotalttc() + $bonsmars;
               }
               if((strcmp($de, $avrdate) === 0) && $bon->getType() === "pst") {
                   $bonsavr = $bon->getTotalttc() + $bonsavr;
               }
               if((strcmp($de, $maidate) === 0) && $bon->getType() === "pst") {
                   $bonsmai = $bon->getTotalttc() + $bonsmai;
               }
               if((strcmp($de, $juindate) === 0) && $bon->getType() === "pst") {
                   $bonsjuin = $bon->getTotalttc() + $bonsjuin;
               }
               if((strcmp($de, $juildate) === 0) && $bon->getType() === "pst") {
                   $bonsjuil = $bon->getTotalttc() + $bonsjuil;
               }

               if((strcmp($de, $jandate) === 0) && $bon->getType() === "oui") {
                   $bonfjan = $bon->getTotalttc() + $bonfjan;
               }
               if((strcmp($de, $fevdate) === 0) && $bon->getType() === "oui") {
                   $bonffev = $bon->getTotalttc() + $bonffev;
               }
               if((strcmp($de, $marsdate) === 0) && $bon->getType() === "oui") {
                   $bonfmars = $bon->getTotalttc() + $bonfmars;
               }
               if((strcmp($de, $avrdate) === 0) && $bon->getType() === "oui") {
                   $bonfavr = $bon->getTotalttc() + $bonfavr;
               }
               if((strcmp($de, $maidate) === 0) && $bon->getType() === "oui") {
                   $bonfmai = $bon->getTotalttc() + $bonfmai;
               }
               if((strcmp($de, $juindate) === 0) && $bon->getType() === "oui") {
                   $bonfjuin = $bon->getTotalttc() + $bonfjuin;
               }
               if((strcmp($de, $juildate) === 0) && $bon->getType() === "oui") {
                   $bonfjuil = $bon->getTotalttc() + $bonfjuil;
               }
           }
        }


        $soldePasser = $passerrec - $passerdeps;
        $soldeJanvier = $janrec - $jandeps + $soldePasser;
        $soldeFevrier = $fevrec - $fevdeps + $soldeJanvier;
        $soldeMars = $marsrec - $marsdeps + $soldeFevrier;
        $soldeAvril = $avrrec - $avrdeps + $soldeMars;
        $soldeMai = $mairec - $maideps + $soldeAvril;
        $soldeJuin = $juinrec - $juindeps + $soldeMai;
        $soldeJuil = $juilrec - $juildeps + $soldeJuin;
        $soldeAout = $aoutrec - $aoutdeps + $soldeJuil;
        $soldeSept = $seprec - $sepdeps + $soldeAout;
        $soldeOct = $octrec - $octdeps + $soldeSept;
        $soldeNov = $octrec - $octdeps + $soldeSept;
        $soldeDec = $decrec - $decdeps + $soldeNov;



        return $this->render('content/tresorerie.html.twig', [
            'controller_name' => 'TresorerieController',
            'history' => $historiques,
            'clients' => $repoClient->GetAllUser($this->getMaster()),
            'title' => "GESTION DE TRÉSORERIE",
            'caisses' => $caisses,
            'clientes' => $clients,
            'an' => $an,
            'ane' => $ane,
            'soldeJanvier' => $soldeJanvier,
            'chfourjan' => $chfourjan,
            'chchanjan' => $chchanjan,
            'chintjan' => $chintjan,
            'chpersjan' => $chpersjan,
            'jandeps' => $jandeps,
            'janrec' => $janrec,
            'soldeFevrier' => $soldeFevrier,
            'chfourfev' => $chfourfev,
            'chchanfev' => $chchanfev,
            'chintfev' => $chintfev,
            'chpersfev' => $chpersfev,
            'fevdeps' => $fevdeps,
            'fevrec' => $fevrec,
            'soldeMars' => $soldeMars,
            'chfourmars' => $chfourmars,
            'chchanmars' => $chchanmars,
            'chintmars' => $chintmars,
            'chpersmars' => $chpersmars,
            'marsdeps' => $marsdeps,
            'marsrec' => $marsrec,
            'soldeAvril' => $soldeAvril,
            'chfouravr' => $chfouravr,
            'chchanavr' => $chchanavr,
            'chintavr' => $chintavr,
            'chpersavr' => $chpersavr,
            'avrdeps' => $avrdeps,
            'avrrec' => $avrrec,
            'soldeMai' => $soldeMai,
            'chfourmai' => $chfourmai,
            'chchanmai' => $chchanmai,
            'chintmai' => $chintmai,
            'chpersmai' => $chpersmai,
            'maideps' => $maideps,
            'mairec' => $mairec,
            'soldeJuin' => $soldeJuin,
            'chfourjuin' => $chfourjuin,
            'chchanjuin' => $chchanjuin,
            'chintjuin' => $chintjuin,
            'chpersjuin' => $chpersjuin,
            'juindeps' => $juindeps,
            'juinrec' => $juinrec,
            'soldeJuil' => $soldeJuil,
            'chfourjuil' => $chfourjuil,
            'chchanjuil' => $chchanjuil,
            'chintjuil' => $chintjuil,
            'chpersjuil' => $chpersjuil,
            'juildeps' => $juildeps,
            'juilrec' => $juilrec,
            'soldeAout' => $soldeAout,
            'aoutdeps' => $aoutdeps,
            'aoutrec' => $aoutrec,
            'soldeSept' => $soldeSept,
            'sepdeps' => $sepdeps,
            'seprec' => $seprec,
            'soldeOct' => $soldeOct,
            'octdeps' => $octdeps,
            'octrec' => $octrec,
            'soldeNov' => $soldeNov,
            'novdeps' => $novdeps,
            'novrec' => $novrec,
            'soldeDec' => $soldeDec,
            'decdeps' => $decdeps,
            'decrec' => $decrec,
            'soldePasser' => $soldePasser,
            'passerdeps' => $passerdeps,
            'passerrec' => $passerrec,
            'validers' => $validers,
            'bonsjan' => $bonsjan,
            'bonsfev' => $bonsfev,
            'bonsmars' => $bonsmars,
            'bonsavr' => $bonsavr,
            'bonsmai' => $bonsmai,
            'bonsjuin' => $bonsjuin,
            'bonsjuil' => $bonsjuil,
            'bonfjan' => $bonfjan,
            'bonffev' => $bonffev,
            'bonfmars' => $bonfmars,
            'bonfavr' => $bonfavr,
            'bonfmai' => $bonfmai,
            'bonfjuin' => $bonfjuin,
            'bonfjuil' => $bonfjuil,
        ]);
    }
}
