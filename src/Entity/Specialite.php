<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpecialiteRepository")
 */
class Specialite
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=700, nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MedecinSpecialite",mappedBy="specialite")
     */
    private $medecinSpecialites;


    public function __construct()
    {
        $this->medecinSpecialites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
    }


    /**
     * @return Collection|MedecinSpecialite[]
     */
    public function getMedecinSpecialites(): Collection
    {
        return $this->medecinSpecialites;
    }

    public function addMedecinSpecialite(MedecinSpecialite $medecinSpecialite): self
    {
        if (!$this->medecinSpecialites->contains($medecinSpecialite)) {
            $this->medecinSpecialites[] = $medecinSpecialite;
            $medecinSpecialite->setSpecialite($this);
        }

        return $this;
    }

    public function removeMedecinSpecialite(MedecinSpecialite $medecinSpecialite): self
    {
        if ($this->medecinSpecialites->contains($medecinSpecialite)) {
            $this->medecinSpecialites->removeElement($medecinSpecialite);
            // set the owning side to null (unless already changed)
            if ($medecinSpecialite->getSpecialite() === $this) {
                $medecinSpecialite->setSpecialite(null);
            }
        }

        return $this;
    }
}
