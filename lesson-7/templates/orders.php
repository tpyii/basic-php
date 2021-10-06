<h1><?= $title ?></h1>
<?php if ($orders): ?>
<table>
  <thead>
    <tr>
      <th>Номер</th>
      <th>Телефон</th>
    </tr>
  </thead>
  <?php foreach ($orders as $order): ?>
    <tr>
      <td><a href="/order/<?= $order['id'] ?>"><?= $order['id'] ?></a></td>
      <td><?= $order['phone'] ?></td>
    </tr>
  <?php endforeach ?>
</table>
<?php else: ?>
  <p>Заказов нет</p>
<?php endif ?>
