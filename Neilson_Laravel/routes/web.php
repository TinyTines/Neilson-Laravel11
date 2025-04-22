<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LoginController;

Route::get('/produk', [ProdukController::class, 'index'])->middleware('auth')->name('list.produk');
    
Route::get('/registrasi', [LoginController::class, 'halamanregis'])->name('halaman.registrasi');
Route::post('/registrasi/submit', [LoginController::class, 'submitregistrasi'])->name('registrasi.submit');
Route::get('/login', [LoginController::class, 'halamanlogin'])->name('hal.login');
Route::post('/login', [LoginController::class, 'submitLogin'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');