<?php

namespace App\Controller\Api;

use App\Entity\Cours;
use App\Entity\Matiere;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/api")
 */
class CoursController extends AbstractController
{
    /**
     * @Route("/cours", name="api_cours")
     */
    public function getCoursOfTheDay(EntityManagerInterface $em)
    {
        return $this->json(array_map(function ($cours) {
            return $cours->toArray();
        }, $em->getRepository(Cours::class)->findByDate(new \DateTime(date('d-m-Y'))))); // On indique le format pour ne pas prendre en compte l'heure actuelle mais bien la journée
    }

    /**
     * @Route("/matieres", name="api_matieres")
     */
    public function getMatieres(EntityManagerInterface $em)
    {
        return $this->json(array_map(function ($matiere) {
            return $matiere->toArray();
        }, $em->getRepository(Matiere::class)->findAll()));
    }
}
