<?php

namespace App\Entity;

use App\Repository\JobPostRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JobPostRepository::class)
 */
class JobPost
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $technology;

    /**
     * @ORM\Column(type="integer")
     */
    private $executionTime;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $scope;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $skills;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getTechnology()
    {
        return $this->technology;
    }

    /**
     * @param mixed $technology
     */
    public function setTechnology($technology): void
    {
        $this->technology = $technology;
    }

    /**
     * @return mixed
     */
    public function getExecutionTime()
    {
        return $this->executionTime;
    }

    /**
     * @param mixed $executionTime
     */
    public function setExecutionTime($executionTime): void
    {
        $this->executionTime = $executionTime;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param mixed $scope
     */
    public function setScope($scope): void
    {
        $this->scope = $scope;
    }

    /**
     * @return mixed
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param mixed $skills
     */
    public function setSkills($skills): void
    {
        $this->skills = $skills;
    }


    /**
     * @ORM\Column(type="integer")
     */
    private $reservation;

    /**
     * @return mixed
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * @param mixed $reservation
     */
    public function setReservation($reservation): void
    {
        $this->reservation = $reservation;
    }

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $location;

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location): void
    {
        $this->location = $location;
    }


}
