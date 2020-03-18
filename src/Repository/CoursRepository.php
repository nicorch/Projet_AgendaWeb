<?php

namespace App\Repository;

use App\Entity\Cours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Cours|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cours|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cours[]    findAll()
 * @method Cours[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cours::class);
    }

    /**
     * @return Cours[] Returns an array of Cours objects
     */
    public function findByDate($date)
    {
        $dateafter = new \DateTime($date->format('d-m-Y'));
        $dateafter->modify('+1 day');
        
        return $this->createQueryBuilder('c')
            ->andWhere('c.dateHeureDebut >= :val')
            ->andWhere('c.dateHeureFin < :dayafter')
            ->setParameter('val', $date)
            ->setParameter('dayafter', $dateafter)
            ->orderBy('c.dateHeureDebut', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    // /**
    //  * @return Cours[] Returns an array of Cours objects
    //  */
    // public function findBeforeDate($date)
    // {
    //     return $this->createQueryBuilder('c')
    //         ->andWhere('c.dateHeureDebut >= :val')
    //         ->setParameter('val', $date)
    //         ->orderBy('c.dateHeureDebut', 'ASC')
    //         ->getQuery()
    //         ->getResult()
    //     ;
    // }

    /*
    public function findOneBySomeField($value): ?Cours
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
