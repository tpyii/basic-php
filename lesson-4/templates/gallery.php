<h1><?= $title ?></h1>
<?= $message ?? '' ?>
<?= $gallery ?>
<form method="POST" enctype="multipart/form-data">
  <input type="file" name="image">
  <input type="submit" value="Загрузить">
</form>
