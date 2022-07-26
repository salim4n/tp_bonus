<?php

namespace App\Form;

use App\Entity\Produits;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Categorie;

class ProduitsType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options): void
    {


        $builder
            ->add('libelle')
            ->add('reference')
            ->add('prix')
            ->add('stock')
            ->add('dateDAjout')
            ->add('categorie', EntityType::class,[
                'class'=> Categorie::class,
                'choice_label'=> 'libelle'
            ])
        ;
    }



    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produits::class,
        ]);
    }
}
