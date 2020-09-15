<?php

namespace App\Controller;

use App\Entity\Projects;
use App\Repository\ProjectsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

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
    public function alimentParType(Projects $project)
    {
        
        return $this->render('project/project.html.twig', [
            'project' => $project
        ]);
    }
}
