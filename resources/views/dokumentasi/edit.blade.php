@extends('layout')

@section('content')
<div class="container">
    <h2>Edit Dokumentasi</h2>
    <form action="{{ route('dokumentasi.update', $dokumentasi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $dokumentasi->nama }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $dokumentasi->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $dokumentasi->tanggal }}" required>
        </div>
        <div class="form-group">
            <label for="tempat">Tempat:</label>
            <input type="text" class="form-control" id="tempat" name="tempat" value="{{ $dokumentasi->tempat }}" required>
        </div>
        <div class="form-group">
            <label for="foto">Foto:</label>
            <input type="file" class="form-control-file" id="foto" name="foto">
            @if ($dokumentasi->foto)
            <p><img src="{{ $dokumentasi->getFotoUrlAttribute() }}" alt="Foto Dokumentasi" style="max-width: 200px;"></p>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection