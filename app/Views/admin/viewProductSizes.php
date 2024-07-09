<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="/style_admin.css"></link>

</head>
<div class="container allContent-section py-4">
<?php
    include "adminHeader.php";
    include "sidebar.php";
    ?>
  <h2>Testimoni</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Nama</th>
        <th class="text-center">Foto</th>
        <th class="text-center">Deskripsi</th>
        <th class="text-center">Opsi</th>
      </tr>
    </thead>
    <tr>
    <?php foreach($testimoni as $key => $post) : ?>
    <tr>
      <td><?php echo $key +1; ?></td>
      <td><?php echo $post['nama_testi'] ?></td>
      <td><?php echo '<img height="100px" src="' . base_url('img/' . $post['foto']) . '">';?></td>
      <td><?php echo $post['deskripsi'] ?></td>
      <td><a href="<?= site_url('delete_viewProductSizes/' . $post['id_testi']) ?>" ><button class="btn btn-danger">Delete</button></a></td>
    </tr>
    <?php endforeach ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Tambahkan Testimoni
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Testimoni</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <form enctype='multipart/form-data' action="/viewProductSizes_store" method="POST">
            <div class="form-group">
              <label for="foto">Nama</label>
              <input type="text" class="form-control-file" name="nama_testi" required>
            </div>
            <div class="form-group">
              <label for="foto">Deskripsi</label>
              <input type="text" class="form-control-file" name="deskripsi" required>
            </div>
            <div class="form-group">
              <label for="foto">Foto:</label>
              <input type="file" class="form-control-file" name="foto" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Tambahkan</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
<script type="text/javascript" src="/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>