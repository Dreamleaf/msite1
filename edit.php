<?php require('app/edit.code.php'); ?>
<?php include('inc/header.php') ?>

    <h1>Edit Form</h1>
    <p>Create, Read, <b>Update</b> and Delete records test</p>
    <?php if ($model == null) : ?>
      Not Found
    <?php else : $item = encode($model) ?>
    <form class="row row-cols-lg-auto g-3 align-items-center" method="POST">
      <input type="hidden" name="person-id" value="<?= $model['id'] ?>" >
        <!-- Open Form -->
        <div class="col-12">
          <input type="text" class="form-control" id="first-name" name="first-name" placeholder="First Name..." value="<?= $model['first_name'] ?>">
        </div>
        <div class="col-12">
          <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Last Name..." value="<?= $model['last_name'] ?>">
        </div>
        <div class="col-12">
          <input type="text" class="form-control" id="email" name="email" placeholder="email..." value="<?= $model['email'] ?>">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
<!-- Close form -->
    </form>
  <?php endif; ?>
<?php include('inc/footer.php') ?>
