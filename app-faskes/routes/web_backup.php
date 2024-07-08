<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {   //url yang ditampilkan di web
    return view('welcome');     // mengarah ke file welcome.blade.php
});

//menampilkan web
// cara 1:menampilkan web langsung cetak
Route::get('/salam', function () {   //url: /salam
    return 'Selamat datang mahasiswa TI07';     // cetak
});

//cara2 : menampilkan web melalui file yang sudah ditentukan
// Route::get('/profile', function () {   //url yang ditampilkan di web
//     return view('profile');     // mengarah ke file profile.blade.php
// });

Route::get('/pasien', function () {   //url : /pasien
    return view('pasien');     // mengarah ke file pasien.blade.php
});

//cara3 : routing dengan memanfaatkan controller
Route::get('/dashboard', [DashboardController::class, 'show']);

//routing pasien
use App\Http\Controllers\PasienController;
Route::get('/pasien', [PasienController::class, 'show'])->name('pasien.show'); //tampilkan
Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create'); //add
Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/pasien/{id}/edit', [PasienController::class, 'edit'])->name('pasien.edit'); //edit
Route::delete('/pasien/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy'); //delete
Route::get('/pasien/{id}', [PasienController::class, 'view'])->name('pasien.view'); //view


//routing paramedik
use App\Http\Controllers\ParamedikController;
Route::get('/paramedik', [ParamedikController::class, 'show'])->name('paramedik.show'); //tampilkan
Route::get('/paramedik/create', [ParamedikController::class, 'create'])->name('paramedik.create'); //add
Route::post('/paramedik/store', [ParamedikController::class, 'store'])->name('paramedik.store');
Route::get('/paramedik/{id}/edit', [ParamedikController::class, 'edit'])->name('paramedik.edit'); //edit
Route::delete('/paramedik/{id}', [ParamedikController::class, 'destroy'])->name('paramedik.destroy'); //delete
Route::get('/paramedik/{id}', [ParamedikController::class, 'view'])->name('paramedik.view'); //view

//routing periksa
use App\Http\Controllers\PeriksaController;
Route::get('/periksa', [PeriksaController::class, 'show'])->name('periksa.show'); //tampilkan
Route::get('/periksa/create', [PeriksaController::class, 'create'])->name('periksa.create'); //add
Route::post('/periksa/store', [PeriksaController::class, 'store'])->name('periksa.store');
Route::get('/periksa/{id}/edit', [PeriksaController::class, 'edit'])->name('periksa.edit'); //edit
Route::delete('/periksa/{id}', [PeriksaController::class, 'destroy'])->name('periksa.destroy'); //delete
Route::get('/periksa/{id}', [PeriksaController::class, 'view'])->name('periksa.view') ;//view

//routing kelurahan
use App\Http\Controllers\KelurahanController;
Route::get('/kelurahan', [KelurahanController::class, 'show'])->name('kelurahan.show'); //tampilkan
Route::get('/kelurahan/create', [KelurahanController::class, 'create'])->name('kelurahan.create'); //add
Route::post('/kelurahan/store', [KelurahanController::class, 'store'])->name('kelurahan.store');
Route::get('/kelurahan/{id}/edit', [KelurahanController::class, 'edit'])->name('kelurahan.edit'); //edit
Route::delete('/kelurahan/{id}', [KelurahanController::class, 'destroy'])->name('kelurahan.destroy'); //delete
Route::get('/kelurahan/{id}', [KelurahanController::class, 'view'])->name('kelurahan.view'); //view


//routing unit kerja
use App\Http\Controllers\Unit_KerjaController;
Route::get('/unit_kerja', [Unit_KerjaController::class, 'show'])->name('unit_kerja.show'); //tampilkan
Route::get('/unit_kerja/create', [Unit_KerjaController::class, 'create'])->name('unit_kerja.create'); //add
Route::post('/unit_kerja/store', [Unit_KerjaController::class, 'store'])->name('unit_kerja.store');
Route::get('/unit_kerja/{id}/edit', [Unit_KerjaController::class, 'edit'])->name('unit_kerja.edit'); //edit
Route::delete('/unit_kerja/{id}', [Unit_KerjaController::class, 'destroy'])->name('unit_kerja.destroy'); //delete
Route::get('/unit_kerja/{id}', [Unit_KerjaController::class, 'view'])->name('unit_kerja.view'); //view

//routing profile
use App\Http\Controllers\ProfileController;
Route::get('/profil', [ProfileController::class, 'show']);
?>