<?php

use App\Http\Controllers\DaftarMbkmController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PascaMbkmController;
use App\Http\Controllers\PraMbkmController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard-print', [DashboardController::class, 'print'])->name('dashboard.print');

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

    Route::resource('mahasiswa', \App\Http\Controllers\MahasiswaController::class);
    Route::resource('dosen', \App\Http\Controllers\DosenController::class);
    Route::resource('mitra', \App\Http\Controllers\MitraController::class);
    Route::resource('pic', \App\Http\Controllers\PICController::class);
    Route::resource('kaprodi', \App\Http\Controllers\KaprodiController::class);
    Route::resource('staff', \App\Http\Controllers\StaffController::class);

    Route::resource('prambkm', \App\Http\Controllers\PraMbkmController::class);
    Route::get('/pra-mbkm-print', [PraMbkmController::class, 'print'])->name('prambkm.print');
    
    Route::resource('pascambkm', \App\Http\Controllers\PascaMbkmController::class);
    Route::get('/pasca-mbkm-print', [PascaMbkmController::class, 'print'])->name('pascambkm.print');

    Route::resource('daftarmbkm', \App\Http\Controllers\DaftarMbkmController::class);
    Route::get('/daftar-mbkm-print', [DaftarMbkmController::class, 'print'])->name('daftarmbkm.print');

    Route::resource('lowongan', \App\Http\Controllers\LowonganController::class);
    Route::resource('logbook', \App\Http\Controllers\LogbookController::class);
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/logbook-admin', [LogbookController::class, 'adminIndex'])->name('logbook.admin-index');
    Route::get('/lowongan-mahasiswa', [LowonganController::class, 'userIndex'])->name('lowongan.user-index');
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    
});

require __DIR__.'/auth.php';
