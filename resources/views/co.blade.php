@extends('layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Check Out</title>
		<link rel="stylesheet" href="css/co.css">
		<link rel="stylesheet" href="css/cofooter.css">
		<link rel="stylesheet" href="css/responsive.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
				integrity="sha384-ezJrMeu1cOQQwkg6usjUuKsFVmGLTskZEv0Xa/WxIDWN5L4VNTIekP6aWIasN10t" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/fontawesome-all.min.css">
		<link rel="stylesheet" href="css/responsive.css">
		<style>

		</style>


		<script src="https://code.jquery.com/jquery-3.7.1.min.js"
				integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
		<script>
				$(document).ready(function() {
						$("#pay").click(function() {
								// Data contoh (ganti dengan data sesungguhnya)
								const data = {
										id: 1,
										productName: "test",
										price: 1000,
										quantity: 2
								};

								$.ajax({
										url: 'http://localhost:3000/api/',
										type: 'POST',
										contentType: 'application/json',
										data: JSON.stringify(data),
										success: function(response) {
												// Handle success, Anda bisa menggunakan response.token jika diperlukan
												console.log(response);
										},
										error: function(error) {
												// Handle error
												console.error('Error:', error);
										}
								});
						});
				});
		</script>

</head>

<body>
		<div class="wrapper">
				<div class="container">
						<div class="svg-container">
								<!-- SVG Anda di sini -->
								<svg xmlns="http://www.w3.org/2000/svg" height="16" width="18"
										viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
										<path
												d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
								</svg>
						</div>
						<p>Check Out</p>
				</div>

				<div class="kotak">
						<p>Premium Package</p>
						<p class="bold">$10.00</p>
				</div>

				<div class="total">
						<p class="bold">$10.00</p>
						<p>Total :</p>
				</div>
				<img class="mid" src="assets/images/midtrans.png" alt="">

				<div class="profile">
						<p>Name</p>
						<h4>Iwanda Amelia</h4>
						<p>Phone Number</p>
						<h4>+62 882 1704 0335</h4>
						<p>EXP Date</p>
						<h4>9/11</h4>
				</div>
				<button id="pay" class="buy">Pay Now</button>
		</div>
		<!-- <footer>
								<div class="descriptions">
												<div class="artdex">
												<h1>ArtDex</h1>
								</div>
																<div class="garis"></div>

												<div id="nyoba" class="fc">
																<h4>ABOUT ARTDEX</h4>
																<p>The software program "ARTDEX" is a program that has a function to provide space for artists to create their portfolios to be enjoyed by the wider media and is expected to be a media sharing in terms of art.</p>
												</div>
												<div class="fc">
																<h4>QUICK LINK</h4>
																				<li><a href="/">HOME</a></li>
																				<li><a href="/#portfolio">EXPLORE</a></li>
																				<li><a href="/#team">ABOUT US</a></li>
																				<li><a href="/#pricing">PREMIUM</a></li>
																				<li><a href="/#contact">CONTACT US</a></li>
												</div>
												<div class="fc">
																<h4>CONTACT</h4>
																				<li><i class="fa-solid fa-phone"></i> <p>+62 812-3053-0736</p> </li>
																				<li><i class="fa-brands fa-instagram"></i><p>art_dex.io</p></li>
																				<li><i class="fa-regular fa-envelope"></i><p>artdexio.com</p></li>
												</div>
								</div>
				</footer> -->
</body>

</html>
