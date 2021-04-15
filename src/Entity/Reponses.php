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

    /**
     * @ORM\ManyToOne(targetEntity=Questions::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $questions;

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

    public function getQuestions(): ?questions
    {
        return $this->questions;
    }

    public function setQuestions(?questions $questions): self
    {
        $this->questions = $questions;

        return $this;
    }


}
