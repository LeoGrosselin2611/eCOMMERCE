<?php

namespace Container7SYvxBh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KUqiaCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._KUqiaC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._KUqiaC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repository' => ['privates', 'App\\Repository\\OrdersRepository', 'getOrdersRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\OrdersRepository',
        ]);
    }
}
