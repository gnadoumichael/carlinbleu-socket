<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\User;
use App\Entity\Corbeille;
use App\Entity\Decompte;
use App\Entity\Relever;
use App\Entity\Devis;
use App\Entity\Client;
use App\Entity\Chantier;
use App\Repository\FactureRepository;

#[ORM\Entity(repositoryClass: FactureRepository::class)]
class Facture
{
    #[Groups(['aprele','pyfacture','pydecompte','pychantiers','pychantier','clireleve','decompte','facture','relevers','clients'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['aprele','pyfacture','pydecompte','pychantiers','pychantier','clireleve','decompte','facture','relevers','clients'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $numfacture;

    #[Groups(['pyfacture','pychantiers','pychantier','clireleve','decompte','facture','relevers','clients'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $type;

    #[Groups(['pyfacture','pydecompte','pychantiers','pychantier','clireleve','decompte','facture','relevers','clients'])]
    #[ORM\Column(type: 'text', nullable: true)]
    private $information;

    #[Groups(['facture', 'pyfacture'])]
    #[ORM\ManyToOne(targetEntity: Chantier::class, inversedBy: 'factures')]
    private $chantier;

    #[Groups(['facture', 'pyfacture'])]
    #[ORM\ManyToOne(targetEntity: Client::class, inversedBy: 'factures')]
    private $client;

    #[Groups(['pyfacture','pychantier','facture','clients'])]
    #[ORM\Column(type: 'text', nullable: true)]
    private $factreference;

    #[Groups(['pyfacture','pychantiers','pychantier','clireleve','facture','clients'])]
    #[ORM\Column(type: 'datetime')]
    #[Assert\NotNull]
    private $date;

    #[Groups(['pyfacture','pychantiers','pydecompte','pychantier','clireleve','facture','clients','relevers'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $etat;

    #[Groups(['pyfacture','pychantiers','pychantier','clireleve','decompte','facture','clients'])]
    #[ORM\Column(type: 'float', nullable: true)]
    private $totalht;

    #[Groups(['pyfacture','pychantiers','pychantier','clireleve','decompte','facture','clients'])]
    #[ORM\Column(type: 'float', length: 255, nullable: true)]
    private $totalttc;

    #[Groups(['decompte','facture','clients'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $remise;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'factures')]
    private $user;

    #[Groups(['pychantier','pyfacture','facture','clients'])]
    #[ORM\OneToOne(inversedBy: 'facture', targetEntity: Devis::class, cascade: ['persist', 'remove'])]
    private $devis;

    #[Groups(['pychantiers','pychantier','clients'])]
    #[ORM\OneToMany(mappedBy: 'facture', targetEntity: Relever::class)]
    private $relever;

    #[Groups(['pyfacture','pychantier','facture'])]
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'dobyfactures')]
    private $dobyuser;

    #[Groups(['pyfacture','pychantiers','pychantier','facture'])]
    #[ORM\ManyToOne(targetEntity: Corbeille::class, inversedBy: 'facture')]
    private $corbeille;

    #[Groups(['pychantier','pyfacture','facture','clients'])]
    #[ORM\OneToOne(inversedBy: 'facture', targetEntity: Decompte::class, cascade: ['persist', 'remove'])]
    private $decompte;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $rang;

    #[Groups(['decompte','facture','clients'])]
    #[ORM\OneToMany(mappedBy: 'facture', targetEntity: Groupe::class)]
    private $groupe;

    #[Groups(['decompte','facture','clients'])]
    #[ORM\OneToMany(mappedBy: 'facture', targetEntity: Ligne::class)]
    #[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
    private $lignes;

    #[Groups(['decompte','facture','clients'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $tva;

    #[Groups(['decompte','facture','clients'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $ptva;

    #[Groups(['decompte','facture','clients','pyfacture'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $vtva;

    #[Groups(['pychantiers','pychantier','pyfacture','facture','clients'])]
    #[ORM\OneToOne(targetEntity: Acompte::class, cascade: ['persist', 'remove'])]
    private $acompte;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $aarem;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $aaref;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private $zone;

    #[Groups(['pyfacture','pychantiers','pydecompte','pychantier','clireleve','facture','clients','relevers'])]
    #[ORM\Column(nullable: true)]
    private ?float $regler = null;

    #[Groups(['pyfacture','pychantiers','pychantier','clireleve','decompte','facture','clients'])]
    #[ORM\Column(nullable: true)]
    private ?float $totalacomptes = null;

    #[Groups(['pyfacture','pychantiers','pychantier','clireleve','decompte','facture','clients'])]
    #[ORM\Column(nullable: true)]
    private ?float $totaldecomptes = null;

    #[Groups(['pyfacture','pychantiers','pychantier','clireleve','decompte','facture','clients'])]
    #[ORM\Column(nullable: true)]
    private ?float $totalretenues = null;


    public function __construct()
    {
        $this->relever = new ArrayCollection();
        $this->groupe = new ArrayCollection();
        $this->lignes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumfacture(): ?string
    {
        return $this->numfacture;
    }

    public function setNumfacture(string $numfacture): self
    {
        $this->numfacture = $numfacture;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

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
     * @return mixed
     */
    public function getFactReference()
    {
        return $this->factreference;
    }

    /**
     * @param mixed $factreference
     */
    public function  setFactReference($factreference): void
    {
        $this->factreference = $factreference;
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

    public function setEtat(?string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getTotalht(): ?float
    {
        return $this->totalht;
    }

    public function setTotalht(?float $totalht): static
    {
        $this->totalht = $totalht;

        return $this;
    }

    public function getTotalttc(): ?float
    {
        return $this->totalttc;
    }

    public function setTotalttc(?float $totalttc): static
    {
        $this->totalttc = $totalttc;

        return $this;
    }

    public function getRemise(): ?string
    {
        return $this->remise;
    }

    public function setRemise(?string $remise): self
    {
        $this->remise = $remise;

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

    public function getDevis(): ?Devis
    {
        return $this->devis;
    }

    public function setDevis(?Devis $devis): self
    {
        $this->devis = $devis;

        return $this;
    }

    public function getDecompte(): ?Decompte
    {
        return $this->decompte;
    }

    public function setDecompte(?Decompte  $decompte): self
    {
        $this->decompte = $decompte;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * @param mixed $information
     */
    public function setInformation($information): void
    {
        $this->information = $information;
    }

    /**
     * @return Collection
     */
    public function getRelever(): Collection
    {
        return $this->relever;
    }

    public function addRelever(Relever $relever): self
    {
        if (!$this->relever->contains($relever)) {
            $this->relever[] = $relever;
            $relever->setFacture($this);
        }

        return $this;
    }

    public function removeRelever(Relever $relever): self
    {
        if ($this->relever->contains($relever)) {
            $this->relever->removeElement($relever);
            // set the owning side to null (unless already changed)
            if ($relever->getFacture() === $this) {
                $relever->setFacture(null);
            }
        }

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

    public function getRang(): ?int
    {
        return $this->rang;
    }

    public function setRang(int $rang): self
    {
        $this->rang = $rang;

        return $this;
    }

    /**
     * @return Collection|Groupe[]
     */
    public function getGroupe(): Collection
    {
        return $this->groupe;
    }

    public function addGroupe(Groupe $groupe): self
    {
        if (!$this->groupe->contains($groupe)) {
            $this->groupe[] = $groupe;
            $groupe->setFacture($this);
        }

        return $this;
    }

    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupe->removeElement($groupe)) {
            // set the owning side to null (unless already changed)
            if ($groupe->getFacture() === $this) {
                $groupe->setFacture(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Ligne[]
     */
    public function getLignes(): Collection
    {
        return $this->lignes;
    }

    public function addLigne(Ligne $ligne): self
    {
        if (!$this->lignes->contains($ligne)) {
            $this->lignes[] = $ligne;
            $ligne->setFacture($this);
        }

        return $this;
    }

    public function removeLigne(Ligne $ligne): self
    {
        if ($this->lignes->removeElement($ligne)) {
            // set the owning side to null (unless already changed)
            if ($ligne->getFacture() === $this) {
                $ligne->setFacture(null);
            }
        }

        return $this;
    }

    public function getTva(): ?string
    {
        return $this->tva;
    }

    public function setTva(?string $tva): self
    {
        $this->tva = $tva;

        return $this;
    }

    public function getPtva(): ?string
    {
        return $this->ptva;
    }

    public function setPtva(?string $ptva): self
    {
        $this->ptva = $ptva;

        return $this;
    }

    public function getVtva(): ?string
    {
        return $this->vtva;
    }

    public function setVtva(?string $vtva): self
    {
        $this->vtva = $vtva;

        return $this;
    }

    public function getAcompte(): ?Acompte
    {
        return $this->acompte;
    }

    public function setAcompte(?Acompte $acompte): self
    {
        $this->acompte = $acompte;

        return $this;
    }

    public function getAarem(): ?string
    {
        return $this->aarem;
    }

    public function setAarem(?string $aarem): self
    {
        $this->aarem = $aarem;

        return $this;
    }

    public function getAaref()
    {
        return $this->aaref;
    }

    public function setAaref($aaref): void
    {
        $this->aaref = $aaref;
    }

    public function getZone(): ?string
    {
        return $this->zone;
    }

    public function setZone(?string $zone): self
    {
        $this->zone = $zone;

        return $this;
    }

    public function getRegler(): ?float
    {
        return $this->regler;
    }

    public function setRegler(?float $regler): static
    {
        $this->regler = $regler;

        return $this;
    }

    public function getTotalacomptes(): ?float
    {
        return $this->totalacomptes;
    }

    public function setTotalacomptes(?float $totalacomptes): static
    {
        $this->totalacomptes = $totalacomptes;

        return $this;
    }

    public function getTotaldecomptes(): ?float
    {
        return $this->totaldecomptes;
    }

    public function setTotaldecomptes(?float $totaldecomptes): static
    {
        $this->totaldecomptes = $totaldecomptes;

        return $this;
    }

    public function getTotalretenues(): ?float
    {
        return $this->totalretenues;
    }

    public function setTotalretenues(?float $totalretenues): static
    {
        $this->totalretenues = $totalretenues;

        return $this;
    }

}
