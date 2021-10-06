<?php

function existsImage($id)
{
  return executeSql("SELECT id FROM images WHERE id = {$id}");
}

function createImage($name)
{
  return executeSql("INSERT INTO images (name) VALUES ('{$name}')");
}

function updateImage($id)
{
  return executeSql("UPDATE images SET views = views + 1 WHERE id = {$id}");
}

function getImage($id)
{
  return fetchOneAssoc("SELECT name, views FROM images WHERE id = {$id}");
}

function getImages()
{
  return fetchAssoc("SELECT id, name FROM images ORDER BY views DESC");
}
