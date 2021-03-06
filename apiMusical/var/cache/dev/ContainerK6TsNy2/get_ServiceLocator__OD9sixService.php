<?php

namespace ContainerK6TsNy2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__OD9sixService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..oD9six' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..oD9six'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'musical' => ['privates', '.errored..service_locator..oD9six.App\\Entity\\Musical', NULL, 'Cannot autowire service ".service_locator..oD9six": it references class "App\\Entity\\Musical" but no such service exists.'],
        ], [
            'musical' => 'App\\Entity\\Musical',
        ]);
    }
}
