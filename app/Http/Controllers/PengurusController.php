<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Jabatan;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    // Menampilkan semua pengurus
    public function index()
    {
        $user = auth()->user();
        $pengurus = Pengurus::all();
        
        return view('pengurus.index', compact('pengurus', 'user'));
    }

    // Menampilkan form untuk menambahkan pengurus baru
    public function create()
    {
        $pengurus = Pengurus::all();
        $divisi = Divisi::all();
        $jabatan = Jabatan::all();
        return view('pengurus.create', compact('pengurus', 'divisi', 'jabatan'));
    }

    // Menyimpan pengurus baru ke dalam database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'divisi_id' => 'required',
            'jabatan_id' => 'required',
        ]);

        Pengurus::create($request->all());

        return redirect()->route('pengurus.index')->with('success', 'Pengurus berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit pengurus
    public function edit(Pengurus $pengurus)
    {
        $divisi = Divisi::all();
        $jabatan = Jabatan::all();
        return view('pengurus.edit', compact('pengurus', 'divisi', 'jabatan'));
    }


    // Menyimpan perubahan pada pengurus ke dalam database
    public function update(Request $request, Pengurus $pengurus)
    {
        $request->validate([
            'nama' => 'required',
            'divisi_id' => 'required',
            'jabatan_id' => 'required',
        ]);

        $pengurus->update($request->all());

        return redirect()->route('pengurus.index')->with('success', 'Pengurus berhasil diperbarui.');
    }

    // Menghapus pengurus dari database
    public function destroy(Pengurus $pengurus)
    {
        $pengurus->delete();

        return redirect()->route('pengurus.index')->with('success', 'Pengurus berhasil dihapus.');
    }
}
