
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
  
</head>
<body>

        <h1>Edit Data</h1>

        <form action="<?= site_url('update_viewEachOrder/' . $appointment['id_app']); ?>" method="post">
           
        Nama:
                <input type="text" name="nama" value="<?= $appointment['nama']; ?>">
            <br>

            Email :
            <input type="text" name="email" value="<?= $appointment['email']; ?>">
            <br>

            no telepon :
            <input type="text" name="telepon" value="<?= $appointment['telepon']; ?>">
            <br>

            waktu :
            <input type="text" name="waktu" value="<?= $appointment['waktu']; ?>">
            <br>

            keluhan :
            <input type="text" name="telepon" value="<?= $appointment['keluhan']; ?>">
            <br>



</textarea>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>