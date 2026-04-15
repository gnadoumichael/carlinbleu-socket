<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: 'App\Repository\MetierRepository')]
class Metier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\Column(type: 'text', nullable: true)]
    private $description;

    #[ORM\OneToMany(targetEntity: 'App\Entity\Domaine', mappedBy: 'metier')]
    private $domaines;

    #[ORM\OneToMany(targetEntity: 'App\Entity\Partager', mappedBy: 'metier')]
    private $partagers;





    public function __construct()
    {
        $this->domaines = new ArrayCollection();
        $this->partagers = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Domaine[]
     */
    public function getDomaines(): Collection
    {
        return $this->domaines;
    }

    public function addDomaine(Domaine $domaine): self
    {
        if (!$this->domaines->contains($domaine)) {
            $this->domaines[] = $domaine;
            $domaine->setMetier($this);
        }

        return $this;
    }

    public function removeDomaine(Domaine $domaine): self
    {
        if ($this->domaines->contains($domaine)) {
            $this->domaines->removeElement($domaine);
            // set the owning side to null (unless already changed)
            if ($domaine->getMetier() === $this) {
                $domaine->setMetier(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Partager[]
     */
    public function getPartagers(): Collection
    {
        return $this->partagers;
    }

    public function addPartager(Partager $partager): self
    {
        if (!$this->partagers->contains($partager)) {
            $this->partagers[] = $partager;
            $partager->setMetier($this);
        }

        return $this;
    }

    public function removePartager(Partager $partager): self
    {
        if ($this->partagers->contains($partager)) {
            $this->partagers->removeElement($partager);
            // set the owning side to null (unless already changed)
            if ($partager->getMetier() === $this) {
                $partager->setMetier(null);
            }
        }

        return $this;
    }

}
