<h1><?= $title ?></h1>
<?= $flash['message'] ?>
<form action="/login" method="POST">
  <div class="field-item">
    <label for="login"><?= $lang['user']['login'] ?></label>
    <input type="text" id="login" name="login">
  </div>
  <div class="field-item">
    <label for="password"><?= $lang['user']['password'] ?></label>
    <input type="password" id="password" name="password">
  </div>
  <input type="submit" value="<?= $lang['interface']['enter'] ?>">
</form>
