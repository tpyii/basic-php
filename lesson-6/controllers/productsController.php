<?php

function productsController($id = null)
{ 
  if ( ! empty($id)) {
    $id = (int) $id;

    $params['product'] = getProduct($id);

    if ( ! empty($params['product'])) {
      $params['feedbacks'] = getFeedbacks($id);
      $params['button'] = 'Отправить';
      $params['action'] = 'add';
      $params = array_merge($params, doFeedbackAction() ?? []);
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
