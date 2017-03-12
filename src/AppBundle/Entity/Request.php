<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Request
 */
class Request
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $employeeId;

    /**
     * @var integer
     */
    private $managerId;

    /**
     * @var string
     */
    private $requestType;

    /**
     * @var string
     */
    private $justification;

    /**
     * @var string
     */
    private $action;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \AppBundle\Entity\Report
     */
    private $report;


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
     * Set employeeId
     *
     * @param integer $employeeId
     * @return Request
     */
    public function setEmployeeId($employeeId)
    {
        $this->employeeId = $employeeId;

        return $this;
    }

    /**
     * Get employeeId
     *
     * @return integer 
     */
    public function getEmployeeId()
    {
        return $this->employeeId;
    }

    /**
     * Set managerId
     *
     * @param integer $managerId
     * @return Request
     */
    public function setManagerId($managerId)
    {
        $this->managerId = $managerId;

        return $this;
    }

    /**
     * Get managerId
     *
     * @return integer 
     */
    public function getManagerId()
    {
        return $this->managerId;
    }

    /**
     * Set requestType
     *
     * @param string $requestType
     * @return Request
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;

        return $this;
    }

    /**
     * Get requestType
     *
     * @return string 
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * Set justification
     *
     * @param string $justification
     * @return Request
     */
    public function setJustification($justification)
    {
        $this->justification = $justification;

        return $this;
    }

    /**
     * Get justification
     *
     * @return string 
     */
    public function getJustification()
    {
        return $this->justification;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return Request
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Request
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

    /**
     * Set report
     *
     * @param \AppBundle\Entity\Report $report
     * @return Request
     */
    public function setReport(\AppBundle\Entity\Report $report = null)
    {
        $this->report = $report;

        return $this;
    }

    /**
     * Get report
     *
     * @return \AppBundle\Entity\Report 
     */
    public function getReport()
    {
        return $this->report;
    }
}
