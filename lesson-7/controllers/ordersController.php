<?php

function ordersController()
{
  if (isAdmin()) {
    return [
      'template' => 'orders',
      'params' => [
        'title' => 'Заказы',
        'orders' => getOrders(),
      ]
    ];
  }

  die(ERROR_404);
}
