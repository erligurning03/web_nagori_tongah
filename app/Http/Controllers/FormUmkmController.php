<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;
// use Illuminate\Support\Facades\DB;

class FormUmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $umkm = Umkm::all();
        return view('umkm.formumkm', compact('umkm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('umkm.formumkm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Umkm::create($validatedData);
        
        $validatedData = $request->validate([
            'nik' => 'required',
            'upload_ktp' => 'required',
            'pas_foto' => 'required',
            'nama_usaha' => 'required',
            'alamat' => 'required',
            'telepon' => 'required|numeric',
            'gambar_produk' => 'required',
            'deskripsi' => 'required',
        ]);

        Umkm::create($validatedData);
     } catch (\Exception $e) {
        dd($e->getMessage());
    }

        // return redirect('/umkm/formumkm')->with('success', 'Data umkm berhasil dikirim');
        return redirect()->back()->with('success', 'Data berhasil disimpan.');
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
