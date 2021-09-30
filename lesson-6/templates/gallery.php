<h1><?= $title ?></h1>
<?= $message ?? '' ?>
<?php if ($images): ?>
<ul class="gallery">
  <?php foreach ($images as $image): ?>
    <li class="gallery-item">
      <a href="/gallery/<?= $image['id'] ?>">
        <img src="/img/small/<?= $image['name'] ?>" alt="<?= $image['name'] ?>">
      </a>
    </li>
  <?php endforeach ?>
</ul>
<?php else: ?>
  <p>Фотографий нет</p>
<?php endif ?>
<form method="POST" enctype="multipart/form-data">
  <input type="file" name="image">
  <input type="submit" value="Загрузить">
</form>
