<h1><?= $title ?></h1>
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
        <input type="submit" value="В корзину">
      </form>
    </li>
  <?php endforeach ?>
</ul>
<?php else: ?>
  <p>Товаров нет</p>
<?php endif ?>
