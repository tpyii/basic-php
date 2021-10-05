<?php

function getUser($login)
{
  return fetchOneAssoc("SELECT * FROM users WHERE login = '{$login}'");
}
