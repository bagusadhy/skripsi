<?php

use Illuminate\Support\Facades\Route;

// backsite controller
use App\Http\Controllers\Backsite\GuruController;
use App\Http\Controllers\Backsite\KelasController;
use App\Http\Controllers\Backsite\MitraController;
use App\Http\Controllers\Backsite\NilaiController;
use App\Http\Controllers\Backsite\SiswaController;
use App\Http\Controllers\Backsite\SurveyController;
use App\Http\Controllers\Backsite\JurusanController;
use App\Http\Controllers\Backsite\LaporanController;
use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Backsite\BimbinganController;
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\MonitoringController;
use App\Http\Controllers\Backsite\PeriodePklController;
use App\Http\Controllers\Backsite\PesertaPklController;
use App\Http\Controllers\Backsite\BidangUsahaController;
use App\Http\Controllers\Backsite\HasilSurveyController;
use App\Http\Controllers\Backsite\PendaftarPklController;
use App\Http\Controllers\Backsite\AktivitasSiswaController;
use App\Http\Controllers\Backsite\PengajuanMitraController;
use App\Http\Controllers\Backsite\DokumenSiswaController;

// guru controller
use App\Http\Controllers\Frontsite\Guru\ProfileGuruController;
use App\Http\Controllers\Frontsite\Guru\DashboardController as DashboardGuruController;
use App\Http\Controllers\Frontsite\Guru\MitraTerhubungController;
use App\Http\Controllers\Frontsite\Guru\MonitoringController as MonitoringGuruController;
use App\Http\Controllers\Frontsite\Guru\SiswaController as SiswaBimbinganController;

// siswa controller
use App\Http\Controllers\Frontsite\Siswa\DashboardController as DashboardSiswaController;


// auth controller
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\RegisterGuruController;
use App\Http\Controllers\Auth\RegisterMitraController;
use App\Http\Controllers\Auth\RegisterSiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// landing page controller
Route::resource('/', LandingController::class);

Route::prefix('auth')->name('auth.')->middleware(['guest'])->group(function () {
    Route::resource('register', RegisterController::class);
    Route::resource('register_siswa', RegisterSiswaController::class);
    Route::resource('register_guru', RegisterGuruController::class);
    Route::resource('register_mitra', RegisterMitraController::class);
});

// Backsite controller
Route::prefix('backsite')->name('backsite.')->middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::put('periode/activated/{periode}', [PeriodePklController::class, 'activated'])->name('periode.activated');
    Route::put('periode/disactivated/{periode}', [PeriodePklController::class, 'disactivated'])->name('periode.disactivated');

    Route::post('pengajuan_mitra/terima/{pengajuan_mitra}', [PengajuanMitraController::class, 'terima'])->name('pengajuan_mitra.terima');

    // resource routes
    Route::resource('dashboard', DashboardController::class);
    Route::resource('survey', SurveyController::class);
    Route::resource('periode', PeriodePklController::class);
    Route::resource('bidang_usaha', BidangUsahaController::class);
    Route::resource('jurusan', JurusanController::class);
    Route::resource('kelas', KelasController::class)->parameters(['kelas' => 'kelas']);
    Route::resource('siswa', SiswaController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('mitra', MitraController::class);
    Route::resource('bimbingan', BimbinganController::class);
    Route::resource('monitoring', MonitoringController::class);
    Route::resource('pengajuan_mitra', PengajuanMitraController::class);
    Route::resource('pendaftar', PendaftarPklController::class);
    Route::resource('peserta', PesertaPklController::class)->parameters(['peserta' => 'peserta']);
    Route::resource('dokumen', DokumenSiswaController::class)->parameters(['dokumen' => 'dokumen']);
    Route::resource('aktivitas', AktivitasSiswaController::class)->parameters(['aktivitas' => 'aktivitas']);
    Route::resource('laporan', LaporanController::class);
    Route::resource('nilai', NilaiController::class);
    Route::resource('hasil_survey', HasilSurveyController::class);
});

// guru controller
Route::prefix('guru')->name('guru.')->middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('siswa/aktivitas', [SiswaBimbinganController::class, 'aktivitas'])->name('siswa.aktivitas');
    Route::get('siswa/laporan', [SiswaBimbinganController::class, 'laporan'])->name('siswa.laporan');
    Route::get('siswa/nilai', [SiswaBimbinganController::class, 'nilai'])->name('siswa.nilai');


    Route::resource('profile', ProfileGuruController::class);
    Route::resource('dashboard', DashboardGuruController::class);
    Route::resource('mitra', MitraTerhubungController::class);
    Route::resource('monitoring', MonitoringGuruController::class);
    Route::resource('siswa', SiswaBimbinganController::class);
});


// siswa controller
Route::prefix('siswa')->name('siswa.')->middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('dashboard', DashboardSiswaController::class);
});







// Route::get('/', function () {
//     return view('pages.frontsite.landing.index');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
