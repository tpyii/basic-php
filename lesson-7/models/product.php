<?php

function existsProduct($id)
{
  return executeSql("SELECT id FROM products WHERE id = {$id}");
}

function getProduct($id)
{
  return fetchOneAssoc(
    "SELECT p.id, p.title, p.body, p.price, i.name image
    FROM products p 
    LEFT JOIN images i ON i.product_id = p.id  
    WHERE p.id = {$id}"
  );
}

function getProducts()
{
  return fetchAssoc(
    "SELECT p.id, p.title, p.price, i.name image
    FROM products p 
    LEFT JOIN images i ON i.product_id = p.id"
  );
}
