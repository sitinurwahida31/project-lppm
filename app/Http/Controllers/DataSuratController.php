<?php

namespace App\Http\Controllers;

use App\Models\Stakeholder;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stakeholder = DB::table('tb_stakeholder')->get();
        $prodi = DB::table('tb_prodi')->get();
        // dd($stakeholder);
        return view('datasurat.data_surat', compact('stakeholder', 'prodi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStakeholder()
    {
        return view('datasurat.createstakeholder');
    }
    public function createProdi()
    {
        return view('datasurat.createprodi', [
            'prodi' => ""
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeProdi(Request $request)
    {
        $request->validate([
            'fakultas' => 'required',
            'nama_prodi' => 'required',
            'ketua_prodi' => 'required',
            'nomor_induk_kaprodi' => 'required',
        ]);
        // dd($request->all());
        ProgramStudi::create($request->all());
        return redirect('/datasurat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProdi($id)
    {
        $prodi = ProgramStudi::where('id', $id)->first();
        return view('datasurat.createprodi', [
            'prodi' => $prodi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProdi(Request $request, $id)
    {
        $data = $request->validate([
            'fakultas' => 'required',
            'nama_prodi' => 'required',
            'ketua_prodi' => 'required',
            'nomor_induk_kaprodi' => 'required',
        ]);
        $data = ProgramStudi::where('id', $id)->update($data);
        // dd($request->all(), $data);
        return redirect('/datasurat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyProdi($id)
    {
        ProgramStudi::where('id', $id)->delete();
        return redirect('/datasurat');
    }
}