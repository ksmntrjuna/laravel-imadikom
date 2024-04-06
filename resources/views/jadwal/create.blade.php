@extends('layout')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Tambah Jadwal Baru</h1>
    <form method="POST" action="{{ route('jadwal.store') }}" class="space-y-4">
        @csrf

        <div class="flex flex-col">
            <label for="nama" class="text-sm font-semibold">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Nama" class="rounded-lg border-gray-300 border px-4 py-2 focus:outline-none focus:border-blue-500">
        </div>

        <div class="flex flex-col">
            <label for="tanggal" class="text-sm font-semibold">Tanggal</label>
            <input type="date" id="tanggal" name="tanggal" class="rounded-lg border-gray-300 border px-4 py-2 focus:outline-none focus:border-blue-500">
        </div>

        <div class="flex flex-col">
            <label for="jam" class="text-sm font-semibold">Jam</label>
            <input type="time" id="jam" name="jam" class="rounded-lg border-gray-300 border px-4 py-2 focus:outline-none focus:border-blue-500">
        </div>

        <div class="flex flex-col">
            <label for="tempat" class="text-sm font-semibold">Tempat</label>
            <input type="text" id="tempat" name="tempat" placeholder="Tempat" class="rounded-lg border-gray-300 border px-4 py-2 focus:outline-none focus:border-blue-500">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
    </form>
</div>
@endsection