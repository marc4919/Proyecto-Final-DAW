<?php

namespace ContainerI3PzAdq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9F18iJPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9F18iJP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9F18iJP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'musicalRepository' => ['privates', 'App\\Repository\\MusicalRepository', 'getMusicalRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'musicalRepository' => 'App\\Repository\\MusicalRepository',
            'slugger' => '?',
        ]);
    }
}
