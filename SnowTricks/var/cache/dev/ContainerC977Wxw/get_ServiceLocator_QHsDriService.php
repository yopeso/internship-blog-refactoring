<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Q_HsDri' shared service.

return $this->privates['.service_locator.Q_HsDri'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'authenticatorHandler' => ['privates', 'security.authentication.guard_handler', 'getSecurity_Authentication_GuardHandlerService.php', true],
    'loginFormAuthenticator' => ['privates', 'App\\Security\\LoginFormAuthenticator', 'getLoginFormAuthenticatorService.php', true],
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService.php', true],
    'token' => ['privates', '.errored..service_locator.Q_HsDri.App\\Entity\\Token', NULL, 'Cannot autowire service ".service_locator.Q_HsDri": it references class "App\\Entity\\Token" but no such service exists.'],
]);