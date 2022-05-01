<?php

namespace ContainerAdC4MzI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ROxoX_FService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rOxoX.f' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rOxoX.f'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CartController::index' => ['privates', '.service_locator.qqiKMWT', 'get_ServiceLocator_QqiKMWTService', true],
            'App\\Controller\\OrdersController::index' => ['privates', '.service_locator._KUqiaC', 'get_ServiceLocator_KUqiaCService', true],
            'App\\Controller\\ProductsController::delete' => ['privates', '.service_locator.rKNvcDZ', 'get_ServiceLocator_RKNvcDZService', true],
            'App\\Controller\\ProductsController::edit' => ['privates', '.service_locator.rKNvcDZ', 'get_ServiceLocator_RKNvcDZService', true],
            'App\\Controller\\ProductsController::index' => ['privates', '.service_locator.qqiKMWT', 'get_ServiceLocator_QqiKMWTService', true],
            'App\\Controller\\ProductsController::new' => ['privates', '.service_locator.qqiKMWT', 'get_ServiceLocator_QqiKMWTService', true],
            'App\\Controller\\ProductsController::show' => ['privates', '.service_locator.fyTYKh9', 'get_ServiceLocator_FyTYKh9Service', true],
            'App\\Controller\\ShopController::index' => ['privates', '.service_locator.NpiBr7V', 'get_ServiceLocator_NpiBr7VService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.4MF6DUv', 'get_ServiceLocator_4MF6DUvService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.4MF6DUv', 'get_ServiceLocator_4MF6DUvService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\CartController:index' => ['privates', '.service_locator.qqiKMWT', 'get_ServiceLocator_QqiKMWTService', true],
            'App\\Controller\\OrdersController:index' => ['privates', '.service_locator._KUqiaC', 'get_ServiceLocator_KUqiaCService', true],
            'App\\Controller\\ProductsController:delete' => ['privates', '.service_locator.rKNvcDZ', 'get_ServiceLocator_RKNvcDZService', true],
            'App\\Controller\\ProductsController:edit' => ['privates', '.service_locator.rKNvcDZ', 'get_ServiceLocator_RKNvcDZService', true],
            'App\\Controller\\ProductsController:index' => ['privates', '.service_locator.qqiKMWT', 'get_ServiceLocator_QqiKMWTService', true],
            'App\\Controller\\ProductsController:new' => ['privates', '.service_locator.qqiKMWT', 'get_ServiceLocator_QqiKMWTService', true],
            'App\\Controller\\ProductsController:show' => ['privates', '.service_locator.fyTYKh9', 'get_ServiceLocator_FyTYKh9Service', true],
            'App\\Controller\\ShopController:index' => ['privates', '.service_locator.NpiBr7V', 'get_ServiceLocator_NpiBr7VService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.4MF6DUv', 'get_ServiceLocator_4MF6DUvService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.4MF6DUv', 'get_ServiceLocator_4MF6DUvService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\CartController::index' => '?',
            'App\\Controller\\OrdersController::index' => '?',
            'App\\Controller\\ProductsController::delete' => '?',
            'App\\Controller\\ProductsController::edit' => '?',
            'App\\Controller\\ProductsController::index' => '?',
            'App\\Controller\\ProductsController::new' => '?',
            'App\\Controller\\ProductsController::show' => '?',
            'App\\Controller\\ShopController::index' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CartController:index' => '?',
            'App\\Controller\\OrdersController:index' => '?',
            'App\\Controller\\ProductsController:delete' => '?',
            'App\\Controller\\ProductsController:edit' => '?',
            'App\\Controller\\ProductsController:index' => '?',
            'App\\Controller\\ProductsController:new' => '?',
            'App\\Controller\\ProductsController:show' => '?',
            'App\\Controller\\ShopController:index' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
