<?php

namespace App\Controller\Api;

use App\Entity\Salle;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 */
class SalleController extends AbstractController
{
    /**
     * @Route("/salles", name="api_salles")
     */
    public function getSalles(EntityManagerInterface $em)
    {
        return $this->json(array_map(function ($salle) {
            return $salle->toArray();
        }, $em->getRepository(Salle::class)->findAll()));
    }
}
