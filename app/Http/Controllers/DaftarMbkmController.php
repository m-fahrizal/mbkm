<?php

namespace App\Http\Controllers;

use App\Models\DaftarMbkm;
use App\Models\Lowongan;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DaftarMbkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DaftarMbkm::all(); 
        return view('admin.daftar-mbkm.index', compact('data'));
    }

    public function print()
    {
        $data = DaftarMbkm::all(); 
        return view('admin.daftar-mbkm.print', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $lowongan = Lowongan::find($request->query('id'));

        return view('mahasiswa.daftar-mbkm.create', compact('lowongan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $krs = $request->file('krs') ? $request->file('krs')->store('files', 'public') : null;
        $khs = $request->file('khs') ? $request->file('khs')->store('files', 'public') : null;
        $cv = $request->file('cv') ? $request->file('cv')->store('files', 'public') : null;
        $portofolio = $request->file('portofolio') ? $request->file('portofolio')->store('files', 'public') : null;

        $user = User::find(auth()->user()->id);
        $mhs = Mahasiswa::where('id_user', $user->id)->first();

        DaftarMbkm::create([
            'periode_mbkm' => $request->periode,
            'no_hp' => $request->hp,
            'id_lowongan'=>$request->id_lowongan,
            'id_mahasiswa'=>$mhs->id,
            'krs' => $krs,
            'khs' => $khs,
            'cv' => $cv,
            'portofolio' => $portofolio,
        ]);

        Alert::success('Berhasil', 'Berhasil Daftar!');
        return redirect()->route('lowongan.user-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarMbkm $daftarMbkm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarMbkm $daftarMbkm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DaftarMbkm $daftarMbkm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DaftarMbkm::findOrFail($id);
        $data->delete();

        // Redirect atau response sesuai kebutuhan
        return redirect()->route('daftarmbkm.index')->with('success', 'Data berhasil dihapus');
    }
}
