<?php

namespace Container4xj9FAk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_S5AWQMLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.s5AWQML' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.s5AWQML'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ParticipanteRepository' => ['privates', 'App\\Repository\\ParticipanteRepository', 'getParticipanteRepositoryService', true],
            'knpSnappyPdf' => ['services', 'knp_snappy.pdf', 'getKnpSnappy_PdfService', true],
        ], [
            'ParticipanteRepository' => 'App\\Repository\\ParticipanteRepository',
            'knpSnappyPdf' => '?',
        ]);
    }
}
