@extends('layout')

@section('content')
<div class="container mx-auto px-4 flex justify-center items-center h-full mb-4 mt-4">
    <div class="bg-gray-200 w-full md:w-1/2 lg:w-1/3 p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">Tambah Dokumentasi</h2>
        <form action="{{ route('dokumentasi.store') }}" method="POST" enctype="multipart/form-data" class="max-w-md">
            @csrf
            <div class="mb-4">
                <label for="nama" class="block font-semibold mb-2">Nama:</label>
                <input type="text" class="form-input w-full bg-gray-100 rounded-md border-gray-300 focus:border-blue-500 focus:bg-white" id="nama" name="nama" required>
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block font-semibold mb-2">Deskripsi:</label>
                <textarea class="form-textarea w-full bg-gray-100 rounded-md border-gray-300 focus:border-blue-500 focus:bg-white" id="deskripsi" name="deskripsi" required></textarea>
            </div>
            <div class="mb-4">
                <label for="tanggal" class="block font-semibold mb-2">Tanggal:</label>
                <input type="date" class="form-input w-full bg-gray-100 rounded-md border-gray-300 focus:border-blue-500 focus:bg-white" id="tanggal" name="tanggal" required>
            </div>
            <div class="mb-4">
                <label for="tempat" class="block font-semibold mb-2">Tempat:</label>
                <input type="text" class="form-input w-full bg-gray-100 rounded-md border-gray-300 focus:border-blue-500 focus:bg-white" id="tempat" name="tempat" required>
            </div>
            <div class="mb-4">
                <label for="foto" class="block font-semibold mb-2">Foto:</label>
                <input type="file" class="form-input w-full bg-gray-100 rounded-md border-gray-300 focus:border-blue-500 focus:bg-white" id="foto" name="foto">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 w-full">Simpan</button>
        </form>
    </div>
</div>
@endsection
