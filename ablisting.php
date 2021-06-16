<?php include_once('inc/header.php'); ?>
<?php require('app/ablisting.code.php'); ?>

    <h1>Address Book</h1>
    <p>Listing page, click the name to edit</p>

  <?php  if (!isset($_SESSION["useruid"])) {
      echo "<div class=\"alert alert-warning\" role=\"alert\">You need to be logged in to view this information.</div>";
    }
    else {
      require_once('inc/ablist.tpl.php');
    }
    ?>

  </tbody>
</table>

<?php include('inc/footer.php') ?>
