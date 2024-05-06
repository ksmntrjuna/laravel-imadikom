@extends('layout')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-bold mb-4">Detail Pengurus</h1>

    <!-- Card untuk menampilkan informasi detail pengurus -->
    <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col md:flex-row items-center gap-6">
        <!-- Kolom kiri: Foto pengurus -->
        @if($pengurus->foto)
        <div class="flex-shrink-0">
            <img src="{{ asset('storage/' . $pengurus->foto) }}" alt="{{ $pengurus->nama }}" class="w-40 h-40 object-cover rounded-full border-4 border-gray-200">
        </div>
        @else
        <div class="flex-shrink-0 w-40 h-40 bg-gray-200 rounded-full flex items-center justify-center text-gray-500 text-4xl">
            ? <!-- Placeholder jika tidak ada foto -->
        </div>
        @endif

        <!-- Kolom kanan: Informasi pengurus -->
        <div class="flex-grow mt-4 md:mt-0 md:ml-6">
            <p class="text-xl font-semibold mb-2">{{ $pengurus->nama }}</p>
            <p class="mb-2"><strong>Divisi:</strong> {{ $pengurus->divisi->nama_divisi }}</p>
            <p class="mb-2"><strong>Jabatan:</strong> {{ $pengurus->jabatan->nama_jabatan }}</p>
            <p class="mb-2"><strong>NIM:</strong> {{ $pengurus->nim }}</p>
            <p class="mb-2"><strong>Kelas:</strong> {{ $pengurus->kelas }}</p>
            <p class="mb-2"><strong>Alamat:</strong> {{ $pengurus->alamat }}</p>
            <p class="mb-2"><strong>Email:</strong> {{ $pengurus->email }}</p>
            <p class="mb-2"><strong>Telepon:</strong> {{ $pengurus->telp }}</p>
        </div>
    </div>

    <!-- Tombol Kembali -->
    <div class="mt-6"> <!-- Tambahkan kelas margin sesuai kebutuhan -->
        <a href="{{ route('pengurus.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
            Kembali
        </a>
    </div>
</div>
@endsection