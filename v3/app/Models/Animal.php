<?php

namespace App\Models;

use App\Models\Equipment;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
class Animal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $type = null;

    #[ORM\Column]
    private ?int $age = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $health = null;

    #[ORM\ManyToOne]
    private ?Equipment $idEquipement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getHealth(): ?string
    {
        return $this->health;
    }

    public function setHealth(?string $health): static
    {
        $this->health = $health;

        return $this;
    }

    public function getIdEquipement(): ?Equipment
    {
        return $this->idEquipement;
    }

    public function setIdEquipement(?Equipment $idEquipement): static
    {
        $this->idEquipement = $idEquipement;

        return $this;
    }
}
