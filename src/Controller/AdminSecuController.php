<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminSecuController extends AbstractController
{
    /**
     * @Route("/admin/secu", name="admin_secu")
     */
    public function index()
    {
        return $this->render('admin_secu/index.html.twig', [
            'controller_name' => 'AdminSecuController',
        ]);
    }
}
