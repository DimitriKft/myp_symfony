<?php

namespace App\Controller;

use App\Entity\Projects;
use App\Repository\UserRepository;
use App\Repository\ProjectsRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ProjectController extends AbstractController
{
    /**
     * @Route("/project", name="projects")
     */
    public function index(ProjectsRepository $repo,  UserRepository $userRepository, Request $request, PaginatorInterface $paginator)
    {
        // requete permettant d'afficher nos résultats dans l'ordre décroissant
        $data = $repo->findBy(array(), array('updatedAt' => 'DESC'));
        $users    = $userRepository->findAll();

        $projects = $paginator->paginate(
            $data, // Requête contenant les données à paginer (ici nos projets)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            5 // Nombre de résultats par page
        );
        return $this->render('project/projects.html.twig', [
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
