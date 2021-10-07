
<?php
function feedbackController()
{
  doFeedbackAction();
  error(404);
}

function doFeedbackAction()
{
  $params = [];

  if ($_GET['action'] === 'edit') {
    $id = (int) $_GET['id'];

    $params['feedback'] = getFeedback($id);
    $params['action'] = 'save';
    $params['button'] = 'save';
  }

  if ($_GET['action'] === 'delete') {
    $id = (int) $_GET['id'];

    if ($id) {
      existsFeedback($id) ? deleteFeedback($id) : error(404);
      setFlash('feedback', 'Сообщение удалено');
      redirect('back', '#feedback');
    }
  }
  
  if ($_POST['action'] === 'add') {
    $product_id = (int) $_POST['product_id'];
    $name = prepareValue($_POST['name']);
    $body = prepareValue($_POST['body']);

    if ($product_id && $name && $body) {
      existsProduct($product_id) ? createFeedback($name, $body, $product_id) : error(404);
      setFlash('feedback', 'Сообщение добавлено');
      redirect('back', '#feedback');
    }
  }
  
  if ($_POST['action'] === 'save') {
    $id = (int) $_POST['id'];
    $name = prepareValue($_POST['name']);
    $body = prepareValue($_POST['body']);

    if ($id && $name && $body) {
      existsFeedback($id) ? updateFeedback($name, $body, $id) : error(404);
      setFlash('feedback', 'Сообщение сохранено');
      redirect('back', '#feedback');
    }
  }

  return $params;
}
