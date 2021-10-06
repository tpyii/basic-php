<ul class="menu">
  <li><a href="/">Главная</a></li>
  <li><a href="/gallery">Галерея</a></li>
  <li><a href="/products">Товары</a></li>
  <li><a href="/basket">Корзина (<?= $countBasketItems ?>)</a></li>
  <?php if ($isAdmin): ?>
  <li><a href="/orders">Заказы</a></li>
  <?php endif ?>
  <?php if ($isAuth): ?>
  <li><a href="/logout">Выход</a></li>
  <?php else: ?>
  <li><a href="/login">Вход</a></li>
  <?php endif ?>
</ul>
