<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\CoursRepository")
 */
class Cours
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\GreaterThan(
     *  value = "now",
     *  message = "Le début du cours doit être supérieur à {{ compared_value }}.")
     * @Assert\NotNull()
     */
    private $dateHeureDebut;
    
    /**
     * @ORM\Column(type="datetime")
     * @Assert\GreaterThan(propertyPath="dateHeureDebut",
     *  message = "La fin du cours doit être supérieur à {{ compared_value }}.")
     * @Assert\NotNull()
     */
    private $dateHeureFin;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Professeur", inversedBy="cours")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull()
     */
    private $professeur;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Salle", inversedBy="cours")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull()
     */
    private $salle;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Matiere", inversedBy="cours")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull()
     */
    private $matiere;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TypeCours", inversedBy="cours")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull()
     */
    private $type;

    public function __construct() {
        $this->dateHeureDebut = new \DateTime('now');
        $date = new \DateTime('now');
        $date->modify('+2 hours');
        $this->dateHeureFin = $date;
    }

    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'dateHeureDebut' => $this->getDateHeureDebut()->format('d-m-Y H:i'),
            'dateHeureFin' => $this->getDateHeureFin()->format('d-m-Y H:i'),
            'type' => $this->getType()->toArray(),
            'professeur' => $this->getProfesseur()->toArray(),
            'matiere' => $this->getMatiere()->toArray(),
            'salle' => $this->getSalle()->toArray(),
        ];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateHeureDebut(): ?\DateTimeInterface
    {
        return $this->dateHeureDebut;
    }

    public function setDateHeureDebut(\DateTimeInterface $dateHeureDebut): self
    {
        $this->dateHeureDebut = $dateHeureDebut;

        return $this;
    }

    public function getDateHeureFin(): ?\DateTimeInterface
    {
        return $this->dateHeureFin;
    }

    public function setDateHeureFin(\DateTimeInterface $dateHeureFin): self
    {
        $this->dateHeureFin = $dateHeureFin;

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

    public function getSalle(): ?Salle
    {
        return $this->salle;
    }

    public function setSalle(?Salle $salle): self
    {
        $this->salle = $salle;

        return $this;
    }

    public function getMatiere(): ?Matiere
    {
        return $this->matiere;
    }

    public function setMatiere(?Matiere $matiere): self
    {
        $this->matiere = $matiere;

        return $this;
    }

    public function getType(): ?TypeCours
    {
        return $this->type;
    }

    public function setType(?TypeCours $type): self
    {
        $this->type = $type;

        return $this;
    }
}
