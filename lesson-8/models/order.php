<?php

function existsOrder($id)
{
  return executeSql("SELECT id FROM orders WHERE id = {$id}");
}

function existsOrderUser($id, $user_id)
{
  return executeSql("SELECT id FROM orders WHERE id = {$id} AND user_id = {$user_id}");
}

function createOrder($phone, $session_id)
{
  return executeSql("INSERT INTO orders (phone, session_id) VALUES ({$phone}, '{$session_id}')");
}

function createOrderUser($phone, $session_id, $user_id)
{
  return executeSql("INSERT INTO orders (phone, session_id, user_id) VALUES ({$phone}, '{$session_id}', {$user_id})");
}

function updateOrder($status, $id)
{
  return executeSql("UPDATE orders SET status = '{$status}' WHERE id = {$id}");
}

function getAllOrders()
{
  return fetchAssoc("SELECT * FROM orders");
}

function getOrders($user_id)
{
  return fetchAssoc("SELECT * FROM orders WHERE user_id = {$user_id}");
}

function getOrder($id)
{
  return fetchOneAssoc("SELECT * FROM orders WHERE id = {$id}");
}
