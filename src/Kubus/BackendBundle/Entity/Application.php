<?php

namespace Kubus\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application
 */
class Application
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
    private $stateId;

    /**
     * @var \DateTime
     */
    private $invitedAt;

    /**
     * @var \DateTime
     */
    private $certifiedAt;

    /**
     * @var boolean
     */
    private $paid;

    /**
     * @var string
     */
    private $invoice;

    /**
     * @var boolean
     */
    private $invoiceSend;

    /**
     * @var string
     */
    private $credits;

    /**
     * @var float
     */
    private $mark;

    /**
     * @var boolean
     */
    private $childCare;

    /**
     * @var boolean
     */
    private $liableToPay;

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
     * @return Application
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
     * @return Application
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
     * Set stateId
     *
     * @param integer $stateId
     * @return Application
     */
    public function setStateId($stateId)
    {
        $this->stateId = $stateId;
    
        return $this;
    }

    /**
     * Get stateId
     *
     * @return integer 
     */
    public function getStateId()
    {
        return $this->stateId;
    }

    /**
     * Set invitedAt
     *
     * @param \DateTime $invitedAt
     * @return Application
     */
    public function setInvitedAt($invitedAt)
    {
        $this->invitedAt = $invitedAt;
    
        return $this;
    }

    /**
     * Get invitedAt
     *
     * @return \DateTime 
     */
    public function getInvitedAt()
    {
        return $this->invitedAt;
    }

    /**
     * Set certifiedAt
     *
     * @param \DateTime $certifiedAt
     * @return Application
     */
    public function setCertifiedAt($certifiedAt)
    {
        $this->certifiedAt = $certifiedAt;
    
        return $this;
    }

    /**
     * Get certifiedAt
     *
     * @return \DateTime 
     */
    public function getCertifiedAt()
    {
        return $this->certifiedAt;
    }

    /**
     * Set paid
     *
     * @param boolean $paid
     * @return Application
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;
    
        return $this;
    }

    /**
     * Get paid
     *
     * @return boolean 
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * Set invoice
     *
     * @param string $invoice
     * @return Application
     */
    public function setInvoice($invoice)
    {
        $this->invoice = $invoice;
    
        return $this;
    }

    /**
     * Get invoice
     *
     * @return string 
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Set invoiceSend
     *
     * @param boolean $invoiceSend
     * @return Application
     */
    public function setInvoiceSend($invoiceSend)
    {
        $this->invoiceSend = $invoiceSend;
    
        return $this;
    }

    /**
     * Get invoiceSend
     *
     * @return boolean 
     */
    public function getInvoiceSend()
    {
        return $this->invoiceSend;
    }

    /**
     * Set credits
     *
     * @param string $credits
     * @return Application
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;
    
        return $this;
    }

    /**
     * Get credits
     *
     * @return string 
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * Set mark
     *
     * @param float $mark
     * @return Application
     */
    public function setMark($mark)
    {
        $this->mark = $mark;
    
        return $this;
    }

    /**
     * Get mark
     *
     * @return float 
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set childCare
     *
     * @param boolean $childCare
     * @return Application
     */
    public function setChildCare($childCare)
    {
        $this->childCare = $childCare;
    
        return $this;
    }

    /**
     * Get childCare
     *
     * @return boolean 
     */
    public function getChildCare()
    {
        return $this->childCare;
    }

    /**
     * Set liableToPay
     *
     * @param boolean $liableToPay
     * @return Application
     */
    public function setLiableToPay($liableToPay)
    {
        $this->liableToPay = $liableToPay;
    
        return $this;
    }

    /**
     * Get liableToPay
     *
     * @return boolean 
     */
    public function getLiableToPay()
    {
        return $this->liableToPay;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Application
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
     * @return Application
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
