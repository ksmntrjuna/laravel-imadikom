@extends('layout')

@section('content')
<div class="container">
    <h2>Dokumentasi</h2>
    <a href="{{ route('dokumentasi.create') }}" class="btn btn-primary mb-2">Tambah</a>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Tempat</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dokumentasis as $dokumentasi)
            <tr>
                <td>{{ $dokumentasi->nama }}</td>
                <td>{{ $dokumentasi->deskripsi }}</td>
                <td>{{ $dokumentasi->tanggal }}</td>
                <td>{{ $dokumentasi->tempat }}</td>
                <td><img src="{{ $dokumentasi->getFotoUrlAttribute() }}" alt="Foto Dokumentasi" style="max-width: 100px;"></td>
                <td>
                    <a href="{{ route('dokumentasi.edit', $dokumentasi->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('dokumentasi.destroy', $dokumentasi->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus dokumentasi ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection