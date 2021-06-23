<?php include_once ('inc/header-li.php'); ?>


    <h1>Link Page</h1>

<div class="container">

  <div class="row">
  <div class="col p-3">
  </div>
  <div class="col p-3">
  </div>
    <div class="col p-3">
      <a href="#" class="btn btn-primary ml-1 float-right">Add Media</a>
      <a href="#" name="button" class="btn btn-primary ml-1 float-right" data-toggle="modal" data-target="#addModalCenter">Add Link</a>
    </div>
  </div>

<table class="table">
  <tr>
    <th>Destination</th>
    <th>Link</th>
    <th></th>
  </tr>
  <tr>
    <td>Facebook</td>
    <td>www.facebook.com</td>
    <td><a class="table-edit mr-4"><span class="oi oi-pencil" title="icon pencil" aria-hidden="true"></span></a><a class="table-delete"><span class="oi oi-trash text-danger" title="icon trash" aria-hidden="true"></span></a></td>
  </tr>
  <tr>
    <td>Instagram</td>
    <td>www.instagram.com</td>
    <td><a class="table-edit mr-4"><span class="oi oi-pencil" title="icon pencil" aria-hidden="true"></span></a><a class="table-delete"><span class="oi oi-trash text-danger" title="icon trash" aria-hidden="true"></span></a></td>
  </tr>
  <tr>
    <td>Twitter</td>
    <td>www.twitter.com</td>
    <td><a class="table-edit mr-4"><span class="oi oi-pencil" title="icon pencil" aria-hidden="true"></span></a><a class="table-delete"><span class="oi oi-trash text-danger" title="icon trash" aria-hidden="true"></span></a></td>
  </tr>

</table>

</div>
<?php include_once ('inc/footer.php'); ?>
