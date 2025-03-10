<?php

namespace Container68HPxcv;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IpuVxm5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ipuVxm5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ipuVxm5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AdminController::createAdmin' => ['privates', '.service_locator.ESgEUJd', 'get_ServiceLocator_ESgEUJdService', true],
            'App\\Controller\\AdminController::deleteUser' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController::usersList' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AvisController::addAvis' => ['privates', '.service_locator.H4db.HJ', 'get_ServiceLocator_H4db_HJService', true],
            'App\\Controller\\AvisController::delete' => ['privates', '.service_locator.tZAAnCT', 'get_ServiceLocator_TZAAnCTService', true],
            'App\\Controller\\AvisController::edit' => ['privates', '.service_locator.tZAAnCT', 'get_ServiceLocator_TZAAnCTService', true],
            'App\\Controller\\AvisController::index' => ['privates', '.service_locator.R9OG08h', 'get_ServiceLocator_R9OG08hService', true],
            'App\\Controller\\CategorieController::delete' => ['privates', '.service_locator.aw9RHlF', 'get_ServiceLocator_Aw9RHlFService', true],
            'App\\Controller\\CategorieController::edit' => ['privates', '.service_locator.aw9RHlF', 'get_ServiceLocator_Aw9RHlFService', true],
            'App\\Controller\\CategorieController::index' => ['privates', '.service_locator.DFyL8OH', 'get_ServiceLocator_DFyL8OHService', true],
            'App\\Controller\\CategorieController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CategorieController::show' => ['privates', '.service_locator.j7wOkYK', 'get_ServiceLocator_J7wOkYKService', true],
            'App\\Controller\\EvenementController::delete' => ['privates', '.service_locator.JFCU_Ej', 'get_ServiceLocator_JFCUEjService', true],
            'App\\Controller\\EvenementController::edit' => ['privates', '.service_locator.JFCU_Ej', 'get_ServiceLocator_JFCUEjService', true],
            'App\\Controller\\EvenementController::index' => ['privates', '.service_locator.pX4JUuC', 'get_ServiceLocator_PX4JUuCService', true],
            'App\\Controller\\EvenementController::index_front' => ['privates', '.service_locator.pX4JUuC', 'get_ServiceLocator_PX4JUuCService', true],
            'App\\Controller\\EvenementController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\EvenementController::show' => ['privates', '.service_locator.td4zu.o', 'get_ServiceLocator_Td4zu_OService', true],
            'App\\Controller\\FormationController::delete' => ['privates', '.service_locator.k.bttT5', 'get_ServiceLocator_K_BttT5Service', true],
            'App\\Controller\\FormationController::edit' => ['privates', '.service_locator.k.bttT5', 'get_ServiceLocator_K_BttT5Service', true],
            'App\\Controller\\FormationController::index' => ['privates', '.service_locator.SdimP0A', 'get_ServiceLocator_SdimP0AService', true],
            'App\\Controller\\FormationController::indextemp' => ['privates', '.service_locator.SdimP0A', 'get_ServiceLocator_SdimP0AService', true],
            'App\\Controller\\FormationController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\FormationController::showAdmin' => ['privates', '.service_locator.dy6wSj2', 'get_ServiceLocator_Dy6wSj2Service', true],
            'App\\Controller\\FormationController::showForClient' => ['privates', '.service_locator.JbpNamu', 'get_ServiceLocator_JbpNamuService', true],
            'App\\Controller\\FormationScoreController::deleteAvis' => ['privates', '.service_locator.tZAAnCT', 'get_ServiceLocator_TZAAnCTService', true],
            'App\\Controller\\FormationScoreController::fetchAll' => ['privates', '.service_locator.xGBMrMw', 'get_ServiceLocator_XGBMrMwService', true],
            'App\\Controller\\FormationScoreController::index' => ['privates', '.service_locator.rPk59qI', 'get_ServiceLocator_RPk59qIService', true],
            'App\\Controller\\FormationScoreController::showAvis' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\InscriptionCoursController::delete' => ['privates', '.service_locator.zU2lRyp', 'get_ServiceLocator_ZU2lRypService', true],
            'App\\Controller\\InscriptionCoursController::edit' => ['privates', '.service_locator.zU2lRyp', 'get_ServiceLocator_ZU2lRypService', true],
            'App\\Controller\\InscriptionCoursController::index' => ['privates', '.service_locator.AFZ7DOO', 'get_ServiceLocator_AFZ7DOOService', true],
            'App\\Controller\\InscriptionCoursController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\InscriptionCoursController::show' => ['privates', '.service_locator.YtbWktL', 'get_ServiceLocator_YtbWktLService', true],
            'App\\Controller\\InstructeurRegistrationController::register' => ['privates', '.service_locator.ESgEUJd', 'get_ServiceLocator_ESgEUJdService', true],
            'App\\Controller\\LeconController::delete' => ['privates', '.service_locator.JmqEM1n', 'get_ServiceLocator_JmqEM1nService', true],
            'App\\Controller\\LeconController::edit' => ['privates', '.service_locator.JmqEM1n', 'get_ServiceLocator_JmqEM1nService', true],
            'App\\Controller\\LeconController::generatePdfPersonne' => ['privates', '.service_locator.D8zEG0Q', 'get_ServiceLocator_D8zEG0QService', true],
            'App\\Controller\\LeconController::index' => ['privates', '.service_locator.NzhlhZp', 'get_ServiceLocator_NzhlhZpService', true],
            'App\\Controller\\LeconController::new' => ['privates', '.service_locator.k.bttT5', 'get_ServiceLocator_K_BttT5Service', true],
            'App\\Controller\\LeconController::show' => ['privates', '.service_locator.xUsTS7F', 'get_ServiceLocator_XUsTS7FService', true],
            'App\\Controller\\LeconController::showLessons' => ['privates', '.service_locator.lnsowti', 'get_ServiceLocator_LnsowtiService', true],
            'App\\Controller\\LeconController::showLessonsC' => ['privates', '.service_locator.lnsowti', 'get_ServiceLocator_LnsowtiService', true],
            'App\\Controller\\MessageController::createDiscussion' => ['privates', '.service_locator.VXev_vu', 'get_ServiceLocator_VXevVuService', true],
            'App\\Controller\\MessageController::deleteDiscussion' => ['privates', '.service_locator.q2WLueh', 'get_ServiceLocator_Q2WLuehService', true],
            'App\\Controller\\MessageController::deleteMessage' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\MessageController::editMessage' => ['privates', '.service_locator.r.PNVZh', 'get_ServiceLocator_R_PNVZhService', true],
            'App\\Controller\\MessageController::listDiscussions' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\MessageController::sendMessage' => ['privates', '.service_locator.VXev_vu', 'get_ServiceLocator_VXevVuService', true],
            'App\\Controller\\MessageController::viewDiscussion' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\NotificationController::delete' => ['privates', '.service_locator.OqTO.nA', 'get_ServiceLocator_OqTO_NAService', true],
            'App\\Controller\\NotificationController::edit' => ['privates', '.service_locator.OqTO.nA', 'get_ServiceLocator_OqTO_NAService', true],
            'App\\Controller\\NotificationController::getNotifications' => ['privates', '.service_locator.eD04aH.', 'get_ServiceLocator_ED04aH_Service', true],
            'App\\Controller\\NotificationController::index' => ['privates', '.service_locator.eD04aH.', 'get_ServiceLocator_ED04aH_Service', true],
            'App\\Controller\\NotificationController::new' => ['privates', '.service_locator.xTpWFF5', 'get_ServiceLocator_XTpWFF5Service', true],
            'App\\Controller\\NotificationController::show' => ['privates', '.service_locator.qza7_MB', 'get_ServiceLocator_Qza7MBService', true],
            'App\\Controller\\NotificationController::showClient' => ['privates', '.service_locator.qza7_MB', 'get_ServiceLocator_Qza7MBService', true],
            'App\\Controller\\PayementControllerController::checkPromo' => ['privates', '.service_locator.gKZxhjb', 'get_ServiceLocator_GKZxhjbService', true],
            'App\\Controller\\PayementControllerController::createPaymentIntent' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PayementControllerController::paymentPage' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PayementControllerController::paymentSuccess' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PayementControllerController::paymentSuccessPage' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PayementControllerController::savePayment' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PromotionController::create' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PromotionController::delete' => ['privates', '.service_locator.qawdDqK', 'get_ServiceLocator_QawdDqKService', true],
            'App\\Controller\\PromotionController::edit' => ['privates', '.service_locator.qawdDqK', 'get_ServiceLocator_QawdDqKService', true],
            'App\\Controller\\PromotionController::index' => ['privates', '.service_locator.gGA2khr', 'get_ServiceLocator_GGA2khrService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.ESgEUJd', 'get_ServiceLocator_ESgEUJdService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\SecurityController::loginAdmin' => ['privates', '.service_locator.gKSVznP', 'get_ServiceLocator_GKSVznPService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AdminController:createAdmin' => ['privates', '.service_locator.ESgEUJd', 'get_ServiceLocator_ESgEUJdService', true],
            'App\\Controller\\AdminController:deleteUser' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController:usersList' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AvisController:addAvis' => ['privates', '.service_locator.H4db.HJ', 'get_ServiceLocator_H4db_HJService', true],
            'App\\Controller\\AvisController:delete' => ['privates', '.service_locator.tZAAnCT', 'get_ServiceLocator_TZAAnCTService', true],
            'App\\Controller\\AvisController:edit' => ['privates', '.service_locator.tZAAnCT', 'get_ServiceLocator_TZAAnCTService', true],
            'App\\Controller\\AvisController:index' => ['privates', '.service_locator.R9OG08h', 'get_ServiceLocator_R9OG08hService', true],
            'App\\Controller\\CategorieController:delete' => ['privates', '.service_locator.aw9RHlF', 'get_ServiceLocator_Aw9RHlFService', true],
            'App\\Controller\\CategorieController:edit' => ['privates', '.service_locator.aw9RHlF', 'get_ServiceLocator_Aw9RHlFService', true],
            'App\\Controller\\CategorieController:index' => ['privates', '.service_locator.DFyL8OH', 'get_ServiceLocator_DFyL8OHService', true],
            'App\\Controller\\CategorieController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CategorieController:show' => ['privates', '.service_locator.j7wOkYK', 'get_ServiceLocator_J7wOkYKService', true],
            'App\\Controller\\EvenementController:delete' => ['privates', '.service_locator.JFCU_Ej', 'get_ServiceLocator_JFCUEjService', true],
            'App\\Controller\\EvenementController:edit' => ['privates', '.service_locator.JFCU_Ej', 'get_ServiceLocator_JFCUEjService', true],
            'App\\Controller\\EvenementController:index' => ['privates', '.service_locator.pX4JUuC', 'get_ServiceLocator_PX4JUuCService', true],
            'App\\Controller\\EvenementController:index_front' => ['privates', '.service_locator.pX4JUuC', 'get_ServiceLocator_PX4JUuCService', true],
            'App\\Controller\\EvenementController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\EvenementController:show' => ['privates', '.service_locator.td4zu.o', 'get_ServiceLocator_Td4zu_OService', true],
            'App\\Controller\\FormationController:delete' => ['privates', '.service_locator.k.bttT5', 'get_ServiceLocator_K_BttT5Service', true],
            'App\\Controller\\FormationController:edit' => ['privates', '.service_locator.k.bttT5', 'get_ServiceLocator_K_BttT5Service', true],
            'App\\Controller\\FormationController:index' => ['privates', '.service_locator.SdimP0A', 'get_ServiceLocator_SdimP0AService', true],
            'App\\Controller\\FormationController:indextemp' => ['privates', '.service_locator.SdimP0A', 'get_ServiceLocator_SdimP0AService', true],
            'App\\Controller\\FormationController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\FormationController:showAdmin' => ['privates', '.service_locator.dy6wSj2', 'get_ServiceLocator_Dy6wSj2Service', true],
            'App\\Controller\\FormationController:showForClient' => ['privates', '.service_locator.JbpNamu', 'get_ServiceLocator_JbpNamuService', true],
            'App\\Controller\\FormationScoreController:deleteAvis' => ['privates', '.service_locator.tZAAnCT', 'get_ServiceLocator_TZAAnCTService', true],
            'App\\Controller\\FormationScoreController:fetchAll' => ['privates', '.service_locator.xGBMrMw', 'get_ServiceLocator_XGBMrMwService', true],
            'App\\Controller\\FormationScoreController:index' => ['privates', '.service_locator.rPk59qI', 'get_ServiceLocator_RPk59qIService', true],
            'App\\Controller\\FormationScoreController:showAvis' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\InscriptionCoursController:delete' => ['privates', '.service_locator.zU2lRyp', 'get_ServiceLocator_ZU2lRypService', true],
            'App\\Controller\\InscriptionCoursController:edit' => ['privates', '.service_locator.zU2lRyp', 'get_ServiceLocator_ZU2lRypService', true],
            'App\\Controller\\InscriptionCoursController:index' => ['privates', '.service_locator.AFZ7DOO', 'get_ServiceLocator_AFZ7DOOService', true],
            'App\\Controller\\InscriptionCoursController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\InscriptionCoursController:show' => ['privates', '.service_locator.YtbWktL', 'get_ServiceLocator_YtbWktLService', true],
            'App\\Controller\\InstructeurRegistrationController:register' => ['privates', '.service_locator.ESgEUJd', 'get_ServiceLocator_ESgEUJdService', true],
            'App\\Controller\\LeconController:delete' => ['privates', '.service_locator.JmqEM1n', 'get_ServiceLocator_JmqEM1nService', true],
            'App\\Controller\\LeconController:edit' => ['privates', '.service_locator.JmqEM1n', 'get_ServiceLocator_JmqEM1nService', true],
            'App\\Controller\\LeconController:generatePdfPersonne' => ['privates', '.service_locator.D8zEG0Q', 'get_ServiceLocator_D8zEG0QService', true],
            'App\\Controller\\LeconController:index' => ['privates', '.service_locator.NzhlhZp', 'get_ServiceLocator_NzhlhZpService', true],
            'App\\Controller\\LeconController:new' => ['privates', '.service_locator.k.bttT5', 'get_ServiceLocator_K_BttT5Service', true],
            'App\\Controller\\LeconController:show' => ['privates', '.service_locator.xUsTS7F', 'get_ServiceLocator_XUsTS7FService', true],
            'App\\Controller\\LeconController:showLessons' => ['privates', '.service_locator.lnsowti', 'get_ServiceLocator_LnsowtiService', true],
            'App\\Controller\\LeconController:showLessonsC' => ['privates', '.service_locator.lnsowti', 'get_ServiceLocator_LnsowtiService', true],
            'App\\Controller\\MessageController:createDiscussion' => ['privates', '.service_locator.VXev_vu', 'get_ServiceLocator_VXevVuService', true],
            'App\\Controller\\MessageController:deleteDiscussion' => ['privates', '.service_locator.q2WLueh', 'get_ServiceLocator_Q2WLuehService', true],
            'App\\Controller\\MessageController:deleteMessage' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\MessageController:editMessage' => ['privates', '.service_locator.r.PNVZh', 'get_ServiceLocator_R_PNVZhService', true],
            'App\\Controller\\MessageController:listDiscussions' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\MessageController:sendMessage' => ['privates', '.service_locator.VXev_vu', 'get_ServiceLocator_VXevVuService', true],
            'App\\Controller\\MessageController:viewDiscussion' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\NotificationController:delete' => ['privates', '.service_locator.OqTO.nA', 'get_ServiceLocator_OqTO_NAService', true],
            'App\\Controller\\NotificationController:edit' => ['privates', '.service_locator.OqTO.nA', 'get_ServiceLocator_OqTO_NAService', true],
            'App\\Controller\\NotificationController:getNotifications' => ['privates', '.service_locator.eD04aH.', 'get_ServiceLocator_ED04aH_Service', true],
            'App\\Controller\\NotificationController:index' => ['privates', '.service_locator.eD04aH.', 'get_ServiceLocator_ED04aH_Service', true],
            'App\\Controller\\NotificationController:new' => ['privates', '.service_locator.xTpWFF5', 'get_ServiceLocator_XTpWFF5Service', true],
            'App\\Controller\\NotificationController:show' => ['privates', '.service_locator.qza7_MB', 'get_ServiceLocator_Qza7MBService', true],
            'App\\Controller\\NotificationController:showClient' => ['privates', '.service_locator.qza7_MB', 'get_ServiceLocator_Qza7MBService', true],
            'App\\Controller\\PayementControllerController:checkPromo' => ['privates', '.service_locator.gKZxhjb', 'get_ServiceLocator_GKZxhjbService', true],
            'App\\Controller\\PayementControllerController:createPaymentIntent' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PayementControllerController:paymentPage' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PayementControllerController:paymentSuccess' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PayementControllerController:paymentSuccessPage' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PayementControllerController:savePayment' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PromotionController:create' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PromotionController:delete' => ['privates', '.service_locator.qawdDqK', 'get_ServiceLocator_QawdDqKService', true],
            'App\\Controller\\PromotionController:edit' => ['privates', '.service_locator.qawdDqK', 'get_ServiceLocator_QawdDqKService', true],
            'App\\Controller\\PromotionController:index' => ['privates', '.service_locator.gGA2khr', 'get_ServiceLocator_GGA2khrService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.ESgEUJd', 'get_ServiceLocator_ESgEUJdService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\SecurityController:loginAdmin' => ['privates', '.service_locator.gKSVznP', 'get_ServiceLocator_GKSVznPService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AdminController::createAdmin' => '?',
            'App\\Controller\\AdminController::deleteUser' => '?',
            'App\\Controller\\AdminController::usersList' => '?',
            'App\\Controller\\AvisController::addAvis' => '?',
            'App\\Controller\\AvisController::delete' => '?',
            'App\\Controller\\AvisController::edit' => '?',
            'App\\Controller\\AvisController::index' => '?',
            'App\\Controller\\CategorieController::delete' => '?',
            'App\\Controller\\CategorieController::edit' => '?',
            'App\\Controller\\CategorieController::index' => '?',
            'App\\Controller\\CategorieController::new' => '?',
            'App\\Controller\\CategorieController::show' => '?',
            'App\\Controller\\EvenementController::delete' => '?',
            'App\\Controller\\EvenementController::edit' => '?',
            'App\\Controller\\EvenementController::index' => '?',
            'App\\Controller\\EvenementController::index_front' => '?',
            'App\\Controller\\EvenementController::new' => '?',
            'App\\Controller\\EvenementController::show' => '?',
            'App\\Controller\\FormationController::delete' => '?',
            'App\\Controller\\FormationController::edit' => '?',
            'App\\Controller\\FormationController::index' => '?',
            'App\\Controller\\FormationController::indextemp' => '?',
            'App\\Controller\\FormationController::new' => '?',
            'App\\Controller\\FormationController::showAdmin' => '?',
            'App\\Controller\\FormationController::showForClient' => '?',
            'App\\Controller\\FormationScoreController::deleteAvis' => '?',
            'App\\Controller\\FormationScoreController::fetchAll' => '?',
            'App\\Controller\\FormationScoreController::index' => '?',
            'App\\Controller\\FormationScoreController::showAvis' => '?',
            'App\\Controller\\InscriptionCoursController::delete' => '?',
            'App\\Controller\\InscriptionCoursController::edit' => '?',
            'App\\Controller\\InscriptionCoursController::index' => '?',
            'App\\Controller\\InscriptionCoursController::new' => '?',
            'App\\Controller\\InscriptionCoursController::show' => '?',
            'App\\Controller\\InstructeurRegistrationController::register' => '?',
            'App\\Controller\\LeconController::delete' => '?',
            'App\\Controller\\LeconController::edit' => '?',
            'App\\Controller\\LeconController::generatePdfPersonne' => '?',
            'App\\Controller\\LeconController::index' => '?',
            'App\\Controller\\LeconController::new' => '?',
            'App\\Controller\\LeconController::show' => '?',
            'App\\Controller\\LeconController::showLessons' => '?',
            'App\\Controller\\LeconController::showLessonsC' => '?',
            'App\\Controller\\MessageController::createDiscussion' => '?',
            'App\\Controller\\MessageController::deleteDiscussion' => '?',
            'App\\Controller\\MessageController::deleteMessage' => '?',
            'App\\Controller\\MessageController::editMessage' => '?',
            'App\\Controller\\MessageController::listDiscussions' => '?',
            'App\\Controller\\MessageController::sendMessage' => '?',
            'App\\Controller\\MessageController::viewDiscussion' => '?',
            'App\\Controller\\NotificationController::delete' => '?',
            'App\\Controller\\NotificationController::edit' => '?',
            'App\\Controller\\NotificationController::getNotifications' => '?',
            'App\\Controller\\NotificationController::index' => '?',
            'App\\Controller\\NotificationController::new' => '?',
            'App\\Controller\\NotificationController::show' => '?',
            'App\\Controller\\NotificationController::showClient' => '?',
            'App\\Controller\\PayementControllerController::checkPromo' => '?',
            'App\\Controller\\PayementControllerController::createPaymentIntent' => '?',
            'App\\Controller\\PayementControllerController::paymentPage' => '?',
            'App\\Controller\\PayementControllerController::paymentSuccess' => '?',
            'App\\Controller\\PayementControllerController::paymentSuccessPage' => '?',
            'App\\Controller\\PayementControllerController::savePayment' => '?',
            'App\\Controller\\PromotionController::create' => '?',
            'App\\Controller\\PromotionController::delete' => '?',
            'App\\Controller\\PromotionController::edit' => '?',
            'App\\Controller\\PromotionController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::loginAdmin' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AdminController:createAdmin' => '?',
            'App\\Controller\\AdminController:deleteUser' => '?',
            'App\\Controller\\AdminController:usersList' => '?',
            'App\\Controller\\AvisController:addAvis' => '?',
            'App\\Controller\\AvisController:delete' => '?',
            'App\\Controller\\AvisController:edit' => '?',
            'App\\Controller\\AvisController:index' => '?',
            'App\\Controller\\CategorieController:delete' => '?',
            'App\\Controller\\CategorieController:edit' => '?',
            'App\\Controller\\CategorieController:index' => '?',
            'App\\Controller\\CategorieController:new' => '?',
            'App\\Controller\\CategorieController:show' => '?',
            'App\\Controller\\EvenementController:delete' => '?',
            'App\\Controller\\EvenementController:edit' => '?',
            'App\\Controller\\EvenementController:index' => '?',
            'App\\Controller\\EvenementController:index_front' => '?',
            'App\\Controller\\EvenementController:new' => '?',
            'App\\Controller\\EvenementController:show' => '?',
            'App\\Controller\\FormationController:delete' => '?',
            'App\\Controller\\FormationController:edit' => '?',
            'App\\Controller\\FormationController:index' => '?',
            'App\\Controller\\FormationController:indextemp' => '?',
            'App\\Controller\\FormationController:new' => '?',
            'App\\Controller\\FormationController:showAdmin' => '?',
            'App\\Controller\\FormationController:showForClient' => '?',
            'App\\Controller\\FormationScoreController:deleteAvis' => '?',
            'App\\Controller\\FormationScoreController:fetchAll' => '?',
            'App\\Controller\\FormationScoreController:index' => '?',
            'App\\Controller\\FormationScoreController:showAvis' => '?',
            'App\\Controller\\InscriptionCoursController:delete' => '?',
            'App\\Controller\\InscriptionCoursController:edit' => '?',
            'App\\Controller\\InscriptionCoursController:index' => '?',
            'App\\Controller\\InscriptionCoursController:new' => '?',
            'App\\Controller\\InscriptionCoursController:show' => '?',
            'App\\Controller\\InstructeurRegistrationController:register' => '?',
            'App\\Controller\\LeconController:delete' => '?',
            'App\\Controller\\LeconController:edit' => '?',
            'App\\Controller\\LeconController:generatePdfPersonne' => '?',
            'App\\Controller\\LeconController:index' => '?',
            'App\\Controller\\LeconController:new' => '?',
            'App\\Controller\\LeconController:show' => '?',
            'App\\Controller\\LeconController:showLessons' => '?',
            'App\\Controller\\LeconController:showLessonsC' => '?',
            'App\\Controller\\MessageController:createDiscussion' => '?',
            'App\\Controller\\MessageController:deleteDiscussion' => '?',
            'App\\Controller\\MessageController:deleteMessage' => '?',
            'App\\Controller\\MessageController:editMessage' => '?',
            'App\\Controller\\MessageController:listDiscussions' => '?',
            'App\\Controller\\MessageController:sendMessage' => '?',
            'App\\Controller\\MessageController:viewDiscussion' => '?',
            'App\\Controller\\NotificationController:delete' => '?',
            'App\\Controller\\NotificationController:edit' => '?',
            'App\\Controller\\NotificationController:getNotifications' => '?',
            'App\\Controller\\NotificationController:index' => '?',
            'App\\Controller\\NotificationController:new' => '?',
            'App\\Controller\\NotificationController:show' => '?',
            'App\\Controller\\NotificationController:showClient' => '?',
            'App\\Controller\\PayementControllerController:checkPromo' => '?',
            'App\\Controller\\PayementControllerController:createPaymentIntent' => '?',
            'App\\Controller\\PayementControllerController:paymentPage' => '?',
            'App\\Controller\\PayementControllerController:paymentSuccess' => '?',
            'App\\Controller\\PayementControllerController:paymentSuccessPage' => '?',
            'App\\Controller\\PayementControllerController:savePayment' => '?',
            'App\\Controller\\PromotionController:create' => '?',
            'App\\Controller\\PromotionController:delete' => '?',
            'App\\Controller\\PromotionController:edit' => '?',
            'App\\Controller\\PromotionController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:loginAdmin' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
