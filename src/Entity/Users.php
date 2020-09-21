<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UsersRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Serializer;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 * @UniqueEntity(
 * fields={"email"},
 * message = "Cette email est déjà enregistré")
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $last_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $first_name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(
     * message = "The email '{{ value }}' is not a valid email."
     * )
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 5,
     *      max = 20,
     *      minMessage = "Votre mot de passe est trop court, il faut plus de {{ limit }} caractèrescaractères",
     *      maxMessage = "Votre mot de passe est trop long, il faut moins de {{ limit }} characters",
     *      allowEmptyString = false
     * )
     */
    private $password;

     /**
     *  @Assert\EqualTo(propertyPath ="password", message = "Vos mots de passe de sont pas équivalents")
     *  @Assert\Length(
     *      min = 5,
     *      max = 20,
     *      minMessage = "Votre mot de passe est trop court, il faut plus de {{ limit }} caractèrescaractères",
     *      maxMessage = "Votre mot de passe est trop long, il faut moins de {{ limit }} characters",
     *      allowEmptyString = false
     * )
     */
    private $passwordVerification;

    /**
     * @ORM\OneToMany(targetEntity=Projects::class, mappedBy="user")
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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

    public function getPasswordVerification(): ?string
    {
        return $this->passwordVerification;
    }

    public function setPasswordVerification(string $passwordVerification): self
    {
        $this->passwordVerification = $passwordVerification;

        return $this;
    }

    /**
     * @return Collection|Projects[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(Projects $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setUser($this);
        }

        return $this;
    }

    public function removeUser(Projects $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getUser() === $this) {
                $user->setUser(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->last_name;
    }


}
