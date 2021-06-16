<table class="table">
  <thead>
    <tr>
      <th>Last Name, First Name</th>
      <th>Email</th>
      <th></th>
    </tr>
  </thead>
  <tbody>

<?php foreach ($model as $item) : $item = encode($item) ?>
  <tr>
    <td>
      <a href="edit.php?id=<?= $item['id'] ?>">
        <?= $item['last_name'] ?>, <?= $item['first_name'] ?>
      </a>
    </td>
    <td><?= $item['email'] ?></td>
    <td><a href="delete.php?id=<?= $item['id'] ?>" class="btn btn-danger btn-sm">Delete</a></td>
  </tr>
<?php endforeach; ?>
