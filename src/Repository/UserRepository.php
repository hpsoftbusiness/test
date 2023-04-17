<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<User>
 *
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function add(User $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(User $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function canAccess()
    {
        $user = $this->getEntityManager()->getRepository(User::class)->findOneBy(['ip' => $_SERVER['REMOTE_ADDR']]) ;

        if ($user != NULL) {
            if ($user->getIp() ?? '' == $_SERVER['REMOTE_ADDR']) {
                return false;
            }
        }

        return true;
    }

    public function hasLimit()
    {
        $user = $this->getEntityManager()->getRepository(User::class)->findOneBy(['ip' => $_SERVER['REMOTE_ADDR']]) ;

        if ($user != NULL) {
            if ($user->getLimiter() > 0) {
                return true;
            }
        }

        return false;
    }

    public function decreaseLimit()
    {
        $user = $this->getEntityManager()->getRepository(User::class)->findOneBy(['ip' => $_SERVER['REMOTE_ADDR']]) ;

        if ($user != NULL) {
            $limit = $user->getLimiter() - 1;
            $user->setLimiter($limit);
            $this->getEntityManager()->persist($user);
            $this->getEntityManager()->flush();
        }
    }

    public function create()
    {
        $user = new User();
        $user->setIp($_SERVER['REMOTE_ADDR']);
        $user->setUsed(1);
        $limit = 0;
        $user->setLimiter($limit);
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }
}
