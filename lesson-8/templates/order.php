<h1><?= $title ?></h1>
<?= $flash['message'] ?>
<?php if ($items): ?>
<?php if ($isAdmin): ?>
<form method="POST">
  <div class="field-item">
    <input type="hidden" name="action" value="status">
    <input type="hidden" name="id" value="<?= $order['id'] ?>">
    <label for="status"><?= $lang['order']['status'] ?></label>
    <select name="status" id="status">
      <?php foreach ($lang['order']['statuses'] as $value => $name): ?>
        <option value="<?= $value ?>" <?= $order['status'] === $value ? 'selected' : '' ?>><?= $name ?></option>
      <?php endforeach ?>
    </select>
  </div>
  <input type="submit" value="<?= $lang['interface']['save'] ?>">
</form>
<?php endif ?>
<table>
  <thead>
    <tr>
      <th></th>
      <th><?= $lang['product']['name'] ?></th>
      <th><?= $lang['product']['price'] ?></th>
    </tr>
  </thead>
  <?php foreach ($items as $item): ?>
    <tr>
      <td><img src="/img/small/<?= $item['image'] ?>" alt="<?= $item['image'] ?>" /></td>
      <td><a href="/products/<?= $item['product_id'] ?>"><?= $item['title'] ?></a></td>
      <td><?= $item['price'] ?></td>
    </tr>
  <?php endforeach ?>
</table>
<?php else: ?>
  <?= $flash['message'] ?>
  <form action="/order" method="POST">
    <div class="field-item">
      <label for="phone"><?= $lang['order']['phone'] ?></label>
      <input type="number" id="phone" name="phone">
    </div>
    <input type="submit" value="<?= $lang['interface']['issue'] ?>">
  </form>
<?php endif ?>
