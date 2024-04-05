<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME IMADIKOM</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    @extends('layout')

    @section('content')
    @auth
    <!-- Menampilkan pesan selamat datang hanya jika pengguna telah login -->
    <h2 class="text-xl font-semibold">Selamat Datang, {{ $user->name }}!</h2>
    @endauth
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h1 class="text-4xl font-bold mb-2 text-center">IMADIKOM</h1>
            <div class="flex justify-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-auto w-full max-w-sm mx-auto mb-4">
            </div>
            <p class="mb-4">IMADIKOM (Ikatan Mahasiswa Bidikmisi & KIP-K Amikom) Merupakan organisasi untuk para penerima beasiswa KIP-K.</p>
        </div>

        <!-- Visi Card -->
        <div class="max-w-md mx-auto bg-white shadow-md rounded px-6 pt-6 pb-8 mb-4">
            <h1 class="text-3xl font-semibold text-center">VISI</h1>
            <p class="mt-1">
                Berkualitas tinggi dengan taraf pendidikan yang berprestasi,
                berinovasi, dengan mahasiswa yang berkarakter, aktif, inovatif,
                solidaritas, dilandasi IMTAQ dan IPTEK dan berwawasan kekeluargaan.
            </p>
        </div>

        <!-- Misi Card -->
        <div class="max-w-md mx-auto bg-white shadow-md rounded px-6 pt-6 pb-8 mb-4">
            <h1 class="text-3xl font-semibold text-center">MISI</h1>
            <ul class="list-disc pl-5 mt-1">
                <li>Membangun internal yang kokoh berasaskan profesionalisme dan semangat kekeluargaan.</li>
                <li>Membangun hubungan yang baik dan sinergis antar elemen internal dan eksternal Universitas Amikom Yogyakarta.</li>
                <li>Meningkatkan rasa solidaritas dan kekeluargaan antar sesama mahasiswa.</li>
                <li>Membangun hubungan yang baik dan sinergis antar elemen internal dan eksternal Universitas Amikom Yogyakarta.</li>
                <li>Membudayakan hidup disiplin, berbudi pekerti luhur, berjiwa sosial, dan bekerja cerdas.</li>
                <li>Mengadakan dan meneruskan kegiatan yang bersifat positif dan bermanfaat kepada Universitas Amikom Yogyakarta.</li>
                <li>Bersama mewujudkan IMADIKOM yang maju dan berkualitas.</li>
            </ul>
        </div>
    </div>
    @endsection
</body>

</html>