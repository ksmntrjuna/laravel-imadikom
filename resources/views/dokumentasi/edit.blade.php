@extends('layout')

@section('content')
<div class="container mx-auto px-4 flex justify-center items-center h-full mb-4 mt-4">
        <div class="bg-gray-200 w-full md:w-1/2 lg:w-1/3 p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Edit Dokumentasi</h2>
            <form action="{{ route('dokumentasi.update', $dokumentasi->id) }}" method="POST" enctype="multipart/form-data" class="max-w-md">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="nama" class="block font-semibold mb-2">Nama:</label>
                    <input type="text" class="w-full bg-gray-100 rounded-md border-gray-300 focus:border-blue-500 focus:bg-white" id="nama" name="nama" value="{{ $dokumentasi->nama }}" required>
                </div>
                <div class="mb-4">
                    <label for="deskripsi" class="block font-semibold mb-2">Deskripsi:</label>
                    <textarea class="form-textarea w-full bg-gray-100 rounded-md border-gray-300 focus:border-blue-500 focus:bg-white" id="deskripsi" name="deskripsi" required>{{ $dokumentasi->deskripsi }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="tanggal" class="block font-semibold mb-2">Tanggal:</label>
                    <input type="date" class="form-input w-full bg-gray-100 rounded-md border-gray-300 focus:border-blue-500 focus:bg-white" id="tanggal" name="tanggal" value="{{ $dokumentasi->tanggal }}" required>
                </div>
                <div class="mb-4">
                    <label for="tempat" class="block font-semibold mb-2">Tempat:</label>
                    <input type="text" class="form-input w-full bg-gray-100 rounded-md border-gray-300 focus:border-blue-500 focus:bg-white" id="tempat" name="tempat" value="{{ $dokumentasi->tempat }}" required>
                </div>
                <div class="mb-4">
                    <label for="foto" class="block font-semibold mb-2">Foto:</label>
                    <input type="file" class="form-input w-full bg-gray-100 rounded-md border-gray-300 focus:border-blue-500 focus:bg-white" id="foto" name="foto">
                    @if ($dokumentasi->foto)
                    <p><img src="{{ $dokumentasi->getFotoUrlAttribute() }}" alt="Foto Dokumentasi" class="max-w-xs"></p>
                    @endif
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 w-full">Simpan</button>
            </form>
        </div>
</div>
@endsection
