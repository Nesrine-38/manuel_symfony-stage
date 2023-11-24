<?php

namespace App\Repository;

use App\Entity\Possession;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Possession>
 *
 * @method Possession|null find($id, $lockMode = null, $lockVersion = null)
 * @method Possession|null findOneBy(array $criteria, array $orderBy = null)
 * @method Possession[]    findAll()
 * @method Possession[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PossessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Possession::class);
    }

//    /**
//     * @return Possession[] Returns an array of Possession objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Possession
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
