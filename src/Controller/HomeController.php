<?php

namespace App\Controller;

use App\Repository\ProjectsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ProjectsRepository $repo)
    {
        $projects = $repo->findAll();
        return $this->render('home/index.html.twig', [
            'projects' => $projects
        ]);
    }
}
