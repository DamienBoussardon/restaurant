<?php

namespace App\Entity;

use App\Repository\AllergenRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AllergenRepository::class)
 */
class Allergen
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    

    /**
     * @ORM\ManyToMany(targetEntity=Dish::class, inversedBy="allergens")
     */
    private $dishes;

    public function __construct()
    {
        $this->dishestest = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection|Dish[]
     */
    public function getDishes(): Collection
    {
        return $this->dishes;
    }

    public function addDishes(Dish $dishes): self
    {
        if (!$this->dishes->contains($dishes)) {
            $this->dishes[] = $dishes;
        }

        return $this;
    }

    public function removeDishes(Dish $dishes): self
    {
        if ($this->dishes->contains($dishes)) {
            $this->dishes->removeElement($dishes);
        }

        return $this;
    }
}
