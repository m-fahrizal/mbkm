<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    protected $table = 'lowongan';

    protected $fillable = [
        'nama_perusahaan', 
        'deskripsi', 
        'tempat', 
        'posisi', 
        'durasi_magang', 
        'deadline', 
        'flyer'
    ];

    public function daftarMbkm()
    {
        return $this->hasMany(DaftarMbkm::class, 'id_lowongan');
    }
}
