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
     * @ORM\ManyToOne(targetEntity="Benne", inversedBy="photobenne")
     * @ORM\JoinColumn(name="benne_id", referencedColumnName="id")
     */
    private $benneId;

    /**
     * @return mixed
     */
    public function getBenneId()
    {
        return $this->benneId;
    }

    /**
     * @param mixed $benneId
     */
    public function setBenneId($benneId): void
    {
        $this->benneId = $benneId;
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
