<?php

namespace App\Repository;

use App\Entity\Maurade;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Maurade|null find($id, $lockMode = null, $lockVersion = null)
 * @method Maurade|null findOneBy(array $criteria, array $orderBy = null)
 * @method Maurade[]    findAll()
 * @method Maurade[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MauradeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Maurade::class);
    }

    // /**
    //  * @return Maurade[] Returns an array of Maurade objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Maurade
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
