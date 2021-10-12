<h1><?= $title ?></h1>
<?= $flash['message'] ?>
<?php if ($products): ?>
<ul class="gallery">
  <?php foreach ($products as $product): ?>
    <li class="gallery-item">
      <a href="/products/<?= $product['id'] ?>">
        <p><img src="/img/small/<?= $product['image'] ?>" alt="<?= $product['image'] ?>" /></p>
        <p><?= $product['title'] ?></p>
      </a>
      <p><?= $product['price'] ?></p>
      <form action="/basket" method="POST">
        <input type="hidden" name="action" value="add">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <input type="submit" value="<?= $lang['interface']['in_basket'] ?>">
      </form>
    </li>
  <?php endforeach ?>
</ul>
<?php else: ?>
  <p><?= $lang['product']['empty'] ?></p>
<?php endif ?>
