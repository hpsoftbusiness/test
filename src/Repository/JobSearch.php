<?php

namespace App\Repository;

use App\Entity\JobPost;
use Doctrine\ORM\Tools\Pagination\Paginator;

class JobSearch
{
    public $doctrine;

    public function __construct($doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function getPaginatedResults(string $page, string $search)
    {
        $developers = $this->doctrine->getRepository(JobPost::class);
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
        $developers = $this->doctrine->getRepository(JobPost::class);
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
        $developers = $this->doctrine->getRepository(JobPost::class);
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
}