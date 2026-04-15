<?php

namespace App\Entity;

use App\Repository\MaterielBeneficiaireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MaterielbeneficiaireRepository::class)]
class MaterielBeneficiaire
{
    #[Groups(['materiels','matbenef'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['materiels','matbenef'])]
    #[ORM\Column(type: 'datetime')]
    private $date;

    #[Groups(['materiels','matbenef'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $mouvement;

    #[Groups('matbenef')]
    #[ORM\ManyToOne(targetEntity: Materiel::class, inversedBy: 'materielBeneficiaires')]
    private $materiel;

    #[Groups('matbenef')]
    #[ORM\ManyToOne(targetEntity: Beneficiaire::class, inversedBy: 'materielBeneficiaires')]
    private $beneficiaire;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'materielBeneficiaires')]
    private $user;

    #[Groups(['materiels','matbenef'])]
    #[ORM\Column(type: 'integer')]
    private $quantite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getMouvement(): ?string
    {
        return $this->mouvement;
    }

    public function setMouvement(string $mouvement): self
    {
        $this->mouvement = $mouvement;

        return $this;
    }

    public function getMateriel(): ?Materiel
    {
        return $this->materiel;
    }

    public function setMateriel(?Materiel $materiel): self
    {
        $this->materiel = $materiel;

        return $this;
    }

    public function getBeneficiaire(): ?Beneficiaire
    {
        return $this->beneficiaire;
    }

    public function setBeneficiaire(?Beneficiaire $beneficiaire): self
    {
        $this->beneficiaire = $beneficiaire;
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

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

}
