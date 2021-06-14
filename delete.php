<?php require('app/delete.code.php'); ?>
<?php include('inc/header.php') ?>

    <h1>Delete Confirmation Page</h1>
    <p>Create, Read, Update and <b>Delete</b> records test</p>
    <?php if ($model == null) : ?>
      Not Found
    <?php else : $item = encode($model) ?>
    <form class="row row-cols-lg-auto g-3 align-items-center" method="POST">
      <input type="hidden" name="person-id" value="<?= $model['id'] ?>" >
        <!-- Open Form -->
        <div class="col-12">
          Are you sure you want to delete <?= $model['first_name'] ?> <?= $model['last_name'] ?>?
        </div>
        <div class="col-12">
          <button type="submit" name="delete" value="delete" class="btn btn-danger">Delete</button>
        </div>
        <div class="col-12">
          <button type="submit" name="cancel" value="cancel" class="btn btn-default">Cancel</button>
        </div>
<!-- Close form -->
    </form>
  <?php endif; ?>
<?php include('inc/footer.php') ?>
