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
        '/hello' => [
            [['_route' => 'hello_index', '_controller' => 'App\\Controller\\HelloController::hello'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\HelloController::hello'], null, null, null, false, false, null],
        ],
        '/service' => [[['_route' => 'service', '_controller' => 'App\\Controller\\HelloController::service'], null, null, null, false, false, null]],
        '/serviceII' => [[['_route' => 'serviceII', '_controller' => 'App\\Controller\\HelloController::serviceII'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'blog_index', '_controller' => 'App\\Controller\\HelloController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'form', '_controller' => 'App\\Controller\\UserController::createUserForm'], null, null, null, false, false, null]],
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
                .'|/hello/(?'
                    .'|exemple/(?'
                        .'|(\\d+)(*:195)'
                        .'|([^/]++)(*:211)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:231)'
                        .'|(*:239)'
                    .')'
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
        195 => [[['_route' => 'app_hello_exemplenumber', '_controller' => 'App\\Controller\\HelloController::ExempleNumber'], ['param'], ['GET' => 0], null, false, true, null]],
        211 => [[['_route' => 'app_hello_exempledefault', '_controller' => 'App\\Controller\\HelloController::ExempleDefault'], ['param'], null, null, false, true, null]],
        231 => [[['_route' => 'hello_index_name', '_controller' => 'App\\Controller\\HelloController::helloDefault'], ['name'], null, null, false, true, null]],
        239 => [
            [['_route' => 'hello_index_local', '_controller' => 'App\\Controller\\HelloController::helloLocal'], ['_locale'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
