<?php

/**
 * ---------------------------------------------------------------
 * Load Composer autoloader
 * ---------------------------------------------------------------
 */

if (! is_readable(VENDOR_PATH.'/autoload.php')) {
	die('Please install Composer first by running "php composer.phar install" from the root of your installation');
}

require VENDOR_PATH.'/autoload.php';

/**
 * ---------------------------------------------------------------
 * Initiate the container
 * ---------------------------------------------------------------
 */

$tengu = new Tengu\Container;

/**
 * ---------------------------------------------------------------
 * Initiate the router class
 * ---------------------------------------------------------------
 */

$tengu->router = new Tengu\Router;
$tengu->router->setPath(APP_PATH.'/http/Controllers');

/**
 * ---------------------------------------------------------------
 * Hajime!
 * ---------------------------------------------------------------
 */

$tengu->router->load();
