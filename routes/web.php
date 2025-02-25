<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserLoginController;

// Frontend
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/rooms', [FrontendController::class, 'kamar']);
Route::get('/facilities', [FrontendController::class, 'fasilitas']);
Route::get('/kontak', [FrontendController::class, 'kontak']);
Route::post('/cekkamar', [FrontendController::class, 'cekKamar']);
Route::middleware('ispelanggan')->group(function () {
    Route::post('/pemesanan', [FrontendController::class, 'reservasi']);
    Route::post('/konfirmasi', [FrontendController::class, 'konfirmasi']);
    Route::get('/getreservasi', [FrontendController::class, 'getReservasi']);
    Route::get('/bayarinvoice/{reservasi}', [FrontendController::class, 'bayarReservasi']);
    Route::get('/cetakinvoice/{reservasi}', [FrontendController::class, 'cetakInvoice']);
    Route::post('/konfirmasibayar', [FrontendController::class, 'konfirmasiBayar']);
});

// Login User
Route::get('/loginuser', [UserLoginController::class, 'index'])->name('login.pelanggan')->middleware('isguest');
Route::post('/loginuser', [UserLoginController::class, 'authenticate']);
Route::get('/registeruser', [UserLoginController::class, 'registrasi']);
Route::post('/registeruser', [UserLoginController::class, 'prosesRegister']);
Route::get('/logoutuser', [UserLoginController::class, 'logout']);
