<?php

function getFiles($dir)
{
  $items = array_splice(scandir($dir), 2);

  $results = [];
  
  foreach ($items as $item) {
    if (is_file("{$dir}/{$item}")) {
      $results[] = $item;
    }
  }

  return $results;
}

function upload_image($files, $upload_dir, $thumbnail_path)
{
  $file_name = basename($files['name']);
  $upload_file = $upload_dir . $file_name;

  if (file_exists($upload_file)) {
    setFlash('message',  "Файл {$file_name} существует, выберите другое имя файла!");

    return false;
  }

  if ($files['size'] > 1024*1*1024) {
    setFlash('message',  'Размер файла не больше 5 мб');

    return false;
  }

  $black_list = ['.php', '.phtml', '.php3', '.php4'];
  foreach ($black_list as $item) {
    if (preg_match('/$item\$/i', $files['name'])) {
      setFlash('message',  'Загрузка php-файлов запрещена!');

      return false;
    }
  }

  $image_info = getimagesize($files['tmp_name']);
  $mimes = ['image/gif', 'image/jpeg', 'image/png'];
  if ( ! in_array($image_info['mime'], $mimes)) {
    setFlash('message',  'Можно загружать только изображение jpg, png, gif, неверное содержание файла, не изображение.');
    
    return false;
  }
 
  if (move_uploaded_file($files['tmp_name'], $upload_file)) {
    if ($thumbnail_path) {
      createThumbnail($upload_file, $thumbnail_path . $file_name);
    }
    setFlash('message',  'Файл успешно загружен.');

    return true;
  } else {
    setFlash('message',  'Загрузка не получилась.');
    
    return false;
  }
}

function createThumbnail($original_path, $thumbnail_path)
{
  $si = new SimpleImage;
  $si->load($original_path);
  $si->resizeToWidth(150);
  $si->save($thumbnail_path);
}

function autoload($dir)
{
  foreach (getFiles($dir) as $file) {
    include "{$dir}/{$file}";
  }
}

function loadLangs()
{
  $langs = [];

  foreach (getFiles(LANGS_PATH) as $file) {
    $name = explode('.', $file)[0];
    $langs[$name] = include LANGS_PATH . '/' . $file;
  }

  return $langs;
}

function setFlash($key, $value)
{
  $_SESSION['flash'][$key] = $value;
}

function getFlash()
{
  $flash = $_SESSION['flash'];

  unset($_SESSION['flash']);

  return $flash;
}

function redirect($path, $params = null)
{
  if ($path === 'back') {
    $path = parse_url($_SERVER['HTTP_REFERER'])['path'];
  }
      
  header("Location: {$path}{$params}");
  die;
}

function error($number)
{
  if ($number === 404) {
    $path = 'error/404';
  } else {
    $path = 'error/505';
  }

  redirect($path);
}
