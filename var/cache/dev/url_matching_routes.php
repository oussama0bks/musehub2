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
        '/admin/dashboard' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, false, false, null]],
        '/admin/artworks' => [
            [['_route' => 'admin_artwork_index', '_controller' => 'App\\Controller\\ArtworkAdminController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'admin_artworks_list', '_controller' => 'App\\Controller\\ArtworkDashboardController::list'], null, ['GET' => 0], null, false, false, null],
        ],
        '/admin/artworks/new' => [[['_route' => 'admin_artwork_new', '_controller' => 'App\\Controller\\ArtworkAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/artworks/categories' => [[['_route' => 'admin_category_index', '_controller' => 'App\\Controller\\ArtworkAdminController::categories'], null, ['GET' => 0], null, false, false, null]],
        '/admin/artworks/categories/new' => [[['_route' => 'admin_category_new', '_controller' => 'App\\Controller\\ArtworkAdminController::categoryNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/artworks' => [
            [['_route' => 'api_artworks_list', '_controller' => 'App\\Controller\\ArtworkApiController::list'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_artworks_create', '_controller' => 'App\\Controller\\ArtworkApiController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/admin/artworks/statistics' => [[['_route' => 'admin_artworks_stats', '_controller' => 'App\\Controller\\ArtworkDashboardController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/api/auth/register' => [
            [['_route' => 'api_auth_register', '_controller' => 'App\\Controller\\AuthApiController::register'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_auth_register_form', '_controller' => 'App\\Controller\\RegistrationController::apiRegisterRedirect'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/auth/me' => [[['_route' => 'api_auth_me', '_controller' => 'App\\Controller\\AuthApiController::me'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\BackOfficeController::dashboard'], null, null, null, true, false, null]],
        '/api/posts' => [
            [['_route' => 'api_posts_list', '_controller' => 'App\\Controller\\CommunityApiController::list'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_posts_create', '_controller' => 'App\\Controller\\CommunityApiController::create'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_post_list', '_controller' => 'App\\Controller\\PostController::list'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_post_create', '_controller' => 'App\\Controller\\PostController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/community/new' => [[['_route' => 'app_community_new', '_controller' => 'App\\Controller\\CommunityController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/community' => [[['_route' => 'admin_community_list', '_controller' => 'App\\Controller\\CommunityDashboardController::list'], null, ['GET' => 0], null, false, false, null]],
        '/admin/community/posts/new' => [[['_route' => 'admin_community_post_new', '_controller' => 'App\\Controller\\CommunityDashboardController::newPost'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/events/search' => [[['_route' => 'api_events_search', '_controller' => 'App\\Controller\\EventApiController::search'], null, ['GET' => 0], null, false, false, null]],
        '/api/events/map' => [[['_route' => 'api_events_map', '_controller' => 'App\\Controller\\EventApiController::map'], null, ['GET' => 0], null, false, false, null]],
        '/api/events' => [[['_route' => 'api_events_create', '_controller' => 'App\\Controller\\EventApiController::create'], null, ['POST' => 0], null, false, false, null]],
        '/admin/events' => [[['_route' => 'admin_events_list', '_controller' => 'App\\Controller\\EventDashboardController::list'], null, ['GET' => 0], null, false, false, null]],
        '/admin/events/new' => [[['_route' => 'admin_events_new', '_controller' => 'App\\Controller\\EventDashboardController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/event-types' => [
            [['_route' => 'api_event_types_list', '_controller' => 'App\\Controller\\EventTypeApiController::list'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_event_types_create', '_controller' => 'App\\Controller\\EventTypeApiController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/event-types/stats/summary' => [[['_route' => 'api_event_types_stats', '_controller' => 'App\\Controller\\EventTypeApiController::stats'], null, ['GET' => 0], null, false, false, null]],
        '/admin/event-types' => [[['_route' => 'admin_event_types_list', '_controller' => 'App\\Controller\\EventTypeDashboardController::list'], null, ['GET' => 0], null, false, false, null]],
        '/admin/event-types/new' => [[['_route' => 'admin_event_types_new', '_controller' => 'App\\Controller\\EventTypeDashboardController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\FrontOfficeController::index'], null, null, null, false, false, null]],
        '/artworks' => [[['_route' => 'artworks', '_controller' => 'App\\Controller\\FrontOfficeController::artworks'], null, null, null, false, false, null]],
        '/artists' => [[['_route' => 'artists', '_controller' => 'App\\Controller\\FrontOfficeController::artists'], null, null, null, false, false, null]],
        '/events' => [[['_route' => 'events', '_controller' => 'App\\Controller\\FrontOfficeController::events'], null, null, null, false, false, null]],
        '/marketplace' => [[['_route' => 'marketplace', '_controller' => 'App\\Controller\\FrontOfficeController::marketplace'], null, null, null, false, false, null]],
        '/marketplace/test' => [[['_route' => 'marketplace_test', '_controller' => 'App\\Controller\\FrontOfficeController::marketplaceTest'], null, null, null, false, false, null]],
        '/community' => [[['_route' => 'community', '_controller' => 'App\\Controller\\FrontOfficeController::community'], null, null, null, false, false, null]],
        '/api/auth/login' => [[['_route' => 'api_auth_login', '_controller' => 'App\\Controller\\JWTAuthenticationController::login'], null, ['POST' => 0], null, false, false, null]],
        '/api/marketplace' => [[['_route' => 'api_marketplace_list', '_controller' => 'App\\Controller\\MarketplaceApiController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/marketplace/listing' => [[['_route' => 'api_marketplace_create_listing', '_controller' => 'App\\Controller\\MarketplaceApiController::createListing'], null, ['POST' => 0], null, false, false, null]],
        '/admin/marketplace' => [[['_route' => 'admin_marketplace_list', '_controller' => 'App\\Controller\\MarketplaceDashboardController::list'], null, ['GET' => 0], null, false, false, null]],
        '/admin/marketplace/listings/new' => [[['_route' => 'admin_marketplace_listing_new', '_controller' => 'App\\Controller\\MarketplaceDashboardController::newListing'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/notifications' => [[['_route' => 'api_notifications_list', '_controller' => 'App\\Controller\\NotificationController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/notifications/unread-count' => [[['_route' => 'api_notifications_unread_count', '_controller' => 'App\\Controller\\NotificationController::unreadCount'], null, ['GET' => 0], null, false, false, null]],
        '/api/notifications/mark-all-read' => [[['_route' => 'api_notifications_mark_all_read', '_controller' => 'App\\Controller\\NotificationController::markAllAsRead'], null, ['POST' => 0], null, false, false, null]],
        '/offre' => [[['_route' => 'offre_index', '_controller' => 'App\\Controller\\OffreController::index'], null, ['GET' => 0], null, false, false, null]],
        '/offre/new' => [[['_route' => 'offre_new', '_controller' => 'App\\Controller\\OffreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/marketplace/offres' => [[['_route' => 'admin_offre_list', '_controller' => 'App\\Controller\\OffreDashboardController::list'], null, ['GET' => 0], null, false, false, null]],
        '/admin/marketplace/offres/new' => [[['_route' => 'admin_offre_new', '_controller' => 'App\\Controller\\OffreDashboardController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/auth/forgot-password' => [[['_route' => 'api_auth_forgot_password', '_controller' => 'App\\Controller\\PasswordResetController::forgotPassword'], null, ['POST' => 0], null, false, false, null]],
        '/api/auth/reset-password' => [[['_route' => 'api_auth_reset_password', '_controller' => 'App\\Controller\\PasswordResetController::resetPassword'], null, ['POST' => 0], null, false, false, null]],
        '/forgot-password' => [[['_route' => 'password_forgot', '_controller' => 'App\\Controller\\PasswordResetWebController::forgotPassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/posts' => [[['_route' => 'admin_post_index', '_controller' => 'App\\Controller\\PostAdminController::index'], null, ['GET' => 0], null, false, false, null]],
        '/profile' => [[['_route' => 'user_profile', '_controller' => 'App\\Controller\\ProfileController::profile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile/api/avatar' => [[['_route' => 'api_upload_avatar', '_controller' => 'App\\Controller\\ProfileController::uploadAvatar'], null, ['POST' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/transactions' => [[['_route' => 'admin_transactions_list', '_controller' => 'App\\Controller\\TransactionAdminController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users_list', '_controller' => 'App\\Controller\\UserDashboardController::list'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users/new' => [[['_route' => 'admin_users_new', '_controller' => 'App\\Controller\\UserDashboardController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/web/artworks/create' => [[['_route' => 'web_artworks_create', '_controller' => 'App\\Controller\\WebFormController::createArtwork'], null, ['POST' => 0], null, false, false, null]],
        '/web/marketplace/listing/create' => [[['_route' => 'web_marketplace_listing_create', '_controller' => 'App\\Controller\\WebFormController::createListing'], null, ['POST' => 0], null, false, false, null]],
        '/web/posts/create' => [[['_route' => 'web_posts_create', '_controller' => 'App\\Controller\\WebFormController::createPost'], null, ['POST' => 0], null, false, false, null]],
        '/web/marketplace/offre/create' => [[['_route' => 'web_marketplace_offre_create', '_controller' => 'App\\Controller\\WebFormController::createOffre'], null, ['POST' => 0], null, false, false, null]],
        '/posts' => [[['_route' => 'post_index', '_controller' => 'App\\Controller\\WebPostController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/a(?'
                    .'|dmin/(?'
                        .'|artworks/(?'
                            .'|([^/]++)/(?'
                                .'|edit(*:243)'
                                .'|delete(*:257)'
                            .')'
                            .'|categories/([^/]++)/(?'
                                .'|edit(*:293)'
                                .'|delete(*:307)'
                            .')'
                        .')'
                        .'|community/posts/([^/]++)/(?'
                            .'|edit(*:349)'
                            .'|delete(*:363)'
                        .')'
                        .'|event(?'
                            .'|s/([^/]++)/(?'
                                .'|edit(*:398)'
                                .'|delete(*:412)'
                                .'|participants(?'
                                    .'|(*:435)'
                                    .'|/([^/]++)/status(*:459)'
                                .')'
                            .')'
                            .'|\\-types/([^/]++)/(?'
                                .'|edit(*:493)'
                                .'|delete(*:507)'
                                .'|toggle(*:521)'
                            .')'
                        .')'
                        .'|marketplace/(?'
                            .'|listings/([^/]++)/(?'
                                .'|edit(*:571)'
                                .'|delete(*:585)'
                            .')'
                            .'|offres/([^/]++)/(?'
                                .'|edit(*:617)'
                                .'|delete(*:631)'
                                .'|accept(*:645)'
                                .'|refuse(*:659)'
                            .')'
                        .')'
                        .'|transactions/invoice/([^/]++)(*:698)'
                        .'|users/([^/]++)/(?'
                            .'|edit(*:728)'
                            .'|toggle(*:742)'
                            .'|delete(*:756)'
                        .')'
                    .')'
                    .'|pi/(?'
                        .'|artworks/([^/]++)(?'
                            .'|(*:792)'
                        .')'
                        .'|posts/(?'
                            .'|([^/]++)(?'
                                .'|/(?'
                                    .'|comments(?'
                                        .'|(*:836)'
                                        .'|/([^/]++)(?'
                                            .'|(*:856)'
                                            .'|/replies(*:872)'
                                            .'|(*:880)'
                                        .')'
                                        .'|(*:889)'
                                    .')'
                                    .'|like(*:902)'
                                    .'|dislike(*:917)'
                                    .'|reaction(*:933)'
                                .')'
                                .'|(*:942)'
                            .')'
                            .'|search(*:957)'
                            .'|([^/]++)/upload\\-image(*:987)'
                        .')'
                        .'|event(?'
                            .'|s/([^/]++)(?'
                                .'|/(?'
                                    .'|map(*:1024)'
                                    .'|join(*:1037)'
                                    .'|leave(*:1051)'
                                    .'|ics(*:1063)'
                                .')'
                                .'|(*:1073)'
                            .')'
                            .'|\\-types/([^/]++)(?'
                                .'|(*:1102)'
                            .')'
                        .')'
                        .'|marketplace/(?'
                            .'|buy/([^/]++)(*:1140)'
                            .'|listing/([^/]++)(?'
                                .'|(*:1168)'
                            .')'
                            .'|invoice/([^/]++)(*:1194)'
                        .')'
                        .'|notifications/([^/]++)/read(*:1231)'
                    .')'
                    .'|rtworks/(\\d+)(*:1254)'
                .')'
                .'|/community/(?'
                    .'|([^/]++)(?'
                        .'|(*:1289)'
                        .'|/(?'
                            .'|edit(*:1306)'
                            .'|delete(*:1321)'
                        .')'
                    .')'
                    .'|admin(*:1337)'
                    .'|posts(?'
                        .'|(*:1354)'
                        .'|/([^/]++)(*:1372)'
                    .')'
                .')'
                .'|/marketplace/offers/(\\d+)(*:1408)'
                .'|/offre/(?'
                    .'|listing/([^/]++)(*:1443)'
                    .'|([^/]++)(?'
                        .'|(*:1463)'
                        .'|/(?'
                            .'|edit(*:1480)'
                            .'|accept(*:1495)'
                            .'|refuse(*:1510)'
                            .'|delete(*:1525)'
                        .')'
                    .')'
                    .'|my\\-offres(*:1546)'
                    .'|by\\-status/([^/]++)(*:1574)'
                .')'
                .'|/reset\\-password/([^/]++)(*:1609)'
                .'|/web/(?'
                    .'|events/([^/]++)/(?'
                        .'|subscribe(*:1654)'
                        .'|unsubscribe(*:1674)'
                    .')'
                    .'|posts/([^/]++)/(?'
                        .'|update(*:1708)'
                        .'|delete(*:1723)'
                        .'|comment(?'
                            .'|(*:1742)'
                            .'|s/([^/]++)/(?'
                                .'|update(*:1771)'
                                .'|delete(*:1786)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/posts/([^/]++)(*:1814)'
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
        243 => [[['_route' => 'admin_artwork_edit', '_controller' => 'App\\Controller\\ArtworkAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        257 => [[['_route' => 'admin_artwork_delete', '_controller' => 'App\\Controller\\ArtworkAdminController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        293 => [[['_route' => 'admin_category_edit', '_controller' => 'App\\Controller\\ArtworkAdminController::categoryEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        307 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\ArtworkAdminController::categoryDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        349 => [[['_route' => 'admin_community_post_edit', '_controller' => 'App\\Controller\\CommunityDashboardController::editPost'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        363 => [[['_route' => 'admin_community_post_delete', '_controller' => 'App\\Controller\\CommunityDashboardController::deletePost'], ['id'], ['POST' => 0], null, false, false, null]],
        398 => [[['_route' => 'admin_events_edit', '_controller' => 'App\\Controller\\EventDashboardController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        412 => [[['_route' => 'admin_events_delete', '_controller' => 'App\\Controller\\EventDashboardController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        435 => [[['_route' => 'admin_events_participants', '_controller' => 'App\\Controller\\EventDashboardController::participants'], ['id'], ['GET' => 0], null, false, false, null]],
        459 => [[['_route' => 'admin_events_participant_status', '_controller' => 'App\\Controller\\EventDashboardController::updateParticipantStatus'], ['eventId', 'participantId'], ['POST' => 0], null, false, false, null]],
        493 => [[['_route' => 'admin_event_types_edit', '_controller' => 'App\\Controller\\EventTypeDashboardController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        507 => [[['_route' => 'admin_event_types_delete', '_controller' => 'App\\Controller\\EventTypeDashboardController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        521 => [[['_route' => 'admin_event_types_toggle', '_controller' => 'App\\Controller\\EventTypeDashboardController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        571 => [[['_route' => 'admin_marketplace_listing_edit', '_controller' => 'App\\Controller\\MarketplaceDashboardController::editListing'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        585 => [[['_route' => 'admin_marketplace_listing_delete', '_controller' => 'App\\Controller\\MarketplaceDashboardController::deleteListing'], ['id'], ['POST' => 0], null, false, false, null]],
        617 => [[['_route' => 'admin_offre_edit', '_controller' => 'App\\Controller\\OffreDashboardController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        631 => [[['_route' => 'admin_offre_delete', '_controller' => 'App\\Controller\\OffreDashboardController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        645 => [[['_route' => 'admin_offre_accept', '_controller' => 'App\\Controller\\OffreDashboardController::accept'], ['id'], ['POST' => 0], null, false, false, null]],
        659 => [[['_route' => 'admin_offre_refuse', '_controller' => 'App\\Controller\\OffreDashboardController::refuse'], ['id'], ['POST' => 0], null, false, false, null]],
        698 => [[['_route' => 'admin_transactions_invoice', '_controller' => 'App\\Controller\\TransactionAdminController::invoice'], ['uuid'], ['GET' => 0], null, false, true, null]],
        728 => [[['_route' => 'admin_users_edit', '_controller' => 'App\\Controller\\UserDashboardController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        742 => [[['_route' => 'admin_users_toggle', '_controller' => 'App\\Controller\\UserDashboardController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        756 => [[['_route' => 'admin_users_delete', '_controller' => 'App\\Controller\\UserDashboardController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        792 => [
            [['_route' => 'api_artworks_update', '_controller' => 'App\\Controller\\ArtworkApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_artworks_delete', '_controller' => 'App\\Controller\\ArtworkApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        836 => [[['_route' => 'create_comment', '_controller' => 'App\\Controller\\CommentController::create'], ['postId'], ['POST' => 0], null, false, false, null]],
        856 => [[['_route' => 'update_comment', '_controller' => 'App\\Controller\\CommentController::update'], ['postId', 'id'], ['PUT' => 0], null, false, true, null]],
        872 => [[['_route' => 'api_posts_comments_reply', '_controller' => 'App\\Controller\\CommentController::createReply'], ['postId', 'id'], ['POST' => 0], null, false, false, null]],
        880 => [[['_route' => 'delete_comment', '_controller' => 'App\\Controller\\CommentController::delete'], ['postId', 'id'], ['DELETE' => 0], null, false, true, null]],
        889 => [
            [['_route' => 'api_posts_comments', '_controller' => 'App\\Controller\\CommunityApiController::getComments'], ['id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'api_posts_comment', '_controller' => 'App\\Controller\\CommunityApiController::comment'], ['id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'app_post_comment', '_controller' => 'App\\Controller\\PostController::comment'], ['id'], ['POST' => 0], null, false, false, null],
        ],
        902 => [[['_route' => 'api_posts_like', '_controller' => 'App\\Controller\\CommunityApiController::like'], ['id'], ['POST' => 0], null, false, false, null]],
        917 => [[['_route' => 'api_posts_dislike', '_controller' => 'App\\Controller\\CommunityApiController::dislike'], ['id'], ['POST' => 0], null, false, false, null]],
        933 => [[['_route' => 'api_posts_reaction', '_controller' => 'App\\Controller\\CommunityApiController::react'], ['id'], ['POST' => 0], null, false, false, null]],
        942 => [
            [['_route' => 'api_posts_update', '_controller' => 'App\\Controller\\PostController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_posts_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        957 => [[['_route' => 'app_post_search', '_controller' => 'App\\Controller\\PostController::search'], [], ['GET' => 0], null, false, false, null]],
        987 => [[['_route' => 'app_post_uploadimage', '_controller' => 'App\\Controller\\PostController::uploadImage'], ['id'], ['POST' => 0], null, false, false, null]],
        1024 => [[['_route' => 'api_events_map_detail', '_controller' => 'App\\Controller\\EventApiController::mapDetail'], ['id'], ['GET' => 0], null, false, false, null]],
        1037 => [[['_route' => 'api_events_join', '_controller' => 'App\\Controller\\EventApiController::join'], ['id'], ['POST' => 0], null, false, false, null]],
        1051 => [[['_route' => 'api_events_leave', '_controller' => 'App\\Controller\\EventApiController::leave'], ['id'], ['DELETE' => 0], null, false, false, null]],
        1063 => [[['_route' => 'api_events_ics', '_controller' => 'App\\Controller\\EventApiController::exportIcs'], ['id'], ['GET' => 0], null, false, false, null]],
        1073 => [
            [['_route' => 'api_events_update', '_controller' => 'App\\Controller\\EventApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_events_delete', '_controller' => 'App\\Controller\\EventApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        1102 => [
            [['_route' => 'api_event_types_show', '_controller' => 'App\\Controller\\EventTypeApiController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_event_types_update', '_controller' => 'App\\Controller\\EventTypeApiController::update'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'api_event_types_delete', '_controller' => 'App\\Controller\\EventTypeApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        1140 => [[['_route' => 'api_marketplace_buy', '_controller' => 'App\\Controller\\MarketplaceApiController::buy'], ['id'], ['POST' => 0], null, false, true, null]],
        1168 => [
            [['_route' => 'api_marketplace_update_listing', '_controller' => 'App\\Controller\\MarketplaceApiController::updateListing'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_marketplace_delete_listing', '_controller' => 'App\\Controller\\MarketplaceApiController::deleteListing'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        1194 => [[['_route' => 'api_marketplace_invoice', '_controller' => 'App\\Controller\\MarketplaceApiController::getInvoice'], ['uuid'], ['GET' => 0], null, false, true, null]],
        1231 => [[['_route' => 'api_notifications_mark_read', '_controller' => 'App\\Controller\\NotificationController::markAsRead'], ['id'], ['POST' => 0], null, false, false, null]],
        1254 => [[['_route' => 'artwork_show', '_controller' => 'App\\Controller\\FrontOfficeController::artworkShow'], ['id'], null, null, false, true, null]],
        1289 => [[['_route' => 'app_community_show', '_controller' => 'App\\Controller\\CommunityController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1306 => [[['_route' => 'app_community_edit', '_controller' => 'App\\Controller\\CommunityController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1321 => [[['_route' => 'app_community_delete', '_controller' => 'App\\Controller\\CommunityController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1337 => [[['_route' => 'app_community_admin', '_controller' => 'App\\Controller\\CommunityController::admin'], [], ['GET' => 0], null, false, false, null]],
        1354 => [[['_route' => 'community_posts', '_controller' => 'App\\Controller\\WebPostController::index'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1372 => [[['_route' => 'community_post_show', '_controller' => 'App\\Controller\\WebPostController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1408 => [[['_route' => 'marketplace_offer_show', '_controller' => 'App\\Controller\\FrontOfficeController::marketplaceOffer'], ['id'], null, null, false, true, null]],
        1443 => [[['_route' => 'offre_by_listing', '_controller' => 'App\\Controller\\OffreController::byListing'], ['id'], ['GET' => 0], null, false, true, null]],
        1463 => [[['_route' => 'offre_show', '_controller' => 'App\\Controller\\OffreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1480 => [[['_route' => 'offre_edit', '_controller' => 'App\\Controller\\OffreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1495 => [[['_route' => 'offre_accept', '_controller' => 'App\\Controller\\OffreController::accept'], ['id'], ['POST' => 0], null, false, false, null]],
        1510 => [[['_route' => 'offre_refuse', '_controller' => 'App\\Controller\\OffreController::refuse'], ['id'], ['POST' => 0], null, false, false, null]],
        1525 => [[['_route' => 'offre_delete', '_controller' => 'App\\Controller\\OffreController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1546 => [[['_route' => 'offre_my_offres', '_controller' => 'App\\Controller\\OffreController::myOffres'], [], ['GET' => 0], null, false, false, null]],
        1574 => [[['_route' => 'offre_by_status', '_controller' => 'App\\Controller\\OffreController::byStatus'], ['statut'], ['GET' => 0], null, false, true, null]],
        1609 => [[['_route' => 'password_reset_form', '_controller' => 'App\\Controller\\PasswordResetWebController::resetPassword'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1654 => [[['_route' => 'web_events_subscribe', '_controller' => 'App\\Controller\\WebFormController::subscribeToEvent'], ['id'], ['POST' => 0], null, false, false, null]],
        1674 => [[['_route' => 'web_events_unsubscribe', '_controller' => 'App\\Controller\\WebFormController::unsubscribeFromEvent'], ['id'], ['POST' => 0], null, false, false, null]],
        1708 => [[['_route' => 'web_posts_update', '_controller' => 'App\\Controller\\WebFormController::updatePost'], ['id'], ['POST' => 0], null, false, false, null]],
        1723 => [[['_route' => 'web_posts_delete', '_controller' => 'App\\Controller\\WebFormController::deletePost'], ['id'], ['POST' => 0], null, false, false, null]],
        1742 => [[['_route' => 'web_posts_comment', '_controller' => 'App\\Controller\\WebFormController::commentPost'], ['id'], ['POST' => 0], null, false, false, null]],
        1771 => [[['_route' => 'web_comments_update', '_controller' => 'App\\Controller\\WebFormController::updateComment'], ['postId', 'commentId'], ['POST' => 0], null, false, false, null]],
        1786 => [[['_route' => 'web_comments_delete', '_controller' => 'App\\Controller\\WebFormController::deleteComment'], ['postId', 'commentId'], ['POST' => 0], null, false, false, null]],
        1814 => [
            [['_route' => 'post_show', '_controller' => 'App\\Controller\\WebPostController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
