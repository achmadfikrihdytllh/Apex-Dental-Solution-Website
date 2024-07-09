
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dokter</title>
  
</head>
<body>

        <h1>Edit Dokter</h1>

        <form action="<?= site_url('update_viewCategories/' . $dokter['id_dokter']); ?>" method="post">
           
        Nama:
                <input type="text" name="nama" value="<?= $dokter['nama']; ?>">
            <br>

            Deskripsi :
            <input type="text" name="deskripsi" value="<?= $dokter['deskripsi']; ?>">

</textarea>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
