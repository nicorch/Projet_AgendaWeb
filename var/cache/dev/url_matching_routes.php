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
        '/avis' => [[['_route' => 'avis_index', '_controller' => 'App\\Controller\\AvisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/avis/new' => [[['_route' => 'avis_new', '_controller' => 'App\\Controller\\AvisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cours' => [[['_route' => 'cours_index', '_controller' => 'App\\Controller\\CoursController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cours/new' => [[['_route' => 'cours_new', '_controller' => 'App\\Controller\\CoursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/matiere' => [[['_route' => 'matiere_index', '_controller' => 'App\\Controller\\MatiereController::index'], null, ['GET' => 0], null, true, false, null]],
        '/matiere/new' => [[['_route' => 'matiere_new', '_controller' => 'App\\Controller\\MatiereController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/professeur' => [[['_route' => 'professeur_index', '_controller' => 'App\\Controller\\ProfesseurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/professeur/new' => [[['_route' => 'professeur_new', '_controller' => 'App\\Controller\\ProfesseurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
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
                .'|/avis/([^/]++)(?'
                    .'|(*:186)'
                    .'|/edit(*:199)'
                    .'|(*:207)'
                .')'
                .'|/cours/([^/]++)(?'
                    .'|(*:234)'
                    .'|/edit(*:247)'
                    .'|(*:255)'
                .')'
                .'|/matiere/([^/]++)(?'
                    .'|(*:284)'
                    .'|/edit(*:297)'
                    .'|(*:305)'
                .')'
                .'|/professeur/([^/]++)(?'
                    .'|(*:337)'
                    .'|/edit(*:350)'
                    .'|(*:358)'
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
        186 => [[['_route' => 'avis_show', '_controller' => 'App\\Controller\\AvisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        199 => [[['_route' => 'avis_edit', '_controller' => 'App\\Controller\\AvisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        207 => [[['_route' => 'avis_delete', '_controller' => 'App\\Controller\\AvisController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        234 => [[['_route' => 'cours_show', '_controller' => 'App\\Controller\\CoursController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        247 => [[['_route' => 'cours_edit', '_controller' => 'App\\Controller\\CoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        255 => [[['_route' => 'cours_delete', '_controller' => 'App\\Controller\\CoursController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        284 => [[['_route' => 'matiere_show', '_controller' => 'App\\Controller\\MatiereController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        297 => [[['_route' => 'matiere_edit', '_controller' => 'App\\Controller\\MatiereController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        305 => [[['_route' => 'matiere_delete', '_controller' => 'App\\Controller\\MatiereController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        337 => [[['_route' => 'professeur_show', '_controller' => 'App\\Controller\\ProfesseurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        350 => [[['_route' => 'professeur_edit', '_controller' => 'App\\Controller\\ProfesseurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        358 => [
            [['_route' => 'professeur_delete', '_controller' => 'App\\Controller\\ProfesseurController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
