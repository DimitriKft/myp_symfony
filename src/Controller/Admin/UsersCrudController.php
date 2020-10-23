<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UsersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }


    public function configureFields(string $pageName): iterable
    {

        $imageField = ImageField::new('imageFile')
        ->setFormType(VichImageType::class)
        ->setLabel('Avatar');

        $image = ImageField::new('avatar')
            ->setBasePath("/uploads/images")
            ->setLabel('Avatar');

        $fields = [
            TextField::new('last_name'),
            TextField::new('first_name'),
            TextField::new('email'),
            Textfield::new('phone'),
            TextField::new('linkedin'),
            TextField::new('github')
        ];

        if ($pageName === Crud::PAGE_INDEX || $pageName === Crud::PAGE_DETAIL) {
            $fields[] = $image;
        } else {
            $fields[] = $imageField;
        }

        return $fields;
    }
}
