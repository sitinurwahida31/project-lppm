<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\KetuaTim;
use App\Models\AnggotaTim;
use App\Models\SuratDetail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\AnggotaMahasiswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SuratPenelitianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datas = DB::table('tb_surat')
        ->where('jenis_surat', 'penelitian')
        ->where('user_create', Auth::user()->id);

        
        $s = $request->search;

        if ($s) {
            $datas =  $datas->where(function ($query) use ($s) {
                $query->where('judul_surat', 'LIKE', '%' . $s . '%')
                    ->orWhere('nomor_surat', 'LIKE', '%' . $s . '%')
                    ->orWhere('semester', 'LIKE', '%' . $s . '%');
            });
        }
        // dd($datas);
        return view('layoutdosen.arsip_dosen_penelitian', [
            'datas' => $datas->paginate(10),
        ]);
    }
    public function indexAdmin(Request $request)
    {
        $datas = DB::table('tb_surat')
        ->join('tb_ketua_tim', 'tb_ketua_tim.id', '=', 'tb_surat.id_ketua' )
        ->join('tb_detail_surat', 'tb_detail_surat.id', '=', 'tb_surat.id_detail_surat' )
        ->where('jenis_surat', 'penelitian') 
        ->select(
            'tb_surat.id',
            'nomor_surat',
            'judul_surat',
            'mitra',
            'nama as nama_ketua',
            'nomor_induk as nidn'
        ); 
        $s = $request->search;

        if ($s) {
            $datas =  $datas->where(function ($query) use ($s) {
                $query->where('judul_surat', 'LIKE', '%' . $s . '%')
                    ->orWhere('nomor_surat', 'LIKE', '%' . $s . '%')
                    ->orWhere('mitra', 'LIKE', '%' . $s . '%')
                    ->orWhere('nama', 'LIKE', '%' . $s . '%')
                    ->orWhere('nomor_induk', 'LIKE', '%' . $s . '%');
            });
        }
        // dd($datas->get());
        return view('sr_tugas_penelitian', [
            'datas' => $datas->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layoutdosen.form_input_penelitian');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jangka_waktu' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'sumberdana' => 'required',
            'mitra' => 'required',
            'biaya_penelitian' => 'required',
            'terbilang' => 'required',
            'jarak_lokasi_mitra' => 'required',
            'produk' => 'required',
            'publikasi_ilmiah' => 'required',

            'nama_ketua' => 'required',
            'nomor_induk_ketua' => 'required',
            'prodi_ketua' => 'required',
            'jabatan_fungsional' => 'required',
            'email' => 'required',
            'telepon' => 'required|numeric',

            'judul_penelitian' => 'required',
            'semester' => 'required',
            'nomor_surat' => 'required',
            'nama_anggota1' => 'required',
            'nomor_induk_anggota1' => 'required',
        ]);
        
        // == CREATE DATA IN SURAT PENELITIAN DETAIL==
        $requestDetailSuratPenelitian = [
            'jangka_waktu' => $request->jangka_waktu,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'sumber_dana' => $request->sumberdana,
            'mitra' => $request->mitra,
            'biaya_penelitian_pengabdian' => $request->biaya_penelitian,
            'terbilang' => $request->terbilang,
            'jarak_lokasi_mitra' => $request->jarak_lokasi_mitra,
            'produk' => $request->produk,
            'publikasi_ilmiah' => $request->publikasi_ilmiah,
            'user_create' => Auth::user()->id 
        ];
        $detailSurat = SuratDetail::create($requestDetailSuratPenelitian);

        // == CREATE DATA IN KETUA TIM==
        $requestKetuaTim = [
            'nama' => $request->nama_ketua,
            'nomor_induk' => $request->nomor_induk_ketua,
            'prodi' => $request->prodi_ketua,
            'jabatan_fungsional' => $request->jabatan_fungsional,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'user_create' => Auth::user()->id
        ];
        $ketuaTim = KetuaTim::create($requestKetuaTim);

        // == CREATE DATA IN SURAT PENELITIAN ==
        $requestSuratPenelitian = [
            'judul_surat' => $request->judul_penelitian,
            'nomor_surat' => $request->nomor_surat,
            'semester' => $request->semester,
            'id_detail_surat' => $detailSurat->id,
            'id_ketua' => $ketuaTim->id,
            'jenis_surat' => 'penelitian',
            'status' => 'terbuat',
            'user_create' => Auth::user()->id
        ];

        $suratPenelitian = Surat::create($requestSuratPenelitian);

        if($request->nama_anggota1 && $request->nomor_induk_anggota1){
            AnggotaTim::create([
                'nama' => $request->nama_anggota1,
                'id_surat' => $suratPenelitian->id,
                'nomor_induk' => $request->nomor_induk_anggota1,
                'user_create' => Auth::user()->id
            ]);
        }
        if($request->nama_anggota2 && $request->nomor_induk_anggota2){
            AnggotaTim::create([
                'nama' => $request->nama_anggota2,
                'id_surat' => $suratPenelitian->id,
                'nomor_induk' => $request->nomor_induk_anggota2,
                'user_create' => Auth::user()->id
            ]);
        }
        if($request->nama_anggota3 && $request->nomor_induk_anggota3){
            AnggotaTim::create([
                'nama' => $request->nama_anggota3,
                'id_surat' => $suratPenelitian->id,
                'nomor_induk' => $request->nomor_induk_anggota3,
                'user_create' => Auth::user()->id
            ]);
        }
        if($request->nama_anggota4 && $request->nomor_induk_anggota4){
            AnggotaTim::create([
                'nama' => $request->nama_anggota4,
                'id_surat' => $suratPenelitian->id,
                'nomor_induk' => $request->nomor_induk_anggota4,
                'user_create' => Auth::user()->id
            ]);
        }
        
        if($request->nama_mahasiswa1 && $request->nim_mahasiswa1){
            AnggotaMahasiswa::create([
                'nama' => $request->nama_mahasiswa1,
                'id_surat_penelitian' => $suratPenelitian->id,
                'nim' => $request->nim_mahasiswa1,
                'user_create' => Auth::user()->id
            ]);
        }
        if($request->nama_mahasiswa2 && $request->nim_mahasiswa2){
            AnggotaMahasiswa::create([
                'nama' => $request->nama_mahasiswa2,
                'id_surat_penelitian' => $suratPenelitian->id,
                'nim' => $request->nim_mahasiswa2,
                'user_create' => Auth::user()->id
            ]);
        }

        // return dd([
        //     'dataSurat' => $suratPenelitian,
        //     'detailSurat' => $detailSurat,
        //     'ketuaTim' => $ketuaTim,
        // ]);
        // dd('berhasil');
        return redirect('/penelitian/inputpenelitian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Surat  $Surat
     * @return \Illuminate\Http\Response
     */
    public function show(Surat $Surat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surat  $Surat
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Surat $Surat)
    {
        //
    }

    public function editAdmin($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Surat  $Surat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surat $Surat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surat  $Surat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surat $Surat)
    {
        //
    }
    
    public function suratTugasPenelitianFormat($id)
    {
        $ketualppm = DB::table('tb_stakeholder')
        ->where('jabatan', 'Ketua LPPM')
        ->select(
            'nama as nama_lppm',
            'nomor_induk as nidn_lppm',
            'jabatan as jabatan_lppm'
        )
        ->first();

        $surat = DB::table('tb_surat')
        ->join('tb_ketua_tim', 'tb_ketua_tim.id', '=', 'tb_surat.id_ketua' )
        ->join('tb_detail_surat', 'tb_detail_surat.id', '=', 'tb_surat.id_detail_surat' )
        ->where('tb_surat.id', $id)
        ->where('jenis_surat', 'penelitian')
        ->select(
            'tb_surat.id',
            'nomor_surat',
            'judul_surat',
            'jangka_waktu',
            'tanggal_mulai',
            'tanggal_selesai',
            'tb_surat.created_at',
            'mitra',
            'nama as nama_ketua',
            'nomor_induk as nidn'
        )
        ->first();
	
        $surat->tanggal_mulai = Carbon::createFromFormat('Y-m-d', $surat->tanggal_mulai)->format('d F Y');
        $surat->tanggal_selesai = Carbon::createFromFormat('Y-m-d', $surat->tanggal_selesai)->format('d F Y');
        $surat->created_at = Carbon::createFromFormat('Y-m-d H:i:s', $surat->created_at)->format('d F Y');
        // 23 January 2022
        
        $anggota = Db::table('tb_anggota_tim')
        ->where('id_surat', $id)
        ->select(
            'nama as nama_anggota',
            'nomor_induk as nomor_induk_anggota',
        )
        ->get();

        $countAnggota = count($anggota)+1;
        // dd($countAnggota, $surat, $ketualppm, $anggota); 
        return view('layoutdosen.format_sr-tugas_penelitian', [
            'surat' => $surat,
            'ketualppm' => $ketualppm,
            'anggota' => $anggota,
            'countAnggota' => $countAnggota,
        ]);
    }

    public function detailpenelitian($id) 
    {
        // $data = Surat::where('id',$id)->first();

        $surat = Surat::where('tb_surat.id',$id)
        ->rightJoin('tb_detail_surat', 'tb_detail_surat.id', '=', 'tb_surat.id_detail_surat' )
        ->join('tb_ketua_tim', 'tb_ketua_tim.id', '=', 'tb_surat.id_ketua' )
        ->join('tb_prodi', 'tb_prodi.id', '=', 'tb_ketua_tim.prodi' )
        ->join('tb_fakultas', 'tb_fakultas.id', '=', 'tb_prodi.fakultas' )
        ->select(
            'tb_surat.id',
            'judul_surat',
            'nomor_surat',
            'semester',
            'jenis_surat',
            'status',
            'id_detail_surat',
            'id_ketua',
            'tb_surat.user_create',
            'tb_surat.created_at',
            'nama as nama_ketua ',
            'nomor_induk',
            'prodi',
            'jabatan_fungsional',
            'email',
            'telepon',
            'nama_prodi',
            'fakultas',
            'ketua_prodi',
            'nomor_induk_kaprodi',
            'nama_fakultas',
            'nama_dekan',
            'nomor_induk_dekan',
            'jangka_waktu',
            'tanggal_mulai',
            'tanggal_selesai',
            'sumber_dana',
            'mitra',
            'biaya_penelitian',
            'terbilang',
            'jarak_lokasi_mitra',
            'produk',
            'publikasi_ilmiah',
        )
        ->first(); 
        // dd($surat); 
        $surat->tanggal_mulai = Carbon::createFromFormat('Y-m-d', $surat->tanggal_mulai)->format('d F Y');
        $surat->tanggal_selesai = Carbon::createFromFormat('Y-m-d', $surat->tanggal_selesai)->format('d F Y');
        $surat->created_at = Carbon::createFromFormat('Y-m-d H:i:s', $surat->created_at)->format('d F Y');
        // 23 January 2022
        $surat->biaya_penelitian_pengabdian = number_format($surat->biaya_penelitian_pengabdian);

        $anggota = Db::table('tb_anggota_tim')
        ->where('id_surat', $id)
        ->select(
            'nama as nama_anggota',
            'nomor_induk as nomor_induk_anggota',
        )
        ->get();
        
        $mahasiswa = count(Db::table('tb_anggota_mahasiswa')
        ->where('id_surat', $id)
        ->get());


        $ketualppm = DB::table('tb_stakeholder')
        ->where('jabatan', 'Ketua LPPM')
        ->select(
            'nama as nama_lppm',
            'nomor_induk as nidn_lppm',
            'jabatan as jabatan_lppm'
        )
        ->first();

        $cekCount = count($anggota);
        $num = '';
        switch ($cekCount) {
            case 0:
                $num = 'a';
                break;
            case 1:
                $num = 'b';
                break;
            case 2:
                $num = 'c';
                break;
            case 3:
                $num = 'd';
                break;
            case 4:
                $num = 'e';
                break;
        }    
        // dd([
        //     'surat' => $surat,
        //     'anggota' => $anggota,
        //     'mahasiswa' => $mahasiswa,
        //     'ketualppm' => $ketualppm,
        //     'num' => $num,
        // ]);
        return view('detail_penelitian', [
            'surat' => $surat,
            'anggota' => $anggota,
            'mahasiswa' => $mahasiswa,
            'ketualppm' => $ketualppm,
            'num' => $num,
        ]);
    }

    
    public function suratPengesahanPenelitianFormat($id)
    {
        $surat = DB::table('tb_surat')
        ->rightJoin('tb_detail_surat', 'tb_detail_surat.id', '=', 'tb_surat.id_detail_surat' )
        ->join('tb_ketua_tim', 'tb_ketua_tim.id', '=', 'tb_surat.id_ketua' )
        ->join('tb_prodi', 'tb_prodi.id', '=', 'tb_ketua_tim.prodi' )
        ->join('tb_fakultas', 'tb_fakultas.id', '=', 'tb_prodi.fakultas' )
        ->where('tb_surat.id', $id)
        ->where('jenis_surat', 'penelitian')
        ->select(
            'tb_surat.id',
            'judul_surat',
            'nomor_surat',
            'semester',
            'jenis_surat',
            'status',
            'id_detail_surat',
            'id_ketua',
            'tb_surat.user_create',
            'tb_surat.created_at',
            'nama',
            'nomor_induk',
            'prodi',
            'jabatan_fungsional',
            'email',
            'telepon',
            'nama_prodi',
            'fakultas',
            'ketua_prodi',
            'nomor_induk_kaprodi',
            'nama_fakultas',
            'nama_dekan',
            'nomor_induk_dekan',
            'jangka_waktu',
            'tanggal_mulai',
            'tanggal_selesai',
            'sumber_dana',
            'mitra',
            'biaya_penelitian_pengabdian',
            'terbilang',
            'jarak_lokasi_mitra',
            'produk',
            'publikasi_ilmiah',
        )
        ->first();  
        $surat->tanggal_mulai = Carbon::createFromFormat('Y-m-d', $surat->tanggal_mulai)->format('d F Y');
        $surat->tanggal_selesai = Carbon::createFromFormat('Y-m-d', $surat->tanggal_selesai)->format('d F Y');
        $surat->created_at = Carbon::createFromFormat('Y-m-d H:i:s', $surat->created_at)->format('d F Y');
        // 23 January 2022
        $surat->biaya_penelitian_pengabdian = number_format($surat->biaya_penelitian_pengabdian);

        $anggota = Db::table('tb_anggota_tim')
        ->where('id_surat', $id)
        ->select(
            'nama as nama_anggota',
            'nomor_induk as nomor_induk_anggota',
        )
        ->get();
        
        $mahasiswa = count(Db::table('tb_anggota_mahasiswa')
        ->where('id_surat', $id)
        ->select(
            'nama as nama_anggota_mahasiswa',
            'nim',
        )
        ->get());


        $ketualppm = DB::table('tb_stakeholder')
        ->where('jabatan', 'Ketua LPPM')
        ->select(
            'nama as nama_lppm',
            'nomor_induk as nidn_lppm',
            'jabatan as jabatan_lppm'
        )
        ->first();

        $cekCount = count($anggota);
        $num = '';
        switch ($cekCount) {
            case 0:
                $num = 'a';
                break;
            case 1:
                $num = 'b';
                break;
            case 2:
                $num = 'c';
                break;
            case 3:
                $num = 'd';
                break;
            case 4:
                $num = 'e';
                break;
        }
        // dd($surat, $anggota, $mahasiswa, $ketualppm, $num) ;
        return view('layoutdosen.format_sr-pengesahan_penelitian',
            compact('surat', 'anggota', 'mahasiswa', 'ketualppm', 'num')
        );
    }
    
}
