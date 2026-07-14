<?php

use Illuminate\Support\Facades\Route;
// tambahan use ProfilController
use App\Http\Controllers\ProfilController;
// tambah use TentangController
use App\Http\Controllers\TentangController;

Route::get('/', function () {
    return view('welcome');
});

//tambahan route ProfilController:
Route::get('/profil', [ProfilController::class, 'index'])
    ->name('profil');

//tambahan route ProfilController:
Route::get('/tentang', [TentangController::class, 'index'])
    ->name('tentang');