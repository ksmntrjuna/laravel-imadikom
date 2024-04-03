<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMADIKOM</title>
    <!-- Mengimpor Tailwind CSS -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body class="bg-gray-100">
    <header class="bg-purple-900 text-white">
        <nav class="container mx-auto flex justify-between items-center p-4">
            <div>
                <img src="{{ asset('images/logo-putih.png') }}" alt="Logo-putih" class="h-8">
            </div>
            <ul class="flex items-center space-x-4">
                <li><a href="{{ route('home') }}" class="hover:text-orange-300">Home</a></li>
                <li class="relative group">
                    <a href="#" class="dropbtn inline-block hover:text-orange-300">Divisi</a>
                    <!-- Dropdown Content -->
                    <div class="dropdown-content absolute hidden group-hover:block bg-purple-700 text-white p-2 mt-1">
                        <a href="{{ route('divisi.bph') }}" class="block hover:bg-orange-500 p-2">Divisi BPH</a>
                        <a href="{{ route('divisi.psdm') }}" class="block hover:bg-orange-500 p-2">Divisi PSDM</a>
                        <a href="{{ route('divisi.sosma') }}" class="block hover:bg-orange-500 p-2">Divisi Sosma</a>
                        <a href="{{ route('divisi.kwu') }}" class="block hover:bg-orange-500 p-2">Divisi KWU</a>
                        <a href="{{ route('divisi.humas') }}" class="block hover:bg-orange-500 p-2">Divisi Humas</a>
                        <a href="{{ route('divisi.multimedia') }}" class="block hover:bg-orange-500 p-2">Divisi Multimedia</a>
                    </div>
                </li>
                <li><a href="{{ route('kepengurusan') }}" class="hover:text-orange-300">Kepengurusan</a></li>
                <li><a href="{{ route('dokumentasi') }}" class="hover:text-orange-300">Dokumentasi</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-orange-500 text-white text-center p-4">
        <p>Alamat: Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
        <div class="sosmed">
            <a href="https://www.instagram.com/imadikom?igsh=dXNpczRmaGU4NHdt" target="_blank" class="text-white hover:text-gray-300 mx-2"><i class="fab fa-instagram"></i>imadikom</a>
            <a href="kipamikom@gmail.com" class="text-white hover:text-gray-300 mx-2"><i class="far fa-envelope"></i>kipamikom@gmail.com</a>
        </div>
    </footer>

    <!-- Skrip JavaScript untuk menangani dropdown -->
    <script>
        // Mengambil semua elemen dengan kelas 'dropbtn'
        var dropdowns = document.querySelectorAll('.dropbtn');

        // Loop melalui setiap elemen dropbtn
        dropdowns.forEach(function(dropdown) {
            // Menambahkan event listener untuk menampilkan dropdown saat tombol diklik
            dropdown.addEventListener('click', function() {
                var content = this.nextElementSibling;
                if (content.classList.contains('hidden')) {
                    content.classList.remove('hidden');
                } else {
                    content.classList.add('hidden');
                }
            });
        });
    </script>
</body>

</html>