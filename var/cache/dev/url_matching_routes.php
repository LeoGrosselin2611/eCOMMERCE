<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/auth' => [[['_route' => 'app_auth', '_controller' => 'App\\Controller\\AuthController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart_removed', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'app_orders', '_controller' => 'App\\Controller\\OrdersController::index'], null, null, null, false, false, null]],
        '/admin/products' => [[['_route' => 'app_products_index', '_controller' => 'App\\Controller\\ProductsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/products/new' => [[['_route' => 'app_products_new', '_controller' => 'App\\Controller\\ProductsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/shop' => [[['_route' => 'shop_index', '_controller' => 'App\\Controller\\ShopController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/cart/(?'
                    .'|add/([^/]++)(*:28)'
                    .'|remove/([^/]++)(*:50)'
                .')'
                .'|/admin/products/([^/]++)(?'
                    .'|(*:85)'
                    .'|/edit(*:97)'
                    .'|(*:104)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:130)'
                    .'|/edit(*:143)'
                    .'|(*:151)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:191)'
                    .'|wdt/([^/]++)(*:211)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:257)'
                            .'|router(*:271)'
                            .'|exception(?'
                                .'|(*:291)'
                                .'|\\.css(*:304)'
                            .')'
                        .')'
                        .'|(*:314)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        50 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        85 => [[['_route' => 'app_products_show', '_controller' => 'App\\Controller\\ProductsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        97 => [[['_route' => 'app_products_edit', '_controller' => 'App\\Controller\\ProductsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        104 => [[['_route' => 'app_products_delete', '_controller' => 'App\\Controller\\ProductsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        130 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        143 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        151 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        191 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        211 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        257 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        271 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        291 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        304 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        314 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
