<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Facture;
use App\Entity\Devis;
use App\Entity\Client;
use App\Entity\Chantier;
use App\Repository\ReleverRepository;

#[ORM\Entity(repositoryClass: ReleverRepository::class)]
class Relever
{
    #[Groups(['aprele','chantierwin','pychantiers','pychantier','clients','chantiers', 'relevers', 'devis','clireleve','pydevis'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['aprele','chantierwin','pychantiers','pychantier','clients','chantiers', 'relevers', 'devis','clireleve','pydevis'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $versement;

    #[Groups(['aprele','chantierwin','pychantiers','pychantier','clients','chantiers', 'relevers', 'devis','clireleve','pydevis'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\NotNull]
    private $montant;

    #[Groups(['aprele','chantierwin','pychantiers','pychantier','clients','chantiers','relevers', 'devis','clireleve','pydevis'])]
    #[ORM\Column(type: 'datetime')]
    private $date;

    #[Groups(['aprele','chantierwin','pychantiers','pychantier','clients','chantiers', 'relevers', 'devis','clireleve','pydevis'])]
    #[ORM\Column(type: 'integer', nullable: true)]
    private $type;

    #[Groups(['aprele','chantierwin','clients','chantiers','relevers', 'devis','clireleve'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $commun;

    #[Groups(['relevers'])]
    #[ORM\ManyToOne(targetEntity: Chantier::class, inversedBy: 'releves')]
    private $chantier;

    #[Groups(['relevers'])]
    #[ORM\ManyToOne(targetEntity: Client::class, inversedBy: 'releves')]
    private $client;

    #[Groups(['clients','chantiers','relevers'])]
    #[ORM\ManyToOne(targetEntity: Devis::class, inversedBy: 'relevers')]
    private $devis;

    #[Groups(['aprele','clients','chantiers','relevers'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $moyen;

    #[Groups(['aprele','chantiers', 'devis','clireleve','relevers'])]
    #[ORM\ManyToOne(targetEntity: Facture::class, inversedBy: 'relever')]
    private $facture;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVersement(): ?string
    {
        return $this->versement;
    }

    public function setVersement(?string $versement): self
    {
        $this->versement = $versement;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(?string $montant): self
    {
        $this->montant = $montant;

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

    public function getCommun(): ?string
    {
        return $this->commun;
    }

    public function setCommun(?string $commun): self
    {
        $this->commun = $commun;
        return $this;
    }

    public function getChantiers(): ?Chantier
    {
        return $this->chantier;
    }

    public function setChantier(?Chantier $chantier): self
    {
        $this->chantier = $chantier;
        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;
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

    public function getMoyen(): ?string
    {
        return $this->moyen;
    }

    public function setMoyen(?string $moyen): self
    {
        $this->moyen = $moyen;

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

    public function getChantier(): ?Chantier
    {
        return $this->chantier;
    }

}
