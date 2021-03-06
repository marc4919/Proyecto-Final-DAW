<?php

namespace ContainerK6TsNy2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KtGAGxBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ktGAGxB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ktGAGxB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'audio' => ['privates', '.errored..service_locator.ktGAGxB.App\\Entity\\Audio', NULL, 'Cannot autowire service ".service_locator.ktGAGxB": it references class "App\\Entity\\Audio" but no such service exists.'],
            'audioRepository' => ['privates', 'App\\Repository\\AudioRepository', 'getAudioRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'audio' => 'App\\Entity\\Audio',
            'audioRepository' => 'App\\Repository\\AudioRepository',
            'slugger' => '?',
        ]);
    }
}
