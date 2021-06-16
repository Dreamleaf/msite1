<?php include_once('inc/header.php') ?>

    <h1>Log In</h1>
    <p>Team awesome is waiting for you!</p>

  <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<div class=\"alert alert-warning\" role=\"alert\">Please fill in all fields!</div>";
      }
      else if ($_GET["error"] == "wronglogin")  {
        echo "<div class=\"alert alert-warning\" role=\"alert\">Incorrect Login attempt. Please check your details and try again.</div>";
      }
    }
   ?>

    <form class="" action="app/login.inc.php" method="post">
      <div class="form-group">
        <input class="form-control" type="text" id="" name="uid" placeholder="Username/Email...">
        <small class="form-text text-muted">This is some help text</small>
      </div>
      <div class="form-group">
        <input class="form-control" type="text" id="" name="pwd" placeholder="Password...">
        <small class="form-text text-muted">This is some help text</small>
      </div>
      <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary">Log In</button>
      </div>
    </form>

<?php include('inc/footer.php') ?>
