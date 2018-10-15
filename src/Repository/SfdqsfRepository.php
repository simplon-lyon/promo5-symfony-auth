<?php

namespace App\Repository;

use App\Entity\Sfdqsf;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Sfdqsf|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sfdqsf|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sfdqsf[]    findAll()
 * @method Sfdqsf[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SfdqsfRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Sfdqsf::class);
    }

//    /**
//     * @return Sfdqsf[] Returns an array of Sfdqsf objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Sfdqsf
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
