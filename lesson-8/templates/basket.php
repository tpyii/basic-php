<h1><?= $title ?></h1>
<?= $flash['message'] ?>
<?php if ($items): ?>
<table>
  <thead>
    <tr>
      <th></th>
      <th><?= $lang['product']['name'] ?></th>
      <th><?= $lang['product']['price'] ?></th>
      <th></th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <td></td>
      <td></td>
      <td><?= $total ?></td>
      <td><a href="/order"><?= $lang['interface']['issue'] ?></a></td>
    </tr>
  </tfoot>
  <?php foreach ($items as $item): ?>
    <tr>
      <td><img src="/img/small/<?= $item['image'] ?>" alt="<?= $item['image'] ?>" /></td>
      <td><a href="/products/<?= $item['product_id'] ?>"><?= $item['title'] ?></a></td>
      <td><?= $item['price'] ?></td>
      <td>
        <form action="/basket" method="POST">
          <input type="hidden" name="action" value="delete">
          <input type="hidden" name="id" value="<?= $item['id'] ?>">
          <input type="submit" value="<?= $lang['interface']['delete'] ?>">
        </form>
      </td>
    </tr>
  <?php endforeach ?>
</table>
<?php else: ?>
  <p><?= $lang['basket']['empty'] ?></p>
<?php endif ?>
