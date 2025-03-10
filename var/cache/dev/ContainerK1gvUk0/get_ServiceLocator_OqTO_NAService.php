<?php

namespace ContainerK1gvUk0;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OqTO_NAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OqTO.nA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OqTO.nA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'notification' => ['privates', '.errored..service_locator.OqTO.nA.App\\Entity\\Notification', NULL, 'Cannot autowire service ".service_locator.OqTO.nA": it needs an instance of "App\\Entity\\Notification" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'notification' => 'App\\Entity\\Notification',
        ]);
    }
}
