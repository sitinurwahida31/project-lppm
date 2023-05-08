<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Surat;

class AnggotaTim extends Model
{
    use HasFactory;
    protected $table = 'tb_anggota_tim';
    protected $guarded = [''];

    public function surat()
    {
        return $this->belongsTo(Surat::class, 'id_surat', 'id');
    }
}
