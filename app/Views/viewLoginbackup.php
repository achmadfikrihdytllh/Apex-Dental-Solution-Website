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
          <h1>Login</h1>
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
          </form>
              <input name="submit" type="Submit" value="Login">
              <div class="signup_link">
                  Belum punya akun? <a href="<?= base_url('register');?>">Daftar disini</a>
              </div>
          </form>
      </div>
    </div>
  </body>
</html>