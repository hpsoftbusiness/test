<?php

namespace App\Controller;

use App\Entity\JobPost;
use App\Entity\User;
use App\Repository\JobCreationRepository;
use App\Repository\JobPostRepository;
use App\Repository\JobSubscriptionRepository;
use App\Repository\Pagination;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployerController extends AbstractController
{
    public function job(UserRepository $user): Response
    {
        return $this->render('employer/job.html.twig');
    }

    /**
     * @param JobPostRepository $jobDetailRepository
     * @param Request $request
     * @return Response
     */
    public function create(JobPostRepository $jobPostRepository, Request $request, JobCreationRepository $jobCreationRepository): Response
    {
        $currentDirectory = getcwd();
        $uploadDirectory = "/";
        $errors = [];

        $fileName = $_FILES['uploadedFile']['name'];
        $fileTmpName  = $_FILES['uploadedFile']['tmp_name'];
        $uploadPath = $currentDirectory . $uploadDirectory . basename($fileName);
        move_uploaded_file($fileTmpName, $uploadPath);

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

        $id = $jobPostRepository->createJob($category, $technology, $price, $description, $name, $email, $phone, $scope, $skills, $location, $time, $fileName);
        $jobCreationRepository->createCreationEntry($id, $name, $email, $phone);

        $jobPostRepository->sendSmsEmployer($phone);
        $jobPostRepository->sendEmployerMail($email, $name);

        return new Response();
    }


}