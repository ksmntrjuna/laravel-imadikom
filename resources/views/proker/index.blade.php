@extends('layout')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-4xl font-bold mb-2 text-center">Daftar Proker IMADIKOM</h1>

    @auth
    <!-- Tampilkan tombol "Buat Proker Baru" hanya untuk pengguna yang login -->
    <a href="{{ route('proker.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Buat Proker Baru</a>
    @endauth

    @if(session('success'))
    <!-- Tampilkan pesan sukses jika ada -->
    <div class="bg-green-200 text-green-800 px-4 py-2 rounded mb-4">{{ session('success') }}</div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-200">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Divisi</th>
                    @auth
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    @endauth
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($prokers as $index => $proker)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $proker->nama }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $proker->deskripsi }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $proker->divisi->nama_divisi ?? 'N/A' }}</td>
                    @auth
                    <!-- Tampilkan tombol aksi hanya untuk pengguna yang login -->
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('proker.edit', $proker->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                        <form action="{{ route('proker.destroy', $proker->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Apakah Anda yakin ingin menghapus proker ini?')">Hapus</button>
                        </form>
                    </td>
                    @endauth
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection