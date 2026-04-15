<?php

namespace App\Entity;

use App\Repository\MaterielChantierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: MaterielChantierRepository::class)]
class MaterielChantier
{
    #[Groups(['materiels','matchan'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['materiels','matchan'])]
    #[ORM\Column(type: 'datetime')]
    private $date;

    #[Groups(['materiels','matchan'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $mouvement;

    #[Groups(['materiels','matchan'])]
    #[ORM\ManyToOne(targetEntity: Chantier::class, inversedBy: 'materielChantiers')]
    private $chantier;

    #[Groups('matchan')]
    #[ORM\ManyToOne(targetEntity: Materiel::class, inversedBy: 'materielChantiers')]
    private $materiel;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'materielChantiers')]
    private $user;

    #[Groups(['materiels','matchan'])]
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

    public function getChantier(): ?Chantier
    {
        return $this->chantier;
    }

    public function setChantier(?Chantier $chantier): self
    {
        $this->chantier = $chantier;

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
