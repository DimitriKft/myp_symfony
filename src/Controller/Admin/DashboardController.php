<?php

namespace App\Controller\Admin;

use App\Entity\Projects;
use App\Entity\Technologies;
use App\Entity\Users;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Make Your Portfolio');
    }

    
    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),

            MenuItem::section('C.R.U.D'),
            MenuItem::linkToCrud('Projets', 'fa fa-tags', Projects::class),
            MenuItem::linkToCrud('Technoslogie', 'fa fa-tags', Technologies::class),
            MenuItem::linkToCrud('Utilisateurs', 'fa fa-tags', Users::class)
        ];
    }
}
