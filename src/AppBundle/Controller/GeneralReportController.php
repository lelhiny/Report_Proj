<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\GeneralReport;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Report;
use AppBundle\Entity\ReportType;

class GeneralReportController extends Controller
{
    /**
     * @Route("/create/general/report", name="greport")
     */
    public function createGeneralReport(Request $request)
{
    $generalReport = new GeneralReport();
    $generalReport->setText($request->get('text'));
    $report = new Report();
   $report->setName($request->get('name'));
   $report->setDescription($request->get('description'));
    $report->setStatus(0); //set the status inactive until manager approves
    $typeId = 1;
    $reportType = $this->getDoctrine()->getRepository('AppBundle:ReportType')->find($typeId);
    $report->setType($reportType);
    $generalReport->setReport($report);
    $em = $this->getDoctrine()->getManager();

    // tells Doctrine you want to (eventually) save the Report (no queries yet)
    $em->persist($report);
    $em->persist($generalReport);

    // actually executes the queries (i.e. the INSERT query)
    $em->flush();
     return $this->render('generalReport/success.html.twig', array(
 
           'theID' => $generalReport->getId(),
 ));
    
  }

}
  

// src/AppBundle/Controller/DefaultController.php
