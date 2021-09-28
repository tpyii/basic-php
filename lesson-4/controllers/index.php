<?php

function homeController()
{
  $params['title'] = 'Главная страница';

  echo render('home', $params);
}

function galleryController()
{
  if (isset($_FILES['image'])) {
    $params['message'] = upload_image($_FILES['image'], PUBLIC_PATH . '/img/big/', PUBLIC_PATH . '/img/small/');
  }
  
  $params['title'] = 'Галерея';
  $params['images'] = getFiles(PUBLIC_PATH . '/img/small/');

  echo render('gallery', $params);
}
