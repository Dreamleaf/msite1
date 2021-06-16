<?php require('app/add.code.php'); ?>
<?php include_once('inc/header.php') ?>
    <!-- Open Container -->
    <h1>ADD - Address Book</h1>
    <p>Add a new record to the address book</p>
    <form class="row row-cols-lg-auto g-3 align-items-center" method="POST">
        <!-- Open Form -->
        <div class="col-12">
          <input type="text" class="form-control" id="first-name" name="first-name" placeholder="First Name...">
        </div>
        <div class="col-12">
          <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Last Name...">
        </div>
        <div class="col-12">
          <input type="text" class="form-control" id="email" name="email" placeholder="email...">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
<!-- Close form -->
    </form>
<?php include('inc/footer.php') ?>
