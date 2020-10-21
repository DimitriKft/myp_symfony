<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Projects;
use App\Entity\Technologies;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
             // redirect to some CRUD controller
             $routeBuilder = $this->get(CrudUrlGenerator::class)->build();
             return $this->redirect($routeBuilder->setController(ProjectsCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('<a href="/" style="color:blue;">Retour portfolio</a>');
    }

    
    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),
            MenuItem::section('C.R.U.D'),
            MenuItem::linkToCrud('Projets', 'fa fa-laptop-code', Projects::class),
            MenuItem::linkToCrud('Technologie', 'fa fa-code', Technologies::class),
            MenuItem::linkToCrud('Technologie', 'fa fa-code', User::class)
        ];
    }
}
