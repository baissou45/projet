<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VisitController extends AbstractController
{
    /**
     * @Route("/", name="visit")
     */
    public function index()
    {
        return $this->render('visit/index.html.twig');
    }
    /**
     * @Route("/properties", name="properties")
     */
    public function properties()
    {
        return $this->render('visit/properties.html.twig');
    }
    /**
     * @Route("/view", name="view")
     */
    public function view()
    {
        return $this->render('visit/view.html.twig');
    }
    /**
     * @Route("/request", name="request")
     */
    public function request()
    {
        return $this->render('visit/request.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('visit/contact.html.twig');
    }
}
