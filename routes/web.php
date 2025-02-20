<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\TanggapanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Auth.Login');
})->name('/');

Route::get('login', [LoginController::class, 'ShowLogin'])->name('login');
Route::post('/login/prosses', [LoginController::class, 'login'])->name('login.store');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/registrasi', [RegisterController::class, 'index'])->name('regis');
Route::post('/registrasi/masyarakat', [RegisterController::class, 'registerMasyarakat'])->name('register.masyarakat');
Route::get('/detail/{id_pengaduan}/pengaduan', [TanggapanController::class, 'detail'])->name('detail.pengaduan');
Route::post('/tanggapan/{id_pengaduan}',[TanggapanController::class,'store'])->name('tanggapan.store');
Route::post('/verifikasi/pengaduan/{id}',[AdminController::class, 'verifikasi'])->name('verif');

Route::middleware(['role:masyarakat'])->group(function () {
    Route::get('/masyarakat', [MasyarakatController::class, 'index'])->name('masyarakat.index');
    Route::get('/masyarakat/upload', [MasyarakatController::class, 'ShowUpload'])->name('masyarakat.upload');
    Route::post('/masyarakat/store/laporan', [PengaduanController::class, 'store'])->name('masyarakat.store');
});

Route::middleware(['role:petugas'])->group(function () {
    Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas.index');
    Route::get('/petugas/table',[PetugasController::class, 'table'])->name('petugas.table');

});

Route::get('/admin/table', [AdminController::class, 'table'])->name('admin.table');

Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/petugas', [AdminController::class, 'datapetugas'])->name('admin.petugas');    
    Route::get('/admin/datauser', [AdminController::class, 'datauser'])->name('admin.data');
    Route::post('/admin/addpetugas', [RegisterController::class, 'registerPetugas'])->name('add.patugas');
    Route::get('/laporan/{id}/generate', [AdminController::class, 'generatePDF'])->name('laporan.generate');
});