<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Kaprodi;
use App\Models\Mahasiswa;
use App\Models\Mitra;
use App\Models\PIC;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $mahasiswaData = Mahasiswa::all();
        $dosenData = Dosen::all();
        $kaprodiData = Kaprodi::all();
        $picData = PIC::all();
        $staffData = Staff::all();
        $mitraData = Mitra::all();

        // Log::info($data->all());// Cek Log

        return view('admin.user.index', compact('mahasiswaData', 'dosenData', 'kaprodiData', 'picData', 'staffData', 'mitraData'));
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();

        // Redirect atau response sesuai kebutuhan
        return redirect()->route('user.index')->with('success', 'Data berhasil dihapus');
    }
}
