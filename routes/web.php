<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\JadwalController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi.index');
Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mata-kuliah', [MataKuliahController::class, 'index'])->name('mata-kuliah.index');
Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
