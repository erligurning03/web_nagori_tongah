<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;

class UmkmController extends Controller
{
    public function index()
    {
        $umkm = Umkm::all();
        return view('umkm.index', compact('umkm'));
    }
    public function create()
    {
        return view('umkm.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_usaha' => 'required',
            'alamat' => 'required',
            'gambar_produk.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'telepon' => 'required',
            'deskripsi' => 'required',
        ]);
        Umkm::create($data);
        return redirect('/admin/umkm')->with('success', 'UMKM berhasil ditambahkan');
    }
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
