<?php

function productsController($id = null)
{ 
  if ( ! empty($id)) {
    $id = (int) $id;

    $params['product'] = getProduct($id);

    if ( ! empty($params['product'])) {
      $params['button'] = 'send';
      $params['action'] = 'add';
      $params = array_merge($params, doFeedbackAction());
      $params['feedbacks'] = getFeedbacks($id);
      $template = 'product';
    } else {
      error(404);
    }
    
  } else {
    $template = 'products';
    $params['title'] = 'Товары';
    $params['products'] = getProducts();
  }

  return [
    'template' => $template,
    'params' => $params,
  ];
}
