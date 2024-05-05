@extends('layout')

@section('content')
<div class="container mx-auto px-4">
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold mb-4">Tambah Dokumentasi</h2>

        <!-- Tombol Kembali -->
        <a href="{{ route('dokumentasi.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mb-4 inline-block">Kembali</a>


        <!-- Form Tambah Dokumentasi -->
        <form action="{{ route('dokumentasi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Nama -->
            <div class="mb-4">
                <label for="nama" class="block font-semibold mb-2">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-input w-full border border-gray-300 p-2 rounded" required>
            </div>

            <!-- Deskripsi -->
            <div class="mb-4">
                <label for="deskripsi" class="block font-semibold mb-2">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" class="form-textarea w-full border border-gray-300 p-2 rounded" rows="4" required></textarea>
            </div>

            <!-- Tanggal -->
            <div class="mb-4">
                <label for="tanggal" class="block font-semibold mb-2">Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" class="form-input w-full border border-gray-300 p-2 rounded" required>
            </div>

            <!-- Tempat -->
            <div class="mb-4">
                <label for="tempat" class="block font-semibold mb-2">Tempat:</label>
                <input type="text" id="tempat" name="tempat" class="form-input w-full border border-gray-300 p-2 rounded" required>
            </div>

            <!-- Foto -->
            <div class="mb-4">
                <label for="foto" class="block font-semibold mb-2">Foto:</label>
                <input type="file" id="foto" name="foto" class="form-input w-full border border-gray-300 p-2 rounded">
            </div>

            <!-- Tombol Simpan -->
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 w-full">
                Simpan
            </button>
        </form>
    </div>
</div>
@endsection