<?php

namespace App\Controller\Admin;

use App\Entity\Projects;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
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

        $imageField = ImageField::new('imageFile')
        ->setFormType(VichImageType::class)
        ->setLabel('Image');

        $image = ImageField::new('image')
            ->setBasePath("/uploads/images")
            ->setLabel('Image');

        $fields = [
            TextField::new('name'),
            TextareaField::new('description'),
            TextField::new('repo_url'),
            TextField::new('website_url'),
            DateField::new('createdat'),
            AssociationField::new('user'),
            AssociationField::new('technology')
        ];

        if ($pageName === Crud::PAGE_INDEX || $pageName === Crud::PAGE_DETAIL) {
            $fields[] = $image;
        } else {
            $fields[] = $imageField;
        }

        return $fields;
    }
    
}
