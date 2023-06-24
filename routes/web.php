<?php

use Illuminate\Support\Facades\Route;
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
use App\Http\Controllers\Backsite\DokumenSiswaController;
use App\Http\Controllers\Backsite\PendaftarPklController;
use App\Http\Controllers\Backsite\AktivitasSiswaController;
use App\Http\Controllers\Backsite\PengajuanMitraController;
use App\Http\Controllers\Frontsite\Siswa\DashboardController as DashboardSiswaController;

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


// Backsite controller
Route::prefix('backsite')->name('backsite.')->middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::put('periode/activated/{periode}', [PeriodePklController::class, 'activated'])->name('periode.activated');
    Route::put('periode/disactivated/{periode}', [PeriodePklController::class, 'disactivated'])->name('periode.disactivated');

    // resource routes
    Route::resource('dashboard', DashboardController::class);
    Route::resource('survey', SurveyController::class);
    Route::resource('periode', PeriodePklController::class);
    Route::resource('bidang_usaha', BidangUsahaController::class);
    Route::resource('jurusan', JurusanController::class);

    // Route::get('kelas/{kelas}/edit ', [KelasController::class, 'edit'])->name('kelas.edit');
    // Route::put('kelas/update/{kelas}', [KelasController::class, 'update'])->name('kelas.update');
    // Route::delete('kelas/destroy/{kelas}', [KelasController::class, 'destroy'])->name('kelas.destroy');
    Route::resource('kelas', KelasController::class)->parameters(['kelas' => 'kelas']);
    // Route::get('kelas/index', [KelasController::class, 'index'])->name('backsite.kelas.index');
    // Route::post('kelas/store', [KelasController::class, 'store'])->name('backsite.kelas.store');
    // Route::get('kelas/create', [KelasController::class, 'create'])->name('backsite.kelas.create');
    // Route::get('kelas/show/{kelas}', [KelasController::class, 'show'])->name('backsite.kelas.show');

    Route::resource('siswa', SiswaController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('mitra', MitraController::class);
    Route::resource('bimbingan', BimbinganController::class);
    Route::resource('monitoring', MonitoringController::class);
    Route::resource('pengajuan_mitra', PengajuanMitraController::class);
    Route::resource('pendaftar', PendaftarPklController::class);
    Route::resource('peserta', PesertaPklController::class);
    Route::resource('dokumen', DokumenSiswaController::class);
    Route::resource('aktivitas', AktivitasSiswaController::class);
    Route::resource('laporan', LaporanController::class);
    Route::resource('nilai', NilaiController::class);
    Route::resource('hasil_survey', HasilSurveyController::class);
});
// Backsite controller
Route::prefix('siswa')->name('siswa.')->middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('dashboard', DashboardSiswaController::class);
});





// Route::get('/', function () {
//     return view('pages.frontsite.landing.index');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
