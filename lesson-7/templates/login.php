<h1><?= $title ?></h1>
<form action="/login" method="POST">
  <div class="field-item">
    <label for="login">Логин</label>
    <input type="text" id="login" name="login">
  </div>
  <div class="field-item">
    <label for="password">Пароль</label>
    <input type="password" id="password" name="password">
  </div>
  <input type="submit" value="Войти">
</form>
