<?php

function logoutController()
{
  if (isAuth()) {
    unset($_SESSION['login']);
    unset($_SESSION['id']);
    session_regenerate_id();
    redirect('/login');
  }

  redirect(HOME_PAGE);
}
