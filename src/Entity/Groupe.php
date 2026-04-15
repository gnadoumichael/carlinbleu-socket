<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OrderBy;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Ligne;
use App\Repository\GroupeRepository;
use App\Entity\Devis;
use App\Entity\Lien;
use App\Entity\Bon;

#[ORM\Entity(repositoryClass: GroupeRepository::class)]
class Groupe
{
    #[Groups(['pychantier','pydevis','devis','groupes','commande','ligne','facture','decompte','pychantiers'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['pychantier','pydevis','devis','groupes','commande','ligne','facture','decompte','pychantiers'])]
    #[ORM\Column(type: 'text')]
    #[Assert\NotNull]
    private $groupe;

    #[ORM\OneToMany(mappedBy: 'groupe', targetEntity: Ligne::class)]
    #[OrderBy(['reference' => 'ASC'])]
    private $lignes;

    #[Groups(['pychantier','pydevis','devis','groupes','commande','ligne','facture','decompte','pychantiers'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $reference;

    #[ORM\ManyToOne(targetEntity: Devis::class, inversedBy: 'groupe')]
    private $devis;

    #[ORM\ManyToOne(targetEntity: Lien::class, inversedBy: 'groupes')]
    private $lien;

    #[ORM\ManyToOne(targetEntity: Bon::class, inversedBy: 'groupes')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
    private $bon;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $apgroupe;

    #[ORM\ManyToOne(targetEntity: Decompte::class, inversedBy: 'groupes')]
    private $decompte;

    #[ORM\ManyToOne(targetEntity: Facture::class, inversedBy: 'groupe')]
    private $facture;

    public function __construct()
    {
        $this->lignes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGroupe(): ?string
    {
        return $this->groupe;
    }

    public function setGroupe(string $groupe): self
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * @return Collection|Ligne[]
     */
    public function getLignes(): Collection
    {
        return $this->lignes;
    }

    public function addLigne(Ligne $ligne): self
    {
        if (!$this->lignes->contains($ligne)) {
            $this->lignes[] = $ligne;
            $ligne->setGroupe($this);
        }

        return $this;
    }

    public function removeLigne(Ligne $ligne): self
    {
        if ($this->lignes->contains($ligne)) {
            $this->lignes->removeElement($ligne);
            // set the owning side to null (unless already changed)
            if ($ligne->getGroupe() === $this) {
                $ligne->setGroupe(null);
            }
        }

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getDevis(): ?Devis
    {
        return $this->devis;
    }

    public function setDevis(?Devis $devis): self
    {
        $this->devis = $devis;

        return $this;
    }

    public function getLien(): ?Lien
    {
        return $this->lien;
    }

    public function setLien(?Lien $lien): self
    {
        $this->lien = $lien;

        return $this;
    }

    public function getBon(): ?Bon
    {
        return $this->bon;
    }

    public function setBon(?Bon $bon): self
    {
        $this->bon = $bon;

        return $this;
    }

    public function getApgroupe(): ?string
    {
        return $this->apgroupe;
    }

    public function setApgroupe(string $apgroupe): self
    {
        $this->apgroupe = $apgroupe;

        return $this;
    }

    public function getDecompte(): ?Decompte
    {
        return $this->decompte;
    }

    public function setDecompte(?Decompte $decompte): self
    {
        $this->decompte = $decompte;

        return $this;
    }

    public function getFacture(): ?Facture
    {
        return $this->facture;
    }

    public function setFacture(?Facture $facture): self
    {
        $this->facture = $facture;

        return $this;
    }
}
