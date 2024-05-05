<?php

namespace App\Http\Controllers;

use App\Models\Proker;
use App\Models\Divisi;
use Illuminate\Http\Request;

class ProkerController extends Controller
{
    /**
     * Menampilkan daftar proker.
     */
    public function index()
    {
        // Ambil semua proker dan kelompokkan berdasarkan divisi
        $prokers = Proker::with('divisi')->get()->groupBy('divisi_id');

        // Kirim prokers yang dikelompokkan ke view
        return view('proker.index', compact('prokers'));
    }


    /**
     * Menampilkan formulir untuk membuat proker baru.
     */
    public function create()
    {
        $divisis = Divisi::all();
        return view('proker.create', compact('divisis'));
    }

    /**
     * Menyimpan proker baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi input untuk divisi_id
        $request->validate([
            'divisi_id' => 'required|exists:divisi,id',
            'prokers.nama' => 'required|array',
            'prokers.nama.*' => 'required|string|max:255',
            'prokers.deskripsi' => 'required|array',
            'prokers.deskripsi.*' => 'required|string',
        ]);

        // Ambil divisi_id dari permintaan
        $divisi_id = $request->input('divisi_id');

        // Loop melalui setiap nama proker dan deskripsi
        foreach ($request->input('prokers.nama') as $index => $nama) {
            $deskripsi = $request->input('prokers.deskripsi')[$index];

            // Buat setiap proker baru dan simpan ke database
            Proker::create([
                'nama' => $nama,
                'deskripsi' => $deskripsi,
                'divisi_id' => $divisi_id,
            ]);
        }

        return redirect()->route('proker.index')->with('success', 'Proker berhasil dibuat.');
    }


    /**
     * Menampilkan detail proker tertentu.
     */
    public function show(Proker $proker)
    {
        return view('proker.show', compact('proker'));
    }

    /**
     * Menampilkan formulir untuk mengedit proker.
     */
    public function edit(Proker $proker)
    {
        $divisis = Divisi::all();
        return view('proker.edit', compact('proker', 'divisis'));
    }

    /**
     * Memperbarui proker di database.
     */
    public function update(Request $request, Proker $proker)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'divisi_id' => 'required|exists:divisi,id',
        ]);

        $proker->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'divisi_id' => $request->divisi_id,
        ]);

        return redirect()->route('proker.index')->with('success', 'Proker berhasil diperbarui.');
    }

    /**
     * Menghapus proker dari database.
     */
    public function destroy(Proker $proker)
    {
        $proker->delete();
        return redirect()->route('proker.index')->with('success', 'Proker berhasil dihapus.');
    }
}

