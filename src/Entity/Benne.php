<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BenneRepository")
 */
class Benne
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $jourcollecte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJourcollecte(): ?\DateTimeInterface
    {
        return $this->jourcollecte;
    }

    public function setJourcollecte(\DateTimeInterface $jourcollecte): self
    {
        $this->jourcollecte = $jourcollecte;

        return $this;
    }
}
