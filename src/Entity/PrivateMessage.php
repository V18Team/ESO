<?php

namespace App\Entity;

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
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fromUser;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $toUser;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $topic;

    /**
     * @ORM\Column(type="string", length=9999)
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
    private $viewedAt;

    public function __construct(
        string $topic,
        string $content,
        User $fromUser,
        User $toUser,
        string $sendDateTime
    ) {
        $this->fromUser = $fromUser;
        $this->toUser = $toUser;
        $this->topic = $topic;
        $this->messageContent = $content;
        $this->createdAt = $sendDateTime;
        $this->isViewed = false;
        $this->viewedAt = '0000-00-00 00:00';
    }
    public function getId()
    {
        return $this->id;
    }

    public function getFromUser(): ?User
    {
        return $this->fromUser;
    }

    public function setFromUser(?User $fromUser): self
    {
        $this->fromUser = $fromUser;

        return $this;
    }

    public function getToUser(): ?User
    {
        return $this->toUser;
    }

    public function setToUser(?User $toUser): self
    {
        $this->toUser = $toUser;

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

    public function getViewedAt(): ?\DateTimeInterface
    {
        return $this->viewedAt;
    }

    public function setViewedAt(?\DateTimeInterface $viewedAt): self
    {
        $this->viewedAt = $viewedAt;

        return $this;
    }
}
