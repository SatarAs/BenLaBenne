<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PhotoBenneRepository")
 */
class PhotoBenne
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $latitude;

    /**
     * @ORM\Column(type="float")
     */
    private $longitude;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $altitude;

    /**
     * @ORM\JoinColumn()
     * @ORM\OneToOne(targetEntity="Benne", inversedBy="photobenne")
     */
    private $benne;

    /**
     * @return mixed
     */

    /**
     * @ORM\ManyToOne(targetEntity="Admin", inversedBy="photobenne")
     */
    private $admin;

    /**
     * @return mixed
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin): void
    {
        $this->admin = $admin;
    }

    public function getBenne()
    {
        return $this->benne;
    }

    /**
     * @param mixed $benne
     */
    public function setBenne($benne): void
    {
        $this->benne = $benne;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getAltitude(): ?float
    {
        return $this->altitude;
    }

    public function setAltitude(?float $altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }
}