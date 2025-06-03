<?php

namespace App\Http\Controllers;

use App\Models\IlkomNews;
use Illuminate\Http\Request;

class Ilkom_newsController extends Controller
{
    public function index()
    {
        $nilai_berita = IlkomNews::all();
        return view("content/ilkomnews", ['nilai_berita' => $nilai_berita]);
    }

    public function show($id)
    {
        $nilai_berita = IlkomNews::findOrFail($id);
        return view('content/beranda', ['newsItem' => $nilai_berita]);
    }
}