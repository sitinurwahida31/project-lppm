<?php

use Illuminate\Support\Facades\Route;
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

Route::group(['middleware' => ['auth', 'level:dosen,admin']], function () {
    // === ROUTE ADMIN ===
    Route::get('/dashboard', [GeneralViewController::class, 'dashboard'])->name('dashboard');
    Route::get('/datauser', [GeneralViewController::class, 'datauser'])->name('datauser');
    Route::get('/surattugas/penelitian', [GeneralViewController::class, 'suratTugasPenelitian']);
    Route::get('/suratpengesahan/penelitian', [GeneralViewController::class, 'suratPengesahanPenelitian']);
    Route::get('/surattugas/pengabdian', [GeneralViewController::class, 'suratTugasPengabdian']);
    Route::get('/suratpengesahan/pengabdian', [GeneralViewController::class, 'suratPengesahanPengabdian']);

    // == DATA SURAT
    Route::get('/datasurat', [DataSuratController::class, 'index'])->name('datasurat');
    Route::get('/createdatasurat', [DataSuratController::class, 'createStakeholder']);
    Route::get('/createprodi', [DataSuratController::class, 'createProdi']);
    Route::post('/updateprodi/{id}', [DataSuratController::class, 'updateProdi']);
    Route::post('/storeprodi', [DataSuratController::class, 'storeProdi']);
    Route::get('/editprodi/{id}', [DataSuratController::class, 'showProdi']);
    Route::delete('/destroyprodi/{id}', [DataSuratController::class, 'destroyProdi']);
});

// === ROUTE DOSEN ==
Route::group(['middleware' => ['auth', 'level:dosen,admin']], function () {
    // == PENELITIAN ==
    Route::get('/penelitian', [GeneralViewController::class, 'penelitian']);
    Route::get('/penelitian/arsipdosen', [SuratPenelitianController::class, 'index']);
    Route::get('/penelitian/inputpenelitian', [SuratPenelitianController::class, 'create']);
    Route::post('/storesuratpenelitian', [SuratPenelitianController::class, 'store']);
    Route::get('/surattugas/penelitian/format', [GeneralViewController::class, 'suratTugasPenelitianFormat']);
    Route::get('/suratpengesahan/penelitian/format', [GeneralViewController::class, 'suratPengesahanPenelitianFormat']);
    
    // == PENGABDIAN ==
    Route::get('/pengabdian', [GeneralViewController::class, 'pengabdian']);
    Route::get('/pengabdian/inputpengabdian', [GeneralViewController::class, 'pengabdianInputPengabdian']);
    Route::get('/pengabdian/arsipdosen', [GeneralViewController::class, 'pengabdianArsipDosen']);
    Route::get('/surattugas/pengabdian/format', [GeneralViewController::class, 'suratTugasPengabdianFormat']);
    Route::get('/suratpengesahan/pengabdian/format', [GeneralViewController::class, 'suratPengesahanPengabdianFormat']);
});
