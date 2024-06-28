<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PIC extends Model
{
    use HasFactory;

    protected $table = 'pic';

    protected $fillable = [
        'id_user', 
        'nip', 
        'no_hp', 
        'prodi'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
