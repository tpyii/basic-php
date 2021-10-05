<?php

function db()
{
  static $db = null;
  
  if (is_null($db)) {
    $db = @mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT) or die('Ошибка соединения с базой данных: ' . mysqli_connect_error());
  }

  return $db;
}

function fetchAssoc($query)
{
  $array_result = [];
  $result = @mysqli_query(db(), $query) or die(mysqli_error(db()));

  while ($row = mysqli_fetch_assoc($result)) {
    $array_result[] = $row;
  }

  return $array_result;
}

function fetchOneAssoc($query)
{
  $result = @mysqli_query(db(), $query) or die(mysqli_error(db()));
  
  return mysqli_fetch_assoc($result);
}

function executeSql($query)
{
  @mysqli_query(db(), $query) or die(mysqli_error(db()));

  return mysqli_affected_rows(db());
}

function prepareValue($value)
{
  return mysqli_real_escape_string(db(), trim(htmlspecialchars(strip_tags($value)))); 
}
