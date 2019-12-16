<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contact;
use App\Form\ContactType;
use App\Entity\Reservation;
use App\Form\ReservationType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


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
    public function view(Request $request)
    {
        $reservation=new Reservation ();
        $form= $this->createForm(ReservationType::Class, $reservation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $reservation->setDate(new \DateTime());
            $em = $this->getDoctrine()->getManager(); // On récupère l'entity manager
            $em->persist($reservation); // On confie notre entité à l'entity manager (on persist l'entité)
            $em->flush(); // On execute la requete  
            $this->addFlash(
                'success','Votre message a été envoyé.'
            );      
        }

        return $this->render('visit/view.html.twig',['form' => $form->createView()]);
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
    public function contact(Request $request)

    {
        $contact=new Contact ();
        $form= $this->createForm(ContactType::Class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager(); // On récupère l'entity manager
            $em->persist($contact); // On confie notre entité à l'entity manager (on persist l'entité)
            $em->flush(); // On execute la requete  
            $this->addFlash(
                'success','Votre message a été envoyé.'
            );      
        }

        return $this->render('visit/contact.html.twig',['form' => $form->createView()]);
    }
}
