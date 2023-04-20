<?php

namespace App\Controller;

use App\Entity\JobPost;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use OpenApi\Annotations as OA;

use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/api", name="api_")
 */

class JobsController extends AbstractController
{
    /**
     * @Route("/job", name="job_index", methods={"GET"})
     * @OA\Get(
     *     path="/api/job",
     *     @OA\Response(response="200", description="Get list of all job posts.")
     * )
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
     * @OA\Post(
     *     path="/api/job",
     *     @OA\Response(response="200", description="Post new job"),
     *     @OA\Parameter(ref="#/components/parameters/category"),
     *     @OA\Parameter(ref="#/components/parameters/technology"),
     *     @OA\Parameter(ref="#/components/parameters/price"),
     *     @OA\Parameter(ref="#/components/parameters/skills"),
     *     @OA\Parameter(ref="#/components/parameters/scope"),
     *     @OA\Parameter(ref="#/components/parameters/location"),
     *     @OA\Parameter(ref="#/components/parameters/reservation"),
     *     @OA\Parameter(ref="#/components/parameters/executionTime")
     * )
     * @OA\Parameter(
     *   parameter="category",
     *   name="category",
     *   description="category of post like programowanie, grafika, wsparcie",
     *   @OA\Schema(
     *     type="string"
     *   ),
     *   in="query",
     *   required=true
     * )
     * @OA\Parameter(
     *   parameter="technology",
     *   name="technology",
     *   description="technology of work like php",
     *   @OA\Schema(
     *     type="string"
     *   ),
     *   in="query",
     *   required=true
     * )
     * @OA\Parameter(
     *   parameter="price",
     *   name="price",
     *   description="overall price of task ex 400",
     *   @OA\Schema(
     *     type="int"
     *   ),
     *   in="query",
     *   required=true
     * )
     * @OA\Parameter(
     *   parameter="skills",
     *   name="skills",
     *   description="skills needed in task like laravel",
     *   @OA\Schema(
     *     type="string"
     *   ),
     *   in="query",
     *   required=true
     * )
     * @OA\Parameter(
     *   parameter="scope",
     *   name="scope",
     *   description="overall scope of work",
     *   @OA\Schema(
     *     type="string"
     *   ),
     *   in="query",
     *   required=true
     * )
     *  @OA\Parameter(
     *   parameter="location",
     *   name="location",
     *   description="location like warszawa",
     *   @OA\Schema(
     *     type="string"
     *   ),
     *   in="query",
     *   required=true
     * )
     * @OA\Parameter(
     *   parameter="executionTime",
     *   name="executionTime",
     *   description="time needed to performed task",
     *   @OA\Schema(
     *     type="string"
     *   ),
     *   in="query",
     *   required=true
     * )
     * @OA\Parameter(
     *   parameter="reservation",
     *   name="reservation",
     *   description="reservation in advance",
     *   @OA\Schema(
     *     type="int"
     *   ),
     *   in="query",
     *   required=true
     * )
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
     * @OA\Get(
     *     path="/api/job{id)",
     *     @OA\Response(response="200", description="Show perticular job post by its id."),
     *     @OA\Parameter(ref="#/components/parameters/id")
     * )
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
     * @OA\Put(
     *     path="/api/job",
     *     @OA\Response(response="200", description="Edit articular job post by its id."),
     *     @OA\Parameter(ref="#/components/parameters/category"),
     *     @OA\Parameter(ref="#/components/parameters/technology"),
     *     @OA\Parameter(ref="#/components/parameters/price"),
     *     @OA\Parameter(ref="#/components/parameters/skills"),
     *     @OA\Parameter(ref="#/components/parameters/scope"),
     *     @OA\Parameter(ref="#/components/parameters/location"),
     *     @OA\Parameter(ref="#/components/parameters/reservation"),
     *     @OA\Parameter(ref="#/components/parameters/executionTime")
     * )
     * )
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
     * @OA\Delete(
     *     path="/api/job",
     *     @OA\Response(response="200", description="Delete of particular job post by its id."),
     *     @OA\Parameter(ref="#/components/parameters/id")
     * )
     * @OA\Parameter(
     *   parameter="id",
     *   name="id",
     *   description="id of post",
     *   @OA\Schema(
     *     type="int"
     *   ),
     *   in="query",
     *   required=true
     * )
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