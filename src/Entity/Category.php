<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

#[ApiResource()]
#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name_category = null;

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Vocabulary::class, orphanRemoval: true)]
    private Collection $vocabulary;

    public function __construct()
    {
        $this->vocabulary = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameCategory(): ?string
    {
        return $this->name_category;
    }

    public function setNameCategory(string $name_category): self
    {
        $this->name_category = $name_category;

        return $this;
    }

    /**
     * @return Collection<int, Vocabulary>
     */
    public function getVocabulary(): Collection
    {
        return $this->vocabulary;
    }

    public function addVocabulary(Vocabulary $vocabulary): self
    {
        if (!$this->vocabulary->contains($vocabulary)) {
            $this->vocabulary->add($vocabulary);
            $vocabulary->setCategory($this);
        }

        return $this;
    }

    public function removeVocabulary(Vocabulary $vocabulary): self
    {
        if ($this->vocabulary->removeElement($vocabulary)) {
            // set the owning side to null (unless already changed)
            if ($vocabulary->getCategory() === $this) {
                $vocabulary->setCategory(null);
            }
        }

        return $this;
    }
}
