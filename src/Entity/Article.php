<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $chapo;

    /**
     * @ORM\Column(type="text")
     */
    private $contenu;

    /**
     * @ORM\Column(type="date")
     */
    private $created_at;

    /**
     * @ORM\ManyToOne(targetEntity="Admin", inversedBy="article")
     * @ORM\JoinColumn(name="admin_id", referencedColumnName="id")
     */
    private $adminId;

    /**
     * @ORM\ManyToOne(targetEntity="Message", inversedBy="article")
     * @ORM\JoinColumn(name="message_id", referencedColumnName="id")
     */
    private $messageId;

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

    /**
     * @return mixed
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * @param mixed $messageId
     */
    public function setMessageId($messageId): void
    {
        $this->messageId = $messageId;
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getChapo(): ?string
    {
        return $this->chapo;
    }

    public function setChapo(string $chapo): self
    {
        $this->chapo = $chapo;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }
}
