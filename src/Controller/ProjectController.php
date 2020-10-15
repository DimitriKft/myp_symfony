<?php

namespace App\Controller;

use App\Entity\Projects;
use App\Entity\User;
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
       
        $data = $repo->findBy(array(), array('updatedAt' => 'DESC'));
        $users    = $userRepository->findAll();

        // $data = $this->getDoctrine()->getRepository(User::class)->findBy([],[
        //     'createdat' => 'desc'
        //     ]);

        $projects = $paginator->paginate(
            $data, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            5 // Nombre de résultats par page
        );
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
