<?php

namespace App\Entity;

use App\Repository\EquipeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EquipeRepository::class)]
class Equipe
{
    #[Groups(['plans','tacher','equipes'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['plans','tacher','equipes'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $designation;

    #[Groups(['equipes'])]
    #[ORM\ManyToOne(targetEntity: Personnel::class, inversedBy: 'chefequipes')]
    private $chef;

    #[Groups(['equipes'])]
    #[ORM\ManyToMany(targetEntity: Chantier::class, inversedBy: 'chantierequipes')]
    private $chantier;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'userequipes')]
    private $user;

    #[Groups(['equipes'])]
    #[ORM\OneToMany(targetEntity: Personnel::class, mappedBy: 'equipe')]
    private $personnels;

    #[Groups(['equipes'])]
    #[ORM\ManyToMany(targetEntity: Tache::class, inversedBy: 'equipes')]
    private $taches;

    #[Pure] public function __construct()
    {
        $this->chantier = new ArrayCollection();
        $this->personnels = new ArrayCollection();
        $this->taches = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getChef(): ?Personnel
    {
        return $this->chef;
    }

    public function setChef(?Personnel $chef): self
    {
        $this->chef = $chef;

        return $this;
    }

    /**
     * @return Collection|Chantier[]
     */
    public function getChantier(): Collection
    {
        return $this->chantier;
    }

    public function addChantier(Chantier $chantier): self
    {
        if (!$this->chantier->contains($chantier)) {
            $this->chantier[] = $chantier;
        }

        return $this;
    }

    public function removeChantier(Chantier $chantier): self
    {
        $this->Chantier->removeElement($chantier);

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

    /**
     * @return Collection|Personnel[]
     */
    public function getPersonnels(): Collection
    {
        return $this->personnels;
    }

    public function addPersonnel(Personnel $personnel): self
    {
        if (!$this->personnels->contains($personnel)) {
            $this->personnels[] = $personnel;
            $personnel->setEquipe($this);
        }

        return $this;
    }

    public function removePersonnel(Personnel $personnel): self
    {
        if ($this->personnels->removeElement($personnel)) {
            // set the owning side to null (unless already changed)
            if ($personnel->getEquipe() === $this) {
                $personnel->setEquipe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Tache[]
     */
    public function getTaches(): Collection
    {
        return $this->taches;
    }

    public function addTach(Tache $tach): self
    {
        if (!$this->taches->contains($tach)) {
            $this->taches[] = $tach;
        }

        return $this;
    }

    public function removeTach(Tache $tach): self
    {
        $this->taches->removeElement($tach);

        return $this;
    }
}
