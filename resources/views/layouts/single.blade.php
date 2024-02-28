<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single-Blog</title>
<body>
<div class="container">
    <div class="pict">
        <img src="" alt="">
    </div>
    <div class="desc">
         <!-- Container dropdown -->
    <div class="dropdown">
        <!-- Tombol dropdown -->
        <button class="dropdown-button">Pilih Opsi</button>
        
        <!-- Daftar dropdown -->
        <div class="dropdown-content">
            <!-- Opsi dropdown -->
            <a href="#">Opsi 1</a>
            <a href="#">Opsi 2</a>
            <a href="#">Opsi 3</a>
        </div>
    </div>
        <h2>Title</h2>
        <h3>Iwanda Amelia</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <i class="fa-solid fa-heart"><p>12.5k</p></i>
    </div>
    <div class="comment">
        <div class="user">
            <img src="" alt="">
            <h2> @yield('name') </h2>
            <div class="line"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        <div class="add-comment">
            <h3>Add Comment</h3>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <button>Add</button>
        </div>
    </div>
</div>
</body>
</html>