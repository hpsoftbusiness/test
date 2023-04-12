<?php

namespace ContainerI2afxkY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BZ2AMLTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bZ2AMLT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bZ2AMLT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ExpertController::detail' => ['privates', '.service_locator.sUJKjQB', 'get_ServiceLocator_SUJKjQBService', true],
            'App\\Controller\\MailController::mailConfirmationEmployer' => ['privates', '.service_locator.gZBc6Nn', 'get_ServiceLocator_GZBc6NnService', true],
            'App\\Controller\\MailController::mailConfirmationWorker' => ['privates', '.service_locator.b4l3PbG', 'get_ServiceLocator_B4l3PbGService', true],
            'App\\Controller\\PostJobController::postJob' => ['privates', '.service_locator.oYSLd61', 'get_ServiceLocator_OYSLd61Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Controller\\ExpertController:detail' => ['privates', '.service_locator.sUJKjQB', 'get_ServiceLocator_SUJKjQBService', true],
            'App\\Controller\\MailController:mailConfirmationEmployer' => ['privates', '.service_locator.gZBc6Nn', 'get_ServiceLocator_GZBc6NnService', true],
            'App\\Controller\\MailController:mailConfirmationWorker' => ['privates', '.service_locator.b4l3PbG', 'get_ServiceLocator_B4l3PbGService', true],
            'App\\Controller\\PostJobController:postJob' => ['privates', '.service_locator.oYSLd61', 'get_ServiceLocator_OYSLd61Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
        ], [
            'App\\Controller\\ExpertController::detail' => '?',
            'App\\Controller\\MailController::mailConfirmationEmployer' => '?',
            'App\\Controller\\MailController::mailConfirmationWorker' => '?',
            'App\\Controller\\PostJobController::postJob' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ExpertController:detail' => '?',
            'App\\Controller\\MailController:mailConfirmationEmployer' => '?',
            'App\\Controller\\MailController:mailConfirmationWorker' => '?',
            'App\\Controller\\PostJobController:postJob' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}