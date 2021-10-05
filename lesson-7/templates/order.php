<h1><?= $title ?></h1>
<?php if ($items): ?>
<table>
  <thead>
    <tr>
      <th></th>
      <th>Название</th>
      <th>Стоимость</th>
      <th></th>
    </tr>
  </thead>
  <?php foreach ($items as $item): ?>
    <tr>
      <td><img src="/img/small/<?= $item['image'] ?>" alt="<?= $item['image'] ?>" /></td>
      <td><a href="/products/<?= $item['product_id'] ?>"><?= $item['title'] ?></a></td>
      <td><?= $item['price'] ?></td>
      <td>
        <form action="/basket" method="POST">
          <input type="hidden" name="action" value="delete">
          <input type="hidden" name="id" value="<?= $item['id'] ?>">
          <input type="submit" value="Удалить">
        </form>
      </td>
    </tr>
  <?php endforeach ?>
</table>
<?php else: ?>
  <form action="/order" method="POST">
    <div class="field-item">
      <label for="phone">Телефон</label>
      <input type="number" id="phone" name="phone">
    </div>
    <input type="submit" value="Оформить">
  </form>
<?php endif ?>
