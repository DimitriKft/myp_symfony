<?php

namespace App\Controller\Admin;

use App\Entity\Projects;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProjectsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Projects::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextEditorField::new('description'),
            TextField::new('image'),
            TextField::new('repo_url'),
            TextField::new('website_url'),
            AssociationField::new('user'),
            AssociationField::new('technology')
        ];
    }
    
}
