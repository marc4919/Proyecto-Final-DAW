<?php

namespace ContainerK6TsNy2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAudioTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\AudioType' shared autowired service.
     *
     * @return \App\Form\AudioType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/AudioType.php';

        return $container->privates['App\\Form\\AudioType'] = new \App\Form\AudioType();
    }
}
