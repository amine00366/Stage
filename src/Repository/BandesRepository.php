<?php

namespace App\Repository;

use App\Entity\Armoire;
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
public function searchTerm($terms)
{
    return $this->createQueryBuilder('b')
        ->andWhere('b.numbande LIKE :terms OR b.Label LIKE :terms OR b.datedebut LIKE :terms OR b.datefin LIKE :terms OR b.dureederetension LIKE :terms OR b.pool LIKE :terms')
        ->setParameter('terms', '%' . $terms . '%')
        ->getQuery()
        ->getResult();
}

public function isBandeExpired(Bandes $bande): bool
{
    $currentDate = new \DateTime();
    $difference = $bande->getDatefin()->diff($currentDate);
    $yearsDifference = $difference->y;
    
    return $yearsDifference >= (int) $bande->getDureederetension();

}
public function countBandes(): int
{
    return $this->createQueryBuilder('u')
        ->select('COUNT(u.id)')
        ->getQuery()
        ->getSingleScalarResult();
}
public function countExpiredBandes(): int
{
    $expiredBandes = $this->createQueryBuilder('b')
        ->select('COUNT(b.id)')
        ->andWhere('b.isBandeExpired(b) = :expired')
        ->setParameter('expired', true)
        ->getQuery()
        ->getSingleScalarResult();

    return $expiredBandes;
}
public function getBandsEnteredPerDay(): array
{
    $query = $this->createQueryBuilder('b')
        ->select('b.datefin AS day, COUNT(b.id) AS count')
        ->groupBy('day')
        ->getQuery();

    return $query->getResult();
}

public function findAllByDateFinOrder(bool $ascending = true)
{
    $qb = $this->createQueryBuilder('b')
        ->orderBy('b.datefin', $ascending ? 'ASC' : 'DESC')
        ->getQuery();

    return $qb->getResult();
}

public function countBandesByArmoire(Armoire $armoire)
{
    return $this->createQueryBuilder('b')
        ->select('COUNT(b.id)')
        ->where('b.arm = :armoire')
        ->setParameter('armoire', $armoire)
        ->getQuery()
        ->getSingleScalarResult();
}

public function countBandesByPool($pool)
{
    return $this->createQueryBuilder('b')
        ->select('COUNT(b.id)')
        ->where('b.pool = :pool')
        ->setParameter('pool', $pool)
        ->getQuery()
        ->getSingleScalarResult();
}
public function getBandsCountPerMonth()
{
    $connection = $this->getEntityManager()->getConnection();

    $sql = '
        SELECT DATE_FORMAT(datedebut, "%Y-%m") AS month, COUNT(id) AS count
        FROM bandes
        GROUP BY month
        ORDER BY month ASC
    ';

    $resultStatement = $connection->executeQuery($sql);
    return $resultStatement->fetchAllAssociative(); // Ou fetchAllNumeric() en fonction de la structure des résultats
}
}
