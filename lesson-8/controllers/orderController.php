<?php

function orderController($id)
{
  if ($_POST['action'] === 'status' && isAdmin()) {
    $id = (int) $_POST['id'];
    $status = prepareValue($_POST['status']);

    if ($id) {
      existsOrder($id) ? updateOrder($status, $id) : error(404);
      setFlash('message', 'Сататус заказа сохранен');
      redirect('back');
    }
  }

  if ( ! empty($_POST)) {
    $phone = prepareValue($_POST['phone']);

    if ($phone) {
      isAuth() ? createOrderUser($phone, session_id(), $_SESSION['id']) : createOrder($phone, session_id());
      session_regenerate_id();
      setFlash('message', 'Заказ оформлен');
      redirect('/basket');
    } else {
      setFlash('message', 'Не корректно указан телефон');
      redirect('back');
    }
  }

  if ( ! empty($id)) {
    $id = (int) $id;

    if ($id && isAdmin() || existsOrderUser($id, $_SESSION['id'])) {
      $params['title'] = 'Заказ';
      $params['items'] = getBasketById($id);

      if (isAdmin()) {
        $params['order'] = getOrder($id);
      }
    }
  } else {

    if ( ! getCountBasketItems(session_id())) {
      redirect(HOME_PAGE);
    }

    $params['title'] = 'Оформление заказа';
  }
  
  return [
    'template' => 'order',
    'params' => $params,
  ];
}
