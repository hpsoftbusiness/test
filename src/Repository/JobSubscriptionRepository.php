<?php

namespace App\Repository;

use App\Entity\JobCreation;
use App\Entity\JobDetail;
use App\Entity\JobSubscription;
use DateTime;
use DateTimeZone;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

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
            'message' => "Zapis udany.", //treść wiadomości
            'format' => 'json'
        );

        echo $this->sms_send($params, $token);

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

        echo $this->sms_send($params, $token);
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
}
