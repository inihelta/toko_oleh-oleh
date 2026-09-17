<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    protected $fillable = [
        'nama_game',
        'developer',
        'genre',
        'platform',
        'harga',
        'tanggal_rilis',
        'deskripsi',
    ];
}
