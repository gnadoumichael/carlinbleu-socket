<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: 'App\Repository\DocumentsRepository')]
class Documents
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(['documents'])]
    private $id;

    #[Groups(['documents'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $type;

    #[ORM\Column(type: 'string', length: 255)]
    private $folde;


    #[ORM\Column(type: 'string', length: 255)]
    private $numero;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\User', inversedBy: 'documents')]
    private $user;

    #[ORM\Column(type: 'string', length: 255)]
    private $etat;

    #[ORM\Column(type: 'string', length: 255)]
    private $donner;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\Message', inversedBy: 'documents')]
    private $message;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

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

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getDonner(): ?string
    {
        return $this->donner;
    }

    public function setDonner(string $donner): self
    {
        $this->donner = $donner;

        return $this;
    }


    public function getMessage(): ?Message
    {
        return $this->message;
    }

    public function setMessage(?Message $message): self
    {
        $this->message = $message;

        return $this;
    }


    public function getFolde(): ?string
    {
        return $this->folde;
    }


    public function setFolde($folde): self
    {
        $this->folde = $folde;
        return $this;
    }

}
