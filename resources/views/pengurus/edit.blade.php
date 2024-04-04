<!-- resources/views/pengurus/edit.blade.php -->

@extends('layout')

@section('content')
<div class="container">
    <h2>Edit Pengurus</h2>
    <form action="{{ route('pengurus.update', $pengurus->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pengurus->nama }}" required>
        </div>
        <div class="form-group">
            <label for="divisi_id">Divisi:</label>
            <select class="form-control" id="divisi_id" name="divisi_id" required>
                @foreach($divisi as $div)
                <option value="{{ $div->id }}" {{ $pengurus->divisi_id == $div->id ? 'selected' : '' }}>{{ $div->nama_divisi }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="jabatan_id">Jabatan:</label>
            <select class="form-control" id="jabatan_id" name="jabatan_id" required>
                @foreach($jabatan as $jab)
                <option value="{{ $jab->id }}" {{ $pengurus->jabatan_id == $jab->id ? 'selected' : '' }}>{{ $jab->nama_jabatan }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection