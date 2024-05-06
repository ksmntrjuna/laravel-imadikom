@extends('layout')

@section('content')
<div class="container mx-auto px-4 mt-6 mb-6">
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold mb-4">Tambah Pengurus Baru</h2>

        <!-- Tombol Kembali -->
        <a href="{{ route('pengurus.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mb-4 inline-block">Kembali</a>

        <!-- Form Tambah Pengurus -->
        <!-- Pastikan formulir memiliki atribut enctype="multipart/form-data" untuk memungkinkan unggahan file -->
        <form action="{{ route('pengurus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Nama -->
            <div class="mb-4">
                <label for="nama" class="block font-semibold mb-2">Nama:</label>
                <input type="text" class="form-input w-full border border-gray-300 p-2 rounded" id="nama" name="nama" required>
            </div>

            <!-- Divisi -->
            <div class="mb-4">
                <label for="divisi_id" class="block font-semibold mb-2">Divisi:</label>
                <select class="form-select w-full border border-gray-300 p-2 rounded" id="divisi_id" name="divisi_id" required>
                    @foreach($divisi as $div)
                    <option value="{{ $div->id }}">{{ $div->nama_divisi }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Jabatan -->
            <div class="mb-4">
                <label for="jabatan_id" class="block font-semibold mb-2">Jabatan:</label>
                <select class="form-select w-full border border-gray-300 p-2 rounded" id="jabatan_id" name="jabatan_id" required>
                    @foreach($jabatan as $jab)
                    <option value="{{ $jab->id }}">{{ $jab->nama_jabatan }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Nomor Identitas -->
            <div class="mb-4">
                <label for="nim" class="block font-semibold mb-2">Nomor Identitas:</label>
                <input type="text" class="form-input w-full border border-gray-300 p-2 rounded" id="nim" name="nim">
            </div>

            <!-- Alamat -->
            <div class="mb-4">
                <label for="alamat" class="block font-semibold mb-2">Alamat:</label>
                <textarea class="form-textarea w-full border border-gray-300 p-2 rounded" id="alamat" name="alamat"></textarea>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block font-semibold mb-2">Email:</label>
                <input type="email" class="form-input w-full border border-gray-300 p-2 rounded" id="email" name="email" required>
            </div>

            <!-- Telepon -->
            <div class="mb-4">
                <label for="telp" class="block font-semibold mb-2">Telepon:</label>
                <input type="text" class="form-input w-full border border-gray-300 p-2 rounded" id="telp" name="telp">
            </div>

            <!-- Kelas -->
            <div class="mb-4">
                <label for="kelas" class="block font-semibold mb-2">Kelas:</label>
                <input type="text" class="form-input w-full border border-gray-300 p-2 rounded" id="kelas" name="kelas">
            </div>

            <!-- Foto -->
            <div class="mb-4">
                <label for="foto" class="block font-semibold mb-2">Foto:</label>
                <!-- Input type file untuk unggahan foto -->
                <input type="file" class="form-input w-full border border-gray-300 p-2 rounded" id="foto" name="foto">
            </div>

            <!-- Tombol Simpan -->
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Simpan
            </button>
        </form>
    </div>
</div>
@endsection