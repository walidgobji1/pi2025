<?php

namespace ContainerF1LP4cG;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XGBMrMwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xGBMrMw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xGBMrMw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'avisRepository' => ['privates', 'App\\Repository\\AvisRepository', 'getAvisRepositoryService', true],
            'formationRepository' => ['privates', 'App\\Repository\\FormationRepository', 'getFormationRepositoryService', true],
            'scoreRepository' => ['privates', 'App\\Repository\\FormationScoreRepository', 'getFormationScoreRepositoryService', true],
        ], [
            'avisRepository' => 'App\\Repository\\AvisRepository',
            'formationRepository' => 'App\\Repository\\FormationRepository',
            'scoreRepository' => 'App\\Repository\\FormationScoreRepository',
        ]);
    }
}
