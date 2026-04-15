<?php

namespace App\Entity;

use App\Repository\AcompteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: AcompteRepository::class)]
class Acompte
{
    #[Groups(['pychantiers','pychantier','pyfacture','facture','clients','acomptes','pydevis'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['pychantiers','pychantier','pyfacture','facture','clients','acomptes'])]
    #[ORM\ManyToOne(targetEntity: Devis::class, inversedBy: 'acomptes')]
    private $devis;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'acomptes')]
    private $user;

    #[Groups(['pychantiers','pychantier','pyfacture','facture','clients','acomptes','pydevis'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pourcentage = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getPourcentage(): ?string
    {
        return $this->pourcentage;
    }

    public function setPourcentage(?string $pourcentage): self
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }
}
