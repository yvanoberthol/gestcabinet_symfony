<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MedecinSpecialiteRepository")
 */
class MedecinSpecialite
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Medecin",inversedBy="medecinSpecialites")
     * @ORM\JoinColumn(nullable=false)
     */
    private $medecin;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Specialite",inversedBy="medecinSpecialites")
     * @ORM\JoinColumn(nullable=false)
     */
    private $specialite;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Medecin
     */
    public function getMedecin()
    {
        return $this->medecin;
    }

    /**
     * @param Medecin $medecin
     */
    public function setMedecin(Medecin $medecin): void
    {
        $this->medecin = $medecin;
    }

    /**
     * @return Specialite
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * @param Specialite $specialite
     */
    public function setSpecialite(Specialite $specialite): void
    {
        $this->specialite = $specialite;
    }


}
