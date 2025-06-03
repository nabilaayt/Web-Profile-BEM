<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\birokrasi;
use App\Models\majalah;
use App\Models\IlkomNews;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function storemajalah(Request $request)
    {
        $request->validate([
            'judul' => 'required | unique:majalah',
            'tema' => 'required',
            'launching-date' => 'required',
            'foto' => 'required|mimes:jpeg,jpg'
        ], [
            'judul.required' => 'Judul harus diisi',
            'tema.required' => 'Tema harus diisi',
            'launching-date.required' => 'Tanggal harus diisi',
            'judul.unique' => 'Judul sudah ada',
            'foto.required' => 'Foto wajib diisi',
            'foto.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG,JPG,PNG dan GIF'
        ]);
        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
        $foto_file->move(public_path('foto-majalah'), $foto_nama);
        $data = [
            'judul' => $request->input('judul'),
            'tema' => $request->input('tema'),
            'launching-date' => $request->input('launching-date'),
            'foto' => $foto_nama
        ];

        majalah::create($data);
        return redirect('admin/e-majalah')->with('success', 'Berhasil Memasukkan Data');
    }

    public function storeberita(Request $request)
    {
        $request->validate([
            'judulberita' => 'required | unique:berita',
            'lokasi' => 'required',
            'date' => 'required',
            'isiberita' => 'required',
            'imageberita' => 'required|mimes:jpeg,jpg'
        ], [
            'judulberita.required' => 'Judul harus diisi',
            'lokasi.required' => 'Lokasi harus diisi',
            'date.required' => 'Tanggal harus diisi',
            'isiberita.required' => 'Isi berita harus diisi',
            'judulberita.unique' => 'Judul sudah ada',
            'imageberita.required' => 'Foto wajib diisi',
            'imageberita.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG,JPG,PNG dan GIF'
        ]);
        $foto_file = $request->file('imageberita');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
        $foto_file->move(public_path('image-berita'), $foto_nama);
        $data = [
            'judulberita' => $request->input('judulberita'),
            'lokasi' => $request->input('lokasi'),
            'date' => $request->input('date'),
            'isiberita' => $request->input('isiberita'),
            'imageberita' => $foto_nama
        ];

        berita::create($data);
        return redirect('admin/berita')->with('success', 'Berhasil Memasukkan Data');
    }

    public function storebirokrasi(Request $request)
    {
        $request->validate([
            'judul-birokrasi' => 'required | unique:birokrasi',
            'lokasi-birokrasi' => 'required',
            'date-birokrasi' => 'required',
            'isibirokrasi' => 'required',
            'image-birokrasi' => 'required|mimes:jpeg,jpg'
        ], [
            'judul-birokrasi.required' => 'Judul harus diisi',
            'lokasi-birokrasi.required' => 'Lokasi harus diisi',
            'date-birokrasi.required' => 'Tanggal harus diisi',
            'isibirokrasi.required' => 'Isi birokrasi harus diisi',
            'judul-birokrasi.unique' => 'Judul sudah ada',
            'image-birokrasi.required' => 'Foto wajib diisi',
            'image-birokrasi.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG,JPG,PNG dan GIF'
        ]);
        $foto_file = $request->file('image-birokrasi');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
        $foto_file->move(public_path('image-birokrasi'), $foto_nama);
        $data = [
            'judul-birokrasi' => $request->input('judul-birokrasi'),
            'lokasi-birokrasi' => $request->input('lokasi-birokrasi'),
            'date-birokrasi' => $request->input('date-birokrasi'),
            'isibirokrasi' => $request->input('isibirokrasi'),
            'image-birokrasi' => $foto_nama
        ];

        // dd($data);
        birokrasi::create($data);
        return redirect('admin/birokrasi')->with('success', 'Berhasil Memasukkan Data');
    }
    public function storeilkomnews(Request $request)
{
    $request->validate([
        'judulilkomnews' => 'required | unique:ilkomnews',
        'date' => 'required',
        'isiilkomnews' => 'required',
        'imageilkomnews' => 'required|mimes:jpeg,jpg,png,gif'
    ], [
        'judulilkomnews.required' => 'Judul harus diisi',
        'date.required' => 'Tanggal harus diisi',
        'isiilkomnews.required' => 'Isi Ilkom News harus diisi',
        'judulilkomnews.unique' => 'Judul sudah ada',
        'imageilkomnews.required' => 'Foto wajib diisi',
        'imageilkomnews.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, PNG, dan GIF'
    ]);

    $foto_file = $request->file('imageilkomnews');
    $foto_ekstensi = $foto_file->extension();
    $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
    $foto_file->move(public_path('image-ilkomnews'), $foto_nama);

    $data = [
        'judulilkomnews' => $request->input('judulilkomnews'),
        'date' => $request->input('date'),
        'isiilkomnews' => $request->input('isiilkomnews'),
        'imageilkomnews' => $foto_nama
    ];

    IlkomNews::create($data);
    return redirect('admin/ilkomnews')->with('success', 'Berhasil Memasukkan Data');
}
}
