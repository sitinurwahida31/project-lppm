<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Semester;
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
    public function index(Request $request)
    {
        $stakeholder = DB::table('tb_stakeholder')->get();

        $prodi = DB::table('tb_prodi')
        ->join('tb_fakultas', 'tb_fakultas.id', '=', 'tb_prodi.fakultas')
        ->select(
            'tb_prodi.id',
            'nama_prodi',
            'ketua_prodi',
            'nomor_induk_kaprodi',
            'nama_fakultas'
        );
        $s = $request->search;
        if ($s) {
            $prodi =  $prodi->where(function ($query) use ($s) {
                $query->where('nama_prodi', 'LIKE', '%' . $s . '%')
                    ->orWhere('fakultas', 'LIKE', '%' . $s . '%')
                    ->orWhere('nomor_induk_kaprodi', 'LIKE', '%' . $s . '%')
                    ->orWhere('ketua_prodi', 'LIKE', '%' . $s . '%');
            });
        }
        $fakultas = DB::table('tb_fakultas')->where('status', '!=', 'Delete')->orWhere('status', null)->get();
        $semester = DB::table('tb_semester')->select(
            'id',
            'tahun_semester',
            'nomor_semester',
        )->get();
        // dd($fakultas);
        return view('datasurat.data_surat', [
            'stakeholder' => $stakeholder,
            'fakultas' => $fakultas,
            'semester' => $semester,
            'prodi' => $prodi->paginate(10)
        ]);
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
        $fakultas = DB::table('tb_fakultas')->select('id', 'nama_fakultas')->get();
        return view('datasurat.createprodi', [
            'prodi' => "",
            'fakultas' => $fakultas,
        ]);
    }

    public function createFakultas()
    {
        $fakultas = Fakultas::where('id', 1)->first();
        return view('datasurat.createfakultas', compact('fakultas'));
    }

    public function storeFakultas(Request $request)
    {
        $request->validate([
            'namafakultas' => 'required',
            'nama_dekan' => 'required',
            'nidn_dekan' => 'required|numeric',
        ]);

        $fakultas = [
            'nama_fakultas' => request()->namafakultas,
            'nama_dekan' => request()->nama_dekan,
            'nomor_induk_dekan' => request()->nidn_dekan,
        ];
        // dd($fakultas);
        Fakultas::create($fakultas);
        return redirect('/datasurat');
    }
    
    public function storeProdi(Request $request)
    {
        $request->validate([
            'fakultas' => 'required',
            'nama_prodi' => 'required',
            'ketua_prodi' => 'required',
            'nomor_induk_kaprodi' => 'required',
        ]);
        // dd($request->all());
        $prodi = [
            'nama_prodi' => $request->nama_prodi,
            'fakultas' => $request->fakultas,
            'ketua_prodi' => $request->ketua_prodi,
            'nomor_induk_kaprodi' => $request->nomor_induk_kaprodi,
        ];
        ProgramStudi::create($prodi);
        return redirect('/datasurat');
    }
    public function storeSemester(Request $request)
    {
        $request->validate([
            'tahun_semester' => 'required',
            'nomor_semester' => 'required',
        ]);
        // dd($request->all());
        Semester::create($request->all());
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
        $fakultas = DB::table('tb_fakultas')->select('id', 'nama_fakultas')->get();
        // dd($prodi);
        return view('datasurat.createprodi', [
            'prodi' => $prodi,
            'fakultas' => $fakultas,
        ]);
    }
    public function showKetuaLppm($id)
    {
        $ketualppm = Stakeholder::where('id', $id)->first();
        // dd($ketualppm);
        return view('datasurat.editketualppm', [
            'ketualppm' => $ketualppm,
        ]);
    }

    public function showFakultas($id)
    {
        $fakultas = Fakultas::where('id', $id)->first();
        // dd($fakultas);
        return view('datasurat.editfakultas', [
            'fakultas' => $fakultas,
        ]);
    }

    public function updateFakultas(Request $request, $id)
    {
        $request->validate([
            'namafakultas' => 'required',
            'nama_dekan' => 'required',
            'nidn_dekan' => 'required|numeric',
        ]);

        $fakultas = [
            'nama_fakultas' => request()->namafakultas,
            'nama_dekan' => request()->nama_dekan,
            'nomor_induk_dekan' => request()->nidn_dekan,
        ];
        // dd($fakultas);
        Fakultas::where('id', $id)->update($fakultas);
        return redirect('/datasurat');
    }

    public function updateLppm(Request $request, $id)
    {
        $request->validate([
            'namaketualppm' => 'required',
            'jabatan' => 'required',
            'nidn_ketua_lppm' => 'required|numeric',
        ]);
        
        $ketualppm = [
            'nama' => request()->namaketualppm,
            'jabatan' => request()->jabatan,
            'nomor_induk' => request()->nidn_ketua_lppm,
        ];
        // dd($ketualppm);
        Stakeholder::where('id', $id)->update($ketualppm);
        return redirect('/datasurat');
    }

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

    public function destroyFakultas($id)    
    {
        Fakultas::where('id', $id)->update([
            'status' => 'Delete'
        ]);
        return redirect('/datasurat');
    }
    public function destroyProdi($id)
    {
        ProgramStudi::where('id', $id)->delete();
        return redirect('/datasurat');
    }
    public function destroySemester($id)
    {
        Semester::where('id', $id)->delete();
        return redirect('/datasurat');
    }
}
