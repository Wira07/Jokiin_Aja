<x-layout>
    <x-slot:title>Kontak</x-slot:title>

    <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8 bg-gradient-to-b from-indigo-600 to-purple-600 text-white">
        <!-- Section Header -->
        <section class="text-center mb-12">
            <h1 class="text-4xl font-extrabold">Kontak Saya</h1>
            <p class="mt-4 text-lg">Jika Anda memiliki pertanyaan atau ingin bekerja sama, silakan isi formulir di bawah ini.</p>
        </section>

        <!-- Contact Form -->
        <section class="bg-white rounded-lg shadow-lg p-8 max-w-2xl mx-auto animate-fade-in">
            <form action="/submit-kontak" method="post">
                @csrf
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Nama
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Nama Anda" required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email Anda" required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                        Pesan
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" rows="5" placeholder="Pesan Anda" required></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full shadow-lg transform transition-transform duration-300 hover:scale-105 focus:outline-none focus:shadow-outline" type="submit">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </section>
    </div>

    <!-- TailwindCSS Animations -->
    <style>
        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fade-in 1s ease-out;
        }
    </style>
</x-layout>