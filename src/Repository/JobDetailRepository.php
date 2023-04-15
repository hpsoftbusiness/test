<?php

namespace App\Repository;

use App\Entity\JobDetail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<JobDetail>
 *
 * @method JobDetail|null find($id, $lockMode = null, $lockVersion = null)
 * @method JobDetail|null findOneBy(array $criteria, array $orderBy = null)
 * @method JobDetail[]    findAll()
 * @method JobDetail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JobDetailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JobDetail::class);
    }

    public function add(JobDetail $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(JobDetail $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getDetail(int $id)
    {
        return $this->getEntityManager()->getRepository(JobDetail::class)->findOneBy(['jobPostId' => $id]);


    }
}
