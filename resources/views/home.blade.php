<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    @extends('layout')

    @section('content')
    <div class="container">
        <h1>IMADIKOM</h1>
        <p>IMADIKOM (Ikatan Mahasiswa Bidikmisi & KIP-K Amikom) Merupakan organisasi untuk para penerima beasiswa KIP-K .</p>
        <div>
            <h1>VISI</h1>
            <p>
                Berkualitas tinggi dengan taraf pendidikan yang berprestasi,
                berinovasi, dengan mahasiswa yang berkarakter, aktif, inovatif,
                solidaritas, dilandasi IMTAQ dan IPTEK dan berwawasan kekeluargaan.
            </p>
        </div>
        <div>
            <h1>MISI</h1>
            <p>
                1. Membangun internal yang kokoh berasaskan profesionalisme dan
                semangat kekeluargaan.
            </p>
            <p>
                2. Membangun hubungan yang baik dan sinergis antar elemen internal dan
                eksternal Universitas Amikom Yogyakarta.
            </p>
            <p>
                3. Meningkatkan rasa solidaritas dan kekeluargaan antar sesama
                mahasiswa.
            </p>
            <p>
                4. Membangun hubungan yang baik dan sinergis antar elemen internal dan
                eksternal Universitas Amikom Yogyakarta.
            </p>
            <p>
                5. Membudayakan hidup disiplin, berbudi pekerti luhur, berjiwa sosial,
                dan bekerja cerdas.
            </p>
            <p>
                6. Mengadakan dan meneruskan kegiatan yang bersifat positif dan
                bermanfaat kepada Universitas Amikom Yogyakarta.
            </p>
            <p>7.Bersama mewujudkan IMADIKOM yang maju dan berkualitas.</p>
        </div>
        @endsection
</body>

</html>