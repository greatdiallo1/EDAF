<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NavController extends AbstractController
{
    /**
     * @Route("/", name="nav")
     */
    public function index()
    {
        return $this->render('nav/index.html.twig', [
            'controller_name' => 'NavController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('nav/contact.html.twig', [
            'controller_name' => 'NavController',
        ]);
    }
      
     /**
     * @Route("/boutique", name="boutique")
     */
    public function boutique()
    {
        return $this->render('nav/boutique.html.twig', [
            'controller_name' => 'NavController',
        ]);
    }

     /**
     * @Route("/profile", name="profile")
     */
    public function profile()
    {
        return $this->render('nav/profile.html.twig', [
            'controller_name' => 'NavController',
        ]);
    }

     /**
     * @Route("/panier", name="panier")
     */
    public function panier()
    {
        return $this->render('nav/panier.html.twig', [
            'controller_name' => 'NavController',
        ]);
    }
}
