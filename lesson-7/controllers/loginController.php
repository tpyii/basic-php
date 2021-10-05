<?php

function loginController()
{
  if (isAuth()) {
    header('Location: /');
    die;
  }

  if ( ! empty($_POST)) {
    $login = prepareValue($_POST['login']);
    $password = prepareValue($_POST['password']);

    if ($login && $password) {
      auth($login, $password);

      header('Location: /login');
      die;
    }
  }

  return [
    'template' => 'login', 
    'params' => [
      'title' => 'Вход',
    ],
  ];
}
