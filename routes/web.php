<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/anggota',\App\Http\Controllers\AnggotaController::class);
Route::resource('/buku',\App\Http\Controllers\BukuController::class);
Route::resource('/peminjaman',\App\Http\Controllers\PeminjamanController::class);