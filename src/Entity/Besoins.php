<?php

namespace App\Entity;

use App\Repository\BesoinsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: BesoinsRepository::class)]
class Besoins
{
    #[Groups(['besoin','chatbesoin'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Groups(['besoin','chatbesoin'])]
    #[ORM\Column(type: Types::TEXT)]
    private ?string $besoin = null;

    #[ORM\ManyToOne(inversedBy: 'besoins')]
    private ?User $user = null;

    #[Groups(['besoin'])]
    #[ORM\ManyToOne(inversedBy: 'besoins')]
    private ?User $dobyuser = null;

    #[Groups(['besoin'])]
    #[ORM\Column(length: 255)]
    private ?string $etat = null;

    #[Groups(['besoin'])]
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[Groups(['besoin','chatbesoin'])]
    #[ORM\ManyToOne(inversedBy: 'besoins')]
    private ?Chantier $chantier = null;


    #[ORM\OneToMany(mappedBy: 'besoin', targetEntity: ChatBesoin::class)]
    private Collection $chatBesoins;


    #[ORM\OneToMany(mappedBy: 'besoins', targetEntity: Fichier::class)]
    private Collection $fichiers;


    public function __construct()
    {
        $this->chatBesoins = new ArrayCollection();
        $this->fichiers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBesoin(): ?string
    {
        return $this->besoin;
    }

    public function setBesoin(string $besoin): static
    {
        $this->besoin = $besoin;

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

    public function getDobyuser(): ?User
    {
        return $this->dobyuser;
    }

    public function setDobyuser(?User $dobyuser): static
    {
        $this->dobyuser = $dobyuser;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

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

    public function getChantier(): ?Chantier
    {
        return $this->chantier;
    }

    public function setChantier(?Chantier $chantier): static
    {
        $this->chantier = $chantier;

        return $this;
    }

    /**
     * @return Collection<int, ChatBesoin>
     */
    public function getChatBesoins(): Collection
    {
        return $this->chatBesoins;
    }

    public function addChatBesoin(ChatBesoin $chatBesoin): static
    {
        if (!$this->chatBesoins->contains($chatBesoin)) {
            $this->chatBesoins->add($chatBesoin);
            $chatBesoin->setBesoin($this);
        }

        return $this;
    }

    public function removeChatBesoin(ChatBesoin $chatBesoin): static
    {
        if ($this->chatBesoins->removeElement($chatBesoin)) {
            // set the owning side to null (unless already changed)
            if ($chatBesoin->getBesoin() === $this) {
                $chatBesoin->setBesoin(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Fichier>
     */
    public function getFichiers(): Collection
    {
        return $this->fichiers;
    }

    public function addFichier(Fichier $fichier): static
    {
        if (!$this->fichiers->contains($fichier)) {
            $this->fichiers->add($fichier);
            $fichier->setBesoins($this);
        }

        return $this;
    }

    public function removeFichier(Fichier $fichier): static
    {
        if ($this->fichiers->removeElement($fichier)) {
            // set the owning side to null (unless already changed)
            if ($fichier->getBesoins() === $this) {
                $fichier->setBesoins(null);
            }
        }

        return $this;
    }
}
