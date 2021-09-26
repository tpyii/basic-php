<?php

if (! empty($_FILES)) {
  $params['message'] = upload_image($_FILES['image'], PUBLIC_PATH . '/img/small/');
}

$params['title'] = 'Галерея';
$params['gallery'] = renderGallery();

function renderGallery()
{
  $directory_small = PUBLIC_PATH . '/img/small';
  $thumbnails = array_splice(scandir($directory_small), 2);
  $template = '';

  if (is_array($thumbnails)) {

    $template .= '<ul class="gallery">';
      
    foreach ($thumbnails as $image_name) {
      $template .= '<li class="gallery-item">
        <a href="/img/big/' . $image_name .'" target="_blank">
          <img src="/img/small/' . $image_name .'" alt="'. $image_name .'">
        </a>
      </li>';
    }

    $template .= '</ul>';
  } else {
    $template = 'Фотографий нет';
  }

  return $template;
}
