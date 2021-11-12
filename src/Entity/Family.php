<?php

namespace App\Entity;

use App\Repository\FamilyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FamilyRepository::class)
 */
class Family
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $accepted;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAccepted(): ?int
    {
        return $this->accepted;
    }

    public function setAccepted(int $accepted): self
    {
        $this->accepted = $accepted;

        return $this;
    }
}
