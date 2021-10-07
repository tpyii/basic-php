<?php

function existsUser($login)
{
  return executeSql("SELECT id FROM users WHERE login = '{$login}'");
}

function getUser($login)
{
  return fetchOneAssoc("SELECT * FROM users WHERE login = '{$login}'");
}

function createUser($login, $password)
{
  return executeSql("INSERT INTO users (login, password) VALUES ('{$login}', '{$password}')");
}
