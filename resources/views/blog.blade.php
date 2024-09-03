<!-- resources/views/blog.blade.php -->
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mx-auto px-4">
        <header class="text-center py-12">
            <h1 class="text-4xl font-extrabold text-gray-800 animate-fade-in">Selamat Datang di Blog Saya, <span class="text-indigo-600">Wira Sukma Saputra!</span></h1>
            <p class="text-lg mt-4 text-gray-500 animate-slide-in-bottom">Temukan artikel menarik seputar dunia teknologi, pemrograman, dan lainnya.</p>
        </header>

        @foreach([1, 2] as $article)
        <article class="py-8 max-w-screen-md mx-auto border-b border-gray-300 animate-fade-in-up">
            <h2 class="mb-3 text-4xl tracking-tight font-bold text-indigo-700 hover:text-indigo-500 transition duration-300 animate-slide-in-top">Judul Skripsi</h2>

            <div class="flex items-center space-x-2 text-base text-gray-500 mb-4 animate-fade-in-up">
                <span>Wira Sukma Saputra</span>
                <span>&bull;</span>
                <span>10 January 2024</span>
            </div>

            <p class="text-gray-700 leading-relaxed animate-fade-in-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laborum repellat ratione. Explicabo beatae modi vitae quaerat sapiente quo adipisci aliquid autem cum. Quidem eos consectetur ab deserunt sequi earum.</p>

            <div class="mt-6">
                <a href="#" class="inline-block px-6 py-2 text-white bg-indigo-600 hover:bg-indigo-700 rounded-lg shadow-md transition duration-300 animate-bounce-in">Read More &raquo;</a>
            </div>
        </article>
        @endforeach
    </div>

</x-layout>