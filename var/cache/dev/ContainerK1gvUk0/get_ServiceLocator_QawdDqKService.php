<?php

namespace ContainerK1gvUk0;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QawdDqKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qawdDqK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qawdDqK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'promotion' => ['privates', '.errored..service_locator.qawdDqK.App\\Entity\\Promotion', NULL, 'Cannot autowire service ".service_locator.qawdDqK": it needs an instance of "App\\Entity\\Promotion" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'promotion' => 'App\\Entity\\Promotion',
        ]);
    }
}
