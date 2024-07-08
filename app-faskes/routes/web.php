<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KabKotaController;
use App\Http\Controllers\Jenis_FaskesController;
use App\Http\Controllers\FaskesController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\Profile_MahasiswaController;
//awal script login breeze
Route::get('/', function () {
    // return view('welcome');
    return view('frontend');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

//cara3 : routing dengan memanfaatkan controller
Route::get('/dashboard', [DashboardController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //routing kabkota
    Route::get('/kabkota', [KabKotaController::class, 'show'])->name('kabkota.show'); //tampilkan
    Route::get('/kabkota/create', [KabKotaController::class, 'create'])->name('kabkota.create'); //add
    Route::post('/kabkota/store', [KabKotaController::class, 'store'])->name('kabkota.store');
    Route::get('/kabkota/{id}/edit', [KabKotaController::class, 'edit'])->name('kabkota.edit'); //edit
    Route::delete('/kabkota/{id}', [KabKotaController::class, 'destroy'])->name('kabkota.destroy'); //delete
    Route::get('/kabkota/{id}', [KabKotaController::class, 'view'])->name('kabkota.view'); //view
    //routing jenis_faskes
    Route::get('/jenis_faskes', [Jenis_FaskesController::class, 'show'])->name('jenis_faskes.show'); //tampilkan
    Route::get('/jenis_faskes/create', [Jenis_FaskesController::class, 'create'])->name('jenis_faskes.create'); //add
    Route::post('/jenis_faskes/store', [Jenis_FaskesController::class, 'store'])->name('jenis_faskes.store');
    Route::get('/jenis_faskes/{id}/edit', [Jenis_FaskesController::class, 'edit'])->name('jenis_faskes.edit'); //edit
    Route::delete('/jenis_faskes/{id}', [Jenis_FaskesController::class, 'destroy'])->name('jenis_faskes.destroy'); //delete
    Route::get('/jenis_faskes/{id}', [Jenis_FaskesController::class, 'view'])->name('jenis_faskes.view'); //view
    //routing faskes
    Route::get('/faskes', [FaskesController::class, 'show'])->name('faskes.show'); //tampilkan
    Route::get('/faskes/create', [FaskesController::class, 'create'])->name('faskes.create'); //add
    Route::post('/faskes/store', [FaskesController::class, 'store'])->name('faskes.store');
    Route::get('/faskes/{id}/edit', [FaskesController::class, 'edit'])->name('faskes.edit'); //edit
    Route::delete('/faskes/{id}', [FaskesController::class, 'destroy'])->name('faskes.destroy'); //delete
    Route::get('/faskes/{id}', [FaskesController::class, 'view'])->name('faskes.view') ;//view
    //routing kategori
    Route::get('/kategori', [KategoriController::class, 'show'])->name('kategori.show'); //tampilkan
    Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create'); //add
    Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit'); //edit
    Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy'); //delete
    Route::get('/kategori/{id}', [KategoriController::class, 'view'])->name('kategori.view'); //view
    //routing provinsi
    Route::get('/provinsi', [ProvinsiController::class, 'show'])->name('provinsi.show'); //tampilkan
    Route::get('/provinsi/create', [ProvinsiController::class, 'create'])->name('provinsi.create'); //add
    Route::post('/provinsi/store', [ProvinsiController::class, 'store'])->name('provinsi.store');
    Route::get('/provinsi/{id}/edit', [ProvinsiController::class, 'edit'])->name('provinsi.edit'); //edit
    Route::delete('/provinsi/{id}', [ProvinsiController::class, 'destroy'])->name('provinsi.destroy'); //delete
    Route::get('/provinsi/{id}', [ProvinsiController::class, 'view'])->name('provinsi.view'); //view
    // routing profile mahasiswa
    Route::get('/profile_mahasiswa', [Profile_MahasiswaController::class, 'show'])->name('profile_mahasiswa.show');;
});

require __DIR__.'/auth.php';
//akhir script login breeze

//script puskesmas




