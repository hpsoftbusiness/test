<?php

namespace App\Repository;

use App\Entity\JobCreation;
use App\Entity\JobSubscription;
use DateTime;
use DateTimeZone;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<JobCreation>
 *
 * @method JobCreation|null find($id, $lockMode = null, $lockVersion = null)
 * @method JobCreation|null findOneBy(array $criteria, array $orderBy = null)
 * @method JobCreation[]    findAll()
 * @method JobCreation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JobCreationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JobCreation::class);
    }

    public function save(JobCreation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(JobCreation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @param int $jobPost
     *
     * @return string
     */
    public function createJob(int $jobPost, $name, $email, $phone)
    {
        $jobSubscription = new JobCreation();
        $jobSubscription->setJobPostId($jobPost);
        $jobSubscription->setWorkerId(2);
        $jobSubscription->setName($name);
        $jobSubscription->setEmail($email);
        $jobSubscription->setPhone($phone);
        $now = new DateTime('now', new DateTimeZone('Europe/Berlin'));
        $jobSubscription->setTime($now);

        $this->getEntityManager()->persist($jobSubscription);
        $this->getEntityManager()->flush();

        return 'true';
    }

//    /**
//     * @return JobCreation[] Returns an array of JobCreation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('j')
//            ->andWhere('j.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('j.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?JobCreation
//    {
//        return $this->createQueryBuilder('j')
//            ->andWhere('j.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
