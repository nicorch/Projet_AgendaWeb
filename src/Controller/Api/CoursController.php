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
     * @Route("/cours/current", name="api_cours_current")
     */
    public function getCoursOfTheDay(EntityManagerInterface $em)
    {
        return $this->json(array_map(function ($cours) {
            return $cours->toArray();
        }, $em->getRepository(Cours::class)->findByDate(new \DateTime(date('d-m-Y'))))); // On indique le format pour ne pas prendre en compte l'heure actuelle mais bien la journée
    }

    /**
     * @Route("/cours/before/{date}", name="api_cours_before")
     */
    public function getCoursOfTheDayBefore(EntityManagerInterface $em, $date)
    {
        $dateActuelle = new \DateTime($date);
        $date_before = $dateActuelle->modify('-1 day');
        var_dump('recu: '.$date);
        var_dump('nouvelle: '.$date_before->format('d-m-Y'));
        return $this->json(array_map(function ($cours) {
            return $cours->toArray();
        }, $em->getRepository(Cours::class)->findByDate($date_before))); // On indique le format pour ne pas prendre en compte l'heure actuelle mais bien la journée
    }

    /**
     * @Route("/cours/after/{date}", name="api_cours_after")
     */
    public function getCoursOfTheDayAfter(EntityManagerInterface $em, $date)
    {
        $dateActuelle = new \DateTime($date);
        $date_after = $dateActuelle->modify('+1 day');
        var_dump('recu: '.$date);
        var_dump('nouvelle: '.$date_after->format('d-m-Y'));
        return $this->json(array_map(function ($cours) {
            return $cours->toArray();
        }, $em->getRepository(Cours::class)->findByDate($date_after))); // On indique le format pour ne pas prendre en compte l'heure actuelle mais bien la journée
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
