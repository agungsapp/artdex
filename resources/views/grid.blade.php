@extends('layouts.footer')
<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Image-Grid</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<!-- Include Font Awesome CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
				integrity="sha512-w+IMbryHXcpazkYhQJLpNRPO3UpfUn7NUb8A58Wb3RSxSnHvAn7ODN7kL6bIlgTcSdgUSnKVCh4xM7DTuPI8/A=="
				crossorigin="anonymous" referrerpolicy="no-referrer" />
		<!-- Custom CSS for luxurious theme -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Poppins:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="grid.css">
</head>

<body>
		<div class="wrapper">
				<header>
						<div class="logo">
								<img src="logo.png" alt="">
						</div>
						<ul>
								<li><a href="/">Home</a></li>
								<li><a class="active" style="color: goldenrod" href="">Explore</a></li>
								<li><a href="/#pricing">Premium</a></li>
								<li><a href="/#contact">Contact</a></li>
								<li class="dropdown">
										<a href="#" id="btnlanguage">Language</a>
										<div class="dropdown-content">
												<a href="#" onclick="changeLanguage('id')" data-lang="id">Bahasa <br> Indonesia</a>
												<a href="#" onclick="changeLanguage('en')"data-lang="en" class="active">English</a>
										</div>
								</li>
								<li><a href="profile">Profile</a></li>

						</ul>
						<div class="menu-toggle">
								<input type="checkbox" name="" id="">
								<span></span>
								<span></span>
								<span></span>
						</div>
				</header>
				<div class="side">
						{{-- <h3>Category</h3> --}}
						<div class="categories">
								<ul>
										<li><a class="active" data-category="all" href="">All</a></li>
										<li><a data-category="2d" href="#">2D</a></li>
										<li><a data-category="3d" href="">3D</a></li>
										<li><a data-category="popular" href="">Popular</a></li>
										{{-- <li><a href="add"> <i class="fas fa-plus chart-area"></i></a></li> --}}
								</ul>
						</div>
				</div>
				<main>
						<div class="image-grid" id="image-grid">
								<div class="image-item medium" data-category="2d">
										<a href="spost">
												<img src="we.png" alt="Image 1">
										</a>
								</div>


								<div class="image-item medium" data-category="2d">
										<a href="spost">
												<img src="we2.png" alt="Image 1">
										</a>
								</div>

								<div class="image-item medium" data-category="3d">
										<a href="spost">
												<img src="real2.png" alt="Image 9">
										</a>
								</div>


								<div class="image-item medium" data-category="3d">
										<a href="spost">
												<img src="real4.png" alt="Image 9">
										</a>
								</div>


								<div class="image-item medium" data-category="3d">
										<a href="spost">
												<img src="real5.png" alt="Image 9">
										</a>
								</div>

								<div class="image-item medium" data-category="2d">
										<a href="spost">
												<img src="we3.png" alt="Image 1">
										</a>
								</div>


								<div class="image-item medium" data-category="2d">
										<a href="spost">
												<img src="w4.png" alt="Image 1">
										</a>
								</div>


								<div class="image-item medium" data-category="2d">
										<a href="spost">
												<img src="w5.png" alt="Image 1">
										</a>
								</div>


								<div class="image-item medium" data-category="2d">
										<a href="spost">
												<img src="we6.png" alt="Image 1">
										</a>
								</div>


								<div class="image-item medium" data-category="2d">
										<a href="spost">
												<img src="img-7.png" alt="Image 1">
										</a>
								</div>


								<div class="image-item medium" data-category="2d">
										<a href="spost">
												<img src="img-1.png" alt="Image 1">
										</a>
								</div>



								<div class="image-item medium" data-category="3d">
										<a href="spost">
												<img src="real3.png" alt="Image 9">
										</a>
								</div>






								<div class="image-item medium" data-category="3d">
										<a href="spost">
												<img src="real7.png" alt="Image 9">
										</a>
								</div>


								<div class="image-item medium" data-category="3d">
										<a href="spost">
												<img src="real8.png" alt="Image 9">
										</a>
								</div>


								<div class="image-item medium" data-category="3d">
										<a href="spost">
												<img src="real9.png" alt="Image 9">
										</a>
								</div>


								<div class="image-item medium" data-category="3d">
										<a href="spost">
												<img src="real.png" alt="Image 9">
										</a>
								</div>


								<div class="image-item medium" data-category="popular">
										<a href="spost">
												<img src="w5.png" alt="Image 9">
										</a>
								</div>


								<div class="image-item medium" data-category="popular">
										<a href="spost">
												<img src="real3.png" alt="Image 9">
										</a>
								</div>


								<div class="image-item medium" data-category="popular">
										<a href="spost">
												<img src="real.png" alt="Image 9">
										</a>
								</div>


						</div>

				</main>

		</div>
		<script src="home.js"></script>
</body>

</html>
