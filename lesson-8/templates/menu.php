<ul class="menu">
  <li><a href="/"><?= $lang['menu']['home'] ?></a></li>
  <li><a href="/gallery"><?= $lang['menu']['gallery'] ?></a></li>
  <li><a href="/products"><?= $lang['menu']['products'] ?></a></li>
  <li><a href="/basket"><?= $lang['menu']['basket'] ?> (<?= $countBasketItems ?>)</a></li>
  <?php if ($isAuth): ?>
  <li><a href="/orders"><?= $lang['menu']['orders'] ?></a></li>
  <?php endif ?>
  <?php if ( ! $isAuth): ?>
  <li><a href="/registration"><?= $lang['menu']['registration'] ?></a></li>
  <?php endif ?>
  <?php if ($isAuth): ?>
  <li><a href="/logout"><?= $lang['menu']['logout'] ?></a></li>
  <?php else: ?>
  <li><a href="/login"><?= $lang['menu']['login'] ?></a></li>
  <?php endif ?>
</ul>
