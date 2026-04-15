<?php

namespace App\Entity;

use App\Repository\MathistoriqueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MatHistoriqueRepository::class)]
class MatHistorique
{
    #[Groups('mathisto')]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups('mathisto')]
    #[ORM\Column(type: 'datetime')]
    private $date;

    #[Groups('mathisto')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $code;

    #[Groups('mathisto')]
    #[ORM\Column(type: 'string', length: 255)]
    private $receveur;

    #[Groups('mathisto')]
    #[ORM\Column(type: 'string', length: 255)]
    private $mouvement;

    #[Groups('mathisto')]
    #[ORM\Column(type: 'string', length: 255)]
    private $quantite;

    #[Groups('mathisto')]
    #[ORM\Column(type: 'string', length: 255)]
    private $materiel;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'matHistoriques')]
    private $user;

    public function __construct()
    {
        $this->materiel = new ArrayCollection();
    }

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

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getReceveur(): ?string
    {
        return $this->receveur;
    }

    public function setReceveur(string $receveur): self
    {
        $this->receveur = $receveur;

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

    public function getQuantite(): ?string
    {
        return $this->quantite;
    }

    public function setQuantite(string $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getMateriel(): ?string
    {
        return $this->materiel;
    }

    public function setMateriel(string $materiel): self
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
}
