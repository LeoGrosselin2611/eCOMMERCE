<?php

namespace ContainerAdC4MzI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NpiBr7VService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NpiBr7V' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NpiBr7V'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'productRepository' => ['privates', 'App\\Repository\\ProductsRepository', 'getProductsRepositoryService', true],
        ], [
            'productRepository' => 'App\\Repository\\ProductsRepository',
        ]);
    }
}
