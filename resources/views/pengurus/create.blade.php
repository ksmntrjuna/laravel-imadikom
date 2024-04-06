@extends('layout')

@section('content')
<div class="container mx-auto px-4">
    <h2 class="text-2xl font-bold mb-4">Tambah Pengurus Baru</h2>
    <form action="{{ route('pengurus.store') }}" method="POST" class="max-w-md">
        @csrf
        <div class="mb-4">
            <label for="nama" class="block font-semibold mb-2">Nama:</label>
            <input type="text" class="form-input w-full" id="nama" name="nama" required>
        </div>
        <div class="mb-4">
            <label for="divisi_id" class="block font-semibold mb-2">Divisi:</label>
            <select class="form-select w-full" id="divisi_id" name="divisi_id" required>
                @foreach($divisi as $div)
                <option value="{{ $div->id }}">{{ $div->nama_divisi }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="jabatan_id" class="block font-semibold mb-2">Jabatan:</label>
            <select class="form-select w-full" id="jabatan_id" name="jabatan_id" required>
                @foreach($jabatan as $jab)
                <option value="{{ $jab->id }}">{{ $jab->nama_jabatan }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan</button>
    </form>
</div>
@endsection