<?php

namespace App\Entity;

use App\Repository\VocabularyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

#[ApiResource()]
#[ORM\Entity(repositoryClass: VocabularyRepository::class)]
class Vocabulary
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name_vocabulary = null;

    #[ORM\Column(length: 255)]
    private ?string $translate_word = null;

    #[ORM\ManyToOne(inversedBy: 'vocabulary')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $category = null;

    #[ORM\ManyToMany(targetEntity: Test::class)]
    private Collection $test;

    public function __construct()
    {
        $this->test = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameVocabulary(): ?string
    {
        return $this->name_vocabulary;
    }

    public function setNameVocabulary(string $name_vocabulary): self
    {
        $this->name_vocabulary = $name_vocabulary;

        return $this;
    }

    public function getTranslateWord(): ?string
    {
        return $this->translate_word;
    }

    public function setTranslateWord(string $translate_word): self
    {
        $this->translate_word = $translate_word;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

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
        }

        return $this;
    }

    public function removeTest(Test $test): self
    {
        $this->test->removeElement($test);

        return $this;
    }
}
