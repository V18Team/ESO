<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonalDataRepository")
 */
class PersonalData
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\User", inversedBy="personalData", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $userId;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $surname;

    /**
     * @ORM\Column(type="date")
     */
    private $birthdayDate;

    /**
     * @ORM\Column(type="integer")
     */
    private $pesel;

    /**
     * @ORM\Column(type="boolean")
     */
    private $acceptRodo;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $role;

    public function getId()
    {
        return $this->id;
    }

    public function getUserId(): ?User
    {
        return $this->userId;
    }

    public function setUserId(User $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getBirthdayDate(): ?\DateTimeInterface
    {
        return $this->birthdayDate;
    }

    public function setBirthdayDate(\DateTimeInterface $birthdayDate): self
    {
        $this->birthdayDate = $birthdayDate;

        return $this;
    }

    public function getPesel(): ?int
    {
        return $this->pesel;
    }

    public function setPesel(int $pesel): self
    {
        $this->pesel = $pesel;

        return $this;
    }

    public function getAcceptRodo(): ?bool
    {
        return $this->acceptRodo;
    }

    public function setAcceptRodo(bool $acceptRodo): self
    {
        $this->acceptRodo = $acceptRodo;

        return $this;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

}
