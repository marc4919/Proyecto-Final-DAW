<?php

namespace Container5JxYxlo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F04Ow9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.F04_Ow9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.F04_Ow9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'audio' => ['privates', '.errored..service_locator.F04_Ow9.App\\Entity\\Audio', NULL, 'Cannot autowire service ".service_locator.F04_Ow9": it references class "App\\Entity\\Audio" but no such service exists.'],
        ], [
            'audio' => 'App\\Entity\\Audio',
        ]);
    }
}
