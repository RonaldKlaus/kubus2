<?php

namespace Kubus\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LessonTool
 */
class LessonTool
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
    private $toolId;

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
     * @return LessonTool
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
     * Set toolId
     *
     * @param integer $toolId
     * @return LessonTool
     */
    public function setToolId($toolId)
    {
        $this->toolId = $toolId;
    
        return $this;
    }

    /**
     * Get toolId
     *
     * @return integer 
     */
    public function getToolId()
    {
        return $this->toolId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return LessonTool
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
     * @return LessonTool
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
