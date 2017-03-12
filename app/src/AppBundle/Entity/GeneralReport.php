<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GeneralReport
 *
 * @ORM\Table(name="general_report", indexes={@ORM\Index(name="report_id", columns={"report_id"})})
 * @ORM\Entity
 */
class GeneralReport
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
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=true)
     */
    private $text;

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
