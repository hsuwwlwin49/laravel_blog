<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            View Post
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
                <p class="text-gray-800 mb-6">{{ $post->body }}</p>
                <div class="flex justify-between items-center">
                    <a href="{{ route('posts.index') }}"
                       class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">
                        Back to Posts
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
        </div>
    </div>
</x-app-layout>
