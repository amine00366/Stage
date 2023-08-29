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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/signup' => [[['_route' => 'signup', '_controller' => 'App\\Controller\\SecurityController::signup'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/showExpiredBandes' => [[['_route' => 'showExpiredBandes', '_controller' => 'App\\Controller\\PagesController::showExpiredBandes'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logintemp' => [[['_route' => 'logintemplate', '_controller' => 'App\\Controller\\PagesController::logintemp'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/searchBande' => [[['_route' => 'searchBande', '_controller' => 'App\\Controller\\PagesController::searchBande'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\PagesController::dashboard'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cal' => [[['_route' => 'cal', '_controller' => 'App\\Controller\\PagesController::cal'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/countUsers' => [[['_route' => 'countUsers', '_controller' => 'App\\Controller\\PagesController::countUsers'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/addBandes' => [[['_route' => 'AddBandes', '_controller' => 'App\\Controller\\PagesController::ajouterBande'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/BandeExpire' => [[['_route' => 'BandeExpire', '_controller' => 'App\\Controller\\PagesController::BandeExpire'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/listBandes' => [[['_route' => 'listBandes', '_controller' => 'App\\Controller\\PagesController::listBandes'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\RegistrationController::users'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'index', '_controller' => 'App\\Controller\\PagesController::index'], null, null, null, false, false, null]],
        '/aa' => [[['_route' => 'tableau', '_controller' => 'App\\Controller\\PagesController::listarmoire'], null, null, null, false, false, null]],
        '/addArmoire' => [[['_route' => 'ajoutArmoire', '_controller' => 'App\\Controller\\PagesController::new'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/delete(?'
                    .'|User/([^/]++)(*:192)'
                    .'|Armoire/([^/]++)(*:216)'
                    .'|Bande/([^/]++)(*:238)'
                .')'
                .'|/edit(?'
                    .'|User/([^/]++)(*:268)'
                    .'|Armoire/([^/]++)(*:292)'
                    .'|Bande/([^/]++)(*:314)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        192 => [[['_route' => 'deleteUser', '_controller' => 'App\\Controller\\RegistrationController::deleteUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        216 => [[['_route' => 'deleteArmoire', '_controller' => 'App\\Controller\\PagesController::deleteArmoire'], ['id'], null, null, false, true, null]],
        238 => [[['_route' => 'deleteBande', '_controller' => 'App\\Controller\\PagesController::deleteBande'], ['id'], null, null, false, true, null]],
        268 => [[['_route' => 'editUser', '_controller' => 'App\\Controller\\RegistrationController::editUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        292 => [[['_route' => 'editArmoire', '_controller' => 'App\\Controller\\PagesController::editArmoire'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        314 => [
            [['_route' => 'editBande', '_controller' => 'App\\Controller\\PagesController::editBande'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
