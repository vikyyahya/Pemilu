<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PengajuanController;
use App\Http\Controllers\Admin\CalonPesertaUpkAController;
use App\Http\Controllers\Admin\CalonPesertaUpkBCController;
use App\Http\Controllers\Admin\SaranaPrasaranaController;
use App\Http\Controllers\Admin\JadwalPelajaranController;
use App\Http\Controllers\Admin\DptController;
use App\Http\Controllers\Admin\KeberatanController;
use App\Http\Controllers\Admin\EditKelengkapanController;
use App\Http\Controllers\Admin\TutorController;
use App\Http\Controllers\Admin\RabController;
use App\Http\Controllers\Admin\CalonPesertaAController;
use App\Http\Controllers\Admin\CalonPesertaBCController;
use App\Http\Controllers\Admin\PelaporanController;
use App\Http\Controllers\Admin\AjuanProposalController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::group(['middleware' => ['guest']], function (){
    //CONTROLLER HOME
    Route::get('/',[LoginController::class, 'index'])->name('home.landingPage');

    //LOGIN
    Route::get('/login',[LoginController::class, 'index'])->name('login');
    Route::post('/loginProses', [LoginController::class, 'loginProses'])->name('loginProses');

    //REGISTER
    Route::get('register',[RegisterController::class, 'index'])->name('register.index');
    Route::post('tambah',[RegisterController::class, 'store']);
});
//Detail Informasi
Route::get('/detail_informasi', [HomeController::class, 'detailInformation'])->name('home.detail_informasi');


//CONTROLLER PENGAJUAN
Route::get('/pengajuan', [PengajuanController::class, 'index'])->name('pengajuan.index');
Route::get('/pengajuan/edit', [PengajuanController::class, 'edit'])->name('pengajuan.edit');

//CONTROLLER CALON PESERTA UPK
Route::get('/calon-peserta-upk-a', [CalonPesertaUpkAController::class, 'index'])->name('upka.index');
Route::get('/calon-peserta-upk-a/create', [CalonPesertaUpkAController::class, 'create'])->name('upka.create');
Route::get('/ajuan-verifikasi-upk-a', [CalonPesertaUpkAController::class, 'ajuanVerifikasi'])->name('verifikasi.upka.index');
Route::get('/catatan-penilaian-upk-a', [CalonPesertaUpkAController::class, 'catatanPenilaian'])->name('catatan.upka.index');

Route::get('/calon-peserta-upk-b-c', [CalonPesertaUpkBCController::class, 'index'])->name('upkbc.index');
Route::get('/calon-peserta-upk-b-c/create', [CalonPesertaUpkBCController::class, 'create'])->name('upkbc.create');
Route::get('/ajuan-verifikasi-upk-b-c', [CalonPesertaUpkBCController::class, 'ajuanVerifikasi'])->name('verifikasi.upkbc.index');
Route::get('/catatan-penilaian-upk-b-c', [CalonPesertaUpkBCController::class, 'catatanPenilaian'])->name('catatan.upkbc.index');

//CONTROLLER SARANA PRASARANA
Route::get('/sarana-prasarana', [SaranaPrasaranaController::class, 'index'])->name('sarana.index');
Route::get('/sarana-prasarana/create', [SaranaPrasaranaController::class, 'create'])->name('sarana.create');

//CONTROLLER SARANA PRASARANA
Route::get('/jadwal-pelajaran', [JadwalPelajaranController::class, 'index'])->name('jadwal.index');
Route::get('/jadwal-pelajaran/create', [JadwalPelajaranController::class, 'create'])->name('jadwal.create');

//CONTROLLER TUTOR
Route::get('/tutor', [TutorController::class, 'index'])->name('tutor.index');
Route::get('/tutor/create', [TutorController::class, 'create'])->name('tutor.create');

//CONTROLLER DPT
Route::get('/dpt', [DptController::class, 'index'])->name('dpt.index');


Route::get('/editkelengkapan', [EditKelengkapanController::class, 'index'])->name('editkelengkapan.index');
Route::post('/addKelengkapan', [EditKelengkapanController::class, 'create'])->name('addKelengkapan.create');

//CONTROLLER RAB
Route::get('/rab', [RabController::class, 'index'])->name('rab.index');
Route::get('/rab/create', [RabController::class, 'create'])->name('rab.create');

//CONTROLLER CALON PESERTA
Route::get('/calon-peserta-a', [CalonPesertaAController::class, 'index'])->name('a.index');
Route::get('/calon-peserta-a/create', [CalonPesertaAController::class, 'create'])->name('a.create');
Route::get('/ajuan-proposal-a', [AjuanProposalController::class, 'index'])->name('proposal.index');

Route::get('/calon-peserta-b-c', [CalonPesertaBCController::class, 'index'])->name('bc.index');
Route::get('/calon-peserta-b-c/create', [CalonPesertaBCController::class, 'create'])->name('bc.create');
Route::get('/ajuan-verifikasi-b', [CalonPesertaUpkBCController::class, 'ajuanVerifikasi'])->name('ajuan.verifikasi.bc');
Route::get('/catatan-penilaian-b', [CalonPesertaUpkBCController::class, 'catatanPenilaian'])->name('catatan.penilaian.bc');

//PELAPORAN
Route::get('/pelaporan', [PelaporanController::class, 'index'])->name('pelaporan.index');
Route::get('/keberatan', [KeberatanController::class, 'index'])->name('keberatan.index');

Route::group(['middleware' => ['auth']], function (){
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home.dashboard');
    
    Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
});

//ROLE PKBM
Route::group(['middleware' => ['auth','pkbm:2']], function (){
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home.dashboard');

    //CONTROLLER PROFIL
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
    Route::get('/profil/profil/{id}', [ProfilController::class, 'profil'])->name('profil.profil');
    Route::get('/profil/edit/{id}', [ProfilController::class, 'edit'])->name('profil.edit');
    Route::put('/profil/update/{id}', [ProfilController::class, 'update'])->name('profil.update');

    Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
});

//ROLE PAUD
Route::group(['middleware' => ['auth','paud:3']], function (){
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home.dashboard');

    //CONTROLLER PROFIL
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
    Route::get('/profil/profil/{id}', [ProfilController::class, 'profil'])->name('profil.profil');
    Route::get('/profil/edit/{id}', [ProfilController::class, 'edit'])->name('profil.edit');
    Route::put('/profil/update/{id}', [ProfilController::class, 'update'])->name('profil.update');

    Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
});

//ROLE LKP
Route::group(['middleware' => ['auth','lkp:4']], function (){
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home.dashboard');

    //CONTROLLER PROFIL
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
    Route::get('/profil/profil/{id}', [ProfilController::class, 'profil'])->name('profil.profil');
    Route::get('/profil/edit/{id}', [ProfilController::class, 'edit'])->name('profil.edit');
    Route::put('/profil/update/{id}', [ProfilController::class, 'update'])->name('profil.update');

    Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
});
