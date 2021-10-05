<?php

function createOrder($phone, $session_id)
{
  return executeSql("INSERT INTO orders (phone, session_id) VALUES ({$phone}, '{$session_id}')");
}

function getOrders()
{
  return fetchAssoc("SELECT * FROM orders");
}
