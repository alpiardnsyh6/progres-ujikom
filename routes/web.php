<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\FasilitasKamarController;

// Frontend
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/rooms', [FrontendController::class, 'kamar']);
Route::get('/facilities', [FrontendController::class, 'fasilitas']);
Route::get('/kontak', [FrontendController::class, 'kontak']);
Route::post('/cekkamar', [FrontendController::class, 'cekKamar']);

// Is Pelanggan
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

// Backend
Route::get('/login', [LoginController::class, 'index'])->name('login.admin')->middleware('isguest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/logout', [LoginController::class, 'logout']);

// User
Route::middleware('isadmin')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // User
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/create', [UserController::class, 'create']);
    Route::post('/user', [UserController::class, 'store']);
    Route::get('/user/edit/{user}', [UserController::class, 'edit']);
    Route::put('/user', [UserController::class, 'update']);
    Route::get('/user/delete/{user}', [UserController::class, 'destroy']);

    // Kamar
    Route::get('/kamar', [KamarController::class, 'index']);
    Route::get('/kamar/create', [KamarController::class, 'create']);
    Route::post('/getKamarById', [KamarController::class, 'getKamarById']);
    Route::get('/kamar/delete/kamar', [KamarController::class, 'delete']);
    Route::post('/ruang', [KamarController::class, 'tambahRuang']);

    
    // Fasilitas Kamar
    Route::get('/fasilitaskamar', [FasilitasKamarController::class, 'index']);
    Route::get('/fasilitaskamar/create', [FasilitasKamarController::class, 'create']);
    Route::post('/fasilitaskamar', [FasilitasKamarController::class, 'store']);
    Route::get('/fasilitaskamar/edit/{fasilitas}', [FasilitasKamarController::class, 'edit']);
    Route::put('/fasilitaskamar', [FasilitasKamarController::class, 'update']);
    Route::post('/getFasilitasKamar', [FasilitasKamarController::class, 'getFasilitasKamar']);
    Route::get('/fasilitaskamar/delete/{fasilitas}', [FasilitasKamarController::class, 'destroy']);

    // Tambah Fasilitas di Data kamar
    Route::get('/fasilitaskamar/pilih/{id}', [FasilitasKamarController::class, 'pilihFasilitas']);
    Route::post('/pilihfasilitas', [FasilitasKamarController::class, 'simpanDetailFasilitas']);
});

