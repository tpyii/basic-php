<?php

include '../config/index.php';
include CORE_PATH . '/index.php';

$page = $_SERVER['REQUEST_URI'] !== '/' ? explode('/', $_SERVER['REQUEST_URI'])[1] : HOME_PAGE;
  
$controller = CONTROLLERS_PATH . '/' . $page . '.php';

if (file_exists($controller)) {
  include $controller;
  echo render($page, $params);
} else {
  die(ERROR_404);
}
