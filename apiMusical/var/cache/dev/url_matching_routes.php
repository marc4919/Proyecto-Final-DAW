<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/audio' => [[['_route' => 'app_audio_index', '_controller' => 'App\\Controller\\AudioController::index'], null, ['GET' => 0], null, true, false, null]],
        '/audio/new' => [[['_route' => 'app_audio_new', '_controller' => 'App\\Controller\\AudioController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, true, false, null]],
        '/development' => [[['_route' => 'app_development_info', '_controller' => 'App\\Controller\\DevelopmentInfoController::index'], null, null, null, true, false, null]],
        '/imagen' => [[['_route' => 'app_imagen_index', '_controller' => 'App\\Controller\\ImagenController::index'], null, ['GET' => 0], null, true, false, null]],
        '/imagen/new' => [[['_route' => 'app_imagen_new', '_controller' => 'App\\Controller\\ImagenController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/info' => [[['_route' => 'app_info_app', '_controller' => 'App\\Controller\\InfoAppController::index'], null, null, null, true, false, null]],
        '/main' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/musical' => [[['_route' => 'app_musical_index', '_controller' => 'App\\Controller\\MusicalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/musical/new' => [[['_route' => 'app_musical_new', '_controller' => 'App\\Controller\\MusicalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/participante' => [[['_route' => 'app_participante_index', '_controller' => 'App\\Controller\\ParticipanteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/participante/imprimir' => [[['_route' => 'app_participante_pdfAction', '_controller' => 'App\\Controller\\ParticipanteController::pdfAction'], null, ['GET' => 0], null, false, false, null]],
        '/participante/new' => [[['_route' => 'app_participante_new', '_controller' => 'App\\Controller\\ParticipanteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|udio/([^/]++)(?'
                        .'|(*:28)'
                        .'|/edit(*:40)'
                        .'|(*:47)'
                    .')'
                    .'|pi(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:88)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:118)'
                            .'|contexts/(.+)(?:\\.([^/]++))?(*:154)'
                            .'|imagens(?'
                                .'|(?:\\.([^/]++))?(*:187)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:221)'
                            .')'
                            .'|musicals(?'
                                .'|(?:\\.([^/]++))?(*:256)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:290)'
                            .')'
                            .'|audio(?'
                                .'|(?:\\.([^/]++))?(*:322)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:356)'
                            .')'
                            .'|participantes(?'
                                .'|(?:\\.([^/]++))?(*:396)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:430)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/imagen/([^/]++)(?'
                    .'|(*:461)'
                    .'|/edit(*:474)'
                    .'|(*:482)'
                .')'
                .'|/musical/([^/]++)(?'
                    .'|(*:511)'
                    .'|/edit(*:524)'
                    .'|(*:532)'
                .')'
                .'|/participante/([^/]++)(?'
                    .'|(*:566)'
                    .'|/edit(*:579)'
                    .'|(*:587)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:613)'
                    .'|/edit(*:626)'
                    .'|(*:634)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:671)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'app_audio_show', '_controller' => 'App\\Controller\\AudioController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        40 => [[['_route' => 'app_audio_edit', '_controller' => 'App\\Controller\\AudioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        47 => [[['_route' => 'app_audio_delete', '_controller' => 'App\\Controller\\AudioController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        88 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        118 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        154 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        187 => [[['_route' => 'api_imagens_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Imagen', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        221 => [[['_route' => 'api_imagens_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Imagen', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'api_musicals_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Musical', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        290 => [[['_route' => 'api_musicals_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Musical', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        322 => [[['_route' => 'api_audio_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Audio', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        356 => [[['_route' => 'api_audio_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Audio', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        396 => [[['_route' => 'api_participantes_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Participante', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        430 => [[['_route' => 'api_participantes_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Participante', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        461 => [[['_route' => 'app_imagen_show', '_controller' => 'App\\Controller\\ImagenController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        474 => [[['_route' => 'app_imagen_edit', '_controller' => 'App\\Controller\\ImagenController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        482 => [[['_route' => 'app_imagen_delete', '_controller' => 'App\\Controller\\ImagenController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        511 => [[['_route' => 'app_musical_show', '_controller' => 'App\\Controller\\MusicalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        524 => [[['_route' => 'app_musical_edit', '_controller' => 'App\\Controller\\MusicalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        532 => [[['_route' => 'app_musical_delete', '_controller' => 'App\\Controller\\MusicalController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        566 => [[['_route' => 'app_participante_show', '_controller' => 'App\\Controller\\ParticipanteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        579 => [[['_route' => 'app_participante_edit', '_controller' => 'App\\Controller\\ParticipanteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        587 => [[['_route' => 'app_participante_delete', '_controller' => 'App\\Controller\\ParticipanteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        613 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        626 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        634 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        671 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
