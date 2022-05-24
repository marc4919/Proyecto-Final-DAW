<?php

namespace App\Form;

use App\Entity\Audio;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\UX\Dropzone\Form\DropzoneType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AudioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Descripcion')
            ->add('Tipo',  ChoiceType::class, [
                'choices'  => [
                    'Cancion' => 'Cancion',
                    'Karaoke' => 'Karaoke'
                ],
            ])
            ->add('Enlace', DropzoneType::class, array('data_class' => null , 'attr' => array(
                'placeholder' => 'Arrastra aquí o Seleciona'
            )))
            ->add('musical')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Audio::class,
        ]);
    }
}
