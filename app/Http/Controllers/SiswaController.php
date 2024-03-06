<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function utama()
    {
        return 'ini adalah halaman utama';
    }
    public function tambah()
    {
        return view('siswa.tambah');
    }
    public function kirim(Request $request)
    {
        $data = $request->all();
        dd($data);
    }
}

