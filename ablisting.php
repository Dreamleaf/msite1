<?php require('app/ablisting.code.php'); ?>
<?php include_once('inc/header.php') ?>

    <h1>Address Book</h1>
    <p>Listing page, click the name to edit</p>
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
  </tbody>
</table>

<?php include('inc/footer.php') ?>
