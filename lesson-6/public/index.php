<?php

include '../config/index.php';
include CORE_PATH . '/db.php';
include CORE_PATH . '/render.php';
include CORE_PATH . '/functions.php';
include CONTROLLERS_PATH . '/homeController.php';
include CONTROLLERS_PATH . '/galleryController.php';
include CONTROLLERS_PATH . '/productsController.php';
include CONTROLLERS_PATH . '/feedbackController.php';
include MODELS_PATH . '/gallery.php';
include MODELS_PATH . '/product.php';
include MODELS_PATH . '/feedback.php';
include LIBRARIES_PATH . '/simpleImage.php';

if ($_SERVER['REQUEST_URI'] !== '/') {
  list($page, $id) = array_slice(explode('/', $_SERVER['REQUEST_URI']), 1);
} else {
  $page = HOME_PAGE;
}

$controller = "{$page}Controller";

if (function_exists($controller)) {
  echo $controller($id);
} else {
  die(ERROR_404);
}
