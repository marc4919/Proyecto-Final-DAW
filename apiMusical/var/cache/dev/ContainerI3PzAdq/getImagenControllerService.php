<?php

namespace ContainerI3PzAdq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImagenControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ImagenController' shared autowired service.
     *
     * @return \App\Controller\ImagenController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ImagenController.php';

        $container->services['App\\Controller\\ImagenController'] = $instance = new \App\Controller\ImagenController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\ImagenController', $container));

        return $instance;
    }
}