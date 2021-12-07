<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Factory\FieldFactory;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideWhenUpdating()->hideWhenCreating(),
            TextField::new('username'),
            TextField::new('lastname'),
            TextField::new('fistname'),
            BooleanField::new('isVerified'),
            EmailField::new('email'),
            ArrayField::new('roles'),
            TextField::new('pasword')->hideWhenUpdating()->hideWhenCreating(),
            AssociationField::new('adresses'),


        ];
    }

}
