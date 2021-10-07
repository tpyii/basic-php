<?php

function galleryController($id = null)
{
  if (isset($_FILES['image']) && isAdmin()) {
    if (upload_image($_FILES['image'], PUBLIC_PATH . '/img/big/', PUBLIC_PATH . '/img/small/')) {
      createImage(prepareValue(basename($_FILES['image']['name'])));
    }
  }

  if ( ! empty($id)) {
    $id = (int) $id;
    existsImage($id) ? updateImage($id) : error(404);
    
    $template = 'image';
    $params['title'] = 'Изображение';
    $params['image'] = getImage($id);
    
  } else {
    $template = 'gallery';
    $params['title'] = 'Галерея';
    $params['images'] = getImages();
  }

  return [
    'template' => $template,
    'params' => $params,
  ];
}
