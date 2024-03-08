<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new \App\Models\Buku;
        $data->judul = 'Ikal Menunggu Tulang Rusuk';
        $data->pengarang = 'Ikki Baiq';
        $data->penerbit = 'Iboy';
        $data->save();
    }
}
