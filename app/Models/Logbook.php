<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    use HasFactory;
    
    protected $table = 'logbook';

    protected $fillable = [
        'id_mahasiswa', 
        'deskripsi', 
        'image'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }
}
