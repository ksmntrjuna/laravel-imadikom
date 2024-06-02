<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAYOUT</title>
    <!-- Mengimpor Tailwind CSS -->
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">
    <header class="bg-purple-900 text-white">
        <nav class="container mx-auto flex justify-between items-center p-4">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="{{ asset('images/Logo-putih.png') }}" alt="Logo-putih" class="h-8">
            </div>

            <!-- Menu -->
            <ul class="hidden md:flex items-center space-x-4 z-10">
                <li class="{{ request()->routeIs('home') ? 'bg-orange-500 rounded-lg' : '' }}">
                    <a href="{{ route('home') }}" class="block px-4 py-2 font-sans {{ request()->routeIs('home') ? 'text-white' : 'hover:text-orange-300' }}">Home</a>
                </li>
                <li class="{{ request()->routeIs('divisi') ? 'bg-orange-500 rounded-lg' : '' }}">
                    <a href="{{ route('divisi') }}" class="block px-4 py-2 font-sans {{ request()->routeIs('divisi') ? 'text-white' : 'hover:text-orange-300' }}">
                        Divisi
                    </a>
                </li>
                <li class="{{ request()->routeIs('pengurus.index') ? 'bg-orange-500 rounded-lg' : '' }}">
                    <a href="{{ route('pengurus.index') }}" class="block px-4 py-2 font-sans {{ request()->routeIs('pengurus.index') ? 'text-white' : 'hover:text-orange-300' }}">
                        Pengurus
                    </a>
                </li>
                <li class="{{ request()->routeIs('proker.index') ? 'bg-orange-500 rounded-lg' : '' }}">
                    <a href="{{ route('proker.index') }}" class="block px-4 py-2 font-sans {{ request()->routeIs('proker.index') ? 'text-white' : 'hover:text-orange-300' }}">
                        Proker
                    </a>
                </li>
                <li class="{{ request()->routeIs('jadwal.index') ? 'bg-orange-500 rounded-lg' : '' }}">
                    <a href="{{ route('jadwal.index') }}" class="block px-4 py-2 font-sans {{ request()->routeIs('jadwal.index') ? 'text-white' : 'hover:text-orange-300' }}">
                        Jadwal
                    </a>
                </li>
                <li class="{{ request()->routeIs('dokumentasi.index') ? 'bg-orange-500 rounded-lg' : '' }}">
                    <a href="{{ route('dokumentasi.index') }}" class="block px-4 py-2 font-sans {{ request()->routeIs('dokumentasi.index') ? 'text-white' : 'hover:text-orange-300' }}">
                        Dokumentasi
                    </a>
                </li>
                @if(Auth::check())
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-white font-sans hover:text-orange-300">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </li>
                @else
                <li>
                    <a href="{{ route('login') }}" class="block px-4 py-2 text-white font-sans hover:text-orange-300">
                        Login
                    </a>
                </li>
                @endif
            </ul>

            <!-- Menu Button for Mobile View -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <ul id="mobile-menu" class="bg-purple-900 text-white hidden absolute w-full z-50">
            <li class="{{ request()->routeIs('home') ? 'bg-orange-500' : '' }}">
                <a href="{{ route('home') }}" class="block px-4 py-2 {{ request()->routeIs('home') ? 'text-white' : 'hover:text-orange-300' }}">
                    Home
                </a>
            </li>
            <li class="{{ request()->routeIs('divisi') ? 'bg-orange-500 rounded-lg' : '' }}">
                <a href="{{ route('divisi') }}" class="block px-4 py-2 {{ request()->routeIs('divisi') ? 'text-white' : 'hover:text-orange-300' }}">Divisi</a>
            </li>
            <li class="{{ request()->routeIs('pengurus.index') ? 'bg-orange-500' : '' }}">
                <a href="{{ route('pengurus.index') }}" class="block px-4 py-2 {{ request()->routeIs('pengurus.index') ? 'text-white' : 'hover:text-orange-300' }}">
                    Pengurus
                </a>
            </li>
            <li class="{{ request()->routeIs('proker.index') ? 'bg-orange-500 rounded-lg' : '' }}">
                <a href="{{ route('proker.index') }}" class="block px-4 py-2 font-sans {{ request()->routeIs('proker.index') ? 'text-white' : 'hover:text-orange-300' }}">
                    Proker
                </a>
            </li>
            <li class="{{ request()->routeIs('jadwal.index') ? 'bg-orange-500' : '' }}">
                <a href="{{ route('jadwal.index') }}" class="block px-4 py-2 {{ request()->routeIs('jadwal.index') ? 'text-white' : 'hover:text-orange-300' }}">
                    Jadwal
                </a>
            </li>
            <li class="{{ request()->routeIs('dokumentasi.index') ? 'bg-orange-500' : '' }}">
                <a href="{{ route('dokumentasi.index') }}" class="block px-4 py-2 {{ request()->routeIs('dokumentasi.index') ? 'text-white' : 'hover:text-orange-300' }}">
                    Dokumentasi
                </a>
            </li>
            @if(Auth::check())
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-white hover:text-orange-300">
                    Logout
                </a>
            </li>
            @else
            <li>
                <a href="{{ route('login') }}" class="block px-4 py-2 text-white hover:text-orange-300">
                    Login
                </a>
            </li>
            @endif
        </ul>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- footer-->
    <footer class="cotainer bg-orange-500 text-white p-3 w-full ">
        <div class="flex flex-col items-center">
            <img src="{{ asset('images/Logo-putih.png') }}" alt="Logo-putih" class="h-8 mb-4">
            <p class="text-center text-sm mb-4 mx-auto">Alamat: Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
            <div class="flex space-x-4 mb-4">
                <a href="https://www.instagram.com/imadikom?igsh=dXNpczRmaGU4NHdt" target="_blank" class="hover:text-gray-300 flex items-center">
                    <i class="fab fa-instagram font-sans"></i> imadikom
                </a>
                <a href="mailto:kipamikom@gmail.com" class="hover:text-gray-300 flex items-center">
                    <i class="far fa-envelope font-sans"></i> kipamikom@gmail.com
                </a>
            </div>
            <p class="text-center text-sm font-sans">© 2024 IMADIKOM.</p>

        </div>
    </footer>


    <!-- Script for Mobile Menu Toggle -->
    <script>
        function toggleDivisiDropdown(event) {
            event.preventDefault();
            var divisiDropdown = document.getElementById('divisi-dropdown');
            divisiDropdown.classList.toggle('hidden');
        }

        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>