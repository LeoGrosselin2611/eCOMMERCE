<?php

namespace Container7SYvxBh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductsTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ProductsType' shared autowired service.
     *
     * @return \App\Form\ProductsType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ProductsType.php';

        return $container->privates['App\\Form\\ProductsType'] = new \App\Form\ProductsType();
    }
}