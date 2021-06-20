<?php include_once ('inc/header-li.php'); ?>

    <h1>Contacts</h1>

    <div class="container">
      <div class="row">
      <div class="col p-3">
        <a href="contacts.php" class="btn btn-outline-primary"><< Back to Contact List</a>
    </div>
      <div class="col p-3">
        <a href="add-contact-type.php" name="button" class="btn btn-primary ml-1 float-right" data-toggle="modal" data-target="#addModalCenter">Add New Contact Type</a>
      </div>
    </div>
    <div class="row p-3">
      <table class="table">
      <tr>
        <th>Name</th>
        <th></th>
      </tr>
      <tr>
        <td>Press Outlets</td>
        <td><a class="table-edit mr-4"><span class="oi oi-pencil" title="icon pencil" aria-hidden="true"></span></a><a class="table-delete"><span class="oi oi-trash text-danger" title="icon trash" aria-hidden="true"></span></a></td>
      </tr>
      <tr>
        <td>Radio DJs</td>
        <td><a class="table-edit mr-4"><span class="oi oi-pencil" title="icon pencil" aria-hidden="true"></span></a><a class="table-delete"><span class="oi oi-trash text-danger" title="icon trash" aria-hidden="true"></span></a></td>
      </tr>
      </table>
    </div>
    <!-- Modal -->
<div class="modal fade" id="addModalCenter" tabindex="-1" role="dialog" aria-labelledby="addModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="addModalLongTitle">Add Contact</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form class="" action="index.html" method="post">
        <div class="form-group">
          <label for="addContactType">Enter New Contact Type</label>
          <input type="text" class="form-control" name="addContactType" value="">
        </div>
        <div class="form-group">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
    <div class="modal-footer">
<p>Modal Footer</p>
    </div>
  </div>
</div>
</div> <!-- End Modal -->

</div> <!-- End Main Container -->



<?php include_once ('inc/footer.php'); ?>
