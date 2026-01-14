<x-app-layout>
    <div class="py-12 bg-gray-100">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow">

                <h2 class="text-xl font-semibold text-gray-800 mb-6 text-center">
                    Create Article
                </h2>

                <form action="/articles/store" method="POST" class="space-y-5">
                    @csrf
                    @if(session('success'))
                        <div class="bg-green-50 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    @if ($errors->any())
                        <div class="bg-red-50 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Title --}}
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Title
                        </label>
                        <input type="text" name="title" value="{{ old('title') }}"
                            class="w-full rounded-md border-gray-300 px-4 py-2
                                   shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    {{-- Body --}}
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Body
                        </label>
                        <textarea name="body" {{ old('body') }} rows="4"
                            class="w-full rounded-md border-gray-300 px-4 py-2
                                   shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                    </div>

                    {{-- Category ID --}}
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Category ID
                        </label>
                        <input type="number" name="category_id" value="{{ old('category_id') }}"
                            class="w-full rounded-md border-gray-300 px-4 py-2
                                   shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <!-- Button -->
                <div class="pt-4">
                    <button type="submit"
                        class="w-32 bg-blue-600 text-white font-medium
                               p-2.5 rounded-lg
                               hover:bg-blue-700
                               transition duration-200">
                        Add Article
                    </button>
                </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
