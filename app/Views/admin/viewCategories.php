<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/style_admin.css">
</head>
<body>
  <?php
    include "adminHeader.php";
    include "sidebar.php";
  ?>
  <div class="container allContent-section py-4">
    <h3>Dokter</h3>
    <table class="table">
      <thead>
        <tr>
          <th class="text-center">No</th>
          <th class="text-center">Nama Dokter</th>
          <th class="text-center">Deskripsi</th>
          <th class="text-center">Foto</th>
          <th class="text-center" colspan="2">Opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($dokter as $key => $post) : ?>
        <tr>
          <td class="text-center"><?php echo $key + 1; ?></td>
          <td class="text-center"><?php echo $post['nama']; ?></td>
          <td class="text-center"><?php echo $post['deskripsi']; ?></td>
          <td class="text-center"><?php echo '<img height="100px" src="' . base_url('img/' . $post['foto']) . '">'; ?></td>
          <td class="text-center"><a href="<?= site_url('edit_viewCategories/' . $post['id_dokter']) ?>"><button class="btn btn-primary">Edit</button></a></td>
          <td class="text-center"><a href="<?= site_url('delete_viewCategories/' . $post['id_dokter']) ?>"><button class="btn btn-danger">Delete</button></a></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
      Tambahkan Dokter
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Dokter</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form enctype='multipart/form-data' action="<?= site_url('viewCategories_store'); ?>" method="post">
              <div class="form-group">
                <label for="c_name">Nama Dokter:</label>
                <input type="text" class="form-control" name="nama" required>
                <label for="c_name">Deskripsi:</label>
                <input type="text" class="form-control" name="deskripsi" required>
                <label for="foto">Foto:</label>
                <input type="file" class="form-control-file" name="foto" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-secondary" style="height:40px">Tambahkan</button>
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
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
