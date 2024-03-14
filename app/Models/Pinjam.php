<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;

    protected $table = 'pinjam';
    protected $guarded = [];

    public function buku()
    {
        return $this->belongsTo('App\Models\Buku', 'id_buku');
    }

}
