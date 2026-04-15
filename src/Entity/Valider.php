<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Entity\User;
use App\Entity\Chantier;

#[ORM\Entity(repositoryClass: 'App\Repository\ValiderRepository')]
class Valider
{
    #[Groups(['pychantier','valides','chantierwin'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['pychantier','valides','chantierwin'])]
    #[ORM\Column(type: 'text')]
    private $operation;

    #[Groups(['pychantier','valides','chantierwin'])]
    #[ORM\Column(type: 'float', nullable: true)]
    private $credit;

    #[Groups(['pychantier','valides','chantierwin'])]
    #[ORM\Column(type: 'float', nullable: true)]
    private $debit;

    #[Groups(['pychantier','valides','chantierwin'])]
    #[ORM\Column(type: 'datetime')]
    private $date;

    #[Groups(['pychantier','valides','chantierwin'])]
    #[ORM\Column(type: 'integer', nullable: true)]
    private $type;

    #[Groups(['pychantier','valides','chantierwin'])]
    #[ORM\Column(type: 'integer', nullable: true)]
    private $idlink;

    #[Groups(['pychantier','valides','chantierwin'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $commun;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'validers')]
    private $user;

    #[Groups(['valides'])]
    #[ORM\ManyToOne(targetEntity: Chantier::class, inversedBy: 'validers')]
    private $chantier;

    #[Groups(['pychantier','valides','chantierwin'])]
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'dobyvaliders')]
    private $dobyuser;

    #[Groups(['pychantier','valides','chantierwin'])]
    #[ORM\ManyToOne(inversedBy: 'validers')]
    private ?Caisse $caisse = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $moyen = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOperation(): ?string
    {
        return $this->operation;
    }

    public function setOperation(string $operation): self
    {
        $this->operation = $operation;

        return $this;
    }

    public function getCredit(): ?float 
    {
        return $this->credit;
    }

    public function setCredit(?float $credit): self
    {
        $this->credit = $credit;

        return $this;
    }

    public function getDebit(): ?float
    {
        return $this->debit;
    }


    public function setDebit(?float $debit): self
    {
        $this->debit = $debit;

        return $this;
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

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getIdlink(): ?int
    {
        return $this->idlink;
    }

    public function setIdlink(?int $idlink): self
    {
        $this->idlink = $idlink;

        return $this;
    }

    public function getCommun(): ?string
    {
        return $this->commun;
    }

    public function setCommun(?string $commun): self
    {
        $this->commun = $commun;

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

    public function getChantier(): ?Chantier
    {
        return $this->chantier;
    }

    public function setChantier(?Chantier $chantier): self
    {
        $this->chantier = $chantier;

        return $this;
    }

    public function getDobyuser(): ?User
    {
        return $this->dobyuser;
    }

    public function setDobyuser(?User $dobyuser): self
    {
        $this->dobyuser = $dobyuser;

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

    public function getMoyen(): ?string
    {
        return $this->moyen;
    }

    public function setMoyen(?string $moyen): static
    {
        $this->moyen = $moyen;

        return $this;
    }

}
