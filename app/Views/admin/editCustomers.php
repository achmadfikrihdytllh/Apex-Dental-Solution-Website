
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit status</title>
  
</head>
<body>

        <h1>Edit Status</h1>

        <form action="<?= site_url('update_viewCustomers/' . $user['id_user']); ?>" method="post">
           
        Status:
                <input type="text" name="status" value="<?= $user['nama']; ?>">
            <br>

</textarea>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
