<?php

namespace App\Entity;

use App\Repository\ReponsesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReponsesRepository::class)
 */
class Reponses
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $textReponse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTextReponse(): ?string
    {
        return $this->textReponse;
    }

    public function setTextReponse(string $textReponse): self
    {
        $this->textReponse = $textReponse;

        return $this;
    }
}
