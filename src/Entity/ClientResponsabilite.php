<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientResponsabiliteRepository")
 */
class ClientResponsabilite
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Responsabilite")
     * @ORM\JoinColumn(nullable=false)
     */
    private $responsabilite;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Client $client
     */
    public function setClient(Client $client): void
    {
        $this->client = $client;
    }

    /**
     * @return Responsabilite
     */
    public function getResponsabilite()
    {
        return $this->responsabilite;
    }

    /**
     * @param Responsabilite $responsabilite
     */
    public function setResponsabilite(Responsabilite $responsabilite): void
    {
        $this->responsabilite = $responsabilite;
    }


}
