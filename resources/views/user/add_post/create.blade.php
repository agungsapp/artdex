@extends('user.layouts.main')
@section('content')
		<div class="container mt-5 p-5">
				<h2 class="fw-bold text-center">Add Post</h2>
				<form class="mt-5" action="{{ route('user.add-post.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="mb-3">
								<label for="title" class="form-label">Title</label>
								<input type="text" class="form-control" name="title" id="title">
						</div>
						<div class="mb-3">
								<label for="description" class="form-label">Description</label>
								<div class="form-floating">
										<textarea class="form-control" name="description" placeholder="Type a description here" id="description"
										  style="height: 100px"></textarea>

								</div>
						</div>

						<div class="mb-3">
								<label for="type" class="form-label">type</label>

								<select class="form-control" id="type" name="type" aria-label="Default select example">
										<option selected>-- select type --</option>
										<option value="2d">2D</option>
										<option value="3d">3D</option>
								</select>
						</div>

						<div class="mb-3">
								<label for="image" class="form-label">Image</label>
								<input class="form-control" type="file" name="image" id="image">
						</div>


						<button type="submit" class="btn btn-primary mt-5">Post</button>
				</form>
		</div>
@endsection
