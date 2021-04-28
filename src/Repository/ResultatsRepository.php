<?php

namespace App\Repository;

use App\Entity\Resultats;
use App\Entity\Reponses;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Resultats|null find($id, $lockMode = null, $lockVersion = null)
 * @method Resultats|null findOneBy(array $criteria, array $orderBy = null)
 * @method Resultats[]    findAll()
 * @method Resultats[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResultatsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Resultats::class);
    }

    public function haveAlreadyAnswered(int $questionId, string $ip){
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT q
            FROM App\Entity\Reponses q
            INNER JOIN App\Entity\Resultats a WITH a.reponse = q.id
            WHERE q.questions = :question AND a.userIp = :ip'
        )
        ->setParameter('question', $questionId)
        ->setParameter('ip', $ip);

        return count($query->getResult()) > 0;
    }


    // /**
    //  * @return Resultats[] Returns an array of Resultats objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Resultats
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
