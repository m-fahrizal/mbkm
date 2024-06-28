<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'id_user', 
        'nim', 
        'prodi', 
        'angkatan', 
        'semester', 
        'ipk'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function daftarMbkm()
    {
        return $this->hasMany(DaftarMbkm::class, 'id_mahasiswa');
    }

    public function praMbkm()
    {
        return $this->hasOne(PraMbkm::class, 'id_mahasiswa');
    }
    public function logbook()
    {
        return $this->hasOne(Logbook::class, 'id_mahasiswa');
    }
}
