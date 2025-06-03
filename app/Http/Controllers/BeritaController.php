<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function show()
    {
        $nilai_berita = berita::all();
        return view("content/berita", ['nilai_berita' => $nilai_berita]);
    }

    public function showmain()
    {
        $nilai_berita = berita::orderBy('date', 'asc')->take(3)->get();
        return view("content/beranda", ['nilai_berita' => $nilai_berita]);
    }

}
