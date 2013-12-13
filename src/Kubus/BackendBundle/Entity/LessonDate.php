<?php

namespace Kubus\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LessonDate
 */
class LessonDate
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $lessonId;

    /**
     * @var integer
     */
    private $locationId;

    /**
     * @var \DateTime
     */
    private $beginAt;

    /**
     * @var \DateTime
     */
    private $endAt;

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
     * Set lessonId
     *
     * @param integer $lessonId
     * @return LessonDate
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
     * Set locationId
     *
     * @param integer $locationId
     * @return LessonDate
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;
    
        return $this;
    }

    /**
     * Get locationId
     *
     * @return integer 
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Set beginAt
     *
     * @param \DateTime $beginAt
     * @return LessonDate
     */
    public function setBeginAt($beginAt)
    {
        $this->beginAt = $beginAt;
    
        return $this;
    }

    /**
     * Get beginAt
     *
     * @return \DateTime 
     */
    public function getBeginAt()
    {
        return $this->beginAt;
    }

    /**
     * Set endAt
     *
     * @param \DateTime $endAt
     * @return LessonDate
     */
    public function setEndAt($endAt)
    {
        $this->endAt = $endAt;
    
        return $this;
    }

    /**
     * Get endAt
     *
     * @return \DateTime 
     */
    public function getEndAt()
    {
        return $this->endAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return LessonDate
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
     * @return LessonDate
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
