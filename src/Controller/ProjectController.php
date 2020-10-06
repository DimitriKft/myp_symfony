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
    public function index(ProjectsRepository $repo)
    {
        $projects = $repo->findAll();
        return $this->render('project/index.html.twig', [
            'projects' => $projects
        ]);
    }

     /**
     * @Route("/project/{id}", name="displayProject")
     */
    public function displayProject(Projects $project)
    {
        
        return $this->render('project/project.html.twig', [
            'project' => $project
        ]);
    }

  
}
