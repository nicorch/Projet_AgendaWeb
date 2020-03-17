<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AvisRepository")
 * @UniqueEntity(
 *      fields={"professeur","emailEtudiant"},
 *      errorPath="emailEtudiant",
 *      message="Cet etudiant à déjà noté ce professeur"
 * )
 */
class Avis
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(min=0, max=5, notInRangeMessage="La note doit être comprise entre {{ min }} et {{ max }}.")
     * @Assert\NotNull()
     */
    private $note;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotNull()
     */
    private $commentaire;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     * @Assert\NotNull()
     */
    private $emailEtudiant;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Professeur", inversedBy="avis")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull()
     */
    private $professeur;

    public function __toString()
    {
        return sprintf('%s (%s/5)', $this->emailEtudiant, $this->note);
    }

    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'note' => $this->getNote(),
            'commentaire' => $this->getCommentaire(),
            'emailEtudiant' => $this->getEmailEtudiant(),
        ];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getEmailEtudiant(): ?string
    {
        return $this->emailEtudiant;
    }

    public function setEmailEtudiant(string $emailEtudiant): self
    {
        $this->emailEtudiant = $emailEtudiant;

        return $this;
    }

    public function getProfesseur(): ?Professeur
    {
        return $this->professeur;
    }

    public function setProfesseur(?Professeur $professeur): self
    {
        $this->professeur = $professeur;

        return $this;
    }
}
