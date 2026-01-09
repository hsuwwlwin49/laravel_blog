<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            My Posts
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                @foreach($posts as $post)
                    <div class="bg-white shadow-md rounded-lg p-5 flex flex-col justify-between">
                        <div>
                            <h3 class="text-lg font-semibold mb-2">{{ $post->title }}</h3>
                            <p class="text-gray-700 mb-4">{{ Str::limit($post->body, 100) }}</p>
                        </div>

                        <div class="flex justify-between items-center mt-4">
                            <a href="{{ route('posts.show', ['post' => $post->id]) }}"
                               class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                                View
                            </a>

                            <form action="/posts/{{ $post->id }}/like" method="POST">
                                @csrf
                                <button type="submit"
                                        class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition">
                                    Like
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>
