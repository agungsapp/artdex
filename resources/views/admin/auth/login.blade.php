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


		<div class="flex w-full items-center justify-center p-10 lg:p-80" style="height: 100vh">

				{{-- card login --}}
				<div class="card w-full bg-black text-white shadow-xl">
						<form class="card-body" action="{{ route('app.authenticate') }}" method="POST">
								@csrf
								<h2 class="mb-10 text-center text-2xl">Login Admin</h2>

								<label class="input input-bordered flex items-center gap-2 text-black">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#000" class="h-4 w-4 opacity-70">
												<path
														d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
										</svg>
										<input type="text" name="username" class="grow" placeholder="Username" />
								</label>

								<label class="input input-bordered flex items-center gap-2 text-black">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#000" class="h-4 w-4 opacity-70">
												<path fill-rule="evenodd"
														d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
														clip-rule="evenodd" />
										</svg>
										<input type="password" name="password" placeholder="password" class="grow" value="" />
								</label>

								<div class="card-actions mt-7 justify-end">
										<button type="submit" class="btn btn-primary">Login</button>
								</div>
						</form>
				</div>


		</div>

		@include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
</body>

</html>
