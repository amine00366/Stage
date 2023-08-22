<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'signup' => [[], ['_controller' => 'App\\Controller\\SecurityController::signup'], [], [['text', '/signup']], [], [], []],
    'logintemplate' => [[], ['_controller' => 'App\\Controller\\PagesController::logintemp'], [], [['text', '/logintemp']], [], [], []],
    'searchBande' => [[], ['_controller' => 'App\\Controller\\PagesController::searchBande'], [], [['text', '/searchBande']], [], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'AddBandes' => [[], ['_controller' => 'App\\Controller\\PagesController::ajouterBande'], [], [['text', '/addBandes']], [], [], []],
    'listBandes' => [[], ['_controller' => 'App\\Controller\\PagesController::listBandes'], [], [['text', '/listBandes']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\PagesController::index'], [], [['text', '/admin']], [], [], []],
    'tableau' => [[], ['_controller' => 'App\\Controller\\PagesController::listarmoire'], [], [['text', '/aa']], [], [], []],
    'editArmoire' => [['id'], ['_controller' => 'App\\Controller\\PagesController::editArmoire'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/editArmoire']], [], [], []],
    'ajoutArmoire' => [[], ['_controller' => 'App\\Controller\\PagesController::new'], [], [['text', '/addArmoire']], [], [], []],
    'deleteArmoire' => [['id'], ['_controller' => 'App\\Controller\\PagesController::deleteArmoire'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteArmoire']], [], [], []],
    'deleteBande' => [['id'], ['_controller' => 'App\\Controller\\PagesController::deleteBande'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteBande']], [], [], []],
    'editBande' => [['id'], ['_controller' => 'App\\Controller\\PagesController::editBande'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/editBande']], [], [], []],
];
