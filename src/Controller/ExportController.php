<?php
// src/Controller/ExportController.php
namespace App\Controller;

use App\Entity\Bon;
use App\Entity\Documents;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Serializer\SerializerInterface;


#[Route(path: '/api/excel')]
class ExportController extends AbstractController
{
    private ManagerRegistry $doctrine;
    private Filesystem $fs;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
        $this->fs = new Filesystem();
    }

    #[Route(path: '/bonfournisseur/{id}', name: 'api_excel_bonfournisseur', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function pdfToExcel(string $id, SerializerInterface $serializer, Request $request): JsonResponse
    {
        $em = $this->doctrine->getManager();
        $repoUser = $this->doctrine->getRepository(User::class);
        $repoBon = $this->doctrine->getRepository(Bon::class);

        // --- lecture input (comme ton endpoint /pdf/get)
        $apjson = $request->getContent();
        $user = $serializer->deserialize($apjson, User::class, 'json');
        $apuser = $repoUser->findOneBy(['username' => $user->getUserIdentifier()]);

        if (!$apuser) {
            return $this->json(['error' => 'Utilisateur introuvable'], 400);
        }

        // gestion compte -> master (même logique que ton endpoint)
        if ($apuser->getCompte() === null) {
            $master = $apuser;
        } else {
            $master = $repoUser->findOneBy(['id' => $apuser->getCompte()]);
        }

        $bon = $repoBon->findOneBy(['user' => $master, 'id' => $id]);
        if (!$bon) {
            return $this->json(['error' => 'Bon introuvable'], 404);
        }

        // récupérer les données (assure-toi que tes entités ont bien ces getters)
        $lignes = $bon->getLignes(); // ou repository findBy(['bon'=>$bon]) si relation non eager
        $groupes = $bon->getGroupes(); // idem : adapte selon ton modèle
        $caisses = $bon->getCaisses(); // paiements

        // ---- Calculs (si tu veux recalculer)
        $th = 0.0;
        $rem = 0.0;
        $vtva = 0.0;
        foreach ($lignes as $lig) {
            if ($bon->getAarem() === 'oui') {
                $lineBase = ($lig->getQuantite() * $lig->getPu());
                $rem += ($lineBase * $lig->getRemise() / 100);
                $th += ($lineBase * ((100 - $lig->getRemise()) / 100));
            } else {
                $th += ($lig->getQuantite() * $lig->getPu());
            }
        }
        $vtva = ($th * $bon->getTva()) / 100;
        $ttc = $th + $vtva;

        // --- Création Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Bon ' . $bon->getNumbon());

        $row = 1;

        // --- Header client / info (à droite)
        $sheet->setCellValue('A'.$row, 'CLIENT:');
        $sheet->mergeCells("A{$row}:C{$row}");
        $sheet->setCellValue('D'.$row, strtoupper($bon->getClient()->getNomClient()));
        $sheet->mergeCells("D{$row}:G{$row}");
        $row++;

        $sheet->setCellValue('A'.$row, 'ADRESSE:');
        $sheet->mergeCells("A{$row}:C{$row}");
        $sheet->setCellValue('D'.$row, $bon->getClient()->getAdresse() ?? '');
        $sheet->mergeCells("D{$row}:G{$row}");
        $row += 2;

        // --- Titre (type)
        $title = 'BON';
        switch ($bon->getType()) {
            case 'oui': $title = 'BON DE COMMANDE - FOURNISSEUR'; break;
            case 'non': $title = 'BON DE RETOUR DE COMMANDE - FOURNISSEUR'; break;
            case 'none': $title = 'BON DE LIVRAISON'; break;
            case 'pst': $title = 'BON DE COMMANDE - PRESTATAIRE'; break;
            case 'cps': $title = 'PRÉVISION ARTICLE COMPOSÉ'; break;
            case 'prepa': $title = 'BON DE SUIVI DE COMMANDE'; break;
        }
        $sheet->setCellValue('A'.$row, $title);
        $sheet->getStyle("A{$row}")->getFont()->setBold(true)->setSize(14);
        $sheet->mergeCells("A{$row}:G{$row}");
        $row += 2;

        // --- Informations : date, numbon, preparation, devis, fournisseur...
        $sheet->setCellValue("A{$row}", 'DATE');
        $sheet->setCellValue("B{$row}", $bon->getDate()?->format('d/m/Y') ?? '');
        $sheet->setCellValue("C{$row}", 'N° BON');
        $sheet->setCellValue("D{$row}", $bon->getNumbon());
        $sheet->setCellValue("E{$row}", 'DEVIS N°');
        $sheet->setCellValue("F{$row}", $bon->getDevis()?->getIddevis() ?? '');
        $row += 2;

        // --- Table header dynamique (en fonction de ton template)
        $headers = [];
        if ($bon->getAaref() === 'oui') {
            $headers[] = 'RÉF';
        }
        $headers[] = 'DÉSIGNATION';
        $headers[] = 'UNITÉ';

        // colonnes selon type
        $type = $bon->getType();
        if ($type === 'none') {
            $headers[] = 'QUANTITÉ LIVRÉE';
        } elseif ($type === 'prepa') {
            $headers[] = 'QTÉ PRÉVUE';
            $headers[] = 'QTÉ LIVRÉE';
            $headers[] = 'RESTE À LIVRER';
        } elseif ($type === 'oui' || $type === 'non') {
            if ($bon->getPreparation() !== null) {
                $headers[] = 'QTÉ PRÉVUE';
                $headers[] = 'QTÉ LIVRÉE';
                $headers[] = 'RESTE À LIVRER';
                $headers[] = 'QTÉ DEMANDÉE';
            } else {
                $headers[] = 'QTÉ';
            }
        } elseif ($type === 'cps' || $type === 'pst') {
            $headers[] = 'QTÉ';
        }

        $headers[] = 'PRIX U.';
        if ($bon->getAarem() === 'oui') {
            $headers[] = 'REMISE';
        }
        $headers[] = 'MONTANT HT';

        // écrire header
        $col = 'A';
        foreach ($headers as $h) {
            $sheet->setCellValue($col.$row, $h);
            $sheet->getStyle($col.$row)->getFont()->setBold(true);
            $sheet->getStyle($col.$row)->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setARGB('FFF2F2F2');
            $sheet->getStyle($col.$row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            $col++;
        }
        $row++;

        // --- Parcourir groupes (si tu as listGroup)
        // Je suppose $groupes est un collection d'objets avec getGroupe(), getReference(), getLignes()
        if ($groupes) {
            foreach ($groupes as $group) {
                // groupe titre
                $sheet->setCellValue("A{$row}", strip_tags($group->getGroupe()));
                $sheet->getStyle("A{$row}")->getFont()->setBold(true);
                $sheet->mergeCells("A{$row}:".chr(ord('A') + count($headers) - 1).$row);
                $row++;

                // lignes du groupe
                $st = 0.0;
                foreach ($group->getLignes() as $lign) {
                    $col = 'A';
                    if ($bon->getAaref() === 'oui') {
                        $sheet->setCellValue($col.$row, $lign->getReference()); $col++;
                    }
                    $sheet->setCellValue($col.$row, strip_tags($lign->getDesignation())); $col++;
                    $sheet->setCellValue($col.$row, $lign->getUnite()); $col++;

                    // quantités et colonnes dynamiques
                    if ($type === 'none') {
                        $sheet->setCellValue($col.$row, number_format($lign->getQuantite(), 2, ',', '')); $col++;
                    } elseif ($type === 'prepa') {
                        $sheet->setCellValue($col.$row, number_format($lign->getQuantite(), 2, ',', '')); $col++;
                        $sheet->setCellValue($col.$row, number_format($lign->getLivrer(), 2, ',', '')); $col++;
                        $sheet->setCellValue($col.$row, number_format($lign->getReste(), 2, ',', '')); $col++;
                    } elseif ($type === 'oui' || $type === 'non') {
                        if ($bon->getPreparation() !== null) {
                            $sheet->setCellValue($col.$row, number_format(($lign->getLivrer() + $lign->getReste()), 2, ',', '')); $col++;
                            $sheet->setCellValue($col.$row, number_format($lign->getLivrer(), 2, ',', '')); $col++;
                            $sheet->setCellValue($col.$row, number_format($lign->getReste(), 2, ',', '')); $col++;
                            $sheet->setCellValue($col.$row, number_format($lign->getQuantite(), 2, ',', '')); $col++;
                        } else {
                            $sheet->setCellValue($col.$row, number_format($lign->getQuantite(), 2, ',', '')); $col++;
                        }
                    } elseif ($type === 'cps' || $type === 'pst') {
                        $sheet->setCellValue($col.$row, number_format($lign->getQuantite(), 2, ',', '')); $col++;
                    }

                    // prix unitaire
                    $sheet->setCellValue($col.$row, number_format($lign->getPu(), 2, ',', '')); $col++;

                    // remise
                    if ($bon->getAarem() === 'oui') {
                        $sheet->setCellValue($col.$row, $lign->getRemise() . '%'); $col++;
                    }

                    // montant ht
                    $montant = 0.0;
                    if ($bon->getAarem() === 'oui') {
                        $montant = ($lign->getQuantite() * $lign->getPu()) * ((100 - $lign->getRemise()) / 100);
                    } else {
                        $montant = ($lign->getQuantite() * $lign->getPu());
                    }
                    $sheet->setCellValue($col.$row, number_format($montant, 2, ',', ''));
                    $st += $montant;

                    $row++;
                }

                // sous-total du groupe
                $sheet->setCellValue("A{$row}", 'SOUS-TOTAL:');
                $sheet->mergeCells("A{$row}:".chr(ord('A') + count($headers) - 2).$row);
                $lastCol = chr(ord('A') + count($headers) - 1);
                $sheet->setCellValue($lastCol.$row, number_format($st, 2, ',', ''));
                $sheet->getStyle("A{$row}:{$lastCol}{$row}")->getFont()->setBold(true);
                $row++;
            }
        }

        // --- Lignes sans groupe (similaire)
        foreach ($lignes as $lign) {
            if ($lign->getGroupe() !== null) continue; // ignorées (déjà traitées)

            $col = 'A';
            if ($bon->getAaref() === 'oui') {
                $sheet->setCellValue($col.$row, $lign->getReference()); $col++;
            }
            $sheet->setCellValue($col.$row, strip_tags($lign->getDesignation())); $col++;
            $sheet->setCellValue($col.$row, $lign->getUnite()); $col++;

            if ($type === 'none') {
                $sheet->setCellValue($col.$row, number_format($lign->getQuantite(), 2, ',', '')); $col++;
            } elseif ($type === 'prepa') {
                $sheet->setCellValue($col.$row, number_format($lign->getQuantite(), 2, ',', '')); $col++;
                $sheet->setCellValue($col.$row, number_format($lign->getLivrer(), 2, ',', '')); $col++;
                $sheet->setCellValue($col.$row, number_format($lign->getReste(), 2, ',', '')); $col++;
            } elseif ($type === 'oui' || $type === 'non') {
                if ($bon->getPreparation() !== null) {
                    $sheet->setCellValue($col.$row, number_format(($lign->getLivrer() + $lign->getReste()), 2, ',', '')); $col++;
                    $sheet->setCellValue($col.$row, number_format($lign->getLivrer(), 2, ',', '')); $col++;
                    $sheet->setCellValue($col.$row, number_format($lign->getReste(), 2, ',', '')); $col++;
                    $sheet->setCellValue($col.$row, number_format($lign->getQuantite(), 2, ',', '')); $col++;
                } else {
                    $sheet->setCellValue($col.$row, number_format($lign->getQuantite(), 2, ',', '')); $col++;
                }
            } elseif ($type === 'cps' || $type === 'pst') {
                $sheet->setCellValue($col.$row, number_format($lign->getQuantite(), 2, ',', '')); $col++;
            }

            $sheet->setCellValue($col.$row, number_format($lign->getPu(), 2, ',', '')); $col++;

            if ($bon->getAarem() === 'oui') {
                $sheet->setCellValue($col.$row, $lign->getRemise() . '%'); $col++;
            }

            $montant = ($bon->getAarem() === 'oui') ?
                ($lign->getQuantite() * $lign->getPu()) * ((100 - $lign->getRemise()) / 100) :
                ($lign->getQuantite() * $lign->getPu());

            $sheet->setCellValue($col.$row, number_format($montant, 2, ',', ''));
            $row++;
        }

        // --- HISTORIQUE PAIEMENTS (si existant)
        if ($caisses && count($caisses) > 0) {
            $row++;
            $sheet->setCellValue("A{$row}", 'HISTORIQUE DES PAIEMENTS');
            $sheet->getStyle("A{$row}")->getFont()->setBold(true)->getColor()->setARGB('FFFF0000');
            $sheet->mergeCells("A{$row}:".chr(ord('A') + count($headers) - 1).$row);
            $row++;

            // entête paiements
            $sheet->setCellValue("A{$row}", 'DATE');
            $sheet->setCellValue("B{$row}", 'N° BON');
            $sheet->setCellValue("C{$row}", 'MONTANT');
            $sheet->getStyle("A{$row}:C{$row}")->getFont()->setBold(true);
            $row++;

            $recu = 0.0;
            foreach ($caisses as $c) {
                if ($c->getEtat() !== 'valide') continue;
                $sheet->setCellValue("A{$row}", $c->getDate()?->format('d/m/Y') ?? '');
                $sheet->setCellValue("B{$row}", $c->getNumcaisse() ?? '');
                $sheet->setCellValue("C{$row}", number_format($c->getMontant(), 2, ',', ''));
                $recu += $c->getMontant();
                $row++;
            }

            // total recu (optionnel)
            $sheet->setCellValue("B{$row}", 'TOTAL REÇU');
            $sheet->setCellValue("C{$row}", number_format($recu, 2, ',', ''));
            $sheet->getStyle("B{$row}:C{$row}")->getFont()->setBold(true);
            $row++;
        }

        // --- Totaux finaux (totalht, remise, vtva, totalttc)
        $row++;
        $sheet->setCellValue("E{$row}", 'TOTAL HT');
        $sheet->setCellValue("F{$row}", number_format($th, 2, ',', ''));
        $row++;

        if ($bon->getAarem() === 'oui' && $bon->getType() !== 'none') {
            $sheet->setCellValue("E{$row}", 'REMISE');
            $sheet->setCellValue("F{$row}", number_format($rem, 2, ',', ''));
            $row++;
        }

        $sheet->setCellValue("E{$row}", 'TVA ' . $bon->getTva() . '%');
        $sheet->setCellValue("F{$row}", number_format($vtva, 2, ',', ''));
        $row++;

        $sheet->setCellValue("E{$row}", 'NET A PAYER');
        $sheet->setCellValue("F{$row}", number_format($ttc, 2, ',', ''));
        $sheet->getStyle("E{$row}:F{$row}")->getFont()->setBold(true);

        // --- Mise en forme basique : bordures auto sur la zone utilisée
        $highestColumn = $sheet->getHighestColumn();
        $highestRow = $sheet->getHighestRow();
        $sheet->getStyle("A1:{$highestColumn}{$highestRow}")->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);

        // --- Préparer dossier public / sauvegarder
        $rand = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789'), 0, 8);
        $dir = 'excel/' . $rand;
        $publicDir = $this->getParameter('kernel.project_dir') . '/public/' . $dir;
        if (!is_dir($publicDir)) {
            if (!mkdir($publicDir, 0777, true) && !is_dir($publicDir)) {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', $publicDir));
            }
        }
        $filename = sprintf('bon_%s.xlsx', $bon->getNumbon());
        $filepath = $publicDir . '/' . $filename;

        $writer = new Xlsx($spreadsheet);
        $writer->save($filepath);

        // enregistrer Documents si tu veux la même logique que pdff()
        $docRepo = $this->doctrine->getRepository(Documents::class);
        $document = new Documents();
        $document->setUser($apuser);
        $document->setNumero($bon->getId());
        $document->setDonner($filename);
        $document->setType('bon_excel');
        $document->setEtat('ok');
        $document->setFolde($dir);
        $em->persist($document);
        $em->flush();

        // renvoyer l'url publique
        $url = $request->getSchemeAndHttpHost() . '/' . $dir . '/' . $filename;

        return $this->json([
            'status' => true,
            'file' => $url,
            'path' => $dir . '/' . $filename
        ], 200);
    }
}
