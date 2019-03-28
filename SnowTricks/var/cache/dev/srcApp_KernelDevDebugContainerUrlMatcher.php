<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/user/account/dashboard' => [[['_route' => 'account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
            '/user/account/update-password' => [[['_route' => 'update_password', '_controller' => 'App\\Controller\\AccountController::updatePassword'], null, null, null, false, false, null]],
            '/user/account/picture/add' => [[['_route' => 'add_picture_user', '_controller' => 'App\\Controller\\AccountController::addPictureUser'], null, null, null, false, false, null]],
            '/user/account/picture/edit' => [[['_route' => 'edit_picture_user', '_controller' => 'App\\Controller\\AccountController::editPictureUser'], null, null, null, false, false, null]],
            '/account/forgot-password' => [[['_route' => 'forgot_password', '_controller' => 'App\\Controller\\AccountController::forGotPassword'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
            '/user/trick/add' => [[['_route' => 'add_trick', '_controller' => 'App\\Controller\\TrickController::add'], null, null, null, false, false, null]],
            '/user/trick/picture/add' => [[['_route' => 'add_picture', '_controller' => 'App\\Controller\\TrickController::addPicture'], null, null, null, false, false, null]],
            '/user/trick/video/add' => [[['_route' => 'add_video', '_controller' => 'App\\Controller\\TrickController::addVideo'], null, null, null, false, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/account/(?'
                        .'|rest\\-password/([^/]++)(*:42)'
                        .'|delete/([^/]++)(*:64)'
                    .')'
                    .'|/user/comment/delete/([^/]++)(*:101)'
                    .'|/(\\d+)?(*:116)'
                    .'|/trick/([^/]++)(?'
                        .'|(*:142)'
                        .'|(?:/(\\d+))?(*:161)'
                    .')'
                    .'|/confirmation/([^/]++)(*:192)'
                    .'|/user/trick/(?'
                        .'|edit/([^/]++)(*:228)'
                        .'|delete/([^/]++)(*:251)'
                        .'|picture/delete/([^/]++)(*:282)'
                        .'|video/delete/([^/]++)(*:311)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:351)'
                        .'|wdt/([^/]++)(*:371)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:417)'
                                .'|router(*:431)'
                                .'|exception(?'
                                    .'|(*:451)'
                                    .'|\\.css(*:464)'
                                .')'
                            .')'
                            .'|(*:474)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            42 => [[['_route' => 'rest_password', '_controller' => 'App\\Controller\\AccountController::restPassword'], ['value'], null, null, false, true, null]],
            64 => [[['_route' => 'delete_account', '_controller' => 'App\\Controller\\AccountController::deleteAccount'], ['email'], null, null, false, true, null]],
            101 => [[['_route' => 'delete_comment', '_controller' => 'App\\Controller\\CommentController::deleteComment'], ['id'], null, null, false, true, null]],
            116 => [[['_route' => 'load_more_trick', 'trick' => '5', '_controller' => 'App\\Controller\\HomeController::loadMoreTrick'], ['trick'], null, null, false, true, null]],
            142 => [[['_route' => 'show', '_controller' => 'App\\Controller\\HomeController::show'], ['id'], null, null, false, true, null]],
            161 => [[['_route' => 'load_more_comment', 'comment' => '15', '_controller' => 'App\\Controller\\HomeController::loadMoreComment'], ['id', 'comment'], null, null, false, true, null]],
            192 => [[['_route' => 'token_validation', '_controller' => 'App\\Controller\\SecurityController::validateToken'], ['value'], null, null, false, true, null]],
            228 => [[['_route' => 'edit_trick', '_controller' => 'App\\Controller\\TrickController::edit'], ['id'], null, null, false, true, null]],
            251 => [[['_route' => 'delete_trick', '_controller' => 'App\\Controller\\TrickController::deleteTrick'], ['id'], null, null, false, true, null]],
            282 => [[['_route' => 'delete_picture', '_controller' => 'App\\Controller\\TrickController::deletePicture'], ['id'], null, null, false, true, null]],
            311 => [[['_route' => 'delete_video', '_controller' => 'App\\Controller\\TrickController::deleteVideo'], ['id'], null, null, false, true, null]],
            351 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            371 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            417 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            431 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            451 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            464 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            474 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
