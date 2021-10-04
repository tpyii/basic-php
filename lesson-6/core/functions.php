<?php

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
    return [
      'message' => 'Файл ' . $file_name . ' существует, выберите другое имя файла!',
      'status' => 'error',
    ]; 
  } 

  if ($files['size'] > 1024*1*1024)
  {
    return [
      'message' => 'Размер файла не больше 5 мб',
      'status' => 'error',
    ];
  }

  $black_list = array('.php', '.phtml', '.php3', '.php4');
  foreach ($black_list as $item) {
    if (preg_match('/$item\$/i', $files['name'])) {
      return [
        'message' => 'Загрузка php-файлов запрещена!',
        'status' => 'error',
      ];
    }
  }

  $image_info = getimagesize($files['tmp_name']);
  if ($image_info['mime'] != 'image/gif' && $image_info['mime'] != 'image/jpeg') {
    return [
      'message' => 'Можно загружать только jpg-файлы, неверное содержание файла, не изображение.',
      'status' => 'error',
    ];
  }

  if ($files['type'] != 'image/jpeg') {
    return [
      'message' => 'Можно загружать только jpg-файлы.',
      'status' => 'error',
    ];
  }
 
  if (move_uploaded_file($files['tmp_name'], $upload_file)) {
    if ($thumbnail_path) {
      createThumbnail($upload_file, $thumbnail_path . $file_name);
    }
    return [
      'message' => 'Файл успешно загружен.',
      'status' => 'ok',
    ];
  } else {
    return [
      'message' => 'Загрузка не получилась.',
      'status' => 'error',
    ];
  }
}

function createThumbnail($original_path, $thumbnail_path)
{
  $si = new SimpleImage;
  $si->load($original_path);
  $si->resizeToWidth(150);
  $si->save($thumbnail_path);
}
