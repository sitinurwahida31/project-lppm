<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/signin', function () {
    return view('sign_in');
});
// route layout
Route::get('/sidebar', function () {
    return view('.layout.sidebar');
});
Route::get('/nav', function () {
    return view('.layout.navbar');
});
Route::get('/navbar', function () {
    return view('.layout.navbar_user');
});
Route::get('/footer', function () {
    return view('.layout.footer');
});
Route::get('/login', function () {
    return view('.layout.login');
});


// route akses admin
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/data_surat', function () {
    return view('data_surat');
});
Route::get('/tugas-penelitian', function () {
    return view('sr_tugas_penelitian');
});
Route::get('/pengesahan-penelitian', function () {
    return view('sr_pengesahan_penelitian');
});
Route::get('/pengabdian1', function () {
    return view('sr_tugas_pengabdian');
});
Route::get('/pengabdian2', function () {
    return view('sr_pengesahan_pengabdian');
});

// route akses dosen
Route::get('/landingpage', function () {
    return view('.layoutdosen.landing_page');
});
Route::get('/landing', function () {
    return view('.layoutdosen.landing');
});
Route::get('/ardospenelitian', function () {
    return view('.layoutdosen.arsip_dosen_penelitian');
});
Route::get('/ardospengabdian', function () {
    return view('.layoutdosen.arsip_dosen_pengabdian');
});
Route::get('/fitmepenelitian', function () {
    return view('.layoutdosen.fitur_menu_penelitian');
});
Route::get('/fitmepengabdian', function () {
    return view('.layoutdosen.fitur_menu_pengabdian');
});
Route::get('/inputpenelitian', function () {
    return view('.layoutdosen.form_input_penelitian');
});
Route::get('/inputpengabdian', function () {
    return view('.layoutdosen.form_input_pengabdian');
});
Route::get('/tugaspenelitian', function () {
    return view('.layoutdosen.format_sr-tugas_penelitian');
});
Route::get('/tugaspengabdian', function () {
    return view('.layoutdosen.format_sr-tugas_pengabdian');
});
Route::get('/pengesahanpenelitian', function () {
    return view('.layoutdosen.format_sr-pengesahan_penelitian');
});
Route::get('/pengesahanpengabdian', function () {
    return view('.layoutdosen.format_sr-pengesahan_pengabdian');
});


// asset
Route::get('/breadcrumb', function () {
    return view('.layoutadmin.breadcrumb');
});


//Route Wpu
Route::get('/wpu1', function () {
    return view('.WPU.welcome');
});
Route::get('/sesi6', function () {
    return view('.wpu.sesi6');
});
Route::get('/sesi8', function () {
    return view('.wpu.sesi8');
});
Route::get('/sesi9', function () {
    return view('.wpu.sesi9');
});
Route::get('/sesi10', function () {
    return view('.wpu.sesi10');
});
Route::get('/sesi11', function () {
    return view('.wpu.sesi11');
});


