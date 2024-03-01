@extends('admin.layouts.main')
@section('content')
		<div class="">
				<h4 class="mb-10 text-3xl font-bold">User data</h4>
				<form action="{{ route('app.user-manage.update', $user->id) }}" method="POST" class="grid grid-cols-3 gap-4">
						@csrf
						@method('PATCH')

						{{-- name --}}
						<label class="form-control w-full max-w-xs">
								<div class="label">
										<span class="label-text">Name</span>
								</div>
								<input type="text" name="name" placeholder="enter user full name" value="{{ $user->name ?? 'empty' }}"
										class="input input-bordered w-full max-w-xs" />
						</label>

						{{-- Username --}}
						<label class="form-control w-full max-w-xs">
								<div class="label">
										<span class="label-text">Username</span>
								</div>
								<input type="text" name="username" placeholder="enter username user" value="{{ $user->username ?? 'empty' }}"
										class="input input-bordered w-full max-w-xs" />
						</label>

						{{-- Email --}}
						<label class="form-control w-full max-w-xs">
								<div class="label">
										<span class="label-text">Email</span>
								</div>
								<input type="text" name="email" placeholder="enter email user" value="{{ $user->email ?? 'empty' }}"
										class="input input-bordered w-full max-w-xs" />
						</label>

						{{-- Password --}}
						<label class="form-control w-full max-w-xs">
								<div class="label">
										<span class="label-text">Password</span>
								</div>
								<input type="password" name="password" placeholder="enter new password user"
										class="input input-bordered w-full max-w-xs" />
						</label>
						{{-- old password --}}
						<input type="hidden" name="old_password" value="{{ $user->password }}">

						{{-- Phone Number --}}
						<label class="form-control w-full max-w-xs">
								<div class="label">
										<span class="label-text">Phone Number</span>
								</div>
								<input type="number" name="phone" placeholder="enter Phone Number user"
										class="input input-bordered w-full max-w-xs" />
						</label>

						{{-- status --}}
						<label class="form-control w-full max-w-xs">
								<div class="label">
										<span class="label-text">Pick user status</span>
								</div>
								<select name="status" class="select select-bordered">
										<option disabled selected>-- status --</option>
										<option {{ $user->status == 'basic' ? 'selected' : '' }} value="basic">Basic</option>
										<option {{ $user->status == 'premium' ? 'selected' : '' }} value="premium">Premium</option>
								</select>
						</label>

						{{-- activate --}}
						<label class="form-control w-full max-w-xs">
								<div class="label">
										<span class="label-text">Pick user activate status</span>
								</div>
								<select name="activate" class="select select-bordered">
										<option disabled selected>-- activate status --</option>
										<option {{ $user->status == 'active' ? 'selected' : '' }} value="active">Active</option>
										<option {{ $user->status == 'banned' ? 'selected' : '' }} value="banned">Banned</option>
								</select>
						</label>

						<div class="col-span-3 flex justify-center">
								<button type="submit" class="btn w-full bg-black text-white">Save</button>
						</div>

				</form>
		</div>
@endsection
