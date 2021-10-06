<?php

function render($template, $params, $layout)
{
  return renderTemplate(LAYOUTS_DIR . $layout, [
    'menu' => renderTemplate('menu', $params),
    'content' => renderTemplate($template, $params),
  ]);
}

function renderTemplate($template, $params = [])
{
  ob_start();
  extract($params);

  $file_path = TEMPLATES_PATH . '/' . $template . '.php';

  if (file_exists($file_path)) {
    include $file_path;
  } else {
    die(ERROR_404);
  }

  return ob_get_clean();
}
