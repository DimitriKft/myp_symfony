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
    public function index(ProjectsRepository $projectsRepository)
    {
        $projects = $projectsRepository->findBy(array(),array('id'=>'DESC'),3,0); 
        return $this->render('home/index.html.twig', [
            'projects' => $projects
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
