<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kaprodi extends Model
{
    use HasFactory;

    protected $table = 'kaprodi';

    protected $fillable = [
        'id_user', 
        'nip', 
        'prodi'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
