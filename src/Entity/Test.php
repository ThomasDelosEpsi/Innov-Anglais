<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

#[ApiResource(normalizationContext:['groups' => ['read']])]
#[ORM\Entity(repositoryClass: TestRepository::class)]
class Test
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(["read"])]
    private ?string $name_test = null;


    #[ORM\ManyToOne(inversedBy: 'test')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(["read"])]
    private ?Theme $id_theme = null;

    #[ORM\ManyToOne(inversedBy: 'test')]
    #[Groups(["read"])]
    private ?Company $id_company = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameTest(): ?string
    {
        return $this->name_test;
    }

    public function setNameTest(string $name_test): self
    {
        $this->name_test = $name_test;

        return $this;
    }

    public function getIdTheme(): ?Theme
    {
        return $this->id_theme;
    }

    public function setIdTheme(?Theme $id_theme): self
    {
        $this->id_theme = $id_theme;

        return $this;
    }

    public function getIdCompany(): ?Company
    {
        return $this->id_company;
    }

    public function setIdCompany(?Company $id_company): self
    {
        $this->id_company = $id_company;

        return $this;
    }



}
