<?php

function galleryController($id = null)
{
  if (isset($_FILES['image'])) {
    $result = upload_image($_FILES['image'], PUBLIC_PATH . '/img/big/', PUBLIC_PATH . '/img/small/');
    $params['message'] = $result['message'];

    if ($result['status'] === 'ok') {
      $name = prepareValue(basename($_FILES['image']['name']));
      createImage($name);
    }
  }

  if ( ! empty($id)) {
    $id = (int) $id;
    existsImage($id) ? updateImage($id) : die(ERROR_404);
    
    $template = 'image';
    $params['title'] = 'Изображение';
    $params['image'] = getImage($id);
    
  } else {
    $template = 'gallery';
    $params['title'] = 'Галерея';
    $params['images'] = getImages();
  }

  return render($template, $params);
}
