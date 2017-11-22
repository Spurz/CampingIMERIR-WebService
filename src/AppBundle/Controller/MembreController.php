<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Membre;

class MembreController extends FOSRestController
{
        /**
     * @Rest\Get("/membre")
     */
    public function getAction()
    {
      $restresult = $this->getDoctrine()->getRepository('AppBundle:Membre')->findAll();
        if ($restresult === null) {
          return new View("Aucune membre n'existe", Response::HTTP_NOT_FOUND);
     }
        return $restresult;
    }
}