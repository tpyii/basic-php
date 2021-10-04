
<?php
function feedbackController()
{
  doFeedbackAction();
  
  die(ERROR_404);
}

function doFeedbackAction()
{
  $params = [];

  if ($_GET['action'] === 'edit') {
    $id = (int) $_GET['id'];

    $params['feedback'] = getFeedback($id);
    $params['action'] = 'save';
    $params['button'] = 'Изменить';
  }

  if ($_GET['action'] === 'delete') {
    $id = (int) $_GET['id'];

    if ($id) {
      existsFeedback($id) ? deleteFeedback($id) : die(ERROR_404);

      $path = parse_url($_SERVER['HTTP_REFERER'])['path'];

      header("Location: {$path}#feedback");
      die;
    }
  }
  
  if ($_POST['action'] === 'add') {
    $product_id = (int) $_POST['product_id'];
    $name = prepareValue($_POST['name']);
    $body = prepareValue($_POST['body']);

    if ($product_id && $name && $body) {
      existsProduct($product_id) ? createFeedback($name, $body, $product_id) : die(ERROR_404);
      
      $path = parse_url($_SERVER['HTTP_REFERER'])['path'];

      header("Location: {$path}#feedback");
      die;
    }
  }
  
  if ($_POST['action'] === 'save') {
    $id = (int) $_POST['id'];
    $name = prepareValue($_POST['name']);
    $body = prepareValue($_POST['body']);

    if ($id && $name && $body) {
      existsFeedback($id) ? updateFeedback($name, $body, $id) : die(ERROR_404);

      $path = parse_url($_SERVER['HTTP_REFERER'])['path'];

      header("Location: {$path}#feedback");
      die;
    }
  }

  return $params;
}
