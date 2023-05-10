<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataSuratController;
use App\Http\Controllers\GeneralViewController;
use App\Http\Controllers\SuratPenelitianController;
use App\Http\Controllers\SuratPengabdianController;

Route::get('/signin', [GeneralViewController::class, 'signin'])->name('signin');
Route::post('/signupstore', [UserController::class, 'store'])->name('signupstore');
Route::get('/', [GeneralViewController::class, 'landing'])->name('landing');
Route::post('/autenticate', [LoginController::class, 'authenticate'])->name('autenticate');
Route::post('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => ['auth', 'level:admin']], function () {
    // === ROUTE ADMIN ===
    Route::get('/dashboard', [GeneralViewController::class, 'dashboard'])->name('dashboard');
    Route::get('/datauser', [UserController::class, 'index'])->name('datauser');
    Route::get('/datauser/detail/{id}', [UserController::class, 'show']);
    Route::get('/surattugas/penelitian', [SuratPenelitianController::class, 'indexAdmin']); //route data surat tugas penelitian
    Route::get('/suratpengesahan/penelitian', [GeneralViewController::class, 'suratPengesahanPenelitian']);
    Route::get('/surattugas/pengabdian', [SuratPengabdianController::class, 'indexAdmin']);
    Route::get('/surattugas/penelitian/detailsuratpenelitian/{id}', [SuratPenelitianController::class, 'detailpenelitian']);
    Route::post('/updatepenelitian/{id}', [SuratPenelitianController::class, 'updatePenelitian']);
    Route::get('/editdetailpenelitian/{id}', [SuratPenelitianController::class, 'showPenelitian']);
    Route::get('/surattugas/pengabdian/detailsuratpengabdian/{id}', [SuratPengabdianController::class, 'detailpengabdian']);
    Route::get('/suratpengesahan/pengabdian', [GeneralViewController::class, 'suratPengesahanPengabdian']);
    Route::delete('/destroypenelitian/{id}', [SuratPenelitianController::class, 'destroyPenelitian']);
    Route::delete('/destroypengabdian/{id}', [SuratPengabdianController::class, 'destroyPengabdian']);

    // == DATA SURAT
    Route::get('/datasurat', [DataSuratController::class, 'index'])->name('datasurat');
    Route::get('/createdatasurat', [DataSuratController::class, 'createStakeholder']);
    Route::get('/createprodi', [DataSuratController::class, 'createProdi']);
    Route::post('/updateprodi/{id}', [DataSuratController::class, 'updateProdi']);
    Route::post('/storeprodi', [DataSuratController::class, 'storeProdi']);
    Route::post('/storesemester', [DataSuratController::class, 'storeSemester']);
    Route::get('/editprodi/{id}', [DataSuratController::class, 'showProdi']);
    Route::delete('/destroyprodi/{id}', [DataSuratController::class, 'destroyProdi']);
    Route::delete('/destroysemester/{id}', [DataSuratController::class, 'destroySemester']);

    // == DATA USER
    Route::delete('/destroyuser/{id}', [UserController::class, 'destroyUser']);

    // EXPORT EXCEL
    Route::get('/surat-penelitian-export',[SuratPenelitianController::class,'suratPenelitianExport'])->name('suratPenelitianExport');
    Route::get('/surat-pengabdian-export',[SuratPengabdianController::class,'suratPengabdianExport'])->name('suratPengabdianExport');
});

// === ROUTE DOSEN ==
Route::group(['middleware' => ['auth', 'level:dosen,admin']], function () {
    // == PENELITIAN ==
    Route::get('/penelitian', [GeneralViewController::class, 'penelitian']);
    Route::get('/penelitian/arsipdosen', [SuratPenelitianController::class, 'index']);
    Route::get('/penelitian/inputpenelitian', [SuratPenelitianController::class, 'create']);
    Route::post('/storesuratpenelitian', [SuratPenelitianController::class, 'store']);
    Route::get('/surattugas/penelitian/format/{id}', [SuratPenelitianController::class, 'suratTugasPenelitianFormat']);
    Route::get('/suratpengesahan/penelitian/format/{id}', [SuratPenelitianController::class, 'suratPengesahanPenelitianFormat']);    

    // == PENGABDIAN ==
    Route::get('/pengabdian', [GeneralViewController::class, 'pengabdian']);
    Route::get('/pengabdian/inputpengabdian', [SuratPengabdianController::class, 'create']);
    Route::get('/pengabdian/arsipdosen', [SuratPengabdianController::class, 'index']);
    Route::post('/storesuratpengabdian', [SuratPengabdianController::class, 'store']);
    Route::get('/surattugas/pengabdian/format/{id}', [SuratPengabdianController::class, 'suratTugasPengabdianFormat']);
    Route::get('/suratpengesahan/pengabdian/format/{id}', [SuratPengabdianController::class, 'suratPengesahanPengabdianFormat']);
});

// == DOWNLOAD PDF ==
Route::get('/downloadsrttgspenelitiandosen/{id}', [PDFController::class, 'sTugasDPenelitianPdf']);
Route::get('/downloadsrtpgshanpenelitiandosen/{id}', [PDFController::class, 'sPengesahanDPenelitianPdf']);
Route::get('/downloadsrttgspengabdiandosen/{id}', [PDFController::class, 'sTugasDPengabdianPdf']);
Route::get('/downloadsrtpgshanpengabdiandosen/{id}', [PDFController::class, 'sPengesahanDPengabdianPdf']);


