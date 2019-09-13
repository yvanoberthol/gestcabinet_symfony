<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MedecinRepository")
 */
class Medecin
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
     * @ORM\Column(type="string", length=100)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=9)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="date")
     */
    private $date_naissance;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\ImageMedecin",cascade={"persist", "remove"})
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MedecinSpecialite",mappedBy="medecin")
     */
    private $medecinSpecialites;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\CompteMedecin", mappedBy="medecin", cascade={"persist", "remove"})
     */
    private $compteMedecin;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Creneau", mappedBy="medecin")
     */
    private $creneaus;

    public function __construct()
    {
        $this->creneaus = new ArrayCollection();
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(\DateTimeInterface $date_naissance): self
    {
        $this->date_naissance = $date_naissance;
    }

    /**
     * @return ImageMedecin
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param ImageMedecin $image
     */
    public function setImage(ImageMedecin $image = null): void
    {
        $this->image = $image;
    }

    public function getCompteMedecin(): ?CompteMedecin
    {
        return $this->compteMedecin;
    }

    public function setCompteMedecin(?CompteMedecin $compteMedecin): self
    {
        $this->compteMedecin = $compteMedecin;

        // set (or unset) the owning side of the relation if necessary
        $newMedecin = $compteMedecin === null ? null : $this;
        if ($newMedecin !== $compteMedecin->getMedecin()) {
            $compteMedecin->setMedecin($newMedecin);
        }

        return $this;
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
            $medecinSpecialite->setMedecin($this);
        }

        return $this;
    }

    public function removeMedecinSpecialite(MedecinSpecialite $medecinSpecialite): self
    {
        if ($this->medecinSpecialites->contains($medecinSpecialite)) {
            $this->medecinSpecialites->removeElement($medecinSpecialite);
            // set the owning side to null (unless already changed)
            if ($medecinSpecialite->getMedecin() === $this) {
                $medecinSpecialite->setMedecin(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Creneau[]
     */
    public function getCreneaus(): Collection
    {
        return $this->creneaus;
    }

    public function addCreneau(Creneau $creneau): self
    {
        if (!$this->creneaus->contains($creneau)) {
            $this->creneaus[] = $creneau;
            $creneau->setMedecin($this);
        }

        return $this;
    }

    public function removeCreneau(Creneau $creneau): self
    {
        if ($this->creneaus->contains($creneau)) {
            $this->creneaus->removeElement($creneau);
            // set the owning side to null (unless already changed)
            if ($creneau->getMedecin() === $this) {
                $creneau->setMedecin(null);
            }
        }

        return $this;
    }
}
