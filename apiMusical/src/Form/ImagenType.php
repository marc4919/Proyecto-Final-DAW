<?php

namespace App\Form;

use App\Entity\Imagen;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\{TextType,ButtonType,EmailType,HiddenType,PasswordType,TextareaType,SubmitType,NumberType,DateType,MoneyType,BirthdayType};
use Symfony\UX\Dropzone\Form\DropzoneType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImagenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Descripcion', TextType::class, array(
                'label' => 'Descripción'))
            ->add('Enlace', DropzoneType::class, array('data_class' => null, 'attr' => array(
                'placeholder' => 'Arrastra aquí o Seleciona'
            )))
            ->add('musical')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Imagen::class,
        ]);
    }
}
