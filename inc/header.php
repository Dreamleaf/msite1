<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body>

  <div class="container"><!-- Open Container -->

    <div class="sticky-top">
      <ul class="nav nav-tabs justify-content-end">
        <?php
          if (isset($_SESSION["useruid"])) {
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"profile.php\">Profile</a></li>";
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"app/logout.inc.php\">Logout</a></li>";
          }
          else {
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"signup.php\">Sign Up</a></li>";
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"login.php\">Login</a></li>";
          }
         ?>
      </ul>
    </div>

    <ul class="nav nav-tabs">
      <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="ablisting.php">Address Book</a></li>
      <?php
        if (isset($_SESSION["useruid"])) {
      echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"add.php\">Add New Record</a></li>";
    }
      ?>
    </ul>
