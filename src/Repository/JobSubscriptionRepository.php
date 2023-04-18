<?php

namespace App\Repository;

use App\Entity\JobSubscription;
use DateTime;
use DateTimeZone;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use PHPMailer\PHPMailer\PHPMailer;

/**
 * @extends ServiceEntityRepository<JobSubscription>
 *
 * @method JobSubscription|null find($id, $lockMode = null, $lockVersion = null)
 * @method JobSubscription|null findOneBy(array $criteria, array $orderBy = null)
 * @method JobSubscription[]    findAll()
 * @method JobSubscription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JobSubscriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JobSubscription::class);
    }

    public function save(JobSubscription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(JobSubscription $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }


    public function subscribeForJob($jobPost, $name, $email, $phone, JobPostRepository $jobPostRepository)
    {
        $jobSubscription = new JobSubscription();
        $jobSubscription->setJobPostId($jobPost);
        $jobSubscription->setWorkerId(2);
        $jobSubscription->setName($name);
        $jobSubscription->setEmail($email);
        $jobSubscription->setPhone($phone);
        $now = new DateTime('now', new DateTimeZone('Europe/Berlin'));
        $jobSubscription->setTime($now);

        $this->getEntityManager()->persist($jobSubscription);
        $this->getEntityManager()->flush();

        $found = $jobPostRepository->findOneBy(['id' => $jobPost]);
        $found->setReservation(1);


        $this->getEntityManager()->persist($found);
        $this->getEntityManager()->flush();

        return 'true';
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

    public function sendSmsWorker($phone)
    {
        $token = "Zbwe2FylhDsbnan5cetcOXKqmdQmE2FyzRaPS71J"; //https://ssl.smsapi.pl/react/oauth/manage

        $params = array(
            'to' => $phone, //numery odbiorców rozdzielone przecinkami
            'from' => 'Test', //pole nadawcy stworzone w https://ssl.smsapi.pl/sms_settings/sendernames
            'message' => "Zapis udany. Skontaktuj sie ze swoim zleceniodawca.", //treść wiadomości
            'format' => 'json'
        );

         $this->sms_send($params, $token);

    }

    public function getDataForSubscriber($id, JobCreationRepository $jobCreationRepository, JobDetailRepository $jobDetailRepository)
    {
       $jobCreation = $jobCreationRepository->findOneBy(['jobPostId' => $id]);
       $email = $jobCreation->getEmail();
       $phone = $jobCreation->getPhone();

       $jobDetail = $jobDetailRepository->findOneBy(['jobPostId' => $id]);
       $description = $jobDetail->getDescription();

        $result = [];
        $result['email'] = $email;
        $result['phone'] = $phone;
        $result['description'] = $description;

        return $result;
    }

    public function sendSubscriptionMail($email, $name, $data)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = "smtp";
        $mail->CharSet = "UTF-8";
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
        $content = '<b>Zapisales sie na zlecenie, email: ' .  $data['email'] . ', telefon:'. $data['phone'] . ', opis:'. $data['description'] . '. Skontaktuj sie ze zleceniodawca w celu dalszych szczegolow</b>';

        $mail->MsgHTML($content);
        if(!$mail->Send()) {
            echo "Error while sending Email.";
            var_dump($mail);
        } else {
            echo "Email sent successfully";
        }
    }
}
