@extends('admin.layouts.main')
@section('content')
		{{-- header component --}}
		{{-- @dd(Auth::guard('admin')->check()) --}}
		{{-- @dd($credentials)
		@dd($admin) --}}

		<x-header-component title="Dashboard" action="/dashboard" />

		<div class="mt-10 grid grid-cols-2 gap-4">

				{{-- card --}}
				<div class="card h-[30vh] w-full bg-black text-white shadow-xl">
						<div class="card-body">
								<h2 class="text-shadow-lg card-title mb-10 text-3xl font-bold">User</h2>
								<p class="text-5xl font-bold">{{ $users }}</p>

						</div>
				</div>

				{{-- card --}}
				<div class="card h-[30vh] w-full bg-kuning text-black shadow-xl">
						<div class="card-body">
								<h2 class="text-shadow-lg card-title mb-10 text-3xl font-bold">Comment report</h2>
								<p class="text-5xl font-bold">{{ $comments }}</p>

						</div>
				</div>


				{{-- card --}}
				<div class="card h-[30vh] w-full bg-kuning text-black shadow-xl">
						<div class="card-body">
								<h2 class="text-shadow-lg card-title mb-10 text-3xl font-bold">Post report</h2>
								<p class="text-5xl font-bold">{{ $posts }}</p>

						</div>
				</div>

				{{-- card --}}
				<div class="card h-[30vh] w-full bg-black text-white shadow-xl">
						<div class="card-body">
								<h2 class="text-shadow-lg card-title mb-10 text-3xl font-bold">Message</h2>
								<p class="text-5xl font-bold">{{ $messages }}</p>

						</div>
				</div>




		</div>
@endsection
