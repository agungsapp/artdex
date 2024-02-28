@extends('layouts.footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add-Post</title>
    <link rel="stylesheet" href="css/add.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezJrMeu1cOQQwkg6usjUuKsFVmGLTskZEv0Xa/WxIDWN5L4VNTIekP6aWIasN10t" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <a href="guest">
    <div class="logo">
        <img src="logo.png" alt="">
    </div>
    </a>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a class="active"  href="">Explore</a></li>
        <li><a href="/pricing">Premium</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="profile">Profile</a></li>
        <li class="dropdown">
            <a class="nav-link" href="#" id="btnlanguage">Language</a>
            <div class="dropdown-content2">
                <a href="#" onclick="changeLanguage('id')" data-lang="id">Bahasa <br> Indonesia</a>
                <a href="#" onclick="changeLanguage('en')"data-lang="en" class="active">English</a>
            </div>
        </li>
    </ul>
    <div class="menu-toggle">
        <input type="checkbox" name="" id="">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>
    <form action="">
        <h2>Add Post</h2>
        <input type="text" name="subtitle" placeholder="Subtittle" id="subtitle">
        <div class="dropdown">
            <input type="text" id="textInput" class="text-input" placeholder="Select category" readonly >
            <ul class="dropdown-content">
              <li>2D</li>
              <li>3D</li>
            </ul>
          </div>
        <textarea name="" placeholder="Description" id="descr"></textarea>
        <div id="customFileInput" class="custom-file-input">
            <label for="fileInput" class="custom-label">
                <i class="fas fa comments"></i> Choose File
            </label>
            <input type="file" id="fileInput" name="fileInput" class="hidden-input">
            <img src="assets/images/adim.jpeg" alt="" srcset="">
          </div>
        <button type="submit">Add</button>
    </form>
 
    <script>
        document.addEventListener('DOMContentLoaded', function () {
  var customFileInput = document.getElementById('customFileInput');
  var fileInput = document.getElementById('fileInput');

  customFileInput.addEventListener('click', function () {
    fileInput.click();
  });

  fileInput.addEventListener('change', function () {
    // Handle file selection if needed
    var fileName = fileInput.value.split('\\').pop(); // Extracting the file name
    console.log('Selected file:', fileName);
  });
});


document.addEventListener('DOMContentLoaded', function () {
  var textInput = document.getElementById('textInput');
  var dropdownContent = document.querySelector('.dropdown-content');

  textInput.addEventListener('focus', function () {
    dropdownContent.style.display = 'block';
  });

  dropdownContent.addEventListener('click', function (event) {
    if (event.target.tagName === 'LI') {
      textInput.value = event.target.textContent;
      dropdownContent.style.display = 'none';
    }
  });

  document.addEventListener('click', function (event) {
    if (!dropdownContent.contains(event.target) && event.target !== textInput) {
      dropdownContent.style.display = 'none';
    }
  });
});




    </script>
    <script src="assets/js/single.js"></script>
    </body>
    </html>