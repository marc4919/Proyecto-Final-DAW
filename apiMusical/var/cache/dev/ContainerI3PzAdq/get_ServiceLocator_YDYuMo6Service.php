<?php

namespace ContainerI3PzAdq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YDYuMo6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yDYuMo6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yDYuMo6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'imagen' => ['privates', '.errored..service_locator.yDYuMo6.App\\Entity\\Imagen', NULL, 'Cannot autowire service ".service_locator.yDYuMo6": it references class "App\\Entity\\Imagen" but no such service exists.'],
        ], [
            'imagen' => 'App\\Entity\\Imagen',
        ]);
    }
}
