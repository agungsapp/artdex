<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
		<link rel="stylesheet" href="{{ asset('css') }}/footer.css">
</head>
<footer>
		<div class="foot">
				<h1 style="color: white">ArtDex</h1>
		</div>
		<div class="foot" id="line">

		</div>
		<div class="foot" id="para">
				{{-- <div id="line"></div> --}}
				<h4 style="font-size: 18px">About </h4>
				<li>Artdex is a program that has a function to provide space for artists to create their portfolios to be enjoyed by
						the wider media and is expected to be a media sharing in terms of art.</li>
		</div>
		<div class="foot" id="lii">
				<h4 style="font-size: 18px">Quick Link</h4>
				<li><a href="/">Home</a></li>
				<li><a href="{{route('user.explore.index')}}">Explore</a></li>
				<li><a href="/#contact">Contact Us</a></li>
				{{-- <li></li>
        <li></li>
        <li></li> --}}
		</div>
		<div class="foot" id="liii">
				<h4 style="font-size: 18px">Contact</h4>
				<li>+62 812-3053-0736</li>
				<li>artdexst@gmail.com</li>
				<li>@art_dex.io</li>
				{{-- <li></li>
        <li></li>
        <li></li> --}}
		</div>
</footer>
