<!-- resources/views/pengurus/create.blade.php -->

@extends('layout')

@section('content')
<div class="container">
    <h2>Tambah Pengurus Baru</h2>
    <form action="{{ route('pengurus.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="divisi_id">Divisi:</label>
            <select class="form-control" id="divisi_id" name="divisi_id" required>
                @foreach($divisi as $div)
                <option value="{{ $div->id }}">{{ $div->nama_divisi }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="jabatan_id">Jabatan:</label>
            <select class="form-control" id="jabatan_id" name="jabatan_id" required>
                @foreach($jabatan as $jab)
                <option value="{{ $jab->id }}">{{ $jab->nama_jabatan }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection