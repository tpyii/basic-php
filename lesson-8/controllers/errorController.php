<?php

function errorController($number)
{ 
  if ($number === '404') {
    $params['title'] = '404: Страница не найдена';
  } else {
    $params['title'] = '505: Системная ошибка';
  }

  return [
    'template' => 'error',
    'params' => $params,
  ];
}
