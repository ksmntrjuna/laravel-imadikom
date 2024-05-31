@extends('layout')

@section('content')
<div class="container mx-auto px-4 mt-6 mb-6">
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold mb-4">Edit Jadwal</h1>

        <!-- Tombol Kembali -->
        <a href="{{ route('jadwal.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mb-4 inline-block">Kembali</a>

        <!-- Form Edit Jadwal -->
        <form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Nama Kegiatan -->
            <div class="mb-4">
                <label for="nama_kegiatan" class="block font-semibold mb-2">Nama Kegiatan:</label>
                <input type="text" name="nama_kegiatan" id="nama_kegiatan" class="form-input w-full border border-gray-300 p-2 rounded" value="{{ old('nama_kegiatan', $jadwal->nama_kegiatan) }}" required>
            </div>

            <!-- Mulai -->
            <div class="mb-4">
                <label for="mulai" class="block font-semibold mb-2">Mulai:</label>
                @if ($jadwal->mulai instanceof \Carbon\Carbon || $jadwal->mulai instanceof \DateTime)
                <input type="datetime-local" name="mulai" id="mulai" class="form-input w-full border border-gray-300 p-2 rounded" value="{{ $jadwal->mulai->format('Y-m-d\TH:i') }}" required>
                @else
                <input type="datetime-local" name="mulai" id="mulai" class="form-input w-full border border-gray-300 p-2 rounded" value="{{ $jadwal->mulai }}" required>
                @endif
            </div>

            <!-- Selesai -->
            <div class="mb-4">
                <label for="selesai" class="block font-semibold mb-2">Selesai:</label>
                @if ($jadwal->selesai instanceof \Carbon\Carbon || $jadwal->selesai instanceof \DateTime)
                <input type="datetime-local" name="selesai" id="selesai" class="form-input w-full border border-gray-300 p-2 rounded" value="{{ $jadwal->selesai->format('Y-m-d\TH:i') }}" required>
                @else
                <input type="datetime-local" name="selesai" id="selesai" class="form-input w-full border border-gray-300 p-2 rounded" value="{{ $jadwal->selesai }}" required>
                @endif
            </div>

            <!-- Tempat -->
            <div class="mb-4">
                <label for="tempat" class="block font-semibold mb-2">Tempat:</label>
                <input type="text" name="tempat" id="tempat" class="form-input w-full border border-gray-300 p-2 rounded" value="{{ old('tempat', $jadwal->tempat) }}" required>
            </div>

            <!-- Tombol Update -->
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Simpan
            </button>
        </form>
    </div>
</div>
@endsection