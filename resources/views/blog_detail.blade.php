<!-- resources/views/blog_detail.blade.php -->
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mx-auto px-4">
        <article class="py-8 max-w-screen-md mx-auto border-b border-gray-300 animate-fade-in-up">
            <h2 class="mb-3 text-4xl tracking-tight font-bold text-indigo-700">{{ $article['title'] }}</h2>

            <div class="flex items-center space-x-2 text-base text-gray-500 mb-4">
                <span>{{ $article['author'] }}</span>
                <span>&bull;</span>
                <span>{{ $article['date'] }}</span>
            </div>

            <p class="text-gray-700 leading-relaxed">{{ $article['content'] }}</p>

            <div class="mt-6">
                <a href="{{ route('blog.index') }}" class="inline-block px-6 py-2 text-white bg-indigo-600 hover:bg-indigo-700 rounded-lg shadow-md transition duration-300 animate-bounce-in">Back to Blog List</a>
            </div>
        </article>
    </div>
</x-layout>