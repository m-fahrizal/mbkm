<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PascaMbkm extends Model
{
    use HasFactory;
    protected $table = 'pasca_mbkm';

    protected $fillable = [
        'id_pra', 
        'sertifikat', 
        'logbook', 
        'transkrip', 
        'laporan'
    ];

    public function praMbkm()
    {
        return $this->belongsTo(PraMbkm::class, 'id_pra');
    }
}
