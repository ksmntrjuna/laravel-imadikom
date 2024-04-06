@extends('layout')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Jadwal</h1>
    <form method="POST" action="{{ route('jadwal.update', $jadwal->id) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <div class="flex flex-col">
            <label for="nama" class="text-sm font-semibold">Nama</label>
            <input type="text" id="nama" name="nama" value="{{ $jadwal->nama }}" class="rounded-lg border-gray-300 border px-4 py-2 focus:outline-none focus:border-blue-500">
        </div>

        <div class="flex flex-col">
            <label for="tanggal" class="text-sm font-semibold">Tanggal</label>
            <input type="date" id="tanggal" name="tanggal" value="{{ $jadwal->tanggal }}" class="rounded-lg border-gray-300 border px-4 py-2 focus:outline-none focus:border-blue-500">
        </div>

        <div class="flex flex-col">
            <label for="jam" class="text-sm font-semibold">Jam</label>
            <input type="time" id="jam" name="jam" value="{{ $jadwal->jam }}" class="rounded-lg border-gray-300 border px-4 py-2 focus:outline-none focus:border-blue-500">
        </div>

        <div class="flex flex-col">
            <label for="tempat" class="text-sm font-semibold">Tempat</label>
            <input type="text" id="tempat" name="tempat" value="{{ $jadwal->tempat }}" class="rounded-lg border-gray-300 border px-4 py-2 focus:outline-none focus:border-blue-500">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan Perubahan</button>
    </form>
</div>
@endsection