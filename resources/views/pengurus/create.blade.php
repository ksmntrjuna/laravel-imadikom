@extends('layout')

@section('content')
<div class="container mx-auto px-4">
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold mb-4">Tambah Pengurus Baru</h2>

        <!-- Tombol Kembali -->
        <a href="{{ route('pengurus.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mb-4 inline-block">Kembali</a>

        <!-- Form Tambah Pengurus -->
        <form action="{{ route('pengurus.store') }}" method="POST">
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

            <!-- Tombol Simpan -->
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Simpan
            </button>
        </form>
    </div>
</div>
@endsection