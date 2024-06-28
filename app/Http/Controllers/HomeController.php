<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\PraMbkm;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if (auth()->user()->role != 'mahasiswa') {
            
            return redirect('/');
        }
        // Now you can use $nim for your logic
        return view('mahasiswa.home');
    }

    public function profile()
    {
        $mhs = Mahasiswa::where('id_user', auth()->user()->id)->first();

        $praMbkmData = PraMbkm::where('id_mahasiswa', $mhs->id)->first();
        // Menampilkan view profil dengan data pra_mbkm
        return view('mahasiswa.profile', compact('praMbkmData', 'mhs'));
    }
}
