<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\PascaMbkm;
use App\Models\PraMbkm;
use App\Models\User;
use Illuminate\Http\Request;

class PascaMbkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PascaMbkm::all(); // Mengambil semua data dari tabel pra_mbkm
        return view('admin.pasca-mbkm.index', compact('data'));
    }

    public function print()
    {
        $data = PascaMbkm::all(); 
        return view('admin.pasca-mbkm.print', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::find(auth()->user()->id);
        $mhs = Mahasiswa::where('id_user', $user->id)->first();

        if (!isset($mhs->praMbkm)) {
            return view('mahasiswa.pasca-mbkm.block');
        }
        if (isset($mhs->praMbkm->pascaMbkm)) {
            return view('mahasiswa.pasca-mbkm.done');
        }
        return view('mahasiswa.pasca-mbkm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sertifikat' => 'nullable|mimes:pdf,doc,docx,ppt,pptx|max:2048',
            'logbook' => 'nullable|mimes:pdf,doc,docx,ppt,pptx|max:2048',
            'transkrip' => 'nullable|mimes:pdf,doc,docx,ppt,pptx|max:2048',
            'laporan' => 'nullable|mimes:pdf,doc,docx,ppt,pptx|max:2048',
        ]);

        $sertifikat = $request->file('sertifikat') ? $request->file('sertifikat')->store('files', 'public') : null;
        $logbook = $request->file('logbook') ? $request->file('logbook')->store('files', 'public') : null;
        $transkrip = $request->file('transkrip') ? $request->file('transkrip')->store('files', 'public') : null;
        $laporan = $request->file('laporan') ? $request->file('laporan')->store('files', 'public') : null;

        $user = User::find(auth()->user()->id);
        $mhs = Mahasiswa::where('id_user', $user->id)->first();
        $idPra = PraMbkm::where('id_mahasiswa', $mhs->id)->first()->id;

        PascaMbkm::create([
            'sertifikat' => $sertifikat,
            'logbook' => $logbook,
            'transkrip' => $transkrip,
            'laporan' => $laporan,
            'id_pra' => $idPra
        ]);

        return view('mahasiswa.pasca-mbkm.done');
    }

    /**
     * Display the specified resource.
     */
    public function show(PascaMbkm $pascaMbkm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PascaMbkm $pascaMbkm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PascaMbkm $pascaMbkm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasca = Pascambkm::findOrFail($id);
        $pasca->delete();

        return redirect()->route('pascambkm.index')->with('success', 'Data berhasil dihapus');
    }
}
