<?php

function controller($data)
{
  $template = $data['template'];
  $params = $data['params'];
  $layout = $data['layout'] ?? 'layout';

  $params['lang'] = loadLangs();
  $params['flash'] = getFlash();
  $params['isAuth'] = isAuth();
  $params['isAdmin'] = isAdmin();
  $params['countBasketItems'] = getCountBasketItems(session_id());

  return render($template, $params, $layout);
}
