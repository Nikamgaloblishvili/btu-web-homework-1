@extends("layout.master")

@section("content")

	<div class="container">

		@foreach($posts as $post)

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow mt-3 p-2 sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-1">

                <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            {{ $post->text }}
                            <p>Author: {{ $post->name }}</p>
                        </div>
                    </div>
                    @if(Auth::id() == $post->user_id)
                        <a href="/delete/{{ $post->id }}" class="dark:text-gray-400 text-sm">Delete</a>
                    @endif
                </div>
            </div>
        </div>

        @endforeach
    </div>


@endsection