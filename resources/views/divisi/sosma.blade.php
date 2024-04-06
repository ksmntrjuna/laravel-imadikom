<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIVISI SOSMA</title>
</head>

<body class="bg-gray-100">
    @extends('layout')

    @section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4 text-center">DIVISI SOSMA</h1>
        <p class="mb-6">Divisi Sosial Masyarakat (Sosmas) merupakan divisi yang bertanggung jawab dalam kegiatan di bidang sosial kemasyarakatan IMADIKOM. Divisi ini bertujuan untuk membentuk citra IMADIKOM yang peduli antar sesama.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-semibold mb-2">1. Baksos</h3>
                <p class="mb-4">Bakti Sosial adalah program kerja dimana kami pengurus Imadikom terjun langsung ke masyarakat guna membantu dan mengembangkan potensi masyarakat setempat agar lebih dikenal dan maju. Program ini juga berkolaborasi dengan kegiatan jogjaplesiride yaitu dari alumni IPB Yogyakarta. Dengan peserta 800 lebih.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-semibold mb-2">2. Imadikom Sharing Session</h3>
                <p class="mb-4">Sharing Session adalah program kerja yang dimana pengurus Imadikom bisa berbagi pengalaman dan relasi, baik kepada alumni maupun sesama pengurus KIP-K kampus lain.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-semibold mb-2">3. Imadikom Education</h3>
                <p>Imadikom Education adalah kegiatan sosial masyarakat dimana dalam hal ini kami melaksanakan program mengedukasi kepada anak-anak panti asuhan dan juga memberikan sumbangan dari hasil galang dana berupa uang tunai dan barang layak pakai.</p>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>