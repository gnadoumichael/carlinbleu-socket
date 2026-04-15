<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: 'App\Repository\MessageRepository')]
class Message
{
    #[Groups(['tacher','messages'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['tacher','messages'])]
    #[ORM\Column(type: 'text')]
    private $objet;

    #[Groups(['tacher','messages'])]
    #[ORM\Column(type: 'datetime')]
    private $date;

    #[Groups('messages')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $secret;

    #[Groups(['tacher','messages'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $receiver;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $copies;

    #[Groups(['tacher','messages'])]
    #[ORM\ManyToOne(targetEntity: 'App\Entity\User', inversedBy: 'sendermessages')]
    private $sender;

    #[ORM\ManyToOne(targetEntity: 'App\Entity\User', inversedBy: 'messages')]
    private $user;

    #[Groups(['tacher','messages'])]
    #[ORM\Column(type: 'text', nullable: true)]
    private $contenu;

    #[ORM\OneToMany(targetEntity: 'App\Entity\Documents', mappedBy: 'message')]
    private $documents;

    #[Groups('messages')]
    #[ORM\ManyToOne(targetEntity: Tache::class, inversedBy: 'messages')]
    private $tache;

    public function __construct()
    {
        $this->documents = new ArrayCollection();
    }

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): self
    {
        $this->objet = $objet;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }


    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(?string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }


    /**
     * Get the value of receiver
     */ 
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Set the value of receiver
     *
     * @return  self
     */ 
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get the value of copies
     */ 
    public function getCopies()
    {
        return $this->copies;
    }

    /**
     * Set the value of copies
     *
     * @return  self
     */ 
    public function setCopies($copies)
    {
        $this->copies = $copies;

        return $this;
    }

    /**
     * @return Collection|Documents[]
     */
    public function getDocuments(): Collection
    {
        return $this->documents;
    }

    public function addDocument(Documents $document): self
    {
        if (!$this->documents->contains($document)) {
            $this->documents[] = $document;
            $document->setMessage($this);
        }

        return $this;
    }

    public function removeDocument(Documents $document): self
    {
        if ($this->documents->contains($document)) {
            $this->documents->removeElement($document);
            // set the owning side to null (unless already changed)
            if ($document->getMessage() === $this) {
                $document->setMessage(null);
            }
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @param mixed $secret
     */
    public function setSecret($secret): void
    {
        $this->secret = $secret;
    }

    public function getTache(): ?Tache
    {
        return $this->tache;
    }

    public function setTache(?Tache $tache): self
    {
        $this->tache = $tache;

        return $this;
    }

    public function getSender(): ?User
    {
        return $this->sender;
    }

    public function setSender(?User $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

}
