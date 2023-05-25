<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerangkatDesa;

class PerangkatDesaBaruController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    
    
    $data = $request->validate([
        'nama' => 'required',
        'jabatan' => 'required',
        'foto' => 'required',
        'id_periode' => 'required'
    ]);
    
    PerangkatDesa::create($data);
    return redirect('/admin/perangkatdesa')->with('success', 'Data perangkat desa berhasil ditambahkan');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
