<?php

namespace App\Repository;

use App\Entity\PictureDefault;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PictureDefault|null find($id, $lockMode = null, $lockVersion = null)
 * @method PictureDefault|null findOneBy(array $criteria, array $orderBy = null)
 * @method PictureDefault[]    findAll()
 * @method PictureDefault[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PictureDefaultRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PictureDefault::class);
    }

    // /**
    //  * @return PictureDefault[] Returns an array of PictureDefault objects
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
    public function findOneBySomeField($value): ?PictureDefault
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
