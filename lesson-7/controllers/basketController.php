<?php

function basketController()
{
  if ($_POST['action'] === 'add') {
    $product_id = (int) $_POST['id'];

    if ($product_id) {
      existsProduct($product_id) ? addBasketItem($product_id, session_id()) : die(ERROR_404);

      $path = parse_url($_SERVER['HTTP_REFERER'])['path'];
      
      header("Location: {$path}");
      die;
    }
  }

  if ($_POST['action'] === 'delete') {
    $id = (int) $_POST['id'];

    if ($id) {
      existsBasketItem($id) ? deleteBasketItem($id, session_id()) : die(ERROR_404);

      $path = parse_url($_SERVER['HTTP_REFERER'])['path'];
      
      header("Location: {$path}");
      die;
    }
  }

  return [
    'template' => 'basket',
    'params' => [
      'title' => 'Корзина',
      'items' => getBasketItems(session_id()),
      'total' => getTotalBasket(session_id()),
    ],
  ];
}
