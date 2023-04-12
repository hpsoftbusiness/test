<?php

namespace App\Repository;

use App\Entity\JobPost;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<JobPost>
 *
 * @method JobPost|null find($id, $lockMode = null, $lockVersion = null)
 * @method JobPost|null findOneBy(array $criteria, array $orderBy = null)
 * @method JobPost[]    findAll()
 * @method JobPost[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JobPostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JobPost::class);
    }

    public function add(JobPost $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(JobPost $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getPaginatedResults(string $page, string $search)
    {
        $developers = $this->getEntityManager()->getRepository(JobPost::class);
        $query = $developers->createQueryBuilder('u')
            ->where('u.technology LIKE :tech')
            ->setParameter('tech', $search)
            ->orderBy('u.scope', 'ASC')
            ->getQuery();

        $post = [];
        $pageSize = 10;
        $paginator = new Paginator($query);
        $totalItems = count($paginator);

        $pagesCount = ceil($totalItems / $pageSize);

        $paginator
            ->getQuery()
            ->setFirstResult($pageSize * ((int)$page - 1))
            ->setMaxResults($pageSize);

        foreach ($paginator as $pageItem) {
            $post[] = $pageItem;
        }

        $pagination = new Pagination();
        $pagination->setPost($post);
        $pagination->setPage($pagesCount);

        return $pagination;
    }

//    /**
//     * @return JobPost[] Returns an array of JobPost objects
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

//    public function findOneBySomeField($value): ?JobPost
//    {
//        return $this->createQueryBuilder('j')
//            ->andWhere('j.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

    public function getPost($id)
    {
        return $this->getEntityManager()->getRepository(JobPost::class)->findOneBy(['id' => $id]);
    }
}
