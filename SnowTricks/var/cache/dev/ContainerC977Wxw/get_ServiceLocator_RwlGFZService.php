<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.RwlGFZ_' shared service.

return $this->privates['.service_locator.RwlGFZ_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'fileUploader' => ['privates', 'App\\Service\\FileUploader', 'getFileUploaderService.php', true],
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService.php', true],
    'picture' => ['privates', '.errored..service_locator.RwlGFZ_.App\\Entity\\Picture', NULL, 'Cannot autowire service ".service_locator.RwlGFZ_": it references class "App\\Entity\\Picture" but no such service exists.'],
]);