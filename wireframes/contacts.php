<?php include_once ('inc/header-li.php'); ?>

    <h1>Contacts</h1>

    <div class="container">
      <div class="row">
      <div class="col p-3">
        <select class="custom-select ml-1">
          <option selected>Filter contacts by:</option>
          <option value="1">Press Outlets</option>
          <option value="2">Radio DJ</option>
          <option value="3">Promoters</option>
          <option value="4">Studio/Sound Personel</option>
          <option value="5">Designer</option>
          <option value="6">Photographer / Videographer</option>
      </select>
    </div>
    <div class="col p-3">
      <a href="edit-contact-types.php" class="btn btn-primary ml-1">Edit Contact Types</a>
    </div>
      <div class="col p-3">
        <button type="button" name="button" class="btn btn-primary ml-1 float-right" data-toggle="modal" data-target="#addModalCenter">Add New Contact</button>
      </div>
    </div>
      <div class="row p-3">
        <table class="table">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Company</th>
          <th>Location</th>
          <th></th>
        </tr>
        <tr>
          <td>Joe Smith</td>
          <td>joe@smith.com</td>
          <td>123456789</td>
          <td>Sparks Co</td>
          <td>Birmingham</td>
          <td><a class="table-edit mr-4"><span class="oi oi-pencil" title="icon pencil" aria-hidden="true"></span></a><a class="table-delete"><span class="oi oi-trash text-danger" title="icon trash" aria-hidden="true"></span></a></td>
        </tr>
        <tr>
          <td>Joe Smith</td>
          <td>joe@smith.com</td>
          <td>123456789</td>
          <td>Funtimes Inc</td>
          <td>Birmingham</td>
          <td><a class="table-edit mr-4"><span class="oi oi-pencil" title="icon pencil" aria-hidden="true"></span></a><a class="table-delete"><span class="oi oi-trash text-danger" title="icon trash" aria-hidden="true"></span></a></td>
        </tr>
        </table>
      </div>
      </div>

      <div class="modal fade" id="addModalCenter" tabindex="-1" role="dialog" aria-labelledby="addModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addModalLongTitle">Add New Contact</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="" action="index.html" method="post">
              <div class="form-group">
                <label for="addContactName">Name</label>
                <input type="text" class="form-control" name="addContactName" value="">
              </div>
              <div class="form-group">
                <label for="addContactEmail">Email</label>
                <input type="email" class="form-control" name="addContactEmail" value="">
              </div>
              <div class="form-group">
                <label for="addContactPhone">Phone</label>
                <input type="text" class="form-control" name="addContactPhone" value="">
              </div>
              <div class="form-group">
                <label for="addContactCompany">Company</label>
                <input type="text" class="form-control" name="addContactCompany" value="">
              </div>
              <div class="form-group">
                <label for="addContactLocation">Location</label>
                <input type="text" class="form-control" name="addContactLocation" value="">
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


<?php include_once ('inc/footer.php'); ?>
