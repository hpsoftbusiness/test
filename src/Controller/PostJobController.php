<?php

namespace App\Controller;

use App\Repository\JobPostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PostJobController extends AbstractController
{
    /**
     * @param Request $request
     * @param JobPostRepository $jobPostRepository
     *
     * @return Response
     */
    public function  postJob(Request $request, JobPostRepository $jobPostRepository): Response
    {
        $page = $request->get('page') ?? 1;
        $search = $request->get('search');

        $post = [];

        if ($request->isMethod('POST')) {
            $pagination = $jobPostRepository->getPaginatedResults($page, $search);
           $post = $pagination->getPost();
           $page = $pagination->getPage();
        }

        return $this->render('postJob/postJob.html.twig', ['posts' => $post, 'search' => $search, 'page' => $page]);
    }

}