<?php

namespace Container4xj9FAk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ALucqk5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aLucqk5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aLucqk5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'audio' => ['privates', '.errored..service_locator.aLucqk5.App\\Entity\\Audio', NULL, 'Cannot autowire service ".service_locator.aLucqk5": it references class "App\\Entity\\Audio" but no such service exists.'],
            'audioRepository' => ['privates', 'App\\Repository\\AudioRepository', 'getAudioRepositoryService', true],
        ], [
            'audio' => 'App\\Entity\\Audio',
            'audioRepository' => 'App\\Repository\\AudioRepository',
        ]);
    }
}
