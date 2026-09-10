<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    // protected $table = 'karyawans';
    protected $fillable = ['nama_karyawan', 'jk', 'alamat'];
    public $timestamps = false;
}
