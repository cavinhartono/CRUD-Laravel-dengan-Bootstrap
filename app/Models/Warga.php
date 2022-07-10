<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;
    protected $table = 'warga';

    // jika error assignment

    // protected $fillable = ['nama', 'nik']; // nama-nama
    protected $guarded = []; // Semua
}
