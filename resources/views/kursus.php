<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PajawanEdu</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        function toggleMenu() {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        function toggleDarkMode() {
            var html = document.documentElement;
            html.classList.toggle('dark');

            // Simpan preferensi mode malam ke localStorage
            if (html.classList.contains('dark')) {
                localStorage.setItem('dark-mode', 'true');
            } else {
                localStorage.setItem('dark-mode', 'false');
            }   
        }

        // Memuat preferensi mode malam dari localStorage
        window.onload = function() {
            var darkMode = localStorage.getItem('dark-mode');
            if (darkMode === 'true') {
                document.documentElement.classList.add('dark');
            }
        }
    </script>
</head>

<body class="bg-gray-50 dark:bg-gray-900 transition">

    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-800 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-blue-600 dark:text-blue-400 font-bold text-xl">PajawanEdu</span>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="#" class="text-gray-900 dark:text-gray-200 inline-flex items-center px-1 pt-1 text-sm font-medium"> Home </a>
                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 inline-flex items-center px-1 pt-1 text-sm font-medium"> About Us </a>
                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 inline-flex items-center px-1 pt-1 text-sm font-medium"> Pages </a>
                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 inline-flex items-center px-1 pt-1 text-sm font-medium"> Services </a>
                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 inline-flex items-center px-1 pt-1 text-sm font-medium"> Module </a>
                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 inline-flex items-center px-1 pt-1 text-sm font-medium"> Blog </a>
                    </div>
                </div>
                <div class="flex items-center">
                    <button onclick="toggleDarkMode()" class="mr-4 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                        <!-- Icon for Dark Mode Toggle -->
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C10.343 2 8.735 2.679 7.493 3.93A9.964 9.964 0 002 12c0 1.77.498 3.42 1.493 4.99A10.015 10.015 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm-1 16h2v2h-2zm0-14h2v10h-2z" />
                        </svg>
                    </button>
                    <a href="#" class="ml-4 px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700"> Register </a>
                    <button onclick="toggleMenu()" class="ml-4 sm:hidden flex items-center px-3 py-2 border rounded text-gray-500 border-gray-400 hover:text-gray-700 dark:text-gray-300 hover:border-gray-700 dark:hover:border-gray-300">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="sm:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#" class="text-gray-900 dark:text-gray-200 block px-3 py-2 rounded-md text-base font-medium"> Home </a>
                <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 block px-3 py-2 rounded-md text-base font-medium"> About Us </a>
                <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 block px-3 py-2 rounded-md text-base font-medium"> Pages </a>
                <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 block px-3 py-2 rounded-md text-base font-medium"> Services </a>
                <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 block px-3 py-2 rounded-md text-base font-medium"> Module </a>
                <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 block px-3 py-2 rounded-md text-base font-medium"> Blog </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="lg:w-1/2">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 dark:text-gray-100 sm:text-5xl md:text-6xl">
                    <span class="block">Media Belajar</span>
                    <span class="block text-blue-600 dark:text-blue-400">Sekolah Dasar</span>
                </h1>
                <p class="mt-3 text-base text-gray-500 dark:text-gray-400 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    PajawanEdu menyediakan modul belajar untuk siswa Sekolah Dasar Kelas 1 – 6.
                </p>
                <div class="mt-5 sm:mt-8 flex flex-col sm:flex-row lg:justify-start">
                    <div class="flex rounded-md shadow w-full sm:max-w-lg">
                        <div class="relative flex items-stretch flex-grow focus-within:z-10">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <input type="text" name="search" id="search" class="pl-10 border border-gray-300 dark:border-gray-600 rounded-none rounded-l-md focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm bg-white dark:bg-gray-800 dark:text-gray-300" placeholder="Apa yang ingin kamu pelajari">
                        </div>
                        <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-r-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Cari Modul
                        </button>
                    </div>
                </div>
                <div class="mt-8 flex flex-col sm:flex-row items-center space-x-0 sm:space-x-4 space-y-4 sm:space-y-0">
                    <div class="flex items-center">
                        <span class="inline-block w-4 h-4 bg-blue-600 rounded-full"></span>
                        <span class="ml-2 text-gray-600 dark:text-gray-400">Akses gratis</span>
                    </div>
                    <div class="flex items-center">
                        <span class="inline-block w-4 h-4 bg-blue-600 rounded-full"></span>
                        <span class="ml-2 text-gray-600 dark:text-gray-400">Modul mudah dipelajari</span>
                    </div>
                </div>
            </div>
            <div class="mt-8 lg:mt-0 lg:w-1/2 lg:relative flex flex-col lg:flex-row lg:justify-center items-center lg:space-x-4">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:h-full lg:w-1/2" src="https://via.placeholder.com/300x200" alt="Learning Image 1">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:h-full lg:w-1/2 mt-4 lg:mt-0" src="https://via.placeholder.com/300x200" alt="Learning Image 2">
            </div>
        </div>
    </main>

</body>

</html>