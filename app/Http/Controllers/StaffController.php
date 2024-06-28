<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
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
        return view('admin.staff.create');
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
            'role' => 'staff',     
        ]);

        Staff::create([
            'id_user'=>$user->id,
            'nip' => $request->nip,
            'prodi' => $request->prodi,
            'no_hp' => $request->prodi,
        ]);
        
        return redirect()->route('user.index')->with('success', 'Berhasil menambahkan Staff'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        //
    }
}
