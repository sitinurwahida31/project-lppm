<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KetuaTim extends Model
{
    use HasFactory;
    protected $table = 'tb_ketua_tim';
    protected $guarded = [''];
}
