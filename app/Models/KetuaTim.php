<?php

namespace App\Models;

use App\Models\Surat;
use App\Models\ProgramStudi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KetuaTim extends Model
{
    use HasFactory;
    protected $table = 'tb_ketua_tim';
    protected $guarded = [''];

    public function surat()
    {
        return $this->belongsTo(Surat::class, 'id_ketua', 'id');
    }

    public function programStudi()
    {
        return $this->hasOne(ProgramStudi::class, 'id', 'prodi');
    }
}
