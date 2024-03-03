@extends('admin.layouts.main')
@section('content')
		<x-header-component title="Users Manage" action="{{ route('app.user-manage.search') }}" />


		<div class="py-10">
				<div class="overflow-x-auto">
						<table class="table table-xs">
								<!-- head -->
								<thead>
										<tr>
												<th>No.</th>
												<th>Username</th>
												<th>Email</th>
												<th>Password</th>
												<th>Phone Number</th>
												<th>Status</th>
												<th>Activate</th>
												<th>Action</th>
										</tr>
								</thead>
								<tbody>

										{{-- for loop --}}
										@foreach ($users as $user)
												<tr>
														<td>{{ $loop->iteration }}</th>
														<td class="{{ empty($user->username) ? 'text-red-300' : '' }}">{{ $user->username ?? 'empty' }}</td>
														<td class="{{ empty($user->email) ? 'text-red-300' : '' }}">{{ $user->email ?? 'empty' }}</td>
														<td class="{{ empty($user->password) ? 'text-red-300' : '' }}">{{ $user->password ?? 'empty' }}</td>
														<td class="{{ empty($user->phone) ? 'text-red-300' : '' }}">{{ $user->phone ?? 'empty' }}</td>
														<td class="{{ empty($user->status) ? 'text-red-300' : '' }}">{{ $user->status ?? 'empty' }}</td>
														<td class="{{ empty($user->activate) ? 'text-red-300' : '' }}">{{ $user->activate ?? 'empty' }}</td>
														<td class="flex gap-2">
																{{-- edit --}}
																<a class="btn btn-warning btn-sm" href="{{ route('app.user-manage.edit', $user->id) }}"><i
																				class='bx bxs-edit'></i></a>

																<!-- modal delete -->
																<button class="btn btn-error btn-sm" onclick="my_modal_{{ $user->id }}.showModal()"><i
																				class='bx bxs-trash'></i></button>
																<dialog id="my_modal_{{ $user->id }}" class="modal">
																		<div class="modal-box">
																				<h3 class="text-lg font-bold">Delete user data?</h3>
																				<p class="py-4">Are you sure you want to delete user data for <strong
																								class="text-red-500">{{ $user->name }}</strong>? This action cannot be undone.</p>
																				<div class="modal-action">
																						<form method="dialog">
																								<!-- If there is a button in the form, it will close the modal -->
																								<button class="btn">Cancel</button>
																						</form>
																						<form action="{{ route('app.user-manage.destroy', $user->id) }}" method="POST">
																								@csrf
																								@method('DELETE')
																								<button type="submit" class="btn bg-red-500 text-white">Yes</button>
																						</form>
																				</div>
																		</div>
																</dialog>

														</td>
												</tr>
										@endforeach


								</tbody>
						</table>
				</div>
		</div>
@endsection
