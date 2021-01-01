<?php

namespace App\Controller\Admin;

use App\Entity\Comment;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CommentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Comment::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('conference'),
            DateField::new('createdAt'),
            EmailField::new('email'),
            IdField::new('id')->hideOnForm(),
            TextField::new('author'),
            TextField::new('photoFilename'),
            TextField::new('state')->hideOnForm(),
            TextField::new('text'),
            ImageField::new('photoFilename')->setBasePath('/uploads/photos')->setLabel('Photo')->hideOnForm(),
        ];
    }
}
