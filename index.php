<?php include_once('inc/header.php') ?>

    <h1>The Future Is Now</h1>
    <p>Never lose sight of the ultimate goal.</p>

    <?php
      if (isset($_SESSION["useruid"])) {
        echo "<div class=\"alert alert-success\" role=\"alert\">Hello " . $_SESSION["useruid"] . " you have successfully logged in, be awesome responsibly!</div>";
      }

     ?>

<?php include('inc/footer.php') ?>
