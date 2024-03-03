<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>admin artdex</title>

		{{-- font awesome --}}
		{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
				integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
				crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

		{{-- box icon --}}
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		{{-- font icon --}}
		<link rel="stylesheet"
				href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

		@vite('resources/css/app.css')
</head>

<body>

		@include('sweetalert::alert')


		<div class="flex">

				{{-- drawer --}}
				<div class="drawer flex-1 lg:drawer-open">
						<input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
						<div class="drawer-content flex flex-col items-center justify-center">
								<!-- Page content here -->
								{{-- <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label> --}}

						</div>
						<div class="drawer-side">
								<label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>



								<ul class="menu min-h-full w-80 bg-black p-4 text-xl text-white">
										<li class="mx-auto flex justify-center py-20">
												<div class="avatar">
														<div class="w-24 rounded-full ring ring-primary ring-offset-2 ring-offset-base-100">
																<img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
														</div>
												</div>
												<h3 class="mx-auto">Admin</h3>
										</li>
										<!-- Sidebar content here -->
										<li><a href="{{ route('app.dashboard.index') }}"><i class='bx bxs-dashboard'></i> Dashboard</a></li>
										<li><a href="{{ route('app.user-manage.index') }}"><i class='bx bxs-user'></i> User Manage</a></li>
										<li><a href="{{ route('app.comment-report.index') }}"><i class='bx bxs-comment'></i> Comment Report</a></li>
										<li><a href="{{ route('app.post-report.index') }}"><i class='bx bxs-cloud-upload'></i> Post Report</a></li>
										<li><a href="{{ route('app.message.index') }}"><i class='bx bxs-envelope'></i> Message</a></li>

										<li>
												<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
														<i class='bx bx-exit'></i> Logout
												</a>

												<form id="logout-form" action="{{ route('app.logout') }}" method="POST" style="display: none;">
														@csrf
												</form>
										</li>

								</ul>

						</div>
				</div>


				{{-- container content --}}
				<div class="container p-10">


						{{-- content --}}
						@yield('content')


				</div>
		</div>


		@include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])


</body>

</html>
