@extends('layouts.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezJrMeu1cOQQwkg6usjUuKsFVmGLTskZEv0Xa/WxIDWN5L4VNTIekP6aWIasN10t" crossorigin="anonymous">
</head>
<body>
<div class="container2">
    <div class="form-container2">
        <!-- Formulir Anda di sini -->
          <form action="register" method="post" id="registerform">
        <h3 style="color: white;">Daftar</h3>
        <div class="inputan">
            <!-- <label for="Nama">Nama</label> -->
            <input type="text" name="name" id="name" placeholder="Name">
        </div>
        <div class="inputan">
            <!-- <label for="Email">Email</label> -->
            <input type="email" name="email" id="email" placeholder="Email">
        </div>
        <div class="inputan">
            <!-- <label for="Password">Password</label> -->
            <input type="password" name="pass" id="pass" placeholder="Password">
        </div>
        <button type="submit">Submit</button>
        <p>Sudah memiliki akun? <a href="login">Login disini</a></p>

    </form>
    </div>
</div>
<script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/skill.bar.js"></script>
    <script src="assets/js/fact.counter.js"></script>
    <script src="assets/js/main.js"></script>
        
</body>
</html>