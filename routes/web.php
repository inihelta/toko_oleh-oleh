<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/cek-koneksi', function () {
    try {
        DB::Connection()->getPdo();
        return 'Database Berhasil didapatkan' . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return 'Koneksi gagal / tidak ditemukan' . $e->getMessage();
    }
});

Route::get('/', function () {
    return view('welcome');
});
Route::resource('pesertalomba', \App\Http\Controllers\PesertalombaController::class);
