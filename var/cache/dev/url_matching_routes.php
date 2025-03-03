<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/dashboard/users' => [[['_route' => 'app_users_list', '_controller' => 'App\\Controller\\AdminController::usersList'], null, null, null, false, false, null]],
        '/create-admin' => [[['_route' => 'app_create_admin', '_controller' => 'App\\Controller\\AdminController::createAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/events' => [[['_route' => 'app_evenement_front', '_controller' => 'App\\Controller\\EvenementController::index_front'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/new' => [[['_route' => 'app_evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/formation/formations' => [[['_route' => 'app_formations', '_controller' => 'App\\Controller\\FormationController::indextemp'], null, null, null, false, false, null]],
        '/formation' => [[['_route' => 'app_formation_index', '_controller' => 'App\\Controller\\FormationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/formation/new' => [[['_route' => 'app_formation_new', '_controller' => 'App\\Controller\\FormationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/score' => [[['_route' => 'app_formation_score_list', '_controller' => 'App\\Controller\\FormationScoreController::index'], null, null, null, false, false, null]],
        '/admin/formations' => [[['_route' => 'admin_formation_list', '_controller' => 'App\\Controller\\FormationScoreController::fetchAll'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_inscription_cours_index', '_controller' => 'App\\Controller\\InscriptionCoursController::index'], null, ['GET' => 0], null, true, false, null]],
        '/instructeur' => [[['_route' => 'app_instructeur', '_controller' => 'App\\Controller\\InstructeurController::index'], null, null, null, false, false, null]],
        '/register_instructeur' => [[['_route' => 'app_register_instructeur', '_controller' => 'App\\Controller\\InstructeurRegistrationController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/lecon' => [[['_route' => 'app_lecon_index', '_controller' => 'App\\Controller\\LeconController::index'], null, ['GET' => 0], null, false, false, null]],
        '/discussions' => [[['_route' => 'app_message', '_controller' => 'App\\Controller\\MessageController::listDiscussions'], null, null, null, false, false, null]],
        '/message/send' => [[['_route' => 'send_message', '_controller' => 'App\\Controller\\MessageController::sendMessage'], null, ['POST' => 0], null, false, false, null]],
        '/discussion/new' => [[['_route' => 'create_discussion', '_controller' => 'App\\Controller\\MessageController::createDiscussion'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/notification' => [[['_route' => 'app_notification_index', '_controller' => 'App\\Controller\\NotificationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/notification/notifications' => [[['_route' => 'app_notifications', '_controller' => 'App\\Controller\\NotificationController::getNotifications'], null, null, null, false, false, null]],
        '/create-payment-intent' => [[['_route' => 'create_payment_intent', '_controller' => 'App\\Controller\\PayementControllerController::createPaymentIntent'], null, ['POST' => 0], null, false, false, null]],
        '/cancel' => [[['_route' => 'payment_cancel', '_controller' => 'App\\Controller\\PayementControllerController::cancel'], null, null, null, false, false, null]],
        '/check-promo' => [[['_route' => 'check_promo', '_controller' => 'App\\Controller\\PayementControllerController::checkPromo'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard/promotion' => [[['_route' => 'admin_promotion_index', '_controller' => 'App\\Controller\\PromotionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/dashboard/promotion/create' => [[['_route' => 'admin_promotion_create', '_controller' => 'App\\Controller\\PromotionController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/login/admin' => [[['_route' => 'app_login_admin', '_controller' => 'App\\Controller\\SecurityController::loginAdmin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/redirect' => [[['_route' => 'app_redirect_after_login', '_controller' => 'App\\Controller\\SecurityController::redirectAfterLogin'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/d(?'
                    .'|ashboard/(?'
                        .'|users/delete/([^/]++)(*:240)'
                        .'|promotion/([^/]++)/(?'
                            .'|edit(*:274)'
                            .'|delete(*:288)'
                        .')'
                    .')'
                    .'|iscussion/(?'
                        .'|(\\d+)(*:316)'
                        .'|delete/([^/]++)(*:339)'
                    .')'
                .')'
                .'|/a(?'
                    .'|vis(?'
                        .'|(?:/(\\d+))?(*:371)'
                        .'|/(?'
                            .'|add/([^/]++)/([^/]++)(*:404)'
                            .'|([^/]++)(?'
                                .'|/edit(*:428)'
                                .'|(*:436)'
                            .')'
                        .')'
                    .')'
                    .'|dmin/(?'
                        .'|formation/([^/]++)(*:473)'
                        .'|avis/([^/]++)(*:494)'
                    .')'
                .')'
                .'|/categorie/([^/]++)(?'
                    .'|(*:526)'
                    .'|/edit(*:539)'
                    .'|(*:547)'
                .')'
                .'|/evenement/([^/]++)(?'
                    .'|/edit(*:583)'
                    .'|(*:591)'
                .')'
                .'|/formation/(?'
                    .'|([^/]++)(*:622)'
                    .'|ad/([^/]++)(*:641)'
                    .'|([^/]++)(?'
                        .'|/edit(*:665)'
                        .'|(*:673)'
                    .')'
                .')'
                .'|/inscription/(?'
                    .'|new/([^/]++)(*:711)'
                    .'|([^/]++)(?'
                        .'|(*:730)'
                        .'|/edit(*:743)'
                        .'|(*:751)'
                    .')'
                .')'
                .'|/lecon/(?'
                    .'|formation/(?'
                        .'|([^/]++)/lessons(*:800)'
                        .'|c/([^/]++)/lessons(*:826)'
                    .')'
                    .'|new/([^/]++)(*:847)'
                    .'|([^/]++)(?'
                        .'|(*:866)'
                        .'|/edit(*:879)'
                        .'|(*:887)'
                    .')'
                    .'|pdf/([^/]++)(*:908)'
                .')'
                .'|/message/(?'
                    .'|delete/([^/]++)(*:944)'
                    .'|edit/([^/]++)(*:965)'
                .')'
                .'|/notification/(?'
                    .'|new/([^/]++)(*:1003)'
                    .'|([^/]++)(*:1020)'
                    .'|notif/([^/]++)(*:1043)'
                    .'|([^/]++)(?'
                        .'|/edit(*:1068)'
                        .'|(*:1077)'
                    .')'
                .')'
                .'|/s(?'
                    .'|ave\\-payment/([^/]++)(*:1114)'
                    .'|uccess/([^/]++)(*:1138)'
                .')'
                .'|/payment/(?'
                    .'|success\\-page/([^/]++)(*:1182)'
                    .'|([^/]++)(*:1199)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        240 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], ['POST' => 0], null, false, true, null]],
        274 => [[['_route' => 'admin_promotion_edit', '_controller' => 'App\\Controller\\PromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        288 => [[['_route' => 'admin_promotion_delete', '_controller' => 'App\\Controller\\PromotionController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        316 => [[['_route' => 'view_discussion', '_controller' => 'App\\Controller\\MessageController::viewDiscussion'], ['id'], null, null, false, true, null]],
        339 => [[['_route' => 'delete_discussion', '_controller' => 'App\\Controller\\MessageController::deleteDiscussion'], ['id'], ['POST' => 0], null, false, true, null]],
        371 => [[['_route' => 'app_avis_index', 'formationId' => '1', '_controller' => 'App\\Controller\\AvisController::index'], ['formationId'], ['GET' => 0], null, false, true, null]],
        404 => [[['_route' => 'app_avis_add', '_controller' => 'App\\Controller\\AvisController::addAvis'], ['formationId', 'userId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        428 => [[['_route' => 'app_avis_edit', '_controller' => 'App\\Controller\\AvisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        436 => [[['_route' => 'app_avis_delete', '_controller' => 'App\\Controller\\AvisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        473 => [[['_route' => 'admin_formation_show', '_controller' => 'App\\Controller\\FormationScoreController::showAvis'], ['id'], null, null, false, true, null]],
        494 => [[['_route' => 'admin_avis_delete', '_controller' => 'App\\Controller\\FormationScoreController::deleteAvis'], ['id'], ['POST' => 0], null, false, true, null]],
        526 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        539 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        547 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        583 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        591 => [
            [['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        622 => [[['_route' => 'app_formation_show', '_controller' => 'App\\Controller\\FormationController::showForClient'], ['id'], ['GET' => 0], null, false, true, null]],
        641 => [[['_route' => 'app_formation_show_admin', '_controller' => 'App\\Controller\\FormationController::showAdmin'], ['id'], ['GET' => 0], null, false, true, null]],
        665 => [[['_route' => 'app_formation_edit', '_controller' => 'App\\Controller\\FormationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        673 => [[['_route' => 'app_formation_delete', '_controller' => 'App\\Controller\\FormationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        711 => [[['_route' => 'app_inscription_cours_new', '_controller' => 'App\\Controller\\InscriptionCoursController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        730 => [[['_route' => 'app_inscription_cours_show', '_controller' => 'App\\Controller\\InscriptionCoursController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        743 => [[['_route' => 'app_inscription_cours_edit', '_controller' => 'App\\Controller\\InscriptionCoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        751 => [[['_route' => 'app_inscription_cours_delete', '_controller' => 'App\\Controller\\InscriptionCoursController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        800 => [[['_route' => 'app_formation_lessons', '_controller' => 'App\\Controller\\LeconController::showLessons'], ['id'], ['GET' => 0], null, false, false, null]],
        826 => [[['_route' => 'app_formation_lessons_c', '_controller' => 'App\\Controller\\LeconController::showLessonsC'], ['id'], ['GET' => 0], null, false, false, null]],
        847 => [[['_route' => 'app_lecon_new', '_controller' => 'App\\Controller\\LeconController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        866 => [[['_route' => 'app_lecon_show', '_controller' => 'App\\Controller\\LeconController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        879 => [[['_route' => 'app_lecon_edit', '_controller' => 'App\\Controller\\LeconController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        887 => [[['_route' => 'app_lecon_delete', '_controller' => 'App\\Controller\\LeconController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        908 => [[['_route' => 'lecon.pdf', '_controller' => 'App\\Controller\\LeconController::generatePdfPersonne'], ['id'], ['GET' => 0], null, false, true, null]],
        944 => [[['_route' => 'delete_message', '_controller' => 'App\\Controller\\MessageController::deleteMessage'], ['id'], ['POST' => 0], null, false, true, null]],
        965 => [[['_route' => 'edit_message', '_controller' => 'App\\Controller\\MessageController::editMessage'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1003 => [[['_route' => 'app_notification_new', '_controller' => 'App\\Controller\\NotificationController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1020 => [[['_route' => 'app_notification_show', '_controller' => 'App\\Controller\\NotificationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1043 => [[['_route' => 'app_notification_show_cli', '_controller' => 'App\\Controller\\NotificationController::showCli'], ['id'], ['GET' => 0], null, false, true, null]],
        1068 => [[['_route' => 'app_notification_edit', '_controller' => 'App\\Controller\\NotificationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1077 => [[['_route' => 'app_notification_delete', '_controller' => 'App\\Controller\\NotificationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1114 => [[['_route' => 'save_payment', '_controller' => 'App\\Controller\\PayementControllerController::savePayment'], ['id'], ['POST' => 0], null, false, true, null]],
        1138 => [[['_route' => 'payment_success', '_controller' => 'App\\Controller\\PayementControllerController::paymentSuccess'], ['id'], null, null, false, true, null]],
        1182 => [[['_route' => 'payment_success_page', '_controller' => 'App\\Controller\\PayementControllerController::paymentSuccessPage'], ['id'], null, null, false, true, null]],
        1199 => [
            [['_route' => 'payment_page', '_controller' => 'App\\Controller\\PayementControllerController::paymentPage'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
