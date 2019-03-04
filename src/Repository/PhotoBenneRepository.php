<?php

namespace App\Repository;

use App\Entity\PhotoBenne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PhotoBenne|null find($id, $lockMode = null, $lockVersion = null)
 * @method PhotoBenne|null findOneBy(array $criteria, array $orderBy = null)
 * @method PhotoBenne[]    findAll()
 * @method PhotoBenne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhotoBenneRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PhotoBenne::class);
    }

    // /**
    //  * @return PhotoBenne[] Returns an array of PhotoBenne objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PhotoBenne
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
