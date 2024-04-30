<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(Request $request)
    {
        // Ambil kata kunci dari permintaan pengguna
        $search = $request->input('search');

        // Jika ada kata kunci pencarian, lakukan pencarian berdasarkan kata kunci tersebut
        if ($search) {
            $jadwal = Jadwal::where('nama', 'like', '%' . $search . '%')
                ->orWhere('tempat', 'like', '%' . $search . '%')
                ->orWhere('tanggal', 'like', '%' . $search . '%')
                ->get();
        } else {
            // Jika tidak ada kata kunci, ambil semua data jadwal
            $jadwal = Jadwal::all();
        }

        // Kirimkan data jadwal ke view
        return view('jadwal.index', compact('jadwal'));
    }


    public function create()
    {
        return view('jadwal.create');
    }

    public function store(Request $request)
    {
        Jadwal::create($request->all());
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan');
    }

    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('jadwal.edit', compact('jadwal'));
    }

    public function update(Request $request, $id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update($request->all());
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diperbarui');
    }

    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus');
    }

}
