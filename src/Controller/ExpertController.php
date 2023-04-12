<?php

namespace App\Controller;

use App\Repository\JobDetailRepository;
use App\Repository\JobPostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ExpertController extends AbstractController
{
    public function detail(Request $request, JobDetailRepository $jobDetailRepository, JobPostRepository $jobPostRepository): Response
    {
        $id = $_GET['id'];
        $detail = $jobDetailRepository->getDetail($id);
        $post = $jobPostRepository->getPost($id);

        return $this->render('expert/detail.html.twig', [ 'detail' => $detail, 'post' => $post]);
    }
}