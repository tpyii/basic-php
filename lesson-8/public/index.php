<?php

session_start();

include '../config/index.php';

if ($_SERVER['REQUEST_URI'] !== '/') {
  list($page, $id) = array_slice(explode('/', $_SERVER['REQUEST_URI']), 1);
} else {
  $page = HOME_PAGE;
}

$controller = "{$page}Controller";

if (function_exists($controller)) {
  echo controller($controller($id));
} else {
  error(404);
}
