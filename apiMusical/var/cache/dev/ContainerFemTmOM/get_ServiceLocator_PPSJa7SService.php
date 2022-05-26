<?php

namespace ContainerFemTmOM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PPSJa7SService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pPSJa7S' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pPSJa7S'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'participante' => ['privates', '.errored..service_locator.pPSJa7S.App\\Entity\\Participante', NULL, 'Cannot autowire service ".service_locator.pPSJa7S": it references class "App\\Entity\\Participante" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'participante' => 'App\\Entity\\Participante',
        ]);
    }
}