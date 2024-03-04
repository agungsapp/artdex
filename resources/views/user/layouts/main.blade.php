{{-- @extends('layouts.footer') --}}
<!DOCTYPE html>
<html lang="en">

<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta charset="UTF-8">
		<title>ArtDex</title>

		<!-- ====== Google Fonts ====== -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
				integrity="sha384-GLhlTQ8iK9tWQFvMz/3RnIwmeUUKJZZESt6nquI5qf61OpGA8l5+5S/SFIIJdA2z" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
				integrity="...">

		<style>
				header ul li a {
						font-size: 16.5px
				}

				#portfolio {
						padding: 0;
						background-color: red;
				}
		</style>

		<!-- ====== ALL CSS ====== -->
		<link rel="stylesheet" href="{{ asset('css') }}/bootstrap.min.css">
		{{-- <link rel="stylesheet" href="{{ asset('css') }}/fontawesome-all.min.css"> --}}
		{{-- <link rel="stylesheet" href="{{ asset('css') }}/lightbox.min.css"> --}}
		{{-- <link rel="stylesheet" href="{{ asset('css') }}/owl.carousel.min.css"> --}}
		{{-- <link rel="stylesheet" href="{{ asset('css') }}/animate.css"> --}}
		<link rel="stylesheet" href="{{ asset('css') }}/style.css">
		<link rel="stylesheet" href="{{ asset('css') }}/responsive.css">
		{{-- <link rel="stylesheet" href="{{ asset('css') }}/footer.css"> --}}
		<link rel="stylesheet" href="{{ asset('css') }}/profile.css">

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
		@yield('content')

		<script>
				// function toggleDropdown(dropdown) {
				//     dropdown.classList.toggle('active');
				// }
		</script>
		<!-- ====== ALL JS ====== -->

		<script src="{{ asset('assets') }}/js/jquery-3.3.1.min.js"></script>
		<script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
		<script src="{{ asset('assets') }}/js/lightbox.min.js"></script>
		<script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
		<script src="{{ asset('assets') }}/js/jquery.mixitup.js"></script>
		<script src="{{ asset('assets') }}/js/wow.min.js"></script>
		<script src="{{ asset('assets') }}/js/typed.js"></script>
		<script src="{{ asset('assets') }}/js/skill.bar.js"></script>
		<script src="{{ asset('assets') }}/js/fact.counter.js"></script>
		<script src="{{ asset('assets') }}/js/main.js"></script>

</body>

</html>
