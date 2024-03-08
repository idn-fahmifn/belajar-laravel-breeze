<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    // perintah dibawah digunakan ketika nama table migration, tidak memiliki S dibelakang. 
    // contoh : bukus, books, users. jadi jika tidak ada S dibelakang, 
    // maka perlu di deklarasikan
    protected $table = 'buku';
    
    // jika jumlahnya sedikit, menggunakan $fillable itu makesense
    // protected $fillable = ['judul', 'pengarang', 'penerbit'];
    // jika fieldnya sangat banyak, bisa menggunakan perintah : 
    protected $guarded = [];

}
