<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratDetail extends Model
{
    use HasFactory;
    protected $table = 'tb_detail_surat';
    protected $guarded = [''];
}
