<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'account' => [[], ['_controller' => 'App\\Controller\\AccountController::index'], [], [['text', '/user/account/dashboard']], [], []],
        'update_password' => [[], ['_controller' => 'App\\Controller\\AccountController::updatePassword'], [], [['text', '/user/account/update-password']], [], []],
        'add_picture_user' => [[], ['_controller' => 'App\\Controller\\AccountController::addPictureUser'], [], [['text', '/user/account/picture/add']], [], []],
        'edit_picture_user' => [[], ['_controller' => 'App\\Controller\\AccountController::editPictureUser'], [], [['text', '/user/account/picture/edit']], [], []],
        'forgot_password' => [[], ['_controller' => 'App\\Controller\\AccountController::forGotPassword'], [], [['text', '/account/forgot-password']], [], []],
        'rest_password' => [['value'], ['_controller' => 'App\\Controller\\AccountController::restPassword'], [], [['variable', '/', '[^/]++', 'value', true], ['text', '/account/rest-password']], [], []],
        'delete_account' => [['email'], ['_controller' => 'App\\Controller\\AccountController::deleteAccount'], [], [['variable', '/', '[^/]++', 'email', true], ['text', '/account/delete']], [], []],
        'delete_comment' => [['id'], ['_controller' => 'App\\Controller\\CommentController::deleteComment'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/comment/delete']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
        'load_more_trick' => [['trick'], ['trick' => '5', '_controller' => 'App\\Controller\\HomeController::loadMoreTrick'], ['trick' => '\\d+'], [['variable', '/', '\\d+', 'trick', true]], [], []],
        'show' => [['id'], ['_controller' => 'App\\Controller\\HomeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/trick']], [], []],
        'load_more_comment' => [['id', 'comment'], ['comment' => '15', '_controller' => 'App\\Controller\\HomeController::loadMoreComment'], ['comment' => '\\d+'], [['variable', '/', '\\d+', 'comment', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/trick']], [], []],
        'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
        'registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/registration']], [], []],
        'token_validation' => [['value'], ['_controller' => 'App\\Controller\\SecurityController::validateToken'], [], [['variable', '/', '[^/]++', 'value', true], ['text', '/confirmation']], [], []],
        'add_trick' => [[], ['_controller' => 'App\\Controller\\TrickController::add'], [], [['text', '/user/trick/add']], [], []],
        'edit_trick' => [['id'], ['_controller' => 'App\\Controller\\TrickController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/trick/edit']], [], []],
        'delete_trick' => [['id'], ['_controller' => 'App\\Controller\\TrickController::deleteTrick'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/trick/delete']], [], []],
        'add_picture' => [[], ['_controller' => 'App\\Controller\\TrickController::addPicture'], [], [['text', '/user/trick/picture/add']], [], []],
        'delete_picture' => [['id'], ['_controller' => 'App\\Controller\\TrickController::deletePicture'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/trick/picture/delete']], [], []],
        'add_video' => [[], ['_controller' => 'App\\Controller\\TrickController::addVideo'], [], [['text', '/user/trick/video/add']], [], []],
        'delete_video' => [['id'], ['_controller' => 'App\\Controller\\TrickController::deleteVideo'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/trick/video/delete']], [], []],
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'logout' => [[], [], [], [['text', '/logout']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
