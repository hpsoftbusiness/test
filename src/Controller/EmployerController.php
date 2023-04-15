<?php

namespace App\Controller;

use App\Repository\JobCreationRepository;
use App\Repository\JobPostRepository;
use App\Repository\JobSubscriptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployerController extends AbstractController
{

    public function trial()
    {
        return $this->render('employer/trial.html.twig');
    }

    /**
     * @param JobPostRepository $jobDetailRepository
     * @param Request $request
     * @return Response
     */
    public function create(JobPostRepository $jobPostRepository, Request $request, JobCreationRepository $jobCreationRepository): Response
    {
        $category = $request->get(  'category');
        $technology = $request->get(  'technology');
        $price = $request->get(  'price');
        $description = $request->get(  'description');
        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $scope = $request->get(  'scope');
        $skills = $request->get('skills');
        $location = $request->get('location');
        $time = $request->get('time');

        $jobPostRepository->sendSmsEmployer($phone);
        $jobPostRepository->sendEmployerMail($email, $name);

        $id = $jobPostRepository->createJob($category, $technology, $price, $description, $name, $email, $phone, $scope, $skills, $location, $time);
        $jobCreationRepository->createCreationEntry($id, $name, $email, $phone);
        return new Response();
    }


}