<?php

namespace App\Controller\Admin;

use App\Entity\Technologies;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TechnologiesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Technologies::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
