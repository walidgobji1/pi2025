<?php

namespace Container68HPxcv;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GKZxhjbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gKZxhjb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gKZxhjb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'inscriptionRepo' => ['privates', 'App\\Repository\\InscriptionCoursRepository', 'getInscriptionCoursRepositoryService', true],
            'promoRepo' => ['privates', 'App\\Repository\\PromotionRepository', 'getPromotionRepositoryService', true],
        ], [
            'entityManager' => '?',
            'inscriptionRepo' => 'App\\Repository\\InscriptionCoursRepository',
            'promoRepo' => 'App\\Repository\\PromotionRepository',
        ]);
    }
}
