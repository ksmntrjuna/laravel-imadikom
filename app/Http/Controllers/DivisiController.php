<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function bph()
    {
        return view('divisi.bph');
    }

    public function psdm()
    {
        return view('divisi.psdm');
    }

    public function sosma()
    {
        return view('divisi.sosma');
    }

    public function kwu()
    {
        return view('divisi.kwu');
    }

    public function humas()
    {
        return view('divisi.humas');
    }

    public function multimedia()
    {
        return view('divisi.multimedia');
    }
}
