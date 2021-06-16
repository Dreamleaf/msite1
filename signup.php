<?php include_once('inc/header.php') ?>

    <h1>Sign UP</h1>
    <p>Become a part of team awesome</p>

    <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<div class=\"alert alert-warning\" role=\"alert\">Please fill in all fields!</div>";
      }
      else if ($_GET["error"] == "invaliduid")  {
        echo "<div class=\"alert alert-warning\" role=\"alert\">Username can only contain a mix of a-z A-Z and 0-9</div>";
      }
      else if ($_GET["error"] == "invalidemail")  {
        echo "<div class=\"alert alert-warning\" role=\"alert\">Looks like you didn't enter a valid email address...</div>";
      }
      else if ($_GET["error"] == "passwordsdontmatch")  {
        echo "<div class=\"alert alert-warning\" role=\"alert\">Ooops, your passwords didn't match!</div>";
      }
      else if ($_GET["error"] == "stmtfailed")  {
        echo "<div class=\"alert alert-warning\" role=\"alert\">Something technical went wrong, please try again!</div>";
      }
      else if ($_GET["error"] == "usernametaken")  {
        echo "<div class=\"alert alert-warning\" role=\"alert\">Username already taken, please try another</div>";
      }
      else if ($_GET["error"] == "none")  {
        echo "<div class=\"alert alert-success\" role=\"alert\">You have successfully signed up, welcome to team awesome!</div>";
      }
    }
     ?>

<form class="" action="app/signup.inc.php" method="post">
  <div class="form-group">
    <input class="form-control" type="text" id="" name="name" placeholder="Full Name...">
    <small class="form-text text-muted">This is some help text</small>
  </div>
  <div class="form-group">
    <input class="form-control" type="text" id="" name="email" placeholder="Email...">
    <small class="form-text text-muted">This is some help text</small>
  </div>
  <div class="form-group">
    <input class="form-control" type="text" id="" name="uid" placeholder="Username">
    <small class="form-text text-muted">This is some help text</small>
  </div>
  <div class="form-group">
    <input class="form-control" type="text" id="" name="pwd" placeholder="Password...">
    <small class="form-text text-muted">This is some help text</small>
  </div>
  <div class="form-group">
    <input class="form-control" type="text" id="" name="pwdrepeat" placeholder="Repeat Password...">
    <small class="form-text text-muted">This is some help text</small>
  </div>
  <div class="form-group">
    <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
  </div>
</form>

<?php include('inc/footer.php') ?>
