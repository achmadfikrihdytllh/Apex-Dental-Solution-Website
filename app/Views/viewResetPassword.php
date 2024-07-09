<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/login.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <style>
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="center">
            <h2>Lupa Password</h2>
            <form action="<?php echo base_url('/resetpassword/process'); ?>" method="post">
                <div class="txt_field">
                    <label for="username">Username:</label><br>
                    <!-- Tambahkan autocomplete="off" pada input untuk menghilangkan otomatisasi pengisian -->
                    <input type="text" id="username" name="username" autocomplete="off" required><br><br>
                </div>
                <input type="submit" value="Reset Password">
            </form>
        </div>
    </div>
</body>
</html>
