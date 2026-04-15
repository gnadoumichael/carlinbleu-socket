<?php

namespace App\Entity;

use App\Repository\PersonnelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Livraison;

#[ORM\Entity(repositoryClass: PersonnelRepository::class)]
class Personnel
{
    #[Groups(['benef','pycaisse','pers','clients','tacher','plans', 'equipes','chantiers', 'caisse','ppstart'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups(['benef','pycaisse','pers','clients','tacher','plans', 'equipes','chantiers', 'caisse','ppstart'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $noms;

    #[Groups(['pers','tacher','chantiers', 'caisse'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $fonction;

    #[Groups('pers')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $contrat;

    #[Groups(['pers','ppstart'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $mail;

    #[Groups(['pers','chantiers','ppstart'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $contact;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'personnels')]
    private $user;

    #[ORM\ManyToMany(targetEntity: Chantier::class, inversedBy: 'superviseurs')]
    private $superviser;

    #[Groups(['pers', 'caisse'])]
    #[ORM\ManyToOne(targetEntity: Corbeille::class, inversedBy: 'personnels')]
    private $corbeille;

    #[ORM\ManyToMany(targetEntity: Tache::class, mappedBy: 'personnel')]
    private $taches;

    #[Groups('pers')]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $salaire;

    #[Groups(['pers'])]
    #[ORM\OneToMany(mappedBy: 'personnel', targetEntity: Caisse::class)]
    private $caisses;

    #[Groups(['pers'])]
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'dobypersonnels')]
    private $dobyuser;

    #[Groups(['pers','clients','tacher','plans', 'equipes','chantiers', 'caisse'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $type;

    #[ORM\OneToMany(mappedBy: 'chef', targetEntity: Equipe::class)]
    private $chefequipes;

    #[ORM\OneToMany(mappedBy: 'personnel', targetEntity: Livraison::class)]
    private $livraisons;

    #[ORM\ManyToOne(targetEntity: Equipe::class, inversedBy: 'personnels')]
    private $equipe;

    #[Groups('pers')]
    #[ORM\ManyToOne(targetEntity: Service::class, inversedBy: 'personnel')]
    private $service;

    #[Groups(['pers','tacher','plans'])]
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $prenoms;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $photo;

    /**
     * @var Collection<int, Devis>
     */
    #[ORM\OneToMany(mappedBy: 'suivie', targetEntity: Devis::class)]
    private Collection $devis;

    #[ORM\OneToMany(mappedBy: 'personnel', targetEntity: Beneficiaire::class)]
    private $beneficiaires;


    public function __construct()
    {
        $this->superviser = new ArrayCollection();
        $this->taches = new ArrayCollection();
        $this->caisses = new ArrayCollection();
        $this->superviseurequipes = new ArrayCollection();
        $this->chefequipes = new ArrayCollection();
        $this->livraisons = new ArrayCollection();
        $this->devis = new ArrayCollection();
        $this->beneficiaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNoms()
    {
        return $this->noms;
    }

    public function setNoms(string $noms): self
    {
        $this->noms = $noms;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(string $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    public function getContrat(): ?string
    {
        return $this->contrat;
    }

    public function setContrat(string $contrat): self
    {
        $this->contrat = $contrat;

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

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(?string $contact): self
    {
        $this->contact = $contact;

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
     * @return Collection
     */
    public function getSuperviser(): Collection
    {
        return $this->superviser;
    }

    public function addSuperviser(Chantier $superviser): self
    {
        if (!$this->superviser->contains($superviser)) {
            $this->superviser[] = $superviser;
        }

        return $this;
    }

    public function removeSuperviser(Chantier $superviser): self
    {
        if ($this->superviser->contains($superviser)) {
            $this->superviser->removeElement($superviser);
        }

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

    /**
     * @return Collection|Tache[]
     */
    public function getTaches(): Collection
    {
        return $this->taches;
    }

    public function addTach(Tache $tach): self
    {
        if (!$this->taches->contains($tach)) {
            $this->taches[] = $tach;
            $tach->addPersonnel($this);
        }

        return $this;
    }

    public function removeTach(Tache $tach): self
    {
        if ($this->taches->removeElement($tach)) {
            $tach->removePersonnel($this);
        }

        return $this;
    }

    public function getSalaire(): ?string
    {
        return $this->salaire;
    }

    public function setSalaire(?string $salaire): self
    {
        $this->salaire = $salaire;

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
            $caiss->setPersonnel($this);
        }

        return $this;
    }

    public function removeCaiss(Caisse $caiss): self
    {
        if ($this->caisses->removeElement($caiss)) {
            // set the owning side to null (unless already changed)
            if ($caiss->getPersonnel() === $this) {
                $caiss->setPersonnel(null);
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection|Equipe[]
     */
    public function getChefequipes(): Collection
    {
        return $this->chefequipes;
    }

    public function addChefequipe(Equipe $chefequipe): self
    {
        if (!$this->chefequipes->contains($chefequipe)) {
            $this->chefequipes[] = $chefequipe;
            $chefequipe->setChef($this);
        }

        return $this;
    }

    public function removeChefequipe(Equipe $chefequipe): self
    {
        if ($this->chefequipes->removeElement($chefequipe)) {
            // set the owning side to null (unless already changed)
            if ($chefequipe->getChef() === $this) {
                $chefequipe->setChef(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Livraison[]
     */
    public function getLivraisons(): Collection
    {
        return $this->livraisons;
    }

    public function addLivraison(Livraison $livraison): self
    {
        if (!$this->livraisons->contains($livraison)) {
            $this->livraisons[] = $livraison;
            $livraison->setPersonnel($this);
        }

        return $this;
    }

    public function removeLivraison(Livraison $livraison): self
    {
        if ($this->livraisons->contains($livraison)) {
            $this->livraisons->removeElement($livraison);
            // set the owning side to null (unless already changed)
            if ($livraison->getPersonnel() === $this) {
                $livraison->setPersonnel(null);
            }
        }

        return $this;
    }

    public function getEquipe(): ?Equipe
    {
        return $this->equipe;
    }

    public function setEquipe(?Equipe $equipe): self
    {
        $this->equipe = $equipe;

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getPrenoms(): ?string
    {
        return $this->prenoms;
    }

    public function setPrenoms(?string $prenoms): self
    {
        $this->prenoms = $prenoms;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return Collection<int, Devis>
     */
    public function getDevis(): Collection
    {
        return $this->devis;
    }

    public function addDevi(Devis $devi): static
    {
        if (!$this->devis->contains($devi)) {
            $this->devis->add($devi);
            $devi->setSuivie($this);
        }

        return $this;
    }

    public function removeDevi(Devis $devi): static
    {
        if ($this->devis->removeElement($devi)) {
            // set the owning side to null (unless already changed)
            if ($devi->getSuivie() === $this) {
                $devi->setSuivie(null);
            }
        }

        return $this;
    }
    /**
     * @return Collection<int, Beneficiaire>
     */
    public function getBeneficiare(): Collection
    {
        return $this->beneficiaires;
    }
    public function addBeneficiaire(Beneficiaire $bene): static
    {
        if (!$this->beneficiaires->contains($bene)) {
            $this->beneficiaires->add($bene);
            $bene->setPersonnel($this);
        }

        return $this;
    }
    public function removeBeneficiaire(Beneficiaire $bene): static
    {
        if ($this->beneficiaires->removeElement($bene)) {
            // set the owning side to null (unless already changed)
            if ($bene->getPersonnel() === $this) {
                $bene->setPersonnel(null);
            }
        }

        return $this;
    }
}
