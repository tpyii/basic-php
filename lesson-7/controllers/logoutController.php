<?php

function logoutController()
{
  if (isAuth()) {
    unset($_SESSION['login']);
    unset($_SESSION['id']);

    session_regenerate_id();

    header('Location: /login');
    die;
  }

  die(ERROR_404);
}
