<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Client;
use App\Entity\User;
use App\Entity\Bon;
use App\Entity\Devis;
use App\Entity\Caisse;

#[ORM\Entity(repositoryClass: 'App\Repository\ContactRepository')]
class Contact
{
    #[Groups(['pychantiers','commande','contact','caisse','devis','clients'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['pychantiers','commande','contact','caisse','devis','clients'])]
    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotNull]
    private $contact;

    #[ORM\ManyToOne(targetEntity: Client::class, inversedBy: 'contacts')]
    #[ORM\JoinColumn(nullable: false)]
    private $client;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'contacts')]
    #[ORM\JoinColumn(nullable: false)]
    private $user;

    #[ORM\OneToMany(mappedBy: 'contact', targetEntity: Devis::class)]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private $devis;

    #[ORM\OneToMany(mappedBy: 'contact', targetEntity: Bon::class)]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private $bons;

    #[ORM\OneToMany(mappedBy: 'contact', targetEntity: Caisse::class)]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private $caisses;

    #[Groups(['pychantiers','commande','contact','caisse','devis','clients'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $fonction;

    #[Groups(['pychantiers','commande','contact','caisse','devis','clients'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $mail;

    #[Groups(['pychantiers','commande','contact','caisse','devis','clients'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $phone;

    #[Groups(['pychantiers','commande','contact','caisse','devis','clients'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $bureau;

    #[Groups(['commande','contact','caisse','devis','clients'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $adresse;

    #[Groups(['pychantiers','clients'])]
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'dobycontacts')]
    private $dobyuser;

    #[Groups(['pychantiers','clients'])]
    #[ORM\ManyToOne(targetEntity: Corbeille::class, inversedBy: 'contacts')]
    private $corbeille;


    public function __construct()
    {
        $this->devis = new ArrayCollection();
        $this->bons = new ArrayCollection();
        $this->caisses = new ArrayCollection();
        $this->livraisons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(string $contact): self
    {
        $this->contact = $contact;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|Devis[]
     */
    public function getDevis(): Collection
    {
        return $this->devis;
    }

    public function addDevi(Devis $devi): self
    {
        if (!$this->devis->contains($devi)) {
            $this->devis[] = $devi;
            $devi->setContact($this);
        }

        return $this;
    }

    public function removeDevi(Devis $devi): self
    {
        if ($this->devis->contains($devi)) {
            $this->devis->removeElement($devi);
            // set the owning side to null (unless already changed)
            if ($devi->getContact() === $this) {
                $devi->setContact(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Bon[]
     */
    public function getBons(): Collection
    {
        return $this->bons;
    }

    public function addBon(Bon $bon): self
    {
        if (!$this->bons->contains($bon)) {
            $this->bons[] = $bon;
            $bon->setContact($this);
        }

        return $this;
    }

    public function removeBon(Bon $bon): self
    {
        if ($this->bons->contains($bon)) {
            $this->bons->removeElement($bon);
            // set the owning side to null (unless already changed)
            if ($bon->getContact() === $this) {
                $bon->setContact(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Caisse[]
     */
    public function getCaisses(): Collection
    {
        return $this->caisses;
    }

    public function addCaiss(Caisse $caiss): self
    {
        if (!$this->caisses->contains($caiss)) {
            $this->caisses[] = $caiss;
            $caiss->setContact($this);
        }

        return $this;
    }

    public function removeCaiss(Caisse $caiss): self
    {
        if ($this->caisses->contains($caiss)) {
            $this->caisses->removeElement($caiss);
            // set the owning side to null (unless already changed)
            if ($caiss->getContact() === $this) {
                $caiss->setContact(null);
            }
        }

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(?string $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getBureau(): ?string
    {
        return $this->bureau;
    }

    public function setBureau(?string $bureau): self
    {
        $this->bureau = $bureau;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

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

    public function getCorbeille(): ?Corbeille
    {
        return $this->corbeille;
    }

    public function setCorbeille(?Corbeille $corbeille): self
    {
        $this->corbeille = $corbeille;

        return $this;
    }

}
