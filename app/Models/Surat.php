<?php

namespace App\Models;

use App\Models\KetuaTim;
use App\Models\AnggotaTim;
use App\Models\SuratDetail;
use App\Models\AnggotaMahasiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Surat extends Model
{
    use HasFactory;
    protected $table = 'tb_surat';
    protected $guarded = [''];

    public function mahasiswa()
    {
        return $this->hasMany(AnggotaMahasiswa::class, 'id_surat', 'id');
    }
    public function anggota()
    {
        return $this->hasMany(AnggotaTim::class, 'id_surat', 'id');
    }
    public function detailSurat()
    {
        return $this->hasOne(SuratDetail::class, 'id', 'id_detail_surat');
    }
    public function ketuaTim()
    {
        return $this->hasOne(KetuaTim::class, 'id', 'id_ketua');
    }
}
