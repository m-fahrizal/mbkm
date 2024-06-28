<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\PraMbkm;
use App\Models\User;
use Illuminate\Http\Request;

class PraMbkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PraMbkm::all(); // Mengambil semua data dari tabel pra_mbkm
        return view('admin.pra-mbkm.index', compact('data'));
    }

    public function print()
    {
        $data = PraMbkm::all(); // Mengambil semua data dari tabel pra_mbkm
        return view('admin.pra-mbkm.print', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::find(auth()->user()->id);
        $mhs = Mahasiswa::where('id_user', $user->id)->first();

        if (isset($mhs->praMbkm)) {
            return view('mahasiswa.pra-mbkm.done');
        }
        return view('mahasiswa.pra-mbkm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $loa = $request->file('loa') ? $request->file('loa')->store('files', 'public') : null;
        $krs = $request->file('krs') ? $request->file('krs')->store('files', 'public') : null;
        $khs = $request->file('khs') ? $request->file('khs')->store('files', 'public') : null;

        $user = User::find(auth()->user()->id);
        $mhs = Mahasiswa::where('id_user', $user->id)->first();


        Prambkm::create([
            'id_mahasiswa' => $mhs->id,
            'jenis_mbkm' => $request->jenis,
            'periode_mbkm' => $request->periode,
            'durasi_kegiatan' => $request->durasi,
            'no_hp' => $request->hp,
            'instansi' => $request->instansi,
            'alamat_instansi' => $request->alamat,
            'nama_mentor' => $request->mentor,
            'posisi' => $request->posisi,
            'loa' => $loa,
            'krs' => $krs,
            'khs' => $khs,
        ]);

        return view('mahasiswa.pra-mbkm.done');
    }

    /**
     * Display the specified resource.
     */
    public function show(PraMbkm $praMbkm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prambkm = Prambkm::findOrFail($id);
        return view('admin.pra-mbkm.edit', compact('prambkm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $praMbkm = PraMbkm::find($id);
        $loa = $request->file('loa') ? $request->file('loa')->store('files', 'public') : $praMbkm->loa;
        $krs = $request->file('krs') ? $request->file('krs')->store('files', 'public') : $praMbkm->krs;
        $khs = $request->file('khs') ? $request->file('khs')->store('files', 'public') : $praMbkm->khs;

        $praMbkm->update([
            'jenis_mbkm' => $request->jenis_mbkm,
            'periode_mbkm' => $request->periode_mbkm,
            'durasi_kegiatan' => $request->durasi_kegiatan,
            'no_hp' => $request->no_hp,
            'instansi' => $request->instansi,
            'alamat_instansi' => $request->alamat_instansi,
            'nama_mentor' => $request->nama_mentor,
            'dosen' => $request->dosen,
            'posisi' => $request->posisi,
            'loa' => $loa,
            'krs' => $krs,
            'khs' => $khs,
        ]);

        return redirect()->route('prambkm.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pra = PraMbkm::findOrFail($id);
        $pra->delete();

        return redirect()->route('prambkm.index')->with('success', 'Data berhasil dihapus');
    }
}
