<?php

namespace App\Repository;

use App\Entity\JobDetail;
use App\Entity\JobPost;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use PHPMailer\PHPMailer\PHPMailer;

/**
 * @extends ServiceEntityRepository<JobPost>
 *
 * @method JobPost|null find($id, $lockMode = null, $lockVersion = null)
 * @method JobPost|null findOneBy(array $criteria, array $orderBy = null)
 * @method JobPost[]    findAll()
 * @method JobPost[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JobPostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JobPost::class);
    }

    public function add(JobPost $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(JobPost $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getPost($id)
    {
        return $this->getEntityManager()->getRepository(JobPost::class)->findOneBy(['id' => $id]);
    }

    public function createJob($category, $technology, $price, $description, $name, $email, $phone, $scope, $skills, $location, $time, $filename)
    {
        $jobPost = new JobPost();
        $jobPost->setTechnology($technology);
        $jobPost->setCategory($category);
        $jobPost->setPrice((int)$price);
        $jobPost->setLocation($location);
        $jobPost->setScope($scope);
        $jobPost->setReservation(0);
        $jobPost->setSkills($skills);
        $jobPost->setExecutionTime($time);

        $this->getEntityManager()->persist($jobPost);
        $this->getEntityManager()->flush();

        $found = $this->getEntityManager()->getRepository(JobPost::class)->findOneBy(['scope' => $scope]);
        $id = $found->getId();

        $jobDetail = new JobDetail();
        $jobDetail->setDescription(nl2br($description));
        $jobDetail->setJobPostId($id);
        $jobDetail->setDifficulty(2);
        $jobDetail->setFileName($filename);

        $this->getEntityManager()->persist($jobDetail);
        $this->getEntityManager()->flush();

        return $id;
    }

    public function sendEmployerMail($email, $name)
    {
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
        } else {
            echo "Email sent successfully";
        }

        header("Location: http://itnuke.pl");
        die();
    }

    public function sendSmsEmployer($phone)
    {
        $token = "Zbwe2FylhDsbnan5cetcOXKqmdQmE2FyzRaPS71J"; //https://ssl.smsapi.pl/react/oauth/manage

        $params = array(
            'to' => $phone, //numery odbiorców rozdzielone przecinkami
            'from' => 'Test', //pole nadawcy stworzone w https://ssl.smsapi.pl/sms_settings/sendernames
            'message' => "Oferta dodana.", //treść wiadomości
            'format' => 'json'
        );

        $this->sms_send($params, $token);
    }

    public function sms_send($params, $token, $backup = false)
    {

        static $content;

        if ($backup == true) {
            $url = 'https://api2.smsapi.pl/sms.do';
        } else {
            $url = 'https://api.smsapi.pl/sms.do';
        }

        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $url);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $params);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer $token"
        ));

        $content = curl_exec($c);
        $http_status = curl_getinfo($c, CURLINFO_HTTP_CODE);

        if ($http_status != 200 && $backup == false) {
            $backup = true;
            $this->sms_send($params, $token, $backup);
        }

        curl_close($c);
        return $content;
    }

    public function uploadFile($files)
    {
        $currentDirectory = getcwd();
        $uploadDirectory = "/";
        $errors = [];

        $fileName = $files['uploadedFile']['name'];
        $fileTmpName  = $files['uploadedFile']['tmp_name'];
        $uploadPath = $currentDirectory . $uploadDirectory . basename($fileName);
        move_uploaded_file($fileTmpName, $uploadPath);

        return $fileName;
    }

}
