<?php

namespace App\Controller;

use App\Repository\JobCreationRepository;
use App\Repository\JobPostRepository;
use App\Repository\JobSubscriptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twilio\Rest;

class MailController extends AbstractController
{
    public function mailConfirmationWorker(JobSubscriptionRepository $jobSubscriptionRepository, Request $request): Response
    {
        $id = $request->get('id');
        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');

        $sid = "AC4db3c5c0f4ef2dcf7860724d6d9b0d34"; // Your Account SID from https://console.twilio.com
        $token = "de439f87afa15a97c2c9a772b8b1f19e"; // Your Auth Token from https://console.twilio.com
        $client = new \Twilio\Rest\Client($sid, $token);

        $client->messages->create(
            '+48531730179',
            [
                'from' => '+15075026610',
                'body' => "test itnuke"
            ]
        );


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
    public function mailConfirmationEmployer(JobPostRepository $jobDetailRepository, Request $request, JobCreationRepository $jobCreationRepository): Response
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

        $id = $jobDetailRepository->saveJobPost($category, $technology, $price, $description, $name, $email, $phone, $scope, $skills);
        $jobCreationRepository->createJob($id, $name, $email, $phone);
        $response = new Response();
        $response->setContent(json_encode($id));

        return $response;
    }
}