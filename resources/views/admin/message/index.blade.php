@extends('admin.layouts.main')
@section('content')
		<x-header-component title="Message" action="{{ route('app.message.search') }}" />
		<div class="py-10">
				<div class="overflow-x-auto">
						<table class="table table-xs">
								<!-- head -->
								<thead>
										<tr>
												<th>No.</th>
												<th>Username</th>
												<th>Email</th>
												<th>Subject</th>
												<th>Massage</th>
												<th>Action</th>
										</tr>
								</thead>
								<tbody>

										{{-- for loop --}}
										@foreach ($messages as $message)
												<tr>
														<td>{{ $loop->iteration }}</th>
														<td class="{{ empty($message->user->username) ? 'text-red-300' : '' }}">
																{{ $message->user->username ?? 'empty' }}</td>
														<td class="{{ empty($message->user->email) ? 'text-red-300' : '' }}">
																{{ $message->user->email ?? 'empty' }}
														</td>
														<td class="{{ empty($message->subject) ? 'text-red-300' : '' }}">{{ $message->subject ?? 'empty' }}
														</td>
														<td class="{{ empty($message->message) ? 'text-red-300' : '' }}">{{ $message->message ?? 'empty' }}</td>

														<td class="flex gap-2">
																{{-- edit --}}
																{{-- <a class="btn btn-warning btn-sm" href="{{ route('app.user-manage.edit', $message->id) }}"><i
																				class='bx bxs-edit'></i></a> --}}

																<!-- modal delete -->
																<button class="btn btn-error btn-sm" onclick="my_modal_{{ $message->id }}.showModal()"><i
																				class='bx bxs-trash'></i></button>
																<dialog id="my_modal_{{ $message->id }}" class="modal">
																		<div class="modal-box">
																				<h3 class="text-lg font-bold">Delete user data?</h3>
																				<p class="py-4">Are you sure you want to delete ? This action cannot be undone.</p>
																				<div class="modal-action">
																						<form method="dialog">
																								<!-- If there is a button in the form, it will close the modal -->
																								<button class="btn">Cancel</button>
																						</form>
																						<form action="{{ route('app.message.destroy', $message->id) }}" method="POST">
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
