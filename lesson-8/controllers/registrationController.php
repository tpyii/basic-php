<?php

function registrationController()
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

    if ( ! register($login, $password)) {
      error(505);
    }
  }

  return [
    'template' => 'registration', 
    'params' => [
      'title' => 'Регистрация',
    ],
  ];
}
