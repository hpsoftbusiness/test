<?php

namespace ContainerR7ThGLx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SUJKjQBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sUJKjQB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sUJKjQB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jobDetailRepository' => ['privates', 'App\\Repository\\JobDetailRepository', 'getJobDetailRepositoryService', true],
            'jobPostRepository' => ['privates', 'App\\Repository\\JobPostRepository', 'getJobPostRepositoryService', true],
        ], [
            'jobDetailRepository' => 'App\\Repository\\JobDetailRepository',
            'jobPostRepository' => 'App\\Repository\\JobPostRepository',
        ]);
    }
}
