<?php

namespace Kubus\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mail
 */
class Mail
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $senderId;

    /**
     * @var integer
     */
    private $receiverId;

    /**
     * @var integer
     */
    private $messageId;

    /**
     * @var string
     */
    private $attachmentName;

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
     * Set senderId
     *
     * @param integer $senderId
     * @return Mail
     */
    public function setSenderId($senderId)
    {
        $this->senderId = $senderId;
    
        return $this;
    }

    /**
     * Get senderId
     *
     * @return integer 
     */
    public function getSenderId()
    {
        return $this->senderId;
    }

    /**
     * Set receiverId
     *
     * @param integer $receiverId
     * @return Mail
     */
    public function setReceiverId($receiverId)
    {
        $this->receiverId = $receiverId;
    
        return $this;
    }

    /**
     * Get receiverId
     *
     * @return integer 
     */
    public function getReceiverId()
    {
        return $this->receiverId;
    }

    /**
     * Set messageId
     *
     * @param integer $messageId
     * @return Mail
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
    
        return $this;
    }

    /**
     * Get messageId
     *
     * @return integer 
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Set attachmentName
     *
     * @param string $attachmentName
     * @return Mail
     */
    public function setAttachmentName($attachmentName)
    {
        $this->attachmentName = $attachmentName;
    
        return $this;
    }

    /**
     * Get attachmentName
     *
     * @return string 
     */
    public function getAttachmentName()
    {
        return $this->attachmentName;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Mail
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
     * @return Mail
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
