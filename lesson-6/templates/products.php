<h1><?= $title ?></h1>
<?php if ($products): ?>
<ul class="gallery">
  <?php foreach ($products as $product): ?>
    <li class="gallery-item">
      <a href="/products/<?= $product['id'] ?>">
        <p><img src="/img/small/<?= $product['image'] ?>" alt="<?= $product['image'] ?>" /></p>
        <figcaption><?= $product['title'] ?></figcaption>
      </a>
    </li>
  <?php endforeach ?>
</ul>
<?php else: ?>
  <p>Товаров нет</p>
<?php endif ?>
