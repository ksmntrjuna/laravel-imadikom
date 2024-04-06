@extends('layout')

@section('content')
<div class="container">
    <h2>Dokumentasi</h2>
    @auth
    <a href="{{ route('dokumentasi.create') }}" class="btn btn-primary mb-2">Tambah</a>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @endauth
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Tempat</th>
                <th>Foto</th>
                @auth
                <th>Aksi</th>
                @endauth
            </tr>
        </thead>

        <tbody>
            @foreach($dokumentasi as $d)
            <tr>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->deskripsi }}</td>
                <td>{{ $d->tanggal }}</td>
                <td>{{ $d->tempat }}</td>
                <td>
                    <img src="{{ $d->getFotoUrlAttribute() }}" alt="Foto Dokumentasi" style="max-width: 100px;">
                </td>
                @auth
                <td>
                    <a href="{{ route('dokumentasi.edit', $d->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('dokumentasi.destroy', $d->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus dokumentasi ini?')">Hapus</button>
                    </form>
                </td>
                @endauth
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection