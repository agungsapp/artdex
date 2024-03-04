@extends('user.layouts.main')
@section('content')
<style>
	.container{
		border: 1px solid goldenrod;
		border-radius: 10px;
		position: relative;
		top: 8%;
	}
	.input:active{
		border: 1px solid goldenrod;
		outline: 1px solid goldenrod;
		color: goldenrod;
	}
	button{
		width: 100%;
		background-color: goldenrod;
		border: none;
		outline: none;
		color: white;
		font-weight: 500;
		padding: 7px;
		border-radius: 9px;
	}
</style>
		<div class="container mt-5 pt-5 w-50 pb-4 px-5" >
				<h2 class="fw-bold text-center">Add Post</h2>
				<form class="mt-5" action="{{ route('user.add-post.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="mb-3">
								{{-- <label for="title" class="form-label">Title</label> --}}
								<input placeholder="Title" type="text" style="color:rgb(128, 128, 128);padding-left:9px;padding:6px;width: 100%; border-radius:5px;border:1px solid gainsboro;"  name="title" id="title">
						</div>
						<div class="mb-3">
								{{-- <label for="description" class="form-label">Description</label> --}}
								<div class="form-floating">
										<textarea style="color:rgb(158, 158, 158);padding:9px;width: 100%; border-radius:5px;border:1px solid gainsboro;" name="description" placeholder="Type a description here" id="description"
										  style="height: 100px"></textarea>

								</div>
						</div>

						<div class="mb-3">
								{{-- <label for="type" class="form-label">type</label> --}}

								<select style="color:rgb(128, 128, 128);padding-left:9px;padding:6px;width: 100%; border-radius:5px;border:1px solid gainsboro;"
								 aria-placeholder="Select Category" id="type" name="type" aria-label="Default select example">
										<option selected>Select Category</option>
										<option value="2d">2D</option>
										<option value="3d">3D</option>
								</select>
						</div>

						<div class="input-group">
							<!-- File input -->
							<input type="file" class="custom-file-input" id="image" name="image">
							<label class="custom-file-label" for="image">
							  <i class="fas fa-cloud-upload-alt file-upload-icon"></i> Choose File
							</label>
						  </div>


						<button type="submit" class="mt-5 mb-0">Post</button>
				</form>
		</div>
@endsection
