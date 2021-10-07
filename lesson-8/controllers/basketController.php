<?php

function basketController()
{
  if ($_POST['action'] === 'add') {
    $product_id = (int) $_POST['id'];

    if (existsProduct($product_id)) {
      addBasketItem($product_id, getProductPrice($product_id), session_id());
      setFlash('message', 'Товар добавлен в корзину');
      redirect('back');
    } else {
      error(404);
    }
  }

  if ($_POST['action'] === 'delete') {
    $id = (int) $_POST['id'];

    if ($id) {
      existsBasketItem($id) ? deleteBasketItem($id, session_id()) : error(404);
      setFlash('message', 'Товар удален из корзины');
      redirect('back');
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
