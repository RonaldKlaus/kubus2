<?php

namespace Kubus\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ManagerData
 */
class ManagerData
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
    private $programId;

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
     * @return ManagerData
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
     * Set programId
     *
     * @param integer $programId
     * @return ManagerData
     */
    public function setProgramId($programId)
    {
        $this->programId = $programId;
    
        return $this;
    }

    /**
     * Get programId
     *
     * @return integer 
     */
    public function getProgramId()
    {
        return $this->programId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ManagerData
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
     * @return ManagerData
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
