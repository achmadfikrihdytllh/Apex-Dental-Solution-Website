<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="/login.css" />
</head>
<body>
<div class="container">
    <div class="center">
        <h1>Apex Dental Solution</h1>
        <?php
        $passwordMessage = session()->getFlashdata('password_message');
        if ($passwordMessage) {
            echo '<div class="alert alert-success">' . $passwordMessage . '</div>';
        }
        ?>
        <form action="<?= site_url('loginProcess'); ?>" method="post">
            <?= csrf_field() ?>
            <div class="txt_field">
                <input type="text" name="username" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">
                <a href="<?= base_url('resetpassword');?>">Lupa Password</a>
            </div>
            <input type="submit" value="Login">
        </form>
        <div class="signup_link">
            Belum punya akun? <a href="<?= base_url('register');?>">Daftar disini</a>
        </div>
    </div>
</div>
</body>
</html>
