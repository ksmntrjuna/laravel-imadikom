<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIVISI MULTIMEDIA</title>
</head>

<body class="bg-gray-100">
    @extends('layout')

    @section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4 text-center">DIVISI MULTIMEDIA</h1>
        <p class="mb-6">Divisi Multimedia merupakan divisi yang bergerak di bidang digital seperti desain dan pendokumentasian.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-semibold mb-2">1. Pendokumentasian</h3>
                <p class="mb-4">Mendokumentasikan setiap acara yang sedang berlangsung.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-semibold mb-2">2. Admin Medsos</h3>
                <p class="mb-4">Mengatur desain dan akun sosial media khususnya Instagram serta membuat konsep desain kedepannya. Mengelola feed Instagram dan story Instagram.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-semibold mb-2">3. Design</h3>
                <p>Mendesain feed, id card, korsa, dan desain dokumentasi.</p>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>