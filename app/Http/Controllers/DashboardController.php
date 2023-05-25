<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Surat;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $penelitian = count(Surat::where('jenis_surat', 'penelitian')->get());
        $pengabdian = count(Surat::where('jenis_surat', 'pengabdian')->get());
        $user = count(User::where('level', '!=', 'admin')->orWhere('level', null)->get());
        // dd($pengabdian);
        return view('generalview.dashboard', [
            'penelitian' => $penelitian,
            'pengabdian' => $pengabdian,
            'user' => $user,
        ]);
    }
}
