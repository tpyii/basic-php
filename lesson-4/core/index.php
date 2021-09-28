<?php

function render($template, $params, $layout = 'layout')
{
  return renderTemplate($layout, [
    'menu' => renderTemplate('menu'),
    'content' => renderTemplate($template, $params),
  ]);
}

function renderTemplate($template, $params = [])
{
  ob_start();
  extract($params);

  $file_path = TEMPLATES_PATH . '/' . $template . '.php';

  if (file_exists($file_path)) {
    include $file_path;
    return ob_get_clean();
  } else {
    die(ERROR_404);
  }
}

function getFiles($dir)
{
  $items = array_splice(scandir($dir), 2);

  $results = [];
  
  foreach ($items as $item) {
    if (is_file($dir . $item)) {
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
    return 'Файл ' . $file_name . ' существует, выберите другое имя файла!'; 
  } 

  if ($files['size'] > 1024*1*1024)
  {
    return 'Размер файла не больше 5 мб';
  }

  $black_list = array('.php', '.phtml', '.php3', '.php4');
  foreach ($black_list as $item) {
    if (preg_match('/$item\$/i', $files['name'])) {
      return 'Загрузка php-файлов запрещена!';
    }
  }

  $image_info = getimagesize($files['tmp_name']);
  if ($image_info['mime'] != 'image/gif' && $image_info['mime'] != 'image/jpeg') {
    return 'Можно загружать только jpg-файлы, неверное содержание файла, не изображение.';
  }

  if ($files['type'] != 'image/jpeg') {
    return 'Можно загружать только jpg-файлы.';
  }
 
  if (move_uploaded_file($files['tmp_name'], $upload_file)) {
    if ($thumbnail_path) {
      createThumbnail($upload_file, $thumbnail_path . $file_name);
    }
    return 'Файл успешно загружен.';
  } else {
    return 'Загрузка не получилась.';
  }
}

function createThumbnail($original_path, $thumbnail_path)
{
  $si = new SimpleImage;
  $si->load($original_path);
  $si->resizeToWidth(150);
  $si->save($thumbnail_path);
}
