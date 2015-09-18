<?php

/*
 * ---------------------------------------------------------------
 * Version
 * ---------------------------------------------------------------
 */

define('TENGU_VERSION', '1.0');

/*
 * ---------------------------------------------------------------
 * Environment
 * ---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     staging
 *     production
 *
 */

define('ENVIRONMENT', 'development');

/*
 * ---------------------------------------------------------------
 * Timezone
 * ---------------------------------------------------------------
 *
 * Sets the default timezone used by all date/time functions
 * in the framework.
 *
 */

date_default_timezone_set('America/Los_Angeles');

/*
 * ---------------------------------------------------------------
 * Error Reporting
 * ---------------------------------------------------------------
 *
 * Different environments require different levels of error
 * reporting. By default, "development" will show all errors
 * while "staging" and "production" will hide them.
 *
 */

error_reporting(E_ALL);

switch (ENVIRONMENT) {
    case 'development':
        error_reporting(-1);
        ini_set('display_errors', 1);
        ini_set('log_errors', 1);
        break;
    case 'staging':
    case 'production':
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
        ini_set('display_errors', 0);
        ini_set('log_errors', 1);
        break;
    default:
        header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
        echo 'The application environment must be properly set.';
        exit(1);
}

/*
 * ---------------------------------------------------------------
 * Paths
 * ---------------------------------------------------------------
 */

define('BASE_PATH', realpath(dirname(__FILE__)));
define('APP_PATH', BASE_PATH.'/application');
define('THEME_PATH', BASE_PATH.'/themes');
define('VENDOR_PATH', BASE_PATH.'/vendor');

/*
 * ---------------------------------------------------------------
 * Bootstrap
 * ---------------------------------------------------------------
 */

 require_once(BASE_PATH.'/bootstrap/autoload.php');
