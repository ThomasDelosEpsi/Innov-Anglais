<?php

namespace App\Entity;

use App\Repository\DoDoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ApiPlatform\Core\Annotation\ApiResource;


#[ApiResource()]
#[ORM\Entity(repositoryClass: DoDoRepository::class)]
#[UniqueEntity(
    fields: ['dateExecution', 'test', 'user'],
    errorPath: 'port',
    message: 'This port is already in use on that host.',
)]
class DoDo
{
    

    #[ORM\Column]
    private ?float $resultTest = null;

    #[ORM\Id]
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateExecution = null;


    #[ORM\Id]
    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Test $test = null;

    #[ORM\Id]
    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    public function __construct()
    {
        $this->Test = new ArrayCollection();
    }


    public function getResultTest(): ?float
    {
        return $this->resultTest;
    }

    public function setResultTest(float $resultTest): self
    {
        $this->resultTest = $resultTest;

        return $this;
    }

    public function getDateExecution(): ?\DateTimeInterface
    {
        return $this->dateExecution;
    }

    public function setDateExecution(\DateTimeInterface $dateExecution): self
    {
        $this->dateExecution = $dateExecution;

        return $this;
    }

    /**
     * @return Collection<int, Test>
     */
    public function getTest(): Collection
    {
        return $this->Test;
    }

    public function addTest(Test $test): self
    {
        if (!$this->Test->contains($test)) {
            $this->Test->add($test);
            $test->setTestId($this);
        }

        return $this;
    }

    public function removeTest(Test $test): self
    {
        if ($this->Test->removeElement($test)) {
            // set the owning side to null (unless already changed)
            if ($test->getTestId() === $this) {
                $test->setTestId(null);
            }
        }

        return $this;
    }

    public function setTest(?Test $test): self
    {
        $this->test = $test;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
