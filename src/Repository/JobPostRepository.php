<?php

namespace App\Repository;

use App\Entity\JobDetail;
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

    public function getPaginatedResultsCategory(string $page, string $search)
    {
        $developers = $this->getEntityManager()->getRepository(JobPost::class);
        $query = $developers->createQueryBuilder('u')
            ->where('u.category LIKE :cat')
            ->setParameter('cat', $search)
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

    public function getPaginatedResultsTechnology(string $page, string $search)
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

    public function getPost($id)
    {
        return $this->getEntityManager()->getRepository(JobPost::class)->findOneBy(['id' => $id]);
    }

    /**
     * @param string $category
     * @param string $technology
     * @param string $price
     * @param string $description
     * @param string $name
     * @param string $email
     * @param string $phone
     * @param string $scope
     *
     * @return int|null
     */
    public function saveJobPost(string $category, string $technology, string $price, string $description, string $name, string $email, string $phone, string $scope, string $skills)
    {
        $jobPost = new JobPost();
        $jobPost->setTechnology($technology);
        $jobPost->setCategory($category);
        $jobPost->setPrice((int)$price);
        $jobPost->setScope($scope);
        $jobPost->setReservation(0);
        $jobPost->setSkills($skills);
        $jobPost->setExecutionTime(10);

        $this->getEntityManager()->persist($jobPost);
        $this->getEntityManager()->flush();

        $found = $this->getEntityManager()->getRepository(JobPost::class)->findOneBy(['scope' => $scope]);
        $id = $found->getId();

        $jobDetail = new JobDetail();
        $jobDetail->setDescription($description);
        $jobDetail->setJobPostId($id);
        $jobDetail->setDifficulty(2);

        $this->getEntityManager()->persist($jobDetail);
        $this->getEntityManager()->flush();

        return $id;
    }
}
