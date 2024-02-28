@extends('layouts.footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single-Post</title>
    <link rel="stylesheet" href="css/spost.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyWI1HZAd19XCA1QWYdjjj4LY1w1COQ5bD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header id="header">
        <div class="logo">
            <img src="logo.png" alt="">
        </div>
        
        <ul>
            <li><a href="guest">Home</a></li>
            <li><a href="exguest">Explore</a></li>
            <li><a href="guest#pricing">Premium</a></li>
            <li><a href="guest#contact">Contact</a></li>
              <li style="transform:translateY(-1%); color:" class="dropdown">
                <a href="#" id="btnlanguage">Language</a>
                <div class="dropdown-content">
                    <a href="#" onclick="changeLanguage('id')" data-lang="id" class="ind">Bahasa <br> Indonesia</a>
                    <a href="#" onclick="changeLanguage('en')"data-lang="en" class="eng">English</a>
                </div>
            </li>
            <li><a href="login">Sign In</a></li>
          
        </ul>
        <div class="menu-toggle">
            <input type="checkbox" id="">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>
    <div class="container">
      <div class="pict">
        <img src="we2.png" alt="">
    </div>
        
        <div class="desc">
            <div class="dropdown">
                <button onclick="toggleDropdown()" class="dropbtn2"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="4" viewBox="0 0 128 512"><path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/></svg></button>
                <div id="myDropdown" class="dropdown-content2">
                    <button id="openReportModalBtn">Report</button>
                    <div id="reportModal" class="modal">
                      <div class="modal-content">
                        <span style="display: none" class="close" id="closeReportModalBtn">&times;</span>
                        <h2 style="text-align: center; font-size:20px;" >Access Denied</h2>
                        <form>
                          <label for="log">Please login first to do this action</label>
                          <a id="log" name="log" href="login">Login</a>
                        </form>
                      </div>
                    </div>
                </div>
                </div>
            <h2>Root of life</h2>
            <img id="penerbit" src="assets/images/team/img-1.jpeg" alt="">
            <h3>Iwanda Amelia</h3>
            <div class="outline">
              <p>Everything in life has its roots, so don't just look at the end result, but look at how far he tries to plant</p>
            </div>
            <svg class="like" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
            <span>15k</span>
        </div>
        <div class="comment">
            <h2>Comment Section</h2>
            <div class="user">
                <h3 style="font-weight: 600">Krisnanto</h3>
                <img src="assets/images/portfolio/img-10.jpg" alt="">
                
                <div class="line"></div>
                <p>Fotonya sangat bagusss dan bermakna!</p>
            </div>
            <div class="add-comment">
                <h2>Add Comment</h2>
                <textarea name="" placeholder="Type Something Here...." id="" cols="30" rows="10"></textarea>
                <button @readonly(true) style="opacity: .6;" class="add" id="openReportModalBtn">Add</button>
                    <div id="reportModal" class="modal" style="width: 30%">
                      <div class="modal-content" style="width:30%">
                        <span style="display: none" class="close" id="closeReportModalBtn">&times;</span>
                        <h2 style="text-align: center; font-size:20px;" >Access Denied</h2>
                        <form>
                          <label for="log">Please login first to do this action</label>
                          <a id="log" name="log" href="login">Login</a>
                        </form>
                      </div>
                    </div>
            </div>
        </div>
    </div>
    <script src="reportguest.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js" integrity="sha384-eMNCOHGKaEY5zzvlb5E5nhMcVZ9S/abwQDk4DOF5/8IlCg1bMQ08CSR+IOYl0OVn" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyWI1HZAd19XCA1QWYdjjj4LY1w1COQ5bD" crossorigin="anonymous"></script>
    
<script>
    
   
    
function toggleDropdown(dropdown) {
        dropdown.classList.toggle('active');
    }    

   

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>
<script src="assets/js/single.js"></script>
</body>
</html>