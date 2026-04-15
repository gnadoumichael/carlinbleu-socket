<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: 'App\Repository\PaysRepository')]
class Pays
{
    #[Groups('user')]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[Groups('user')]
    #[ORM\Column(type: 'string', length: 255)]
    private $nation;

    #[ORM\OneToMany(mappedBy: 'pays', targetEntity: 'App\Entity\User')]
    private $users;

    #[ORM\OneToMany(mappedBy: 'pays', targetEntity: 'App\Entity\Partager')]
    private $partagers;


    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->partagers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNation(): ?string
    {
        return $this->nation;
    }

    public function setNation(string $nation): self
    {
        $this->nation = $nation;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setPays($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getPays() === $this) {
                $user->setPays(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Partager[]
     */
    public function getPartagers(): Collection
    {
        return $this->partagers;
    }

    public function addPartager(Partager $partager): self
    {
        if (!$this->partagers->contains($partager)) {
            $this->partagers[] = $partager;
            $partager->setPays($this);
        }

        return $this;
    }

    public function removePartager(Partager $partager): self
    {
        if ($this->partagers->contains($partager)) {
            $this->partagers->removeElement($partager);
            // set the owning side to null (unless already changed)
            if ($partager->getPays() === $this) {
                $partager->setPays(null);
            }
        }

        return $this;
    }

}
