<?php

function controller($data)
{
  $template = $data['template'];
  $params = $data['params'];
  $layout = $data['layout'] ?? 'layout';

  $params['isAuth'] = isAuth();
  $params['isAdmin'] = isAdmin();
  $params['countBasketItems'] = getCountBasketItems(session_id()) ?? 0;

  return render($template, $params, $layout);
}
