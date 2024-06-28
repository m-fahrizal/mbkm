<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarMbkm extends Model
{
    use HasFactory;

    protected $table = 'daftar_mbkm';

    protected $fillable = [
        'id_mahasiswa', 
        'id_lowongan', 
        'periode_mbkm', 
        'no_hp', 
        'krs', 
        'khs', 
        'cv', 
        'portofolio'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class, 'id_lowongan');
    }
}
