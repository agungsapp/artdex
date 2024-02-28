<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single-Blog</title>
    <link rel="stylesheet" href="css/single.css">
    <!-- <link rel="stylesheet" href="grid.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-GLhlTQ8iK9tWQFvMz/3RnIwmeUUKJZZESt6nquI5qf61OpGA8l5+5S/SFIIJdA2z" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezJrMeu1cOQQwkg6usjUuKsFVmGLTskZEv0Xa/WxIDWN5L4VNTIekP6aWIasN10t" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="css/fontawesome-all.min.css"> -->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <!-- <link rel="stylesheet" href="css/footer.css"> -->


</head>
<body>

<div class="wrapper">
<header>
            <div class="logo">
                <img src="logo.png" alt="">
            </div>
            
            <ul>
                <li><a href="/">Home</a></li>
                <li><a class="active"  href="">Explore</a></li>
                <li><a href="/#team">About Us</a></li>
                <li><a href="/#pricing">Premium</a></li>
                <li><a href="/#contact">Contact</a></li>
                <li><a href="profile">Profile</a></li>
            </ul>
            <div class="menu-toggle">
                <input type="checkbox" name="" id="">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </header>
    <div class="pict">
        <img src="assets/images/portfolio/img-10.jpg" alt="">
    </div>
    <div class="desc">
    <div class="dropdown">
        <button onclick="toggleDropdown()" class="dropbtn"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="4" viewBox="0 0 128 512"><path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/></svg></button>
        <div id="myDropdown" class="dropdown-content">
            <a href="#">Report</a>
            <a href="#">Download</a>
        </div>
        </div>
        <h2>Princess Cat</h2>
        <img id="penerbit" src="assets/images/team/img-1.jpeg" alt="">
        <h3>Iwanda Amelia</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <svg class="like" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
        <span>15k</span>
    </div>
    <div class="comment">
        <h2>Comment Section</h2>
        <div class="user">
            <h3>Name</h3>
            <img src="assets/images/portfolio/img-10.jpg" alt="">
            
            <div class="line"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        <div class="add-comment">
            <h2>Add Comment</h2>
            <textarea name="" placeholder="Type Something Here...." id="" cols="30" rows="10"></textarea>
            <button class="add" >Add</button>
        </div>
    </div>
</div>
<footer>
    <div class="foot">
        <h1>ArtDex</h1>
    </div>
    <div class="foot" id="line">

    </div>
    <div class="foot" id="para">
            <div id="line"></div>
        <p>Artdex is a program that has a function to provide space for artists to create their portfolios to be enjoyed by the wider media and is expected to be a media sharing in terms of art.</p>
    </div>
    <div class="foot" id="lii">
        <li><a href="">Home</a></li>
        <li><a href="">About Us</a></li>
        <li><a href="">Contact Us</a></li>
        {{-- <li></li>
        <li></li>
        <li></li> --}}
    </div>
    <div class="foot" id="liii">
        <li>+62 812-3053-0736</li>
        <li>artdexst@gmail.com</li>
        <li><span>@</span>art_dex.io</li>
        {{-- <li></li>
        <li></li>
        <li></li> --}}
    </div>
</footer>
<script src="assets/js/single.js"></script>
</body>
</html>