<?php

namespace App\Entity;

use App\Repository\QuestionsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuestionsRepository::class)
 */
class Questions
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
    private $textQuestion;

    /**
     * @ORM\ManyToOne(targetEntity=user::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_multiple;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTextQuestion(): ?string
    {
        return $this->textQuestion;
    }

    public function setTextQuestion(string $textQuestion): self
    {
        $this->textQuestion = $textQuestion;

        return $this;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getIsMultiple(): ?bool
    {
        return $this->is_multiple;
    }

    public function setIsMultiple(bool $is_multiple): self
    {
        $this->is_multiple = $is_multiple;

        return $this;
    }
}
