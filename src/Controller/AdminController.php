<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function idex()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }


    /**
     * @Route("/admin/liste", name="liste")
     */
    public function liste(){
        return $this -> render ('admin/liste-clients.html.twig');
    }
}
