<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lowongan = Lowongan::all(); // Mengambil semua data dari tabel pra_mbkm
        return view('admin.lowongan.index', compact('lowongan'));
    }

    public function userIndex()
    {
        $lowongan = Lowongan::all();
        return view('mahasiswa.lowongan.index', compact('lowongan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.lowongan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'perusahaan' => 'required|string|max:255',
            // 'deskripsi' => 'required|text',
            'tempat' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'durasi' => 'required|string|max:255',
            'deadline' => 'required|string|max:255',
            'flyer' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        

        // $flyerName = null;

        // if ($request->hasFile('flyer')) {
        //     $flyerName = time() . '.' . $request->flyer->extension();
        //     $request->flyer->storeAs('public/flyers', $flyerName);
        // }

        $flyer = $request->file('flyer') ? $request->file('flyer')->store('flyers', 'public') : null;

        Lowongan::create([
            'nama_perusahaan' => $request->perusahaan,
            'deskripsi' => $request->deskripsi,
            'tempat' => $request->tempat,
            'posisi' => $request->posisi,
            'durasi_magang' => $request->durasi,
            'deadline' => $request->deadline,
            'flyer' => $flyer,
        ]);

        
        return redirect()->route('lowongan.index')->with('success', 'Lowongan berhasil diupload');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lowongan $lowongan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lowongan $lowongan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lowongan $lowongan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lowongan = Lowongan::findOrFail($id);
        $lowongan->delete();

        return redirect()->route('lowongan.index')->with('success', 'Data berhasil dihapus');
    }
}
