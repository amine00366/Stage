<?php

namespace App\Repository;

use App\Entity\Bandes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Bandes>
 *
 * @method Bandes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bandes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bandes[]    findAll()
 * @method Bandes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BandesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bandes::class);
    }

//    /**
//     * @return Bandes[] Returns an array of Bandes objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Bandes
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
