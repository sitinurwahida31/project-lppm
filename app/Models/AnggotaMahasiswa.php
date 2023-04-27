<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaMahasiswa extends Model
{
    use HasFactory;
    protected $table = 'tb_anggota_mahasiswa';
    protected $guarded = [''];
}
