<h1><?= $product['title'] ?></h1>
<p><img src="/img/big/<?= $product['image'] ?>" alt="<?= $product['images'] ?>"></p>
<form action="/basket" method="POST">
  <input type="hidden" name="action" value="add">
  <input type="hidden" name="id" value="<?= $product['id'] ?>">
  <input type="submit" value="В корзину">
</form>
<p><?= $product['body'] ?></p>
<h2>Отзывы</h2>
<form action="/feedback" method="POST" id="feedback">
  <input type="hidden" name="action" value="<?= $action ?>">
  <input type="hidden" name="id" value="<?= $feedback['id'] ?>">
  <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
  <div class="field-item">
    <label for="name">Имя</label>
    <input type="text" id="name" name="name" value="<?= $feedback['name'] ?>">
  </div>
  <div class="field-item">
    <label for="body">Текст</label>
    <textarea id="body" name="body" rows="5"><?= $feedback['body'] ?></textarea>
  </div>
  <input type="submit" value="<?= $button ?>">
</form>
<?php if ($feedbacks): ?>
  <ul>
    <?php foreach ($feedbacks as $feedback): ?>
      <li>
        <p><strong><?= $feedback['name'] ?></strong></p>
        <p><?= $feedback['body'] ?></p>
        <a href="?action=edit&id=<?= $feedback['id'] ?>#feedback">[Edit]</a>
        <a href="?action=delete&id=<?= $feedback['id'] ?>">[X]</a>
      </li>
    <?php endforeach ?>
  </ul>
<?php endif ?>
