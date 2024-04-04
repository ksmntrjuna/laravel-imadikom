<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DokumentasiController extends Controller
{
    public function index()
    {
        $dokumentasis = Dokumentasi::all();
        return view('dokumentasi.index', compact('dokumentasis'));
    }

    public function create()
    {
        return view('dokumentasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'tempat' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi untuk foto
        ]);

        $dokumentasiData = $request->except('foto');

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('dokumentasi');
            $dokumentasiData['foto'] = $fotoPath;
        }

        Dokumentasi::create($dokumentasiData);

        return redirect()->route('dokumentasi.index')->with('success', 'Dokumentasi berhasil ditambahkan.');
    }

    public function edit(Dokumentasi $dokumentasi)
    {
        return view('dokumentasi.edit', compact('dokumentasi'));
    }

    public function update(Request $request, Dokumentasi $dokumentasi)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'tempat' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi untuk foto
        ]);

        $dokumentasiData = $request->except('foto');

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($dokumentasi->foto) {
                Storage::delete($dokumentasi->foto);
            }

            $fotoPath = $request->file('foto')->store('dokumentasi');
            $dokumentasiData['foto'] = $fotoPath;
        }

        $dokumentasi->update($dokumentasiData);

        return redirect()->route('dokumentasi.index')->with('success', 'Dokumentasi berhasil diperbarui.');
    }

    public function destroy(Dokumentasi $dokumentasi)
    {
        // Hapus foto jika ada sebelum menghapus dokumentasi
        if ($dokumentasi->foto) {
            Storage::delete($dokumentasi->foto);
        }

        $dokumentasi->delete();

        return redirect()->route('dokumentasi.index')->with('success', 'Dokumentasi berhasil dihapus.');
    }
}

