<?php

define('PUBLIC_PATH', $_SERVER['DOCUMENT_ROOT']);
define('APP_ROOT', PUBLIC_PATH . '/..');
define('CORE_PATH', APP_ROOT . '/core');
define('CONTROLLERS_PATH', APP_ROOT . '/controllers');
define('MODELS_PATH', APP_ROOT . '/models');
define('TEMPLATES_PATH', APP_ROOT . '/templates');
define('LIBRARIES_PATH', APP_ROOT . '/libraries');
define('LAYOUTS_DIR', 'layouts/');

define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'basic-php');
define('DB_PORT', '8888');

define('ERROR_404', '404: Такой страницы не существует');
define('HOME_PAGE', 'home');
