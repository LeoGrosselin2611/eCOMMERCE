<?php

namespace Container7SYvxBh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrdersControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\OrdersController' shared autowired service.
     *
     * @return \App\Controller\OrdersController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/OrdersController.php';

        $container->services['App\\Controller\\OrdersController'] = $instance = new \App\Controller\OrdersController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\OrdersController', $container));

        return $instance;
    }
}
