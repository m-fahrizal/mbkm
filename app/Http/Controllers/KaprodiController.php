<?php

namespace App\Http\Controllers;

use App\Models\Kaprodi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KaprodiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.kaprodi.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kaprodi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'username' => $request->nip,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'kaprodi',     
        ]);

        Kaprodi::create([
            'id_user'=>$user->id,
            'nip' => $request->nip,
            'prodi' => $request->prodi,
        ]);
        
        return redirect()->route('user.index')->with('success', 'Berhasil menambahkan kaprodi'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Kaprodi $kaprodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kaprodi $kaprodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kaprodi $kaprodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kaprodi $kaprodi)
    {
        //
    }
}
