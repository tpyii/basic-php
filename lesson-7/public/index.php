<?php

session_start();

include '../config/index.php';
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

if ($_SERVER['REQUEST_URI'] !== '/') {
  list($page, $id) = array_slice(explode('/', $_SERVER['REQUEST_URI']), 1);
} else {
  $page = HOME_PAGE;
}

$controller = "{$page}Controller";

if (function_exists($controller)) {
  echo controller($controller($id));
} else {
  die(ERROR_404);
}
