<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PengajuanController;
use App\Http\Controllers\Admin\CalonPesertaUpkAController;
use App\Http\Controllers\Admin\CalonPesertaUpkBCController;
use App\Http\Controllers\Admin\SaranaPrasaranaController;
use App\Http\Controllers\Admin\JadwalPelajaranController;
use App\Http\Controllers\Admin\TutorController;
use App\Http\Controllers\Admin\RabController;
use App\Http\Controllers\Admin\CalonPesertaAController;
use App\Http\Controllers\Admin\CalonPesertaBCController;
use Illuminate\Support\Facades\Route;

// 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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//CONTROLLER HOME
Route::get('/', [HomeController::class, 'index'])->name('home.index');

//CONTROLLER PENGAJUAN
Route::get('/pengajuan', [PengajuanController::class, 'index'])->name('pengajuan.index');
Route::get('/pengajuan/edit', [PengajuanController::class, 'edit'])->name('pengajuan.edit');

//CONTROLLER CALON PESERTA UPK
Route::get('/calon-peserta-upk-a', [CalonPesertaUpkAController::class, 'index'])->name('upka.index');
Route::get('/calon-peserta-upk-a/create', [CalonPesertaUpkAController::class, 'create'])->name('upka.create');
Route::get('/ajuan-verifikasi-a', [CalonPesertaUpkAController::class, 'ajuanVerifikasi'])->name('ajuan.verifikasi.a');
Route::get('/catatan-penilaian-a', [CalonPesertaUpkAController::class, 'catatanPenilaian'])->name('catatan.penilaian.a');

Route::get('/calon-peserta-upk-b-c', [CalonPesertaUpkBCController::class, 'index'])->name('upkbc.index');
Route::get('/calon-peserta-upk-b-c/create', [CalonPesertaUpkBCController::class, 'create'])->name('upkbc.create');
Route::get('/ajuan-verifikasi-b', [CalonPesertaUpkBCController::class, 'ajuanVerifikasi'])->name('ajuan.verifikasi.bc');
Route::get('/catatan-penilaian-b', [CalonPesertaUpkBCController::class, 'catatanPenilaian'])->name('catatan.penilaian.bc');

//CONTROLLER SARANA PRASARANA
Route::get('/sarana-prasarana', [SaranaPrasaranaController::class, 'index'])->name('sarana.index');
Route::get('/sarana-prasarana/create', [SaranaPrasaranaController::class, 'create'])->name('sarana.create');

//CONTROLLER SARANA PRASARANA
Route::get('/jadwal-pelajaran', [JadwalPelajaranController::class, 'index'])->name('jadwal.index');
Route::get('/jadwal-pelajaran/create', [JadwalPelajaranController::class, 'create'])->name('jadwal.create');

//CONTROLLER TUTOR
Route::get('/tutor', [TutorController::class, 'index'])->name('tutor.index');
Route::get('/tutor/create', [TutorController::class, 'create'])->name('tutor.create');

//CONTROLLER RAB
Route::get('/rab', [RabController::class, 'index'])->name('rab.index');
Route::get('/rab/create', [RabController::class, 'create'])->name('rab.create');

//CONTROLLER CALON PESERTA
Route::get('/calon-peserta-a', [CalonPesertaAController::class, 'index'])->name('a.index');
Route::get('/calon-peserta-a/create', [CalonPesertaAController::class, 'create'])->name('a.create');
Route::get('/ajuan-verifikasi-a', [CalonPesertaUpkAController::class, 'ajuanVerifikasi'])->name('ajuan.verifikasi.a');
Route::get('/catatan-penilaian-a', [CalonPesertaUpkAController::class, 'catatanPenilaian'])->name('catatan.penilaian.a');

Route::get('/calon-peserta-b-c', [CalonPesertaBCController::class, 'index'])->name('bc.index');
Route::get('/calon-peserta-b-c/create', [CalonPesertaBCController::class, 'create'])->name('bc.create');
Route::get('/ajuan-verifikasi-b', [CalonPesertaUpkBCController::class, 'ajuanVerifikasi'])->name('ajuan.verifikasi.bc');
Route::get('/catatan-penilaian-b', [CalonPesertaUpkBCController::class, 'catatanPenilaian'])->name('catatan.penilaian.bc');