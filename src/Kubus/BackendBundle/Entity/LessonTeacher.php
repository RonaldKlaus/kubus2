<?php

namespace Kubus\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LessonTeacher
 */
class LessonTeacher
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $personId;

    /**
     * @var integer
     */
    private $lessonId;

    /**
     * @var integer
     */
    private $fee;

    /**
     * @var integer
     */
    private $hours;

    /**
     * @var string
     */
    private $number;

    /**
     * @var integer
     */
    private $year;

    /**
     * @var integer
     */
    private $planedHours;

    /**
     * @var string
     */
    private $agreements;

    /**
     * @var integer
     */
    private $travelCosts;

    /**
     * @var string
     */
    private $accommodationExpenses;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set personId
     *
     * @param integer $personId
     * @return LessonTeacher
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;
    
        return $this;
    }

    /**
     * Get personId
     *
     * @return integer 
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * Set lessonId
     *
     * @param integer $lessonId
     * @return LessonTeacher
     */
    public function setLessonId($lessonId)
    {
        $this->lessonId = $lessonId;
    
        return $this;
    }

    /**
     * Get lessonId
     *
     * @return integer 
     */
    public function getLessonId()
    {
        return $this->lessonId;
    }

    /**
     * Set fee
     *
     * @param integer $fee
     * @return LessonTeacher
     */
    public function setFee($fee)
    {
        $this->fee = $fee;
    
        return $this;
    }

    /**
     * Get fee
     *
     * @return integer 
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Set hours
     *
     * @param integer $hours
     * @return LessonTeacher
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
    
        return $this;
    }

    /**
     * Get hours
     *
     * @return integer 
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return LessonTeacher
     */
    public function setNumber($number)
    {
        $this->number = $number;
    
        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set year
     *
     * @param integer $year
     * @return LessonTeacher
     */
    public function setYear($year)
    {
        $this->year = $year;
    
        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set planedHours
     *
     * @param integer $planedHours
     * @return LessonTeacher
     */
    public function setPlanedHours($planedHours)
    {
        $this->planedHours = $planedHours;
    
        return $this;
    }

    /**
     * Get planedHours
     *
     * @return integer 
     */
    public function getPlanedHours()
    {
        return $this->planedHours;
    }

    /**
     * Set agreements
     *
     * @param string $agreements
     * @return LessonTeacher
     */
    public function setAgreements($agreements)
    {
        $this->agreements = $agreements;
    
        return $this;
    }

    /**
     * Get agreements
     *
     * @return string 
     */
    public function getAgreements()
    {
        return $this->agreements;
    }

    /**
     * Set travelCosts
     *
     * @param integer $travelCosts
     * @return LessonTeacher
     */
    public function setTravelCosts($travelCosts)
    {
        $this->travelCosts = $travelCosts;
    
        return $this;
    }

    /**
     * Get travelCosts
     *
     * @return integer 
     */
    public function getTravelCosts()
    {
        return $this->travelCosts;
    }

    /**
     * Set accommodationExpenses
     *
     * @param string $accommodationExpenses
     * @return LessonTeacher
     */
    public function setAccommodationExpenses($accommodationExpenses)
    {
        $this->accommodationExpenses = $accommodationExpenses;
    
        return $this;
    }

    /**
     * Get accommodationExpenses
     *
     * @return string 
     */
    public function getAccommodationExpenses()
    {
        return $this->accommodationExpenses;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return LessonTeacher
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return LessonTeacher
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
