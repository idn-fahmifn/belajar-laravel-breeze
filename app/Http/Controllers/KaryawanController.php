<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    
    public function index()
    {
        $hallo = 'saya sedang belajar laravel';
        return view('karyawan.index', compact('hallo'));
    }

    public function create()
    {
        return view('karyawan.tambah');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        dd($data);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
