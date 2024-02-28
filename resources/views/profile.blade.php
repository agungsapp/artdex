@extends('layouts.footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    <title>ArtDex</title>

    <!-- ====== Google Fonts ====== -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-GLhlTQ8iK9tWQFvMz/3RnIwmeUUKJZZESt6nquI5qf61OpGA8l5+5S/SFIIJdA2z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="...">

    <style>
       header ul li a{
        font-size: 16.5px
       }
       #portfolio{
        padding: 0;
        background-color: red;
       }
    </style>

    <!-- ====== ALL CSS ====== -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="css/fontawesome-all.min.css"> --}}
    {{-- <link rel="stylesheet" href="css/lightbox.min.css"> --}}
    {{-- <link rel="stylesheet" href="css/owl.carousel.min.css"> --}}
    {{-- <link rel="stylesheet" href="css/animate.css"> --}}
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    {{-- <link rel="stylesheet" href="css/footer.css"> --}}
    <link rel="stylesheet" href="css/profile.css">
    
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>

<body>

    <!-- ====== Header ====== -->
        <header>
            <div class="logo">
                <img src="logo.png" alt="">
            </div>
            
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="grid">Explore</a></li>
                <li><a href="/#pricing">Premium</a></li>
                <li><a href="/#contact">Contact</a></li>
                <li style="transform:translateY(-1%); color:" class="dropdown">
                    <a href="#" id="btnlanguage">Language</a>
                    <div class="dropdown-content">
                        <a href="#" onclick="changeLanguage('id')" data-lang="id" class="ind">Bahasa <br> Indonesia</a>
                        <a href="#" onclick="changeLanguage('en')"data-lang="en" class="eng">English</a>
                    </div>
                </li>
                <li><a style="color: goldenrod" href="profile">Profile</a></li>
            
            </ul>
            <div class="menu-toggle">
                <input type="checkbox" name="" id="">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </header>
{{-- <div class="edit">
    <div class="ava">
        <img src="" alt="" srcset="">
    </div>
    <div class="ex">
        <input type="text">
    </div>
    <button type="submit">Edit</button>
</div> --}}
<section id="portfolio" class="section-padding portfolio-area bg-light">
<div class="wrapper" style="padding-top:0; margin-top:0;">
    
    <div class="container2">
  <div class="svg-container">
    <!-- SVG Anda di sini -->
    <div class="dropdown" onclick="toggleDropdown(this)">
        <button class="dropbtn">
            {{-- Dropdown --}}
            <i class="fas fa-cogs" aria-hidden="true"></i>
        </button>
        <div class="dropdown-content">
            {{-- <a style="cursor: pointer" id="ai" onclick=""><button style="outline: none; border:none; background-color:transparent;" onclick="toggleDisplay()">Edit</button></a> --}}
            <a id="ai" href="#"><button id="bedit" style="outline: none: border:none;" data-toggle="modal" data-target="#editProfileModal">
                Edit
              </button></a>
            <a id="ai" href="#" onclick="document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>

</div>
    <a class="prem" style="font-weight: 600" href="co">Premium</a>
</div>
</div>
<div class="prof">
    <img src="assets/images/team/img-4.jpeg" alt="">
    <h2 style="font-weight: bold;">Iwanda Amelia</h2>
    <h5>iwarell23@gmail.com</h5>
</div>
        <div class="container">
            <div class="row justify-content-center">
                <!-- Work List Menu-->
                <div class="col-lg-8">
                    <div class="work-list text-center">
                        <a class="add" href="add">Add Post +</a>
                        
                    </div>
                </div>
                <!-- // Work List Menu -->
            </div>
            <div class="row portfolio">
                <ul class="filt">
                    <li class="filter" data-filter=".2d">2D</li>
                    <li class="filter" class="active" data-filter="all">ALL</li>
                    <li class="filter" data-filter=".3d">3D</li>
                </ul>
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix abstrak 3d">
                    <a href="spost"></a>
                    <div class="single-portfolio" style="background-image: url(real9.png)">
                    <h3 class="ttt">
                        <button onclick="" style="padding: 0;border:none;outline:none;background-color:transparent;"><i class="fas fa-trash" style="color: #fff" aria-hidden="true"></i></button>
                    </h3>                  
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mix abstrak 2d">
                    <a href="spost"></a>
                    <div class="single-portfolio" style="background-image: url(we.png)">
                    <h3 class="ttt">
                        <button onclick="" style="padding: 0;border:none;outline:none;background-color:transparent;"><i class="fas fa-trash" style="color: #fff" aria-hidden="true"></i></button>
                    </h3>                  
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mix abstrak 3d">
                    <a href="spost"></a>
                    <div class="single-portfolio" style="background-image: url(real2.png)">
                    <h3 class="ttt">
                        <button onclick="" style="padding: 0;border:none;outline:none;background-color:transparent;"><i class="fas fa-trash" style="color: #fff" aria-hidden="true"></i></button>
                    </h3>                  
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mix abstrak 2d">
                    <a href="spost"></a>
                    <div class="single-portfolio" style="background-image: url(we2.png)">
                    <h3 class="ttt">
                        <button onclick="" style="padding: 0;border:none;outline:none;background-color:transparent;"><i class="fas fa-trash" style="color: #fff" aria-hidden="true"></i></button>
                    </h3>                  
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mix abstrak 3d">
                    <a href="spost"></a>
                    <div class="single-portfolio" style="background-image: url(real3.png)">
                    <h3 class="ttt">
                        <button onclick="" style="padding: 0;border:none;outline:none;background-color:transparent;"><i class="fas fa-trash" style="color: #fff" aria-hidden="true"></i></button>
                    </h3>                  
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mix abstrak 2d">
                    <a href="spost"></a>
                    <div class="single-portfolio" style="background-image: url(we3.png)">
                    <h3 class="ttt">
                        <button onclick="" style="padding: 0;border:none;outline:none;background-color:transparent;"><i class="fas fa-trash" style="color: #fff" aria-hidden="true"></i></button>
                    </h3>                  
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mix abstrak 3d">
                    <a href="spost"></a>
                    <div class="single-portfolio" style="background-image: url(real4.png)">
                    <h3 class="ttt">
                        <button onclick="" style="padding: 0;border:none;outline:none;background-color:transparent;"><i class="fas fa-trash" style="color: #fff" aria-hidden="true"></i></button>
                    </h3>                  
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mix abstrak 2d">
                    <a href="spost"></a>
                    <div class="single-portfolio" style="background-image: url(w4.png)">
                    <h3 class="ttt">
                        <button onclick="" style="padding: 0;border:none;outline:none;background-color:transparent;"><i class="fas fa-trash" style="color: #fff" aria-hidden="true"></i></button>
                    </h3>                  
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mix abstrak 3d">
                    <a href="spost"></a>
                    <div class="single-portfolio" style="background-image: url(real5.png)">
                    <h3 class="ttt">
                        <button onclick="" style="padding: 0;border:none;outline:none;background-color:transparent;"><i class="fas fa-trash" style="color: #fff" aria-hidden="true"></i></button>
                    </h3>                  
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mix abstrak 2d">
                    <a href="spost"></a>
                    <div class="single-portfolio" style="background-image: url(w5.png)">
                    <h3 class="ttt">
                        <button onclick="" style="padding: 0;border:none;outline:none;background-color:transparent;"><i class="fas fa-trash" style="color: #fff" aria-hidden="true"></i></button>
                    </h3>                  
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mix abstrak 3d">
                    <a href="spost"></a>
                    <div class="single-portfolio" style="background-image: url(real8.png)">
                    <h3 class="ttt">
                        <button onclick="" style="padding: 0;border:none;outline:none;background-color:transparent;"><i class="fas fa-trash" style="color: #fff" aria-hidden="true"></i></button>
                    </h3>                  
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mix abstrak 2d">
                    <a href="spost"></a>
                    <div class="single-portfolio" style="background-image: url(we6.png)">
                    <h3 class="ttt">
                        <button onclick="" style="padding: 0;border:none;outline:none;background-color:transparent;"><i class="fas fa-trash" style="color: #fff" aria-hidden="true"></i></button>
                    </h3>                  
                    </div>
                    </a>
                </div>
                

                <!-- // Single Portfolio -->
            </div>
        </div>
    </section>    
    <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Formulir Edit Profile -->
              <form>
                <div class="form-group">
                  <label for="profilePhoto">Profile Photo</label>
                  <input type="file" class="form-control" id="profilePhoto">
                </div>
                <div class="form-group">
                  <label for="fullName">Full Name</label>
                  <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" style="background-color: goldenrod; border:none;" class="btn btn-primary">Save Changes</button>
            </div>
          </div>
        </div>
      </div>
</div>
<script>
    // function toggleDropdown(dropdown) {
    //     dropdown.classList.toggle('active');
    // }
</script>
     <!-- ====== ALL JS ====== -->
     
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
