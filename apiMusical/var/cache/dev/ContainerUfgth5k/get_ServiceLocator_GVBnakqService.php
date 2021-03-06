<?php

namespace ContainerUfgth5k;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GVBnakqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GVBnakq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GVBnakq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'audioRepository' => ['privates', 'App\\Repository\\AudioRepository', 'getAudioRepositoryService', true],
        ], [
            'audioRepository' => 'App\\Repository\\AudioRepository',
        ]);
    }
}
