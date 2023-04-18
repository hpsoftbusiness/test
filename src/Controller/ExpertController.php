<?php

namespace App\Controller;

use App\Repository\JobCreationRepository;
use App\Repository\JobDetailRepository;
use App\Repository\JobPostRepository;
use App\Repository\JobSearch;
use App\Repository\JobSubscriptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ExpertController extends AbstractController
{
    public function detail(Request $request, JobDetailRepository $jobDetailRepository, JobPostRepository $jobPostRepository): Response
    {
        $id = $_GET['id'];
        $difficulty = $jobDetailRepository->getDetail($id)->getDifficulty();
        $detail = $jobDetailRepository->getDetail($id)->getDescription();
        $file = $jobDetailRepository->getDetail($id)->getFileName();

        $post = $jobPostRepository->getPost($id);

        return $this->render('expert/detail.html.twig', [ 'file' => $file, 'detail' => $detail, 'post' => $post, 'difficulty' => $difficulty]);
    }

    public function subscribe(JobSubscriptionRepository $jobSubscriptionRepository, Request $request, JobCreationRepository $jobCreationRepository, JobDetailRepository $jobDetailRepository, JobPostRepository $jobPostRepository): Response
    {
        $id = $request->get('id');
        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $data = $jobSubscriptionRepository->getDataForSubscriber($id,  $jobCreationRepository,  $jobDetailRepository);
        $jobSubscriptionRepository->subscribeForJob($id, $name, $email, $phone, $jobPostRepository);
        $jobSubscriptionRepository->sendSmsWorker($phone);
        $jobSubscriptionRepository->sendSubscriptionMail($email, $name, $data);

        return new Response();
    }

    /**
     * @param Request $request
     * @param JobPostRepository $jobSearchRepo
     *
     * @return Response
     */
    public function search(Request $request): Response
    {
        $page = $request->get('page') ?? 1;
        $search = $request->get('search');
        $category = $request->get('category');
        $technology = $request->get('technology');

        $jobSearchRepo = new JobSearch($this->getDoctrine()->getManager());
        $post = [];

        if ($request->isMethod('POST')) {
            if ($technology != '') {
                $pagination = $jobSearchRepo->getPaginatedResultsTechnology($page, $technology);
            } elseif ($category != '') {
                $pagination = $jobSearchRepo->getPaginatedResultsCategory($page, $category);

            } elseif ($search != '') {
                $pagination = $jobSearchRepo->getPaginatedResults($page, $search);
            }

            $post = $pagination->getPost();
            $page = $pagination->getPage();
        }

        return $this->render('search/search.html.twig', ['posts' => $post, 'search' => $search, 'page' => $page]);
    }
}