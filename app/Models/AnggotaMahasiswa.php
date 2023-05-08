<?php

namespace App\Models;

use App\Models\Surat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnggotaMahasiswa extends Model
{
    use HasFactory;
    protected $table = 'tb_anggota_mahasiswa';
    protected $guarded = [''];

    public function surat()
    {
        return $this->belongsTo(Surat::class, 'id_surat', 'id');
    }
}
