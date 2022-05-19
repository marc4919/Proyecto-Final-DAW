<?php

namespace App\Form;

use App\Entity\Musical;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\UX\Dropzone\Form\DropzoneType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MusicalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nombre')
            ->add('Sinopsis')
            ->add('Cartel', type: DropzoneType::class)
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
