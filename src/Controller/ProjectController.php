<?php

namespace App\Controller;

use App\Entity\Projects;
use App\Repository\UserRepository;
use App\Repository\ProjectsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjectController extends AbstractController
{
    /**
     * @Route("/project", name="projects")
     */
    public function index(ProjectsRepository $repo,  UserRepository $userRepository)
    {
        $projects = $repo->findAll();
        $users    = $userRepository->findAll();
        return $this->render('project/index.html.twig', [
            'projects' => $projects,
            'users'    => $users 
        ]);
    }

     /**
     * @Route("/project/{id}", name="displayProject")
     */
    public function displayProject(Projects $project,  UserRepository $userRepository)
    {
        $users    = $userRepository->findAll();
        return $this->render('project/project.html.twig', [
            'project' => $project,
            'users'    => $users 
        ]);
    }

}
