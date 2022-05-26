<?php

namespace ContainerFemTmOM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BuB0XfsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.buB0Xfs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.buB0Xfs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'imagen' => ['privates', '.errored..service_locator.buB0Xfs.App\\Entity\\Imagen', NULL, 'Cannot autowire service ".service_locator.buB0Xfs": it references class "App\\Entity\\Imagen" but no such service exists.'],
            'imagenRepository' => ['privates', 'App\\Repository\\ImagenRepository', 'getImagenRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'imagen' => 'App\\Entity\\Imagen',
            'imagenRepository' => 'App\\Repository\\ImagenRepository',
            'slugger' => '?',
        ]);
    }
}
