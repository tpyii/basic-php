<?php

function existsBasketItem($id)
{
  return executeSql("SELECT id FROM basket WHERE id = {$id}");
}

function addBasketItem($product_id, $session_id)
{
  return executeSql("INSERT INTO basket (product_id, session_id) VALUES ({$product_id}, '{$session_id}')");
}

function deleteBasketItem($id, $session_id)
{
  return executeSql("DELETE FROM basket WHERE id = {$id} AND session_id = '{$session_id}'");
}

function getBasketItems($session_id)
{
  return fetchAssoc("
    SELECT 
      b.id, 
      b.product_id,
      p.title,
      p.price,
      i.name image
    FROM basket b
      JOIN products p ON p.id = b.product_id
      JOIN images i ON i.product_id = p.id
    WHERE session_id = '{$session_id}'
  ");
}

function getBasketById($id)
{
  return fetchAssoc("
    SELECT 
      b.id, 
      b.product_id,
      p.title,
      p.price,
      i.name image
    FROM basket b
      JOIN products p ON p.id = b.product_id
      JOIN images i ON i.product_id = p.id
      JOIN orders o ON o.session_id = b.session_id
    WHERE o.id = {$id}
  ");
}

function getCountBasketItems($session_id)
{
  return fetchOneAssoc("SELECT COUNT(*) count FROM basket WHERE session_id = '{$session_id}'")['count'];
}

function getTotalBasket($session_id)
{
  return fetchOneAssoc("
    SELECT 
      SUM(p.price) total
    FROM basket b
      JOIN products p ON p.id = b.product_id
    WHERE session_id = '{$session_id}'
  ")['total'];
}
