<x-layout>
    <x-slot:title>Tentang</x-slot:title>

    <div class="max-w-4xl mx-auto mt-10">
        <div class="bg-gradient-to-r from-blue-500 to-teal-400 text-white shadow-lg rounded-lg p-8 {{ request()->is('tentang') ? 'active' : '' }}">
            <h1 class="text-4xl font-extrabold mb-8 text-center animate-pulse">Selamat Datang di Dunia Saya!</h1>
            <div class="bg-white text-gray-800 rounded-lg shadow-inner p-8 transform transition-transform duration-500 hover:scale-105 animate-fade-in">
                <p class="text-2xl text-center font-extrabold mb-4">
                    {{$nama}}
                </p>
                <div class="text-lg leading-relaxed">
                    <p>Nama saya Wira Sukma Saputra. Saya adalah seorang Android Developer yang memiliki keahlian dalam mendesain, membuat, dan memproduksi objek dalam platform Android menggunakan Kotlin dan XML. Saya juga mahir dalam slicing desain dari Figma ke XML.</p>

                    <p class="mt-6">Berikut adalah beberapa proyek yang telah saya kerjakan:</p>
                    <ul class="list-disc list-inside mt-4 space-y-2">
                        <li><strong>PajawanEduMobile:</strong> Aplikasi Android yang memungkinkan pengguna untuk menyimpan item favorit mereka dan menampilkannya dalam <em>FavoriteActivity</em>.</li>
                        <li><strong>Settings UI Apps:</strong> Aplikasi mobile yang menampilkan berbagai pengaturan pengguna dengan antarmuka yang menarik.</li>
                        <li><strong>Wira07Shop:</strong> Aplikasi e-commerce yang menyediakan berbagai fitur belanja online.</li>
                        <li><strong>Absensi Fkom:</strong> Aplikasi untuk mencatat kehadiran di Fakultas Komunikasi dengan antarmuka yang user-friendly.</li>
                        <li><strong>Edukids:</strong> Aplikasi belajar dengan fitur kuis interaktif yang diluncurkan di SD Pajawanlor.</li>
                        <li><strong>Rancang Bangun Aplikasi Belajar Membaca:</strong> Aplikasi yang menggunakan algoritma Rabin-Karp untuk membantu siswa kelas 1 di SDN 4 Cijoho Landeuh mengenali dan mencocokkan kata serta kalimat sederhana secara interaktif.</li>
                    </ul>

                    <p class="mt-6">Saya selalu bersemangat untuk belajar hal baru dan berkolaborasi dalam menciptakan solusi yang berpusat pada pengguna. Saya percaya bahwa desain yang baik harus berdasarkan penelitian pengguna yang mendalam dan eksekusi yang cermat.</p>

                    <p class="mt-6">Jika Anda tertarik untuk bekerja sama atau ingin mengetahui lebih lanjut tentang saya, silakan hubungi saya.</p>
                </div>
            </div>
        </div>
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

        .active {
            border: 2px solid white;
            /* Contoh gaya untuk kelas aktif */
        }
    </style>
</x-layout>