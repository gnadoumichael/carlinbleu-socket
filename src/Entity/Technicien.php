<?php

namespace App\Entity;

use App\Repository\TechnicienRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TechnicienRepository::class)]
class Technicien
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $profession;

    #[ORM\ManyToMany(targetEntity: Chantier::class, inversedBy: 'techniciens')]
    private $chantier;

    #[ORM\OneToMany(targetEntity: Caisse::class, mappedBy: 'technicien')]
    private $caisse;

    #[ORM\ManyToMany(targetEntity: Tache::class, inversedBy: 'techniciens')]
    private $tache;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'techniciens')]
    private $user;

    public function __construct()
    {
        $this->chantier= new ArrayCollection();
        $this->caisse = new ArrayCollection();
        $this->tache = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(?string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * @return Collection|Chantier[]
     */
    public function getChantier(): Collection
    {
        return $this->chantier;
    }

    public function addChantiers(Chantier $chantier): self
    {
        if (!$this->chantier->contains($chantier)) {
            $this->chantier[] = $chantier;
        }

        return $this;
    }

    public function removeChantier(Chantier $chantier): self
    {
        $this->chantier->removeElement($chantier);

        return $this;
    }

    /**
     * @return Collection|Caisse[]
     */
    public function getCaisse(): Collection
    {
        return $this->caisse;
    }

    public function addCaisse(Caisse $caisse): self
    {
        if (!$this->caisse->contains($caisse)) {
            $this->caisse[] = $caisse;
            $caisse->setTechnicien($this);
        }

        return $this;
    }

    public function removeCaisse(Caisse $caisse): self
    {
        if ($this->caisse->removeElement($caisse)) {
            // set the owning side to null (unless already changed)
            if ($caisse->getTechnicien() === $this) {
                $caisse->setTechnicien(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Tache[]
     */
    public function getTache(): Collection
    {
        return $this->tache;
    }

    public function addTache(Tache $tache): self
    {
        if (!$this->tache->contains($tache)) {
            $this->tache[] = $tache;
        }

        return $this;
    }

    public function removeTache(Tache $tache): self
    {
        $this->tache->removeElement($tache);

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

    public function addChantier(Chantier $chantier): self
    {
        if (!$this->chantier->contains($chantier)) {
            $this->chantier->add($chantier);
        }

        return $this;
    }
}
