<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';

    protected $fillable = [
        'name', 
        'username', 
        'email', 
        'role', 
        'email_verified_at', 
        'password', 
        'remember_token'
    ];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'id_user');
    }

    public function kaprodi()
    {
        return $this->hasMany(Kaprodi::class, 'id_user');
    }

    public function dosen()
    {
        return $this->hasMany(Dosen::class, 'id_user');
    }

    public function mitra()
    {
        return $this->hasMany(Mitra::class, 'id_user');
    }

    public function pic()
    {
        return $this->hasMany(Pic::class, 'id_user');
    }

    public function staff()
    {
        return $this->hasMany(Staff::class, 'id_user');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
