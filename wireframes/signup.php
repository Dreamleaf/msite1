<?php include_once ('inc/header.php'); ?>


    <h1>Sign Up</h1>

<form class="" action="login.php" method="post">
  <div class="form-group">
    <input type="text" class="form-control" name="firstName" value="" placeholder="First Name...">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="lastName" value="" placeholder="Last Name...">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" name="email" value="" placeholder="email address...">
  </div>
    <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
</form>

<?php include_once ('inc/footer.php'); ?>
