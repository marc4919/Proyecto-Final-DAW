<?php

namespace ContainerBxkX0QQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getParticipanteControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ParticipanteController' shared autowired service.
     *
     * @return \App\Controller\ParticipanteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ParticipanteController.php';

        $container->services['App\\Controller\\ParticipanteController'] = $instance = new \App\Controller\ParticipanteController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\ParticipanteController', $container));

        return $instance;
    }
}
