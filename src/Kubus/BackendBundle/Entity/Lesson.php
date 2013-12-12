<?php

namespace Kubus\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lesson
 */
class Lesson
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $courseId;

    /**
     * @var integer
     */
    private $stateId;

    /**
     * @var \DateTime
     */
    private $beginAt;

    /**
     * @var \DateTime
     */
    private $endAt;

    /**
     * @var integer
     */
    private $participantsMinNumber;

    /**
     * @var integer
     */
    private $participantsMaxNumber;

    /**
     * @var boolean
     */
    private $childCare;

    /**
     * @var \DateTime
     */
    private $publishAt;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $charge;

    /**
     * @var string
     */
    private $externUrl;

    /**
     * @var string
     */
    private $graduationYears;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
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
     * Set courseId
     *
     * @param integer $courseId
     * @return Lesson
     */
    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;

        return $this;
    }

    /**
     * Get courseId
     *
     * @return integer
     */
    public function getCourseId()
    {
        return $this->courseId;
    }

    /**
     * Set stateId
     *
     * @param integer $stateId
     * @return Lesson
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
     * Set beginAt
     *
     * @param \DateTime $beginAt
     * @return Lesson
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
     * @return Lesson
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
     * Set participantsMinNumber
     *
     * @param integer $participantsMinNumber
     * @return Lesson
     */
    public function setParticipantsMinNumber($participantsMinNumber)
    {
        $this->participantsMinNumber = $participantsMinNumber;

        return $this;
    }

    /**
     * Get participantsMinNumber
     *
     * @return integer
     */
    public function getParticipantsMinNumber()
    {
        return $this->participantsMinNumber;
    }

    /**
     * Set participantsMaxNumber
     *
     * @param integer $participantsMaxNumber
     * @return Lesson
     */
    public function setParticipantsMaxNumber($participantsMaxNumber)
    {
        $this->participantsMaxNumber = $participantsMaxNumber;

        return $this;
    }

    /**
     * Get participantsMaxNumber
     *
     * @return integer
     */
    public function getParticipantsMaxNumber()
    {
        return $this->participantsMaxNumber;
    }

    /**
     * Set childCare
     *
     * @param boolean $childCare
     * @return Lesson
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
     * Set publishAt
     *
     * @param \DateTime $publishAt
     * @return Lesson
     */
    public function setPublishAt($publishAt)
    {
        $this->publishAt = $publishAt;

        return $this;
    }

    /**
     * Get publishAt
     *
     * @return \DateTime
     */
    public function getPublishAt()
    {
        return $this->publishAt;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Lesson
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set charge
     *
     * @param integer $charge
     * @return Lesson
     */
    public function setCharge($charge)
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * Get charge
     *
     * @return integer
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Set externUrl
     *
     * @param string $externUrl
     * @return Lesson
     */
    public function setExternUrl($externUrl)
    {
        $this->externUrl = $externUrl;

        return $this;
    }

    /**
     * Get externUrl
     *
     * @return string
     */
    public function getExternUrl()
    {
        return $this->externUrl;
    }

    /**
     * Set graduationYear
     *
     * @param integer $graduationYears
     * @return Lesson
     */
    public function setGraduationYears($graduationYears)
    {
        $this->graduationYears = $graduationYears;

        return $this;
    }

    /**
     * Get graduationYears
     *
     * @return string
     */
    public function getGraduationYears()
    {
        return $this->graduationYears;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Course
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
     * @return Course
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
