<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: 'App\Repository\SectionRepository')]
class Section
{
    #[Groups(['tacher','plans','section', 'chats'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['tacher','plans','section', 'chats'])]
    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    private $libelle;

    #[Groups(['plans','section'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $etat;

    #[Groups(['tacher','section', 'chats'])]
    #[ORM\ManyToOne(targetEntity: 'App\Entity\Planning', inversedBy: 'section')]
    private $planning;

    #[Groups('plans')]
    #[ORM\OneToMany(targetEntity: 'App\Entity\Tache', mappedBy: 'section')]
    private $taches;

    #[Groups('section')]
    #[ORM\ManyToOne(targetEntity: 'App\Entity\Chantier', inversedBy: 'sections')]
    private $chantier;

    #[Groups('plans')]
    #[ORM\ManyToOne(targetEntity: Corbeille::class, inversedBy: 'section')]
    private $corbeille;

    #[Groups('plans')]
    #[ORM\ManyToOne(targetEntity: Prevision::class, inversedBy: 'section')]
    private $prevision;

    #[ORM\OneToMany(targetEntity: Bon::class, mappedBy: 'section')]
    private $bons;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'sections')]
    #[ORM\JoinColumn(nullable: false)]
    private $user;

    #[Groups(['plans','section'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $rang;


    public function __construct()
    {
        $this->taches = new ArrayCollection();
        $this->bons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle): void
    {
        $this->libelle = $libelle;
    }

    public function getPlanning(): ?Planning
    {
        return $this->planning;
    }

    public function setPlanning(?Planning $planning): self
    {
        $this->planning = $planning;

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
            $tach->setSection($this);
        }

        return $this;
    }

    public function removeTach(Tache $tach): self
    {
        if ($this->taches->contains($tach)) {
            $this->taches->removeElement($tach);
            // set the owning side to null (unless already changed)
            if ($tach->getSection() === $this) {
                $tach->setSection(null);
            }
        }

        return $this;
    }

    public function getChantier(): ?Chantier
    {
        return $this->chantier;
    }

    public function setChantier(?Chantier $chantier): self
    {
        $this->chantier = $chantier;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat): void
    {
        $this->etat = $etat;
    }

    public function getCorbeille(): ?Corbeille
    {
        return $this->corbeille;
    }

    public function setCorbeille(?Corbeille $corbeille): self
    {
        $this->corbeille = $corbeille;

        return $this;
    }

    public function getPrevision(): ?Prevision
    {
        return $this->prevision;
    }

    public function setPrevision(?Prevision $prevision): self
    {
        $this->prevision = $prevision;

        return $this;
    }

    /**
     * @return Collection|Bon[]
     */
    public function getBons(): Collection
    {
        return $this->bons;
    }

    public function addBon(Bon $bon): self
    {
        if (!$this->bons->contains($bon)) {
            $this->bons[] = $bon;
            $bon->setSection($this);
        }

        return $this;
    }

    public function removeBon(Bon $bon): self
    {
        if ($this->bons->removeElement($bon)) {
            // set the owning side to null (unless already changed)
            if ($bon->getSection() === $this) {
                $bon->setSection(null);
            }
        }

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

    public function getRang(): ?string
    {
        return $this->rang;
    }

    public function setRang(?string $rang): self
    {
        $this->rang = $rang;

        return $this;
    }
}
