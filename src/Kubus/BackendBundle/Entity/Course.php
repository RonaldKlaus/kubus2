<?php

namespace Kubus\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 */
class Course
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $labelShort;

    /**
     * @var integer
     */
    private $audienceId;

    /**
     * @var integer
     */
    private $hours;

    /**
     * @var integer
     */
    private $programId;

    /**
     * @var integer
     */
    private $subCategoryId;

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
     * Set number
     *
     * @param string $number
     * @return Course
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
     * Set description
     *
     * @param string $description
     * @return Course
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
     * Set label
     *
     * @param string $label
     * @return Course
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set labelShort
     *
     * @param string $labelShort
     * @return Course
     */
    public function setLabelShort($labelShort)
    {
        $this->label = $labelShort;

        return $this;
    }

    /**
     * Get labelShort
     *
     * @return string
     */
    public function getLabelShort()
    {
        return $this->labelShort;
    }

    /**
     * Get audienceId
     *
     * @return integer
     */
    public function getAudienceId()
    {
        return $this->audienceId;
    }

    /**
     * Set audienceId
     *
     * @param integer $audienceId
     * @return Course
     */
    public function setAudienceId($audienceId)
    {
        $this->audienceId = $audienceId;

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
     * Set hours
     *
     * @param integer $hours
     * @return Course
     */
    public function setHours($hours)
    {
        $this->hours = $hours;

        return $this;
    }

    /**
     * Set program
     *
     * @param integer $program
     * @return Course
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
     * Set subCategoryId
     *
     * @param integer $subCategoryId
     * @return Course
     */
    public function setSubCategoryId($subCategoryId)
    {
        $this->subCategoryId = $subCategoryId;

        return $this;
    }

    /**
     * Get subCategoryId
     *
     * @return integer
     */
    public function getSubCategoryId()
    {
        return $this->subCategoryId;
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
