<?php

namespace App\Form;

use App\Entity\Musical;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\{TextType,ButtonType,EmailType,HiddenType,PasswordType,TextareaType,SubmitType,NumberType,DateType,MoneyType,BirthdayType};
use Symfony\UX\Dropzone\Form\DropzoneType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MusicalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nombre')
            ->add('Sinopsis', TextareaType::class)
            ->add('Cartel', DropzoneType::class , array('data_class' => null, 'attr' => array(
                'placeholder' => 'Arrastra aquí o Seleciona'
            )))
            ->add('Anyo')
            ->add('Video')
            ->add('participantes')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Musical::class,
        ]);
    }
}
