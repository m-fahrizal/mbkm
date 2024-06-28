<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';

    protected $fillable = [
        'id_user', 
        'nip', 
        'no_hp'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
