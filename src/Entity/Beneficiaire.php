<?php

namespace App\Entity;

use App\Repository\BeneficiaireRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: BeneficiaireRepository::class)]
class Beneficiaire
{
    #[Groups(['benef','matbenef'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['benef','matbenef'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $noms;

    #[Groups('benef')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $fonction;

    #[Groups('benef')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $contacts;

    #[UniqueEntity(
        fields: ['personnel'],
        message: 'Ce personnel est déjà enregistré comme bénéficiaire.'
    )]
    #[Groups(['benef','matbenef'])]
    #[ORM\ManyToOne(targetEntity: Personnel::class)]
    #[ORM\JoinColumn(nullable: true)]
    private $personnel;

    #[UniqueEntity(
        fields: ['fournisseur'],
        message: 'Ce fournisseur est déjà enregistré comme bénéficiaire.'
    )]
    #[Groups(['benef','matbenef'])]
    #[ORM\ManyToOne(targetEntity: Fournisseur::class)]
    #[ORM\JoinColumn(nullable: true)]
    private $fournisseur;

    #[ORM\OneToMany(
        targetEntity: MaterielBeneficiaire::class,
        mappedBy: 'beneficiaire'
    )]
    private $materielBeneficiaires;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'beneficiaires')]
    private $user;

    #[Groups('benef')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $typebenef;

    public function __construct()
    {
        $this->materielBeneficiaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNoms(): ?string
    {
        return $this->noms;
    }

    public function setNoms(string $noms): self
    {
        $this->noms = $noms;
        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(?string $fonction): self
    {
        $this->fonction = $fonction;
        return $this;
    }

    public function getContacts(): ?string
    {
        return $this->contacts;
    }

    public function setContacts(?string $contacts): self
    {
        $this->contacts = $contacts;
        return $this;
    }

    public function getPersonnel(): ?Personnel
    {
        return $this->personnel;
    }

    public function setPersonnel(?Personnel $personnel): self
    {
        $this->personnel = $personnel;
        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): self
    {
        $this->fournisseur = $fournisseur;
        return $this;
    }

    /**
     * @return Collection|MaterielBeneficiaire[]
     */
    public function getMaterielBeneficiaires(): Collection
    {
        return $this->materielBeneficiaires;
    }

    public function addMaterielBeneficiaire(MaterielBeneficiaire $materielBeneficiaire): self
    {
        if (!$this->materielBeneficiaires->contains($materielBeneficiaire)) {
            $this->materielBeneficiaires->add($materielBeneficiaire);
            $materielBeneficiaire->setBeneficiaire($this);
        }

        return $this;
    }

    public function removeMaterielBeneficiaire(MaterielBeneficiaire $materielBeneficiaire): self
    {
        if ($this->materielBeneficiaires->removeElement($materielBeneficiaire)) {
            if ($materielBeneficiaire->getBeneficiaire() === $this) {
                $materielBeneficiaire->setBeneficiaire(null);
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

    public function getTypeBenef(): ?string
    {
        return $this->typebenef;
    }

    public function setTypeBenef(?string $typeb): self
    {
        $this->typebenef = $typeb;
        return $this;
    }



}
