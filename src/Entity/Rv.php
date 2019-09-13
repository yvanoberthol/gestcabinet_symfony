<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RvRepository")
 */
class Rv
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $jour;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client", inversedBy="rvs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Creneau", inversedBy="rvs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $creneau;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Specialite", inversedBy="rvs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $specialite;

    /**
     * @ORM\Column(type="boolean")
     */
    private $annule;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\TokenRv", mappedBy="rv", cascade={"persist", "remove"})
     */
    private $tokenRv;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJour(): ?\DateTimeInterface
    {
        return $this->jour;
    }

    public function setJour(\DateTimeInterface $jour): self
    {
        $this->jour = $jour;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;
    }

    public function getCreneau(): ?Creneau
    {
        return $this->creneau;
    }

    public function setCreneau(?Creneau $creneau): self
    {
        $this->creneau = $creneau;
    }

    public function getSpecialite(): ?Specialite
    {
        return $this->specialite;
    }

    public function setSpecialite(?Specialite $specialite): self
    {
        $this->specialite = $specialite;
    }

    public function getAnnule(): ?bool
    {
        return $this->annule;
    }

    public function setAnnule(bool $annule): self
    {
        $this->annule = $annule;
    }

    public function getTokenRv(): ?TokenRv
    {
        return $this->tokenRv;
    }

    public function setTokenRv(?TokenRv $tokenRv): self
    {
        $this->tokenRv = $tokenRv;

        // set (or unset) the owning side of the relation if necessary
        $newRv = $tokenRv === null ? null : $this;
        if ($newRv !== $tokenRv->getRv()) {
            $tokenRv->setRv($newRv);
        }

        return $this;
    }


}
