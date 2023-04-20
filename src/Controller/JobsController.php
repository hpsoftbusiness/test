<?php

namespace App\Controller;

use App\Entity\JobPost;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/api", name="api_")
 */

class JobsController extends AbstractController
{
    /**
     * @Route("/job", name="project_index", methods={"GET"})
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $posts = $doctrine
            ->getRepository(JobPost::class)
            ->findAll();

        $data = [];

        foreach ($posts as $post) {
            $data[] = [
                'id' => $post->getId(),
                'scope' => $post->getScope(),
                'technology' => $post->getTechnology(),
                'category' => $post->getCategory(),
                'price' => $post->getPrice(),
                'location' => $post->getLocation(),
                'executionTime' => $post->getExecutionTime(),
                'skills' => $post->getSkills(),
                'reservation' => $post->getReservation()
            ];
        }

        return $this->json($data);
    }


    /**
     * @Route("/job", name="job_new", methods={"POST"})
     */
    public function new(ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();

        $post = new JobPost();
        $post->setScope($request->request->get('scope'));
        $post->setPrice($request->request->get('price'));
        $post->setCategory($request->request->get('category'));
        $post->setTechnology($request->request->get('technology'));
        $post->setExecutionTime($request->request->get('executionTime'));
        $post->setLocation($request->request->get('location'));
        $post->setReservation(0);
        $post->setSkills($request->request->get('skills'));

        $entityManager->persist($post);
        $entityManager->flush();

        return $this->json('Created new job post successfully with id ' . $post->getId());
    }

    /**
     * @Route("/job/{id}", name="job_show", methods={"GET"})
     */
    public function show(ManagerRegistry $doctrine, int $id): Response
    {
        $post = $doctrine->getRepository(JobPost::class)->find($id);

        if (!$post) {

            return $this->json('No job found for id' . $id, 404);
        }

        $data =  [
            'id' => $post->getId(),
            'scope' => $post->getScope(),
            'technology' => $post->getTechnology(),
            'category' => $post->getCategory(),
            'price' => $post->getPrice(),
            'location' => $post->getLocation(),
            'executionTime' => $post->getExecutionTime(),
            'reservation' => $post->getReservation(),
            'skills' => $post->getSkills()
        ];

        return $this->json($data);
    }

    /**
     * @Route("/job/{id}", name="job_edit", methods={"PUT"})
     */
    public function edit(ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $post = $entityManager->getRepository(JobPost::class)->findOneBy(['id' => $id]);

        if (!$post) {
            return $this->json('No job post found for id' . $id, 404);
        }

        $post->setScope($request->request->get('scope'));
        $post->setTechnology($request->request->get('technology'));
        $post->setCategory($request->request->get('category'));
        $post->setPrice($request->request->get('price'));
        $post->setLocation($request->request->get('location'));
        $post->setReservation($request->request->get('reservation'));
        $post->setSkills($request->request->get('skills'));
        $post->setExecutionTime($request->request->get('executionTime'));

        $entityManager->persist($post);
        $entityManager->flush();

        $data =  [
            'id' => $post->getId(),
            'scope' => $post->getScope(),
            'technology' => $post->getTechnology(),
            'category' => $post->getCategory(),
            'price' => $post->getPrice(),
            'location' => $post->getLocation(),
            'executionTime' => $post->getExecutionTime(),
            'skills' => $post->getSkills()
        ];

        return $this->json($data);
    }

    /**
     * @Route("/job/{id}", name="job_delete", methods={"DELETE"})
     */
    public function delete(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $project = $entityManager->getRepository(JobPost::class)->find($id);

        if (!$project) {
            return $this->json('No job found for id' . $id, 404);
        }

        $entityManager->remove($project);
        $entityManager->flush();

        return $this->json('Deleted a job successfully with id ' . $id);
    }
}