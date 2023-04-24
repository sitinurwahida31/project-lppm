<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralViewController extends Controller
{
    public function signin()
    {
        return view('sign_in');
    }
    public function landing()
    {
        return view('.layoutdosen.landing');
    }

    // == FUNCTION UNTUK VIEW ADMIN ==
    public function dashboard()
    {
        return view('dashboard');
    }
    public function datauser()
    {
        return view('user');
    }
    public function datasurat()
    {
        return view('data_surat');
    }
    public function suratTugasPenelitian()
    {
        return view('sr_tugas_penelitian');
    }
    public function suratPengesahanPenelitian()
    {
        return view('sr_pengesahan_penelitian');
    }
    public function suratTugasPengabdian()
    {
        return view('sr_tugas_pengabdian');
    }
    public function suratPengesahanPengabdian()
    {
        return view('sr_pengesahan_pengabdian');
    }

    // == FUNCTION UNTUK VIEW DESEN ==
    // == PENELITIAN ==
    public function penelitian()
    {
        return view('layoutdosen.fitur_menu_penelitian');
    }
    public function penelitianInputPenelitian()
    {
        return view('layoutdosen.form_input_penelitian');
    }
    public function penelitianArsipDosen()
    {
        return view('layoutdosen.arsip_dosen_penelitian');
    }
    public function suratTugasPenelitianFormat()
    {
        return view('layoutdosen.format_sr-tugas_penelitian');
    }
    public function suratPengesahanPenelitianFormat()
    {
        return view('layoutdosen.format_sr-pengesahan_penelitian');
    }

    // == PENGABIDAN ==
    public function pengabdian()
    {
        return view('.layoutdosen.fitur_menu_pengabdian');
    }
    public function pengabdianInputPengabdian()
    {
        return view('.layoutdosen.form_input_pengabdian');
    }
    public function pengabdianArsipDosen()
    {
        return view('.layoutdosen.arsip_dosen_pengabdian');
    }
    public function suratTugasPengabdianFormat()
    {
        return view('layoutdosen.format_sr-tugas_pengabdian');
    }
    public function suratPengesahanPengabdianFormat()
    {
        return view('layoutdosen.format_sr-pengesahan_pengabdian');
    }
}