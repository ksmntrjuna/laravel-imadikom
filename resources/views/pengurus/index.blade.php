<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEPENGURUSAN IMADIKOM</title>
    <!-- Mengimpor Tailwind CSS -->
    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100">
    @extends('layout')

    @section('content')
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mt-8 mb-4">Daftar Pengurus</h2>
        <a href="{{ route('pengurus.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Tambah Pengurus</a>
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-400">
                <thead>
                    <tr>
                        <th class="border border-gray-400 px-4 py-2">Nama</th>
                        <th class="border border-gray-400 px-4 py-2">Divisi</th>
                        <th class="border border-gray-400 px-4 py-2">Jabatan</th>
                        <th class="border border-gray-400 px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengurus as $p)
                    <tr>
                        <td class="border border-gray-400 px-4 py-2">{{ $p->nama }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $p->divisi->nama_divisi }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $p->jabatan->nama_jabatan }}</td>
                        <td class="border border-gray-400 px-4 py-2">
                            <a href="{{ route('pengurus.edit', $p->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded mr-2">Edit</a>
                            <form action="{{ route('pengurus.destroy', $p->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded" onclick="return confirm('Apakah Anda yakin ingin menghapus pengurus ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection

</body>

</html>