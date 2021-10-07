<h1><?= $product['title'] ?></h1>
<?= $flash['message'] ?>
<p><img src="/img/big/<?= $product['image'] ?>" alt="<?= $product['images'] ?>"></p>
<form action="/basket" method="POST">
  <input type="hidden" name="action" value="add">
  <input type="hidden" name="id" value="<?= $product['id'] ?>">
  <input type="submit" value="<?= $lang['interface']['in_basket'] ?>">
</form>
<p><?= $product['body'] ?></p>
<h2><?= $lang['feedback']['title'] ?></h2>
<?= $flash['feedback'] ?>
<form action="/feedback" method="POST" id="feedback">
  <input type="hidden" name="action" value="<?= $action ?>">
  <input type="hidden" name="id" value="<?= $feedback['id'] ?>">
  <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
  <div class="field-item">
    <label for="name"><?= $lang['feedback']['name'] ?></label>
    <input type="text" id="name" name="name" value="<?= $feedback['name'] ?>">
  </div>
  <div class="field-item">
    <label for="body"><?= $lang['feedback']['text'] ?></label>
    <textarea id="body" name="body" rows="5"><?= $feedback['body'] ?></textarea>
  </div>
  <input type="submit" value="<?= $lang['interface'][$button] ?>">
</form>
<?php if ($feedbacks): ?>
  <ul>
    <?php foreach ($feedbacks as $feedback): ?>
      <li>
        <p><strong><?= $feedback['name'] ?></strong></p>
        <p><?= $feedback['body'] ?></p>
        <a href="?action=edit&id=<?= $feedback['id'] ?>#feedback"><?= $lang['interface']['edit'] ?></a>
        <a href="?action=delete&id=<?= $feedback['id'] ?>"><?= $lang['interface']['delete'] ?></a>
      </li>
    <?php endforeach ?>
  </ul>
<?php endif ?>
