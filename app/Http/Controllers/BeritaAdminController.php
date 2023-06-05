<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\FotoBerita;

class BeritaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::simplePaginate(4);
        return view('admin.berita.semuaberita', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.tambahberita');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
        
        $validatedData = $request->validate([
            'nik' => 'required',
            'jenis_berita' => 'required',
            'judul' => 'required',
            'isi_berita' => 'required',
        ]);

        Berita::create($validatedData);
     } catch (\Exception $e) {
        dd($e->getMessage());
    }

        return redirect('/admin/semuaberita')->with('success', 'Berita berhasil ditambahkan');
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
        $berita = Berita::findOrFail($id);
        $berita->nik = $request->nik;
        $berita->jenis_berita = $request->jenis_berita;
        $berita->judul = $request->judul;
        $berita->isi_berita = $request->isi_berita;
        $berita->save();
        return redirect()->back()->with('success', 'Berita berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return redirect()->back()->with('success', 'Berita berhasil dihapus');
    }
}
