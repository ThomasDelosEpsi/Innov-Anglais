<?php

namespace App\Entity;

use App\Repository\CompanyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompanyRepository::class)]
class Company
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name_company = null;

    #[ORM\Column(length: 255)]
    private ?string $phone_company = null;

    #[ORM\Column(length: 255)]
    private ?string $mail_company = null;

    #[ORM\Column(length: 255)]
    private ?string $password_company = null;

    #[ORM\OneToMany(mappedBy: 'id_company', targetEntity: Test::class)]
    private Collection $test;

    #[ORM\OneToMany(mappedBy: 'company', targetEntity: User::class)]
    private Collection $User;

    public function __construct()
    {
        $this->test = new ArrayCollection();
        $this->User = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameCompany(): ?string
    {
        return $this->name_company;
    }

    public function setNameCompany(string $name_company): self
    {
        $this->name_company = $name_company;

        return $this;
    }

    public function getPhoneCompany(): ?string
    {
        return $this->phone_company;
    }

    public function setPhoneCompany(string $phone_company): self
    {
        $this->phone_company = $phone_company;

        return $this;
    }

    public function getMailCompany(): ?string
    {
        return $this->mail_company;
    }

    public function setMailCompany(string $mail_company): self
    {
        $this->mail_company = $mail_company;

        return $this;
    }

    public function getPasswordCompany(): ?string
    {
        return $this->password_company;
    }

    public function setPasswordCompany(string $password_company): self
    {
        $this->password_company = $password_company;

        return $this;
    }

    /**
     * @return Collection<int, Test>
     */
    public function getTest(): Collection
    {
        return $this->test;
    }

    public function addTest(Test $test): self
    {
        if (!$this->test->contains($test)) {
            $this->test->add($test);
            $test->setIdCompany($this);
        }

        return $this;
    }

    public function removeTest(Test $test): self
    {
        if ($this->test->removeElement($test)) {
            // set the owning side to null (unless already changed)
            if ($test->getIdCompany() === $this) {
                $test->setIdCompany(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUser(): Collection
    {
        return $this->User;
    }

    public function addUser(User $user): self
    {
        if (!$this->User->contains($user)) {
            $this->User->add($user);
            $user->setCompany($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->User->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getCompany() === $this) {
                $user->setCompany(null);
            }
        }

        return $this;
    }
}
