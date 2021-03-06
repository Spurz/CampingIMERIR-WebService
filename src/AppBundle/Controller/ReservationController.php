<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Reservation;

class ReservationController extends FOSRestController
{
        /**
     * @Rest\Get("/reservation")
     */
    public function getAction()
    {
      $restresult = $this->getDoctrine()->getRepository('AppBundle:Reservation')->findAll();
        if ($restresult === null) {
          return new View("Aucune reservation n'existe", Response::HTTP_NOT_FOUND);
     }
        return $restresult;
    }
}