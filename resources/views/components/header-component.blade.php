@props(['title' => 'Welcome', 'action' => '/oke'])


<form action="{{ $action }}" class="flex w-full justify-between">
		<h1 class="text-3xl font-bold">{{ $title ?? 'Welcome' }}</h1>

		{{-- <label class="input input-bordered flex items-center gap-2 py-2">
        <input type="text" class="grow py-1" placeholder="Search" />
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
            <path fill-rule="evenodd"
                d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                clip-rule="evenodd" />
        </svg>
    </label> --}}
		<label for="cari" class="flex items-center">
				<button type="submit" class="material-symbols-outlined me-7">
						search
				</button>
				<input type="text" id="cari" class="rounded-2xl border-2 border-black p-1 px-3" placeholder="Search">
		</label>

</form>
