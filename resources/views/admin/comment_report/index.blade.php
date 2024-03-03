@extends('admin.layouts.main')
@section('content')
		<x-header-component title="Comment Report" action="{{ route('app.comment-report.search') }}" />



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
												<th>Comment</th>
												<th>Action</th>
										</tr>
								</thead>
								<tbody>

										{{-- for loop --}}
										@foreach ($comments as $comment)
												<tr>
														<td>{{ $loop->iteration }}</th>
														<td class="{{ empty($comment->complainant->name) ? 'text-red-300' : '' }}">
																{{ $comment->complainant->name ?? 'empty' }}</td>
														<td class="{{ empty($comment->reported->name) ? 'text-red-300' : '' }}">
																{{ $comment->reported->name ?? 'empty' }}</td>
														<td class="{{ empty($comment->complaint) ? 'text-red-300' : '' }}">{{ $comment->complaint ?? 'empty' }}</td>
														<td class="{{ empty($comment->comment) ? 'text-red-300' : '' }}">{{ $comment->comment ?? 'empty' }}</td>
														<td class="flex gap-2">
																{{-- edit --}}
																{{-- <a class="btn btn-warning btn-sm" href="{{ route('app.user-manage.edit', $comment->id) }}"><i
																				class='bx bxs-edit'></i></a> --}}

																<!-- modal delete -->
																<button class="btn btn-error btn-sm" onclick="my_modal_{{ $comment->id }}.showModal()"><i
																				class='bx bxs-trash'></i></button>
																<dialog id="my_modal_{{ $comment->id }}" class="modal">
																		<div class="modal-box">
																				<h3 class="text-lg font-bold">Delete user data?</h3>
																				<p class="py-4">Are you sure you want to delete user data ? This action cannot be undone.</p>
																				<div class="modal-action">
																						<form method="dialog">
																								<!-- If there is a button in the form, it will close the modal -->
																								<button class="btn">Cancel</button>
																						</form>
																						<form action="{{ route('app.comment-report.destroy', $comment->id) }}" method="POST">
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
