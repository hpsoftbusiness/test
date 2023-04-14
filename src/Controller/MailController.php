<?php

namespace App\Controller;

use App\Repository\JobCreationRepository;
use App\Repository\JobDetailRepository;
use App\Repository\JobPostRepository;
use App\Repository\JobSubscriptionRepository;
use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MailController extends AbstractController
{
    public function mailConfirmationWorker(JobSubscriptionRepository $jobSubscriptionRepository, Request $request, JobCreationRepository $jobCreationRepository, JobDetailRepository $jobDetailRepository): Response
    {
        $id = $request->get('id');
        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $data = $jobSubscriptionRepository->getDataForSubscriber($id,  $jobCreationRepository,  $jobDetailRepository);
        $jobSubscriptionRepository->sendSmsWorker($phone);
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = "smtp";
        $mail->SMTPDebug  = 1;
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "smtp-relay.sendinblue.com";
        $mail->Username   = "polisoftbusiness@gmail.com";
        $mail->Password   = "gs0JWOQ9EkzHAhym";

        $mail->IsHTML(true);
        $mail->AddAddress($email, $name);
        $mail->SetFrom("polisoftbusiness@gmail.com", "Polisoft");
        $mail->AddReplyTo("polisoftbusiness@gmail.com", "Polisoft");
        $mail->AddCC("polisoftbusiness@gmail.com", "Polisoft");
        $mail->Subject = "Potwierdzenie zapisania sie na zlecenie";
        $content = '<b>Zapisales sie na zlecenie, email: ' .  $data['email'] . ', telefon:'. $data['phone'] . ', opis:'. $data['description'] .'</b>';

        $mail->MsgHTML($content);
        if(!$mail->Send()) {
            echo "Error while sending Email.";
            var_dump($mail);
        } else {
            echo "Email sent successfully";
        }

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

        $jobSubscriptionRepository->sendSmsEmployer($phone);
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = "smtp";
        $mail->SMTPDebug  = 1;
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "smtp-relay.sendinblue.com";
        $mail->Username   = "polisoftbusiness@gmail.com";
        $mail->Password   = "gs0JWOQ9EkzHAhym";

        $mail->IsHTML(true);
        $mail->AddAddress($email, $name);
        $mail->SetFrom("polisoftbusiness@gmail.com", "Polisoft");
        $mail->AddReplyTo("polisoftbusiness@gmail.com", "Polisoft");
        $mail->AddCC("polisoftbusiness@gmail.com", "Polisoft");
        $mail->Subject = "Potwierdzenie zamieszczenia ogloszenia.";
        $content = "<b>Twoje ogloszenie zostalo zamieszczone. Dziekujemy :)</b>";

        $mail->MsgHTML($content);
        if(!$mail->Send()) {
            echo "Error while sending Email.";
            var_dump($mail);
        } else {
            echo "Email sent successfully";
        }


        $id = $jobDetailRepository->saveJobPost($category, $technology, $price, $description, $name, $email, $phone, $scope, $skills);
        $jobCreationRepository->createJob($id, $name, $email, $phone);
        $response = new Response();
        $response->setContent(json_encode($id));

        return $response;
    }
}