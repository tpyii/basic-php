<?php

function homeController()
{
  $params['title'] = 'Главная страница';

  return render('home', $params);
}

function galleryController($id = false)
{
  if (isset($_FILES['image'])) {
    $params['message'] = upload_image($_FILES['image'], PUBLIC_PATH . '/img/big/', PUBLIC_PATH . '/img/small/');
  }

  $params['title'] = 'Галерея';

  if ( ! empty($id)) {
    executeSql('SELECT id FROM images WHERE id = ' . $id)
      ? executeSql('UPDATE images SET views = views + 1 WHERE id = ' . $id)
      : die(ERROR_404);

    $params['image'] = fetchAssoc('SELECT name, views FROM images WHERE id = ' . $id);
    return render('image', $params);
    
  } else {
    $params['images'] = fetchAssoc('SELECT id, name  FROM images ORDER BY views DESC');
    return render('gallery', $params);
  }
}
