<?php

function ordersController()
{
  return [
    'template' => 'orders',
    'params' => [
      'title' => 'Заказы',
      'orders' => isAdmin() ? getAllOrders() : getOrders($_SESSION['id']),
    ]
  ];
}
