<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Request
 *
 * @ORM\Table(name="request", indexes={@ORM\Index(name="report_id", columns={"report_id"})})
 * @ORM\Entity
 */
class Request
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="employee_id", type="integer", nullable=false)
     */
    private $employeeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="manager_id", type="integer", nullable=false)
     */
    private $managerId;

    /**
     * @var string
     *
     * @ORM\Column(name="request_type", type="string", length=15, nullable=false)
     */
    private $requestType;

    /**
     * @var string
     *
     * @ORM\Column(name="justification", type="text", length=65535, nullable=true)
     */
    private $justification;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=15, nullable=true)
     */
    private $action;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var \AppBundle\Entity\Report
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Report")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="report_id", referencedColumnName="id")
     * })
     */
    private $report;


}
