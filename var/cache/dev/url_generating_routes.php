<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_article' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/article']], [], [], []],
    'show_article' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::getArticleInfo'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    'app_crud_article_index' => [[], ['_controller' => 'App\\Controller\\CrudArticleController::index'], [], [['text', '/crud/article']], [], [], []],
    'app_crud_article_new' => [[], ['_controller' => 'App\\Controller\\CrudArticleController::new'], [], [['text', '/crud/article/new']], [], [], []],
    'app_crud_article_show' => [['id'], ['_controller' => 'App\\Controller\\CrudArticleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/crud/article']], [], [], []],
    'app_crud_article_edit' => [['id'], ['_controller' => 'App\\Controller\\CrudArticleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/crud/article']], [], [], []],
    'app_crud_article_delete' => [['id'], ['_controller' => 'App\\Controller\\CrudArticleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/crud/article']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'App\Controller\ArticleController::index' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/article']], [], [], []],
    'App\Controller\ArticleController::getArticleInfo' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::getArticleInfo'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    'App\Controller\CrudArticleController::index' => [[], ['_controller' => 'App\\Controller\\CrudArticleController::index'], [], [['text', '/crud/article']], [], [], []],
    'App\Controller\CrudArticleController::new' => [[], ['_controller' => 'App\\Controller\\CrudArticleController::new'], [], [['text', '/crud/article/new']], [], [], []],
    'App\Controller\CrudArticleController::show' => [['id'], ['_controller' => 'App\\Controller\\CrudArticleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/crud/article']], [], [], []],
    'App\Controller\CrudArticleController::edit' => [['id'], ['_controller' => 'App\\Controller\\CrudArticleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/crud/article']], [], [], []],
    'App\Controller\CrudArticleController::delete' => [['id'], ['_controller' => 'App\\Controller\\CrudArticleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/crud/article']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
];
