<?php

namespace Container4pRVzYt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9aFG34YService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9aFG34Y' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9aFG34Y'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\IndexController::list' => ['privates', '.service_locator.fn4PKlQ', 'get_ServiceLocator_Fn4PKlQService', true],
            'App\\Controller\\ViewController::view' => ['privates', '.service_locator.NyLbAvG', 'get_ServiceLocator_NyLbAvGService', true],
            'App\\Controller\\ViewController::viewUpdate' => ['privates', '.service_locator.zVxSbHG', 'get_ServiceLocator_ZVxSbHGService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\IndexController:list' => ['privates', '.service_locator.fn4PKlQ', 'get_ServiceLocator_Fn4PKlQService', true],
            'App\\Controller\\ViewController:view' => ['privates', '.service_locator.NyLbAvG', 'get_ServiceLocator_NyLbAvGService', true],
            'App\\Controller\\ViewController:viewUpdate' => ['privates', '.service_locator.zVxSbHG', 'get_ServiceLocator_ZVxSbHGService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\IndexController::list' => '?',
            'App\\Controller\\ViewController::view' => '?',
            'App\\Controller\\ViewController::viewUpdate' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\IndexController:list' => '?',
            'App\\Controller\\ViewController:view' => '?',
            'App\\Controller\\ViewController:viewUpdate' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}