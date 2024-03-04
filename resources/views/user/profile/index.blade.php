@extends('user.layouts.main')
@section('content')
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
														<a id="ai" href="#"><button id="bedit" style="outline: none: border:none;"
																		data-toggle="modal" data-target="#editProfileModal">
																		Edit
																</button></a>
														<a id="ai" href="#" onclick="document.getElementById('logout-form').submit();">Logout</a>
														<form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
																@csrf
														</form>
												</div>
										</div>

								</div>
								<a class="prem" style="font-weight: 600"
										href="co">{{ Auth::user()->status == null || Auth::user()->status == 'basic' ? 'Basic' : 'Premium' }}</a>
						</div>
				</div>
				<div class="prof">
						<img src="{{ Storage::url(Auth::user()->image) }}" alt="">
						<h2 style="font-weight: bold;">{{ Auth::user()->name }}</h2>
						<h5>{{ Auth::user()->email }}</h5>
				</div>
				<div class="container">
						<div class="row justify-content-center">
								<!-- Work List Menu-->
								<div class="col-lg-8">
										<div class="work-list text-center">
												<a class="add" href="{{ route('user.add-post.create') }}">Add Post +</a>
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

								{{-- for loop --}}
								@foreach ($posts as $post)
										<div class="col-lg-4 col-md-6 mix abstrak {{ Str::lower($post->type) }}">
												<a href="spost"></a>
												<div class="single-portfolio" {{-- style="background-image: url({{ asset('') }})"> --}}
														style="background-image: url({{ Storage::url($post->image) }})">
														<h3 class="ttt">
																<button onclick="" style="padding: 0;border:none;outline:none;background-color:transparent;"><i
																				class="fas fa-trash" style="color: #fff" aria-hidden="true"></i></button>
														</h3>
												</div>
												</a>
										</div>
								@endforeach

								{{-- for loop --}}


								<!-- // Single Portfolio -->
						</div>
				</div>
		</section>
		<div class="fade modal" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel"
				aria-hidden="true">
				<div class="modal-dialog" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<form action="{{ route('user.profile.update', Auth::id()) }}" method="POST" enctype="multipart/form-data">
										@csrf
										@method('PUT')

										<div class="modal-body">
												<!-- Formulir Edit Profile -->
												<div class="form-group">
														<label for="profilePhoto">Profile Photo</label>
														<input type="file" class="form-control" name="image" id="profilePhoto">
												</div>
												<div class="form-group">
														<label for="fullName">Full Name</label>
														<input type="text" class="form-control" value="{{ Auth::user()->name }}" id="fullName" name="name"
																placeholder="Enter your full name">
												</div>
										</div>
										<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="submit" style="background-color: goldenrod; border:none;" class="btn btn-primary">Save
														Changes</button>
										</div>
								</form>

						</div>
				</div>
		</div>
		</div>
@endsection
