<?php

namespace ContainerDpWsLqQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FPy9AcBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FPy9AcB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FPy9AcB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
        ], [
            'logger' => '?',
        ]);
    }
}
