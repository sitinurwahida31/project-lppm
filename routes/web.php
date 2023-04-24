<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralViewController;

Route::get('/signin', [GeneralViewController::class, 'signin'])->name('signin');
Route::get('/', [GeneralViewController::class, 'landing'])->name('landing');

// === ROUTE ADMIN ===
Route::get('/dashboard', [GeneralViewController::class, 'dashboard'])->name('dashboard');
Route::get('/datauser', [GeneralViewController::class, 'datauser'])->name('datauser');
Route::get('/datasurat', [GeneralViewController::class, 'datasurat'])->name('datasurat');
Route::get('/surattugas/penelitian', [GeneralViewController::class, 'suratTugasPenelitian']);
Route::get('/suratpengesahan/penelitian', [GeneralViewController::class, 'suratPengesahanPenelitian']);
Route::get('/surattugas/pengabdian', [GeneralViewController::class, 'suratTugasPengabdian']);
Route::get('/suratpengesahan/pengabdian', [GeneralViewController::class, 'suratPengesahanPengabdian']);

// === ROUTE DOSEN ==
// == PENELITIAN ==
Route::get('/penelitian', [GeneralViewController::class, 'penelitian']);
Route::get('/penelitian/inputpenelitian', [GeneralViewController::class, 'penelitianInputPenelitian']);
Route::get('/penelitian/arsipdosen', [GeneralViewController::class, 'penelitianArsipDosen']);
Route::get('/surattugas/penelitian/format', [GeneralViewController::class, 'suratTugasPenelitianFormat']);
Route::get('/suratpengesahan/penelitian/format', [GeneralViewController::class, 'suratPengesahanPenelitianFormat']);

// == PENGABDIAN ==
Route::get('/pengabdian', [GeneralViewController::class, 'pengabdian']);
Route::get('/pengabdian/inputpengabdian', [GeneralViewController::class, 'pengabdianInputPengabdian']);
Route::get('/pengabdian/arsipdosen', [GeneralViewController::class, 'pengabdianArsipDosen']);
Route::get('/surattugas/pengabdian/format', [GeneralViewController::class, 'suratTugasPengabdianFormat']);
Route::get('/suratpengesahan/pengabdian/format', [GeneralViewController::class, 'suratPengesahanPengabdianFormat']);