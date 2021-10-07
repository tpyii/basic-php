<?php

function loginController()
{
  if (isAuth()) {
    redirect(HOME_PAGE);
  }

  if ( ! empty($_POST)) {
    $login = prepareValue($_POST['login']);
    $password = prepareValue($_POST['password']);

    if ( ! $login || ! $password) {
      setFlash('message', 'Все поля обязательны для заполнения');
      redirect('back');
    }

    if (auth($login, $password)) {
      redirect(HOME_PAGE);
    } else {
      setFlash('message', 'Неверные данные');
      redirect('back');
    }
  }

  return [
    'template' => 'login', 
    'params' => [
      'title' => 'Вход',
    ],
  ];
}
