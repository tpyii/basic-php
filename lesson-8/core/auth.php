<?php

function auth($login, $password)
{
  $user = getUser($login);

  if ($user && password_verify($password, $user['password'])) {
    $_SESSION['login'] = $login;
    $_SESSION['id'] = $user['id'];

    return true;
  }

  return false;
}

function register($login, $password)
{
  if (existsUser($login)) {
    setFlash('message', 'Пользователь с таким логином уже существует');
    redirect('back');
  }

  if (createUser($login, password_hash($password, PASSWORD_DEFAULT))) {
    setFlash('message', 'Пользователь зарегистрирован');
    redirect('/login');
  }

  return false;
}

function isAuth()
{
  return isset($_SESSION['login']);
}

function isAdmin()
{
  return $_SESSION['login'] === 'admin';
}
