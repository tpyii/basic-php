<?php

function ordersController()
{
  if ( ! isAuth()) {
    redirect(HOME_PAGE);
  }

  return [
    'template' => 'orders',
    'params' => [
      'title' => 'Заказы',
      'orders' => isAdmin() ? getAllOrders() : getOrders($_SESSION['id']),
    ]
  ];
}
