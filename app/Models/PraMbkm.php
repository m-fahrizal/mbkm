<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PraMbkm extends Model
{
    use HasFactory;

    protected $table = 'pra_mbkm';

    protected $fillable = [
        'id_mahasiswa', 
        'jenis_mbkm', 
        'periode_mbkm', 
        'durasi_kegiatan', 
        'instansi', 
        'alamat_instansi', 
        'nama_mentor', 
        'posisi', 
        'no_hp',
        'dosen',
        'loa', 
        'krs', 
        'khs'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    public function pascaMbkm()
    {
        return $this->hasOne(PascaMbkm::class, 'id_pra');
    }
}
