<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\KetuaTim;
use App\Models\AnggotaTim;
use App\Models\SuratDetail;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\AnggotaMahasiswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SuratPengabdianExport;

class SuratPengabdianController extends Controller
{
    public function index(Request $request)
    {
        $datas = DB::table('tb_surat')
        ->where('jenis_surat', 'pengabdian')
        ->where('user_create', Auth::user()->id)
        ->orderBy('created_at', 'desc');

        $s = $request->search;

        if ($s) {
            $datas =  $datas->where(function ($query) use ($s) {
                $query->where('judul_surat', 'LIKE', '%' . $s . '%')
                    ->orWhere('nomor_surat', 'LIKE', '%' . $s . '%')
                    ->orWhere('semester', 'LIKE', '%' . $s . '%');
            });
        }
        // dd($datas);
        return view('pengabdian.arsip_dosen_pengabdian', [
            'datas' => $datas->paginate(10),
        ]);
    }

    public function indexAdmin(Request $request)
    {
        $datas = DB::table('tb_surat')
        ->where('jenis_surat', 'pengabdian')
        ->join('tb_ketua_tim', 'tb_ketua_tim.id', '=', 'tb_surat.id_ketua' )
        ->join('tb_detail_surat', 'tb_detail_surat.id', '=', 'tb_surat.id_detail_surat' )
        ->select(
            'tb_surat.id',
            'nomor_surat',
            'judul_surat',
            'mitra',
            'nama as nama_ketua',
            'nomor_induk as nidn'
        )
        ->orderBy('tb_surat.created_at', 'desc');
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
        // dd($datas->first());
        return view('pengabdian.sr_tugas_pengabdian', [
            'datas' => $datas->paginate(10),
        ]);
    }
    
    public function create()
    {
        $semester = DB::table('tb_semester')->select('tahun_semester', 'nomor_semester')->get();
        $prodi = ProgramStudi::select(
            '*'
        )->get();
        // Generate nomor surat
        $num = DB::table('tb_surat')->select('id', 'nomor_surat')
            ->orderBy('nomor_surat', 'desc')->first();
        $number = "";
        if ($num) {
            $v = explode('/', $num->nomor_surat);
            $v = $v[0];
            $number = (int)$v + 1;
        } else {
            $number = "001";
        }

        if ($num && strlen((string)$number) == 1) {
            $number = "00" . (string)$number;
        } else if ($num && strlen((string)$number) == 2) {
            $number = "0" . (string)$number;
        } else if ($num && strlen((string)$number) == 3) {
            $number = (string)$number;
        }
        
        $bulan = date('m');
        switch ($bulan){
            case 1: 
                $bulan = "I";
                break;
            case 2:
                $bulan = "II";
                break;
            case 3:
                $bulan = "III";
                break;
            case 4:
                $bulan = "IV";
                break;
            case 5:
                $bulan = "V";
                break;
            case 6:
                $bulan = "VI";
                break;
            case 7:
                $bulan = "VII";
                break;
            case 8:
                $bulan = "VIII";
                break;
            case 9:
                $bulan = "IX";
                break;
            case 10:
                $bulan = "X";
                break;
            case 11:
                $bulan = "XI";
                break;
            case 12:
                $bulan = "XII";
                break;
        }
        $nosrt = $number.'/ST'.'/LPPM-UNCP'.'/'.$bulan.'/'.date('Y');
        // dd($nosrt);
        return view('pengabdian.form_input_pengabdian', compact('prodi', 'semester', 'nosrt'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'jangka_waktu' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'sumberdana' => 'required',
            'mitra' => 'required',
            'biaya_pengabdian' => 'required',
            'terbilang' => 'required',
            'jarak_lokasi_mitra' => 'required',
            'produk' => 'required',
            'publikasi_ilmiah' => 'required',

            'nama_ketua' => 'required',
            'nomor_induk_ketua' => 'required',
            'prodi_ketua' => 'required',
            'jabatan_fungsional' => 'required',
            'email' => 'required',
            'telepon' => 'required',

            'judul_pengabdian' => 'required',
            'semester' => 'required',
            'nama_anggota1' => 'required',
            'nomor_induk_anggota1' => 'required',
            'nama_mahasiswa1' => 'required',
            'nim_mahasiswa1' => 'required',
            'nama_mahasiswa2' => 'required',
            'nim_mahasiswa2' => 'required',
        ]);
        // dd($request->all());

        $requestDetailSuratpengabdian = [
            'jangka_waktu' => $request->jangka_waktu,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'sumber_dana' => $request->sumberdana,
            'mitra' => $request->mitra,
            'biaya_penelitian_pengabdian' => $request->biaya_pengabdian,
            'terbilang' => $request->terbilang,
            'jarak_lokasi_mitra' => $request->jarak_lokasi_mitra,
            'produk' => $request->produk,
            'publikasi_ilmiah' => $request->publikasi_ilmiah,
            'user_create' => Auth::user()->id
        ];
        $detailSurat = SuratDetail::create($requestDetailSuratpengabdian);

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

        // GENERATE NOMOR SURAT
        $num = DB::table('tb_surat')->select('id', 'nomor_surat')
            ->orderBy('nomor_surat', 'desc')->first();
        $number = "";
        if ($num) {
            $v = explode('/', $num->nomor_surat);
            $v = $v[0];
            $number = (int)$v + 1;
        } else {
            $number = "001";
        }

        if ($num && strlen((string)$number) == 1) {
            $number = "00" . (string)$number;
        } else if ($num && strlen((string)$number) == 2) {
            $number = "0" . (string)$number;
        } else if ($num && strlen((string)$number) == 3) {
            $number = (string)$number;
        }
        
        $bulan = date('m');
        switch ($bulan){
            case 1: 
                $bulan = "I";
                break;
            case 2:
                $bulan = "II";
                break;
            case 3:
                $bulan = "III";
                break;
            case 4:
                $bulan = "IV";
                break;
            case 5:
                $bulan = "V";
                break;
            case 6:
                $bulan = "VI";
                break;
            case 7:
                $bulan = "VII";
                break;
            case 8:
                $bulan = "VIII";
                break;
            case 9:
                $bulan = "IX";
                break;
            case 10:
                $bulan = "X";
                break;
            case 11:
                $bulan = "XI";
                break;
            case 12:
                $bulan = "XII";
                break;
        }
        $nosrt = $number.'/ST'.'/LPPM-UNCP'.'/'.$bulan.'/'.date('Y');
        // == CREATE DATA IN SURAT pengabdian ==
        $requestSuratpengabdian = [
            'judul_surat' => $request->judul_pengabdian,
            'nomor_surat' => $nosrt,
            'semester' => $request->semester,
            'id_detail_surat' => $detailSurat->id,
            'id_ketua' => $ketuaTim->id,
            'jenis_surat' => 'pengabdian',
            'status' => 'terbuat',
            'user_create' => Auth::user()->id
        ];

        $suratpengabdian = Surat::create($requestSuratpengabdian);

        if($request->nama_anggota1 && $request->nomor_induk_anggota1){
            AnggotaTim::create([
                'nama' => $request->nama_anggota1,
                'id_surat' => $suratpengabdian->id,
                'nomor_induk' => $request->nomor_induk_anggota1,
                'user_create' => Auth::user()->id
            ]);
        }
        if($request->nama_anggota2 && $request->nomor_induk_anggota2){
            AnggotaTim::create([
                'nama' => $request->nama_anggota2,
                'id_surat' => $suratpengabdian->id,
                'nomor_induk' => $request->nomor_induk_anggota2,
                'user_create' => Auth::user()->id
            ]);
        }
        if($request->nama_anggota3 && $request->nomor_induk_anggota3){
            AnggotaTim::create([
                'nama' => $request->nama_anggota3,
                'id_surat' => $suratpengabdian->id,
                'nomor_induk' => $request->nomor_induk_anggota3,
                'user_create' => Auth::user()->id
            ]);
        }
        if($request->nama_anggota4 && $request->nomor_induk_anggota4){
            AnggotaTim::create([
                'nama' => $request->nama_anggota4,
                'id_surat' => $suratpengabdian->id,
                'nomor_induk' => $request->nomor_induk_anggota4,
                'user_create' => Auth::user()->id
            ]);
        }

        if($request->nama_mahasiswa1 && $request->nim_mahasiswa1){
            AnggotaMahasiswa::create([
                'nama' => $request->nama_mahasiswa1,
                'id_surat' => $suratpengabdian->id,
                'nim' => $request->nim_mahasiswa1,
                'user_create' => Auth::user()->id
            ]);
        }
        if($request->nama_mahasiswa2 && $request->nim_mahasiswa2){
            AnggotaMahasiswa::create([
                'nama' => $request->nama_mahasiswa2,
                'id_surat' => $suratpengabdian->id,
                'nim' => $request->nim_mahasiswa2,
                'user_create' => Auth::user()->id
            ]);
        }

        // return dd([
        //     'dataSurat' => $suratpengabdian,
        //     'detailSurat' => $detailSurat,
        //     'ketuaTim' => $ketuaTim,
        // ]);
        return redirect('/surattugas/pengabdian/format/'.$suratpengabdian->id);
    }

    public function suratTugasPengabdianFormat($id)
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
        $mahasiswa = AnggotaMahasiswa::where('id_surat', $id)->get();

        $countAnggota = count($anggota)+1;
        // dd($countAnggota);
        // return dd([
        //     'surat' => $surat,
        //     'ketualppm' => $ketualppm,
        //     'anggota' => $anggota,
        //     'countAnggota' => $countAnggota,
        //     'mahasiswa' => $mahasiswa,
        // ]);
        return view('pengabdian.format_sr-tugas_pengabdian', [
            'surat' => $surat,
            'ketualppm' => $ketualppm,
            'anggota' => $anggota,
            'countAnggota' => $countAnggota,
            'mahasiswa' => $mahasiswa,
        ]);
    }

    public function suratPengesahanPengabdianFormat($id)
    {
        $surat = DB::table('tb_surat')
        ->rightJoin('tb_detail_surat', 'tb_detail_surat.id', '=', 'tb_surat.id_detail_surat' )
        ->join('tb_ketua_tim', 'tb_ketua_tim.id', '=', 'tb_surat.id_ketua' )
        ->join('tb_prodi', 'tb_prodi.id', '=', 'tb_ketua_tim.prodi' )
        ->join('tb_fakultas', 'tb_fakultas.id', '=', 'tb_prodi.fakultas' )
        ->where('tb_surat.id', $id)
        ->where('jenis_surat', 'pengabdian')
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

        return view('pengabdian.format_sr-pengesahan_pengabdian', compact('surat', 'anggota', 'mahasiswa', 'ketualppm', 'num'));
    }
    public function detailpengabdian($id)
    {
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
            'nama as nama_ketua',
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

        $data_mahasiswa = Db::table('tb_anggota_mahasiswa')
        ->where('id_surat', $id)
        ->select(
            'nama as nama_mahasiswa',
            'nim',
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
        //     'data_mahasiswa' => $data_mahasiswa,
        //     'ketualppm' => $ketualppm,
        //     'num' => $num,
        // ]);
        return view('pengabdian.detail_pengabdian', [
            'surat' => $surat,
            'anggota' => $anggota,
            'mahasiswa' => $mahasiswa,
            'data_mahasiswa' => $data_mahasiswa,
            'ketualppm' => $ketualppm,
            'num' => $num,
        ]);
    }

    public function destroyPengabdian($id)
    {
        $referenceId = Surat::find($id)->first();
        
        Surat::find($id)->delete();
        SuratDetail::where('id', $referenceId->id_detail_surat)->delete();
        KetuaTim::where('id', $referenceId->id_ketua)->delete();
        AnggotaTim::where('id_surat', $id)->delete();
        AnggotaMahasiswa::where('id_surat', $id)->delete();
        return redirect('/surattugas/pengabdian');
    }

    public function showPengabdian($id)
        {
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
                'nama as nama_ketua',
                'nomor_induk as nidn_ketua',
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
            )->first();

        $anggota = Db::table('tb_anggota_tim')->where('id_surat', $id)
            ->select('id', 'nama as nama_anggota','nomor_induk as nomor_induk_anggota',)->get();

        $mahasiswa = Db::table('tb_anggota_mahasiswa')->where('id_surat', $id)
            ->select('id', 'nama as nama_mahasiswa','nim',)->get();

        $semester = Db::table('tb_semester')->select('tahun_semester','nomor_semester',)->get();

        $prodi = DB::table('tb_prodi')->select('id','nama_prodi',)->get();

        $listSumberDana = [
            'Mandiri', 'DRPTM', 'Internal UNCP', 'Pemerintah Daerah', 'Lainnya',
        ];

        $listJabatan = [
            'Guru Besar', 'Lektor Kepala', 'Lektor', 'Asisten Ahli', 'Tenaga Pengajar', 'Lainnya'
        ];

        $listProduk = [
            'Produk', 'Prototype', 'Desain', 'Lainnya'
        ];

        $listPublikasi = [
            'Jurnal Nasional ISSN',
            'Jurnal Nasional Terakreditasi',
            'Jurnal Internasional Bereputasi',
            'Lainnya'
        ];

        $countAnggota = count($anggota);
        $batasLoopAnggota = "";
        $nomorAnggota = "";
        switch ($countAnggota) {
            case 0:
                $batasLoopAnggota = 4;
                $nomorAnggota = 0;
                break;
            case 1:
                $batasLoopAnggota = 3;
                $nomorAnggota = 1;
                break;
            case 2:
                $batasLoopAnggota = 2;
                $nomorAnggota = 2;
                break;
            case 3:
                $batasLoopAnggota = 1;
                $nomorAnggota = 3;
                break;
            case 4:
                $batasLoopAnggota = 0;
                $nomorAnggota = 4;
                break;
        }
        $countMahasiswa = count($mahasiswa);
        $batasLoopMahasiswa = "";
        $nomorMahasiswa = "";
         switch ($countMahasiswa) {
            case 0:
                $batasLoopMahasiswa = 4;
                $nomorMahasiswa = 0;
                break;
            case 1:
                $batasLoopMahasiswa = 3;
                $nomorMahasiswa = 1;
                break;
            case 2:
                $batasLoopMahasiswa = 2;
                $nomorMahasiswa = 2;
                break;
            case 3:
                $batasLoopMahasiswa = 1;
                $nomorMahasiswa = 3;
                break;
            case 4:
                $batasLoopMahasiswa = 0;
                $nomorMahasiswa = 4;
                break;
        }
        
        // dd(['batasLoopMahasiswa' => $batasLoopMahasiswa, 'nomorMahasiswa' => $nomorMahasiswa, 'countAnggota' => $countAnggota, 'su rat' => $surat, 'anggota' => $anggota, 'mahasiswa' => $mahasiswa, 'semester' => $semester, 'listSumberDana' => $listSumberDana, 'listJabatan' => $listJabatan, 'listProduk' => $listProduk, 'listPublikasi' => $listPublikasi,]);

        return view('pengabdian.edit_pengabdian',[
            'surat' => $surat,
            'anggota' => $anggota,
            'mahasiswa' => $mahasiswa,
            'semester' => $semester,
            'prodi' => $prodi,
            'countAnggota' => $countAnggota,
            'batasLoopAnggota' => $batasLoopAnggota,
            'nomorAnggota' => $nomorAnggota,
            'countMahasiswa' => $countMahasiswa,
            'batasLoopMahasiswa' => $batasLoopMahasiswa,
            'nomorMahasiswa' => $nomorMahasiswa,
            'listSumberDana' => $listSumberDana,
            'listJabatan' => $listJabatan,
            'listProduk' => $listProduk,
            'listPublikasi' => $listPublikasi,
        ]);        
    }

    // =========================================================================================
    // =========================================================================================
        
    public function updatePengabdian(Request $request, $id)
    {
        $request->validate([
            'jangka_waktu' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'sumber_dana' => 'required',
            'mitra' => 'required',
            'biaya_penelitian_pengabdian' => 'required|numeric',
            'terbilang' => 'required',
            'jarak_lokasi_mitra' => 'required',
            'produk' => 'required',
            'publikasi_ilmiah' => 'required',

            'nama_ketua' => 'required',
            'nidn_ketua' => 'required',
            'prodi' => 'required',
            'jabatan_fungsional' => 'required',
            'email' => 'required',
            'telepon' => 'required|numeric',

            'judul_surat' => 'required',
            'semester' => 'required',
        ]);

        $surat = [
            'judul_surat' => $request->judul_surat,
            'semester' => $request->semester,
            'user_update' => Auth::user()->id,
        ];
        $detailSurat = [
            'jangka_waktu' => $request->jangka_waktu,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'mitra' => $request->mitra,
            'jarak_lokasi_mitra' => $request->jarak_lokasi_mitra,
            'sumber_dana' => $request->sumber_dana,
            'biaya_penelitian_pengabdian' => $request->biaya_penelitian_pengabdian,
            'terbilang' => $request->terbilang,
            'produk' => $request->produk,
            'publikasi_ilmiah' => $request->publikasi_ilmiah,
            'user_update' => Auth::user()->id,
        ];
        $ketuaTim = [
            'nama' => $request->nama_ketua,
            'nomor_induk' => $request->nidn_ketua,
            'prodi' => $request->prodi,
            'jabatan_fungsional' => $request->jabatan_fungsional,
            'email' => $request->email,
            'telepon' => $request->telepon,
        ];        

        $dataSuratReference = Surat::where('id', $id)->first();
        Surat::where('id', $id)->update($surat);

        $suratDetailEdit = SuratDetail::where('id', $dataSuratReference->id_detail_surat)
            ->update($detailSurat);

        $ketuaTimEdit = KetuaTim::where('id', $dataSuratReference->id_ketua)
            ->update($ketuaTim);

        // ==EDIT ANGGOTA LAMA
        if($request->nama_anggota1 || $request->nomor_induk_anggota1 && $request->id1){
            $anggota1 = [
                'nama' => $request->nama_anggota1,
                'nomor_induk' => $request->nomor_induk_anggota1,
            ];
            AnggotaTim::where('id', $request->id1)->update($anggota1);
        }
        if($request->nama_anggota2 || $request->nomor_induk_anggota2 && $request->id2){
            $anggota2 = [
                'nama' => $request->nama_anggota2,
                'nomor_induk' => $request->nomor_induk_anggota2,
            ];
            AnggotaTim::where('id', $request->id2)->update($anggota2);
        }
        if($request->nama_anggota3 || $request->nomor_induk_anggota3 && $request->id3){
            $anggota3 = [
                'nama' => $request->nama_anggota3,
                'nomor_induk' => $request->nomor_induk_anggota3,
            ];
            AnggotaTim::where('id', $request->id3)->update($anggota3);
        }
        if($request->nama_anggota4 || $request->nomor_induk_anggota4 && $request->id4){
            $anggota4 = [
                'nama' => $request->nama_anggota4,
                'nomor_induk' => $request->nomor_induk_anggota4,
            ];
            AnggotaTim::where('id', $request->id4)->update($anggota4);
        }

        // === CREATE ANGGOTA BARU
        if ($request->nama_anggota_baru1 && $request->nomor_induk_anggota_baru1 ) {
            AnggotaTim::create([
                'nama' => $request->nama_anggota_baru1,
                'id_surat' => $id,
                'nomor_induk' => $request->nomor_induk_anggota_baru1,
                'user_create' => Auth::user()->id
            ]);
        }
        if ($request->nama_anggota_baru2 && $request->nomor_induk_anggota_baru2 ) {
            AnggotaTim::create([
                'nama' => $request->nama_anggota_baru2,
                'id_surat' => $id,
                'nomor_induk' => $request->nomor_induk_anggota_baru2,
                'user_create' => Auth::user()->id
            ]);
        }
        if ($request->nama_anggota_baru3 && $request->nomor_induk_anggota_baru3 ) {
            AnggotaTim::create([
                'nama' => $request->nama_anggota_baru3,
                'id_surat' => $id,
                'nomor_induk' => $request->nomor_induk_anggota_baru3,
                'user_create' => Auth::user()->id
            ]);
        }
        if ($request->nama_anggota_baru4 && $request->nomor_induk_anggota_baru4 ) {
            AnggotaTim::create([
                'nama' => $request->nama_anggota_baru4,
                'id_surat' => $id,
                'nomor_induk' => $request->nomor_induk_anggota_baru4,
                'user_create' => Auth::user()->id
            ]);
        }

        // == HAPUS ANGGOTA==
        if ($request->id1 && empty($request->nama_anggota1)) {
            AnggotaTim::where('id', $request->id1)->delete();
        }
        if ($request->id2 && empty($request->nama_anggota2)) {
            AnggotaTim::where('id', $request->id2)->delete();
        }
        if ($request->id3 && empty($request->nama_anggota3)) {
            AnggotaTim::where('id', $request->id3)->delete();
        }
        if ($request->id4 && empty($request->nama_anggota4)) {
            AnggotaTim::where('id', $request->id4)->delete();
        }
                
        // ==EDIT MAHASISWA LAMA
        if($request->nama_mahasiswa1 || $request->nim1 && $request->id_mahasiswa1){
            $mahasiswa1 = [
                'nama' => $request->nama_mahasiswa1,
                'nim' => $request->nim1,
            ];
            AnggotaMahasiswa::where('id', $request->id_mahasiswa1)->update($mahasiswa1);
        }
        if($request->nama_mahasiswa2 || $request->nim2 && $request->id_mahasiswa2){
            $mahasiswa2 = [
                'nama' => $request->nama_mahasiswa2,
                'nim' => $request->nim2,
            ];
            AnggotaMahasiswa::where('id', $request->id_mahasiswa2)->update($mahasiswa2);
        }
        if($request->nama_mahasiswa3 || $request->nim3 && $request->id_mahasiswa3){
            $mahasiswa3 = [
                'nama' => $request->nama_mahasiswa3,
                'nim' => $request->nim3,
            ];
            AnggotaMahasiswa::where('id', $request->id_mahasiswa3)->update($mahasiswa3);
        }
        if($request->nama_mahasiswa4 || $request->nim4 && $request->id_mahasiswa4){
            $mahasiswa4 = [
                'nama' => $request->nama_mahasiswa4,
                'nim' => $request->nim4,
            ];
            AnggotaMahasiswa::where('id', $request->id_mahasiswa4)->update($mahasiswa4);
        }

        // === CREATE MAHASISWA BARU
        if ($request->nama_mahasiswa_baru1 && $request->nim_mahasiswa_baru1 ) {
            AnggotaMahasiswa::create([
                'nama' => $request->nama_mahasiswa_baru1,
                'id_surat' => $id,
                'nim' => $request->nim_mahasiswa_baru1,
                'user_create' => Auth::user()->id
            ]);
        }
        if ($request->nama_mahasiswa_baru2 && $request->nim_mahasiswa_baru2 ) {
            AnggotaMahasiswa::create([
                'nama' => $request->nama_mahasiswa_baru2,
                'id_surat' => $id,
                'nim' => $request->nim_mahasiswa_baru2,
                'user_create' => Auth::user()->id
            ]);
        }
        if ($request->nama_mahasiswa_baru3 && $request->nim_mahasiswa_baru3 ) {
            AnggotaMahasiswa::create([
                'nama' => $request->nama_mahasiswa_baru3,
                'id_surat' => $id,
                'nim' => $request->nim_mahasiswa_baru3,
                'user_create' => Auth::user()->id
            ]);
        }
        if ($request->nama_mahasiswa_baru4 && $request->nim_mahasiswa_baru4 ) {
            AnggotaMahasiswa::create([
                'nama' => $request->nama_mahasiswa_baru4,
                'id_surat' => $id,
                'nim' => $request->nim_mahasiswa_baru4,
                'user_create' => Auth::user()->id
            ]);
        }
        // == HAPUS MAHASISWA==
        if ($request->id_mahasiswa1 && empty($request->nama_mahasiswa1)) {
            AnggotaMahasiswa::where('id', $request->id_mahasiswa1)->delete();
        }
        if ($request->id_mahasiswa2 && empty($request->nama_mahasiswa2)) {
            AnggotaMahasiswa::where('id', $request->id_mahasiswa2)->delete();
        }
        if ($request->id_mahasiswa3 && empty($request->nama_mahasiswa3)) {
            AnggotaMahasiswa::where('id', $request->id_mahasiswa3)->delete();
        }
        if ($request->id_mahasiswa4 && empty($request->nama_mahasiswa4)) {
            AnggotaMahasiswa::where('id', $request->id_mahasiswa4)->delete();
        }        
        return redirect()->back();  
    }

    public function suratPengabdianExport() 
    {
        return Excel::download(new SuratPengabdianExport, 'SuratTugasPengabdian.xlsx');
    }
}


