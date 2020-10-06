<?php

namespace App\Controller;

use App\Repository\ProjectsRepository;
use App\Repository\UserRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ProjectsRepository $projectsRepository, UserRepository $userRepository)
    {
        $projects = $projectsRepository->findAll();
        $users    = $userRepository->findAll(); 
        return $this->render('home/index.html.twig', [
            'projects' => $projects,
            'users'    => $users 
        ]);
    }

    
    public function userDisplay( UserRepository $userRepository)
    {
        $users    = $userRepository->findAll(); 
        return $this->render('base.html.twig', [      
            'users'    => $users 
        ]);
    }
}
