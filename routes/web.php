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
use App\Http\Controllers\Backsite\TemplateController;
use App\Http\Controllers\Backsite\LowonganController as BacksiteLowonganController;

// guru controller
use App\Http\Controllers\Frontsite\Guru\ProfileGuruController;
use App\Http\Controllers\Frontsite\Guru\DashboardController as DashboardGuruController;
use App\Http\Controllers\Frontsite\Guru\MitraTerhubungController;
use App\Http\Controllers\Frontsite\Guru\MonitoringController as MonitoringGuruController;
use App\Http\Controllers\Frontsite\Guru\SiswaController as SiswaBimbinganController;
use App\Http\Controllers\Frontsite\Guru\AktivitasController;

// siswa controller
use App\Http\Controllers\Frontsite\Siswa\ProfileController as ProfileSiswaController;
use App\Http\Controllers\Frontsite\Siswa\DashboardController as DashboardSiswaController;
use App\Http\Controllers\Frontsite\Siswa\DokumenController;
use App\Http\Controllers\Frontsite\Siswa\LaporanController as LaporanSiswaController;
use App\Http\Controllers\Frontsite\Siswa\KegiatanController;
use App\Http\Controllers\Frontsite\Siswa\PengajuanMitraController as PengajuanSiswaController;
use App\Http\Controllers\Frontsite\Siswa\PendaftaranController;

// mitra controller
use App\Http\Controllers\Frontsite\Mitra\DashboardController as DashboardMitraController;
use App\Http\Controllers\Frontsite\Mitra\LaporanController as MitraLaporanController;
use App\Http\Controllers\Frontsite\Mitra\NilaiController as MitraNilaiController;
use App\Http\Controllers\Frontsite\Mitra\PendaftarController;
use App\Http\Controllers\Frontsite\Mitra\ProfileController;
use App\Http\Controllers\Frontsite\Mitra\SiswaController as SiswaBimbinganMitraController;
use App\Http\Controllers\Frontsite\Mitra\SurveyController as SurveyMitraController;
use App\Http\Controllers\Frontsite\Mitra\AktivitasController as AktivitasMitraController;;

use App\Http\Controllers\Frontsite\Mitra\LowonganController;

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
    Route::post('list_kelas', [RegisterSiswaController::class, 'list_kelas'])->name('register_siswa.list_kelas');
    Route::resource('register', RegisterController::class);
    Route::resource('register_siswa', RegisterSiswaController::class);
    Route::resource('register_guru', RegisterGuruController::class);
    Route::resource('register_mitra', RegisterMitraController::class);
});

// Backsite controller
Route::prefix('backsite')->name('backsite.')->middleware(['admin', 'auth:sanctum', 'verified', config('jetstream.auth_session')])->group(function () {

    Route::get('hasil_survey/export', [HasilSurveyController::class, 'export'])->name('hasil_survey.export');
    Route::put('lowongan/activated/{lowongan}', [BacksiteLowonganController::class, 'activated'])->name('lowongan.activated');
    Route::put('lowongan/disactivated/{lowongan}', [BacksiteLowonganController::class, 'disactivated'])->name('lowongan.disactivated');
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
    Route::resource('template', TemplateController::class);
    Route::resource('siswa', SiswaController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('mitra', MitraController::class);
    Route::resource('bimbingan', BimbinganController::class);
    Route::resource('monitoring', MonitoringController::class);
    Route::resource('pengajuan_mitra', PengajuanMitraController::class)->parameters(['pengajuan_mitra' => 'pengajuan']);
    Route::resource('pendaftar', PendaftarPklController::class);
    Route::resource('peserta', PesertaPklController::class)->parameters(['peserta' => 'peserta']);
    Route::resource('dokumen', DokumenSiswaController::class)->parameters(['dokumen' => 'dokumen']);
    Route::resource('aktivitas', AktivitasSiswaController::class)->parameters(['aktivitas' => 'aktivitas']);
    Route::resource('laporan', LaporanController::class);
    Route::resource('nilai', NilaiController::class);
    Route::resource('hasil_survey', HasilSurveyController::class);
    Route::resource('lowongan', BacksiteLowonganController::class);
});

// guru controller
Route::prefix('guru')->name('guru.')->middleware(['guru', 'auth:sanctum', 'verified', config('jetstream.auth_session')])->group(function () {

    Route::get('laporan', [SiswaBimbinganController::class, 'laporan'])->name('siswa.laporan');
    Route::get('nilai', [SiswaBimbinganController::class, 'nilai'])->name('siswa.nilai');
    Route::get('download_laporan/{siswa}', [SiswaBimbinganController::class, 'download_laporan'])->name('siswa.download_laporan');
    Route::get('download_nilai/{siswa}', [SiswaBimbinganController::class, 'download_nilai'])->name('siswa.download_nilai');


    Route::resource('profile', ProfileGuruController::class);
    Route::resource('dashboard', DashboardGuruController::class);
    Route::resource('mitra', MitraTerhubungController::class);
    Route::resource('monitoring', MonitoringGuruController::class);
    Route::resource('siswa', SiswaBimbinganController::class);
    Route::resource('aktivitas', AktivitasController::class)->parameters(['aktivitas' => 'siswa']);
});

Route::prefix('mitra')->name('mitra.')->middleware(['mitra', 'auth:sanctum', 'verified', config('jetstream.auth_session')])->group(function () {

    Route::get('laporan/download/{siswa}', [MitraLaporanController::class, 'download'])->name('laporan.download');
    Route::get('nilai/download_template', [MitraNilaiController::class, 'download_template'])->name('nilai.download_template');
    Route::put('aktivitas/tolak/{id}', [AktivitasMitraController::class, 'tolak'])->name('aktivitas.tolak');
    Route::put('lowongan/activated/{lowongan}', [LowonganController::class, 'activated'])->name('lowongan.activated');
    Route::put('lowongan/disactivated/{lowongan}', [LowonganController::class, 'disactivated'])->name('lowongan.disactivated');

    Route::resource('dashboard', DashboardMitraController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('lowongan', LowonganController::class);
    Route::resource('pendaftar', PendaftarController::class);
    Route::resource('survey', SurveyMitraController::class);
    Route::resource('siswa', SiswaBimbinganMitraController::class);
    Route::resource('aktivitas', AktivitasMitraController::class)->parameters(['aktivitas' => 'siswa']);
    Route::resource('laporan', MitraLaporanController::class);
    Route::resource('nilai', MitraNilaiController::class)->parameters(['nilai' => 'siswa']);
});

// siswa controller
Route::prefix('siswa')->name('siswa.')->middleware(['siswa', 'auth:sanctum', 'verified', config('jetstream.auth_session')])->group(function () {

    Route::get('pendaftaran/cari_lowongan', [PendaftaranController::class, 'cari_lowongan'])->name('pendaftaran.cari_lowongan');
    Route::post('list_kelas', [ProfileSiswaController::class, 'list_kelas'])->name('profile.list_kelas');
    Route::resource('dashboard', DashboardSiswaController::class);
    Route::resource('pendaftaran', PendaftaranController::class);
    Route::resource('kegiatan', KegiatanController::class);
    Route::resource('dokumen', DokumenController::class);
    Route::resource('profile', ProfileSiswaController::class);
    Route::resource('laporan', LaporanSiswaController::class);
    Route::resource('pengajuan', PengajuanSiswaController::class);
});
