<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    protected $table = 'mitra';

    protected $fillable = [
        'id_user', 
        'no_hp'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
