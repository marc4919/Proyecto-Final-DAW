<?php

namespace ContainerK6TsNy2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IOw65NkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iOw65Nk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iOw65Nk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'musicalRepository' => ['privates', 'App\\Repository\\MusicalRepository', 'getMusicalRepositoryService', true],
        ], [
            'entityManager' => '?',
            'musicalRepository' => 'App\\Repository\\MusicalRepository',
        ]);
    }
}
