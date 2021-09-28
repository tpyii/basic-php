<?php

include '../config/index.php';
include CORE_PATH . '/index.php';
include CORE_PATH . '/db.php';
include CONTROLLERS_PATH . '/index.php';
include LIBRARIES_PATH . '/simpleImage.php';

if ($_SERVER['REQUEST_URI'] !== '/') {
  list($page, $id) = array_slice(explode('/', $_SERVER['REQUEST_URI']), 1);
} else {
  $page = HOME_PAGE;
}

$controller = $page . 'Controller';

if (function_exists($controller)) {
  echo $controller((int) $id);
} else {
  die(ERROR_404);
}
