<?php

namespace App\Entity;

use App\Repository\DecompteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Facture;
use App\Entity\Ligne;

#[ORM\Entity(repositoryClass: DecompteRepository::class)]
class Decompte
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(['pychantiers','pychantier','pyfacture','pydecompte','decompte','facture','clients'])]
    private $id;

    #[Groups(['pychantiers','pychantier','pyfacture','pydecompte','decompte','facture','clients'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $numdecompte;

    #[Groups(['pychantiers','pychantier','pydecompte','decompte','facture'])]
    #[ORM\Column(type: 'datetime')]
    private $date;

    #[Groups(['pychantiers','pychantier','pyfacture','pydecompte','decompte','facture','clients'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $etat;

    #[Groups(['pychantier','pyfacture','pydecompte','decompte','facture','clients'])]
    #[ORM\ManyToOne(targetEntity: Devis::class, inversedBy: 'decomptes')]
    private $devis;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'decomptes')]
    private $user;

    #[Groups(['pychantiers','pychantier','decompte'])]
    #[ORM\ManyToOne(targetEntity: Corbeille::class, inversedBy: 'decomptes')]
    private $corbeille;

    #[Groups(['pydecompte','decompte'])]
    #[ORM\ManyToOne(targetEntity: Chantier::class, inversedBy: 'decomptes')]
    private $chantier;

    #[Groups(['pychantiers','pydecompte','decompte'])]
    #[ORM\OneToOne(mappedBy: 'decompte', targetEntity: Facture::class, cascade: ['persist', 'remove'])]
    private $facture;

    #[Groups(['pychantier','pydecompte','decompte'])]
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'dobydecompte')]
    private $dobyuser;

    #[Groups('decompte')]
    #[ORM\ManyToOne(targetEntity: Client::class, inversedBy: 'decomptes')]
    private $client;

    #[Groups('decompte')]
    #[ORM\OneToMany(mappedBy: 'decompte', targetEntity: Ligne::class)]
    #[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
    private $lignes;

    #[Groups(['pydecompte','decompte'])]
    #[ORM\OneToMany(mappedBy: 'decompte', targetEntity: Groupe::class)]
    private $groupes;

    #[Groups(['pydecompte','decompte','pyfacture'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $totalht;

    #[Groups(['pychantier','pychantiers','pychantier','pydecompte','decompte','facture','pyfacture'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $avancement;

    #[Groups(['pychantier','pychantiers','pydecompte','decompte','facture','pyfacture',])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $valeur;

    #[Groups(['decompte','facture','pydecompte','pyfacture'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $acompte;

    #[Groups(['decompte','facture','pydecompte','pyfacture',])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $garantie;

    #[Groups(['decompte','facture','pydecompte','pyfacture'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $prorata;

    #[Groups(['decompte','facture'])]
    #[ORM\Column(type: 'integer')]
    private $rang;

    #[Groups(['pychantier','pyfacture','pydecompte','decompte','facture','clients'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $apayer;

    #[Groups(['decompte','facture','pydecompte','pyfacture',])]
    #[ORM\Column(type: 'string', length: 255)]
    private $finition;

    #[Groups(['pychantier','pyfacture','pydecompte','decompte','facture','clients'])]
    #[ORM\Column(type: 'string',length: 255, nullable: true)]
    private $countdecompe;

    #[Groups(['pychantier','pyfacture','pydecompte','decompte','facture','clients'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ttc = null;

    #[Groups(['decompte','facture','clients','pydecompte','pyfacture'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $deduction = null;

    #[Groups(['decompte','facture','pydecompte','pyfacture'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $trc = null;

    public function __construct()
    {
        $this->lignes = new ArrayCollection();
        $this->groupes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumdecompte(): ?string
    {
        return $this->numdecompte;
    }

    public function setNumdecompte(string $numdecompte): self
    {
        $this->numdecompte = $numdecompte;

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

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

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

    public function getChantier(): ?chantier
    {
        return $this->chantier;
    }

    public function setChantier(?chantier $chantier): self
    {
        $this->chantier = $chantier;

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

    public function getDobyuser(): ?User
    {
        return $this->dobyuser;
    }

    public function setDobyuser(?User $dobyuser): self
    {
        $this->dobyuser = $dobyuser;

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

    /**
     * @return Collection
     */
    public function getLignes(): Collection
    {
        return $this->lignes;
    }

    public function addLigne(Ligne $ligne): self
    {
        if (!$this->lignes->contains($ligne)) {
            $this->lignes[] = $ligne;
            $ligne->setDecompte($this);
        }

        return $this;
    }

    public function removeLigne(Ligne $ligne): self
    {
        if ($this->lignes->removeElement($ligne)) {
            // set the owning side to null (unless already changed)
            if ($ligne->getDecompte() === $this) {
                $ligne->setDecompte(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection
     */
    public function getGroupes(): Collection
    {
        return $this->groupes;
    }

    public function addGroupe(Groupe $groupe): self
    {
        if (!$this->groupes->contains($groupe)) {
            $this->groupes[] = $groupe;
            $groupe->setDecompte($this);
        }

        return $this;
    }

    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupes->removeElement($groupe)) {
            // set the owning side to null (unless already changed)
            if ($groupe->getDecompte() === $this) {
                $groupe->setDecompte(null);
            }
        }

        return $this;
    }

    public function getTotalht(): ?string
    {
        return $this->totalht;
    }

    public function setTotalht(string $totalht): self
    {
        $this->totalht = $totalht;

        return $this;
    }

    public function getAvancement(): ?string
    {
        return $this->avancement;
    }

    public function setAvancement(?string $avancement): self
    {
        $this->avancement = $avancement;

        return $this;
    }

    public function getValeur(): ?string
    {
        return $this->valeur;
    }

    public function setValeur(?string $valeur): self
    {
        $this->valeur = $valeur;

        return $this;
    }

    public function getAcompte(): ?string
    {
        return $this->acompte;
    }

    public function setAcompte(?string $acompte): self
    {
        $this->acompte = $acompte;

        return $this;
    }

    public function getGarantie(): ?string
    {
        return $this->garantie;
    }

    public function setGarantie(?string $garantie): self
    {
        $this->garantie = $garantie;

        return $this;
    }

    public function getProrata(): ?string
    {
        return $this->prorata;
    }

    public function setProrata(?string $prorata): self
    {
        $this->prorata = $prorata;

        return $this;
    }

    public function getRang(): ?int
    {
        return $this->rang;
    }

    public function setRang(int $rang): self
    {
        $this->rang = $rang;

        return $this;
    }

    public function getApayer(): ?string
    {
        return $this->apayer;
    }

    public function setApayer(?string $apayer): self
    {
        $this->apayer = $apayer;

        return $this;
    }

    public function getFinition(): ?string
    {
        return $this->finition;
    }

    public function setFinition(string $finition): self
    {
        $this->finition = $finition;

        return $this;
    }

    public function getCountdecompe(): ?string
    {
        return $this->countdecompe;
    }

    public function setCountdecompe(?string $countdecompe): self
    {
        $this->countdecompe = $countdecompe;

        return $this;
    }

    public function getTtc(): ?string
    {
        return $this->ttc;
    }

    public function setTtc(?string $ttc): self
    {
        $this->ttc = $ttc;

        return $this;
    }

    public function getDeduction(): ?string
    {
        return $this->deduction;
    }

    public function setDeduction(?string $deduction): static
    {
        $this->deduction = $deduction;

        return $this;
    }

    public function getTrc(): ?string
    {
        return $this->trc;
    }

    public function setTrc(?string $trc): static
    {
        $this->trc = $trc;

        return $this;
    }
}
