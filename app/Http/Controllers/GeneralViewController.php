<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeneralViewController extends Controller
{
    public function signin()
    {
        return view('generalview.signin');
    }
    public function signup()
    {
        return view('sign_in');
    }
    public function landing()
    {
        return view('layoutdosen.landing');
    }

    // == FUNCTION UNTUK VIEW ADMIN ==
    public function dashboard()
    {
        return view('dashboard');
    }    
    public function suratTugasPenelitian()
    {
        return view('sr_tugas_penelitian');
    }
    public function suratPengesahanPenelitian()
    {
        return view('sr_pengesahan_penelitian');
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
    public function suratPengesahanPengabdianFormat()
    {
        return view('layoutdosen.format_sr-pengesahan_pengabdian');
    }

}
