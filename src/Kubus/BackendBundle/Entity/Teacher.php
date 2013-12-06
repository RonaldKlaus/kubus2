<?php

namespace Kubus\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Teacher
 */
class Teacher
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
     * @var string
     */
    private $taxNumber;

    /**
     * @var string
     */
    private $financeOffice;

    /**
     * @var string
     */
    private $accountNumber;

    /**
     * @var string
     */
    private $bankCode;

    /**
     * @var string
     */
    private $bankName;

    /**
     * @var string
     */
    private $firm;

    /**
     * @var string
     */
    private $description;

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
     * @return Teacher
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
     * Set taxNumber
     *
     * @param string $taxNumber
     * @return Teacher
     */
    public function setTaxNumber($taxNumber)
    {
        $this->taxNumber = $taxNumber;

        return $this;
    }

    /**
     * Get taxNumber
     *
     * @return string
     */
    public function getTaxNumber()
    {
        return $this->taxNumber;
    }

    /**
     * Set financeOffice
     *
     * @param string $financeOffice
     * @return Teacher
     */
    public function setFinanceOffice($financeOffice)
    {
        $this->financeOffice = $financeOffice;

        return $this;
    }

    /**
     * Get financeOffice
     *
     * @return string
     */
    public function getFinanceOffice()
    {
        return $this->financeOffice;
    }

    /**
     * Set accountNumber
     *
     * @param string $accountNumber
     * @return Teacher
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Set bankCode
     *
     * @param string $bankCode
     * @return Teacher
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;

        return $this;
    }

    /**
     * Get bankCode
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * Set bankName
     *
     * @param string $bankName
     * @return Teacher
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;

        return $this;
    }

    /**
     * Get bankName
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Set firm
     *
     * @param string $firm
     * @return Teacher
     */
    public function setFirm($firm)
    {
        $this->firm = $firm;

        return $this;
    }

    /**
     * Get firm
     *
     * @return string
     */
    public function getFirm()
    {
        return $this->firm;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Teacher
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Teacher
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
     * @return Teacher
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
