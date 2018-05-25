<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PrivateMessageRepository")
 */
class PrivateMessage
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User")
     */
    private $fromUserId;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User")
     */
    private $toUserId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $topic;

    /**
     * @ORM\Column(type="string", length=999999)
     */
    private $messageContent;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isViewed;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $viewDateTime;

    public function __construct()
    {
        $this->fromUserId = new ArrayCollection();
        $this->toUserId = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Collection|User[]
     */
    public function getFromUserId(): Collection
    {
        return $this->fromUserId;
    }

    /**
     * @return Collection|User[]
     */
    public function getToUserId(): Collection
    {
        return $this->toUserId;
    }

    public function addToUserId(User $toUserId): self
    {
        if (!$this->toUserId->contains($toUserId)) {
            $this->toUserId[] = $toUserId;
        }

        return $this;
    }

    public function removeToUserId(User $toUserId): self
    {
        if ($this->toUserId->contains($toUserId)) {
            $this->toUserId->removeElement($toUserId);
        }

        return $this;
    }

    public function getTopic(): ?string
    {
        return $this->topic;
    }

    public function setTopic(string $topic): self
    {
        $this->topic = $topic;

        return $this;
    }

    public function getMessageContent(): ?string
    {
        return $this->messageContent;
    }

    public function setMessageContent(string $messageContent): self
    {
        $this->messageContent = $messageContent;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getIsViewed(): ?bool
    {
        return $this->isViewed;
    }

    public function setIsViewed(bool $isViewed): self
    {
        $this->isViewed = $isViewed;

        return $this;
    }

    public function getViewDateTime(): ?\DateTimeInterface
    {
        return $this->viewDateTime;
    }

    public function setViewDateTime(?\DateTimeInterface $viewDateTime): self
    {
        $this->viewDateTime = $viewDateTime;

        return $this;
    }
}
