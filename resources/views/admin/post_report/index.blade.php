@extends('admin.layouts.main')
@section('content')
		<x-header-component title="Post Report" action="/user" />


		<div class="py-10">
				<div class="overflow-x-auto">
						<table class="table table-xs">
								<!-- head -->
								<thead>
										<tr>
												<th>No.</th>
												<th>Complainant</th>
												<th>Reported</th>
												<th>Complaints</th>
												<th>Category</th>
												<th>Pict</th>
												<th>Description</th>
												<th>Action</th>
										</tr>
								</thead>
								<tbody>

										{{-- for loop --}}
										@foreach ($posts as $post)
												<tr>
														<td>{{ $loop->iteration }}</th>
														<td class="{{ empty($post->complainant->name) ? 'text-red-300' : '' }}">
																{{ $post->complainant->name ?? 'empty' }}</td>
														<td class="{{ empty($post->reported->name) ? 'text-red-300' : '' }}">{{ $post->reported->name ?? 'empty' }}
														</td>
														<td class="{{ empty($post->complaints) ? 'text-red-300' : '' }}">{{ $post->complaints ?? 'empty' }}</td>
														<td class="{{ empty($post->category) ? 'text-red-300' : '' }}">{{ $post->category ?? 'empty' }}</td>
														<td class="{{ empty($post->pict) ? 'text-red-300' : '' }}">{{ $post->pict ?? 'empty' }}</td>
														<td class="{{ empty($post->description) ? 'text-red-300' : '' }}">{{ $post->description ?? 'empty' }}</td>
														<td class="flex gap-2">
																{{-- edit --}}
																{{-- <a class="btn btn-warning btn-sm" href="{{ route('app.user-manage.edit', $post->id) }}"><i
																				class='bx bxs-edit'></i></a> --}}

																<!-- modal delete -->
																<button class="btn btn-error btn-sm" onclick="my_modal_{{ $post->id }}.showModal()"><i
																				class='bx bxs-trash'></i></button>
																<dialog id="my_modal_{{ $post->id }}" class="modal">
																		<div class="modal-box">
																				<h3 class="text-lg font-bold">Delete user data?</h3>
																				<p class="py-4">Are you sure you want to delete ? This action cannot be undone.</p>
																				<div class="modal-action">
																						<form method="dialog">
																								<!-- If there is a button in the form, it will close the modal -->
																								<button class="btn">Cancel</button>
																						</form>
																						<form action="{{ route('app.post-report.destroy', $post->id) }}" method="POST">
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
