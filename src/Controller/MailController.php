<?php

namespace App\Controller;

use App\Repository\JobCreationRepository;
use App\Repository\JobPostRepository;
use App\Repository\JobSubscriptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MailController extends AbstractController
{

    public function mailConfirmationWorker(JobSubscriptionRepository $jobSubscriptionRepository, Request $request): Response
    {
        $id = $request->get('id');
        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');

     //   $jobSubscriptionRepository->sendSmsWorker($phone);


        $message = $jobSubscriptionRepository->subscribeForJob($id, $name, $email, $phone);
        $response = new Response();
        $response->setContent(json_encode($message));

        return $response;
    }

    /**
     * @param JobPostRepository $jobDetailRepository
     * @param Request $request
     * @return Response
     */
    public function mailConfirmationEmployer(JobSubscriptionRepository  $jobSubscriptionRepository,JobPostRepository $jobDetailRepository, Request $request, JobCreationRepository $jobCreationRepository): Response
    {
        $category = $request->get(  'category');
        $technology = $request->get(  'technology');
        $price = $request->get(  'price');
        $scope = $request->get(  'scope');
        $description = $request->get(  'description');
        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $skills = $request->get('skills');

   //     $jobSubscriptionRepository->sendSmsEmployer($phone);

        $id = $jobDetailRepository->saveJobPost($category, $technology, $price, $description, $name, $email, $phone, $scope, $skills);
        $jobCreationRepository->createJob($id, $name, $email, $phone);
        $response = new Response();
        $response->setContent(json_encode($id));

        return $response;
    }
}