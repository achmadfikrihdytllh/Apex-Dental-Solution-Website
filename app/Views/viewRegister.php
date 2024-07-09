<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title> 
    <link rel="stylesheet" href="/signup.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="<?= base_url('/register/process') ;?>" method="post">
    <?= csrf_field(); ?>
      <div class="input-box">
        <input type="text" placeholder="Enter your name" name="nama" id="nama" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your username" name="username" id="username" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" name="password" id="password" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" name="password_conf" id="password_conf" required>
      </div>
      <!-- <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div> -->
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="<?= base_url('viewLogin');?>">Login now</a></h3>
      </div>           