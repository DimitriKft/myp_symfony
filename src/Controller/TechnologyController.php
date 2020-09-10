<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TechnologyController extends AbstractController
{
    /**
     * @Route("/technology", name="technology")
     */
    public function index()
    {
        return $this->render('technology/index.html.twig', [
            'controller_name' => 'TechnologyController',
        ]);
    }
}
