<?php

namespace App\Entity;

use App\Repository\ChatBesoinRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ChatBesoinRepository::class)]
class ChatBesoin
{
    #[Groups(['chatbesoin'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Groups(['chatbesoin'])]
    #[ORM\Column(type: Types::TEXT)]
    private ?string $message = null;

    #[ORM\ManyToOne(inversedBy: 'chatBesoins')]
    private ?User $user = null;

    #[Groups(['chatbesoin'])]
    #[ORM\ManyToOne(inversedBy: 'chatSenderBesoins')]
    private ?User $sender = null;

    #[Groups(['chatbesoin'])]
    #[ORM\ManyToOne(inversedBy: 'chatBesoins')]
    private ?Besoins $besoin = null;

    #[Groups(['chatbesoin'])]
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getSender(): ?User
    {
        return $this->sender;
    }

    public function setSender(?User $sender): static
    {
        $this->sender = $sender;

        return $this;
    }

    public function getBesoin(): ?Besoins
    {
        return $this->besoin;
    }

    public function setBesoin(?Besoins $besoin): static
    {
        $this->besoin = $besoin;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

}
