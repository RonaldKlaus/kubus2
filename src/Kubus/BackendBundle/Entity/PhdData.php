<?php

namespace Kubus\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhdData
 */
class PhdData
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
    private $programAcceptanceAt;

    /**
     * @var \DateTime
     */
    private $phdAcceptanceAt;

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
     * @return PhdData
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
     * @return PhdData
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
     * Set programAcceptanceAt
     *
     * @param \DateTime $programAcceptanceAt
     * @return PhdData
     */
    public function setProgramAcceptanceAt($programAcceptanceAt)
    {
        $this->programAcceptanceAt = $programAcceptanceAt;
    
        return $this;
    }

    /**
     * Get programAcceptanceAt
     *
     * @return \DateTime 
     */
    public function getProgramAcceptanceAt()
    {
        return $this->programAcceptanceAt;
    }

    /**
     * Set phdAcceptanceAt
     *
     * @param \DateTime $phdAcceptanceAt
     * @return PhdData
     */
    public function setPhdAcceptanceAt($phdAcceptanceAt)
    {
        $this->phdAcceptanceAt = $phdAcceptanceAt;
    
        return $this;
    }

    /**
     * Get phdAcceptanceAt
     *
     * @return \DateTime 
     */
    public function getPhdAcceptanceAt()
    {
        return $this->phdAcceptanceAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return PhdData
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
     * @return PhdData
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
