<?php

namespace App\Controller\Admin;

use App\Entity\Technologies;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TechnologiesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Technologies::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('slug')
        ];
    }
    
}
