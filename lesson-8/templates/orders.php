<h1><?= $title ?></h1>
<?php if ($orders): ?>
<table>
  <thead>
    <tr>
      <th><?= $lang['order']['number'] ?></th>
      <th><?= $lang['order']['phone'] ?></th>
      <th><?= $lang['order']['status'] ?></th>
    </tr>
  </thead>
  <?php foreach ($orders as $order): ?>
    <tr>
      <td><a href="/order/<?= $order['id'] ?>"><?= $order['id'] ?></a></td>
      <td><?= $order['phone'] ?></td>
      <td><?= $lang['order']['statuses'][$order['status']] ?></td>
    </tr>
  <?php endforeach ?>
</table>
<?php else: ?>
  <p><?= $lang['order']['empty'] ?></p>
<?php endif ?>
