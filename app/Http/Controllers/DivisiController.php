<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function bph()
    {
        $user = auth()->user();

        return view('divisi.bph', compact('user'));
    }

    public function psdm()
    {
        $user = auth()->user();

        return view('divisi.psdm', compact('user'));
    }

    public function sosma()
    {
        $user = auth()->user();

        return view('divisi.sosma', compact('user'));
    }

    public function kwu()
    {
        $user = auth()->user();

        return view('divisi.kwu', compact('user'));
    }

    public function humas()
    {
        $user = auth()->user();

        return view('divisi.humas', compact('user'));
    }

    public function multimedia()
    {
        $user = auth()->user();

        return view('divisi.multimedia', compact('user'));
    }
}
