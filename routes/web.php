<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/data-buku', function () {
    return view('databuku.index');
})->name('dataBuku');

Route::get('/data-buku-edit', function () {
    return view('databuku.edit');
})->name('editDataBuku');

Route::get('/data-buku-create', function () {
    return view('databuku.create');
})->name('createDataBuku');

Route::get('/data-anggota', function () {
    return view('dataAnggota');
})->name('dataAnggota');

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


