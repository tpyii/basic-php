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

include CORE_PATH . '/db.php';
include CORE_PATH . '/render.php';
include CORE_PATH . '/functions.php';
include CORE_PATH . '/auth.php';
include CORE_PATH . '/controller.php';
include CONTROLLERS_PATH . '/homeController.php';
include CONTROLLERS_PATH . '/galleryController.php';
include CONTROLLERS_PATH . '/productsController.php';
include CONTROLLERS_PATH . '/feedbackController.php';
include CONTROLLERS_PATH . '/basketController.php';
include CONTROLLERS_PATH . '/orderController.php';
include CONTROLLERS_PATH . '/ordersController.php';
include CONTROLLERS_PATH . '/loginController.php';
include CONTROLLERS_PATH . '/logoutController.php';
include MODELS_PATH . '/gallery.php';
include MODELS_PATH . '/product.php';
include MODELS_PATH . '/feedback.php';
include MODELS_PATH . '/basket.php';
include MODELS_PATH . '/order.php';
include MODELS_PATH . '/user.php';
include LIBRARIES_PATH . '/simpleImage.php';
