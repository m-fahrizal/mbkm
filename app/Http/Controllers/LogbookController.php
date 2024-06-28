<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;

class LogbookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mhs = Mahasiswa::where('id_user', auth()->user()->id)->first();
        $logbook = Logbook::where('id_mahasiswa', $mhs->id)->get();
        return view('mahasiswa.logbook.index', compact('logbook'));
    }
    
    public function adminIndex()
    {
        $logbook = Mahasiswa::whereHas('logbook')->get();

        return view('admin.logbook.index', compact('logbook'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.logbook.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image') ? $request->file('image')->store('images', 'public') : null;

        $user = User::find(auth()->user()->id);
        $mhs = Mahasiswa::where('id_user', $user->id)->first();

        Logbook::create([
            'deskripsi' => $request->deskripsi,
            'image' => $image,
            'id_mahasiswa'=>$mhs->id
        ]);

        return redirect()->route('logbook.index')->with('success', 'Logbook berhasil diupload');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $logbook = Logbook::where('id_mahasiswa', $id)->get();
        return view('admin.logbook.show', compact('logbook'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logbook $logbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Logbook $logbook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logbook $logbook)
    {
        //
    }
}
