<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\CaisseRepository;
use App\Entity\Client;
use App\Entity\Chantier;
use App\Entity\User;
use App\Entity\Contact;
use App\Entity\Intervenant;
use App\Entity\Ligne;
use App\Entity\Monnaie;
use App\Entity\Corbeille;

#[ORM\Entity(repositoryClass: CaisseRepository::class)]
class Caisse
{
    #[Groups(['apprestachan','pycaisse','pychantier','devis','pyfournisseurs','interve','caisse','fours','commande','pers','valides'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['apprestachan','pycaisse','pychantier','devis','pyfournisseurs','interve','caisse','fours','commande','pers','valides'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $numcaisse;

    #[Groups(['apprestachan','pycaisse','pychantier','pyfournisseurs','interve','caisse','fours','commande','pers','valides'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $caissereference;

    #[Groups(['apprestachan','pycaisse','pychantier','devis','pyfournisseurs','interve','caisse','fours','commande','pers','valides'])]
    #[ORM\Column(type: 'float', nullable: true)]
    private $montant;

    #[Groups(['apprestachan','pycaisse','pychantier','devis','pyfournisseurs','interve','caisse','fours','commande','pers','valides'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $etat;

    #[Groups(['pycaisse','caisse','valides'])]
    #[ORM\ManyToOne(targetEntity: Client::class, inversedBy: 'caisses')]
    private $client;

    #[Groups(['pycaisse','caisse','pers','valides'])]
    #[ORM\ManyToOne(targetEntity: Chantier::class, inversedBy: 'caisses')]
    private $chantier;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'caisses')]
    private $user;

    #[Groups('caisse')]
    #[ORM\ManyToOne(targetEntity: Contact::class, inversedBy: 'caisses')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private $contact;

    #[Groups('caisse')]
    #[ORM\ManyToOne(targetEntity: Intervenant::class, inversedBy: 'caisses')]
    private $intervenant;

    #[Groups(['apprestachan','pycaisse','pychantier','devis','pyfournisseurs','interve','caisse','fours','commande','pers'])]
    #[ORM\Column(type: 'datetime')]
    private $date;

    #[Groups('caisse')]
    #[ORM\OneToMany(mappedBy: 'caisse', targetEntity: Ligne::class)]
    private $lignes;

    #[Groups(['pychantier','pyfournisseurs','interve','caisse','fours','commande','pers'])]
    #[ORM\Column(type: 'float', nullable: true)]
    private $total;

    #[Groups('caisse')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $marquer;

    #[Groups(['pycaisse','pychantier','pyfournisseurs','interve','caisse','pers'])]
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'dobycaisses')]
    private $dobyuser;

    #[Groups(['pychantier','caisse'])]
    #[ORM\ManyToOne(targetEntity: Monnaie::class, inversedBy: 'caisses')]
    private $monnaie;

    #[Groups(['pycaisse','pychantier','pyfournisseurs','interve','caisse','fours','commande','pers','valides'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $operation;

    #[Groups(['pycaisse','pychantier','pyfournisseurs','interve','caisse','commande','fours','pers','apprestachan'])]
    #[ORM\ManyToOne(targetEntity: Corbeille::class, inversedBy: 'caisse')]
    private $corbeille;

    #[Groups(['pycaisse','caisse'])]
    #[ORM\ManyToOne(targetEntity: Devis::class, inversedBy: 'caisses')]
    private $devis;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $rang;

    #[ORM\ManyToOne(targetEntity: Paie::class, inversedBy: 'caisses')]
    private $paie;

    #[Groups('interve')]
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'vabyusercaisses')]
    private $vabyuser;

    #[Groups(['pycaisse','pychantier','caisse'])]
    #[ORM\ManyToOne(targetEntity: Personnel::class, inversedBy: 'caisses')]
    private $personnel;

    #[Groups(['pycaisse','caisse'])]
    #[ORM\ManyToOne(inversedBy: 'caisses')]
    private ?Bon $bon = null;

    #[Groups(['pycaisse','pychantier','caisse','valides'])]
    #[ORM\ManyToOne(inversedBy: 'caisses')] 
    private ?Fournisseur $fournisseur = null;

    #[Groups(['pycaisse','pychantier','caisse'])]
    #[ORM\Column(nullable: true)]
    private ?int $type = null;

    #[Groups(['pycaisse','pychantier','pyfournisseurs','interve','caisse','fours','commande','pers','valides'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $genre = null;


    #[Groups(['pycaisse','pychantier','caisse','valides'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $moyen;

    #[ORM\OneToOne(mappedBy: 'caisse', cascade: ['persist', 'remove'])]
    private ?Fiche $fiche = null;

    /**
     * @var Collection<int, Journal>
     */
    #[ORM\OneToMany(mappedBy: 'caisse', targetEntity: Journal::class)]
    private Collection $journals;

    /**
     * @var Collection<int, Valider>
     */
    #[ORM\OneToMany(mappedBy: 'caisse', targetEntity: Valider::class)]
    private Collection $validers;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $desi = null;

    public function __construct()
    {
        $this->lignes = new ArrayCollection();
        $this->journals = new ArrayCollection();
        $this->validers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumcaisse(): ?string
    {
        return $this->numcaisse;
    }

    public function setNumcaisse(string $numcaisse): self
    {
        $this->numcaisse = $numcaisse;

        return $this;
    }

    public function getCaisseReference(): ?string
    {
        return $this->caissereference;
    }

    public function setCaisseReference(?string $caissereference): self
    {
        $this->caissereference = $caissereference;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(?float $montant): self
    {
        $this->montant = $montant;

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

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    public function setContact(?Contact $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getIntervenant(): ?Intervenant
    {
        return $this->intervenant;
    }

    public function setIntervenant(?Intervenant $intervenant): self
    {
        $this->intervenant = $intervenant;

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
            $ligne->setCaisse($this);
        }

        return $this;
    }

    public function removeLigne(Ligne $ligne): self
    {
        if ($this->lignes->contains($ligne)) {
            $this->lignes->removeElement($ligne);
            // set the owning side to null (unless already changed)
            if ($ligne->getCaisse() === $this) {
                $ligne->setCaisse(null);
            }
        }

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(?float $total): self
    {
        $this->total = $total;
        return $this;
    }

    public function getMarquer(): ?string
    {
        return $this->marquer;
    }

    public function setMarquer(?string $marquer): self
    {
        $this->marquer = $marquer;

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

    public function getMonnaie(): ?Monnaie
    {
        return $this->monnaie;
    }

    public function setMonnaie(?Monnaie $monnaie): self
    {
        $this->monnaie = $monnaie;

        return $this;
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

    public function getCorbeille(): ?Corbeille
    {
        return $this->corbeille;
    }

    public function setCorbeille(?Corbeille $corbeille): self
    {
        $this->corbeille = $corbeille;

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

    public function getRang(): ?int
    {
        return $this->rang;
    }

    public function setRang(?int $rang): self
    {
        $this->rang = $rang;

        return $this;
    }

    public function getPaie(): ?Paie
    {
        return $this->paie;
    }

    public function setPaie(?Paie $paie): self
    {
        $this->paie = $paie;

        return $this;
    }

    public function getVabyuser(): ?User
    {
        return $this->vabyuser;
    }

    public function setVabyuser(?User $vabyuser): self
    {
        $this->vabyuser = $vabyuser;

        return $this;
    }

    public function getPersonnel(): ?Personnel
    {
        return $this->personnel;
    }

    public function setPersonnel(?Personnel $personnel): self
    {
        $this->personnel = $personnel;

        return $this;
    }

    public function getBon(): ?Bon
    {
        return $this->bon;
    }

    public function setBon(?Bon $bon): static
    {
        $this->bon = $bon;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): static
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(?string $genre): static
    {
        $this->genre = $genre;

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

    public function getFiche(): ?Fiche
    {
        return $this->fiche;
    }

    public function setFiche(?Fiche $fiche): static
    {
        // unset the owning side of the relation if necessary
        if ($fiche === null && $this->fiche !== null) {
            $this->fiche->setCaisse(null);
        }

        // set the owning side of the relation if necessary
        if ($fiche !== null && $fiche->getCaisse() !== $this) {
            $fiche->setCaisse($this);
        }

        $this->fiche = $fiche;

        return $this;
    }

    /**
     * @return Collection<int, Journal>
     */
    public function getJournals(): Collection
    {
        return $this->journals;
    }
    public function addJournal(Journal $journal): static
    {
        if (!$this->journals->contains($journal)) {
            $this->journals->add($journal);
            $journal->setCaisse($this);
        }

        return $this;
    }
    public function removeJournal(Journal $journal): static
    {
        if ($this->journals->removeElement($journal)) {
            // set the owning side to null (unless already changed)
            if ($journal->getCaisse() === $this) {
                $journal->setCaisse(null);
            }
        }

        return $this;
    }

    public function getValider(): ?Valider
    {
        return $this->valider;
    }

    public function setValider(?Valider $valider): static
    {
        $this->valider = $valider;

        return $this;
    }

    /**
     * @return Collection<int, Valider>
     */
    public function getValiders(): Collection
    {
        return $this->validers;
    }

    public function addValider(Valider $valider): static
    {
        if (!$this->validers->contains($valider)) {
            $this->validers->add($valider);
            $valider->setCaisse($this);
        }

        return $this;
    }

    public function removeValider(Valider $valider): static
    {
        if ($this->validers->removeElement($valider)) {
            // set the owning side to null (unless already changed)
            if ($valider->getCaisse() === $this) {
                $valider->setCaisse(null);
            }
        }

        return $this;
    }

    public function getDesi(): ?string
    {
        return $this->desi;
    }

    public function setDesi(?string $desi): static
    {
        $this->desi = $desi;

        return $this;
    }



}
