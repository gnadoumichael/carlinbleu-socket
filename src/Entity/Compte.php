<?php

namespace App\Entity;

use App\Repository\CompteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompteRepository::class)]
class Compte
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $sigle = null;

    #[ORM\Column(length: 255)]
    private ?string $sepadecimal = null;

    #[ORM\Column]
    private ?int $nbrechiffre = null;

    #[ORM\Column(length: 255)]
    private ?string $coclient = null;

    #[ORM\Column(length: 255)]
    private ?string $sepamille = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?User $user = null;

    #[ORM\Column(length: 255)]
    private ?string $compteDevis = null;

    #[ORM\Column(length: 255)]
    private ?string $compteBonFournisseur = null;

    #[ORM\Column(length: 255)]
    private ?string $compteBonSuivi = null;

    #[ORM\Column(length: 255)]
    private ?string $compteBonPrestataire = null;

    #[ORM\Column(length: 255)]
    private ?string $compteCaisse = null;

    #[ORM\Column(length: 255)]
    private ?string $compteFournisseur = null;

    #[ORM\Column(length: 255)]
    private ?string $comptePrestataire = null;

    #[ORM\Column(length: 255)]
    private ?string $compteDecompte = null;

    #[ORM\Column(length: 255)]
    private ?string $compteReglement = null;

    #[ORM\Column(length: 255)]
    private ?string $compteMateriel = null;

    #[ORM\Column(length: 255)]
    private ?string $compteFichier = null;

    #[ORM\Column(length: 255)]
    private ?string $compteFacture = null;

    #[ORM\Column(length: 255)]
    private ?string $comptePlanning = null;

    #[ORM\Column(length: 255)]
    private ?string $compteTache = null;

    #[ORM\Column(length: 255)]
    private ?string $compteLivraison = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSigle(): ?string
    {
        return $this->sigle;
    }

    public function setSigle(string $sigle): static
    {
        $this->sigle = $sigle;
        return $this;
    }

    public function getNbreChiffre(): ?int
    {
        return $this->nbrechiffre;
    }

    public function setNbreChiffre(int $nbrechiffre): static
    {
        $this->nbrechiffre = $nbrechiffre;
        return $this;
    }

    public function getCoClient(): ?string
    {
        return $this->coclient;
    }

    public function setCoClient(string $coclient): static
    {
        $this->coclient = $coclient;
        return $this;
    }

    public function getSepaMille(): ?string
    {
        return $this->sepamille;
    }

    public function setSepaMille(string $sepamille): static
    {
        $this->sepamille = $sepamille;
        return $this;
    }

    public function getSepaDecimal(): ?string
    {
        return $this->sepadecimal;
    }

    public function setSepaDecimal(string $sepadecimal): static
    {
        $this->sepadecimal = $sepadecimal;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;
        return $this;
    }

    public function getCompteDevis(): ?string
    {
        return $this->compteDevis;
    }

    public function setCompteDevis(string $compteDevis): static
    {
        $this->compteDevis = $compteDevis;
        return $this;
    }

    public function getCompteBonFournisseur(): ?string
    {
        return $this->compteBonFournisseur;
    }

    public function setCompteBonFournisseur(string $compteBonFournisseur): static
    {
        $this->compteBonFournisseur = $compteBonFournisseur;
        return $this;
    }

    public function getCompteBonSuivi(): ?string
    {
        return $this->compteBonSuivi;
    }

    public function setCompteBonSuivi(string $compteBonSuivi): static
    {
        $this->compteBonSuivi = $compteBonSuivi;
        return $this;
    }


    public function getCompteBonPrestataire(): ?string
    {
        return $this->compteBonPrestataire;
    }

    public function setCompteBonPrestataire(string $compteBonPrestataire): static
    {
        $this->compteBonPrestataire = $compteBonPrestataire;
        return $this;
    }

    public function getCompteCaisse(): ?string
    {
        return $this->compteCaisse;
    }

    public function setCompteCaisse(string $compteCaisse): static
    {
        $this->compteCaisse = $compteCaisse;
        return $this;
    }

    public function getCompteFournisseur(): ?string
    {
        return $this->compteFournisseur;
    }

    public function setCompteFournisseur(string $compteFournisseur): static
    {
        $this->compteFournisseur = $compteFournisseur;
        return $this;
    }

    public function getComptePrestataire(): ?string
    {
        return $this->comptePrestataire;
    }

    public function setComptePrestataire(string $comptePrestataire): static
    {
        $this->comptePrestataire = $comptePrestataire;
        return $this;
    }

    public function getCompteDecompte(): ?string
    {
        return $this->compteDecompte;
    }
    public function setCompteDecompte(string $compteDecompte): static
    {
        $this->compteDecompte = $compteDecompte;
        return $this;
    }

    public function getCompteReglement(): ?string
    {
        return $this->compteReglement;
    }
    public function setCompteReglement(string $compteReglement): static
    {
        $this->compteReglement = $compteReglement;
        return $this;
    }

    public function getCompteMateriel(): ?string
    {
        return $this->compteMateriel;
    }
    public function setCompteMateriel(string $compteMateriel): static
    {
        $this->compteMateriel = $compteMateriel;
        return $this;
    }

    public function getCompteFichier(): ?string
    {
        return $this->compteFichier;
    }
    public function setCompteFichier(string $compteFichier): static
    {
        $this->compteFichier = $compteFichier;
        return $this;
    }

    public function getCompteFacture(): ?string
    {
        return $this->compteFacture;
    }

    public function setCompteFacture(string $compteFacture): static
    {
        $this->compteFacture = $compteFacture;

        return $this;
    }

    public function getComptePlanning(): ?string
    {
        return $this->comptePlanning;
    }

    public function setComptePlanning(string $comptePlanning): static
    {
        $this->comptePlanning = $comptePlanning;

        return $this;
    }

    public function getCompteTache(): ?string
    {
        return $this->compteTache;
    }

    public function setCompteTache(string $compteTache): static
    {
        $this->compteTache = $compteTache;

        return $this;
    }

    public function getCompteLivraison(): ?string
    {
        return $this->compteLivraison;
    }
    public function setCompteLivraison(string $compteLivraison): static
    {
        $this->compteLivraison = $compteLivraison;

        return $this;
    }
    


}
