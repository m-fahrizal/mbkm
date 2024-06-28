<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dosen.create');
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
            'role' => 'dosen',     
        ]);

        Dosen::create([
            'id_user'=>$user->id,
            'nip' => $request->nip,
            'no_hp' => $request->no_hp,
        ]);
        
        return redirect()->route('user.index')->with('success', 'Berhasil menambahkan dosen');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        //
    }
}
