<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\berita;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function main() {
        return view("content/beranda");
    }

    function profil() {
        return view("content/profil");
    }

    function about() {
        return view("content/about");
    }

    function majalah() {
        return view("content/majalah");
    }

    function berita() {
        return view("content/berita");
    }
    function ilkomnews() {
        return view("content/ilkomnews");
    }

    function isiberita($id)
    {
        $berita = berita::find($id);
        $beritalist = berita::all();
        return view("content/isiberita", ['berita' => $berita],['beritalist'=>$beritalist]);
    }

    function majalah2() {
        return view("content/majalah2");
    }

    function adminmain()
    {
        return view("admin/admin");
    }

    //Menampilkan halaman admin
    function adminmajalah()
    {
        return view("admin/majalah");
    }

    function beritaadmin()
    {
        return view("admin/berita");
    }

    function birokrasi()
    {
        return view("admin/birokrasi");
    }

    function masuklogin()
    {
        return view("Validate/login");
    }
    function ilkomnewsadmin(){
        return view('admin/ilkomnews');
    }

}
