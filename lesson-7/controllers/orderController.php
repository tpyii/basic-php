<?php

function orderController($id)
{
  if ( ! empty($_POST)) {
    $phone = prepareValue($_POST['phone']);

    if ($phone) {
      createOrder($phone, session_id());
      session_regenerate_id();
      
      header("Location: /basket");
      die;
    }
  }

  if ( ! empty($id) && isAdmin()) {
    $id = (int) $id;

    if ($id) {
      $params['title'] = 'Заказ';
      $params['items'] = getBasketById($id);
    }
  } else {

    if ( ! getCountBasketItems(session_id())) {
      header("Location: " . HOME_PAGE);
      die;
    }

    $params['title'] = 'Оформление заказа';
  }
  
  return [
    'template' => 'order',
    'params' => $params,
  ];
}
