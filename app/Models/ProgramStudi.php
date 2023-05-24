<?php

namespace App\Models;

use App\Models\KetuaTim;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramStudi extends Model
{
    use HasFactory;
    protected $table = 'tb_prodi';
    protected $guarded = [''];

    public function ketuaTim()
    {
        return $this->belongsTo(KetuaTim::class, 'prodi', 'id');
    }
}
