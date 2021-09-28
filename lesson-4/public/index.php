<?php

include '../config/index.php';
include CORE_PATH . '/index.php';
include CONTROLLERS_PATH . '/index.php';
include LIBRARIES_PATH . '/simpleImage.php';

$page = $_SERVER['REQUEST_URI'] !== '/' ? explode('/', $_SERVER['REQUEST_URI'])[1] : HOME_PAGE;

$controller = $page . 'Controller';

if (function_exists($controller)) {
  $controller();
} else {
  die(ERROR_404);
}
