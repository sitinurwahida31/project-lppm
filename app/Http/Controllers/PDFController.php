<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    public function sTugasDPenelitianPdf($id)
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
        // dd('test');

        return view('download.formatSrtTgsPenelitianPdf', [
            'surat' => $surat,
            'ketualppm' => $ketualppm,
            'anggota' => $anggota,
            'countAnggota' => $countAnggota,
        ]);
    }

    public function sPengesahanDPenelitianPdf($id)
    {
        $surat = DB::table('tb_surat')
        ->join('tb_detail_surat', 'tb_detail_surat.id', '=', 'tb_surat.id_detail_surat' )
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

        return view('download.formatSrtPgshnPenelitian',
            compact('surat', 'anggota', 'mahasiswa', 'ketualppm', 'num')
        );
    }

    public function sTugasDPengabdianPdf($id)
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
        $currentDate = Carbon::now()->format('Y-m-d');

        return view('download.formatSrtTgsPengabdianPdf', [
            'surat' => $surat,
            'ketualppm' => $ketualppm,
            'anggota' => $anggota,
            'countAnggota' => $countAnggota,
        ]);

        $html = view('download.formatSrtTgsPengabdianPdf', [
            'surat' => $surat,
            'ketualppm' => $ketualppm,
            'anggota' => $anggota,
            'countAnggota' => $countAnggota,
        ]);
        $pdf = new Dompdf();
        $pdf->loadHTML($html);
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();
        $pdf->stream('SuratTugasPengabdian'.$surat->nama_ketua.$currentDate.'pdf');
    }


    public function sPengesahanDPengabdianPdf($id)
    {
        $surat = DB::table('tb_surat')
        ->join('tb_detail_surat', 'tb_detail_surat.id', '=', 'tb_surat.id_detail_surat' )
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
       
        return view('download.formatSrtPgshnPengabdian',
            compact('surat', 'anggota', 'mahasiswa', 'ketualppm', 'num')
        );
    }
}
