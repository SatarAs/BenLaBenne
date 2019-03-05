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

    /**
     * @ORM\OneToOne(targetEntity="PhotoBenne", mappedBy="benne")
     */
    private $photobenne;

    /**
     * @return mixed
     */
    public function getPhotobenne()
    {
        return $this->photobenne;
    }

    /**
     * @param mixed $photobenne
     */
    public function setPhotobenne($photobenne): void
    {
        $this->photobenne = $photobenne;
    }


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
