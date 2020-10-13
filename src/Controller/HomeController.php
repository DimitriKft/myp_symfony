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
    public function index(ProjectsRepository $projectsRepository,  UserRepository $userRepository)
    {
        $project1 = $projectsRepository->findBy(array(),array('id'=>'DESC'),1,0); 
        $project2 = $projectsRepository->findBy(array(),array('id'=>'DESC'),1,1); 
        $project3 = $projectsRepository->findBy(array(),array('id'=>'DESC'),1,2); 
        $users    = $userRepository->findAll(); 
        return $this->render('home/index.html.twig', [
            'project1' => $project1,
            'project2' => $project2,
            'project3' => $project3,
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
