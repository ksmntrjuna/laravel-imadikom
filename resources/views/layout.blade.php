<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Proyek Anda</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Divisi</a>
                    <div class="dropdown-content">
                        <a href="{{ route('divisi.bph') }}">Divisi BPH</a>
                        <a href="{{ route('divisi.psdm') }}">Divisi PSDM</a>
                        <a href="{{ route('divisi.sosma') }}">Divisi Sosma</a>
                        <a href="{{ route('divisi.kwu') }}">Divisi KWU</a>
                        <a href="{{ route('divisi.humas') }}">Divisi Humas</a>
                        <a href="{{ route('divisi.multimedia') }}">Divisi Multimedia</a>
                    </div>
                </li>
                <li><a href="{{ route('kepengurusan') }}">Kepengurusan</a></li>
                <li><a href="{{ route('dokumentasi') }}">Dokumentasi</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p> Alamat: Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
        <div class="sosmed">
            <!-- Tambahkan ikon-ikon media sosial Anda di sini -->
        </div>
    </footer>
</body>

</html>