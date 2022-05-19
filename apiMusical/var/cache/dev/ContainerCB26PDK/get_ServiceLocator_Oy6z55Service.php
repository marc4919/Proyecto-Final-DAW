<?php

namespace ContainerCB26PDK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Oy6z55Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._Oy6z55' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._Oy6z55'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AudioController::delete' => ['privates', '.service_locator.aLucqk5', 'get_ServiceLocator_ALucqk5Service', true],
            'App\\Controller\\AudioController::edit' => ['privates', '.service_locator.aLucqk5', 'get_ServiceLocator_ALucqk5Service', true],
            'App\\Controller\\AudioController::index' => ['privates', '.service_locator.GVBnakq', 'get_ServiceLocator_GVBnakqService', true],
            'App\\Controller\\AudioController::new' => ['privates', '.service_locator.Yxvt7jM', 'get_ServiceLocator_Yxvt7jMService', true],
            'App\\Controller\\AudioController::show' => ['privates', '.service_locator.F04_Ow9', 'get_ServiceLocator_F04Ow9Service', true],
            'App\\Controller\\ImagenController::delete' => ['privates', '.service_locator.ifuwGJX', 'get_ServiceLocator_IfuwGJXService', true],
            'App\\Controller\\ImagenController::edit' => ['privates', '.service_locator.ifuwGJX', 'get_ServiceLocator_IfuwGJXService', true],
            'App\\Controller\\ImagenController::index' => ['privates', '.service_locator.1JxlpHD', 'get_ServiceLocator_1JxlpHDService', true],
            'App\\Controller\\ImagenController::new' => ['privates', '.service_locator.ym5Vfwx', 'get_ServiceLocator_Ym5VfwxService', true],
            'App\\Controller\\ImagenController::show' => ['privates', '.service_locator.yDYuMo6', 'get_ServiceLocator_YDYuMo6Service', true],
            'App\\Controller\\MusicalController::delete' => ['privates', '.service_locator.P_nCRXz', 'get_ServiceLocator_PNCRXzService', true],
            'App\\Controller\\MusicalController::edit' => ['privates', '.service_locator.P_nCRXz', 'get_ServiceLocator_PNCRXzService', true],
            'App\\Controller\\MusicalController::index' => ['privates', '.service_locator..O6Vl0J', 'get_ServiceLocator__O6Vl0JService', true],
            'App\\Controller\\MusicalController::new' => ['privates', '.service_locator.9F18iJP', 'get_ServiceLocator_9F18iJPService', true],
            'App\\Controller\\MusicalController::show' => ['privates', '.service_locator..oD9six', 'get_ServiceLocator__OD9sixService', true],
            'App\\Controller\\ParticipanteController::delete' => ['privates', '.service_locator.pPSJa7S', 'get_ServiceLocator_PPSJa7SService', true],
            'App\\Controller\\ParticipanteController::edit' => ['privates', '.service_locator.pPSJa7S', 'get_ServiceLocator_PPSJa7SService', true],
            'App\\Controller\\ParticipanteController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ParticipanteController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ParticipanteController::show' => ['privates', '.service_locator.fh89mcT', 'get_ServiceLocator_Fh89mcTService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\AudioController:delete' => ['privates', '.service_locator.aLucqk5', 'get_ServiceLocator_ALucqk5Service', true],
            'App\\Controller\\AudioController:edit' => ['privates', '.service_locator.aLucqk5', 'get_ServiceLocator_ALucqk5Service', true],
            'App\\Controller\\AudioController:index' => ['privates', '.service_locator.GVBnakq', 'get_ServiceLocator_GVBnakqService', true],
            'App\\Controller\\AudioController:new' => ['privates', '.service_locator.Yxvt7jM', 'get_ServiceLocator_Yxvt7jMService', true],
            'App\\Controller\\AudioController:show' => ['privates', '.service_locator.F04_Ow9', 'get_ServiceLocator_F04Ow9Service', true],
            'App\\Controller\\ImagenController:delete' => ['privates', '.service_locator.ifuwGJX', 'get_ServiceLocator_IfuwGJXService', true],
            'App\\Controller\\ImagenController:edit' => ['privates', '.service_locator.ifuwGJX', 'get_ServiceLocator_IfuwGJXService', true],
            'App\\Controller\\ImagenController:index' => ['privates', '.service_locator.1JxlpHD', 'get_ServiceLocator_1JxlpHDService', true],
            'App\\Controller\\ImagenController:new' => ['privates', '.service_locator.ym5Vfwx', 'get_ServiceLocator_Ym5VfwxService', true],
            'App\\Controller\\ImagenController:show' => ['privates', '.service_locator.yDYuMo6', 'get_ServiceLocator_YDYuMo6Service', true],
            'App\\Controller\\MusicalController:delete' => ['privates', '.service_locator.P_nCRXz', 'get_ServiceLocator_PNCRXzService', true],
            'App\\Controller\\MusicalController:edit' => ['privates', '.service_locator.P_nCRXz', 'get_ServiceLocator_PNCRXzService', true],
            'App\\Controller\\MusicalController:index' => ['privates', '.service_locator..O6Vl0J', 'get_ServiceLocator__O6Vl0JService', true],
            'App\\Controller\\MusicalController:new' => ['privates', '.service_locator.9F18iJP', 'get_ServiceLocator_9F18iJPService', true],
            'App\\Controller\\MusicalController:show' => ['privates', '.service_locator..oD9six', 'get_ServiceLocator__OD9sixService', true],
            'App\\Controller\\ParticipanteController:delete' => ['privates', '.service_locator.pPSJa7S', 'get_ServiceLocator_PPSJa7SService', true],
            'App\\Controller\\ParticipanteController:edit' => ['privates', '.service_locator.pPSJa7S', 'get_ServiceLocator_PPSJa7SService', true],
            'App\\Controller\\ParticipanteController:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ParticipanteController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ParticipanteController:show' => ['privates', '.service_locator.fh89mcT', 'get_ServiceLocator_Fh89mcTService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\AudioController::delete' => '?',
            'App\\Controller\\AudioController::edit' => '?',
            'App\\Controller\\AudioController::index' => '?',
            'App\\Controller\\AudioController::new' => '?',
            'App\\Controller\\AudioController::show' => '?',
            'App\\Controller\\ImagenController::delete' => '?',
            'App\\Controller\\ImagenController::edit' => '?',
            'App\\Controller\\ImagenController::index' => '?',
            'App\\Controller\\ImagenController::new' => '?',
            'App\\Controller\\ImagenController::show' => '?',
            'App\\Controller\\MusicalController::delete' => '?',
            'App\\Controller\\MusicalController::edit' => '?',
            'App\\Controller\\MusicalController::index' => '?',
            'App\\Controller\\MusicalController::new' => '?',
            'App\\Controller\\MusicalController::show' => '?',
            'App\\Controller\\ParticipanteController::delete' => '?',
            'App\\Controller\\ParticipanteController::edit' => '?',
            'App\\Controller\\ParticipanteController::index' => '?',
            'App\\Controller\\ParticipanteController::new' => '?',
            'App\\Controller\\ParticipanteController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AudioController:delete' => '?',
            'App\\Controller\\AudioController:edit' => '?',
            'App\\Controller\\AudioController:index' => '?',
            'App\\Controller\\AudioController:new' => '?',
            'App\\Controller\\AudioController:show' => '?',
            'App\\Controller\\ImagenController:delete' => '?',
            'App\\Controller\\ImagenController:edit' => '?',
            'App\\Controller\\ImagenController:index' => '?',
            'App\\Controller\\ImagenController:new' => '?',
            'App\\Controller\\ImagenController:show' => '?',
            'App\\Controller\\MusicalController:delete' => '?',
            'App\\Controller\\MusicalController:edit' => '?',
            'App\\Controller\\MusicalController:index' => '?',
            'App\\Controller\\MusicalController:new' => '?',
            'App\\Controller\\MusicalController:show' => '?',
            'App\\Controller\\ParticipanteController:delete' => '?',
            'App\\Controller\\ParticipanteController:edit' => '?',
            'App\\Controller\\ParticipanteController:index' => '?',
            'App\\Controller\\ParticipanteController:new' => '?',
            'App\\Controller\\ParticipanteController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}