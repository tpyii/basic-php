<?php

function existsFeedback($id)
{
  return executeSql("SELECT id FROM feedbacks WHERE id = {$id}");
}

function createFeedback($name, $body, $product_id)
{
  return executeSql("INSERT INTO feedbacks (name, body, product_id) VALUES ('{$name}', '{$body}', {$product_id})");
}

function updateFeedback($name, $body, $id)
{
  return executeSql("UPDATE feedbacks SET name = '{$name}', body = '{$body}' WHERE id = {$id}");
}

function deleteFeedback($id)
{
  return executeSql("DELETE FROM feedbacks WHERE id = {$id}");
}

function getFeedbacks($product_id)
{
  return fetchAssoc("SELECT id, name, body FROM feedbacks WHERE product_id = {$product_id}");
}

function getFeedback($id)
{
  return fetchOneAssoc("SELECT id, name, body FROM feedbacks WHERE id = {$id}");
}
