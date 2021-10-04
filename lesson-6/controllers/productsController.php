<?php

function productsController($id = null)
{ 
  if ( ! empty($id)) {
    $id = (int) $id;

    $params['product'] = getProduct($id);

    if ( ! empty($params['product'])) {
      $params['button'] = 'Отправить';
      $params['action'] = 'add';
      $params = array_merge($params, doFeedbackAction());
      $params['feedbacks'] = getFeedbacks($id);
      $template = 'product';
    } else {
      die(ERROR_404);
    }
    
  } else {
    $template = 'products';
    $params['title'] = 'Товары';
    $params['products'] = getProducts();
  }

  return render($template, $params);
}
