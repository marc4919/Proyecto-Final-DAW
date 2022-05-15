<?php

namespace ContainerI3PzAdq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__O6Vl0JService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..O6Vl0J' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..O6Vl0J'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'musicalRepository' => ['privates', 'App\\Repository\\MusicalRepository', 'getMusicalRepositoryService', true],
        ], [
            'musicalRepository' => 'App\\Repository\\MusicalRepository',
        ]);
    }
}
