<?php

namespace App\Models;

use App\Models\Surat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SuratDetail extends Model
{
    use HasFactory;
    protected $table = 'tb_detail_surat';
    protected $guarded = [''];

    public function surat()
    {
        return $this->belongsTo(Surat::class, 'id_detail_surat', 'id');
    }
}
