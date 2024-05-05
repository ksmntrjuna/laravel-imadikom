<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Menampilkan daftar jadwal.
     */
    public function index(Request $request)
    {
        // Ambil kata kunci dari request jika ada
        $search = $request->input('search');

        // Jika ada kata kunci, lakukan pencarian
        if ($search) {
            $jadwals = Jadwal::where('nama_kegiatan', 'LIKE', '%' . $search . '%')
                ->orWhere('tempat', 'LIKE', '%' . $search . '%')
                ->get();
        } else {
            // Jika tidak ada kata kunci, ambil semua data jadwal
            $jadwals = Jadwal::all();
        }

        // Kembalikan view dengan data jadwals
        return view('jadwal.index', compact('jadwals', 'search'));
    }


    /**
     * Menampilkan formulir untuk membuat jadwal baru.
     */
    public function create()
    {
        return view('jadwal.create');
    }

    /**
     * Menyimpan jadwal baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'mulai' => 'required|date',
            'selesai' => 'required|date|after_or_equal:mulai',
            'tempat' => 'required|string|max:255',
            'status' => 'required|in:belum dilaksanakan,sedang berlangsung,selesai',
        ]);

        Jadwal::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'mulai' => $request->mulai,
            'selesai' => $request->selesai,
            'tempat' => $request->tempat,
            'status' => $request->status,
        ]);

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dibuat.');
    }

    /**
     * Menampilkan formulir untuk mengedit jadwal.
     */
    public function edit(Jadwal $jadwal)
    {
        return view('jadwal.edit', compact('jadwal'));
    }

    /**
     * Memperbarui jadwal di database.
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'mulai' => 'required|date',
            'selesai' => 'required|date|after_or_equal:mulai',
            'tempat' => 'required|string|max:255',
            'status' => 'required|in:belum dilaksanakan,sedang berlangsung,selesai',
        ]);

        $jadwal->update([
            'nama_kegiatan' => $request->nama_kegiatan,
            'mulai' => $request->mulai,
            'selesai' => $request->selesai,
            'tempat' => $request->tempat,
            'status' => $request->status,
        ]);

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diperbarui.');
    }

    /**
     * Menghapus jadwal dari database.
     */
    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus.');
    }
}

