<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        // mengambil data dari tabel buku yang ditampung di model Buku;
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    // untuk menampilkan halaman create, jika ada
    public function create()
    {
        //
    }

    // perintah untuk mengolah data yang akan dikiriman
    public function store(Request $request)
    {
        $input = $request->all();
        // dd($input);
        Buku::create($input);
        return back();
    }

    // untuk memanggil halaman detail.
    public function show($id)
    {
        $data = Buku::find($id);
        return view('buku.detail', compact('data'));
    }

    // Untuk memanggil halaman edit
    public function edit(Buku $buku)
    {
        // 
    }

    public function update(Request $request, Buku $buku)
    {
        //
    }

    public function destroy(Buku $buku)
    {
        //
    }
}
