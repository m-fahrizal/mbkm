<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::create([
            'name' => 'Admin',
            'username' => '12345',
            'email' => 'admin@mail.com',
            'password' => Hash::make('12345'),
            'role' => 'admin',
        ]);

        $mhs = User::create([
            'name' => 'Fahrizal',
            'username' => '2010512108',
            'email' => 'test@mail.com',
            'password' => Hash::make('2010512108'),
            'role' => 'mahasiswa',
        ]);

        Mahasiswa::create([
            'id_user'=>$mhs->id,
            'nim' => '2010512108',
            'prodi' => 'S1 Sistem Informasi',
            'angkatan' => '2020',
            'semester' => '5',
            'ipk'=>'3.80'
        ]);
    }
}
