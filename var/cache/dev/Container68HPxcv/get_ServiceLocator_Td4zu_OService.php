<?php

namespace Container68HPxcv;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Td4zu_OService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.td4zu.o' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.td4zu.o'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'evenement' => ['privates', '.errored..service_locator.td4zu.o.App\\Entity\\Evenement', NULL, 'Cannot autowire service ".service_locator.td4zu.o": it needs an instance of "App\\Entity\\Evenement" but this type has been excluded in "config/services.yaml".'],
        ], [
            'evenement' => 'App\\Entity\\Evenement',
        ]);
    }
}
