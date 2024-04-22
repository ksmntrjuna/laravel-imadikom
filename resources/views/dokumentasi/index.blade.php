<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOKUMETASI IMADIKOM</title>
    <!-- Mengimpor Tailwind CSS -->
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    @extends('layout')

    @section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-2 text-center">Dokumentasi IMADIKOM</h1>

        @auth
        <!-- Display the "Tambah" button only for authenticated users -->
        <a href="{{ route('dokumentasi.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-2 inline-block">Tambah</a>
        @if(session('success'))
        <div class="bg-green-200 text-green-800 px-4 py-2 rounded mb-4">{{ session('success') }}</div>
        @endif
        @endauth

        <!-- Formulir Pencarian -->
        <form method="GET" action="{{ route('dokumentasi.index') }}" class="mb-4">
            <input type="text" name="search" placeholder="Cari..." class="border px-4 py-2 rounded" value="{{ request('search') }}">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cari</button>
        </form>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-200">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tempat</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Foto</th>
                        @auth
                        <!-- Display the "Aksi" column only for authenticated users -->
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        @endauth
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($dokumentasi as $index => $d)

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $d->nama }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $d->deskripsi }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $d->tanggal }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $d->tempat }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <img src="{{ $d->getFotoUrlAttribute() }}" alt="Foto Dokumentasi" class="max-w-xs max-h-24">
                        </td>
                        @auth
                        <!-- Display the "Edit" and "Hapus" buttons only for authenticated users -->
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('dokumentasi.edit', $d->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                            <form action="{{ route('dokumentasi.destroy', $d->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Apakah Anda yakin ingin menghapus dokumentasi ini?')">Hapus</button>
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
</body>

</html>