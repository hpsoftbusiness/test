<?php

namespace ContainerVxYJhhw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OYSLd61Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oYSLd61' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oYSLd61'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jobPostRepository' => ['privates', 'App\\Repository\\JobPostRepository', 'getJobPostRepositoryService', true],
        ], [
            'jobPostRepository' => 'App\\Repository\\JobPostRepository',
        ]);
    }
}