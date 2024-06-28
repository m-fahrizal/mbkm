<?php

namespace App\Http\Controllers;

use App\Models\PIC;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PICController extends Controller
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
        return view('admin.pic.create');
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
            'role' => 'pic',     
        ]);

        PIC::create([
            'id_user'=>$user->id,
            'nip' => $request->nip,
            'prodi' => $request->prodi,
            'no_hp' => $request->prodi,
        ]);
        
        return redirect()->route('user.index')->with('success', 'Berhasil menambahkan PIC'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(PIC $pIC)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PIC $pIC)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PIC $pIC)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PIC $pIC)
    {
        //
    }
}
