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
    public function landing()
    {
        return view('layoutdosen.landing');
    }

    // == FUNCTION UNTUK VIEW ADMIN ==
    public function dashboard()
    {
        return view('generalview.dashboard');
    }
    public function suratTugasPenelitian()
    {
        return view('penelitian.sr_tugas_penelitian');
    }
    public function suratPengesahanPenelitian()
    {
        return view('penelitian.sr_pengesahan_penelitian');
    }
    public function suratPengesahanPengabdian()
    {
        return view('pengabdian.sr_pengesahan_pengabdian');
    }

    // == FUNCTION UNTUK VIEW DESEN ==
    public function penelitian()
    {
        return view('layoutdosen.fitur_menu_penelitian');
    }
    public function pengabdian()
    {
        return view('layoutdosen.fitur_menu_pengabdian');
    }
}
