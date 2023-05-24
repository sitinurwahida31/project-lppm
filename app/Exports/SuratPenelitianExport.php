<?php

namespace App\Exports;

use App\Models\Surat;

// use Illuminate\Support\Collection;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

// class SuratExport implements FromCollection, WithHeadings
class SuratPenelitianExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $surat = Surat::with('anggota', 'detailSurat', 'detailSurat', 'ketuaTim.programStudi')
        ->where('tb_surat.jenis_surat', 'penelitian')
        ->get();

        $data = collect(); // Membuat instance dari Illuminate\Support\Collection

        foreach ($surat as $item) {
            $rowData = [
                'Judul Surat' => $item->judul_surat,
                'Nomor Surat' => $item->nomor_surat,                
                'semester' => $item->semester,       
                'Jangka Waktu' => $item->detailSurat->jangka_waktu,         
                'Tanggal Mulai' => $item->detailSurat->tanggal_mulai,         
                'Tanggal Selesai' => $item->detailSurat->tanggal_selesai,         
                'Sumber Dana' => $item->detailSurat->sumber_dana,         
                'Mitra' => $item->detailSurat->mitra,         
                'Biaya Penelitian Pengabdian' => $item->detailSurat->biaya_penelitian_pengabdian,         
                'Terbilang' => $item->detailSurat->terbilang,         
                'Jarak Lokasi Mitra' => $item->detailSurat->jarak_lokasi_mitra,         
                'Produk' => $item->detailSurat->produk,         
                'Publikasi Ilmiah' => $item->detailSurat->publikasi_ilmiah,
                'Created At' => Carbon::createFromFormat('Y-m-d H:i:s', $item->detailSurat->created_at)->format('d F Y'),
                'Nama Ketua' => $item->ketuaTim->nama,
                'NIDN' => $item->ketuaTim->nomor_induk,
                'Program Studi ketua' => $item->ketuaTim->programStudi ? $item->ketuaTim->programStudi->nama_prodi : null, // Menambahkan data program studi
                'Telepon' => $item->ketuaTim->telepon,
                'Nama Anggota' => [],
                'Nama Anggota Mahasiswa' => [],
            ];

            foreach ($item->anggota as $anggota) {
                $rowData['Nama Anggota'][] = $anggota->nama .','. $anggota->nomor_induk;
            }
            
            foreach ($item->mahasiswa as $mahasiswa) {
                if ($mahasiswa) {
                    $rowData['Nama Anggota Mahasiswa'][] = $mahasiswa->nama .','. $mahasiswa->nim;
                } else {
                    $rowData['Nama Anggota Mahasiswa'][] = 0;
                }
            }
            $data->push($rowData); // Menambahkan $rowData ke dalam koleksi
            
        }
        // dd ($data);
        return $data;
    }
    public function headings(): array
    {
        return [
            'Judul Surat',
            'Nomor Surat',            
            'Semester',
            'Jangka Waktu',
            'Tanggal Mulai',
            'Tanggal Selesai',
            'Sumber Dana',
            'Mitra',
            'Biaya Penelitian Pengabdian',
            'Terbilang',
            'Jarak Lokasi Mitra',
            'Produk',
            'Publikasi Ilmiah',
            'Tanggal Dibuat',
            'Nama Ketua',
            'NIDN Ketua',
            'Prodi Ketua',
            'HP Ketua',
            'Nama Anggota',
            'Nama Anggota Mahasiswa',
        ];
    }
}
