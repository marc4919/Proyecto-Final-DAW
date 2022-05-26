<?php

namespace ContainerFemTmOM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PNCRXzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.P_nCRXz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.P_nCRXz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'musical' => ['privates', '.errored..service_locator.P_nCRXz.App\\Entity\\Musical', NULL, 'Cannot autowire service ".service_locator.P_nCRXz": it references class "App\\Entity\\Musical" but no such service exists.'],
            'musicalRepository' => ['privates', 'App\\Repository\\MusicalRepository', 'getMusicalRepositoryService', true],
        ], [
            'musical' => 'App\\Entity\\Musical',
            'musicalRepository' => 'App\\Repository\\MusicalRepository',
        ]);
    }
}
