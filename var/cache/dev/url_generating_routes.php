<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'app_hello_exemplenumber' => [['param'], ['_controller' => 'App\\Controller\\HelloController::ExempleNumber'], ['param' => '\\d+'], [['variable', '/', '\\d+', 'param', true], ['text', '/hello/exemple']], [], []],
    'app_hello_exempledefault' => [['param'], ['_controller' => 'App\\Controller\\HelloController::ExempleDefault'], [], [['variable', '/', '[^/]++', 'param', true], ['text', '/hello/exemple']], [], []],
    'hello_index' => [[], ['_controller' => 'App\\Controller\\HelloController::hello'], [], [['text', '/hello']], [], []],
    'hello_index_name' => [['name'], ['_controller' => 'App\\Controller\\HelloController::helloDefault'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/hello']], [], []],
    'hello_index_local' => [['_locale'], ['_controller' => 'App\\Controller\\HelloController::helloLocal'], [], [['variable', '/', '[^/]++', '_locale', true], ['text', '/hello']], [], []],
    'service' => [[], ['_controller' => 'App\\Controller\\HelloController::service'], [], [['text', '/service']], [], []],
    'serviceII' => [[], ['_controller' => 'App\\Controller\\HelloController::serviceII'], [], [['text', '/serviceII']], [], []],
    'blog_index' => [[], ['_controller' => 'App\\Controller\\HelloController::index'], [], [['text', '/']], [], []],
    'form' => [[], ['_controller' => 'App\\Controller\\UserController::createUserForm'], [], [['text', '/user']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\HelloController::hello'], [], [['text', '/hello']], [], []],
];
