<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Emplacement;

class EmplacementController extends FOSRestController
{
        /**
     * @Rest\Get("/emplacement")
     */
    public function getAction()
    {
      $restresult = $this->getDoctrine()->getRepository('AppBundle:Emplacement')->findAll();
        if ($restresult === null) {
          return new View("Aucune emplacement n'existe", Response::HTTP_NOT_FOUND);
     }
        return $restresult;
    }
}