<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

Route::get('/data-buku', [BukuController::class, 'index'])->name('dataBuku');
Route::get('/data-buku/create', [BukuController::class, 'create'])->name('createDataBuku');
Route::post('/data-buku/store', [BukuController::class, 'store'])->name('storeDataBuku');
Route::get('/data-buku/edit/{id}', [BukuController::class, 'edit'])->name('editDataBuku');
Route::put('/data-buku/update/{id}', [BukuController::class, 'update'])->name('updateDataBuku');
Route::delete('/data-buku/delete/{id}', [BukuController::class, 'destroy'])->name('deleteDataBuku');

// Data Anggota Routes dengan CRUD
Route::get('/data-anggota', [AnggotaController::class, 'index'])->name('dataAnggota');
Route::get('/anggota/create', [AnggotaController::class, 'create'])->name('createAnggota');
Route::post('/anggota/store', [AnggotaController::class, 'store'])->name('storeAnggota');
Route::get('/anggota/edit/{id}', [AnggotaController::class, 'edit'])->name('editAnggota');
Route::put('/anggota/update/{id}', [AnggotaController::class, 'update'])->name('updateAnggota');
Route::delete('/anggota/delete/{id}', [AnggotaController::class, 'destroy'])->name('deleteAnggota');

// Routes lainnya tetap sama
Route::get('/data-peminjaman', function () {
    return view('dataPeminjaman');
})->name('dataPeminjaman');

Route::get('/data-pengembalian', function () {
    return view('dataPengembalian');
})->name('dataPengembalian');

Route::get('/data-laporan', function () {
    return view('dataLaporan');
})->name('dataLaporan');

Route::get('/katalog-buku', function () {
    return view('katalogBuku');
})->name('katalogBuku');

Route::get('/riwayat-peminjaman', function () {
    return view('riwayatPeminjaman');
})->name('riwayatPeminjaman');
