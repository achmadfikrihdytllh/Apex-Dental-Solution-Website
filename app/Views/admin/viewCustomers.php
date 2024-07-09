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
  <h2>All Customers</h2>
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Nama</th>
        <th class="text-center">Username</th>
        <th class="text-center">Status</th>
        <th class="text-center" colspan="2">Opsi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($user as $key => $post) : ?>
      <tr>
        <td class="text-center"><?php echo $key + 1; ?></td>
        <td class="text-center"><?php echo $post['nama']; ?></td>
        <td class="text-center"><?php echo $post['username']; ?></td>
        <td class="text-center"><?php echo $post['status']; ?></td>
        <td class="text-center"><a href="<?= site_url('edit_viewCustomers/' . $post['id_user']) ?>"><button class="btn btn-primary">Edit</button></a></td>
        <td class="text-center"><a href="<?= site_url('delete_viewCustomers/' . $post['id_user']) ?>"><button class="btn btn-danger">Delete</button></a></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<script type="text/javascript" src="/script.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
