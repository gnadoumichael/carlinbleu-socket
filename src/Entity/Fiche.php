<?php

namespace App\Entity;

use App\Repository\FicheRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FicheRepository::class)]
class Fiche
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $heure = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prix = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $avance = null;

    #[ORM\ManyToOne(inversedBy: 'fiches')]
    private ?Chantier $chantier = null;

    #[ORM\ManyToOne(inversedBy: 'fiches')]
    private ?Journalier $journalier = null;


    #[ORM\ManyToOne(targetEntity: 'App\Entity\User', inversedBy: 'fiches')]
    private $user;

    #[ORM\ManyToOne(inversedBy: 'fiches')]
    private ?Paie $paie = null;

    #[ORM\Column(length: 255)]
    private ?string $unite = null;

    #[ORM\OneToOne(inversedBy: 'fiche', cascade: ['persist', 'remove'])]
    private ?Caisse $caisse = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getHeure(): ?string
    {
        return $this->heure;
    }

    public function setHeure(?string $heure): static
    {
        $this->heure = $heure;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(?string $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getAvance(): ?string
    {
        return $this->avance;
    }

    public function setAvance(?string $avance): static
    {
        $this->avance = $avance;

        return $this;
    }

    public function getChantier(): ?Chantier
    {
        return $this->chantier;
    }

    public function setChantier(?Chantier $chantier): static
    {
        $this->chantier = $chantier;

        return $this;
    }

    public function getJournalier(): ?Journalier
    {
        return $this->journalier;
    }

    public function setJournalier(?Journalier $journalier): static
    {
        $this->journalier = $journalier;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getPaie(): ?Paie
    {
        return $this->paie;
    }

    public function setPaie(?Paie $paie): static
    {
        $this->paie = $paie;

        return $this;
    }

    public function getUnite(): ?string
    {
        return $this->unite;
    }

    public function setUnite(string $unite): static
    {
        $this->unite = $unite;

        return $this;
    }

    public function getCaisse(): ?Caisse
    {
        return $this->caisse;
    }

    public function setCaisse(?Caisse $caisse): static
    {
        $this->caisse = $caisse;

        return $this;
    }

}
