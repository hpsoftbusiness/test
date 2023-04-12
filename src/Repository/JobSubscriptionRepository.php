<?php

namespace App\Repository;

use App\Entity\JobSubscription;
use DateTime;
use DateTimeZone;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<JobSubscription>
 *
 * @method JobSubscription|null find($id, $lockMode = null, $lockVersion = null)
 * @method JobSubscription|null findOneBy(array $criteria, array $orderBy = null)
 * @method JobSubscription[]    findAll()
 * @method JobSubscription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JobSubscriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JobSubscription::class);
    }

    public function save(JobSubscription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(JobSubscription $entity, bool $flush = false): void
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
    public function subscribeForJob(int $jobPost, $name, $email, $phone)
    {
        $jobSubscription = new JobSubscription();
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
}
