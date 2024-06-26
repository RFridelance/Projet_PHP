<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/event/new' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, null, null, false, false, null]],
        '/events' => [[['_route' => 'app_event_list', '_controller' => 'App\\Controller\\EventController::list'], null, null, null, false, false, null]],
        '/inscriptions' => [[['_route' => 'app_inscriptions', '_controller' => 'App\\Controller\\EventController::inscriptions'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/profile/change-password' => [[['_route' => 'user_change_password', '_controller' => 'App\\Controller\\UserController::changePassword'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/event/(?'
                    .'|([^/]++)/(?'
                        .'|edit(*:68)'
                        .'|delete(*:81)'
                    .')'
                    .'|subscribe/([^/]++)(*:107)'
                    .'|unsubscribe/([^/]++)(*:135)'
                .')'
                .'|/user/([^/]++)/update(*:165)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        68 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        81 => [[['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        107 => [[['_route' => 'app_event_subscribe', '_controller' => 'App\\Controller\\EventController::subscribe'], ['id'], null, null, false, true, null]],
        135 => [[['_route' => 'app_event_unsubscribe', '_controller' => 'App\\Controller\\EventController::unsubscribe'], ['id'], null, null, false, true, null]],
        165 => [
            [['_route' => 'user_update', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
