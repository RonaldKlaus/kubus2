<?php

namespace Kubus\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 */
class Message
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $message;

    /**
     * @var integer
     */
    private $personId;

    /**
     * @var integer
     */
    private $aboutCourseId;

    /**
     * @var integer
     */
    private $aboutPersonId;

    /**
     * @var integer
     */
    private $aboutLessonId;

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
     * Set subject
     *
     * @param string $subject
     * @return Message
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    
        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set personId
     *
     * @param integer $personId
     * @return Message
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
     * Set aboutCourseId
     *
     * @param integer $aboutCourseId
     * @return Message
     */
    public function setAboutCourseId($aboutCourseId)
    {
        $this->aboutCourseId = $aboutCourseId;
    
        return $this;
    }

    /**
     * Get aboutCourseId
     *
     * @return integer 
     */
    public function getAboutCourseId()
    {
        return $this->aboutCourseId;
    }

    /**
     * Set aboutPersonId
     *
     * @param integer $aboutPersonId
     * @return Message
     */
    public function setAboutPersonId($aboutPersonId)
    {
        $this->aboutPersonId = $aboutPersonId;
    
        return $this;
    }

    /**
     * Get aboutPersonId
     *
     * @return integer 
     */
    public function getAboutPersonId()
    {
        return $this->aboutPersonId;
    }

    /**
     * Set aboutLessonId
     *
     * @param integer $aboutLessonId
     * @return Message
     */
    public function setAboutLessonId($aboutLessonId)
    {
        $this->aboutLessonId = $aboutLessonId;
    
        return $this;
    }

    /**
     * Get aboutLessonId
     *
     * @return integer 
     */
    public function getAboutLessonId()
    {
        return $this->aboutLessonId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Message
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
     * @return Message
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
