<?php

/**
 * ---------------------------------------------------------------
 * Initiate the Container
 * ---------------------------------------------------------------
 */

$tengu = new Tengu\Container;

/**
 * ---------------------------------------------------------------
 * Initiate the Router Class
 * ---------------------------------------------------------------
 */

$tengu->router = new Tengu\Router;
$tengu->router->setPath(APP_PATH.'/Http/Controllers');

/**
 * ---------------------------------------------------------------
 * Return Tengu
 * ---------------------------------------------------------------
 */

return $tengu;
