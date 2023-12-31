<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\File;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\OneToMany(mappedBy: 'owner', targetEntity: File::class, orphanRemoval: true)]
    private Collection $files;

    #[ORM\Column]
    private ?float $storage = 20;

    #[ORM\Column]
    private ?float $usestorage = 0;

    public function __construct()
    {
        $this->files = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection<int, File>
     */
    public function getFiles(): Collection
    {
        return $this->files;
    }

    public function hasExceededStorageLimit(): bool {
        return $this->useStorage > $this->totalStorage;
    }

    public function addFile(File $file): static
{
    if (!$this->files->contains($file)) {
        $this->files->add($file);
        $file->setOwner($this);
        $this->setUsestorage($this->calculateUsedStorage());
    }

    return $this;
}

public function removeFile(File $file): static
{
    if ($this->files->removeElement($file)) {
        // set the owning side to null (unless already changed)
        if ($file->getOwner() === $this) {
            $file->setOwner(null);
        }
        $this->setUsestorage($this->calculateUsedStorage());
    }

    return $this;
}

    public function getStorage(): ?int
    {
        return $this->storage;
    }

    public function setStorage(int $storage): static
    {
        $this->storage = $storage;

        return $this;
    }

    public function getUsestorage(): ?float
    {
        return $this->usestorage;
    }

    public function setUsestorage(float $usestorage): static
    {
        $this->usestorage = $usestorage;

        return $this;
    }

    public function calculateUsedStorage(): int
    {
        $totalSize = 0;
        foreach ($this->files as $file) {
            $totalSize += $file->getFilesize();
        }
        return $totalSize;
    }
}
