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
     * @ORM\ManyToOne(targetEntity="Admin", inversedBy="benne")
     */
    private $adminId;

    /**
     * @ORM\JoinColumn(name="admin_id", referencedColumnName="Benne")
     * @ORM\OneToMany(targetEntity="PhotoBenne", mappedBy="benneId")
     */
    private $photobenne;

    /**
     * @return mixed
     */
    public function getAdminId()
    {
        return $this->adminId;
    }

    /**
     * @param mixed $adminId
     */
    public function setAdminId($adminId): void
    {
        $this->adminId = $adminId;
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
