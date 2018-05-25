<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $code;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\PersonalData", mappedBy="userId", cascade={"persist", "remove"})
     */
    private $personalData;

    public function getId()
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(?int $code): self
    {
        $this->code = $code;

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

    public function getPersonalData(): ?PersonalData
    {
        return $this->personalData;
    }

    public function setPersonalData(PersonalData $personalData): self
    {
        $this->personalData = $personalData;

        // set the owning side of the relation if necessary
        if ($this !== $personalData->getUserId()) {
            $personalData->setUserId($this);
        }

        return $this;
    }
}
