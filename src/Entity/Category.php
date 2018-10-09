<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\OneToMany(targetEntity="App\Entity\Product", mappedBy="category")
     */
    private $p_name;

    public function __construct()
    {
        $this->p_name = new ArrayCollection();
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
     * @return Collection|Product[]
     */
    public function getPName(): Collection
    {
        return $this->p_name;
    }

    public function addPName(Product $pName): self
    {
        if (!$this->p_name->contains($pName)) {
            $this->p_name[] = $pName;
            $pName->setCategory($this);
        }

        return $this;
    }

    public function removePName(Product $pName): self
    {
        if ($this->p_name->contains($pName)) {
            $this->p_name->removeElement($pName);
            // set the owning side to null (unless already changed)
            if ($pName->getCategory() === $this) {
                $pName->setCategory(null);
            }
        }

        return $this;
    }
}
